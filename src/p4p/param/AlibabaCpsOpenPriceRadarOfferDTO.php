<?php

namespace com\alibaba\p4p\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;


class AlibabaCpsOpenPriceRadarOfferDTO extends SDKDomain {


    private $offerId;

    /**
     * @return mixed offerId
     */
    public function getOfferId() {
        return $this->offerId;
    }

    /**
     * 设置offerId
     * @param Long $offerId
     * 参数示例：<pre>1111</pre>
     * 此参数必填
     */
    public function setOfferId( $offerId) {
        $this->offerId = $offerId;
    }


    private $price;

    /**
     * @return mixed 当前商品价格
     */
    public function getPrice() {
        return $this->price;
    }

    /**
     * 设置当前商品价格
     * @param Double $price
     * 参数示例：<pre>21.1</pre>
     * 此参数必填
     */
    public function setPrice( $price) {
        $this->price = $price;
    }


    private $selfAveragePrice;

    /**
     * @return mixed 商品近30天平均成交价
     */
    public function getSelfAveragePrice() {
        return $this->selfAveragePrice;
    }

    /**
     * 设置商品近30天平均成交价
     * @param Double $selfAveragePrice
     * 参数示例：<pre>22.1</pre>
     * 此参数必填
     */
    public function setSelfAveragePrice( $selfAveragePrice) {
        $this->selfAveragePrice = $selfAveragePrice;
    }


    private $marketAveragePrice;

    /**
     * @return mixed 零售市场近30天平均成交价
     */
    public function getMarketAveragePrice() {
        return $this->marketAveragePrice;
    }

    /**
     * 设置零售市场近30天平均成交价
     * @param Double $marketAveragePrice
     * 参数示例：<pre>23.1</pre>
     * 此参数必填
     */
    public function setMarketAveragePrice( $marketAveragePrice) {
        $this->marketAveragePrice = $marketAveragePrice;
    }


	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "offerId", $this->stdResult )) {
		    $this->offerId = $this->stdResult->{"offerId"};
		}
		if (array_key_exists ( "price", $this->stdResult )) {
		    $this->price = $this->stdResult->{"price"};
		}
		if (array_key_exists ( "selfAveragePrice", $this->stdResult )) {
		    $this->selfAveragePrice = $this->stdResult->{"selfAveragePrice"};
		}
		if (array_key_exists ( "marketAveragePrice", $this->stdResult )) {
		    $this->marketAveragePrice = $this->stdResult->{"marketAveragePrice"};
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "offerId", $this->arrayResult )) {
		    $this->offerId = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "price", $this->arrayResult )) {
		    $this->price = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "selfAveragePrice", $this->arrayResult )) {
		    $this->selfAveragePrice = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "marketAveragePrice", $this->arrayResult )) {
		    $this->marketAveragePrice = $arrayResult['${paramType.paramName}'];
		}
	}
}
