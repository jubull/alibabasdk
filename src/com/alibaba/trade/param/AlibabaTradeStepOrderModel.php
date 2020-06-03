<?php

namespace com\alibaba\trade\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;


class AlibabaTradeStepOrderModel extends SDKDomain {


    private $stepOrderId;

    /**
     * @return mixed 阶段id
     */
    public function getStepOrderId() {
        return $this->stepOrderId;
    }

    /**
     * 设置阶段id
     * @param Long $stepOrderId
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setStepOrderId( $stepOrderId) {
        $this->stepOrderId = $stepOrderId;
    }


    private $stepOrderStatus;

    /**
     * @return mixed
     * waitactivate  未开始（待激活）
     * waitsellerpush 等待卖家推进
     * success 本阶段完成
     * settlebill 分账
     * cancel 本阶段终止
     * inactiveandcancel 本阶段未开始便终止
     * waitbuyerpay 等待买家付款
     * waitsellersend 等待卖家发货
     * waitbuyerreceive 等待买家确认收货
     * waitselleract 等待卖家XX操作
     * waitbuyerconfirmaction 等待买家确认XX操作
     */
    public function getStepOrderStatus() {
        return $this->stepOrderStatus;
    }

    /**
     * @param String $stepOrderStatus
     * 设置waitactivate  未开始（待激活）
     * waitsellerpush 等待卖家推进
     * success 本阶段完成
     * settlebill 分账
     * cancel 本阶段终止
     * inactiveandcancel 本阶段未开始便终止
     * waitbuyerpay 等待买家付款
     * waitsellersend 等待卖家发货
     * waitbuyerreceive 等待买家确认收货
     * waitselleract 等待卖家XX操作
     * waitbuyerconfirmaction 等待买家确认XX操作
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setStepOrderStatus( $stepOrderStatus) {
        $this->stepOrderStatus = $stepOrderStatus;
    }


    private $stepPayStatus;

    /**
     * @return mixed
     * 1 未冻结/未付款
     * 2 已冻结/已付款
     * 4 已退款
     * 6 已转交易
     * 8 交易未付款被关闭
     */
    public function getStepPayStatus() {
        return $this->stepPayStatus;
    }

    /**
     * @param Integer $stepPayStatus
     * 设置1 未冻结/未付款
     * 2 已冻结/已付款
     * 4 已退款
     * 6 已转交易
     * 8 交易未付款被关闭
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setStepPayStatus( $stepPayStatus) {
        $this->stepPayStatus = $stepPayStatus;
    }


    private $stepNo;

    /**
     * @return mixed 阶段序列：1、2、3
     */
    public function getStepNo() {
        return $this->stepNo;
    }

    /**
     * 设置阶段序列：1、2、3...
     * @param Integer $stepNo
     * 参数示例：<pre></pre>
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
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setLastStep( $lastStep) {
        $this->lastStep = $lastStep;
    }


    private $hasDisbursed;

    /**
     * @return mixed 是否已打款给卖家
     */
    public function getHasDisbursed() {
        return $this->hasDisbursed;
    }

    /**
     * 设置是否已打款给卖家
     * @param Boolean $hasDisbursed
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setHasDisbursed( $hasDisbursed) {
        $this->hasDisbursed = $hasDisbursed;
    }


    private $payFee;

    /**
     * @return mixed 创建时需要付款的金额，不含运费
     */
    public function getPayFee() {
        return $this->payFee;
    }

    /**
     * 设置创建时需要付款的金额，不含运费
     * @param BigDecimal $payFee
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setPayFee( $payFee) {
        $this->payFee = $payFee;
    }


    private $actualPayFee;

    /**
     * @return mixed 应付款（含运费）= 单价×数量-单品优惠-店铺优惠+运费+修改的金额（除运费外，均指分摊后的金额）
     */
    public function getActualPayFee() {
        return $this->actualPayFee;
    }

