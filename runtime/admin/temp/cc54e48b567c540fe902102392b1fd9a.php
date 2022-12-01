<?php /*a:3:{s:89:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\ump\store_seckill\attr_list.php";i:1613695276;s:73:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\head.php";i:1613695276;s:74:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\style.php";i:1613695276;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=0;">
<link rel="stylesheet" href="/system/css/main.css">
<link rel="stylesheet" href="/static/css/animate.css">
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
<script>
    $eb = parent._mpApi;
//    if(!$eb) top.location.reload();
</script>
    <script src="/static/plug/jquery-1.4.1.min.js"></script>
    <link rel="stylesheet" href="/static/plug/layui/css/layui.css">
    <script src="/static/plug/layui/layui.js"></script>
    <style>
        .layui-form-checkbox{
            margin-top: 0!important;
            margin-right: 0;
        }
        .layui-form-checkbox i{
            border-left: 1px solid #d2d2d2;
        }
    </style>
</head>
<body>
<form class="layui-form" action="" style="padding: 30px 50px 0px 0px;">
    <div class="layui-form-item">
        <label class="layui-form-label">规格选择</label>
        <div class="layui-input-block">
            <table class="layui-table attrTab">
                <thead>
                <tr>
                    <?php if(is_array($attr['attr']) || $attr['attr'] instanceof \think\Collection || $attr['attr'] instanceof \think\Paginator): $i = 0; $__LIST__ = $attr['attr'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
                    <th><?php echo htmlentities($vo['value']); ?></th>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    <th>图片</th>
                    <th>售价</th>
                    <th>成本价</th>
                    <th>原价</th>
                    <th>库存</th>
                    <th>限量</th>
                    <th>商品编号</th>
                    <th>重量</th>
                    <th>体积</th>
                    <th>选择</th>
                </tr>
                </thead>
                <tbody>
                <?php if(is_array($attr['value']) || $attr['value'] instanceof \think\Collection || $attr['value'] instanceof \think\Paginator): $k = 0; $__LIST__ = $attr['value'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?>
                <tr>
                    <?php if(is_array($vo) || $vo instanceof \think\Collection || $vo instanceof \think\Paginator): $i = 0; $__LIST__ = $vo;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;if($key == 'pic'): ?>
                    <td id="cl<?php echo htmlentities($k); ?>"><input type="hidden" name="attr[<?php echo htmlentities($k); ?>][<?php echo htmlentities($key); ?>]" class="layui-input" value="<?php echo htmlentities($item); ?>"><img src="<?php echo htmlentities($item); ?>" width="50px" onclick="createFrame('选择图片','<?php echo Url('widget.images/index',['fodder'=>'image']); ?>',{w:900,h:550},'cl<?php echo htmlentities($k); ?>')"></td>
                    <?php elseif($key == 'detail'): ?>
                    <input type="hidden" name="attr[<?php echo htmlentities($k); ?>][<?php echo htmlentities($key); ?>]" class="layui-input" value="<?php echo htmlentities($item); ?>">
                    <?php elseif($key == 'check'): ?>
                    <td><input type="checkbox" name="ids[]" value="<?php echo htmlentities($k); ?>" <?php if($item == 1): ?>checked<?php endif; ?>></td>
                    <?php elseif(($key != 'brokerage') AND ($key != 'brokerage_two')): if(($key != 'price') AND ($key != 'quota')): ?>
                    <td style="text-align: center"><span><?php echo htmlentities($item); ?></span><input type="hidden" name="attr[<?php echo htmlentities($k); ?>][<?php echo htmlentities($key); ?>]" class="layui-input" value="<?php echo htmlentities($item); ?>"></td>
                    <?php else: ?>
                    <td><input type="number" name="attr[<?php echo htmlentities($k); ?>][<?php echo htmlentities($key); ?>]" class="layui-input max" value="<?php echo htmlentities($item); ?>" min="0" max="<?php if($key == 'quota'): ?><?php echo htmlentities($vo['stock']); else: ?><?php echo htmlentities($vo['ot_price']); ?><?php endif; ?>" oninput="checknum(this)"></td>
                    <?php endif; ?>
                    <?php endif; ?>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </tr>
                <?php endforeach; endif; else: echo "" ;endif; ?>
                </tbody>
            </table>
        </div>
    </div>
    <div class="layui-form-item">
        <div class="layui-input-block">
            <input type="hidden" name="id" value="<?php echo htmlentities($id); ?>">
            <button type="button" class="layui-btn" lay-submit lay-filter="formDemo">立即提交</button>
        </div>
    </div>
</form>
<script src="/system/js/layuiList.js"></script>
<script>
    var cl = '';
    layui.use('form', function () {
        var form = layui.form;
        form.on('submit(formDemo)', function (data) {
            layList.basePost('save_attr', data.field, function (res) {
                parent.layer.close(parent.layer.getFrameIndex(window.name));
                parent.layer.msg(res.msg, {icon:1,time:2000});
            }, function (res) {
                parent.layer.msg(res.msg, {icon:1,time:2000});
            });
        });
    });
    function createFrame(title,src,opt,k){
        cl = k;
        opt === undefined && (opt = {});
        var h = parent.document.body.clientHeight - 100;
        return layer.open({
            type: 2,
            title:title,
            area: [(opt.w || 700)+'px', (opt.h || h)+'px'],
            fixed: false, //不固定
            maxmin: true,
            moveOut:false,//true  可以拖出窗外  false 只能在窗内拖
            anim:5,//出场动画 isOutAnim bool 关闭动画
            offset:'auto',//['100px','100px'],//'auto',//初始位置  ['100px','100px'] t[ 上 左]
            shade:0,//遮罩
            resize:true,//是否允许拉伸
            content: src,//内容
            move:'.layui-layer-title'
        });
    }
    function changeIMG(index,pic){
        $('#'+cl).children('input').val(pic);
        $('#'+cl).children('img').attr('src',pic);
    }
    function checknum(e){
        if(parseInt(e.value)>parseInt(e.max)){
            $(e).val(e.max);
        }
        if(parseInt(e.value)<0){
            $(e).val(0);
        }
    }
</script>
</body>
</html>