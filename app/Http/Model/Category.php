<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table='category';//数据表
    protected $primaryKey='cate_id';//主键
    public $timestamps=false;//更新时间与添加时间
}
