<?php

namespace com\alibaba\trade\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;


class AlibabaTradeFastAddress extends SDKDomain {


    private $addressId;

    /**
     * @return mixed 收货地址id
     */
    public function getAddressId() {
        return $this->addressId;
    }

    /**
     * 设置收货地址id
     * @param Long $addressId
     * 参数示例：<pre>1234</pre>
     * 此参数必填
     */
    public function setAddressId( $addressId) {
        $this->addressId = $addressId;
    }


    private $fullName;

    /**
     * @return mixed 收货人姓名
     */
    public function getFullName() {
        return $this->fullName;
    }

    /**
     * 设置收货人姓名
     * @param String $fullName
     * 参数示例：<pre>张三</pre>
     * 此参数必填
     */
    public function setFullName( $fullName) {
        $this->fullName = $fullName;
    }


    private $mobile;

    /**
     * @return mixed 手机
     */
    public function getMobile() {
        return $this->mobile;
    }

    /**
     * 设置手机
     * @param String $mobile
     * 参数示例：<pre>15251667788</pre>
     * 此参数必填
     */
    public function setMobile( $mobile) {
        $this->mobile = $mobile;
    }


    private $phone;

    /**
     * @return mixed 电话
     */
    public function getPhone() {
        return $this->phone;
    }

    /**
     * 设置电话
     * @param String $phone
     * 参数示例：<pre>0517-88990077</pre>
     * 此参数必填
     */
    public function setPhone( $phone) {
        $this->phone = $phone;
    }


    private $postCode;

    /**
     * @return mixed 邮编
     */
    public function getPostCode() {
        return $this->postCode;
    }

    /**
     * 设置邮编
     * @param String $postCode
     * 参数示例：<pre>000000</pre>
     * 此参数必填
     */
    public function setPostCode( $postCode) {
        $this->postCode = $postCode;
    }


    private $cityText;

    /**
     * @return mixed 市文本
     */
    public function getCityText() {
        return $this->cityText;
    }

    /**
     * 设置市文本
     * @param String $cityText
     * 参数示例：<pre>杭州市</pre>
     * 此参数必填
     */
    public function setCityText( $cityText) {
        $this->cityText = $cityText;
    }


    private $provinceText;

    /**
     * @return mixed 省份文本
     */
    public function getProvinceText() {
        return $this->provinceText;
    }

    /**
     * 设置省份文本
     * @param String $provinceText
     * 参数示例：<pre>浙江省</pre>
     * 此参数必填
     */
    public function setProvinceText( $provinceText) {
        $this->provinceText = $provinceText;
    }


    private $areaText;

    /**
     * @return mixed 区文本
     */
    public function getAreaText() {
        return $this->areaText;
    }

    /**
     * 设置区文本
     * @param String $areaText
     * 参数示例：<pre>滨江区</pre>
     * 此参数必填
     */
    public function setAreaText( $areaText) {
        $this->areaText = $areaText;
    }


    private $townText;

    /**
     * @return mixed 镇文本
     */
    public function getTownText() {
        return $this->townText;
    }

    /**
     * 设置镇文本
     * @param String $townText
     * 参数示例：<pre>长河镇</pre>
     * 此参数必填
     */
    public function setTownText( $townText) {
        $this->townText = $townText;
    }


    private $address;

    /**
     * @return mixed 街道地址
     */
    public function getAddress() {
        return $this->address;
    }

    /**
     * 设置街道地址
     * @param String $address
     * 参数示例：<pre>网商路699号</pre>
     * 此参数必填
     */
    public function setAddress( $address) {
        $this->address = $address;
    }


    private $districtCode;

    /**
     * @return mixed 地址编码
     */
    public function getDistrictCode() {
        return $this->districtCode;
    }

    /**
     * 设置地址编码
     * @param String $districtCode
     * 参数示例：<pre>310107</pre>
     * 此参数必填
     */
    public function setDistrictCode( $districtCode) {
        $this->districtCode = $districtCode;
    }


	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;

		if (array_key_exists ( "addressId", $this->stdResult )) {
		    $this->addressId = $this->stdResult->{"addressId"};
		}

		if (array_key_exists ( "fullName", $this->stdResult )) {
		    $this->fullName = $this->stdResult->{"fullName"};
		}

		if (array_key_exists ( "mobile", $this->stdResult )) {
		    $this->mobile = $this->stdResult->{"mobile"};
		}

		if (array_key_exists ( "phone", $this->stdResult )) {
		    $this->phone = $this->stdResult->{"phone"};
		}

		if (array_key_exists ( "postCode", $this->stdResult )) {
		    $this->postCode = $this->stdResult->{"postCode"};
		}

		if (array_key_exists ( "cityText", $this->stdResult )) {
		    $this->cityText = $this->stdResult->{"cityText"};
		}

		if (array_key_exists ( "provinceText", $this->stdResult )) {
		    $this->provinceText = $this->stdResult->{"provinceText"};
		}

		if (array_key_exists ( "areaText", $this->stdResult )) {
		    $this->areaText = $this->stdResult->{"areaText"};
		}

		if (array_key_exists ( "townText", $this->stdResult )) {
		    $this->townText = $this->stdResult->{"townText"};
		}

		if (array_key_exists ( "address", $this->stdResult )) {
		    $this->address = $this->stdResult->{"address"};
		}

		if (array_key_exists ( "districtCode", $this->stdResult )) {
		    $this->districtCode = $this->stdResult->{"districtCode"};
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "addressId", $this->arrayResult )) {
		    $this->addressId = $arrayResult['${paramType.paramName}'];
		}

		if (array_key_exists ( "fullName", $this->arrayResult )) {
		    $this->fullName = $arrayResult['${paramType.paramName}'];
		}

		if (array_key_exists ( "mobile", $this->arrayResult )) {
		    $this->mobile = $arrayResult['${paramType.paramName}'];
		}

		if (array_key_exists ( "phone", $this->arrayResult )) {
		    $this->phone = $arrayResult['${paramType.paramName}'];
		}

		if (array_key_exists ( "postCode", $this->arrayResult )) {
		    $this->postCode = $arrayResult['${paramType.paramName}'];
		}

		if (array_key_exists ( "cityText", $this->arrayResult )) {
		    $this->cityText = $arrayResult['${paramType.paramName}'];
		}

		if (array_key_exists ( "provinceText", $this->arrayResult )) {
		    $this->provinceText = $arrayResult['${paramType.paramName}'];
		}

		if (array_key_exists ( "areaText", $this->arrayResult )) {
		    $this->areaText = $arrayResult['${paramType.paramName}'];
		}

		if (array_key_exists ( "townText", $this->arrayResult )) {
		    $this->townText = $arrayResult['${paramType.paramName}'];
		}

		if (array_key_exists ( "address", $this->arrayResult )) {
		    $this->address = $arrayResult['${paramType.paramName}'];
		}

		if (array_key_exists ( "districtCode", $this->arrayResult )) {
		    $this->districtCode = $arrayResult['${paramType.paramName}'];
		}
	}
}
