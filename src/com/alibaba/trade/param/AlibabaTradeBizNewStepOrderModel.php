<?php

namespace com\alibaba\trade\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;


class AlibabaTradeBizNewStepOrderModel extends SDKDomain {


    private $gmtStart;

    /**
     * @return mixed 阶段开始时间
     */
    public function getGmtStart() {
        return $this->gmtStart;
    }

    /**
     * 设置阶段开始时间
     * @param Date $gmtStart
     * 参数示例：<pre>20180604092517000+0800</pre>
     * 此参数必填
     */
    public function setGmtStart( $gmtStart) {
        $this->gmtStart = $gmtStart;
    }


    private $gmtPay;

    /**
     * @return mixed 付款时间
     */
    public function getGmtPay() {
        return $this->gmtPay;
    }

    /**
     * 设置付款时间
     * @param Date $gmtPay
     * 参数示例：<pre>20180604093243000+0800</pre>
     * 此参数必填
     */
    public function setGmtPay( $gmtPay) {
        $this->gmtPay = $gmtPay;
    }


    private $gmtEnd;

    /**
     * @return mixed 阶段结束时间
     */
    public function getGmtEnd() {
        return $this->gmtEnd;
    }

    /**
     * 设置阶段结束时间
     * @param Date $gmtEnd
     * 参数示例：<pre>20180604093243000+0800</pre>
     * 此参数必填
     */
    public function setGmtEnd( $gmtEnd) {
        $this->gmtEnd = $gmtEnd;
    }


    private $stepNo;

    /**
     * @return mixed 阶段顺序编号
     */
    public function getStepNo() {
        return $this->stepNo;
    }

    /**
     * 设置阶段顺序编号
     * @param Integer $stepNo
     * 参数示例：<pre>1</pre>
     * 此参数必填
     */
    public function setStepNo( $stepNo) {
        $this->stepNo = $stepNo;
    }


    private $lastStep;

    /**
     * @return mixed 是否最后一个阶段
     */
    public function getLastStep() {
        return $this->lastStep;
    }

    /**
     * 设置是否最后一个阶段
     * @param Boolean $lastStep
     * 参数示例：<pre>true</pre>
     * 此参数必填
     */
    public function setLastStep( $lastStep) {
        $this->lastStep = $lastStep;
    }


    private $stepName;

    /**
     * @return mixed 阶段名称
     */
    public function getStepName() {
        return $this->stepName;
    }

    /**
     * 设置阶段名称
     * @param String $stepName
     * 参数示例：<pre>全款交易</pre>
     * 此参数必填
     */
    public function setStepName( $stepName) {
        $this->stepName = $stepName;
    }


    private $activeStatus;

    /**
     * @return mixed 激活状态。0表示未激活，1表示已激活
     */
    public function getActiveStatus() {
        return $this->activeStatus;
    }

    /**
     * 设置激活状态。0表示未激活，1表示已激活
     * @param Integer $activeStatus
     * 参数示例：<pre>1</pre>
     * 此参数必填
     */
    public function setActiveStatus( $activeStatus) {
        $this->activeStatus = $activeStatus;
    }


    private $payStatus;

    /**
     * @return mixed 阶段付款状态。1未付款、2已付款、8付款前取消、12溢短补付款
     */
    public function getPayStatus() {
        return $this->payStatus;
    }

    /**
     * 设置阶段付款状态。1未付款、2已付款、8付款前取消、12溢短补付款
     * @param Integer $payStatus
     * 参数示例：<pre>2</pre>
     * 此参数必填
     */
    public function setPayStatus( $payStatus) {
        $this->payStatus = $payStatus;
    }


    private $logisticsStatus;

    /**
     * @return mixed 物流环节状态：1未发货、2已发货、3已收货、4已全部退货、7发货前取消
     */
    public function getLogisticsStatus() {
        return $this->logisticsStatus;
    }

    /**
     * 设置物流环节状态：1未发货、2已发货、3已收货、4已全部退货、7发货前取消
     * @param Integer $logisticsStatus
     * 参数示例：<pre>2</pre>
     * 此参数必填
     */
    public function setLogisticsStatus( $logisticsStatus) {
        $this->logisticsStatus = $logisticsStatus;
    }


    private $payFee;

    /**
     * @return mixed 阶段应付款（包含运费），单位为元
     */
    public function getPayFee() {
        return $this->payFee;
    }

    /**
     * 设置阶段应付款（包含运费），单位为元
     * @param BigDecimal $payFee
     * 参数示例：<pre>0.03</pre>
     * 此参数必填
     */
    public function setPayFee( $payFee) {
        $this->payFee = $payFee;
    }


    private $paidFee;

    /**
     * @return mixed 阶段已付款（包含运费），单位为元
     */
    public function getPaidFee() {
        return $this->paidFee;
    }

    /**
     * 设置阶段已付款（包含运费），单位为元
     * @param BigDecimal $paidFee
     * 参数示例：<pre>0.03</pre>
     * 此参数必填
     */
    public function setPaidFee( $paidFee) {
        $this->paidFee = $paidFee;
    }


    private $goodsFee;

    /**
     * @return mixed 阶段商品价格分摊 ，单位为元
     */
    public function getGoodsFee() {
        return $this->goodsFee;
    }

    /**
     * 设置阶段商品价格分摊 ，单位为元
     * @param BigDecimal $goodsFee
     * 参数示例：<pre>0</pre>
     * 此参数必填
     */
    public function setGoodsFee( $goodsFee) {
        $this->goodsFee = $goodsFee;
    }


