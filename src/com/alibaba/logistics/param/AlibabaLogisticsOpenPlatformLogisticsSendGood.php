<?php

namespace com\alibaba\logistics\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;


class AlibabaLogisticsOpenPlatformLogisticsSendGood extends SDKDomain {


    private $goodName;

    /**
     * @return mixed 商品名
     */
    public function getGoodName() {
        return $this->goodName;
    }

    /**
     * 设置商品名
     * @param String $goodName
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setGoodName( $goodName) {
        $this->goodName = $goodName;
    }


    private $quantity;

    /**
     * @return mixed 商品数量
     */
    public function getQuantity() {
        return $this->quantity;
    }

    /**
     * 设置商品数量
     * @param String $quantity
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setQuantity( $quantity) {
        $this->quantity = $quantity;
    }


    private $unit;

        /**
    * @return 商品单位
    */
        public function getUnit() {
        return $this->unit;
    }

    /**
     * 设置商品单位
     * @param String $unit
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setUnit( $unit) {
        $this->unit = $unit;
    }


	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "goodName", $this->stdResult )) {
		    $this->goodName = $this->stdResult->{"goodName"};
		}

		if (array_key_exists ( "quantity", $this->stdResult )) {
		    $this->quantity = $this->stdResult->{"quantity"};
		}

		if (array_key_exists ( "unit", $this->stdResult )) {
		    $this->unit = $this->stdResult->{"unit"};
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "goodName", $this->arrayResult )) {
		    $this->goodName = $arrayResult['${paramType.paramName}'];
		}

		if (array_key_exists ( "quantity", $this->arrayResult )) {
		    $this->quantity = $arrayResult['${paramType.paramName}'];
		}

		if (array_key_exists ( "unit", $this->arrayResult )) {
		    $this->unit = $arrayResult['${paramType.paramName}'];
		}
	}
}
