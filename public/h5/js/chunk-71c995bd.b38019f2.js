(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-71c995bd"],{"8a7a":function(e,t,n){"use strict";n.r(t);var r=function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("div",{staticClass:"apply-return"},[e._l(e.orderInfo.cartInfo,function(t){return n("div",{key:t.id,staticClass:"goodsStyle acea-row row-between"},[n("div",{staticClass:"pictrue"},[n("img",{staticClass:"image",attrs:{src:t.productInfo.image}})]),n("div",{staticClass:"text acea-row row-between"},[n("div",{staticClass:"name line2"},[e._v(e._s(t.productInfo.store_name))]),n("div",{staticClass:"money"},[n("div",[e._v("\n          ￥"+e._s(t.productInfo.attrInfo?t.productInfo.attrInfo.price:t.productInfo.price)+"\n        ")]),n("div",{staticClass:"num"},[e._v("x"+e._s(t.cart_num))])])])])}),n("div",{staticClass:"list"},[n("div",{staticClass:"item acea-row row-between-wrapper"},[n("div",[e._v("退货件数")]),n("div",{staticClass:"num"},[e._v(e._s(e.orderInfo.total_num))])]),n("div",{staticClass:"item acea-row row-between-wrapper"},[n("div",[e._v("退款金额")]),n("div",{staticClass:"num"},[e._v("￥"+e._s(e.orderInfo.pay_price))])]),n("div",{staticClass:"item acea-row row-between-wrapper"},[n("div",[e._v("退款原因")]),n("div",{staticClass:"num acea-row row-left"},[n("select",{directives:[{name:"model",rawName:"v-model",value:e.reason,expression:"reason"}],on:{change:function(t){var n=Array.prototype.filter.call(t.target.options,function(e){return e.selected}).map(function(e){var t="_value"in e?e._value:e.value;return t});e.reason=t.target.multiple?n:n[0]}}},[n("option",{attrs:{value:""}},[e._v("选择退款原因")]),e._l(e.reasonList,function(t,r){return n("option",{key:r,domProps:{value:t}},[e._v("\n            "+e._s(t)+"\n          ")])})],2),n("span",{staticClass:"iconfont icon-jiantou"})])]),n("div",{staticClass:"item textarea acea-row row-between"},[n("div",[e._v("备注说明")]),n("textarea",{directives:[{name:"model",rawName:"v-model",value:e.refund_reason_wap_explain,expression:"refund_reason_wap_explain"}],staticClass:"num",attrs:{placeholder:"填写备注信息，100字以内"},domProps:{value:e.refund_reason_wap_explain},on:{input:function(t){t.target.composing||(e.refund_reason_wap_explain=t.target.value)}}})]),n("div",{staticClass:"item acea-row row-between"},[e._m(0),n("div",{staticClass:"upload acea-row row-middle"},[e._l(e.refund_reason_wap_img,function(t,r){return n("div",{key:t,staticClass:"pictrue"},[n("img",{attrs:{src:t}}),n("div",{staticClass:"iconfont icon-guanbi1 font-color-green",on:{click:function(t){return e.refund_reason_wap_img.splice(r,1)}}})])}),e.refund_reason_wap_img.length<3?n("VueCoreImageUpload",{staticClass:"btn btn-primary",attrs:{crop:!1,compress:"80",headers:e.headers,"max-file-size":5242880,credentials:!1,inputAccept:"image/*",inputOfFile:"file",url:e.url},on:{imageuploaded:e.imageuploaded}},[n("div",{staticClass:"pictrue acea-row row-center-wrapper row-column"},[n("span",{staticClass:"iconfont icon-icon25201"}),n("div",[e._v("上传凭证")])])]):e._e()],2)])]),n("div",{staticClass:"returnBnt bg-color-green",on:{click:e.submit}},[e._v("申请退款")])],2)},a=[function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("div",{staticClass:"title acea-row row-between-wrapper"},[n("div",[e._v("上传凭证")]),n("div",{staticClass:"tip"},[e._v("( 最多可上传3张 )")])])}],o=n("f8b7"),i=n("ed08"),s=n("f603"),u={name:"goodsReturn",components:{VueCoreImageUpload:s["a"]},data:function(){return{url:"".concat(i["a"],"/upload/image"),headers:{Authorization:"Bearer "+this.$store.state.app.token},id:this.$route.params.id||0,orderInfo:{},reasonList:[],reason:"",refund_reason_wap_explain:"",refund_reason_wap_img:[]}},methods:{imageuploaded:function(e){if(200!==e.status)return this.$dialog.error(e.msg||"上传图片失败");this.refund_reason_wap_img.push(e.data.url)},getOrderDetail:function(){var e=this;Object(o["i"])(this.id).then(function(t){e.orderInfo=t.data}).catch(function(t){e.$dialog.error(t.msg||"获取订单失败")})},getRefundReason:function(){var e=this;Object(o["h"])().then(function(t){e.reasonList=t.data})},submit:function(){var e=this,t=Object(i["f"])(this.refund_reason_wap_explain),n=this.reason;if(!n)return this.$dialog.toast({mes:"请选择退款原因"});Object(o["m"])({text:n,uni:this.orderInfo.order_id,refund_reason_wap_img:this.refund_reason_wap_img.join(","),refund_reason_wap_explain:t}).then(function(t){e.$dialog.success(t.msg),e.$router.go(-1)}).catch(function(t){e.$dialog.error(t.msg)})}},mounted:function(){this.getOrderDetail(),this.getRefundReason()}},c=u,d=n("2877"),l=Object(d["a"])(c,r,a,!1,null,null,null);t["default"]=l.exports},f8b7:function(e,t,n){"use strict";n.d(t,"l",function(){return a}),n.d(t,"k",function(){return o}),n.d(t,"e",function(){return i}),n.d(t,"b",function(){return s}),n.d(t,"f",function(){return u}),n.d(t,"g",function(){return c}),n.d(t,"a",function(){return d}),n.d(t,"i",function(){return l}),n.d(t,"h",function(){return f}),n.d(t,"m",function(){return p}),n.d(t,"n",function(){return _}),n.d(t,"c",function(){return m}),n.d(t,"d",function(){return v}),n.d(t,"j",function(){return w});var r=n("b775");function a(e){return r["a"].post("/order/confirm",{cartId:e})}function o(e,t){return r["a"].post("/order/computed/"+e,t)}function i(e){return r["a"].get("/coupons/order/"+(parseFloat(e)||0))}function s(e,t){return r["a"].post("/order/create/"+e,t||{})}function u(){return r["a"].get("/order/data")}function c(e){return r["a"].get("/order/list",e)}function d(e){return r["a"].post("/order/cancel",{id:e})}function l(e){return r["a"].get("/order/detail/"+e)}function f(){return r["a"].get("/order/refund/reason")}function p(e){return r["a"].post("/order/refund/verify",e)}function _(e){return r["a"].post("/order/take",{uni:e})}function m(e){return r["a"].post("/order/del",{uni:e})}function v(e){return r["a"].get("order/express/"+e)}function w(e,t,n){return r["a"].post("order/pay",{uni:e,paytype:t,from:n})}}}]);
//# sourceMappingURL=chunk-71c995bd.b38019f2.js.map