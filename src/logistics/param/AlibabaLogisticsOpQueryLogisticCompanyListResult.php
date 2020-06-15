<?php

namespace com\alibaba\logistics\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use com\alibaba\logistics\param\AlibabaLogisticsOpLogisticsCompanyModel;


class AlibabaLogisticsOpQueryLogisticCompanyListResult {


    private $result;

    /**
     * @return mixed 物流公司列表
     */
    public function getResult() {
        return $this->result;
    }

	/**
	 * 设置物流公司列表
	 * @param \com\alibaba\logistics\param\AlibabaLogisticsOpLogisticsCompanyModel $result
	 * 此参数必填
	 */
    public function setResult(AlibabaLogisticsOpLogisticsCompanyModel $result) {
        $this->result = $result;
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

     * 此参数必填     */
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

    private $errorMessage;

	/**
	 * @return mixed 错误码描述
	 */
    public function getErrorMessage() {
        return $this->errorMessage;
    }

    /**
     * 设置错误码描述
     * @param String $errorMessage
     * 此参数必填
	 */
    public function setErrorMessage( $errorMessage) {
        $this->errorMessage = $errorMessage;
    }


    private $extErrorMessage;

	/**
	 * @return mixed 扩展错误码描述
	 */
    public function getExtErrorMessage() {
        return $this->extErrorMessage;
    }

    /**
     * 设置扩展错误码描述
     * @param String $extErrorMessage
     * 此参数必填
	 */
    public function setExtErrorMessage( $extErrorMessage) {
        $this->extErrorMessage = $extErrorMessage;
    }


	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;

		if (array_key_exists ("result", $this->stdResult)) {
			$resultResult=$this->stdResult->{"result"};
			$object = json_decode(json_encode($resultResult), true);
			$this->result = [];
			for($i = 0; $i < count($object); $i ++) {
				$arrayobject = new \ArrayObject($object [$i]);
				$AlibabaLogisticsOpLogisticsCompanyModelResult=new AlibabaLogisticsOpLogisticsCompanyModel();
				$AlibabaLogisticsOpLogisticsCompanyModelResult->setArrayResult($arrayobject );
				$this->result [$i] = $AlibabaLogisticsOpLogisticsCompanyModelResult;
			}
		}

		if (array_key_exists ( "success", $this->stdResult )) {
			$this->success = $this->stdResult->{"success"};
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
			$this->result = new AlibabaLogisticsOpLogisticsCompanyModel();
			$this->result->setStdResult ( $resultResult);
		}

		if (array_key_exists ( "success", $this->arrayResult )) {
			$this->success = $arrayResult['${paramType.paramName}'];
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
