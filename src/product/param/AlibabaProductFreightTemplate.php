<?php

namespace com\alibaba\product\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use com\alibaba\product\param\AlibabaProductDeliverySubTemplateDetailDTO;


class AlibabaProductFreightTemplate extends SDKDomain {


    private $addressCodeText;

    /**
     * @return mixed 地址区域编码对应的文本（包括省市区，用空格隔开）
     */
    public function getAddressCodeText() {
        return $this->addressCodeText;
    }

    /**
     * 设置地址区域编码对应的文本（包括省市区，用空格隔开）
     * @param String $addressCodeText
     * 参数示例：<pre>福建省 福州市 鼓楼区</pre>
     * 此参数必填
     */
    public function setAddressCodeText( $addressCodeText) {
        $this->addressCodeText = $addressCodeText;
    }


    private $fromAreaCode;

    /**
     * @return mixed 发货地址地区码
     */
    public function getFromAreaCode() {
        return $this->fromAreaCode;
    }

    /**
     * 设置发货地址地区码
     * @param String $fromAreaCode
     * 参数示例：<pre>350102</pre>
     * 此参数必填
     */
    public function setFromAreaCode( $fromAreaCode) {
        $this->fromAreaCode = $fromAreaCode;
    }


    private $id;

    /**
     * @return mixed 地址ID
     */
    public function getId() {
        return $this->id;
    }

    /**
     * 设置地址ID
     * @param Long $id
     * 参数示例：<pre>1234</pre>
     * 此参数必填
     */
    public function setId( $id) {
        $this->id = $id;
    }


    private $name;

    /**
     * @return mixed 模板名称
     */
    public function getName() {
        return $this->name;
    }

    /**
     * 设置模板名称
     * @param String $name
     * 参数示例：<pre>2019</pre>
     * 此参数必填
     */
    public function setName( $name) {
        $this->name = $name;
    }


    private $remark;

    /**
     * @return mixed 备注
     */
    public function getRemark() {
        return $this->remark;
    }

    /**
     * 设置备注
     * @param String $remark
     * 参数示例：<pre>2019</pre>
     * 此参数必填
     */
    public function setRemark( $remark) {
        $this->remark = $remark;
    }


    private $status;

    /**
     * @return mixed 状态：1表示有效，-1表示失效
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * 设置状态：1表示有效，-1表示失效
     * @param Integer $status
     * 参数示例：<pre>1</pre>
     * 此参数必填
     */
    public function setStatus( $status) {
        $this->status = $status;
    }


    private $expressSubTemplate;

    /**
     * @return mixed 快递子模版
     */
    public function getExpressSubTemplate() {
        return $this->expressSubTemplate;
    }

    /**
     * 设置快递子模版
     * @param \com\alibaba\product\param\AlibabaProductDeliverySubTemplateDetailDTO $expressSubTemplate
     * 参数示例：<pre>{}</pre>
     * 此参数必填
     */
    public function setExpressSubTemplate(AlibabaProductDeliverySubTemplateDetailDTO $expressSubTemplate) {
        $this->expressSubTemplate = $expressSubTemplate;
    }


    private $logisticsSubTemplate;

    /**
     * @return mixed 货运子模版
     */
        public function getLogisticsSubTemplate() {
        return $this->logisticsSubTemplate;
    }

    /**
     * 设置货运子模版
     * @param \com\alibaba\product\param\AlibabaProductDeliverySubTemplateDetailDTO $logisticsSubTemplate
     * 参数示例：<pre>{}</pre>
     * 此参数必填
     */
    public function setLogisticsSubTemplate(AlibabaProductDeliverySubTemplateDetailDTO $logisticsSubTemplate) {
        $this->logisticsSubTemplate = $logisticsSubTemplate;
    }


    private $codSubTemplate;

    /**
     * @return mixed 货到付款子模版
     */
    public function getCodSubTemplate() {
        return $this->codSubTemplate;
    }

