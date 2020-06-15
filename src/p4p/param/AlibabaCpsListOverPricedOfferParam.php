<?php

namespace com\alibaba\p4p\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;


class AlibabaCpsListOverPricedOfferParam {


    /**
     * @return mixed 发布类目id
     */
    public function getCategoryIds() {
        return $this->sdkStdResult["categoryIds"];
    }

    /**
     * 设置发布类目id
     * @param String $categoryIds
     * 参数示例：<pre>
     *  4  纺织、皮革
     *  5  电工电气
     *  10  能源
     *  12  交通运输
     *  16  医药、保养
     *  17  工艺品、礼品
     *  57  电子元器件
     *  58  照明工业
     *  64  环保
     *  66  医药、保养
     *  67  办公、文教
     *  69  商务服务
     *  96  家纺家饰
     *  311  童装
     *  312  内衣
     *  1813  玩具
     *  2805  加工
     *  2829  二手设备转让
     *  10165  男装
     *  1038378  鞋
     *  1042954  箱包皮具
     *  127380009  运动服饰
     *  130822002  餐饮生鲜
     *  130823000  性保健品
     *  200514001  床上用品
     *  201128501  直播
     *  1  农业
     *  2  食品酒水
     *  7  数码、电脑
     *  9  冶金矿产
     *  15  日用百货
     *  18  运动装备
     *  33  汽摩及配件
     *  53  传媒、广电
     *  54  服饰配件、饰品
     *  59  五金、工具
     *  68  包装
     *  70  安全、防护
     *  96  家居饰品
     *  97  美妆日化
     *  97  美容护肤/彩妆
     *  1501  母婴用品
     *  10166  女装
     *  10208  仪器仪表
     *  122916001  宠物及园艺
     *  123614001  钢铁
     *  130822220  个护/家清
     *  6  家用电器
     *  8  化工
     *  13  家装、建材
     *  21  办公、文教
     *  55  橡塑
     *  65  机械及行业设备
     *  71  汽摩及配件
     *  72  印刷
     *  73  项目合作
     *  509  通信产品
     *  1426  机床
     *  1043472  毛巾、巾类
     *  122916002  汽车用品
     * </pre>
     * 此参数必填
     */
    public function setCategoryIds( $categoryIds) {
        $this->sdkStdResult["categoryIds"] = $categoryIds;
    }


    /**
     * @return mixed 关键字
     */
    public function getKeywords() {
        return $this->sdkStdResult["keywords"];
    }

    /**
     * 设置关键字
     * @param String $keywords
     * 参数示例：<pre>测试</pre>
     * 此参数必填
     */
    public function setKeywords( $keywords) {
        $this->sdkStdResult["keywords"] = $keywords;
    }


    /**
     * @return mixed 指定offerIds搜索，支持批量，逗号分割
     */
    public function getOfferIds() {
        return $this->sdkStdResult["offerIds"];
    }

    /**
     * 设置指定offerIds搜索，支持批量，逗号分割
     * @param String $offerIds
     * 参数示例：<pre>123,456</pre>
     * 此参数必填
     */
    public function setOfferIds( $offerIds) {
        $this->sdkStdResult["offerIds"] = $offerIds;
    }


    /**
     * @return mixed 最低价
     */
    public function getPriceStart() {
        return $this->sdkStdResult["priceStart"];
    }

    /**
     * 设置最低价
     * @param Double $priceStart
     * 参数示例：<pre>1.1</pre>
     * 此参数必填
     */
    public function setPriceStart( $priceStart) {
        $this->sdkStdResult["priceStart"] = $priceStart;
    }


    /**
     * @return mixed 最高价
     */
    public function getPriceEnd() {
        return $this->sdkStdResult["priceEnd"];
    }

    /**
     * 设置最高价
     * @param Double $priceEnd
     * 参数示例：<pre>3.3</pre>
     * 此参数必填
     */
    public function setPriceEnd( $priceEnd) {
        $this->sdkStdResult["priceEnd"] = $priceEnd;
    }


