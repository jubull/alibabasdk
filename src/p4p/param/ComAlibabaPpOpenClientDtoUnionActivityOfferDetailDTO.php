<?php

namespace com\alibaba\p4p\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use com\alibaba\p4p\param\ComAlibabaPpOpenClientDtoUnionActivityAreaModelDTO;


class ComAlibabaPpOpenClientDtoUnionActivityOfferDetailDTO extends SDKDomain {


    private $offerId;

    /**
     * @return mixed 商品id
     */
    public function getOfferId() {
        return $this->offerId;
    }

    /**
     * 设置商品id
     * @param Long $offerId
     * 参数示例：<pre>111</pre>
     * 此参数必填
     */
    public function setOfferId( $offerId) {
        $this->offerId = $offerId;
    }


    private $activityId;

    /**
     * @return mixed 营销活动Id
     */
    public function getActivityId() {
        return $this->activityId;
    }

    /**
     * 设置营销活动Id
     * @param Long $activityId
     * 参数示例：<pre>11</pre>
     * 此参数必填
     */
    public function setActivityId( $activityId) {
        $this->activityId = $activityId;
    }


    private $activityName;

    /**
     * @return mixed 活动名称
     */
    public function getActivityName() {
        return $this->activityName;
    }

    /**
     * 设置活动名称
     * @param String $activityName
     * 参数示例：<pre>活动名称</pre>
     * 此参数必填
     */
    public function setActivityName( $activityName) {
        $this->activityName = $activityName;
    }


    private $hotTime;

    /**
     * @return mixed 预热时间,活动未开始,不可用活动价下单; 为null表示无预热时间
     */
    public function getHotTime() {
        return $this->hotTime;
    }

    /**
     * 设置预热时间,活动未开始,不可用活动价下单; 为null表示无预热时间
     * @param Date $hotTime
     * 参数示例：<pre>1234567890123</pre>
     * 此参数必填
     */
    public function setHotTime( $hotTime) {
        $this->hotTime = $hotTime;
    }


    private $startTime;

    /**
     * @return mixed 活动开始时间；大于now时，活动有效
     */
    public function getStartTime() {
        return $this->startTime;
    }

    /**
     * 设置活动开始时间；大于now时，活动有效
     * @param Date $startTime
     * 参数示例：<pre>1234567890123</pre>
     * 此参数必填
     */
    public function setStartTime( $startTime) {
        $this->startTime = $startTime;
    }


    private $endTime;

    /**
     * @return mixed 活动结束时间；小于now时，活动有效
     */
    public function getEndTime() {
        return $this->endTime;
    }

    /**
     * 设置活动结束时间；小于now时，活动有效
     * @param Date $endTime
     * 参数示例：<pre>1234567890123</pre>
     * 此参数必填
     */
    public function setEndTime( $endTime) {
        $this->endTime = $endTime;
    }


    private $beginQuantity;

    /**
     * @return mixed 活动起批量
     */
    public function getBeginQuantity() {
        return $this->beginQuantity;
    }

    /**
     * 设置活动起批量
     * @param Integer $beginQuantity
     * 参数示例：<pre>2</pre>
     * 此参数必填
     */
    public function setBeginQuantity( $beginQuantity) {
        $this->beginQuantity = $beginQuantity;
    }


    private $stock;

    /**
     * @return mixed 活动总库存，为null时使用offer原库存
     */
    public function getStock() {
        return $this->stock;
    }

    /**
     * 设置活动总库存，为null时使用offer原库存
     * @param Integer $stock
     * 参数示例：<pre>3</pre>
     * 此参数必填
     */
    public function setStock( $stock) {
        $this->stock = $stock;
    }


    private $personLimitCount;

    /**
     * @return mixed 商品本身限购数，非活动价可购买数；-1表示不限，0表示可购买数为0
     */
    public function getPersonLimitCount() {
        return $this->personLimitCount;
    }

    /**
     * 设置商品本身限购数，非活动价可购买数；-1表示不限，0表示可购买数为0
     * @param Integer $personLimitCount
     * 参数示例：<pre>-1</pre>
     * 此参数必填
     */
    public function setPersonLimitCount( $personLimitCount) {
        $this->personLimitCount = $personLimitCount;
    }


    private $promotionLimitCount;

    /**
     * @return mixed 限购数，等于0且personLimitCount>0时，可以以原价下单，但不能以活动价下单；-1表示不限数量
     */
    public function getPromotionLimitCount() {
        return $this->promotionLimitCount;
    }

    /**
     * 设置限购数，等于0且personLimitCount>0时，可以以原价下单，但不能以活动价下单；-1表示不限数量
     * @param Integer $promotionLimitCount
     * 参数示例：<pre>-1</pre>
     * 此参数必填
     */
    public function setPromotionLimitCount( $promotionLimitCount) {
        $this->promotionLimitCount = $promotionLimitCount;
    }


    private $activityLimitCount;

    /**
     * @return mixed 活动限购数；该场内活动商品限购数，-1表示不限购；0表示不可购买该场活动所有商品
     */
    public function getActivityLimitCount() {
        return $this->activityLimitCount;
    }

    /**
     * 设置活动限购数；该场内活动商品限购数，-1表示不限购；0表示不可购买该场活动所有商品
     * @param Integer $activityLimitCount
     * 参数示例：<pre>-1</pre>
     * 此参数必填
     */
    public function setActivityLimitCount( $activityLimitCount) {
        $this->activityLimitCount = $activityLimitCount;
    }


    private $freepostageStartTime;

    /**
     * @return mixed 活动限时包邮开始时间；null 表示不限时
     */
    public function getFreepostageStartTime() {
        return $this->freepostageStartTime;
    }

