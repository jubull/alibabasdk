<?php

namespace com\alibaba\trade\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use com\alibaba\trade\param\AlibabaCreateOrderPreviewResultCargoModel;
use com\alibaba\trade\param\TradeModelExtensionList;


class AlibabaCreateOrderPreviewResultModel extends SDKDomain {


    private $discountFee;

    /**
     * @return mixed 计算完货品金额后再次进行的减免金额. 单位: 分
     */
    public function getDiscountFee() {
        return $this->discountFee;
    }

    /**
     * 设置计算完货品金额后再次进行的减免金额. 单位: 分
     * @param Long $discountFee
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setDiscountFee( $discountFee) {
        $this->discountFee = $discountFee;
    }


    private $tradeModeNameList;

    /**
     * @return mixed 当前交易可以支持的交易方式列表。某些场景的创建订单接口需要使用。
     */
    public function getTradeModeNameList() {
        return $this->tradeModeNameList;
    }

    /**
     * 设置当前交易可以支持的交易方式列表。某些场景的创建订单接口需要使用。
     * @param array include @see String[] $tradeModeNameList
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setTradeModeNameList( $tradeModeNameList) {
        $this->tradeModeNameList = $tradeModeNameList;
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
     * @param Boolean $status
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setStatus( $status) {
        $this->status = $status;
    }

    private $taoSampleSinglePromotion;

    /**
     * @return mixed 是否有淘货源单品优惠  false:有单品优惠   true：没有单品优惠
     */
    public function getTaoSampleSinglePromotion() {
        return $this->taoSampleSinglePromotion;
    }

    /**
     * 设置是否有淘货源单品优惠  false:有单品优惠   true：没有单品优惠
     * @param Boolean $taoSampleSinglePromotion
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setTaoSampleSinglePromotion( $taoSampleSinglePromotion) {
        $this->taoSampleSinglePromotion = $taoSampleSinglePromotion;
    }


    private $sumPayment;

    /**
     * @return mixed 订单总费用, 单位为分.
     */
    public function getSumPayment() {
        return $this->sumPayment;
    }

    /**
     * 设置订单总费用, 单位为分.
     * @param Long $sumPayment
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setSumPayment( $sumPayment) {
        $this->sumPayment = $sumPayment;
    }


    private $message;

    /**
     * @return mixed 返回信息
     */
    public function getMessage() {
        return $this->message;
    }

    /**
     * 设置返回信息
     * @param String $message
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setMessage( $message) {
        $this->message = $message;
    }


    private $sumCarriage;

    /**
     * @return mixed 总运费信息, 单位为分.
     */
    public function getSumCarriage() {
        return $this->sumCarriage;
    }

    /**
     * 设置总运费信息, 单位为分.
     * @param Long $sumCarriage
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setSumCarriage( $sumCarriage) {
        $this->sumCarriage = $sumCarriage;
    }


    private $resultCode;

    /**
     * @return mixed 返回码
     */
    public function getResultCode() {
        return $this->resultCode;
    }

    /**
     * 设置返回码
     * @param String $resultCode
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setResultCode( $resultCode) {
        $this->resultCode = $resultCode;
    }


    private $sumPaymentNoCarriage;

    /**
     * @return mixed 不包含运费的货品总费用, 单位为分.
     */
    public function getSumPaymentNoCarriage() {
        return $this->sumPaymentNoCarriage;
    }

    /**
     * 设置不包含运费的货品总费用, 单位为分.
     * @param Long $sumPaymentNoCarriage
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setSumPaymentNoCarriage( $sumPaymentNoCarriage) {
        $this->sumPaymentNoCarriage = $sumPaymentNoCarriage;
    }


    private $additionalFee;

    /**
     * @return mixed 附加费,单位，分
     */
    public function getAdditionalFee() {
        return $this->additionalFee;
    }

    /**
     * 设置附加费,单位，分
     * @param Long $additionalFee
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setAdditionalFee( $additionalFee) {
        $this->additionalFee = $additionalFee;
    }

    private $flowFlag;

    /**
     * @return mixed 订单下单流程
     */
    public function getFlowFlag() {
        return $this->flowFlag;
    }

    /**
     * 设置订单下单流程
     * @param String $flowFlag
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setFlowFlag( $flowFlag) {
        $this->flowFlag = $flowFlag;
    }


    private $cargoList;

    /**
     * @return mixed 规格信息
     */
    public function getCargoList() {
        return $this->cargoList;
    }

    /**
     * 设置规格信息
     * @param \com\alibaba\trade\param\AlibabaCreateOrderPreviewResultCargoModel $cargoList
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setCargoList(AlibabaCreateOrderPreviewResultCargoModel $cargoList) {
        $this->cargoList = $cargoList;
    }


    private $shopPromotionList;

    /**
     * @return mixed 可用店铺级别优惠列表
     */
    public function getShopPromotionList() {
        return $this->shopPromotionList;
    }

    /**
     * 设置可用店铺级别优惠列表
     * @param AlibabaTradePromotionModel $shopPromotionList
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setShopPromotionList(AlibabaTradePromotionModel $shopPromotionList) {
        $this->shopPromotionList = $shopPromotionList;
    }


    private $tradeModelList;

    /**
     * @return mixed 当前交易可以支持的交易方式列表。结果可以参照1688下单预览页面的交易方式。
     */
    public function getTradeModelList() {
        return $this->tradeModelList;
    }

