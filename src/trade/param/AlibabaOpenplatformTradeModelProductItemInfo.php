<?php

namespace com\alibaba\trade\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use com\alibaba\trade\param\AlibabaOpenplatformTradeModelGuaranteeTermsInfo;
use com\alibaba\trade\param\AlibabaTradeSkuItemDesc;


class AlibabaOpenplatformTradeModelProductItemInfo extends SDKDomain {


    private $cargoNumber;

    /**
     * @return mixed 指定单品货号，国际站无需关注。该字段不一定有值，仅仅在下单时才会把货号记录(如果卖家设置了单品货号的话)。别的订单类型的货号只能通过商品接口去获取。请注意：通过商品接口获取时的货号和下单时的货号可能不一致，因为下单完成后卖家可能修改商品信息，改变了货号。
     */
    public function getCargoNumber() {
        return $this->cargoNumber;
    }

    /**
     * 设置指定单品货号，国际站无需关注。该字段不一定有值，仅仅在下单时才会把货号记录(如果卖家设置了单品货号的话)。别的订单类型的货号只能通过商品接口去获取。请注意：通过商品接口获取时的货号和下单时的货号可能不一致，因为下单完成后卖家可能修改商品信息，改变了货号。
     * @param String $cargoNumber
     * 参数示例：<pre>指定单品货号，国际站无需关注。该字段不一定有值，仅仅在下单时才会把货号记录(如果卖家设置了单品货号的话)。别的订单类型的货号只能通过商品接口去获取。请注意：通过商品接口获取时的货号和下单时的货号可能不一致，因为下单完成后卖家可能修改商品信息，改变了货号。</pre>
     * 此参数必填
     */
    public function setCargoNumber( $cargoNumber) {
        $this->cargoNumber = $cargoNumber;
    }


    private $description;

    /**
     * @return mixed 描述,1688无此信息
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * 设置描述,1688无此信息
     * @param String $description
     * 参数示例：<pre>描述,1688无此信息</pre>
     * 此参数必填
     */
    public function setDescription( $description) {
        $this->description = $description;
    }


    private $itemAmount;

    /**
     * @return mixed 实付金额，单位为元
     */
    public function getItemAmount() {
        return $this->itemAmount;
    }

    /**
     * 设置实付金额，单位为元
     * @param BigDecimal $itemAmount
     * 参数示例：<pre>实付金额，单位为元</pre>
     * 此参数必填
     */
    public function setItemAmount( $itemAmount) {
        $this->itemAmount = $itemAmount;
    }


    private $name;

    /**
     * @return mixed 商品名称
     */
    public function getName() {
        return $this->name;
    }

    /**
     * 设置商品名称
     * @param String $name
     * 参数示例：<pre>商品名称</pre>
     * 此参数必填
     */
    public function setName( $name) {
        $this->name = $name;
    }


    private $price;

    /**
     * @return mixed 原始单价，以元为单位
     */
    public function getPrice() {
        return $this->price;
    }

    /**
     * 设置原始单价，以元为单位
     * @param BigDecimal $price
     * 参数示例：<pre>原始单价，以元为单位</pre>
     * 此参数必填
     */
    public function setPrice( $price) {
        $this->price = $price;
    }


    private $productID;

    /**
     * @return mixed 产品ID（非在线产品为空）
     */
    public function getProductID() {
        return $this->productID;
    }

    /**
     * 设置产品ID（非在线产品为空）
     * @param Long $productID
     * 参数示例：<pre>产品ID（非在线产品为空）</pre>
     * 此参数必填
     */
    public function setProductID( $productID) {
        $this->productID = $productID;
    }


    private $productImgUrl;

    /**
     * @return mixed 商品图片url
     */
    public function getProductImgUrl() {
        return $this->productImgUrl;
    }

    /**
     * 设置商品图片url
     * @param array include @see String[] $productImgUrl
     * 参数示例：<pre>商品图片url</pre>
     * 此参数必填
     */
    public function setProductImgUrl( $productImgUrl) {
        $this->productImgUrl = $productImgUrl;
    }


