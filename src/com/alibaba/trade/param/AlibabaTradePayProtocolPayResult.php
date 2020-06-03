<?php

namespace com\alibaba\trade\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;

class AlibabaTradePayProtocolPayResult {


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


    private $code;

    /**
     * @return mixed 错误码
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * 设置错误码
     * @param String $code
     * 此参数必填
     */
    public function setCode( $code) {
        $this->code = $code;
    }


    private $message;

    /**
     * @return mixed 错误描述
     */
    public function getMessage() {
        return $this->message;
    }

    /**
     * 设置错误描述
     * @param String $message
     * 此参数必填
     */
    public function setMessage( $message) {
        $this->message = $message;
    }


	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "success", $this->stdResult )) {
		    $this->success = $this->stdResult->{"success"};
		}
		if (array_key_exists ( "code", $this->stdResult )) {
		    $this->code = $this->stdResult->{"code"};
		}
		if (array_key_exists ( "message", $this->stdResult )) {
		    $this->message = $this->stdResult->{"message"};
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "success", $this->arrayResult )) {
		    $this->success = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "code", $this->arrayResult )) {
		    $this->code = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "message", $this->arrayResult )) {
		    $this->message = $arrayResult['${paramType.paramName}'];
		}
	}
}
