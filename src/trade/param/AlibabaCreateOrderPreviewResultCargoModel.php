<?php

namespace com\alibaba\trade\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;
use com\alibaba\trade\param\AlibabaTradePromotionModel;


class AlibabaCreateOrderPreviewResultCargoModel extends SDKDomain {


    private $amount;

        /**
    * @return 产品总金额
    */
        public function getAmount() {
        return $this->amount;
    }

    /**
     * 设置产品总金额
     * @param Double $amount
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setAmount( $amount) {
        $this->amount = $amount;
    }


    private $message;

        /**
    * @return 返回信息
    */
        public function getMessage() {
        return $this->message;
    }

    /**
     * 设置返回信息
     * @param String $message
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setMessage( $message) {
        $this->message = $message;
    }


    private $finalUnitPrice;

        /**
    * @return 最终单价
    */
        public function getFinalUnitPrice() {
        return $this->finalUnitPrice;
    }

    /**
     * 设置最终单价
     * @param Double $finalUnitPrice
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setFinalUnitPrice( $finalUnitPrice) {
        $this->finalUnitPrice = $finalUnitPrice;
    }


    private $specId;

        /**
    * @return 规格ID，offer内唯一
    */
        public function getSpecId() {
        return $this->specId;
    }

    /**
     * 设置规格ID，offer内唯一
     * @param String $specId
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setSpecId( $specId) {
        $this->specId = $specId;
    }


    private $skuId;

        /**
    * @return 规格ID，全局唯一
    */
        public function getSkuId() {
        return $this->skuId;
    }

    /**
     * 设置规格ID，全局唯一
     * @param Long $skuId
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setSkuId( $skuId) {
        $this->skuId = $skuId;
    }


    private $resultCode;

        /**
    * @return 返回码
    */
        public function getResultCode() {
        return $this->resultCode;
    }

    /**
     * 设置返回码
     * @param String $resultCode
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setResultCode( $resultCode) {
        $this->resultCode = $resultCode;
    }


    private $offerId;

        /**
    * @return 商品ID
    */
        public function getOfferId() {
        return $this->offerId;
    }

    /**
     * 设置商品ID
     * @param Long $offerId
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setOfferId( $offerId) {
        $this->offerId = $offerId;
    }


    private $cargoPromotionList;

        /**
    * @return 商品优惠列表
    */
        public function getCargoPromotionList() {
        return $this->cargoPromotionList;
    }

    /**
     * 设置商品优惠列表
     * @param array include @see AlibabaTradePromotionModel[] $cargoPromotionList
     * 参数示例：<pre></pre>
     * 此参数必填     */
    public function setCargoPromotionList(AlibabaTradePromotionModel $cargoPromotionList) {
        $this->cargoPromotionList = $cargoPromotionList;
    }


	private $stdResult;

	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "amount", $this->stdResult )) {
    				$this->amount = $this->stdResult->{"amount"};
    			}
    			    		    				    			    			if (array_key_exists ( "message", $this->stdResult )) {
    				$this->message = $this->stdResult->{"message"};
    			}
    			    		    				    			    			if (array_key_exists ( "finalUnitPrice", $this->stdResult )) {
    				$this->finalUnitPrice = $this->stdResult->{"finalUnitPrice"};
    			}
    			    		    				    			    			if (array_key_exists ( "specId", $this->stdResult )) {
    				$this->specId = $this->stdResult->{"specId"};
    			}
    			    		    				    			    			if (array_key_exists ( "skuId", $this->stdResult )) {
    				$this->skuId = $this->stdResult->{"skuId"};
    			}
    			    		    				    			    			if (array_key_exists ( "resultCode", $this->stdResult )) {
    				$this->resultCode = $this->stdResult->{"resultCode"};
    			}
    			    		    				    			    			if (array_key_exists ( "offerId", $this->stdResult )) {
    				$this->offerId = $this->stdResult->{"offerId"};
    			}
    			    		    				    			    			if (array_key_exists ( "cargoPromotionList", $this->stdResult )) {
    			$cargoPromotionListResult=$this->stdResult->{"cargoPromotionList"};
    				$object = json_decode ( json_encode ( $cargoPromotionListResult ), true );
					$this->cargoPromotionList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaTradePromotionModelResult=new AlibabaTradePromotionModel();
						$AlibabaTradePromotionModelResult->setArrayResult($arrayobject );
						$this->cargoPromotionList [$i] = $AlibabaTradePromotionModelResult;
					}
    			}
    			    		    		}

	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "amount", $this->arrayResult )) {
    			$this->amount = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "message", $this->arrayResult )) {
    			$this->message = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "finalUnitPrice", $this->arrayResult )) {
    			$this->finalUnitPrice = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "specId", $this->arrayResult )) {
    			$this->specId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "skuId", $this->arrayResult )) {
    			$this->skuId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "resultCode", $this->arrayResult )) {
    			$this->resultCode = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    			if (array_key_exists ( "offerId", $this->arrayResult )) {
    			$this->offerId = $arrayResult['${paramType.paramName}'];
    			}
    		    	    			    		    		if (array_key_exists ( "cargoPromotionList", $this->arrayResult )) {
    		$cargoPromotionListResult=$arrayResult['${paramType.paramName}'];
    			$this->cargoPromotionList = new AlibabaTradePromotionModel();
    			$this->cargoPromotionList->setStdResult ( $cargoPromotionListResult);
    		}
    		    	    		}


}
?>
