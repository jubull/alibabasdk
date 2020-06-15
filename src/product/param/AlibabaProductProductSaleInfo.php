<?php

namespace com\alibaba\product\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use com\alibaba\product\param\AlibabaProductProductPriceRange;


class AlibabaProductProductSaleInfo extends SDKDomain {


    private $supportOnlineTrade;

    /**
     * @return mixed 是否支持网上交易。true：支持 false：不支持
     */
        public function getSupportOnlineTrade() {
        return $this->supportOnlineTrade;
    }

    /**
     * 设置是否支持网上交易。true：支持 false：不支持
     * @param Boolean $supportOnlineTrade
     * 参数示例：<pre>TRUE</pre>
     * 此参数必填
     */
    public function setSupportOnlineTrade( $supportOnlineTrade) {
        $this->supportOnlineTrade = $supportOnlineTrade;
    }


    private $mixWholeSale;

    /**
     * @return mixed 是否支持混批
     */
    public function getMixWholeSale() {
        return $this->mixWholeSale;
    }

    /**
     * 设置是否支持混批
     * @param Boolean $mixWholeSale
     * 参数示例：<pre>TRUE</pre>
     * 此参数必填
     */
    public function setMixWholeSale( $mixWholeSale) {
        $this->mixWholeSale = $mixWholeSale;
    }


    private $priceAuth;

    /**
     * @return mixed 是否价格私密信息
     */
    public function getPriceAuth() {
        return $this->priceAuth;
    }

    /**
     * 设置是否价格私密信息
     * @param Boolean $priceAuth
     * 参数示例：<pre>TRUE</pre>
     * 此参数必填
     */
    public function setPriceAuth( $priceAuth) {
        $this->priceAuth = $priceAuth;
    }


    private $priceRanges;

    /**
     * @return mixed 区间价格。按数量范围设定的区间价格
     */
    public function getPriceRanges() {
        return $this->priceRanges;
    }

    /**
     * 设置区间价格。按数量范围设定的区间价格
     * @param \com\alibaba\product\param\AlibabaProductProductPriceRange $priceRanges
     * 参数示例：<pre>[]</pre>
     * 此参数必填
     */
    public function setPriceRanges(AlibabaProductProductPriceRange $priceRanges) {
        $this->priceRanges = $priceRanges;
    }


    private $amountOnSale;

    /**
     * @return mixed 可售数量
     */
    public function getAmountOnSale() {
        return $this->amountOnSale;
    }

    /**
     * 设置可售数量
     * @param Double $amountOnSale
     * 参数示例：<pre>29900</pre>
     * 此参数必填
     */
    public function setAmountOnSale( $amountOnSale) {
        $this->amountOnSale = $amountOnSale;
    }


    private $unit;

    /**
     * @return mixed 计量单位
     */
    public function getUnit() {
        return $this->unit;
    }

    /**
     * 设置计量单位
     * @param String $unit
     * 参数示例：<pre>件</pre>
     * 此参数必填
     */
    public function setUnit( $unit) {
        $this->unit = $unit;
    }


    private $minOrderQuantity;

    /**
     * @return mixed 最小起订量，范围是1-99999。
     */
    public function getMinOrderQuantity() {
        return $this->minOrderQuantity;
    }

    /**
     * 设置最小起订量，范围是1-99999。
     * @param Integer $minOrderQuantity
     * 参数示例：<pre>3</pre>
     * 此参数必填
     */
    public function setMinOrderQuantity( $minOrderQuantity) {
        $this->minOrderQuantity = $minOrderQuantity;
    }


    private $batchNumber;

    /**
     * @return mixed 每批数量，默认为空或者非零值，该属性不为空时sellunit为必填
     */
    public function getBatchNumber() {
        return $this->batchNumber;
    }

    /**
     * 设置每批数量，默认为空或者非零值，该属性不为空时sellunit为必填
     * @param Integer $batchNumber
     * 参数示例：<pre>12</pre>
     * 此参数必填
     */
    public function setBatchNumber( $batchNumber) {
        $this->batchNumber = $batchNumber;
    }


    private $retailprice;

    /**
     * @return mixed 建议零售价
     */
    public function getRetailprice() {
        return $this->retailprice;
    }

