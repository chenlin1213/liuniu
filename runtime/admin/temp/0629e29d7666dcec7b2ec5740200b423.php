<?php /*a:5:{s:82:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\ump\user_point\index.php";i:1613695276;s:78:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\container.php";i:1613695276;s:79:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\frame_head.php";i:1613695276;s:74:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\style.php";i:1613695276;s:81:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\frame_footer.php";i:1613695276;}*/ ?>
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
        <div class="layui-col-md12">
            <div class="layui-card">
                <div class="layui-card-header">????????????</div>
                <div class="layui-card-body">
                    <form class="layui-form layui-form-pane" action="">
                        <div class="layui-form-item">
                            <div class="layui-inline">
                                <label class="layui-form-label">??????/ID</label>
                                <div class="layui-input-block">
                                    <input type="text" name="nickname" class="layui-input">
                                </div>
                            </div>
                            <div class="layui-inline">
                                <label class="layui-form-label">????????????</label>
                                <div class="layui-input-inline" style="width: 200px;">
                                    <input type="text" name="start_time" id="start_time" placeholder="????????????" autocomplete="off" class="layui-input">
                                </div>
                                <div class="layui-form-mid">-</div>
                                <div class="layui-input-inline" style="width: 200px;">
                                    <input type="text" name="end_time" id="end_time" placeholder="????????????" autocomplete="off" class="layui-input">
                                </div>
                            </div>
                            <div class="layui-inline">
                                <div class="layui-input-inline">
                                    <button class="layui-btn layui-btn-sm layui-btn-normal" lay-submit="search" lay-filter="search">
                                        <i class="layui-icon layui-icon-search"></i>??????</button>
                                    <button class="layui-btn layui-btn-primary layui-btn-sm export" lay-submit="export" lay-filter="export">
                                        <i class="fa fa-floppy-o" style="margin-right: 3px;"></i>??????</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div :class="item.col!=undefined ? 'layui-col-sm'+item.col+' '+'layui-col-md'+item.col:'layui-col-sm6 layui-col-md3'" v-for="item in badge" v-cloak="">
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
        <div class="layui-col-md12">
            <div class="layui-card">
                <div class="layui-card-header">????????????</div>
                <div class="layui-card-body">
                    <table class="layui-hide" id="userList" lay-filter="userList"></table>
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
                badge:[],
            },
            methods:{
                getUserPointBadgeList:function(where){
                    var q={},that=this,where=where || {};
                    q.start_time=where.start_time || '';
                    q.end_time=where.end_time || '';
                    q.nickname=where.nickname || '';
                    layList.baseGet(layList.U({c:'ump.user_point',a:'getUserPointBadgeList',q:q}),function (rem) {
                        that.badge=rem.data;
                    });
                }
            },
            mounted:function () {
                this.getUserPointBadgeList();
                layList.form.render();
                layList.tableList('userList',"<?php echo Url('getponitlist'); ?>",function () {
                    return [
                        {field: 'id', title: 'ID', sort: true,event:'uid',width:'8%'},
                        {field: 'title', title: '??????' },
                        {field: 'balance', title: '????????????',sort:true,event:'now_money'},
                        {field: 'number', title: '????????????',sort:true},
                        {field: 'mark', title: '??????'},
                        {field: 'nickname', title: '??????????????????'},
                        {field: 'add_time', title: '????????????',align:'center'},
                    ];
                });
                layList.date({elem:'#start_time',theme:'#393D49',type:'datetime'});
                layList.date({elem:'#end_time',theme:'#393D49',type:'datetime'});
                var that=this;
                layList.search('search',function(where){
                    if(where.start_time!=''){
                        if(where.end_time==''){
                            layList.msg('?????????????????????');
                            return;
                        }
                    }
                    if(where.end_time!=''){
                        if(where.start_time==''){
                            layList.msg('?????????????????????');
                            return;
                        }
                    }
                    layList.reload(where);
                    that.getUserPointBadgeList(where);
                });
                layList.search('export',function(where){
                    var q={},where=where || {};
                    q.start_time=where.start_time || '';
                    q.end_time=where.end_time || '';
                    q.nickname=where.nickname || '';
                    location.href=layList.U({c:'ump.user_point',a:'export',q:q});
                })
            }
        })
    });

</script>


</div>
</body>
</html>
