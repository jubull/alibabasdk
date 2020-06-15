<?php

namespace com\alibaba\trade\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use com\alibaba\trade\param\AlibabaOrderRateDetail;


class AlibabaTradeOrderRateInfo extends SDKDomain {


    private $buyerRateStatus;

	/**
	 * @return mixed 买家评价状态(4:已评论,5:未评论,6;不需要评论)
	 */
	public function getBuyerRateStatus() {
        return $this->buyerRateStatus;
    }

    /**
     * 设置买家评价状态(4:已评论,5:未评论,6;不需要评论)
     * @param Integer $buyerRateStatus
     * 参数示例：<pre></pre>
     * 此参数必填
	 */
    public function setBuyerRateStatus( $buyerRateStatus) {
        $this->buyerRateStatus = $buyerRateStatus;
    }


    private $sellerRateStatus;

	/**
	 * @return mixed 卖家评价状态(4:已评论,5:未评论,6;不需要评论)
	 */
	public function getSellerRateStatus() {
        return $this->sellerRateStatus;
    }

    /**
     * 设置卖家评价状态(4:已评论,5:未评论,6;不需要评论)
     * @param Integer $sellerRateStatus
     * 参数示例：<pre></pre>
     * 此参数必填
	 */
    public function setSellerRateStatus( $sellerRateStatus) {
        $this->sellerRateStatus = $sellerRateStatus;
    }


    private $buyerRateList;

	/**
	 * @return mixed 卖家給买家的评价
	 */
	public function getBuyerRateList() {
        return $this->buyerRateList;
    }

	/**
	 * 设置卖家給买家的评价
	 * @param \com\alibaba\trade\param\AlibabaOrderRateDetail $buyerRateList
	 * 参数示例：<pre></pre>
	 * 此参数必填
	 */
    public function setBuyerRateList(AlibabaOrderRateDetail $buyerRateList) {
        $this->buyerRateList = $buyerRateList;
    }


    private $sellerRateList;

	/**
	 * @return mixed 买家給卖家的评价
	 */
	public function getSellerRateList() {
        return $this->sellerRateList;
    }

	/**
	 * 设置买家給卖家的评价
	 * @param \com\alibaba\trade\param\AlibabaOrderRateDetail $sellerRateList
	 * 参数示例：<pre></pre>
	 * 此参数必填
	 */
    public function setSellerRateList(AlibabaOrderRateDetail $sellerRateList) {
        $this->sellerRateList = $sellerRateList;
    }

	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "buyerRateStatus", $this->stdResult )) {
			$this->buyerRateStatus = $this->stdResult->{"buyerRateStatus"};
		}
		if (array_key_exists ( "sellerRateStatus", $this->stdResult )) {
			$this->sellerRateStatus = $this->stdResult->{"sellerRateStatus"};
		}
		if (array_key_exists ( "buyerRateList", $this->stdResult )) {
			$buyerRateListResult=$this->stdResult->{"buyerRateList"};
			$object = json_decode(json_encode($buyerRateListResult), true);
			$this->buyerRateList = array ();
			for($i = 0; $i < count ( $object ); $i ++) {
				$arrayobject = new \ArrayObject($object[$i]);
				$AlibabaOrderRateDetailResult=new AlibabaOrderRateDetail();
				$AlibabaOrderRateDetailResult->setArrayResult($arrayobject );
				$this->buyerRateList [$i] = $AlibabaOrderRateDetailResult;
			}
		}
		if (array_key_exists ( "sellerRateList", $this->stdResult )) {
			$sellerRateListResult=$this->stdResult->{"sellerRateList"};
			$object = json_decode ( json_encode ( $sellerRateListResult ), true );
			$this->sellerRateList = array ();
			for($i = 0; $i < count ( $object ); $i ++) {
				$arrayobject = new \ArrayObject($object[$i]);
				$AlibabaOrderRateDetailResult=new AlibabaOrderRateDetail();
				$AlibabaOrderRateDetailResult->setArrayResult($arrayobject );
				$this->sellerRateList [$i] = $AlibabaOrderRateDetailResult;
			}
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "buyerRateStatus", $this->arrayResult )) {
			$this->buyerRateStatus = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "sellerRateStatus", $this->arrayResult )) {
			$this->sellerRateStatus = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "buyerRateList", $this->arrayResult )) {
    		$buyerRateListResult=$arrayResult['${paramType.paramName}'];
    		$this->buyerRateList = new AlibabaOrderRateDetail();
    		$this->buyerRateList->setStdResult ( $buyerRateListResult);
		}
		if (array_key_exists ( "sellerRateList", $this->arrayResult )) {
    		$sellerRateListResult=$arrayResult['${paramType.paramName}'];
    		$this->sellerRateList = new AlibabaOrderRateDetail();
    		$this->sellerRateList->setStdResult ( $sellerRateListResult);
		}
	}
}
