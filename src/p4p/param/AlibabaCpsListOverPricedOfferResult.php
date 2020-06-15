<?php

namespace com\alibaba\p4p\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use com\alibaba\p4p\param\AlibabaCpsOpenOfferDTO;


class AlibabaCpsListOverPricedOfferResult {


    private $result;

    /**
     * @return mixed 列表
     */
    public function getResult() {
        return $this->result;
    }

	/**
	 * 设置列表
	 * @param \com\alibaba\p4p\param\AlibabaCpsOpenOfferDTO $result
	 * 此参数必填
	 */
    public function setResult(AlibabaCpsOpenOfferDTO $result) {
        $this->result = $result;
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
     * 此参数必填
	 */
    public function setTotalRow( $totalRow) {
        $this->totalRow = $totalRow;
    }


	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "result", $this->stdResult )) {
			$resultResult=$this->stdResult->{"result"};
			$object = json_decode ( json_encode ( $resultResult ), true );
			$this->result = array ();
			for($i = 0; $i < count ( $object ); $i ++) {
				$arrayobject = new \ArrayObject($object[$i]);
				$AlibabaCpsOpenOfferDTOResult=new AlibabaCpsOpenOfferDTO();
				$AlibabaCpsOpenOfferDTOResult->setArrayResult($arrayobject );
				$this->result [$i] = $AlibabaCpsOpenOfferDTOResult;
			}
		}
		if (array_key_exists ( "totalRow", $this->stdResult )) {
			$this->totalRow = $this->stdResult->{"totalRow"};
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "result", $this->arrayResult )) {
    		$resultResult=$arrayResult['${paramType.paramName}'];
    		$this->result = new AlibabaCpsOpenOfferDTO();
    		$this->result->setStdResult ( $resultResult);
		}
		if (array_key_exists ( "totalRow", $this->arrayResult )) {
			$this->totalRow = $arrayResult['${paramType.paramName}'];
		}
	}
}
