<?php

namespace com\aliaba\trade\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;

class AlibabaOceanOpenplatformBizTradeResultOrderRefundReasonModel extends SDKDomain {


    private $id;

    /**
     * @return mixed 原因id
     */
    public function getId() {
        return $this->id;
    }

    /**
     * 设置 原因id
     * @param Long $id
     * 参数示例：<pre>1</pre>
     * 此参数必填
     */
    public function setId( $id) {
        $this->id = $id;
    }


    private $name;

    /**
     * @return mixed 原因名称
     */
    public function getName() {
        return $this->name;
    }

    /**
     * 设置原因名称
     * @param String $name
     * 参数示例：<pre>1</pre>
     * 此参数必填
     */
    public function setName( $name) {
        $this->name = $name;
    }

	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "id", $this->stdResult )) {
		    $this->id = $this->stdResult->{"id"};
		}
		if (array_key_exists ( "name", $this->stdResult )) {
		    $this->name = $this->stdResult->{"name"};
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "id", $this->arrayResult )) {
		    $this->id = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "name", $this->arrayResult )) {
		    $this->name = $arrayResult['${paramType.paramName}'];
		}
	}
}
