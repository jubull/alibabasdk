<?php

namespace com\alibaba\trade\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;


class AlibabaTradeUploadRefundVoucherParam {


    /**
     * @return mixed 凭证图片数据。小于1M，jpg格式。
     */
    public function getImageData() {
        return $this->sdkStdResult["imageData"];
    }

    /**
     * 设置凭证图片数据。小于1M，jpg格式。
     * @param array include @see Byte[] $imageData
     * 参数示例：<pre> </pre>
     * 此参数必填
     */
    public function setImageData( $imageData) {
        $this->sdkStdResult["imageData"] = $imageData;
    }


    private $sdkStdResult=array();

    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }
}
