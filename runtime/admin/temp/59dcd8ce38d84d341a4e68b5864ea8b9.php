<?php /*a:6:{s:77:"D:\phpstudy_pro\WWW\projectone.cn\app\admin\view\wechat\wechat_user\index.php";i:1669942857;s:69:"D:\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\container.php";i:1669942857;s:70:"D:\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\frame_head.php";i:1669942857;s:65:"D:\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\style.php";i:1669942857;s:70:"D:\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\inner_page.php";i:1669942857;s:72:"D:\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\frame_footer.php";i:1669942857;}*/ ?>
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
    
<link href="/system/frame/css/plugins/iCheck/custom.css" rel="stylesheet">
<script src="/static/plug/moment.js"></script>
<link rel="stylesheet" href="/static/plug/daterangepicker/daterangepicker.css">
<script src="/static/plug/daterangepicker/daterangepicker.js"></script>
<script src="/system/frame/js/plugins/iCheck/icheck.min.js"></script>
<link href="/system/frame/css/plugins/footable/footable.core.css" rel="stylesheet">
<script src="/static/plug/sweetalert2/sweetalert2.all.min.js"></script>
<script src="/system/frame/js/plugins/footable/footable.all.min.js"></script>
<style>
    .on-tag{background-color: #eea91e;}
    .height-auto{height: 300px;}
    .tag{border: solid 1px #eee;}
</style>

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
        <div class="ibox">
            <!--<div class="ibox-title">
                <button type="button" class="btn btn-w-m btn-primary grant">???????????????</button>
                <button type="button" class="btn btn-w-m btn-primary" onclick="$eb.createModalFrame(this.innerText,'<?php echo Url('store.storeCoupon/grant_subscribe'); ?>',{'w':800})">?????????????????????????????????</button>
                <button type="button" class="btn btn-w-m btn-primary" onclick="$eb.createModalFrame(this.innerText,'<?php echo Url('store.storeCoupon/grant_all'); ?>',{'w':800})">??????????????????????????????</button>
                <button type="button" class="btn btn-w-m btn-primary" onclick="$eb.createModalFrame(this.innerText,'<?php echo Url('store.storeCoupon/grant_group'); ?>',{'w':800})">??????????????????????????????</button>
                <button type="button" class="btn btn-w-m btn-primary" onclick="$eb.createModalFrame(this.innerText,'<?php echo Url('store.storeCoupon/grant_tag'); ?>',{'w':800})">??????????????????????????????</button>
            </div>-->
            <div class="ibox-content">
                <div class="row">
                    <div class="m-b m-l">
                        <form action="" class="form-inline" id="form" method="get">

                            <div class="search-item" data-name="data">
                                <span>???????????????</span>
                                <button type="button" class="btn btn-outline btn-link" data-value="">??????</button>
                                <button type="button" class="btn btn-outline btn-link" data-value="<?php echo htmlentities($limitTimeList['today']); ?>">??????</button>
                                <button type="button" class="btn btn-outline btn-link" data-value="<?php echo htmlentities($limitTimeList['week']); ?>">??????</button>
                                <button type="button" class="btn btn-outline btn-link" data-value="<?php echo htmlentities($limitTimeList['month']); ?>">??????</button>
                                <button type="button" class="btn btn-outline btn-link" data-value="<?php echo htmlentities($limitTimeList['quarter']); ?>">?????????</button>
                                <button type="button" class="btn btn-outline btn-link" data-value="<?php echo htmlentities($limitTimeList['year']); ?>">??????</button>
                                <div class="datepicker" style="display: inline-block;">
                                    <button type="button" class="btn btn-outline btn-link" data-value="<?php echo !empty($where['data']) ? htmlentities($where['data']) : 'no'; ?>">???????????????</button>
                                </div>
                                <input class="search-item-value" type="hidden" name="data" value="<?php echo htmlentities($where['data']); ?>" />
                                <input class="search-item-value" type="hidden" name="groupid" value="<?php echo htmlentities($where['groupid']); ?>" />
                                <input class="search-item-value" type="hidden" name="tagid_list" value="<?php echo htmlentities($where['tagid_list']); ?>" />
                                <input class="search-item-value" type="hidden" name="sex" value="<?php echo htmlentities($where['sex']); ?>" />
                                <input class="search-item-value" type="hidden" name="subscribe" value="<?php echo htmlentities($where['subscribe']); ?>" />
                                <input class="search-item-value" type="hidden" name="stair" value="" />
                                <input class="search-item-value" type="hidden" name="second" value="" />
                                <input class="search-item-value" type="hidden" name="order_stair" value="" />
                                <input class="search-item-value" type="hidden" name="order_second" value="" />
                                <input class="search-item-value" type="hidden" name="now_money" value="" />
                                <input class="search-item-value" type="hidden" id="batch" name="batch" value="" />
                            </div>
                            <hr>
                            <div class="tag-item" data-name="tagid_list">
                                <span>???????????????</span>
                                <?php if(is_array($tagList) || $tagList instanceof \think\Collection || $tagList instanceof \think\Paginator): $i = 0; $__LIST__ = $tagList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                <button type="button" class="btn btn-outline btn-link tag" data-value="<?php echo htmlentities($vo['id']); ?>"><?php echo htmlentities($vo['name']); ?></button>
                                <?php endforeach; endif; else: echo "" ;endif; ?>
                                <input class="tag-item-value" type="hidden" name="tagid_list" value="<?php echo htmlentities($where['tagid_list']); ?>" />
                            </div>
                            <hr>
                            <div class="btn-group">
                                <button data-toggle="dropdown" class="btn btn-white btn-xs dropdown-toggle" style="padding: 5px 15px;"
                                        aria-expanded="false">????????????
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu left">
                                    <li>
                                        <a class="save_mark grant" href="javascript:void(0);"  >
                                            <i class="fa fa-space-shuttle"></i> ???????????????
                                        </a>
                                    </li>
                                    <li>
                                        <a class="save_mark news" href="javascript:void(0);"  >
                                            <i class="fa fa-space-shuttle"></i> ????????????
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="input-group" style="float: right">
                                <input type="text" name="nickname" value="<?php echo htmlentities($where['nickname']); ?>" placeholder="?????????????????????" class="input-sm form-control">

                                <input type="hidden" name="export" value="<?php echo htmlentities($where['export']); ?>" />
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-sm btn-primary"> <i class="fa fa-search"></i>??????</button>
                                    <button style="margin: 0 16px" type="submit" id="export" class="btn btn-sm btn-info btn-outline"> <i class="fa fa-exchange" ></i> Excel??????</button>
                                    <script>
                                        $('#export').on('click',function(){
                                            $('input[name=export]').val(1);
                                        });
                                        $('#no_export').on('click',function(){
                                            $('input[name=export]').val(0);
                                        });
                                    </script>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped  table-bordered"  data-page-size="20">
                        <thead>
                            <tr>
                                <th class="text-cente">
                                    <div class="btn-group">
                                        <button data-toggle="dropdown" class="btn btn-white btn-xs dropdown-toggle" style="font-weight: bold;background-color: #f5f5f6;border: solid 0;"
                                                aria-expanded="false">
                                            ??????
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu left">
                                            <li class="this-page">
                                                <a class="save_mark" href="javascript:void(0);"  >
                                                    <i class="fa fa-check-square-o"></i>????????????
                                                </a>
                                            </li>
                                            <li class="this-all">
                                                <a class="save_mark" href="javascript:void(0);">
                                                    <i class="fa fa-check-square"></i>????????????
                                                </a>
                                            </li>
                                            <li class="this-up">
                                                <a class="save_mark" href="javascript:void(0);">
                                                    <i class="fa fa-square-o"></i>????????????
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </th>
                                <th class="text-center">??????</th>
                                <th class="text-center">??????????????????</th>
                                <th class="text-center">??????</th>
                                <th class="text-center">
                                    <div class="btn-group">
                                        <button data-toggle="dropdown" class="btn btn-white btn-xs dropdown-toggle" style="font-weight: bold;background-color: #f5f5f6;border: solid 0;"
                                                aria-expanded="false">??????
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu search-item" data-name="sex">
                                            <li data-value="">
                                                <a class="save_mark" href="javascript:void(0);"  >
                                                    <i class="fa fa-venus-mars"></i>??????
                                                </a>
                                            </li>
                                            <li data-value="1">
                                                <a class="save_mark" href="javascript:void(0);"  >
                                                    <i class="fa fa-mars"></i>???
                                                </a>
                                            </li>
                                            <li data-value="2">
                                                <a class="save_mark" href="javascript:void(0);">
                                                    <i class="fa fa-venus"></i>???
                                                </a>
                                            </li>
                                            <li data-value="0">
                                                <a class="save_mark" href="javascript:void(0);">
                                                    <i class="fa fa-transgender"></i>??????
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </th>
                                <th class="text-center no-sort">??????</th>

                                <th class="text-center">
                                    <div class="btn-group">
                                        <button data-toggle="dropdown" class="btn btn-white btn-xs dropdown-toggle" style="font-weight: bold;background-color: #f5f5f6;border: solid 0;"
                                                aria-expanded="false">?????????????????????
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu search-item" data-name="subscribe">
                                            <li data-value="">
                                                <a class="save_mark" href="javascript:void(0);"  >
                                                    ??????
                                                </a>
                                            </li>
                                            <li data-value="1">
                                                <a class="save_mark" href="javascript:void(0);"  >
                                                    ??????
                                                </a>
                                            </li>
                                            <li data-value="0">
                                                <a class="save_mark" href="javascript:void(0);">
                                                    ?????????
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </th>

                                <th class="text-center">
                                    <div class="btn-group">
                                        <button data-toggle="dropdown" class="btn btn-white btn-xs dropdown-toggle" style="font-weight: bold;padding: 6px 50px;background-color: #f5f5f6;border: solid 0;"
                                                aria-expanded="false">????????????
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu search-item" data-name="groupid">
                                            <li data-value="-1">
                                                <a class="save_mark" href="javascript:void(0);"  >
                                                    ??????
                                                </a>
                                            </li>
                                            <?php if(is_array($groupList) || $groupList instanceof \think\Collection || $groupList instanceof \think\Paginator): $i = 0; $__LIST__ = $groupList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                            <li data-value="<?php echo htmlentities($vo['id']); ?>">
                                                <a class="save_mark" href="javascript:void(0);"  >
                                                    <?php echo htmlentities($vo['name']); ?>
                                                </a>
                                            </li>
                                           <?php endforeach; endif; else: echo "" ;endif; ?>
                                        </ul>
                                    </div>
                                </th>
                                <th class="text-center">????????????</th>
    <!--                            <th class="text-center">??????????????????</th>-->
                                <th class="text-center">??????</th>
                            </tr>
                        </thead>
                        <tbody>
                         <?php $count = count($list); if($count): if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                                    <tr>
                                    <td class="text-center">
                                        <label class="checkbox-inline i-checks">
                                            <input type="checkbox" name="coupon[]" value="<?php echo htmlentities($vo['uid']); ?>">
                                        </label>
                                    </td>
                                    <td class="text-center">
                                        <?php echo htmlentities($vo['uid']); ?>
                                    </td>
                                    <td class="text-center">
                                        <?php echo htmlentities($vo['nickname']); ?>
                                    </td>
                                    <td class="text-center">
                                        <img src="<?php echo htmlentities($vo['headimgurl']); ?>" alt="<?php echo htmlentities($vo['nickname']); ?>" title="<?php echo htmlentities($vo['nickname']); ?>" style="width:50px;height: 50px;cursor: pointer;" class="head_image" data-image="<?php echo htmlentities($vo['headimgurl']); ?>">
                                    </td>
                                    <td class="text-center">
                                        <?php if($vo['sex'] == 1): ?>
                                        ???
                                        <?php elseif($vo['sex'] == 2): ?>
                                        ???
                                        <?php else: ?>
                                        ??????
                                        <?php endif; ?>
                                    </td>
                                    <td class="text-center">
                                        <?php echo htmlentities($vo['country']); ?><?php echo htmlentities($vo['province']); ?><?php echo htmlentities($vo['city']); ?>
                                    </td>



                                    <td class="text-center">
                                        <?php if($vo['subscribe']): ?>
                                        ??????
                                        <?php else: ?>
                                        ?????????
                                        <?php endif; ?>
                                    </td>

                                    <td class="text-center">
                                        <?php if(!is_array($groupList)){ ?>
                                            ???
                                        <?php }else{ if(!$groupList || $vo['groupid'] == 0 || !isset($groupList[$vo['groupid']])){ ?>
                                                ???
                                            <?php }else{ ?>
                                                <span class="badge badge-primary"><?php echo htmlentities($groupList[$vo['groupid']]['name']); ?></span>
                                            <?php } }?>
                                    </td>
                                    <td class="text-center">
                                        <?php if(!is_array($tagList)){ ?>
                                            ???
                                        <?php }else{ $tagId = explode(',',$vo['tagid_list']);
                                            if(!$tagList || $vo['tagid_list'] == ''|| !$tagId){ ?>
                                                ???
                                            <?php }else{ foreach($tagId as $tag){ if(isset($tagList[$tag])){?>
                                                <span class="badge badge-info"><?php echo htmlentities($tagList[$tag]['name']); ?></span>
                                            <?php }} } }?>
                                    </td>
                                    <!--                            <td class="text-center">-->
                                    <!--                                <?php echo htmlentities(date("Y-m-d H:i:s",!is_numeric($vo['add_time'])? strtotime($vo['add_time']) : $vo['add_time'])); ?>-->
                                    <!--                            </td>-->
                                    <td class="text-center">


                                        <div class="btn-group">
                                            <button data-toggle="dropdown" class="btn btn-warning  btn-xs dropdown-toggle"
                                                    aria-expanded="false">??????
                                                <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <?php if($vo['openid'] && $vo['subscribe'] == 1): ?>
                                                <li>
                                                    <a class="save_mark" href="javascript:void(0);"  onclick="$eb.createModalFrame('????????????','<?php echo Url('edit_user_group',['openid'=>$vo['openid']]); ?>',{w:350,h:500})" >
                                                        ????????????
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="save_mark" href="javascript:void(0);" onclick="$eb.createModalFrame('????????????','<?php echo Url('edit_user_tag',['openid'=>$vo['openid']]); ?>',{w:350,h:500})" >
                                                        ????????????
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="save_mark synchro" href="javascript:void(0);" data-url="<?php echo Url('synchro_tag',['openid'=>$vo['openid']]); ?>" >
                                                        ????????????
                                                    </a>
                                                </li>
                                                <?php else: ?>
                                                <li>
                                                    <a class="save_mark" href="javascript:void(0);">
                                                        ????????????
                                                    </a>
                                                </li>
                                                <?php endif; ?>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <?php endforeach; endif; else: echo "" ;endif; else: ?>
                                <tr id="content" style="display:none;height:400px;"></tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
                </div>
                <link href="/system/frame/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
<div class="row">
    <div class="col-sm-6">
        <div class="dataTables_info" id="DataTables_Table_0_info" role="alert" aria-live="polite" aria-relevant="all">??? <?php echo htmlentities($total); ?> ???</div>
    </div>
    <div class="col-sm-6">
        <div class="dataTables_paginate paging_simple_numbers" id="editable_paginate">
            <?php echo $page;?>
        </div>
    </div>
</div>
            </div>
        </div>
    </div>
</div>



<script>
    window.$list = <?php echo json_encode($list);?>;
    window.$uidAll = <?php echo json_encode($uidAll);?>;
    window.$where = <?php echo json_encode($where);?>;
    $('.this-page').on('click',function () {
        $('input[name="coupon[]"]').each(function(){
            $(this).checked = true;
            $(this).parent().addClass('checked');
            $('#batch').val(1);
        });
    })
    $('.this-all').on('click',function () {
        $('input[name="coupon[]"]').each(function(){
            $(this).checked = true;
            $(this).parent().addClass('checked');
            $('#batch').val(2);
        });
    })
    $('.this-up').on('click',function () {
        $('input[name="coupon[]"]').each(function(){
            $(this).checked = false;
            $(this).parent().removeClass('checked');
            $('#batch').val('');
        });
    })
    $(function init() {
        $('.search-item>.btn').on('click', function () {
            var that = $(this), value = that.data('value'), p = that.parent(), name = p.data('name'), form = p.parents();
            form.find('input[name="' + name + '"]').val(value);
            $('input[name=export]').val(0);
            form.submit();
        });
        $('.tag-item>.btn').on('click', function () {
            var that = $(this), value = that.data('value'), p = that.parent(), name = p.data('name'), form = p.parents(),list = $('input[name="' + name + '"]').val().split(',');
            var bool = 0;
            $.each(list,function (index,item) {
                if(item == value){
                    bool = 1
                    list.splice(index,1);
                }
            })
            if(!bool) list.push(''+value+'');
            form.find('input[name="' + name + '"]').val(list.join(','));
            $('input[name=export]').val(0);
            form.submit();
        });
        $('.search-item>li').on('click', function () {
            var that = $(this), value = that.data('value'), p = that.parent(), name = p.data('name'), form = $('#form');
            form.find('input[name="' + name + '"]').val(value);
            $('input[name=export]').val(0);
            form.submit();
        });
        $('.search-item>li').each(function () {
            var that = $(this), value = that.data('value'), p = that.parent(), name = p.data('name');
            if($where[name]) $('.'+name).css('color','#1ab394');
        });
        $('.search-item-value').each(function () {
            var that = $(this), name = that.attr('name'), value = that.val(), dom = $('.search-item[data-name="' + name + '"] .btn[data-value="' + value + '"]');
            dom.eq(0).removeClass('btn-outline btn-link').addClass('btn-primary btn-sm')
                .siblings().addClass('btn-outline btn-link').removeClass('btn-primary btn-sm')
        });
        $('.tag-item-value').each(function () {
            var that = $(this), name = that.attr('name'), value = that.val().split(',');
            dom = [];
            $.each(value,function (index,item) {
                dom.push($('.tag-item[data-name="' + name + '"] .btn[data-value="' + item + '"]'));
            })
            $.each(dom,function (index,item) {
                item.eq(0).removeClass('btn-outline btn-link tag').addClass('btn-primary btn-sm')
            })
        });
    })
    $('.i-checks').iCheck({
        checkboxClass: 'icheckbox_square-green',
    });
    $('.head_image').on('click',function (e) {
        var image = $(this).data('image');
        $eb.openImage(image);
    })
    var dateInput =$('.datepicker');
    dateInput.daterangepicker({
        autoUpdateInput: false,
        "opens": "center",
        "drops": "down",
        "ranges": {
             '??????': [moment(), moment().add(1, 'days')],
             '??????': [moment().subtract(1, 'days'), moment()],
             '??????': [moment().subtract(6, 'days'), moment()],
             '???30???': [moment().subtract(29, 'days'), moment()],
             '??????': [moment().startOf('month'), moment().endOf('month')],
             '??????': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        "locale"??:??{
            applyLabel??:??'??????',
            cancelLabel??:??'??????',
            fromLabel??:??'????????????',
            toLabel??:??'????????????',
            format : 'YYYY/MM/DD',
            customRangeLabel??:??'?????????',
            daysOfWeek??:??[??'???',??'???',??'???',??'???',??'???',??'???',??'???'??],
            monthNames??:??[??'??????',??'??????',??'??????',??'??????',??'??????',??'??????',
                '??????',??'??????',??'??????',??'??????',??'?????????',??'?????????'??],
            firstDay??:??1
        }
    });
    dateInput.on('cancel.daterangepicker', function(ev, picker) {
        $("#data").val('');
    });
    dateInput.on('apply.daterangepicker', function(ev, picker) {
        $("input[name=data]").val(picker.startDate.format('YYYY/MM/DD') + ' - ' + picker.endDate.format('YYYY/MM/DD'));
        $('input[name=export]').val(0);
        $('#form').submit();
    });
    //????????????
    $('.grant').on('click',function (e) {
        var chk_value =[];
        var batch = $('#batch').val();
        if(batch == 1){
            $.each($list.data,function (index,item) {
                chk_value.push(item.uid);
            })
        }else if(batch == 2){
            chk_value = $uidAll;
        }else{
            $('input[name="coupon[]"]:checked').each(function(){
                chk_value.push($(this).val());
                str += $(this).val();
            });
            if(chk_value.length < 1){
                $eb.message('????????????????????????????????????');
                return false;
            }
        }
        var str = chk_value.join(',');
//        var url = "http://"+window.location.host+"/admin/ump.store_coupon/grant/id/"+str;
        var url = "<?php echo Url('ump.store_coupon/grant'); ?>?id="+str;
        $eb.createModalFrame(this.innerText,url,{'w':800});
    })
    $('.news').on('click',function (e) {
        var chk_value =[];
        var batch = $('#batch').val();
        if(batch == 1){
            $.each($list.data,function (index,item) {
                chk_value.push(item.uid);
            })
        }else if(batch == 2){
            chk_value = $uidAll;
        }else{
            $('input[name="coupon[]"]:checked').each(function(){
                chk_value.push($(this).val());
                str += $(this).val();
            });
            if(chk_value.length < 1){
                $eb.message('??????????????????????????????');
                return false;
            }
        }
        var str = chk_value.join(',');
        var url = "<?php echo Url('wechat.wechat_news_category/send_news'); ?>?id="+str;
        $eb.createModalFrame(this.innerText,url,{'w':800});
    })
    $('.synchro').on('click',function(){
        window.t = $(this);
        var _this = $(this),url =_this.data('url');
        $eb.$swal('delete',function(){
            $eb.axios.get(url).then(function(res){
                console.log(res);
                if(res.status == 200 && res.data.code == 200) {
                    $eb.$swal('success',res.data.msg);
                }else
                    return Promise.reject(res.data.msg || '????????????')
            }).catch(function(err){
                $eb.$swal('error',err);
            });
        },{'title':'??????????????????????????????????????????','text':'??????????????????','confirm':'?????????????????????'})
    });
</script>


</div>
</body>
</html>
