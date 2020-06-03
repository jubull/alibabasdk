<?php

namespace com\alibaba\p4p\param;

use com\alibaba\openapi\client\entity\SDKDomain;
use com\alibaba\openapi\client\entity\ByteArray;

class AlibabaCpsOpSearchCybOffersParam {


    /**
     * @return mixed 枚举;经营模式;
     *  1:生产加工,
     *  2:经销批发,
     *  3:招商代理,
     *  4:商业服务
     */
        public function getBiztype() {
            return $this->sdkStdResult["biztype"];
    }

    /**
     * 设置枚举;经营模式;
     *  1:生产加工,
     *  2:经销批发,
     *  3:招商代理,
     *  4:商业服务
     * @param String $biztype
     * 参数示例：<pre>2</pre>
     * 此参数必填
     */
    public function setBiztype( $biztype) {
        $this->sdkStdResult["biztype"] = $biztype;
    }


    /**
     * @return mixed 枚举;
     * 买家保障,多个值用逗号分割;
     * qtbh:7天包换;
     * swtbh:15天包换
     */
    public function getBuyerProtection() {
        return $this->sdkStdResult["buyerProtection"];
    }

    /**
     * 设置枚举;
     * 买家保障,多个值用逗号分割;
     * qtbh:7天包换;
     * swtbh:15天包换
     * @param String $buyerProtection
     * 参数示例：<pre>qtbh</pre>
     * 此参数必填
     */
    public function setBuyerProtection( $buyerProtection) {
        $this->sdkStdResult["buyerProtection"] = $buyerProtection;
    }


    /**
     * @return mixed 所在地区- 市
     */
    public function getCity() {
        return $this->sdkStdResult["city"];
    }

    /**
     * 设置所在地区- 市
     * @param String $city
     * 参数示例：<pre>杭州</pre>
     * 此参数必填
     */
    public function setCity( $city) {
        $this->sdkStdResult["city"] = $city;
    }


    /**
     * @return mixed 枚举;发货时间;
     * 1:24小时发货;
     * 2:48小时发货;
     * 3:72小时发货
     */
    public function getDeliveryTimeType() {
        return $this->sdkStdResult["deliveryTimeType"];
    }

    /**
     * 设置枚举;发货时间;
     * 1:24小时发货;
     * 2:48小时发货;
     * 3:72小时发货
     * @param String $deliveryTimeType
     * 参数示例：<pre>3</pre>
     * 此参数必填
     */
    public function setDeliveryTimeType( $deliveryTimeType) {
        $this->sdkStdResult["deliveryTimeType"] = $deliveryTimeType;
    }


    /**
     * @return mixed 是否倒序;正序: false;倒序:true
     */
    public function getDescendOrder() {
        return $this->sdkStdResult["descendOrder"];
    }

    /**
     * 设置是否倒序;正序: false;倒序:true
     * @param Boolean $descendOrder
     * 参数示例：<pre>true</pre>
     * 此参数必填
     */
    public function setDescendOrder( $descendOrder) {
        $this->sdkStdResult["descendOrder"] = $descendOrder;
    }


    /**
     * @return mixed 商品售卖类型筛选;枚举,多个值用分号分割;免费赊账:50000114
     */
    public function getHolidayTagId() {
        return $this->sdkStdResult["holidayTagId"];
    }

    /**
     * 设置商品售卖类型筛选;枚举,多个值用分号分割;免费赊账:50000114
     * @param String $holidayTagId
     * 参数示例：<pre>50000114</pre>
     * 此参数必填
     */
    public function setHolidayTagId( $holidayTagId) {
        $this->sdkStdResult["holidayTagId"] = $holidayTagId;
    }


    /**
     * @return mixed 搜索关键词
     */
    public function getKeyWords() {
        return $this->sdkStdResult["keyWords"];
    }

    /**
     * 设置搜索关键词
     * @param String $keyWords
     * 参数示例：<pre>女装</pre>
     * 此参数必填
     */
    public function setKeyWords( $keyWords) {
        $this->sdkStdResult["keyWords"] = $keyWords;
    }


