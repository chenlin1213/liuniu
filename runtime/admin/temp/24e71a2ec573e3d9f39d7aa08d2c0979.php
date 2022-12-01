<?php /*a:6:{s:88:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\finance\user_extract\index.php";i:1613695276;s:78:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\container.php";i:1613695276;s:79:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\frame_head.php";i:1613695276;s:74:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\style.php";i:1613695276;s:79:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\inner_page.php";i:1613695276;s:81:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\frame_footer.php";i:1613695276;}*/ ?>
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
    
<link rel="stylesheet" href="/static/plug/daterangepicker/daterangepicker.css">
<script src="/static/plug/moment.js"></script>
<script src="/static/plug/daterangepicker/daterangepicker.js"></script>

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
                            <div class="search-item" data-name="date">
                                <span>选择时间：</span>
                                <button type="button" class="btn btn-outline btn-link" data-value="">全部</button>
                                <button type="button" class="btn btn-outline btn-link" data-value="<?php echo htmlentities($limitTimeList['today']); ?>">今天</button>
                                <button type="button" class="btn btn-outline btn-link" data-value="<?php echo htmlentities($limitTimeList['week']); ?>">本周</button>
                                <button type="button" class="btn btn-outline btn-link" data-value="<?php echo htmlentities($limitTimeList['month']); ?>">本月</button>
                                <button type="button" class="btn btn-outline btn-link" data-value="<?php echo htmlentities($limitTimeList['quarter']); ?>">本季度</button>
                                <button type="button" class="btn btn-outline btn-link" data-value="<?php echo htmlentities($limitTimeList['year']); ?>">本年</button>
                                <div class="datepicker" style="display: inline-block;">
                                    <button type="button" class="btn btn-outline btn-link" data-value="<?php echo !empty($where['date']) ? htmlentities($where['date']) : 'no'; ?>">自定义时间</button>
                                </div>
                                <input class="search-item-value" type="hidden" name="date" value="<?php echo htmlentities($where['date']); ?>" />
                            </div>
                            <select name="status" aria-controls="editable" class="form-control input-sm">
                                <option value="">提现状态</option>
                                <option value="-1" <?php if($where['status'] == '-1'): ?>selected="selected"<?php endif; ?>>未通过</option>
                                <option value="0" <?php if($where['status'] == '0'): ?>selected="selected"<?php endif; ?>>未提现</option>
                                <option value="1" <?php if($where['status'] == '1'): ?>selected="selected"<?php endif; ?>>已通过</option>
                            </select>
                            <select name="extract_type"  class="form-control input-sm">
                                <option value="">提现方式</option>
                                <option value="alipay" <?php if($where['extract_type'] == 'alipay'): ?>selected="selected"<?php endif; ?>>支付宝</option>
                                <option value="bank" <?php if($where['extract_type'] == 'bank'): ?>selected="selected"<?php endif; ?>>银行卡</option>
                                <option value="weixin" <?php if($where['extract_type'] == 'weixin'): ?>selected="selected"<?php endif; ?>>微信</option>
                            </select>
                            <div class="input-group">
                                  <span class="input-group-btn">
                                      <input type="text" name="nireid" value="<?php echo htmlentities($where['nireid']); ?>" placeholder="微信昵称/姓名/支付宝账号/银行卡号" class="input-sm form-control" size="38"/>
                                      <button type="submit" class="btn btn-sm btn-primary"> 搜索</button>
                                  </span>
                            </div>
                        </form>
                    </div>
                    <div class="col-sm-3 ui-sortable">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-success pull-right">￥</span>
                                <h5>已提现金额</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?php echo htmlentities($data['priced']); ?></h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 ui-sortable">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-danger pull-right">急</span>
                                <h5>待提现金额</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?php echo htmlentities($data['price']); ?></h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 ui-sortable">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-success pull-right">待</span>
                                <h5>佣金总金额</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?php echo htmlentities($data['brokerage_count']); ?></h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3 ui-sortable">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <span class="label label-success pull-right">待</span>
                                <h5>未提现金额</h5>
                            </div>
                            <div class="ibox-content">
                                <h1 class="no-margins"><?php echo htmlentities($data['brokerage_not']); ?></h1>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped  table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">编号</th>
                                <th class="text-center">用户信息</th>
                                <th class="text-center">提现金额</th>
                                <th class="text-center">提现方式</th>
                                <th class="text-center">添加时间</th>
                                <th class="text-center">备注</th>
                                <th class="text-center">审核状态</th>
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
                               用户昵称: <?php echo htmlentities($vo['nickname']); ?>/用户id:<?php echo htmlentities($vo['uid']); ?>
                            </td>
                            <td class="text-center" style="color: #00aa00;">
                                <?php echo htmlentities($vo['extract_price']); ?>
                            </td>
                            <td class="text-left">
                                <?php if($vo['extract_type'] == 'bank'): ?>
                                姓名：<?php echo htmlentities($vo['real_name']); ?><br>
                                 银行卡号：<?php echo htmlentities($vo['bank_code']); ?>
                                <br/>
                                 银行开户地址:<?php echo htmlentities($vo['bank_address']); elseif($vo['extract_type'] == 'weixin'): ?>
                                昵称：<?php echo htmlentities($vo['nickname']); ?><br>
                                微信号：<?php echo htmlentities($vo['wechat']); else: ?>
                                姓名：<?php echo htmlentities($vo['real_name']); ?><br>
                                  支付宝号：<?php echo htmlentities($vo['alipay_code']); ?>
                                <?php endif; ?>
                            </td>
                            <td class="text-center">
                                <?php echo htmlentities(date('Y-m-d H:i:s',!is_numeric($vo['add_time'])? strtotime($vo['add_time']) : $vo['add_time'])); ?>
                            </td>
                            <td class="text-center">
                                <?php echo htmlentities($vo['mark']); ?>
                            </td>
                            <td class="text-center">
                                <?php if($vo['status'] == 1): ?>
                                提现通过<br/>
                                <?php elseif($vo['status'] == -1): ?>
                                提现未通过<br/>
                                未通过原因：<?php echo htmlentities($vo['fail_msg']); ?>
                                <br>
                                未通过时间：<?php echo htmlentities(date('Y-m-d H:i:s',!is_numeric($vo['fail_time'])? strtotime($vo['fail_time']) : $vo['fail_time'])); else: ?>
                                未提现<br/>
                                <button data-url="<?php echo url('fail',['id'=>$vo['id']]); ?>" class="j-fail btn btn-danger btn-xs" type="button"><i class="fa fa-close"></i> 无效</button>
                                <button data-url="<?php echo url('succ',['id'=>$vo['id']]); ?>" class="j-success btn btn-primary btn-xs" type="button"><i class="fa fa-check"></i> 通过</button>
                                <?php endif; ?>
                            </td>
                            <td class="text-center">
                                <button class="btn btn-info btn-xs" type="button"  onclick="$eb.createModalFrame('编辑','<?php echo Url('edit',array('id'=>$vo['id'])); ?>')"><i class="fa fa-edit"></i> 编辑</button>
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
    })
    $('.j-fail').on('click',function(){
        var url = $(this).data('url');
        $eb.$alert('textarea',{
            title:'请输入未通过原因',
            value:'输入信息不完整或有误!',
        },function(value){
            $eb.axios.post(url,{message:value}).then(function(res){
                if(res.data.code == 200) {
                    $eb.$swal('success', res.data.msg);
                    setTimeout(function () {
                        window.location.reload();
                    },1000);
                }else
                    $eb.$swal('error',res.data.msg||'操作失败!');
            });
        });
    });
    $('.j-success').on('click',function(){
        var url = $(this).data('url');
        $eb.$swal('delete',function(){
            $eb.axios.post(url).then(function(res){
                if(res.data.code == 200) {
                    setTimeout(function () {
                        window.location.reload();
                    },1000);
                    $eb.$swal('success', res.data.msg);
                }else
                    $eb.$swal('error',res.data.msg||'操作失败!');
            });
        },{
            title:'确定审核通过?',
            text:'通过后无法撤销，请谨慎操作！',
            confirm:'审核通过'
        });
    });
    $('.btn-warning').on('click',function(){
        window.t = $(this);
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
        })
    });
    $(".open_image").on('click',function (e) {
        var image = $(this).data('image');
        $eb.openImage(image);
    })
    var dateInput = $('.datepicker');
    dateInput.daterangepicker({
        autoUpdateInput: false,
        "opens": "center",
        "drops": "down",
        "ranges": {
            '今天': [moment(), moment().add(1, 'days')],
            '昨天': [moment().subtract(1, 'days'), moment()],
            '上周': [moment().subtract(6, 'days'), moment()],
            '前30天': [moment().subtract(29, 'days'), moment()],
            '本月': [moment().startOf('month'), moment().endOf('month')],
            '上月': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        "locale" : {
            applyLabel : '确定',
            cancelLabel : '取消',
            fromLabel : '起始时间',
            toLabel : '结束时间',
            format : 'YYYY/MM/DD',
            customRangeLabel : '自定义',
            daysOfWeek : [ '日', '一', '二', '三', '四', '五', '六' ],
            monthNames : [ '一月', '二月', '三月', '四月', '五月', '六月',
                '七月', '八月', '九月', '十月', '十一月', '十二月' ],
            firstDay : 1
        }
    });
    dateInput.on('apply.daterangepicker', function(ev, picker) {
        $("input[name=date]").val(picker.startDate.format('YYYY/MM/DD') + ' - ' + picker.endDate.format('YYYY/MM/DD'));
        $('form').submit();
    });
</script>


</div>
</body>
</html>
