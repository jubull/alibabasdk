<?php
namespace com\alibaba\trade\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use com\alibaba\trade\param\AlibabaTradeRefundOpOrderRefundOperationModel;


class AlibabaTradeRefundOpOrderRefundModel extends SDKDomain {


    private $aftersaleAgreeTimeout;

    /**
     * @return mixed 售后超时标记
     */
    public function getAftersaleAgreeTimeout() {
        return $this->aftersaleAgreeTimeout;
    }

    /**
     * 设置售后超时标记
     * @param Boolean $aftersaleAgreeTimeout
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setAftersaleAgreeTimeout( $aftersaleAgreeTimeout) {
        $this->aftersaleAgreeTimeout = $aftersaleAgreeTimeout;
    }


    private $aftersaleAutoDisburse;

    /**
     * @return mixed 售后自动打款
     */
    public function getAftersaleAutoDisburse() {
        return $this->aftersaleAutoDisburse;
    }

    /**
     * 设置售后自动打款
     * @param Boolean $aftersaleAutoDisburse
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setAftersaleAutoDisburse( $aftersaleAutoDisburse) {
        $this->aftersaleAutoDisburse = $aftersaleAutoDisburse;
    }


    private $alipayPaymentId;

        /**
    * @return 支付宝交易号
    */
        public function getAlipayPaymentId() {
        return $this->alipayPaymentId;
    }

    /**
     * 设置支付宝交易号
     * @param String $alipayPaymentId
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setAlipayPaymentId( $alipayPaymentId) {
        $this->alipayPaymentId = $alipayPaymentId;
    }


    private $applyCarriage;

    /**
     * @return mixed 运费的申请退款金额，单位：分
     */
    public function getApplyCarriage() {
        return $this->applyCarriage;
    }

    /**
     * 设置运费的申请退款金额，单位：分
     * @param Long $applyCarriage
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setApplyCarriage( $applyCarriage) {
        $this->applyCarriage = $applyCarriage;
    }


    private $applyExpect;

    /**
     * @return mixed 买家原始输入的退款金额(可以为空)
     */
    public function getApplyExpect() {
        return $this->applyExpect;
    }

    /**
     * 设置买家原始输入的退款金额(可以为空)
     * @param Long $applyExpect
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setApplyExpect( $applyExpect) {
        $this->applyExpect = $applyExpect;
    }


    private $applyPayment;

    /**
     * @return mixed 买家申请退款金额，单位：分
     */
    public function getApplyPayment() {
        return $this->applyPayment;
    }

    /**
     * 设置买家申请退款金额，单位：分
     * @param Long $applyPayment
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setApplyPayment( $applyPayment) {
        $this->applyPayment = $applyPayment;
    }


    private $applyReason;

    /**
     * @return mixed 申请原因
     */
    public function getApplyReason() {
        return $this->applyReason;
    }

    /**
     * 设置申请原因
     * @param String $applyReason
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setApplyReason( $applyReason) {
        $this->applyReason = $applyReason;
    }


    private $applyReasonId;

    /**
     * @return mixed 申请原因ID
     */
    public function getApplyReasonId() {
        return $this->applyReasonId;
    }

    /**
     * 设置申请原因ID
     * @param Integer $applyReasonId
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setApplyReasonId( $applyReasonId) {
        $this->applyReasonId = $applyReasonId;
    }


    private $applySubReason;

    /**
     * @return mixed 二级退款原因
     */
    public function getApplySubReason() {
        return $this->applySubReason;
    }

    /**
     * 设置二级退款原因
     * @param String $applySubReason
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setApplySubReason( $applySubReason) {
        $this->applySubReason = $applySubReason;
    }


    private $applySubReasonId;

    /**
     * @return mixed 二级退款原因Id
     */
    public function getApplySubReasonId() {
        return $this->applySubReasonId;
    }

    /**
     * 设置二级退款原因Id
     * @param Integer $applySubReasonId
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setApplySubReasonId( $applySubReasonId) {
        $this->applySubReasonId = $applySubReasonId;
    }


    private $asynErrCode;

    /**
     * @return mixed
     */
    public function getAsynErrCode() {
        return $this->asynErrCode;
    }

    /**
     * 设置
     * @param String $asynErrCode
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setAsynErrCode( $asynErrCode) {
        $this->asynErrCode = $asynErrCode;
    }


    private $asynSubErrCode;

    /**
     * @return mixed
     */
    public function getAsynSubErrCode() {
        return $this->asynSubErrCode;
    }

    /**
     * 设置
     * @param String $asynSubErrCode
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setAsynSubErrCode( $asynSubErrCode) {
        $this->asynSubErrCode = $asynSubErrCode;
    }


    private $buyerAlipayId;

    /**
     * @return mixed 买家支付宝ID
     */
    public function getBuyerAlipayId() {
        return $this->buyerAlipayId;
    }

    /**
     * 设置买家支付宝ID
     * @param String $buyerAlipayId
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setBuyerAlipayId( $buyerAlipayId) {
        $this->buyerAlipayId = $buyerAlipayId;
    }


    private $buyerLogisticsName;

    /**
     * @return mixed 买家退货物流公司名
     */
    public function getBuyerLogisticsName() {
        return $this->buyerLogisticsName;
    }