    private $productSnapshotUrl;

    /**
     * @return mixed 产品快照url，交易订单产生时会自动记录下当时的商品快照，供后续纠纷时参考
     */
    public function getProductSnapshotUrl() {
        return $this->productSnapshotUrl;
    }

    /**
     * 设置产品快照url，交易订单产生时会自动记录下当时的商品快照，供后续纠纷时参考
     * @param String $productSnapshotUrl
     * 参数示例：<pre>产品快照url，交易订单产生时会自动记录下当时的商品快照，供后续纠纷时参考</pre>
     * 此参数必填
     */
    public function setProductSnapshotUrl( $productSnapshotUrl) {
        $this->productSnapshotUrl = $productSnapshotUrl;
    }


    private $quantity;

    /**
     * @return mixed 以unit为单位的数量，例如多少个、多少件、多少箱、多少吨
     */
    public function getQuantity() {
        return $this->quantity;
    }

    /**
     * 设置以unit为单位的数量，例如多少个、多少件、多少箱、多少吨
     * @param BigDecimal $quantity
     * 参数示例：<pre>以unit为单位的数量，例如多少个、多少件、多少箱、多少吨</pre>
     * 此参数必填
     */
    public function setQuantity( $quantity) {
        $this->quantity = $quantity;
    }


    private $refund;

    /**
     * @return mixed 退款金额，单位为元
     */
    public function getRefund() {
        return $this->refund;
    }

    /**
     * 设置退款金额，单位为元
     * @param BigDecimal $refund
     * 参数示例：<pre>退款金额，单位为元</pre>
     * 此参数必填
     */
    public function setRefund( $refund) {
        $this->refund = $refund;
    }


    private $skuID;

    /**
     * @return mixed skuID
     */
    public function getSkuID() {
        return $this->skuID;
    }

    /**
     * 设置skuID
     * @param Long $skuID
     * 参数示例：<pre>skuID</pre>
     * 此参数必填
     */
    public function setSkuID( $skuID) {
        $this->skuID = $skuID;
    }


    private $sort;

    /**
     * @return mixed 排序字段，商品列表按此字段进行排序，从0开始，1688不提供
     */
    public function getSort() {
        return $this->sort;
    }

    /**
     * 设置排序字段，商品列表按此字段进行排序，从0开始，1688不提供
     * @param Integer $sort
     * 参数示例：<pre>排序字段，商品列表按此字段进行排序，从0开始，1688不提供</pre>
     * 此参数必填
     */
    public function setSort( $sort) {
        $this->sort = $sort;
    }


    private $status;

    /**
     * @return mixed 子订单状态
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * 设置子订单状态
     * @param String $status
     * 参数示例：<pre>子订单状态</pre>
     * 此参数必填
     */
    public function setStatus( $status) {
        $this->status = $status;
    }


    private $subItemID;

    /**
     * @return mixed 子订单号，或商品明细条目ID
     */
    public function getSubItemID() {
        return $this->subItemID;
    }

    /**
     * 设置子订单号，或商品明细条目ID
     * @param Long $subItemID
     * 参数示例：<pre>子订单号，或商品明细条目ID</pre>
     * 此参数必填
     */
    public function setSubItemID( $subItemID) {
        $this->subItemID = $subItemID;
    }


    private $type;

    /**
     * @return mixed 类型，国际站使用，供卖家标注商品所属类型
     */
    public function getType() {
        return $this->type;
    }

    /**
     * 设置类型，国际站使用，供卖家标注商品所属类型
     * @param String $type
     * 参数示例：<pre>类型，国际站使用，供卖家标注商品所属类型</pre>
     * 此参数必填
     */
    public function setType( $type) {
        $this->type = $type;
    }


    private $unit;

    /**
     * @return mixed 售卖单位	例如：个、件、箱、吨
     */
    public function getUnit() {
        return $this->unit;
    }

