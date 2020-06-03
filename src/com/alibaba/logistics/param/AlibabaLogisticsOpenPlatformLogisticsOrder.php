<?php

namespace com\alibaba\logistics\param;

use com\alibaba\openapi\client\entity\SDKDomain;


class AlibabaLogisticsOpenPlatformLogisticsOrder extends SDKDomain {


    private $logisticsId;

    /**
     * @return mixed 物流id
     */
    public function getLogisticsId() {
        return $this->logisticsId;
    }

    /**
     * 设置物流信息ID
     * @param String $logisticsId
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setLogisticsId( $logisticsId) {
        $this->logisticsId = $logisticsId;
    }


    private $logisticsBillNo;

    /**
     * @return mixed 物流单号，运单号
     */
    public function getLogisticsBillNo() {
        return $this->logisticsBillNo;
    }

    /**
     * 设置物流单号，运单号
     * @param String $logisticsBillNo
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setLogisticsBillNo( $logisticsBillNo) {
        $this->logisticsBillNo = $logisticsBillNo;
    }


    private $orderEntryIds;

    /**
     * @return mixed 订单号列表，无子订单的等于主订单编号，否则为对应子订单列表
     */
    public function getOrderEntryIds() {
        return $this->orderEntryIds;
    }

    /**
     * 设置订单号列表，无子订单的等于主订单编号，否则为对应子订单列表
     * @param String $orderEntryIds
     * 参数示例：<pre>129232515787615400,129232515788615400,129232515789615400,129232515790615400</pre>
     * 此参数必填
     */
    public function setOrderEntryIds( $orderEntryIds) {
        $this->orderEntryIds = $orderEntryIds;
    }


    private $status;

    /**
     * @return mixed 物流状态。WAITACCEPT:未受理;CANCEL:已撤销;ACCEPT:已受理;TRANSPORT:运输中;NOGET:揽件失败;SIGN:已签收;UNSIGN:签收异常
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * 设置物流状态。WAITACCEPT:未受理;CANCEL:已撤销;ACCEPT:已受理;TRANSPORT:运输中;NOGET:揽件失败;SIGN:已签收;UNSIGN:签收异常
     * @param String $status
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setStatus( $status) {
        $this->status = $status;
    }


    private $logisticsCompanyId;

    /**
     * @return mixed 物流公司ID
     */
    public function getLogisticsCompanyId() {
        return $this->logisticsCompanyId;
    }

    /**
     * 设置物流公司ID
     * @param String $logisticsCompanyId
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setLogisticsCompanyId( $logisticsCompanyId) {
        $this->logisticsCompanyId = $logisticsCompanyId;
    }


    private $logisticsCompanyName;

    /**
     * @return mixed 物流公司编码
     */
    public function getLogisticsCompanyName() {
        return $this->logisticsCompanyName;
    }

    /**
     * 设置物流公司编码
     * @param String $logisticsCompanyName
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setLogisticsCompanyName( $logisticsCompanyName) {
        $this->logisticsCompanyName = $logisticsCompanyName;
    }


    private $remarks;

    /**
     * @return mixed 备注
     */
    public function getRemarks() {
        return $this->remarks;
    }

    /**
     * 设置备注
     * @param String $remarks
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setRemarks( $remarks) {
        $this->remarks = $remarks;
    }


    private $serviceFeature;

    /**
     * @return mixed
     */
    public function getServiceFeature() {
        return $this->serviceFeature;
    }

    /**
     * 设置
     * @param String $serviceFeature
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setServiceFeature( $serviceFeature) {
        $this->serviceFeature = $serviceFeature;
    }


    private $gmtSystemSend;

    /**
     * @return mixed
     */
    public function getGmtSystemSend() {
        return $this->gmtSystemSend;
    }

    /**
     * 设置
     * @param String $gmtSystemSend
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setGmtSystemSend( $gmtSystemSend) {
        $this->gmtSystemSend = $gmtSystemSend;
    }


    private $sendGoods;

    /**
     * @return mixed 商品信息
     */
    public function getSendGoods() {
        return $this->sendGoods;
    }

    /**
     * 设置商品信息
     * @param array include @see AlibabaLogisticsOpenPlatformLogisticsSendGood[] $sendGoods
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setSendGoods(AlibabaLogisticsOpenPlatformLogisticsSendGood $sendGoods) {
        $this->sendGoods = $sendGoods;
    }


    private $receiver;

    /**
     * @return mixed 收件人信息
     */
    public function getReceiver() {
        return $this->receiver;
    }

    /**
     * 设置收件人信息
     * @param AlibabaLogisticsOpenPlatformLogisticsReceiver $receiver
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setReceiver(AlibabaLogisticsOpenPlatformLogisticsReceiver $receiver) {
        $this->receiver = $receiver;
    }


    private $sender;

    /**
     * @return mixed 发件人信息
     */
    public function getSender() {
        return $this->sender;
    }

