(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-75c5e1c2"],{"08b7":function(t,s,i){},"43b5":function(t,s,i){"use strict";var a=i("08b7"),e=i.n(a);e.a},e436:function(t,s,i){"use strict";i.r(s);var a=function(){var t=this,s=t.$createElement,i=t._self._c||s;return i("div",{staticClass:"PromoterRank"},[i("div",{staticClass:"redBg bg-color-red"},[i("div",{staticClass:"header"},[i("div",{staticClass:"nav acea-row row-center-wrapper"},t._l(t.navList,function(s,a){return i("div",{key:a,staticClass:"item",class:t.active===a?"font-color-red":"",on:{click:function(s){t.active=a}}},[t._v("\n          "+t._s(s)+"\n        ")])}),0),i("div",{staticClass:"rank acea-row row-bottom row-around"},[i("div",{directives:[{name:"show",rawName:"v-show",value:t.Two.uid,expression:"Two.uid"}],staticClass:"item"},[i("div",{staticClass:"pictrue"},[i("img",{attrs:{src:t.Two.avatar}})]),i("div",{staticClass:"name line1"},[t._v(t._s(t.Two.nickname))]),i("div",{staticClass:"num"},[t._v(t._s(t.Two.count)+"人")])]),t.One.uid?i("div",{staticClass:"item"},[i("div",{staticClass:"pictrue"},[i("img",{attrs:{src:t.One.avatar}})]),i("div",{staticClass:"name line1"},[t._v(t._s(t.One.nickname))]),i("div",{staticClass:"num"},[t._v(t._s(t.One.count)+"人")])]):t._e(),t.Three.uid?i("div",{staticClass:"item"},[i("div",{staticClass:"pictrue"},[i("img",{attrs:{src:t.Three.avatar}})]),i("div",{staticClass:"name line1"},[t._v(t._s(t.Three.nickname))]),i("div",{staticClass:"num"},[t._v(t._s(t.Three.count)+"人")])]):t._e()])])]),t.rankList.length?i("div",{staticClass:"list"},t._l(t.rankList,function(s,a){return i("div",{key:a,staticClass:"item acea-row row-between-wrapper"},[i("div",{staticClass:"num"},[t._v(t._s(a+4))]),i("div",{staticClass:"picTxt acea-row row-between-wrapper"},[i("div",{staticClass:"pictrue"},[i("img",{attrs:{src:s.avatar}})]),i("div",{staticClass:"text line1"},[t._v(t._s(s.nickname))])]),i("div",{staticClass:"people font-color-red"},[t._v(t._s(s.count)+"人")])])}),0):t._e()])},e=[],n=(i("7f7f"),i("c24f")),r="PromoterRank",c={name:r,props:{},data:function(){return{navList:["周榜","月榜"],active:0,page:1,limit:10,loading:!1,loadend:!1,rankList:[],One:{},Two:{},Three:{},type:"week"}},watch:{$route:function(t){t.name===r&&(this.loaded=!1,this.page=1,this.$set(this,"rankList",[]),this.getRankList())},active:function(t){this.type=t?"month":"week",this.page=1,this.loaded=!1,this.$set(this,"rankList",[]),this.getRankList()}},mounted:function(){var t=this;this.getRankList(),this.$scroll(this.$refs.container,function(){!t.loading&&t.getRankList()})},methods:{getRankList:function(){var t=this;Object(n["v"])({page:this.page,limit:this.limit,type:this.type}).then(function(s){var i=s.data;t.rankList.push.apply(t.rankList,i),1==t.page&&(t.One=t.rankList.shift()||{},t.Two=t.rankList.shift()||{},t.Three=t.rankList.shift()||{}),t.page++,t.loading=!1,t.loaded=i.length<t.limit,t.$set(t,"rankList",t.rankList)}).catch(function(){t.loading=!1})}}},o=c,l=(i("43b5"),i("2877")),v=Object(l["a"])(o,a,e,!1,null,"6969901f",null);s["default"]=v.exports}}]);
//# sourceMappingURL=chunk-75c5e1c2.da78ae4f.js.map