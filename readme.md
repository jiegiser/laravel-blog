# 博客项目实战构建---环境配置


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


### 博客项目实战构建--后台超级管理员密码修改及Validation验证
后台超级管理员密码修改及Validation验证

2017年7月6日
22:10

	1. 首先创建一个路由，作为修改密码的规则：

	2. 在indexController控制器中进行创建pass方法，用于返回修改密码的视窗，然后进行将pass.html改为模板类型，将pass模板进行修改，首先进行引入我们以前创建的子视图，

	修改模板，引入子视图；

	3. 进行访问pass路由，发现我们的模板已经加载成功，下一步进行做表单提交，首先找到模板的token值，更改他的token值，

	以及将form的提交方式更改，更改如下：

	4. 然后进行数据的验证，从我们的修改密码的界面可以看出，我们首先是需要输入正确的原密码，然后通过判断用户input中的密码是否与解密后的密码相同，若相同，则进行，下一步，输入新密码，若不对，则提示用户输入的原密码错误，验证原密码成功后，然后用户进行输入新密码，若新密码小于6位或者大于20位，则返回提示信息输入的新密码必须在6-20位之间！，若两次输入的密码不一致，提示用户重新输入，有了这样的思路，我们进行下一步代码的编写：

	5. 首先我们需要读取input中的内容，并进行判断，若有数据则进行数据处理，若没有数据，则重新返回到修改密码的界面。



	6. 然后我们需要引入引入validator服务，make的第一个为需要验证的参数（提交过来的表单），第二个为验证规则（得我们自己定义规则，是一个数组），第三个参数为提示信息，把验证的信息用变量$validator来接收，然后我们进行判断是否验证成功。

	我们可以通过使用$validator中的第三个参数，（第三个参数为提示信息），来获取验证的错误信息，他的参数为一个数组，所以我们需要定义一个数组，数组中，对那个字段验证就输入字段，.后面为验证的规则，=>后面为提示的信息。补全所有的规则以及返回的信息。

	7. 我们需要判断新密码与确认密码相同，在验证条件中，输入confrime来检查是否匹配。给他一个匹配条件，然后我们需要说明用哪个字段来进行匹配，我们只能使用匹配条件中的默认的规则，我们自己定义的input中的再次确认密码输入框，name为password_c，confrime这个方法是不识别的，所以，我们需要将输入面的input标签的name改为password_confrimation，这样就可以知道与哪个字段匹配。



	然后我们将匹配的提示信息进行修改，提示用户两次输入的不一样。

	8. 然后若用户输入的不符合我们的规则，则需要将错误信息传回到我们的页面，这里使用withErrors函数，这个函数中有一个参数，就是我们验证的参数， reture back就是若填写错误，就返回到修改密码的窗口，也就是刷新一个这个修改密码的页面。我们也必须要在页面中要打印出我们返回的错误信息，然后我们将提示信息放在我们修改密码的界面中，打开修改密码的模板，找到那个显示提示信息的div，

	首先，我们需要用if语句去判断是否有错误信息，他传回的是一个数组，判断是否大于零。若小于零，就是用户没有填错，若大于零，则打印用户填写错误的对应的提示信息。我们就使用foreach读取errors数组中所有的错误信息 ，

	9. 然后我们进行判断用户的输入的原始密码是否与数据库中的密码相同，首先从数据库中读取用户密码信息，然后通过对密码进行解析。判断用户输入的密码与数据库中的是否有相同，User：first（），用Crypt:decrypt进行密码解析，然后用if进行判断。若输入的原面正确，则我们进行修改它的密码，用表单提交的用户输入的新密码来作为用户的密码，
	 $user->user_pass=Crypt::encrypt($input['password']);
	然后进行数据保存:$user->update();
	然后修改完成后，就返回到info信息界面。
	return redirect('admin/info');

	10. 然后我们进行最后一步，在index模板中，点击上面的修改密码，就会跳转到修改密码的界面。

	然后我们打开index模板，在a标签中通过url将连接跳转到我们的修改密码界面。
