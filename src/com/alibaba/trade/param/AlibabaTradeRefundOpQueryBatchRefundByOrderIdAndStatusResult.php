<?php
namespace com\alibaba\trade\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;

class AlibabaTradeRefundOpQueryBatchRefundByOrderIdAndStatusResult {


    private $result;

    /**
     * @return mixed 查询结果
     */
    public function getResult() {
        return $this->result;
    }

    /**
     * 设置查询结果
     * @param AlibabaTradeRefundOpQueryBatchRefundByOrderIdAndStatusResult $result
     * 此参数必填
     */
    public function setResult(AlibabaTradeRefundOpQueryBatchRefundByOrderIdAndStatusResult $result) {
        $this->result = $result;
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


    private $errorMessage;

    /**
     * @return mixed 错误信息
     */
    public function getErrorMessage() {
        return $this->errorMessage;
    }

    /**
     * 设置错误信息
     * @param String $errorMessage
     * 此参数必填
     */
    public function setErrorMessage( $errorMessage) {
        $this->errorMessage = $errorMessage;
    }


    private $extErrorMessage;

    /**
     * @return mixed 附加信息
     */
    public function getExtErrorMessage() {
        return $this->extErrorMessage;
    }

    /**
     * 设置附加信息
     * @param String $extErrorMessage
     * 此参数必填
     */
    public function setExtErrorMessage( $extErrorMessage) {
        $this->extErrorMessage = $extErrorMessage;
    }


	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "result", $this->stdResult )) {
		    $resultResult=$this->stdResult->{"result"};
		    $this->result = new AlibabaTradeRefundOpQueryBatchRefundByOrderIdAndStatusResult();
		    $this->result->setStdResult ( $resultResult);
		}
		if (array_key_exists ( "errorCode", $this->stdResult )) {
		    $this->errorCode = $this->stdResult->{"errorCode"};
		}
		if (array_key_exists ( "errorMessage", $this->stdResult )) {
		    $this->errorMessage = $this->stdResult->{"errorMessage"};
		}
		if (array_key_exists ( "extErrorMessage", $this->stdResult )) {
		    $this->extErrorMessage = $this->stdResult->{"extErrorMessage"};
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "result", $this->arrayResult )) {
    		$resultResult=$arrayResult['${paramType.paramName}'];
    		$this->result = new AlibabaTradeRefundOpQueryBatchRefundByOrderIdAndStatusResult();
    		$this->result->setStdResult ( $resultResult);
		}
		if (array_key_exists ( "errorCode", $this->arrayResult )) {
		    $this->errorCode = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "errorMessage", $this->arrayResult )) {
		    $this->errorMessage = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "extErrorMessage", $this->arrayResult )) {
		    $this->extErrorMessage = $arrayResult['${paramType.paramName}'];
		}
	}
}
