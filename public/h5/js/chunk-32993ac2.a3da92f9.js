(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-32993ac2"],{"563c":function(s,t,a){s.exports=a.p+"h5/img/noAddress.d76a1cef.png"},afa3:function(s,t,a){s.exports=a.p+"h5/img/line.05bf1c84.jpg"},bb9a:function(s,t,a){"use strict";a.r(t);var e=function(){var s=this,t=s.$createElement,e=s._self._c||t;return e("div",{ref:"container",staticClass:"address-management",class:s.addressList.length<1&&s.page>1?"on":""},[s.addressList.length>0?e("div",{staticClass:"line"},[e("img",{attrs:{src:a("afa3")}})]):s._e(),s._l(s.addressList,function(t,a){return e("div",{key:a,staticClass:"item"},[e("div",{staticClass:"address"},[e("div",{staticClass:"consignee"},[s._v("\n        收货人："+s._s(t.real_name)),e("span",{staticClass:"phone"},[s._v(s._s(t.phone))])]),e("div",[s._v("\n        收货地址："+s._s(t.province)+s._s(t.city)+s._s(t.district)+s._s(t.detail)+"\n      ")])]),e("div",{staticClass:"operation acea-row row-between-wrapper"},[e("div",{staticClass:"select-btn"},[e("div",{staticClass:"checkbox-wrapper"},[e("label",{staticClass:"well-check"},[e("input",{attrs:{type:"radio",name:"default",value:""},domProps:{checked:!!t.is_default},on:{click:function(t){return s.radioChange(a)}}}),e("i",{staticClass:"icon"}),e("span",{staticClass:"default"},[s._v("设为默认")])])])]),e("div",{staticClass:"acea-row row-middle"},[e("div",{on:{click:function(t){return s.editAddress(a)}}},[e("span",{staticClass:"iconfont icon-bianji"}),s._v("编辑\n        ")]),e("div",{on:{click:function(t){return s.delAddress(a)}}},[e("span",{staticClass:"iconfont icon-shanchu"}),s._v("删除\n        ")])])])])}),e("Loading",{attrs:{loaded:s.loadend,loading:s.loading}}),s.addressList.length<1&&s.page>1?e("div",{staticClass:"noCommodity"},[s._m(0)]):s._e(),e("div",{staticStyle:{height:"1.2rem"}}),e("div",{staticClass:"footer acea-row row-between-wrapper"},[s.isWechat?e("div",{staticClass:"addressBnt bg-color-green",on:{click:s.addAddress}},[e("span",{staticClass:"iconfont icon-tianjiadizhi"}),s._v("添加新地址\n    ")]):e("div",{staticClass:"addressBnt on bg-color-green",on:{click:s.addAddress}},[e("span",{staticClass:"iconfont icon-tianjiadizhi"}),s._v("添加新地址\n    ")]),s.isWechat?e("div",{staticClass:"addressBnt wxbnt",on:{click:s.getAddress}},[e("span",{staticClass:"iconfont icon-weixin2"}),s._v("导入微信地址\n    ")]):s._e()])],2)},i=[function(){var s=this,t=s.$createElement,e=s._self._c||t;return e("div",{staticClass:"noPictrue"},[e("img",{staticClass:"image",attrs:{src:a("563c")}})])}],n=a("c24f"),d=a("3a5e"),c=a("ed08"),o=a("74f9"),r={components:{Loading:d["a"]},data:function(){return{page:1,limit:20,addressList:[],loadTitle:"",loading:!1,loadend:!1,isWechat:Object(c["d"])()}},mounted:function(){var s=this;this.AddressList(),this.$scroll(this.$refs.container,function(){!s.loading&&s.AddressList()})},methods:{AddressList:function(){var s=this;s.loading||s.loadend||(s.loading=!0,Object(n["f"])({page:s.page,limit:s.limit}).then(function(t){s.loading=!1,s.addressList.push.apply(s.addressList,t.data),s.loadend=t.data.length<s.limit,s.page=s.page+1}))},editAddress:function(s){this.$router.push({path:"/user/add_address/"+this.addressList[s].id})},delAddress:function(s){var t=this,a=this.addressList[s],e=a.id;Object(n["g"])(e).then(function(){t.$dialog.toast({mes:"删除成功!",callback:function(){t.addressList.splice(s,1),t.$set(t,"addressList",t.addressList)}})})},radioChange:function(s){var t=this,a=this.addressList[s],e=a.id;Object(n["e"])(e).then(function(){for(var a=0,e=t.addressList.length;a<e;a++)t.addressList[a].is_default=a===s?1:0;t.$set(t,"addressList",t.addressList)})},addAddress:function(){this.$router.push({path:"/user/add_address"})},getAddress:function(){var s=this;Object(o["openAddress"])().then(function(t){s.$dialog.loading.open(),Object(n["H"])({real_name:t.userName,phone:t.telNumber,address:{province:t.provinceName,city:t.cityName,district:t.countryName},detail:t.detailInfo,post_code:t.postalCode,wx_export:1}).then(function(){s.page=1,s.loading=!1,s.loadend=!1,s.addressList=[],s.AddressList(),s.$dialog.loading.close(),s.$dialog.toast({mes:"添加成功"})}).catch(function(t){s.$dialog.loading.close(),s.$dialog.error(t.msg||"添加失败")})})}}},l=r,u=(a("e9ae"),a("2877")),p=Object(u["a"])(l,e,i,!1,null,"6c9ccf1e",null);t["default"]=p.exports},e9ae:function(s,t,a){"use strict";var e=a("eaff"),i=a.n(e);i.a},eaff:function(s,t,a){}}]);
//# sourceMappingURL=chunk-32993ac2.a3da92f9.js.map