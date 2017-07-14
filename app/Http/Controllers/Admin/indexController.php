<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class indexController extends CommonController
{
    public function index(){
        if(!session('user')){
            return redirect('admin/login');
        }
       return view('admin.index');
    }
    public function info(){
        return view('admin.info');
    }
    //更改超级管理员密码
    public function pass(){
        if($input=Input::all()){//若有数据，则进行数据处理
            $rules=[
                'password'=>'required|between:6,20|confirmed',
                //判断密码是否在6-20之间,confirmed为判断两次输入的密码是否匹配
            ];
            $message=[
              'password.required' =>'新密码不能为空！',//验证required是否有值
              'password.between' =>'新密码必须在6-20位之间！',//验证between是否符合规则
              'password.confirmed' =>'新密码和确认密码不一致！',//验证between是否符合规则
            ];
            $validator=Validator::make($input,$rules,$message);
            //引入validator服务，第一个为需要验证的参数，第二个为验证规则，第三个参数为提示信息
            if($validator->passes()){//判断是否passes通过了返回为真
                $user=User::first();//得到用户密码信息
                $_password=Crypt::decrypt($user->user_pass);//进行获得的密码进行解析
                if($input['password_o']==$_password){
                    $user->user_pass=Crypt::encrypt($input['password']);
                    $user->update();
                    return back()->with('errors','密码修改成功！');
                }else{
                    return back()->with('errors','原密码错误！');
                }
            }else{
                //若密码错误返回到修改密码窗口,
                return back()->withErrors($validator);//传回错误信息，传回到页面,$validator参数为验证参数
                //dd($validator->errors()->all());//找到全部的错误
            }
        }else{
            return view('admin.pass');
        }
    }
}
