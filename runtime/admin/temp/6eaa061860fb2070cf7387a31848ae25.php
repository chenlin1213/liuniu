<?php /*a:5:{s:86:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\agent\agent_manage\stair.php";i:1613695276;s:78:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\container.php";i:1613695276;s:79:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\frame_head.php";i:1613695276;s:74:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\style.php";i:1613695276;s:81:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\frame_footer.php";i:1613695276;}*/ ?>
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
    <div class="layui-row layui-col-space15"  id="app" v-cloak="">
        <!--????????????-->
        <div class="layui-col-md12">
            <div class="layui-card">
                <div class="layui-card-header">????????????</div>
                <div class="layui-card-body">
                    <div class="layui-carousel layadmin-carousel layadmin-shortcut" lay-anim="" lay-indicator="inside" lay-arrow="none" style="background:none">
                        <div class="layui-card-body">
                            <div class="layui-row layui-col-space10 layui-form-item">
                                <div class="layui-col-lg12">
                                    <label class="layui-form-label">????????????:</label>
                                    <div class="layui-input-block" data-type="data" v-cloak="">
                                        <button class="layui-btn layui-btn-sm" type="button" v-for="item in dataList" @click="setData(item)" :class="{'layui-btn-primary':where.data!=item.value}">{{item.name}}</button>
                                        <button class="layui-btn layui-btn-sm" type="button" ref="time" @click="setData({value:'zd',is_zd:true})" :class="{'layui-btn-primary':where.data!='zd'}">?????????</button>
                                        <button type="button" class="layui-btn layui-btn-sm layui-btn-primary" v-show="showtime==true" ref="date_time">{year.0} - <?php echo htmlentities($year['1']); ?></button>
                                    </div>
                                </div>
                                <div class="layui-col-lg12">
                                    <label class="layui-form-label">????????????:</label>
                                    <div class="layui-input-block" v-cloak="">
                                        <button class="layui-btn layui-btn-sm" :class="{'layui-btn-primary':where.type!=item.value}" @click="where.type = item.value" type="button" v-for="item in spread_type">{{item.name}}
                                            <span v-if="item.count!=undefined" class="layui-badge layui-bg-gray">{{item.count}}</span></button>
                                    </div>
                                </div>
                                <div class="layui-col-lg12">
                                    <label class="layui-form-label">????????????:</label>
                                    <div class="layui-input-block">
                                        <input type="text" name="nickname" style="width: 50%" v-model="where.nickname" placeholder="???????????????????????????UID" class="layui-input">
                                    </div>
                                </div>
                                <div class="layui-col-lg12">
                                    <div class="layui-input-block">
                                        <button @click="search" type="button" class="layui-btn layui-btn-sm layui-btn-normal">
                                            <i class="layui-icon layui-icon-search"></i>??????</button>
                                        <button @click="refresh" type="reset" class="layui-btn layui-btn-primary layui-btn-sm">
                                            <i class="layui-icon layui-icon-refresh" ></i>??????</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end-->
        <!-- ??????????????????-->
        <div :class="item.col!=undefined ? 'layui-col-sm'+item.col+' '+'layui-col-md'+item.col +' layui-col-xs'+item.col:'layui-col-sm4 layui-col-md3'" v-for="item in badge" v-cloak="" v-if="item.count > 0">
            <div class="layui-card">
                <div class="layui-card-header">
                    {{item.name}}
                    <span class="layui-badge layuiadmin-badge" :class="item.background_color">{{item.field}}</span>
                </div>
                <div class="layui-card-body">
                    <p class="layuiadmin-big-font">{{item.count}}</p>
                    <p v-show="item.content!=undefined">
                        {{item.content}}
                        <span class="layuiadmin-span-color">{{item.sum}}<i :class="item.class"></i></span>
                    </p>
                </div>
            </div>
        </div>
        <!--enb-->
    </div>
    <div class="layui-row layui-col-space15">
        <div class="layui-col-md12">
            <div class="layui-card">
                <div class="layui-card-header">???????????????</div>
                <div class="layui-card-body">
                    <div class="layui-btn-container">
                        <!--                        <div class="layui-btn-group conrelTable">-->
                        <!--                            <button class="layui-btn layui-btn-sm layui-btn-normal" type="button" data-type="refresh"><i class="layui-icon layui-icon-refresh" ></i>??????</button>-->
                        <!--                        </div>-->
                    </div>
                    <table class="layui-hide" id="userList" lay-filter="userList"></table>
                    <script type="text/html" id="avatar">
                        <img style="cursor: pointer" lay-event='open_image' src="{{d.avatar}}">
                    </script>
                    <!--????????????-->
                    <script type="text/html" id="userinfo">
                        ?????????{{d.nickname==null ? '????????????':d.nickname}}
                        <br>?????????{{d.real_name==null ? '????????????':d.real_name}}
                        <br>?????????{{d.phone==null ? '????????????':d.phone}}
                    </script>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/system/js/layuiList.js"></script>



