(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-7492165a"],{"4e9d":function(e,t,s){"use strict";var i=s("6470"),n=s.n(i);n.a},"563c":function(e,t,s){e.exports=s.p+"h5/img/noAddress.d76a1cef.png"},"5f10":function(e,t,s){e.exports=s.p+"h5/img/noCoupon.e524084b.png"},6470:function(e,t,s){},"6c69":function(e,t,s){"use strict";s.r(t);var i=function(){var e=this,t=e.$createElement,s=e._self._c||t;return s("div",{staticClass:"order-submission"},[e._m(0),s("div",{staticClass:"address acea-row row-between-wrapper",on:{click:e.addressTap}},[e.addressInfo.real_name?s("div",{staticClass:"addressCon"},[s("div",{staticClass:"name"},[e._v("\n        "+e._s(e.addressInfo.real_name)+"\n        "),s("span",{staticClass:"phone"},[e._v(e._s(e.addressInfo.phone))])]),s("div",[e.addressInfo.is_default?s("span",{staticClass:"default font-color-green"},[e._v("[默认]")]):e._e(),e._v("\n        "+e._s(e.addressInfo.province)+e._s(e.addressInfo.city)+e._s(e.addressInfo.district)+e._s(e.addressInfo.detail)+"\n      ")])]):s("div",{staticClass:"addressCon"},[s("div",{staticClass:"setaddress"},[e._v("设置收货地址")])]),s("div",{staticClass:"iconfont icon-jiantou"})]),s("OrderGoods",{attrs:{evaluate:0,cartInfo:e.orderGroupInfo.cartInfo}}),s("div",{staticClass:"wrapper"},[!1===e.deduction?s("div",{staticClass:"item acea-row row-between-wrapper",on:{click:e.couponTap}},[s("div",[e._v("优惠券")]),s("div",{staticClass:"discount"},[e._v("\n        "+e._s(e.usableCoupon.coupon_title||"请选择")+"\n        "),s("span",{staticClass:"iconfont icon-jiantou"})])]):e._e(),!1===e.deduction?s("div",{staticClass:"item acea-row row-between-wrapper"},[s("div",[e._v("积分抵扣")]),s("div",{staticClass:"discount"},[s("div",{staticClass:"select-btn"},[s("div",{staticClass:"checkbox-wrapper"},[s("label",{staticClass:"well-check"},[s("input",{directives:[{name:"model",rawName:"v-model",value:e.useIntegral,expression:"useIntegral"}],attrs:{type:"checkbox"},domProps:{checked:Array.isArray(e.useIntegral)?e._i(e.useIntegral,null)>-1:e.useIntegral},on:{change:function(t){var s=e.useIntegral,i=t.target,n=!!i.checked;if(Array.isArray(s)){var a=null,o=e._i(s,a);i.checked?o<0&&(e.useIntegral=s.concat([a])):o>-1&&(e.useIntegral=s.slice(0,o).concat(s.slice(o+1)))}else e.useIntegral=n}}}),s("i",{staticClass:"icon"}),s("span",{staticClass:"integral"},[e._v("\n                当前积分\n                "),s("span",{staticClass:"num font-color-orange"},[e._v("\n                  "+e._s(e.userInfo.integral||0)+"\n                ")])])])])])])]):e._e(),s("div",{staticClass:"item acea-row row-between-wrapper"},[s("div",[e._v("快递费用")]),s("div",{staticClass:"discount"},[e._v("\n        "+e._s(e.orderGroupInfo.priceGroup.storePostage>0?e.orderGroupInfo.priceGroup.storePostage:"免运费")+"\n      ")])]),s("div",{staticClass:"item"},[s("div",[e._v("备注信息")]),s("textarea",{directives:[{name:"model",rawName:"v-model",value:e.mark,expression:"mark"}],attrs:{placeholder:"请添加备注（150字以内）"},domProps:{value:e.mark},on:{input:function(t){t.target.composing||(e.mark=t.target.value)}}})])]),s("div",{staticClass:"wrapper"},[s("div",{staticClass:"item"},[s("div",[e._v("支付方式")]),s("div",{staticClass:"list"},[s("div",{directives:[{name:"show",rawName:"v-show",value:e.isWeixin,expression:"isWeixin"}],staticClass:"payItem acea-row row-middle",class:"weixin"===e.active?"on":"",on:{click:function(t){return e.payItem("weixin")}}},[s("div",{staticClass:"name acea-row row-center-wrapper"},[s("div",{staticClass:"iconfont icon-weixin2",class:"weixin"===e.active?"bounceIn":""}),e._v("\n            微信支付\n          ")]),s("div",{staticClass:"tip"},[e._v("微信快捷支付")])]),s("div",{directives:[{name:"show",rawName:"v-show",value:!e.isWeixin,expression:"!isWeixin"}],staticClass:"payItem acea-row row-middle",class:"weixin"===e.active?"on":"",on:{click:function(t){return e.payItem("weixin")}}},[s("div",{staticClass:"name acea-row row-center-wrapper"},[s("div",{staticClass:"iconfont icon-weixin2",class:"weixin"===e.active?"bounceIn":""}),e._v("\n            微信支付\n          ")]),s("div",{staticClass:"tip"},[e._v("微信快捷支付")])]),s("div",{staticClass:"payItem acea-row row-middle",class:"yue"===e.active?"on":"",on:{click:function(t){return e.payItem("yue")}}},[s("div",{staticClass:"name acea-row row-center-wrapper"},[s("div",{staticClass:"iconfont icon-icon-test",class:"yue"===e.active?"bounceIn":""}),e._v("\n            余额支付\n          ")]),s("div",{staticClass:"tip"},[e._v("可用余额："+e._s(e.userInfo.now_money||0))])]),1===e.offlinePayStatus&&!1===e.deduction?s("div",{staticClass:"payItem acea-row row-middle",class:"offline"===e.active?"on":"",on:{click:function(t){return e.payItem("offline")}}},[s("div",{staticClass:"name acea-row row-center-wrapper"},[s("div",{staticClass:"iconfont icon-yinhangqia",class:"offline"===e.active?"bounceIn":""}),e._v("\n            线下支付\n          ")]),s("div",{staticClass:"tip"},[e._v("线下方便支付")])]):e._e()])])]),s("div",{staticClass:"moneyList"},[void 0!==e.orderPrice.total_price?s("div",{staticClass:"item acea-row row-between-wrapper"},[s("div",[e._v("商品总价：")]),s("div",{staticClass:"money"},[e._v("￥"+e._s(e.orderPrice.total_price))])]):e._e(),e.orderPrice.pay_postage>0?s("div",{staticClass:"item acea-row row-between-wrapper"},[s("div",[e._v("运费：")]),s("div",{staticClass:"money"},[e._v("￥"+e._s(e.orderPrice.pay_postage))])]):e._e(),e.orderPrice.coupon_price>0?s("div",{staticClass:"item acea-row row-between-wrapper"},[s("div",[e._v("优惠券抵扣：")]),s("div",{staticClass:"money"},[e._v("-￥"+e._s(e.orderPrice.coupon_price))])]):e._e(),e.orderPrice.deduction_price>0?s("div",{staticClass:"item acea-row row-between-wrapper"},[s("div",[e._v("积分抵扣：")]),s("div",{staticClass:"money"},[e._v("-￥"+e._s(e.orderPrice.deduction_price))])]):e._e()]),s("div",{staticStyle:{height:"1.2rem"}}),s("div",{staticClass:"footer acea-row row-between-wrapper"},[s("div",[e._v("\n      合计:\n      "),s("span",{staticClass:"font-color-orange font-color-orange"},[e._v("￥"+e._s(e.orderPrice.pay_price))])]),s("div",{staticClass:"settlement bg-color-green",on:{click:e.createOrder}},[e._v("立即结算")])]),s("CouponListWindow",{attrs:{price:e.orderPrice.total_price,checked:e.usableCoupon.id},on:{couponchange:function(t){return e.changecoupon(t)},checked:e.changeCoupon},model:{value:e.showCoupon,callback:function(t){e.showCoupon=t},expression:"showCoupon"}}),s("AddressWindow",{ref:"mychild",attrs:{checked:e.addressInfo.id},on:{checked:e.changeAddress,redirect:e.addressRedirect},model:{value:e.showAddress,callback:function(t){e.showAddress=t},expression:"showAddress"}})],1)},n=[function(){var e=this,t=e.$createElement,i=e._self._c||t;return i("div",{staticClass:"line"},[i("img",{attrs:{src:s("afa3")}})])}],a=(s("a481"),s("7f7f"),s("713c")),o=function(){var e=this,t=e.$createElement,s=e._self._c||t;return s("div",[s("div",{staticClass:"coupon-list-window",class:!0===e.value?"on":""},[s("div",{staticClass:"title"},[e._v("\n      优惠券\n      "),s("span",{staticClass:"iconfont icon-guanbi",on:{click:e.close}})]),e.couponList.length>0?s("div",[s("div",{staticClass:"coupon-list"},e._l(e.couponList,function(t){return s("div",{key:t.id,staticClass:"item acea-row row-center-wrapper",on:{click:function(s){return e.click(t)}}},[s("div",{staticClass:"money"},[e._v("\n            ￥\n            "),s("span",{staticClass:"num"},[e._v(e._s(t.coupon_price))])]),s("div",{staticClass:"text"},[s("div",{staticClass:"condition line1"},[e._v(e._s(t.coupon_title))]),s("div",{staticClass:"data acea-row row-between-wrapper"},[0===t.end_time?s("div",[e._v("不限时")]):s("div",[e._v(e._s(t.add_time)+"-"+e._s(t.end_time))]),e.checked===t.id?s("div",{staticClass:"iconfont icon-xuanzhong1 font-color-orange"}):s("div",{staticClass:"iconfont icon-weixuanzhong"})])])])}),0),s("div",{staticClass:"couponNo bg-color-green",on:{click:e.couponNo}},[e._v("\n        不使用优惠券\n      ")])]):e._e(),!e.couponList.length&&e.loaded?s("div",[e._m(0)]):e._e()]),s("div",{staticClass:"mask",attrs:{hidden:!1===e.value},on:{touchmove:function(e){e.preventDefault()},click:e.close}})])},r=[function(){var e=this,t=e.$createElement,i=e._self._c||t;return i("div",{staticClass:"pictrue"},[i("img",{staticClass:"image",attrs:{src:s("5f10")}})])}],c=(s("c5f6"),s("f8b7")),d={name:"CouponListWindow",props:{value:Boolean,checked:Number,price:{type:[Number,String],default:void 0}},data:function(){return{couponList:[],loaded:!1}},watch:{price:function(e){void 0!==e&&null!=e&&this.getCoupon()}},mounted:function(){},methods:{close:function(){this.$emit("input",!1),this.$emit("close")},getCoupon:function(){var e=this;Object(c["e"])(this.price).then(function(t){e.couponList=t.data,e.loaded=!0})},click:function(e){this.$emit("checked",e),this.$emit("input",!1)},couponNo:function(){this.$emit("checked",null),this.$emit("input",!1)}}},u=d,l=(s("4e9d"),s("2877")),p=Object(l["a"])(u,o,r,!1,null,"461056f4",null),f=p.exports,v=function(){var e=this,t=e.$createElement,i=e._self._c||t;return i("div",[i("div",{staticClass:"address-window",class:!0===e.value?"on":""},[i("div",{staticClass:"title"},[e._v("\n      选择地址"),i("span",{staticClass:"iconfont icon-guanbi",on:{click:e.closeAddress}})]),e.addressList.length?i("div",{staticClass:"list"},e._l(e.addressList,function(t,s){return i("div",{key:s,staticClass:"item acea-row row-between-wrapper",class:t.id===e.checked?"font-color-green":"",on:{click:function(t){return e.tapAddress(s)}}},[i("span",{staticClass:"iconfont icon-ditu",class:t.id===e.checked?"font-color-green":""}),i("div",{staticClass:"addressTxt"},[i("div",{staticClass:"name",class:t.id===e.checked?"font-color-green":""},[e._v("\n            "+e._s(t.real_name)),i("span",{staticClass:"phone"},[e._v(e._s(t.phone))])]),i("div",{staticClass:"line1"},[e._v("\n            "+e._s(t.province)+e._s(t.city)+e._s(t.district)+e._s(t.detail)+"\n          ")])]),i("span",{staticClass:"iconfont icon-complete",class:t.id===e.checked?"font-color-green":""})])}),0):e._e(),e.addressList.length<1?i("div",{staticClass:"pictrue"},[i("img",{staticClass:"image",attrs:{src:s("563c")}})]):e._e(),i("div",{staticClass:"addressBnt bg-color-green",on:{click:e.goAddressPages}},[e._v("\n      新加地址\n    ")])]),i("div",{staticClass:"mask",attrs:{hidden:!1===e.value},on:{touchmove:function(e){e.preventDefault()},click:e.closeAddress}})])},h=[],m=s("c24f"),_={name:"AddressWindow",props:{value:Boolean,checked:Number},data:function(){return{addressList:[],current:0,cartId:0,pinkId:0,couponId:0}},mounted:function(){},methods:{getAddressList:function(){var e=this;Object(m["f"])().then(function(t){e.addressList=t.data})},closeAddress:function(){this.$emit("input",!1)},goAddressPages:function(){this.$router.push({path:"/user/add_address"}),this.$emit("redirect")},tapAddress:function(e){this.$emit("checked",this.addressList[e]),this.$emit("input",!1)}}},C=_,w=Object(l["a"])(C,v,h,!1,null,null,null),g=w.exports,I=s("2f62"),b=s("74f9"),k=s("ed08"),y="OrderSubmission",x=Object(k["d"])(),$={name:y,components:{OrderGoods:a["a"],CouponListWindow:f,AddressWindow:g},props:{},data:function(){return{offlinePayStatus:2,from:x?"weixin":"weixinh5",deduction:!0,isWeixin:x,pinkId:0,active:x?"weixin":"yue",showCoupon:!1,showAddress:!1,addressInfo:{},couponId:0,orderGroupInfo:{priceGroup:{}},usableCoupon:{},addressLoaded:!1,useIntegral:!1,orderPrice:{pay_price:"计算中"},mark:""}},computed:Object(I["b"])(["userInfo"]),watch:{useIntegral:function(){this.computedPrice()},$route:function(e){e.name===y&&this.getCartInfo()}},mounted:function(){var e=this;this.getCartInfo(),void 0!==e.$route.query.pinkid&&(e.pinkId=e.$route.query.pinkid)},methods:{computedPrice:function(){var e=this;Object(c["k"])(this.orderGroupInfo.orderKey,{addressId:this.addressInfo.id,useIntegral:this.useIntegral?1:0,couponId:this.usableCoupon.id||0}).then(function(t){var s=t.data;"EXTEND_ORDER"===s.status?e.$router.replace({path:"/order/detail/"+s.result.orderId}):e.orderPrice=s.result})},getCartInfo:function(){var e=this,t=this.$route.params.id;if(!t)return this.$dialog.error("参数有误"),this.$router.go(-1);Object(c["l"])(t).then(function(t){e.offlinePayStatus=t.data.offline_pay_status,e.orderGroupInfo=t.data,e.deduction=t.data.deduction,e.usableCoupon=t.data.usableCoupon||{},e.addressInfo=t.data.addressInfo||{},e.computedPrice()}).catch(function(){e.$dialog.error("加载订单数据失败")})},addressTap:function(){this.showAddress=!0,this.addressLoaded||(this.addressLoaded=!0,this.$refs.mychild.getAddressList())},addressRedirect:function(){this.addressLoaded=!1,this.showAddress=!1},couponTap:function(){this.showCoupon=!0},changeCoupon:function(e){this.usableCoupon=e||{coupon_title:"不使用优惠券",id:0},this.computedPrice()},payItem:function(e){this.active=e},changeAddress:function(e){this.addressInfo=e},createOrder:function(){var e=this;return this.active?this.addressInfo.id?(this.$dialog.loading.open("生成订单中"),void Object(c["b"])(this.orderGroupInfo.orderKey,{addressId:this.addressInfo.id,useIntegral:this.useIntegral?1:0,couponId:this.usableCoupon.id||0,payType:this.active,pinkId:this.pinkId,seckill_id:this.orderGroupInfo.seckill_id,combinationId:this.orderGroupInfo.combination_id,bargainId:this.orderGroupInfo.bargain_id,from:this.from,mark:this.mark||""}).then(function(t){e.$dialog.loading.close();var s=t.data;switch(s.status){case"ORDER_EXIST":case"EXTEND_ORDER":case"PAY_DEFICIENCY":case"PAY_ERROR":e.$dialog.toast({mes:t.msg}),e.$router.replace({path:"/order/detail/"+s.result.orderId});break;case"SUCCESS":e.$dialog.success(t.msg),e.$router.replace({path:"/order/detail/"+s.result.orderId});break;case"WECHAT_H5_PAY":e.$router.replace({path:"/order/detail/"+s.result.orderId}),setTimeout(function(){location.href=s.result.jsConfig.mweb_url},100);break;case"WECHAT_PAY":Object(b["pay"])(s.result.jsConfig).finally(function(){e.$router.replace({path:"/order/detail/"+s.result.orderId})})}}).catch(function(t){console.log(t),e.$dialog.loading.close(),e.$dialog.error(t.msg||"创建订单失败")})):this.$dialog.toast({mes:"请选择收货地址"}):this.$dialog.toast({mes:"请选择支付方式"})}}},A=$,P=Object(l["a"])(A,i,n,!1,null,null,null);t["default"]=P.exports},"713c":function(e,t,s){"use strict";var i=function(){var e=this,t=e.$createElement,s=e._self._c||t;return s("div",{staticClass:"orderGoods"},[s("div",{staticClass:"total"},[e._v("共"+e._s(e.cartInfo.length)+"件商品")]),s("div",{staticClass:"goodWrapper"},e._l(e.cartInfo,function(t){return s("div",{key:t.id,staticClass:"item acea-row row-between-wrapper"},[s("div",{staticClass:"pictrue"},[s("img",{staticClass:"image",attrs:{src:t.productInfo.image}})]),s("div",{staticClass:"text"},[s("div",{staticClass:"acea-row row-between-wrapper"},[s("div",{staticClass:"name line1"},[e._v(e._s(t.productInfo.store_name))]),s("div",{staticClass:"num"},[e._v("x "+e._s(t.cart_num))])]),t.productInfo.attrInfo?s("div",{staticClass:"attr line1"},[e._v("\n          "+e._s(t.productInfo.attrInfo.suk)+"\n        ")]):e._e(),s("div",{staticClass:"money font-color-orange"},[e._v("￥"+e._s(t.truePrice))]),3===e.evaluate?s("div",{staticClass:"evaluate",on:{click:function(s){return e.$router.push({path:"/goods_evaluate/"+t.unique})}}},[e._v("\n          评价\n        ")]):e._e()])])}),0)])},n=[],a=(s("c5f6"),{name:"OrderGoods",props:{evaluate:Number,cartInfo:{type:Array,default:function(){return[]}}},data:function(){return{}},mounted:function(){},methods:{}}),o=a,r=s("2877"),c=Object(r["a"])(o,i,n,!1,null,null,null);t["a"]=c.exports},afa3:function(e,t,s){e.exports=s.p+"h5/img/line.05bf1c84.jpg"},f8b7:function(e,t,s){"use strict";s.d(t,"l",function(){return n}),s.d(t,"k",function(){return a}),s.d(t,"e",function(){return o}),s.d(t,"b",function(){return r}),s.d(t,"f",function(){return c}),s.d(t,"g",function(){return d}),s.d(t,"a",function(){return u}),s.d(t,"i",function(){return l}),s.d(t,"h",function(){return p}),s.d(t,"m",function(){return f}),s.d(t,"n",function(){return v}),s.d(t,"c",function(){return h}),s.d(t,"d",function(){return m}),s.d(t,"j",function(){return _});var i=s("b775");function n(e){return i["a"].post("/order/confirm",{cartId:e})}function a(e,t){return i["a"].post("/order/computed/"+e,t)}function o(e){return i["a"].get("/coupons/order/"+(parseFloat(e)||0))}function r(e,t){return i["a"].post("/order/create/"+e,t||{})}function c(){return i["a"].get("/order/data")}function d(e){return i["a"].get("/order/list",e)}function u(e){return i["a"].post("/order/cancel",{id:e})}function l(e){return i["a"].get("/order/detail/"+e)}function p(){return i["a"].get("/order/refund/reason")}function f(e){return i["a"].post("/order/refund/verify",e)}function v(e){return i["a"].post("/order/take",{uni:e})}function h(e){return i["a"].post("/order/del",{uni:e})}function m(e){return i["a"].get("order/express/"+e)}function _(e,t,s){return i["a"].post("order/pay",{uni:e,paytype:t,from:s})}}}]);
//# sourceMappingURL=chunk-7492165a.a78bf334.js.map