    /**
     * 设置货到付款子模版
     * @param \com\alibaba\product\param\AlibabaProductDeliverySubTemplateDetailDTO $codSubTemplate
     * 参数示例：<pre>{}</pre>
     * 此参数必填
     */
    public function setCodSubTemplate(AlibabaProductDeliverySubTemplateDetailDTO $codSubTemplate) {
        $this->codSubTemplate = $codSubTemplate;
    }


	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "addressCodeText", $this->stdResult )) {
		    $this->addressCodeText = $this->stdResult->{"addressCodeText"};
		}
		if (array_key_exists ( "fromAreaCode", $this->stdResult )) {
		    $this->fromAreaCode = $this->stdResult->{"fromAreaCode"};
		}
		if (array_key_exists ( "id", $this->stdResult )) {
		    $this->id = $this->stdResult->{"id"};
		}
		if (array_key_exists ( "name", $this->stdResult )) {
		    $this->name = $this->stdResult->{"name"};
		}
		if (array_key_exists ( "remark", $this->stdResult )) {
		    $this->remark = $this->stdResult->{"remark"};
		}
		if (array_key_exists ( "status", $this->stdResult )) {
		    $this->status = $this->stdResult->{"status"};
		}
		if (array_key_exists ( "expressSubTemplate", $this->stdResult )) {
		    $expressSubTemplateResult=$this->stdResult->{"expressSubTemplate"};
		    $this->expressSubTemplate = new AlibabaProductDeliverySubTemplateDetailDTO();
		    $this->expressSubTemplate->setStdResult ( $expressSubTemplateResult);
		}
		if (array_key_exists ( "logisticsSubTemplate", $this->stdResult )) {
		    $logisticsSubTemplateResult=$this->stdResult->{"logisticsSubTemplate"};
		    $this->logisticsSubTemplate = new AlibabaProductDeliverySubTemplateDetailDTO();
		    $this->logisticsSubTemplate->setStdResult ( $logisticsSubTemplateResult);
		}
		if (array_key_exists ( "codSubTemplate", $this->stdResult )) {
		    $codSubTemplateResult=$this->stdResult->{"codSubTemplate"};
		    $this->codSubTemplate = new AlibabaProductDeliverySubTemplateDetailDTO();
		    $this->codSubTemplate->setStdResult ( $codSubTemplateResult);
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
	    $this->arrayResult = $arrayResult;
	    if (array_key_exists ( "addressCodeText", $this->arrayResult )) {
	        $this->addressCodeText = $arrayResult['${paramType.paramName}'];
	    }
	    if (array_key_exists ( "fromAreaCode", $this->arrayResult )) {
	        $this->fromAreaCode = $arrayResult['${paramType.paramName}'];
	    }
	    if (array_key_exists ( "id", $this->arrayResult )) {
	        $this->id = $arrayResult['${paramType.paramName}'];
	    }
	    if (array_key_exists ( "name", $this->arrayResult )) {
	        $this->name = $arrayResult['${paramType.paramName}'];
	    }
	    if (array_key_exists ( "remark", $this->arrayResult )) {
	        $this->remark = $arrayResult['${paramType.paramName}'];
	    }
	    if (array_key_exists ( "status", $this->arrayResult )) {
	        $this->status = $arrayResult['${paramType.paramName}'];
	    }
	    if (array_key_exists ( "expressSubTemplate", $this->arrayResult )) {
    		$expressSubTemplateResult=$arrayResult['${paramType.paramName}'];
    		$this->expressSubTemplate = new AlibabaProductDeliverySubTemplateDetailDTO();
    		$this->expressSubTemplate->setStdResult ( $expressSubTemplateResult);
	    }
	    if (array_key_exists ( "logisticsSubTemplate", $this->arrayResult )) {
    		$logisticsSubTemplateResult=$arrayResult['${paramType.paramName}'];
    		$this->logisticsSubTemplate = new AlibabaProductDeliverySubTemplateDetailDTO();
    		$this->logisticsSubTemplate->setStdResult ( $logisticsSubTemplateResult);
	    }
	    if (array_key_exists ( "codSubTemplate", $this->arrayResult )) {
    		$codSubTemplateResult=$arrayResult['${paramType.paramName}'];
    		$this->codSubTemplate = new AlibabaProductDeliverySubTemplateDetailDTO();
    		$this->codSubTemplate->setStdResult ( $codSubTemplateResult);
	    }
	}
}
