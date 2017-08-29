<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'article';//数据表
    protected $primaryKey= 'art_id';//主键
    public $timestamps= false;//更新时间与添加时间
    protected $guarded=[];//排除受保护的字段，排除所有的数据，
}
