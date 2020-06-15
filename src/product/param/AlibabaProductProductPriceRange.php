<?php

namespace com\alibaba\product\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;

class AlibabaProductProductPriceRange extends SDKDomain {


    private $startQuantity;

    /**
     * @return mixed 起批量
     */
    public function getStartQuantity() {
        return $this->startQuantity;
    }

    /**
     * 设置起批量
     * @param Integer $startQuantity
     * 参数示例：<pre>3</pre>
     * 此参数必填
	 */
    public function setStartQuantity( $startQuantity) {
        $this->startQuantity = $startQuantity;
    }


    private $price;

	/**
	 * @return mixed 价格
	 */
	public function getPrice() {
        return $this->price;
    }

    /**
     * 设置价格
     * @param Double $price
     * 参数示例：<pre>445</pre>
     * 此参数必填
	 */
    public function setPrice( $price) {
        $this->price = $price;
    }


	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "startQuantity", $this->stdResult )) {
			$this->startQuantity = $this->stdResult->{"startQuantity"};
		}
		if (array_key_exists ( "price", $this->stdResult )) {
			$this->price = $this->stdResult->{"price"};
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "startQuantity", $this->arrayResult )) {
			$this->startQuantity = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "price", $this->arrayResult )) {
			$this->price = $arrayResult['${paramType.paramName}'];
		}
	}
}
