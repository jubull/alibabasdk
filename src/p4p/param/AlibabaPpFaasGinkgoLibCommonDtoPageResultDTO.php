<?php

namespace com\alibaba\p4p\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use com\alibaba\p4p\param\AlibabaPpFaasGinkgoLibUnionDtoRecommendOfferDTO;


class AlibabaPpFaasGinkgoLibCommonDtoPageResultDTO extends SDKDomain {


    private $success;

    /**
     * @return mixed
     */
    public function getSuccess() {
        return $this->success;
    }

    /**
     * 设置1
     * @param Boolean $success
     * 参数示例：<pre>1</pre>
     * 此参数必填
	 */
    public function setSuccess( $success) {
        $this->success = $success;
    }


    private $errorCode;

	/**
	 * @return mixed
	 */
	public function getErrorCode() {
        return $this->errorCode;
    }

    /**
     * 设置1
     * @param String $errorCode
     * 参数示例：<pre>1</pre>
     * 此参数必填
	 */
    public function setErrorCode( $errorCode) {
        $this->errorCode = $errorCode;
    }


    private $errorMsg;

	/**
	 * @return mixed
	 */
	public function getErrorMsg() {
        return $this->errorMsg;
    }

    /**
     * 设置1
     * @param String $errorMsg
     * 参数示例：<pre>1</pre>
     * 此参数必填
	 */
    public function setErrorMsg( $errorMsg) {
        $this->errorMsg = $errorMsg;
    }


    private $result;

	/**
	 * @return mixed
	 */
	public function getResult() {
        return $this->result;
    }

	/**
	 * 设置1
	 * @param \com\alibaba\p4p\param\AlibabaPpFaasGinkgoLibUnionDtoRecommendOfferDTO $result
	 * 参数示例：<pre>1</pre>
	 * 此参数必填
	 */
    public function setResult(AlibabaPpFaasGinkgoLibUnionDtoRecommendOfferDTO $result) {
        $this->result = $result;
    }


	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "success", $this->stdResult )) {
			$this->success = $this->stdResult->{"success"};
		}
		if (array_key_exists ( "errorCode", $this->stdResult )) {
			$this->errorCode = $this->stdResult->{"errorCode"};
		}
		if (array_key_exists ( "errorMsg", $this->stdResult )) {
			$this->errorMsg = $this->stdResult->{"errorMsg"};
		}
		if (array_key_exists ( "result", $this->stdResult )) {
			$resultResult=$this->stdResult->{"result"};
			$object = json_decode(json_encode($resultResult), true);
			$this->result = array ();
			for($i = 0; $i < count ( $object ); $i ++) {
				$arrayobject = new \ArrayObject($object[$i]);
				$AlibabaPpFaasGinkgoLibUnionDtoRecommendOfferDTOResult=new AlibabaPpFaasGinkgoLibUnionDtoRecommendOfferDTO();
				$AlibabaPpFaasGinkgoLibUnionDtoRecommendOfferDTOResult->setArrayResult($arrayobject );
				$this->result [$i] = $AlibabaPpFaasGinkgoLibUnionDtoRecommendOfferDTOResult;
			}
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "success", $this->arrayResult )) {
			$this->success = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "errorCode", $this->arrayResult )) {
			$this->errorCode = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "errorMsg", $this->arrayResult )) {
			$this->errorMsg = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "result", $this->arrayResult )) {
    		$resultResult=$arrayResult['${paramType.paramName}'];
    		$this->result = new AlibabaPpFaasGinkgoLibUnionDtoRecommendOfferDTO();
    		$this->result->setStdResult ( $resultResult);
		}
	}
}
