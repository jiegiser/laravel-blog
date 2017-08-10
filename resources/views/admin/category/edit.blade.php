@extends('layouts.admin')
@section('content')
        <!--面包屑导航 开始-->
<div class="crumb_warp">
    <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
<<<<<<< HEAD
    <i class="fa fa-home"></i> <a href="{{url('admin/info')}}">首页</a> &raquo;  编辑文章分类
=======
<<<<<<< HEAD
    <i class="fa fa-home"></i> <a href="{{url('admin/info')}}">首页</a> &raquo;  编辑文章分类
=======
<<<<<<< HEAD
    <i class="fa fa-home"></i> <a href="{{url('admin/info')}}">首页</a> &raquo;  编辑文章分类
=======
<<<<<<< HEAD
    <i class="fa fa-home"></i> <a href="{{url('admin/info')}}">首页</a> &raquo;  编辑文章分类
=======
<<<<<<< HEAD
    <i class="fa fa-home"></i> <a href="{{url('admin/info')}}">首页</a> &raquo;  编辑文章分类
=======
    <i class="fa fa-home"></i> <a href="{{url('admin/info')}}">首页</a> &raquo;  添加文章分类
>>>>>>> 8c3bffb9c3c6d491dfcb0704ec4f21c6e02e8128
>>>>>>> 009670add50838a872efaa8926121fdd6be8e8d0
>>>>>>> 9de3a6e5b192beea43151da0acccbf2cb48aba2a
>>>>>>> 1d0c44e1f4fbf3ee398df507acff60b0aaf00012
>>>>>>> 0d3badc3ec4415ffc27d056e6dd58b0428e6d2c9
</div>
<!--面包屑导航 结束-->

<!--结果集标题与导航组件 开始-->
<div class="result_wrap">
    <div class="result_title">
<<<<<<< HEAD
        <h3>分类编辑</h3>
=======
<<<<<<< HEAD
        <h3>分类编辑</h3>
=======
<<<<<<< HEAD
        <h3>分类编辑</h3>
=======
<<<<<<< HEAD
        <h3>分类编辑</h3>
=======
<<<<<<< HEAD
        <h3>分类编辑</h3>
=======
        <h3>快捷操作</h3>
>>>>>>> 8c3bffb9c3c6d491dfcb0704ec4f21c6e02e8128
>>>>>>> 009670add50838a872efaa8926121fdd6be8e8d0
>>>>>>> 9de3a6e5b192beea43151da0acccbf2cb48aba2a
>>>>>>> 1d0c44e1f4fbf3ee398df507acff60b0aaf00012
>>>>>>> 0d3badc3ec4415ffc27d056e6dd58b0428e6d2c9
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
<<<<<<< HEAD
            <a href="{{url('admin/category/create')}}"><i class="fa fa-plus"></i>添加分类</a>
            <a href="{{url('admin/category')}}"><i class="fa fa-recycle"></i>全部分类</a>
=======
<<<<<<< HEAD
            <a href="{{url('admin/category/create')}}"><i class="fa fa-plus"></i>添加分类</a>
            <a href="{{url('admin/category')}}"><i class="fa fa-recycle"></i>全部分类</a>
=======
<<<<<<< HEAD
            <a href="{{url('admin/category/create')}}"><i class="fa fa-plus"></i>添加分类</a>
            <a href="{{url('admin/category')}}"><i class="fa fa-recycle"></i>全部分类</a>
=======
<<<<<<< HEAD
            <a href="{{url('admin/category/create')}}"><i class="fa fa-plus"></i>添加分类</a>
            <a href="{{url('admin/category')}}"><i class="fa fa-recycle"></i>全部分类</a>
=======
<<<<<<< HEAD
            <a href="{{url('admin/category/create')}}"><i class="fa fa-plus"></i>添加分类</a>
            <a href="{{url('admin/category')}}"><i class="fa fa-recycle"></i>全部分类</a>
