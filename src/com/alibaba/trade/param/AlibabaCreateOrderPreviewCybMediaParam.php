<?php

namespace com\alibaba\trade\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use com\alibaba\trade\param\AlibabaTradeFastAddress;
use com\alibaba\trade\param\AlibabaTradeFastCargo;


class AlibabaCreateOrderPreviewCybMediaParam {

    /**
     * @return mixed 收货地址信息
     */
    public function getAddressParam() {
        return $this->sdkStdResult["addressParam"];
    }

    /**
     * 设置收货地址信息
     * @param AlibabaTradeFastAddress $addressParam
     * 参数示例：<pre>{"address":"网商路699号","phone": "0517-88990077","mobile": "15251667788","fullName": "张三","postCode": "000000","areaText": "滨江区","townText": "","cityText": "杭州市","provinceText": "浙江省"}</pre>
     * 此参数必填
     */
    public function setAddressParam(AlibabaTradeFastAddress $addressParam) {
        $this->sdkStdResult["addressParam"] = $addressParam;
    }

    /**
     * @return mixed 商品信息
     */
    public function getCargoParamList() {
        return $this->sdkStdResult["cargoParamList"];
    }

    /**
     * 设置商品信息
     * @param array include @see AlibabaTradeFastCargo[] $cargoParamList
     * 参数示例：<pre>[{"specId": "b266e0726506185beaf205cbae88530d","quantity": 5,"offerId": 554456348334},{"specId": "2ba3d63866a71fbae83909d9b4814f01","quantity": 6,"offerId": 554456348334}]</pre>
     * 此参数必填
     */
    public function setCargoParamList(AlibabaTradeFastCargo $cargoParamList) {
        $this->sdkStdResult["cargoParamList"] = $cargoParamList;
    }

    private $sdkStdResult=array();

    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
