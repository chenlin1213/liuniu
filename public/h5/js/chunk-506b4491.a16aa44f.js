(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-506b4491"],{"2b67":function(t,s,e){"use strict";e.r(s);var i=function(){var t=this,s=t.$createElement,i=t._self._c||s;return i("div",{ref:"container",staticClass:"flash-sale"},[t.headerImg?i("div",{staticClass:"header"},[i("img",{attrs:{src:t.headerImg}})]):t._e(),i("Tabs",{ref:"timeList",staticClass:"time-tabs",attrs:{"line-height":"0","line-width":"0",animated:"","title-inactive-color":"2",sticky:t.sticky},model:{value:t.active,callback:function(s){t.active=s},expression:"active"}},t._l(t.timeList,function(s,a){return i("Tab",{key:a},[i("div",{staticClass:"timeItem",attrs:{slot:"title"},on:{click:function(s){return t.setTime(a)}},slot:"title"},[i("div",{staticClass:"time"},[t._v(t._s(s.time))]),i("div",{staticClass:"state"},[t._v(t._s(s.state))])]),i("div",{staticClass:"countDown font-color-green acea-row row-center-wrapper"},[0===s.status?i("div",{staticClass:"activity"},[t._v("活动已结束")]):t._e(),1===s.status?i("CountDown",{attrs:{"is-day":!1,"tip-text":"距结束仅剩 ","day-text":"","hour-text":" : ","minute-text":" : ","second-text":"",datatime:t.datatime}}):t._e(),2===s.status?i("div",{staticClass:"activity"},[t._v("活动即将开始")]):t._e()],1),i("div",{staticClass:"list"},t._l(t.seckillList,function(e,a){return i("div",{key:a,staticClass:"item acea-row row-between-wrapper"},[i("div",{staticClass:"pictrue"},[i("img",{attrs:{src:e.image}})]),i("div",{staticClass:"text acea-row row-column-around"},[i("div",{staticClass:"line1",domProps:{textContent:t._s(e.title)}}),i("div",{staticClass:"money"},[t._v("\n              限时价"),i("span",{staticClass:"num font-color-orange",domProps:{textContent:t._s("￥"+e.price)}})]),i("div",{staticClass:"progress cart-color-green"},[i("div",{staticClass:"bg-red",style:{width:t.loading?e.percent+"%":""}}),i("div",{staticClass:"piece font-color-green",domProps:{textContent:t._s("仅剩"+e.stock+"件")}})])]),1===s.status&&e.stock>0?i("div",{staticClass:"grab bg-color-green",on:{click:function(s){return t.goDetail(e.id)}}},[t._v("\n            马上抢\n          ")]):t._e(),1===s.status&&e.stock<=0?i("div",{staticClass:"grab"},[t._v("\n            已售磬\n          ")]):t._e(),2===s.status?i("div",{staticClass:"grab bg-color-green"},[t._v("\n            即将开始\n          ")]):t._e(),0===s.status?i("div",{staticClass:"grab bg-color-green"},[t._v("\n            已结束\n          ")]):t._e()])}),0),0===t.seckillList.length&&t.page>1?i("div",{staticClass:"noCommodity",staticStyle:{"background-color":"#fff"}},[i("div",{staticClass:"noPictrue"},[i("img",{staticClass:"image",attrs:{src:e("0c36")}})])]):t._e(),t.seckillList.length>0?i("Loading",{attrs:{loaded:t.status,loading:t.loadingList}}):t._e()],1)}),1)],1)},a=[],n=(e("bda7"),e("5e46")),c=(e("da3c"),e("0b33")),l=e("ca41"),o=e("5608"),r=e("3a5e"),d={name:"GoodsSeckill",components:{CountDown:o["a"],Tab:c["a"],Tabs:n["a"],Loading:r["a"]},props:{},data:function(){return{headerImg:"",timeList:[],sticky:!1,loading:!1,datatime:0,active:0,seckillList:[],status:!1,loadingList:!1,page:1,limit:5}},mounted:function(){this.mountedStart()},methods:{mountedStart:function(){var t=this,s=this;Object(l["r"])().then(function(t){s.$set(s,"headerImg",t.data.lovely),s.$set(s,"timeList",t.data.seckillTime),s.$set(s,"active",t.data.seckillTimeIndex),s.datatime=s.timeList[s.active].stop,s.getSeckillList(),s.$nextTick(function(){s.sticky=!0,s.$refs.timeList.scrollIntoView()})}),this.$scroll(this.$refs.container,function(){!t.loadingList&&t.getSeckillList()}),setTimeout(function(){s.loading=!0},500)},setTime:function(t){var s=this;s.active=t,s.datatime=s.timeList[s.active].stop,s.getSeckillList()},getSeckillList:function(){var t=this;if(!t.loadingList&&!t.status){var s=t.timeList[t.active].id;Object(l["t"])(s,{page:t.page,limit:t.limit}).then(function(s){t.status=s.data.length<t.limit,t.seckillList.push.apply(t.seckillList,s.data),t.page++,t.loadingList=!1})}},goDetail:function(t){var s=this,e=s.timeList[s.active].stop;this.$router.push({path:"/activity/seckill_detail/"+t+"/"+e})}}},u=d,m=(e("674a"),e("2877")),v=Object(m["a"])(u,i,a,!1,null,"14e8197a",null);s["default"]=v.exports},5608:function(t,s,e){"use strict";var i=function(){var t=this,s=t.$createElement,e=t._self._c||s;return e("div",{staticClass:"time"},[t._v("\n  "+t._s(t.tipText)),!0===t.isDay?e("span",{staticClass:"styleAll"},[t._v(t._s(t.day))]):t._e(),e("span",{staticClass:"timeTxt"},[t._v(t._s(t.dayText))]),e("span",{staticClass:"styleAll"},[t._v(t._s(t.hour))]),e("span",{staticClass:"timeTxt"},[t._v(t._s(t.hourText))]),e("span",{staticClass:"styleAll"},[t._v(t._s(t.minute))]),e("span",{staticClass:"timeTxt"},[t._v(t._s(t.minuteText))]),e("span",{staticClass:"styleAll"},[t._v(t._s(t.second))]),e("span",{staticClass:"timeTxt"},[t._v(t._s(t.secondText))])])},a=[],n=(e("c5f6"),{name:"CountDown",props:{tipText:{type:String,default:"倒计时"},dayText:{type:String,default:"天"},hourText:{type:String,default:"时"},minuteText:{type:String,default:"分"},secondText:{type:String,default:"秒"},datatime:{type:Number,default:0},isDay:{type:Boolean,default:!0}},data:function(){return{day:"00",hour:"00",minute:"00",second:"00"}},created:function(){this.show_time()},mounted:function(){},methods:{show_time:function(){var t=this;function s(){var s=t.datatime-Date.parse(new Date)/1e3,e=0,i=0,a=0,n=0;s>0?(e=!0===t.isDay?Math.floor(s/86400):0,i=Math.floor(s/3600)-24*e,a=Math.floor(s/60)-24*e*60-60*i,n=Math.floor(s)-24*e*60*60-60*i*60-60*a,i<=9&&(i="0"+i),a<=9&&(a="0"+a),n<=9&&(n="0"+n),t.day=e,t.hour=i,t.minute=a,t.second=n):(t.day="00",t.hour="00",t.minute="00",t.second="00")}s(),setInterval(s,1e3)}}}),c=n,l=e("2877"),o=Object(l["a"])(c,i,a,!1,null,null,null);s["a"]=o.exports},"674a":function(t,s,e){"use strict";var i=e("cef5"),a=e.n(i);a.a},cef5:function(t,s,e){}}]);
//# sourceMappingURL=chunk-506b4491.a16aa44f.js.map