<?php

namespace com\alibaba\p4p\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;


class AlibabaCpsOpenOfferDTO extends SDKDomain {


    private $loginId;

    /**
     * @return mixed login id
     */
    public function getLoginId() {
        return $this->loginId;
    }

    /**
     * 设置login id
     * @param String $loginId
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setLoginId( $loginId) {
        $this->loginId = $loginId;
    }


    private $companyName;

    /**
     * @return mixed 公司名称
     */
    public function getCompanyName() {
        return $this->companyName;
    }

    /**
     * 设置公司名称
     * @param String $companyName
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setCompanyName( $companyName) {
        $this->companyName = $companyName;
    }


    private $offerId;

    /**
     * @return mixed offer id
     */
    public function getOfferId() {
        return $this->offerId;
    }

    /**
     * 设置offer id
     * @param Long $offerId
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setOfferId( $offerId) {
        $this->offerId = $offerId;
    }


    private $sellerId;

    /**
     * @return mixed 卖家ID
     */
    public function getSellerId() {
        return $this->sellerId;
    }

    /**
     * 设置卖家ID
     * @param Long $sellerId
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setSellerId( $sellerId) {
        $this->sellerId = $sellerId;
    }


    private $title;

    /**
     * @return mixed offer名称
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * 设置offer名称
     * @param String $title
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setTitle( $title) {
        $this->title = $title;
    }


    private $url;

    /**
     * @return mixed offer链接
     */
    public function getUrl() {
        return $this->url;
    }

    /**
     * 设置offer链接
     * @param String $url
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setUrl( $url) {
        $this->url = $url;
    }


    private $imgUrl;

    /**
     * @return mixed offer主图
     */
    public function getImgUrl() {
        return $this->imgUrl;
    }

    /**
     * 设置offer主图
     * @param String $imgUrl
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setImgUrl( $imgUrl) {
        $this->imgUrl = $imgUrl;
    }


    private $ratio;

    /**
     * @return mixed 佣金比例
     */
    public function getRatio() {
        return $this->ratio;
    }

    /**
     * 设置佣金比例
     * @param Double $ratio
     * 参数示例：<pre>百分比</pre>
     * 此参数必填
     */
    public function setRatio( $ratio) {
        $this->ratio = $ratio;
    }


    private $type;

    /**
     * @return mixed 推广类型
     */
    public function getType() {
        return $this->type;
    }

    /**
     * 设置推广类型
     * @param Integer $type
     * 参数示例：<pre>0:全店 1:主推</pre>
     * 此参数必填
     */
    public function setType( $type) {
        $this->type = $type;
    }


    private $price;

    /**
     * @return mixed 商品价格
     */
    public function getPrice() {
        return $this->price;
    }

    /**
     * 设置商品价格
     * @param Double $price
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setPrice( $price) {
        $this->price = $price;
    }


    private $unit;

    /**
     * @return mixed 单位
     */
    public function getUnit() {
        return $this->unit;
    }

    /**
     * 设置单位
     * @param String $unit
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setUnit( $unit) {
        $this->unit = $unit;
    }


    private $saleQuantity;

    /**
     * @return mixed 销量(月)
     */
    public function getSaleQuantity() {
        return $this->saleQuantity;
    }

    /**
     * 设置销量(月)
     * @param Integer $saleQuantity
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setSaleQuantity( $saleQuantity) {
        $this->saleQuantity = $saleQuantity;
    }


    private $categoryId;

    /**
     * @return mixed 类目树id
     */
    public function getCategoryId() {
        return $this->categoryId;
    }

    /**
     * 设置类目树id
     * @param String $categoryId
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setCategoryId( $categoryId) {
        $this->categoryId = $categoryId;
    }


    private $tkCnt;

    /**
     * @return mixed 月推广量
     */
    public function getTkCnt() {
        return $this->tkCnt;
    }

    /**
     * 设置月推广量
     * @param Integer $tkCnt
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setTkCnt( $tkCnt) {
        $this->tkCnt = $tkCnt;
    }


    private $tkCommission;

    /**
     * @return mixed 月支出佣金
     */
    public function getTkCommission() {
        return $this->tkCommission;
    }

