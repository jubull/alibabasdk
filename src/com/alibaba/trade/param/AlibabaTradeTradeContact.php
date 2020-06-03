<?php

namespace com\alibaba\trade\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;

class AlibabaTradeTradeContact extends SDKDomain {


    private $phone;

    /**
     * @return mixed 联系电话
     */
    public function getPhone() {
        return $this->phone;
    }

    /**
     * 设置联系电话
     * @param String $phone
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setPhone( $phone) {
        $this->phone = $phone;
    }


    private $fax;

    /**
     * @return mixed 传真
     */
    public function getFax() {
        return $this->fax;
    }

    /**
     * 设置传真
     * @param String $fax
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setFax( $fax) {
        $this->fax = $fax;
    }


    private $email;

    /**
     * @return mixed 邮箱
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * 设置邮箱
     * @param String $email
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setEmail( $email) {
        $this->email = $email;
    }


    private $imInPlatform;

    /**
     * @return mixed 联系人在平台的IM账号
     */
    public function getImInPlatform() {
        return $this->imInPlatform;
    }

    /**
     * 设置联系人在平台的IM账号
     * @param String $imInPlatform
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setImInPlatform( $imInPlatform) {
        $this->imInPlatform = $imInPlatform;
    }


    private $name;

    /**
     * @return mixed 联系人名称
     */
    public function getName() {
        return $this->name;
    }

    /**
     * 设置联系人名称
     * @param String $name
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setName( $name) {
        $this->name = $name;
    }


    private $mobile;

    /**
     * @return mixed 联系人手机号
     */
    public function getMobile() {
        return $this->mobile;
    }

    /**
     * 设置联系人手机号
     * @param String $mobile
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setMobile( $mobile) {
        $this->mobile = $mobile;
    }


    private $companyName;

    /**
     * @return mixed 公司名称
     */
    public function getCompanyName() {
        return $this->companyName;
    }

    /**
     * 设置公司名称
     * @param String $companyName
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setCompanyName( $companyName) {
        $this->companyName = $companyName;
    }


	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "phone", $this->stdResult )) {
		    $this->phone = $this->stdResult->{"phone"};
		}
		if (array_key_exists ( "fax", $this->stdResult )) {
		    $this->fax = $this->stdResult->{"fax"};
		}
		if (array_key_exists ( "email", $this->stdResult )) {
		    $this->email = $this->stdResult->{"email"};
		}
		if (array_key_exists ( "imInPlatform", $this->stdResult )) {
		    $this->imInPlatform = $this->stdResult->{"imInPlatform"};
		}
		if (array_key_exists ( "name", $this->stdResult )) {
		    $this->name = $this->stdResult->{"name"};
		}
		if (array_key_exists ( "mobile", $this->stdResult )) {
		    $this->mobile = $this->stdResult->{"mobile"};
		}
		if (array_key_exists ( "companyName", $this->stdResult )) {
		    $this->companyName = $this->stdResult->{"companyName"};
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "phone", $this->arrayResult )) {
		    $this->phone = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "fax", $this->arrayResult )) {
		    $this->fax = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "email", $this->arrayResult )) {
		    $this->email = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "imInPlatform", $this->arrayResult )) {
		    $this->imInPlatform = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "name", $this->arrayResult )) {
		    $this->name = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "mobile", $this->arrayResult )) {
		    $this->mobile = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "companyName", $this->arrayResult )) {
		    $this->companyName = $arrayResult['${paramType.paramName}'];
		}
	}
}
