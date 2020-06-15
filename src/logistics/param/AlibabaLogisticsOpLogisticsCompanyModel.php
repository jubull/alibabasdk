<?php

namespace com\alibaba\logistics\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;


class AlibabaLogisticsOpLogisticsCompanyModel extends SDKDomain {


    private $id;

    /**
     * @return mixed
     */
    public function getId() {
        return $this->id;
    }

    /**
     * 设置
     * @param Long $id
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setId( $id) {
        $this->id = $id;
    }


    private $companyName;

    /**
     * @return mixed 物流公司名称
     */
    public function getCompanyName() {
        return $this->companyName;
    }

    /**
     * 设置物流公司名称
     * @param String $companyName
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setCompanyName( $companyName) {
        $this->companyName = $companyName;
    }


    private $companyNo;

    /**
     * @return mixed 物流公司编号
     */
    public function getCompanyNo() {
        return $this->companyNo;
    }

    /**
     * 设置物流公司编号
     * @param String $companyNo
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setCompanyNo( $companyNo) {
        $this->companyNo = $companyNo;
    }


    private $companyPhone;

        /**
    * @return 物流公司服务电话
    */
        public function getCompanyPhone() {
        return $this->companyPhone;
    }

    /**
     * 设置物流公司服务电话
     * @param String $companyPhone
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setCompanyPhone( $companyPhone) {
        $this->companyPhone = $companyPhone;
    }


    private $supportPrint;

    /**
     * @return mixed 是否支持打印
     */
    public function getSupportPrint() {
        return $this->supportPrint;
    }

    /**
     * 设置是否支持打印
     * @param String $supportPrint
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setSupportPrint( $supportPrint) {
        $this->supportPrint = $supportPrint;
    }


    private $spelling;

    /**
     * @return mixed 全拼
     */
    public function getSpelling() {
        return $this->spelling;
    }

    /**
     * 设置全拼
     * @param String $spelling
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setSpelling( $spelling) {
        $this->spelling = $spelling;
    }


	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;

		if (array_key_exists ( "id", $this->stdResult )) {
		    $this->id = $this->stdResult->{"id"};
		}

		if (array_key_exists("companyName", $this->stdResult)) {
		    $this->companyName = $this->stdResult->{"companyName"};
		}

		if (array_key_exists ( "companyNo", $this->stdResult )) {
		    $this->companyNo = $this->stdResult->{"companyNo"};
		}

		if (array_key_exists ( "companyPhone", $this->stdResult )) {
		    $this->companyPhone = $this->stdResult->{"companyPhone"};
		}

		if (array_key_exists ( "supportPrint", $this->stdResult )) {
		    $this->supportPrint = $this->stdResult->{"supportPrint"};
		}

		if (array_key_exists ( "spelling", $this->stdResult )) {
		    $this->spelling = $this->stdResult->{"spelling"};
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;

		if (array_key_exists ( "id", $this->arrayResult )) {
		    $this->id = $arrayResult['${paramType.paramName}'];
		}

		if (array_key_exists ( "companyName", $this->arrayResult )) {
		    $this->companyName = $arrayResult['${paramType.paramName}'];
		}

		if (array_key_exists ( "companyNo", $this->arrayResult )) {
		    $this->companyNo = $arrayResult['${paramType.paramName}'];
		}

		if (array_key_exists ( "companyPhone", $this->arrayResult )) {
		    $this->companyPhone = $arrayResult['${paramType.paramName}'];
		}

		if (array_key_exists ( "supportPrint", $this->arrayResult )) {
		    $this->supportPrint = $arrayResult['${paramType.paramName}'];
		}

		if (array_key_exists ( "spelling", $this->arrayResult )) {
		    $this->spelling = $arrayResult['${paramType.paramName}'];
		}
	}
}
