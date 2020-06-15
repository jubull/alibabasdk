<?php

namespace com\alibaba\trade\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;

class AlibabaOrderDetailCaigouQuoteInfo extends SDKDomain {


    private $productQuoteName;

    /**
     * @return mixed 供应单项的名称
     */
    public function getProductQuoteName() {
        return $this->productQuoteName;
    }

    /**
     * 设置供应单项的名称
     * @param String $productQuoteName
     * 参数示例：<pre>物料01</pre>
     * 此参数必填
     */
    public function setProductQuoteName( $productQuoteName) {
        $this->productQuoteName = $productQuoteName;
    }


    private $price;

    /**
     * @return mixed 价格，单位：元
     */
    public function getPrice() {
        return $this->price;
    }

    /**
     * 设置价格，单位：元
     * @param BigDecimal $price
     * 参数示例：<pre>100</pre>
     * 此参数必填
     */
    public function setPrice( $price) {
        $this->price = $price;
    }


    private $count;

    /**
     * @return mixed 购买数量
     */
    public function getCount() {
        return $this->count;
    }

    /**
     * 设置购买数量
     * @param Double $count
     * 参数示例：<pre>10</pre>
     * 此参数必填
     */
    public function setCount( $count) {
        $this->count = $count;
    }


	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "productQuoteName", $this->stdResult )) {
		    $this->productQuoteName = $this->stdResult->{"productQuoteName"};
		}
		if (array_key_exists ( "price", $this->stdResult )) {
		    $this->price = $this->stdResult->{"price"};
		}
		if (array_key_exists ( "count", $this->stdResult )) {
		    $this->count = $this->stdResult->{"count"};
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "productQuoteName", $this->arrayResult )) {
		    $this->productQuoteName = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "price", $this->arrayResult )) {
		    $this->price = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "count", $this->arrayResult )) {
		    $this->count = $arrayResult['${paramType.paramName}'];
		}
	}
}
