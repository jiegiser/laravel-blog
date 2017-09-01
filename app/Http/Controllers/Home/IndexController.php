<?php

namespace App\Http\Controllers\Home;

class IndexController extends CommonController
{
    public function index()
    {
        //点击量最高的6篇文章（站长推荐）
        return view('home.index');
    }

    public function cate()
    {
        //点击量最高的6篇文章（站长推荐）
        return view('home.list');
    }
    public function article()
    {
        //点击量最高的6篇文章（站长推荐）
        return view('home.new');
    }

}
