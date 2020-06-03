<?php

namespace com\aliaba\trade\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;


class AlibabaOceanOpenplatformBizTradeCommonModelOrderEntryCountModel extends SDKDomain {
    private $id;

    /**
     * @return mixed 子订单id
     */
    public function getId() {
        return $this->id;
    }

    /**
     * 设置子订单id
     * @param Long $id
     * 参数示例：<pre>1</pre>
     * 此参数必填
	 */
    public function setId( $id) {
        $this->id = $id;
    }


    private $count;

	/**
	 * @return mixed 子订单购买商品数量
	 */
    public function getCount() {
        return $this->count;
    }

    /**
     * 设置子订单购买商品数量
     * @param Integer $count
     * 参数示例：<pre>1</pre>
     * 此参数必填
	 */
    public function setCount( $count) {
        $this->count = $count;
    }

	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;

		if (array_key_exists ( "id", $this->stdResult )) {
			$this->id = $this->stdResult->{"id"};
		}
		if (array_key_exists ( "count", $this->stdResult )) {
			$this->count = $this->stdResult->{"count"};
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "id", $this->arrayResult )) {
			$this->id = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "count", $this->arrayResult )) {
			$this->count = $arrayResult['${paramType.paramName}'];
		}
	}
}
