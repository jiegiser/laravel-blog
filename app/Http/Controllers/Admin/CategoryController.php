<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Category;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class CategoryController extends CommonController
{
    //get admin/category 全部分类列表
    public function index()
    {
//        读取全部信息
        $categorys=(new Category)->tree();
//        return view('admin.category.index')->with('data','$categorys');
        return view('admin.category.index', ['data' => $categorys]);
    }

    public function changeOrder()
    {
        $input=Input::all();
//        echo $input['cate_id'];
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
//post.admin/category
    public function store()
    {
        
    }
//get.admin/category/create 添加分类
    public function create()
    {
        
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
