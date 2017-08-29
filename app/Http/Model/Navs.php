<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

class Navs extends Model
{
    protected $table='Navs';
    protected $primaryKey='Nav_id';
    public $timestamps=false;
    protected $guarded=[];
}
