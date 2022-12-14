<?php /*a:5:{s:85:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\order\store_order\index.php";i:1613695276;s:78:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\container.php";i:1613695276;s:79:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\frame_head.php";i:1613695276;s:74:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\style.php";i:1613695276;s:81:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\frame_footer.php";i:1613695276;}*/ ?>
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

<style>
    .btn-outline{
        border:none;
    }
    .btn-outline:hover{
        background-color: #0e9aef;
        color: #fff;
    }
    .layui-form-item .layui-btn {
        margin-top: 5px;
        margin-right: 10px;
    }
    .layui-btn-primary{
        margin-right: 10px;
        margin-left: 0!important;
    }
    label{
        margin-bottom: 0!important;
        margin-top: 4px;
    }
</style>
<div class="layui-fluid">
    <div class="layui-row layui-col-space15" id="app">
        <!--????????????-->
        <div class="layui-col-md12">
            <div class="layui-card">
                <div class="layui-card-header">????????????</div>
                <div class="layui-card-body">
                    <div class="layui-carousel layadmin-carousel layadmin-shortcut" lay-anim="" lay-indicator="inside"
                         lay-arrow="none" style="background:none">
                        <div class="layui-card-body">
                            <div class="layui-row layui-col-space10 layui-form-item">
                                <div class="layui-col-lg12">
                                    <label class="layui-form-label">????????????:</label>
                                    <div class="layui-input-block" v-cloak="">
                                        <button class="layui-btn layui-btn-sm"
                                                :class="{'layui-btn-primary':where.status!==item.value}"
                                                @click="where.status = item.value" type="button"
                                                v-for="item in orderStatus">{{item.name}}
                                            <span v-if="item.count!=undefined"
                                                  :class="item.class!=undefined ? 'layui-badge': 'layui-badge layui-bg-gray' ">{{item.count}}</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="layui-col-lg12">
                                    <label class="layui-form-label">????????????:</label>
                                    <div class="layui-input-block" v-cloak="">
                                        <button class="layui-btn layui-btn-sm"
                                                :class="{'layui-btn-primary':where.type!=item.value}"
                                                @click="where.type = item.value" type="button"
                                                v-for="item in orderType">{{item.name}}
                                            <span v-if="item.count!=undefined" class="layui-badge layui-bg-gray">{{item.count}}</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="layui-col-lg12">
                                    <label class="layui-form-label">????????????:</label>
                                    <div class="layui-input-block" v-cloak="">
                                        <button class="layui-btn layui-btn-sm"
                                                :class="{'layui-btn-primary':where.pay_type!=item.value}"
                                                @click="where.pay_type = item.value" type="button"
                                                v-for="item in payType">{{item.name}}
                                            <span v-if="item.count!=undefined" class="layui-badge layui-bg-gray">{{item.count}}</span>
                                        </button>
                                    </div>
                                </div>
                                <div class="layui-col-lg12">
                                    <label class="layui-form-label">????????????:</label>
                                    <div class="layui-input-block" data-type="data" v-cloak="">
                                        <button class="layui-btn layui-btn-sm" type="button" v-for="item in dataList"
                                                @click="setData(item)"
                                                :class="{'layui-btn-primary':where.data!=item.value}">{{item.name}}
                                        </button>
                                        <button class="layui-btn layui-btn-sm" type="button" ref="time"
                                                @click="setData({value:'zd',is_zd:true})"
                                                :class="{'layui-btn-primary':where.data!='zd'}">?????????
                                        </button>
                                        <button type="button" class="layui-btn layui-btn-sm layui-btn-primary"
                                                v-show="showtime==true" ref="date_time"><?php echo htmlentities($year['0']); ?> - <?php echo htmlentities($year['1']); ?>
                                        </button>
                                    </div>
                                </div>
                                <div class="layui-col-lg12">
                                    <label class="layui-form-label">?????????:</label>
                                    <div class="layui-input-block">
                                        <input type="text" name="real_name" style="width: 50%" v-model="where.real_name"
                                               placeholder="???????????????????????????????????????" class="layui-input">
                                    </div>
                                </div>
                                <div class="layui-col-lg12">
                                    <div class="layui-input-block">
                                        <button @click="search" type="button"
                                                class="layui-btn layui-btn-sm layui-btn-normal">
                                            <i class="layui-icon layui-icon-search"></i>??????
                                        </button>
                                        <button @click="excel" type="button"
                                                class="layui-btn layui-btn-warm layui-btn-sm export" type="button">
                                            <i class="fa fa-floppy-o" style="margin-right: 3px;"></i>??????
                                        </button>
                                        <button @click="refresh" type="reset"
                                                class="layui-btn layui-btn-primary layui-btn-sm">
                                            <i class="layui-icon layui-icon-refresh"></i>??????
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end-->
        <!-- ??????????????????-->
        <div :class="item.col!=undefined ? 'layui-col-sm'+item.col+' '+'layui-col-md'+item.col:'layui-col-sm6 layui-col-md3'"
             v-for="item in badge" v-cloak="" v-if="item.count > 0">
            <div class="layui-card">
                <div class="layui-card-header">
                    {{item.name}}
                    <span class="layui-badge layuiadmin-badge" :class="item.background_color">{{item.field}}</span>
                </div>
                <div class="layui-card-body">
                    <p class="layuiadmin-big-font">{{item.count}}</p>
                    <p v-show="item.content!=undefined">
                        {{item.content}}
                        <span class="layuiadmin-span-color">{{item.sum}}<i :class="item.class"></i></span>
                    </p>
                </div>
            </div>
        </div>
        <!--enb-->
    </div>
    <!--??????-->
    <div class="layui-row layui-col-space15">
        <div class="layui-col-md12">
            <div class="layui-card">
                <div class="layui-card-header">????????????</div>
                <div class="layui-card-body">
                    <div class="layui-btn-container" id="container-action">
                        <button class="layui-btn layui-btn-sm" data-type="del_order">??????????????????</button>
                        <button class="layui-btn layui-btn-sm layui-btn-warm" data-type="write_order">????????????</button>
                    </div>
                    <table class="layui-hide" id="List" lay-filter="List"></table>
                    <!--??????-->
                    <script type="text/html" id="order_id">
                        {{d.order_id}}<br/>
                        <span style="color: {{d.color}};">{{d.pink_name}}</span><br/>???
                        {{#  if(d.is_del == 1){ }}<span style="color: {{d.color}};">???????????????</span>{{# } }}???
                    </script>
                    <!--????????????-->
                    <script type="text/html" id="userinfo">
                        {{d.nickname==null ? '????????????':d.nickname}}/{{d.uid}}
                    </script>
                    <!--???????????????-->
                    <script type="text/html" id="spread_uid">
                        {{# if(d.spread_uid != 0){ }}
                        <button class="btn-xs btn-outline" type="button"
                                onclick="$eb.createModalFrame('???????????????','<?php echo Url('order_spread_user'); ?>?uid={{d.spread_uid}}',{w:600,h:400})">
                            {{d.spread_nickname}}
                        </button>
                        {{# }else{ }}???{{# } }}
                    </script>
                    <!--????????????-->
                    <script type="text/html" id="paid">
                        {{#  if(d.pay_type==1){ }}
                        <p>{{d.pay_type_name}}</p>
                        {{#  }else{ }}
                        {{# if(d.pay_type_info!=undefined){ }}
                        <p><span>????????????</span></p>
                        {{# }else{ }}
                        <p>{{d.pay_type_name}}</p>
                        {{# } }}
                        {{# }; }}
                    </script>
                    <!--????????????-->
                    <script type="text/html" id="status">
                        {{d.status_name}}
                    </script>
                    <!--????????????-->
                    <script type="text/html" id="info">
                        {{#  layui.each(d._info, function(index, item){ }}
                        {{#  if(item.cart_info.productInfo.attrInfo!=undefined){ }}
                        <div>
                            <span>
                                <img style="width: 30px;height: 30px;margin:0;cursor: pointer;"
                                     src="{{item.cart_info.productInfo.attrInfo.image}}">
                            </span>
                            <span>{{item.cart_info.productInfo.store_name}}&nbsp;{{item.cart_info.productInfo.attrInfo.suk}}</span>
                            <span> | ???{{item.cart_info.truePrice}}??{{item.cart_info.cart_num}}</span>
                        </div>
                        {{#  }else{ }}
                        <div>
                            <span><img style="width: 30px;height: 30px;margin:0;cursor: pointer;"
                                       src="{{item.cart_info.productInfo.image}}"></span>
                            <span>{{item.cart_info.productInfo.store_name}}</span><span> | ???{{item.cart_info.truePrice}}??{{item.cart_info.cart_num}}</span>
                        </div>
                        {{# } }}
                        {{#  }); }}
                    </script>

                    <script type="text/html" id="act">
                        {{# if(d._status==0){ }}
                        <button class="layui-btn layui-btn-xs" type="button" lay-event="verify">
                            <i class="fa fa-calendar"></i> ????????????
                        </button>
                        <button type="button" class="layui-btn layui-btn-xs" onclick="dropdown(this)">?????? <span
                                    class="caret"></span></button>
                        <ul class="layui-nav-child layui-anim layui-anim-upbit">
                            <li>
                                <a href="javascript:void(0);" lay-event='order_info'>
                                    <i class="fa fa-file-text"></i> ????????????
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"
                                   onclick="$eb.createModalFrame('????????????','<?php echo Url('edit'); ?>?id={{d.id}}')">
                                    <i class="fa fa-edit"></i> ????????????
                                </a>
                            </li>
                            {{# if(d.refund_status ==1){ }}

                            {{# if(parseFloat(d.pay_price) > parseFloat(d.refund_price)){ }}
                            <li>
                                <a href="javascript:void(0);"
                                   onclick="$eb.createModalFrame('??????','<?php echo Url('refund_y'); ?>?id={{d.id}}',{w:400,h:300})">
                                    <i class="fa fa-history"></i>????????????
                                </a>
                            </li>
                            {{# } ;}}
                            <li>
                                <a href="javascript:void(0);"
                                   onclick="$eb.createModalFrame('?????????','<?php echo Url('refund_n'); ?>?id={{d.id}}',{w:400,h:300})">
                                    <i class="fa fa-openid"></i> ?????????
                                </a>
                            </li>
                            {{# } ;}}
                            <li>
                                <a lay-event='marke' href="javascript:void(0);">
                                    <i class="fa fa-edit"></i> ????????????
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"
                                   onclick="$eb.createModalFrame('????????????','<?php echo Url('order_status'); ?>?oid={{d.id}}')">
                                    <i class="fa fa-newspaper-o"></i> ????????????
                                </a>
                            </li>
                        </ul>
                        {{#  }else if(d._status==1){ }}
                        {{# if(d.paid == 0 && d.pay_type == 'offline'){ }}
                        <button class="btn btn-danger btn-xs" type="button" lay-event="order_paid">
                            <i class="fa fa-calendar"></i> ????????????
                        </button>
                        {{# } ;}}
                        <button type="button" class="layui-btn layui-btn-xs" onclick="dropdown(this)">?????? <span
                                    class="caret"></span></button>
                        <ul class="layui-nav-child layui-anim layui-anim-upbit">
                            <li>
                                <a href="javascript:void(0);" lay-event='order_info'>
                                    <i class="fa fa-file-text"></i> ????????????
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"
                                   onclick="$eb.createModalFrame('????????????','<?php echo Url('edit'); ?>?id={{d.id}}')">
                                    <i class="fa fa-edit"></i> ????????????
                                </a>
                            </li>
                            <li>
                                <a lay-event='marke' href="javascript:void(0);">
                                    <i class="fa fa-edit"></i> ????????????
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"
                                   onclick="$eb.createModalFrame('????????????','<?php echo Url('order_status'); ?>?oid={{d.id}}')">
                                    <i class="fa fa-newspaper-o"></i> ????????????
                                </a>
                            </li>
                        </ul>
                        {{#  }else if(d._status==2){ }}
                        {{# if(d.shipping_type==1){ }}
                        <button class="btn btn-primary btn-xs" type="button"
                                onclick="$eb.createModalFrame('?????????','<?php echo Url('order_goods'); ?>?id={{d.id}}',{w:400,h:250})">
                            <i class="fa fa-cart-plus"></i> ?????????
                        </button>
                        {{# } }}
                        <button type="button" class="layui-btn layui-btn-xs" onclick="dropdown(this)">?????? <span
                                    class="caret"></span></button>
                        <ul class="layui-nav-child layui-anim layui-anim-upbit">
                            <li>
                                <a href="javascript:void(0);" lay-event='order_print'>
                                    <i class="fa fa-file-text"></i> ????????????
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" lay-event='order_info'>
                                    <i class="fa fa-file-text"></i> ????????????
                                </a>
                            </li>
                            <li>
                                <a lay-event='marke' href="javascript:void(0);">
                                    <i class="fa fa-paste"></i> ????????????
                                </a>
                            </li>
                            {{# if(parseFloat(d.pay_price) > parseFloat(d.refund_price)){ }}
                            <li>
                                <a href="javascript:void(0);"
                                   onclick="$eb.createModalFrame('??????','<?php echo Url('refund_y'); ?>?id={{d.id}}',{w:400,h:300})">
                                    <i class="fa fa-history"></i> ????????????
                                </a>
                            </li>
                            {{# }else if(d.use_integral > 0 && d.use_integral >= d.back_integral){ }}
                            <li>
                                <a href="javascript:void(0);"
                                   onclick="$eb.createModalFrame('?????????','<?php echo Url('integral_back'); ?>?id={{d.id}}')">
                                    <i class="fa fa-history"></i> ?????????
                                </a>
                            </li>
                            {{# } ;}}
                            <li>
                                <a href="javascript:void(0);"
                                   onclick="$eb.createModalFrame('????????????','<?php echo Url('order_status'); ?>?oid={{d.id}}')">
                                    <i class="fa fa-newspaper-o"></i> ????????????
                                </a>
                            </li>
                        </ul>
                        {{#  }else if(d._status==3){ }}
                        <button type="button" class="layui-btn layui-btn-xs" onclick="dropdown(this)">?????? <span
                                    class="caret"></span></button>
                        <ul class="layui-nav-child layui-anim layui-anim-upbit">
                            <li>
                                <a href="javascript:void(0);" lay-event='order_print'>
                                    <i class="fa fa-file-text"></i> ????????????
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" lay-event='order_info'>
                                    <i class="fa fa-file-text"></i> ????????????
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"
                                   onclick="$eb.createModalFrame('?????????','<?php echo Url('delivery'); ?>?id={{d.id}}',{w:400,h:300})">
                                    <i class="fa fa-motorcycle"></i> ?????????
                                </a>
                            </li>
                            {{# if(parseFloat(d.use_integral) > 0 && parseFloat(d.use_integral) >
                            parseFloat(d.back_integral)){ }}
                            <li>
                                <a lay-event='marke' href="javascript:void(0);">
                                    <i class="fa fa-paste"></i> ????????????
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"
                                   onclick="$eb.createModalFrame('?????????','<?php echo Url('integral_back'); ?>?id={{d.id}}',{w:400,h:300})">
                                    <i class="fa fa-history"></i> ?????????
                                </a>
                            </li>
                            {{# };}}
                            {{# if(parseFloat(d.pay_price) > parseFloat(d.refund_price)){ }}
                            <li>
                                <a href="javascript:void(0);"
                                   onclick="$eb.createModalFrame('??????','<?php echo Url('refund_y'); ?>?id={{d.id}}',{w:400,h:300})">
                                    <i class="fa fa-history"></i>????????????
                                </a>
                            </li>
                            {{# } ;}}
                            <li>
                                <a href="javascript:void(0);"
                                   onclick="$eb.createModalFrame('?????????','<?php echo Url('refund_n'); ?>?id={{d.id}}',{w:400,h:300})">
                                    <i class="fa fa-openid"></i> ?????????
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"
                                   onclick="$eb.createModalFrame('????????????','<?php echo Url('order_status'); ?>?oid={{d.id}}')">
                                    <i class="fa fa-newspaper-o"></i> ????????????
                                </a>
                            </li>

                        </ul>
                        {{#  }else if(d._status==4){ }}
                        <button class="btn btn-default btn-xs" type="button"
                                onclick="$eb.createModalFrame('????????????','<?php echo Url('distribution'); ?>?id={{d.id}}')">
                            <i class="fa fa-cart-arrow-down"></i> ????????????
                        </button>
                        <button type="button" class="layui-btn layui-btn-xs" onclick="dropdown(this)">?????? <span
                                    class="caret"></span></button>
                        <ul class="layui-nav-child layui-anim layui-anim-upbit">
                            <li>
                                <a href="javascript:void(0);" lay-event='order_print'>
                                    <i class="fa fa-file-text"></i> ????????????
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" lay-event='order_info'>
                                    <i class="fa fa-file-text"></i> ????????????
                                </a>
                            </li>
                            <li>
                                <a lay-event='marke' href="javascript:void(0);">
                                    <i class="fa fa-paste"></i> ????????????
                                </a>
                            </li>
                            <li>
                                <a lay-event='danger' href="javascript:void(0);">
                                    <i class="fa fa-cart-arrow-down"></i> ?????????
                                </a>
                            </li>
                            {{# if(parseFloat(d.pay_price) > parseFloat(d.refund_price)){ }}
                            <li>
                                <a href="javascript:void(0);"
                                   onclick="$eb.createModalFrame('??????','<?php echo Url('refund_y'); ?>?id={{d.id}}')">
                                    <i class="fa fa-history"></i> ????????????
                                </a>
                            </li>
                            {{# }else if(parseFloat(d.use_integral) > 0 && parseFloat(d.use_integral) >
                            parseFloat(d.back_integral)){ }}
                            <li>
                                <a href="javascript:void(0);"
                                   onclick="$eb.createModalFrame('?????????','<?php echo Url('integral_back'); ?>?id={{d.id}}')">
                                    <i class="fa fa-history"></i> ?????????
                                </a>
                            </li>
                            {{# } }}
                            <li>
                                <a href="javascript:void(0);"
                                   onclick="$eb.createModalFrame('????????????','<?php echo Url('order_status'); ?>?oid={{d.id}}')">
                                    <i class="fa fa-newspaper-o"></i> ????????????
                                </a>
                            </li>
                        </ul>
                        {{#  }else if(d._status==5 || d._status==6){ }}
                        <button type="button" class="layui-btn layui-btn-xs" onclick="dropdown(this)">?????? <span
                                    class="caret"></span></button>
                        <ul class="layui-nav-child layui-anim layui-anim-upbit">
                            <li>
                                <a href="javascript:void(0);" lay-event='order_print'>
                                    <i class="fa fa-file-text"></i> ????????????
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" lay-event='order_info'>
                                    <i class="fa fa-file-text"></i> ????????????
                                </a>
                            </li>
                            <li>
                                <a lay-event='marke' href="javascript:void(0);">
                                    <i class="fa fa-paste"></i> ????????????
                                </a>
                            </li>
                            {{# if(parseFloat(d.pay_price) > parseFloat(d.refund_price)){ }}
                            <li>
                                <a href="javascript:void(0);"
                                   onclick="$eb.createModalFrame('??????','<?php echo Url('refund_y'); ?>?id={{d.id}}')">
                                    <i class="fa fa-history"></i> ????????????
                                </a>
                            </li>
                            {{# };}}
                            {{# if(parseFloat(d.use_integral) > 0 && parseFloat(d.use_integral) >
                            parseFloat(d.back_integral)){ }}
                            <li>
                                <a href="javascript:void(0);"
                                   onclick="$eb.createModalFrame('?????????','<?php echo Url('integral_back'); ?>?id={{d.id}}')">
                                    <i class="fa fa-history"></i> ?????????
                                </a>
                            </li>
                            {{# } }}
                            <li>
                                <a href="javascript:void(0);"
                                   onclick="$eb.createModalFrame('????????????','<?php echo Url('order_status'); ?>?oid={{d.id}}')">
                                    <i class="fa fa-newspaper-o"></i> ????????????
                                </a>
                            </li>
                        </ul>
                        {{#  }else if(d._status==7){ }}
                        <button type="button" class="layui-btn layui-btn-xs" onclick="dropdown(this)">?????? <span
                                    class="caret"></span></button>
                        <ul class="layui-nav-child layui-anim layui-anim-upbit">
                            <li>
                                <a href="javascript:void(0);" lay-event='order_print'>
                                    <i class="fa fa-file-text"></i> ????????????
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" lay-event='order_info'>
                                    <i class="fa fa-file-text"></i> ????????????
                                </a>
                            </li>
                            <li>
                                <a lay-event='marke' href="javascript:void(0);">
                                    <i class="fa fa-paste"></i> ????????????
                                </a>
                            </li>
                            {{# if(parseFloat(d.pay_price) > parseFloat(d.refund_price)){ }}
                            <li>
                                <a href="javascript:void(0);"
                                   onclick="$eb.createModalFrame('??????','<?php echo Url('refund_y'); ?>?id={{d.id}}')">
                                    <i class="fa fa-history"></i> ????????????
                                </a>
                            </li>
                            {{# } }}
                            {{# if(parseFloat(d.use_integral) > 0 && parseFloat(d.use_integral) >=
                            parseFloat(d.back_integral)){ }}
                            <li>
                                <a href="javascript:void(0);"
                                   onclick="$eb.createModalFrame('?????????','<?php echo Url('integral_back'); ?>?id={{d.id}}')">
                                    <i class="fa fa-history"></i> ?????????
                                </a>
                            </li>
                            {{# } }}
                            <li>
                                <a href="javascript:void(0);"
                                   onclick="$eb.createModalFrame('????????????','<?php echo Url('order_status'); ?>?oid={{d.id}}')">
                                    <i class="fa fa-newspaper-o"></i> ????????????
                                </a>
                            </li>
                        </ul>
                        {{#  }; }}
                    </script>
                </div>
            </div>
        </div>
    </div>
    <!--end-->
</div>
<script src="/system/js/layuiList.js"></script>



<script>
    layList.tableList('List', "<?php echo Url('order_list',['real_name'=>$real_name]); ?>", function () {
        return [
            {type: 'checkbox'},
            {field: 'order_id', title: '?????????', sort: true, event: 'order_id', width: '14%', templet: '#order_id'},
            {field: 'nickname', title: '????????????', templet: '#userinfo', width: '10%', align: 'center'},
            {field: 'spread_uid', title: '???????????????', templet: '#spread_uid', width: '10%', align: 'center'},
            {field: 'info', title: '????????????', templet: "#info", height: 'full-20'},
            {field: 'pay_price', title: '????????????', width: '8%', align: 'center'},
            {field: 'paid', title: '????????????', templet: '#paid', width: '8%', align: 'center'},
            {field: 'status', title: '????????????', templet: '#status', width: '8%', align: 'center'},
            {field: 'add_time', title: '????????????', width: '10%', sort: true, align: 'center'},
            {field: 'right', title: '??????', align: 'center', toolbar: '#act', width: '10%'},
        ];
    });
    layList.tool(function (event, data, obj) {
        switch (event) {
            case 'order_paid':
                var url = layList.U({c: 'order.store_order', a: 'offline', p: {id: data.id}});
                $eb.$swal('delete', function () {
                    $eb.axios.get(url).then(function (res) {
                        if (res.status == 200 && res.data.code == 200) {
                            $eb.$swal('success', res.data.msg);
                        } else
                            return Promise.reject(res.data.msg || '????????????')
                    }).catch(function (err) {
                        $eb.$swal('error', err);
                    });
                }, {'title': '????????????????????????????????????', 'text': '????????????????????????,??????????????????', 'confirm': '?????????????????????'})
                break;
            case 'verify':
                var url = layList.U({c: 'order.store_order', a: 'verify', p: {id: data.id}});
                $eb.$swal('delete', function () {
                    $eb.axios.get(url).then(function (res) {
                        if (res.status == 200 && res.data.code == 200) {
                            $eb.$swal('success', res.data.msg);
                        } else
                            return Promise.reject(res.data.msg || '????????????')
                    }).catch(function (err) {
                        $eb.$swal('error', err);
                    });
                }, {'title': '??????????????????????????????', 'text': '????????????????????????,??????????????????', 'confirm': '?????????????????????'})
                break;
            case 'marke':
                var url = layList.U({c: 'order.store_order', a: 'remark'}),
                    id = data.id,
                    make = data.remark;
                $eb.$alert('textarea', {title: '???????????????', value: make}, function (result) {
                    if (result) {
                        $.ajax({
                            url: url,
                            data: 'remark=' + result + '&id=' + id,
                            type: 'post',
                            dataType: 'json',
                            success: function (res) {
                                if (res.code == 200) {
                                    $eb.$swal('success', res.msg);
                                } else
                                    $eb.$swal('error', res.msg);
                            }
                        })
                    } else {
                        $eb.$swal('error', '???????????????????????????');
                    }
                });
                break;
            case 'danger':
                var url = layList.U({c: 'order.store_order', a: 'take_delivery', p: {id: data.id}});
                $eb.$swal('delete', function () {
                    $eb.axios.get(url).then(function (res) {
                        if (res.status == 200 && res.data.code == 200) {
                            $eb.$swal('success', res.data.msg);
                        } else
                            return Promise.reject(res.data.msg || '????????????')
                    }).catch(function (err) {
                        $eb.$swal('error', err);
                    });
                }, {'title': '????????????????????????????????????', 'text': '????????????????????????,??????????????????', 'confirm': '?????????????????????'})
                break;
            case 'order_info':
                $eb.createModalFrame(data.nickname + '????????????', layList.U({a: 'order_info', q: {oid: data.id}}));
                break;
            case 'order_print':
                var url = layList.U({c: 'order.store_order', a: 'order_print', p: {id: data.id}});
                $eb.$swal('delete', function () {
                    $eb.axios.get(url).then(function (res) {
                        if (res.status == 200 && res.data.code == 200) {
                            $eb.$swal('success', res.data.msg);
                        } else
                            return Promise.reject(res.data.msg || '????????????')
                    }).catch(function (err) {
                        $eb.$swal('error', err);
                    });
                }, {'title': '?????????????????????', 'text': '?????????????????????', 'confirm': '??????'})
                break;
        }
    })
    var action = {
        del_order: function () {
            var ids = layList.getCheckData().getIds('id');
            if (ids.length) {
                var url = layList.U({c: 'order.store_order', a: 'del_order'});
                $eb.$swal('delete', function () {
                    $eb.axios.post(url, {ids: ids}).then(function (res) {
                        if (res.status == 200 && res.data.code == 200) {
                            $eb.$swal('success', res.data.msg);
                        } else
                            return Promise.reject(res.data.msg || '????????????')
                    }).catch(function (err) {
                        $eb.$swal('error', err);
                    });
                }, {'title': '?????????????????????????????????', 'text': '????????????????????????,??????????????????', 'confirm': '?????????????????????'})
            } else {
                layList.msg('???????????????????????????');
            }
        },
        write_order: function () {
            return $eb.createModalFrame('????????????', layList.U({a: 'write_order'}), {w: 500, h: 400});
        },
    };
    $('#container-action').find('button').each(function () {
        $(this).on('click', function () {
            var act = $(this).data('type');
            action[act] && action[act]();
        });
    })
    //?????????
    $(document).click(function (e) {
        $('.layui-nav-child').hide();
    })

    function dropdown(that) {
        var oEvent = arguments.callee.caller.arguments[0] || event;
        oEvent.stopPropagation();
        var offset = $(that).offset();
        var top = offset.top - $(window).scrollTop();
        var index = $(that).parents('tr').data('index');
        $('.layui-nav-child').each(function (key) {
            if (key != index) {
                $(this).hide();
            }
        })
        if ($(document).height() < top + $(that).next('ul').height()) {
            $(that).next('ul').css({
                'padding': 10,
                'top': -($(that).parents('td').height() / 2 + $(that).height() + $(that).next('ul').height() / 2),
                'min-width': 'inherit',
                'position': 'absolute'
            }).toggle();
        } else {
            $(that).next('ul').css({
                'padding': 10,
                'top': $(that).parents('td').height() / 2 + $(that).height(),
                'min-width': 'inherit',
                'position': 'absolute'
            }).toggle();
        }
    }

    var real_name = '<?=$real_name?>';
    var orderCount =<?=json_encode($orderCount)?>, payTypeCount =<?=json_encode($payTypeCount)?>,
        status =<?=$status ? $status : "''"?>;
    require(['vue'], function (Vue) {
        new Vue({
            el: "#app",
            data: {
                badge: [],
                payType: [
                    {name: '??????', value: ''},
                    {name: '????????????', value: 1, count: payTypeCount.weixin},
                    {name: '????????????', value: 2, count: payTypeCount.yue},
                    {name: '????????????', value: 3, count: payTypeCount.offline},
                ],
                orderType: [
                    {name: '??????', value: ''},
                    {name: '????????????', value: 1, count: orderCount.general},
                    {name: '????????????', value: 2, count: orderCount.pink},
                    {name: '????????????', value: 3, count: orderCount.seckill},
                    {name: '????????????', value: 4, count: orderCount.bargain},
                ],
                orderStatus: [
                    {name: '??????', value: ''},
                    {name: '?????????', value: 9, count: orderCount.ys},
                    {name: '?????????', value: 1, count: orderCount.wf, class: true},
                    {name: '?????????', value: 5, count: orderCount.write_off, class: true},
                    {name: '?????????', value: 0, count: orderCount.wz},
                    {name: '?????????', value: 2, count: orderCount.ds},
                    {name: '?????????', value: 3, count: orderCount.dp},
                    {name: '????????????', value: 4, count: orderCount.jy},
                    {name: '?????????', value: -1, count: orderCount.tk, class: true},
                    {name: '?????????', value: -2, count: orderCount.yt},
                    {name: '?????????', value: -4, count: orderCount.del},
                ],
                dataList: [
                    {name: '??????', value: ''},
                    {name: '??????', value: 'today'},
                    {name: '??????', value: 'yesterday'},
                    {name: '??????7???', value: 'lately7'},
                    {name: '??????30???', value: 'lately30'},
                    {name: '??????', value: 'month'},
                    {name: '??????', value: 'year'},
                ],
                where: {
                    data: '',
                    status: status,
                    type: '',
                    pay_type: '',
                    real_name: real_name || '',
                    excel: 0,
                },
                showtime: false,
            },
            watch: {
                'where.status': function () {
                    this.where.excel = 0;
                    this.getBadge();
                    layList.reload(this.where, true);
                },
                'where.data': function () {
                    this.where.excel = 0;
                    this.getBadge();
                    layList.reload(this.where, true);
                },
                'where.type': function () {
                    this.where.excel = 0;
                    this.getBadge();
                    layList.reload(this.where, true);
                },
                'where.pay_type': function () {
                    this.where.excel = 0;
                    this.getBadge();
                    layList.reload(this.where, true);
                }
            },
            methods: {
                setData: function (item) {
                    var that = this;
                    if (item.is_zd == true) {
                        that.showtime = true;
                        this.where.data = this.$refs.date_time.innerText;
                    } else {
                        this.showtime = false;
                        this.where.data = item.value;
                    }
                },
                getBadge: function () {
                    var that = this;
                    layList.basePost(layList.Url({c: 'order.store_order', a: 'getBadge'}), this.where, function (rem) {
                        that.badge = rem.data;
                    });
                },
                search: function () {
                    this.where.excel = 0;
                    this.getBadge();
                    layList.reload(this.where, true);
                },
                refresh: function () {
                    layList.reload();
                    this.getBadge();
                },
                excel: function () {
                    this.where.excel = 1;
                    location.href = layList.U({c: 'order.store_order', a: 'order_list', q: this.where});
                    this.where.excel = 0;
                }
            },
            mounted: function () {
                var that = this;
                that.getBadge();
                window.formReload = this.search;
                layList.laydate.render({
                    elem: this.$refs.date_time,
                    trigger: 'click',
                    eventElem: this.$refs.time,
                    range: true,
                    change: function (value) {
                        that.where.data = value;
                    }
                });
            }
        })
    });
</script>


</div>
</body>
</html>
