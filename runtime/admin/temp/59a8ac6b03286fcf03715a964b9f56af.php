<?php /*a:3:{s:85:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\system\system_store\add.php";i:1613695276;s:73:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\head.php";i:1613695276;s:74:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\style.php";i:1613695276;}*/ ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
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

    <link href="/system/frame/css/bootstrap.min.css?v=3.4.0" rel="stylesheet">
    <link href="/system/frame/css/style.min.css?v=3.0.0" rel="stylesheet">
    <title><?php echo htmlentities((isset($title) && ($title !== '')?$title:'')); ?></title>
    <style></style>
</head>
<body>
<div class="wrapper wrapper-content">
    <div class="row">
        <div class="col-sm-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>????????????</h5>
                </div>
                <div id="store-attr" class="mp-form" v-cloak="">
                    <i-Form :label-width="80" style="width: 100%">
                        <template>
                            <Alert type="warning">?????????????????????????????????????????????</Alert>
                            <Form-Item>
                                <Row>
                                    <i-Col span="13">
                                        <span>???????????????</span>
                                        <i-Input placeholder="????????????" v-model="form.name" style="width: 80%" type="text"></i-Input>
                                    </i-Col>
                                </Row>
                            </Form-Item>
                            <Form-Item>
                                <Row>
                                    <i-Col span="13">
                                        <span>???????????????</span>
                                        <i-Input placeholder="????????????" v-model="form.introduction" style="width: 80%" type="text"></i-Input>
                                    </i-Col>
                                </Row>
                            </Form-Item>
                            <Form-Item>
                                <Row>
                                    <i-Col span="13">
                                        <span>??????????????????</span>
                                        <i-Input placeholder="???????????????" v-model="form.phone" style="width: 80%" type="text"></i-Input>
                                    </i-Col>
                                </Row>
                            </Form-Item>
                            <Form-Item>
                                <Row>
                                    <i-Col span="13">
                                        <span>???????????????</span>
                                        <Cascader :data="addresData" :value.sync="form.address" @on-change="handleChange" style="width: 80%;display: inline-block;"></Cascader>
                                    </i-Col>
                                </Row>
                            </Form-Item>
                            <Form-Item>
                                <Row>
                                    <i-Col span="13">
                                        <span>???????????????</span>
                                        <i-Input placeholder="????????????" v-model="form.detailed_address" style="width: 80%" type="text"></i-Input>
                                    </i-Col>
                                </Row>
                            </Form-Item>
<!--                            <Form-Item>-->
<!--                                <Row>-->
<!--                                    <i-Col span="13">-->
<!--                                        <span>???????????????</span>-->
<!--                                        <Date-picker type="daterange" @on-change="changeValidTime" placeholder="????????????" :value="form.valid_time"></Date-picker>-->
<!--                                    </i-Col>-->
<!--                                </Row>-->
<!--                            </Form-Item>-->
                            <Form-Item>
                                <Row>
                                    <i-Col span="13">
                                        <span>???????????????</span>
                                        <Time-picker type="timerange" @on-change="changeDayTime" placement="bottom-end" :value="form.day_time" placeholder="????????????"></Time-picker>
                                    </i-Col>
                                </Row>
                            </Form-Item>
                            <Form-Item>
                                <Row>
                                    <i-Col span="13">
                                        <span>??????logo???</span>
                                        <div class="demo-upload-list" v-if="form.image">
                                            <template>
                                                <img :src="form.image">
                                                <div class="demo-upload-list-cover">
                                                    <Icon type="ios-eye-outline" @click="visible = true "></Icon>
                                                    <Icon type="ios-trash-outline" @click="form.image=''"></Icon>
                                                </div>
                                            </template>
                                        </div>
                                        <div class="ivu-upload" style="display: inline-block; width: 58px;" @click="openWindows('????????????','<?php echo Url('widget.images/index',['fodder'=>'image']); ?>',{w:900,h:550})" v-if="!form.image">
                                            <div class="ivu-upload ivu-upload-drag">
                                                <div style="width: 58px; height: 58px; line-height: 58px;">
                                                    <i class="ivu-icon ivu-icon-camera" style="font-size: 20px;"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <Modal title="????????????" :visible.sync="visible">
                                            <img :src="form.image" v-if="visible" style="width: 100%">
                                        </Modal>
                                    </i-Col>
                                </Row>
                            </Form-Item>
                            <Form-Item>
                                <Row>
                                    <i-Col span="13">
                                        <span style="float: left">????????????</span>
                                        <Tooltip content="???????????????????????????????????????">
                                            <i-Input placeholder="?????????" v-model="form.latlng" :readonly="true" style="width: 80%" >
                                                <span slot="append" @click="openWindows('????????????','<?php echo Url('select_address'); ?>',{w:400,h:700})" style="cursor:pointer">????????????</span>
                                            </i-Input>
                                        </Tooltip>
                                    </i-Col>
                                </Row>
                            </Form-Item>
                        </template>
                        <Form-Item>
                            <Row>
                                <i-Col span="8" offset="6">
                                    <i-Button type="primary" @click="submit">??????</i-Button>
                                </i-Col>
                            </Row>
                        </Form-Item>
                    </i-Form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="/static/plug/city.js"></script>
