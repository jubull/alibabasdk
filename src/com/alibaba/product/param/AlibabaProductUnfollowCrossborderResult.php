<?php

namespace com\alibaba\product\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;


class AlibabaProductUnfollowCrossborderResult {


    private $code;

	/**
	 * @return mixed code,0表示成功
	 */
	public function getCode() {
        return $this->code;
    }

    /**
     * 设置code,0表示成功
     * @param Integer $code
     * 此参数必填
	 */
    public function setCode( $code) {
        $this->code = $code;
    }


    private $message;

	/**
	 * @return mixed 结果的描述
	 */
	public function getMessage() {
        return $this->message;
    }

    /**
     * 设置结果的描述
     * @param String $message
     * 此参数必填
	 */
    public function setMessage( $message) {
        $this->message = $message;
    }


	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
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
		if (array_key_exists ( "code", $this->arrayResult )) {
			$this->code = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "message", $this->arrayResult )) {
			$this->message = $arrayResult['${paramType.paramName}'];
		}
	}
}
