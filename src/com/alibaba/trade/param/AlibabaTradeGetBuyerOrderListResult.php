<?php

namespace com\alibaba\trade\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use com\alibaba\trade\param\AlibabaOpenplatformTradeModelTradeInfo;


class AlibabaTradeGetBuyerOrderListResult {

    private $result;

    /**
     * @return mixed 查询返回列表
     */
    public function getResult() {
        return $this->result;
    }

	/**
	 * 设置查询返回列表
	 * @param \com\alibaba\trade\param\AlibabaOpenplatformTradeModelTradeInfo $result
	 * 此参数必填
	 */
    public function setResult(AlibabaOpenplatformTradeModelTradeInfo $result) {
        $this->result = $result;
    }


    private $errorCode;

	/**
	 * @return mixed 错误码
	 */
	public function getErrorCode() {
        return $this->errorCode;
    }

    /**
     * 设置错误码
     * @param String $errorCode
     * 此参数必填
	 */
    public function setErrorCode( $errorCode) {
        $this->errorCode = $errorCode;
    }


    private $errorMessage;

	/**
	 * @return mixed 错误信息
	 */
	public function getErrorMessage() {
        return $this->errorMessage;
    }

    /**
     * 设置错误信息
     * @param String $errorMessage
     * 此参数必填
	 */
    public function setErrorMessage( $errorMessage) {
        $this->errorMessage = $errorMessage;
    }


    private $totalRecord;

	/**
	 * @return mixed 总记录数
	 */
	public function getTotalRecord() {
        return $this->totalRecord;
    }

    /**
     * 设置总记录数
     * @param Long $totalRecord
     * 此参数必填
	 */
    public function setTotalRecord( $totalRecord) {
        $this->totalRecord = $totalRecord;
    }


	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "result", $this->stdResult )) {
			$resultResult=$this->stdResult->{"result"};
			$object = json_decode(json_encode($resultResult), true);
			$this->result = array ();
			for($i = 0; $i < count ( $object ); $i ++) {
				$arrayobject = new \ArrayObject($object[$i]);
				$AlibabaOpenplatformTradeModelTradeInfoResult=new AlibabaOpenplatformTradeModelTradeInfo();
				$AlibabaOpenplatformTradeModelTradeInfoResult->setArrayResult($arrayobject );
				$this->result [$i] = $AlibabaOpenplatformTradeModelTradeInfoResult;
			}
		}
		if (array_key_exists ( "errorCode", $this->stdResult )) {
			$this->errorCode = $this->stdResult->{"errorCode"};
		}
		if (array_key_exists ( "errorMessage", $this->stdResult )) {
			$this->errorMessage = $this->stdResult->{"errorMessage"};
		}
		if (array_key_exists ( "totalRecord", $this->stdResult )) {
			$this->totalRecord = $this->stdResult->{"totalRecord"};
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "result", $this->arrayResult )) {
    		$resultResult=$arrayResult['${paramType.paramName}'];
    		$this->result = new AlibabaOpenplatformTradeModelTradeInfo();
    		$this->result->setStdResult ( $resultResult);
		}
		if (array_key_exists ( "errorCode", $this->arrayResult )) {
			$this->errorCode = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "errorMessage", $this->arrayResult )) {
			$this->errorMessage = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "totalRecord", $this->arrayResult )) {
			$this->totalRecord = $arrayResult['${paramType.paramName}'];
		}
	}
}
