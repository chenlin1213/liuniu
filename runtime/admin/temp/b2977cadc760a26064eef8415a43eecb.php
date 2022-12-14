<?php /*a:5:{s:80:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\wechat\reply\index.php";i:1613695276;s:78:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\container.php";i:1613695276;s:79:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\frame_head.php";i:1613695276;s:74:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\style.php";i:1613695276;s:81:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\public\frame_footer.php";i:1613695276;}*/ ?>
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
    
<link rel="stylesheet" type="text/css" href="/system/css/main.css" />
<script src="/system/frame/js/bootstrap.min.js"></script>
<script src="/system/frame/js/content.min.js"></script>
<script src="/system/frame/js/ajaxfileupload.js"></script>
<script src="/static/plug/moment.js"></script>

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

<div id="app" class="row">
    <div class="col-sm-12">
        <div class="wechat-reply-wrapper">
            <div class="ibox-title"><p>{{msg}}</p></div>
            <div class="ibox-content clearfix">
                <div class="view-wrapper col-sm-4">
                    <div class="mobile-header">?????????</div>
                    <section class="view-body" style="overflow:scroll;">
                        <div class="time-wrapper"><span class="time">9:36</span></div>
                        <div class="view-item text-box clearfix" :class="{show:type=='text'}">
                            <div class="avatar fl"><img src="/system/images/head.gif" /></div>
                            <div class="box-content fl">
                                {{dataGroup.text.content}}
                            </div>
                        </div>

                        <div class="view-item news-box" :class="{show:type=='news'}" v-if="dataGroup.news.length >0">
                            <div class="vn-content" v-if="dataGroup.news.length ==1">
                                <div class="vn-title">{{dataGroup.news[0].title}}</div>
                                <div class="vn-time">{{dataGroup.news[0].date}}</div>
                                <div class="vn-picture" :style="{backgroundImage: 'url('+dataGroup.news[0].image+')'}"></div>
                                <div class="vn-picture-info">{{dataGroup.news[0].description}}</div>
                                <div class="vn-more">
                                    <a :href="dataGroup.news[0].url">????????????</a>
                                </div>
                            </div>
                            <div class="vn-content" v-else>
                                <div class="con-item-box">
                                    <div class="vn-picture" :style="{backgroundImage: 'url('+dataGroup.news[0].image+')'}"></div>
                                    <div class="first-title">{{dataGroup.news[0].title}}</div>
                                </div>
                                <div class="con-item-list clearfix" v-for="(newinfos,index) in dataGroup.news" v-if="index>0">
                                    <div class="list-tit-info fl">{{newinfos.title}}</div>
                                    <div class="list-pic fr" :style="{backgroundImage: 'url('+newinfos.image+')'}"></div>
                                </div>
                            </div>
                        </div>

                        <div class="view-item text-box clearfix" :class="{show:type=='image'}">
                            <div class="avatar fl"><img src="/system/images/head.gif" /></div>
                            <div class="box-content fl">
                                <img class="picbox" :src="dataGroup.image.src" alt="" />
                            </div>
                        </div>

                       <?php /*   <div class="view-item music-box clearfix" :class="{show:type=='voice'}">
                              <div class="avatar fl"><img src="/system/images/head.gif" /></div>
                              <div class="box-content fl">
                                  <p>{{musicTit}}</p>
                                  <p>{{musicInfo}}</p>
                                  <div class="music-icon"><i class="fa fa-music"></i></div>
                              </div>
                          </div>  */ /*  <div class="view-item video-box" :class="{show:type=='video'}">
                              <div class="vn-content">
                                  <div class="vn-title">{{videoTit}}</div>
                                  <div class="vn-time">11???11???</div>
                                  <div class="video-content">
                                      <video src="" width="100%" controls="" preload=""></video>
                                  </div>
                              </div>
                              <div class="vn-more">{{videoInfo}}</div>
                          </div>  */ ?>
                    </section>
                </div>
                <div class="control-wrapper col-sm-8">
                    <section>
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="control-title">{{msg}}</div>
                            <div class="control-body">
                                <div class="form-group clearfix">
                                    <label class="col-sm-2 control-label tips" for="">????????????</label>
                                    <div class="group-item col-sm-10">
                                        <div class="radio i-checks" style="display:inline;margin-left: 16px;">
                                            <label class="" style="padding-left: 0;">
                                                    <input style="position: relative;top: 1px;left: 3px;" checked="checked" v-model="status" type="radio" value="1" name="status">
                                                ??????</label>
                                            </div>
                                        <div class="radio i-checks" style="display:inline;margin-left: 32px;">
                                            <label class="" style="padding-left: 0;">
                                                    <input style="position: relative;top: 1px;left: 3px;" type="radio" value="0" v-model="status" name="status">
                                                ??????
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group clearfix">
                                    <label class="col-sm-2 tips" for="">????????????</label>
                                    <div class="col-sm-10 group-item">
                                        <select class="form-control m-b" v-model="type" name="account">
                                            <option value="text">????????????</option>
                                            <option value="image">????????????</option>
                                            <option value="news">????????????</option>
                                            <option value="voice">????????????</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="control-main">
                                    <!-- ?????? -->
                                    <div class="control-item control-main-txt" :class="{show:type=='text'}">
                                        <div class="form-group clearfix">
                                            <label class="col-sm-2 tips" for="">????????????</label>
                                            <div class="col-sm-10 group-item">
                                                <textarea v-model="dataGroup.text.content" name="" id="" cols="30" rows="10" placeholder="???????????????"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ?????? -->
                                    <div class="control-item control-main-news" :class="{show:type=='news'}">
                                        <div class="form-group clearfix">
                                            <label class="col-sm-2 tips" for="">????????????</label>
                                            <div class="col-sm-10 group-item" @click="selectNews" style="cursor: pointer;"><span>??????????????????</span></div>
                                        </div>
                                    </div>
                                    <!-- ?????? -->
                                    <div class="control-item control-main-picture" :class="{show:type=='image'}">
                                        <div class="form-group clearfix">
                                            <label class="col-sm-2 tips" for="">????????????</label>
                                            <div class="col-sm-10 group-item">
                                                <input v-model="dataGroup.image.src" class="form-control" readonly type="text" placeholder="???????????????"/>
                                                <span id="flag" class="file-btn" @click="uploadImg">??????</span>
                                            </div>
                                        </div>
                                        <div class="tips-info">
                                            <span>????????????2Mb?????????bmp/png/jpeg/jpg/gif??????</span>
                                            <div class="upload-img"><img src="" alt="" /><span>????????????</span></div>
                                        </div>
                                    </div>
                                    <!-- ?????? -->
                                    <div class="control-item control-main-music" :class="{show:type=='voice'}">
                                        <div class="form-group clearfix">
                                            <label class="col-sm-2 tips" for="">????????????</label>
                                            <div class="col-sm-10 group-item">
                                                <input class="form-control" type="text" readonly placeholder="????????????????????????????????????URL??????" v-model="dataGroup.voice.src"/>
                                                <span class="file-btn" @click="uploadMusic">??????</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ?????? -->
                                    <div class="control-item control-main-video" :class="{show:type=='video'}">
                                        <div class="form-group clearfix">
                                            <label class="col-sm-2 tips" for="">????????????</label>
                                            <div class="col-sm-10 group-item">
                                                <input class="form-control" type="text" placeholder="????????????"/>
                                            </div>
                                        </div>
                                        <div class="form-group clearfix">
                                            <label class="col-sm-2 tips" for="">????????????</label>
                                            <div class="col-sm-10 group-item">
                                                <input class="form-control" type="text" placeholder="????????????????????????????????????URL??????"/>
                                                <span class="file-btn">??????</span>
                                            </div>
                                        </div>
                                        <div class="tips-info">
                                            <p>????????????10MB????????????MP4??????</p>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 tips" for="">????????????</label>
                                            <div class="col-sm-10 group-item">
                                                <textarea name="" id="" cols="30" rows="10" placeholder="???????????????"></textarea>
                                            </div>
                                        </div>
                                        <input id="file" type="file" name="file" style="display: none;" />
                                    </div>
                                </div>
                            </div>
                            <div style="text-align: center;"><button type="button" class="btn btn-w-m btn-primary" @click="submit">??????</button></div>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </div>