    /**
     * 设置应付款（含运费）= 单价×数量-单品优惠-店铺优惠+运费+修改的金额（除运费外，均指分摊后的金额）
     * @param BigDecimal $actualPayFee
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setActualPayFee( $actualPayFee) {
        $this->actualPayFee = $actualPayFee;
    }


    private $discountFee;

    /**
     * @return mixed 本阶段分摊的店铺优惠
     */
    public function getDiscountFee() {
        return $this->discountFee;
    }

    /**
     * 设置本阶段分摊的店铺优惠
     * @param BigDecimal $discountFee
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setDiscountFee( $discountFee) {
        $this->discountFee = $discountFee;
    }


    private $itemDiscountFee;

    /**
     * @return mixed 本阶段分摊的单品优惠
     */
    public function getItemDiscountFee() {
        return $this->itemDiscountFee;
    }

    /**
     * 设置本阶段分摊的单品优惠
     * @param BigDecimal $itemDiscountFee
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setItemDiscountFee( $itemDiscountFee) {
        $this->itemDiscountFee = $itemDiscountFee;
    }


    private $price;

    /**
     * @return mixed 本阶段分摊的单价
     */
    public function getPrice() {
        return $this->price;
    }

    /**
     * 设置本阶段分摊的单价
     * @param BigDecimal $price
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setPrice( $price) {
        $this->price = $price;
    }


    private $amount;

    /**
     * @return mixed 购买数量
     */
    public function getAmount() {
        return $this->amount;
    }

    /**
     * 设置购买数量
     * @param Long $amount
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setAmount( $amount) {
        $this->amount = $amount;
    }


    private $postFee;

    /**
     * @return mixed 运费
     */
    public function getPostFee() {
        return $this->postFee;
    }

    /**
     * 设置运费
     * @param BigDecimal $postFee
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setPostFee( $postFee) {
        $this->postFee = $postFee;
    }


    private $adjustFee;

    /**
     * @return mixed 修改价格修改的金额
     */
    public function getAdjustFee() {
        return $this->adjustFee;
    }

    /**
     * 设置修改价格修改的金额
     * @param BigDecimal $adjustFee
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setAdjustFee( $adjustFee) {
        $this->adjustFee = $adjustFee;
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


    private $gmtModified;

        /**
    * @return 修改时间
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


    private $enterTime;

    /**
     * @return mixed 开始时间
     */
    public function getEnterTime() {
        return $this->enterTime;
    }

    /**
     * 设置开始时间
     * @param Date $enterTime
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setEnterTime( $enterTime) {
        $this->enterTime = $enterTime;
    }


    private $payTime;

    /**
     * @return mixed 付款时间
     */
    public function getPayTime() {
        return $this->payTime;
    }

    /**
     * 设置付款时间
     * @param Date $payTime
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setPayTime( $payTime) {
        $this->payTime = $payTime;
    }


    private $sellerActionTime;

    /**
     * @return mixed 卖家操作时间
     */
    public function getSellerActionTime() {
        return $this->sellerActionTime;
    }

    /**
     * 设置卖家操作时间
     * @param Date $sellerActionTime
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setSellerActionTime( $sellerActionTime) {
        $this->sellerActionTime = $sellerActionTime;
    }


    private $endTime;

    /**
     * @return mixed 本阶段结束时间
     */
    public function getEndTime() {
        return $this->endTime;
    }

    /**
     * 设置本阶段结束时间
     * @param Date $endTime
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setEndTime( $endTime) {
        $this->endTime = $endTime;
    }


    private $messagePath;

    /**
     * @return mixed 卖家操作留言路径
     */
    public function getMessagePath() {
        return $this->messagePath;
    }

    /**
     * 设置卖家操作留言路径
     * @param String $messagePath
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setMessagePath( $messagePath) {
        $this->messagePath = $messagePath;
    }


    private $picturePath;

    /**
     * @return mixed 卖家上传图片凭据路径
     */
    public function getPicturePath() {
        return $this->picturePath;
    }