    /**
     * @return mixed 页码
     */
    public function getPage() {
        return $this->sdkStdResult["page"];
    }

    /**
     * 设置页码
     * @param Integer $page
     * 参数示例：<pre>1</pre>
     * 此参数必填
     */
    public function setPage( $page) {
        $this->sdkStdResult["page"] = $page;
    }


    /**
     * @return mixed 页面数量;最大20
     */
    public function getPageSize() {
        return $this->sdkStdResult["pageSize"];
    }

    /**
     * 设置页面数量;最大20
     * @param String $pageSize
     * 参数示例：<pre>10</pre>
     * 此参数必填
     */
    public function setPageSize( $pageSize) {
        $this->sdkStdResult["pageSize"] = $pageSize;
    }


    /**
     * @return mixed 类目id;
     * 4 纺织、皮革
     * 5 电工电气
     * 10 能源
     * 12 交通运输
     * 16 医药、保养
     * 17 工艺品、礼品
     * 57 电子元器件
     * 58 照明工业
     * 64 环保
     * 66 医药、保养
     * 67 办公、文教
     * 69 商务服务
     * 96 家纺家饰
     * 311 童装
     * 312 内衣
     * 1813 玩具
     * 2805 加工
     * 2829 二手设备转让
     * 10165 男装
     * 1038378 鞋
     * 1042954 箱包皮具
     * 127380009 运动服饰
     * 130822002 餐饮生鲜
     * 130823000 性保健品
     * 200514001 床上用品
     * 201128501 直播
     * 1 农业
     * 2 食品酒水
     * 7 数码、电脑
     * 9 冶金矿产
     * 15 日用百货
     * 18 运动装备
     * 33 汽摩及配件
     * 53 传媒、广电
     * 54 服饰配件、饰品
     * 59 五金、工具
     * 68 包装
     * 70 安全、防护
     * 96 家居饰品
     * 97 美妆日化
     * 97 美容护肤/彩妆
     * 1501 母婴用品
     * 10166 女装
     * 10208 仪器仪表
     * 122916001 宠物及园艺
     * 123614001 钢铁
     * 130822220 个护/家清
     * 6 家用电器
     * 8 化工
     * 13 家装、建材
     * 21 办公、文教
     * 55 橡塑
     * 65 机械及行业设备
     * 71 汽摩及配件
     * 72 印刷
     * 73 项目合作
     * 509 通信产品
     * 1426 机床
     * 1043472 毛巾、巾类
     * 122916002 汽车用品
     */
    public function getPostCategoryId() {
        return $this->sdkStdResult["postCategoryId"];
    }