    /**
     * 设置买家退货物流公司名
     * @param String $buyerLogisticsName
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setBuyerLogisticsName( $buyerLogisticsName) {
        $this->buyerLogisticsName = $buyerLogisticsName;
    }


    private $buyerMemberId;

    /**
     * @return mixed 买家会员ID
     */
    public function getBuyerMemberId() {
        return $this->buyerMemberId;
    }

    /**
     * 设置买家会员ID
     * @param String $buyerMemberId
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setBuyerMemberId( $buyerMemberId) {
        $this->buyerMemberId = $buyerMemberId;
    }


    private $buyerSendGoods;

    /**
     * @return mixed 买家是否已经发货（如果有退货的流程）
     */
    public function getBuyerSendGoods() {
        return $this->buyerSendGoods;
    }

    /**
     * 设置买家是否已经发货（如果有退货的流程）
     * @param Boolean $buyerSendGoods
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setBuyerSendGoods( $buyerSendGoods) {
        $this->buyerSendGoods = $buyerSendGoods;
    }


    private $buyerUserId;

    /**
     * @return mixed 买家阿里帐号ID(包括淘宝帐号Id)
     */
    public function getBuyerUserId() {
        return $this->buyerUserId;
    }

    /**
     * 设置买家阿里帐号ID(包括淘宝帐号Id)
     * @param Long $buyerUserId
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setBuyerUserId( $buyerUserId) {
        $this->buyerUserId = $buyerUserId;
    }


    private $canRefundPayment;

    /**
     * @return mixed 最大能够退款金额，单位：分
     */
    public function getCanRefundPayment() {
        return $this->canRefundPayment;
    }

    /**
     * 设置最大能够退款金额，单位：分
     * @param Long $canRefundPayment
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setCanRefundPayment( $canRefundPayment) {
        $this->canRefundPayment = $canRefundPayment;
    }


    private $crmModifyRefund;

    /**
     * @return mixed 是否小二修改过退款单
     */
    public function getCrmModifyRefund() {
        return $this->crmModifyRefund;
    }

    /**
     * 设置是否小二修改过退款单
     * @param Boolean $crmModifyRefund
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setCrmModifyRefund( $crmModifyRefund) {
        $this->crmModifyRefund = $crmModifyRefund;
    }


    private $disburseChannel;

    /**
     * @return mixed 极速到账打款渠道
     */
    public function getDisburseChannel() {
        return $this->disburseChannel;
    }

    /**
     * 设置极速到账打款渠道
     * @param String $disburseChannel
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setDisburseChannel( $disburseChannel) {
        $this->disburseChannel = $disburseChannel;
    }


    private $disputeRequest;

    /**
     * @return mixed 售后退款要求
     */
    public function getDisputeRequest() {
        return $this->disputeRequest;
    }

    /**
     * 设置售后退款要求
     * @param Integer $disputeRequest
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setDisputeRequest( $disputeRequest) {
        $this->disputeRequest = $disputeRequest;
    }


    private $disputeType;

    /**
     * @return mixed 纠纷类型：售中退款 售后退款，默认为售中退款
     */
    public function getDisputeType() {
        return $this->disputeType;
    }

    /**
     * 设置纠纷类型：售中退款 售后退款，默认为售中退款
     * @param Integer $disputeType
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setDisputeType( $disputeType) {
        $this->disputeType = $disputeType;
    }


    private $extInfo;

    /**
     * @return mixed 扩展信息
     */
    public function getExtInfo() {
        return $this->extInfo;
    }

    /**
     * 设置扩展信息
     * @param Map $extInfo
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setExtInfo(array $extInfo) {
        $this->extInfo = $extInfo;
    }


    private $freightBill;

    /**
     * @return mixed 运单号
     */
    public function getFreightBill() {
        return $this->freightBill;
    }

    /**
     * 设置运单号
     * @param String $freightBill
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setFreightBill( $freightBill) {
        $this->freightBill = $freightBill;
    }


    private $frozenFund;

    /**
     * @return mixed 实际冻结账户金额,单位：分
     */
    public function getFrozenFund() {
        return $this->frozenFund;
    }

    /**
     * 设置实际冻结账户金额,单位：分
     * @param Long $frozenFund
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setFrozenFund( $frozenFund) {
        $this->frozenFund = $frozenFund;
    }


    private $gmtApply;

    /**
     * @return mixed 申请退款时间
     */
    public function getGmtApply() {
        return $this->gmtApply;
    }

    /**
     * 设置申请退款时间
     * @param Date $gmtApply
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setGmtApply( $gmtApply) {
        $this->gmtApply = $gmtApply;
    }


    private $gmtCompleted;

    /**
     * @return mixed 完成时间
     */
    public function getGmtCompleted() {
        return $this->gmtCompleted;
    }

    /**
     * 设置完成时间
     * @param Date $gmtCompleted
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setGmtCompleted( $gmtCompleted) {
        $this->gmtCompleted = $gmtCompleted;
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


    private $gmtFreezed;

    /**
     * @return mixed 该退款单超时冻结开始时间
     */
    public function getGmtFreezed() {
        return $this->gmtFreezed;
    }

    /**
     * 设置该退款单超时冻结开始时间
     * @param Date $gmtFreezed
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setGmtFreezed( $gmtFreezed) {
        $this->gmtFreezed = $gmtFreezed;
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


    private $gmtTimeOut;

    /**
     * @return mixed 该退款单超时完成的时间期限
     */
    public function getGmtTimeOut() {
        return $this->gmtTimeOut;
    }