### 后台文章分类列表页模板导入及基本信息展示

    2017年7月16日
    21:58

    	1. 文章分类的操作，我们需要首先给他分配路由，这里分配路由不在是get或者any方式了，需要使用资源路由，

    	2. 新建控制器。

    	3. 然后将新建的控制器拖到我们的Admin文件夹中，以及修改他的命名空间。

    	4. 可以使用php artisan route：list来查看所有的 路由列表，然后在我们新建的 resource请求的资源，
    	我们只查看以下有关于category相关的请求资源。
    	E:\wampserver\test2>php artisan route:list
    	 |
    	|        | GET|HEAD                       | admin/category                 | admin.c
    	ategory.index   | App\Http\Controllers\Admin\CategoryController@index   | web
    	 |
    	|        | POST                           | admin/category                 | admin.c
    	ategory.store   | App\Http\Controllers\Admin\CategoryController@store   | web
    	 |
    	|        | GET|HEAD                       | admin/category/create          | admin.c
    	ategory.create  | App\Http\Controllers\Admin\CategoryController@create  | web
    	 |
    	|        | GET|HEAD                       | admin/category/{category}      | admin.c
    	ategory.show    | App\Http\Controllers\Admin\CategoryController@show    | web
    	 |
    	|        | PUT|PATCH                      | admin/category/{category}      | admin.c
    	ategory.update  | App\Http\Controllers\Admin\CategoryController@update  | web
    	 |
    	|        | DELETE                         | admin/category/{category}      | admin.c
    	ategory.destroy | App\Http\Controllers\Admin\CategoryController@destroy | web
    	 |
    	|        | GET|HEAD                       | admin/category/{category}/edit | admin.c
    	ategory.edit    | App\Http\Controllers\Admin\CategoryController@edit    |
    	然后我们新建这些请求资源的方法。

    	5. 然后我们需要跟数据库对接，所以需要新建一个模型

    	打开新建的模型，拖放到Model文件夹中，然后修改命名空间，以及初试化信息。
    	namespaceApp\Http\Model;

    	useIlluminate\Database\Eloquent\Model;

    	classCategoryextendsModel
    	{
    	protected$table='category';//数据表
    	protected$primaryKey='cate_id';//主键
    	public$timestamps=false;//更新时间与添加时间
    	}
    	6. 然后我们可以试着去读取以下数据表中的所有数据。
    	$categorys=Category::all();
    	dd($categorys);
    	可以使用dd方法打印，查看我们读取的数据。当然我们首先需要在我们的数据表中输入一些东西。

    	然后读取数据。


    	7. 然后我们需要将读取到的数据展示到页面中，需要分配一个模板，
    	returnview('admin.category.index',['data'=>$categorys]);
    	这里应该使用[]这种方法来将读取的categorys数据读取到页面中，为data变量。然后修改我们展示数据的html为blade模板。

    	8. 修改页面中的内容。然后我们使用foreach来进行循环读取数据。

    	Endforeach放在我们读取的表格的（tr标签的后面）

    最终结果：
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
>>>>>>> 43f5691389ef960ea21c1ba9929f70b29ead16a0