<script>
    var storeData=<?php echo json_encode($store); ?>;
    mpFrame.start(function(Vue) {
        $.each(city,function (key,item) {
            city[key].value = item.label;
            if(item.children && item.children.length){
                $.each(item.children,function (i,v) {
                    city[key].children[i].value=v.label;
                    if(v.children && v.children.length){
                        $.each(v.children,function (k,val) {
                            city[key].children[i].children[k].value=val.label;
                        });
                    }
                });
            }
        });
        new Vue({
            data:function() {
                return {
                    id:storeData.id || 0,
                    addresData:city,
                    form:{
                        name:storeData.name || '',
                        introduction:storeData.introduction || '',
                        phone:storeData.phone || '',
                        address:storeData.address || [],
                        image:storeData.image || '',
                        detailed_address:storeData.detailed_address || '',
                        latlng:storeData.latlng || '',
                        valid_time:storeData.valid_time || [],
                        day_time:storeData.day_time || [],
                    },
                    visible:false,
                }
            },
            methods:{
                changeDayTime:function(date){
                    this.$set(this.form,'day_time',date);
                },
                changeValidTime:function(date){
                    this.$set(this.form,'valid_time',date);
                },
                createFrame:function(title,src,opt){
                    opt === undefined && (opt = {});
                    var h = parent.document.body.clientHeight - 100;
                    return layer.open({
                        type: 2,
                        title:title,
                        area: [(opt.w || 700)+'px', (opt.h || h)+'px'],
                        fixed: false, //?????????
                        maxmin: true,
                        moveOut:false,//true  ??????????????????  false ??????????????????
                        anim:5,//???????????? isOutAnim bool ????????????
                        offset:'auto',//['100px','100px'],//'auto',//????????????  ['100px','100px'] t[ ??? ???]
                        shade:0,//??????
                        resize:true,//??????????????????
                        content: src,//??????
                        move:'.layui-layer-title'
                    });
                },
                handleChange:function(value,selectedData){
                    var that = this;
                    that.form.address = [];
                    $.each(selectedData,function (key,item) {
                        that.form.address.push(item.label);
                    });
                    that.$set(that.form,'address',that.form.address);
                },
                openWindows:function(title,url,opt){
                    return this.createFrame(title,url,opt);
                },
                changeIMG:function(name,url){
                    this.form[name]=url;
                },
                isPhone:function(test){
                    var reg = /^1[3456789]\d{9}$/;
                    return reg.test(test);
                },
                submit:function () {
                    var that = this;
                    if(!that.form.name) return  $eb.message('error','????????????????????????');
                    if(!that.form.phone) return  $eb.message('error','?????????????????????');
                    if(!that.isPhone(that.form.phone)) return  $eb.message('error','??????????????????????????????');
                    if(!that.form.address) return  $eb.message('error','?????????????????????');
                    if(!that.form.detailed_address) return  $eb.message('error','???????????????????????????');
                    if(!that.form.image) return  $eb.message('error','???????????????logo');
                    if(!that.form.valid_time) return  $eb.message('error','?????????????????????');
                    if(!that.form.day_time) return  $eb.message('error','???????????????????????????');
                    if(!that.form.latlng) return  $eb.message('error','???????????????????????????');
                    var index = layer.load(1, {
                        shade: [0.5,'#fff']
                    });
                    $eb.axios.post('<?php echo Url("save"); ?>'+(that.id ? '?id='+that.id : ''),that.form).then(function (res) {
                        layer.close(index);
                        layer.msg(res.data.msg);
                        if(res.data.data.id) that.id=res.data.data.id;
                    }).catch(function (err) {
                        console.log(err);
                        layer.close(index);
                    })
                },
                selectAdderss:function (data) {
                    //lat ?????? lng ??????
                    this.form.latlng=data.latlng.lat+','+data.latlng.lng;
                }
            },
            mounted:function () {
                window.changeIMG=this.changeIMG;
                window.selectAdderss=this.selectAdderss;
            }
        }).$mount(document.getElementById('store-attr'))
    })
</script>