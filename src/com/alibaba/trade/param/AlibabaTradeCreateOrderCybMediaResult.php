<?php

namespace com\alibaba\trade\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use com\alibaba\trade\param\AlibabaTradeFastResult;


class AlibabaTradeCreateOrderCybMediaResult {


    private $result;

    /**
     * @return mixed 返回结果
     */
    public function getResult() {
        return $this->result;
    }

    /**
     * 设置返回结果
     * @param \com\alibaba\trade\param\AlibabaTradeFastResult $result
     * 此参数必填
     */
    public function setResult(AlibabaTradeFastResult $result) {
        $this->result = $result;
    }


    private $success;

    /**
     * @return mixed 是否成功
     */
    public function getSuccess() {
        return $this->success;
    }

    /**
     * 设置是否成功
     * @param Boolean $success
     * 此参数必填
     */
    public function setSuccess( $success) {
        $this->success = $success;
    }


    private $errorMsg;

    /**
     * @return mixed 错误信息
     */
    public function getErrorMsg() {
        return $this->errorMsg;
    }

    /**
     * 设置错误信息
     * @param String $errorMsg
     * 此参数必填
     */
    public function setErrorMsg( $errorMsg) {
        $this->errorMsg = $errorMsg;
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


	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "result", $this->stdResult )) {
		    $resultResult=$this->stdResult->{"result"};
		    $this->result = new AlibabaTradeFastResult();
		    $this->result->setStdResult ( $resultResult);
		}
		if (array_key_exists ( "success", $this->stdResult )) {
		    $this->success = $this->stdResult->{"success"};
		}
		if (array_key_exists ( "errorMsg", $this->stdResult )) {
		    $this->errorMsg = $this->stdResult->{"errorMsg"};
		}
		if (array_key_exists ( "errorCode", $this->stdResult )) {
		    $this->errorCode = $this->stdResult->{"errorCode"};
		}
	}

	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "result", $this->arrayResult )) {
    		$resultResult=$arrayResult['${paramType.paramName}'];
    		$this->result = new AlibabaTradeFastResult();
    		$this->result->setStdResult ( $resultResult);
		}
		if (array_key_exists ( "success", $this->arrayResult )) {
		    $this->success = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "errorMsg", $this->arrayResult )) {
		    $this->errorMsg = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "errorCode", $this->arrayResult )) {
		    $this->errorCode = $arrayResult['${paramType.paramName}'];
		}
	}
}
