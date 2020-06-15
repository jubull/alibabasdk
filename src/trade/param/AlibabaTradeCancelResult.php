<?php

namespace com\alibaba\trade\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;

class AlibabaTradeCancelResult {


    private $success;

    /**
     * @return mixed 是否处理成功：true为成功，false为失败，失败原因见error
     */
    public function getSuccess() {
        return $this->success;
    }

    /**
     * 设置是否处理成功：true为成功，false为失败，失败原因见error
     * @param Boolean $success
     * 此参数必填
     */
    public function setSuccess( $success) {
        $this->success = $success;
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

	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "success", $this->stdResult )) {
		    $this->success = $this->stdResult->{"success"};
		}
		if (array_key_exists ( "errorCode", $this->stdResult )) {
		    $this->errorCode = $this->stdResult->{"errorCode"};
		}
		if (array_key_exists ( "errorMessage", $this->stdResult )) {
		    $this->errorMessage = $this->stdResult->{"errorMessage"};
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
		if (array_key_exists ( "errorMessage", $this->arrayResult )) {
		    $this->errorMessage = $arrayResult['${paramType.paramName}'];
		}
	}
}
