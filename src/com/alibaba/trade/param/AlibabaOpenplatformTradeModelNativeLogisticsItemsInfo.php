<?php

namespace com\alibaba\trade\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;


class AlibabaOpenplatformTradeModelNativeLogisticsItemsInfo extends SDKDomain {


    private $deliveredTime;

    /**
     * @return mixed 发货时间
     */
    public function getDeliveredTime() {
        return $this->deliveredTime;
    }

    /**
     * 设置发货时间
     * @param Date $deliveredTime
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setDeliveredTime( $deliveredTime) {
        $this->deliveredTime = $deliveredTime;
    }


    private $logisticsCode;

    /**
     * @return mixed 物流编号
     */
    public function getLogisticsCode() {
        return $this->logisticsCode;
    }

    /**
     * 设置物流编号
     * @param String $logisticsCode
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setLogisticsCode( $logisticsCode) {
        $this->logisticsCode = $logisticsCode;
    }


    private $type;

    /**
     * @return mixed SELF_SEND_GOODS("0")自行发货，在线发货ONLINE_SEND_GOODS("1"，不需要物流的发货 NO_LOGISTICS_SEND_GOODS("2")
     */
    public function getType() {
        return $this->type;
    }

    /**
     * 设置SELF_SEND_GOODS("0")自行发货，在线发货ONLINE_SEND_GOODS("1"，不需要物流的发货 NO_LOGISTICS_SEND_GOODS("2")
     * @param String $type
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setType( $type) {
        $this->type = $type;
    }


    private $id;

    /**
     * @return mixed 主键id
     */
    public function getId() {
        return $this->id;
    }

    /**
     * 设置主键id
     * @param Long $id
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setId( $id) {
        $this->id = $id;
    }


    private $status;

    /**
     * @return mixed 状态
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * 设置状态
     * @param String $status
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setStatus( $status) {
        $this->status = $status;
    }


    private $gmtModified;

    /**
     * @return mixed 修改时间
     */
    public function getGmtModified() {
        return $this->gmtModified;
    }

    /**
     * 设置修改时间
     * @param Date $gmtModified
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setGmtModified( $gmtModified) {
        $this->gmtModified = $gmtModified;
    }


    private $gmtCreate;

    /**
     * @return mixed 创建时间
     */
    public function getGmtCreate() {
        return $this->gmtCreate;
    }

    /**
     * 设置创建时间
     * @param Date $gmtCreate
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setGmtCreate( $gmtCreate) {
        $this->gmtCreate = $gmtCreate;
    }


    private $carriage;

    /**
     * @return mixed 运费(单位为元)
     */
    public function getCarriage() {
        return $this->carriage;
    }

    /**
     * 设置运费(单位为元)
     * @param BigDecimal $carriage
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setCarriage( $carriage) {
        $this->carriage = $carriage;
    }


    private $fromProvince;

    /**
     * @return mixed 发货省
     */
    public function getFromProvince() {
        return $this->fromProvince;
    }

    /**
     * 设置发货省
     * @param String $fromProvince
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setFromProvince( $fromProvince) {
        $this->fromProvince = $fromProvince;
    }


    private $fromCity;

    /**
     * @return mixed 发货市
     */
    public function getFromCity() {
        return $this->fromCity;
    }

    /**
     * 设置发货市
     * @param String $fromCity
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setFromCity( $fromCity) {
        $this->fromCity = $fromCity;
    }


    private $fromArea;

    /**
     * @return mixed 发货区
     */
    public function getFromArea() {
        return $this->fromArea;
    }

    /**
     * 设置发货区
     * @param String $fromArea
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setFromArea( $fromArea) {
        $this->fromArea = $fromArea;
    }


    private $fromAddress;

    /**
     * @return mixed 发货街道地址
     */
    public function getFromAddress() {
        return $this->fromAddress;
    }

    /**
     * 设置发货街道地址
     * @param String $fromAddress
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setFromAddress( $fromAddress) {
        $this->fromAddress = $fromAddress;
    }


    private $fromPhone;

    /**
     * @return mixed 发货联系电话
     */
    public function getFromPhone() {
        return $this->fromPhone;
    }

    /**
     * 设置发货联系电话
     * @param String $fromPhone
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setFromPhone( $fromPhone) {
        $this->fromPhone = $fromPhone;
    }


    private $fromMobile;

    /**
     * @return mixed 发货联系手机
     */
    public function getFromMobile() {
        return $this->fromMobile;
    }

    /**
     * 设置发货联系手机
     * @param String $fromMobile
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setFromMobile( $fromMobile) {
        $this->fromMobile = $fromMobile;
    }


    private $fromPost;

    /**
     * @return mixed 发货地址邮编
     */
    public function getFromPost() {
        return $this->fromPost;
    }

