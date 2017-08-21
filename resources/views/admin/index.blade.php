@extends('layouts.admin')
@section('content')
		<!--头部 开始-->
<div class="top_box">
	<div class="top_left">
		<div class="logo">后台管理</div>
		<ul>
			<li><a href="{{url('/')}}" target="_blank" class="active">首页</a></li>
			<li><a href="{{url('admin/info')}}" target="main">管理页</a></li>
		</ul>
	</div>
	<div class="top_right">
		<ul>
			<li>管理员：admin</li>
			<li><a href="{{url('admin/pass')}}" target="main">修改密码</a></li>
			<li><a href="{{url('admin/quit')}}">退出</a></li>
		</ul>
	</div>
</div>
<!--头部 结束-->

<!--左侧导航 开始-->
<div class="menu_box">
	<ul>
		<li>
			<h3><i class="fa fa-fw fa-clipboard"></i>内容管理</h3>
			<ul class="sub_menu">
<<<<<<< HEAD
				<li><a href="{{url('admin/category/create')}}" target="main"><i class="fa fa-fw fa-plus-square"></i>添加分类</a></li>
				<li><a href="{{url('admin/category')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>分类列表</a></li>
				<li><a href="{{url('admin/article/create')}}" target="main"><i class="fa fa-fw fa-plus-square"></i>添加文章</a></li>
				<li><a href="{{url('admin/article')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>文章列表</a></li>
=======
<<<<<<< HEAD
				<li><a href="{{url('admin/category/create')}}" target="main"><i class="fa fa-fw fa-plus-square"></i>添加分类</a></li>
				<li><a href="{{url('admin/category')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>分类列表</a></li>
=======
<<<<<<< HEAD
				<li><a href="{{url('admin/category/create')}}" target="main"><i class="fa fa-fw fa-plus-square"></i>添加分类</a></li>
				<li><a href="{{url('admin/category')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>分类列表</a></li>
=======
<<<<<<< HEAD
				<li><a href="{{url('admin/category/create')}}" target="main"><i class="fa fa-fw fa-plus-square"></i>添加分类</a></li>
				<li><a href="{{url('admin/category')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>分类列表</a></li>
=======
<<<<<<< HEAD
				<li><a href="{{url('admin/category/create')}}" target="main"><i class="fa fa-fw fa-plus-square"></i>添加分类</a></li>
				<li><a href="{{url('admin/category')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>分类列表</a></li>
=======
<<<<<<< HEAD
				<li><a href="{{url('admin/category/create')}}" target="main"><i class="fa fa-fw fa-plus-square"></i>添加分类</a></li>
				<li><a href="{{url('admin/category')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>分类列表</a></li>
=======
<<<<<<< HEAD
				<li><a href="{{url('admin/category/create')}}" target="main"><i class="fa fa-fw fa-plus-square"></i>添加分类</a></li>
				<li><a href="{{url('admin/category')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>分类列表</a></li>
=======
<<<<<<< HEAD
				<li><a href="{{url('admin/category/create')}}" target="main"><i class="fa fa-fw fa-plus-square"></i>添加分类</a></li>
				<li><a href="{{url('admin/category')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>分类列表</a></li>
=======
<<<<<<< HEAD
				<li><a href="{{url('admin/category/create')}}" target="main"><i class="fa fa-fw fa-plus-square"></i>添加分类</a></li>
				<li><a href="{{url('admin/category')}}" target="main"><i class="fa fa-fw fa-list-ul"></i>分类列表</a></li>
=======
				<li><a href="category/add.html" target="main"><i class="fa fa-fw fa-plus-square"></i>添加页</a></li>
				<li><a href="list.html" target="main"><i class="fa fa-fw fa-list-ul"></i>列表页</a></li>
>>>>>>> 8c3bffb9c3c6d491dfcb0704ec4f21c6e02e8128
>>>>>>> 009670add50838a872efaa8926121fdd6be8e8d0
>>>>>>> 9de3a6e5b192beea43151da0acccbf2cb48aba2a
>>>>>>> 1d0c44e1f4fbf3ee398df507acff60b0aaf00012
>>>>>>> 0d3badc3ec4415ffc27d056e6dd58b0428e6d2c9
>>>>>>> f09f7be4580995de5e6a8a23aadab72761b6cf7a
>>>>>>> b14c1efb23efb69f4e75f1242c77a579b63a421d
>>>>>>> 9bf9963412e5665df40ab2f838dd2b5ff84bbfaf
				<li><a href="tab.html" target="main"><i class="fa fa-fw fa-list-alt"></i>tab页</a></li>
				<li><a href="img.html" target="main"><i class="fa fa-fw fa-image"></i>图片列表</a></li>
>>>>>>> ebfbc020cd0616a37ec159c7b9d2fbed82c303c1
			</ul>
		</li>
		<li>
			<h3><i class="fa fa-fw fa-cog"></i>系统设置</h3>
			<ul class="sub_menu" style="display: block;">
				<li><a href="{{url('admin/links')}}" target="main"><i class="fa fa-fw fa-cubes"></i>友情链接</a></li>
				<li><a href="{{url('admin/navs')}}" target="main"><i class="fa fa-fw fa-navicon"></i>自定义导航</a></li>
				<li><a href="{{url('admin/config')}}" target="main"><i class="fa fa-fw fa-cogs"></i>网站配置</a></li>
			</ul>
		</li>
	</ul>
</div>
<!--左侧导航 结束-->

<!--主体部分 开始-->
<div class="main_box">
	<iframe src="{{url('admin/info')}}" frameborder="0" width="100%" height="100%" name="main"></iframe>
</div>
<!--主体部分 结束-->

<!--底部 开始-->
<div class="bottom_box">
	CopyRight © 2017. Powered By <a href="http://jiegiser.win">jiegiser</a>.
</div>
<!--底部 结束-->

@endsection


