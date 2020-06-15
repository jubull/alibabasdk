<?php

namespace com\alibaba\trade\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use com\alibaba\trade\param\AlibabaTradeCustomsAttributesInfo;


class AlibabaTradeCustoms extends SDKDomain {


    private $id;

    /**
     * @return mixed id
     */
    public function getId() {
        return $this->id;
    }

    /**
     * 设置id
     * @param Long $id
     * 参数示例：<pre>1</pre>
     * 此参数必填
     */
    public function setId( $id) {
        $this->id = $id;
    }


    private $gmtCreate;

    /**
     * @return mixed 创建时间
     */
    public function getGmtCreate() {
        return $this->gmtCreate;
    }

    /**
     * 设置创建时间
     * @param Date $gmtCreate
     * 参数示例：<pre>20170806114526000+0800</pre>
     * 此参数必填
     */
    public function setGmtCreate( $gmtCreate) {
        $this->gmtCreate = $gmtCreate;
    }


    private $gmtModified;

    /**
     * @return mixed 修改时间
     */
    public function getGmtModified() {
        return $this->gmtModified;
    }

    /**
     * 设置修改时间
     * @param Date $gmtModified
     * 参数示例：<pre>20170806114526000+0800</pre>
     * 此参数必填
     */
    public function setGmtModified( $gmtModified) {
        $this->gmtModified = $gmtModified;
    }


    private $buyerId;

    /**
     * @return mixed 买家id
     */
    public function getBuyerId() {
        return $this->buyerId;
    }

    /**
     * 设置买家id
     * @param Long $buyerId
     * 参数示例：<pre>123456</pre>
     * 此参数必填
     */
    public function setBuyerId( $buyerId) {
        $this->buyerId = $buyerId;
    }


    private $orderId;

    /**
     * @return mixed 主订单id
     */
    public function getOrderId() {
        return $this->orderId;
    }

    /**
     * 设置主订单id
     * @param String $orderId
     * 参数示例：<pre>12312312312312</pre>
     * 此参数必填
     */
    public function setOrderId( $orderId) {
        $this->orderId = $orderId;
    }


    private $type;

    /**
     * @return mixed 业务数据类型,默认1：报关单
     */
    public function getType() {
        return $this->type;
    }

    /**
     * 设置业务数据类型,默认1：报关单
     * @param Integer $type
     * 参数示例：<pre>1</pre>
     * 此参数必填
     */
    public function setType( $type) {
        $this->type = $type;
    }


    private $attributes;

        /**
    * @return 报关信息列表
    */
        public function getAttributes() {
        return $this->attributes;
    }

    /**
     * 设置报关信息列表
     * @param \com\alibaba\trade\param\AlibabaTradeCustomsAttributesInfo $attributes
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setAttributes(AlibabaTradeCustomsAttributesInfo $attributes) {
        $this->attributes = $attributes;
    }


	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "id", $this->stdResult )) {
		    $this->id = $this->stdResult->{"id"};
		}
		if (array_key_exists ( "gmtCreate", $this->stdResult )) {
		    $this->gmtCreate = $this->stdResult->{"gmtCreate"};
		}
		if (array_key_exists ( "gmtModified", $this->stdResult )) {
		    $this->gmtModified = $this->stdResult->{"gmtModified"};
		}
		if (array_key_exists ( "buyerId", $this->stdResult )) {
		    $this->buyerId = $this->stdResult->{"buyerId"};
		}
		if (array_key_exists ( "orderId", $this->stdResult )) {
		    $this->orderId = $this->stdResult->{"orderId"};
		}
		if (array_key_exists ( "type", $this->stdResult )) {
		    $this->type = $this->stdResult->{"type"};
		}
		if (array_key_exists ( "attributes", $this->stdResult )) {
		    $attributesResult=$this->stdResult->{"attributes"};
		    $object = json_decode ( json_encode ( $attributesResult ), true );
		    $this->attributes = array ();
		    for($i = 0; $i < count ( $object ); $i ++) {
		        $arrayobject = new \ArrayObject($object[$i]);
		        $AlibabaTradeCustomsAttributesInfoResult=new AlibabaTradeCustomsAttributesInfo();
		        $AlibabaTradeCustomsAttributesInfoResult->setArrayResult($arrayobject );
		        $this->attributes [$i] = $AlibabaTradeCustomsAttributesInfoResult;
		    }
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;

		if (array_key_exists ( "id", $this->arrayResult )) {
		    $this->id = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "gmtCreate", $this->arrayResult )) {
		    $this->gmtCreate = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "gmtModified", $this->arrayResult )) {
		    $this->gmtModified = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "buyerId", $this->arrayResult )) {
		    $this->buyerId = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "orderId", $this->arrayResult )) {
		    $this->orderId = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "type", $this->arrayResult )) {
		    $this->type = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "attributes", $this->arrayResult )) {
    		$attributesResult=$arrayResult['${paramType.paramName}'];
    		$this->attributes = new AlibabaTradeCustomsAttributesInfo();
    		$this->attributes->setStdResult ( $attributesResult);
		}
	}
}
