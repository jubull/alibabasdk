<?php

namespace com\alibaba\trade\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;

class AlibabaTradeFastOffer extends SDKDomain {


    private $offerId;

    /**
     * @return mixed 下单失败的商品
     */
    public function getOfferId() {
        return $this->offerId;
    }

    /**
     * 设置下单失败的商品
     * @param String $offerId
     * 参数示例：<pre>554456348334</pre>
     * 此参数必填
     */
    public function setOfferId( $offerId) {
        $this->offerId = $offerId;
    }


    private $specId;

    /**
     * @return mixed 下单失败商品的规格ID
     */
    public function getSpecId() {
        return $this->specId;
    }

    /**
     * 设置下单失败商品的规格ID
     * @param String $specId
     * 参数示例：<pre>b266e0726506185beaf205cbae88530d</pre>
     * 此参数必填
     */
    public function setSpecId( $specId) {
        $this->specId = $specId;
    }


    private $errorCode;

    /**
     * @return mixed 下单失败的错误编码
     */
    public function getErrorCode() {
        return $this->errorCode;
    }

    /**
     * 设置下单失败的错误编码
     * @param String $errorCode
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setErrorCode( $errorCode) {
        $this->errorCode = $errorCode;
    }


    private $errorMessage;

    /**
     * @return mixed 下单失败的错误描述
     */
    public function getErrorMessage() {
        return $this->errorMessage;
    }

    /**
     * 设置下单失败的错误描述
     * @param String $errorMessage
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setErrorMessage( $errorMessage) {
        $this->errorMessage = $errorMessage;
    }


	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "offerId", $this->stdResult )) {
		    $this->offerId = $this->stdResult->{"offerId"};
		}
		if (array_key_exists ( "specId", $this->stdResult )) {
		    $this->specId = $this->stdResult->{"specId"};
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
		if (array_key_exists ( "offerId", $this->arrayResult )) {
		    $this->offerId = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "specId", $this->arrayResult )) {
		    $this->specId = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "errorCode", $this->arrayResult )) {
		    $this->errorCode = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "errorMessage", $this->arrayResult )) {
		    $this->errorMessage = $arrayResult['${paramType.paramName}'];
		}
	}
}
