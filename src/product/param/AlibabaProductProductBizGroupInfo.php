<?php

namespace com\alibaba\product\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;


class AlibabaProductProductBizGroupInfo extends SDKDomain {


    private $support;

    /**
     * @return mixed 是否支持
     */
    public function getSupport() {
        return $this->support;
    }

    /**
     * 设置是否支持
     * @param Boolean $support
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setSupport( $support) {
        $this->support = $support;
    }


    private $description;

    /**
     * @return mixed 垂直市场名字，如微供市场、货品市场
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * 设置垂直市场名字，如微供市场、货品市场
     * @param String $description
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setDescription( $description) {
        $this->description = $description;
    }


    private $code;

    /**
     * @return mixed 垂直市场标记
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * 设置垂直市场标记
     * @param String $code
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setCode( $code) {
        $this->code = $code;
    }


	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "support", $this->stdResult )) {
		    $this->support = $this->stdResult->{"support"};
		}
		if (array_key_exists ( "description", $this->stdResult )) {
		    $this->description = $this->stdResult->{"description"};
		}
		if (array_key_exists ( "code", $this->stdResult )) {
		    $this->code = $this->stdResult->{"code"};
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "support", $this->arrayResult )) {
		    $this->support = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "description", $this->arrayResult )) {
		    $this->description = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "code", $this->arrayResult )) {
		    $this->code = $arrayResult['${paramType.paramName}'];
		}
	}
}
