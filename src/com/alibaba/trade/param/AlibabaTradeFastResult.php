<?php

namespace com\alibaba\trade\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use com\alibaba\trade\param\AlibabaTradeFastOffer;


class AlibabaTradeFastResult extends SDKDomain {


    private $totalSuccessAmount;

	/**
	 * @return mixed 下单成功的订单总金额，单位：分
	 */
	public function getTotalSuccessAmount() {
        return $this->totalSuccessAmount;
    }

    /**
     * 设置下单成功的订单总金额，单位：分
     * @param Long $totalSuccessAmount
     * 参数示例：<pre>1000</pre>
     * 此参数必填
	 */
    public function setTotalSuccessAmount( $totalSuccessAmount) {
        $this->totalSuccessAmount = $totalSuccessAmount;
    }


    private $orderId;

	/**
	 * @return mixed 下单成功后的订单id
	 */
	public function getOrderId() {
        return $this->orderId;
    }

    /**
     * 设置下单成功后的订单id
     * @param String $orderId
     * 参数示例：<pre>60241415417789305</pre>
     * 此参数必填
	 */
    public function setOrderId( $orderId) {
        $this->orderId = $orderId;
    }


    private $failedOfferList;

	/**
	 * @return mixed 下单失败的商品信息
	 */
	public function getFailedOfferList() {
        return $this->failedOfferList;
    }

	/**
	 * 设置下单失败的商品信息
	 * @param \com\alibaba\trade\param\AlibabaTradeFastOffer $failedOfferList
	 * 参数示例：<pre></pre>
	 * 此参数必填
	 */
    public function setFailedOfferList(AlibabaTradeFastOffer $failedOfferList) {
        $this->failedOfferList = $failedOfferList;
    }


    private $postFee;

	/**
	 * @return mixed 创建订单时的运费
	 */
	public function getPostFee() {
        return $this->postFee;
    }

    /**
     * 设置创建订单时的运费
     * @param Long $postFee
     * 参数示例：<pre></pre>
     * 此参数必填
	 */
    public function setPostFee( $postFee) {
        $this->postFee = $postFee;
    }


	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "totalSuccessAmount", $this->stdResult )) {
			$this->totalSuccessAmount = $this->stdResult->{"totalSuccessAmount"};
		}
		if (array_key_exists ( "orderId", $this->stdResult )) {
			$this->orderId = $this->stdResult->{"orderId"};
		}
		if (array_key_exists ( "failedOfferList", $this->stdResult )) {
			$failedOfferListResult=$this->stdResult->{"failedOfferList"};
			$object = json_decode(json_encode($failedOfferListResult),true);
			$this->failedOfferList = array ();
			for($i = 0; $i < count ( $object ); $i ++) {
				$arrayobject = new \ArrayObject($object[$i]);
				$AlibabaTradeFastOfferResult=new AlibabaTradeFastOffer();
				$AlibabaTradeFastOfferResult->setArrayResult($arrayobject );
				$this->failedOfferList [$i] = $AlibabaTradeFastOfferResult;
			}
		}
		if (array_key_exists ( "postFee", $this->stdResult )) {
			$this->postFee = $this->stdResult->{"postFee"};
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "totalSuccessAmount", $this->arrayResult )) {
			$this->totalSuccessAmount = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "orderId", $this->arrayResult )) {
			$this->orderId = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "failedOfferList", $this->arrayResult )) {
    		$failedOfferListResult=$arrayResult['${paramType.paramName}'];
    		$this->failedOfferList = new AlibabaTradeFastOffer();
    		$this->failedOfferList->setStdResult ( $failedOfferListResult);
		}
		if (array_key_exists ( "postFee", $this->arrayResult )) {
			$this->postFee = $arrayResult['${paramType.paramName}'];
		}
	}
}