    /**
     * 设置建议零售价
     * @param Double $retailprice
     * 参数示例：<pre>445</pre>
     * 此参数必填
     */
    public function setRetailprice( $retailprice) {
        $this->retailprice = $retailprice;
    }


    private $tax;

    /**
     * @return mixed 税率相关信息，内容由用户自定
     */
    public function getTax() {
        return $this->tax;
    }

    /**
     * 设置税率相关信息，内容由用户自定
     * @param String $tax
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setTax( $tax) {
        $this->tax = $tax;
    }


    private $sellunit;

    /**
     * @return mixed 售卖单位，如果为批量售卖，代表售卖的单位，该属性不为空时batchNumber为必填，例如1"手"=12“件"的"手"
     */
    public function getSellunit() {
        return $this->sellunit;
    }

    /**
     * 设置售卖单位，如果为批量售卖，代表售卖的单位，该属性不为空时batchNumber为必填，例如1"手"=12“件"的"手"
     * @param String $sellunit
     * 参数示例：<pre>手</pre>
     * 此参数必填
     */
    public function setSellunit( $sellunit) {
        $this->sellunit = $sellunit;
    }


    private $quoteType;

    /**
     * @return mixed 0-无SKU按数量报价,1-有SKU按规格报价,2-有SKU按数量报价
     */
    public function getQuoteType() {
        return $this->quoteType;
    }

    /**
     * 设置0-无SKU按数量报价,1-有SKU按规格报价,2-有SKU按数量报价
     * @param Integer $quoteType
     * 参数示例：<pre>2</pre>
     * 此参数必填
     */
    public function setQuoteType( $quoteType) {
        $this->quoteType = $quoteType;
    }


    private $consignPrice;

    /**
     * @return mixed 分销基准价。代销场景均使用该价格。有SKU商品查看skuInfo中的consignPrice
     */
    public function getConsignPrice() {
        return $this->consignPrice;
    }

    /**
     * 设置分销基准价。代销场景均使用该价格。有SKU商品查看skuInfo中的consignPrice
     * @param Double $consignPrice
     * 参数示例：<pre>445</pre>
     * 此参数必填
     */
    public function setConsignPrice( $consignPrice) {
        $this->consignPrice = $consignPrice;
    }


    private $cpsSuggestPrice;

    /**
     * @return mixed CPS建议价（单位：元）
     */
    public function getCpsSuggestPrice() {
        return $this->cpsSuggestPrice;
    }

    /**
     * 设置CPS建议价（单位：元）
     * @param Double $cpsSuggestPrice
     * 参数示例：<pre>555</pre>
     * 此参数必填
     */
    public function setCpsSuggestPrice( $cpsSuggestPrice) {
        $this->cpsSuggestPrice = $cpsSuggestPrice;
    }


    private $saleType;

    /**
     * @return mixed 销售方式，按件卖(normal)或者按批卖(batch)，1688站点无需关注此字段
     */
    public function getSaleType() {
        return $this->saleType;
    }

    /**
     * 设置销售方式，按件卖(normal)或者按批卖(batch)，1688站点无需关注此字段
     * @param String $saleType
     * 参数示例：<pre>normal</pre>
     * 此参数必填
     */
    public function setSaleType( $saleType) {
        $this->saleType = $saleType;
    }


    private $deliveryLimit;

    /**
     * @return mixed 发货时间限制（非买保发货周期），按天计算
     */
    public function getDeliveryLimit() {
        return $this->deliveryLimit;
    }

