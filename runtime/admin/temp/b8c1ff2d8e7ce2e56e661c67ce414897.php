<?php /*a:5:{s:83:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\user\user_level\index.php";i:1613695276;s:78:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\container.php";i:1613695276;s:79:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\frame_head.php";i:1613695276;s:74:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\style.php";i:1613695276;s:81:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\frame_footer.php";i:1613695276;}*/ ?>
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
                                <label class="layui-form-label">????????????</label>
                                <div class="layui-input-block">
                                    <select name="is_show">
                                        <option value="">????????????</option>
                                        <option value="1">??????</option>
                                        <option value="0">?????????</option>
                                    </select>
                                </div>
                            </div>
                            <div class="layui-inline">
                                <label class="layui-form-label">????????????</label>
                                <div class="layui-input-block">
                                    <input type="text" name="title" class="layui-input" placeholder="?????????????????????">
                                </div>
                            </div>
                            <div class="layui-inline">
                                <div class="layui-input-inline">
                                    <button class="layui-btn layui-btn-sm layui-btn-normal" lay-submit="search" lay-filter="search">
                                        <i class="layui-icon layui-icon-search"></i>??????</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--????????????-->
        <div class="layui-col-md12">
            <div class="layui-card">
                <div class="layui-card-header">????????????</div>
                <div class="layui-card-body">
                    <div class="layui-btn-container">
                        <button class="layui-btn layui-btn-sm" onclick="$eb.createModalFrame(this.innerText,'<?php echo Url('create'); ?>')">??????????????????</button>
                    </div>
                    <table class="layui-hide" id="List" lay-filter="List"></table>
                    <script type="text/html" id="icon">
                        <img style="cursor: pointer;max-width: 50px;" lay-event='open_image' src="{{d.icon}}">
                    </script>
                    <script type="text/html" id="is_forever">
                        <input type='checkbox' name='id' disabled lay-skin='switch' value="{{d.id}}" lay-filter='is_forever' lay-text='??????|?????????'  {{ d.is_forever == 1 ? 'checked' : '' }}>
                    </script>
                    <script type="text/html" id="is_show">
                        <input type='checkbox' name='id' lay-skin='switch' value="{{d.id}}" lay-filter='is_show' lay-text='??????|??????'  {{ d.is_show == 1 ? 'checked' : '' }}>
                    </script>
                    <script type="text/html" id="is_pay">
                        <input type='checkbox' name='id' disabled lay-skin='switch' value="{{d.id}}" lay-filter='is_pay' lay-text='??????|??????'  {{ d.is_pay == 1 ? 'checked' : '' }}>
                    </script>
                    <script type="text/html" id="act">
                        <button type="button" class="layui-btn layui-btn-xs" onclick="dropdown(this)">?????? <span class="caret"></span></button>
                        <ul class="layui-nav-child layui-anim layui-anim-upbit">
                            <li>
                                <a href="javascript:void(0)" onclick="$eb.createModalFrame(this.innerText,'<?php echo Url('tash'); ?>?level_id={{d.id}}',{w:1000})">
                                    <i class="fa fa-wrench"></i> ????????????
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" onclick="$eb.createModalFrame(this.innerText,'<?php echo Url('create'); ?>?id={{d.id}}')">
                                    <i class="fa fa-edit"></i> ????????????
                                </a>
                            </li>
                            <li>
                                <a lay-event='delete' href="javascript:void(0)" >
                                    <i class="fa fa-times"></i> ????????????
                                </a>
                            </li>
                        </ul>
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/system/js/layuiList.js"></script>



<script>
    //?????????form
    layList.form.render();
    //????????????
    layList.tableList('List',"<?php echo Url('get_system_vip_list'); ?>",function (){
        return [
            {field: 'id', title: '??????', sort: true,event:'id',width:'6%',align:"center"},
            {field: 'icon', title: '????????????',templet:'#icon',align:"center",width:'10%'},
            {field: 'name', title: '????????????',edit:'name',width:'6%',align:"center"},
            {field: 'grade', title: '??????',edit:'grade',width:'6%',align:"center"},
            {field: 'discount', title: '????????????',edit:'discount',width:'8%',align:"center"},
            {field: 'valid_date', title: '????????????',width:'12%',align:"center"},
            {field: 'is_forever', title: '????????????',templet:'#is_forever',width:'8%',align:"center"},
            {field: 'is_show', title: '????????????',templet:'#is_show',width:'8%',align:"center"},
            {field: 'explain', title: '????????????',align:"center"},
            {field: 'right', title: '??????',align:'center',toolbar:'#act',width:'8%'},
        ];
    });
    //???????????????
    var action= {
        set_value: function (field, id, value) {
            layList.baseGet(layList.Url({
                a: 'set_value',
                q: {field: field, id: id, value: value}
            }), function (res) {
                layList.msg(res.msg);
            });
        },
    }
    //??????
    layList.search('search',function(where){
        layList.reload(where,true);
    });
    layList.switch('is_show',function (odj,value) {
        if(odj.elem.checked==true){
            layList.baseGet(layList.Url({a:'set_show',p:{is_show:1,id:value}}),function (res) {
                layList.msg(res.msg);
            });
        }else{
            layList.baseGet(layList.Url({a:'set_show',p:{is_show:0,id:value}}),function (res) {
                layList.msg(res.msg);
            });
        }
    });
    //????????????
    layList.edit(function (obj) {
        var id=obj.data.id,value=obj.value;
        switch (obj.field) {
            case 'name':
                action.set_value('name',id,value);
                break;
            case 'grade':
                action.set_value('grade',id,value);
                break;
            case 'discount':
                action.set_value('discount',id,value);
                break;
        }
    });
    //?????????????????????
    layList.sort(['id','sort'],true);
    //??????????????????
    layList.tool(function (event,data,obj) {
        switch (event) {
            case 'delete':
                var url=layList.U({a:'delete',q:{id:data.id}});
                $eb.$swal('delete',function(){
                    $eb.axios.get(url).then(function(res){
                        if(res.status == 200 && res.data.code == 200) {
                            $eb.$swal('success',res.data.msg);
                            obj.del();
                        }else
                            return Promise.reject(res.data.msg || '????????????')
                    }).catch(function(err){
                        $eb.$swal('error',err);
                    });
                })
                break;
            case 'open_image':
                $eb.openImage(data.icon);
                break;
        }
    })
    //?????????
    $(document).click(function (e) {
        $('.layui-nav-child').hide();
    })
    function dropdown(that){
        var oEvent = arguments.callee.caller.arguments[0] || event;
        oEvent.stopPropagation();
        var offset = $(that).offset();
        var top=offset.top-$(window).scrollTop();
        var index = $(that).parents('tr').data('index');
        $('.layui-nav-child').each(function (key) {
            if (key != index) {
                $(this).hide();
            }
        })
        if($(document).height() < top+$(that).next('ul').height()){
            $(that).next('ul').css({
                'padding': 10,
                'top': - ($(that).parent('td').height() / 2 + $(that).height() + $(that).next('ul').height()/2),
                'min-width': 'inherit',
                'position': 'absolute'
            }).toggle();
        }else{
            $(that).next('ul').css({
                'padding': 10,
                'top':$(that).parent('td').height() / 2 + $(that).height(),
                'min-width': 'inherit',
                'position': 'absolute'
            }).toggle();
        }
    }
</script>


</div>
</body>
</html>
