<?php

namespace com\alibaba\trade\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;


class AlibabaTradeSkuItemDesc extends SDKDomain {


    private $name;

    /**
     * @return mixed 属性名
     */
    public function getName() {
        return $this->name;
    }

    /**
     * 设置属性名
     * @param String $name
     * 参数示例：<pre></pre>
     * 此参数必填
	 */
    public function setName( $name) {
        $this->name = $name;
    }


    private $value;

	/**
	 * @return mixed 属性值
	 */
    public function getValue() {
        return $this->value;
    }

    /**
     * 设置属性值
     * @param String $value
     * 参数示例：<pre></pre>
     * 此参数必填
	 */
    public function setValue( $value) {
        $this->value = $value;
    }


	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "name", $this->stdResult )) {
			$this->name = $this->stdResult->{"name"};
		}
		if (array_key_exists ( "value", $this->stdResult )) {
			$this->value = $this->stdResult->{"value"};
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "name", $this->arrayResult )) {
			$this->name = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "value", $this->arrayResult )) {
			$this->value = $arrayResult['${paramType.paramName}'];
		}
	}
}
