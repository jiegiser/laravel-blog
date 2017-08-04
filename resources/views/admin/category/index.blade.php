@extends('layouts.admin')
@section('content')
<<<<<<< HEAD
<!--面包屑导航 开始-->
=======
<<<<<<< HEAD
=======

>>>>>>> 19036491e6dcf2e08bb27139bc454fafc7f69f7a
        <!--面包屑导航 开始-->
>>>>>>> 0e63c97cbf95d244f8e298156301ccfe6779534b
<div class="crumb_warp">
    <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
    <i class="fa fa-home"></i> <a href="{{url('admin/info')}}">首页</a> &raquo;  全部分类
</div>
<!--面包屑导航 结束-->

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


>>>>>>> ce40484cdf7b00ece5a0cb56f5ae099e33e372ec
>>>>>>> c9979a0ca48cc7a5ab56b5999c26bcffb9704f9f
>>>>>>> d69e38e7e1e983d9244013e33f7644a2f37310b5
>>>>>>> bccaf6d3020f9500f6751e9bf4138abd72c5adf3
>>>>>>> 19036491e6dcf2e08bb27139bc454fafc7f69f7a
>>>>>>> 0e63c97cbf95d244f8e298156301ccfe6779534b
<!--搜索结果页面 列表 开始-->
<form action="#" method="post">
    <div class="result_wrap">
        <div class="result_title">
            <h3>快捷操作</h3>
        </div>
        <!--快捷导航 开始-->
        <div class="result_content">
            <div class="short_wrap">
                <a href="#"><i class="fa fa-plus"></i>新增文章</a>
                <a href="#"><i class="fa fa-recycle"></i>批量删除</a>
                <a href="#"><i class="fa fa-refresh"></i>更新排序</a>
            </div>
        </div>
        <!--快捷导航 结束-->
    </div>

    <div class="result_wrap">
        <div class="result_content">
            <table class="list_tab">
                <tr>
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
>>>>>>> c9979a0ca48cc7a5ab56b5999c26bcffb9704f9f
>>>>>>> d69e38e7e1e983d9244013e33f7644a2f37310b5
>>>>>>> bccaf6d3020f9500f6751e9bf4138abd72c5adf3
>>>>>>> 19036491e6dcf2e08bb27139bc454fafc7f69f7a
>>>>>>> 0e63c97cbf95d244f8e298156301ccfe6779534b
                    <th class="tc" width="5%">排序</th>
                    <th class="tc"width="5%">ID</th>
                    <th>分类名称</th>
                    <th>标题</th>
                    <th>查看次数</th>
                    <th>操作</th>
                </tr>
                @foreach($data as $v)
                <tr>
                    <td class="tc">
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 19036491e6dcf2e08bb27139bc454fafc7f69f7a
>>>>>>> 0e63c97cbf95d244f8e298156301ccfe6779534b
                        <input type="text" onchange="changeOrder(this,{{$v->cate_id}})" name="ord[]" value="{{$v->cate_order}}">
                    </td>
                    <td class="tc">{{$v->cate_id}}</td>
                    <td>
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
                        <input type="text" name="ord[]" value="{{$v->cate_order}}">
                    </td>
                    <td class="tc">{{$v->cate_id}}</td>
                    <td>
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d69e38e7e1e983d9244013e33f7644a2f37310b5
>>>>>>> bccaf6d3020f9500f6751e9bf4138abd72c5adf3
>>>>>>> 19036491e6dcf2e08bb27139bc454fafc7f69f7a
>>>>>>> 0e63c97cbf95d244f8e298156301ccfe6779534b
                        <a href="#">{{$v->_cate_name}}</a>
                    </td>
                    <td>{{$v->cate_title}}</td>
                    <td>{{$v->cate_view}}</td>
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
                        <a href="#">{{$v->cate_name}}</a>
                    </td>
                    <td>{{$v->cate_title}}</td>
                    <td>{{$v->cate_view}}</td>
