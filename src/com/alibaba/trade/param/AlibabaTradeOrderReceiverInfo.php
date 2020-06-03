<?php

namespace com\alibaba\trade\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;


class AlibabaTradeOrderReceiverInfo extends SDKDomain {


    private $toFullName;

    /**
     * @return mixed 收件人
     */
    public function getToFullName() {
        return $this->toFullName;
    }

    /**
     * 设置收件人
     * @param String $toFullName
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setToFullName( $toFullName) {
        $this->toFullName = $toFullName;
    }


    private $toDivisionCode;

    /**
     * @return mixed 收货人地址区域编码
     */
    public function getToDivisionCode() {
        return $this->toDivisionCode;
    }

    /**
     * 设置收货人地址区域编码
     * @param String $toDivisionCode
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setToDivisionCode( $toDivisionCode) {
        $this->toDivisionCode = $toDivisionCode;
    }


    private $toMobile;

    /**
     * @return mixed 收件人移动电话
     */
    public function getToMobile() {
        return $this->toMobile;
    }

    /**
     * 设置收件人移动电话
     * @param String $toMobile
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setToMobile( $toMobile) {
        $this->toMobile = $toMobile;
    }


    private $toPhone;

    /**
     * @return mixed 收件人电话
     */
    public function getToPhone() {
        return $this->toPhone;
    }

    /**
     * 设置收件人电话
     * @param String $toPhone
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setToPhone( $toPhone) {
        $this->toPhone = $toPhone;
    }


    private $toPost;

    /**
     * @return mixed 邮编
     */
    public function getToPost() {
        return $this->toPost;
    }

    /**
     * 设置邮编
     * @param String $toPost
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setToPost( $toPost) {
        $this->toPost = $toPost;
    }


    private $toTownCode;

    /**
     * @return mixed 收货人街道或镇区域编码，可能为空
     */
    public function getToTownCode() {
        return $this->toTownCode;
    }

    /**
     * 设置收货人街道或镇区域编码，可能为空
     * @param String $toTownCode
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setToTownCode( $toTownCode) {
        $this->toTownCode = $toTownCode;
    }


    private $toArea;

    /**
     * @return mixed 收货地址
     */
    public function getToArea() {
        return $this->toArea;
    }

    /**
     * 设置收货地址
     * @param String $toArea
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setToArea( $toArea) {
        $this->toArea = $toArea;
    }


	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "toFullName", $this->stdResult )) {
		    $this->toFullName = $this->stdResult->{"toFullName"};
		}
		if (array_key_exists ( "toDivisionCode", $this->stdResult )) {
		    $this->toDivisionCode = $this->stdResult->{"toDivisionCode"};
		}
		if (array_key_exists ( "toMobile", $this->stdResult )) {
		    $this->toMobile = $this->stdResult->{"toMobile"};
		}
		if (array_key_exists ( "toPhone", $this->stdResult )) {
		    $this->toPhone = $this->stdResult->{"toPhone"};
		}
		if (array_key_exists ( "toPost", $this->stdResult )) {
		    $this->toPost = $this->stdResult->{"toPost"};
		}
		if (array_key_exists ( "toTownCode", $this->stdResult )) {
		    $this->toTownCode = $this->stdResult->{"toTownCode"};
		}
		if (array_key_exists ( "toArea", $this->stdResult )) {
		    $this->toArea = $this->stdResult->{"toArea"};
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "toFullName", $this->arrayResult )) {
		    $this->toFullName = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "toDivisionCode", $this->arrayResult )) {
		    $this->toDivisionCode = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "toMobile", $this->arrayResult )) {
		    $this->toMobile = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "toPhone", $this->arrayResult )) {
		    $this->toPhone = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "toPost", $this->arrayResult )) {
		    $this->toPost = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "toTownCode", $this->arrayResult )) {
		    $this->toTownCode = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "toArea", $this->arrayResult )) {
		    $this->toArea = $arrayResult['${paramType.paramName}'];
		}
	}
}
