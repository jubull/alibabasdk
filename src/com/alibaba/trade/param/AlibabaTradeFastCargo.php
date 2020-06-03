<?php

namespace com\alibaba\trade\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;


class AlibabaTradeFastCargo extends SDKDomain {


    private $offerId;

    /**
     * @return mixed 商品对应的offer id
     */
    public function getOfferId() {
        return $this->offerId;
    }

    /**
     * 设置商品对应的offer id
     * @param Long $offerId
     * 参数示例：<pre>554456348334</pre>
     * 此参数必填
     */
    public function setOfferId( $offerId) {
        $this->offerId = $offerId;
    }


    private $specId;

    /**
     * @return mixed 商品规格id
     */
    public function getSpecId() {
        return $this->specId;
    }

    /**
     * 设置商品规格id
     * @param String $specId
     * 参数示例：<pre>b266e0726506185beaf205cbae88530d</pre>
     * 此参数必填
     */
    public function setSpecId( $specId) {
        $this->specId = $specId;
    }


    private $quantity;

    /**
     * @return mixed 商品数量(计算金额用)
     */
    public function getQuantity() {
        return $this->quantity;
    }

    /**
     * 设置商品数量(计算金额用)
     * @param Double $quantity
     * 参数示例：<pre>5</pre>
     * 此参数必填
     */
    public function setQuantity( $quantity) {
        $this->quantity = $quantity;
    }


	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;

		if (array_key_exists ( "offerId", $this->stdResult )) {
		    $this->offerId = $this->stdResult->{"offerId"};
		}

		if (array_key_exists ( "specId", $this->stdResult )) {
		    $this->specId = $this->stdResult->{"specId"};
		}

		if (array_key_exists ( "quantity", $this->stdResult )) {
		    $this->quantity = $this->stdResult->{"quantity"};
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;

		if (array_key_exists ( "offerId", $this->arrayResult )) {
		    $this->offerId = $arrayResult['${paramType.paramName}'];
		}

		if (array_key_exists ( "specId", $this->arrayResult )) {
		    $this->specId = $arrayResult['${paramType.paramName}'];
		}

		if (array_key_exists ( "quantity", $this->arrayResult )) {
		    $this->quantity = $arrayResult['${paramType.paramName}'];
		}
	}
}