    /**
     * 设置售卖单位	例如：个、件、箱、吨
     * @param String $unit
     * 参数示例：<pre>售卖单位	例如：个、件、箱、吨</pre>
     * 此参数必填
     */
    public function setUnit( $unit) {
        $this->unit = $unit;
    }


    private $weight;

    /**
     * @return mixed 重量	按重量单位计算的重量，例如：100
     */
    public function getWeight() {
        return $this->weight;
    }

    /**
     * 设置重量	按重量单位计算的重量，例如：100
     * @param String $weight
     * 参数示例：<pre>重量	按重量单位计算的重量，例如：100</pre>
     * 此参数必填
     */
    public function setWeight( $weight) {
        $this->weight = $weight;
    }


    private $weightUnit;

    /**
     * @return mixed 重量单位	例如：g，kg，t
     */
    public function getWeightUnit() {
        return $this->weightUnit;
    }

    /**
     * 设置重量单位	例如：g，kg，t
     * @param String $weightUnit
     * 参数示例：<pre>重量单位	例如：g，kg，t</pre>
     * 此参数必填
     */
    public function setWeightUnit( $weightUnit) {
        $this->weightUnit = $weightUnit;
    }


    private $guaranteesTerms;

    /**
     * @return mixed 保障条款，此字段仅针对1688
     */
    public function getGuaranteesTerms() {
        return $this->guaranteesTerms;
    }

    /**
     * 设置保障条款，此字段仅针对1688
     * @param \com\alibaba\trade\param\AlibabaOpenplatformTradeModelGuaranteeTermsInfo $guaranteesTerms
     * 参数示例：<pre>保障条款，此字段仅针对1688</pre>
     * 此参数必填
     */
    public function setGuaranteesTerms(AlibabaOpenplatformTradeModelGuaranteeTermsInfo $guaranteesTerms) {
        $this->guaranteesTerms = $guaranteesTerms;
    }


    private $productCargoNumber;

    /**
     * @return mixed 指定商品货号，该字段不一定有值，在下单时才会把货号记录。别的订单类型的货号只能通过商品接口去获取。请注意：通过商品接口获取时的货号和下单时的货号可能不一致，因为下单完成后卖家可能修改商品信息，改变了货号。该字段和cargoNUmber的区别是：该字段是定义在商品级别上的货号，cargoNUmber是定义在单品级别的货号
     */
    public function getProductCargoNumber() {
        return $this->productCargoNumber;
    }

    /**
     * 设置指定商品货号，该字段不一定有值，在下单时才会把货号记录。别的订单类型的货号只能通过商品接口去获取。请注意：通过商品接口获取时的货号和下单时的货号可能不一致，因为下单完成后卖家可能修改商品信息，改变了货号。该字段和cargoNUmber的区别是：该字段是定义在商品级别上的货号，cargoNUmber是定义在单品级别的货号
     * @param String $productCargoNumber
     * 参数示例：<pre>指定商品货号，该字段不一定有值，在下单时才会把货号记录。别的订单类型的货号只能通过商品接口去获取。请注意：通过商品接口获取时的货号和下单时的货号可能不一致，因为下单完成后卖家可能修改商品信息，改变了货号。该字段和cargoNUmber的区别是：该字段是定义在商品级别上的货号，cargoNUmber是定义在单品级别的货号</pre>
     * 此参数必填
     */
    public function setProductCargoNumber( $productCargoNumber) {
        $this->productCargoNumber = $productCargoNumber;
    }


    private $skuInfos;

    /**
     * @return mixed []
     */
    public function getSkuInfos() {
        return $this->skuInfos;
    }

    /**
     * 设置[]
     * @param \com\alibaba\trade\param\AlibabaTradeSkuItemDesc $skuInfos
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setSkuInfos(AlibabaTradeSkuItemDesc $skuInfos) {
        $this->skuInfos = $skuInfos;
    }


    private $entryDiscount;

    /**
     * @return mixed 订单明细涨价或降价的金额
     */
    public function getEntryDiscount() {
        return $this->entryDiscount;
    }

