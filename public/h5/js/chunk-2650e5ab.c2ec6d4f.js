(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-2650e5ab"],{"21e7":function(t,e,s){"use strict";var i=s("31fa"),a=s.n(i);a.a},2267:function(t,e,s){t.exports=s.p+"h5/img/share-info.fa0bedf8.png"},"31fa":function(t,e,s){},"4b48":function(t,e,s){},"5f10":function(t,e,s){t.exports=s.p+"h5/img/noCoupon.e524084b.png"},"60b9":function(t,e,s){},"68d8":function(t,e,s){t.exports=s.p+"h5/img/red-packets.5f46f82b.png"},"8f99":function(t,e,s){"use strict";s.r(e);var i=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{ref:"box",class:[t.posterImageStatus?"noscroll product-con":"product-con"],nativeOn:{scroll:function(e){return t.onScroll(e)}}},[i("div",{ref:"header",staticClass:"header acea-row row-center-wrapper",style:"opacity:"+t.opacity},t._l(t.navList,(function(e,s){return i("div",{key:s,staticClass:"item",class:t.navActive===s?"on":"",on:{click:function(e){return t.asideTap(s)}}},[t._v("\n      "+t._s(e)+"\n    ")])})),0),i("div",{attrs:{id:"title0"}},[i("product-con-swiper",{attrs:{"img-urls":t.storeInfo.slider_image,videoline:t.storeInfo.video_link}}),i("div",{staticClass:"wrapper"},[i("div",{staticClass:"share acea-row row-between row-bottom"},[i("div",{staticClass:"money font-color-red"},[t._v("\n          ￥"),i("span",{staticClass:"num"},[t._v(t._s(t.storeInfo.price))]),t.storeInfo.vip_price&&t.storeInfo.vip_price>0?i("span",{staticClass:"vip-money"},[t._v("￥"+t._s(t.storeInfo.vip_price))]):t._e(),t.storeInfo.vip_price&&t.storeInfo.vip_price>0?i("img",{staticClass:"image",attrs:{src:s("69ed")}}):t._e()]),i("div",{staticClass:"iconfont icon-fenxiang",on:{click:t.listenerActionSheet}})]),i("div",{staticClass:"introduce"},[t._v(t._s(t.storeInfo.store_name))]),i("div",{staticClass:"label acea-row row-between-wrapper"},[i("div",[t._v("原价:￥"+t._s(t.storeInfo.ot_price))]),i("div",[t._v("库存:"+t._s(t.storeInfo.stock)+t._s(t.storeInfo.unit_name))]),i("div",[t._v("销量:"+t._s(t.storeInfo.fsales)+t._s(t.storeInfo.unit_name))])]),t.couponList.length?i("div",{staticClass:"coupon acea-row row-between-wrapper",on:{click:t.couponTap}},[i("div",{staticClass:"hide line1 acea-row"},[t._v("\n          优惠券：\n          "),t._l(t.couponList,(function(e,s){return i("div",{key:s,staticClass:"activity"},[t._v("\n            满"+t._s(e.use_min_price)+"减"+t._s(e.coupon_price)+"\n          ")])}))],2),i("div",{staticClass:"iconfont icon-jiantou"})]):t._e(),t.activity.length?i("div",{staticClass:"coupon acea-row row-between-wrapper"},[i("div",{staticClass:"line1 acea-row"},[t._v("\n          活   动：\n          "),t._l(t.activity,(function(e,s){return i("div",{key:s,on:{click:function(s){return t.goDetail(e)}}},["1"===e.type?i("div",{staticClass:"acea-row row-center-wrapper",class:{activity_pin:0===s,activity_miao:1===s,activity_kan:2===s}},[i("span",{staticClass:"iconfonts iconfont icon-shenhezhong"}),i("span",{staticClass:"activity_title"},[t._v(" 参与秒杀")])]):t._e(),"2"===e.type?i("div",{staticClass:"acea-row row-center-wrapper",class:{activity_pin:0===s,activity_miao:1===s,activity_kan:2===s}},[i("span",{staticClass:"iconfonts iconfont icon-kanjia"}),i("span",{staticClass:"activity_title"},[t._v(" 参与砍价")])]):t._e(),"3"===e.type?i("div",{staticClass:"acea-row row-center-wrapper",class:{activity_pin:0===s,activity_miao:1===s,activity_kan:2===s}},[i("span",{staticClass:"iconfonts iconfont icon-pintuan"}),i("span",{staticClass:"activity_title"},[t._v(" 参与拼团")])]):t._e()])}))],2)]):t._e()]),t.attr.productAttr.length?i("div",{staticClass:"attribute acea-row row-between-wrapper",on:{click:t.selecAttrTap}},[i("div",[t._v("\n        "+t._s(t.attrTxt)+"："),i("span",{staticClass:"atterTxt"},[t._v(t._s(t.attrValue))])]),i("div",{staticClass:"iconfont icon-jiantou"})]):t._e()],1),i("div",{staticClass:"userEvaluation",attrs:{id:"title1"}},[i("div",{staticClass:"title acea-row row-between-wrapper"},[i("div",[t._v("用户评价("+t._s(t.replyCount)+")")]),i("router-link",{staticClass:"praise",attrs:{to:{path:"/evaluate_list/"+t.id}}},[i("span",{staticClass:"font-color-red"},[t._v(t._s(t.replyChance)+"%")]),t._v("好评率"),i("span",{staticClass:"iconfont icon-jiantou"})])],1),i("user-evaluation",{attrs:{reply:t.reply}})],1),t.goodList.length>0?i("div",{staticClass:"superior",attrs:{id:"title2"}},[t._m(0),[i("div",{staticClass:"slider-banner banner"},[i("swiper",{attrs:{options:t.swiperRecommend}},[t._l(t.goodList,(function(e,s){return i("swiper-slide",{key:s},[i("div",{staticClass:"list acea-row row-middle"},t._l(e.list,(function(e){return i("div",{key:e.image,staticClass:"item",on:{click:function(s){return t.goGoods(e)}}},[i("div",{staticClass:"pictrue"},[i("img",{attrs:{src:e.image}}),e.activity&&"1"===e.activity.type?i("span",{staticClass:"pictrue_log pictrue_log_class"},[t._v("秒杀")]):t._e(),e.activity&&"2"===e.activity.type?i("span",{staticClass:"pictrue_log pictrue_log_class"},[t._v("砍价")]):t._e(),e.activity&&"3"===e.activity.type?i("span",{staticClass:"pictrue_log pictrue_log_class"},[t._v("拼团")]):t._e()]),i("div",{staticClass:"name line1"},[t._v(t._s(e.store_name))]),i("div",{staticClass:"money font-color-red"},[t._v("¥"+t._s(e.price))])])})),0)])})),i("div",{staticClass:"swiper-pagination",attrs:{slot:"pagination"},slot:"pagination"})],2)],1)]],2):t._e(),i("div",{staticClass:"product-intro",attrs:{id:"title3"}},[i("div",{staticClass:"title"},[t._v("产品介绍")]),i("div",{staticClass:"conter",domProps:{innerHTML:t._s(t.storeInfo.description)}})]),i("div",{staticStyle:{height:"1.2rem"}}),i("div",{staticClass:"footer acea-row row-between-wrapper"},[i("div",{staticClass:"item",on:{click:function(e){return t.$router.push({path:"/customer/list/"+t.id})}}},[i("div",{staticClass:"iconfont icon-kefu"}),i("div",[t._v("客服")])]),i("div",{staticClass:"item",on:{click:t.setCollect}},[i("div",{staticClass:"iconfont",class:t.storeInfo.userCollect?"icon-shoucang1":"icon-shoucang"}),i("div",[t._v("收藏")])]),i("router-link",{staticClass:"item animated",class:!0===t.animated?"bounceIn":"",attrs:{to:"/cart"}},[i("div",{staticClass:"iconfont icon-gouwuche1"},[t.CartCount>0?i("span",{staticClass:"num bg-color-red"},[t._v(t._s(t.CartCount))]):t._e()]),i("div",[t._v("购物车")])]),i("div",{staticClass:"bnt acea-row"},[i("div",{staticClass:"joinCart",on:{click:t.joinCart}},[t._v("加入购物车")]),i("div",{staticClass:"buy",on:{click:t.tapBuy}},[t._v("立即购买")])])],1),0!==t.priceName?i("Share-red-packets",{attrs:{priceName:t.priceName},on:{changeFun:t.changeFun}}):t._e(),i("CouponPop",{attrs:{coupon:t.coupon},on:{changeFun:t.changeFun}}),i("Product-window",{attrs:{attr:t.attr},on:{changeFun:t.changeFun}}),i("StorePoster",{attrs:{posterImageStatus:t.posterImageStatus,posterData:t.posterData},on:{setPosterImageStatus:t.setPosterImageStatus}}),i("ShareInfo",{attrs:{shareInfoStatus:t.shareInfoStatus},on:{setShareInfoStatus:t.setShareInfoStatus}}),i("div",{staticClass:"generate-posters acea-row row-middle",class:t.posters?"on":""},[!0===t.weixinStatus?i("div",{staticClass:"item",on:{click:t.setShareInfoStatus}},[i("div",{staticClass:"iconfont icon-weixin3"}),i("div",{},[t._v("发送给朋友")])]):t._e(),i("div",{staticClass:"item",on:{click:t.setPosterImageStatus}},[i("div",{staticClass:"iconfont icon-haibao"}),i("div",{},[t._v("生成海报")])])]),i("div",{directives:[{name:"show",rawName:"v-show",value:t.posters,expression:"posters"}],staticClass:"mask",on:{touchmove:function(t){t.preventDefault()},click:t.listenerActionClose}}),t.mapShow?i("div",{staticClass:"geoPage"},[i("iframe",{attrs:{width:"100%",height:"100%",frameborder:"0",scrolling:"no",src:"https://apis.map.qq.com/uri/v1/geocoder?coord="+t.system_store.latitude+","+t.system_store.longitude+"&referer="+t.mapKey}})]):t._e()],1)},a=[function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{staticClass:"title acea-row row-center-wrapper"},[i("img",{attrs:{src:s("a191")}}),i("div",{staticClass:"titleTxt"},[t._v("优品推荐")]),i("img",{attrs:{src:s("a191")}})])}],o=s("3bf2"),n=(s("c904"),s("9a33"),s("cc57"),s("6fe8")),c=(s("e5d0"),s("c5f8")),r=s("edc3"),l=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{staticClass:"sharing-packets",class:!0===t.state?"on":""},[i("div",{staticClass:"iconfont icon-guanbi acea-row row-center-wrapper",on:{click:t.closeShare}}),i("div",{staticClass:"line"}),i("div",{staticClass:"sharing-con",on:{click:t.goShare}},[i("img",{staticClass:"image",attrs:{src:s("68d8")}}),i("div",{staticClass:"text font-color-red"},[i("div",[t._v("会员分享返")]),i("div",{staticClass:"money"},[i("span",{staticClass:"label"},[t._v("￥")]),t._v(t._s(t.priceName))]),i("div",{staticClass:"tip"},[t._v("下单即返佣金")]),i("div",{staticClass:"shareBut"},[t._v("立即分享")])])])])},u=[],p=(s("163d"),{name:"ShareRedPackets",props:{priceName:{type:[String,Number],default:""}},data:function(){return{state:!1}},mounted:function(){},methods:{goShare:function(){this.$emit("changeFun",{action:"shareCode",value:!1})},closeShare:function(){this.state=!0}}}),d=p,h=s("623f"),v=Object(h["a"])(d,l,u,!1,null,null,null),m=v.exports,f=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",[i("div",{staticClass:"coupon-list-window",class:!0===t.coupon.coupon?"on":""},[i("div",{staticClass:"title"},[t._v("\n      优惠券"),i("span",{staticClass:"iconfont icon-guanbi",on:{click:t.close}})]),t.coupon.list.length>0?i("div",{staticClass:"coupon-list"},t._l(t.coupon.list,(function(e,s){return i("div",{key:s,staticClass:"item acea-row row-center-wrapper",on:{click:function(i){return t.getCouponUser(s,e.id)}}},[i("div",{staticClass:"money",class:e.is_use?"moneyGray":""},[i("div",[t._v("\n            ￥"),i("span",{staticClass:"num"},[t._v(t._s(e.coupon_price))])]),i("div",{staticClass:"pic-num"},[t._v("满"+t._s(e.use_min_price)+"元可用")])]),i("div",{staticClass:"text"},[i("div",{staticClass:"condition line1"},[0===e.type?i("span",{staticClass:"line-title",class:e.is_use?"bg-color-huic":"bg-color-check"},[t._v("通用劵")]):1===e.type?i("span",{staticClass:"line-title",class:e.is_use?"bg-color-huic":"bg-color-check"},[t._v("品类券")]):i("span",{staticClass:"line-title",class:e.is_use?"bg-color-huic":"bg-color-check"},[t._v("商品券")]),i("span",[t._v(t._s(e.title))])]),i("div",{staticClass:"data acea-row row-between-wrapper"},[i("div",[t._v("\n              "+t._s(e.start_time?e.start_time+"-":"")+t._s(e.end_time)+"\n            ")]),i("div",{staticClass:"bnt acea-row row-center-wrapper",class:e.is_use?"gray":"bg-color-red"},[t._v("\n              "+t._s(e.is_use?"已领取":"立即领取")+"\n            ")])])])])})),0):i("div",{staticClass:"pictrue"},[i("img",{staticClass:"image",attrs:{src:s("5f10")}})])]),i("div",{staticClass:"mask",attrs:{hidden:!1===t.coupon.coupon},on:{touchmove:function(t){t.preventDefault()},click:t.close}})])},g=[],_=s("c24f"),C={name:"CouponPop",props:{coupon:{type:Object,default:function(){}}},data:function(){return{}},mounted:function(){},methods:{close:function(){this.$emit("changeFun",{action:"changecoupon",value:!1})},getCouponUser:function(t,e){var s=this,i=s.coupon.list;!0!==i[t].is_use&&Object(_["r"])(e).then((function(){s.$dialog.toast({mes:"已领取"}),s.$set(i[t],"is_use",!0),s.$emit("changefun",{action:"currentcoupon",value:t}),s.$emit("changeFun",{action:"changecoupon",value:!1})})).catch((function(t){s.$dialog.toast({mes:t.msg})}))}}},w=C,S=(s("e0f1"),Object(h["a"])(w,f,g,!1,null,"7aae4007",null)),y=S.exports,I=s("c6da"),b=s("cbd6"),k=s("e834"),A=s("00fd"),$=s("4d7d"),j=s.n($),O=s("73f5"),T=s("ed08"),D=s("74f9"),L=s("e876"),G=s("08c1"),N=s("d0a4"),M="GoodsCon",E="user_longitude",x="user_latitude",R={name:M,components:{swiper:n["swiper"],swiperSlide:n["swiperSlide"],ProductConSwiper:c["a"],UserEvaluation:r["a"],ShareRedPackets:m,CouponPop:y,ProductWindow:I["a"],StorePoster:b["a"],ShareInfo:k["a"]},data:function(){return{shareInfoStatus:!1,weixinStatus:!1,mapShow:!1,mapKey:"",posterData:{image:"",title:"",price:"",code:""},posterImageStatus:!1,animated:!1,coupon:{coupon:!1,list:[]},attr:{cartAttr:!1,productAttr:[],productSelect:{}},isOpen:!1,productValue:[],id:0,storeInfo:{},couponList:[],attrTxt:"请选择",attrValue:"",cart_num:1,replyCount:"",replyChance:"",reply:[],priceName:0,CartCount:0,posters:!1,banner:[{},{}],swiperRecommend:{pagination:{el:".swiper-pagination",clickable:!0},autoplay:!1,loop:!1,speed:1e3,observer:!0,observeParents:!0},goodList:[],system_store:{},storeSelfMention:!0,storeItems:{},activity:[],navList:[],lock:!1,navActive:0,opacity:0}},computed:Object(G["b"])(["isLogin"]),watch:{$route:function(t){t.name===M&&(this.id=t.params.id,this.storeInfo.slider_image=[],this.productCon())}},updated:function(){},mounted:function(){document.addEventListener("scroll",this.onScroll,!1),this.id=this.$route.params.id,this.storeInfo.slider_image=[],this.productCon(),this.coupons(),window.addEventListener("scroll",this.handleScroll),this.getList()},methods:{goDetail:function(t){"1"===t.type?this.$router.push({path:"/activity/seckill_detail/"+t.id+"/"+t.time+"/1"}):"2"===t.type?this.$router.push({path:"/activity/dargain_detail/"+t.id}):this.$router.push({path:"/activity/group_detail/"+t.id})},getList:function(){var t=this,e={latitude:N["a"].get(x)||"",longitude:N["a"].get(E)||"",page:1,limit:10};Object(O["q"])(e).then((function(e){t.storeItems=e.data.list[0]})).catch((function(t){console.log(t)}))},handleScroll:function(){var t=document.body.scrollTop||document.documentElement.scrollTop,e=t/350;e=e>1?1:e,this.opacity=e},asideTap:function(t){var e=this;this.$nextTick((function(){var s=t;e.navActive=s,e.goodList.length||2!==s||(s=3);var i=document.querySelector("#title"+s),a=i.offsetTop-e.$refs.header.offsetHeight-window.scrollY;e.lock=!0,window.scrollBy({top:a,left:0,behavior:"smooth"})}))},onScroll:j()((function(){var t=this;if(this.lock)this.lock=!1;else{var e=this.$refs.header.offsetHeight,s=window,i=s.scrollY,a=[];a.push(document.querySelector("#title0")),a.push(document.querySelector("#title1")),this.goodList.length&&a.push(document.querySelector("#title2")),a.push(document.querySelector("#title3")),a.reduce((function(s,a,o){if(document.querySelector("#title0")||document.querySelector("#title1")||document.querySelector("#title2"))return s||(i+e<a.offsetTop+a.offsetHeight&&(s=!0,t.navActive=o),s)}),!1)}}),500),showChang:function(){if(Object(T["d"])()){var t={latitude:parseFloat(this.storeItems.latitude),longitude:parseFloat(this.storeItems.longitude),name:this.storeItems.name,address:this.storeItems.address+this.system_store.detailed_address};Object(D["wechatEvevt"])("openLocation",t).then((function(t){console.log(t)})).catch((function(e){e.is_ready&&e.wx.openLocation(t)}))}else{if(!this.mapKey)return this.$dialog.error("暂无法使用查看地图，请配置您的腾讯地图key");this.mapShow=!0}},updateTitle:function(){document.title=this.storeInfo.store_name||this.$route.meta.title},showStoreList:function(){this.$store.commit("GET_TO","details"),this.$router.push("/shop/storeList/details")},setOpenShare:function(){var t=this.storeInfo,e=location.href;if(Object(T["d"])())if(this.isLogin)Object(_["G"])().then((function(s){e=-1===e.indexOf("?")?e+"?spread="+s.data.uid:e+"&spread="+s.data.uid;var i={desc:t.store_info,title:t.store_name,link:e,imgUrl:t.image};Object(D["wechatEvevt"])(["updateAppMessageShareData","updateTimelineShareData"],i).then((function(t){console.log(t)})).catch((function(t){t.is_ready&&(t.wx.updateAppMessageShareData(i),t.wx.updateTimelineShareData(i))}))}));else{var s={desc:t.store_info,title:t.store_name,link:e,imgUrl:t.image};Object(D["wechatEvevt"])(["updateAppMessageShareData","updateTimelineShareData"],s).then((function(t){console.log(t)})).catch((function(t){t.is_ready&&(t.wx.updateAppMessageShareData(s),t.wx.updateTimelineShareData(s))}))}},setShareInfoStatus:function(){this.shareInfoStatus=!this.shareInfoStatus,this.posters=!1},shareCode:function(t){var e=this;Object(O["g"])(e.id).then((function(s){s.data.code&&(e.posterData.code=s.data.code),!1===t&&e.listenerActionSheet()}))},setPosterImageStatus:function(){var t=document.body||document.documentElement;t.scrollTop=0,this.posterImageStatus=!this.posterImageStatus,this.posters=!1},productCon:function(){var t=this;Object(O["h"])(t.id).then((function(e){t.$set(t,"storeInfo",e.data.storeInfo),t.$set(t.attr,"productAttr",e.data.productAttr),t.$set(t,"productValue",e.data.productValue),t.$set(t,"replyCount",e.data.replyCount),t.$set(t,"replyChance",e.data.replyChance),t.reply=e.data.reply?[e.data.reply]:[],t.$set(t,"reply",t.reply),t.$set(t,"priceName",e.data.priceName),t.posterData.image=t.storeInfo.image_base,t.activity=e.data.activity?e.data.activity:[],t.storeInfo.store_name.length>30?t.posterData.title=t.storeInfo.store_name.substring(0,30)+"...":t.posterData.title=t.storeInfo.store_name,t.storeSelfMention=!!e.data.store_self_mention,t.posterData.price=t.storeInfo.price,t.posterData.code=t.storeInfo.code_base,t.system_store=e.data.system_store;for(var s=e.data.good_list||[],i=[],a=Math.ceil(s.length/6),o=0;o<a;o++){var n=s.slice(6*o,6*o+6);n.length&&i.push({list:n})}t.mapKey=e.data.mapKey,t.$set(t,"goodList",i);var c=["商品","评价","详情"];i.length&&c.splice(2,0,"推荐"),t.navList=c,t.updateTitle(),t.DefaultSelect(),t.getCartCount(),t.getImageBase64(),t.setOpenShare()})).catch((function(e){t.$dialog.error(e.msg),t.$router.go(-1)}))},getImageBase64:function(){var t=this;Object(L["m"])(this.posterData.image,t.posterData.code).then((function(e){t.posterData.image=e.data.image,t.posterData.code=e.data.code,t.isLogin&&t.shareCode()})).catch((function(){t.isLogin&&t.shareCode()}))},DefaultSelect:function(){var t=this.attr.productAttr,e=[];for(var s in this.productValue)if(this.productValue[s].stock>0){e=this.attr.productAttr.length?s.split(","):[];break}for(var i=0;i<t.length;i++)this.$set(t[i],"index",e[i]);var a=this.productValue[e.sort().join(",")];a&&t.length?(this.$set(this.attr.productSelect,"store_name",this.storeInfo.store_name),this.$set(this.attr.productSelect,"image",a.image),this.$set(this.attr.productSelect,"price",a.price),this.$set(this.attr.productSelect,"stock",a.stock),this.$set(this.attr.productSelect,"unique",a.unique),this.$set(this.attr.productSelect,"cart_num",1),this.$set(this,"attrValue",e.sort().join(",")),this.$set(this,"attrTxt","已选择")):!a&&t.length?(this.$set(this.attr.productSelect,"store_name",this.storeInfo.store_name),this.$set(this.attr.productSelect,"image",this.storeInfo.image),this.$set(this.attr.productSelect,"price",this.storeInfo.price),this.$set(this.attr.productSelect,"stock",0),this.$set(this.attr.productSelect,"unique",""),this.$set(this.attr.productSelect,"cart_num",0),this.$set(this,"attrValue",""),this.$set(this,"attrTxt","请选择")):a||t.length||(this.$set(this.attr.productSelect,"store_name",this.storeInfo.store_name),this.$set(this.attr.productSelect,"image",this.storeInfo.image),this.$set(this.attr.productSelect,"price",this.storeInfo.price),this.$set(this.attr.productSelect,"stock",this.storeInfo.stock),this.$set(this.attr.productSelect,"unique",this.storeInfo.unique||""),this.$set(this.attr.productSelect,"cart_num",1),this.$set(this,"attrValue",""),this.$set(this,"attrTxt","请选择"))},ChangeCartNum:function(t){var e=this.productValue[this.attrValue];if(void 0!==e||this.attr.productAttr.length||(e=this.attr.productSelect),void 0!==e){var s=e.stock||0,i=this.attr.productSelect;t?(i.cart_num++,i.cart_num>s&&(this.$set(this.attr.productSelect,"cart_num",s),this.$set(this,"cart_num",s))):(i.cart_num--,i.cart_num<1&&(this.$set(this.attr.productSelect,"cart_num",1),this.$set(this,"cart_num",1)))}},changeFun:function(t){"object"!==Object(o["a"])(t)&&(t={});var e=t.action||"",s=void 0===t.value?"":t.value;this[e]&&this[e](s)},couponTap:function(){var t=this;t.coupons(),t.coupon.coupon=!0},changecoupon:function(t){this.coupon.coupon=t,this.coupons()},currentcoupon:function(t){var e=this;e.coupon.coupon=!1,e.$set(e.coupon.list[t],"is_use",!0)},coupons:function(){var t=this,e={page:1,limit:20,type:1,product_id:t.id};Object(_["q"])(e).then((function(e){t.$set(t,"couponList",e.data||[]),t.$set(t.coupon,"list",e.data)}))},selecAttrTap:function(){this.attr.cartAttr=!0,this.isOpen=!0},changeattr:function(t){this.attr.cartAttr=t,this.isOpen=!1},ChangeAttr:function(t){var e=this.productValue[t];e?(this.$set(this.attr.productSelect,"image",e.image),this.$set(this.attr.productSelect,"price",e.price),this.$set(this.attr.productSelect,"stock",e.stock),this.$set(this.attr.productSelect,"unique",e.unique),this.$set(this.attr.productSelect,"cart_num",1),this.$set(this,"attrValue",t),this.$set(this,"attrTxt","已选择")):(this.$set(this.attr.productSelect,"image",this.storeInfo.image),this.$set(this.attr.productSelect,"price",this.storeInfo.price),this.$set(this.attr.productSelect,"stock",0),this.$set(this.attr.productSelect,"unique",""),this.$set(this.attr.productSelect,"cart_num",0),this.$set(this,"attrValue",""),this.$set(this,"attrTxt","请选择"))},setCollect:function(){var t=this,e=t.storeInfo.id,s="product";t.storeInfo.userCollect?Object(_["n"])(e,s).then((function(){t.storeInfo.userCollect=!t.storeInfo.userCollect})):Object(_["m"])(e,s).then((function(){t.storeInfo.userCollect=!t.storeInfo.userCollect}))},goGoods:function(t){var e=this;Object(A["c"])(t).then((function(){window.scroll(0,0),e.$router.push({path:"/detail/"+t.id})}))},joinCart:function(){this.goCat(0)},goCat:function(t){var e=this,s=e.productValue[this.attrValue];if(e.attrValue?e.attr.cartAttr=!e.isOpen:e.isOpen?e.attr.cartAttr=!0:e.attr.cartAttr=!e.attr.cartAttr,!0===e.attr.cartAttr&&!1===e.isOpen)return e.isOpen=!0;if(!this.attr.productSelect.cart_num||parseInt(this.attr.productSelect.cart_num)<=0)return e.$dialog.toast({mes:"请输入购买数量"});if(e.attr.productAttr.length&&void 0===s&&!0===e.isOpen)return e.$dialog.toast({mes:"产品库存不足，请选择其它"});var i={productId:e.id,cartNum:e.attr.productSelect.cart_num,new:t,uniqueId:void 0!==e.attr.productSelect?e.attr.productSelect.unique:""};Object(O["m"])(i).then((function(s){e.isOpen=!1,e.attr.cartAttr=!1,t?e.$router.push({path:"/order/submit/"+s.data.cartId}):e.$dialog.toast({mes:"添加购物车成功",callback:function(){e.getCartCount(!0)}})})).catch((function(t){return e.isOpen=!1,e.$dialog.toast({mes:t.msg})}))},getCartCount:function(t){var e=this,s=e.isLogin;s&&Object(O["b"])({numType:0}).then((function(s){e.CartCount=s.data.count,t&&(e.animated=!0,setTimeout((function(){e.animated=!1}),500))}))},tapBuy:function(){this.goCat(1)},listenerActionSheet:function(){!0===Object(T["d"])()&&(this.weixinStatus=!0),this.posters=!0},listenerActionClose:function(){this.posters=!1}},beforeDestroy:function(){document.removeEventListener("scroll",this.onScroll,!1),window.removeEventListener("scroll",this.handleScroll)}},U=R,V=(s("21e7"),Object(h["a"])(U,i,a,!1,null,"01b0fd80",null));e["default"]=V.exports},a191:function(t,e){t.exports="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA3ZpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuNi1jMTQyIDc5LjE2MDkyNCwgMjAxNy8wNy8xMy0wMTowNjozOSAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDo4MzY0MDk5ZC0yYTkzLTliNDEtOGRmYy1jOGJmMzFlMzdmNzEiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6Q0RDRjkwRTdEODI5MTFFOTkwMjJEM0NGMjU2NjJCMDYiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6Q0RDRjkwRTZEODI5MTFFOTkwMjJEM0NGMjU2NjJCMDYiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENDIDIwMTggKFdpbmRvd3MpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6ZGUzODVhZDQtYzhjNS00M2UxLTlkNWEtMTFmOGY5MGNlZWJkIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjgzNjQwOTlkLTJhOTMtOWI0MS04ZGZjLWM4YmYzMWUzN2Y3MSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PmrrFTIAAAGpSURBVHjazNe9T4NAFADw947WcqXgRw1KqtbJxcXFpZN/gyaNU/+4Ti4k/glOHZyMg3H0q2mThqhtU+wHnKBEaWzluGLwEkIgufsBx733DkCwdUu5jH+I9kdR1DsVg0tLaw4nfw6HUCm45YjguCAKojgmgArhmBAaG8cE0Vg4Joxy40QUxRWZoqHqc7r7fYq/rXMihK5RinvFOurKOW4UDBGcxEbX8xT39ToQrHgTVYZVanoPEhsnsVBdoXhgfKLff0kZNNlELRcLJ9yoUaB4uFUHKYSGcWXJxHyWGydcaEmlpLI9Gw3jcsaEJYkLJ9GoRsnRroeSCscyKkOWmN5UROIEUmokWORWsOh/NNbs2u7FXQ0ct8Ex3j2M3RNwWSsqsHy8cTTes93GY80b8HIuyeAW3ibHMHJaPNHs61NH4q2+za7bPn41C2W9YZUNxm3eEDo1x5H4w2uP3XROp3Affbar0B9ZceI2CoXMzYKKO8tnMHRk96lbBWtgxU0WKJwkdEUFxiTWGbyIZKjU0uL/LARSLX1SLfZSLW9TLeiT3MIIt0U3be8CDADFKvt2TKvKzAAAAABJRU5ErkJggg=="},c0f6:function(t,e,s){"use strict";var i=s("4b48"),a=s.n(i);a.a},e0f1:function(t,e,s){"use strict";var i=s("60b9"),a=s.n(i);a.a},e834:function(t,e,s){"use strict";var i=function(){var t=this,e=t.$createElement,i=t._self._c||e;return t.shareInfoStatus?i("div",{staticClass:"poster-first"},[i("div",{staticClass:"mask-share"},[i("img",{attrs:{src:s("2267")},on:{click:t.shareInfoClose}})])]):t._e()},a=[],o={name:"ShareInfo",props:{shareInfoStatus:Boolean},data:function(){return{}},mounted:function(){},methods:{shareInfoClose:function(){this.$emit("setShareInfoStatus")}}},n=o,c=(s("c0f6"),s("623f")),r=Object(c["a"])(n,i,a,!1,null,"f3067a28",null);e["a"]=r.exports}}]);
//# sourceMappingURL=chunk-2650e5ab.c2ec6d4f.js.map