<?php

namespace com\alibaba\trade\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use com\alibaba\trade\param\AlibabaOpenplatformTradeModelNativeLogisticsItemsInfo;


class AlibabaOpenplatformTradeModelNativeLogisticsInfo extends SDKDomain {


    private $address;

    /**
     * @return mixed
     */
    public function getAddress() {
        return $this->address;
    }

    /**
     * 设置详细地址
     * @param String $address
     * 参数示例：<pre>杭州市网商路699号</pre>
     * 此参数必填
     */
    public function setAddress( $address) {
        $this->address = $address;
    }


    private $area;

    /**
     * @return mixed 县，区
     */
    public function getArea() {
        return $this->area;
    }

    /**
     * 设置县，区
     * @param String $area
     * 参数示例：<pre>滨江区</pre>
     * 此参数必填
     */
    public function setArea( $area) {
        $this->area = $area;
    }


    private $areaCode;

    /**
     * @return mixed 省市区编码
     */
    public function getAreaCode() {
        return $this->areaCode;
    }

    /**
     * 设置省市区编码
     * @param String $areaCode
     * 参数示例：<pre>330108</pre>
     * 此参数必填
     */
    public function setAreaCode( $areaCode) {
        $this->areaCode = $areaCode;
    }


    private $city;

    /**
     * @return mixed 城市
     */
    public function getCity() {
        return $this->city;
    }

    /**
     * 设置城市
     * @param String $city
     * 参数示例：<pre>杭州市</pre>
     * 此参数必填
     */
    public function setCity( $city) {
        $this->city = $city;
    }


    private $contactPerson;

    /**
     * @return mixed 联系人姓名
     */
    public function getContactPerson() {
        return $this->contactPerson;
    }

