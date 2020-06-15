<?php

namespace com\alibaba\p4p\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;


class AlibabaWxbUnionClientModelDtoOverPricedCybSearchOffersDTO extends SDKDomain {


    private $title;

    /**
     * @return mixed todo
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * 设置todo
     * @param String $title
     * 参数示例：<pre>todo</pre>
     * 此参数必填
     */
    public function setTitle( $title) {
        $this->title = $title;
    }


    private $imgUrl;

    /**
     * @return mixed todo
     */
    public function getImgUrl() {
        return $this->imgUrl;
    }

    /**
     * 设置todo
     * @param String $imgUrl
     * 参数示例：<pre>todo</pre>
     * 此参数必填
     */
    public function setImgUrl( $imgUrl) {
        $this->imgUrl = $imgUrl;
    }


    private $offerId;

    /**
     * @return mixed todo
     */
    public function getOfferId() {
        return $this->offerId;
    }

    /**
     * 设置todo
     * @param Long $offerId
     * 参数示例：<pre>todo</pre>
     * 此参数必填
     */
    public function setOfferId( $offerId) {
        $this->offerId = $offerId;
    }


    private $soldOut;

    /**
     * @return mixed todo
     */
    public function getSoldOut() {
        return $this->soldOut;
    }

    /**
     * 设置todo
     * @param Long $soldOut
     * 参数示例：<pre>todo</pre>
     * 此参数必填
     */
    public function setSoldOut( $soldOut) {
        $this->soldOut = $soldOut;
    }


    private $superBuyerPrice;

    /**
     * @return mixed todo
     */
    public function getSuperBuyerPrice() {
        return $this->superBuyerPrice;
    }

    /**
     * 设置todo
     * @param Double $superBuyerPrice
     * 参数示例：<pre>todo</pre>
     * 此参数必填
     */
    public function setSuperBuyerPrice( $superBuyerPrice) {
        $this->superBuyerPrice = $superBuyerPrice;
    }


    private $enable;

    /**
     * @return mixed todo
     */
    public function getEnable() {
        return $this->enable;
    }

    /**
     * 设置todo
     * @param Boolean $enable
     * 参数示例：<pre>todo</pre>
     * 此参数必填
     */
    public function setEnable( $enable) {
        $this->enable = $enable;
    }


    private $profit;

    /**
     * @return mixed todo
     */
    public function getProfit() {
        return $this->profit;
    }

    /**
     * 设置todo
     * @param String $profit
     * 参数示例：<pre>todo</pre>
     * 此参数必填
     */
    public function setProfit( $profit) {
        $this->profit = $profit;
    }


	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "title", $this->stdResult )) {
		    $this->title = $this->stdResult->{"title"};
		}
		if (array_key_exists ( "imgUrl", $this->stdResult )) {
		    $this->imgUrl = $this->stdResult->{"imgUrl"};
		}
		if (array_key_exists ( "offerId", $this->stdResult )) {
		    $this->offerId = $this->stdResult->{"offerId"};
		}
		if (array_key_exists ( "soldOut", $this->stdResult )) {
		    $this->soldOut = $this->stdResult->{"soldOut"};
		}
		if (array_key_exists ( "superBuyerPrice", $this->stdResult )) {
		    $this->superBuyerPrice = $this->stdResult->{"superBuyerPrice"};
		}
		if (array_key_exists ( "enable", $this->stdResult )) {
		    $this->enable = $this->stdResult->{"enable"};
		}
		if (array_key_exists ( "profit", $this->stdResult )) {
		    $this->profit = $this->stdResult->{"profit"};
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "title", $this->arrayResult )) {
		    $this->title = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "imgUrl", $this->arrayResult )) {
		    $this->imgUrl = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "offerId", $this->arrayResult )) {
		    $this->offerId = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "soldOut", $this->arrayResult )) {
		    $this->soldOut = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "superBuyerPrice", $this->arrayResult )) {
		    $this->superBuyerPrice = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "enable", $this->arrayResult )) {
		    $this->enable = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "profit", $this->arrayResult )) {
		    $this->profit = $arrayResult['${paramType.paramName}'];
		}
	}
}