    /**
     * @return mixed 起批量
     */
    public function getQuantityBegin() {
        return $this->sdkStdResult["quantityBegin"];
    }

    /**
     * 设置起批量
     * @param Integer $quantityBegin
     * 参数示例：<pre>1</pre>
     * 此参数必填
     */
    public function setQuantityBegin( $quantityBegin) {
        $this->sdkStdResult["quantityBegin"] = $quantityBegin;
    }


    /**
     * @return mixed 48小时发货
     */
    public function getDelivery48Hour() {
        return $this->sdkStdResult["delivery48Hour"];
    }

    /**
     * 设置48小时发货
     * @param Boolean $delivery48Hour
     * 参数示例：<pre>true</pre>
     * 此参数必填
     */
    public function setDelivery48Hour( $delivery48Hour) {
        $this->sdkStdResult["delivery48Hour"] = $delivery48Hour;
    }


    /**
     * @return mixed 赠运险费
     */
    public function getFreightInsurance() {
        return $this->sdkStdResult["freightInsurance"];
    }

    /**
     * 设置赠运险费
     * @param Boolean $freightInsurance
     * 参数示例：<pre>true</pre>
     * 此参数必填
     */
    public function setFreightInsurance( $freightInsurance) {
        $this->sdkStdResult["freightInsurance"] = $freightInsurance;
    }


    /**
     * @return mixed 7天退换
     */
    public function getReturnGoods7Day() {
        return $this->sdkStdResult["returnGoods7Day"];
    }

    /**
     * 设置7天退换
     * @param Boolean $returnGoods7Day
     * 参数示例：<pre>true</pre>
     * 此参数必填
     */
    public function setReturnGoods7Day( $returnGoods7Day) {
        $this->sdkStdResult["returnGoods7Day"] = $returnGoods7Day;
    }


    /**
     * @return mixed 实力商家
     */
    public function getPowerfulMerchant() {
        return $this->sdkStdResult["powerfulMerchant"];
    }

    /**
     * 设置实力商家
     * @param Boolean $powerfulMerchant
     * 参数示例：<pre>true</pre>
     * 此参数必填
     */
    public function setPowerfulMerchant( $powerfulMerchant) {
        $this->sdkStdResult["powerfulMerchant"] = $powerfulMerchant;
    }


    /**
     * @return mixed 品牌站货源
     */
    public function getBrandSite() {
        return $this->sdkStdResult["brandSite"];
    }

    /**
     * 设置品牌站货源
     * @param Boolean $brandSite
     * 参数示例：<pre>true</pre>
     * 此参数必填
     */
    public function setBrandSite( $brandSite) {
        $this->sdkStdResult["brandSite"] = $brandSite;
    }


    /**
     * @return mixed 省、区域、直辖市
     */
    public function getProvince() {
        return $this->sdkStdResult["province"];
    }

    /**
     * 设置省、区域、直辖市
     * @param String $province
     * 参数示例：<pre>华东区</pre>
     * 此参数必填
     */
    public function setProvince( $province) {
        $this->sdkStdResult["province"] = $province;
    }


    /**
     * @return mixed 市
     */
    public function getCity() {
        return $this->sdkStdResult["city"];
    }

    /**
     * 设置市
     * @param String $city
     * 参数示例：<pre>杭州</pre>
     * 此参数必填
     */
    public function setCity( $city) {
        $this->sdkStdResult["city"] = $city;
    }


    /**
     * @return mixed 经营模式;
     * 1:生产加工,
     * 2:经销批发,
     * 3:招商代理,
     * 4:商业服务
     */
    public function getBiztype() {
        return $this->sdkStdResult["biztype"];
    }

    /**
     * 设置经营模式;
     * 1:生产加工,
     * 2:经销批发,
     * 3:招商代理,
     * 4:商业服务
     * @param Integer $biztype
     * 参数示例：<pre>2</pre>
     * 此参数必填
     */
    public function setBiztype( $biztype) {
        $this->sdkStdResult["biztype"] = $biztype;
    }