    /**
     * 设置该退款单超时完成的时间期限
     * @param Date $gmtTimeOut
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setGmtTimeOut( $gmtTimeOut) {
        $this->gmtTimeOut = $gmtTimeOut;
    }


    private $goodsReceived;

    /**
     * @return mixed 买家是否已收到货
     */
        public function getGoodsReceived() {
        return $this->goodsReceived;
    }

    /**
     * 设置买家是否已收到货
     * @param Boolean $goodsReceived
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setGoodsReceived( $goodsReceived) {
        $this->goodsReceived = $goodsReceived;
    }


    private $goodsStatus;

    /**
     * @return mixed
     * 1：买家未收到货
     * 2：买家已收到货
     * 3：买家已退货
     */
    public function getGoodsStatus() {
        return $this->goodsStatus;
    }

    /**
     * 设置
     * 1：买家未收到货
     * 2：买家已收到货
     * 3：买家已退货
     * @param Integer $goodsStatus
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setGoodsStatus( $goodsStatus) {
        $this->goodsStatus = $goodsStatus;
    }


    private $id;

    /**
     * @return mixed 退款单编号
     */
    public function getId() {
        return $this->id;
    }

    /**
     * 设置退款单编号
     * @param Long $id
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setId( $id) {
        $this->id = $id;
    }


    private $instantRefundType;

    /**
     * @return mixed 极速到账退款类型
     */
    public function getInstantRefundType() {
        return $this->instantRefundType;
    }

    /**
     * 设置极速到账退款类型
     * @param String $instantRefundType
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setInstantRefundType( $instantRefundType) {
        $this->instantRefundType = $instantRefundType;
    }


    private $insufficientAccount;

    /**
     * @return mixed 交易4.0退款余额不足
     */
    public function getInsufficientAccount() {
        return $this->insufficientAccount;
    }

    /**
     * 设置交易4.0退款余额不足
     * @param Boolean $insufficientAccount
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setInsufficientAccount( $insufficientAccount) {
        $this->insufficientAccount = $insufficientAccount;
    }


    private $insufficientBail;

    /**
     * @return mixed 极速到账退款保证金不足
     */
    public function getInsufficientBail() {
        return $this->insufficientBail;
    }

    /**
     * 设置极速到账退款保证金不足
     * @param Boolean $insufficientBail
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setInsufficientBail( $insufficientBail) {
        $this->insufficientBail = $insufficientBail;
    }


    private $newRefundReturn;

    /**
     * @return mixed 是否新流程创建的退款退货
     */
    public function getNewRefundReturn() {
        return $this->newRefundReturn;
    }

    /**
     * 设置是否新流程创建的退款退货
     * @param Boolean $newRefundReturn
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setNewRefundReturn( $newRefundReturn) {
        $this->newRefundReturn = $newRefundReturn;
    }


    private $onlyRefund;

    /**
     * @return mixed 是否仅退款
     */
    public function getOnlyRefund() {
        return $this->onlyRefund;
    }

    /**
     * 设置是否仅退款
     * @param Boolean $onlyRefund
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setOnlyRefund( $onlyRefund) {
        $this->onlyRefund = $onlyRefund;
    }


    private $orderEntryCountMap;

    /**
     * @return mixed 子订单退货数量
     */
    public function getOrderEntryCountMap() {
        return $this->orderEntryCountMap;
    }

    /**
     * 设置子订单退货数量
     * @param Map $orderEntryCountMap
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setOrderEntryCountMap(array $orderEntryCountMap) {
        $this->orderEntryCountMap = $orderEntryCountMap;
    }


    private $orderEntryIdList;

    /**
     * @return mixed 退款单包含的订单明细，时间逆序排列
     */
    public function getOrderEntryIdList() {
        return $this->orderEntryIdList;
    }

    /**
     * 设置退款单包含的订单明细，时间逆序排列
     * @param array $orderEntryIdList
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setOrderEntryIdList(array $orderEntryIdList) {
        $this->orderEntryIdList = $orderEntryIdList;
    }


    private $orderId;

    /**
     * @return mixed 退款单对应的订单编号
     */
    public function getOrderId() {
        return $this->orderId;
    }

    /**
     * 设置退款单对应的订单编号
     * @param Long $orderId
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setOrderId( $orderId) {
        $this->orderId = $orderId;
    }


    private $prepaidBalance;

    /**
     * @return mixed 极速退款垫资金额,该值不为空时,只代表该退款单可以走垫资流程,但不代表一定垫资成功
     */
    public function getPrepaidBalance() {
        return $this->prepaidBalance;
    }

    /**
     * 设置极速退款垫资金额,该值不为空时,只代表该退款单可以走垫资流程,但不代表一定垫资成功
     * @param Long $prepaidBalance
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setPrepaidBalance( $prepaidBalance) {
        $this->prepaidBalance = $prepaidBalance;
    }


    private $productName;

    /**
     * @return mixed 产品名称(退款单关联订单明细的货品名称)
     */
    public function getProductName() {
        return $this->productName;
    }

    /**
     * 设置产品名称(退款单关联订单明细的货品名称)
     * @param String $productName
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setProductName( $productName) {
        $this->productName = $productName;
    }


    private $refundCarriage;

    /**
     * @return mixed 运费的实际退款金额，单位：分
     */
    public function getRefundCarriage() {
        return $this->refundCarriage;
    }