    /**
     * 设置发货地址邮编
     * @param String $fromPost
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setFromPost( $fromPost) {
        $this->fromPost = $fromPost;
    }


    private $logisticsCompanyId;

    /**
     * @return mixed 物流公司Id
     */
    public function getLogisticsCompanyId() {
        return $this->logisticsCompanyId;
    }

    /**
     * 设置物流公司Id
     * @param Long $logisticsCompanyId
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setLogisticsCompanyId( $logisticsCompanyId) {
        $this->logisticsCompanyId = $logisticsCompanyId;
    }


    private $logisticsCompanyNo;

    /**
     * @return mixed 物流公司编号
     */
    public function getLogisticsCompanyNo() {
        return $this->logisticsCompanyNo;
    }

    /**
     * 设置物流公司编号
     * @param String $logisticsCompanyNo
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setLogisticsCompanyNo( $logisticsCompanyNo) {
        $this->logisticsCompanyNo = $logisticsCompanyNo;
    }


    private $logisticsCompanyName;

    /**
     * @return mixed 物流公司名称
     */
    public function getLogisticsCompanyName() {
        return $this->logisticsCompanyName;
    }

    /**
     * 设置物流公司名称
     * @param String $logisticsCompanyName
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setLogisticsCompanyName( $logisticsCompanyName) {
        $this->logisticsCompanyName = $logisticsCompanyName;
    }


    private $logisticsBillNo;

    /**
     * @return mixed 物流公司运单号
     */
    public function getLogisticsBillNo() {
        return $this->logisticsBillNo;
    }

    /**
     * 设置物流公司运单号
     * @param String $logisticsBillNo
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setLogisticsBillNo( $logisticsBillNo) {
        $this->logisticsBillNo = $logisticsBillNo;
    }


    private $subItemIds;

    /**
     * @return mixed 商品明细条目id，如有多个以,分隔
     */
    public function getSubItemIds() {
        return $this->subItemIds;
    }

    /**
     * 设置商品明细条目id，如有多个以,分隔
     * @param String $subItemIds
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setSubItemIds( $subItemIds) {
        $this->subItemIds = $subItemIds;
    }


    private $toProvince;

    /**
     * @return mixed 收货省
     */
    public function getToProvince() {
        return $this->toProvince;
    }

    /**
     * 设置收货省
     * @param String $toProvince
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setToProvince( $toProvince) {
        $this->toProvince = $toProvince;
    }


    private $toCity;

    /**
     * @return mixed 收货市
     */
    public function getToCity() {
        return $this->toCity;
    }

    /**
     * 设置收货市
     * @param String $toCity
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setToCity( $toCity) {
        $this->toCity = $toCity;
    }


    private $toArea;

    /**
     * @return mixed 收货区
     */
    public function getToArea() {
        return $this->toArea;
    }

    /**
     * 设置收货区
     * @param String $toArea
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setToArea( $toArea) {
        $this->toArea = $toArea;
    }


    private $toAddress;

    /**
     * @return mixed 收货街道地址
     */
    public function getToAddress() {
        return $this->toAddress;
    }

    /**
     * 设置收货街道地址
     * @param String $toAddress
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setToAddress( $toAddress) {
        $this->toAddress = $toAddress;
    }


    private $toPhone;

    /**
     * @return mixed 收货联系电话
     */
    public function getToPhone() {
        return $this->toPhone;
    }

    /**
     * 设置收货联系电话
     * @param String $toPhone
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setToPhone( $toPhone) {
        $this->toPhone = $toPhone;
    }


    private $toMobile;

    /**
     * @return mixed 收货联系手机
     */
    public function getToMobile() {
        return $this->toMobile;
    }

    /**
     * 设置收货联系手机
     * @param String $toMobile
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setToMobile( $toMobile) {
        $this->toMobile = $toMobile;
    }


    private $toPost;

    /**
     * @return mixed 收货地址邮编
     */
    public function getToPost() {
        return $this->toPost;
    }

    /**
     * 设置收货地址邮编
     * @param String $toPost
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setToPost( $toPost) {
        $this->toPost = $toPost;
    }


    private $noLogisticsCondition;

    /**
     * @return mixed 无需物流类别
     */
    public function getNoLogisticsCondition() {
        return $this->noLogisticsCondition;
    }

    /**
     * 设置无需物流类别
     * @param String $noLogisticsCondition
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setNoLogisticsCondition( $noLogisticsCondition) {
        $this->noLogisticsCondition = $noLogisticsCondition;
    }


    private $noLogisticsName;

    /**
     * @return mixed 物流姓名
     */
    public function getNoLogisticsName() {
        return $this->noLogisticsName;
    }

