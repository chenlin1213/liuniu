(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-3620c606"],{"2b67":function(t,i,e){"use strict";e.r(i);var n=function(){var t=this,i=t.$createElement,n=t._self._c||i;return n("div",{ref:"container",staticClass:"flash-sale"},[t.headerImg?n("div",{staticClass:"header"},[n("img",{attrs:{src:t.headerImg}})]):t._e(),n("Tabs",{ref:"timeList",staticClass:"time-tabs",attrs:{"line-height":"0",animated:"","title-inactive-color":"2",sticky:""},model:{value:t.active,callback:function(i){t.active=i},expression:"active"}},t._l(t.timeList,function(i,a){return n("Tab",{key:a},[n("div",{staticClass:"timeItem",attrs:{slot:"title"},on:{click:function(i){return t.setTime(a)}},slot:"title"},[n("div",{staticClass:"time"},[t._v(t._s(i.time))]),n("div",{staticClass:"state"},[t._v(t._s(i.state))])]),n("div",{staticClass:"countDown font-color-red acea-row row-center-wrapper"},[0===i.status?n("div",{staticClass:"activity"},[t._v("活动已结束")]):t._e(),1===i.status?n("CountDown",{attrs:{"is-day":!1,"tip-text":"距结束仅剩 ","day-text":"","hour-text":" : ","minute-text":" : ","second-text":"",datatime:t.datatime}}):t._e(),2===i.status?n("div",{staticClass:"activity"},[t._v("活动即将开始")]):t._e()],1),n("div",{staticClass:"list"},t._l(t.seckillList,function(e,a){return n("div",{key:a,staticClass:"item acea-row row-between-wrapper"},[n("div",{staticClass:"pictrue"},[n("img",{attrs:{src:e.image}})]),n("div",{staticClass:"text acea-row row-column-around"},[n("div",{staticClass:"line1",domProps:{textContent:t._s(e.title)}}),n("div",{staticClass:"money"},[t._v("\n              限时价"),n("span",{staticClass:"num font-color-red",domProps:{textContent:t._s("￥"+e.price)}})]),n("div",{staticClass:"progress cart-color"},[n("div",{staticClass:"bg-red",style:{width:t.loading?e.percent+"%":""}}),n("div",{staticClass:"piece font-color-red",domProps:{textContent:t._s("仅剩"+e.stock+"件")}})])]),1===i.status&&e.stock>0?n("div",{staticClass:"grab bg-color-red",on:{click:function(i){return t.goDetail(e.id)}}},[t._v("\n            马上抢\n          ")]):t._e(),1===i.status&&e.stock<=0?n("div",{staticClass:"grab"},[t._v("\n            已售磬\n          ")]):t._e(),2===i.status?n("div",{staticClass:"grab bg-color-red"},[t._v("\n            即将开始\n          ")]):t._e(),0===i.status?n("div",{staticClass:"grab bg-color-red"},[t._v("已结束")]):t._e()])}),0),0===t.seckillList.length&&t.page>1?n("div",{staticClass:"noCommodity",staticStyle:{"background-color":"#fff"}},[n("div",{staticClass:"noPictrue"},[n("img",{staticClass:"image",attrs:{src:e("0c36")}})])]):t._e(),t.seckillList.length>0?n("Loading",{attrs:{loaded:t.status,loading:t.loadingList}}):t._e()],1)}),1)],1)},a=[],s=(e("bda7"),e("5e46")),r=(e("da3c"),e("0b33")),o=e("ca41"),c=e("5608"),l=e("3a5e"),u={name:"GoodsSeckill",components:{CountDown:c["a"],Tab:r["a"],Tabs:s["a"],Loading:l["a"]},props:{},data:function(){return{headerImg:"",timeList:[],sticky:!1,loading:!1,datatime:0,active:0,seckillList:[],status:!1,loadingList:!1,page:1,limit:5}},mounted:function(){this.mountedStart()},methods:{mountedStart:function(){var t=this,i=this;Object(o["r"])().then(function(t){i.$set(i,"headerImg",t.data.lovely),i.$set(i,"timeList",t.data.seckillTime),i.$set(i,"active",t.data.seckillTimeIndex),i.datatime=i.timeList[i.active].stop,i.getSeckillList(),i.$nextTick(function(){i.sticky=!0,i.$refs.timeList.scrollIntoView()})}),this.$scroll(this.$refs.container,function(){!t.loadingList&&t.getSeckillList()}),setTimeout(function(){i.loading=!0},500)},setTime:function(t){var i=this;i.active=t,i.datatime=i.timeList[i.active].stop,i.getSeckillList()},getSeckillList:function(){var t=this;if(!t.loadingList&&!t.status){var i=t.timeList[t.active].id;Object(o["t"])(i,{page:t.page,limit:t.limit}).then(function(i){t.status=i.data.length<t.limit,t.seckillList.push.apply(t.seckillList,i.data),t.page++,t.loadingList=!1})}},goDetail:function(t){var i=this,e=i.timeList[i.active].stop;this.$router.push({path:"/activity/seckill_detail/"+t+"/"+e})}}},d=u,f=(e("4f29"),e("2877")),m=Object(f["a"])(d,n,a,!1,null,"5371063a",null);i["default"]=m.exports},"4f29":function(t,i,e){"use strict";var n=e("a2b1"),a=e.n(n);a.a},5608:function(t,i,e){"use strict";var n=function(){var t=this,i=t.$createElement,e=t._self._c||i;return e("div",{staticClass:"time"},[t._v("\n  "+t._s(t.tipText)),!0===t.isDay?e("span",{staticClass:"styleAll"},[t._v(t._s(t.day))]):t._e(),e("span",{staticClass:"timeTxt"},[t._v(t._s(t.dayText))]),e("span",{staticClass:"styleAll"},[t._v(t._s(t.hour))]),e("span",{staticClass:"timeTxt"},[t._v(t._s(t.hourText))]),e("span",{staticClass:"styleAll"},[t._v(t._s(t.minute))]),e("span",{staticClass:"timeTxt"},[t._v(t._s(t.minuteText))]),e("span",{staticClass:"styleAll"},[t._v(t._s(t.second))]),e("span",{staticClass:"timeTxt"},[t._v(t._s(t.secondText))])])},a=[],s=(e("c5f6"),{name:"CountDown",props:{tipText:{type:String,default:"倒计时"},dayText:{type:String,default:"天"},hourText:{type:String,default:"时"},minuteText:{type:String,default:"分"},secondText:{type:String,default:"秒"},datatime:{type:Number,default:0},isDay:{type:Boolean,default:!0}},data:function(){return{day:"00",hour:"00",minute:"00",second:"00"}},created:function(){this.show_time()},mounted:function(){},methods:{show_time:function(){var t=this;function i(){var i=t.datatime-Date.parse(new Date)/1e3,e=0,n=0,a=0,s=0;i>0?(e=!0===t.isDay?Math.floor(i/86400):0,n=Math.floor(i/3600)-24*e,a=Math.floor(i/60)-24*e*60-60*n,s=Math.floor(i)-24*e*60*60-60*n*60-60*a,n<=9&&(n="0"+n),a<=9&&(a="0"+a),s<=9&&(s="0"+s),t.day=e,t.hour=n,t.minute=a,t.second=s):(t.day="00",t.hour="00",t.minute="00",t.second="00")}i(),setInterval(i,1e3)}}}),r=s,o=e("2877"),c=Object(o["a"])(r,n,a,!1,null,null,null);i["a"]=c.exports},a2b1:function(t,i,e){},ca41:function(t,i,e){"use strict";e.d(i,"n",function(){return a}),e.d(i,"m",function(){return s}),e.d(i,"o",function(){return r}),e.d(i,"q",function(){return o}),e.d(i,"p",function(){return c}),e.d(i,"r",function(){return l}),e.d(i,"t",function(){return u}),e.d(i,"s",function(){return d}),e.d(i,"f",function(){return f}),e.d(i,"a",function(){return m}),e.d(i,"h",function(){return g}),e.d(i,"i",function(){return p}),e.d(i,"b",function(){return v}),e.d(i,"e",function(){return h}),e.d(i,"c",function(){return _}),e.d(i,"j",function(){return b}),e.d(i,"d",function(){return C}),e.d(i,"g",function(){return y}),e.d(i,"l",function(){return k}),e.d(i,"k",function(){return x});var n=e("b775");function a(t){return n["a"].get("/combination/list",t,{login:!1})}function s(t){return n["a"].get("/combination/detail/"+t,{},{login:!1})}function r(t){return n["a"].get("/combination/pink/"+t)}function o(t){return n["a"].post("/combination/remove",t)}function c(t){return n["a"].post("/combination/poster",t)}function l(){return n["a"].get("/seckill/index",{},{login:!1})}function u(t,i){return n["a"].get("/seckill/list/"+t,i,{login:!1})}function d(t){return n["a"].get("/seckill/detail/"+t,{},{login:!1})}function f(t){return n["a"].get("/bargain/list",t,{login:!1})}function m(t){return n["a"].get("/bargain/detail/"+t)}function g(t){return n["a"].post("/bargain/share",t)}function p(t){return n["a"].post("/bargain/start",t)}function v(t){return n["a"].post("/bargain/help",t)}function h(t){return n["a"].post("/bargain/help/price",t)}function _(t){return n["a"].post("/bargain/help/count",t)}function b(t){return n["a"].post("/bargain/start/user",t)}function C(t){return n["a"].post("/bargain/help/list",t)}function y(t){return n["a"].post("/bargain/poster",t)}function k(t){return n["a"].get("/bargain/user/list",t)}function x(t){return n["a"].post("/bargain/user/cancel",t)}}}]);
//# sourceMappingURL=chunk-3620c606.7cd43656.js.map