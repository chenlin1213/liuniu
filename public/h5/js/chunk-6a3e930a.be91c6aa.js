(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-6a3e930a"],{"13b9":function(t,i,a){"use strict";a.r(i);var s=function(){var t=this,i=t.$createElement,a=t._self._c||i;return a("div",{ref:"container",staticClass:"return-list"},[t._l(t.orderList,(function(i){return a("div",{key:i.order_id,staticClass:"goodWrapper"},[-1===i._status._type?a("div",{staticClass:"iconfont icon-tuikuanzhong powder"}):t._e(),-2===i._status._type?a("div",{staticClass:"iconfont icon-yituikuan"}):t._e(),a("div",{staticClass:"orderNum"},[t._v("订单号："+t._s(i.order_id))]),t._l(i.cartInfo,(function(s){return a("div",{key:s.id,staticClass:"item acea-row row-between-wrapper",on:{click:function(a){return t.$router.push({path:"/order/detail/"+i.order_id})}}},[a("div",{staticClass:"pictrue"},[a("img",{staticClass:"image",attrs:{src:s.productInfo.image},on:{click:function(i){return i.stopPropagation(),t.$router.push({path:"/detail/"+s.productInfo.id})}}})]),a("div",{staticClass:"text"},[a("div",{staticClass:"acea-row row-between-wrapper"},[a("div",{staticClass:"name line1"},[t._v(t._s(s.productInfo.store_name))]),a("div",{staticClass:"num"},[t._v("x "+t._s(s.cart_num))])]),s.productInfo.attrInfo?a("div",{staticClass:"attr line1"},[t._v("\n          "+t._s(s.productInfo.attrInfo.suk)+"\n        ")]):a("div",{staticClass:"attr line1"},[t._v(t._s(s.productInfo.store_name))]),a("div",{staticClass:"money"},[t._v("￥"+t._s(s.productInfo.price))])])])})),a("div",{staticClass:"totalSum"},[t._v("\n      共"+t._s(i.cartInfo.length||0)+"件商品，总金额\n      "),a("span",{staticClass:"font-color-red price"},[t._v("￥"+t._s(i.pay_price))])])],2)})),0===t.orderList.length&&t.page>1?a("div",{staticClass:"noCart"},[t._m(0)]):t._e(),a("Loading",{attrs:{loaded:t.loaded,loading:t.loading}})],2)},e=[function(){var t=this,i=t.$createElement,s=t._self._c||i;return s("div",{staticClass:"pictrue"},[s("img",{attrs:{src:a("530f")}})])}],n=a("f8b7"),r=a("3a5e"),o={name:"ReturnList",components:{Loading:r["a"]},data:function(){return{orderList:[],page:1,limit:20,loading:!1,loaded:!1}},methods:{getOrderList:function(){var t=this,i=this.page,a=this.limit;this.loading||this.loaded||(this.loading=!0,Object(n["g"])({page:i,limit:a,type:-3}).then((function(i){t.orderList=t.orderList.concat(i.data),t.loading=!1,t.loaded=i.data.length<a,t.page++})))}},mounted:function(){var t=this;this.getOrderList(),this.$scroll(this.$refs.container,(function(){!t.loading&&t.getOrderList()}))}},c=o,d=(a("72c7"),a("623f")),l=Object(d["a"])(c,s,e,!1,null,"69b4fdee",null);i["default"]=l.exports},"209e":function(t,i,a){},"530f":function(t,i,a){t.exports=a.p+"h5/img/noOrder.90017ce2.png"},"72c7":function(t,i,a){"use strict";var s=a("209e"),e=a.n(s);e.a}}]);
//# sourceMappingURL=chunk-6a3e930a.be91c6aa.js.map