    /**
     * 设置月支出佣金
     * @param Double $tkCommission
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setTkCommission( $tkCommission) {
        $this->tkCommission = $tkCommission;
    }


    private $quantityBegin;

    /**
     * @return mixed 起批量
     */
    public function getQuantityBegin() {
        return $this->quantityBegin;
    }

    /**
     * 设置起批量
     * @param Integer $quantityBegin
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setQuantityBegin( $quantityBegin) {
        $this->quantityBegin = $quantityBegin;
    }


    private $scoreFh;

    /**
     * @return mixed 发货速度
     */
    public function getScoreFh() {
        return $this->scoreFh;
    }

    /**
     * 设置发货速度
     * @param Double $scoreFh
     * 参数示例：<pre>+代表比行业高，-代表比行业低</pre>
     * 此参数必填
     */
    public function setScoreFh( $scoreFh) {
        $this->scoreFh = $scoreFh;
    }


    private $scoreHmRate;

    /**
     * @return mixed 货物描述
     */
    public function getScoreHmRate() {
        return $this->scoreHmRate;
    }

    /**
     * 设置货物描述
     * @param Double $scoreHmRate
     * 参数示例：<pre>+代表比行业高，-代表比行业低</pre>
     * 此参数必填
     */
    public function setScoreHmRate( $scoreHmRate) {
        $this->scoreHmRate = $scoreHmRate;
    }


    private $scoreXyRate;

    /**
     * @return mixed 响应速度
     */
    public function getScoreXyRate() {
        return $this->scoreXyRate;
    }

    /**
     * 设置响应速度
     * @param Double $scoreXyRate
     * 参数示例：<pre>+代表比行业高，-代表比行业低</pre>
     * 此参数必填
     */
    public function setScoreXyRate( $scoreXyRate) {
        $this->scoreXyRate = $scoreXyRate;
    }


    private $slsjFlag;

    /**
     * @return mixed 实力商家标志
     */
    public function getSlsjFlag() {
        return $this->slsjFlag;
    }

    /**
     * 设置实力商家标志
     * @param Boolean $slsjFlag
     * 参数示例：<pre>true是；false否</pre>
     * 此参数必填
     */
    public function setSlsjFlag( $slsjFlag) {
        $this->slsjFlag = $slsjFlag;
    }


    private $sdrzFlag;

    /**
     * @return mixed 深度认证标志
     */
    public function getSdrzFlag() {
        return $this->sdrzFlag;
    }

    /**
     * 设置深度认证标志
     * @param Boolean $sdrzFlag
     * 参数示例：<pre>true是；false否</pre>
     * 此参数必填
     */
    public function setSdrzFlag( $sdrzFlag) {
        $this->sdrzFlag = $sdrzFlag;
    }


    private $jkhyFlag;

    /**
     * @return mixed 进口货源标志
     */
    public function getJkhyFlag() {
        return $this->jkhyFlag;
    }

    /**
     * 设置进口货源标志
     * @param Boolean $jkhyFlag
     * 参数示例：<pre>true是；false否</pre>
     * 此参数必填
     */
    public function setJkhyFlag( $jkhyFlag) {
        $this->jkhyFlag = $jkhyFlag;
    }


    private $yjdfFlag;

    /**
     * @return mixed 一件代发标志
     */
    public function getYjdfFlag() {
        return $this->yjdfFlag;
    }

    /**
     * 设置一件代发标志
     * @param Boolean $yjdfFlag
     * 参数示例：<pre>true是；false否</pre>
     * 此参数必填
     */
    public function setYjdfFlag( $yjdfFlag) {
        $this->yjdfFlag = $yjdfFlag;
    }


    private $tpServiceYear;

    /**
     * @return mixed 诚信通年限
     */
    public function getTpServiceYear() {
        return $this->tpServiceYear;
    }

