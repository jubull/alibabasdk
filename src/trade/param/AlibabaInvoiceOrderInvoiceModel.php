<?php

namespace com\alibaba\trade\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;


class AlibabaInvoiceOrderInvoiceModel extends SDKDomain {


    private $invoiceCompanyName;

    /**
     * @return mixed 发票公司名称(即发票抬头-title)
     */
    public function getInvoiceCompanyName() {
        return $this->invoiceCompanyName;
    }

    /**
     * 设置发票公司名称(即发票抬头-title)
     * @param String $invoiceCompanyName
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setInvoiceCompanyName( $invoiceCompanyName) {
        $this->invoiceCompanyName = $invoiceCompanyName;
    }

    private $invoiceType;

    /**
     * @return mixed 发票类型. 0：普通发票，1:增值税发票，9未知类型
     */
    public function getInvoiceType() {
        return $this->invoiceType;
    }

    /**
     * 设置发票类型. 0：普通发票，1:增值税发票，9未知类型
     * @param Integer $invoiceType
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setInvoiceType( $invoiceType) {
        $this->invoiceType = $invoiceType;
    }

    private $localInvoiceId;

    /**
     * @return mixed 本地发票号
     */
    public function getLocalInvoiceId() {
        return $this->localInvoiceId;
    }

    /**
     * 设置本地发票号
     * @param Long $localInvoiceId
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setLocalInvoiceId( $localInvoiceId) {
        $this->localInvoiceId = $localInvoiceId;
    }

    private $orderId;

    /**
     * @return mixed 订单Id
     */
    public function getOrderId() {
        return $this->orderId;
    }

    /**
     * 设置订单Id
     * @param Long $orderId
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setOrderId( $orderId) {
        $this->orderId = $orderId;
    }

    private $receiveCode;

    /**
     * @return mixed (收件人)址区域编码
     */
    public function getReceiveCode() {
        return $this->receiveCode;
    }

    /**
     * 设置(收件人)址区域编码
     * @param String $receiveCode
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setReceiveCode( $receiveCode) {
        $this->receiveCode = $receiveCode;
    }

    private $receiveCodeText;

    /**
     * @return mixed (收件人) 省市区编码对应的文案(增值税发票信息)
     */
    public function getReceiveCodeText() {
        return $this->receiveCodeText;
    }

    /**
     * 设置(收件人) 省市区编码对应的文案(增值税发票信息)
     * @param String $receiveCodeText
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setReceiveCodeText( $receiveCodeText) {
        $this->receiveCodeText = $receiveCodeText;
    }

    private $receiveMobile;

    /**
     * @return mixed （收件者）发票收货人手机
     */
    public function getReceiveMobile() {
        return $this->receiveMobile;
    }

    /**
     * 设置（收件者）发票收货人手机
     * @param String $receiveMobile
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setReceiveMobile( $receiveMobile) {
        $this->receiveMobile = $receiveMobile;
    }

    private $receiveName;

    /**
     * @return mixed （收件者）发票收货人
     */
    public function getReceiveName() {
        return $this->receiveName;
    }

    /**
     * 设置（收件者）发票收货人
     * @param String $receiveName
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setReceiveName( $receiveName) {
        $this->receiveName = $receiveName;
    }

    private $receivePhone;

    /**
     * @return mixed （收件者）发票收货人电话
     */
    public function getReceivePhone() {
        return $this->receivePhone;
    }

    /**
     * 设置（收件者）发票收货人电话
     * @param String $receivePhone
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setReceivePhone( $receivePhone) {
        $this->receivePhone = $receivePhone;
    }

    private $receivePost;

    /**
     * @return mixed （收件者）发票收货地址邮编
     */
    public function getReceivePost() {
        return $this->receivePost;
    }

    /**
     * 设置（收件者）发票收货地址邮编
     * @param String $receivePost
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setReceivePost( $receivePost) {
        $this->receivePost = $receivePost;
    }


    private $receiveStreet;

    /**
     * @return mixed (收件人) 街道地址(增值税发票信息)
     */
    public function getReceiveStreet() {
        return $this->receiveStreet;
    }

