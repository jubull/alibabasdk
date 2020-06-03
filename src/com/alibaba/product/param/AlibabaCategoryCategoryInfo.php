<?php

namespace com\alibaba\product\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use com\alibaba\product\param\AlibabaChildCategoryInfo;


class AlibabaCategoryCategoryInfo extends SDKDomain {


    private $categoryID;

    /**
     * @return mixed 类目ID
     */
    public function getCategoryID() {
        return $this->categoryID;
    }

    /**
     * 设置类目ID
     * @param Long $categoryID
     * 参数示例：<pre>123456</pre>
     * 此参数必填
     */
    public function setCategoryID( $categoryID) {
        $this->categoryID = $categoryID;
    }


    private $name;

    /**
     * @return mixed 类目名称
     */
    public function getName() {
        return $this->name;
    }

    /**
     * 设置类目名称
     * @param String $name
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setName( $name) {
        $this->name = $name;
    }


    private $level;

    /**
     * @return mixed 类目层级，1688无此内容
     */
    public function getLevel() {
        return $this->level;
    }

    /**
     * 设置类目层级，1688无此内容
     * @param Integer $level
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setLevel( $level) {
        $this->level = $level;
    }


    private $isLeaf;

    /**
     * @return mixed 是否叶子类目（只有叶子类目才能发布商品）
     */
    public function getIsLeaf() {
        return $this->isLeaf;
    }

    /**
     * 设置是否叶子类目（只有叶子类目才能发布商品）
     * @param Boolean $isLeaf
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setIsLeaf( $isLeaf) {
        $this->isLeaf = $isLeaf;
    }


    private $parentIDs;

    /**
     * @return mixed 父类目ID数组,1688只返回一个父id
     */
    public function getParentIDs() {
        return $this->parentIDs;
    }

    /**
     * 设置父类目ID数组,1688只返回一个父id
     * @param array include @see Long[] $parentIDs
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setParentIDs( $parentIDs) {
        $this->parentIDs = $parentIDs;
    }


    private $childIDs;

    /**
     * @return mixed 子类目ID数组，1688无此内容
     */
    public function getChildIDs() {
        return $this->childIDs;
    }

    /**
     * 设置子类目ID数组，1688无此内容
     * @param array include @see Long[] $childIDs
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setChildIDs( $childIDs) {
        $this->childIDs = $childIDs;
    }


    private $childCategorys;

    /**
     * @return mixed 子类目信息
     */
    public function getChildCategorys() {
        return $this->childCategorys;
    }

    /**
     * 设置子类目信息
     * @param \com\alibaba\product\param\AlibabaChildCategoryInfo $childCategorys
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setChildCategorys(AlibabaChildCategoryInfo $childCategorys) {
        $this->childCategorys = $childCategorys;
    }


	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "categoryID", $this->stdResult )) {
		    $this->categoryID = $this->stdResult->{"categoryID"};
		}
		if (array_key_exists ( "name", $this->stdResult )) {
		    $this->name = $this->stdResult->{"name"};
		}
		if (array_key_exists ( "level", $this->stdResult )) {
		    $this->level = $this->stdResult->{"level"};
		}
		if (array_key_exists ( "isLeaf", $this->stdResult )) {
		    $this->isLeaf = $this->stdResult->{"isLeaf"};
		}
		if (array_key_exists ( "parentIDs", $this->stdResult )) {
		    $this->parentIDs = $this->stdResult->{"parentIDs"};
		}
		if (array_key_exists ( "childIDs", $this->stdResult )) {
		    $this->childIDs = $this->stdResult->{"childIDs"};
		}
		if (array_key_exists ( "childCategorys", $this->stdResult )) {
		    $childCategorysResult=$this->stdResult->{"childCategorys"};
		    $object = json_decode(json_encode($childCategorysResult),true);
		    $this->childCategorys = array ();
		    for($i = 0; $i < count ( $object ); $i ++) {
		        $arrayobject = new \ArrayObject($object[$i]);
		        $AlibabaChildCategoryInfoResult=new AlibabaChildCategoryInfo();
		        $AlibabaChildCategoryInfoResult->setArrayResult($arrayobject );
		        $this->childCategorys [$i] = $AlibabaChildCategoryInfoResult;
		    }
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
	    $this->arrayResult = $arrayResult;
	    if (array_key_exists ( "categoryID", $this->arrayResult )) {
	        $this->categoryID = $arrayResult['${paramType.paramName}'];
	    }
	    if (array_key_exists ( "name", $this->arrayResult )) {
	        $this->name = $arrayResult['${paramType.paramName}'];
	    }
	    if (array_key_exists ( "level", $this->arrayResult )) {
	        $this->level = $arrayResult['${paramType.paramName}'];
	    }
	    if (array_key_exists ( "isLeaf", $this->arrayResult )) {
	        $this->isLeaf = $arrayResult['${paramType.paramName}'];
	    }
	    if (array_key_exists ( "parentIDs", $this->arrayResult )) {
	        $this->parentIDs = $arrayResult['${paramType.paramName}'];
	    }
	    if (array_key_exists ( "childIDs", $this->arrayResult )) {
	        $this->childIDs = $arrayResult['${paramType.paramName}'];
	    }
	    if (array_key_exists ( "childCategorys", $this->arrayResult )) {
    		$childCategorysResult=$arrayResult['${paramType.paramName}'];
    		$this->childCategorys = new AlibabaChildCategoryInfo();
    		$this->childCategorys->setStdResult ( $childCategorysResult);
	    }
	}
}
