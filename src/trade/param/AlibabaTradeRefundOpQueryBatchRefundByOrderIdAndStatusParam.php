<?php
namespace com\alibaba\trade\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;

class AlibabaTradeRefundOpQueryBatchRefundByOrderIdAndStatusParam {


    /**
     * @return mixed 订单id
     */
    public function getOrderId() {
        return $this->sdkStdResult["orderId"];
    }

    /**
     * 设置订单id
     * @param String $orderId
     * 参数示例：<pre>151267031**8969811</pre>
     * 此参数必填
     */
    public function setOrderId( $orderId) {
        $this->sdkStdResult["orderId"] = $orderId;
    }


    /**
     * @return mixed 1：活动；3:退款成功（只支持退款中和退款成功）
     */
    public function getQueryType() {
        return $this->sdkStdResult["queryType"];
    }

    /**
     * 设置1：活动；3:退款成功（只支持退款中和退款成功）
     * @param String $queryType
     * 参数示例：<pre>3</pre>
     * 此参数必填
     */
    public function setQueryType( $queryType) {
        $this->sdkStdResult["queryType"] = $queryType;
    }


    private $sdkStdResult=array();

    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }
}
