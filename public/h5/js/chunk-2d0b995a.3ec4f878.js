(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-2d0b995a"],{3425:function(t,s,o){"use strict";o.r(s);var a=function(){var t=this,s=t.$createElement,o=t._self._c||s;return o("div",{staticClass:"my-promotion"},[o("div",{staticClass:"header"},[o("div",{staticClass:"name acea-row row-center-wrapper"},[o("div",[t._v("当前佣金")]),o("router-link",{staticClass:"record",attrs:{to:"/user/cashrecord"}},[t._v("\n        提现记录"),o("span",{staticClass:"iconfont icon-xiangyou"})])],1),o("div",{staticClass:"num"},[t._v(t._s(t.Info.commissionCount))]),o("div",{staticClass:"profit acea-row row-between-wrapper"},[o("div",{staticClass:"item"},[o("div",[t._v("昨日收益")]),o("div",{staticClass:"money"},[t._v(t._s(t.Info.lastDayCount))])]),o("div",{staticClass:"item"},[o("div",[t._v("累积已提")]),o("div",{staticClass:"money"},[t._v(t._s(t.Info.extractCount))])])])]),o("div",{staticClass:"bnt bg-color-red",on:{click:t.toCash}},[t._v("立即提现")]),o("div",{staticClass:"list acea-row row-between-wrapper"},[o("router-link",{staticClass:"item acea-row row-center-wrapper row-column",attrs:{to:"/user/poster"}},[o("span",{staticClass:"iconfont icon-erweima"}),o("div",[t._v("推广名片")])]),o("router-link",{staticClass:"item acea-row row-center-wrapper row-column",attrs:{to:"/user/promoter_list"}},[o("span",{staticClass:"iconfont icon-tongji"}),o("div",[t._v("推广人统计")])]),o("router-link",{staticClass:"item acea-row row-center-wrapper row-column",attrs:{to:"/user/commission"}},[o("span",{staticClass:"iconfont icon-qiandai"}),o("div",[t._v("佣金明细")])]),o("router-link",{staticClass:"item acea-row row-center-wrapper row-column",attrs:{to:"/user/promoter_order"}},[o("span",{staticClass:"iconfont icon-dingdan"}),o("div",[t._v("推广人订单")])])],1)])},n=[],i=o("c24f"),r={name:"UserPromotion",components:{},props:{},data:function(){return{Info:{lastDayCount:0,extractCount:0,commissionCount:0}}},mounted:function(){this.getInfo()},methods:{getInfo:function(){var t=this;Object(i["y"])().then(function(s){t.Info=s.data},function(s){t.$dialog.message(s.msg)})},toCash:function(){this.$router.push({path:"/user/user_cash"})}}},e=r,c=o("2877"),l=Object(c["a"])(e,a,n,!1,null,null,null);s["default"]=l.exports}}]);
//# sourceMappingURL=chunk-2d0b995a.3ec4f878.js.map