    /**
     *
     * 设置类目id;
     * 4 纺织、皮革
     * 5 电工电气
     * 10 能源
     * 12 交通运输
     * 16 医药、保养
     * 17 工艺品、礼品
     * 57 电子元器件
     * 58 照明工业
     * 64 环保
     * 66 医药、保养
     * 67 办公、文教
     * 69 商务服务
     * 96 家纺家饰
     * 311 童装
     * 312 内衣
     * 1813 玩具
     * 2805 加工
     * 2829 二手设备转让
     * 10165 男装
     * 1038378 鞋
     * 1042954 箱包皮具
     * 127380009 运动服饰
     * 130822002 餐饮生鲜
     * 130823000 性保健品
     * 200514001 床上用品
     * 201128501 直播
     * 1 农业
     * 2 食品酒水
     * 7 数码、电脑
     * 9 冶金矿产
     * 15 日用百货
     * 18 运动装备
     * 33 汽摩及配件
     * 53 传媒、广电
     * 54 服饰配件、饰品
     * 59 五金、工具
     * 68 包装
     * 70 安全、防护
     * 96 家居饰品
     * 97 美妆日化
     * 97 美容护肤/彩妆
     * 1501 母婴用品
     * 10166 女装
     * 10208 仪器仪表
     * 122916001 宠物及园艺
     * 123614001 钢铁
     * 130822220 个护/家清
     * 6 家用电器
     * 8 化工
     * 13 家装、建材
     * 21 办公、文教
     * 55 橡塑
     * 65 机械及行业设备
     * 71 汽摩及配件
     * 72 印刷
     * 73 项目合作
     * 509 通信产品
     * 1426 机床
     * 1043472 毛巾、巾类
     * 122916002 汽车用品
     * @param Long $postCategoryId
     * 参数示例：<pre>122916002</pre>
     * 此参数必填
     */
    public function setPostCategoryId( $postCategoryId) {
        $this->sdkStdResult["postCategoryId"] = $postCategoryId;
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
     * 参数示例：<pre>10.2</pre>
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
     * 参数示例：<pre>11.2</pre>
     * 此参数必填
     */
    public function setPriceEnd( $priceEnd) {
        $this->sdkStdResult["priceEnd"] = $priceEnd;
    }


    /**
     * @return mixed 价格类型;默认分销价;agent_price:分销价;superBuyerPrice:超买价
     */
    public function getPriceFilterFields() {
        return $this->sdkStdResult["priceFilterFields"];
    }

    /**
     * 设置价格类型;默认分销价;agent_price:分销价;superBuyerPrice:超买价
     * @param String $priceFilterFields
     * 参数示例：<pre>superBuyerPrice</pre>
     * 此参数必填
     */
    public function setPriceFilterFields( $priceFilterFields) {
        $this->sdkStdResult["priceFilterFields"] = $priceFilterFields;
    }


    /**
     * @return mixed 所在地区- 省
     */
    public function getProvince() {
        return $this->sdkStdResult["province"];
    }

    /**
     * 设置所在地区- 省
     * @param String $province
     * 参数示例：<pre>浙江</pre>
     * 此参数必填
     */
    public function setProvince( $province) {
        $this->sdkStdResult["province"] = $province;
    }


    /**
     * @return mixed 枚举;排序字段;normal:综合;
     */
    public function getSortType() {
        return $this->sdkStdResult["sortType"];
    }

    /**
     * 设置枚举;排序字段;normal:综合;
     * @param String $sortType
     * 参数示例：<pre>saleQuantity</pre>
     * 此参数必填
     */
    public function setSortType( $sortType) {
        $this->sdkStdResult["sortType"] = $sortType;
    }


    /**
     * @return mixed 默认不传;商品标签,多个值用逗号分割;S级商品标: 263106;A级商品标:264898;B级商品标:266818;C级商品标:268866
     */
    public function getTags() {
        return $this->sdkStdResult["tags"];
    }

    /**
     * 设置默认不传;商品标签,多个值用逗号分割;S级商品标: 263106;A级商品标:264898;B级商品标:266818;C级商品标:268866
     * @param String $tags
     * 参数示例：<pre>266818</pre>
     * 此参数必填
     */
    public function setTags( $tags) {
        $this->sdkStdResult["tags"] = $tags;
    }


    /**
     * @return mixed 枚举;72514:进口货源;
     */
    public function getOfferTags() {
        return $this->sdkStdResult["offerTags"];
    }

    /**
     * 设置枚举;72514:进口货源;
     * @param String $offerTags
     * 参数示例：<pre>72514</pre>
     * 此参数必填
     */
    public function setOfferTags( $offerTags) {
        $this->sdkStdResult["offerTags"] = $offerTags;
    }


    /**
     * @return mixed  商品id搜索，多个id用逗号分割
     */
    public function getOfferIds() {
        return $this->sdkStdResult["offerIds"];
    }

    /**
     * 设置商品id搜索，多个id用逗号分割
     * @param String $offerIds
     * 参数示例：<pre>600335270178</pre>
     * 此参数必填
     */
    public function setOfferIds( $offerIds) {
        $this->sdkStdResult["offerIds"] = $offerIds;
    }


    private $sdkStdResult=array();

    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }
}
