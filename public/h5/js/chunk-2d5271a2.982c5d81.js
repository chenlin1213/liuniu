(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-2d5271a2"],{"64ba":function(t,a,i){"use strict";i.r(a);var s=function(){var t=this,a=t.$createElement,s=t._self._c||a;return s("div",{ref:"container",staticClass:"integral-details"},[s("div",{staticClass:"header"},[s("div",{staticClass:"currentScore"},[t._v("当前积分")]),s("div",[t._v(t._s(t.info.integral))]),s("div",{staticClass:"line"}),s("div",{staticClass:"nav acea-row"},[s("div",{staticClass:"item"},[s("div",{staticClass:"num"},[t._v(t._s(t.info.sum_integral))]),s("div",[t._v("累计积分")])]),s("div",{staticClass:"item"},[s("div",{staticClass:"num"},[t._v(t._s(t.info.deduction_integral))]),s("div",[t._v("累计消费")])]),s("div",{staticClass:"item"},[s("div",{staticClass:"num"},[t._v(t._s(t.info.today_integral))]),s("div",[t._v("今日获得")])])])]),s("div",{staticClass:"wrapper"},[s("div",{staticClass:"nav acea-row"},t._l(t.navList,function(a,i){return s("div",{key:i,staticClass:"item acea-row row-center-wrapper",class:t.current===i?"on":"",on:{click:function(a){return t.nav(i)}}},[s("span",{staticClass:"iconfont",class:a.icon}),t._v(t._s(a.name)+"\n      ")])}),0),s("div",{staticClass:"list",attrs:{hidden:0!==t.current}},[t._m(0),t._l(t.list,function(a,i){return s("div",{key:i,staticClass:"item acea-row row-between-wrapper"},[s("div",[s("div",{staticClass:"state"},[t._v(t._s(a.mark))]),s("div",[t._v(t._s(a.add_time))])]),1==a.pm?s("div",{staticClass:"num"},[t._v("+"+t._s(a.number))]):t._e(),0==a.pm?s("div",{staticClass:"num font-color-red"},[t._v("\n          -"+t._s(a.number)+"\n        ")]):t._e()])})],2),s("div",{staticClass:"list2",attrs:{hidden:1!==t.current}},[s("router-link",{staticClass:"item acea-row row-between-wrapper",attrs:{to:"/"}},[s("div",{staticClass:"pictrue"},[s("img",{attrs:{src:i("d31e")}})]),s("div",{staticClass:"name"},[t._v("购买商品可获得积分奖励")]),s("div",{staticClass:"earn"},[t._v("赚积分")])]),s("router-link",{staticClass:"item acea-row row-between-wrapper",attrs:{to:"/user/sign"}},[s("div",{staticClass:"pictrue"},[s("img",{attrs:{src:i("d31e")}})]),s("div",{staticClass:"name"},[t._v("每日签到可获得积分奖励")]),s("div",{staticClass:"earn"},[t._v("赚积分")])])],1)]),s("Loading",{attrs:{loaded:t.loaded,loading:t.loading}})],1)},n=[function(){var t=this,a=t.$createElement,i=t._self._c||a;return i("div",{staticClass:"tip acea-row row-middle"},[i("span",{staticClass:"iconfont icon-shuoming"}),t._v("提示：积分数值的高低会直接影响您的会员等级\n      ")])}],e=i("c24f"),r=i("3a5e"),c={name:"Integral",components:{Loading:r["a"]},props:{},data:function(){return{navList:[{name:"分值明细",icon:"icon-mingxi"},{name:"分值提升",icon:"icon-tishengfenzhi"}],current:0,where:{page:1,limit:15},data:{sign:1,integral:1,all:1},list:[],info:[],loaded:!1,loading:!1}},mounted:function(){var t=this;this.getIntegral(),this.getInfo(),this.$scroll(this.$refs.container,function(){!t.loading&&t.getInfo()})},methods:{nav:function(t){this.current=t},getInfo:function(){var t=this;1!=t.loaded&&1!=t.loading&&(t.loading=!0,Object(e["r"])(t.where).then(function(a){t.loading=!1,t.loaded=a.data.length<t.where.limit,t.loadTitle=t.loaded?"人家是有底线的":"上拉加载更多",t.where.page=t.where.page+1,t.list.push.apply(t.list,a.data)},function(a){t.$dialog.message(a.msg)}))},getIntegral:function(){var t=this;Object(e["L"])(t.data).then(function(a){t.info=a.data},function(a){t.$dialog.message(a.msg)})}}},o=c,l=i("2877"),d=Object(l["a"])(o,s,n,!1,null,null,null);a["default"]=d.exports},d31e:function(t,a,i){t.exports=i.p+"h5/img/score.30715cf5.png"}}]);
//# sourceMappingURL=chunk-2d5271a2.982c5d81.js.map