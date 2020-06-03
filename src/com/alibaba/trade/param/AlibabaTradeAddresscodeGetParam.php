<?php
namespace com\alibaba\trade\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;


class AlibabaTradeAddresscodeGetParam {


    /**
     * @return mixed 地址code码
     */
    public function getAreaCode() {
        $tempResult = $this->sdkStdResult["areaCode"];
        return $tempResult;
    }

    /**
     * 设置地址code码
     * @param String $areaCode
     * 参数示例：<pre>330108</pre>
     * 此参数必填
     */
    public function setAreaCode( $areaCode) {
        $this->sdkStdResult["areaCode"] = $areaCode;
    }


    /**
     * @return mixed 站点信息，指定调用的API是属于国际站（alibaba）还是1688网站（1688）
     */
    public function getWebSite() {
        $tempResult = $this->sdkStdResult["webSite"];
        return $tempResult;
    }

    /**
     * 设置站点信息，指定调用的API是属于国际站（alibaba）还是1688网站（1688）
     * @param String $webSite
     * 参数示例：<pre>1688</pre>
     * 此参数必填
     */
    public function setWebSite( $webSite) {
        $this->sdkStdResult["webSite"] = $webSite;
    }


    private $sdkStdResult=array();

    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }
}
