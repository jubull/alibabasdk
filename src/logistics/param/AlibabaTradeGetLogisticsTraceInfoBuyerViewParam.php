<?php

namespace com\alibaba\logistics\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;


class AlibabaTradeGetLogisticsTraceInfoBuyerViewParam {

    /**
     * @return mixed 该订单下的物流编号
     */
    public function getLogisticsId() {
        return $this->sdkStdResult["logisticsId"];
    }

    /**
     * 设置该订单下的物流编号
     * @param String $logisticsId
     * 参数示例：<pre>AL8234243</pre>
     * 此参数必填
     */
    public function setLogisticsId( $logisticsId) {
        $this->sdkStdResult["logisticsId"] = $logisticsId;
    }

    /**
     * @return mixed 订单号
     */
    public function getOrderId() {
        return $this->sdkStdResult["orderId"];
    }

    /**
     * 设置订单号
     * @param Long $orderId
     * 参数示例：<pre>13342343</pre>
     * 此参数必填
     */
    public function setOrderId( $orderId) {
        $this->sdkStdResult["orderId"] = $orderId;
    }

    /**
     * @return mixed 是1688业务还是icbu业务
     */
    public function getWebSite() {
        return $this->sdkStdResult["webSite"];
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
