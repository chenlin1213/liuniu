<?php /*a:5:{s:85:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\ump\store_bargain\index.php";i:1613695276;s:78:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\container.php";i:1613695276;s:79:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\frame_head.php";i:1613695276;s:74:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\style.php";i:1613695276;s:81:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\frame_footer.php";i:1613695276;}*/ ?>
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
    
<script type="text/javascript" src="/static/plug/jquery.downCount.js"></script>

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

<div class="row">
    <div class="col-sm-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>??????????????????</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                </div>
            </div>
            <div class="ibox-content">
                <div class="alert alert-success alert-dismissable">
                    <button aria-hidden="true" data-dismiss="alert" class="close" type="button">??</button>
                    ????????????<?php echo htmlentities($countBargain); ?>???????????????
                </div>
                <form class="layui-form">
                    <div class="layui-form-item">
                        <div class="layui-inline">
                            <label class="layui-form-label">???????????????</label>
                            <div class="layui-input-inline">
                                <input type="text" name="store_name" lay-verify="store_name" style="width: 100%" autocomplete="off" placeholder="?????????????????????,??????" class="layui-input">
                            </div>
                        </div>
                        <div class="layui-inline">
                            <label class="layui-form-label">???????????????</label>
                            <div class="layui-input-inline">
                                <select name="status" lay-verify="status">
                                    <option value="">??????</option>
                                    <option value="1">??????</option>
                                    <option value="0">??????</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="layui-form-item">
                        <label class="layui-form-label">
                            <button class="layui-btn layui-btn-sm" lay-submit="" lay-filter="search" style="font-size:14px;line-height: 9px;">
                                <i class="layui-icon layui-icon-search layuiadmin-button-btn"></i>??????</button>
                            <button lay-submit="export" lay-filter="export" class="layui-btn layui-btn-primary layui-btn-sm">
                                <i class="layui-icon layui-icon-delete layuiadmin-button-btn" ></i> Excel??????</button>
                        </label>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="ibox float-e-margins">
            <div class="ibox-content">
                <div class="table-responsive" style="margin-top: 20px;">
                    <div class="layui-btn-container">
                        <a class="layui-btn layui-btn-sm" onclick="$eb.createModalFrame(this.innerText,'<?php echo Url('create'); ?>',{h:700,w:1100});">??????????????????</a>
                    </div>
                    <table class="layui-hide" id="bargainList" lay-filter="bargainList"></table>
                    <script type="text/html" id="status">
                        <input type='checkbox' name='status' lay-skin='switch' value="{{d.id}}" lay-filter='status' lay-text='??????|??????'  {{ d.status == 1 ? 'checked' : '' }}>
                    </script>
                    <script type="text/html" id="statusCn">
                        {{ d.status == 1 ? d.start_name : '??????' }}
                    </script>
                    <script type="text/html" id="stopTime">
                        <div class="count-time-{{d.id}}" data-time="{{d._stop_time}}">
                            <span class="days">00</span>
                            :
                            <span class="hours">00</span>
                            :
                            <span class="minutes">00</span>
                            :
                            <span class="seconds">00</span>
                        </div>
                    </script>
                    <script type="text/html" id="barDemo">
                        <button type="button" class="layui-btn layui-btn-xs" onclick="$eb.createModalFrame('{{d.title}}-????????????','<?php echo Url('attr_list'); ?>?id={{d.id}}',{h:1000,w:1400});"><i class="layui-icon layui-icon-util"></i>??????</button>

                        <button type="button" class="layui-btn layui-btn-xs" onclick="dropdown(this)">??????<span class="caret"></span></button>
                        <ul class="layui-nav-child layui-anim layui-anim-upbit">
                            <li>
                                <a href="javascript:void(0);" onclick="$eb.createModalFrame('{{d.title}}-??????','<?php echo Url('edit'); ?>?id={{d.id}}')"><i class="layui-icon layui-icon-edit"></i>????????????</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" onclick="$eb.createModalFrame('{{d.title}}-????????????','<?php echo Url('edit_content'); ?>?id={{d.id}}')"><i class="layui-icon layui-icon-edit"></i>????????????</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);"  onclick="$eb.createModalFrame('{{d.title}}-????????????','<?php echo Url('edit_rule'); ?>?id={{d.id}}')"><i class="layui-icon layui-icon-edit"></i>????????????</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="delstor" lay-event='delstor'><i class="layui-icon layui-icon-delete"></i> ??????</a>
                            </li>
                        </ul>
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>



