<?php

namespace com\alibaba\p4p\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use com\alibaba\p4p\param\AlibabaWxbUnionClientModelDtoOverPricedCybSearchOffersDTO;


class AlibabaAscXuanwuCoreDtoPageResultDTO extends SDKDomain {


    private $errorCode;

	/**
	 * @return mixed errorCode
	 */
	public function getErrorCode() {
        return $this->errorCode;
    }

    /**
     * 设置errorCode
     * @param String $errorCode
     * 参数示例：<pre>errorCode</pre>
     * 此参数必填
	 */
    public function setErrorCode( $errorCode) {
        $this->errorCode = $errorCode;
    }


    private $errorMsg;

	/**
	 * @return mixed errorMsg
	 */
	public function getErrorMsg() {
        return $this->errorMsg;
    }

    /**
     * 设置errorMsg
     * @param String $errorMsg
     * 参数示例：<pre>errorMsg</pre>
     * 此参数必填
	 */
    public function setErrorMsg( $errorMsg) {
        $this->errorMsg = $errorMsg;
    }


    private $result;

	/**
	 * @return mixed 列表
	 */
	public function getResult() {
        return $this->result;
    }

	/**
	 * 设置列表
	 * @param \com\alibaba\p4p\param\AlibabaWxbUnionClientModelDtoOverPricedCybSearchOffersDTO $result
	 * 参数示例：<pre>[]</pre>
	 * 此参数必填
	 */
    public function setResult(AlibabaWxbUnionClientModelDtoOverPricedCybSearchOffersDTO $result) {
        $this->result = $result;
    }


    private $success;

	/**
	 * @return mixed 状态
	 */
	public function getSuccess() {
        return $this->success;
    }

    /**
     * 设置状态
     * @param Boolean $success
     * 参数示例：<pre>true</pre>
     * 此参数必填
	 */
    public function setSuccess( $success) {
        $this->success = $success;
    }


    private $totalCount;

	/**
	 * @return mixed 总数
	 */
	public function getTotalCount() {
        return $this->totalCount;
    }

    /**
     * 设置总数
     * @param Integer $totalCount
     * 参数示例：<pre>223133</pre>
     * 此参数必填
	 */
    public function setTotalCount( $totalCount) {
        $this->totalCount = $totalCount;
    }


	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "errorCode", $this->stdResult )) {
			$this->errorCode = $this->stdResult->{"errorCode"};
		}
		if (array_key_exists ( "errorMsg", $this->stdResult )) {
			$this->errorMsg = $this->stdResult->{"errorMsg"};
		}
		if (array_key_exists ( "result", $this->stdResult )) {
			$resultResult=$this->stdResult->{"result"};
			$object = json_decode ( json_encode ( $resultResult ), true );
			$this->result = array ();
			for($i = 0; $i < count ( $object ); $i ++) {
				$arrayobject = new \ArrayObject($object[$i]);
				$AlibabaWxbUnionClientModelDtoOverPricedCybSearchOffersDTOResult=new AlibabaWxbUnionClientModelDtoOverPricedCybSearchOffersDTO();
				$AlibabaWxbUnionClientModelDtoOverPricedCybSearchOffersDTOResult->setArrayResult($arrayobject );
				$this->result [$i] = $AlibabaWxbUnionClientModelDtoOverPricedCybSearchOffersDTOResult;
			}
		}
		if (array_key_exists ( "success", $this->stdResult )) {
			$this->success = $this->stdResult->{"success"};
		}
		if (array_key_exists ( "totalCount", $this->stdResult )) {
			$this->totalCount = $this->stdResult->{"totalCount"};
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "errorCode", $this->arrayResult )) {
			$this->errorCode = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "errorMsg", $this->arrayResult )) {
			$this->errorMsg = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "result", $this->arrayResult )) {
    		$resultResult=$arrayResult['${paramType.paramName}'];
    		$this->result = new AlibabaWxbUnionClientModelDtoOverPricedCybSearchOffersDTO();
    		$this->result->setStdResult ( $resultResult);
		}
		if (array_key_exists ( "success", $this->arrayResult )) {
			$this->success = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "totalCount", $this->arrayResult )) {
			$this->totalCount = $arrayResult['${paramType.paramName}'];
		}
	}
}
