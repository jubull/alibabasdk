<?php

namespace com\alibaba\logistics\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;


class AlibabaLogisticsOpenPlatformLogisticsSender extends SDKDomain {


    private $senderName;

    /**
     * @return mixed 发件人姓名
     */
    public function getSenderName() {
        return $this->senderName;
    }

    /**
     * 设置发件人姓名
     * @param String $senderName
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setSenderName( $senderName) {
        $this->senderName = $senderName;
    }


    private $senderPhone;

    /**
     * @return mixed 发件人电话
     */
    public function getSenderPhone() {
        return $this->senderPhone;
    }

    /**
     * 设置发件人电话
     * @param String $senderPhone
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setSenderPhone( $senderPhone) {
        $this->senderPhone = $senderPhone;
    }


    private $senderMobile;

    /**
     * @return mixed 发件人电话
     */
    public function getSenderMobile() {
        return $this->senderMobile;
    }

    /**
     * 设置发件人电话
     * @param String $senderMobile
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setSenderMobile( $senderMobile) {
        $this->senderMobile = $senderMobile;
    }


    private $encrypt;

    /**
     * @return mixed
     */
    public function getEncrypt() {
        return $this->encrypt;
    }

    /**
     * 设置
     * @param String $encrypt
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setEncrypt( $encrypt) {
        $this->encrypt = $encrypt;
    }


    private $senderProvinceCode;

    /**
     * @return mixed 省编码
     */
    public function getSenderProvinceCode() {
        return $this->senderProvinceCode;
    }

    /**
     * 设置省编码
     * @param String $senderProvinceCode
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setSenderProvinceCode( $senderProvinceCode) {
        $this->senderProvinceCode = $senderProvinceCode;
    }


    private $senderCityCode;

    /**
     * @return mixed 城市编码
     */
    public function getSenderCityCode() {
        return $this->senderCityCode;
    }

    /**
     * 设置城市编码
     * @param String $senderCityCode
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setSenderCityCode( $senderCityCode) {
        $this->senderCityCode = $senderCityCode;
    }


    private $senderCountyCode;

    /**
     * @return mixed 国家编码
     */
    public function getSenderCountyCode() {
        return $this->senderCountyCode;
    }

    /**
     * 设置国家编码
     * @param String $senderCountyCode
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setSenderCountyCode( $senderCountyCode) {
        $this->senderCountyCode = $senderCountyCode;
    }


    private $senderAddress;

    /**
     * @return mixed 发货人地址
     */
    public function getSenderAddress() {
        return $this->senderAddress;
    }

    /**
     * 设置发货人地址
     * @param String $senderAddress
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setSenderAddress( $senderAddress) {
        $this->senderAddress = $senderAddress;
    }


    private $senderProvince;

    /**
     * @return mixed 省份
     */
    public function getSenderProvince() {
        return $this->senderProvince;
    }

    /**
     * 设置省份
     * @param String $senderProvince
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setSenderProvince( $senderProvince) {
        $this->senderProvince = $senderProvince;
    }


    private $senderCity;

    /**
     * @return mixed 城市
     */
    public function getSenderCity() {
        return $this->senderCity;
    }

    /**
     * 设置城市
     * @param String $senderCity
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setSenderCity( $senderCity) {
        $this->senderCity = $senderCity;
    }


    private $senderCounty;

    /**
     * @return mixed 国家
     */
    public function getSenderCounty() {
        return $this->senderCounty;
    }

    /**
     * 设置国家
     * @param String $senderCounty
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setSenderCounty( $senderCounty) {
        $this->senderCounty = $senderCounty;
    }


	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;

		if (array_key_exists ( "senderName", $this->stdResult )) {
		    $this->senderName = $this->stdResult->{"senderName"};
		}

		if (array_key_exists ( "senderPhone", $this->stdResult )) {
		    $this->senderPhone = $this->stdResult->{"senderPhone"};
		}

		if (array_key_exists ( "senderMobile", $this->stdResult )) {
		    $this->senderMobile = $this->stdResult->{"senderMobile"};
		}

		if (array_key_exists ( "encrypt", $this->stdResult )) {
		    $this->encrypt = $this->stdResult->{"encrypt"};
		}

		if (array_key_exists ( "senderProvinceCode", $this->stdResult )) {
		    $this->senderProvinceCode = $this->stdResult->{"senderProvinceCode"};
		}

		if (array_key_exists ( "senderCityCode", $this->stdResult )) {
		    $this->senderCityCode = $this->stdResult->{"senderCityCode"};
		}

		if (array_key_exists ( "senderCountyCode", $this->stdResult )) {
		    $this->senderCountyCode = $this->stdResult->{"senderCountyCode"};
		}

		if (array_key_exists ( "senderAddress", $this->stdResult )) {
		    $this->senderAddress = $this->stdResult->{"senderAddress"};
		}

		if (array_key_exists ( "senderProvince", $this->stdResult )) {
		    $this->senderProvince = $this->stdResult->{"senderProvince"};
		}

		if (array_key_exists ( "senderCity", $this->stdResult )) {
		    $this->senderCity = $this->stdResult->{"senderCity"};
		}

		if (array_key_exists ( "senderCounty", $this->stdResult )) {
		    $this->senderCounty = $this->stdResult->{"senderCounty"};
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;

		if (array_key_exists ( "senderName", $this->arrayResult )) {
		    $this->senderName = $arrayResult['${paramType.paramName}'];
		}

		if (array_key_exists ( "senderPhone", $this->arrayResult )) {
		    $this->senderPhone = $arrayResult['${paramType.paramName}'];
		}

		if (array_key_exists ( "senderMobile", $this->arrayResult )) {
		    $this->senderMobile = $arrayResult['${paramType.paramName}'];
		}

		if (array_key_exists ( "encrypt", $this->arrayResult )) {
		    $this->encrypt = $arrayResult['${paramType.paramName}'];
		}

		if (array_key_exists ( "senderProvinceCode", $this->arrayResult )) {
		    $this->senderProvinceCode = $arrayResult['${paramType.paramName}'];
		}

		if (array_key_exists ( "senderCityCode", $this->arrayResult )) {
		    $this->senderCityCode = $arrayResult['${paramType.paramName}'];
		}

		if (array_key_exists ( "senderCountyCode", $this->arrayResult )) {
		    $this->senderCountyCode = $arrayResult['${paramType.paramName}'];
		}

		if (array_key_exists ( "senderAddress", $this->arrayResult )) {
		    $this->senderAddress = $arrayResult['${paramType.paramName}'];
		}

		if (array_key_exists ( "senderProvince", $this->arrayResult )) {
		    $this->senderProvince = $arrayResult['${paramType.paramName}'];
		}

		if (array_key_exists ( "senderCity", $this->arrayResult )) {
		    $this->senderCity = $arrayResult['${paramType.paramName}'];
		}

		if (array_key_exists ( "senderCounty", $this->arrayResult )) {
		    $this->senderCounty = $arrayResult['${paramType.paramName}'];
		}
	}
}