    /**
     * 设置发货时间限制（非买保发货周期），按天计算
     * @param Integer $deliveryLimit
     * 参数示例：<pre>2</pre>
     * 此参数必填
     */
    public function setDeliveryLimit( $deliveryLimit) {
        $this->deliveryLimit = $deliveryLimit;
    }


	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "supportOnlineTrade", $this->stdResult )) {
		    $this->supportOnlineTrade = $this->stdResult->{"supportOnlineTrade"};
		}
		if (array_key_exists ( "mixWholeSale", $this->stdResult )) {
		    $this->mixWholeSale = $this->stdResult->{"mixWholeSale"};
		}
		if (array_key_exists ( "priceAuth", $this->stdResult )) {
		    $this->priceAuth = $this->stdResult->{"priceAuth"};
		}
		if (array_key_exists ( "priceRanges", $this->stdResult )) {
		    $priceRangesResult=$this->stdResult->{"priceRanges"};
		    $object = json_decode ( json_encode ( $priceRangesResult ), true );
		    $this->priceRanges = array ();
		    for($i = 0; $i < count ( $object ); $i ++) {
		        $arrayobject = new \ArrayObject($object[$i]);
		        $AlibabaProductProductPriceRangeResult=new AlibabaProductProductPriceRange();
		        $AlibabaProductProductPriceRangeResult->setArrayResult($arrayobject );
		        $this->priceRanges [$i] = $AlibabaProductProductPriceRangeResult;
		    }
		}
		if (array_key_exists ( "amountOnSale", $this->stdResult )) {
		    $this->amountOnSale = $this->stdResult->{"amountOnSale"};
		}
		if (array_key_exists ( "unit", $this->stdResult )) {
		    $this->unit = $this->stdResult->{"unit"};
		}
		if (array_key_exists ( "minOrderQuantity", $this->stdResult )) {
		    $this->minOrderQuantity = $this->stdResult->{"minOrderQuantity"};
		}
		if (array_key_exists ( "batchNumber", $this->stdResult )) {
		    $this->batchNumber = $this->stdResult->{"batchNumber"};
		}
		if (array_key_exists ( "retailprice", $this->stdResult )) {
		    $this->retailprice = $this->stdResult->{"retailprice"};
		}
		if (array_key_exists ( "tax", $this->stdResult )) {
		    $this->tax = $this->stdResult->{"tax"};
		}
		if (array_key_exists ( "sellunit", $this->stdResult )) {
		    $this->sellunit = $this->stdResult->{"sellunit"};
		}
		if (array_key_exists ( "quoteType", $this->stdResult )) {
		    $this->quoteType = $this->stdResult->{"quoteType"};
		}
		if (array_key_exists ( "consignPrice", $this->stdResult )) {
		    $this->consignPrice = $this->stdResult->{"consignPrice"};
		}
		if (array_key_exists ( "cpsSuggestPrice", $this->stdResult )) {
		    $this->cpsSuggestPrice = $this->stdResult->{"cpsSuggestPrice"};
		}
		if (array_key_exists ( "saleType", $this->stdResult )) {
		    $this->saleType = $this->stdResult->{"saleType"};
		}
		if (array_key_exists ( "deliveryLimit", $this->stdResult )) {
		    $this->deliveryLimit = $this->stdResult->{"deliveryLimit"};
		}
	}

	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "supportOnlineTrade", $this->arrayResult )) {
		    $this->supportOnlineTrade = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "mixWholeSale", $this->arrayResult )) {
		    $this->mixWholeSale = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "priceAuth", $this->arrayResult )) {
		    $this->priceAuth = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "priceRanges", $this->arrayResult )) {
    		$priceRangesResult=$arrayResult['${paramType.paramName}'];
    		$this->priceRanges = new AlibabaProductProductPriceRange();
    		$this->priceRanges->setStdResult ( $priceRangesResult);
		}
		if (array_key_exists ( "amountOnSale", $this->arrayResult )) {
		    $this->amountOnSale = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "unit", $this->arrayResult )) {
		    $this->unit = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "minOrderQuantity", $this->arrayResult )) {
		    $this->minOrderQuantity = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "batchNumber", $this->arrayResult )) {
		    $this->batchNumber = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "retailprice", $this->arrayResult )) {
		    $this->retailprice = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "tax", $this->arrayResult )) {
		    $this->tax = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "sellunit", $this->arrayResult )) {
		    $this->sellunit = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "quoteType", $this->arrayResult )) {
		    $this->quoteType = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "consignPrice", $this->arrayResult )) {
		    $this->consignPrice = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "cpsSuggestPrice", $this->arrayResult )) {
		    $this->cpsSuggestPrice = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "saleType", $this->arrayResult )) {
		    $this->saleType = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "deliveryLimit", $this->arrayResult )) {
		    $this->deliveryLimit = $arrayResult['${paramType.paramName}'];
		}
	}
}