<script>
    var action={
        refresh:function () {
            layList.reload();
        }
    },uid = <?php echo htmlentities($uid); ?>;
    layList.form.render();
    layList.tableList('userList',"<?php echo Url('get_stair_list',['uid'=>$uid]); ?>",function () {
        return [
            {field: 'uid', title: 'UID',width:'10%'},
            {field: 'avatar', title: '??????',templet:'#avatar'},
            {field: 'real_name', title: '????????????',templet:'#userinfo',width:'22%'},
            {field: 'promoter_name', title: '???????????????'},
            {field: 'spread_count', title: '????????????',sort: true},
            {field: 'order_count', title: '?????????',sort: true},
            {field: 'add_time', title: '????????????',width:'10%',sort: true},
        ];
    });
    layList.date({elem:'#start_time',theme:'#393D49',type:'datetime'});
    layList.date({elem:'#end_time',theme:'#393D49',type:'datetime'});
    layList.search('search',function(where){
        if(where.start_time!='' && where.end_time=='') return layList.msg('?????????????????????');
        if(where.end_time!='' && where.start_time=='') return layList.msg('?????????????????????');
        layList.reload(where,true);
    });
    $('.conrelTable').find('button').each(function () {
        var type=$(this).data('type');
        $(this).on('click',function () {
            action[type] && action[type]();
        })
    })
    require(['vue'],function(Vue) {
        new Vue({
            el: "#app",
            data: {
                badge: [],
                dataList: [
                    {name: '??????', value: ''},
                    {name: '??????', value: 'yesterday'},
                    {name: '??????', value: 'today'},
                    {name: '??????7???', value: 'lately7'},
                    {name: '??????30???', value: 'lately30'},
                    {name: '??????', value: 'month'},
                    {name: '??????', value: 'year'},
                ],
                spread_type:[
                    {name:'??????',value:''},
                    {name:'???????????????',value:'1'},
                    {name:'???????????????',value:'2'},
                ],
                where:{
                    data:'',
                    nickname: '',
                    type:'',
                    uid:uid
                },
                showtime: false,
            },
            watch:{

            },
            methods:{
                getBadge:function(){
                    var that=this;
                    layList.baseGet(layList.Url({a:'get_stair_badge',q:that.where}),function (rem) {
                        that.badge=rem.data;
                    });
                },
                setData:function(item){
                    var that=this;
                    if(item.is_zd==true){
                        that.showtime=true;
                        this.where.data=this.$refs.date_time.innerText;
                    }else{
                        this.showtime=false;
                        this.where.data=item.value;
                    }
                },
                search:function () {
                    this.where.excel=0;
                    this.getBadge();
                    layList.reload(this.where,true);
                },
                refresh:function () {
                    layList.reload();
                    this.getBadge();
                }
            },
            mounted:function () {
                this.getBadge();
                layList.laydate.render({
                    elem:this.$refs.date_time,
                    trigger:'click',
                    eventElem:this.$refs.time,
                    range:true,
                    change:function (value){
                        that.where.data=value;
                    }
                });
            }
        })
    });
</script>


</div>
</body>
</html>
