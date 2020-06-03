<?php
namespace com\alibaba\product\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;

class AlibabaProductListGetParam {

        
        /**
    * @return 业务标
    */
        public function getSigns() {
        $tempResult = $this->sdkStdResult["signs"];
        return $tempResult;
    }
    
    /**
     * 设置业务标     
     * @param array include @see String[] $signs     
     * 参数示例：<pre>['isMicroSupply']</pre>     
     * 此参数必填     */
    public function setSigns( $signs) {
        $this->sdkStdResult["signs"] = $signs;
    }
    
        
        /**
    * @return 业务名
    */
        public function getProductSupportedBizGroups() {
        $tempResult = $this->sdkStdResult["productSupportedBizGroups"];
        return $tempResult;
    }
    
    /**
     * 设置业务名     
     * @param array include @see String[] $productSupportedBizGroups     
     * 参数示例：<pre> </pre>     
     * 此参数必填     */
    public function setProductSupportedBizGroups( $productSupportedBizGroups) {
        $this->sdkStdResult["productSupportedBizGroups"] = $productSupportedBizGroups;
    }
    
        
        /**
    * @return 分页参数，起始为1
    */
        public function getPageNo() {
        $tempResult = $this->sdkStdResult["pageNo"];
        return $tempResult;
    }
    
    /**
     * 设置分页参数，起始为1     
     * @param Integer $pageNo     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setPageNo( $pageNo) {
        $this->sdkStdResult["pageNo"] = $pageNo;
    }
    
        
        /**
    * @return 分页参数，每页大小，目前最大值为20，超过20时以20为准
    */
        public function getPageSize() {
        $tempResult = $this->sdkStdResult["pageSize"];
        return $tempResult;
    }
    
    /**
     * 设置分页参数，每页大小，目前最大值为20，超过20时以20为准     
     * @param Integer $pageSize     
     * 参数示例：<pre>20</pre>     
     * 此参数必填     */
    public function setPageSize( $pageSize) {
        $this->sdkStdResult["pageSize"] = $pageSize;
    }
    
        
        /**
    * @return 商品状态，published:上架状态，expired：过期(包含手动过期与自动过期)，TBD：to be delete，deleted：删除，new：新发，modified：修改，member expired：会员撤销
    */
        public function getStatusList() {
        $tempResult = $this->sdkStdResult["statusList"];
        return $tempResult;
    }
    
    /**
     * 设置商品状态，published:上架状态，expired：过期(包含手动过期与自动过期)，TBD：to be delete，deleted：删除，new：新发，modified：修改，member expired：会员撤销     
     * @param array include @see String[] $statusList     
     * 参数示例：<pre>['published']</pre>     
     * 此参数必填     */
    public function setStatusList( $statusList) {
        $this->sdkStdResult["statusList"] = $statusList;
    }
    
        
        /**
    * @return 类目ID
    */
        public function getCategoryId() {
        $tempResult = $this->sdkStdResult["categoryId"];
        return $tempResult;
    }
    
    /**
     * 设置类目ID     
     * @param Long $categoryId     
     * 参数示例：<pre>1031728</pre>     
     * 此参数必填     */
    public function setCategoryId( $categoryId) {
        $this->sdkStdResult["categoryId"] = $categoryId;
    }
    
        
        /**
    * @return 产品修改开始时间
    */
        public function getStartModifyTime() {
        $tempResult = $this->sdkStdResult["startModifyTime"];
        return $tempResult;
    }
    
    /**
     * 设置产品修改开始时间     
     * @param Date $startModifyTime     
     * 参数示例：<pre>20180717174002000+0800</pre>     
     * 此参数必填     */
    public function setStartModifyTime( $startModifyTime) {
        $this->sdkStdResult["startModifyTime"] = $startModifyTime;
    }
    
        
        /**
    * @return 产品修改结束时间
    */
        public function getEndModifyTime() {
        $tempResult = $this->sdkStdResult["endModifyTime"];
        return $tempResult;
    }
    
    /**
     * 设置产品修改结束时间     
     * @param Date $endModifyTime     
     * 参数示例：<pre>20180717174002000+0800</pre>     
     * 此参数必填     */
    public function setEndModifyTime( $endModifyTime) {
        $this->sdkStdResult["endModifyTime"] = $endModifyTime;
    }
    
        
        /**
    * @return 关键词
    */
        public function getSubjectKey() {
        $tempResult = $this->sdkStdResult["subjectKey"];
        return $tempResult;
    }
    
