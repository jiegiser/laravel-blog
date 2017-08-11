<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='category';//数据表
    protected $primaryKey='cate_id';//主键
    public $timestamps=false;//更新时间与添加时间
<<<<<<< HEAD
    protected $guarded=[];//排除受保护的字段，排除所有的数据，
=======
<<<<<<< HEAD
    protected $guarded=[];//排除受保护的字段，排除所有的数据，
=======
<<<<<<< HEAD
    protected $guarded=[];//排除受保护的字段，排除所有的数据，
=======
<<<<<<< HEAD
    protected $guarded=[];//排除受保护的字段，排除所有的数据，
=======
<<<<<<< HEAD
    protected $guarded=[];//排除受保护的字段，排除所有的数据，
=======
<<<<<<< HEAD
    protected $guarded=[];//排除受保护的字段，排除所有的数据，
=======
<<<<<<< HEAD
    protected $guarded=[];//排除受保护的字段，排除所有的数据，
=======
<<<<<<< HEAD
    protected $guarded=[];//排除受保护的字段，排除所有的数据，
=======
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

>>>>>>> 199dc8b4469af12636e4fa275d3163100edb7b7b
>>>>>>> 43f5691389ef960ea21c1ba9929f70b29ead16a0
>>>>>>> 8c3bffb9c3c6d491dfcb0704ec4f21c6e02e8128
>>>>>>> 009670add50838a872efaa8926121fdd6be8e8d0
>>>>>>> 9de3a6e5b192beea43151da0acccbf2cb48aba2a
>>>>>>> 1d0c44e1f4fbf3ee398df507acff60b0aaf00012
>>>>>>> 0d3badc3ec4415ffc27d056e6dd58b0428e6d2c9
>>>>>>> f09f7be4580995de5e6a8a23aadab72761b6cf7a
//    public static function tree()
//    {
//        $categorys=Category::all();
//        //dd($categorys);
//         return (new Category)->getTree($categorys,'cate_name','cate_id','cate_pid');
//    }
    public  function tree()
    {
<<<<<<< HEAD
        $categorys=$this->orderBy('cate_order','asc')->get();
=======
<<<<<<< HEAD
        $categorys=$this->orderBy('cate_order','asc')->get();
=======
<<<<<<< HEAD
        $categorys=$this->orderBy('cate_order','asc')->get();
=======
<<<<<<< HEAD
        $categorys=$this->orderBy('cate_order','asc')->get();
=======
<<<<<<< HEAD
        $categorys=$this->orderBy('cate_order','asc')->get();
=======
<<<<<<< HEAD
        $categorys=$this->orderBy('cate_order','asc')->get();
=======
<<<<<<< HEAD
        $categorys=$this->orderBy('cate_order','asc')->get();
=======
<<<<<<< HEAD
        $categorys=$this->orderBy('cate_order','asc')->get();
=======
<<<<<<< HEAD
        $categorys=$this->orderBy('cate_order','asc')->get();
=======
<<<<<<< HEAD
        $categorys=$this->orderBy('cate_order','asc')->get();
=======
        $categorys=$this->all();
>>>>>>> 19036491e6dcf2e08bb27139bc454fafc7f69f7a
>>>>>>> 0e63c97cbf95d244f8e298156301ccfe6779534b
>>>>>>> 199dc8b4469af12636e4fa275d3163100edb7b7b
>>>>>>> 43f5691389ef960ea21c1ba9929f70b29ead16a0
>>>>>>> 8c3bffb9c3c6d491dfcb0704ec4f21c6e02e8128
>>>>>>> 009670add50838a872efaa8926121fdd6be8e8d0
>>>>>>> 9de3a6e5b192beea43151da0acccbf2cb48aba2a
>>>>>>> 1d0c44e1f4fbf3ee398df507acff60b0aaf00012
>>>>>>> 0d3badc3ec4415ffc27d056e6dd58b0428e6d2c9
>>>>>>> f09f7be4580995de5e6a8a23aadab72761b6cf7a
        //dd($categorys);
        return $this->getTree($categorys,'cate_name','cate_id','cate_pid');
    }
    public function getTree($data,$field_name,$field_id='id',$field_pid='pid',$pid=0)
    {
        $arr=array();
        foreach($data as $k=>$v){
            if($v->$field_pid==$pid){
                $data[$k]["_".$field_name]=$data[$k][$field_name];
                $arr[]=$data[$k];
                foreach ($data as $m=>$n) {
                    if($n->$field_pid==$v->$field_id){
                        $data[$m]["_".$field_name]='├─ '.$data[$m][$field_name];
                        $arr[]=$data[$m];
                    }
                }
            }
        }
        return $arr;
    }
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
=======
>>>>>>> c9979a0ca48cc7a5ab56b5999c26bcffb9704f9f
>>>>>>> d69e38e7e1e983d9244013e33f7644a2f37310b5
>>>>>>> bccaf6d3020f9500f6751e9bf4138abd72c5adf3
>>>>>>> 19036491e6dcf2e08bb27139bc454fafc7f69f7a
>>>>>>> 0e63c97cbf95d244f8e298156301ccfe6779534b
>>>>>>> 199dc8b4469af12636e4fa275d3163100edb7b7b
>>>>>>> 43f5691389ef960ea21c1ba9929f70b29ead16a0
>>>>>>> 8c3bffb9c3c6d491dfcb0704ec4f21c6e02e8128
>>>>>>> 009670add50838a872efaa8926121fdd6be8e8d0
>>>>>>> 9de3a6e5b192beea43151da0acccbf2cb48aba2a
>>>>>>> 1d0c44e1f4fbf3ee398df507acff60b0aaf00012
>>>>>>> 0d3badc3ec4415ffc27d056e6dd58b0428e6d2c9
>>>>>>> f09f7be4580995de5e6a8a23aadab72761b6cf7a
}