    /**
     * 设置物流姓名
     * @param String $noLogisticsName
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setNoLogisticsName( $noLogisticsName) {
        $this->noLogisticsName = $noLogisticsName;
    }


    private $noLogisticsTel;

    /**
     * @return mixed 联系方式
     */
    public function getNoLogisticsTel() {
        return $this->noLogisticsTel;
    }

    /**
     * 设置联系方式
     * @param String $noLogisticsTel
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setNoLogisticsTel( $noLogisticsTel) {
        $this->noLogisticsTel = $noLogisticsTel;
    }


    private $noLogisticsBillNo;

    /**
     * @return mixed 无需物流业务单号
     */
    public function getNoLogisticsBillNo() {
        return $this->noLogisticsBillNo;
    }

    /**
     * 设置无需物流业务单号
     * @param String $noLogisticsBillNo
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setNoLogisticsBillNo( $noLogisticsBillNo) {
        $this->noLogisticsBillNo = $noLogisticsBillNo;
    }


    private $isTimePromise;

    /**
     * @return mixed 是否使用限时达物流
     */
    public function getIsTimePromise() {
        return $this->isTimePromise;
    }

    /**
     * 设置是否使用限时达物流
     * @param Boolean $isTimePromise
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setIsTimePromise( $isTimePromise) {
        $this->isTimePromise = $isTimePromise;
    }


    private $arriveTime;

    /**
     * @return mixed 限时达物流，预计到达时间
     */
    public function getArriveTime() {
        return $this->arriveTime;
    }