    /**
     * 设置诚信通年限
     * @param Integer $tpServiceYear
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setTpServiceYear( $tpServiceYear) {
        $this->tpServiceYear = $tpServiceYear;
    }


    private $yhqFlag;

    /**
     * @return mixed 优惠券标志
     */
    public function getYhqFlag() {
        return $this->yhqFlag;
    }

    /**
     * 设置优惠券标志
     * @param Boolean $yhqFlag
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setYhqFlag( $yhqFlag) {
        $this->yhqFlag = $yhqFlag;
    }


    private $yhqDiscountFee;

    /**
     * @return mixed 优惠券面额，单位为元
     */
    public function getYhqDiscountFee() {
        return $this->yhqDiscountFee;
    }

    /**
     * 设置优惠券面额，单位为元
     * @param Double $yhqDiscountFee
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setYhqDiscountFee( $yhqDiscountFee) {
        $this->yhqDiscountFee = $yhqDiscountFee;
    }


    private $yhqRemainingCount;

    /**
     * @return mixed 优惠券余量
     */
    public function getYhqRemainingCount() {
        return $this->yhqRemainingCount;
    }

    /**
     * 设置优惠券余量
     * @param Integer $yhqRemainingCount
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setYhqRemainingCount( $yhqRemainingCount) {
        $this->yhqRemainingCount = $yhqRemainingCount;
    }


    private $yhqExt;

    /**
     * @return mixed 优惠券其他信息
     */
    public function getYhqExt() {
        return $this->yhqExt;
    }