    /**
     * 设置联系人姓名
     * @param String $contactPerson
     * 参数示例：<pre>张三</pre>
     * 此参数必填
     */
    public function setContactPerson( $contactPerson) {
        $this->contactPerson = $contactPerson;
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
     * 参数示例：<pre>13988888888</pre>
     * 此参数必填
     */
    public function setMobile( $mobile) {
        $this->mobile = $mobile;
    }


    private $province;

    /**
     * @return mixed 省份
     */
    public function getProvince() {
        return $this->province;
    }

    /**
     * 设置省份
     * @param String $province
     * 参数示例：<pre>浙江省</pre>
     * 此参数必填     */
    public function setProvince( $province) {
        $this->province = $province;
    }


    private $telephone;

    /**
     * @return mixed 电话
     */
    public function getTelephone() {
        return $this->telephone;
    }

    /**
     * 设置电话
     * @param String $telephone
     * 参数示例：<pre>0517-88990077</pre>
     * 此参数必填
     */
    public function setTelephone( $telephone) {
        $this->telephone = $telephone;
    }


    private $zip;

    /**
     * @return mixed 邮编
     */
    public function getZip() {
        return $this->zip;
    }

    /**
     * 设置邮编
     * @param String $zip
     * 参数示例：<pre>000000</pre>
     * 此参数必填
     */
    public function setZip( $zip) {
        $this->zip = $zip;
    }


    private $logisticsItems;

    /**
     * @return mixed 运单明细
     */
    public function getLogisticsItems() {
        return $this->logisticsItems;
    }

    /**
     * 设置运单明细
     * @param \com\alibaba\trade\param\AlibabaOpenplatformTradeModelNativeLogisticsItemsInfo $logisticsItems
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setLogisticsItems(AlibabaOpenplatformTradeModelNativeLogisticsItemsInfo $logisticsItems) {
        $this->logisticsItems = $logisticsItems;
    }


    private $townCode;

    /**
     * @return mixed 镇，街道地址码
     */
    public function getTownCode() {
        return $this->townCode;
    }

    /**
     * 设置镇，街道地址码
     * @param String $townCode
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setTownCode( $townCode) {
        $this->townCode = $townCode;
    }


    private $town;

    /**
     * @return mixed 镇，街道
     */
    public function getTown() {
        return $this->town;
    }

    /**
     * 设置镇，街道
     * @param String $town
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setTown( $town) {
        $this->town = $town;
    }


	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "address", $this->stdResult )) {
		    $this->address = $this->stdResult->{"address"};
		}
		if (array_key_exists ( "area", $this->stdResult )) {
		    $this->area = $this->stdResult->{"area"};
		}
		if (array_key_exists ( "areaCode", $this->stdResult )) {
		    $this->areaCode = $this->stdResult->{"areaCode"};
		}
		if (array_key_exists ( "city", $this->stdResult )) {
		    $this->city = $this->stdResult->{"city"};
		}
		if (array_key_exists ( "contactPerson", $this->stdResult )) {
		    $this->contactPerson = $this->stdResult->{"contactPerson"};
		}
		if (array_key_exists ( "fax", $this->stdResult )) {
		    $this->fax = $this->stdResult->{"fax"};
		}
		if (array_key_exists ( "mobile", $this->stdResult )) {
		    $this->mobile = $this->stdResult->{"mobile"};
		}
		if (array_key_exists ( "province", $this->stdResult )) {
		    $this->province = $this->stdResult->{"province"};
		}
		if (array_key_exists ( "telephone", $this->stdResult )) {
		    $this->telephone = $this->stdResult->{"telephone"};
		}
		if (array_key_exists ( "zip", $this->stdResult )) {
		    $this->zip = $this->stdResult->{"zip"};
		}
		if (array_key_exists ( "logisticsItems", $this->stdResult )) {
		    $logisticsItemsResult=$this->stdResult->{"logisticsItems"};
		    $object = json_decode ( json_encode ( $logisticsItemsResult ), true );
		    $this->logisticsItems = array ();
		    for($i = 0; $i < count ( $object ); $i ++) {
		        $arrayobject = new \ArrayObject($object[$i]);
		        $AlibabaOpenplatformTradeModelNativeLogisticsItemsInfoResult=new AlibabaOpenplatformTradeModelNativeLogisticsItemsInfo();
		        $AlibabaOpenplatformTradeModelNativeLogisticsItemsInfoResult->setArrayResult($arrayobject );
		        $this->logisticsItems [$i] = $AlibabaOpenplatformTradeModelNativeLogisticsItemsInfoResult;
		    }
		}
		if (array_key_exists ( "townCode", $this->stdResult )) {
		    $this->townCode = $this->stdResult->{"townCode"};
		}
		if (array_key_exists ( "town", $this->stdResult )) {
		    $this->town = $this->stdResult->{"town"};
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "address", $this->arrayResult )) {
		    $this->address = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "area", $this->arrayResult )) {
		    $this->area = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "areaCode", $this->arrayResult )) {
		    $this->areaCode = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "city", $this->arrayResult )) {
		    $this->city = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "contactPerson", $this->arrayResult )) {
		    $this->contactPerson = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "fax", $this->arrayResult )) {
		    $this->fax = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "mobile", $this->arrayResult )) {
		    $this->mobile = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "province", $this->arrayResult )) {
		    $this->province = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "telephone", $this->arrayResult )) {
		    $this->telephone = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "zip", $this->arrayResult )) {
		    $this->zip = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "logisticsItems", $this->arrayResult )) {
    		$logisticsItemsResult=$arrayResult['${paramType.paramName}'];
    		$this->logisticsItems = new AlibabaOpenplatformTradeModelNativeLogisticsItemsInfo();
    		$this->logisticsItems->setStdResult ( $logisticsItemsResult);
		}
		if (array_key_exists ( "townCode", $this->arrayResult )) {
		    $this->townCode = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "town", $this->arrayResult )) {
		    $this->town = $arrayResult['${paramType.paramName}'];
		}
	}
}
