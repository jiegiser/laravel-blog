<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    @yield('info')

    <link href="{{asset('resources/views/home/css/base.css')}}" rel="stylesheet">
    <link href="{{asset('resources/views/home/css/index.css')}}" rel="stylesheet">
    <link href="{{asset('resources/views/home/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('resources/views/home/css/new.css')}}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{asset('resources/views/home/js/themes/gray/easyui.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('resources/views/home/js/themes/icon.css')}}">
    <link rel="stylesheet" href="https://js.arcgis.com/3.16/dijit/themes/claro/claro.css">
    <link rel="stylesheet" href="https://js.arcgis.com/3.16/esri/css/esri.css">

    <script type="text/javascript" src="{{asset('resources/views/home/js/jquery-1.7.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('resources/views/home/js/jquery.easyui.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('resources/views/home/js/easyui-lang-zh_CN.js')}}" charset="utf-8"></script>
    <script src="{{asset('resources/views/home/js/modernizr.js')}}"></script>
    <script src="{{asset('resources/views/home/js/modernizr.js')}}"></script>
</head>
<body class="easyui-layout">
<header>
    <div id="logo"><a href="{{url('/')}}"></a></div>
    <nav class="topnav" id="topnav">
        @foreach($navs as $k=>$v)<a href="{{$v->nav_url}}"><span>{{$v->nav_name}}</span><span class="en">{{$v->nav_alias}}</span></a>@endforeach
    </nav>
</header>
@yield('gis')
<footer>
    <div data-options="region:'south',split:true" style="height:50px;padding:10px;text-align:center" >
        CopyRight © 2017. Powered By <a href="http://jiegiser.win">jiegiser</a>.
    </div>
</footer>
</body>
</html>>
