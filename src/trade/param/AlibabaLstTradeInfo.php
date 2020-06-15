<?php

namespace com\aliaba\trade\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;


class AlibabaLstTradeInfo extends SDKDomain {


    private $lstWarehouseType;

    /**
     * @return mixed 零售通仓库类型。customer：虚仓；cainiao：实仓
     */
    public function getLstWarehouseType() {
        return $this->lstWarehouseType;
    }

    /**
     * 设置零售通仓库类型。customer：虚仓；cainiao：实仓
     * @param String $lstWarehouseType
     * 参数示例：<pre>cainiao</pre>
     * 此参数必填
	 */
    public function setLstWarehouseType( $lstWarehouseType) {
        $this->lstWarehouseType = $lstWarehouseType;
    }

	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;

		if (array_key_exists ( "lstWarehouseType", $this->stdResult )) {
			$this->lstWarehouseType = $this->stdResult->{"lstWarehouseType"};
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "lstWarehouseType", $this->arrayResult )) {
			$this->lstWarehouseType = $arrayResult['${paramType.paramName}'];
		}
	}
}