    /**
     * 设置(收件人) 街道地址(增值税发票信息)
     * @param String $receiveStreet
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setReceiveStreet( $receiveStreet) {
        $this->receiveStreet = $receiveStreet;
    }

    private $registerAccountId;

    /**
     * @return mixed (公司)银行账号
     */
    public function getRegisterAccountId() {
        return $this->registerAccountId;
    }

    /**
     * 设置(公司)银行账号
     * @param String $registerAccountId
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setRegisterAccountId( $registerAccountId) {
        $this->registerAccountId = $registerAccountId;
    }

    private $registerBank;

    /**
     * @return mixed (公司)开户银行
     */
    public function getRegisterBank() {
        return $this->registerBank;
    }

    /**
     * 设置(公司)开户银行
     * @param String $registerBank
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setRegisterBank( $registerBank) {
        $this->registerBank = $registerBank;
    }

    private $registerCode;

    /**
     * @return mixed (注册)省市区编码
     */
    public function getRegisterCode() {
        return $this->registerCode;
    }

    /**
     * 设置(注册)省市区编码
     * @param String $registerCode
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setRegisterCode( $registerCode) {
        $this->registerCode = $registerCode;
    }

    private $registerCodeText;

    /**
     * @return mixed (注册)省市区文本
     */
    public function getRegisterCodeText() {
        return $this->registerCodeText;
    }

    /**
     * 设置(注册)省市区文本
     * @param String $registerCodeText
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setRegisterCodeText( $registerCodeText) {
        $this->registerCodeText = $registerCodeText;
    }

    private $registerPhone;

    /**
     * @return mixed （公司）注册电话
     */
    public function getRegisterPhone() {
        return $this->registerPhone;
    }

    /**
     * 设置（公司）注册电话
     * @param String $registerPhone
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setRegisterPhone( $registerPhone) {
        $this->registerPhone = $registerPhone;
    }

    private $registerStreet;

    /**
     * @return mixed (注册)街道地址
     */
    public function getRegisterStreet() {
        return $this->registerStreet;
    }

    /**
     * 设置(注册)街道地址
     * @param String $registerStreet
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setRegisterStreet( $registerStreet) {
        $this->registerStreet = $registerStreet;
    }

    private $taxpayerIdentify;

    /**
     * @return mixed 纳税人识别号
     */
    public function getTaxpayerIdentify() {
        return $this->taxpayerIdentify;
    }

