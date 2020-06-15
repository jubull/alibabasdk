<?php

namespace com\alibaba\trade\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use com\alibaba\trade\param\AlibabaCreateOrderPreviewResultModel;


class AlibabaCreateOrderPreviewCybMediaResult {


    private $orderPreviewResuslt;

    /**
     * @return mixed 订单预览结果，过自动拆单会返回多个记录
     */
    public function getOrderPreviewResuslt() {
        return $this->orderPreviewResuslt;
    }

    /**
     * 设置订单预览结果，过自动拆单会返回多个记录
     * @param \com\alibaba\trade\param\AlibabaCreateOrderPreviewResultModel $orderPreviewResuslt
     * 此参数必填
     */
    public function setOrderPreviewResuslt(AlibabaCreateOrderPreviewResultModel $orderPreviewResuslt) {
        $this->orderPreviewResuslt = $orderPreviewResuslt;
    }


    private $success;

    /**
     * @return mixed 是否成功
     */
    public function getSuccess() {
        return $this->success;
    }

    /**
     * 设置是否成功
     * @param Boolean $success
     * 此参数必填
     */
    public function setSuccess( $success) {
        $this->success = $success;
    }

    private $errorCode;

    /**
     * @return mixed 错误码
     */
    public function getErrorCode() {
        return $this->errorCode;
    }

    /**
     * 设置错误码
     * @param String $errorCode
     * 此参数必填
     */
    public function setErrorCode( $errorCode) {
        $this->errorCode = $errorCode;
    }

    private $errorMsg;

    /**
     * @return mixed 错误信息
     */
    public function getErrorMsg() {
        return $this->errorMsg;
    }

    /**
     * 设置错误信息
     * @param String $errorMsg
     * 此参数必填
     */
    public function setErrorMsg( $errorMsg) {
        $this->errorMsg = $errorMsg;
    }


    private $postFeeByDescOfferList;

    /**
     * @return mixed 运费说明的商品列表
     */
    public function getPostFeeByDescOfferList() {
        return $this->postFeeByDescOfferList;
    }

    /**
     * 设置运费说明的商品列表
     * @param array include @see Long[] $postFeeByDescOfferList

     * 此参数必填     */
    public function setPostFeeByDescOfferList( $postFeeByDescOfferList) {
        $this->postFeeByDescOfferList = $postFeeByDescOfferList;
    }

    private $consignOfferList;

    /**
     * @return mixed 代销商品列表
     */
    public function getConsignOfferList() {
        return $this->consignOfferList;
    }

    /**
     * 设置代销商品列表
     * @param array include @see Long[] $consignOfferList
     * 此参数必填
     */
    public function setConsignOfferList( $consignOfferList) {
        $this->consignOfferList = $consignOfferList;
    }

	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;

		if (array_key_exists ( "orderPreviewResuslt", $this->stdResult )) {
		    $orderPreviewResusltResult=$this->stdResult->{"orderPreviewResuslt"};
		    $object = json_decode ( json_encode ( $orderPreviewResusltResult ), true );
		    $this->orderPreviewResuslt = array ();
		    for($i = 0; $i < count ( $object ); $i ++) {
		        $arrayobject = new \ArrayObject($object[$i]);
		        $AlibabaCreateOrderPreviewResultModelResult=new AlibabaCreateOrderPreviewResultModel();
		        $AlibabaCreateOrderPreviewResultModelResult->setArrayResult($arrayobject );
		        $this->orderPreviewResuslt [$i] = $AlibabaCreateOrderPreviewResultModelResult;
		    }
		}

		if (array_key_exists ( "success", $this->stdResult )) {
		    $this->success = $this->stdResult->{"success"};
		}

		if (array_key_exists ( "errorCode", $this->stdResult )) {
		    $this->errorCode = $this->stdResult->{"errorCode"};
		}

		if (array_key_exists ( "errorMsg", $this->stdResult )) {
		    $this->errorMsg = $this->stdResult->{"errorMsg"};
		}

		if (array_key_exists ( "postFeeByDescOfferList", $this->stdResult )) {
		    $this->postFeeByDescOfferList = $this->stdResult->{"postFeeByDescOfferList"};
		}

		if (array_key_exists ( "consignOfferList", $this->stdResult )) {
		    $this->consignOfferList = $this->stdResult->{"consignOfferList"};
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;

		if (array_key_exists ( "orderPreviewResuslt", $this->arrayResult )) {
    		$orderPreviewResusltResult=$arrayResult['${paramType.paramName}'];
    		$this->orderPreviewResuslt = new AlibabaCreateOrderPreviewResultModel();
    		$this->orderPreviewResuslt->setStdResult ( $orderPreviewResusltResult);
		}

		if (array_key_exists ( "success", $this->arrayResult )) {
		    $this->success = $arrayResult['${paramType.paramName}'];
		}

		if (array_key_exists ( "errorCode", $this->arrayResult )) {
		    $this->errorCode = $arrayResult['${paramType.paramName}'];
		}

		if (array_key_exists ( "errorMsg", $this->arrayResult )) {
		    $this->errorMsg = $arrayResult['${paramType.paramName}'];
		}

		if (array_key_exists ( "postFeeByDescOfferList", $this->arrayResult )) {
		    $this->postFeeByDescOfferList = $arrayResult['${paramType.paramName}'];
		}

		if (array_key_exists ( "consignOfferList", $this->arrayResult )) {
		    $this->consignOfferList = $arrayResult['${paramType.paramName}'];
		}
	}
}
