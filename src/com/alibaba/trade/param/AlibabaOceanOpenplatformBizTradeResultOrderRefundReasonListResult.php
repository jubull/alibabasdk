<?php

namespace com\alibaba\trade\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use com\aliaba\trade\param\AlibabaOceanOpenplatformBizTradeResultOrderRefundReasonModel;


class AlibabaOceanOpenplatformBizTradeResultOrderRefundReasonListResult extends SDKDomain {


    private $reasons;

	/**
	 * @return mixed 退款退货原因
	 */
    public function getReasons() {
        return $this->reasons;
    }

	/**
	 * 设置退款退货原因
	 * @param \com\aliaba\trade\param\AlibabaOceanOpenplatformBizTradeResultOrderRefundReasonModel $reasons
	 * 参数示例：<pre>1</pre>
	 * 此参数必填
	 */
    public function setReasons(AlibabaOceanOpenplatformBizTradeResultOrderRefundReasonModel $reasons) {
        $this->reasons = $reasons;
    }

	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "reasons", $this->stdResult )) {
			$reasonsResult=$this->stdResult->{"reasons"};
			$object = json_decode ( json_encode ( $reasonsResult ), true );
			$this->reasons = array ();
			for($i = 0; $i < count ( $object ); $i ++) {
				$arrayobject = new \ArrayObject($object[$i]);
				$AlibabaOceanOpenplatformBizTradeResultOrderRefundReasonModelResult=new AlibabaOceanOpenplatformBizTradeResultOrderRefundReasonModel();
				$AlibabaOceanOpenplatformBizTradeResultOrderRefundReasonModelResult->setArrayResult($arrayobject );
				$this->reasons[$i] = $AlibabaOceanOpenplatformBizTradeResultOrderRefundReasonModelResult;
			}
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "reasons", $this->arrayResult )) {
    		$reasonsResult=$arrayResult['${paramType.paramName}'];
    			$this->reasons = new AlibabaOceanOpenplatformBizTradeResultOrderRefundReasonModel();
    			$this->reasons->setStdResult ( $reasonsResult);
    		}
	}
}
