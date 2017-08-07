<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Category;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

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
//        查找input表单中输入的cate_id数据
        $cate=Category::find($input['cate_id']);
//        进行将对应的数据的cate_order进行修改为与inpur中输入的相同
        $cate->cate_order=$input['cate_order'];
//        更新cate_order
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

//get.admin/category/create 添加分类
    public function create()
    {
        $data=Category::where('cate_pid',0)->get();
        return view('admin/category/add',compact('data'));
    }
    //post.admin/category 添加分类提交
    public function store()
    {
//        读取input表单中的数据，除去token值之外的数据，写入数据库中。
            $input=Input::except('_token');
//        对用户提交的内容进限定
            $rules=[
//                文章的标题不能为空
                'cate_name'=>'required',
            ];
            $message=[
                'cate_name.required' =>'分类名称不能为空！',//验证required是否有值
            ];
            $validator=Validator::make($input,$rules,$message);
            //引入validator服务，第一个为需要验证的参数，第二个为验证规则，第三个参数为提示信息
            if($validator->passes()){//判断是否passes通过了返回为真
//                将入库的数据通过category创建，然后保存在re变量中
                $re=Category::create($input);
                if($re){
//                    添加数据成功，返回到分页界面
                    return redirect('admin/category');
                }
                else{
//                    添加文章失败
                    return back()->with('errors','数据填充失败，请稍后重试！');
                }
            }else{
                //若密码错误返回到修改密码窗口,
                return back()->withErrors($validator);//传回错误信息，传回到页面,$validator参数为验证参数
                //dd($validator->errors()->all());//找到全部的错误
            }
    }
    //get.admin/category/{create}/edit 编辑分类
    public function edit($cate_id)
    {
        $field=Category::find($cate_id);
        $data=Category::where('cate_pid',0)->get();
        return view('admin.category.edit',compact('field','data'));
    }
    //put.admin/category/create 更新分类
    public function update()
    {

    }
    //get.admin/category/[create] 显示单个分类信息
    public function show()
    {

    }
    //delete.admin/category/create 删除单个分类
    public function destroy($cate_id)
    {
//        echo 1111;
//        查找与删除页面中的cate_id对应的数据，使用delete方法进行删除数据
        $re=Category::where('cate_id',$cate_id)->delete();
//        查询cate_pid如果等于当前的这个cate_id，则将更新cate_pid为0
        Category::where('cate_pid',$cate_id)->update(['cate_pid'=>0]);
        if($re){
//            传回一个数组提示信息，
            $data=[
                'status'=> 0,
                'msg'=> '分类删除成功！',
            ];
        }else{
            $data=[
                'status'=>1,
                'msg'=> '分类删除失败，请稍后重试！',
            ];
        }
//        返回提示信息
       return $data;
    }

}
