<?php

namespace com\alibaba\trade\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;


class AlibabaTradeAddressCode extends SDKDomain {


    private $code;

    /**
     * @return mixed 地区编码
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * 设置地区编码
     * @param String $code
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setCode( $code) {
        $this->code = $code;
    }


    private $name;

    /**
     * @return mixed 地区名称
     */
    public function getName() {
        return $this->name;
    }

    /**
     * 设置地区名称
     * @param String $name
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setName( $name) {
        $this->name = $name;
    }


    private $parentCode;

    /**
     * @return mixed 父节点编码，可能为空
     */
    public function getParentCode() {
        return $this->parentCode;
    }

    /**
     * 设置父节点编码，可能为空
     * @param String $parentCode
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setParentCode( $parentCode) {
        $this->parentCode = $parentCode;
    }


    private $post;

    /**
     * @return mixed 邮编
     */
    public function getPost() {
        return $this->post;
    }

    /**
     * 设置邮编
     * @param String $post
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setPost( $post) {
        $this->post = $post;
    }


    private $children;

    /**
     * @return mixed 下一级编码列表，可能为空
     */
    public function getChildren() {
        return $this->children;
    }

    /**
     * 设置下一级编码列表，可能为空
     * @param array include @see String[] $children
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setChildren( $children) {
        $this->children = $children;
    }


	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "code", $this->stdResult )) {
		    $this->code = $this->stdResult->{"code"};
		}
		if (array_key_exists ( "name", $this->stdResult )) {
		    $this->name = $this->stdResult->{"name"};
		}
		if (array_key_exists ( "parentCode", $this->stdResult )) {
		    $this->parentCode = $this->stdResult->{"parentCode"};
		}
		if (array_key_exists ( "post", $this->stdResult )) {
		    $this->post = $this->stdResult->{"post"};
		}
		if (array_key_exists ( "children", $this->stdResult )) {
		    $this->children = $this->stdResult->{"children"};
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "code", $this->arrayResult )) {
		    $this->code = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "name", $this->arrayResult )) {
		    $this->name = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "parentCode", $this->arrayResult )) {
		    $this->parentCode = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "post", $this->arrayResult )) {
		    $this->post = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "children", $this->arrayResult )) {
		    $this->children = $arrayResult['${paramType.paramName}'];
		}
	}
}