</div>



<script type="text/javascript">
    $eb = parent._mpApi, $upload = $('#file');
    $eb.mpFrame.start(function (Vue) {
        var $http = $eb.axios;
        const vm = new Vue({
            data: {
                status: 1,
                msg: '',
                type: 'text',
                textBox: '',
                pic: '',
                key:'',
                dataGroup:{
                    text:{
                        content:''
                    },
                    image:{
                        src:''
                    },
                    voice:{
                        src:''
                    },
                    news:[]
                },
                uploadColl: function () {
                },
                uploadLink: ''
            },
            methods: {
                transfer:function (str){
                    var s = "";
                    if (str.length === 0) { return "";}
                    s = str.replace(/&amp;/g, "&");
                    s = s.replace(/&lt;/g, "<");
                    s = s.replace(/&gt;/g, ">");
                    s = s.replace(/&nbsp;/g, " ");
                    s = s.replace(/&#39;/g, "\'");
                    s = s.replace(/&quot;/g, "\"");
                    return s;
                },
                submit: function(){
                    if(!this.check()) return false;
                    $eb.axios.post("<?php echo Url('save',array('key'=>$key)); ?>",{key:this.key,status:this.status,data:this.dataGroup[this.type],type:this.type}).then(function(res){
                        if(res.status == 200 && res.data.code == 200){
                            $eb.message('success','????????????!');
                        }
                        else
                            $eb.message('error',res.data.msg || '????????????!');
                    }).catch(this.returnError);
                },
                check: function(){
                    var dataGroup = this.dataGroup;
                    switch (this.type){
                        case 'text':
                            if(dataGroup.text.content == '')
                                return this.returnError('???????????????????????????');
                            break;
                        case 'image':
                            if(dataGroup.image.src == '')
                                return this.returnError('???????????????');
                            break;
                        case 'news':
                            if(dataGroup.news.length < 1)
                                return this.returnError('?????????????????????');
                            break;
                        case 'voice':
                            if(dataGroup.voice.src == '')
                                return this.returnError('???????????????');
                            break;
                    }
                    return true;
                },
                returnError:function(err){
                    $eb.message('error',err);
                    return false;
                },
                uploadImg: function () {
                    var vm = this;
                    this.uploadLink = "<?php echo Url('upload_img'); ?>";
                    $('#file').attr('accept','image/*');
                    this.uploadColl = function(pic){
                        vm.dataGroup.image.src = vm.transfer(pic);
                    };
                    $('#file').trigger('click');
                },
                uploadMusic:function(){
                    var vm = this;
                    this.uploadLink = "<?php echo Url('upload_file'); ?>";
                    $('#file').attr('accept','audio/*');
                    this.uploadColl = function(pic){
                        vm.dataGroup.voice.src = pic;
                    };
                    $('#file').trigger('click');
                },
                upload: function () {
                    var vm = this;
                    $('#file').on('change', function () {
                        $.ajaxFileUpload({
                            url: vm.uploadLink,
                            type: 'post',
                            secureuri: false, //???????????????false
                            data:{'file':'file'},
                            fileElementId: 'file', // ???????????????id???name?????????
                            dataType: 'json', //?????????????????????????????????json???application/json
                            success: function (data, status) {
                                if(data.code == 200){
                                    vm.uploadColl && vm.uploadColl(data.data);
                                    $eb.message('success','????????????!');
                                }else{
                                    $eb.message('error',data.msg);
                                }
                                vm.upload();
                            },
                            error: function (data, status, e) {
                                $eb.message('error','????????????!');
                                vm.upload();
                            }
                        });
                    });
                },
                selectNews:function(){
                    var vm = this,i;
                    parent._selectNews$eb = function(data){
                        var newsList = [];
                        data.new.map((news)=>{
                            newsList.push({
                                title:news.title,
                                description:news.synopsis,
                                url:news.url,
                                image:news.image_input,
                                date:moment(news.add_time*1000).format('M???D???'),
                                id:news.id
                            });
                        });
                        vm.dataGroup.news = newsList;
                        delete parent._selectNews$eb;
                        $eb.closeModalFrame(i);
                    };
                    i = $eb.createModalFrame('??????????????????',"<?php echo Url('admin/wechat.wechatNewsCategory/select',['callback'=>'_selectNews$eb','type'=>$type]); ?>",{w:975});
                }
            },
            mounted: function () {
                window.vm = this;
                this.upload();
                this.key = "<?php echo htmlentities($key); ?>"
                this.msg = "<?php echo htmlentities($title); ?>";
                var res= <?php echo json_encode($replay_arr); ?>;
                window.vm.type = res.type;
                window.vm.status = res.status;
                if(res.type == 'image') {
                    window.vm.dataGroup.image.src = res.data.src;
                }else if(res.type == 'text'){
                    window.vm.dataGroup.text.content = res.data.content;
                }else if(res.type == 'voice'){
                    window.vm.dataGroup.voice.src = res.data.src;
                }else if(res.type == 'news'){
                    window.vm.dataGroup.news = res.data;
                }
                if(window.vm.used_key){
                    window.vm.keyword = res.key;
                }
            }
        });
        vm.$mount(document.getElementById('app'));
    });
</script>


</div>
</body>
</html>
