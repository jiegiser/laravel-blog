@extends('layouts.admin')
@section('content')
        <!--面包屑导航 开始-->
<div class="crumb_warp">
    <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
    <i class="fa fa-home"></i> <a href="{{url('admin/info')}}">首页</a> &raquo;  文章管理
</div>
<!--面包屑导航 结束-->

<!--结果集标题与导航组件 开始-->
<div class="result_wrap">
    <div class="result_title">
        <h3>添加文章</h3>
        {{--传回一个数组，若数组长度大于0，则说明有错误,并遍历错误--}}
        @if(count($errors)>0)
            <div class="mark">
                @if(is_object($errors))
                    @foreach($errors->all() as $error)
                        <p>{{$error}}</p>
                    @endforeach
                @else
                    <p>{{$errors}}</p>
                @endif
            </div>
        @endif
    </div>
    <div class="result_content">
        <div class="short_wrap">
            <a href="{{url('admin/article/create')}}"><i class="fa fa-plus"></i>添加文章</a>
            <a href="{{url('admin/article')}}"><i class="fa fa-recycle"></i>全部文章</a>
        </div>
    </div>
</div>
<!--结果集标题与导航组件 结束-->

<div class="result_wrap">
<<<<<<< HEAD
    {{--表单提交通过post方法提交到admin/article方法里面--}}
    <form action="{{url('admin/article')}}" method="post">
=======
<<<<<<< HEAD
    {{--表单提交通过post方法提交到admin/article方法里面--}}
    <form action="{{url('admin/article')}}" method="post">
=======
    {{--表单提交通过post方法提交到admin/category方法里面--}}
    <form action="{{url('admin/category')}}" method="post">
>>>>>>> 9de3a6e5b192beea43151da0acccbf2cb48aba2a
>>>>>>> 1d0c44e1f4fbf3ee398df507acff60b0aaf00012
        {{csrf_field()}}
        <table class="add_tab">
            <tbody>
            <tr>
                <th width="120">分类：</th>
                <td>
                    <select name="cate_id">
                        {{--通过循环数据库中的cate_pid等于0的数据读取父级的标题--}}
                        @foreach($data as $d)
<<<<<<< HEAD
                            <option value="{{$d->cate_id}}">{{$d->_cate_name}}</option>
=======
<<<<<<< HEAD
                            <option value="{{$d->cate_id}}">{{$d->_cate_name}}</option>
=======
                        <option value="{{$d->cate_id}}">{{$d->_cate_name}}</option>
>>>>>>> 9de3a6e5b192beea43151da0acccbf2cb48aba2a
>>>>>>> 1d0c44e1f4fbf3ee398df507acff60b0aaf00012
                        @endforeach
                    </select>
                </td>
            </tr>

            <tr>
<<<<<<< HEAD
                <th><i class="require">*</i>文章标题：</th>
=======
<<<<<<< HEAD
                <th><i class="require">*</i>文章标题：</th>
=======
                <th>文章标题：</th>
>>>>>>> 9de3a6e5b192beea43151da0acccbf2cb48aba2a
>>>>>>> 1d0c44e1f4fbf3ee398df507acff60b0aaf00012
                <td>
                    <input type="text" class="lg" name="art_title">
                </td>
            </tr>
            <tr>
                <th>编辑：</th>
                <td>
                    <input type="text" class="sm" name="art_editor">
                </td>
            </tr>
            <tr>
                <th>缩略图：</th>
                <td>
<<<<<<< HEAD
                    <input type="text"  size="50" name="art_thumb">
                    <input id="file_upload" name="file_upload" type="file" multiple="true">
                    <script type="text/javascript" src="{{asset('resources/views/org/uploadify/jquery.uploadify.min.js')}}" ></script>
                    <link rel="stylesheet" href="{{asset('resources/views/org/uploadify/uploadify.css')}}">
=======
                    <input type="text" size="50" name="art_thumb">
<<<<<<< HEAD
                    <input id="file_upload" name="file_upload" type="file" multiple="true">
