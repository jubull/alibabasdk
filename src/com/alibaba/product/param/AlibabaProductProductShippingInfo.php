<?php

namespace com\alibaba\product\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use com\alibaba\product\param\AlibabaProductFreightTemplate;

class AlibabaProductProductShippingInfo extends SDKDomain {


    private $freightTemplateID;

    /**
     * @return mixed 运费模板ID，0表示运费说明，1表示卖家承担运费，其他值表示使用运费模版。此参数可调用运费模板相关API获取
     */
    public function getFreightTemplateID() {
        return $this->freightTemplateID;
    }

    /**
     * 设置运费模板ID，0表示运费说明，1表示卖家承担运费，其他值表示使用运费模版。此参数可调用运费模板相关API获取
     * @param Long $freightTemplateID
     * 参数示例：<pre>121133</pre>
     * 此参数必填
     */
    public function setFreightTemplateID( $freightTemplateID) {
        $this->freightTemplateID = $freightTemplateID;
    }


    private $unitWeight;

    /**
     * @return mixed 重量/毛重
     */
    public function getUnitWeight() {
        return $this->unitWeight;
    }

    /**
     * 设置重量/毛重
     * @param Double $unitWeight
     * 参数示例：<pre>121</pre>
     * 此参数必填
     */
    public function setUnitWeight( $unitWeight) {
        $this->unitWeight = $unitWeight;
    }


    private $packageSize;

    /**
     * @return mixed 尺寸，单位是厘米，长宽高范围是1-9999999。1688无需关注此字段
     */
        public function getPackageSize() {
        return $this->packageSize;
    }

    /**
     * 设置尺寸，单位是厘米，长宽高范围是1-9999999。1688无需关注此字段
     * @param String $packageSize
     * 参数示例：<pre>10x20x50</pre>
     * 此参数必填
     */
    public function setPackageSize( $packageSize) {
        $this->packageSize = $packageSize;
    }


    private $volume;

    /**
     * @return mixed 体积，单位是立方厘米，范围是1-9999999，1688无需关注此字段
     */
    public function getVolume() {
        return $this->volume;
    }

    /**
     * 设置体积，单位是立方厘米，范围是1-9999999，1688无需关注此字段
     * @param Integer $volume
     * 参数示例：<pre>500</pre>
     * 此参数必填
     */
    public function setVolume( $volume) {
        $this->volume = $volume;
    }


    private $handlingTime;

    /**
     * @return mixed 备货期，单位是天，范围是1-60。1688无需处理此字段
     */
    public function getHandlingTime() {
        return $this->handlingTime;
    }

    /**
     * 设置备货期，单位是天，范围是1-60。1688无需处理此字段
     * @param Integer $handlingTime
     * 参数示例：<pre>12</pre>
     * 此参数必填
     */
    public function setHandlingTime( $handlingTime) {
        $this->handlingTime = $handlingTime;
    }


    private $sendGoodsAddressId;

    /**
     * @return mixed 发货地址ID，国际站无需处理此字段
     */
    public function getSendGoodsAddressId() {
        return $this->sendGoodsAddressId;
    }

    /**
     * 设置发货地址ID，国际站无需处理此字段
     * @param Long $sendGoodsAddressId
     * 参数示例：<pre>124431</pre>
     * 此参数必填
     */
    public function setSendGoodsAddressId( $sendGoodsAddressId) {
        $this->sendGoodsAddressId = $sendGoodsAddressId;
    }


    private $sendGoodsAddressText;

    /**
     * @return mixed 发货地描述
     */
    public function getSendGoodsAddressText() {
        return $this->sendGoodsAddressText;
    }

    /**
     * 设置发货地描述
     * @param String $sendGoodsAddressText
     * 参数示例：<pre>asda</pre>
     * 此参数必填
     */
    public function setSendGoodsAddressText( $sendGoodsAddressText) {
        $this->sendGoodsAddressText = $sendGoodsAddressText;
    }


    private $suttleWeight;

    /**
     * @return mixed 净重
     */
    public function getSuttleWeight() {
        return $this->suttleWeight;
    }

    /**
     * 设置净重
     * @param Double $suttleWeight
     * 参数示例：<pre>1001</pre>
     * 此参数必填
     */
    public function setSuttleWeight( $suttleWeight) {
        $this->suttleWeight = $suttleWeight;
    }


    private $width;

    /**
     * @return mixed 宽度
     */
    public function getWidth() {
        return $this->width;
    }

    /**
     * 设置宽度
     * @param Double $width
     * 参数示例：<pre>30</pre>
     * 此参数必填
     */
    public function setWidth( $width) {
        $this->width = $width;
    }