    /**
     * 设置关键词     
     * @param String $subjectKey     
     * 参数示例：<pre>北极</pre>     
     * 此参数必填     */
    public function setSubjectKey( $subjectKey) {
        $this->sdkStdResult["subjectKey"] = $subjectKey;
    }
    
        
        /**
    * @return 货号
    */
        public function getCargoNumber() {
        $tempResult = $this->sdkStdResult["cargoNumber"];
        return $tempResult;
    }
    
    /**
     * 设置货号     
     * @param String $cargoNumber     
     * 参数示例：<pre>LYQ-8816</pre>     
     * 此参数必填     */
    public function setCargoNumber( $cargoNumber) {
        $this->sdkStdResult["cargoNumber"] = $cargoNumber;
    }
    
        
        /**
    * @return 产品ID列表
    */
        public function getProductIds() {
        $tempResult = $this->sdkStdResult["productIds"];
        return $tempResult;
    }
    
    /**
     * 设置产品ID列表     
     * @param array include @see Long[] $productIds     
     * 参数示例：<pre>[12323213,12312323]</pre>     
     * 此参数必填     */
    public function setProductIds( $productIds) {
        $this->sdkStdResult["productIds"] = $productIds;
    }
    
        
        /**
    * @return 星级范围起始值0-5，不能高于endStar
    */
        public function getBeginStar() {
        $tempResult = $this->sdkStdResult["beginStar"];
        return $tempResult;
    }
    
    /**
     * 设置星级范围起始值0-5，不能高于endStar     
     * @param Integer $beginStar     
     * 参数示例：<pre>0</pre>     
     * 此参数必填     */
    public function setBeginStar( $beginStar) {
        $this->sdkStdResult["beginStar"] = $beginStar;
    }
    
        
        /**
    * @return 星级范围起始值0-5，不能低于beginStar
    */
        public function getEndStar() {
        $tempResult = $this->sdkStdResult["endStar"];
        return $tempResult;
    }
    
    /**
     * 设置星级范围起始值0-5，不能低于beginStar     
     * @param Integer $endStar     
     * 参数示例：<pre>5</pre>     
     * 此参数必填     */
    public function setEndStar( $endStar) {
        $this->sdkStdResult["endStar"] = $endStar;
    }
    
        
        /**
    * @return 查询自定义分组ID，目前只支持查询一个
    */
        public function getGroupIds() {
        $tempResult = $this->sdkStdResult["groupIds"];
        return $tempResult;
    }
    
    /**
     * 设置查询自定义分组ID，目前只支持查询一个     
     * @param String $groupIds     
     * 参数示例：<pre>100416219</pre>     
     * 此参数必填     */
    public function setGroupIds( $groupIds) {
        $this->sdkStdResult["groupIds"] = $groupIds;
    }
    
        
        /**
    * @return 发布时间起始值
    */
        public function getStartPublishTime() {
        $tempResult = $this->sdkStdResult["startPublishTime"];
        return $tempResult;
    }
    
    /**
     * 设置发布时间起始值     
     * @param Date $startPublishTime     
     * 参数示例：<pre>20180717174002000+0800</pre>     
     * 此参数必填     */
    public function setStartPublishTime( $startPublishTime) {
        $this->sdkStdResult["startPublishTime"] = $startPublishTime;
    }
    
        
        /**
    * @return 发布时间结束值
    */
        public function getEndPublishTime() {
        $tempResult = $this->sdkStdResult["endPublishTime"];
        return $tempResult;
    }
    
    /**
     * 设置发布时间结束值     
     * @param Date $endPublishTime     
     * 参数示例：<pre>20180717174002000+0800</pre>     
     * 此参数必填     */
    public function setEndPublishTime( $endPublishTime) {
        $this->sdkStdResult["endPublishTime"] = $endPublishTime;
    }
    
        
        /**
    * @return 过期时间起始值
    */
        public function getStartExpiredTime() {
        $tempResult = $this->sdkStdResult["startExpiredTime"];
        return $tempResult;
    }
    
    /**
     * 设置过期时间起始值     
     * @param Date $startExpiredTime     
     * 参数示例：<pre>20180717174002000+0800</pre>     
     * 此参数必填     */
    public function setStartExpiredTime( $startExpiredTime) {
        $this->sdkStdResult["startExpiredTime"] = $startExpiredTime;
    }
    
        
        /**
    * @return 过期时间结束值
    */
        public function getEndExpiredTime() {
        $tempResult = $this->sdkStdResult["endExpiredTime"];
        return $tempResult;
    }
    
    /**
     * 设置过期时间结束值     
     * @param Date $endExpiredTime     
     * 参数示例：<pre>20180717174002000+0800</pre>     
     * 此参数必填     */
    public function setEndExpiredTime( $endExpiredTime) {
        $this->sdkStdResult["endExpiredTime"] = $endExpiredTime;
    }
    
        
        /**
    * @return 价格范围起始值
    */
        public function getPriceStart() {
        $tempResult = $this->sdkStdResult["priceStart"];
        return $tempResult;
    }
    