    /**
     * 设置运费的实际退款金额，单位：分
     * @param Long $refundCarriage
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setRefundCarriage( $refundCarriage) {
        $this->refundCarriage = $refundCarriage;
    }


    private $refundGoods;

        /**
    * @return 是否要求退货
    */
        public function getRefundGoods() {
        return $this->refundGoods;
    }

    /**
     * 设置是否要求退货
     * @param Boolean $refundGoods
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setRefundGoods( $refundGoods) {
        $this->refundGoods = $refundGoods;
    }


    private $refundId;

    /**
     * @return mixed 退款单逻辑主键
     */
    public function getRefundId() {
        return $this->refundId;
    }

    /**
     * 设置退款单逻辑主键
     * @param String $refundId
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setRefundId( $refundId) {
        $this->refundId = $refundId;
    }


    private $refundPayment;

    /**
     * @return mixed 实际退款金额，单位：分
     */
    public function getRefundPayment() {
        return $this->refundPayment;
    }

    /**
     * 设置实际退款金额，单位：分
     * @param Long $refundPayment
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setRefundPayment( $refundPayment) {
        $this->refundPayment = $refundPayment;
    }


    private $rejectReason;

    /**
     * @return mixed 卖家拒绝原因
     */
    public function getRejectReason() {
        return $this->rejectReason;
    }

    /**
     * 设置卖家拒绝原因
     * @param String $rejectReason
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setRejectReason( $rejectReason) {
        $this->rejectReason = $rejectReason;
    }


    private $rejectReasonId;

    /**
     * @return mixed 卖家拒绝原因Id
     */
    public function getRejectReasonId() {
        return $this->rejectReasonId;
    }

    /**
     * 设置卖家拒绝原因Id
     * @param Integer $rejectReasonId
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setRejectReasonId( $rejectReasonId) {
        $this->rejectReasonId = $rejectReasonId;
    }


    private $rejectTimes;

    /**
     * @return mixed 退款单被拒绝的次数
     */
    public function getRejectTimes() {
        return $this->rejectTimes;
    }

    /**
     * 设置退款单被拒绝的次数
     * @param Integer $rejectTimes
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setRejectTimes( $rejectTimes) {
        $this->rejectTimes = $rejectTimes;
    }


    private $sellerAlipayId;

    /**
     * @return mixed 卖家支付宝ID
     */
    public function getSellerAlipayId() {
        return $this->sellerAlipayId;
    }

    /**
     * 设置卖家支付宝ID
     * @param String $sellerAlipayId
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setSellerAlipayId( $sellerAlipayId) {
        $this->sellerAlipayId = $sellerAlipayId;
    }


    private $sellerDelayDisburse;

    /**
     * @return mixed 是否卖家延迟打款，即安全退款
     */
    public function getSellerDelayDisburse() {
        return $this->sellerDelayDisburse;
    }

    /**
     * 设置是否卖家延迟打款，即安全退款
     * @param Boolean $sellerDelayDisburse
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setSellerDelayDisburse( $sellerDelayDisburse) {
        $this->sellerDelayDisburse = $sellerDelayDisburse;
    }


    private $sellerMemberId;

    /**
     * @return mixed 卖家会员ID
     */
    public function getSellerMemberId() {
        return $this->sellerMemberId;
    }

    /**
     * 设置卖家会员ID
     * @param String $sellerMemberId
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setSellerMemberId( $sellerMemberId) {
        $this->sellerMemberId = $sellerMemberId;
    }


    private $sellerMobile;

    /**
     * @return mixed 收货人手机
     */
    public function getSellerMobile() {
        return $this->sellerMobile;
    }

    /**
     * 设置收货人手机
     * @param String $sellerMobile
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setSellerMobile( $sellerMobile) {
        $this->sellerMobile = $sellerMobile;
    }


    private $sellerRealName;

    /**
     * @return mixed 收货人姓名
     */
    public function getSellerRealName() {
        return $this->sellerRealName;
    }

    /**
     * 设置收货人姓名
     * @param String $sellerRealName
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setSellerRealName( $sellerRealName) {
        $this->sellerRealName = $sellerRealName;
    }


    private $sellerReceiveAddress;

    /**
     * @return mixed 买家退货时卖家收货地址
     */
    public function getSellerReceiveAddress() {
        return $this->sellerReceiveAddress;
    }

    /**
     * 设置买家退货时卖家收货地址
     * @param String $sellerReceiveAddress
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setSellerReceiveAddress( $sellerReceiveAddress) {
        $this->sellerReceiveAddress = $sellerReceiveAddress;
    }


    private $sellerTel;

    /**
     * @return mixed 收货人电话
     */
    public function getSellerTel() {
        return $this->sellerTel;
    }

    /**
     * 设置收货人电话
     * @param String $sellerTel
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setSellerTel( $sellerTel) {
        $this->sellerTel = $sellerTel;
    }


    private $sellerUserId;

    /**
     * @return mixed 卖家阿里帐号ID(包括淘宝帐号Id)
     */
    public function getSellerUserId() {
        return $this->sellerUserId;
    }

