<?php

namespace com\alibaba\product\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;


class AlibabaChildCategoryInfo extends SDKDomain
{


	private $id;

	/**
	 * @return mixed 子类目ID
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * 设置子类目ID
	 * @param Long $id
	 * 参数示例：<pre></pre>
	 * 此参数必填
	 */
	public function setId($id)
	{
		$this->id = $id;
	}


	private $name;

	/**
	 * @return mixed 子类目名称
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * 设置子类目名称
	 * @param String $name
	 * 参数示例：<pre></pre>
	 * 此参数必填
	 */
	public function setName($name)
	{
		$this->name = $name;
	}


	private $stdResult;

	public function setStdResult($stdResult)
	{
		$this->stdResult = $stdResult;
		if (array_key_exists("id", $this->stdResult)) {
			$this->id = $this->stdResult->{"id"};
		}
		if (array_key_exists("name", $this->stdResult)) {
			$this->name = $this->stdResult->{"name"};
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult)
	{
		$this->arrayResult = $arrayResult;
		if (array_key_exists("id", $this->arrayResult)) {
			$this->id = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists("name", $this->arrayResult)) {
			$this->name = $arrayResult['${paramType.paramName}'];
		}
	}
}
