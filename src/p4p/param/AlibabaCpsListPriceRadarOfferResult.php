<?php

namespace com\alibaba\p4p\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use com\alibaba\p4p\param\AlibabaCpsOpenPriceRadarOfferDTO;


class AlibabaCpsListPriceRadarOfferResult {


    private $result;

	/**
	 * @return mixed 结果返回
	 */
	public function getResult() {
        return $this->result;
    }

	/**
	 * 设置结果返回
	 * @param \com\alibaba\p4p\param\AlibabaCpsOpenPriceRadarOfferDTO $result
	 * 此参数必填
	 */
    public function setResult(AlibabaCpsOpenPriceRadarOfferDTO $result) {
        $this->result = $result;
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
				$AlibabaCpsOpenPriceRadarOfferDTOResult=new AlibabaCpsOpenPriceRadarOfferDTO();
				$AlibabaCpsOpenPriceRadarOfferDTOResult->setArrayResult($arrayobject );
				$this->result [$i] = $AlibabaCpsOpenPriceRadarOfferDTOResult;
			}
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "result", $this->arrayResult )) {
    		$resultResult=$arrayResult['${paramType.paramName}'];
    		$this->result = new AlibabaCpsOpenPriceRadarOfferDTO();
    		$this->result->setStdResult ( $resultResult);
		}
	}
}
