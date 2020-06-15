<?php

namespace com\alibaba\logistics\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;


class AlibabaTradeGetLogisticsInfosBuyerViewParam {

    /**
     * @return mixed 订单号
     */
    public function getOrderId() {
        $tempResult = $this->sdkStdResult["orderId"];
        return $tempResult;
    }

    /**
     * 设置订单号
     * @param Long $orderId
     * 参数示例：<pre>1221434</pre>
     * 此参数必填
     *
     */
    public function setOrderId( $orderId) {
        $this->sdkStdResult["orderId"] = $orderId;
    }

    /**
     * @return mixed 需要返回的字段，目前有:company.name,sender,receiver,sendgood。返回的字段要用英文逗号分隔开
     */
    public function getFields() {
        $tempResult = $this->sdkStdResult["fields"];
        return $tempResult;
    }

    /**
     * 设置需要返回的字段，目前有:company.name,sender,receiver,sendgood。返回的字段要用英文逗号分隔开
     * @param String $fields
     * 参数示例：<pre>company,name,sender,receiver,sendgood</pre>
     * 此参数必填
     */
    public function setFields( $fields) {
        $this->sdkStdResult["fields"] = $fields;
    }

    /**
     * @return mixed 是1688业务还是icbu业务
     */
    public function getWebSite() {
        $tempResult = $this->sdkStdResult["webSite"];
        return $tempResult;
    }

    /**
     * 设置是1688业务还是icbu业务
     * @param String $webSite
     * 参数示例：<pre>1688或者alibaba</pre>
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
