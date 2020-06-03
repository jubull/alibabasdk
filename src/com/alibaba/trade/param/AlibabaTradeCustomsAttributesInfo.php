<?php

namespace com\alibaba\trade\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;


class AlibabaTradeCustomsAttributesInfo extends SDKDomain {


    private $sku;

    /**
     * @return mixed sku标识
     */
    public function getSku() {
        return $this->sku;
    }

    /**
     * 设置sku标识
     * @param String $sku
     * 参数示例：<pre>1234</pre>
     * 此参数必填
     */
    public function setSku( $sku) {
        $this->sku = $sku;
    }


    private $cName;

    /**
     * @return mixed 中文名称
     */
    public function getCName() {
        return $this->cName;
    }

    /**
     * 设置中文名称
     * @param String $cName
     * 参数示例：<pre>测试</pre>
     * 此参数必填
     */
    public function setCName( $cName) {
        $this->cName = $cName;
    }


    private $enName;

    /**
     * @return mixed 英文名称
     */
    public function getEnName() {
        return $this->enName;
    }

    /**
     * 设置英文名称
     * @param String $enName
     * 参数示例：<pre>test</pre>
     * 此参数必填
     */
    public function setEnName( $enName) {
        $this->enName = $enName;
    }


    private $amount;

    /**
     * @return mixed 申报价值
     */
    public function getAmount() {
        return $this->amount;
    }

    /**
     * 设置申报价值
     * @param Double $amount
     * 参数示例：<pre>3000.0</pre>
     * 此参数必填
     */
    public function setAmount( $amount) {
        $this->amount = $amount;
    }


    private $quantity;

    /**
     * @return mixed 数量
     */
    public function getQuantity() {
        return $this->quantity;
    }

    /**
     * 设置数量
     * @param Double $quantity
     * 参数示例：<pre>1.0</pre>
     * 此参数必填
     */
    public function setQuantity( $quantity) {
        $this->quantity = $quantity;
    }


    private $weight;

    /**
     * @return mixed 重量（kg）
     */
    public function getWeight() {
        return $this->weight;
    }

    /**
     * 设置重量（kg）
     * @param Double $weight
     * 参数示例：<pre>0.5</pre>
     * 此参数必填
     */
    public function setWeight( $weight) {
        $this->weight = $weight;
    }


    private $currency;

    /**
     * @return mixed 报关币种
     */
    public function getCurrency() {
        return $this->currency;
    }

    /**
     * 设置报关币种
     * @param String $currency
     * 参数示例：<pre>CNY</pre>
     * 此参数必填
     */
    public function setCurrency( $currency) {
        $this->currency = $currency;
    }


	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "sku", $this->stdResult )) {
		    $this->sku = $this->stdResult->{"sku"};
		}
		if (array_key_exists ( "cName", $this->stdResult )) {
		    $this->cName = $this->stdResult->{"cName"};
		}
		if (array_key_exists ( "enName", $this->stdResult )) {
		    $this->enName = $this->stdResult->{"enName"};
		}
		if (array_key_exists ( "amount", $this->stdResult )) {
		    $this->amount = $this->stdResult->{"amount"};
		}
		if (array_key_exists ( "quantity", $this->stdResult )) {
		    $this->quantity = $this->stdResult->{"quantity"};
		}
		if (array_key_exists ( "weight", $this->stdResult )) {
		    $this->weight = $this->stdResult->{"weight"};
		}
		if (array_key_exists ( "currency", $this->stdResult )) {
		    $this->currency = $this->stdResult->{"currency"};
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "sku", $this->arrayResult )) {
		    $this->sku = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "cName", $this->arrayResult )) {
		    $this->cName = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "enName", $this->arrayResult )) {
		    $this->enName = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "amount", $this->arrayResult )) {
		    $this->amount = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "quantity", $this->arrayResult )) {
		    $this->quantity = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "weight", $this->arrayResult )) {
		    $this->weight = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "currency", $this->arrayResult )) {
		    $this->currency = $arrayResult['${paramType.paramName}'];
		}
	}
}