    private $adjustFee;

    /**
     * @return mixed 阶段调整价格 ，单位为元
     */
    public function getAdjustFee() {
        return $this->adjustFee;
    }

    /**
     * 设置阶段调整价格 ，单位为元
     * @param BigDecimal $adjustFee
     * 参数示例：<pre>-3175.97</pre>
     * 此参数必填
     */
    public function setAdjustFee( $adjustFee) {
        $this->adjustFee = $adjustFee;
    }


    private $discountFee;

    /**
     * @return mixed 阶段优惠价格，单位为元
     */
    public function getDiscountFee() {
        return $this->discountFee;
    }

    /**
     * 设置阶段优惠价格，单位为元
     * @param BigDecimal $discountFee
     * 参数示例：<pre>0</pre>
     * 此参数必填
     */
    public function setDiscountFee( $discountFee) {
        $this->discountFee = $discountFee;
    }


    private $postFee;

    /**
     * @return mixed 阶段的应付邮费，单位为元
     */
    public function getPostFee() {
        return $this->postFee;
    }

    /**
     * 设置阶段的应付邮费，单位为元
     * @param BigDecimal $postFee
     * 参数示例：<pre>0</pre>
     * 此参数必填
     */
    public function setPostFee( $postFee) {
        $this->postFee = $postFee;
    }


    private $paidPostFee;

    /**
     * @return mixed 阶段已付的邮费，单位为元
     */
    public function getPaidPostFee() {
        return $this->paidPostFee;
    }

    /**
     * 设置阶段已付的邮费，单位为元
     * @param BigDecimal $paidPostFee
     * 参数示例：<pre>0</pre>
     * 此参数必填
     */
    public function setPaidPostFee( $paidPostFee) {
        $this->paidPostFee = $paidPostFee;
    }


	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "gmtStart", $this->stdResult )) {
		    $this->gmtStart = $this->stdResult->{"gmtStart"};
		}
		if (array_key_exists ( "gmtPay", $this->stdResult )) {
		    $this->gmtPay = $this->stdResult->{"gmtPay"};
		}
		if (array_key_exists ( "gmtEnd", $this->stdResult )) {
		    $this->gmtEnd = $this->stdResult->{"gmtEnd"};
		}
		if (array_key_exists ( "stepNo", $this->stdResult )) {
		    $this->stepNo = $this->stdResult->{"stepNo"};
		}
		if (array_key_exists ( "lastStep", $this->stdResult )) {
		    $this->lastStep = $this->stdResult->{"lastStep"};
		}
		if (array_key_exists ( "stepName", $this->stdResult )) {
		    $this->stepName = $this->stdResult->{"stepName"};
		}
		if (array_key_exists ( "activeStatus", $this->stdResult )) {
		    $this->activeStatus = $this->stdResult->{"activeStatus"};
		}
		if (array_key_exists ( "payStatus", $this->stdResult )) {
		    $this->payStatus = $this->stdResult->{"payStatus"};
		}
		if (array_key_exists ( "logisticsStatus", $this->stdResult )) {
		    $this->logisticsStatus = $this->stdResult->{"logisticsStatus"};
		}
		if (array_key_exists ( "payFee", $this->stdResult )) {
		    $this->payFee = $this->stdResult->{"payFee"};
		}
		if (array_key_exists ( "paidFee", $this->stdResult )) {
		    $this->paidFee = $this->stdResult->{"paidFee"};
		}
		if (array_key_exists ( "goodsFee", $this->stdResult )) {
		    $this->goodsFee = $this->stdResult->{"goodsFee"};
		}
		if (array_key_exists ( "adjustFee", $this->stdResult )) {
		    $this->adjustFee = $this->stdResult->{"adjustFee"};
		}
		if (array_key_exists ( "discountFee", $this->stdResult )) {
		    $this->discountFee = $this->stdResult->{"discountFee"};
		}
		if (array_key_exists ( "postFee", $this->stdResult )) {
		    $this->postFee = $this->stdResult->{"postFee"};
		}
		if (array_key_exists ( "paidPostFee", $this->stdResult )) {
		    $this->paidPostFee = $this->stdResult->{"paidPostFee"};
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "gmtStart", $this->arrayResult )) {
		    $this->gmtStart = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "gmtPay", $this->arrayResult )) {
		    $this->gmtPay = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "gmtEnd", $this->arrayResult )) {
		    $this->gmtEnd = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "stepNo", $this->arrayResult )) {
		    $this->stepNo = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "lastStep", $this->arrayResult )) {
		    $this->lastStep = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "stepName", $this->arrayResult )) {
		    $this->stepName = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "activeStatus", $this->arrayResult )) {
		    $this->activeStatus = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "payStatus", $this->arrayResult )) {
		    $this->payStatus = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "logisticsStatus", $this->arrayResult )) {
		    $this->logisticsStatus = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "payFee", $this->arrayResult )) {
		    $this->payFee = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "paidFee", $this->arrayResult )) {
		    $this->paidFee = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "goodsFee", $this->arrayResult )) {
		    $this->goodsFee = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "adjustFee", $this->arrayResult )) {
		    $this->adjustFee = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "discountFee", $this->arrayResult )) {
		    $this->discountFee = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "postFee", $this->arrayResult )) {
		    $this->postFee = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "paidPostFee", $this->arrayResult )) {
		    $this->paidPostFee = $arrayResult['${paramType.paramName}'];
		}
	}
}
