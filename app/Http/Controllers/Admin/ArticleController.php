<?php

namespace App\Http\Controllers\Admin;

<<<<<<< HEAD
use App\Http\Model\Article;
=======
<<<<<<< HEAD
use App\Http\Model\Article;
=======
>>>>>>> 9de3a6e5b192beea43151da0acccbf2cb48aba2a
>>>>>>> 1d0c44e1f4fbf3ee398df507acff60b0aaf00012
use App\Http\Model\Category;
use Illuminate\Http\Request;

use App\Http\Requests;
<<<<<<< HEAD
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
=======
<<<<<<< HEAD
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
=======
>>>>>>> 9de3a6e5b192beea43151da0acccbf2cb48aba2a
>>>>>>> 1d0c44e1f4fbf3ee398df507acff60b0aaf00012

class ArticleController extends CommonController
{
    //get admin/article 全部文章列表
    public function index()
    {
<<<<<<< HEAD
        return view('admin.article.index');
=======
        echo 444444;
>>>>>>> 1d0c44e1f4fbf3ee398df507acff60b0aaf00012
    }
    //get.admin/article/create 添加文章
    public function create()
    {
        //        读取全部信息
        $data=(new Category)->tree();
       return view('admin.article.add',compact('data'));
    }
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 1d0c44e1f4fbf3ee398df507acff60b0aaf00012
    //post.admin/article 添加文章提交
    public function store()
    {
        $input = Input::except(['_token','file_upload']);
        $input['art_time'] = time();
<<<<<<< HEAD
        //        对用户提交的内容进限定
        $rules=[
//                文章的标题不能为空
            'art_title'=>'required',
            'art_content'=>'required',
        ];
        $message=[
            'art_title.required' =>'文章名称不能为空！',//验证required是否有值
            'art_content.required' =>'文章内容不能为空！',
        ];
        $validator=Validator::make($input,$rules,$message);
        //引入validator服务，第一个为需要验证的参数，第二个为验证规则，第三个参数为提示信息
        if($validator->passes()){//判断是否passes通过了返回为真
//                将入库的数据通过category创建，然后保存在re变量中
            $re = Article::create($input);
            if($re){
                return redirect('admin/article');
            }else{
                return back()->with('errors','数据填充失败，请稍后重试！');
            }
        }else{
            //若密码错误返回到修改密码窗口,
            return back()->withErrors($validator);//传回错误信息，传回到页面,$validator参数为验证参数
            //dd($validator->errors()->all());//找到全部的错误
        }


     }
    }
=======
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
=======
}
>>>>>>> 9de3a6e5b192beea43151da0acccbf2cb48aba2a
>>>>>>> 1d0c44e1f4fbf3ee398df507acff60b0aaf00012