=======
            <a href="#"><i class="fa fa-plus"></i>新增文章</a>
            <a href="#"><i class="fa fa-recycle"></i>批量删除</a>
            <a href="#"><i class="fa fa-refresh"></i>更新排序</a>
>>>>>>> 8c3bffb9c3c6d491dfcb0704ec4f21c6e02e8128
>>>>>>> 009670add50838a872efaa8926121fdd6be8e8d0
>>>>>>> 9de3a6e5b192beea43151da0acccbf2cb48aba2a
>>>>>>> 1d0c44e1f4fbf3ee398df507acff60b0aaf00012
>>>>>>> 0d3badc3ec4415ffc27d056e6dd58b0428e6d2c9
        </div>
    </div>
</div>
<!--结果集标题与导航组件 结束-->

<div class="result_wrap">
    {{--表单提交通过post方法提交到admin/category方法里面--}}
    <form action="{{url('admin/category')}}" method="post">
        {{csrf_field()}}
        <table class="add_tab">
            <tbody>
            <tr>
                <th width="120"><i class="require">*</i>父级分类：</th>
                <td>
                    <select name="cate_pid">
                        {{--通过循环数据库中的cate_pid等于0的数据读取父级的标题--}}
                        <option value="">==顶级分类==</option>
                        @foreach($data as $d)
                        <option value="{{$d->cate_id}}">{{$d->cate_name}}</option>
                        @endforeach
                    </select>
                </td>
            </tr>
            <tr>
                <th><i class="require">*</i>分类名称：</th>
                <td>
                    {{--读取分类名称--}}
<<<<<<< HEAD
                    <input type="text" name="cate_name" value="{{$field->cate_name}}">
=======
<<<<<<< HEAD
                    <input type="text" name="cate_name" value="{{$field->cate_name}}">
=======
<<<<<<< HEAD
                    <input type="text" name="cate_name" value="{{$field->cate_name}}">
=======
<<<<<<< HEAD
                    <input type="text" name="cate_name" value="{{$field->cate_name}}">
=======
<<<<<<< HEAD
                    <input type="text" name="cate_name" value="{{$field->cate_name}}">
=======
                    <input type="text" name="cate_name" value="{{$field()->cate_name}}">
>>>>>>> 8c3bffb9c3c6d491dfcb0704ec4f21c6e02e8128
>>>>>>> 009670add50838a872efaa8926121fdd6be8e8d0
>>>>>>> 9de3a6e5b192beea43151da0acccbf2cb48aba2a
>>>>>>> 1d0c44e1f4fbf3ee398df507acff60b0aaf00012
>>>>>>> 0d3badc3ec4415ffc27d056e6dd58b0428e6d2c9
                    <span><i class="fa fa-exclamation-circle yellow"></i>分类名称必须填写</span>
                </td>
            </tr>
            <tr>
                <th>分类标题：</th>
                <td>
<<<<<<< HEAD
                    <input type="text" class="lg" name="cate_title" value="{{$field->cate_title}}">
=======
<<<<<<< HEAD
                    <input type="text" class="lg" name="cate_title" value="{{$field->cate_title}}">
=======
<<<<<<< HEAD
                    <input type="text" class="lg" name="cate_title" value="{{$field->cate_title}}">
=======
<<<<<<< HEAD
                    <input type="text" class="lg" name="cate_title" value="{{$field->cate_title}}">
=======
<<<<<<< HEAD
                    <input type="text" class="lg" name="cate_title" value="{{$field->cate_title}}">
=======
                    <input type="text" class="lg" name="cate_title" value="{{$field()->cate_title}}">
>>>>>>> 8c3bffb9c3c6d491dfcb0704ec4f21c6e02e8128
>>>>>>> 009670add50838a872efaa8926121fdd6be8e8d0
>>>>>>> 9de3a6e5b192beea43151da0acccbf2cb48aba2a
>>>>>>> 1d0c44e1f4fbf3ee398df507acff60b0aaf00012
>>>>>>> 0d3badc3ec4415ffc27d056e6dd58b0428e6d2c9
                </td>
            </tr>
            <tr>
                <th>关键词：</th>
                <td>