    /**
     * @return mixed 进口货源
     */
    public function getImportOffer() {
        return $this->sdkStdResult["importOffer"];
    }

    /**
     * 设置进口货源
     * @param Boolean $importOffer
     * 参数示例：<pre>true</pre>
     * 此参数必填
     */
    public function setImportOffer( $importOffer) {
        $this->sdkStdResult["importOffer"] = $importOffer;
    }


    /**
     * @return mixed 平均发货速度,
     * 1:当日;
     * 2:次日;
     * 3:3日内
     */
    public function getDeliverySpeed() {
        return $this->sdkStdResult["deliverySpeed"];
    }

    /**
     * 设置平均发货速度,
     * 1:当日;
     * 2:次日;
     * 3:3日内
     * @param Integer $deliverySpeed
     * 参数示例：<pre>1</pre>
     * 此参数必填
     */
    public function setDeliverySpeed( $deliverySpeed) {
        $this->sdkStdResult["deliverySpeed"] = $deliverySpeed;
    }


    /**
     * @return mixed 排序类型;1:按价格;2:按成交
     */
    public function getSortType() {
        return $this->sdkStdResult["sortType"];
    }

    /**
     * 设置排序类型;1:按价格;2:按成交
     * @param Integer $sortType
     * 参数示例：<pre>2</pre>
     * 此参数必填
     */
    public function setSortType( $sortType) {
        $this->sdkStdResult["sortType"] = $sortType;
    }


    /**
     * @return mixed 排序类型
     */
    public function getDescendOrder() {
        return $this->sdkStdResult["descendOrder"];
    }

    /**
     * 设置排序类型
     * @param Boolean $descendOrder
     * 参数示例：<pre>true</pre>
     * 此参数必填
     */
    public function setDescendOrder( $descendOrder) {
        $this->sdkStdResult["descendOrder"] = $descendOrder;
    }


    /**
     * @return mixed 页数
     */
    public function getPageNo() {
        return $this->sdkStdResult["pageNo"];
    }

    /**
     * 设置页数
     * @param Integer $pageNo
     * 参数示例：<pre>1</pre>
     * 此参数必填
     */
    public function setPageNo( $pageNo) {
        $this->sdkStdResult["pageNo"] = $pageNo;
    }


    /**
     * @return mixed 页面条数，最大200
     */
    public function getPageSize() {
        return $this->sdkStdResult["pageSize"];
    }

    /**
     * 设置页面条数，最大200
     * @param Integer $pageSize
     * 参数示例：<pre>20</pre>
     * 此参数必填
     */
    public function setPageSize( $pageSize) {
        $this->sdkStdResult["pageSize"] = $pageSize;
    }


    /**
     * @return mixed 按商品标属性搜索，逗号分割各属性，如
     * 伙拼：isTuanPiOffer;
     * 分销：isTbDistributionOffer；
     * 微供：isCybMicroSupply；
     * CPS分销小二招商品: cbuTagOverPricedSpecialMarket;
     * 商品力算法推荐商品: cbuTagOverPricedProductPowerIntro;
     * 采源宝-严选厂货:cbuTagOverPricedCybYxch;
     */
    public function getOfferTags() {
        return $this->sdkStdResult["offerTags"];
    }

    /**
     * 设置
     * 按商品标属性搜索，逗号分割各属性，如
     * 伙拼：isTuanPiOffer;
     * 分销：isTbDistributionOffer；
     * 微供：isCybMicroSupply；
     * CPS分销小二招商品: cbuTagOverPricedSpecialMarket;
     * 商品力算法推荐商品: cbuTagOverPricedProductPowerIntro;
     * 采源宝-严选厂货:cbuTagOverPricedCybYxch;
     * @param String $offerTags
     * 参数示例：<pre>isTuanPiOffer</pre>
     * 此参数必填
     */
    public function setOfferTags( $offerTags) {
        $this->sdkStdResult["offerTags"] = $offerTags;
    }


    private $sdkStdResult=array();

    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }
}
