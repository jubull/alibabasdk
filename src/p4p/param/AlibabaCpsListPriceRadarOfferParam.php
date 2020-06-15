<?php

namespace com\alibaba\p4p\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;

class AlibabaCpsListPriceRadarOfferParam {


    /**
     * @return mixed offerId列表
     */
        public function getOfferIds() {
        $tempResult = $this->sdkStdResult["offerIds"];
        return $tempResult;
    }

    /**
     * 设置offerId列表
     * @param array include @see Long[] $offerIds
     * 参数示例：<pre>[2222,3333]</pre>
     * 此参数必填
     */
    public function setOfferIds( $offerIds) {
        $this->sdkStdResult["offerIds"] = $offerIds;
    }


    private $sdkStdResult=array();

    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }
}