    /**
     * 设置卖家上传图片凭据路径
     * @param String $picturePath
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setPicturePath( $picturePath) {
        $this->picturePath = $picturePath;
    }


    private $message;

    /**
     * @return mixed 卖家操作留言
     */
    public function getMessage() {
        return $this->message;
    }

    /**
     * 设置卖家操作留言
     * @param String $message
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setMessage( $message) {
        $this->message = $message;
    }


    private $templateId;

    /**
     * @return mixed 使用的模板id
     */
    public function getTemplateId() {
        return $this->templateId;
    }

    /**
     * 设置使用的模板id
     * @param Long $templateId
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setTemplateId( $templateId) {
        $this->templateId = $templateId;
    }


    private $stepName;

    /**
     * @return mixed 当前步骤的名称
     */
    public function getStepName() {
        return $this->stepName;
    }

    /**
     * 设置当前步骤的名称
     * @param String $stepName
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setStepName( $stepName) {
        $this->stepName = $stepName;
    }


    private $sellerActionName;

    /**
     * @return mixed 卖家操作名称
     */
    public function getSellerActionName() {
        return $this->sellerActionName;
    }

    /**
     * 设置卖家操作名称
     * @param String $sellerActionName
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setSellerActionName( $sellerActionName) {
        $this->sellerActionName = $sellerActionName;
    }


    private $buyerPayTimeout;

    /**
     * @return mixed 买家不付款的超时时间(秒)
     */
    public function getBuyerPayTimeout() {
        return $this->buyerPayTimeout;
    }

    /**
     * 设置买家不付款的超时时间(秒)
     * @param Long $buyerPayTimeout
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setBuyerPayTimeout( $buyerPayTimeout) {
        $this->buyerPayTimeout = $buyerPayTimeout;
    }


    private $buyerConfirmTimeout;

        /**
    * @return 买家不确认的超时时间
    */
        public function getBuyerConfirmTimeout() {
        return $this->buyerConfirmTimeout;
    }

    /**
     * 设置买家不确认的超时时间
     * @param Long $buyerConfirmTimeout
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setBuyerConfirmTimeout( $buyerConfirmTimeout) {
        $this->buyerConfirmTimeout = $buyerConfirmTimeout;
    }


    private $needLogistics;

    /**
     * @return mixed 是否需要物流
     */
    public function getNeedLogistics() {
        return $this->needLogistics;
    }

    /**
     * 设置是否需要物流
     * @param Boolean $needLogistics
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setNeedLogistics( $needLogistics) {
        $this->needLogistics = $needLogistics;
    }


    private $needSellerAction;

    /**
     * @return mixed 是否需要卖家操作和买家确认
     */
    public function getNeedSellerAction() {
        return $this->needSellerAction;
    }

    /**
     * 设置是否需要卖家操作和买家确认
     * @param Boolean $needSellerAction
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setNeedSellerAction( $needSellerAction) {
        $this->needSellerAction = $needSellerAction;
    }


    private $transferAfterConfirm;

    /**
     * @return mixed 阶段结束是否打款
     */
    public function getTransferAfterConfirm() {
        return $this->transferAfterConfirm;
    }

    /**
     * 设置阶段结束是否打款
     * @param Boolean $transferAfterConfirm
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setTransferAfterConfirm( $transferAfterConfirm) {
        $this->transferAfterConfirm = $transferAfterConfirm;
    }


    private $needSellerCallNext;

    /**
     * @return mixed 是否需要卖家推进
     */
    public function getNeedSellerCallNext() {
        return $this->needSellerCallNext;
    }

    /**
     * 设置是否需要卖家推进
     * @param Boolean $needSellerCallNext
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setNeedSellerCallNext( $needSellerCallNext) {
        $this->needSellerCallNext = $needSellerCallNext;
    }


    private $instantPay;

    /**
     * @return mixed 是否允许即时到帐
     */
    public function getInstantPay() {
        return $this->instantPay;
    }

