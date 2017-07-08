# 博客项目实战构建


###  	1. 首先安装composer
###  	2. 下载安装laravel
	Cmd到bolg文件地址输入下面命令：
	Composer create-project laravel/laravel --prefer-dist
###  3. 将下载好的laravel项目打开，首先将server.php该问index，然后将public文件中的httpcss伪静态类移动到blog文件夹，也就是public外面，然后访问配置的本地域名，查看是否成功。
###  	4. 然后进行修改数据库的前缀：
	在config（配置）文件夹中找到database.php文件，在prefix（前缀）后面添加下面代码；
	'prefix' => env('DB_PREFIX', ''),
###  	5. 打开env文件，给数据库添加前缀：
	DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=blog1
    DB_PREFIX=blog_
###  	6. 配置路由，测试数据库是否连接成功：
	首先用命令创建一个控制器，输入下面命令：php artisan make:controller indexController

	然后会在controller文件夹中找到刚刚创建的控制器，
	首先输入DB::引入必要的命名空间，然后删除DB::,查看是否引用DB类，若没有则需要手动输入引用：
    然后在控制器中新建一个方法，

###  	7. 配置路由，测试数据库是否连接成功：
	打开route.php文件，进行配置路由：

###  	8. 然后去访问，会出现以下错误：

	说是没有找到数据库，这时候我们需要在新建一个数据库，用于存放数据。

	打开localhost/phpmyAdmin点击新建数据库，然后选择排序规则为utf-8 unicode

	然后重新打开ecv文件，进行配置，数据库名，以及本地数据库的名称以及密码：


###  	9. 重新加载打开域名查看结果，会出现数据库中的信息，就表明数据库连接成功

###  	10. 到此我们首先将blog环境配置成功。
