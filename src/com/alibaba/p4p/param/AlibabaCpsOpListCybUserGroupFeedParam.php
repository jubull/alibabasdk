<?php

namespace com\alibaba\p4p\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;


class AlibabaCpsOpListCybUserGroupFeedParam {


    /**
     * @return mixed 选品组id，不传表示取默认选品组下商品；
     */
    public function getGroupId() {
        return $this->sdkStdResult["groupId"];
    }

    /**
     * 设置选品组id，不传表示取默认选品组下商品；
     * @param Long $groupId
     * 参数示例：<pre>1</pre>
     * 此参数必填
     */
    public function setGroupId( $groupId) {
        $this->sdkStdResult["groupId"] = $groupId;
    }


    /**
     * @return mixed 页码
     */
    public function getPageNo() {
        return $this->sdkStdResult["pageNo"];
    }

    /**
     * 设置页码
     * @param Integer $pageNo
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
     * @param Integer $pageSize
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
