<?php
namespace com\alibaba\china\openapi\client\example\param\apiexample;

use com\alibaba\china\openapi\example\apiexample\ExampleFamily;


class ExampleFamilyPostParam {

	/**
	 * @return mixed
	 */
	public function getFamily() {
        return $this->sdkStdResult["family"];
	}

	/**
	 * 设置上传Family对象信息
	 *
	 * @param ExampleFamily $family
	 * 参数示例：<pre></pre>
	 * 此参数必填
	 */
	public function setFamily(ExampleFamily $family) {
		$this->sdkStdResult["family"] = $family;
	}

	/**
	 * @return mixed
	 */
	public function getComments() {
		return $this->sdkStdResult["comments"];
	}

	/**
	 * 设置备注信息
	 *
	 * @param String $comments
	 *        	参数示例：<pre></pre>
	 *        	此参数必填
	 */
	public function setComments($comments) {
		$this->sdkStdResult["comments"] = $comments;
	}

	/**
	 * @return mixed
	 */
	public function getHouseImg() {
		return $this->sdkStdResult["houseImg"];
	}

	/**
	 * 设置房屋信息
	 * @param $houseImg array include @see Byte[] $houseImg
	 * 参数示例：<pre></pre>
	 * 此参数必填
	 */
	public function setHouseImg($houseImg) {
		$this->sdkStdResult["houseImg"] = $houseImg;
	}

	private $sdkStdResult = [];

	public function getSdkStdResult() {
		return $this->sdkStdResult;
	}
}
