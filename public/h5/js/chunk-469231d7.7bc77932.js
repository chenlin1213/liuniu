(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-469231d7"],{2452:function(e,n,t){},5496:function(e,n,t){"use strict";t.r(n);var r=function(){var e=this,n=e.$createElement,r=e._self._c||n;return r("div",{staticClass:"OrderCancellation"},[r("div",{staticClass:"header"}),r("div",{staticClass:"whiteBg"},[r("div",{staticClass:"input"},[r("input",{directives:[{name:"model",rawName:"v-model",value:e.verify_code,expression:"verify_code"}],attrs:{type:"number",placeholder:"0"},domProps:{value:e.verify_code},on:{input:function(n){n.target.composing||(e.verify_code=n.target.value)}}})]),r("div",{staticClass:"bnt",on:{click:e.storeCancellation}},[e._v("立即核销")])]),e.iswechat?r("div",{staticClass:"scan"},[r("img",{attrs:{src:t("ed45")},on:{click:e.openQRCode}})]):e._e(),r("WriteOff",{attrs:{iShidden:e.iShidden,orderInfo:e.orderInfo},on:{cancel:e.cancel,confirm:e.confirm}})],1)},o=[],i=function(){var e=this,n=e.$createElement,t=e._self._c||n;return t("div",{directives:[{name:"show",rawName:"v-show",value:!1===e.iShidden,expression:"iShidden === false"}]},[t("div",{staticClass:"WriteOff"},[t("div",{staticClass:"pictrue"},[t("img",{attrs:{src:e.orderInfo.image}})]),t("div",{staticClass:"num acea-row row-center-wrapper"},[e._v("\n      "+e._s(e.orderInfo.order_id)+"\n    ")]),t("div",{staticClass:"tip"},[e._v("确定要核销此订单吗？")]),t("div",{staticClass:"sure",on:{click:e.confirm}},[e._v("确定核销")]),t("div",{staticClass:"sure cancel",on:{click:e.cancel}},[e._v("取消")])]),t("div",{staticClass:"mask",on:{touchmove:function(e){e.preventDefault()}}})])},c=[],a={name:"WriteOff",props:{iShidden:{type:Boolean,default:!0},orderInfo:{type:Object}},data:function(){return{}},mounted:function(){},methods:{cancel:function(){this.$emit("cancel",!0)},confirm:function(){this.$emit("confirm",!0)}}},d=a,s=(t("e1d9"),t("2877")),u=Object(s["a"])(d,i,c,!1,null,"a85b11b2",null),f=u.exports,l=t("ed08"),v=t("74f9"),p=t("f8b7"),h="OrderCancellation",m={name:h,components:{WriteOff:f},props:{},data:function(){return{iShidden:!0,iswechat:Object(l["d"])(),orderInfo:{},verify_code:""}},mounted:function(){},methods:{cancel:function(e){this.iShidden=e},confirm:function(){var e=this;Object(p["j"])(this.verify_code,1).then(function(n){e.iShidden=!0,e.verify_code="",e.$dialog.success(n.msg)}).catch(function(n){e.$dialog.error(n.msg)})},storeCancellation:function(){var e=this,n=/[0-9]{12}/;return this.verify_code?n.test(this.verify_code)?(this.$dialog.loading.open("查询中"),void Object(p["j"])(this.verify_code,0).then(function(n){e.$dialog.loading.close(),e.orderInfo=n.data,e.iShidden=!1}).catch(function(n){return e.$dialog.loading.close(),e.verify_code="",e.$dialog.error(n.msg)})):this.$dialog.error("请输入正确的核销码"):this.$dialog.error("请输入核销码")},openQRCode:function(){var e=this;Object(v["wechatEvevt"])("scanQRCode",{needResult:1,scanType:["qrCode","barCode"]}).then(function(n){n.resultStr?(e.verify_code=n.resultStr,e.storeCancellation()):e.$dialog.error("没有扫描到什么！")}).catch(function(n){console.log(n),n.is_ready&&n.wx.scanQRCode({needResult:1,scanType:["qrCode","barCode"],success:function(n){e.verify_code=n.resultStr,e.storeCancellation()},fail:function(n){console.log(n),"scanQRCode:permission denied"==n.errMsg&&e.$dialog.error("没有权限")}})})}}},g=m,_=(t("e3be"),Object(s["a"])(g,r,o,!1,null,"3985d502",null));n["default"]=_.exports},"9d80":function(e,n,t){},e1d9:function(e,n,t){"use strict";var r=t("2452"),o=t.n(r);o.a},e3be:function(e,n,t){"use strict";var r=t("9d80"),o=t.n(r);o.a},ed45:function(e,n,t){e.exports=t.p+"h5/img/scan.2ca2147e.gif"},f8b7:function(e,n,t){"use strict";t.d(n,"m",function(){return o}),t.d(n,"l",function(){return i}),t.d(n,"e",function(){return c}),t.d(n,"b",function(){return a}),t.d(n,"f",function(){return d}),t.d(n,"g",function(){return s}),t.d(n,"a",function(){return u}),t.d(n,"i",function(){return f}),t.d(n,"h",function(){return l}),t.d(n,"n",function(){return v}),t.d(n,"o",function(){return p}),t.d(n,"c",function(){return h}),t.d(n,"d",function(){return m}),t.d(n,"k",function(){return g}),t.d(n,"j",function(){return _});var r=t("b775");function o(e){return r["a"].post("/order/confirm",{cartId:e})}function i(e,n){return r["a"].post("/order/computed/"+e,n)}function c(e){return r["a"].get("/coupons/order/"+(parseFloat(e)||0))}function a(e,n){return r["a"].post("/order/create/"+e,n||{})}function d(){return r["a"].get("/order/data")}function s(e){return r["a"].get("/order/list",e)}function u(e){return r["a"].post("/order/cancel",{id:e})}function f(e){return r["a"].get("/order/detail/"+e)}function l(){return r["a"].get("/order/refund/reason")}function v(e){return r["a"].post("/order/refund/verify",e)}function p(e){return r["a"].post("/order/take",{uni:e})}function h(e){return r["a"].post("/order/del",{uni:e})}function m(e){return r["a"].get("order/express/"+e)}function g(e,n,t){return r["a"].post("order/pay",{uni:e,paytype:n,from:t})}function _(e,n){return r["a"].post("order/order_verific",{verify_code:e,is_confirm:n})}}}]);
//# sourceMappingURL=chunk-469231d7.7bc77932.js.map