    /**
     * 设置纳税人识别号
     * @param String $taxpayerIdentify
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setTaxpayerIdentify( $taxpayerIdentify) {
        $this->taxpayerIdentify = $taxpayerIdentify;
    }

	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;

		if (array_key_exists ( "invoiceCompanyName", $this->stdResult )) {
		    $this->invoiceCompanyName = $this->stdResult->{"invoiceCompanyName"};
		}

		if (array_key_exists ( "invoiceType", $this->stdResult )) {
		    $this->invoiceType = $this->stdResult->{"invoiceType"};
		}

		if (array_key_exists ( "localInvoiceId", $this->stdResult )) {
		    $this->localInvoiceId = $this->stdResult->{"localInvoiceId"};
		}

		if (array_key_exists ( "orderId", $this->stdResult )) {
		    $this->orderId = $this->stdResult->{"orderId"};
		}

		if (array_key_exists ( "receiveCode", $this->stdResult )) {
		    $this->receiveCode = $this->stdResult->{"receiveCode"};
		}

		if (array_key_exists ( "receiveCodeText", $this->stdResult )) {
		    $this->receiveCodeText = $this->stdResult->{"receiveCodeText"};
		}

		if (array_key_exists ( "receiveMobile", $this->stdResult )) {
		    $this->receiveMobile = $this->stdResult->{"receiveMobile"};
		}

		if (array_key_exists ( "receiveName", $this->stdResult )) {
		    $this->receiveName = $this->stdResult->{"receiveName"};
		}

		if (array_key_exists ( "receivePhone", $this->stdResult )) {
		    $this->receivePhone = $this->stdResult->{"receivePhone"};
		}

		if (array_key_exists ( "receivePost", $this->stdResult )) {
		    $this->receivePost = $this->stdResult->{"receivePost"};
		}

		if (array_key_exists ( "receiveStreet", $this->stdResult )) {
		    $this->receiveStreet = $this->stdResult->{"receiveStreet"};
		}

		if (array_key_exists ( "registerAccountId", $this->stdResult )) {
		    $this->registerAccountId = $this->stdResult->{"registerAccountId"};
		}

		if (array_key_exists ( "registerBank", $this->stdResult )) {
		    $this->registerBank = $this->stdResult->{"registerBank"};
		}

		if (array_key_exists ( "registerCode", $this->stdResult )) {
		    $this->registerCode = $this->stdResult->{"registerCode"};
		}

		if (array_key_exists ( "registerCodeText", $this->stdResult )) {
		    $this->registerCodeText = $this->stdResult->{"registerCodeText"};
		}

		if (array_key_exists ( "registerPhone", $this->stdResult )) {
		    $this->registerPhone = $this->stdResult->{"registerPhone"};
		}

		if (array_key_exists ( "registerStreet", $this->stdResult )) {
		    $this->registerStreet = $this->stdResult->{"registerStreet"};
		}

		if (array_key_exists ( "taxpayerIdentify", $this->stdResult )) {
		    $this->taxpayerIdentify = $this->stdResult->{"taxpayerIdentify"};
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
	    $this->arrayResult = $arrayResult;

	    if (array_key_exists ( "invoiceCompanyName", $this->arrayResult )) {
	        $this->invoiceCompanyName = $arrayResult['${paramType.paramName}'];
	    }

	    if (array_key_exists ( "invoiceType", $this->arrayResult )) {
	        $this->invoiceType = $arrayResult['${paramType.paramName}'];
	    }

	    if (array_key_exists ( "localInvoiceId", $this->arrayResult )) {
	        $this->localInvoiceId = $arrayResult['${paramType.paramName}'];
	    }

	    if (array_key_exists ( "orderId", $this->arrayResult )) {
	        $this->orderId = $arrayResult['${paramType.paramName}'];
	    }

	    if (array_key_exists ( "receiveCode", $this->arrayResult )) {
	        $this->receiveCode = $arrayResult['${paramType.paramName}'];
	    }

	    if (array_key_exists ( "receiveCodeText", $this->arrayResult )) {
	        $this->receiveCodeText = $arrayResult['${paramType.paramName}'];
	    }

	    if (array_key_exists ( "receiveMobile", $this->arrayResult )) {
	        $this->receiveMobile = $arrayResult['${paramType.paramName}'];
	    }

	    if (array_key_exists ( "receiveName", $this->arrayResult )) {
	        $this->receiveName = $arrayResult['${paramType.paramName}'];
	    }

	    if (array_key_exists ( "receivePhone", $this->arrayResult )) {
	        $this->receivePhone = $arrayResult['${paramType.paramName}'];
	    }

	    if (array_key_exists ( "receivePost", $this->arrayResult )) {
	        $this->receivePost = $arrayResult['${paramType.paramName}'];
	    }

	    if (array_key_exists ( "receiveStreet", $this->arrayResult )) {
	        $this->receiveStreet = $arrayResult['${paramType.paramName}'];
	    }

	    if (array_key_exists ( "registerAccountId", $this->arrayResult )) {
	        $this->registerAccountId = $arrayResult['${paramType.paramName}'];
	    }

	    if (array_key_exists ( "registerBank", $this->arrayResult )) {
	        $this->registerBank = $arrayResult['${paramType.paramName}'];
	    }

	    if (array_key_exists ( "registerCode", $this->arrayResult )) {
	        $this->registerCode = $arrayResult['${paramType.paramName}'];
	    }

	    if (array_key_exists ( "registerCodeText", $this->arrayResult )) {
	        $this->registerCodeText = $arrayResult['${paramType.paramName}'];
	    }

	    if (array_key_exists ( "registerPhone", $this->arrayResult )) {
	        $this->registerPhone = $arrayResult['${paramType.paramName}'];
	    }

	    if (array_key_exists ( "registerStreet", $this->arrayResult )) {
	        $this->registerStreet = $arrayResult['${paramType.paramName}'];
	    }

	    if (array_key_exists ( "taxpayerIdentify", $this->arrayResult )) {
	        $this->taxpayerIdentify = $arrayResult['${paramType.paramName}'];
	    }
	}
}