    /**
     * 设置订单明细涨价或降价的金额
     * @param Long $entryDiscount
     * 参数示例：<pre>订单明细涨价或降价的金额</pre>
     * 此参数必填
     */
    public function setEntryDiscount( $entryDiscount) {
        $this->entryDiscount = $entryDiscount;
    }


    private $specId;

    /**
     * @return mixed 订单销售属性ID
     */
    public function getSpecId() {
        return $this->specId;
    }

    /**
     * 设置订单销售属性ID
     * @param String $specId
     * 参数示例：<pre>订单销售属性ID</pre>
     * 此参数必填
     */
    public function setSpecId( $specId) {
        $this->specId = $specId;
    }


    private $quantityFactor;

    /**
     * @return mixed 以unit为单位的quantity精度系数，值为10的幂次，例如:quantityFactor=1000,unit=吨，那么quantity的最小精度为0.001吨
     */
    public function getQuantityFactor() {
        return $this->quantityFactor;
    }

    /**
     * 设置以unit为单位的quantity精度系数，值为10的幂次，例如:quantityFactor=1000,unit=吨，那么quantity的最小精度为0.001吨
     * @param BigDecimal $quantityFactor
     * 参数示例：<pre>以unit为单位的quantity精度系数，值为10的幂次，例如:quantityFactor=1000,unit=吨，那么quantity的最小精度为0.001吨</pre>
     * 此参数必填
     */
    public function setQuantityFactor( $quantityFactor) {
        $this->quantityFactor = $quantityFactor;
    }


    private $statusStr;

    /**
     * @return mixed 子订单状态描述
     */
    public function getStatusStr() {
        return $this->statusStr;
    }

    /**
     * 设置子订单状态描述
     * @param String $statusStr
     * 参数示例：<pre>子订单状态描述</pre>
     * 此参数必填
     */
    public function setStatusStr( $statusStr) {
        $this->statusStr = $statusStr;
    }


    private $refundStatus;

    /**
     * WAIT_SELLER_AGREE 等待卖家同意
     * REFUND_SUCCESS 退款成功
     * REFUND_CLOSED 退款关闭
     * WAIT_BUYER_MODIFY 待买家修改
     * WAIT_BUYER_SEND 等待买家退货
     * WAIT_SELLER_RECEIVE 等待卖家确认收货
     * @return mixed
     */
    public function getRefundStatus() {
        return $this->refundStatus;
    }

    /**
     * 设置WAIT_SELLER_AGREE 等待卖家同意
REFUND_SUCCESS 退款成功
REFUND_CLOSED 退款关闭
WAIT_BUYER_MODIFY 待买家修改
WAIT_BUYER_SEND 等待买家退货
WAIT_SELLER_RECEIVE 等待卖家确认收货
     * @param String $refundStatus
     * 参数示例：<pre>WAIT_SELLER_AGREE 等待卖家同意
REFUND_SUCCESS 退款成功
REFUND_CLOSED 退款关闭
WAIT_BUYER_MODIFY 待买家修改
WAIT_BUYER_SEND 等待买家退货
WAIT_SELLER_RECEIVE 等待卖家确认收货</pre>
     * 此参数必填     */
    public function setRefundStatus( $refundStatus) {
        $this->refundStatus = $refundStatus;
    }


    private $closeReason;

    /**
     * @return mixed 关闭原因
     */
    public function getCloseReason() {
        return $this->closeReason;
    }

    /**
     * 设置关闭原因
     * @param String $closeReason
     * 参数示例：<pre>关闭原因</pre>
     * 此参数必填
     */
    public function setCloseReason( $closeReason) {
        $this->closeReason = $closeReason;
    }


    private $logisticsStatus;

    /**
     * @return mixed
     * 1 未发货
     * 2 已发货
     * 3 已收货
     * 4 已经退货
     * 5 部分发货
     * 8 还未创建物流订单
     */
        public function getLogisticsStatus() {
        return $this->logisticsStatus;
    }

