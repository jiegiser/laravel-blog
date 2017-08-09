<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\Article;
use App\Http\Model\Category;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class ArticleController extends CommonController
{
    //get admin/article 全部文章列表
    public function index()
    {
        echo 444444;
    }
    //get.admin/article/create 添加文章
    public function create()
    {
        //        读取全部信息
        $data=(new Category)->tree();
       return view('admin.article.add',compact('data'));
    }
    //post.admin/article 添加文章提交
    public function store()
    {
        $input = Input::except(['_token','file_upload']);
        $input['art_time'] = time();
        $re = Article::create($input);
        dd($re);

//        $rules = [
//            'article_title'=>'required',
//        ];
//        $msg = [
//            'article_title.required'=>'文章标题不能为空!',
//        ];
//        $validator = Validator::make($input,$rules,$msg);
//        if($validator->passes()){
//            if($ret){
//                return redirect('admin/article');
//            }else{
//                return back()->with('errors','添加文章失败,请稍后重试!');
//            }
//        }else{
//            return back()->withErrors($validator);
//        }
     }
    }
