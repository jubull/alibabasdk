<?php

namespace com\alibaba\trade\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;


class AlibabaOpenplatformTradeModelTradeTermsInfo extends SDKDomain {


    private $payStatus;

    /**
     * @return mixed 支付状态。
     * 国际站：
     *  WAIT_PAY(未支付),
     *  PAYER_PAID(已完成支付),
     *  PART_SUCCESS(部分支付成功),
     *  PAY_SUCCESS(支付成功),
     *  CLOSED(风控关闭),
     *  CANCELLED(支付撤销),
     *  SUCCESS(成功),
     *  FAIL(失败)。
     * 1688:
     *  1(未付款);
     *  2(已付款);
     *  4(全额退款);
     *  6(卖家有收到钱，回款完成) ;
     *  7(未创建外部支付单);
     *  8 (付款前取消) ;
     *  9(正在支付中);
     *  12(账期支付,待到账)
     */
    public function getPayStatus() {
        return $this->payStatus;
    }

    /**
     * 设置支付状态。
     * 国际站：
     *  WAIT_PAY(未支付),
     *  PAYER_PAID(已完成支付),
     *  PART_SUCCESS(部分支付成功),
     *  PAY_SUCCESS(支付成功),
     *  CLOSED(风控关闭),
     *  CANCELLED(支付撤销),
     *  SUCCESS(成功),
     *  FAIL(失败)。
     * 1688:
     *  1(未付款);
     *  2(已付款);
     *  4(全额退款);
     *  6(卖家有收到钱，回款完成) ;
     *  7(未创建外部支付单);
     *  8 (付款前取消) ;
     *  9(正在支付中);
     *  12(账期支付,待到账)
     * @param String $payStatus
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setPayStatus( $payStatus) {
        $this->payStatus = $payStatus;
    }


    private $payTime;

    /**
     * @return mixed 完成阶段支付时间
     */
    public function getPayTime() {
        return $this->payTime;
    }

    /**
     * 设置完成阶段支付时间
     * @param Date $payTime
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setPayTime( $payTime) {
        $this->payTime = $payTime;
    }


    private $payWay;

    /**
     * @return mixed 支付方式。
     * 国际站：
     *  ECL(融资支付),
     *  CC(信用卡),
     *  TT(线下TT),
     *  ACH(echecking支付)
     * 1688:
     *  1-支付宝,
     *  2-网商银行信任付,
     *  3-诚e赊,
     *  4-银行转账,
     *  5-赊销宝,
     *  6-电子承兑票据,
     *  7-账期支付,
     *  8-合并支付渠道,
     *  9-无打款,
     *  10-零售通赊购,
     *  13-支付平台,
     *  12-声明付款
     */
        public function getPayWay() {
        return $this->payWay;
    }

    /**
     * 设置支付方式。
     *
     * 国际站：
     *  ECL(融资支付),
     *  CC(信用卡),
     *  TT(线下TT),
     *  ACH(echecking支付)
     * 1688:
     *  1-支付宝,
     *  2-网商银行信任付,
     *  3-诚e赊,
     *  4-银行转账,
     *  5-赊销宝,
     *  6-电子承兑票据,
     *  7-账期支付,
     *  8-合并支付渠道,
     *  9-无打款,
     *  10-零售通赊购,
     *  13-支付平台,
     *  12-声明付款
     * @param String $payWay
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setPayWay( $payWay) {
        $this->payWay = $payWay;
    }


    private $phasAmount;

    /**
     * @return mixed 付款额
     */
    public function getPhasAmount() {
        return $this->phasAmount;
    }

    /**
     * 设置付款额
     * @param BigDecimal $phasAmount
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setPhasAmount( $phasAmount) {
        $this->phasAmount = $phasAmount;
    }


    private $phase;

    /**
     * @return mixed 阶段单id
     */
    public function getPhase() {
        return $this->phase;
    }

    /**
     * 设置阶段单id
     * @param Long $phase
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setPhase( $phase) {
        $this->phase = $phase;
    }


    private $phaseCondition;

    /**
     * @return mixed 阶段条件，1688无此内容
     */
    public function getPhaseCondition() {
        return $this->phaseCondition;
    }

    /**
     * 设置阶段条件，1688无此内容
     * @param String $phaseCondition
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setPhaseCondition( $phaseCondition) {
        $this->phaseCondition = $phaseCondition;
    }


    private $phaseDate;

    /**
     * @return mixed 阶段时间，1688无此内容
     */
    public function getPhaseDate() {
        return $this->phaseDate;
    }

    /**
     * 设置阶段时间，1688无此内容
     * @param String $phaseDate
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setPhaseDate( $phaseDate) {
        $this->phaseDate = $phaseDate;
    }


    private $cardPay;

    /**
     * @return mixed 是否银行卡支付
     */
    public function getCardPay() {
        return $this->cardPay;
    }

    /**
     * 设置是否银行卡支付
     * @param Boolean $cardPay
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setCardPay( $cardPay) {
        $this->cardPay = $cardPay;
    }


    private $expressPay;

    /**
     * @return mixed 是否快捷支付
     */
    public function getExpressPay() {
        return $this->expressPay;
    }

    /**
     * 设置是否快捷支付
     * @param Boolean $expressPay
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setExpressPay( $expressPay) {
        $this->expressPay = $expressPay;
    }


	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "payStatus", $this->stdResult )) {
		    $this->payStatus = $this->stdResult->{"payStatus"};
		}
		if (array_key_exists ( "payTime", $this->stdResult )) {
		    $this->payTime = $this->stdResult->{"payTime"};
		}
		if (array_key_exists ( "payWay", $this->stdResult )) {
		    $this->payWay = $this->stdResult->{"payWay"};
		}
		if (array_key_exists ( "phasAmount", $this->stdResult )) {
		    $this->phasAmount = $this->stdResult->{"phasAmount"};
		}
		if (array_key_exists ( "phase", $this->stdResult )) {
		    $this->phase = $this->stdResult->{"phase"};
		}
		if (array_key_exists ( "phaseCondition", $this->stdResult )) {
		    $this->phaseCondition = $this->stdResult->{"phaseCondition"};
		}
		if (array_key_exists ( "phaseDate", $this->stdResult )) {
		    $this->phaseDate = $this->stdResult->{"phaseDate"};
		}
		if (array_key_exists ( "cardPay", $this->stdResult )) {
		    $this->cardPay = $this->stdResult->{"cardPay"};
		}
		if (array_key_exists ( "expressPay", $this->stdResult )) {
		    $this->expressPay = $this->stdResult->{"expressPay"};
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "payStatus", $this->arrayResult )) {
		    $this->payStatus = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "payTime", $this->arrayResult )) {
		    $this->payTime = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "payWay", $this->arrayResult )) {
		    $this->payWay = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "phasAmount", $this->arrayResult )) {
		    $this->phasAmount = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "phase", $this->arrayResult )) {
		    $this->phase = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "phaseCondition", $this->arrayResult )) {
		    $this->phaseCondition = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "phaseDate", $this->arrayResult )) {
		    $this->phaseDate = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "cardPay", $this->arrayResult )) {
		    $this->cardPay = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "expressPay", $this->arrayResult )) {
		    $this->expressPay = $arrayResult['${paramType.paramName}'];
		}
	}
}