    /**
     * 设置价格范围起始值     
     * @param Double $priceStart     
     * 参数示例：<pre>1.0</pre>     
     * 此参数必填     */
    public function setPriceStart( $priceStart) {
        $this->sdkStdResult["priceStart"] = $priceStart;
    }
    
        
        /**
    * @return 价格范围结束值
    */
        public function getPriceEnd() {
        $tempResult = $this->sdkStdResult["priceEnd"];
        return $tempResult;
    }
    
    /**
     * 设置价格范围结束值     
     * @param Double $priceEnd     
     * 参数示例：<pre>1000.0</pre>     
     * 此参数必填     */
    public function setPriceEnd( $priceEnd) {
        $this->sdkStdResult["priceEnd"] = $priceEnd;
    }
    
        
        /**
    * @return 排序条件：CREATE_DATE,POST_DATE,MODIFY_DATE,APPROVED_DATE,EXPIRE_DATE,STATUS,ID,GROUP_ID,PRICE,SALE_QUANTITY
    */
        public function getOrderByCondition() {
        $tempResult = $this->sdkStdResult["orderByCondition"];
        return $tempResult;
    }
    
    /**
     * 设置排序条件：CREATE_DATE,POST_DATE,MODIFY_DATE,APPROVED_DATE,EXPIRE_DATE,STATUS,ID,GROUP_ID,PRICE,SALE_QUANTITY     
     * @param String $orderByCondition     
     * 参数示例：<pre>PRICE</pre>     
     * 此参数必填     */
    public function setOrderByCondition( $orderByCondition) {
        $this->sdkStdResult["orderByCondition"] = $orderByCondition;
    }
    
        
        /**
    * @return 升序 ASC 还是降序 DESC
    */
        public function getOrderByType() {
        $tempResult = $this->sdkStdResult["orderByType"];
        return $tempResult;
    }
    
    /**
     * 设置升序 ASC 还是降序 DESC     
     * @param String $orderByType     
     * 参数示例：<pre>DESC</pre>     
     * 此参数必填     */
    public function setOrderByType( $orderByType) {
        $this->sdkStdResult["orderByType"] = $orderByType;
    }
    
        
        /**
    * @return 支持在线交易
    */
        public function getSupportOnlineTrade() {
        $tempResult = $this->sdkStdResult["supportOnlineTrade"];
        return $tempResult;
    }
    
    /**
     * 设置支持在线交易     
     * @param Boolean $supportOnlineTrade     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setSupportOnlineTrade( $supportOnlineTrade) {
        $this->sdkStdResult["supportOnlineTrade"] = $supportOnlineTrade;
    }
    
        
        /**
    * @return 私密商品
    */
        public function getPrivateOffer() {
        $tempResult = $this->sdkStdResult["privateOffer"];
        return $tempResult;
    }
    
    /**
     * 设置私密商品     
     * @param Boolean $privateOffer     
     * 参数示例：<pre>false</pre>     
     * 此参数必填     */
    public function setPrivateOffer( $privateOffer) {
        $this->sdkStdResult["privateOffer"] = $privateOffer;
    }
    
        
        /**
    * @return 是否需要详情
    */
        public function getNeedDetail() {
        $tempResult = $this->sdkStdResult["needDetail"];
        return $tempResult;
    }
    
    /**
     * 设置是否需要详情     
     * @param Boolean $needDetail     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setNeedDetail( $needDetail) {
        $this->sdkStdResult["needDetail"] = $needDetail;
    }
    
        
        /**
    * @return 是否需要运费
    */
        public function getNeedFreight() {
        $tempResult = $this->sdkStdResult["needFreight"];
        return $tempResult;
    }
    
    /**
     * 设置是否需要运费     
     * @param Boolean $needFreight     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setNeedFreight( $needFreight) {
        $this->sdkStdResult["needFreight"] = $needFreight;
    }
    
        
        /**
    * @return 是否需要自定义类目
    */
        public function getNeedUserCategoryInfo() {
        $tempResult = $this->sdkStdResult["needUserCategoryInfo"];
        return $tempResult;
    }
    
    /**
     * 设置是否需要自定义类目     
     * @param Boolean $needUserCategoryInfo     
     * 参数示例：<pre>true</pre>     
     * 此参数必填     */
    public function setNeedUserCategoryInfo( $needUserCategoryInfo) {
        $this->sdkStdResult["needUserCategoryInfo"] = $needUserCategoryInfo;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>