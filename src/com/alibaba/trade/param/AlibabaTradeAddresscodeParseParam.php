<?php

namespace com\alibaba\trade\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;


class AlibabaTradeAddresscodeParseParam {


    /**
     * @return mixed 地址信息
     */
    public function getAddressInfo() {
        return $this->sdkStdResult["addressInfo"];
    }

    /**
     * 设置地址信息
     * @param String $addressInfo
     * 参数示例：<pre>浙江省 杭州市 滨江区网商路699号</pre>
     * 此参数必填
     */
    public function setAddressInfo( $addressInfo) {
        $this->sdkStdResult["addressInfo"] = $addressInfo;
    }


    private $sdkStdResult=array();

    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }
}
