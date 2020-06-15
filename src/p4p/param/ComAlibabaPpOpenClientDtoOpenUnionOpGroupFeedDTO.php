<?php

namespace com\alibaba\p4p\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;

class ComAlibabaPpOpenClientDtoOpenUnionOpGroupFeedDTO extends SDKDomain {


    private $createTime;

    /**
     * @return mixed 加入选品组时间
     */
    public function getCreateTime() {
        return $this->createTime;
    }

    /**
     * 设置加入选品组时间
     * @param Date $createTime
     * 参数示例：<pre>20190410000000000+0800</pre>
     * 此参数必填
     */
    public function setCreateTime( $createTime) {
        $this->createTime = $createTime;
    }


    private $feedId;

    /**
     * @return mixed 商品id
     */
    public function getFeedId() {
        return $this->feedId;
    }

    /**
     * 设置商品id
     * @param Long $feedId
     * 参数示例：<pre>11</pre>
     * 此参数必填
     */
    public function setFeedId( $feedId) {
        $this->feedId = $feedId;
    }


    private $title;

    /**
     * @return mixed 商品标题
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * 设置商品标题
     * @param String $title
     * 参数示例：<pre>标题</pre>
     * 此参数必填
     */
    public function setTitle( $title) {
        $this->title = $title;
    }


    private $price;

    /**
     * @return mixed 原则
     */
    public function getPrice() {
        return $this->price;
    }

    /**
     * 设置原则
     * @param String $price
     * 参数示例：<pre>1.1</pre>
     * 此参数必填
     */
    public function setPrice( $price) {
        $this->price = $price;
    }


    private $promotionPrice;

    /**
     * @return mixed 超买价
     */
    public function getPromotionPrice() {
        return $this->promotionPrice;
    }

    /**
     * 设置超买价
     * @param String $promotionPrice
     * 参数示例：<pre>0.9</pre>
     * 此参数必填
     */
    public function setPromotionPrice( $promotionPrice) {
        $this->promotionPrice = $promotionPrice;
    }


    private $promotionSpace;

    /**
     * @return mixed 优惠空间
     */
    public function getPromotionSpace() {
        return $this->promotionSpace;
    }

    /**
     * 设置优惠空间
     * @param String $promotionSpace
     * 参数示例：<pre>-</pre>
     * 此参数必填
     */
    public function setPromotionSpace( $promotionSpace) {
        $this->promotionSpace = $promotionSpace;
    }


    private $invalid;

    /**
     * @return mixed 是否失效，有效false;无效true，查看invalidInfo字段失效原因
     */
    public function getInvalid() {
        return $this->invalid;
    }

    /**
     * 设置是否失效，有效false;无效true，查看invalidInfo字段失效原因
     * @param Boolean $invalid
     * 参数示例：<pre>false</pre>
     * 此参数必填
     */
    public function setInvalid( $invalid) {
        $this->invalid = $invalid;
    }


    private $invalidInfo;

    /**
     * @return mixed 失效信息
     */
    public function getInvalidInfo() {
        return $this->invalidInfo;
    }

    /**
     * 设置失效信息
     * @param String $invalidInfo
     * 参数示例：<pre>下架</pre>
     * 此参数必填
     */
    public function setInvalidInfo( $invalidInfo) {
        $this->invalidInfo = $invalidInfo;
    }


    private $imgUrl;

    /**
     * @return mixed 商品首图
     */
    public function getImgUrl() {
        return $this->imgUrl;
    }

    /**
     * 设置商品首图
     * @param String $imgUrl
     * 参数示例：<pre>http://img.com</pre>
     * 此参数必填
     */
    public function setImgUrl( $imgUrl) {
        $this->imgUrl = $imgUrl;
    }


    private $saleCount;

    /**
     * @return mixed 销量
     */
    public function getSaleCount() {
        return $this->saleCount;
    }

    /**
     * 设置销量
     * @param String $saleCount
     * 参数示例：<pre>333</pre>
     * 此参数必填
     */
    public function setSaleCount( $saleCount) {
        $this->saleCount = $saleCount;
    }


	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "createTime", $this->stdResult )) {
		    $this->createTime = $this->stdResult->{"createTime"};
		}
		if (array_key_exists ( "feedId", $this->stdResult )) {
		    $this->feedId = $this->stdResult->{"feedId"};
		}
		if (array_key_exists ( "title", $this->stdResult )) {
		    $this->title = $this->stdResult->{"title"};
		}
		if (array_key_exists ( "price", $this->stdResult )) {
		    $this->price = $this->stdResult->{"price"};
		}
		if (array_key_exists ( "promotionPrice", $this->stdResult )) {
		    $this->promotionPrice = $this->stdResult->{"promotionPrice"};
		}
		if (array_key_exists ( "promotionSpace", $this->stdResult )) {
		    $this->promotionSpace = $this->stdResult->{"promotionSpace"};
		}
		if (array_key_exists ( "invalid", $this->stdResult )) {
		    $this->invalid = $this->stdResult->{"invalid"};
		}
		if (array_key_exists ( "invalidInfo", $this->stdResult )) {
		    $this->invalidInfo = $this->stdResult->{"invalidInfo"};
		}
		if (array_key_exists ( "imgUrl", $this->stdResult )) {
		    $this->imgUrl = $this->stdResult->{"imgUrl"};
		}
		if (array_key_exists ( "saleCount", $this->stdResult )) {
		    $this->saleCount = $this->stdResult->{"saleCount"};
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "createTime", $this->arrayResult )) {
		    $this->createTime = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "feedId", $this->arrayResult )) {
		    $this->feedId = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "title", $this->arrayResult )) {
		    $this->title = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "price", $this->arrayResult )) {
		    $this->price = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "promotionPrice", $this->arrayResult )) {
		    $this->promotionPrice = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "promotionSpace", $this->arrayResult )) {
		    $this->promotionSpace = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "invalid", $this->arrayResult )) {
		    $this->invalid = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "invalidInfo", $this->arrayResult )) {
		    $this->invalidInfo = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "imgUrl", $this->arrayResult )) {
		    $this->imgUrl = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "saleCount", $this->arrayResult )) {
		    $this->saleCount = $arrayResult['${paramType.paramName}'];
		}
	}
}
