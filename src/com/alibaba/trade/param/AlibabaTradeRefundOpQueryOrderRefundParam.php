<?php

namespace com\alibaba\trade\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;


class AlibabaTradeRefundOpQueryOrderRefundParam {


    /**
     * @return mixed 退款单业务主键 TQ+ID
     */
    public function getRefundId() {
        return $this->sdkStdResult["refundId"];
    }

    /**
     * 设置退款单业务主键 TQ+ID
     * @param String $refundId
     * 参数示例：<pre>TQ11173622***991577</pre>
     * 此参数必填
     */
    public function setRefundId( $refundId) {
        $this->sdkStdResult["refundId"] = $refundId;
    }


    /**
     * @return mixed 需要退款单的超时信息
     */
    public function getNeedTimeOutInfo() {
        return $this->sdkStdResult["needTimeOutInfo"];
    }

    /**
     * 设置需要退款单的超时信息
     * @param Boolean $needTimeOutInfo
     * 参数示例：<pre>true</pre>
     * 此参数必填
     */
    public function setNeedTimeOutInfo( $needTimeOutInfo) {
        $this->sdkStdResult["needTimeOutInfo"] = $needTimeOutInfo;
    }


    /**
     * @return mixed 需要退款单伴随的所有退款操作信息
     */
    public function getNeedOrderRefundOperation() {
        return $this->sdkStdResult["needOrderRefundOperation"];
    }

    /**
     * 设置需要退款单伴随的所有退款操作信息
     * @param Boolean $needOrderRefundOperation
     * 参数示例：<pre>true</pre>
     * 此参数必填
     */
    public function setNeedOrderRefundOperation( $needOrderRefundOperation) {
        $this->sdkStdResult["needOrderRefundOperation"] = $needOrderRefundOperation;
    }


    private $sdkStdResult=array();

    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }
}
