<?php

namespace com\alibaba\trade\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;


class AlibabaTradeRefundOpQueryOrderRefundOperationListParam {


    /**
     * @return mixed 退款单Id
     */
    public function getRefundId() {
        return $this->sdkStdResult["refundId"];
    }

    /**
     * 设置退款单Id
     * @param String $refundId
     * 参数示例：<pre>TQ1043162**46961198</pre>
     * 此参数必填
     */
    public function setRefundId( $refundId) {
        $this->sdkStdResult["refundId"] = $refundId;
    }


    /**
     * @return mixed 当前页号
     */
    public function getPageNo() {
        return $this->sdkStdResult["pageNo"];
    }

    /**
     * 设置当前页号
     * @param String $pageNo
     * 参数示例：<pre>1</pre>
     * 此参数必填
     */
    public function setPageNo( $pageNo) {
        $this->sdkStdResult["pageNo"] = $pageNo;
    }


    /**
     * @return mixed 页大小
     */
    public function getPageSize() {
        return $this->sdkStdResult["pageSize"];
    }

    /**
     * 设置页大小
     * @param String $pageSize
     * 参数示例：<pre>100</pre>
     * 此参数必填
     */
    public function setPageSize( $pageSize) {
        $this->sdkStdResult["pageSize"] = $pageSize;
    }


    private $sdkStdResult=array();

    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }
}
