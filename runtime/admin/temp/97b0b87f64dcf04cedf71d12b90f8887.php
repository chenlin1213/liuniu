<?php /*a:1:{s:93:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\store\store_product_rule\create.php";i:1613695276;}*/ ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href="/system/frame/css/font-awesome.min.css" rel="stylesheet">
    <link href="/system/plug/umeditor/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="/system/plug/umeditor/third-party/jquery.min.js"></script>
    <script type="text/javascript" src="/system/plug/umeditor/third-party/template.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="/system/plug/umeditor/umeditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/system/plug/umeditor/umeditor.min.js"></script>
    <script type="text/javascript" src="/system/plug/umeditor/lang/zh-cn/zh-cn.js"></script>
    <link rel="stylesheet" href="/static/plug/layui/css/layui.css">
    <script src="/static/plug/layui/layui.js"></script>
    <script src="/static/plug/vue/dist/vue.min.js"></script>
    <script src="/static/plug/axios.min.js"></script>
    <style>
        .layui-form-item {
            margin-bottom: 0px;
        }

        .pictrueBox {
            display: inline-block !important;
        }

        .pictrue {
            width: 60px;
            height: 60px;
            border: 1px dotted rgba(0, 0, 0, 0.1);
            margin-right: 15px;
            display: inline-block;
            position: relative;
            cursor: pointer;
        }

        .pictrue img {
            width: 100%;
            height: 100%;
        }

        .upLoad {
            width: 58px;
            height: 58px;
            line-height: 58px;
            border: 1px dotted rgba(0, 0, 0, 0.1);
            border-radius: 4px;
            background: rgba(0, 0, 0, 0.02);
            cursor: pointer;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .rulesBox {
            display: flex;
            flex-wrap: wrap;
            margin-left: 10px;
        }

        .layui-tab-content {
            margin-top: 15px;
        }

        .ml110 {
            margin: 18px 0 4px 110px;
        }

        .rules {
            display: flex;
        }

        .rules-btn-sm {
            height: 30px;
            line-height: 30px;
            font-size: 12px;
            width: 109px;
        }

        .rules-btn-sm input {
            width: 79% !important;
            height: 84% !important;
            padding: 0 10px;
        }

        .ml10 {
            margin-left: 10px !important;
        }

        .ml40 {
            margin-left: 40px !important;
        }

        .closes {
            position: absolute;
            left: 86%;
            top: -18%;
        }

        .red {
            color: red;
        }

        .layui-input-block .layui-video-box {
            width: 22%;
            height: 180px;
            border-radius: 10px;
            background-color: #707070;
            margin-top: 10px;
            position: relative;
            overflow: hidden;
        }

        .layui-input-block .layui-video-box i {
            color: #fff;
            line-height: 180px;
            margin: 0 auto;
            width: 50px;
            height: 50px;
            display: inherit;
            font-size: 50px;
        }

        .layui-input-block .layui-video-box .mark {
            position: absolute;
            width: 100%;
            height: 30px;
            top: 0;
            background-color: rgba(0, 0, 0, .5);
            text-align: center;
        }

        .clearFix:after {
            content: '';
            display: block;
            clear: both;
        }
    </style>
</head>
<body>
<div class="layui-fluid">
    <div class="layui-row layui-col-space15" id="app" v-cloak="">
        <div class="layui-card">
            <div class="layui-card-header">??????????????????</div>
            <div class="layui-card-body clearFix">
                <form class="layui-form" action="">
                    <div class="layui-col-xs12 layui-col-sm12 layui-col-md12">
                        <div class="layui-form-item">
                            <label class="layui-form-label">????????????</label>
                            <div class="layui-input-block">
                                <input type="text" style="width: 80%" v-model="rule_name" name="title"
                                       autocomplete="off"
                                       placeholder="????????????????????????" class="layui-input">
                            </div>
                        </div>
                        <div class="grid-demo grid-demo-bg1" v-for="(item,index) in items">
                            <div class="ml110"><span>{{item.value}}</span><i class="layui-icon"
                                                                             @click="deleteItem(index)">&#x1007;</i>
                            </div>
                            <div class="layui-form-item rules">
                                <label class="layui-form-label"></label>
                                <button type="button" class="layui-btn layui-btn-primary layui-btn-sm"
                                        v-for="(val,inx) in item.detail">
                                    {{val}}
                                    <i class="layui-icon layui-icon-close"
                                       @click="deleteValue(item,inx)"></i>
                                </button>
                                <div class="rules rulesBox">
                                    <div class="rules-btn-sm">
                                        <input type="text" v-model="item.detailValue" name="title"
                                               autocomplete="off" placeholder="?????????">
                                    </div>
                                    <button class="layui-btn layui-btn-sm" type="button"
                                            @click="addDetail(item)">??????
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="grid-demo grid-demo-bg1 rules" style="margin-top: 24px;" v-if="newRule">
                            <div class="layui-form-item layui-form-text rules">
                                <label class="layui-form-label">?????????</label>
                                <div class="rules-btn-sm">
                                    <input type="text" name="title" v-model="formDynamic.attrsName"
                                           autocomplete="off" placeholder="???????????????">
                                </div>
                            </div>
                            <div class="layui-form-item layui-form-text rules">
                                <label class="layui-form-label">????????????</label>
                                <div class="rules-btn-sm">
                                    <input type="text" name="title" v-model="formDynamic.attrsVal"
                                           autocomplete="off" placeholder="??????????????????">
                                </div>
                            </div>
                            <button class="layui-btn layui-btn-sm ml40" type="button"
                                    @click="createAttrName">??????
                            </button>
                            <button class="layui-btn layui-btn-sm ml10" type="button"
                                    @click="newRule = false">??????
                            </button>
                        </div>
                        <div class="grid-demo grid-demo-bg1" style="margin-top: 20px" v-if="newRule == false">
                            <div class="layui-form-item">
                                <label class="layui-form-label"></label>
                                <button class="layui-btn layui-btn-sm" type="button" @click="newRule = true">???????????????
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="layui-col-xs12 layui-col-sm12 layui-col-md12">
                        <div class="grid-demo grid-demo-bg1" style="margin-top: 20px;">
                            <div class="layui-form-item" style="text-align: right;">
                                <label class="layui-form-label"></label>
                                <button class="layui-btn layui-btn-normal" type="button"
                                        @click="handleSubmit">{{id ? '??????' : '??????'}}
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
<script>
    var id = <?php echo htmlentities($id); ?>;
    new Vue({
        el: '#app',
        data: {
            newRule: false,
            rule_name: '',
            items: [],
            // ????????????
            formDynamic: {
                attrsName: '',
                attrsVal: ''
            },
            id: id,

        },
        methods: {
            /**
             * ??????????????????????????????
             * @param item
             * */
            addDetail: function (item) {
                if (!item.detailValue) return false;
                if (item.detail.find(function (val) {
                    if (item.detailValue == val) {
                        return true;
                    }
                })) {
                    return this.showMsg('????????????????????????');
                }
                item.detail.push(item.detailValue);
                item.detailValue = '';
            },
            /**
             * ??????????????????
             * @param index
             * */
            deleteItem: function (index) {
                this.items.splice(index, 1);
            },
            /**
             * ??????
             * */
            showMsg: function (msg, success) {
                layui.use(['layer'], function () {
                    layui.layer.msg(msg, success);
                });
            },
            /**
             * ????????????
             * */
            createAttrName: function () {
                if (this.formDynamic.attrsName && this.formDynamic.attrsVal) {
                    if (this.items.find(function (val) {
                        if (val.value == this.formDynamic.attrsName) {
                            return true;
                        }
                    }.bind(this))) {
                        return this.showMsg('?????????????????????');
                    }
                    this.items.push({
                        value: this.formDynamic.attrsName,
                        detailValue: '',
                        attrHidden: false,
                        detail: [this.formDynamic.attrsVal]
                    });
                    this.formDynamic.attrsName = '';
                    this.formDynamic.attrsVal = '';
                    this.newRule = false;
                } else {
                    return this.showMsg('????????????????????????!');
                }
            },
            /**
             * ?????????????????????
             * @param item ??????????????????
             * @param inx ??????index
             * */
            deleteValue: function (item, inx) {
                if (item.detail.length > 1) {
                    item.detail.splice(inx, 1);
                } else {
                    return this.showMsg('???????????????????????????');
                }
            },
            handleSubmit: function () {
                var that = this;
                if (!this.rule_name) {
                    return this.showMsg('?????????????????????');
                }
                this.requestPost("<?php echo Url('save'); ?>?id=" + this.id, {
                    rule_name: that.rule_name,
                    rule_value: that.items
                }).then(function (res) {
                    return that.showMsg(res.msg, function () {
                        parent.layer.close(parent.layer.getFrameIndex(window.name));
                        if (parent.successFun) {
                            parent.successFun();
                        } else {
                            parent.$(".J_iframe:visible")[0].contentWindow.location.reload();
                        }
                    });
                }).catch(function (res) {
                    return that.showMsg(res.msg);
                });
            },
            requestPost: function (url, data) {
                return new Promise(function (resolve, reject) {
                    axios.post(url, data).then(function (res) {
                        if (res.status == 200 && res.data.code == 200) {
                            resolve(res.data)
                        } else {
                            reject(res.data);
                        }
                    }).catch(function (err) {
                        reject({msg: err})
                    });
                })
            },
            getRule: function () {
                if (!this.id) {
                    return;
                }
                var that = this;
                this.requestPost("<?php echo Url('read'); ?>", {id: this.id}).then(function (res) {
                    that.$set(that,'items',res.data.rule_value);
                    that.rule_name = res.data.rule_name;
                });
            }
        },
        mounted: function () {
            this.getRule();
        }
    });
</script>