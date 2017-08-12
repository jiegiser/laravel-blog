<?php

namespace App\Http\Controllers\Admin;

use App\Http\Model\User;
use Illuminate\Http\Request;
require_once 'resources/views/org/code/Code.class.php';
use App\Http\Requests;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Input;

class LoginController extends CommonController
{
    public function crypt()
    {
       $atr="eyJpdiI6IlBBNTJjV2ZkWkp3TXZvQm5xdGR3R2c9PSIsInZhbHVlIjoiM3RGYVg3U2pCellJbEdHTlwvS0MzTWc9PSIsIm1hYyI6ImRmYzdjZDhmNGQ2N2I5MTBjOTMxYjdkYmMzNGExZThhZmE2YWMxNGUzYWIzYWM5Mzg4MTQyZDI4OGJkMzJhYTUifQ";
        echo Crypt::decrypt($atr);
    }
    public function login(){
        if($input=Input::all()){//如果有数据不为空，就是说post请求获得到了用户提交的数据，
            $code=new \Code;
            $_code=$code->get();
            if(strtoupper($input['code'])!=$_code){
                return back()->with('msg','验证码错误');//返回前一个请求的页面,用with将参数传回给页面。
            }
            $user=User::first();
            if($user->user_name!=$input['user_name'] || Crypt::decrypt($user->user_pass)!=$input['user_pass']){
                return back()->with('msg','用户名或密码错误');
            }
            //将登陆信息写进session，让在其他页面也可以识别登陆信息
            session(['user'=>$user]);
            return redirect('admin/index');
        }else{
            return view('admin.login');
        }
    }
    public function code(){
        $code=new \Code;
        $code->make();
    }
    public function quit(){
        session(['user'=>null]);
        return redirect('admin/login');
    }
}