>>>>>>> 1d0c44e1f4fbf3ee398df507acff60b0aaf00012
                    <script type="text/javascript">
                        <?php $timestamp = time();?>
                        $(function() {
                            $('#file_upload').uploadify({
                                'buttonText' : '图片上传',
                                'formData'     : {
                                    'timestamp' : '<?php echo $timestamp;?>',
                                    '_token'     : "{{csrf_token()}}"
                                },
                                'swf'      : "{{asset('resources/views/org/uploadify/uploadify.swf')}}",
                                'uploader' : "{{url('admin/upload')}}",
                                'onUploadSuccess' : function(file, data, response) {
<<<<<<< HEAD
                                    $('input [name=art_thumb]').val(data);
=======
                                    $('input[name=art_thumb]').val(data);
>>>>>>> 1d0c44e1f4fbf3ee398df507acff60b0aaf00012
                                    $('#art_thumb_img').attr('src','/'+data);
//                                    alert(data);
                                }
                            });
                        });
                    </script>
                    <style>
                        .uploadify{display:inline-block;}
                        .uploadify-button{border:none; border-radius:5px; margin-top:8px;}
                        table.add_tab tr td span.uploadify-button-text{color: #FFF; margin:0;}
                    </style>
                </td>
            </tr>
            <tr>
                <th></th>
                <td>
                    <img src="" alt="" id="art_thumb_img" style="max-width: 350px; max-height:100px;">
<<<<<<< HEAD
=======
=======
>>>>>>> 9de3a6e5b192beea43151da0acccbf2cb48aba2a
>>>>>>> 1d0c44e1f4fbf3ee398df507acff60b0aaf00012
                </td>
            </tr>
            <tr>
                <th>关键词：</th>
                <td>
                    <input type="text" class="lg" name="art_tag">
                </td>
            </tr>
            <tr>
                <th>描述：</th>
                <td>
                    <textarea name="art_description"></textarea>
                </td>
            </tr>

            <tr>
                <th>文章内容：</th>
                <td>
<<<<<<< HEAD
                    <script type="text/javascript" charset="utf-8" src="{{asset('resources/views/org/ueditor/ueditor.config.js')}}"></script>
                    <script type="text/javascript" charset="utf-8" src="{{asset('resources/views/org/ueditor/ueditor.all.min.js')}}"> </script>
                    <script type="text/javascript" charset="utf-8" src="{{asset('resources/views/org/ueditor/lang/zh-cn/zh-cn.js')}}"></script>
=======
<<<<<<< HEAD
>>>>>>> 1d0c44e1f4fbf3ee398df507acff60b0aaf00012
                    <script id="editor" name="art_content" type="text/plain" style="width:860px;height:500px;"></script>
                    <script type="text/javascript">
                        var ue = UE.getEditor('editor');
                    </script>
<<<<<<< HEAD
=======
=======
                    <script type="text/javascript" charset="utf-8" src="{{asset('resources/views/org/ueditor/ueditor.config.js')}}"></script>
                    <script type="text/javascript" charset="utf-8" src="{{asset('resources/views/org/ueditor/ueditor.all.min.js')}}"> </script>
                    <script type="text/javascript" charset="utf-8" src="{{asset('resources/views/org/ueditor/lang/zh-cn/zh-cn.js')}}"></script>
                    <script id="editor" name="art_content" type="text/plain" style="width:860px;height:500px;"></script>
>>>>>>> 9de3a6e5b192beea43151da0acccbf2cb48aba2a
>>>>>>> 1d0c44e1f4fbf3ee398df507acff60b0aaf00012
                    <style>
                        .edit-default+{line-height: 28px;}
                        div.edui-combox-body,div.edui-button-body,div.edui-splitbutton-body
                        {overflow: hidden;height: 20px;}
                        div.edui-box{overflow: hidden;height: 22px;}
                    </style>
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
                    <script type="text/javascript">
                        var ue = UE.getEditor('editor');
                    </script>
>>>>>>> 9de3a6e5b192beea43151da0acccbf2cb48aba2a
>>>>>>> 1d0c44e1f4fbf3ee398df507acff60b0aaf00012
                </td>
            </tr>


            <tr>
                <th></th>
                <td>
                    <input type="submit" value="提交">
                    <input type="button" class="back" onclick="history.go(-1)" value="返回">
                </td>
            </tr>
            </tbody>
        </table>
    </form>
</div>
@endsection
