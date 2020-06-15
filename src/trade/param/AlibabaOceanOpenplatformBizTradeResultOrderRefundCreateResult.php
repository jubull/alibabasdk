<?php

namespace com\alibaba\trade\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;


class AlibabaOceanOpenplatformBizTradeResultOrderRefundCreateResult extends SDKDomain {


    private $refundId;

    /**
     * @return mixed 创建成功，退款id
     */
    public function getRefundId() {
        return $this->refundId;
    }

    /**
     * 设置创建成功，退款id
     * @param String $refundId
     * 参数示例：<pre>1</pre>
     * 此参数必填
	 */
    public function setRefundId( $refundId) {
        $this->refundId = $refundId;
    }

	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "refundId", $this->stdResult )) {
			$this->refundId = $this->stdResult->{"refundId"};
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "refundId", $this->arrayResult )) {
			$this->refundId = $arrayResult['${paramType.paramName}'];
		}
	}
}
