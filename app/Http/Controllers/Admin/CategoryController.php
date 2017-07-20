<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Category;
use Illuminate\Http\Request;

use App\Http\Requests;

class CategoryController extends CommonController
{
    //get admin/category 全部分类列表
    public function index()
    {
//        读取全部信息
        $categorys=Category::all();
<<<<<<< HEAD
        //dd($categorys);
=======
>>>>>>> ce40484cdf7b00ece5a0cb56f5ae099e33e372ec
//        return view('admin.category.index')->with('data','$categorys');
        return view('admin.category.index', ['data' => $categorys]);
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
