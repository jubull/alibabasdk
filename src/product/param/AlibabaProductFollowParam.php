<?php

namespace com\alibaba\product\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;


class AlibabaProductFollowParam {


    /**
     * @return mixed 商品id
     */
    public function getProductId() {
        return $this->sdkStdResult["productId"];
    }

    /**
     * 设置商品id
     * @param Long $productId
     * 参数示例：<pre>3412111233445</pre>
     * 此参数必填
     */
    public function setProductId( $productId) {
        $this->sdkStdResult["productId"] = $productId;
    }


    private $sdkStdResult=array();

    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }
}
