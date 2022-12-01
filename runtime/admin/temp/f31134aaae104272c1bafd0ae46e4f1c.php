<?php /*a:3:{s:80:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\system\clear\index.php";i:1613695276;s:79:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\frame_head.php";i:1613695276;s:81:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\inner_footer.php";i:1613695276;}*/ ?>

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



<div class="row" style="width: 100%;margin-top: 50px; text-align: center;">
<button type="button" class="btn btn-w-m btn-primary" data-url="<?php echo Url('system.clear/refresh_cache'); ?>">清除缓存</button>
<button type="button" class="btn btn-w-m btn-primary" data-url="<?php echo Url('system.clear/delete_log'); ?>">清除日志</button>
</div>
<script>
    $('button').on('click',function(){
        window.t = $(this);
        var _this = $(this),url =_this.data('url');
        $eb.$swal('delete',function(){
            $eb.axios.get(url).then(function(res){
                if(res.status == 200) {
                    $eb.$swal('success',res.data.msg);
                }else
                    return Promise.reject(res.data.msg || '操作失败')
            }).catch(function(err){
                $eb.$swal('error',err);
            });
        },{'title':'您确定要进行此操作吗？','text':'操作后runtime目录文件有可能被删除,请谨慎操作！','confirm':'是的，我要操作'})
    })
</script>
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
