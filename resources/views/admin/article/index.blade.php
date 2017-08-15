@extends('layouts.admin')
@section('content')
        <!--面包屑导航 开始-->
<div class="crumb_warp">
    <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> b14c1efb23efb69f4e75f1242c77a579b63a421d
>>>>>>> 9bf9963412e5665df40ab2f838dd2b5ff84bbfaf
    <i class="fa fa-home"></i> <a href="{{url('admin/info')}}">首页</a> &raquo; 文章管理
</div>
<!--面包屑导航 结束-->

<!--搜索结果页面 列表 开始-->
<form action="#" method="post">
    <div class="result_wrap">
        <!--快捷导航 开始-->
        <div class="result_title">
            <h3>文章列表</h3>
        </div>
        <div class="result_content">
            <div class="short_wrap">
                <a href="{{url('admin/article/create')}}"><i class="fa fa-plus"></i>添加文章</a>
                <a href="{{url('admin/article')}}"><i class="fa fa-recycle"></i>全部文章</a>
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
    <i class="fa fa-home"></i> <a href="#">首页</a> &raquo; <a href="#">商品管理</a> &raquo; 添加商品
</div>
<!--面包屑导航 结束-->

<!--结果页快捷搜索框 开始-->
<div class="search_wrap">
    <form action="" method="post">
        <table class="search_tab">
            <tr>
                <th width="120">选择分类:</th>
                <td>
                    <select onchange="javascript:location.href=this.value;">
                        <option value="">全部</option>
                        <option value="http://www.baidu.com">百度</option>
                        <option value="http://www.sina.com">新浪</option>
                    </select>
                </td>
                <th width="70">关键字:</th>
                <td><input type="text" name="keywords" placeholder="关键字"></td>
                <td><input type="submit" name="sub" value="查询"></td>
            </tr>
        </table>
    </form>
</div>
<!--结果页快捷搜索框 结束-->

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
>>>>>>> f09f7be4580995de5e6a8a23aadab72761b6cf7a
>>>>>>> b14c1efb23efb69f4e75f1242c77a579b63a421d
>>>>>>> 9bf9963412e5665df40ab2f838dd2b5ff84bbfaf
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
>>>>>>> b14c1efb23efb69f4e75f1242c77a579b63a421d
>>>>>>> 9bf9963412e5665df40ab2f838dd2b5ff84bbfaf
                    <th class="tc">ID</th>
                    <th>标题</th>
                    <th>点击</th>
                    <th>编辑</th>
                    <th>发布时间</th>
                    <th>操作</th>
                </tr>
                @foreach($data as $v)
                    <tr>
                        <td class="tc">{{$v->art_id}}</td>
                        <td>
                            <a href="#">{{$v->art_title}}</a>
                        </td>
                        <td>{{$v->art_view}}</td>
                        <td>{{$v->art_editor}}</td>
                        <td>{{date('Y-m-d',$v->art_time)}}</td>
                        <td>
                            <a href="{{url('admin/article/'.$v->art_id.'/edit')}}">修改</a>
                            <a href="javascript:;" onclick="delArt({{$v->art_id}})">删除</a>
                        </td>
                    </tr>
                @endforeach
            </table>

            <div class="page_list">
                {{$data->links()}}
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
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
                <tr>
                    <td class="tc"><input type="checkbox" name="id[]" value="59"></td>
                    <td class="tc">
                        <input type="text" name="ord[]" value="0">
                    </td>
                    <td class="tc">59</td>
                    <td>
                        <a href="#">Apple iPhone 6 Plus (A1524) 16GB 金色 移动联通电信4G手机</a>
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
                        <a href="#">荣耀 6 (H60-L11) 3GB内存增强版 白色 移动4G手机</a>
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
>>>>>>> f09f7be4580995de5e6a8a23aadab72761b6cf7a
>>>>>>> b14c1efb23efb69f4e75f1242c77a579b63a421d
>>>>>>> 9bf9963412e5665df40ab2f838dd2b5ff84bbfaf
            </div>
        </div>
    </div>
</form>
<!--搜索结果页面 列表 结束-->
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> b14c1efb23efb69f4e75f1242c77a579b63a421d
>>>>>>> 9bf9963412e5665df40ab2f838dd2b5ff84bbfaf

<style>
    .result_content ul li span {
        font-size: 15px;
        padding: 6px 12px;
    }
</style>

<script>
    //删除分类
    function delArt(art_id) {
        layer.confirm('您确定要删除这篇文章吗？', {
            btn: ['确定','取消'] //按钮
        }, function(){
            $.post("{{url('admin/article/')}}/"+art_id,{'_method':'delete','_token':"{{csrf_token()}}"},function (data) {
                if(data.status==0){
                    location.href = location.href;
                    layer.msg(data.msg, {icon: 6});
                }else{
                    layer.msg(data.msg, {icon: 5});
                }
            });
//            layer.msg('的确很重要', {icon: 1});
        }, function(){

        });
    }
</script>

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> f09f7be4580995de5e6a8a23aadab72761b6cf7a
>>>>>>> b14c1efb23efb69f4e75f1242c77a579b63a421d
>>>>>>> 9bf9963412e5665df40ab2f838dd2b5ff84bbfaf
@endsection