    private $height;

    /**
     * @return mixed 高度
     */
    public function getHeight() {
        return $this->height;
    }

    /**
     * 设置高度
     * @param Double $height
     * 参数示例：<pre>20</pre>
     * 此参数必填
     */
    public function setHeight( $height) {
        $this->height = $height;
    }


    private $length;

    /**
     * @return mixed 长度
     */
    public function getLength() {
        return $this->length;
    }

    /**
     * 设置长度
     * @param Double $length
     * 参数示例：<pre>10</pre>
     * 此参数必填
     */
    public function setLength( $length) {
        $this->length = $length;
    }


    private $freightTemplate;

    /**
     * @return mixed
     */
    public function getFreightTemplate() {
        return $this->freightTemplate;
    }

    /**
     * 设置1
     * @param \com\alibaba\product\param\AlibabaProductFreightTemplate $freightTemplate
     * 参数示例：<pre>1</pre>
     * 此参数必填
     */
    public function setFreightTemplate(AlibabaProductFreightTemplate $freightTemplate) {
        $this->freightTemplate = $freightTemplate;
    }


	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "freightTemplateID", $this->stdResult )) {
		    $this->freightTemplateID = $this->stdResult->{"freightTemplateID"};
		}
		if (array_key_exists ( "unitWeight", $this->stdResult )) {
		    $this->unitWeight = $this->stdResult->{"unitWeight"};
		}
		if (array_key_exists ( "packageSize", $this->stdResult )) {
		    $this->packageSize = $this->stdResult->{"packageSize"};
		}
		if (array_key_exists ( "volume", $this->stdResult )) {
		    $this->volume = $this->stdResult->{"volume"};
		}
		if (array_key_exists ( "handlingTime", $this->stdResult )) {
		    $this->handlingTime = $this->stdResult->{"handlingTime"};
		}
		if (array_key_exists ( "sendGoodsAddressId", $this->stdResult )) {
		    $this->sendGoodsAddressId = $this->stdResult->{"sendGoodsAddressId"};
		}
		if (array_key_exists ( "sendGoodsAddressText", $this->stdResult )) {
		    $this->sendGoodsAddressText = $this->stdResult->{"sendGoodsAddressText"};
		}
		if (array_key_exists ( "suttleWeight", $this->stdResult )) {
		    $this->suttleWeight = $this->stdResult->{"suttleWeight"};
		}
		if (array_key_exists ( "width", $this->stdResult )) {
		    $this->width = $this->stdResult->{"width"};
		}
		if (array_key_exists ( "height", $this->stdResult )) {
		    $this->height = $this->stdResult->{"height"};
		}
		if (array_key_exists ( "length", $this->stdResult )) {
		    $this->length = $this->stdResult->{"length"};
		}
		if (array_key_exists ( "freightTemplate", $this->stdResult )) {
		    $freightTemplateResult=$this->stdResult->{"freightTemplate"};
		    $object = json_decode ( json_encode ( $freightTemplateResult ), true );
		    $this->freightTemplate = array ();
		    for($i = 0; $i < count ( $object ); $i ++) {
		        $arrayobject = new \ArrayObject($object[$i]);
		        $AlibabaProductFreightTemplateResult=new AlibabaProductFreightTemplate();
		        $AlibabaProductFreightTemplateResult->setArrayResult($arrayobject );
		        $this->freightTemplate [$i] = $AlibabaProductFreightTemplateResult;
		    }
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "freightTemplateID", $this->arrayResult )) {
		    $this->freightTemplateID = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "unitWeight", $this->arrayResult )) {
		    $this->unitWeight = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "packageSize", $this->arrayResult )) {
		    $this->packageSize = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "volume", $this->arrayResult )) {
		    $this->volume = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "handlingTime", $this->arrayResult )) {
		    $this->handlingTime = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "sendGoodsAddressId", $this->arrayResult )) {
		    $this->sendGoodsAddressId = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "sendGoodsAddressText", $this->arrayResult )) {
		    $this->sendGoodsAddressText = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "suttleWeight", $this->arrayResult )) {
		    $this->suttleWeight = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "width", $this->arrayResult )) {
		    $this->width = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "height", $this->arrayResult )) {
		    $this->height = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "length", $this->arrayResult )) {
		    $this->length = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "freightTemplate", $this->arrayResult )) {
    		$freightTemplateResult=$arrayResult['${paramType.paramName}'];
    		$this->freightTemplate = new AlibabaProductFreightTemplate();
    		$this->freightTemplate->setStdResult ( $freightTemplateResult);
		}
	}
}
