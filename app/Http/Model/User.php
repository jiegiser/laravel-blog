<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table='user';//数据表
    protected $primaryKey='user_id';//主键
    public $timestamps=false;//更新时间与添加时间
}
