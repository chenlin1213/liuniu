<?php /*a:5:{s:86:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\agent\agent_manage\index.php";i:1613695276;s:78:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\container.php";i:1613695276;s:79:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\frame_head.php";i:1613695276;s:74:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\style.php";i:1613695276;s:81:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\frame_footer.php";i:1613695276;}*/ ?>
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
    
<style>
    .option {
        width: 200px;
        padding: 10px;
        background-color: #eeeeee;
        border-radius: 10px;
        text-align: center;
        display: none;
    }

    .option .layui-box p {
        margin: 5px 0;
        background-color: #ffffff;
        color: #0092DC;
        padding: 8px;
        cursor: pointer
    }

    .option .layui-box p.on {
        color: #eeeeee
    }
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

<div class="layui-fluid">
    <div class="layui-row layui-col-space15" id="app">
        <!--????????????-->
        <div class="layui-col-md12">
            <div class="layui-card">
                <div class="layui-card-header">????????????</div>
                <div class="layui-card-body">
                    <div class="layui-carousel layadmin-carousel layadmin-shortcut" lay-anim="" lay-indicator="inside"
                         lay-arrow="none" style="background:none">
                        <div class="layui-card-body">
                            <div class="layui-row layui-col-space10 layui-form-item">
                                <div class="layui-col-lg12">
                                    <label class="layui-form-label">????????????:</label>
                                    <div class="layui-input-block" data-type="data" v-cloak="">
                                        <button class="layui-btn layui-btn-sm" type="button" v-for="item in dataList"
                                                @click="setData(item)"
                                                :class="{'layui-btn-primary':where.data!=item.value}">{{item.name}}
                                        </button>
                                        <button class="layui-btn layui-btn-sm" type="button" ref="time"
                                                @click="setData({value:'zd',is_zd:true})"
                                                :class="{'layui-btn-primary':where.data!='zd'}">?????????
                                        </button>
                                        <button type="button" class="layui-btn layui-btn-sm layui-btn-primary"
                                                v-show="showtime==true" ref="date_time"><?php echo htmlentities($year['0']); ?> - <?php echo htmlentities($year['1']); ?>
                                        </button>
                                    </div>
                                </div>
                                <div class="layui-col-lg12">
                                    <label class="layui-form-label">????????????:</label>
                                    <div class="layui-input-block">
                                        <input type="text" name="nickname" style="width: 50%" v-model="where.nickname"
                                               placeholder="???????????????????????????UID" class="layui-input">
                                    </div>
                                </div>
                                <div class="layui-col-lg12">
                                    <div class="layui-input-block">
                                        <button @click="search" type="button"
                                                class="layui-btn layui-btn-sm layui-btn-normal">
                                            <i class="layui-icon layui-icon-search"></i>??????
                                        </button>
                                        <button @click="excel" type="button"
                                                class="layui-btn layui-btn-warm layui-btn-sm export" type="button">
                                            <i class="fa fa-floppy-o" style="margin-right: 3px;"></i>??????
                                        </button>
                                        <button @click="refresh" type="reset"
                                                class="layui-btn layui-btn-primary layui-btn-sm">
                                            <i class="layui-icon layui-icon-refresh"></i>??????
                                        </button>
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
        <div :class="item.col!=undefined ? 'layui-col-sm'+item.col+' '+'layui-col-md'+item.col:'layui-col-sm6 layui-col-md3'"
             v-for="item in badge" v-cloak="" v-if="item.count > 0">
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
                    <!--                    <div class="layui-btn-container">-->
                    <!--                        <div class="layui-btn-group conrelTable">-->
                    <!--                            <button class="layui-btn layui-btn-sm layui-btn-normal" type="button" data-type="refresh"><i class="layui-icon layui-icon-refresh" ></i>??????</button>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <table class="layui-hide" id="userList" lay-filter="userList"></table>
                    <script type="text/html" id="headimgurl">
                        <img style="cursor: pointer" lay-event='open_image' src="{{d.headimgurl}}">
                    </script>
                    <script type="text/html" id="act">
                        <button type="button" class="layui-btn layui-btn-xs" onclick="dropdown(this)">?????? <span
                                    class="caret"></span></button>
                        <ul class="layui-nav-child layui-anim layui-anim-upbit">
                            <li>
                                <a href="javascript:void(0);" class=""
                                   onclick="$eb.createModalFrame(this.innerText,'<?php echo Url('stair'); ?>?uid={{d.uid}}')">
                                    <i class="fa fa-list-alt"></i> ?????????????????????
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class=""
                                   onclick="$eb.createModalFrame(this.innerText,'<?php echo Url('stair_order'); ?>?uid={{d.uid}}')">
                                    <i class="fa fa-reorder"></i> ??????????????????
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" lay-event='look_code'>
                                    <i class="fa fa-file-image-o"></i> ????????????</a>
                            </li>
                            {{# if(d.spread_uid){ }}
                            <li>
                                <a href="javascript:void(0);" lay-event='delete_spread'>
                                    <i class="fa fa-unlock"></i> ????????????
                                </a>
                            </li>
                            {{# } }}
                        </ul>
                    </script>
                </div>
                <!--????????????-->
                <script type="text/html" id="userinfo">
                    ?????????{{d.nickname==null ? '????????????':d.nickname}}
                    <br>?????????{{d.real_name==null ? '????????????':d.real_name}}
                    <br>?????????{{d.phone==null ? '????????????':d.phone}}
                </script>
                <div class="option">
                    <div class="layui-box">
                        <input type="hidden" name="uid" id="uid">
                        <p data-action="routine_code" data-type="wx">????????????????????????</p>
                        <p data-action="wechant_code" data-type="wx">????????????????????????</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<script src="/system/js/layuiList.js"></script>



<script>
    var action = {
        refresh: function () {
            layList.reload();
        },
        delete_spread: function () {
            var ids = layList.getCheckData().getIds('uid');
            if (ids.length) {
                $eb.$swal('delete', function () {
                    $eb.axios.post(layList.U({a: 'delete_promoter'}), {uids: ids}).then(function (res) {
                        if (res.status == 200 && res.data.code == 200) {
                            $eb.$swal('success', res.data.msg);
                            layList.reload();
                        } else
                            return Promise.reject(res.data.msg || '????????????')
                    }).catch(function (err) {
                        $eb.$swal('error', err);
                    });
                }, {
                    title: '????????????????????????????????????????????????????????????',
                    text: '?????????????????????',
                    confirm: '??????????????????'
                })
            } else {
                layList.msg('?????????????????????????????????');
            }
        },
    };
    layList.form.render();
    layList.tableList('userList', "<?php echo Url('get_spread_list'); ?>", function () {
        return [
            {type: 'checkbox'},
            {field: 'uid', title: 'UID', sort: true, width: '5%'},
            {field: 'headimgurl', title: '??????', templet: '#headimgurl'},
            {field: 'nickname', title: '????????????', templet: '#userinfo', width: '12%'},
            {field: 'broken_commission', title: '????????????'},
            {field: 'spread_count', title: '??????????????????', sort: true},
            {field: 'order_count', title: '????????????'},
            {field: 'order_price', title: '????????????', sort: true},
            {field: 'brokerage_money', title: '????????????', sort: true},
            {field: 'extract_count_price', title: '???????????????', sort: true},
            {field: 'extract_count_num', title: '????????????'},
            {field: 'new_money', title: '???????????????', sort: true},
            {field: 'spread_name', title: '???????????????', sort: true},
            {field: 'right', title: '??????', toolbar: '#act', width: '5%'},
        ];
    });
    layList.date({elem: '#start_time', theme: '#393D49', type: 'datetime'});
    layList.date({elem: '#end_time', theme: '#393D49', type: 'datetime'});
    layList.search('search', function (where) {
        if (where.start_time != '' && where.end_time == '') return layList.msg('?????????????????????')
        if (where.end_time != '' && where.start_time == '') return layList.msg('?????????????????????')
        console.log(where);
        layList.reload(where, true);
    });
    layList.search('export', function (where) {
        where.excel = 1;
        location.href = layList.U({a: 'get_spread_list', q: where});
    })
    $('.conrelTable').find('button').each(function () {
        var type = $(this).data('type');
        $(this).on('click', function () {
            action[type] && action[type]();
        })
    })
    $('.option .layui-box').find('p').each(function () {
        $(this).on('click', function () {
            var type = $(this).data('action'), uid = $('#uid').val();
            layList.baseGet(layList.U({a: 'look_code', q: {action: type, uid: uid}}), function (res) {
                if ($eb) {
                    $eb.openImage(res.data.code_src);
                } else {
                    layList.layer.open({
                        type: 1,
                        title: false,
                        closeBtn: 0,
                        shadeClose: true,
                        content: '<img src="' + res.data.code_src + '" style="display: block;width: 100%;" />'
                    });
                }
            }, function (res) {
                layList.msg(res.msg);
            });
        });
    });
    //?????????
    $(document).click(function (e) {
        $('.layui-nav-child').hide();
    })

    function dropdown(that) {
        var oEvent = arguments.callee.caller.arguments[0] || event;
        oEvent.stopPropagation();
        var offset = $(that).offset();
        var top = offset.top - $(window).scrollTop();
        var index = $(that).parents('tr').data('index');
        $('.layui-nav-child').each(function (key) {
            if (key != index) {
                $(this).hide();
            }
        })
        if ($(document).height() < top + $(that).next('ul').height()) {
            $(that).next('ul').css({
                'padding': 10,
                'top': -($(that).parent('td').height() / 2 + $(that).height() + $(that).next('ul').height() / 2),
                'min-width': 'inherit',
                'left': -64,
                'position': 'absolute'
            }).toggle();
        } else {
            $(that).next('ul').css({
                'padding': 10,
                'left': -64,
                'top': $(that).parent('td').height() / 2 + $(that).height(),
                'min-width': 'inherit',
                'position': 'absolute'
            }).toggle();
        }
    }

    layList.tool(function (event, data, obj) {
        switch (event) {
            case 'delete_spread':
                var url = layList.U({a: 'empty_spread', q: {uid: data.uid}});
                $eb.$swal('delete', function () {
                    $eb.axios.get(url).then(function (res) {
                        if (res.status == 200 && res.data.code == 200) {
                            $eb.$swal('success', res.data.msg)
                        } else
                            return Promise.reject(res.data.msg || '????????????')
                    }).catch(function (err) {
                        $eb.$swal('error', err);
                    });
                }, {
                    title: '???????????????' + data.nickname + '??????????????????????????????????????????',
                    text: '?????????????????????',
                    confirm: '??????????????????'
                })
                break;
            case 'look_code':
                $('#uid').val(data.uid);
                var index = layList.layer.open({
                    type: 1,
                    area: ['200px', 'auto'], //??????
                    content: $('.option'),
                    title: false,
                    cancel: function () {
                        $('.option').hide();
                        $('#uid').val('');
                    }
                });
                break;
            case 'open_image':
                if ($eb)
                    $eb.openImage(data.headimgurl);
                else
                    layList.layer.open({
                        type: 1,
                        title: false,
                        closeBtn: 0,
                        shadeClose: true,
                        content: '<img src="' + data.headimgurl + '" style="display: block;width: 100%;" />'
                    });
                break;

        }
    });
    require(['vue'], function (Vue) {
        new Vue({
            el: "#app",
            data: {
                badge: [],
                dataList: [
                    {name: '??????', value: ''},
                    {name: '??????', value: 'today'},
                    {name: '??????', value: 'yesterday'},
                    {name: '??????7???', value: 'lately7'},
                    {name: '??????30???', value: 'lately30'},
                    {name: '??????', value: 'month'},
                    {name: '??????', value: 'year'},
                ],
                where: {
                    data: '',
                    nickname: '',
                    excel: 0,
                },
                showtime: false,
            },
            watch: {},
            methods: {
                getBadge: function () {
                    var that = this;
                    layList.basePost(layList.Url({a: 'get_badge'}), this.where, function (rem) {
                        that.badge = rem.data;
                    });
                },
                setData: function (item) {
                    var that = this;
                    if (item.is_zd == true) {
                        that.showtime = true;
                        this.where.data = this.$refs.date_time.innerText;
                    } else {
                        this.showtime = false;
                        this.where.data = item.value;
                    }
                },
                search: function () {
                    this.where.excel = 0;
                    this.getBadge();
                    console.log(this.where);
                    layList.reload(this.where, true);
                },
                excel: function () {
                    this.where.excel = 1;
                    location.href = layList.U({a: 'get_spread_list', q: this.where});
                },
                refresh: function () {
                    layList.reload();
                    this.getBadge();
                }
            },
            mounted: function () {
                this.getBadge();
                var that = this;
                layList.laydate.render({
                    elem: this.$refs.date_time,
                    trigger: 'click',
                    eventElem: this.$refs.time,
                    range: true,
                    change: function (value) {
                        that.where.data = value;
                    }
                });
            }
        })
    });
</script>


</div>
</body>
</html>
