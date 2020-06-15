<?php

namespace com\alibaba\product\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use com\alibaba\product\param\AlibabaProductDeliveryRateDTO;
use com\alibaba\product\param\AlibabaProductDeliverySysRateDTO;


class AlibabaProductDeliveryRateDetailDTO extends SDKDomain {


    private $isSysRate;

    /**
     * @return mixed 是否系统模板
     */
    public function getIsSysRate() {
        return $this->isSysRate;
    }

    /**
     * 设置是否系统模板
     * @param Boolean $isSysRate
     * 参数示例：<pre>false</pre>
     * 此参数必填
	 */
    public function setIsSysRate( $isSysRate) {
        $this->isSysRate = $isSysRate;
    }


    private $toAreaCodeText;

	/**
	 * @return mixed 地址编码文本，用顿号隔开。例如：上海、福建省、广东省
	 */
	public function getToAreaCodeText() {
        return $this->toAreaCodeText;
    }

    /**
     * 设置地址编码文本，用顿号隔开。例如：上海、福建省、广东省
     * @param String $toAreaCodeText
     * 参数示例：<pre>上海、福建省、广东省</pre>
     * 此参数必填
	 */
    public function setToAreaCodeText( $toAreaCodeText) {
        $this->toAreaCodeText = $toAreaCodeText;
    }


    private $rateDTO;

	/**
	 * @return mixed 普通子模板费率
	 */
	public function getRateDTO() {
        return $this->rateDTO;
    }

    /**
     * 设置普通子模板费率
     * @param AlibabaProductDeliveryRateDTO $rateDTO
     * 参数示例：<pre>{}</pre>
     * 此参数必填
	 */
    public function setRateDTO(AlibabaProductDeliveryRateDTO $rateDTO) {
        $this->rateDTO = $rateDTO;
    }


    private $sysRateDTO;

	/**
	 * @return mixed 系统子模板费率
	 */
	public function getSysRateDTO() {
        return $this->sysRateDTO;
    }

    /**
     * 设置系统子模板费率
     * @param AlibabaProductDeliverySysRateDTO $sysRateDTO
     * 参数示例：<pre>{}</pre>
     * 此参数必填
	 */
    public function setSysRateDTO(AlibabaProductDeliverySysRateDTO $sysRateDTO) {
        $this->sysRateDTO = $sysRateDTO;
    }


	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "isSysRate", $this->stdResult )) {
			$this->isSysRate = $this->stdResult->{"isSysRate"};
		}
		if (array_key_exists ( "toAreaCodeText", $this->stdResult )) {
			$this->toAreaCodeText = $this->stdResult->{"toAreaCodeText"};
		}
		if (array_key_exists ( "rateDTO", $this->stdResult )) {
			$rateDTOResult=$this->stdResult->{"rateDTO"};
			$this->rateDTO = new AlibabaProductDeliveryRateDTO();
			$this->rateDTO->setStdResult ( $rateDTOResult);
		}
		if (array_key_exists ( "sysRateDTO", $this->stdResult )) {
			$sysRateDTOResult=$this->stdResult->{"sysRateDTO"};
			$this->sysRateDTO = new AlibabaProductDeliverySysRateDTO();
			$this->sysRateDTO->setStdResult ( $sysRateDTOResult);
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "isSysRate", $this->arrayResult )) {
			$this->isSysRate = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "toAreaCodeText", $this->arrayResult )) {
			$this->toAreaCodeText = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "rateDTO", $this->arrayResult )) {
    		$rateDTOResult=$arrayResult['${paramType.paramName}'];
    		$this->rateDTO = new AlibabaProductDeliveryRateDTO();
    		$this->rateDTO->setStdResult ( $rateDTOResult);
		}
		if (array_key_exists ( "sysRateDTO", $this->arrayResult )) {
    		$sysRateDTOResult=$arrayResult['${paramType.paramName}'];
    		$this->sysRateDTO = new AlibabaProductDeliverySysRateDTO();
    		$this->sysRateDTO->setStdResult ( $sysRateDTOResult);
		}
	}
}
