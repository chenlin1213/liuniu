(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-454f76eb"],{2267:function(t,s,e){t.exports=e.p+"h5/img/share-info.fa0bedf8.png"},"69bc":function(t,s,e){},"92ad":function(t,s,e){"use strict";var a=e("69bc"),i=e.n(a);i.a},be73:function(t,s,e){"use strict";e.r(s);var a=function(){var t=this,s=t.$createElement,e=t._self._c||s;return e("div",{staticClass:"newsDetail"},[e("div",{staticClass:"title"},[t._v(t._s(t.articleInfo.title))]),e("div",{staticClass:"list acea-row row-middle"},[e("div",{staticClass:"label cart-color line1"},[t._v(t._s(t.articleInfo.cart_name))]),e("div",{staticClass:"item"},[e("span",{staticClass:"iconfont icon-shenhezhong"}),t._v(t._s(t.articleInfo.add_time)+"\n    ")]),e("div",{staticClass:"item"},[e("span",{staticClass:"iconfont icon-liulan"}),t._v(t._s(t.articleInfo.visit)+"\n    ")])]),e("div",{staticClass:"conter",domProps:{innerHTML:t._s(t.articleInfo.content)}}),t.storeInfo.id?e("div",{staticClass:"picTxt acea-row row-between-wrapper"},[e("div",{staticClass:"pictrue"},[e("img",{attrs:{src:t.storeInfo.image}})]),e("div",{staticClass:"text"},[e("div",{staticClass:"name line1"},[t._v(t._s(t.storeInfo.store_name))]),e("div",{staticClass:"money font-color-red"},[t._v("\n        ￥"),e("span",{staticClass:"num"},[t._v(t._s(t.storeInfo.ot_price))])]),e("div",{staticClass:"y_money"},[t._v("￥"+t._s(t.storeInfo.price))])]),e("router-link",{attrs:{to:{path:"/detail/"+t.storeInfo.id}}},[e("div",{staticClass:"label"},[e("span",{staticClass:"span"},[t._v("查看商品")])])])],1):t._e(),t.isWeixin?e("div",{staticClass:"bnt bg-color-red",on:{click:t.setShareInfoStatus}},[t._v("\n    和好友一起分享\n  ")]):t._e(),e("ShareInfo",{attrs:{shareInfoStatus:t.shareInfoStatus},on:{setShareInfoStatus:t.setShareInfoStatus}})],1)},i=[],n=(e("7f7f"),e("e876")),o=e("e834"),r=e("ed08"),c=e("74f9"),l={name:"NewsDetail",components:{ShareInfo:o["a"]},props:{},data:function(){return{articleInfo:{},storeInfo:{},shareInfoStatus:!1,isWeixin:Object(r["d"])()}},watch:{$route:function(t){"NewsDetail"===t.name&&this.articleDetails()}},mounted:function(){this.articleDetails()},methods:{updateTitle:function(){document.title=this.articleInfo.title||this.$route.meta.title},articleDetails:function(){var t=this,s=this.$route.params.id;Object(n["d"])(s).then(function(s){t.articleInfo=s.data,t.storeInfo=s.data.store_info||{},t.updateTitle(),t.isWeixin&&t.share()})},setShareInfoStatus:function(){this.shareInfoStatus=!this.shareInfoStatus},share:function(){Object(c["openShareAll"])({desc:this.articleInfo.synopsis,title:this.articleInfo.title,link:location.href,imgUrl:this.articleInfo.image_input.length?this.articleInfo.image_input[0]:""})}}},f=l,u=(e("92ad"),e("2877")),h=Object(u["a"])(f,a,i,!1,null,"390cca14",null);s["default"]=h.exports},c0f6:function(t,s,e){"use strict";var a=e("ff26"),i=e.n(a);i.a},e834:function(t,s,e){"use strict";var a=function(){var t=this,s=t.$createElement,a=t._self._c||s;return t.shareInfoStatus?a("div",{staticClass:"poster-first"},[a("div",{staticClass:"mask-share"},[a("img",{attrs:{src:e("2267")},on:{click:t.shareInfoClose}})])]):t._e()},i=[],n={name:"ShareInfo",props:{shareInfoStatus:Boolean},data:function(){return{}},mounted:function(){},methods:{shareInfoClose:function(){this.$emit("setShareInfoStatus")}}},o=n,r=(e("c0f6"),e("2877")),c=Object(r["a"])(o,a,i,!1,null,"f3067a28",null);s["a"]=c.exports},ff26:function(t,s,e){}}]);
//# sourceMappingURL=chunk-454f76eb.af5521bb.js.map