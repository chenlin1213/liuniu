<?php /*a:4:{s:94:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\ump\store_coupon_issue\issue_log.php";i:1613695276;s:79:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\frame_head.php";i:1613695276;s:79:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\inner_page.php";i:1613695276;s:81:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\inner_footer.php";i:1613695276;}*/ ?>

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



<style type="text/css" media="screen">
    td img{width: 35px; height: 35px;}
</style>
<div class="row">
    <div class="col-sm-12">
        <div class="ibox">
            <div class="ibox-content">
                <div class="table-responsive">
                    <table class="table table-striped  table-bordered">
                        <thead>
                        <tr>
                            <th class="text-center">用户名</th>
                            <th class="text-center">用户头像</th>
                            <th class="text-center">领取时间</th>
                        </tr>
                        </thead>
                        <tbody class="">
                        <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                        <tr>
                            <td class="text-center"><?php echo htmlentities($vo['nickname']); ?></td>
                            <td class="text-center"><img src="<?php echo htmlentities($vo['avatar']); ?>" class="head_image" data-image="<?php echo htmlentities($vo['avatar']); ?>" width="35" height="35"></td>
                            <td class="text-center"><?php echo htmlentities($vo['add_time']); ?></td>
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
    <script>
        $('td img').on('click',function (e) {
            var image = $(this).attr("src");
            $eb.openImage(image);
        })
    </script>
</div>
<script src="/system/frame/js/content.min.js"></script>
<script src="/system/frame/js/plugins/chosen/chosen.jquery.js"></script>
<script src="/system/frame/js/plugins/jsKnob/jquery.knob.js"></script>
<script src="/system/frame/js/plugins/jasny/jasny-bootstrap.min.js"></script>
<script src="/system/frame/js/plugins/datapicker/bootstrap-datepicker.js"></script>
<script src="/system/frame/js/plugins/prettyfile/bootstrap-prettyfile.js"></script>
<script src="/system/frame/js/plugins/nouslider/jquery.nouislider.min.js"></script>
<script src="/system/frame/js/plugins/switchery/switchery.js"></script>
<script src="/system/frame/js/plugins/ionRangeSlider/ion.rangeSlider.min.js"></script>
<script src="/system/frame/js/plugins/iCheck/icheck.min.js"></script>
<script src="/system/frame/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="/system/frame/js/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<script src="/system/frame/js/plugins/clockpicker/clockpicker.js"></script>
<script src="/system/frame/js/plugins/cropper/cropper.min.js"></script>
<script src="/system/frame/js/plugins/peity/jquery.peity.min.js"></script>
<script src="/system/frame/js/plugins/iCheck/icheck.min.js"></script>
</body>
</html>