    /**
     * 设置限时达物流，预计到达时间
     * @param Date $arriveTime
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setArriveTime( $arriveTime) {
        $this->arriveTime = $arriveTime;
    }


	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "deliveredTime", $this->stdResult )) {
		    $this->deliveredTime = $this->stdResult->{"deliveredTime"};
		}
		if (array_key_exists ( "logisticsCode", $this->stdResult )) {
		    $this->logisticsCode = $this->stdResult->{"logisticsCode"};
		}
		if (array_key_exists ( "type", $this->stdResult )) {
		    $this->type = $this->stdResult->{"type"};
		}
		if (array_key_exists ( "id", $this->stdResult )) {
		    $this->id = $this->stdResult->{"id"};
		}
		if (array_key_exists ( "status", $this->stdResult )) {
		    $this->status = $this->stdResult->{"status"};
		}
		if (array_key_exists ( "gmtModified", $this->stdResult )) {
		    $this->gmtModified = $this->stdResult->{"gmtModified"};
		}
		if (array_key_exists ( "gmtCreate", $this->stdResult )) {
		    $this->gmtCreate = $this->stdResult->{"gmtCreate"};
		}
		if (array_key_exists ( "carriage", $this->stdResult )) {
		    $this->carriage = $this->stdResult->{"carriage"};
		}
		if (array_key_exists ( "fromProvince", $this->stdResult )) {
		    $this->fromProvince = $this->stdResult->{"fromProvince"};
		}
		if (array_key_exists ( "fromCity", $this->stdResult )) {
		    $this->fromCity = $this->stdResult->{"fromCity"};
		}
		if (array_key_exists ( "fromArea", $this->stdResult )) {
		    $this->fromArea = $this->stdResult->{"fromArea"};
		}
		if (array_key_exists ( "fromAddress", $this->stdResult )) {
		    $this->fromAddress = $this->stdResult->{"fromAddress"};
		}
		if (array_key_exists ( "fromPhone", $this->stdResult )) {
		    $this->fromPhone = $this->stdResult->{"fromPhone"};
		}
		if (array_key_exists ( "fromMobile", $this->stdResult )) {
		    $this->fromMobile = $this->stdResult->{"fromMobile"};
		}
		if (array_key_exists ( "fromPost", $this->stdResult )) {
		    $this->fromPost = $this->stdResult->{"fromPost"};
		}
		if (array_key_exists ( "logisticsCompanyId", $this->stdResult )) {
		    $this->logisticsCompanyId = $this->stdResult->{"logisticsCompanyId"};
		}
		if (array_key_exists ( "logisticsCompanyNo", $this->stdResult )) {
		    $this->logisticsCompanyNo = $this->stdResult->{"logisticsCompanyNo"};
		}
		if (array_key_exists ( "logisticsCompanyName", $this->stdResult )) {
		    $this->logisticsCompanyName = $this->stdResult->{"logisticsCompanyName"};
		}
		if (array_key_exists ( "logisticsBillNo", $this->stdResult )) {
		    $this->logisticsBillNo = $this->stdResult->{"logisticsBillNo"};
		}
		if (array_key_exists ( "subItemIds", $this->stdResult )) {
		    $this->subItemIds = $this->stdResult->{"subItemIds"};
		}
		if (array_key_exists ( "toProvince", $this->stdResult )) {
		    $this->toProvince = $this->stdResult->{"toProvince"};
		}
		if (array_key_exists ( "toCity", $this->stdResult )) {
		    $this->toCity = $this->stdResult->{"toCity"};
		}
		if (array_key_exists ( "toArea", $this->stdResult )) {
		    $this->toArea = $this->stdResult->{"toArea"};
		}
		if (array_key_exists ( "toAddress", $this->stdResult )) {
		    $this->toAddress = $this->stdResult->{"toAddress"};
		}
		if (array_key_exists ( "toPhone", $this->stdResult )) {
		    $this->toPhone = $this->stdResult->{"toPhone"};
		}
		if (array_key_exists ( "toMobile", $this->stdResult )) {
		    $this->toMobile = $this->stdResult->{"toMobile"};
		}
		if (array_key_exists ( "toPost", $this->stdResult )) {
		    $this->toPost = $this->stdResult->{"toPost"};
		}
		if (array_key_exists ( "noLogisticsCondition", $this->stdResult )) {
		    $this->noLogisticsCondition = $this->stdResult->{"noLogisticsCondition"};
		}
		if (array_key_exists ( "noLogisticsName", $this->stdResult )) {
		    $this->noLogisticsName = $this->stdResult->{"noLogisticsName"};
		}
		if (array_key_exists ( "noLogisticsTel", $this->stdResult )) {
		    $this->noLogisticsTel = $this->stdResult->{"noLogisticsTel"};
		}
		if (array_key_exists ( "noLogisticsBillNo", $this->stdResult )) {
		    $this->noLogisticsBillNo = $this->stdResult->{"noLogisticsBillNo"};
		}
		if (array_key_exists ( "isTimePromise", $this->stdResult )) {
		    $this->isTimePromise = $this->stdResult->{"isTimePromise"};
		}
		if (array_key_exists ( "arriveTime", $this->stdResult )) {
		    $this->arriveTime = $this->stdResult->{"arriveTime"};
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "deliveredTime", $this->arrayResult )) {
		    $this->deliveredTime = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "logisticsCode", $this->arrayResult )) {
		    $this->logisticsCode = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "type", $this->arrayResult )) {
		    $this->type = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "id", $this->arrayResult )) {
		    $this->id = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "status", $this->arrayResult )) {
		    $this->status = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "gmtModified", $this->arrayResult )) {
		    $this->gmtModified = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "gmtCreate", $this->arrayResult )) {
		    $this->gmtCreate = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "carriage", $this->arrayResult )) {
		    $this->carriage = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "fromProvince", $this->arrayResult )) {
		    $this->fromProvince = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "fromCity", $this->arrayResult )) {
		    $this->fromCity = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "fromArea", $this->arrayResult )) {
		    $this->fromArea = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "fromAddress", $this->arrayResult )) {
		    $this->fromAddress = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "fromPhone", $this->arrayResult )) {
		    $this->fromPhone = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "fromMobile", $this->arrayResult )) {
		    $this->fromMobile = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "fromPost", $this->arrayResult )) {
		    $this->fromPost = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "logisticsCompanyId", $this->arrayResult )) {
		    $this->logisticsCompanyId = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "logisticsCompanyNo", $this->arrayResult )) {
		    $this->logisticsCompanyNo = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "logisticsCompanyName", $this->arrayResult )) {
		    $this->logisticsCompanyName = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "logisticsBillNo", $this->arrayResult )) {
		    $this->logisticsBillNo = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "subItemIds", $this->arrayResult )) {
		    $this->subItemIds = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "toProvince", $this->arrayResult )) {
		    $this->toProvince = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "toCity", $this->arrayResult )) {
		    $this->toCity = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "toArea", $this->arrayResult )) {
		    $this->toArea = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "toAddress", $this->arrayResult )) {
		    $this->toAddress = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "toPhone", $this->arrayResult )) {
		    $this->toPhone = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "toMobile", $this->arrayResult )) {
		    $this->toMobile = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "toPost", $this->arrayResult )) {
		    $this->toPost = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "noLogisticsCondition", $this->arrayResult )) {
		    $this->noLogisticsCondition = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "noLogisticsName", $this->arrayResult )) {
		    $this->noLogisticsName = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "noLogisticsTel", $this->arrayResult )) {
		    $this->noLogisticsTel = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "noLogisticsBillNo", $this->arrayResult )) {
		    $this->noLogisticsBillNo = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "isTimePromise", $this->arrayResult )) {
		    $this->isTimePromise = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "arriveTime", $this->arrayResult )) {
		    $this->arriveTime = $arrayResult['${paramType.paramName}'];
		}
	}
}