    /**
     * 设置1 未发货
     * 2 已发货
     * 3 已收货
     * 4 已经退货
     * 5 部分发货
     * 8 还未创建物流订单
     * @param Integer $logisticsStatus
     * 参数示例：<pre>1 未发货
     * 2 已发货
     * 3 已收货
     * 4 已经退货
     * 5 部分发货
     * 8 还未创建物流订单</pre>
     * 此参数必填     */
    public function setLogisticsStatus( $logisticsStatus) {
        $this->logisticsStatus = $logisticsStatus;
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
     * 参数示例：<pre>创建时间</pre>
     * 此参数必填
     */
    public function setGmtCreate( $gmtCreate) {
        $this->gmtCreate = $gmtCreate;
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
     * 参数示例：<pre>修改时间</pre>
     * 此参数必填
     */
    public function setGmtModified( $gmtModified) {
        $this->gmtModified = $gmtModified;
    }


    private $gmtCompleted;

    /**
     * @return mixed 明细完成时间
     */
    public function getGmtCompleted() {
        return $this->gmtCompleted;
    }

    /**
     * 设置明细完成时间
     * @param Date $gmtCompleted
     * 参数示例：<pre>明细完成时间</pre>
     * 此参数必填
     */
    public function setGmtCompleted( $gmtCompleted) {
        $this->gmtCompleted = $gmtCompleted;
    }


    private $gmtPayExpireTime;

    /**
     * @return mixed 库存超时时间，格式为“yyyy-MM-dd HH:mm:ss”
     */
    public function getGmtPayExpireTime() {
        return $this->gmtPayExpireTime;
    }

    /**
     * 设置库存超时时间，格式为“yyyy-MM-dd HH:mm:ss”
     * @param String $gmtPayExpireTime
     * 参数示例：<pre>库存超时时间，格式为“yyyy-MM-dd HH:mm:ss”</pre>
     * 此参数必填
     */
    public function setGmtPayExpireTime( $gmtPayExpireTime) {
        $this->gmtPayExpireTime = $gmtPayExpireTime;
    }


    private $refundId;

    /**
     * @return mixed 售中退款单号
     */
    public function getRefundId() {
        return $this->refundId;
    }

    /**
     * 设置售中退款单号
     * @param String $refundId
     * 参数示例：<pre>售中退款单号</pre>
     * 此参数必填     */
    public function setRefundId( $refundId) {
        $this->refundId = $refundId;
    }


    private $subItemIDString;

    /**
     * @return mixed 子订单号，或商品明细条目ID(字符串类型，由于Long类型的ID可能在JS和PHP中处理有问题，所以可以用字符串类型来处理)
     */
    public function getSubItemIDString() {
        return $this->subItemIDString;
    }

    /**
     * 设置子订单号，或商品明细条目ID(字符串类型，由于Long类型的ID可能在JS和PHP中处理有问题，所以可以用字符串类型来处理)
     * @param String $subItemIDString
     * 参数示例：<pre>子订单号，或商品明细条目ID(字符串类型，由于Long类型的ID可能在JS和PHP中处理有问题，所以可以用字符串类型来处理)</pre>
     * 此参数必填
     */
    public function setSubItemIDString( $subItemIDString) {
        $this->subItemIDString = $subItemIDString;
    }


    private $refundIdForAs;

    /**
     * @return mixed 售后退款单号
     */
    public function getRefundIdForAs() {
        return $this->refundIdForAs;
    }

    /**
     * 设置售后退款单号
     * @param String $refundIdForAs
     * 参数示例：<pre>售后退款单号</pre>
     * 此参数必填
     */
    public function setRefundIdForAs( $refundIdForAs) {
        $this->refundIdForAs = $refundIdForAs;
    }


    private $erpMaterialCode;

    /**
     * @return mixed ERP物料编码
     */
    public function getErpMaterialCode() {
        return $this->erpMaterialCode;
    }

    /**
     * 设置ERP物料编码
     * @param String $erpMaterialCode
     * 参数示例：<pre>MCZ01</pre>
     * 此参数必填
     */
    public function setErpMaterialCode( $erpMaterialCode) {
        $this->erpMaterialCode = $erpMaterialCode;
    }


    private $itemDiscountFee;

    /**
     * @return mixed 优惠金额
     */
    public function getItemDiscountFee() {
        return $this->itemDiscountFee;
    }

    /**
     * 设置优惠金额
     * @param String $itemDiscountFee
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setItemDiscountFee( $itemDiscountFee) {
        $this->itemDiscountFee = $itemDiscountFee;
    }


    private $cantSendReason;

    /**
     * @return mixed 不可发货的原因
     */
    public function getCantSendReason() {
        return $this->cantSendReason;
    }

    /**
     * 设置不可发货的原因
     * @param String $cantSendReason
     * 参数示例：<pre>未成团，不可发货</pre>
     * 此参数必填
     */
    public function setCantSendReason( $cantSendReason) {
        $this->cantSendReason = $cantSendReason;
    }


    private $canSendGoods;

    /**
     * @return mixed 是否可发货
     */
    public function getCanSendGoods() {
        return $this->canSendGoods;
    }

    /**
     * 设置是否可发货
     * @param Boolean $canSendGoods
     * 参数示例：<pre>true</pre>
     * 此参数必填
     */
    public function setCanSendGoods( $canSendGoods) {
        $this->canSendGoods = $canSendGoods;
    }


	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "cargoNumber", $this->stdResult )) {
		    $this->cargoNumber = $this->stdResult->{"cargoNumber"};
		}
		if (array_key_exists ( "description", $this->stdResult )) {
		    $this->description = $this->stdResult->{"description"};
		}
		if (array_key_exists ( "itemAmount", $this->stdResult )) {
		    $this->itemAmount = $this->stdResult->{"itemAmount"};
		}
		if (array_key_exists ( "name", $this->stdResult )) {
		    $this->name = $this->stdResult->{"name"};
		}
		if (array_key_exists ( "price", $this->stdResult )) {
		    $this->price = $this->stdResult->{"price"};
		}
		if (array_key_exists ( "productID", $this->stdResult )) {
		    $this->productID = $this->stdResult->{"productID"};
		}
		if (array_key_exists ( "productImgUrl", $this->stdResult )) {
		    $this->productImgUrl = $this->stdResult->{"productImgUrl"};
		}
		if (array_key_exists ( "productSnapshotUrl", $this->stdResult )) {
		    $this->productSnapshotUrl = $this->stdResult->{"productSnapshotUrl"};
		}
		if (array_key_exists ( "quantity", $this->stdResult )) {
		    $this->quantity = $this->stdResult->{"quantity"};
		}
		if (array_key_exists ( "refund", $this->stdResult )) {
		    $this->refund = $this->stdResult->{"refund"};
		}
		if (array_key_exists ( "skuID", $this->stdResult )) {
		    $this->skuID = $this->stdResult->{"skuID"};
		}
		if (array_key_exists ( "sort", $this->stdResult )) {
		    $this->sort = $this->stdResult->{"sort"};
		}
		if (array_key_exists ( "status", $this->stdResult )) {
		    $this->status = $this->stdResult->{"status"};
		}
		if (array_key_exists ( "subItemID", $this->stdResult )) {
		    $this->subItemID = $this->stdResult->{"subItemID"};
		}
		if (array_key_exists ( "type", $this->stdResult )) {
		    $this->type = $this->stdResult->{"type"};
		}
		if (array_key_exists ( "unit", $this->stdResult )) {
		    $this->unit = $this->stdResult->{"unit"};
		}
		if (array_key_exists ( "weight", $this->stdResult )) {
		    $this->weight = $this->stdResult->{"weight"};
		}
		if (array_key_exists ( "weightUnit", $this->stdResult )) {
		    $this->weightUnit = $this->stdResult->{"weightUnit"};
		}
		if (array_key_exists ( "guaranteesTerms", $this->stdResult )) {
		    $guaranteesTermsResult=$this->stdResult->{"guaranteesTerms"};
		    $object = json_decode ( json_encode ( $guaranteesTermsResult ), true );
		    $this->guaranteesTerms = array ();
		    for($i = 0; $i < count ( $object ); $i ++) {
		        $arrayobject = new \ArrayObject($object[$i]);
		        $AlibabaOpenplatformTradeModelGuaranteeTermsInfoResult=new AlibabaOpenplatformTradeModelGuaranteeTermsInfo();
		        $AlibabaOpenplatformTradeModelGuaranteeTermsInfoResult->setArrayResult($arrayobject );
		        $this->guaranteesTerms [$i] = $AlibabaOpenplatformTradeModelGuaranteeTermsInfoResult;
		    }
		}
		if (array_key_exists ( "productCargoNumber", $this->stdResult )) {
		    $this->productCargoNumber = $this->stdResult->{"productCargoNumber"};
		}
		if (array_key_exists ( "skuInfos", $this->stdResult )) {
		    $skuInfosResult=$this->stdResult->{"skuInfos"};
		    $object = json_decode ( json_encode ( $skuInfosResult ), true );
		    $this->skuInfos = array ();
		    for($i = 0; $i < count ( $object ); $i ++) {
		        $arrayobject = new ArrayObject ( $object [$i] );
		        $AlibabaTradeSkuItemDescResult=new AlibabaTradeSkuItemDesc();
		        $AlibabaTradeSkuItemDescResult->setArrayResult($arrayobject );
		        $this->skuInfos [$i] = $AlibabaTradeSkuItemDescResult;
		    }
		}
		if (array_key_exists ( "entryDiscount", $this->stdResult )) {
		    $this->entryDiscount = $this->stdResult->{"entryDiscount"};
		}
		if (array_key_exists ( "specId", $this->stdResult )) {
		    $this->specId = $this->stdResult->{"specId"};
		}
		if (array_key_exists ( "quantityFactor", $this->stdResult )) {
		    $this->quantityFactor = $this->stdResult->{"quantityFactor"};
		}
		if (array_key_exists ( "statusStr", $this->stdResult )) {
		    $this->statusStr = $this->stdResult->{"statusStr"};
		}
		if (array_key_exists ( "refundStatus", $this->stdResult )) {
		    $this->refundStatus = $this->stdResult->{"refundStatus"};
		}
		if (array_key_exists ( "closeReason", $this->stdResult )) {
		    $this->closeReason = $this->stdResult->{"closeReason"};
		}
		if (array_key_exists ( "logisticsStatus", $this->stdResult )) {
		    $this->logisticsStatus = $this->stdResult->{"logisticsStatus"};
		}
		if (array_key_exists ( "gmtCreate", $this->stdResult )) {
		    $this->gmtCreate = $this->stdResult->{"gmtCreate"};
		}
		if (array_key_exists ( "gmtModified", $this->stdResult )) {
		    $this->gmtModified = $this->stdResult->{"gmtModified"};
		}
		if (array_key_exists ( "gmtCompleted", $this->stdResult )) {
		    $this->gmtCompleted = $this->stdResult->{"gmtCompleted"};
		}
		if (array_key_exists ( "gmtPayExpireTime", $this->stdResult )) {
		    $this->gmtPayExpireTime = $this->stdResult->{"gmtPayExpireTime"};
		}
		if (array_key_exists ( "refundId", $this->stdResult )) {
		    $this->refundId = $this->stdResult->{"refundId"};
		}
		if (array_key_exists ( "subItemIDString", $this->stdResult )) {
		    $this->subItemIDString = $this->stdResult->{"subItemIDString"};
		}
		if (array_key_exists ( "refundIdForAs", $this->stdResult )) {
		    $this->refundIdForAs = $this->stdResult->{"refundIdForAs"};
		}
		if (array_key_exists ( "erpMaterialCode", $this->stdResult )) {
		    $this->erpMaterialCode = $this->stdResult->{"erpMaterialCode"};
		}
		if (array_key_exists ( "itemDiscountFee", $this->stdResult )) {
		    $this->itemDiscountFee = $this->stdResult->{"itemDiscountFee"};
		}
		if (array_key_exists ( "cantSendReason", $this->stdResult )) {
		    $this->cantSendReason = $this->stdResult->{"cantSendReason"};
		}
		if (array_key_exists ( "canSendGoods", $this->stdResult )) {
		    $this->canSendGoods = $this->stdResult->{"canSendGoods"};
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "cargoNumber", $this->arrayResult )) {
		    $this->cargoNumber = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "description", $this->arrayResult )) {
		    $this->description = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "itemAmount", $this->arrayResult )) {
		    $this->itemAmount = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "name", $this->arrayResult )) {
		    $this->name = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "price", $this->arrayResult )) {
		    $this->price = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "productID", $this->arrayResult )) {
		    $this->productID = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "productImgUrl", $this->arrayResult )) {
		    $this->productImgUrl = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "productSnapshotUrl", $this->arrayResult )) {
		    $this->productSnapshotUrl = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "quantity", $this->arrayResult )) {
		    $this->quantity = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "refund", $this->arrayResult )) {
		    $this->refund = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "skuID", $this->arrayResult )) {
		    $this->skuID = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "sort", $this->arrayResult )) {
		    $this->sort = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "status", $this->arrayResult )) {
		    $this->status = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "subItemID", $this->arrayResult )) {
		    $this->subItemID = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "type", $this->arrayResult )) {
		    $this->type = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "unit", $this->arrayResult )) {
		    $this->unit = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "weight", $this->arrayResult )) {
		    $this->weight = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "weightUnit", $this->arrayResult )) {
		    $this->weightUnit = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "guaranteesTerms", $this->arrayResult )) {
    		$guaranteesTermsResult=$arrayResult['${paramType.paramName}'];
    		$this->guaranteesTerms = new AlibabaOpenplatformTradeModelGuaranteeTermsInfo();
    		$this->guaranteesTerms->setStdResult ( $guaranteesTermsResult);
		}
		if (array_key_exists ( "productCargoNumber", $this->arrayResult )) {
		    $this->productCargoNumber = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "skuInfos", $this->arrayResult )) {
    		$skuInfosResult=$arrayResult['${paramType.paramName}'];
    		$this->skuInfos = new AlibabaTradeSkuItemDesc();
    		$this->skuInfos->setStdResult ( $skuInfosResult);
		}
		if (array_key_exists ( "entryDiscount", $this->arrayResult )) {
		    $this->entryDiscount = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "specId", $this->arrayResult )) {
		    $this->specId = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "quantityFactor", $this->arrayResult )) {
		    $this->quantityFactor = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "statusStr", $this->arrayResult )) {
		    $this->statusStr = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "refundStatus", $this->arrayResult )) {
		    $this->refundStatus = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "closeReason", $this->arrayResult )) {
		    $this->closeReason = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "logisticsStatus", $this->arrayResult )) {
		    $this->logisticsStatus = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "gmtCreate", $this->arrayResult )) {
		    $this->gmtCreate = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "gmtModified", $this->arrayResult )) {
		    $this->gmtModified = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "gmtCompleted", $this->arrayResult )) {
		    $this->gmtCompleted = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "gmtPayExpireTime", $this->arrayResult )) {
		    $this->gmtPayExpireTime = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "refundId", $this->arrayResult )) {
		    $this->refundId = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "subItemIDString", $this->arrayResult )) {
		    $this->subItemIDString = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "refundIdForAs", $this->arrayResult )) {
		    $this->refundIdForAs = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "erpMaterialCode", $this->arrayResult )) {
		    $this->erpMaterialCode = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "itemDiscountFee", $this->arrayResult )) {
		    $this->itemDiscountFee = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "cantSendReason", $this->arrayResult )) {
		    $this->cantSendReason = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "canSendGoods", $this->arrayResult )) {
		    $this->canSendGoods = $arrayResult['${paramType.paramName}'];
		}
	}
}
