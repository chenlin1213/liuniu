<?php /*a:5:{s:87:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\store\store_product\index.php";i:1613695276;s:78:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\container.php";i:1613695276;s:79:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\frame_head.php";i:1613695276;s:74:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\style.php";i:1613695276;s:81:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\frame_footer.php";i:1613695276;}*/ ?>
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
            <li lay-id="list" <?php if($type == '1'): ?>class="layui-this" <?php endif; ?> >
                <a href="<?php if($type == '1'): ?>javascript:;<?php else: ?><?php echo Url('index',['type'=>1]); ?><?php endif; ?>">???????????????(<?php echo htmlentities($onsale); ?>)</a>
            </li>
            <li lay-id="list" <?php if($type == '2'): ?>class="layui-this" <?php endif; ?>>
                <a href="<?php if($type == '2'): ?>javascript:;<?php else: ?><?php echo Url('index',['type'=>2]); ?><?php endif; ?>">???????????????(<?php echo htmlentities($forsale); ?>)</a>
            </li>
            <li lay-id="list" <?php if($type == '4'): ?>class="layui-this" <?php endif; ?>>
                <a href="<?php if($type == '4'): ?>javascript:;<?php else: ?><?php echo Url('index',['type'=>4]); ?><?php endif; ?>">??????????????????(<?php echo htmlentities($outofstock); ?>)</a>
            </li>
            <li lay-id="list" <?php if($type == '5'): ?>class="layui-this" <?php endif; ?>>
                <a href="<?php if($type == '5'): ?>javascript:;<?php else: ?><?php echo Url('index',['type'=>5]); ?><?php endif; ?>">????????????(<?php echo htmlentities($policeforce); ?>)</a>
            </li>
            <li lay-id="list" <?php if($type == '6'): ?>class="layui-this" <?php endif; ?>>
                <a href="<?php if($type == '6'): ?>javascript:;<?php else: ?><?php echo Url('index',['type'=>6]); ?><?php endif; ?>">???????????????(<?php echo htmlentities($recycle); ?>)</a>
            </li>
        </ul>
    </div>
    <div class="layui-row layui-col-space15"  id="app">
        <div class="layui-col-md12">
            <div class="layui-card">
                <div class="layui-card-body">
                    <form class="layui-form layui-form-pane" action="">
                        <div class="layui-form-item">
                            <div class="layui-inline">
                                <label class="layui-form-label">????????????</label>
                                <div class="layui-input-block">
                                    <select name="cate_id">
                                        <option value=" ">??????</option>
                                        <?php if(is_array($cate) || $cate instanceof \think\Collection || $cate instanceof \think\Paginator): $i = 0; $__LIST__ = $cate;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                        <option value="<?php echo htmlentities($vo['id']); ?>"><?php echo htmlentities($vo['html']); ?><?php echo htmlentities($vo['cate_name']); ?></option>
                                        <?php endforeach; endif; else: echo "" ;endif; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="layui-inline">
                                <label class="layui-form-label">????????????</label>
                                <div class="layui-input-block">
                                    <input type="text" name="store_name" class="layui-input" placeholder="?????????????????????,?????????,??????">
                                    <input type="hidden" name="type" value="<?php echo htmlentities($type); ?>">
                                </div>
                            </div>
                            <div class="layui-inline">
                                <div class="layui-input-inline">
                                    <button class="layui-btn layui-btn-sm layui-btn-normal" lay-submit="search" lay-filter="search">
                                        <i class="layui-icon layui-icon-search"></i>??????</button>
                                    <button class="layui-btn layui-btn-primary layui-btn-sm export"  lay-submit="export" lay-filter="export">
                                        <i class="fa fa-floppy-o" style="margin-right: 3px;"></i>??????</button>
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
                <div class="layui-card-body">
                    <div class="alert alert-info" role="alert">
                        ??????[????????????],[??????],[??????]?????????????????????,????????????????????????????????????,?????????????????????????????????
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="layui-btn-container">
                        <?php switch($type): case "1": ?>
                                <a class="layui-btn layui-btn-sm" href="<?php echo Url('create'); ?>">????????????</a>
                                <button class="layui-btn layui-btn-sm" onclick="$eb.createModalFrame(this.innerText,'<?php echo Url('store.copy_taobao/index'); ?>',{h:700,w:1100});">????????????????????????1688?????????</button>
                            <?php break; case "2": ?>
                                <button class="layui-btn layui-btn-sm" data-type="show">????????????</button>
                            <?php break; ?>
                        <?php endswitch; ?>
                    </div>
                    <table class="layui-hide" id="List" lay-filter="List"></table>
                    <!--??????-->
                    <script type="text/html" id="image">
                        <img style="cursor: pointer" lay-event="open_image" src="{{d.image}}">
                    </script>
                    <!--??????|??????-->
                    <script type="text/html" id="checkboxstatus">
                        <input type='checkbox' name='id' lay-skin='switch' value="{{d.id}}" lay-filter='is_show' lay-text='??????|??????'  {{ d.is_show == 1 ? 'checked' : '' }}>
                    </script>
                    <!--??????-->
                    <script type="text/html" id="like">
                        <span><i class="layui-icon layui-icon-praise"></i> {{d.like}}</span>
                    </script>
                    <!--??????-->
                    <script type="text/html" id="collect">
                        <span><i class="layui-icon layui-icon-star"></i> {{d.collect}}</span>
                    </script>
                    <!--????????????-->
                    <script type="text/html" id="store_name">
                        <h4>{{d.store_name}}</h4>
                        <p>??????:<font color="red">{{d.price}}</font> </p>
                        {{# if(d.cate_name!=''){ }}
                        <p>??????:{{d.cate_name}}</p>
                        {{# } }}
                    </script>
                    <!--??????-->
                    <script type="text/html" id="act">
                        <button type="button" class="layui-btn layui-btn-xs layui-btn-normal" lay-event='edit'>
                            ??????
                        </button>
                        <button type="button" class="layui-btn layui-btn-xs" onclick="dropdown(this)">?????? <span class="caret"></span></button>
                        <ul class="layui-nav-child layui-anim layui-anim-upbit">
                            {{# if(d.is_del){ }}
                            <li>
                                <a href="javascript:void(0);" lay-event='delstor'>
                                    <i class="fa fa-trash"></i> ????????????
                                </a>
                            </li>
                            {{# }else{ }}
                            <li>
                                <a href="javascript:void(0);" lay-event='delstor'>
                                    <i class="fa fa-trash"></i> ???????????????
                                </a>
                            </li>
                            {{# } }}
                            <li>
                                <a href="<?php echo Url('store.storeProductReply/index'); ?>?product_id={{d.id}}">
                                    <i class="fa fa-warning"></i> ????????????
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
    var type=<?=$type?>;
    //?????????form
    layList.form.render();
    //????????????
    layList.tableList('List',"<?php echo Url('product_ist',['type'=>$type]); ?>",function (){
        var join=new Array();
        switch (parseInt(type)){
            case 1:case 3:case 4:case 5:
                join=[
                    {field: 'id', title: 'ID', sort: true,event:'id',width:'6%'},
                    {field: 'image', title: '????????????',templet:'#image',width:'10%'},
                    {field: 'store_name', title: '????????????',templet:'#store_name'},
                    {field: 'ficti', title: '????????????',edit:'ficti',width:'8%'},
                    {field: 'stock', title: '??????',width:'8%'},
                    {field: 'sort', title: '??????',edit:'sort',width:'6%'},
                    {field: 'sales', title: '??????',sort: true,event:'sales',width:'8%'},
                    {field: 'status', title: '??????',templet:"#checkboxstatus",width:'8%'},
                    {field: 'right', title: '??????',align:'center',toolbar:'#act',width:'14%'},
                ];
                break;
            case 2:
                join=[
                    {type:'checkbox'},
                    {field: 'id', title: 'ID', sort: true,event:'id',width:'6%'},
                    {field: 'image', title: '????????????',templet:'#image',width:'10%'},
                    {field: 'store_name', title: '????????????',templet:'#store_name'},
                    {field: 'price', title: '??????',edit:'price',width:'8%'},
                    {field: 'ficti', title: '????????????',edit:'ficti',width:'8%'},
                    {field: 'stock', title: '??????',width:'6%'},
                    {field: 'sort', title: '??????',edit:'sort',width:'6%'},
                    {field: 'sales', title: '??????',sort: true,event:'sales',width:'6%'},
                    {field: 'status', title: '??????',templet:"#checkboxstatus",width:'8%'},
                    {field: 'right', title: '??????',align:'center',toolbar:'#act',width:'14%'},
                ];
                break;
            case 6:
                join=[
                    {field: 'id', title: '??????ID', sort: true,event:'id'},
                    {field: 'image', title: '????????????',templet:'#image'},
                    {field: 'store_name', title: '????????????',templet:'#store_name'},
                    {field: 'price', title: '????????????',edit:'price'},
                    {field: 'ficti', title: '????????????',edit:'ficti'},
                    {field: 'stock', title: '??????'},
                    {field: 'sort', title: '??????',edit:'sort'},
                    {field: 'sales', title: '??????',sort: true,event:'sales'},
//                    {field: 'status', title: '??????',templet:"#checkboxstatus"},
                    {field: 'right', title: '??????',align:'center',toolbar:'#act',width:'14%'},
                ];
                break;
        }
        return join;
    })
    //excel??????
    layList.search('export',function(where){
        where.excel = 1;
        location.href=layList.U({c:'store.store_product',a:'product_ist',q:where});
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
    //????????????
    layList.edit(function (obj) {
        var id=obj.data.id,value=obj.value;
        switch (obj.field) {
            case 'price':
                action.set_product('price',id,value);
                break;
            case 'stock':
                action.set_product('stock',id,value);
                break;
            case 'sort':
                action.set_product('sort',id,value);
                break;
            case 'ficti':
                action.set_product('ficti',id,value);
                break;
        }
    });
    //???????????????
    layList.switch('is_show',function (odj,value) {
        if(odj.elem.checked==true){
            layList.baseGet(layList.Url({c:'store.store_product',a:'set_show',p:{is_show:1,id:value}}),function (res) {
                layList.msg(res.msg, function () {
                    layList.reload();
                });
            });
        }else{
            layList.baseGet(layList.Url({c:'store.store_product',a:'set_show',p:{is_show:0,id:value}}),function (res) {
                layList.msg(res.msg, function () {
                    layList.reload();
                });
            });
        }
    });
    //??????????????????
    layList.tool(function (event,data,obj) {
        switch (event) {
            case 'delstor':
                var url=layList.U({c:'store.store_product',a:'delete',q:{id:data.id}});
                if(data.is_del) var code = {title:"????????????",text:"??????????????????????????????",type:'info',confirm:'????????????????????????'};
                else var code = {title:"????????????",text:"???????????????????????????????????????",type:'info',confirm:'????????????????????????'};
                $eb.$swal('delete',function(){
                    $eb.axios.get(url).then(function(res){
                        if(res.status == 200 && res.data.code == 200) {
                            $eb.$swal('success',res.data.msg);
                            obj.del();
                            location.reload();
                        }else
                            return Promise.reject(res.data.msg || '????????????')
                    }).catch(function(err){
                        $eb.$swal('error',err);
                    });
                },code)
                break;
            case 'open_image':
                $eb.openImage(data.image);
                break;
            case 'edit':
                location.href = layList.U({a:'create',q:{id:data.id}});
                break;
            case 'attr':
                $eb.createModalFrame(data.store_name+'-??????',layList.U({a:'attr',q:{id:data.id}}),{h:600,w:800})
                break;
        }
    })
    //??????
    layList.sort(function (obj) {
        var type = obj.type;
        switch (obj.field){
            case 'id':
                layList.reload({order: layList.order(type,'p.id')},true,null,obj);
                break;
            case 'sales':
                layList.reload({order: layList.order(type,'p.sales')},true,null,obj);
                break;
        }
    });
    //??????
    layList.search('search',function(where){
        layList.reload(where,true);
    });
    //???????????????
    var action={
        set_product:function(field,id,value){
            layList.baseGet(layList.Url({c:'store.store_product',a:'set_product',q:{field:field,id:id,value:value}}),function (res) {
                layList.msg(res.msg);
            });
        },
        show:function(){
            var ids=layList.getCheckData().getIds('id');
            if(ids.length){
                layList.basePost(layList.Url({c:'store.store_product',a:'product_show'}),{ids:ids},function (res) {
                    layList.msg(res.msg);
                    layList.reload();
                });
            }else{
                layList.msg('???????????????????????????');
            }
        }
    };
    //??????????????????
    $('.layui-btn-container').find('button').each(function () {
        var type=$(this).data('type');
        $(this).on('click',function(){
            action[type] && action[type]();
        })
    });
</script>




</div>
</body>
</html>
