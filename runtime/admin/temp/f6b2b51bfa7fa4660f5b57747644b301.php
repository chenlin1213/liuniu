<?php /*a:5:{s:87:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\system\system_store\index.php";i:1613695276;s:78:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\container.php";i:1613695276;s:79:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\frame_head.php";i:1613695276;s:74:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\style.php";i:1613695276;s:81:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\frame_footer.php";i:1613695276;}*/ ?>
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

<div class="layui-fluid" style="background: #fff;margin-top: -10px;">
    <div class="layui-tab layui-tab-brief" lay-filter="tab">
        <ul class="layui-tab-title">
            <li lay-id="list" <?php if($type == '1'): ?>class="layui-this" <?php endif; ?>>
                <a href="<?php if($type == '1'): ?>javascript:;<?php else: ?><?php echo Url('index',['type'=>1]); ?><?php endif; ?>">显示中的门店(<?php echo htmlentities($show); ?>)</a>
            </li>
            <li lay-id="list" <?php if($type == '2'): ?>class="layui-this" <?php endif; ?>>
                <a href="<?php if($type == '2'): ?>javascript:;<?php else: ?><?php echo Url('index',['type'=>2]); ?><?php endif; ?>">隐藏中的门店(<?php echo htmlentities($hide); ?>)</a>
            </li>
            <li lay-id="list" <?php if($type == '3'): ?>class="layui-this" <?php endif; ?>>
                <a href="<?php if($type == '3'): ?>javascript:;<?php else: ?><?php echo Url('index',['type'=>3]); ?><?php endif; ?>">回收站的门店(<?php echo htmlentities($recycle); ?>)</a>
            </li>
        </ul>
    </div>
    <div class="layui-row layui-col-space15">
        <div class="layui-col-md12">
            <div class="layui-card">
                <div class="layui-card-body">
                    <form class="layui-form layui-form-pane" action="">
                        <div class="layui-form-item">
                            <div class="layui-inline">
                                <label class="layui-form-label">门店名称</label>
                                <div class="layui-input-block">
                                    <input type="text" name="name" class="layui-input" placeholder="请输入门店名称,关键字,编号">
                                    <input type="hidden" name="type" value="<?php echo htmlentities($type); ?>">
                                </div>
                            </div>
                            <div class="layui-inline">
                                <div class="layui-input-inline">
                                    <button class="layui-btn layui-btn-sm layui-btn-normal" lay-submit="search" lay-filter="search">
                                        <i class="layui-icon layui-icon-search"></i>搜索</button>
                                    <button class="layui-btn layui-btn-primary layui-btn-sm export"  lay-submit="export" lay-filter="export">
                                        <i class="fa fa-floppy-o" style="margin-right: 3px;"></i>导出</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="layui-col-md12">
            <div class="layui-card">
<!--                <div class="layui-card-header">门店列表</div>-->
                <div class="layui-card-body">
                    <div class="layui-btn-container">
                        <button class="layui-btn layui-btn-sm"
                                onclick="$eb.createModalFrame(this.innerText,'<?php echo Url('add'); ?>',{h:700,w:1100})">添加门店
                        </button>
                    </div>
                    <table class="layui-hide" id="List" lay-filter="List"></table>
                    <script type="text/html" id="headimgurl">
                        <img style="cursor: pointer" lay-event='open_image' src="{{d.image}}">
                    </script>
                    <script type="text/html" id="address">
                        {{d.address}} {{d.detailed_address}}
                    </script>
                    <script type="text/html" id="checkboxstatus">
                        <input type='checkbox' name='id' lay-skin='switch' value="{{d.id}}" lay-filter='is_show'
                               lay-text='显示|隐藏' {{ d.is_show== 1 ? 'checked' : '' }}>
                    </script>
                    <script type="text/html" id="act">
                        <button type="button" class="layui-btn layui-btn-xs layui-btn-normal" lay-event='edit'>
                            编辑门店
                        </button>
                        <button type="button" class="layui-btn layui-btn-xs layui-btn-normal" lay-event='del'>
                            {{# if(d.is_del){ }}
                            恢复门店
                            {{# }else{ }}
                            删除门店
                            {{# } }}
                        </button>
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/system/js/layuiList.js"></script>



<script>
    var type=<?=$type?>;
    layList.tableList('List', "<?php echo Url('list',['type'=>$type]); ?>", function () {
        return [
            {field: 'id', title: 'ID', sort: true, event: 'id', width: '4%'},
            {field: 'image', title: '门店图片', templet: '#headimgurl', width: '6%'},
            {field: 'name', title: '门店名称', width: '10%'},
            {field: 'phone', title: '门店电话', width: '10%'},
            {field: 'address', title: '地址', templet: '#address'},
            {field: 'day_time', title: '营业时间', width: '15%'},
            // {field: 'valid_time', title: '核销有效日期', width: '11%'},
            {field: 'status', title: '是否显示', templet: "#checkboxstatus", width: '8%'},
            {field: 'right', title: '操作', align: 'center', toolbar: '#act', width: '14%'},
        ];
    });
    //查询条件
    layList.search('search',function(where){
        layList.reload(where);
    });
    //excel下载
    layList.search('export',function(where){
        where.excel = 1;
        location.href=layList.U({c:'system.system_store',a:'list',q:where});
    })
    //门店是否显示
    layList.switch('is_show', function (odj, value) {
        if (odj.elem.checked == true) {
            layList.baseGet(layList.Url({
                c: 'system.system_store',
                a: 'set_show',
                p: {is_show: 1, id: value}
            }), function (res) {
                layList.msg(res.msg, function () {
                    layList.reload();
                });
            });
        } else {
            layList.baseGet(layList.Url({
                c: 'system.system_store',
                a: 'set_show',
                p: {is_show: 0, id: value}
            }), function (res) {
                layList.msg(res.msg, function () {
                    layList.reload();
                });
            });
        }
    });
    //点击事件绑定
    layList.tool(function (event, data, obj) {
        switch (event) {
            case 'del':
                var url = layList.U({c: 'system.system_store', a: 'delete', q: {id: data.id}});
                if(data.is_del) var code = {title:"操作提示",text:"确定恢复门店吗？",type:'info',confirm:'是的，恢复该门店'};
                else var code = {title: "操作提示", text: "确定将该门店删除吗？", type: 'info', confirm: '是的，删除该门店'};
                $eb.$swal('delete', function () {
                    $eb.axios.get(url).then(function (res) {
                        if (res.status == 200 && res.data.code == 200) {
                            $eb.$swal('success', res.data.msg);
                            obj.del();
                            location.reload();
                        } else
                            return Promise.reject(res.data.msg || '删除失败')
                    }).catch(function (err) {
                        $eb.$swal('error', err);
                    });
                }, code)
                break;
            case 'open_image':
                $eb.openImage(data.image);
                break;
            case 'edit':
                $eb.createModalFrame(data.name + '-编辑', layList.U({a: 'add', q: {id: data.id}}), {h: 700, w: 1100});
                break;
        }
    })
</script>


</div>
</body>
</html>
