<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="{{ asset('resources/views/admin/style/css/ch-ui.admin.css') }}">
	<link rel="stylesheet" href="{{ asset('resources/views/admin/style/font/css/font-awesome.min.css') }}">
</head>
<body style="background:#F3F3F4;">
	<div class="login_box">
		<h1>Blog</h1>
		<h2>欢迎使用博客管理平台</h2>
		<div class="form">
			@if(session('msg'))
				<!--//进行判断，若session中的msg是否有东西，-->
			<p style="color:red">{{session('msg')}}</p>
				<!--将session中的提示信息打印出来-->
			@endif
			<form action="" method="post">
				{{csrf_field()}}
				<ul>
					<li>
					<input type="text" name="user_name" class="text"/>
						<span><i class="fa fa-user"></i></span>
					</li>
					<li>
						<input type="password" name="user_pass" class="text"/>
						<span><i class="fa fa-lock"></i></span>
					</li>
					<li>
						<input type="text" class="code" name="code"/>
						<span><i class="fa fa-check-square-o"></i></span>
						<img src="{{ url('admin/code') }}" alt="" onclick="this.src='{{ url('admin/code') }}?'+Math.random()">
					</li>
					<li>
						<input type="submit" value="立即登陆"/>
					</li>
				</ul>
			</form>
			<p><a href="#">返回首页</a> &copy; 2016 Powered by <a href="http://www.jiegiser.win" target="_blank">http://www.jiegiser.win</a></p>
		</div>
	</div>
</body>
</html>