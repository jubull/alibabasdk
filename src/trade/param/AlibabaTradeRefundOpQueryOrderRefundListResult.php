<?php

namespace com\alibaba\trade\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use com\alibaba\trade\param\AlibabaTradeRefundOpOrderRefundModel;


class AlibabaTradeRefundOpQueryOrderRefundListResult extends SDKDomain {


    private $opOrderRefundModels;

	/**
	 * @return mixed 退款单列表
	 */
	public function getOpOrderRefundModels() {
        return $this->opOrderRefundModels;
    }

	/**
	 * 设置退款单列表
	 * @param \com\alibaba\trade\param\AlibabaTradeRefundOpOrderRefundModel $opOrderRefundModels
	 * 参数示例：<pre></pre>
	 * 此参数必填
	 */
    public function setOpOrderRefundModels(AlibabaTradeRefundOpOrderRefundModel $opOrderRefundModels) {
        $this->opOrderRefundModels = $opOrderRefundModels;
    }


    private $totalCount;

	/**
	 * @return mixed 符合条件总的记录条数
	 */
	public function getTotalCount() {
        return $this->totalCount;
    }

    /**
     * 设置符合条件总的记录条数
     * @param Integer $totalCount
     * 参数示例：<pre></pre>
     * 此参数必填
	 */
    public function setTotalCount( $totalCount) {
        $this->totalCount = $totalCount;
    }


    private $currentPageNum;

	/**
	 * @return mixed 查询的当前页码
	 */
	public function getCurrentPageNum() {
        return $this->currentPageNum;
    }

    /**
     * 设置查询的当前页码
     * @param Integer $currentPageNum
     * 参数示例：<pre></pre>
     * 此参数必填
	 */
    public function setCurrentPageNum( $currentPageNum) {
        $this->currentPageNum = $currentPageNum;
    }


	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "opOrderRefundModels", $this->stdResult )) {
			$opOrderRefundModelsResult=$this->stdResult->{"opOrderRefundModels"};
			$object = json_decode ( json_encode ( $opOrderRefundModelsResult ), true );
			$this->opOrderRefundModels = array ();
			for($i = 0; $i < count ( $object ); $i ++) {
				$arrayobject = new \ArrayObject($object[$i]);
				$AlibabaTradeRefundOpOrderRefundModelResult=new AlibabaTradeRefundOpOrderRefundModel();
				$AlibabaTradeRefundOpOrderRefundModelResult->setArrayResult($arrayobject );
				$this->opOrderRefundModels [$i] = $AlibabaTradeRefundOpOrderRefundModelResult;
			}
		}
		if (array_key_exists ( "totalCount", $this->stdResult )) {
			$this->totalCount = $this->stdResult->{"totalCount"};
		}
		if (array_key_exists ( "currentPageNum", $this->stdResult )) {
			$this->currentPageNum = $this->stdResult->{"currentPageNum"};
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "opOrderRefundModels", $this->arrayResult )) {
    		$opOrderRefundModelsResult=$arrayResult['${paramType.paramName}'];
    		$this->opOrderRefundModels = new AlibabaTradeRefundOpOrderRefundModel();
    		$this->opOrderRefundModels->setStdResult ( $opOrderRefundModelsResult);
		}
		if (array_key_exists ( "totalCount", $this->arrayResult )) {
			$this->totalCount = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "currentPageNum", $this->arrayResult )) {
			$this->currentPageNum = $arrayResult['${paramType.paramName}'];
		}
	}
}