### 后台文章分类页多级分类列表	
    1. 首先我们在数据库中，新建一些一级标题的子栏目，比如新闻下面的军事新闻啊，填充我们的数据库。
	
	2. 然后我们刷新我们的界面，我们看到所有的数据都展示出来，我们应该将数据进行处理让新闻一级菜单下面的军事新闻显示跟一级菜单不一样。
	
	3. 我们新建一个方法，gettree，然后在方法里面传入我们读入数据库的数据，也就是我们的categorys参数。我们在category模型中，声明一个getTree函数。
	
	publicfunctiontree()
	{
	$categorys=$this->all();
	//dd($categorys);
	return$this->getTree($categorys,'cate_name','cate_id','cate_pid');
	}
	4. 然后我们需要进行分类，首先我们需要将pid为0的数据读取出来，是我们的一级菜单。然后我们进行判断pid不是0的数据哪个是新闻，或者体育的内容，因为一级菜单的cate_id是不同的。首先我们使用foreach语句进行筛选pid为0 的数据。
	publicfunctiongetTree($data,$field_name,$field_id='id',$field_pid='pid',$pid=0)
	{
	//将判断后的数据放在arr中
	$arr=array();
	foreach($dataas$k=>$v){
	if($v->$field_pid==$pid){
	
	$data[$k]["_".$field_name]=$data[$k][$field_name];
	//将符合的数据保存在arr数组中
	$arr[]=$data[$k];
	//循环我们判断后的数据，
	foreach($dataas$m=>$n){
	//进行判断，当前数据中的cate_pid等于我们当前循环的cata_id的数据所有数据，也就是新闻下面对应的子菜单，对应的遍历出来。追加到后面。
	if($n->$field_pid==$v->$field_id){
	//然后我们在
	$data[$m]["_".$field_name]='├─'.$data[$m][$field_name];
	$arr[]=$data[$m];
	}
	}
	}
	}
	//返回arr让他在页面中显示
	Return  $arr;
	}
	5. 进行重组数据之后，我们应该将我们的data数据传回到页面中。使用如下代码：
	$categorys=(newCategory)->tree();
	//returnview('admin.category.index')->with('data','$categorys');
	returnview('admin.category.index',['data'=>$categorys]);
	6. 我们发现数据读取后，发现我们区分不出二级菜单，我们可以在读取得到的数据前面加一个标识符，├─来表示一个层级关系。
	if($n->$field_pid==$v->$field_id){
	$data[$m]["_".$field_name]='├─'.$data[$m][$field_name];
	$arr[]=$data[$m];
	}
	7. 添加成功后，我们在页面读取二级菜单时，需要读取我们新的字段。
	<td>
	<ahref="#">{{$v->_cate_name}}</a>
	</td>
	8. 我们博客在以后的运行中，会出现很多的二级分类，我们在getTree函数中，设置的输入的字段设置为了固定，我们需要在我们将字段设置为以后博客系统通用的字段。
	整个函数的代码：
	publicfunctiontree()
	{
	$categorys=$this->all();
	//dd($categorys);
	return$this->getTree($categorys,'cate_name','cate_id','cate_pid');
	}
	publicfunctiongetTree($data,$field_name,$field_id='id',$field_pid='pid',$pid=0)
	{
	$arr=array();
	foreach($dataas$k=>$v){
	if($v->$field_pid==$pid){
	$data[$k]["_".$field_name]=$data[$k][$field_name];
	$arr[]=$data[$k];
	foreach($dataas$m=>$n){
	if($n->$field_pid==$v->$field_id){
	$data[$m]["_".$field_name]='├─'.$data[$m][$field_name];
	$arr[]=$data[$m];
	}
	}
	}
	}
	return$arr;
	}
	9. 字段$pid我们可以进行这样传入参数，然后在声明函数中，设置$pid=0，
	if($v->$field_pid==$pid)
	我们也可以设置$field_id='id‘，cate_id的默认为id，这样，大众化的人们会使用id。
	publicfunctiongetTree($data,$field_name,$field_id='id',$field_pid='pid',$pid=0)
	10. 我们不能直接将函数放在控制器中，我们可以将函数放在我们的模型中。在模型中新建一个tree函数。
	publicfunctiontree()
	{
	$categorys=$this->all();
	//dd($categorys);
	return$this->getTree($categorys,'cate_name','cate_id','cate_pid');
	}
	11. 我们使用public定义函数时，在我们的控制器中，调用tree函数时，我们需要实例化一个tree，然后指向tree函数。
        $categorys=(newCategory)->tree();
	12. 也可以使用这么方法：
	publicstaticfunctiontree()
	//{
	//$categorys=Category::all();
	////dd($categorys);
	//return(newCategory)->getTree($categorys,'cate_name','cate_id','cate_pid');
	//}
	13. 在控制器中使用如下函数接受数据：
	$categorys=(newCategory()->tree());
	14. 模型中整体代码如下：
	publicfunctiontree()
	{
	$categorys=$this->all();
	//dd($categorys);
	return$this->getTree($categorys,'cate_name','cate_id','cate_pid');
	}
	publicfunctiongetTree($data,$field_name,$field_id='id',$field_pid='pid',$pid=0)
	{
	$arr=array();
	foreach($dataas$k=>$v){
	if($v->$field_pid==$pid){
	$data[$k]["_".$field_name]=$data[$k][$field_name];
	$arr[]=$data[$k];
	foreach($dataas$m=>$n){
	if($n->$field_pid==$v->$field_id){
	$data[$m]["_".$field_name]='├─'.$data[$m][$field_name];
	$arr[]=$data[$m];
	}
	}
	}
	}
	return$arr;
	}
=======
>>>>>>> d69e38e7e1e983d9244013e33f7644a2f37310b5
>>>>>>> 0e63c97cbf95d244f8e298156301ccfe6779534b
<<<<<<< HEAD
=======
>>>>>>> 199dc8b4469af12636e4fa275d3163100edb7b7b
>>>>>>> 43f5691389ef960ea21c1ba9929f70b29ead16a0
>>>>>>> 8c3bffb9c3c6d491dfcb0704ec4f21c6e02e8128
>>>>>>> 009670add50838a872efaa8926121fdd6be8e8d0
>>>>>>> 9de3a6e5b192beea43151da0acccbf2cb48aba2a
>>>>>>> 1d0c44e1f4fbf3ee398df507acff60b0aaf00012
>>>>>>> 0d3badc3ec4415ffc27d056e6dd58b0428e6d2c9
>>>>>>> f09f7be4580995de5e6a8a23aadab72761b6cf7a
