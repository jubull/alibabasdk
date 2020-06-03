<?php

namespace com\alibaba\trade\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;


class AlibabaTradeOverseasExtraAddress extends SDKDomain {


    private $channelName;

    /**
     * @return mixed 路线名称
     */
    public function getChannelName() {
        return $this->channelName;
    }

    /**
     * 设置路线名称
     * @param String $channelName
     * 参数示例：<pre>欧洲小包</pre>
     * 此参数必填
     */
    public function setChannelName( $channelName) {
        $this->channelName = $channelName;
    }


    private $channelId;

    /**
     * @return mixed 路线id
     */
    public function getChannelId() {
        return $this->channelId;
    }

    /**
     * 设置路线id
     * @param String $channelId
     * 参数示例：<pre>1</pre>
     * 此参数必填
     */
    public function setChannelId( $channelId) {
        $this->channelId = $channelId;
    }


    private $shippingCompanyId;

    /**
     * @return mixed 货代公司id
     */
    public function getShippingCompanyId() {
        return $this->shippingCompanyId;
    }

    /**
     * 设置货代公司id
     * @param String $shippingCompanyId
     * 参数示例：<pre>222</pre>
     * 此参数必填
     */
    public function setShippingCompanyId( $shippingCompanyId) {
        $this->shippingCompanyId = $shippingCompanyId;
    }


    private $shippingCompanyName;

    /**
     * @return mixed 货代公司名称
     */
    public function getShippingCompanyName() {
        return $this->shippingCompanyName;
    }

    /**
     * 设置货代公司名称
     * @param String $shippingCompanyName
     * 参数示例：<pre>货代公司1</pre>
     * 此参数必填
     */
    public function setShippingCompanyName( $shippingCompanyName) {
        $this->shippingCompanyName = $shippingCompanyName;
    }


    private $countryCode;

    /**
     * @return mixed 国家code
     */
    public function getCountryCode() {
        return $this->countryCode;
    }

    /**
     * 设置国家code
     * @param String $countryCode
     * 参数示例：<pre>UK</pre>
     * 此参数必填
     */
    public function setCountryCode( $countryCode) {
        $this->countryCode = $countryCode;
    }


    private $country;

    /**
     * @return mixed 国家
     */
    public function getCountry() {
        return $this->country;
    }

    /**
     * 设置国家
     * @param String $country
     * 参数示例：<pre>英国</pre>
     * 此参数必填
     */
    public function setCountry( $country) {
        $this->country = $country;
    }


    private $email;

    /**
     * @return mixed 买家邮箱
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * 设置买家邮箱
     * @param String $email
     * 参数示例：<pre>aaa@gmail.com</pre>
     * 此参数必填
     */
    public function setEmail( $email) {
        $this->email = $email;
    }


	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "channelName", $this->stdResult )) {
		    $this->channelName = $this->stdResult->{"channelName"};
		}
		if (array_key_exists ( "channelId", $this->stdResult )) {
		    $this->channelId = $this->stdResult->{"channelId"};
		}
		if (array_key_exists ( "shippingCompanyId", $this->stdResult )) {
		    $this->shippingCompanyId = $this->stdResult->{"shippingCompanyId"};
		}
		if (array_key_exists ( "shippingCompanyName", $this->stdResult )) {
		    $this->shippingCompanyName = $this->stdResult->{"shippingCompanyName"};
		}
		if (array_key_exists ( "countryCode", $this->stdResult )) {
		    $this->countryCode = $this->stdResult->{"countryCode"};
		}
		if (array_key_exists ( "country", $this->stdResult )) {
		    $this->country = $this->stdResult->{"country"};
		}
		if (array_key_exists ( "email", $this->stdResult )) {
		    $this->email = $this->stdResult->{"email"};
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "channelName", $this->arrayResult )) {
		    $this->channelName = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "channelId", $this->arrayResult )) {
		    $this->channelId = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "shippingCompanyId", $this->arrayResult )) {
		    $this->shippingCompanyId = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "shippingCompanyName", $this->arrayResult )) {
		    $this->shippingCompanyName = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "countryCode", $this->arrayResult )) {
		    $this->countryCode = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "country", $this->arrayResult )) {
		    $this->country = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "email", $this->arrayResult )) {
		    $this->email = $arrayResult['${paramType.paramName}'];
		}
	}
}