    /**
     * 设置卖家阿里帐号ID(包括淘宝帐号Id)
     * @param Long $sellerUserId
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setSellerUserId( $sellerUserId) {
        $this->sellerUserId = $sellerUserId;
    }


    private $status;

    /**
     * @return mixed 退款状态
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * 设置退款状态
     * @param String $status
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setStatus( $status) {
        $this->status = $status;
    }


    private $supportNewSteppay;

    /**
     * @return mixed 是否支持交易4.0
     */
    public function getSupportNewSteppay() {
        return $this->supportNewSteppay;
    }

    /**
     * 设置是否支持交易4.0
     * @param Boolean $supportNewSteppay
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setSupportNewSteppay( $supportNewSteppay) {
        $this->supportNewSteppay = $supportNewSteppay;
    }


    private $taskStatus;

    /**
     * @return mixed 工单子状态，没有流到CRM创建工单时为空
     */
    public function getTaskStatus() {
        return $this->taskStatus;
    }

    /**
     * 设置工单子状态，没有流到CRM创建工单时为空
     * @param String $taskStatus
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setTaskStatus( $taskStatus) {
        $this->taskStatus = $taskStatus;
    }


    private $timeOutFreeze;

    /**
     * @return mixed 是否超时系统冻结，true代表冻结，false代表不冻结
     */
    public function getTimeOutFreeze() {
        return $this->timeOutFreeze;
    }

    /**
     * 设置是否超时系统冻结，true代表冻结，false代表不冻结
     * @param Boolean $timeOutFreeze
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setTimeOutFreeze( $timeOutFreeze) {
        $this->timeOutFreeze = $timeOutFreeze;
    }


    private $timeOutOperateType;

    /**
     * @return mixed 超时后执行的动作
     */
    public function getTimeOutOperateType() {
        return $this->timeOutOperateType;
    }

    /**
     * 设置超时后执行的动作
     * @param String $timeOutOperateType
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setTimeOutOperateType( $timeOutOperateType) {
        $this->timeOutOperateType = $timeOutOperateType;
    }


    private $tradeTypeStr;

    /**
     * @return mixed 交易类型，用来替换枚举类型的tradeType
     */
    public function getTradeTypeStr() {
        return $this->tradeTypeStr;
    }

    /**
     * 设置交易类型，用来替换枚举类型的tradeType
     * @param String $tradeTypeStr
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setTradeTypeStr( $tradeTypeStr) {
        $this->tradeTypeStr = $tradeTypeStr;
    }


    private $refundOperationList;

    /**
     * @return mixed 操作记录列表
     */
    public function getRefundOperationList() {
        return $this->refundOperationList;
    }

    /**
     * 设置操作记录列表
     * @param \com\alibaba\trade\param\AlibabaTradeRefundOpOrderRefundOperationModel $refundOperationList
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setRefundOperationList(AlibabaTradeRefundOpOrderRefundOperationModel $refundOperationList) {
        $this->refundOperationList = $refundOperationList;
    }


    private $buyerLoginId;

    /**
     * @return mixed 买家LoginId
     */
    public function getBuyerLoginId() {
        return $this->buyerLoginId;
    }

    /**
     * 设置买家LoginId
     * @param String $buyerLoginId
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setBuyerLoginId( $buyerLoginId) {
        $this->buyerLoginId = $buyerLoginId;
    }


    private $sellerLoginId;

    /**
     * @return mixed 卖家LoginId
     */
    public function getSellerLoginId() {
        return $this->sellerLoginId;
    }

