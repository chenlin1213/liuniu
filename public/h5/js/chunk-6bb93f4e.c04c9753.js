(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-6bb93f4e"],{"3caf":function(t,a,e){},9758:function(t,a,e){"use strict";var s=e("3caf"),i=e.n(s);i.a},edc3:function(t,a,e){"use strict";var s=function(){var t=this,a=t.$createElement,e=t._self._c||a;return e("div",{staticClass:"evaluateWtapper"},t._l(t.reply,function(a,s){return e("div",{key:s,staticClass:"evaluateItem"},[e("div",{staticClass:"pic-text acea-row row-middle"},[e("div",{staticClass:"pictrue"},[e("img",{staticClass:"image",attrs:{src:a.avatar}})]),e("div",{staticClass:"acea-row row-middle"},[e("div",{staticClass:"name line1"},[t._v(t._s(a.nickname))]),e("div",{staticClass:"start",class:"star"+a.star})])]),e("div",{staticClass:"time"},[t._v(t._s(a.add_time)+" "+t._s(a.suk))]),e("div",{staticClass:"evaluate-infor"},[t._v(t._s(a.comment))]),e("div",{staticClass:"imgList acea-row"},t._l(a.pics,function(t,a){return e("div",{key:a,staticClass:"pictrue"},[e("img",{staticClass:"image",attrs:{src:t}})])}),0),a.merchant_reply_content?e("div",{staticClass:"reply"},[e("span",{staticClass:"font-color-red"},[t._v("店小二")]),t._v("："+t._s(a.merchant_reply_content)+"\n    ")]):t._e()])}),0)},i=[],n={name:"UserEvaluation",props:{reply:{type:Array,default:function(){return[]}}},data:function(){return{}},mounted:function(){},methods:{}},r=n,c=e("2877"),l=Object(c["a"])(r,s,i,!1,null,null,null);a["a"]=l.exports},f40b:function(t,a,e){"use strict";e.r(a);var s=function(){var t=this,a=t.$createElement,e=t._self._c||a;return e("div",{ref:"container",staticClass:"evaluate-list"},[e("div",{staticClass:"header"},[e("div",{staticClass:"generalComment acea-row row-between-wrapper"},[e("div",{staticClass:"acea-row row-middle font-color-red"},[e("div",{staticClass:"evaluate"},[t._v("评分")]),e("div",{staticClass:"start",class:"star"+t.replyData.reply_star})]),e("div",[e("span",{staticClass:"font-color-red"},[t._v(t._s(t.replyData.reply_chance||0)+"%")]),t._v("好评率\n      ")])]),e("div",{staticClass:"nav acea-row row-middle"},t._l(t.navList,function(a,s){return e("div",{key:s,staticClass:"acea-row row-center-wrapper",on:{click:function(a){return t.changeType(s)}}},[a.num?e("div",{staticClass:"item",class:t.currentActive===s?"bg-color-red":""},[t._v("\n          "+t._s(a.evaluate)+"("+t._s(a.num)+")\n        ")]):t._e()])}),0)]),e("UserEvaluation",{attrs:{reply:t.reply}}),e("Loading",{attrs:{loaded:t.loadend,loading:t.loading}})],1)},i=[],n=e("edc3"),r=e("73f5"),c=e("3a5e"),l={name:"EvaluateList",components:{UserEvaluation:n["a"],Loading:c["a"]},props:{},data:function(){return{product_id:0,replyData:{},navList:[{evaluate:"全部",num:0},{evaluate:"好评",num:0},{evaluate:"中评",num:0},{evaluate:"差评",num:0}],currentActive:0,page:1,limit:8,reply:[],loadTitle:"",loading:!1,loadend:!1}},mounted:function(){var t=this;this.product_id=this.$route.params.id,this.getProductReplyCount(),this.getProductReplyList(),this.$scroll(this.$refs.container,function(){!t.loading&&t.getProductReplyList()})},methods:{getProductReplyCount:function(){var t=this;Object(r["j"])(t.product_id).then(function(a){t.$set(t,"replyData",a.data),t.navList[0].num=a.data.sum_count,t.navList[1].num=a.data.good_count,t.navList[2].num=a.data.in_count,t.navList[3].num=a.data.poor_count})},getProductReplyList:function(){var t=this;if(!t.loading&&!t.loadend){t.loading=!0;var a={page:t.page,limit:t.limit,type:t.currentActive};Object(r["k"])(t.product_id,a).then(function(a){t.loading=!1,t.reply.push.apply(t.reply,a.data),t.loadend=a.data.length<t.limit,t.page=t.page+1})}},changeType:function(t){var a=this;a.currentActive=t,a.page=1,a.loadend=!1,a.$set(a,"reply",[]),a.getProductReplyList()}}},o=l,d=(e("9758"),e("2877")),u=Object(d["a"])(o,s,i,!1,null,"6695926f",null);a["default"]=u.exports}}]);
//# sourceMappingURL=chunk-6bb93f4e.c04c9753.js.map