    /**
     * 设置优惠券其他信息
     * @param String $yhqExt
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setYhqExt( $yhqExt) {
        $this->yhqExt = $yhqExt;
    }


	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "loginId", $this->stdResult )) {
		    $this->loginId = $this->stdResult->{"loginId"};
		}
		if (array_key_exists ( "companyName", $this->stdResult )) {
		    $this->companyName = $this->stdResult->{"companyName"};
		}
		if (array_key_exists ( "offerId", $this->stdResult )) {
		    $this->offerId = $this->stdResult->{"offerId"};
		}
		if (array_key_exists ( "sellerId", $this->stdResult )) {
		    $this->sellerId = $this->stdResult->{"sellerId"};
		}
		if (array_key_exists ( "title", $this->stdResult )) {
		    $this->title = $this->stdResult->{"title"};
		}
		if (array_key_exists ( "url", $this->stdResult )) {
		    $this->url = $this->stdResult->{"url"};
		}
		if (array_key_exists ( "imgUrl", $this->stdResult )) {
		    $this->imgUrl = $this->stdResult->{"imgUrl"};
		}
		if (array_key_exists ( "ratio", $this->stdResult )) {
		    $this->ratio = $this->stdResult->{"ratio"};
		}
		if (array_key_exists ( "type", $this->stdResult )) {
		    $this->type = $this->stdResult->{"type"};
		}
		if (array_key_exists ( "price", $this->stdResult )) {
		    $this->price = $this->stdResult->{"price"};
		}
		if (array_key_exists ( "unit", $this->stdResult )) {
		    $this->unit = $this->stdResult->{"unit"};
		}
		if (array_key_exists ( "saleQuantity", $this->stdResult )) {
		    $this->saleQuantity = $this->stdResult->{"saleQuantity"};
		}
		if (array_key_exists ( "categoryId", $this->stdResult )) {
		    $this->categoryId = $this->stdResult->{"categoryId"};
		}
		if (array_key_exists ( "tkCnt", $this->stdResult )) {
		    $this->tkCnt = $this->stdResult->{"tkCnt"};
		}
		if (array_key_exists ( "tkCommission", $this->stdResult )) {
		    $this->tkCommission = $this->stdResult->{"tkCommission"};
		}
		if (array_key_exists ( "quantityBegin", $this->stdResult )) {
		    $this->quantityBegin = $this->stdResult->{"quantityBegin"};
		}
		if (array_key_exists ( "scoreFh", $this->stdResult )) {
		    $this->scoreFh = $this->stdResult->{"scoreFh"};
		}
		if (array_key_exists ( "scoreHmRate", $this->stdResult )) {
		    $this->scoreHmRate = $this->stdResult->{"scoreHmRate"};
		}
		if (array_key_exists ( "scoreXyRate", $this->stdResult )) {
		    $this->scoreXyRate = $this->stdResult->{"scoreXyRate"};
		}
		if (array_key_exists ( "slsjFlag", $this->stdResult )) {
		    $this->slsjFlag = $this->stdResult->{"slsjFlag"};
		}
		if (array_key_exists ( "sdrzFlag", $this->stdResult )) {
		    $this->sdrzFlag = $this->stdResult->{"sdrzFlag"};
		}
		if (array_key_exists ( "jkhyFlag", $this->stdResult )) {
		    $this->jkhyFlag = $this->stdResult->{"jkhyFlag"};
		}
		if (array_key_exists ( "yjdfFlag", $this->stdResult )) {
		    $this->yjdfFlag = $this->stdResult->{"yjdfFlag"};
		}
		if (array_key_exists ( "tpServiceYear", $this->stdResult )) {
		    $this->tpServiceYear = $this->stdResult->{"tpServiceYear"};
		}
		if (array_key_exists ( "yhqFlag", $this->stdResult )) {
		    $this->yhqFlag = $this->stdResult->{"yhqFlag"};
		}
		if (array_key_exists ( "yhqDiscountFee", $this->stdResult )) {
		    $this->yhqDiscountFee = $this->stdResult->{"yhqDiscountFee"};
		}
		if (array_key_exists ( "yhqRemainingCount", $this->stdResult )) {
		    $this->yhqRemainingCount = $this->stdResult->{"yhqRemainingCount"};
		}
		if (array_key_exists ( "yhqExt", $this->stdResult )) {
		    $this->yhqExt = $this->stdResult->{"yhqExt"};
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "loginId", $this->arrayResult )) {
		    $this->loginId = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "companyName", $this->arrayResult )) {
		    $this->companyName = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "offerId", $this->arrayResult )) {
		    $this->offerId = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "sellerId", $this->arrayResult )) {
		    $this->sellerId = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "title", $this->arrayResult )) {
		    $this->title = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "url", $this->arrayResult )) {
		    $this->url = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "imgUrl", $this->arrayResult )) {
		    $this->imgUrl = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "ratio", $this->arrayResult )) {
		    $this->ratio = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "type", $this->arrayResult )) {
		    $this->type = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "price", $this->arrayResult )) {
		    $this->price = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "unit", $this->arrayResult )) {
		    $this->unit = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "saleQuantity", $this->arrayResult )) {
		    $this->saleQuantity = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "categoryId", $this->arrayResult )) {
		    $this->categoryId = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "tkCnt", $this->arrayResult )) {
		    $this->tkCnt = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "tkCommission", $this->arrayResult )) {
		    $this->tkCommission = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "quantityBegin", $this->arrayResult )) {
		    $this->quantityBegin = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "scoreFh", $this->arrayResult )) {
		    $this->scoreFh = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "scoreHmRate", $this->arrayResult )) {
		    $this->scoreHmRate = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "scoreXyRate", $this->arrayResult )) {
		    $this->scoreXyRate = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "slsjFlag", $this->arrayResult )) {
		    $this->slsjFlag = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "sdrzFlag", $this->arrayResult )) {
		    $this->sdrzFlag = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "jkhyFlag", $this->arrayResult )) {
		    $this->jkhyFlag = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "yjdfFlag", $this->arrayResult )) {
		    $this->yjdfFlag = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "tpServiceYear", $this->arrayResult )) {
		    $this->tpServiceYear = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "yhqFlag", $this->arrayResult )) {
		    $this->yhqFlag = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "yhqDiscountFee", $this->arrayResult )) {
		    $this->yhqDiscountFee = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "yhqRemainingCount", $this->arrayResult )) {
		    $this->yhqRemainingCount = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "yhqExt", $this->arrayResult )) {
		    $this->yhqExt = $arrayResult['${paramType.paramName}'];
		}
	}
}
