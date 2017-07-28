<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='category';//数据表
    protected $primaryKey='cate_id';//主键
    public $timestamps=false;//更新时间与添加时间
<<<<<<< HEAD
=======
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> d69e38e7e1e983d9244013e33f7644a2f37310b5
>>>>>>> bccaf6d3020f9500f6751e9bf4138abd72c5adf3

//    public static function tree()
//    {
//        $categorys=Category::all();
//        //dd($categorys);
//         return (new Category)->getTree($categorys,'cate_name','cate_id','cate_pid');
//    }
    public  function tree()
    {
        $categorys=$this->all();
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
=======
>>>>>>> c9979a0ca48cc7a5ab56b5999c26bcffb9704f9f
>>>>>>> d69e38e7e1e983d9244013e33f7644a2f37310b5
>>>>>>> bccaf6d3020f9500f6751e9bf4138abd72c5adf3
}