    /**
     * 设置卖家LoginId
     * @param String $sellerLoginId
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setSellerLoginId( $sellerLoginId) {
        $this->sellerLoginId = $sellerLoginId;
    }


	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "aftersaleAgreeTimeout", $this->stdResult )) {
		    $this->aftersaleAgreeTimeout = $this->stdResult->{"aftersaleAgreeTimeout"};
		}
		if (array_key_exists ( "aftersaleAutoDisburse", $this->stdResult )) {
		    $this->aftersaleAutoDisburse = $this->stdResult->{"aftersaleAutoDisburse"};
		}
		if (array_key_exists ( "alipayPaymentId", $this->stdResult )) {
		    $this->alipayPaymentId = $this->stdResult->{"alipayPaymentId"};
		}
		if (array_key_exists ( "applyCarriage", $this->stdResult )) {
		    $this->applyCarriage = $this->stdResult->{"applyCarriage"};
		}
		if (array_key_exists ( "applyExpect", $this->stdResult )) {
		    $this->applyExpect = $this->stdResult->{"applyExpect"};
		}
		if (array_key_exists ( "applyPayment", $this->stdResult )) {
		    $this->applyPayment = $this->stdResult->{"applyPayment"};
		}
		if (array_key_exists ( "applyReason", $this->stdResult )) {
		    $this->applyReason = $this->stdResult->{"applyReason"};
		}
		if (array_key_exists ( "applyReasonId", $this->stdResult )) {
		    $this->applyReasonId = $this->stdResult->{"applyReasonId"};
		}
		if (array_key_exists ( "applySubReason", $this->stdResult )) {
		    $this->applySubReason = $this->stdResult->{"applySubReason"};
		}
		if (array_key_exists ( "applySubReasonId", $this->stdResult )) {
		    $this->applySubReasonId = $this->stdResult->{"applySubReasonId"};
		}
		if (array_key_exists ( "asynErrCode", $this->stdResult )) {
		    $this->asynErrCode = $this->stdResult->{"asynErrCode"};
		}
		if (array_key_exists ( "asynSubErrCode", $this->stdResult )) {
		    $this->asynSubErrCode = $this->stdResult->{"asynSubErrCode"};
		}
		if (array_key_exists ( "buyerAlipayId", $this->stdResult )) {
		    $this->buyerAlipayId = $this->stdResult->{"buyerAlipayId"};
		}
		if (array_key_exists ( "buyerLogisticsName", $this->stdResult )) {
		    $this->buyerLogisticsName = $this->stdResult->{"buyerLogisticsName"};
		}
		if (array_key_exists ( "buyerMemberId", $this->stdResult )) {
		    $this->buyerMemberId = $this->stdResult->{"buyerMemberId"};
		}
		if (array_key_exists ( "buyerSendGoods", $this->stdResult )) {
		    $this->buyerSendGoods = $this->stdResult->{"buyerSendGoods"};
		}
		if (array_key_exists ( "buyerUserId", $this->stdResult )) {
		    $this->buyerUserId = $this->stdResult->{"buyerUserId"};
		}
		if (array_key_exists ( "canRefundPayment", $this->stdResult )) {
		    $this->canRefundPayment = $this->stdResult->{"canRefundPayment"};
		}
		if (array_key_exists ( "crmModifyRefund", $this->stdResult )) {
		    $this->crmModifyRefund = $this->stdResult->{"crmModifyRefund"};
		}
		if (array_key_exists ( "disburseChannel", $this->stdResult )) {
		    $this->disburseChannel = $this->stdResult->{"disburseChannel"};
		}
		if (array_key_exists ( "disputeRequest", $this->stdResult )) {
		    $this->disputeRequest = $this->stdResult->{"disputeRequest"};
		}
		if (array_key_exists ( "disputeType", $this->stdResult )) {
		    $this->disputeType = $this->stdResult->{"disputeType"};
		}
		if (array_key_exists ( "extInfo", $this->stdResult )) {
		    $this->extInfo = $this->stdResult->{"extInfo"};
		}
		if (array_key_exists ( "freightBill", $this->stdResult )) {
		    $this->freightBill = $this->stdResult->{"freightBill"};
		}
		if (array_key_exists ( "frozenFund", $this->stdResult )) {
		    $this->frozenFund = $this->stdResult->{"frozenFund"};
		}
		if (array_key_exists ( "gmtApply", $this->stdResult )) {
		    $this->gmtApply = $this->stdResult->{"gmtApply"};
		}
		if (array_key_exists ( "gmtCompleted", $this->stdResult )) {
		    $this->gmtCompleted = $this->stdResult->{"gmtCompleted"};
		}
		if (array_key_exists ( "gmtCreate", $this->stdResult )) {
		    $this->gmtCreate = $this->stdResult->{"gmtCreate"};
		}
		if (array_key_exists ( "gmtFreezed", $this->stdResult )) {
		    $this->gmtFreezed = $this->stdResult->{"gmtFreezed"};
		}
		if (array_key_exists ( "gmtModified", $this->stdResult )) {
		    $this->gmtModified = $this->stdResult->{"gmtModified"};
		}
		if (array_key_exists ( "gmtTimeOut", $this->stdResult )) {
		    $this->gmtTimeOut = $this->stdResult->{"gmtTimeOut"};
		}
		if (array_key_exists ( "goodsReceived", $this->stdResult )) {
		    $this->goodsReceived = $this->stdResult->{"goodsReceived"};
		}
		if (array_key_exists ( "goodsStatus", $this->stdResult )) {
		    $this->goodsStatus = $this->stdResult->{"goodsStatus"};
		}
		if (array_key_exists ( "id", $this->stdResult )) {
		    $this->id = $this->stdResult->{"id"};
		}
		if (array_key_exists ( "instantRefundType", $this->stdResult )) {
		    $this->instantRefundType = $this->stdResult->{"instantRefundType"};
		}
		if (array_key_exists ( "insufficientAccount", $this->stdResult )) {
		    $this->insufficientAccount = $this->stdResult->{"insufficientAccount"};
		}
		if (array_key_exists ( "insufficientBail", $this->stdResult )) {
		    $this->insufficientBail = $this->stdResult->{"insufficientBail"};
		}
		if (array_key_exists ( "newRefundReturn", $this->stdResult )) {
		    $this->newRefundReturn = $this->stdResult->{"newRefundReturn"};
		}
		if (array_key_exists ( "onlyRefund", $this->stdResult )) {
		    $this->onlyRefund = $this->stdResult->{"onlyRefund"};
		}
		if (array_key_exists ( "orderEntryCountMap", $this->stdResult )) {
		    $this->orderEntryCountMap = $this->stdResult->{"orderEntryCountMap"};
		}
		if (array_key_exists ( "orderEntryIdList", $this->stdResult )) {
		    $this->orderEntryIdList = $this->stdResult->{"orderEntryIdList"};
		}
		if (array_key_exists ( "orderId", $this->stdResult )) {
		    $this->orderId = $this->stdResult->{"orderId"};
		}
		if (array_key_exists ( "prepaidBalance", $this->stdResult )) {
		    $this->prepaidBalance = $this->stdResult->{"prepaidBalance"};
		}
		if (array_key_exists ( "productName", $this->stdResult )) {
		    $this->productName = $this->stdResult->{"productName"};
		}
		if (array_key_exists ( "refundCarriage", $this->stdResult )) {
		    $this->refundCarriage = $this->stdResult->{"refundCarriage"};
		}
		if (array_key_exists ( "refundGoods", $this->stdResult )) {
		    $this->refundGoods = $this->stdResult->{"refundGoods"};
		}
		if (array_key_exists ( "refundId", $this->stdResult )) {
		    $this->refundId = $this->stdResult->{"refundId"};
		}
		if (array_key_exists ( "refundPayment", $this->stdResult )) {
		    $this->refundPayment = $this->stdResult->{"refundPayment"};
		}
		if (array_key_exists ( "rejectReason", $this->stdResult )) {
		    $this->rejectReason = $this->stdResult->{"rejectReason"};
		}
		if (array_key_exists ( "rejectReasonId", $this->stdResult )) {
		    $this->rejectReasonId = $this->stdResult->{"rejectReasonId"};
		}
		if (array_key_exists ( "rejectTimes", $this->stdResult )) {
		    $this->rejectTimes = $this->stdResult->{"rejectTimes"};
		}
		if (array_key_exists ( "sellerAlipayId", $this->stdResult )) {
		    $this->sellerAlipayId = $this->stdResult->{"sellerAlipayId"};
		}
		if (array_key_exists ( "sellerDelayDisburse", $this->stdResult )) {
		    $this->sellerDelayDisburse = $this->stdResult->{"sellerDelayDisburse"};
		}
		if (array_key_exists ( "sellerMemberId", $this->stdResult )) {
		    $this->sellerMemberId = $this->stdResult->{"sellerMemberId"};
		}
		if (array_key_exists ( "sellerMobile", $this->stdResult )) {
		    $this->sellerMobile = $this->stdResult->{"sellerMobile"};
		}
		if (array_key_exists ( "sellerRealName", $this->stdResult )) {
		    $this->sellerRealName = $this->stdResult->{"sellerRealName"};
		}
		if (array_key_exists ( "sellerReceiveAddress", $this->stdResult )) {
		    $this->sellerReceiveAddress = $this->stdResult->{"sellerReceiveAddress"};
		}
		if (array_key_exists ( "sellerTel", $this->stdResult )) {
		    $this->sellerTel = $this->stdResult->{"sellerTel"};
		}
		if (array_key_exists ( "sellerUserId", $this->stdResult )) {
		    $this->sellerUserId = $this->stdResult->{"sellerUserId"};
		}
		if (array_key_exists ( "status", $this->stdResult )) {
		    $this->status = $this->stdResult->{"status"};
		}
		if (array_key_exists ( "supportNewSteppay", $this->stdResult )) {
		    $this->supportNewSteppay = $this->stdResult->{"supportNewSteppay"};
		}
		if (array_key_exists ( "taskStatus", $this->stdResult )) {
		    $this->taskStatus = $this->stdResult->{"taskStatus"};
		}
		if (array_key_exists ( "timeOutFreeze", $this->stdResult )) {
		    $this->timeOutFreeze = $this->stdResult->{"timeOutFreeze"};
		}
		if (array_key_exists ( "timeOutOperateType", $this->stdResult )) {
		    $this->timeOutOperateType = $this->stdResult->{"timeOutOperateType"};
		}
		if (array_key_exists ( "tradeTypeStr", $this->stdResult )) {
		    $this->tradeTypeStr = $this->stdResult->{"tradeTypeStr"};
		}
		if (array_key_exists ( "refundOperationList", $this->stdResult )) {
		    $refundOperationListResult=$this->stdResult->{"refundOperationList"};
		    $object = json_decode ( json_encode ( $refundOperationListResult ), true );
		    $this->refundOperationList = array ();
		    for($i = 0; $i < count ( $object ); $i ++) {
		        $arrayobject = new \ArrayObject($object[$i]);
		        $AlibabaTradeRefundOpOrderRefundOperationModelResult=new AlibabaTradeRefundOpOrderRefundOperationModel();
		        $AlibabaTradeRefundOpOrderRefundOperationModelResult->setArrayResult($arrayobject );
		        $this->refundOperationList [$i] = $AlibabaTradeRefundOpOrderRefundOperationModelResult;
		    }
		}
		if (array_key_exists ( "buyerLoginId", $this->stdResult )) {
		    $this->buyerLoginId = $this->stdResult->{"buyerLoginId"};
		}
		if (array_key_exists ( "sellerLoginId", $this->stdResult )) {
		    $this->sellerLoginId = $this->stdResult->{"sellerLoginId"};
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "aftersaleAgreeTimeout", $this->arrayResult )) {
		    $this->aftersaleAgreeTimeout = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "aftersaleAutoDisburse", $this->arrayResult )) {
		    $this->aftersaleAutoDisburse = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "alipayPaymentId", $this->arrayResult )) {
		    $this->alipayPaymentId = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "applyCarriage", $this->arrayResult )) {
		    $this->applyCarriage = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "applyExpect", $this->arrayResult )) {
		    $this->applyExpect = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "applyPayment", $this->arrayResult )) {
		    $this->applyPayment = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "applyReason", $this->arrayResult )) {
		    $this->applyReason = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "applyReasonId", $this->arrayResult )) {
		    $this->applyReasonId = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "applySubReason", $this->arrayResult )) {
		    $this->applySubReason = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "applySubReasonId", $this->arrayResult )) {
		    $this->applySubReasonId = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "asynErrCode", $this->arrayResult )) {
		    $this->asynErrCode = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "asynSubErrCode", $this->arrayResult )) {
		    $this->asynSubErrCode = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "buyerAlipayId", $this->arrayResult )) {
		    $this->buyerAlipayId = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "buyerLogisticsName", $this->arrayResult )) {
		    $this->buyerLogisticsName = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "buyerMemberId", $this->arrayResult )) {
		    $this->buyerMemberId = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "buyerSendGoods", $this->arrayResult )) {
		    $this->buyerSendGoods = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "buyerUserId", $this->arrayResult )) {
		    $this->buyerUserId = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "canRefundPayment", $this->arrayResult )) {
		    $this->canRefundPayment = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "crmModifyRefund", $this->arrayResult )) {
		    $this->crmModifyRefund = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "disburseChannel", $this->arrayResult )) {
		    $this->disburseChannel = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "disputeRequest", $this->arrayResult )) {
		    $this->disputeRequest = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "disputeType", $this->arrayResult )) {
		    $this->disputeType = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "extInfo", $this->arrayResult )) {
		    $this->extInfo = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "freightBill", $this->arrayResult )) {
		    $this->freightBill = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "frozenFund", $this->arrayResult )) {
		    $this->frozenFund = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "gmtApply", $this->arrayResult )) {
		    $this->gmtApply = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "gmtCompleted", $this->arrayResult )) {
		    $this->gmtCompleted = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "gmtCreate", $this->arrayResult )) {
		    $this->gmtCreate = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "gmtFreezed", $this->arrayResult )) {
		    $this->gmtFreezed = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "gmtModified", $this->arrayResult )) {
		    $this->gmtModified = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "gmtTimeOut", $this->arrayResult )) {
		    $this->gmtTimeOut = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "goodsReceived", $this->arrayResult )) {
		    $this->goodsReceived = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "goodsStatus", $this->arrayResult )) {
		    $this->goodsStatus = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "id", $this->arrayResult )) {
		    $this->id = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "instantRefundType", $this->arrayResult )) {
		    $this->instantRefundType = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "insufficientAccount", $this->arrayResult )) {
		    $this->insufficientAccount = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "insufficientBail", $this->arrayResult )) {
		    $this->insufficientBail = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "newRefundReturn", $this->arrayResult )) {
		    $this->newRefundReturn = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "onlyRefund", $this->arrayResult )) {
		    $this->onlyRefund = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "orderEntryCountMap", $this->arrayResult )) {
		    $this->orderEntryCountMap = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "orderEntryIdList", $this->arrayResult )) {
		    $this->orderEntryIdList = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "orderId", $this->arrayResult )) {
		    $this->orderId = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "prepaidBalance", $this->arrayResult )) {
		    $this->prepaidBalance = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "productName", $this->arrayResult )) {
		    $this->productName = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "refundCarriage", $this->arrayResult )) {
		    $this->refundCarriage = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "refundGoods", $this->arrayResult )) {
		    $this->refundGoods = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "refundId", $this->arrayResult )) {
		    $this->refundId = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "refundPayment", $this->arrayResult )) {
		    $this->refundPayment = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "rejectReason", $this->arrayResult )) {
		    $this->rejectReason = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "rejectReasonId", $this->arrayResult )) {
		    $this->rejectReasonId = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "rejectTimes", $this->arrayResult )) {
		    $this->rejectTimes = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "sellerAlipayId", $this->arrayResult )) {
		    $this->sellerAlipayId = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "sellerDelayDisburse", $this->arrayResult )) {
		    $this->sellerDelayDisburse = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "sellerMemberId", $this->arrayResult )) {
		    $this->sellerMemberId = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "sellerMobile", $this->arrayResult )) {
		    $this->sellerMobile = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "sellerRealName", $this->arrayResult )) {
		    $this->sellerRealName = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "sellerReceiveAddress", $this->arrayResult )) {
		    $this->sellerReceiveAddress = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "sellerTel", $this->arrayResult )) {
		    $this->sellerTel = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "sellerUserId", $this->arrayResult )) {
		    $this->sellerUserId = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "status", $this->arrayResult )) {
		    $this->status = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "supportNewSteppay", $this->arrayResult )) {
		    $this->supportNewSteppay = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "taskStatus", $this->arrayResult )) {
		    $this->taskStatus = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "timeOutFreeze", $this->arrayResult )) {
		    $this->timeOutFreeze = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "timeOutOperateType", $this->arrayResult )) {
		    $this->timeOutOperateType = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "tradeTypeStr", $this->arrayResult )) {
		    $this->tradeTypeStr = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "refundOperationList", $this->arrayResult )) {
    		$refundOperationListResult=$arrayResult['${paramType.paramName}'];
    		$this->refundOperationList = new AlibabaTradeRefundOpOrderRefundOperationModel();
    		$this->refundOperationList->setStdResult ( $refundOperationListResult);
		}
		if (array_key_exists ( "buyerLoginId", $this->arrayResult )) {
		    $this->buyerLoginId = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "sellerLoginId", $this->arrayResult )) {
		    $this->sellerLoginId = $arrayResult['${paramType.paramName}'];
		}
	}
}
