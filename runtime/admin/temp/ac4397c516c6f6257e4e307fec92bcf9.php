<?php /*a:1:{s:88:"F:\phpStudy\phpstudy_pro\WWW\projectone.cn\app\admin\view\store\store_product\create.php";i:1648805975;}*/ ?>
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
    <script src="/system/module/widget/aliyun-oss-sdk-4.4.4.min.js"></script>
    <script src="/system/module/widget/cos-js-sdk-v5.min.js"></script>
    <script src="/system/module/widget/qiniu-js-sdk-2.5.5.js"></script>
    <script src="/system/module/widget/plupload.full.min.js"></script>
    <script src="/system/module/widget/videoUpload.js"></script>
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

        .store_box {
            display: flex;
        }

        .info {
            color: #c9c9c9;
            padding-left: 10px;
            line-height: 30px;
        }
    </style>
</head>
<body>
<div class="layui-fluid">
    <div class="layui-row layui-col-space15" id="app" v-cloak="">
        <div class="layui-card">
            <div class="layui-card-header">
                <span class="">{{id ? '????????????': '????????????' }}</span>
                <button style="margin-left: 20px" type="button" class="layui-btn layui-btn-primary layui-btn-xs"
                        @click="goBack">????????????
                </button>
            </div>
            <div class="layui-card-body">
                <form class="layui-form" action="" v-cloak="">
                    <div class="layui-tab layui-tab-brief" lay-filter="docTabBrief">
                        <ul class="layui-tab-title">
                            <li class="layui-this" lay-id='1'>????????????</li>
                            <li lay-id='2'>????????????</li>
                            <li lay-id='3'>????????????</li>
                        </ul>
                        <div class="layui-tab-content">
                            <div class="layui-tab-item layui-show">
                                <div class="layui-row layui-col-space15">
                                    <div class="layui-col-xs12 layui-col-sm12 layui-col-md12">
                                        <div class="grid-demo grid-demo-bg1">
                                            <div class="layui-form-item">
                                                <label class="layui-form-label">????????????<i class="red">*</i></label>
                                                <div class="layui-input-block" id="cate_id">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="layui-col-xs12 layui-col-sm12 layui-col-md12">
                                        <div class="grid-demo grid-demo-bg1">
                                            <div class="layui-form-item">
                                                <label class="layui-form-label">????????????<i class="red">*</i></label>
                                                <div class="layui-input-block">
                                                    <input type="text" name="store_name" lay-verify="title"
                                                           autocomplete="off"
                                                           placeholder="?????????????????????" class="layui-input"
                                                           v-model="formData.store_name" maxlength="100">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="layui-col-xs12 layui-col-sm12 layui-col-md12">
                                        <div class="grid-demo grid-demo-bg1">
                                            <div class="layui-form-item">
                                                <label class="layui-form-label">???????????????</label>
                                                <div class="layui-input-block">
                                                    <input style="width: 40%" type="text" name="keyword"
                                                           lay-verify="title" autocomplete="off"
                                                           placeholder="????????????????????????" class="layui-input"
                                                           v-model="formData.keyword">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="layui-col-xs12 layui-col-sm12 layui-col-md12">
                                        <div class="grid-demo grid-demo-bg1">
                                            <div class="layui-form-item">
                                                <label class="layui-form-label">??????</label>
                                                <div class="layui-input-block">
                                                    <input style="width: 40%" type="text" name="unit_name"
                                                           lay-verify="title" autocomplete="off"
                                                           placeholder="???????????????" class="layui-input"
                                                           v-model="formData.unit_name">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="layui-col-xs12 layui-col-sm12 layui-col-md12">
                                        <div class="grid-demo grid-demo-bg1">
                                            <div class="layui-form-item layui-form-text">
                                                <label class="layui-form-label">????????????</label>
                                                <div class="layui-input-block">
                                                    <textarea name="store_info" v-model="formData.store_info"
                                                              placeholder="?????????????????????" class="layui-textarea"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="layui-form-item submit">
                                        <label class="layui-form-label">????????????</label>
                                        <div class="layui-input-block">
                                            <input type="text" name="link_key" v-model="videoLink"
                                                   style="width:50%;display:inline-block;margin-right: 10px;"
                                                   autocomplete="off" placeholder="?????????????????????" class="layui-input">
                                            <button type="button" @click="uploadVideo"
                                                    class="layui-btn layui-btn-sm layui-btn-normal">{{videoLink ? '????????????'
                                                        : '????????????'}}
                                            </button>
                                            <input ref="filElem" type="file" style="display: none">
                                        </div>
                                        <div class="layui-input-block video_show" style="width: 30%;margin-top: 20px;"
                                             v-if="upload.videoIng">
                                            <div class="layui-progress" style="margin-bottom: 10px">
                                                <div class="layui-progress-bar layui-bg-blue"
                                                     :style="'width:'+progress+'%'"></div>
                                            </div>
                                            <button type="button"
                                                    class="layui-btn layui-btn-sm layui-btn-danger percent">
                                                {{progress}}%
                                            </button>
                                        </div>
                                        <div class="layui-input-block" v-if="formData.video_link">
                                            <div class="layui-video-box" v-if="formData.video_link">
                                                <video style="width:100%;height: 100%!important;border-radius: 10px;"
                                                       :src="formData.video_link" controls="controls">
                                                    ???????????????????????? video ?????????
                                                </video>
                                                <div class="mark" @click="delVideo">
                                                    <span class="layui-icon layui-icon-delete"
                                                          style="font-size: 30px; color: #1E9FFF;"></span>
                                                </div>

                                            </div>
                                            <div class="layui-video-box" v-else>
                                                <i class="layui-icon layui-icon-play"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="layui-col-xs12 layui-col-sm12 layui-col-md12">
                                        <div class="grid-demo grid-demo-bg1">
                                            <div class="layui-form-item">
                                                <label class="layui-form-label">???????????????<i class="red">*</i></label>
                                                <div class="pictrueBox">
                                                    <div class="pictrue" v-if="formData.image"
                                                         @click="uploadImage('image')">
                                                        <img :src="formData.image"></div>
                                                    <div class="upLoad" @click="uploadImage('image')" v-else>
                                                        <i class="layui-icon layui-icon-camera" class="iconfont"
                                                           style="font-size: 26px;"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="layui-col-xs12 layui-col-sm12 layui-col-md12">
                                        <div class="grid-demo grid-demo-bg1">
                                            <div class="layui-form-item">
                                                <label class="layui-form-label">???????????????<i class="red">*</i></label>
                                                <div class="pictrueBox pictrue"
                                                     v-for="(item,index) in formData.slider_image">
                                                    <img :src="item">
                                                    <i class="layui-icon closes"
                                                       @click="deleteImage('slider_image',index)">&#x1007</i>
                                                </div>
                                                <div class="pictrueBox">
                                                    <div class="upLoad" @click="uploadImage('slider_image')"
                                                         v-if="formData.slider_image.length <= rule.slider_image.maxLength">
                                                        <i class="layui-icon layui-icon-camera" class="iconfont"
                                                           style="font-size: 26px;"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="layui-col-xs12 layui-col-sm4 layui-col-md12">
                                        <div class="grid-demo grid-demo-bg1">
                                            <div class="layui-form-item">
                                                <label class="layui-form-label">????????????</label>
                                                <div class="layui-input-block">
                                                    <input type="radio" name="store_type" lay-filter="store_type"
                                                           value="1" title="????????????"
                                                           :checked="formData.store_type == 1 ? true : false">
                                                    <input type="radio" name="store_type" lay-filter="store_type"
                                                           value="2" title="????????????"
                                                           :checked="formData.store_type == 0 ? true : false">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="layui-col-xs12 layui-col-sm12 layui-col-md12">
                                        <div class="grid-demo grid-demo-bg1">
                                            <div class="layui-form-item">
                                                <label class="layui-form-label">????????????<i class="red">*</i></label>
                                                <div class="layui-input-block">
                                                    <input type="radio" name="spec_type" value="0" title="?????????"
                                                           lay-filter="spec_type"
                                                           :checked="formData.spec_type == 0 ? true : false">
                                                    <input type="radio" name="spec_type" value="1" title="?????????"
                                                           lay-filter="spec_type"
                                                           :checked="formData.spec_type == 1 ? true : false">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="layui-col-xs12 layui-col-sm12 layui-col-md12"
                                         v-if="formData.spec_type == 0">

                                        <div class="grid-demo grid-demo-bg1">
                                            <div class="layui-form-item">
                                                <label class="layui-form-label"></label>
                                                <div class="layui-input-block">
                                                    <table class="layui-table">
                                                        <thead>
                                                        <tr>
                                                            <th>??????<i class="red">*</i></th>
                                                            <th>??????<i class="red">*</i></th>
                                                            <th>??????<i class="red">*</i></th>
                                                            <th>?????????</th>
                                                            <th>??????<i class="red">*</i></th>
                                                            <th>??????<i class="red">*</i></th>
                                                            <th>????????????</th>
                                                            <th>??????(KG)</th>
                                                            <th>??????(m??)</th>
                                                        </tr>
                                                        </thead>
                                                        <tr>
                                                            <td>
                                                                <div class="pictrueBox">
                                                                    <div class="pictrue" v-if="formData.attr.pic"
                                                                         @click="uploadImage('attr.pic')"><img
                                                                                :src="formData.attr.pic"></div>
                                                                    <div class="upLoad" @click="uploadImage('attr.pic')"
                                                                         v-else>
                                                                        <i class="layui-icon layui-icon-camera"
                                                                           class="iconfont"
                                                                           style="font-size: 26px;"></i>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td><input type="text" v-model="formData.attr.price"
                                                                       class="layui-input"></td>
                                                            <td><input type="text" v-model="formData.attr.integral"
                                                                       class="layui-input"></td>
                                                            <td><input type="text" v-model="formData.attr.cost"
                                                                       class="layui-input"></td>
                                                            <td><input type="text" v-model="formData.attr.ot_price"
                                                                       class="layui-input"></td>
                                                            <td><input type="text" v-model="formData.attr.stock"
                                                                       class="layui-input"></td>
                                                            <td><input type="text" v-model="formData.attr.bar_code"
                                                                       class="layui-input"></td>
                                                            <td><input type="text" v-model="formData.attr.weight"
                                                                       class="layui-input"></td>
                                                            <td><input type="text" v-model="formData.attr.volume"
                                                                       class="layui-input"></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- ?????????-->
                                    <div class="layui-col-xs12 layui-col-sm12 layui-col-md12"
                                         v-if="formData.spec_type == 1">
                                        <div class="layui-col-xs12 layui-col-sm6 layui-col-md6">
                                            <div class="grid-demo grid-demo-bg1" style="margin-bottom: 10px;">
                                                <div class="layui-form-item">
                                                    <label class="layui-form-label">????????????<i class="red">*</i></label>
                                                    <div class="layui-input-block selected store_box">
                                                        <select name="ruleIndex" lay-filter="rule_index">
                                                            <option value="-1">?????????</option>
                                                            <option :value="index" v-for="(item,index) in ruleList">
                                                                {{item.rule_name}}
                                                            </option>
                                                        </select>
                                                        <button type="button" style="height: 38px;border-left: 0;"
                                                                class="layui-btn layui-btn-sm" @click="allRule">??????
                                                        </button>
                                                        <button type="button" style="height: 38px;"
                                                                class="layui-btn layui-btn-sm layui-btn-primary"
                                                                @click="addRule">????????????
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="layui-col-xs12 layui-col-sm12 layui-col-md12">
                                            <div class="grid-demo grid-demo-bg1" v-for="(item,index) in formData.items">
                                                <div class="ml110"><span>{{item.value}}</span><i class="layui-icon"
                                                                                                 @click="deleteItem(index)">&#x1007;</i>
                                                </div>
                                                <div class="layui-form-item rules">
                                                    <label class="layui-form-label"></label>
                                                    <button type="button"
                                                            class="layui-btn layui-btn-primary layui-btn-sm"
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
                                            <div class="grid-demo grid-demo-bg1 rules" style="margin-top: 24px;"
                                                 v-if="newRule">
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
                                            <div class="grid-demo grid-demo-bg1"
                                                 style="margin-top: 20px;margin-bottom: 10px;"
                                                 v-if="newRule == false && ruleBool">
                                                <div class="layui-form-item">
                                                    <label class="layui-form-label"></label>
                                                    <button class="layui-btn layui-btn-sm" type="button"
                                                            @click="newRule = true">
                                                        ???????????????
                                                    </button>
                                                    <button class="layui-btn layui-btn-sm" type="button"
                                                            @click="generate">????????????
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="layui-col-xs12 layui-col-sm12 layui-col-md12"
                                             v-if="formData.attrs.length && formHeader.length">

                                            <div class="grid-demo grid-demo-bg1" style="margin-top: 20px">
                                                <div class="layui-form-item">
                                                    <label class="layui-form-label">???????????????</label>
                                                    <div class="layui-input-block">
                                                        <table class="layui-table">
                                                            <thead>
                                                            <tr>
                                                                <th>??????<i class="red">*</i></th>
                                                                <th>??????<i class="red">*</i></th>
                                                                <th>??????<i class="red">*</i></th>
                                                                <th>?????????</th>
                                                                <th>??????<i class="red">*</i></th>
                                                                <th>??????<i class="red">*</i></th>
                                                                <th>????????????</th>
                                                                <th>??????(KG)</th>
                                                                <th>??????(m??)</th>
                                                                <th width="15%" style="text-align: center;">??????</th>
                                                            </tr>
                                                            </thead>
                                                            <tr>
                                                                <td>
                                                                    <div class="pictrueBox">
                                                                        <div class="pictrue" v-if="batchAttr.pic"
                                                                             @click="uploadImage('batchAttr.pic')"><img
                                                                                    :src="batchAttr.pic"></div>
                                                                        <div class="upLoad"
                                                                             @click="uploadImage('batchAttr.pic')"
                                                                             v-else>
                                                                            <i class="layui-icon layui-icon-camera"
                                                                               class="iconfont"
                                                                               style="font-size: 26px;"></i>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td><input type="text" v-model="batchAttr.price"
                                                                           class="layui-input"></td>
                                                                <td><input type="text" v-model="batchAttr.integral"
                                                                           class="layui-input"></td>
                                                                <td><input type="text" v-model="batchAttr.cost"
                                                                           class="layui-input"></td>
                                                                <td><input type="text" v-model="batchAttr.ot_price"
                                                                           class="layui-input"></td>
                                                                <td>
                                                                    <input type="text" v-model="batchAttr.stock"
                                                                           class="layui-input">
                                                                </td>
                                                                <td>
                                                                    <input type="text" v-model="batchAttr.bar_code"
                                                                           class="layui-input">
                                                                </td>
                                                                <td>
                                                                    <input type="text" v-model="batchAttr.weight"
                                                                           class="layui-input">
                                                                </td>
                                                                <td>
                                                                    <input type="text" v-model="batchAttr.volume"
                                                                           class="layui-input">
                                                                </td>
                                                                <td style="text-align: center;">
                                                                    <button class="layui-btn layui-btn-sm" type="button"
                                                                            @click="batchAdd">????????????
                                                                    </button>
                                                                    <button class="layui-btn layui-btn-sm layui-btn-danger"
                                                                            type="button"
                                                                            @click="batchClear">??????
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="grid-demo grid-demo-bg1" style="margin-top: 20px">
                                                <div class="layui-form-item">
                                                    <label class="layui-form-label">???????????????</label>
                                                    <div class="layui-input-block">
                                                        <table class="layui-table">
                                                            <thead>
                                                            <tr>
                                                                <th v-for="(item,index) in formHeader"
                                                                    v-if="item.align">
                                                                    {{item.title}}
                                                                </th>
                                                            </tr>
                                                            </thead>
                                                            <tr v-for="(item,index) in formData.attrs">
                                                                <td v-for="(n,v) in item.detail">{{n}}</td>
                                                                <td>
                                                                    <div class="pictrueBox">
                                                                        <div class="pictrue" v-if="item.pic"
                                                                             @click="uploadImage('attrs.'+index+'.pic')">
                                                                            <img
                                                                                    :src="item.pic"></div>
                                                                        <div class="upLoad"
                                                                             @click="uploadImage('attrs.'+index+'.pic')"
                                                                             v-else>
                                                                            <i class="layui-icon layui-icon-camera"
                                                                               class="iconfont"
                                                                               style="font-size: 26px;"></i>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td><input type="number" v-model="item.price"
                                                                           class="layui-input"></td>
                                                                <td><input type="number" v-model="item.integral"
                                                                           class="layui-input"></td>
                                                                <td><input type="number" v-model="item.cost"
                                                                           class="layui-input"></td>
                                                                <td><input type="number" v-model="item.ot_price"
                                                                           class="layui-input"></td>
                                                                <td><input type="number" v-model="item.stock"
                                                                           class="layui-input"></td>
                                                                <td>
                                                                    <input type="text" v-model="item.bar_code"
                                                                           class="layui-input">
                                                                </td>
                                                                <td>
                                                                    <input type="number" v-model="item.weight"
                                                                           class="layui-input">
                                                                </td>
                                                                <td>
                                                                    <input type="number" v-model="item.volume"
                                                                           class="layui-input">
                                                                </td>
                                                                <td>
                                                                    <button class="layui-btn layui-btn-sm" type="button"
                                                                            @click="deleteAttrs(index)">??????
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="layui-col-xs12 layui-col-sm6 layui-col-md6">
                                    <div class="grid-demo grid-demo-bg1">
                                        <div class="layui-form-item">
                                            <label class="layui-form-label">????????????<i class="red">*</i></label>
                                            <div class="layui-input-block">
                                                <select name="temp_id" lay-filter="temp_id">
                                                    <option value="0">?????????</option>
                                                    <option :value="item.id" v-for="item in tempList"
                                                            :selected=" item.id == formData.temp_id ? true : false ">
                                                        {{item.name}}
                                                    </option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="layui-row layui-col-space15">
                                    <div class="layui-col-xs12 layui-col-sm4 layui-col-md4">
                                        <div class="grid-demo grid-demo-bg1">
                                            <div class="layui-form-item">
                                                <label class="layui-form-label">????????????</label>
                                                <div class="layui-input-block">
                                                    <input type="radio" name="is_show" lay-filter="is_show" value="1"
                                                           title="??????"
                                                           :checked="formData.is_show == 1 ? true : false">
                                                    <input type="radio" name="is_show" lay-filter="is_show" value="0"
                                                           title="??????"
                                                           :checked="formData.is_show == 0 ? true : false">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="layui-tab-item">
                                <div class="layui-row layui-col-space15">
                                    <textarea type="text/plain" name="description" id="myEditor" style="width:100%;">{{formData.description}}</textarea>
                                </div>
                            </div>
                            <div class="layui-tab-item">
                                <div class="layui-row layui-col-space15">
                                    <div class="layui-col-xs12 layui-col-sm4 layui-col-md4">
                                        <div class="grid-demo grid-demo-bg1">
                                            <div class="layui-form-item">
                                                <label class="layui-form-label">????????????</label>
                                                <div class="layui-input-block">
                                                    <input type="number" name="ficti" lay-verify="title"
                                                           autocomplete="off"
                                                           placeholder="?????????????????????" class="layui-input"
                                                           v-model="formData.ficti">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="layui-col-xs12 layui-col-sm4 layui-col-md4">
                                        <div class="grid-demo grid-demo-bg1">
                                            <div class="layui-form-item">
                                                <label class="layui-form-label">????????????</label>
                                                <div class="layui-input-block">
                                                    <input type="number" name="give_integral" lay-verify="title"
                                                           autocomplete="off" placeholder="?????????????????????" class="layui-input"
                                                           v-model="formData.give_integral">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="layui-col-xs12 layui-col-sm4 layui-col-md4">
                                        <div class="grid-demo grid-demo-bg1">
                                            <div class="layui-form-item">
                                                <label class="layui-form-label">??????</label>
                                                <div class="layui-input-block">
                                                    <input type="number" name="sort" lay-verify="title"
                                                           autocomplete="off"
                                                           placeholder="???????????????" class="layui-input"
                                                           v-model="formData.sort">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="layui-col-xs12 layui-col-sm12 layui-col-md12">
                                        <div class="grid-demo grid-demo-bg1">
                                            <div class="layui-form-item">
                                                <label class="layui-form-label">????????????</label>
                                                <div class="layui-input-block">
                                                    <input type="radio" name="is_sub" lay-filter="is_sub" value="1"
                                                           title="????????????"
                                                           :checked="formData.is_sub == 1 ? true : false">
                                                    <input type="radio" name="is_sub" lay-filter="is_sub" value="0"
                                                           title="????????????"
                                                           :checked="formData.is_sub == 0 ? true : false">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="layui-col-xs12 layui-col-sm12 layui-col-md12"
                                         v-if="formData.is_sub == 1 && formData.spec_type == 1">
                                        <div class="grid-demo grid-demo-bg1">
                                            <div class="layui-form-item">
                                                <label class="layui-form-label">????????????</label>
                                                <div class="layui-input-block">
                                                    <input style="width: 20%;display: inline-block;" type="number"
                                                           name="brokerage" lay-verify="title" autocomplete="off"
                                                           placeholder="?????????????????????" class="layui-input"
                                                           v-model="brokerage.brokerage">
                                                    <input style="width: 20%;display: inline-block;" type="number"
                                                           name="brokerage_two" lay-verify="title" autocomplete="off"
                                                           placeholder="?????????????????????" class="layui-input"
                                                           v-model="brokerage.brokerage_two">
                                                    <button class="layui-btn layui-btn-sm" style="height: 38px;"
                                                            type="button"
                                                            @click="addBrokerage">????????????
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ?????????-->
                                    <div class="layui-col-xs12 layui-col-sm12 layui-col-md12"
                                         v-if="formData.spec_type == 0 && formData.is_sub == 1">
                                        <div class="grid-demo grid-demo-bg1">
                                            <div class="layui-form-item">
                                                <label class="layui-form-label">????????????:</label>
                                                <div class="layui-input-block">
                                                    <table class="layui-table">
                                                        <thead>
                                                        <tr>
                                                            <th>??????</th>
                                                            <th>??????</th>
                                                            <th>??????</th>
                                                            <th>?????????</th>
                                                            <th>??????</th>
                                                            <th>??????</th>
                                                            <th>????????????</th>
                                                            <th>??????</th>
                                                            <th>??????</th>
                                                            <th>????????????</th>
                                                            <th>????????????</th>
                                                        </tr>
                                                        </thead>
                                                        <tr>
                                                            <td>
                                                                <div class="pictrueBox">
                                                                    <div class="pictrue" v-if="formData.attr.pic">
                                                                        <img :src="formData.attr.pic">
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>{{formData.attr.price}}</td>
                                                            <td>{{formData.attr.integral}}</td>
                                                            <td>{{formData.attr.cost}}</td>
                                                            <td>{{formData.attr.ot_price}}</td>
                                                            <td>{{formData.attr.stock}}</td>
                                                            <td>{{formData.attr.bar_code}}</td>
                                                            <td>{{formData.attr.weight}}</td>
                                                            <td>{{formData.attr.volume}}</td>
                                                            <td><input type="text" v-model="formData.attr.brokerage"
                                                                       class="layui-input"></td>
                                                            <td><input type="text" v-model="formData.attr.brokerage_two"
                                                                       class="layui-input"></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- ???????????????-->
                                    <!-- ?????????-->
                                    <div class="layui-col-xs12 layui-col-sm12 layui-col-md12"
                                         v-if="formData.attrs.length && formHeader.length && formData.is_sub == 1 && formData.spec_type == 1">
                                        <div class="grid-demo grid-demo-bg1" style="margin-top: 20px">
                                            <div class="layui-form-item">
                                                <label class="layui-form-label">???????????????</label>
                                                <div class="layui-input-block">
                                                    <table class="layui-table">
                                                        <thead>
                                                        <tr>
                                                            <th v-for="(item,index) in formHeader"
                                                                v-if="item.slot != 'action'">
                                                                {{item.title}}
                                                            </th>
                                                        </tr>
                                                        </thead>
                                                        <tr v-for="(item,index) in formData.attrs">
                                                            <td v-for="(n,v) in item.detail">{{n}}</td>
                                                            <td>
                                                                <div class="pictrueBox">
                                                                    <div class="pictrue" v-if="item.pic"><img
                                                                                :src="item.pic"></div>
                                                                </div>
                                                            </td>
                                                            <td>{{item.price}}</td>
                                                            <td>{{item.integral}}</td>
                                                            <td>{{item.cost}}</td>
                                                            <td>{{item.ot_price}}</td>
                                                            <td>{{item.stock}}</td>
                                                            <td>{{item.bar_code}}</td>
                                                            <td>{{item.weight}}</td>
                                                            <td>{{item.volume}}</td>
                                                            <td>
                                                                <input type="number" v-model="item.brokerage"
                                                                       class="layui-input">
                                                            </td>
                                                            <td>
                                                                <input type="number" v-model="item.brokerage_two"
                                                                       class="layui-input">
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--???????????????-->

                                    <!--                                    <div class="layui-col-xs12 layui-col-sm4 layui-col-md4">-->
                                    <!--                                        <div class="grid-demo grid-demo-bg1">-->
                                    <!--                                            <div class="layui-form-item">-->
                                    <!--                                                <label class="layui-form-label">????????????</label>-->
                                    <!--                                                <div class="layui-input-block">-->
                                    <!--                                                    <input type="radio" name="is_show" lay-filter="is_show" value="1" title="??????"-->
                                    <!--                                                           :checked="formData.is_show == 1 ? true : false">-->
                                    <!--                                                    <input type="radio" name="is_show" lay-filter="is_show" value="0" title="??????"-->
                                    <!--                                                           :checked="formData.is_show == 0 ? true : false">-->
                                    <!--                                                </div>-->
                                    <!--                                            </div>-->
                                    <!--                                        </div>-->
                                    <!--                                    </div>-->
                                    <div class="layui-col-xs12 layui-col-sm4 layui-col-md4">
                                        <div class="grid-demo grid-demo-bg1">
                                            <div class="layui-form-item">
                                                <label class="layui-form-label">????????????</label>
                                                <div class="layui-input-block">
                                                    <input type="radio" name="is_hot" lay-filter="is_hot" value="1"
                                                           title="??????"
                                                           :checked="formData.is_hot == 1 ? true : false">
                                                    <input type="radio" name="is_hot" lay-filter="is_hot" value="0"
                                                           title="??????"
                                                           :checked="formData.is_hot == 0 ? true : false">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="layui-col-xs12 layui-col-sm4 layui-col-md4">
                                        <div class="grid-demo grid-demo-bg1">
                                            <div class="layui-form-item">
                                                <label class="layui-form-label">????????????</label>
                                                <div class="layui-input-block">
                                                    <input type="radio" name="is_benefit" lay-filter="is_benefit"
                                                           value="1" title="??????"
                                                           :checked="formData.is_benefit == 1 ? true : false">
                                                    <input type="radio" name="is_benefit" lay-filter="is_benefit"
                                                           value="0" title="??????"
                                                           :checked="formData.is_benefit == 0 ? true : false">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="layui-col-xs12 layui-col-sm4 layui-col-md4">
                                        <div class="grid-demo grid-demo-bg1">
                                            <div class="layui-form-item">
                                                <label class="layui-form-label">????????????</label>
                                                <div class="layui-input-block">
                                                    <input type="radio" name="is_best" lay-filter="is_best" value="1"
                                                           title="??????"
                                                           :checked="formData.is_best == 1 ? true : false">
                                                    <input type="radio" name="is_best" lay-filter="is_best" value="0"
                                                           title="??????"
                                                           :checked="formData.is_best == 0 ? true : false">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="layui-col-xs12 layui-col-sm4 layui-col-md4">
                                        <div class="grid-demo grid-demo-bg1">
                                            <div class="layui-form-item">
                                                <label class="layui-form-label">????????????</label>
                                                <div class="layui-input-block">
                                                    <input type="radio" name="is_new" lay-filter="is_new" value="1"
                                                           title="??????"
                                                           :checked="formData.is_new == 1 ? true : false">
                                                    <input type="radio" name="is_new" lay-filter="is_new" value="0"
                                                           title="??????"
                                                           :checked="formData.is_new == 0 ? true : false">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="layui-col-xs12 layui-col-sm4 layui-col-md4">
                                        <div class="grid-demo grid-demo-bg1">
                                            <div class="layui-form-item">
                                                <label class="layui-form-label">????????????</label>
                                                <div class="layui-input-block">
                                                    <input type="radio" name="is_good" lay-filter="is_good" value="1"
                                                           title="??????"
                                                           :checked="formData.is_good == 1 ? true : false">
                                                    <input type="radio" name="is_good" lay-filter="is_good" value="0"
                                                           title="??????"
                                                           :checked="formData.is_good == 0 ? true : false">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="layui-row layui-col-space15">
                                        <div class="layui-col-xs12 layui-col-sm12 layui-col-md12">
                                            <div class="grid-demo grid-demo-bg1">
                                                <div class="layui-form-item">
                                                    <label class="layui-form-label">???????????????</label>
                                                    <div class="layui-input-block">
                                                        <span class="layui-btn layui-btn-sm layui-btn-normal"
                                                              :style="'background-color:'+activity[item]"
                                                              v-for="(item,index) in formData.activity" :key="index"
                                                              draggable="true"
                                                              @dragstart="handleDragStart($event, item)"
                                                              @dragover.prevent="handleDragOver($event, item)"
                                                              @dragenter="handleDragEnter($event, item)"
                                                              @dragend="handleDragEnd($event, item)">
                                                        {{item}}
                                                    </span>
                                                        <span class="info">????????????????????????????????????????????????</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="layui-tab-content">
                            <div class="layui-row layui-col-space15">
                                <div class="layui-col-xs12 layui-col-sm12 layui-col-md12">
                                    <div class="grid-demo grid-demo-bg1">
                                        <div class="layui-form-item" v-if="id">
                                            <button class="layui-btn layui-btn-primary layui-btn-sm" type="button"
                                                    @click="handleSubmit()">??????
                                            </button>
                                            <button class="layui-btn layui-btn-primary layui-btn-sm" type="button"
                                                    @click="back" v-if="layTabId != 1">?????????
                                            </button>
                                            <button class="layui-btn layui-btn-normal layui-btn-sm" type="button"
                                                    v-if="layTabId != 3" @click="next">?????????
                                            </button>
                                        </div>
                                        <div class="layui-form-item" v-else>
                                            <button class="layui-btn layui-btn-primary layui-btn-sm" type="button"
                                                    @click="back" v-if="layTabId != 1">?????????
                                            </button>
                                            <button class="layui-btn layui-btn-normal layui-btn-sm" type="button"
                                                    @click="next" v-if="layTabId != 3">?????????
                                            </button>
                                            <button class="layui-btn layui-btn-normal layui-btn-sm" type="button"
                                                    v-if="layTabId == 3" @click="handleSubmit()">??????
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    var id = <?php echo htmlentities($id); ?>;
    new Vue({
        el: '#app',
        data: {
            id: id,
            //????????????
            cateList: [],
            //????????????
            tempList: [],
            upload: {
                videoIng: false
            },
            formData: {
                cate_id: [],
                temp_id: 0,
                commission: 0,
                store_name: '',
                keyword: '',
                unit_name: '',
                postage: '',
                store_info: '',
                image: '',
                video_link: '',
                slider_image: [],
                price: '',
                spec_type: 0,
                attr: {
                    pic: '',
                    price: 0,
                    integral: 0,
                    cost: 0,
                    ot_price: 0,
                    stock: 0,
                    bar_code: '',
                    weight: 0,
                    volume: 0,
                    brokerage: 0,
                    brokerage_two: 0,
                },
                attrs: [],
                description: '',
                ficti: 0,
                give_integral: 0,
                sort: 0,
                is_show: 1,
                is_hot: 0,
                is_benefit: 0,
                is_best: 0,
                is_new: 0,
                is_good: 0,
                store_type: 1,
                is_sub: 0,
                items: [
                    // {
                    //     value: '',
                    //     detailValue:'',
                    //     attrHidden:false,
                    //     detail:[]
                    // }
                ],
                activity: ['??????', '??????', '??????'],
            },
            videoLink: '',
            //??????????????????
            batchAttr: {
                pic: '',
                price: 0,
                integral: 0,
                cost: 0,
                ot_price: 0,
                stock: 0,
                bar_code: '',
                weight: 0,
                volume: 0,
            },
            //?????????header???
            formHeader: [],
            // ????????????
            formDynamic: {
                attrsName: '',
                attrsVal: ''
            },
            brokerage: {
                brokerage: '',
                brokerage_two: '',
            },
            activity: {'??????': '#1E9FFF', '??????': '#189688', '??????': '#FEB900'},
            attr: [],//????????????
            newRule: false,//?????????????????????
            radioRule: ['store_type', 'is_sub', 'is_show', 'is_hot', 'is_benefit', 'is_new', 'is_good', 'is_best', 'spec_type'],//radio ????????????
            rule: { //??????????????????
                slider_image: {
                    maxLength: 5
                }
            },
            ruleList: [],
            ruleIndex: -1,
            progress: 0,
            um: null,//??????????????????
            form: null,//layui.form
            layTabId: 1,
            ruleBool: id ? true : false,
        },
        watch: {
            'formData.is_sub': function (n) {
                if (n == 1) {
                    this.formHeader.push({title: '????????????(???)'});
                    this.formHeader.push({title: '???????????????(???)'});
                } else {
                    this.formHeader.pop();
                    this.formHeader.pop();
                }
            },
            'formData.spec_type': function (n) {
                if (n) {
                    this.render();
                }
            },
            // 'formData.image':function (n) {
            //     if(!this.batchAttr.pic){
            //         this.batchAttr.pic = n;
            //     }
            //     if(!this.formData.attr.pic){
            //         this.formData.attr.pic = n;
            //     }
            // }
        },
        methods: {
            back: function () {
                var that = this;
                layui.use(['element'], function () {
                    layui.element.tabChange('docTabBrief', that.layTabId == 1 ? 1 : parseInt(that.layTabId) - 1);
                });
            },
            next: function () {
                var that = this;
                layui.use(['element'], function () {
                    layui.element.tabChange('docTabBrief', that.layTabId == 3 ? 3 : parseInt(that.layTabId) + 1);
                });
            },
            goBack: function () {
                location.href = this.U({c: 'store.StoreProduct', a: 'index'});
            },
            U: function (opt) {
                var m = opt.m || 'admin', c = opt.c || window.controlle || '', a = opt.a || 'index', q = opt.q || '',
                    p = opt.p || {};
                var params = Object.keys(p).map(function (key) {
                    return key + '/' + p[key];
                }).join('/');
                var gets = Object.keys(q).map(function (key) {
                    return key + '=' + q[key];
                }).join('&');

                return '/' + m + '/' + c + '/' + a + (params == '' ? '' : '/' + params) + (gets == '' ? '' : '?' + gets);
            },
            /**
             * ??????
             * */
            showMsg: function (msg, success) {
                layui.use(['layer'], function () {
                    layui.layer.msg(msg, success);
                });
            },
            addBrokerage: function () {
                if (this.brokerage.brokerage > 0 && this.brokerage.brokerage_two > 0) {
                    var that = this;
                    this.$set(this.formData, 'attrs', this.formData.attrs.map(function (item) {
                        item.brokerage = that.brokerage.brokerage;
                        item.brokerage_two = that.brokerage.brokerage_two;
                        return item;
                    }));
                } else {
                    return this.showMsg('??????????????????????????????????????????');
                }
            },
            batchClear: function () {
                this.$set(this, 'batchAttr', {
                    pic: '',
                    price: 0,
                    integral: 0,
                    cost: 0,
                    ot_price: 0,
                    stock: 0,
                    bar_code: '',
                    weight: 0,
                    volume: 0,
                });
            },
            /**
             * ????????????
             * */
            batchAdd: function () {
                var that = this;
                this.$set(this.formData, 'attrs', this.formData.attrs.map(function (item) {
                    if (that.batchAttr.pic) {
                        item.pic = that.batchAttr.pic;
                    }
                    if (that.batchAttr.price > 0) {
                        item.price = that.batchAttr.price;
                    }
                    if (that.batchAttr.integral > 0) {
                        item.integral = that.batchAttr.integral;
                    }
                    if (that.batchAttr.cost > 0) {
                        item.cost = that.batchAttr.cost;
                    }
                    if (that.batchAttr.ot_price > 0) {
                        item.ot_price = that.batchAttr.ot_price;
                    }
                    if (that.batchAttr.stock > 0) {
                        item.stock = that.batchAttr.stock;
                    }
                    if (that.batchAttr.bar_code != '') {
                        item.bar_code = that.batchAttr.bar_code;
                    }
                    if (that.batchAttr.weight > 0) {
                        item.weight = that.batchAttr.weight;
                    }
                    if (that.batchAttr.volume > 0) {
                        item.volume = that.batchAttr.volume;
                    }
                    return item;
                }));

            },
            /**
             * ??????????????????
             * */
            getProductInfo: function () {
                var that = this;
                that.requestGet(that.U({
                    c: "store.StoreProduct",
                    a: 'get_product_info',
                    q: {id: that.id}
                })).then(function (res) {
                    that.$set(that, 'cateList', res.data.cateList);
                    that.$set(that, 'tempList', res.data.tempList);
                    var productInfo = res.data.productInfo || {};
                    if (productInfo.id && that.id) {
                        that.$set(that, 'formData', productInfo);
                        that.generate();
                    }
                    that.getRuleList();
                    that.init();
                }).catch(function (res) {
                    that.showMsg(res.msg);
                })
            },
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
            /**
             * ??????????????????
             * @param index
             * */
            deleteItem: function (index) {
                this.formData.items.splice(index, 1);
            },
            /**
             * ??????????????????
             * @param index
             * */
            deleteAttrs: function (index) {
                var that = this;
                if (that.id > 0) {
                    that.requestGet(that.U({
                        c: "store.StoreProduct",
                        a: 'check_activity',
                        q: {id: that.id}
                    })).then(function (res) {
                        that.showMsg(res.msg);
                    }).catch(function (res) {
                        if (that.formData.attrs.length > 1) {
                            that.formData.attrs.splice(index, 1);
                        } else {
                            return that.showMsg('???????????????????????????');
                        }
                    })
                } else {
                    if (that.formData.attrs.length > 1) {
                        that.formData.attrs.splice(index, 1);
                    } else {
                        return that.showMsg('???????????????????????????');
                    }
                }
            },
            /**
             * ????????????
             * */
            createAttrName: function () {
                if (this.formDynamic.attrsName && this.formDynamic.attrsVal) {
                    if (this.formData.items.find(function (val) {
                        if (val.value == this.formDynamic.attrsName) {
                            return true;
                        }
                    }.bind(this))) {
                        return this.showMsg('?????????????????????');
                    }
                    this.formData.items.push({
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
             * ????????????
             * */
            deleteImage: function (key, index) {
                var that = this;
                if (index != undefined) {
                    that.formData[key].splice(index, 1);
                    that.$set(that.formData, key, that.formData[key]);
                } else {
                    that.$set(that.formData, key, '');
                }
            },
            createFrame: function (title, src, opt) {
                opt === undefined && (opt = {});
                var h = 0;
                if (window.innerHeight < 800 && window.innerHeight >= 700) {
                    h = window.innerHeight - 50;
                } else if (window.innerHeight < 900 && window.innerHeight >= 800) {
                    h = window.innerHeight - 100;
                } else if (window.innerHeight < 1000 && window.innerHeight >= 900) {
                    h = window.innerHeight - 150;
                } else if (window.innerHeight >= 1000) {
                    h = window.innerHeight - 200;
                } else {
                    h = window.innerHeight;
                }
                var area = [(opt.w || window.innerWidth / 2) + 'px', (!opt.h || opt.h > h ? h : opt.h) + 'px'];
                layui.use('layer', function () {
                    return layer.open({
                        type: 2,
                        title: title,
                        area: area,
                        fixed: false, //?????????
                        maxmin: true,
                        moveOut: false,//true  ??????????????????  false ??????????????????
                        anim: 5,//???????????? isOutAnim bool ????????????
                        offset: 'auto',//['100px','100px'],//'auto',//????????????  ['100px','100px'] t[ ??? ???]
                        shade: 0,//??????
                        resize: true,//??????????????????
                        content: src,//??????
                        move: '.layui-layer-title'
                    });
                });
            },
            changeIMG: function (name, value) {
                if (this.getRule(name).maxLength !== undefined) {
                    var that = this;
                    value.map(function (v) {
                        that.formData[name].push(v);
                    });
                    this.$set(this.formData, name, this.formData[name]);
                } else {
                    if (name == 'batchAttr.pic') {
                        this.batchAttr.pic = value;
                    } else {
                        if (name.indexOf('.') !== -1) {
                            var key = name.split('.');
                            if (key.length == 2) {
                                this.formData[key[0]][key[1]] = value;
                            } else if (key.length == 3) {
                                this.formData[key[0]][key[1]][key[2]] = value;
                            } else if (key.length == 4) {
                                this.$set(this.formData[key[0]][key[1]][key[2]], key[3], value)
                            }
                        } else {
                            this.formData[name] = value;
                        }
                    }
                }
            },
            getRule: function (name) {
                return this.rule[name] || {};
            },
            uploadImage: function (name) {
                return this.createFrame('????????????', this.U({c: "widget.images", a: 'index', p: {fodder: name}}), {
                    h: 545,
                    w: 900
                });
            },
            uploadVideo: function () {
                if (this.videoLink) {
                    this.formData.video_link = this.videoLink;
                } else {
                    $(this.$refs.filElem).click();
                }
            },
            delVideo: function () {
                var that = this;
                that.$set(that.formData, 'video_link', '');
            },
            insertEditor: function (list) {
                this.um.execCommand('insertimage', list);
            },
            insertEditorVideo: function (src) {
                this.um.setContent('<div><video style="width: 99%" src="' + src + '" class="video-ue" controls="controls" width="100"><source src="' + src + '"></source></video></div><br>', true);
            },
            getContent: function () {
                return this.um.getContent();
            },
            /**
             * ??????radio??????
             */
            eeventRadio: function () {
                var that = this;
                that.radioRule.map(function (val) {
                    that.form.on('radio(' + val + ')', function (res) {
                        that.formData[val] = res.value;
                    });
                })
            },
            init: function () {
                var that = this;
                window.UMEDITOR_CONFIG.toolbar = [
                    // ???????????? test
                    'source | undo redo | bold italic underline strikethrough | superscript subscript | forecolor backcolor | removeformat |',
                    'insertorderedlist insertunorderedlist | selectall cleardoc paragraph | fontfamily fontsize',
                    '| justifyleft justifycenter justifyright justifyjustify |',
                    'link unlink | emotion selectimgs video  | map',
                    '| horizontal print preview fullscreen', 'drafts', 'formula'
                ];
                UM.registerUI('selectimgs', function (name) {
                    var me = this;
                    var $btn = $.eduibutton({
                        icon: 'image',
                        click: function () {
                            that.createFrame('????????????', "<?php echo Url('widget.images/index',['fodder'=>'editor']); ?>");
                        },
                        title: '????????????'
                    });

                    this.addListener('selectionchange', function () {
                        //??????????????????????????????????????????
                        var state = this.queryCommandState(name);
                        $btn.edui().disabled(state == -1).active(state == 1)
                    });
                    return $btn;

                });
                UM.registerUI('video', function (name) {
                    var me = this;
                    var $btn = $.eduibutton({
                        icon: 'video',
                        click: function () {
                            that.createFrame('????????????', "<?php echo Url('widget.video/index',['fodder'=>'video']); ?>");
                        },
                        title: '????????????'
                    });

                    this.addListener('selectionchange', function () {
                        //??????????????????????????????????????????
                        var state = this.queryCommandState(name);
                        $btn.edui().disabled(state == -1).active(state == 1)
                    });
                    return $btn;

                });
                //??????????????????
                this.um = UM.getEditor('myEditor', {initialFrameWidth: '99%', initialFrameHeight: 400});
                this.um.setContent(that.formData.description);
                that.$nextTick(function () {
                    layui.use(['form', 'element'], function () {
                        that.form = layui.form;
                        that.form.render();
                        that.form.on('select(temp_id)', function (data) {
                            that.$set(that.formData, 'temp_id', data.value);
                        });
                        that.form.on('select(rule_index)', function (data) {
                            that.ruleIndex = data.value;
                        });
                        layui.element.on('tab(docTabBrief)', function () {
                            that.layTabId = this.getAttribute('lay-id');
                        });
                        that.eeventRadio();
                    });

                    layui.config({
                        base: '/static/plug/layui/'
                    }).extend({
                        selectN: './selectN',
                    }).use('selectM', function () {
                        var selectM = layui.selectM;
                        selectM({
                            //????????????????????????
                            elem: '#cate_id'
                            //????????????????????????
                            , data: that.cateList
                            //?????????
                            , selected: that.formData.cate_id || []
                            //???????????????????????????5
                            , max: 10
                            , name: 'cate_id'
                            , model: 'formData.cate_id'
                            //???????????????
                            , delimiter: ','
                            //????????????????????????
                            , field: {idName: 'value', titleName: 'label', statusName: 'disabled'}
                        });
                    });
                })
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
            requestGet: function (url) {
                return new Promise(function (resolve, reject) {
                    axios.get(url).then(function (res) {
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
            generate: function () {
                var that = this;
                this.requestPost(that.U({
                    c: "store.StoreProduct",
                    a: 'is_format_attr',
                    p: {id: that.id}
                }), {attrs: this.formData.items}).then(function (res) {
                    that.$set(that.formData, 'attrs', res.data.value);
                    that.$set(that, 'formHeader', res.data.header);
                    if (that.id && that.formData.is_sub == 1 && that.formData.spec_type == 1) {
                        that.formHeader.push({title: '????????????(???)'});
                        that.formHeader.push({title: '???????????????(???)'});
                    }
                }).catch(function (res) {
                    return that.showMsg(res.msg);
                });
            },
            handleSubmit: function () {
                var that = this, cate_id = $('input[name="cate_id"]').val();
                if (cate_id != '') {
                    this.formData.cate_id = cate_id.split(',');
                }
                if (!that.formData.cate_id.length) {
                    return that.showMsg('?????????????????????');
                }
                if (!that.formData.temp_id) {
                    return that.showMsg('?????????????????????');
                }
                if (!that.formData.store_name) {
                    return that.showMsg('?????????????????????');
                }
                if (!that.formData.image) {
                    return that.showMsg('?????????????????????');
                }
                if (!that.formData.slider_image.length) {
                    return that.showMsg('???????????????????????????');
                }
                if (that.formData.spec_type == 0) {
                    if (!that.formData.attr.pic) {
                        return that.showMsg('????????????????????????');
                    }
                    if (that.formData.attr.price == '') {
                        return that.showMsg('????????????????????????');
                    }
                    if (that.formData.attr.ot_price == '') {
                        return that.showMsg('????????????????????????');
                    }
                    if (!that.formData.attr.stock) {
                        return that.showMsg('????????????????????????');
                    }
                    var brokerage_totle = Number(that.formData.attr.brokerage) + Number(that.formData.attr.brokerage_two);
                    if (brokerage_totle > that.formData.attr.price) {
                        return that.showMsg('?????????????????????????????????????????????');
                    }
                    var attr = {
                        pic: that.formData.attr.pic,
                        price: that.formData.attr.price,
                        integral: that.formData.attr.integral,
                        cost: that.formData.attr.cost,
                        ot_price: that.formData.attr.ot_price,
                        stock: that.formData.attr.stock,
                        bar_code: that.formData.attr.bar_code,
                        volume: that.formData.attr.volume,
                        weight: that.formData.attr.weight,
                        brokerage: that.formData.attr.brokerage,
                        brokerage_two: that.formData.attr.brokerage_two,
                    };
                    that.formData.attrs = [attr];
                } else {
                    if (!that.formData.attrs.length) {
                        return that.showMsg('????????????????????????');
                    }
                    for (var index in that.formData.attrs) {
                        if (!that.formData.attrs[index].pic) {
                            return that.showMsg('???????????????????????????' + (parseInt(index) + 1) + '????????????');
                        }
                        if (that.formData.attrs[index].price === '') {
                            return that.showMsg('???????????????????????????' + (parseInt(index) + 1) + '????????????');
                        }
                        if (that.formData.attrs[index].ot_price === '') {
                            return that.showMsg('???????????????????????????' + (parseInt(index) + 1) + '????????????');
                        }
                        if (that.formData.attrs[index].stock === '') {
                            return that.showMsg('???????????????????????????' + (parseInt(index) + 1) + '????????????');
                        }
                        var brokerage_totle = Number(that.formData.attrs[index].brokerage) + Number(that.formData.attrs[index].brokerage_two);
                        if (brokerage_totle > that.formData.attrs[index].price) {
                            return that.showMsg('???' + (parseInt(index) + 1) + '???????????????????????????????????????????????????');
                        }
                    }
                }
                that.formData.description = that.getContent();
                that.requestPost(that.U({
                    c: 'store.StoreProduct',
                    a: 'save',
                    p: {id: that.id}
                }), that.formData).then(function (res) {
                    that.confirm();
                }).catch(function (res) {
                    that.showMsg(res.msg);
                });
            },
            confirm: function () {
                var that = this;
                layui.use(['layer'], function () {
                    var layer = layui.layer;
                    layer.confirm(that.id ? '????????????????????????????????????' : '????????????????????????????????????', {
                        btn: ['????????????', that.id ? '????????????' : '????????????'] //??????
                    }, function () {
                        location.href = that.U({c: 'store.StoreProduct', a: 'index'});
                    }, function () {
                        if (that.id == 0) {
                            location.reload();
                        }
                    });
                });
            },
            render: function () {
                this.$nextTick(function () {
                    layui.use(['form'], function () {
                        layui.form.render('select');
                    });
                })
            },
            // ??????
            handleDragStart(e, item) {
                this.dragging = item;
            },
            handleDragEnd(e, item) {
                this.dragging = null
            },
            handleDragOver(e) {
                e.dataTransfer.dropEffect = 'move'
            },
            handleDragEnter(e, item) {
                e.dataTransfer.effectAllowed = 'move'
                if (item === this.dragging) {
                    return
                }
                var newItems = [...this.formData.activity];
                var src = newItems.indexOf(this.dragging);
                var dst = newItems.indexOf(item);
                newItems.splice(dst, 0, ...newItems.splice(src, 1))
                this.formData.activity = newItems;
            },
            getRuleList: function (type) {
                var that = this;
                that.requestGet(that.U({c: 'store.StoreProduct', a: 'get_rule'})).then(function (res) {
                    that.$set(that, 'ruleList', res.data);
                    if (type !== undefined) {
                        that.render();
                    }
                });
            },
            addRule: function () {
                return this.createFrame('??????????????????', this.U({c: 'store.StoreProductRule', a: 'create'}));
            },
            allRule: function () {
                if (this.ruleIndex != -1) {
                    var rule = this.ruleList[this.ruleIndex];
                    if (rule) {
                        this.ruleBool = true;
                        var rule_value = rule.rule_value.map(function (item) {
                            return item;
                        });
                        this.$set(this.formData, 'items', rule_value);
                        this.$set(this.formData, 'attrs', []);
                        this.$set(this, 'formHeader', []);
                        return true;
                    }
                }
                this.showMsg('?????????????????????');
            }
        },
        mounted: function () {
            var that = this;
            axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
            that.getProductInfo();
            window.$vm = that;
            window.changeIMG = that.changeIMG;
            window.insertEditor = that.insertEditor;
            window.insertEditorVideo = that.insertEditorVideo;
            window.successFun = function () {
                that.getRuleList(1);
            }
            $(that.$refs.filElem).change(function () {
                var inputFile = this.files[0];
                that.requestPost(that.U({c: "widget.video", a: 'get_signature'})).then(function (res) {
                    AdminUpload.upload(res.data.uploadType, {
                        token: res.data.uploadToken || '',
                        file: inputFile,
                        accessKeyId: res.data.accessKey || '',
                        accessKeySecret: res.data.secretKey || '',
                        bucketName: res.data.storageName || '',
                        region: res.data.storageRegion || '',
                        domain: res.data.domain || '',
                        uploadIng: function (progress) {
                            that.upload.videoIng = true;
                            that.progress = progress;
                        }
                    }).then(function (res) {
                        //??????
                        that.$set(that.formData, 'video_link', res.url);
                        that.progress = 0;
                        that.upload.videoIng = false;
                        return that.showMsg('????????????');
                    }).catch(function (err) {
                        //??????
                        console.info(err);
                        return that.showMsg('?????????????????????????????????');
                    });
                }).catch(function (res) {
                    return that.showMsg(res.msg || '??????????????????,?????????????????????');
                });
            })
        }
    });
</script>
</body>
</html>