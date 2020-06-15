<?php
namespace com\alibaba\china\openapi\client\example\param\apiexample;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;

class ExampleFamilyGetParam {

    /**
	 * 可接受参数1或者2，其余参数无法找到family对象
     * @return mixed
     */
	public function getFamilyNumber() {
		$tempResult = $this->sdkStdResult ["familyNumber"];
		return $tempResult;
	}

	/**
	 * 设置可接受参数1或者2，其余参数无法找到family对象
	 *
	 * @param Integer $familyNumber
	 *        	参数示例：<pre></pre>
	 *        	此参数必填
	 */
	public function setFamilyNumber($familyNumber) {
		$this->sdkStdResult ["familyNumber"] = $familyNumber;
	}

	private $sdkStdResult = [];

	public function getSdkStdResult() {
		return $this->sdkStdResult;
	}
}
