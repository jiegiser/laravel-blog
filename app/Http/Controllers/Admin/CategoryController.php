<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Category;
use Illuminate\Http\Request;

use App\Http\Requests;
<<<<<<< HEAD
use Illuminate\Support\Facades\Input;
=======
<<<<<<< HEAD
use Illuminate\Support\Facades\Input;
=======
<<<<<<< HEAD
use Illuminate\Support\Facades\Input;
=======
>>>>>>> bccaf6d3020f9500f6751e9bf4138abd72c5adf3
>>>>>>> 19036491e6dcf2e08bb27139bc454fafc7f69f7a
>>>>>>> 0e63c97cbf95d244f8e298156301ccfe6779534b

class CategoryController extends CommonController
{
    //get admin/category 全部分类列表
    public function index()
    {
//        读取全部信息
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d69e38e7e1e983d9244013e33f7644a2f37310b5
>>>>>>> bccaf6d3020f9500f6751e9bf4138abd72c5adf3
>>>>>>> 19036491e6dcf2e08bb27139bc454fafc7f69f7a
>>>>>>> 0e63c97cbf95d244f8e298156301ccfe6779534b
        $categorys=(new Category)->tree();
//        return view('admin.category.index')->with('data','$categorys');
        return view('admin.category.index', ['data' => $categorys]);
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 0e63c97cbf95d244f8e298156301ccfe6779534b
    public function changeOrder()
    {
        $input=Input::all();
//        echo $input['cate_id'];
<<<<<<< HEAD
=======
=======
<<<<<<< HEAD
    public function changeOrder()
    {
        $input=Input::all();
        echo $input['cate_id'];
>>>>>>> 19036491e6dcf2e08bb27139bc454fafc7f69f7a
>>>>>>> 0e63c97cbf95d244f8e298156301ccfe6779534b
        $cate=Category::find($input['cate_id']);
        $cate->cate_order=$input['cate_order'];
        $re= $cate->update();
        if($re){
            $data=[
                'status'=>0,
                'msg'=>'分类排序成功！',
            ];
        }
        else{
            $data=[
                'status'=>1,
                'msg'=>'分类排序更新失败，请稍后重试！',
            ];
        }
        return $data;
    }
<<<<<<< HEAD

//get.admin/category/create 添加分类
    public function create()
    {
        $data=Category::where('cate_pid',0)->get();
        return view('admin/category/add',compact('data'));
    }
    //post.admin/category 添加分类提交
    public function store()
    {
        $input=Input::all();
        dd($input);
=======
<<<<<<< HEAD
=======
=======

<<<<<<< HEAD
=======
=======
        $categorys=Category::all();
<<<<<<< HEAD
        //dd($categorys);
=======
>>>>>>> ce40484cdf7b00ece5a0cb56f5ae099e33e372ec
//        return view('admin.category.index')->with('data','$categorys');
        return view('admin.category.index', ['data' => $categorys]);
    }
>>>>>>> c9979a0ca48cc7a5ab56b5999c26bcffb9704f9f
>>>>>>> d69e38e7e1e983d9244013e33f7644a2f37310b5
>>>>>>> bccaf6d3020f9500f6751e9bf4138abd72c5adf3
>>>>>>> 19036491e6dcf2e08bb27139bc454fafc7f69f7a
//post.admin/category
    public function store()
    {
        
    }
//get.admin/category/create 添加分类
    public function create()
    {
        
>>>>>>> 0e63c97cbf95d244f8e298156301ccfe6779534b
    }
    //get.admin/category/[create] 显示单个分类信息
    public function show()
    {

    }
    //delete.admin/category/create 删除单个分类
    public function destory()
    {

    }
    //put.admin/category/create 更新分类
    public function update()
    {

    }
    //get.admin/category/[create]/edit 编辑分类
    public function edit()
    {

    }
}
