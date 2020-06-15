<?php

namespace com\alibaba\product\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;


class AlibabaCpsMediaProductInfoParam {


    /**
     * @return mixed 1688商品ID，等同于productId
     */
    public function getOfferId() {
        return $this->sdkStdResult["offerId"];
    }

    /**
     * 设置1688商品ID，等同于productId
     * @param Long $offerId
     * 参数示例：<pre>573741401425</pre>
     * 此参数必填
     */
    public function setOfferId( $offerId) {
        $this->sdkStdResult["offerId"] = $offerId;
    }


    /**
     * @return mixed 是否需要CPS建议价
     */
    public function getNeedCpsSuggestPrice() {
        return $this->sdkStdResult["needCpsSuggestPrice"];
    }

    /**
     * 设置是否需要CPS建议价
     * @param Boolean $needCpsSuggestPrice
     * 参数示例：<pre>true</pre>
     * 此参数必填
     */
    public function setNeedCpsSuggestPrice( $needCpsSuggestPrice) {
        $this->sdkStdResult["needCpsSuggestPrice"] = $needCpsSuggestPrice;
    }


    private $sdkStdResult=array();

    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }
}
