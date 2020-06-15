<?php

namespace com\alibaba\trade\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;

class AlibabaTradeGetRefundReasonListParam {


    /**
     * @return mixed 主订单id
     */
    public function getOrderId() {
        return $this->sdkStdResult["orderId"];
    }

    /**
     * 设置主订单id
     * @param Long $orderId
     * 参数示例：<pre> </pre>
     * 此参数必填
     *
     */
    public function setOrderId( $orderId) {
        $this->sdkStdResult["orderId"] = $orderId;
    }


    /**
     * @return mixed 子订单id
     */
    public function getOrderEntryIds() {
        return $this->sdkStdResult["orderEntryIds"];
    }

    /**
     * 设置子订单id
     * @param array include @see Long[] $orderEntryIds
     * 参数示例：<pre> </pre>
     * 此参数必填
     */
    public function setOrderEntryIds( $orderEntryIds) {
        $this->sdkStdResult["orderEntryIds"] = $orderEntryIds;
    }


    /**
     * @return mixed 货物状态
     */
    public function getGoodsStatus() {
        return $this->sdkStdResult["goodsStatus"];
    }

    /**
     * 设置货物状态
     * @param String $goodsStatus
     * 参数示例：<pre>
     * 售中等待买家发货:”refundWaitSellerSend";
     * 售中等待买家收货:"refundWaitBuyerReceive";
     * 售中已收货（未确认完成交易）:"refundBuyerReceived"
     * 售后未收货:"aftersaleBuyerNotReceived";
     * 售后已收到货:"aftersaleBuyerReceived"
     * </pre>
     * 此参数必填
     */
    public function setGoodsStatus( $goodsStatus) {
        $this->sdkStdResult["goodsStatus"] = $goodsStatus;
    }


    private $sdkStdResult=array();

    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }
}
