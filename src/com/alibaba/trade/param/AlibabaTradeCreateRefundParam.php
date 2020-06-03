<?php

namespace com\alibaba\trade\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use com\aliaba\trade\param\AlibabaOceanOpenplatformBizTradeCommonModelOrderEntryCountModel;


class AlibabaTradeCreateRefundParam {


    /**
     * @return mixed 主订单
     */
    public function getOrderId() {
        return $this->sdkStdResult["orderId"];
    }

    /**
     * 设置主订单
     * @param Long $orderId
     * 参数示例：<pre>  </pre>
     * 此参数必填
     */
    public function setOrderId( $orderId) {
        $this->sdkStdResult["orderId"] = $orderId;
    }


    /**
     * @return mixed 子订单
     */
    public function getOrderEntryIds() {
        return $this->sdkStdResult["orderEntryIds"];
    }

    /**
     * 设置子订单
     * @param array include @see Long[] $orderEntryIds
     * 参数示例：<pre> </pre>
     * 此参数必填
     */
    public function setOrderEntryIds( $orderEntryIds) {
        $this->sdkStdResult["orderEntryIds"] = $orderEntryIds;
    }


    /**
     * @return mixed 退款/退款退货。只有已收到货，才可以选择退款退货。
     */
    public function getDisputeRequest() {
        return $this->sdkStdResult["disputeRequest"];
    }

    /**
     * 设置退款/退款退货。只有已收到货，才可以选择退款退货。
     * @param String $disputeRequest
     * 参数示例：<pre>退款:"refund"; 退款退货:"returnRefund"</pre>
     * 此参数必填
     */
    public function setDisputeRequest( $disputeRequest) {
        $this->sdkStdResult["disputeRequest"] = $disputeRequest;
    }


    /**
     * @return mixed 退款金额（单位：分）。不大于实际付款金额；等待卖家发货时，必须为商品的实际付款金额。
     */
    public function getApplyPayment() {
        return $this->sdkStdResult["applyPayment"];
    }

    /**
     * 设置退款金额（单位：分）。不大于实际付款金额；等待卖家发货时，必须为商品的实际付款金额。
     * @param Long $applyPayment
     * 参数示例：<pre> </pre>
     * 此参数必填
     */
    public function setApplyPayment( $applyPayment) {
        $this->sdkStdResult["applyPayment"] = $applyPayment;
    }


    /**
     * @return mixed 退运费金额（单位：分）。
     */
    public function getApplyCarriage() {
        return $this->sdkStdResult["applyCarriage"];
    }

    /**
     * 设置退运费金额（单位：分）。
     * @param Long $applyCarriage
     * 参数示例：<pre> </pre>
     * 此参数必填
     */
    public function setApplyCarriage( $applyCarriage) {
        $this->sdkStdResult["applyCarriage"] = $applyCarriage;
    }


    /**
     * @return mixed 退款原因id（从API getRefundReasonList获取）
     */
    public function getApplyReasonId() {
        return $this->sdkStdResult["applyReasonId"];
    }

    /**
     * 设置退款原因id（从API getRefundReasonList获取）
     * @param Long $applyReasonId
     * 参数示例：<pre> </pre>
     * 此参数必填
     */
    public function setApplyReasonId( $applyReasonId) {
        $this->sdkStdResult["applyReasonId"] = $applyReasonId;
    }


    /**
     * @return mixed 退款申请理由，2-150字
     */
    public function getDescription() {
        return $this->sdkStdResult["description"];
    }

    /**
     * 设置退款申请理由，2-150字
     * @param String $description
     * 参数示例：<pre> </pre>
     * 此参数必填
     */
    public function setDescription( $description) {
        $this->sdkStdResult["description"] = $description;
    }


    /**
     * @return mixed 货物状态
     */
    public function getGoodsStatus() {
        return $this->sdkStdResult["goodsStatus"];
    }

    /**
     * 设置货物状态
     * @param String $goodsStatus
     * 参数示例：<pre>
     * 售中等待卖家发货:"refundWaitSellerSend";
     * 售中等待买家收货:"refundWaitBuyerReceive";
     * 售中已收货（未确认完成交易）:"refundBuyerReceived"
     * 售后未收货:"aftersaleBuyerNotReceived";
     * 售后已收到货:"aftersaleBuyerReceived"
     * </pre>
     * 此参数必填
     */
    public function setGoodsStatus( $goodsStatus) {
        $this->sdkStdResult["goodsStatus"] = $goodsStatus;
    }


    /**
     * @return mixed 凭证图片URLs。1-5张，必须使用API uploadRefundVoucher返回的“图片域名/相对路径”
     */
    public function getVouchers() {
        return $this->sdkStdResult["vouchers"];
    }

    /**
     * 设置凭证图片URLs。1-5张，必须使用API uploadRefundVoucher返回的“图片域名/相对路径”
     * @param array include @see String[] $vouchers
     * 参数示例：<pre> [https://cbu01.alicdn.com/img/ibank/2019/901/930/11848039109.jpg]</pre>
     * 此参数必填
     */
    public function setVouchers( $vouchers) {
        $this->sdkStdResult["vouchers"] = $vouchers;
    }


    /**
     * @return mixed 子订单退款数量。仅在售中买家已收货（退款退货）时，可指定退货数量；默认，全部退货。
     */
    public function getOrderEntryCountList() {
        return $this->sdkStdResult["orderEntryCountList"];
    }

    /**
     * 设置子订单退款数量。仅在售中买家已收货（退款退货）时，可指定退货数量；默认，全部退货。
     * @param AlibabaOceanOpenplatformBizTradeCommonModelOrderEntryCountModel $orderEntryCountList
     * 参数示例：<pre> [
     *  {
     *      "id":586683458996743215,
     *      "count":1
     *  }
     * ]</pre>
     * 此参数必填
     */
    public function setOrderEntryCountList(AlibabaOceanOpenplatformBizTradeCommonModelOrderEntryCountModel $orderEntryCountList) {
        $this->sdkStdResult["orderEntryCountList"] = $orderEntryCountList;
    }


    private $sdkStdResult=array();

    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }
}
