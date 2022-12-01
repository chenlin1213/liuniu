<?php /*a:5:{s:91:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\order\store_order\write_order.php";i:1613695276;s:78:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\container.php";i:1613695276;s:79:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\frame_head.php";i:1613695276;s:74:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\style.php";i:1613695276;s:81:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\frame_footer.php";i:1613695276;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php if(empty($is_layui) || (($is_layui instanceof \think\Collection || $is_layui instanceof \think\Paginator ) && $is_layui->isEmpty())): ?>
    <link href="/system/frame/css/bootstrap.min.css?v=3.4.0" rel="stylesheet">
    <?php endif; ?>
    <link href="/static/plug/layui/css/layui.css" rel="stylesheet">
    <link href="/system/css/layui-admin.css" rel="stylesheet">
    <link href="/system/frame/css/font-awesome.min.css?v=4.3.0" rel="stylesheet">
    <link href="/system/frame/css/animate.min.css" rel="stylesheet">
    <link href="/system/frame/css/style.min.css?v=3.0.0" rel="stylesheet">
    <script src="/system/frame/js/jquery.min.js"></script>
    <script src="/system/frame/js/bootstrap.min.js"></script>
    <script src="/static/plug/layui/layui.all.js"></script>
    <script>
        $eb = parent._mpApi;
        window.controlle="<?php echo strtolower(trim(preg_replace("/[A-Z]/", "_\\0", app('request')->controller()), "_"));?>";
        window.module="<?php echo app('http')->getName();?>";
    </script>



    <title></title>
    
    <!--<script type="text/javascript" src="/static/plug/basket.js"></script>-->
<script type="text/javascript" src="/static/plug/requirejs/require.js"></script>
<?php /*  <script type="text/javascript" src="/static/plug/requirejs/require-basket-load.js"></script>  */ ?>
<script>
    var hostname = location.hostname;
    if(location.port) hostname += ':' + location.port;
    requirejs.config({
        map: {
            '*': {
                'css': '/static/plug/requirejs/require-css.js'
            }
        },
        shim:{
            'iview':{
                deps:['css!iviewcss']
            },
            'layer':{
                deps:['css!layercss']
            }
        },
        baseUrl:'//'+hostname+'/',
        paths: {
            'static':'static',
            'system':'system',
            'vue':'static/plug/vue/dist/vue.min',
            'axios':'static/plug/axios.min',
            'iview':'static/plug/iview/dist/iview.min',
            'iviewcss':'static/plug/iview/dist/styles/iview',
            'lodash':'static/plug/lodash',
            'layer':'static/plug/layer/layer',
            'layercss':'static/plug/layer/theme/default/layer',
            'jquery':'static/plug/jquery/jquery.min',
            'moment':'static/plug/moment',
            'sweetalert':'static/plug/sweetalert2/sweetalert2.all.min',
            'formCreate':'/static/plug/form-create/form-create.min',

        },
        basket: {
            excludes:['system/js/index','system/util/mpVueComponent','system/util/mpVuePackage']
//            excludes:['system/util/mpFormBuilder','system/js/index','system/util/mpVueComponent','system/util/mpVuePackage']
        }
    });
</script>
<script type="text/javascript" src="/system/util/mpFrame.js"></script>
    
</head>
<body class="gray-bg">
<div class="wrapper wrapper-content">

<div class="layui-fluid">
    <div class="layui-row layui-col-space15"  id="app">
        <!--搜索条件-->
        <div class="layui-col-md12" v-cloak="">
            <div class="layui-card">
                <div class="layui-card-body">
                    <div class="layui-form-item" style="padding-top: 20px;">
                        <input style="height: 50px;line-height: 1.5;display: inline;width: 80%;" v-model="verify_code" type="text" name="title" lay-verify="title" autocomplete="off" placeholder="请输入核销码" class="layui-input">
                        <button style="height: 50px;border-radius: 15px;" type="button" class="layui-btn layui-btn-normal" @click="verify">验证</button>
                    </div>
                    <fieldset class="layui-elem-field" v-if="orderInfo.uid">
                        <legend>订单信息</legend>
                        <div class="layui-field-box">
                            <div class="layui-form">
                                <table class="layui-table">
                                    <tbody>
                                        <tr>
                                            <td>订 单 号</td>
                                            <td>{{orderInfo.order_id}}</td>
                                        </tr>
                                        <tr>
                                            <td>购买金额</td>
                                            <td>{{orderInfo.pay_price}}</td>
                                        </tr>
                                        <tr>
                                            <td>购买用户</td>
                                            <td>{{orderInfo.nickname}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </fieldset>
                    <div class="layui-form-item" style="padding-top: 50px;text-align: center;padding-bottom: 30px;">
                        <button type="button" class="layui-btn layui-btn-normal" @click="confirm">立即核销</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/system/js/layuiList.js"></script>



<script>
    require(['vue'],function(Vue) {
        new Vue({
            el: "#app",
            data: {
                verify_code:'',
                orderInfo:{},
                is_confirm:false,
            },
            methods:{
                verify:function(){
                    var that = this;
                    var reg = /[0-9]{12}/;
                    if(!this.verify_code) return layList.msg('请填写核销码!');
                    if(!reg.test(this.verify_code)) return layList.msg('请填写正确的核销码！');
                    layList.baseGet(layList.U({a:'write_order',q:{verify_code:this.verify_code,is_confirm:0}}),function (res) {
                        that.orderInfo = res.data;
                        that.is_confirm = true;
                    },function (res) {
                        layList.msg(res.msg);
                    });
                },
                confirm:function () {
                    var that = this;
                    if(that.is_confirm === false) return layList.msg('请先验证订单！');
                    layList.baseGet(layList.U({a:'write_order',q:{verify_code:that.verify_code,is_confirm:1}}),function (res) {
                        layList.msg(res.msg,function () {
                            parent.$(".J_iframe:visible")[0].contentWindow.formReload();
                            parent.layer.close(parent.layer.getFrameIndex(window.name));
                        });
                    },function (res) {
                        layList.msg(res.msg);
                    });
                }
            },
            mounted:function () {

            }
        })
    })
</script>


</div>
</body>
</html>
