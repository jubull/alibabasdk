<?php

namespace com\alibaba\product\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;


class AlibabaProductDeliverySysRateDTO extends SDKDomain {


    private $firstUnit;

    /**
     * @return mixed 首重（单位：克）或首件（单位：件）
     */
    public function getFirstUnit() {
        return $this->firstUnit;
    }

    /**
     * 设置首重（单位：克）或首件（单位：件）
     * @param Long $firstUnit
     * 参数示例：<pre>1</pre>
     * 此参数必填
     */
    public function setFirstUnit( $firstUnit) {
        $this->firstUnit = $firstUnit;
    }


    private $firstUnitFee;

    /**
     * @return mixed 首重或首件的价格（单位：分）
     */
    public function getFirstUnitFee() {
        return $this->firstUnitFee;
    }

    /**
     * 设置首重或首件的价格（单位：分）
     * @param Long $firstUnitFee
     * 参数示例：<pre>600</pre>
     * 此参数必填
     */
    public function setFirstUnitFee( $firstUnitFee) {
        $this->firstUnitFee = $firstUnitFee;
    }


    private $leastExpenses;

    /**
     * @return mixed 最低一票
     */
    public function getLeastExpenses() {
        return $this->leastExpenses;
    }

    /**
     * 设置最低一票
     * @param Long $leastExpenses
     * 参数示例：<pre>1</pre>
     * 此参数必填
     */
    public function setLeastExpenses( $leastExpenses) {
        $this->leastExpenses = $leastExpenses;
    }


    private $nextUnit;

    /**
     * @return mixed 续重（单位：克）或续件（单位：件）单位
     */
    public function getNextUnit() {
        return $this->nextUnit;
    }

    /**
     * 设置续重（单位：克）或续件（单位：件）单位
     * @param Long $nextUnit
     * 参数示例：<pre>1</pre>
     * 此参数必填
     */
    public function setNextUnit( $nextUnit) {
        $this->nextUnit = $nextUnit;
    }


    private $nextUnitFee;

    /**
     * @return mixed 续重件价格（单位：分）
     */
    public function getNextUnitFee() {
        return $this->nextUnitFee;
    }

    /**
     * 设置续重件价格（单位：分）
     * @param Long $nextUnitFee
     * 参数示例：<pre>100</pre>
     * 此参数必填
     */
    public function setNextUnitFee( $nextUnitFee) {
        $this->nextUnitFee = $nextUnitFee;
    }


	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "firstUnit", $this->stdResult )) {
		    $this->firstUnit = $this->stdResult->{"firstUnit"};
		}
		if (array_key_exists ( "firstUnitFee", $this->stdResult )) {
		    $this->firstUnitFee = $this->stdResult->{"firstUnitFee"};
		}
		if (array_key_exists ( "leastExpenses", $this->stdResult )) {
		    $this->leastExpenses = $this->stdResult->{"leastExpenses"};
		}
		if (array_key_exists ( "nextUnit", $this->stdResult )) {
		    $this->nextUnit = $this->stdResult->{"nextUnit"};
		}
		if (array_key_exists ( "nextUnitFee", $this->stdResult )) {
		    $this->nextUnitFee = $this->stdResult->{"nextUnitFee"};
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "firstUnit", $this->arrayResult )) {
		    $this->firstUnit = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "firstUnitFee", $this->arrayResult )) {
		    $this->firstUnitFee = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "leastExpenses", $this->arrayResult )) {
		    $this->leastExpenses = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "nextUnit", $this->arrayResult )) {
		    $this->nextUnit = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "nextUnitFee", $this->arrayResult )) {
		    $this->nextUnitFee = $arrayResult['${paramType.paramName}'];
		}
	}
}
