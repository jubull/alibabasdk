<?php

namespace com\alibaba\trade\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;

class AlibabaTradePayProtocolPayParam {


    /**
     * @return mixed 订单ID
     */
    public function getOrderId() {
        return $this->sdkStdResult["orderId"];
    }

    /**
     * 设置订单ID
     * @param Long $orderId
     * 参数示例：<pre>123455678</pre>
     * 此参数必填
     */
    public function setOrderId( $orderId) {
        $this->sdkStdResult["orderId"] = $orderId;
    }


    private $sdkStdResult=array();

    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }
}