<<<<<<< HEAD
                    <textarea name="cate_keywords">{{$field->cate_keywords}}</textarea>
=======
<<<<<<< HEAD
                    <textarea name="cate_keywords">{{$field->cate_keywords}}</textarea>
=======
<<<<<<< HEAD
                    <textarea name="cate_keywords">{{$field->cate_keywords}}</textarea>
=======
<<<<<<< HEAD
                    <textarea name="cate_keywords">{{$field->cate_keywords}}</textarea>
=======
<<<<<<< HEAD
                    <textarea name="cate_keywords">{{$field->cate_keywords}}</textarea>
=======
                    <textarea name="cate_keywords">{{$field()->cate_keywords}}}</textarea>
>>>>>>> 8c3bffb9c3c6d491dfcb0704ec4f21c6e02e8128
>>>>>>> 009670add50838a872efaa8926121fdd6be8e8d0
>>>>>>> 9de3a6e5b192beea43151da0acccbf2cb48aba2a
>>>>>>> 1d0c44e1f4fbf3ee398df507acff60b0aaf00012
>>>>>>> 0d3badc3ec4415ffc27d056e6dd58b0428e6d2c9
                </td>
            </tr>
            <tr>
                <th>描述：</th>
                <td>
<<<<<<< HEAD
                    <textarea name="cate_description">{{$field->cate_description}}</textarea>
=======
<<<<<<< HEAD
                    <textarea name="cate_description">{{$field->cate_description}}</textarea>
=======
<<<<<<< HEAD
                    <textarea name="cate_description">{{$field->cate_description}}</textarea>
=======
<<<<<<< HEAD
                    <textarea name="cate_description">{{$field->cate_description}}</textarea>
=======
<<<<<<< HEAD
                    <textarea name="cate_description">{{$field->cate_description}}</textarea>
=======
                    <textarea name="cate_description">{{$field()->cate_description}}</textarea>
>>>>>>> 8c3bffb9c3c6d491dfcb0704ec4f21c6e02e8128
>>>>>>> 009670add50838a872efaa8926121fdd6be8e8d0
>>>>>>> 9de3a6e5b192beea43151da0acccbf2cb48aba2a
>>>>>>> 1d0c44e1f4fbf3ee398df507acff60b0aaf00012
>>>>>>> 0d3badc3ec4415ffc27d056e6dd58b0428e6d2c9
                </td>
            </tr>
            <tr>
                <th><i class="require">*</i>排序：</th>
                <td>
<<<<<<< HEAD
                    <input type="text" class="sm" name="cate_order" value="{{$field->cate_order}}">
=======
<<<<<<< HEAD
                    <input type="text" class="sm" name="cate_order" value="{{$field->cate_order}}">
=======
<<<<<<< HEAD
                    <input type="text" class="sm" name="cate_order" value="{{$field->cate_order}}">
=======
<<<<<<< HEAD
                    <input type="text" class="sm" name="cate_order" value="{{$field->cate_order}}">
=======
<<<<<<< HEAD
                    <input type="text" class="sm" name="cate_order" value="{{$field->cate_order}}">
=======
                    <input type="text" class="sm" name="cate_order" value="{{$field()->cate_order}}>
>>>>>>> 8c3bffb9c3c6d491dfcb0704ec4f21c6e02e8128
>>>>>>> 009670add50838a872efaa8926121fdd6be8e8d0
>>>>>>> 9de3a6e5b192beea43151da0acccbf2cb48aba2a
>>>>>>> 1d0c44e1f4fbf3ee398df507acff60b0aaf00012
>>>>>>> 0d3badc3ec4415ffc27d056e6dd58b0428e6d2c9
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