=======
                    <th class="tc" width="5%"><input type="checkbox" name=""></th>
                    <th class="tc">排序</th>
                    <th class="tc">ID</th>
                    <th>标题</th>
                    <th>审核状态</th>
                    <th>点击</th>
                    <th>发布人</th>
                    <th>更新时间</th>
                    <th>评论</th>
                    <th>操作</th>
                </tr>
                @foreach($data as $v)

                <tr>
                    <td class="tc"><input type="checkbox" name="id[]" value="59"></td>
                    <td class="tc">
                        <input type="text" name="ord[]" value="0">
                    </td>
                    <td class="tc">59</td>
                    <td>
                        <a href="#">{{$v->cate_name}}</a>
                    </td>
                    <td>0</td>
                    <td>2</td>
                    <td>admin</td>
                    <td>2014-03-15 21:11:01</td>
                    <td></td>
                    <td>
                        <a href="#">修改</a>
                        <a href="#">删除</a>
                    </td>
                </tr>

                <tr>
                    <td class="tc"><input type="checkbox" name="id[]" value="59"></td>
                    <td class="tc">
                        <input type="text" name="ord[]" value="0">
                    </td>
                    <td class="tc">59</td>
                    <td>
                        <a href="#">三星 SM-G5308W 白色 移动4G手机 双卡双待</a>
                    </td>
                    <td>0</td>
                    <td>2</td>
                    <td>admin</td>
                    <td>2014-03-15 21:11:01</td>
                    <td></td>
>>>>>>> ce40484cdf7b00ece5a0cb56f5ae099e33e372ec
>>>>>>> c9979a0ca48cc7a5ab56b5999c26bcffb9704f9f
>>>>>>> d69e38e7e1e983d9244013e33f7644a2f37310b5
>>>>>>> bccaf6d3020f9500f6751e9bf4138abd72c5adf3
>>>>>>> 19036491e6dcf2e08bb27139bc454fafc7f69f7a
>>>>>>> 0e63c97cbf95d244f8e298156301ccfe6779534b
                    <td>
                        <a href="#">修改</a>
                        <a href="#">删除</a>
                    </td>
                </tr>

                @endforeach}

            </table>


            <div class="page_nav">
                <div>
                    <a class="first" href="/wysls/index.php/Admin/Tag/index/p/1.html">第一页</a>
                    <a class="prev" href="/wysls/index.php/Admin/Tag/index/p/7.html">上一页</a>
                    <a class="num" href="/wysls/index.php/Admin/Tag/index/p/6.html">6</a>
                    <a class="num" href="/wysls/index.php/Admin/Tag/index/p/7.html">7</a>
                    <span class="current">8</span>
                    <a class="num" href="/wysls/index.php/Admin/Tag/index/p/9.html">9</a>
                    <a class="num" href="/wysls/index.php/Admin/Tag/index/p/10.html">10</a>
                    <a class="next" href="/wysls/index.php/Admin/Tag/index/p/9.html">下一页</a>
                    <a class="end" href="/wysls/index.php/Admin/Tag/index/p/11.html">最后一页</a>
                    <span class="rows">11 条记录</span>
                </div>
            </div>



            <div class="page_list">
                <ul>
                    <li class="disabled"><a href="#">&laquo;</a></li>
                    <li class="active"><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">&raquo;</a></li>
                </ul>
            </div>
        </div>
    </div>
</form>
<!--搜索结果页面 列表 结束-->
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 0e63c97cbf95d244f8e298156301ccfe6779534b
<script>
   function changeOrder(obj,cate_id){
       var cate_order=$(obj).val();
       $.post("{{url('admin/cate/changeorder')}}",{'_token':'{{csrf_token()}}','cate_id':cate_id,'cate_order':cate_order},function(data){
           if(data.status==0){
               layer.alert(data.msg, {icon: 6});
           }
          else {
               layer.msg(data.msg, {icon: 5});
           }
       });
   }
</script>
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
<script>
   function changeOrder(obj,cate_id){
       var cate_order=$(obj).val();
       $.post("{{url('admin/cate/changeorder')}}}",{'_token':'{{csrf_token()}}',cate_id,'cate_order':cate_order},function(data){
           alert(data.msg);
       });
   }
</script>
=======

>>>>>>> bccaf6d3020f9500f6751e9bf4138abd72c5adf3
>>>>>>> 19036491e6dcf2e08bb27139bc454fafc7f69f7a
>>>>>>> 0e63c97cbf95d244f8e298156301ccfe6779534b
@endsection
