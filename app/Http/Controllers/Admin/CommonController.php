<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class CommonController extends Controller
{
    //图片上传
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> f09f7be4580995de5e6a8a23aadab72761b6cf7a
>>>>>>> b14c1efb23efb69f4e75f1242c77a579b63a421d
    public function upload()
    {
//        首先获取到input中传回的文件信息
        $file=Input::file('Filedata');
//        判断文件时候有效
        if($file->isValid()){
//           $realPath=$file->getRealPath();//临时文件的绝对路径
            $entension= $file-> getClientOriginalExtension();//上传文件的后缀
            $newName=date('YmdHis').mt_rand(100,999).'.'.$entension;
//            base_path就是将文件存放在根目录，将文件存在uploads文件夹中，并将文件重命名为newName
            $path=$file -> move(base_path().'/uploads',$newName);//文件的重命名
            $filepath='uploads/'.$newName;
            return $filepath;
        }
    }

<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
//    public function upload()
//    {
////        首先获取到input中传回的文件信息
//        $file=Input::file('Filedata');
////        判断文件时候有效
//        if($file->isValid()){
////           $realPath=$file->getRealPath();//临时文件的绝对路径
//            $entension=$file->getClientOriginalExtension();//上传文件的后缀
//            $newName=date('YmdHis').mt_rand(100,999).'.'.$entension;
////            base_path就是将文件存放在根目录，将文件存在uploads文件夹中，并将文件重命名为newName
//            $path=$file->move(base_path().'/uploads',$newName);//文件的重命名
//            $filepath='uploads/'.$newName;
//            return $filepath;
//        }
//    }
    function upload(){
        $file = Input::file('Filedata');
        if($file -> isValid()){
            $entension = $file -> getClientOriginalExtension(); //上传文件的后缀.
            $newName = date('YmdHis').mt_rand(100,999).'.'.$entension;
            $path = $file -> move(base_path().'/uploads',$newName);
            $filepath = 'uploads/'.$newName;
            return $filepath;
        }
    }
>>>>>>> 0d3badc3ec4415ffc27d056e6dd58b0428e6d2c9
>>>>>>> f09f7be4580995de5e6a8a23aadab72761b6cf7a
>>>>>>> b14c1efb23efb69f4e75f1242c77a579b63a421d
}
