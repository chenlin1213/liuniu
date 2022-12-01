(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-16eeeb11"],{1104:function(t,e,n){},b311:function(t,e,n){
/*!
 * clipboard.js v2.0.4
 * https://zenorocha.github.io/clipboard.js
 * 
 * Licensed MIT © Zeno Rocha
 */
(function(e,n){t.exports=n()})(0,function(){return function(t){var e={};function n(r){if(e[r])return e[r].exports;var o=e[r]={i:r,l:!1,exports:{}};return t[r].call(o.exports,o,o.exports,n),o.l=!0,o.exports}return n.m=t,n.c=e,n.d=function(t,e,r){n.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:r})},n.r=function(t){"undefined"!==typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},n.t=function(t,e){if(1&e&&(t=n(t)),8&e)return t;if(4&e&&"object"===typeof t&&t&&t.__esModule)return t;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var o in t)n.d(r,o,function(e){return t[e]}.bind(null,o));return r},n.n=function(t){var e=t&&t.__esModule?function(){return t["default"]}:function(){return t};return n.d(e,"a",e),e},n.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},n.p="",n(n.s=0)}([function(t,e,n){"use strict";var r="function"===typeof Symbol&&"symbol"===typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"===typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},o=function(){function t(t,e){for(var n=0;n<e.length;n++){var r=e[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(t,r.key,r)}}return function(e,n,r){return n&&t(e.prototype,n),r&&t(e,r),e}}(),i=n(1),a=f(i),c=n(3),s=f(c),u=n(4),l=f(u);function f(t){return t&&t.__esModule?t:{default:t}}function d(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}function p(t,e){if(!t)throw new ReferenceError("this hasn't been initialised - super() hasn't been called");return!e||"object"!==typeof e&&"function"!==typeof e?t:e}function h(t,e){if("function"!==typeof e&&null!==e)throw new TypeError("Super expression must either be null or a function, not "+typeof e);t.prototype=Object.create(e&&e.prototype,{constructor:{value:t,enumerable:!1,writable:!0,configurable:!0}}),e&&(Object.setPrototypeOf?Object.setPrototypeOf(t,e):t.__proto__=e)}var y=function(t){function e(t,n){d(this,e);var r=p(this,(e.__proto__||Object.getPrototypeOf(e)).call(this));return r.resolveOptions(n),r.listenClick(t),r}return h(e,t),o(e,[{key:"resolveOptions",value:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{};this.action="function"===typeof t.action?t.action:this.defaultAction,this.target="function"===typeof t.target?t.target:this.defaultTarget,this.text="function"===typeof t.text?t.text:this.defaultText,this.container="object"===r(t.container)?t.container:document.body}},{key:"listenClick",value:function(t){var e=this;this.listener=(0,l.default)(t,"click",function(t){return e.onClick(t)})}},{key:"onClick",value:function(t){var e=t.delegateTarget||t.currentTarget;this.clipboardAction&&(this.clipboardAction=null),this.clipboardAction=new a.default({action:this.action(e),target:this.target(e),text:this.text(e),container:this.container,trigger:e,emitter:this})}},{key:"defaultAction",value:function(t){return v("action",t)}},{key:"defaultTarget",value:function(t){var e=v("target",t);if(e)return document.querySelector(e)}},{key:"defaultText",value:function(t){return v("text",t)}},{key:"destroy",value:function(){this.listener.destroy(),this.clipboardAction&&(this.clipboardAction.destroy(),this.clipboardAction=null)}}],[{key:"isSupported",value:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:["copy","cut"],e="string"===typeof t?[t]:t,n=!!document.queryCommandSupported;return e.forEach(function(t){n=n&&!!document.queryCommandSupported(t)}),n}}]),e}(s.default);function v(t,e){var n="data-clipboard-"+t;if(e.hasAttribute(n))return e.getAttribute(n)}t.exports=y},function(t,e,n){"use strict";var r="function"===typeof Symbol&&"symbol"===typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"===typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t},o=function(){function t(t,e){for(var n=0;n<e.length;n++){var r=e[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(t,r.key,r)}}return function(e,n,r){return n&&t(e.prototype,n),r&&t(e,r),e}}(),i=n(2),a=c(i);function c(t){return t&&t.__esModule?t:{default:t}}function s(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}var u=function(){function t(e){s(this,t),this.resolveOptions(e),this.initSelection()}return o(t,[{key:"resolveOptions",value:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:{};this.action=t.action,this.container=t.container,this.emitter=t.emitter,this.target=t.target,this.text=t.text,this.trigger=t.trigger,this.selectedText=""}},{key:"initSelection",value:function(){this.text?this.selectFake():this.target&&this.selectTarget()}},{key:"selectFake",value:function(){var t=this,e="rtl"==document.documentElement.getAttribute("dir");this.removeFake(),this.fakeHandlerCallback=function(){return t.removeFake()},this.fakeHandler=this.container.addEventListener("click",this.fakeHandlerCallback)||!0,this.fakeElem=document.createElement("textarea"),this.fakeElem.style.fontSize="12pt",this.fakeElem.style.border="0",this.fakeElem.style.padding="0",this.fakeElem.style.margin="0",this.fakeElem.style.position="absolute",this.fakeElem.style[e?"right":"left"]="-9999px";var n=window.pageYOffset||document.documentElement.scrollTop;this.fakeElem.style.top=n+"px",this.fakeElem.setAttribute("readonly",""),this.fakeElem.value=this.text,this.container.appendChild(this.fakeElem),this.selectedText=(0,a.default)(this.fakeElem),this.copyText()}},{key:"removeFake",value:function(){this.fakeHandler&&(this.container.removeEventListener("click",this.fakeHandlerCallback),this.fakeHandler=null,this.fakeHandlerCallback=null),this.fakeElem&&(this.container.removeChild(this.fakeElem),this.fakeElem=null)}},{key:"selectTarget",value:function(){this.selectedText=(0,a.default)(this.target),this.copyText()}},{key:"copyText",value:function(){var t=void 0;try{t=document.execCommand(this.action)}catch(e){t=!1}this.handleResult(t)}},{key:"handleResult",value:function(t){this.emitter.emit(t?"success":"error",{action:this.action,text:this.selectedText,trigger:this.trigger,clearSelection:this.clearSelection.bind(this)})}},{key:"clearSelection",value:function(){this.trigger&&this.trigger.focus(),window.getSelection().removeAllRanges()}},{key:"destroy",value:function(){this.removeFake()}},{key:"action",set:function(){var t=arguments.length>0&&void 0!==arguments[0]?arguments[0]:"copy";if(this._action=t,"copy"!==this._action&&"cut"!==this._action)throw new Error('Invalid "action" value, use either "copy" or "cut"')},get:function(){return this._action}},{key:"target",set:function(t){if(void 0!==t){if(!t||"object"!==("undefined"===typeof t?"undefined":r(t))||1!==t.nodeType)throw new Error('Invalid "target" value, use a valid Element');if("copy"===this.action&&t.hasAttribute("disabled"))throw new Error('Invalid "target" attribute. Please use "readonly" instead of "disabled" attribute');if("cut"===this.action&&(t.hasAttribute("readonly")||t.hasAttribute("disabled")))throw new Error('Invalid "target" attribute. You can\'t cut text from elements with "readonly" or "disabled" attributes');this._target=t}},get:function(){return this._target}}]),t}();t.exports=u},function(t,e){function n(t){var e;if("SELECT"===t.nodeName)t.focus(),e=t.value;else if("INPUT"===t.nodeName||"TEXTAREA"===t.nodeName){var n=t.hasAttribute("readonly");n||t.setAttribute("readonly",""),t.select(),t.setSelectionRange(0,t.value.length),n||t.removeAttribute("readonly"),e=t.value}else{t.hasAttribute("contenteditable")&&t.focus();var r=window.getSelection(),o=document.createRange();o.selectNodeContents(t),r.removeAllRanges(),r.addRange(o),e=r.toString()}return e}t.exports=n},function(t,e){function n(){}n.prototype={on:function(t,e,n){var r=this.e||(this.e={});return(r[t]||(r[t]=[])).push({fn:e,ctx:n}),this},once:function(t,e,n){var r=this;function o(){r.off(t,o),e.apply(n,arguments)}return o._=e,this.on(t,o,n)},emit:function(t){var e=[].slice.call(arguments,1),n=((this.e||(this.e={}))[t]||[]).slice(),r=0,o=n.length;for(r;r<o;r++)n[r].fn.apply(n[r].ctx,e);return this},off:function(t,e){var n=this.e||(this.e={}),r=n[t],o=[];if(r&&e)for(var i=0,a=r.length;i<a;i++)r[i].fn!==e&&r[i].fn._!==e&&o.push(r[i]);return o.length?n[t]=o:delete n[t],this}},t.exports=n},function(t,e,n){var r=n(5),o=n(6);function i(t,e,n){if(!t&&!e&&!n)throw new Error("Missing required arguments");if(!r.string(e))throw new TypeError("Second argument must be a String");if(!r.fn(n))throw new TypeError("Third argument must be a Function");if(r.node(t))return a(t,e,n);if(r.nodeList(t))return c(t,e,n);if(r.string(t))return s(t,e,n);throw new TypeError("First argument must be a String, HTMLElement, HTMLCollection, or NodeList")}function a(t,e,n){return t.addEventListener(e,n),{destroy:function(){t.removeEventListener(e,n)}}}function c(t,e,n){return Array.prototype.forEach.call(t,function(t){t.addEventListener(e,n)}),{destroy:function(){Array.prototype.forEach.call(t,function(t){t.removeEventListener(e,n)})}}}function s(t,e,n){return o(document.body,t,e,n)}t.exports=i},function(t,e){e.node=function(t){return void 0!==t&&t instanceof HTMLElement&&1===t.nodeType},e.nodeList=function(t){var n=Object.prototype.toString.call(t);return void 0!==t&&("[object NodeList]"===n||"[object HTMLCollection]"===n)&&"length"in t&&(0===t.length||e.node(t[0]))},e.string=function(t){return"string"===typeof t||t instanceof String},e.fn=function(t){var e=Object.prototype.toString.call(t);return"[object Function]"===e}},function(t,e,n){var r=n(7);function o(t,e,n,r,o){var i=a.apply(this,arguments);return t.addEventListener(n,i,o),{destroy:function(){t.removeEventListener(n,i,o)}}}function i(t,e,n,r,i){return"function"===typeof t.addEventListener?o.apply(null,arguments):"function"===typeof n?o.bind(null,document).apply(null,arguments):("string"===typeof t&&(t=document.querySelectorAll(t)),Array.prototype.map.call(t,function(t){return o(t,e,n,r,i)}))}function a(t,e,n,o){return function(n){n.delegateTarget=r(n.target,e),n.delegateTarget&&o.call(t,n)}}t.exports=i},function(t,e){var n=9;if("undefined"!==typeof Element&&!Element.prototype.matches){var r=Element.prototype;r.matches=r.matchesSelector||r.mozMatchesSelector||r.msMatchesSelector||r.oMatchesSelector||r.webkitMatchesSelector}function o(t,e){while(t&&t.nodeType!==n){if("function"===typeof t.matches&&t.matches(e))return t;t=t.parentNode}}t.exports=o}])})},e483:function(t,e,n){"use strict";n.r(e);var r=function(){var t=this,e=t.$createElement,r=t._self._c||e;return r("div",{staticClass:"logistics"},[t._l(t.cartInfo,function(e){return r("div",{key:e.id,staticClass:"header acea-row row-between row-top"},[r("div",{staticClass:"pictrue"},[r("img",{attrs:{src:e.productInfo.image}})]),r("div",{staticClass:"text acea-row row-between"},[r("div",{staticClass:"name line2"},[t._v("\n        "+t._s(e.productInfo.store_name)+"\n      ")]),r("div",{staticClass:"money"},[r("div",[t._v("￥"+t._s(e.truePrice))]),r("div",[t._v("x"+t._s(e.cart_num))])])])])}),r("div",{staticClass:"logisticsCon"},[r("div",{staticClass:"company acea-row row-between-wrapper"},[r("div",{staticClass:"picTxt acea-row row-between-wrapper"},[r("div",{staticClass:"iconfont icon-wuliu"}),r("div",{staticClass:"text"},[r("div",[r("span",{staticClass:"name line1"},[t._v("物流公司：")]),t._v("\n            "+t._s(t.orderInfo.delivery_name)+"\n          ")]),r("div",{staticClass:"express line1"},[r("span",{staticClass:"name"},[t._v("快递单号：")]),t._v(" "+t._s(t.orderInfo.delivery_id)+"\n          ")])])]),r("div",{staticClass:"copy acea-row row-center-wrapper copy-data",attrs:{"data-clipboard-text":t.orderInfo.delivery_id}},[t._v("\n        复制单号\n      ")])]),t._l(t.expressList,function(e,n){return r("div",{key:n,staticClass:"item"},[r("div",{staticClass:"circular",class:0===n?"on":""}),r("div",{staticClass:"text"},[r("div",{class:0===n?"font-color-red":""},[t._v("\n          "+t._s(e.status)+"\n        ")]),r("div",{staticClass:"data"},[t._v(t._s(e.time))])])])})],2),t.loaded&&!t.expressList.length?r("div",{staticClass:"no-express"},[r("img",{attrs:{src:n("eb49")}})]):t._e(),r("Recommend")],2)},o=[],i=(n("7f7f"),n("f410")),a=n("b311"),c=n.n(a),s=n("f8b7"),u="Logistics",l={name:u,components:{Recommend:i["a"]},data:function(){return{id:this.$route.params.id,cartInfo:[],orderInfo:{},expressList:[],loaded:!1}},watch:{$route:function(t){t.name===u&&this.$route.params.id!==this.id&&(this.id=this.$route.params.id,this.getExpress())}},mounted:function(){this.getExpress()},methods:{getExpress:function(){var t=this;if(!this.id)return this.$dialog.error("订单不存在");this.loaded=!1,Object(s["d"])(this.id).then(function(e){var n=e.data.express.result||{};t.cartInfo=e.data.order.cartInfo,t.orderInfo=e.data.order,t.expressList=n.list||[],t.loaded=!0,t.$nextTick(function(){var t=this,e=document.getElementsByClassName("copy-data"),n=new c.a(e);n.on("success",function(){t.$dialog.success("复制成功")})})}).catch(function(e){t.$dialog.error(e.msg||"加载失败")})}}},f=l,d=(n("f26a"),n("2877")),p=Object(d["a"])(f,r,o,!1,null,"33384c09",null);e["default"]=p.exports},eb49:function(t,e,n){t.exports=n.p+"h5/img/noExpress.375a0428.png"},f26a:function(t,e,n){"use strict";var r=n("1104"),o=n.n(r);o.a},f8b7:function(t,e,n){"use strict";n.d(e,"m",function(){return o}),n.d(e,"l",function(){return i}),n.d(e,"e",function(){return a}),n.d(e,"b",function(){return c}),n.d(e,"f",function(){return s}),n.d(e,"g",function(){return u}),n.d(e,"a",function(){return l}),n.d(e,"i",function(){return f}),n.d(e,"h",function(){return d}),n.d(e,"n",function(){return p}),n.d(e,"o",function(){return h}),n.d(e,"c",function(){return y}),n.d(e,"d",function(){return v}),n.d(e,"k",function(){return m}),n.d(e,"j",function(){return g});var r=n("b775");function o(t){return r["a"].post("/order/confirm",{cartId:t})}function i(t,e){return r["a"].post("/order/computed/"+t,e)}function a(t){return r["a"].get("/coupons/order/"+(parseFloat(t)||0))}function c(t,e){return r["a"].post("/order/create/"+t,e||{})}function s(){return r["a"].get("/order/data")}function u(t){return r["a"].get("/order/list",t)}function l(t){return r["a"].post("/order/cancel",{id:t})}function f(t){return r["a"].get("/order/detail/"+t)}function d(){return r["a"].get("/order/refund/reason")}function p(t){return r["a"].post("/order/refund/verify",t)}function h(t){return r["a"].post("/order/take",{uni:t})}function y(t){return r["a"].post("/order/del",{uni:t})}function v(t){return r["a"].get("order/express/"+t)}function m(t,e,n){return r["a"].post("order/pay",{uni:t,paytype:e,from:n})}function g(t,e){return r["a"].post("order/order_verific",{verify_code:t,is_confirm:e})}}}]);
//# sourceMappingURL=chunk-16eeeb11.e2a2674a.js.map