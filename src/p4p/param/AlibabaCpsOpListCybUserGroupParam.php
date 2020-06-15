<?php

namespace com\alibaba\p4p\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;


class AlibabaCpsOpListCybUserGroupParam {


    /**
     * @return mixed 页码
     */
    public function getPageNo() {
        return $this->sdkStdResult["pageNo"];
    }

    /**
     * 设置页码
     * @param String $pageNo
     * 参数示例：<pre>1</pre>
     * 此参数必填
     */
    public function setPageNo( $pageNo) {
        $this->sdkStdResult["pageNo"] = $pageNo;
    }


    /**
     * @return mixed 每页总数
     */
    public function getPageSize() {
        return $this->sdkStdResult["pageSize"];
    }

    /**
     * 设置每页总数
     * @param String $pageSize
     * 参数示例：<pre>10</pre>
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
