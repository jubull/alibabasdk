<?php

namespace com\alibaba\trade\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;


class AlibabaOrderPreOrderForRead extends SDKDomain {


    private $appkey;

    /**
     * @return mixed 创建预订单的appkey
     */
    public function getAppkey() {
        return $this->appkey;
    }

    /**
     * 设置创建预订单的appkey
     * @param String $appkey
     * 参数示例：<pre>12345</pre>
     * 此参数必填
     */
    public function setAppkey( $appkey) {
        $this->appkey = $appkey;
    }


    private $marketName;

    /**
     * @return mixed 创建预订单时传入的市场名
     */
    public function getMarketName() {
        return $this->marketName;
    }

    /**
     * 设置创建预订单时传入的市场名
     * @param String $marketName
     * 参数示例：<pre>dxc</pre>
     * 此参数必填
     */
    public function setMarketName( $marketName) {
        $this->marketName = $marketName;
    }


    private $createPreOrderApp;

    /**
     * @return mixed 预订单是否为当前查询的通过当前查询的ERP创建
     */
    public function getCreatePreOrderApp() {
        return $this->createPreOrderApp;
    }

    /**
     * 设置预订单是否为当前查询的通过当前查询的ERP创建
     * @param Boolean $createPreOrderApp
     * 参数示例：<pre>false</pre>
     * 此参数必填
     */
    public function setCreatePreOrderApp( $createPreOrderApp) {
        $this->createPreOrderApp = $createPreOrderApp;
    }


	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "appkey", $this->stdResult )) {
		    $this->appkey = $this->stdResult->{"appkey"};
		}
		if (array_key_exists ( "marketName", $this->stdResult )) {
		    $this->marketName = $this->stdResult->{"marketName"};
		}
		if (array_key_exists ( "createPreOrderApp", $this->stdResult )) {
		    $this->createPreOrderApp = $this->stdResult->{"createPreOrderApp"};
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "appkey", $this->arrayResult )) {
		    $this->appkey = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "marketName", $this->arrayResult )) {
		    $this->marketName = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "createPreOrderApp", $this->arrayResult )) {
		    $this->createPreOrderApp = $arrayResult['${paramType.paramName}'];
		}
	}
}
