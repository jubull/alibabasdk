<?php

namespace com\alibaba\product\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;

class AlibabaProductSKUAttrInfo extends SDKDomain {


    private $attributeID;

    /**
     * @return mixed sku属性ID
     */
    public function getAttributeID() {
        return $this->attributeID;
    }

    /**
     * 设置sku属性ID
     * @param Long $attributeID
     * 参数示例：<pre>3216</pre>
     * 此参数必填
     */
    public function setAttributeID( $attributeID) {
        $this->attributeID = $attributeID;
    }


    private $attributeValue;

    /**
     * @return mixed sku值内容
     */
    public function getAttributeValue() {
        return $this->attributeValue;
    }

    /**
     * 设置sku值内容
     * @param String $attributeValue
     * 参数示例：<pre>白色</pre>
     * 此参数必填
     */
    public function setAttributeValue( $attributeValue) {
        $this->attributeValue = $attributeValue;
    }


    private $skuImageUrl;

    /**
     * @return mixed sku图片名
     */
    public function getSkuImageUrl() {
        return $this->skuImageUrl;
    }

    /**
     * 设置sku图片名
     * @param String $skuImageUrl
     * 参数示例：<pre>img/ibank/2018/852/384/9326483258_1660977857.jpg</pre>
     * 此参数必填
     */
    public function setSkuImageUrl( $skuImageUrl) {
        $this->skuImageUrl = $skuImageUrl;
    }


    private $attributeDisplayName;

    /**
     * @return mixed sku属性ID所对应的显示名，比如颜色，尺码
     */
    public function getAttributeDisplayName() {
        return $this->attributeDisplayName;
    }

    /**
     * 设置sku属性ID所对应的显示名，比如颜色，尺码
     * @param String $attributeDisplayName
     * 参数示例：<pre>颜色</pre>
     * 此参数必填
     */
    public function setAttributeDisplayName( $attributeDisplayName) {
        $this->attributeDisplayName = $attributeDisplayName;
    }


    private $attributeName;

    /**
     * @return mixed sku属性ID所对应的显示名，比如颜色，尺码
     */
    public function getAttributeName() {
        return $this->attributeName;
    }

    /**
     * 设置sku属性ID所对应的显示名，比如颜色，尺码
     * @param String $attributeName
     * 参数示例：<pre>颜色</pre>
     * 此参数必填
     */
    public function setAttributeName( $attributeName) {
        $this->attributeName = $attributeName;
    }


	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "attributeID", $this->stdResult )) {
		    $this->attributeID = $this->stdResult->{"attributeID"};
		}
		if (array_key_exists ( "attributeValue", $this->stdResult )) {
		    $this->attributeValue = $this->stdResult->{"attributeValue"};
		}
		if (array_key_exists ( "skuImageUrl", $this->stdResult )) {
		    $this->skuImageUrl = $this->stdResult->{"skuImageUrl"};
		}
		if (array_key_exists ( "attributeDisplayName", $this->stdResult )) {
		    $this->attributeDisplayName = $this->stdResult->{"attributeDisplayName"};
		}
		if (array_key_exists ( "attributeName", $this->stdResult )) {
		    $this->attributeName = $this->stdResult->{"attributeName"};
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "attributeID", $this->arrayResult )) {
		    $this->attributeID = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "attributeValue", $this->arrayResult )) {
		    $this->attributeValue = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "skuImageUrl", $this->arrayResult )) {
		    $this->skuImageUrl = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "attributeDisplayName", $this->arrayResult )) {
		    $this->attributeDisplayName = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "attributeName", $this->arrayResult )) {
		    $this->attributeName = $arrayResult['${paramType.paramName}'];
		}
	}
}
