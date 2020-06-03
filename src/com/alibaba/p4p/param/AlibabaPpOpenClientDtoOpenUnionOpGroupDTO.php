<?php

namespace com\alibaba\p4p\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;

class AlibabaPpOpenClientDtoOpenUnionOpGroupDTO extends SDKDomain {


    private $createTime;

    /**
     * @return mixed 选品组创建时间
     */
    public function getCreateTime() {
        return $this->createTime;
    }

    /**
     * 设置选品组创建时间
     * @param Date $createTime
     * 参数示例：<pre>20190410000000000+0800</pre>
     * 此参数必填
     */
    public function setCreateTime( $createTime) {
        $this->createTime = $createTime;
    }


    private $feedCount;

    /**
     * @return mixed 选品组下商品总数
     */
    public function getFeedCount() {
        return $this->feedCount;
    }

    /**
     * 设置选品组下商品总数
     * @param Long $feedCount
     * 参数示例：<pre>12</pre>
     * 此参数必填
     */
    public function setFeedCount( $feedCount) {
        $this->feedCount = $feedCount;
    }


    private $id;

    /**
     * @return mixed 选品组id
     */
    public function getId() {
        return $this->id;
    }

    /**
     * 设置选品组id
     * @param Long $id
     * 参数示例：<pre>11111</pre>
     * 此参数必填
     */
    public function setId( $id) {
        $this->id = $id;
    }


    private $title;

    /**
     * @return mixed 选品组标题
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * 设置选品组标题
     * @param String $title
     * 参数示例：<pre>我的选品组</pre>
     * 此参数必填
     */
    public function setTitle( $title) {
        $this->title = $title;
    }


	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "createTime", $this->stdResult )) {
		    $this->createTime = $this->stdResult->{"createTime"};
		}
		if (array_key_exists ( "feedCount", $this->stdResult )) {
		    $this->feedCount = $this->stdResult->{"feedCount"};
		}
		if (array_key_exists ( "id", $this->stdResult )) {
		    $this->id = $this->stdResult->{"id"};
		}
		if (array_key_exists ( "title", $this->stdResult )) {
		    $this->title = $this->stdResult->{"title"};
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "createTime", $this->arrayResult )) {
		    $this->createTime = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "feedCount", $this->arrayResult )) {
		    $this->feedCount = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "id", $this->arrayResult )) {
		    $this->id = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "title", $this->arrayResult )) {
		    $this->title = $arrayResult['${paramType.paramName}'];
		}
	}
}
