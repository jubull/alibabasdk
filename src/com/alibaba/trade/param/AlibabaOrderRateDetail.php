<?php

namespace com\alibaba\trade\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;

class AlibabaOrderRateDetail extends SDKDomain {


    private $starLevel;

    /**
     * @return mixed 评价星级
     */
    public function getStarLevel() {
        return $this->starLevel;
    }

    /**
     * 设置评价星级
     * @param Integer $starLevel
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setStarLevel( $starLevel) {
        $this->starLevel = $starLevel;
    }


    private $content;

    /**
     * @return mixed 评价详情
     */
    public function getContent() {
        return $this->content;
    }

    /**
     * 设置评价详情
     * @param String $content
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setContent( $content) {
        $this->content = $content;
    }


    private $receiverNick;

    /**
     * @return mixed 收到评价的用户昵称
     */
    public function getReceiverNick() {
        return $this->receiverNick;
    }

    /**
     * 设置收到评价的用户昵称
     * @param String $receiverNick
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setReceiverNick( $receiverNick) {
        $this->receiverNick = $receiverNick;
    }


    private $posterNick;

    /**
     * @return mixed 发送评价的用户昵称
     */
    public function getPosterNick() {
        return $this->posterNick;
    }

    /**
     * 设置发送评价的用户昵称
     * @param String $posterNick
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setPosterNick( $posterNick) {
        $this->posterNick = $posterNick;
    }


    private $publishTime;

    /**
     * @return mixed 评价上线时间
     */
    public function getPublishTime() {
        return $this->publishTime;
    }

    /**
     * 设置评价上线时间
     * @param Date $publishTime
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setPublishTime( $publishTime) {
        $this->publishTime = $publishTime;
    }


	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "starLevel", $this->stdResult )) {
		    $this->starLevel = $this->stdResult->{"starLevel"};
		}
		if (array_key_exists ( "content", $this->stdResult )) {
		    $this->content = $this->stdResult->{"content"};
		}
		if (array_key_exists ( "receiverNick", $this->stdResult )) {
		    $this->receiverNick = $this->stdResult->{"receiverNick"};
		}
		if (array_key_exists ( "posterNick", $this->stdResult )) {
		    $this->posterNick = $this->stdResult->{"posterNick"};
		}
		if (array_key_exists ( "publishTime", $this->stdResult )) {
		    $this->publishTime = $this->stdResult->{"publishTime"};
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "starLevel", $this->arrayResult )) {
		    $this->starLevel = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "content", $this->arrayResult )) {
		    $this->content = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "receiverNick", $this->arrayResult )) {
		    $this->receiverNick = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "posterNick", $this->arrayResult )) {
		    $this->posterNick = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "publishTime", $this->arrayResult )) {
		    $this->publishTime = $arrayResult['${paramType.paramName}'];
		}
	}
}
