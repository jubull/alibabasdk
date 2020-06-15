<?php

namespace com\alibaba\product\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;


class AlibabaProductDeliverySubTemplateDTO extends SDKDomain {


    private $chargeType;

    /**
     * @return mixed 计件类型。0:重量 1:件数 2:体积
     */
    public function getChargeType() {
        return $this->chargeType;
    }

    /**
     * 设置计件类型。0:重量 1:件数 2:体积
     * @param Integer $chargeType
     * 参数示例：<pre>0</pre>
     * 此参数必填     */
    public function setChargeType( $chargeType) {
        $this->chargeType = $chargeType;
    }


    private $isSysTemplate;

    /**
     * @return mixed 是否系统模板
     */
    public function getIsSysTemplate() {
        return $this->isSysTemplate;
    }

    /**
     * 设置是否系统模板
     * @param Boolean $isSysTemplate
     * 参数示例：<pre>false</pre>
     * 此参数必填
     */
    public function setIsSysTemplate( $isSysTemplate) {
        $this->isSysTemplate = $isSysTemplate;
    }

    private $serviceChargeType;

    /**
     * @return mixed 运费承担类型 卖家承担：0；买家承担：1。
     */
    public function getServiceChargeType() {
        return $this->serviceChargeType;
    }

    /**
     * 设置运费承担类型 卖家承担：0；买家承担：1。
     * @param Integer $serviceChargeType
     * 参数示例：<pre>1</pre>
     * 此参数必填
     */
    public function setServiceChargeType( $serviceChargeType) {
        $this->serviceChargeType = $serviceChargeType;
    }


    private $serviceType;

    /**
     * @return mixed 服务类型。0:快递 1:货运 2:货到付款
     */
    public function getServiceType() {
        return $this->serviceType;
    }

    /**
     * 设置服务类型。0:快递 1:货运 2:货到付款
     * @param Integer $serviceType
     * 参数示例：<pre>0</pre>
     * 此参数必填
     */
    public function setServiceType( $serviceType) {
        $this->serviceType = $serviceType;
    }


    private $type;

    /**
     * @return mixed 子模板类型 0基准 1增值。默认0。
     */
    public function getType() {
        return $this->type;
    }

    /**
     * 设置子模板类型 0基准 1增值。默认0。
     * @param Integer $type
     * 参数示例：<pre>0</pre>
     * 此参数必填
     */
    public function setType( $type) {
        $this->type = $type;
    }


	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "chargeType", $this->stdResult )) {
		    $this->chargeType = $this->stdResult->{"chargeType"};
		}
		if (array_key_exists ( "isSysTemplate", $this->stdResult )) {
		    $this->isSysTemplate = $this->stdResult->{"isSysTemplate"};
		}
		if (array_key_exists ( "serviceChargeType", $this->stdResult )) {
		    $this->serviceChargeType = $this->stdResult->{"serviceChargeType"};
		}
		if (array_key_exists ( "serviceType", $this->stdResult )) {
		    $this->serviceType = $this->stdResult->{"serviceType"};
		}
		if (array_key_exists ( "type", $this->stdResult )) {
		    $this->type = $this->stdResult->{"type"};
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "chargeType", $this->arrayResult )) {
		    $this->chargeType = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "isSysTemplate", $this->arrayResult )) {
		    $this->isSysTemplate = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "serviceChargeType", $this->arrayResult )) {
		    $this->serviceChargeType = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "serviceType", $this->arrayResult )) {
		    $this->serviceType = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "type", $this->arrayResult )) {
		    $this->type = $arrayResult['${paramType.paramName}'];
		}
	}
}
