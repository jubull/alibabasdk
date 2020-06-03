<?php

namespace com\alibaba\openapi\client;

use com\alibaba\openapi\client\APIId;
use com\alibaba\openapi\client\APIRequest;
use com\alibaba\openapi\client\policy\ClientPolicy;
use com\alibaba\openapi\client\policy\RequestPolicy;
use com\alibaba\openapi\client\serialize\SerializerProvider;
use com\alibaba\openapi\client\util\DateUtil;
use com\alibaba\openapi\client\util\SignatureUtil;


class SyncAPIClient {
	var $clientPolicy;

	/**
	 *
	 * @param ClientPolicy $clientPolicy
	 */
	public function __construct(ClientPolicy $clientPolicy) {
		$this->clientPolicy = $clientPolicy;
	}


	public function execute($namespace, $apiName, $version, $requestDefiniation, $accessToken) {
	    $apiRequest = new APIRequest();
	    $apiId = new APIId($namespace, $apiName, $version);
	    $apiRequest->apiId = $apiId;
	    $apiRequest->accessToken = $accessToken;
	    $apiRequest->requestEntity = $requestDefiniation;
	    return $this->send($apiRequest, new RequestPolicy());
	}

	public function send(APIRequest $request, RequestPolicy $requestPolicy, $toArray = true) {
		$urlRequest = $this->generateRequestPath($request, $requestPolicy, $this->clientPolicy);
		if ($requestPolicy->useHttps) {
			if($this->clientPolicy->httpsPort==443){
				$urlRequest = "https://" . $this->clientPolicy->serverHost . $urlRequest;
			}else{
				$urlRequest = "https://" . $this->clientPolicy->serverHost .":".$this->clientPolicy->httpsPort . $urlRequest;
			}
		} else {
			if($this->clientPolicy->httpPort==80){
				$urlRequest = "http://" . $this->clientPolicy->serverHost . $urlRequest;
			}else{
				$urlRequest = "http://" . $this->clientPolicy->serverHost .":".$this->clientPolicy->httpPort . $urlRequest;
			}
		}

		$serializerTools = SerializerProvider::getSerializer ( $requestPolicy->requestProtocol );
		$requestData = $serializerTools->serialize ( $request->requestEntity );
		$requestData = array_merge ( $requestData, $request->addtionalParams );
		if ($request->accessToken!=null) {
			$requestData ["access_token"] = $request->accessToken;
		}
		if ($requestPolicy->requestSendTimestamp) {
			// $requestData ["_aop_timestamp"] = time();
		}
		$requestData ["_aop_datePattern"] = DateUtil::getDateFormatInServer();
		if ($requestPolicy->useSignture) {
			if ($this->clientPolicy->appKey != null && $this->clientPolicy->secKey != null) {
				$pathToSign = $this->generateAPIPath ( $request, $requestPolicy, $this->clientPolicy );
				$signaturedStr = SignatureUtil::signature ( $pathToSign, $requestData, $requestPolicy, $this->clientPolicy );
				$requestData ["_aop_signature"] = $signaturedStr;
			}
		}
		$ch = curl_init ();
		$paramToSign = "";
		foreach ( $requestData as $k => $v ) {
			$paramToSign = $paramToSign . $k . "=" . urlencode($v) . "&";
		}
		$paramLength = strlen ( $paramToSign );
		if ($paramLength > 0) {
			$paramToSign = substr ( $paramToSign, 0, $paramLength - 1 );
		}
		if ($requestPolicy->httpMethod === "GET") {
			$urlRequest = $urlRequest . "?" . $paramToSign;
			curl_setopt ( $ch, CURLOPT_URL, $urlRequest );
			curl_setopt ( $ch, CURLOPT_HEADER, false );
			curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );
			curl_setopt ( $ch, CURLOPT_CONNECTTIMEOUT, 120 );
			curl_setopt ( $ch, CURLOPT_POST, 0 );
			curl_setopt ( $ch, CURLOPT_SSL_VERIFYHOST, false );
			curl_setopt ( $ch, CURLOPT_SSL_VERIFYPEER, false );
		} else {
			curl_setopt ( $ch, CURLOPT_URL, $urlRequest );
			curl_setopt ( $ch, CURLOPT_HEADER, false );
			curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );
			curl_setopt ( $ch, CURLOPT_CONNECTTIMEOUT, 120 );
			curl_setopt ( $ch, CURLOPT_POST, 1 );
			curl_setopt ( $ch, CURLOPT_POSTFIELDS, $paramToSign );
			curl_setopt ( $ch, CURLOPT_SSL_VERIFYHOST, false );
			curl_setopt ( $ch, CURLOPT_SSL_VERIFYPEER, false );
		}
		$content = curl_exec ( $ch );
		curl_close( $ch );
		return $toArray ? json_decode($content,true) : $content;

	}
	private function generateRequestPath(APIRequest $request, RequestPolicy $requestPolicy, ClientPolicy $clientPolicy) {
		$urlResult = "";
		if ($requestPolicy->accessPrivateApi) {
			$urlResult = "/api";
		} else {
			$urlResult = "/openapi";
		}

		$defs = array (
				$urlResult,
				"/",
				$requestPolicy->requestProtocol,
				"/",
				$request->apiId->version,
				"/",
				$request->apiId->namespace,
				"/",
				$request->apiId->name,
				"/",
				$clientPolicy->appKey
		);

		$urlResult = implode ( $defs );

		return $urlResult;
	}
	private function generateAPIPath(APIRequest $request, RequestPolicy $requestPolicy, ClientPolicy $clientPolicy) {
		$urlResult = "";
		$defs = array (
				$urlResult,
				$requestPolicy->requestProtocol,
				"/",
				$request->apiId->version,
				"/",
				$request->apiId->namespace,
				"/",
				$request->apiId->name,
				"/",
				$clientPolicy->appKey
		);

		$urlResult = implode ( $defs );

		return $urlResult;
	}
}
