<?php

namespace com\alibaba\p4p\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use com\alibaba\p4p\param\AlibabaPpOpenClientDtoOpenUnionOpGroupDTO;


class AlibabaPpOpenClientResultOpenUnionOpGroupListResult extends SDKDomain {


    private $errorCode;

	/**
	 * @return mixed errCode
	 */
	public function getErrorCode() {
        return $this->errorCode;
    }

    /**
     * 设置errCode
     * @param String $errorCode
     * 参数示例：<pre>errCode</pre>
     * 此参数必填
	 */
    public function setErrorCode( $errorCode) {
        $this->errorCode = $errorCode;
    }


    private $errorMsg;

	/**
	 * @return mixed errMsg
	 */
	public function getErrorMsg() {
        return $this->errorMsg;
    }

    /**
     * 设置errMsg
     * @param String $errorMsg
     * 参数示例：<pre>errMsg</pre>
     * 此参数必填
	 */
    public function setErrorMsg( $errorMsg) {
        $this->errorMsg = $errorMsg;
    }


    private $result;

	/**
	 * @return mixed 结果
	 */
	public function getResult() {
        return $this->result;
    }

	/**
	 * 设置结果
	 * @param \com\alibaba\p4p\param\AlibabaPpOpenClientDtoOpenUnionOpGroupDTO $result
	 * 参数示例：<pre>[]</pre>
	 * 此参数必填
	 */
    public function setResult(AlibabaPpOpenClientDtoOpenUnionOpGroupDTO $result) {
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


    private $totalRow;

	/**
	 * @return mixed 总数
	 */
	public function getTotalRow() {
        return $this->totalRow;
    }

    /**
     * 设置总数
     * @param Integer $totalRow
     * 参数示例：<pre>11</pre>
     * 此参数必填
	 */
    public function setTotalRow( $totalRow) {
        $this->totalRow = $totalRow;
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
			$object = json_decode(json_encode($resultResult),true);
			$this->result = array ();
			for($i = 0; $i < count ( $object ); $i ++) {
				$arrayobject = new \ArrayObject($object[$i]);
				$AlibabaPpOpenClientDtoOpenUnionOpGroupDTOResult=new AlibabaPpOpenClientDtoOpenUnionOpGroupDTO();
				$AlibabaPpOpenClientDtoOpenUnionOpGroupDTOResult->setArrayResult($arrayobject );
				$this->result [$i] = $AlibabaPpOpenClientDtoOpenUnionOpGroupDTOResult;
			}
		}
		if (array_key_exists ( "success", $this->stdResult )) {
			$this->success = $this->stdResult->{"success"};
		}
		if (array_key_exists ( "totalRow", $this->stdResult )) {
			$this->totalRow = $this->stdResult->{"totalRow"};
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
    		$this->result = new AlibabaPpOpenClientDtoOpenUnionOpGroupDTO();
    		$this->result->setStdResult ( $resultResult);
		}
		if (array_key_exists ( "success", $this->arrayResult )) {
			$this->success = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "totalRow", $this->arrayResult )) {
			$this->totalRow = $arrayResult['${paramType.paramName}'];
		}
	}
}