    /**
     * 设置活动限时包邮开始时间；null 表示不限时
     * @param Date $freepostageStartTime
     * 参数示例：<pre>1234567890123</pre>
     * 此参数必填
     */
    public function setFreepostageStartTime( $freepostageStartTime) {
        $this->freepostageStartTime = $freepostageStartTime;
    }


    private $freepostageEndTime;

    /**
     * @return mixed 活动限时包邮结束时间；null 表示不限时
     */
    public function getFreepostageEndTime() {
        return $this->freepostageEndTime;
    }

    /**
     * 设置活动限时包邮结束时间；null 表示不限时
     * @param Date $freepostageEndTime
     * 参数示例：<pre>1234567890123</pre>
     * 此参数必填
     */
    public function setFreepostageEndTime( $freepostageEndTime) {
        $this->freepostageEndTime = $freepostageEndTime;
    }


    private $excludeAreaList;

    /**
     * @return mixed 免包邮地区，与活动包邮配合使用
     */
    public function getExcludeAreaList() {
        return $this->excludeAreaList;
    }

    /**
     * 设置免包邮地区，与活动包邮配合使用
     * @param \com\alibaba\p4p\param\ComAlibabaPpOpenClientDtoUnionActivityAreaModelDTO $excludeAreaList
     * 参数示例：<pre>[]</pre>
     * 此参数必填
     */
    public function setExcludeAreaList(ComAlibabaPpOpenClientDtoUnionActivityAreaModelDTO $excludeAreaList) {
        $this->excludeAreaList = $excludeAreaList;
    }


	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "offerId", $this->stdResult )) {
		    $this->offerId = $this->stdResult->{"offerId"};
		}
		if (array_key_exists ( "activityId", $this->stdResult )) {
		    $this->activityId = $this->stdResult->{"activityId"};
		}
		if (array_key_exists ( "activityName", $this->stdResult )) {
		    $this->activityName = $this->stdResult->{"activityName"};
		}
		if (array_key_exists ( "hotTime", $this->stdResult )) {
		    $this->hotTime = $this->stdResult->{"hotTime"};
		}
		if (array_key_exists ( "startTime", $this->stdResult )) {
		    $this->startTime = $this->stdResult->{"startTime"};
		}
		if (array_key_exists ( "endTime", $this->stdResult )) {
		    $this->endTime = $this->stdResult->{"endTime"};
		}
		if (array_key_exists ( "beginQuantity", $this->stdResult )) {
		    $this->beginQuantity = $this->stdResult->{"beginQuantity"};
		}
		if (array_key_exists ( "stock", $this->stdResult )) {
		    $this->stock = $this->stdResult->{"stock"};
		}
		if (array_key_exists ( "personLimitCount", $this->stdResult )) {
		    $this->personLimitCount = $this->stdResult->{"personLimitCount"};
		}
		if (array_key_exists ( "promotionLimitCount", $this->stdResult )) {
		    $this->promotionLimitCount = $this->stdResult->{"promotionLimitCount"};
		}
		if (array_key_exists ( "activityLimitCount", $this->stdResult )) {
		    $this->activityLimitCount = $this->stdResult->{"activityLimitCount"};
		}
		if (array_key_exists ( "freepostageStartTime", $this->stdResult )) {
		    $this->freepostageStartTime = $this->stdResult->{"freepostageStartTime"};
		}
		if (array_key_exists ( "freepostageEndTime", $this->stdResult )) {
		    $this->freepostageEndTime = $this->stdResult->{"freepostageEndTime"};
		}
		if (array_key_exists ( "excludeAreaList", $this->stdResult )) {
		    $excludeAreaListResult=$this->stdResult->{"excludeAreaList"};
		    $object = json_decode(json_encode($excludeAreaListResult),true);
		    $this->excludeAreaList = array ();
		    for($i = 0; $i < count ( $object ); $i ++) {
		        $arrayobject = new \ArrayObject($object[$i]);
		        $ComAlibabaPpOpenClientDtoUnionActivityAreaModelDTOResult=new ComAlibabaPpOpenClientDtoUnionActivityAreaModelDTO();
		        $ComAlibabaPpOpenClientDtoUnionActivityAreaModelDTOResult->setArrayResult($arrayobject );
		        $this->excludeAreaList [$i] = $ComAlibabaPpOpenClientDtoUnionActivityAreaModelDTOResult;
		    }
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "offerId", $this->arrayResult )) {
		    $this->offerId = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "activityId", $this->arrayResult )) {
		    $this->activityId = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "activityName", $this->arrayResult )) {
		    $this->activityName = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "hotTime", $this->arrayResult )) {
		    $this->hotTime = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "startTime", $this->arrayResult )) {
		    $this->startTime = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "endTime", $this->arrayResult )) {
		    $this->endTime = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "beginQuantity", $this->arrayResult )) {
		    $this->beginQuantity = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "stock", $this->arrayResult )) {
		    $this->stock = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "personLimitCount", $this->arrayResult )) {
		    $this->personLimitCount = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "promotionLimitCount", $this->arrayResult )) {
		    $this->promotionLimitCount = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "activityLimitCount", $this->arrayResult )) {
		    $this->activityLimitCount = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "freepostageStartTime", $this->arrayResult )) {
		    $this->freepostageStartTime = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "freepostageEndTime", $this->arrayResult )) {
		    $this->freepostageEndTime = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "excludeAreaList", $this->arrayResult )) {
    		$excludeAreaListResult=$arrayResult['${paramType.paramName}'];
    		$this->excludeAreaList = new ComAlibabaPpOpenClientDtoUnionActivityAreaModelDTO();
    		$this->excludeAreaList->setStdResult ( $excludeAreaListResult);
		}
	}
}
