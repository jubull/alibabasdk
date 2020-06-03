<?php

namespace com\alibaba\product\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;

class AlibabaCategoryGetParam {


    /**
     * @return mixed 类目id,必须大于等于0， 如果为0，则查询所有一级类目
     */
    public function getCategoryID() {
        return $this->sdkStdResult["categoryID"];
    }

    /**
     * 设置类目id,必须大于等于0， 如果为0，则查询所有一级类目
     * @param Long $categoryID
     * 参数示例：<pre>1031910</pre>
     * 此参数必填
     */
    public function setCategoryID( $categoryID) {
        $this->sdkStdResult["categoryID"] = $categoryID;
    }


    private $sdkStdResult=array();

    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
