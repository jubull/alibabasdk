<?php

namespace com\alibaba\product\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use com\alibaba\product\param\AlibabaProductDeliverySubTemplateDTO;
use com\alibaba\product\param\AlibabaProductDeliveryRateDetailDTO;


class AlibabaProductDeliverySubTemplateDetailDTO extends SDKDomain {


    private $subTemplateDTO;

	/**
	 * @return mixed 子模板
	 */
	public function getSubTemplateDTO() {
        return $this->subTemplateDTO;
    }

    /**
     * 设置子模板
     * @param AlibabaProductDeliverySubTemplateDTO $subTemplateDTO
     * 参数示例：<pre>{}</pre>
     * 此参数必填
	 */
    public function setSubTemplateDTO(AlibabaProductDeliverySubTemplateDTO $subTemplateDTO) {
        $this->subTemplateDTO = $subTemplateDTO;
    }


    private $rateList;

	/**
	 * @return mixed 费率
	 */
	public function getRateList() {
        return $this->rateList;
    }

	/**
	 * 设置费率
	 * @param \com\alibaba\product\param\AlibabaProductDeliveryRateDetailDTO $rateList
	 * 参数示例：<pre>[]</pre>
	 * 此参数必填
	 */
    public function setRateList(AlibabaProductDeliveryRateDetailDTO $rateList) {
        $this->rateList = $rateList;
    }


	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "subTemplateDTO", $this->stdResult )) {
			$subTemplateDTOResult=$this->stdResult->{"subTemplateDTO"};
			$this->subTemplateDTO = new AlibabaProductDeliverySubTemplateDTO();
			$this->subTemplateDTO->setStdResult ( $subTemplateDTOResult);
		}
		if (array_key_exists ( "rateList", $this->stdResult )) {
			$rateListResult=$this->stdResult->{"rateList"};
			$object = json_decode ( json_encode ( $rateListResult ), true );
			$this->rateList = array ();
			for($i = 0; $i < count ( $object ); $i ++) {
				$arrayobject = new \ArrayObject($object[$i]);
				$AlibabaProductDeliveryRateDetailDTOResult=new AlibabaProductDeliveryRateDetailDTO();
				$AlibabaProductDeliveryRateDetailDTOResult->setArrayResult($arrayobject );
				$this->rateList [$i] = $AlibabaProductDeliveryRateDetailDTOResult;
			}
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "subTemplateDTO", $this->arrayResult )) {
    		$subTemplateDTOResult=$arrayResult['${paramType.paramName}'];
    		$this->subTemplateDTO = new AlibabaProductDeliverySubTemplateDTO();
    		$this->subTemplateDTO->setStdResult ( $subTemplateDTOResult);
		}

		if (array_key_exists ( "rateList", $this->arrayResult )) {
    		$rateListResult=$arrayResult['${paramType.paramName}'];
    		$this->rateList = new AlibabaProductDeliveryRateDetailDTO();
    		$this->rateList->setStdResult ( $rateListResult);
		}
	}
}
