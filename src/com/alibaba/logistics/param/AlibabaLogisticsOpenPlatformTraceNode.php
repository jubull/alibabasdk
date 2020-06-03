<?php

namespace com\alibaba\logistics\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;


class AlibabaLogisticsOpenPlatformTraceNode extends SDKDomain {


    private $action;

        /**
    * @return 动作
    */
        public function getAction() {
        return $this->action;
    }

    /**
     * 设置动作
     * @param String $action
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setAction( $action) {
        $this->action = $action;
    }


    private $areaCode;

        /**
    * @return 地区编码
    */
        public function getAreaCode() {
        return $this->areaCode;
    }

    /**
     * 设置地区编码
     * @param String $areaCode
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setAreaCode( $areaCode) {
        $this->areaCode = $areaCode;
    }


    private $encrypt;

        /**
    * @return
    */
        public function getEncrypt() {
        return $this->encrypt;
    }

    /**
     * 设置
     * @param String $encrypt
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setEncrypt( $encrypt) {
        $this->encrypt = $encrypt;
    }


    private $acceptTime;

        /**
    * @return 流转节点的时间
    */
        public function getAcceptTime() {
        return $this->acceptTime;
    }

    /**
     * 设置流转节点的时间
     * @param String $acceptTime
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setAcceptTime( $acceptTime) {
        $this->acceptTime = $acceptTime;
    }


    private $remark;

        /**
    * @return 备注，如：在浙江浦江县公司进行下级地点扫描，即将发往：广东深圳公司
    */
        public function getRemark() {
        return $this->remark;
    }

    /**
     * 设置备注，如：在浙江浦江县公司进行下级地点扫描，即将发往：广东深圳公司
     * @param String $remark
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setRemark( $remark) {
        $this->remark = $remark;
    }


    private $facilityType;

        /**
    * @return
    */
        public function getFacilityType() {
        return $this->facilityType;
    }

    /**
     * 设置
     * @param String $facilityType
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setFacilityType( $facilityType) {
        $this->facilityType = $facilityType;
    }


    private $facilityNo;

        /**
    * @return
    */
        public function getFacilityNo() {
        return $this->facilityNo;
    }

    /**
     * 设置
     * @param String $facilityNo
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setFacilityNo( $facilityNo) {
        $this->facilityNo = $facilityNo;
    }


    private $facilityName;

        /**
    * @return
    */
        public function getFacilityName() {
        return $this->facilityName;
    }

    /**
     * 设置
     * @param String $facilityName
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setFacilityName( $facilityName) {
        $this->facilityName = $facilityName;
    }


	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "action", $this->stdResult )) {
    				$this->action = $this->stdResult->{"action"};
    			}
    			    		    				    			    			if (array_key_exists ( "areaCode", $this->stdResult )) {
    				$this->areaCode = $this->stdResult->{"areaCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "encrypt", $this->stdResult )) {
    				$this->encrypt = $this->stdResult->{"encrypt"};
    			}
    			    		    				    			    			if (array_key_exists ( "acceptTime", $this->stdResult )) {
    				$this->acceptTime = $this->stdResult->{"acceptTime"};
    			}
    			    		    				    			    			if (array_key_exists ( "remark", $this->stdResult )) {
    				$this->remark = $this->stdResult->{"remark"};
    			}
    			    		    				    			    			if (array_key_exists ( "facilityType", $this->stdResult )) {
    				$this->facilityType = $this->stdResult->{"facilityType"};
    			}
    			    		    				    			    			if (array_key_exists ( "facilityNo", $this->stdResult )) {
    				$this->facilityNo = $this->stdResult->{"facilityNo"};
    			}
    			    		    				    			    			if (array_key_exists ( "facilityName", $this->stdResult )) {
    				$this->facilityName = $this->stdResult->{"facilityName"};
    			}
    			    		    		}

	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "action", $this->arrayResult )) {
    			$this->action = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "areaCode", $this->arrayResult )) {
    			$this->areaCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "encrypt", $this->arrayResult )) {
    			$this->encrypt = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "acceptTime", $this->arrayResult )) {
    			$this->acceptTime = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "remark", $this->arrayResult )) {
    			$this->remark = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "facilityType", $this->arrayResult )) {
    			$this->facilityType = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "facilityNo", $this->arrayResult )) {
    			$this->facilityNo = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "facilityName", $this->arrayResult )) {
    			$this->facilityName = $arrayResult['${paramType.paramName}'];
    			}
    		    	    		}


}
?>
