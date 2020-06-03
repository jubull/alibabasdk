<?php

namespace com\alibaba\p4p\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;

class AlibabaPpFaasGinkgoLibUnionDtoRecommendOfferDTO extends SDKDomain {


    private $imgUrl;

    /**
     * @return mixed
     */
    public function getImgUrl() {
        return $this->imgUrl;
    }

    /**
     * 设置1
     * @param String $imgUrl
     * 参数示例：<pre>1</pre>
     * 此参数必填
     */
    public function setImgUrl( $imgUrl) {
        $this->imgUrl = $imgUrl;
    }


    private $offerId;

    /**
     * @return mixed
     */
    public function getOfferId() {
        return $this->offerId;
    }

    /**
     * 设置11
     * @param Long $offerId
     * 参数示例：<pre>1</pre>
     * 此参数必填
     */
    public function setOfferId( $offerId) {
        $this->offerId = $offerId;
    }


    private $recommendPrice;

    /**
     * @return mixed
     */
    public function getRecommendPrice() {
        return $this->recommendPrice;
    }

    /**
     * 设置1
     * @param Double $recommendPrice
     * 参数示例：<pre>1</pre>
     * 此参数必填
     */
    public function setRecommendPrice( $recommendPrice) {
        $this->recommendPrice = $recommendPrice;
    }


    private $recommendTitle;

    /**
     * @return mixed
     */
    public function getRecommendTitle() {
        return $this->recommendTitle;
    }

    /**
     * 设置1
     * @param String $recommendTitle
     * 参数示例：<pre>1</pre>
     * 此参数必填
     */
    public function setRecommendTitle( $recommendTitle) {
        $this->recommendTitle = $recommendTitle;
    }


	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "imgUrl", $this->stdResult )) {
		    $this->imgUrl = $this->stdResult->{"imgUrl"};
		}
		if (array_key_exists ( "offerId", $this->stdResult )) {
		    $this->offerId = $this->stdResult->{"offerId"};
		}
		if (array_key_exists ( "recommendPrice", $this->stdResult )) {
		    $this->recommendPrice = $this->stdResult->{"recommendPrice"};
		}
		if (array_key_exists ( "recommendTitle", $this->stdResult )) {
		    $this->recommendTitle = $this->stdResult->{"recommendTitle"};
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "imgUrl", $this->arrayResult )) {
		    $this->imgUrl = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "offerId", $this->arrayResult )) {
		    $this->offerId = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "recommendPrice", $this->arrayResult )) {
		    $this->recommendPrice = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "recommendTitle", $this->arrayResult )) {
		    $this->recommendTitle = $arrayResult['${paramType.paramName}'];
		}
	}
}