    /**
     * 设置是否允许即时到帐
     * @param Boolean $instantPay
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setInstantPay( $instantPay) {
        $this->instantPay = $instantPay;
    }


	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "stepOrderId", $this->stdResult )) {
		    $this->stepOrderId = $this->stdResult->{"stepOrderId"};
		}
		if (array_key_exists ( "stepOrderStatus", $this->stdResult )) {
		    $this->stepOrderStatus = $this->stdResult->{"stepOrderStatus"};
		}
		if (array_key_exists ( "stepPayStatus", $this->stdResult )) {
		    $this->stepPayStatus = $this->stdResult->{"stepPayStatus"};
		}
		if (array_key_exists ( "stepNo", $this->stdResult )) {
		    $this->stepNo = $this->stdResult->{"stepNo"};
		}
		if (array_key_exists ( "lastStep", $this->stdResult )) {
		    $this->lastStep = $this->stdResult->{"lastStep"};
		}
		if (array_key_exists ( "hasDisbursed", $this->stdResult )) {
		    $this->hasDisbursed = $this->stdResult->{"hasDisbursed"};
		}
		if (array_key_exists ( "payFee", $this->stdResult )) {
		    $this->payFee = $this->stdResult->{"payFee"};
		}
		if (array_key_exists ( "actualPayFee", $this->stdResult )) {
		    $this->actualPayFee = $this->stdResult->{"actualPayFee"};
		}
		if (array_key_exists ( "discountFee", $this->stdResult )) {
		    $this->discountFee = $this->stdResult->{"discountFee"};
		}
		if (array_key_exists ( "itemDiscountFee", $this->stdResult )) {
		    $this->itemDiscountFee = $this->stdResult->{"itemDiscountFee"};
		}
		if (array_key_exists ( "price", $this->stdResult )) {
		    $this->price = $this->stdResult->{"price"};
		}
		if (array_key_exists ( "amount", $this->stdResult )) {
		    $this->amount = $this->stdResult->{"amount"};
		}
		if (array_key_exists ( "postFee", $this->stdResult )) {
		    $this->postFee = $this->stdResult->{"postFee"};
		}
		if (array_key_exists ( "adjustFee", $this->stdResult )) {
		    $this->adjustFee = $this->stdResult->{"adjustFee"};
		}
		if (array_key_exists ( "gmtCreate", $this->stdResult )) {
		    $this->gmtCreate = $this->stdResult->{"gmtCreate"};
		}
		if (array_key_exists ( "gmtModified", $this->stdResult )) {
		    $this->gmtModified = $this->stdResult->{"gmtModified"};
		}
		if (array_key_exists ( "enterTime", $this->stdResult )) {
		    $this->enterTime = $this->stdResult->{"enterTime"};
		}
		if (array_key_exists ( "payTime", $this->stdResult )) {
		    $this->payTime = $this->stdResult->{"payTime"};
		}
		if (array_key_exists ( "sellerActionTime", $this->stdResult )) {
		    $this->sellerActionTime = $this->stdResult->{"sellerActionTime"};
		}
		if (array_key_exists ( "endTime", $this->stdResult )) {
		    $this->endTime = $this->stdResult->{"endTime"};
		}
		if (array_key_exists ( "messagePath", $this->stdResult )) {
		    $this->messagePath = $this->stdResult->{"messagePath"};
		}
		if (array_key_exists ( "picturePath", $this->stdResult )) {
		    $this->picturePath = $this->stdResult->{"picturePath"};
		}
		if (array_key_exists ( "message", $this->stdResult )) {
		    $this->message = $this->stdResult->{"message"};
		}
		if (array_key_exists ( "templateId", $this->stdResult )) {
		    $this->templateId = $this->stdResult->{"templateId"};
		}
		if (array_key_exists ( "stepName", $this->stdResult )) {
		    $this->stepName = $this->stdResult->{"stepName"};
		}
		if (array_key_exists ( "sellerActionName", $this->stdResult )) {
		    $this->sellerActionName = $this->stdResult->{"sellerActionName"};
		}
		if (array_key_exists ( "buyerPayTimeout", $this->stdResult )) {
		    $this->buyerPayTimeout = $this->stdResult->{"buyerPayTimeout"};
		}
		if (array_key_exists ( "buyerConfirmTimeout", $this->stdResult )) {
		    $this->buyerConfirmTimeout = $this->stdResult->{"buyerConfirmTimeout"};
		}
		if (array_key_exists ( "needLogistics", $this->stdResult )) {
		    $this->needLogistics = $this->stdResult->{"needLogistics"};
		}
		if (array_key_exists ( "needSellerAction", $this->stdResult )) {
		    $this->needSellerAction = $this->stdResult->{"needSellerAction"};
		}
		if (array_key_exists ( "transferAfterConfirm", $this->stdResult )) {
		    $this->transferAfterConfirm = $this->stdResult->{"transferAfterConfirm"};
		}
		if (array_key_exists ( "needSellerCallNext", $this->stdResult )) {
		    $this->needSellerCallNext = $this->stdResult->{"needSellerCallNext"};
		}
		if (array_key_exists ( "instantPay", $this->stdResult )) {
		    $this->instantPay = $this->stdResult->{"instantPay"};
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "stepOrderId", $this->arrayResult )) {
		    $this->stepOrderId = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "stepOrderStatus", $this->arrayResult )) {
		    $this->stepOrderStatus = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "stepPayStatus", $this->arrayResult )) {
		    $this->stepPayStatus = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "stepNo", $this->arrayResult )) {
		    $this->stepNo = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "lastStep", $this->arrayResult )) {
		    $this->lastStep = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "hasDisbursed", $this->arrayResult )) {
		    $this->hasDisbursed = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "payFee", $this->arrayResult )) {
		    $this->payFee = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "actualPayFee", $this->arrayResult )) {
		    $this->actualPayFee = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "discountFee", $this->arrayResult )) {
		    $this->discountFee = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "itemDiscountFee", $this->arrayResult )) {
		    $this->itemDiscountFee = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "price", $this->arrayResult )) {
		    $this->price = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "amount", $this->arrayResult )) {
		    $this->amount = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "postFee", $this->arrayResult )) {
		    $this->postFee = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "adjustFee", $this->arrayResult )) {
		    $this->adjustFee = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "gmtCreate", $this->arrayResult )) {
		    $this->gmtCreate = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "gmtModified", $this->arrayResult )) {
		    $this->gmtModified = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "enterTime", $this->arrayResult )) {
		    $this->enterTime = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "payTime", $this->arrayResult )) {
		    $this->payTime = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "sellerActionTime", $this->arrayResult )) {
		    $this->sellerActionTime = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "endTime", $this->arrayResult )) {
		    $this->endTime = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "messagePath", $this->arrayResult )) {
		    $this->messagePath = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "picturePath", $this->arrayResult )) {
		    $this->picturePath = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "message", $this->arrayResult )) {
		    $this->message = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "templateId", $this->arrayResult )) {
		    $this->templateId = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "stepName", $this->arrayResult )) {
		    $this->stepName = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "sellerActionName", $this->arrayResult )) {
		    $this->sellerActionName = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "buyerPayTimeout", $this->arrayResult )) {
		    $this->buyerPayTimeout = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "buyerConfirmTimeout", $this->arrayResult )) {
		    $this->buyerConfirmTimeout = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "needLogistics", $this->arrayResult )) {
		    $this->needLogistics = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "needSellerAction", $this->arrayResult )) {
		    $this->needSellerAction = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "transferAfterConfirm", $this->arrayResult )) {
		    $this->transferAfterConfirm = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "needSellerCallNext", $this->arrayResult )) {
		    $this->needSellerCallNext = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "instantPay", $this->arrayResult )) {
		    $this->instantPay = $arrayResult['${paramType.paramName}'];
		}
	}
}
