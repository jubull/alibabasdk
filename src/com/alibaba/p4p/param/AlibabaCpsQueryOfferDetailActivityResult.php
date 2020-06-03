<?php

namespace com\alibaba\p4p\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use com\alibaba\p4p\param\ComAlibabaPpOpenClientResultOpenUnionActivityOfferDetailResult;


class AlibabaCpsQueryOfferDetailActivityResult {


    private $result;

    /**
     * @return mixed 营销活动结果
     */
        public function getResult() {
        return $this->result;
    }

	/**
	 * 设置营销活动结果
	 * @param \com\alibaba\p4p\param\ComAlibabaPpOpenClientResultOpenUnionActivityOfferDetailResult $result
	 * 此参数必填
	 */
    public function setResult(ComAlibabaPpOpenClientResultOpenUnionActivityOfferDetailResult $result) {
        $this->result = $result;
    }


	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "result", $this->stdResult )) {
			$resultResult=$this->stdResult->{"result"};
			$this->result = new ComAlibabaPpOpenClientResultOpenUnionActivityOfferDetailResult();
			$this->result->setStdResult ( $resultResult);
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "result", $this->arrayResult )) {
			$resultResult=$arrayResult['${paramType.paramName}'];
			$this->result = new ComAlibabaPpOpenClientResultOpenUnionActivityOfferDetailResult();
			$this->result->setStdResult ( $resultResult);
		}
	}
}
