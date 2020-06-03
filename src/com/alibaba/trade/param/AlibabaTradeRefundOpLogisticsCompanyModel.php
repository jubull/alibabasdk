<?php
namespace com\alibaba\trade\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;

class AlibabaTradeRefundOpLogisticsCompanyModel extends SDKDomain {


    private $companyName;

    /**
     * @return mixed 快递公司名
     */
    public function getCompanyName() {
        return $this->companyName;
    }

    /**
     * 设置快递公司名
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
     * @return mixed 物流公司服务电话
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
     * 参数示例：<pre></pre>
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
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setGmtModified( $gmtModified) {
        $this->gmtModified = $gmtModified;
    }


    private $id;

    /**
     * @return mixed ID
     */
    public function getId() {
        return $this->id;
    }

    /**
     * 设置ID
     * @param Long $id
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setId( $id) {
        $this->id = $id;
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


    private $supportPrint;

    /**
     * @return mixed 是否支持打印
     */
    public function getSupportPrint() {
        return $this->supportPrint;
    }

    /**
     * 设置是否支持打印
     * @param Boolean $supportPrint
     * 参数示例：<pre></pre>
     * 此参数必填
     */
    public function setSupportPrint( $supportPrint) {
        $this->supportPrint = $supportPrint;
    }


	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
		if (array_key_exists ( "companyName", $this->stdResult )) {
		    $this->companyName = $this->stdResult->{"companyName"};
		}
		if (array_key_exists ( "companyNo", $this->stdResult )) {
		    $this->companyNo = $this->stdResult->{"companyNo"};
		}
		if (array_key_exists ( "companyPhone", $this->stdResult )) {
		    $this->companyPhone = $this->stdResult->{"companyPhone"};
		}
		if (array_key_exists ( "gmtCreate", $this->stdResult )) {
		    $this->gmtCreate = $this->stdResult->{"gmtCreate"};
		}
		if (array_key_exists ( "gmtModified", $this->stdResult )) {
		    $this->gmtModified = $this->stdResult->{"gmtModified"};
		}
		if (array_key_exists ( "id", $this->stdResult )) {
		    $this->id = $this->stdResult->{"id"};
		}
		if (array_key_exists ( "spelling", $this->stdResult )) {
		    $this->spelling = $this->stdResult->{"spelling"};
		}
		if (array_key_exists ( "supportPrint", $this->stdResult )) {
		    $this->supportPrint = $this->stdResult->{"supportPrint"};
		}
	}

	private $arrayResult;

	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
		if (array_key_exists ( "companyName", $this->arrayResult )) {
		    $this->companyName = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "companyNo", $this->arrayResult )) {
		    $this->companyNo = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "companyPhone", $this->arrayResult )) {
		    $this->companyPhone = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "gmtCreate", $this->arrayResult )) {
		    $this->gmtCreate = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "gmtModified", $this->arrayResult )) {
		    $this->gmtModified = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "id", $this->arrayResult )) {
		    $this->id = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "spelling", $this->arrayResult )) {
		    $this->spelling = $arrayResult['${paramType.paramName}'];
		}
		if (array_key_exists ( "supportPrint", $this->arrayResult )) {
		    $this->supportPrint = $arrayResult['${paramType.paramName}'];
		}
	}
}
