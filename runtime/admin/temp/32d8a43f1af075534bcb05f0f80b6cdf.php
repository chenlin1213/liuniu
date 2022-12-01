<?php /*a:6:{s:90:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\ump\store_coupon_issue\index.php";i:1613695276;s:78:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\container.php";i:1613695276;s:79:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\frame_head.php";i:1613695276;s:74:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\style.php";i:1613695276;s:79:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\inner_page.php";i:1613695276;s:81:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\frame_footer.php";i:1613695276;}*/ ?>
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

<div class="row">
    <div class="col-sm-12">
        <div class="ibox">
            <div class="ibox-content">
                <div class="row">
                    <div class="m-b m-l">

                        <form action="" class="form-inline">
                            <select name="status" aria-controls="editable" class="form-control input-sm">
                                <option value="">状态</option>
                                <option value="1" <?php if($where['status'] == '1'): ?>selected="selected"<?php endif; ?>>正常</option>
                                <option value="0" <?php if($where['status'] == '0'): ?>selected="selected"<?php endif; ?>>未开启</option>
                                <option value="-1" <?php if($where['status'] == '2'): ?>selected="selected"<?php endif; ?>>已失效</option>
                            </select>
                            <select name="type" aria-controls="editable" class="form-control input-sm">
                                <option value="">类型</option>
                                <option value="0" <?php if($where['type'] == '0'): ?>selected="selected"<?php endif; ?>>通用券</option>
                                <option value="1" <?php if($where['type'] == '1'): ?>selected="selected"<?php endif; ?>>品类券</option>
                                <option value="2" <?php if($where['type'] == '2'): ?>selected="selected"<?php endif; ?>>商品券</option>
                            </select>
                            <div class="input-group">
                                <input type="text" name="coupon_title" value="<?php echo htmlentities($where['coupon_title']); ?>" placeholder="请输入优惠券名称" class="input-sm form-control"> <span class="input-group-btn">
                                    <button type="submit" class="btn btn-sm btn-primary"> <i class="fa fa-search" ></i>搜索</button> </span>
                            </div>
                        </form>
                    </div>

                </div>
                <div class="table-responsive">
                    <table class="table table-striped  table-bordered">
                        <thead>
                        <tr>

                            <th class="text-center">编号</th>
                            <th class="text-center">优惠券名称</th>
                            <th class="text-center">优惠券类型</th>
                            <th class="text-center">领取日期</th>
                            <th class="text-center">首次关注赠送</th>
                            <th class="text-center">消费满赠</th>
                            <th class="text-center">发布数量</th>
                            <th class="text-center">状态</th>
                            <th class="text-center">操作</th>
                        </tr>
                        </thead>
                        <tbody class="">
                        <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <tr>
                            <td class="text-center">
                                <?php echo htmlentities($vo['id']); ?>
                            </td>
                            <td class="text-center">
                                <?php echo htmlentities($vo['title']); ?>
                            </td>
                            <td class="text-center">
                                <?php if($vo['type'] == 0): ?>
                                通用券
                                <?php elseif($vo['type'] == 1): ?>
                                品类券
                                <?php else: ?>
                                商品券
                                <?php endif; ?>
                            </td>
                            <td class="text-center">
                                <?php if(empty($vo['start_time']) || (($vo['start_time'] instanceof \think\Collection || $vo['start_time'] instanceof \think\Paginator ) && $vo['start_time']->isEmpty())): ?>
                                不限时
                                <?php else: ?>
                                <?php echo htmlentities(date("Y/m/d H:i",!is_numeric($vo['start_time'])? strtotime($vo['start_time']) : $vo['start_time'])); ?> - <?php echo htmlentities(date("Y/m/d H:i",!is_numeric($vo['end_time'])? strtotime($vo['end_time']) : $vo['end_time'])); ?>
                                <?php endif; ?>
                            </td>
                            <td class="text-center">
                                <?php if($vo['is_give_subscribe'] == 1): ?>
                                    是
                                <?php else: ?>
                                    否
                                <?php endif; ?>
                            </td>
                            <td class="text-center">
                                <?php if($vo['is_full_give'] == 1): ?>
                                    是
                                <?php else: ?>
                                    否
                                <?php endif; ?>
                            </td>
                            <td class="text-center">
                                <?php if($vo['is_permanent']): ?>
                                    不限量
                                <?php else: ?>
                                    <b style="color: #0a6aa1">发布:<?php echo htmlentities($vo['total_count']); ?></b>
                                    <br/>
                                    <b style="color:#ff0000;">剩余:<?php echo htmlentities($vo['remain_count']); ?></b>
                                <?php endif; ?>
                            </td>

                            <td class="text-center">
                                <?php if(!$vo['status']){ ?>
                                <span class="label label-warning">未开启</span>
                                <?php }elseif(-1 == $vo['status']){ ?>
                                    <span class="label label-danger">已失效</span>
                                <?php }elseif(1 == $vo['status']){ ?>
                                <span class="label label-primary">正常</span>
                                <?php } ?>
                            </td>
                            <td class="text-center">
                                <button class="btn btn-info btn-xs" type="button"  onclick="$eb.createModalFrame('修改状态','<?php echo Url('issue_log',array('id'=>$vo['id'])); ?>')"><i class="fa fa-commenting-o"></i> 领取记录</button>
                                <?php if($vo['status'] != '-1'): ?>
                                <button class="btn btn-primary btn-xs" type="button"  onclick="$eb.createModalFrame('修改状态','<?php echo Url('edit',array('id'=>$vo['id'])); ?>',{w:400,h:170})"><i class="fa fa-edit"></i> 修改状态</button>
                                <?php endif; ?>
                                <button class="btn btn-danger btn-xs" data-url="<?php echo Url('delete',array('id'=>$vo['id'])); ?>" type="button"><i class="fa fa-times"></i> 删除
                                </button>
                            </td>
                        </tr>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                        </tbody>
                    </table>
                </div>
                <link href="/system/frame/css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">
<div class="row">
    <div class="col-sm-6">
        <div class="dataTables_info" id="DataTables_Table_0_info" role="alert" aria-live="polite" aria-relevant="all">共 <?php echo htmlentities($total); ?> 项</div>
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
    $('.btn-danger').on('click',function(){
        var _this = $(this),url =_this.data('url');
        $eb.$swal('delete',function(){
            $eb.axios.get(url).then(function(res){
                if(res.status == 200 && res.data.code == 200) {
                    $eb.$swal('success',res.data.msg);
                        _this.parents('tr').remove();
                }else
                    return Promise.reject(res.data.msg || '删除失败')
            }).catch(function(err){
                $eb.$swal('error',err);
            });
        },{'title':'您确定要删除发布的优惠券吗？','text':'删除后将无法恢复,请谨慎操作！','confirm':'是的，我要删除'})
    });
</script>




</div>
</body>
</html>
