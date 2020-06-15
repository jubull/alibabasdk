<?php

namespace com\alibaba\trade\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;

class TradeModelExtensionList extends SDKDomain {


    private $tradeWay;

    /**
     * @return mixed 交易方式
     */
    public function getTradeWay() {
        return $this->tradeWay;
    }

    /**
     * 设置交易方式
     * @param String $tradeWay
     * 参数示例：<pre> </pre>
     * 此参数必填
     */
    public function setTradeWay( $tradeWay) {
        $this->tradeWay = $tradeWay;
    }


    private $name;

    /**
     * @return mixed 交易方式名称
     */
    public function getName() {
        return $this->name;
    }

    /**
     * 设置交易方式名称
     * @param String $name
     * 参数示例：<pre> </pre>
     * 此参数必填
     */
    public function setName( $name) {
        $this->name = $name;
    }


    private $tradeType;

    /**
     * @return mixed 开放平台下单时候传入的tradeType
     */
    public function getTradeType() {
        return $this->tradeType;
    }

    /**
     * 设置开放平台下单时候传入的tradeType
     * @param String $tradeType
     * 参数示例：<pre> </pre>
     * 此参数必填
     */
    public function setTradeType( $tradeType) {
        $this->tradeType = $tradeType;
    }


    private $description;

    /**
     * @return mixed 交易描述
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * 设置交易描述
     * @param String $description
     * 参数示例：<pre> </pre>
     * 此参数必填
     */
    public function setDescription( $description) {
        $this->description = $description;
    }


    private $opSupport;

    /**
     * @return mixed 是否支持
     */
    public function getOpSupport() {
        return $this->opSupport;
    }

    /**
     * 设置是否支持
     * @param Boolean $opSupport
     * 参数示例：<pre> </pre>
     * 此参数必填
     */
    public function setOpSupport( $opSupport) {
        $this->opSupport = $opSupport;
    }


	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;

		if (array_key_exists ( "tradeWay", $this->stdResult )) {
		    $this->tradeWay = $this->stdResult->{"tradeWay"};
		}

		if (array_key_exists ( "name", $this->stdResult )) {
		    $this->name = $this->stdResult->{"name"};
		}

		if (array_key_exists ( "tradeType", $this->stdResult )) {
		    $this->tradeType = $this->stdResult->{"tradeType"};
		}

		if (array_key_exists ( "description", $this->stdResult )) {
		    $this->description = $this->stdResult->{"description"};
		}

		if (array_key_exists ( "opSupport", $this->stdResult )) {
		    $this->opSupport = $this->stdResult->{"opSupport"};
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;

		if (array_key_exists ( "tradeWay", $this->arrayResult )) {
		    $this->tradeWay = $arrayResult['${paramType.paramName}'];
		}

		if (array_key_exists ( "name", $this->arrayResult )) {
		    $this->name = $arrayResult['${paramType.paramName}'];
		}

		if (array_key_exists ( "tradeType", $this->arrayResult )) {
		    $this->tradeType = $arrayResult['${paramType.paramName}'];
		}

		if (array_key_exists ( "description", $this->arrayResult )) {
		    $this->description = $arrayResult['${paramType.paramName}'];
		}

		if (array_key_exists ( "opSupport", $this->arrayResult )) {
		    $this->opSupport = $arrayResult['${paramType.paramName}'];
		}
	}
}