    /**
     * 设置当前交易可以支持的交易方式列表。结果可以参照1688下单预览页面的交易方式。
     * @param \com\alibaba\trade\param\TradeModelExtensionList $tradeModelList
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setTradeModelList(TradeModelExtensionList $tradeModelList) {
        $this->tradeModelList = $tradeModelList;
    }


	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "discountFee", $this->stdResult )) {
		    $this->discountFee = $this->stdResult->{"discountFee"};
		}
		if (array_key_exists ( "tradeModeNameList", $this->stdResult )) {
		    $this->tradeModeNameList = $this->stdResult->{"tradeModeNameList"};
		}
		if (array_key_exists ( "status", $this->stdResult )) {
		    $this->status = $this->stdResult->{"status"};
		}
		if (array_key_exists ( "taoSampleSinglePromotion", $this->stdResult )) {
		    $this->taoSampleSinglePromotion = $this->stdResult->{"taoSampleSinglePromotion"};
		}
		if (array_key_exists ( "sumPayment", $this->stdResult )) {
		    $this->sumPayment = $this->stdResult->{"sumPayment"};
		}
		if (array_key_exists ( "message", $this->stdResult )) {
		    $this->message = $this->stdResult->{"message"};
		}
		if (array_key_exists ( "sumCarriage", $this->stdResult )) {
		    $this->sumCarriage = $this->stdResult->{"sumCarriage"};
		}
		if (array_key_exists ( "resultCode", $this->stdResult )) {
		    $this->resultCode = $this->stdResult->{"resultCode"};
		}
		if (array_key_exists ( "sumPaymentNoCarriage", $this->stdResult )) {
		    $this->sumPaymentNoCarriage = $this->stdResult->{"sumPaymentNoCarriage"};
		}
		if (array_key_exists ( "additionalFee", $this->stdResult )) {
		    $this->additionalFee = $this->stdResult->{"additionalFee"};
		}
		if (array_key_exists ( "flowFlag", $this->stdResult )) {
		    $this->flowFlag = $this->stdResult->{"flowFlag"};
		}
		if (array_key_exists ( "cargoList", $this->stdResult )) {
		    $cargoListResult=$this->stdResult->{"cargoList"};
		    $object = json_decode ( json_encode ( $cargoListResult ), true );
		    $this->cargoList = array ();
		    for($i = 0; $i < count ( $object ); $i ++) {
		        $arrayobject = new \ArrayObject($object [$i]);
		        $AlibabaCreateOrderPreviewResultCargoModelResult=new AlibabaCreateOrderPreviewResultCargoModel();
		        $AlibabaCreateOrderPreviewResultCargoModelResult->setArrayResult($arrayobject );
		        $this->cargoList [$i] = $AlibabaCreateOrderPreviewResultCargoModelResult;
		    }
		}

		if (array_key_exists ( "shopPromotionList", $this->stdResult )) {
		    $shopPromotionListResult=$this->stdResult->{"shopPromotionList"};
		    $object = json_decode ( json_encode ( $shopPromotionListResult ), true );
		    $this->shopPromotionList = array ();
		    for($i = 0; $i < count ( $object ); $i ++) {
		        $arrayobject = new \ArrayObject($object[$i]);
		        $AlibabaTradePromotionModelResult=new AlibabaTradePromotionModel();
		        $AlibabaTradePromotionModelResult->setArrayResult($arrayobject );
		        $this->shopPromotionList [$i] = $AlibabaTradePromotionModelResult;
		    }
		}

		if (array_key_exists ( "tradeModelList", $this->stdResult )) {
		    $tradeModelListResult=$this->stdResult->{"tradeModelList"};
		    $object = json_decode ( json_encode ( $tradeModelListResult ), true );
		    $this->tradeModelList = array ();
		    for($i = 0; $i < count ( $object ); $i ++) {
		        $arrayobject = new \ArrayObject($object[$i]);
		        $TradeModelExtensionListResult=new TradeModelExtensionList();
		        $TradeModelExtensionListResult->setArrayResult($arrayobject );
		        $this->tradeModelList [$i] = $TradeModelExtensionListResult;
		    }
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "discountFee", $this->arrayResult )) {
		    $this->discountFee = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "tradeModeNameList", $this->arrayResult )) {
		    $this->tradeModeNameList = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "status", $this->arrayResult )) {
		    $this->status = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "taoSampleSinglePromotion", $this->arrayResult )) {
		    $this->taoSampleSinglePromotion = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "sumPayment", $this->arrayResult )) {
		    $this->sumPayment = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "message", $this->arrayResult )) {
		    $this->message = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "sumCarriage", $this->arrayResult )) {
		    $this->sumCarriage = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "resultCode", $this->arrayResult )) {
		    $this->resultCode = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "sumPaymentNoCarriage", $this->arrayResult )) {
		    $this->sumPaymentNoCarriage = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "additionalFee", $this->arrayResult )) {
		    $this->additionalFee = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "flowFlag", $this->arrayResult )) {
		    $this->flowFlag = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "cargoList", $this->arrayResult )) {
		    $cargoListResult=$arrayResult['${paramType.paramName}'];
		    $this->cargoList = new AlibabaCreateOrderPreviewResultCargoModel();
		    $this->cargoList->setStdResult ( $cargoListResult);
		}

		if (array_key_exists ( "shopPromotionList", $this->arrayResult )) {
		    $shopPromotionListResult=$arrayResult['${paramType.paramName}'];
		    $this->shopPromotionList = new AlibabaTradePromotionModel();
		    $this->shopPromotionList->setStdResult ( $shopPromotionListResult);
		}

		if (array_key_exists ( "tradeModelList", $this->arrayResult )) {
		    $tradeModelListResult=$arrayResult['${paramType.paramName}'];
		    $this->tradeModelList = new TradeModelExtensionList();
		    $this->tradeModelList->setStdResult ( $tradeModelListResult);
		}
	}
}
