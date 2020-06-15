<?php

namespace com\alibaba\trade\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;

class AlibabaOpenplatformTradeModelGuaranteeTermsInfo extends SDKDomain {

    private $assuranceInfo;

    /**
     * @return mixed 保障条款
     */
    public function getAssuranceInfo() {
        return $this->assuranceInfo;
    }

    /**
     * 设置保障条款
     * @param String $assuranceInfo
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setAssuranceInfo( $assuranceInfo) {
        $this->assuranceInfo = $assuranceInfo;
    }

    private $assuranceType;

    /**
     * @return mixed 保障方式。国际站：TA(信保)
     */
    public function getAssuranceType() {
        return $this->assuranceType;
    }

    /**
     * 设置保障方式。国际站：TA(信保)
     * @param String $assuranceType
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setAssuranceType( $assuranceType) {
        $this->assuranceType = $assuranceType;
    }

    private $qualityAssuranceType;

    /**
     * @return mixed 质量保证类型。国际站：pre_shipment(发货前),post_delivery(发货后)
     */
    public function getQualityAssuranceType() {
        return $this->qualityAssuranceType;
    }

    /**
     * 设置质量保证类型。国际站：pre_shipment(发货前),post_delivery(发货后)
     * @param String $qualityAssuranceType
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setQualityAssuranceType( $qualityAssuranceType) {
        $this->qualityAssuranceType = $qualityAssuranceType;
    }


	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "assuranceInfo", $this->stdResult )) {
		    $this->assuranceInfo = $this->stdResult->{"assuranceInfo"};
		}
		if (array_key_exists ( "assuranceType", $this->stdResult )) {
		    $this->assuranceType = $this->stdResult->{"assuranceType"};
		}
		if (array_key_exists ( "qualityAssuranceType", $this->stdResult )) {
		    $this->qualityAssuranceType = $this->stdResult->{"qualityAssuranceType"};
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "assuranceInfo", $this->arrayResult )) {
		    $this->assuranceInfo = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "assuranceType", $this->arrayResult )) {
		    $this->assuranceType = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "qualityAssuranceType", $this->arrayResult )) {
		    $this->qualityAssuranceType = $arrayResult['${paramType.paramName}'];
		}
	}
}
