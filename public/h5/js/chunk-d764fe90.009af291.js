(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-d764fe90"],{2439:function(t,e,o){t.exports=o.p+"h5/img/noCollection.46d9f620.png"},fa64:function(t,e,o){"use strict";o.r(e);var c=function(){var t=this,e=t.$createElement,o=t._self._c||e;return o("div",{ref:"container"},[t.collectProductList.length>0?o("div",{staticClass:"collectionGoods"},t._l(t.collectProductList,function(e,c){return o("router-link",{key:c,staticClass:"item acea-row row-between-wrapper",attrs:{to:{path:"/detail/"+e.pid}}},[o("div",{staticClass:"pictrue"},[o("img",{attrs:{src:e.image}})]),o("div",{staticClass:"text acea-row row-column-between"},[o("div",{staticClass:"infor line1"},[t._v(t._s(e.store_name))]),o("div",{staticClass:"acea-row row-between-wrapper"},[o("div",{staticClass:"money font-color-red"},[t._v("￥"+t._s(e.price))]),o("div",{staticClass:"delete",on:{click:function(e){return e.preventDefault(),t.delCollection(c)}}},[t._v("删除")])])])])}),1):t._e(),o("Loading",{attrs:{loaded:t.loadend,loading:t.loading}}),t.collectProductList.length<1&&t.page>1?o("div",{staticClass:"noCommodity",staticStyle:{"background-color":"#fff"}},[t._m(0),o("Recommend")],1):t._e()],1)},i=[function(){var t=this,e=t.$createElement,c=t._self._c||e;return c("div",{staticClass:"noPictrue"},[c("img",{staticClass:"image",attrs:{src:o("2439")}})])}],l=o("f410"),n=o("c24f"),a=o("3a5e"),s={name:"GoodsCollection",components:{Recommend:l["a"],Loading:a["a"]},props:{},data:function(){return{page:1,limit:20,collectProductList:[],loadTitle:"",loading:!1,loadend:!1}},mounted:function(){var t=this;this.get_user_collect_product(),this.$scroll(this.$refs.container,function(){!t.loading&&t.get_user_collect_product()})},methods:{get_user_collect_product:function(){var t=this;t.loading||t.loadend||(t.loading=!0,Object(n["n"])(t.page,t.limit).then(function(e){t.loading=!1,t.collectProductList.push.apply(t.collectProductList,e.data),t.loadend=e.data.length<t.limit,t.page=t.page+1}))},delCollection:function(t){var e=this,o=e.collectProductList[t].pid,c=e.collectProductList[t].category;Object(n["m"])(o,c).then(function(){e.$dialog.toast({mes:"删除收藏成功!",callback:function(){e.collectProductList.splice(t,1),e.$set(e,"collectProductList",e.collectProductList)}})})}}},r=s,d=o("2877"),u=Object(d["a"])(r,c,i,!1,null,null,null);e["default"]=u.exports}}]);
//# sourceMappingURL=chunk-d764fe90.009af291.js.map