    /**
     * 设置发件人信息
     * @param AlibabaLogisticsOpenPlatformLogisticsSender $sender
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setSender(AlibabaLogisticsOpenPlatformLogisticsSender $sender) {
        $this->sender = $sender;
    }


	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "logisticsId", $this->stdResult )) {
		    $this->logisticsId = $this->stdResult->{"logisticsId"};
		}

		if (array_key_exists ( "logisticsBillNo", $this->stdResult )) {
		    $this->logisticsBillNo = $this->stdResult->{"logisticsBillNo"};
		}

		if (array_key_exists ( "orderEntryIds", $this->stdResult )) {
		    $this->orderEntryIds = $this->stdResult->{"orderEntryIds"};
		}

		if (array_key_exists ( "status", $this->stdResult )) {
		    $this->status = $this->stdResult->{"status"};
		}

		if (array_key_exists ( "logisticsCompanyId", $this->stdResult )) {
		    $this->logisticsCompanyId = $this->stdResult->{"logisticsCompanyId"};
		}

		if (array_key_exists ( "logisticsCompanyName", $this->stdResult )) {
		    $this->logisticsCompanyName = $this->stdResult->{"logisticsCompanyName"};
		}

		if (array_key_exists ( "remarks", $this->stdResult )) {
		    $this->remarks = $this->stdResult->{"remarks"};
		}

		if (array_key_exists ( "serviceFeature", $this->stdResult )) {
		    $this->serviceFeature = $this->stdResult->{"serviceFeature"};
		}

		if (array_key_exists ( "gmtSystemSend", $this->stdResult )) {
		    $this->gmtSystemSend = $this->stdResult->{"gmtSystemSend"};
		}

		if (array_key_exists ( "sendGoods", $this->stdResult )) {
		    $sendGoodsResult=$this->stdResult->{"sendGoods"};
		    $object = json_decode ( json_encode ( $sendGoodsResult ), true );
		    $this->sendGoods = array ();
		    for($i = 0; $i < count ( $object ); $i ++) {
		        $arrayobject = new \ArrayObject($object [$i]);
		        $AlibabaLogisticsOpenPlatformLogisticsSendGoodResult=new AlibabaLogisticsOpenPlatformLogisticsSendGood();
		        $AlibabaLogisticsOpenPlatformLogisticsSendGoodResult->setArrayResult($arrayobject );
		        $this->sendGoods [$i] = $AlibabaLogisticsOpenPlatformLogisticsSendGoodResult;
		    }
		}

		if (array_key_exists ( "receiver", $this->stdResult )) {
		    $receiverResult=$this->stdResult->{"receiver"};
		    $this->receiver = new AlibabaLogisticsOpenPlatformLogisticsReceiver();
		    $this->receiver->setStdResult ( $receiverResult);
		}

		if (array_key_exists ( "sender", $this->stdResult )) {
		    $senderResult=$this->stdResult->{"sender"};
		    $this->sender = new AlibabaLogisticsOpenPlatformLogisticsSender();
		    $this->sender->setStdResult ( $senderResult);
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;

		if (array_key_exists ( "logisticsId", $this->arrayResult )) {
		    $this->logisticsId = $arrayResult['${paramType.paramName}'];
		}

		if (array_key_exists ( "logisticsBillNo", $this->arrayResult )) {
		    $this->logisticsBillNo = $arrayResult['${paramType.paramName}'];
		}

		if (array_key_exists ( "orderEntryIds", $this->arrayResult )) {
		    $this->orderEntryIds = $arrayResult['${paramType.paramName}'];
		}

		if (array_key_exists ( "status", $this->arrayResult )) {
		    $this->status = $arrayResult['${paramType.paramName}'];
		}

		if (array_key_exists ( "logisticsCompanyId", $this->arrayResult )) {
		    $this->logisticsCompanyId = $arrayResult['${paramType.paramName}'];
		}

		if (array_key_exists ( "logisticsCompanyName", $this->arrayResult )) {
		    $this->logisticsCompanyName = $arrayResult['${paramType.paramName}'];
		}

		if (array_key_exists ( "remarks", $this->arrayResult )) {
		    $this->remarks = $arrayResult['${paramType.paramName}'];
		}

		if (array_key_exists ( "serviceFeature", $this->arrayResult )) {
		    $this->serviceFeature = $arrayResult['${paramType.paramName}'];
		}

		if (array_key_exists ( "gmtSystemSend", $this->arrayResult )) {
		    $this->gmtSystemSend = $arrayResult['${paramType.paramName}'];
		}

		if (array_key_exists ( "sendGoods", $this->arrayResult )) {
    		$sendGoodsResult=$arrayResult['${paramType.paramName}'];
    		$this->sendGoods = new AlibabaLogisticsOpenPlatformLogisticsSendGood();
    		$this->sendGoods->setStdResult ( $sendGoodsResult);
		}

		if (array_key_exists ( "receiver", $this->arrayResult )) {
    		$receiverResult=$arrayResult['${paramType.paramName}'];
    		$this->receiver = new AlibabaLogisticsOpenPlatformLogisticsReceiver();
    		$this->receiver->setStdResult ( $receiverResult);
		}

		if (array_key_exists ( "sender", $this->arrayResult )) {
    		$senderResult=$arrayResult['${paramType.paramName}'];
    		$this->sender = new AlibabaLogisticsOpenPlatformLogisticsSender();
    		$this->sender->setStdResult ( $senderResult);
		}
	}
}