<script src="/system/js/layuiList.js"></script>
<script src="/system/frame/js/content.min.js?v=1.0.0"></script>
<script>
    layList.form.render();
    window.$bargainId = <?php echo json_encode($bargainId);?>;
    $(document).on('click','#time',function () {
        var arr = $('#time').text().split(' - ');
        var reg = new RegExp("-","g");//g,?????????????????????
        var newArr = [];
        if(arr.length >1){
            $.each(arr,function (index,item) {
                newArr.push(item.replace(reg,"/"));
            })
            $('#time').data('value',newArr.join(' - '));
        }
    });
    layList.tableList('bargainList',"<?php echo Url('get_bargain_list'); ?>",function () {
        return [
            {field: 'id', title: '??????', sort: true,width:'5%',event:'id'},
            {field: 'image', title: '????????????',event:'open_image', width: '8%',templet: '<p><img src="{{d.image}}" alt="{{d.title}}"></p>'},
            {field: 'title', title: '????????????'},
            {field: 'price', title: '????????????',width:'6%'},
            {field: 'bargain_min_price', title: '????????????',width:'8%',templet: '<span>{{d.bargain_min_price}}~{{d.bargain_max_price}}</span>'},
            {field: 'min_price', title: '?????????',width:'6%'},
            {field: 'count_people_all', title: '????????????',width:'7%',templet: '<span>???{{d.count_people_all}}??????</span>'},
            {field: 'count_people_help', title: '??????????????????',width:'7%',templet: '<span>???{{d.count_people_help}}??????</span>'},
            {field: 'count_people_success', title: '??????????????????',width:'7%',templet: '<span>???{{d.count_people_success}}??????</span>'},
            {field: 'quota_show', title: '??????',width:'4%'},
            {field: 'quota', title: '????????????',width:'6%'},
            {field: '_stop_time', title: '????????????', width: '8%',toolbar: '#stopTime'},
            {field: 'status', title: '??????',width:'6%',templet:"#status"},
            {field: 'right', title: '??????', width: '10%', align: 'center', toolbar: '#barDemo'}
        ]
    });
    layList.laydate.render({
        elem:'#time',
        trigger:'click',
        eventElem:'#zdy_time',
        range:true,
    });
    setTime();
    function setTime(){
        setTimeout(function () {
            $.each($bargainId,function (index,item) {
                console.log($('.count-time-'+item).attr('data-time'));
                $('.count-time-'+item).downCount({
                    date: $('.count-time-'+item).attr('data-time'),
                    offset: +8
                });
            })
        },3000);
    }
    layList.search('search',function(where){
        layList.reload(where);
        setTime();
    });
    layList.search('export',function(where){
        location.href=layList.U({c:'ump.store_bargain',a:'get_bargain_list',q:{
                store_name:where.store_name,
                status:where.status,
                export:1,
            }});
    })
    layList.switch('status',function (odj,value,name){
        if(odj.elem.checked==true){
            layList.baseGet(layList.Url({c:'ump.store_bargain',a:'set_bargain_status',p:{status:1,id:value}}),function (res) {
                layList.msg(res.msg);
            }, function () {
                odj.elem.checked = false;
                layui.form.render();
                layer.open({
                    type: 1
                    ,offset: 'auto'
                    ,id: 'layerDemoauto' //??????????????????
                    ,content: '<div style="padding: 20px 100px;">??????????????????</div>'
                    ,btn: '????????????'
                    ,btnAlign: 'c' //????????????
                    ,shade: 0 //???????????????
                    ,yes: function(){
                        layer.closeAll();
                        $eb.createModalFrame('????????????','<?php echo Url('attr_list'); ?>?id='+value+'',{h:1000,w:1400});
                    }
                });
            });
        }else{
            layList.baseGet(layList.Url({c:'ump.store_bargain',a:'set_bargain_status',p:{status:0,id:value}}),function (res) {
                layList.msg(res.msg);
            });
        }
    });
    layList.tool(function (event,data,obj) {
        switch (event) {
            case 'delstor':
                var url=layList.U({c:'ump.store_bargain',a:'delete',q:{id:data.id}});
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
        }
    })
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
