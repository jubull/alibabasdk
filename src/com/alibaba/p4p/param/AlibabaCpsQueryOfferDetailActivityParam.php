<?php

namespace com\alibaba\p4p\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;


class AlibabaCpsQueryOfferDetailActivityParam {


    /**
     * @return mixed 商品id
     */
    public function getOfferId() {
        return $this->sdkStdResult["offerId"];
    }

    /**
     * 设置商品id
     * @param Long $offerId
     * 参数示例：<pre>591047134663</pre>
     * 此参数必填
     */
    public function setOfferId( $offerId) {
        $this->sdkStdResult["offerId"] = $offerId;
    }


    private $sdkStdResult=array();

    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }
}
