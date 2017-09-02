<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    @yield('info')
    <link href="{{asset('resources/views/home/css/base.css')}}" rel="stylesheet">
    <link href="{{asset('resources/views/home/css/index.css')}}" rel="stylesheet">
    <link href="{{asset('resources/views/home/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('resources/views/home/css/new.css')}}" rel="stylesheet">
    <script src="{{asset('resources/views/home/js/modernizr.js')}}"></script>
    <link rel="stylesheet" href="https://js.arcgis.com/3.16/dijit/themes/claro/claro.css">
    <link rel="stylesheet" href="https://js.arcgis.com/3.16/esri/css/esri.css">
    <script type="text/javascript">
        dojoConfig = {
            parseOnLoad : true
        };
    </script>
    <link rel="stylesheet" type="text/css" href="{{asset('resources/views/home/js/themes/gray/easyui.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('resources/views/home/js/themes/icon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('resources/views/home/css/nav_a.css')}}">
    <link rel="stylesheet" href="https://js.arcgis.com/3.16/dijit/themes/claro/claro.css">
    <link rel="stylesheet" href="https://js.arcgis.com/3.16/esri/css/esri.css">

    <script type="text/javascript" src="{{asset('resources/views/home/js/jquery-1.7.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('resources/views/home/js/jquery.easyui.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('resources/views/home/js/easyui-lang-zh_CN.js')}}" charset="utf-8"></script>
    <script src="{{asset('resources/views/home/js/modernizr.js')}}"></script>
    <script src="{{asset('resources/views/home/js/modernizr.js')}}"></script>
    <script src="http://js.arcgis.com/3.9/"></script>
</head>
<script>
    dojo.require("esri.map");

    var layer, map, visible = [];

    function init() {
        map = new esri.Map("map");
        layer = new esri.layers.ArcGISDynamicMapServiceLayer("http://sampleserver1.arcgisonline.com/ArcGIS/rest/services/Specialty/ESRI_StatesCitiesRivers_USA/MapServer");

        if (layer.loaded) {
            buildLayerList(layer);
        } else {
            dojo.connect(layer, "onLoad", buildLayerList);
        }
    }

    function getChildrenNodes(parentnodes, node){
        for (var i = parentnodes.length - 1; i >= 0; i--) {

            var pnode = parentnodes[i];
            //如果是父子关系，为父节点增加子节点，退出for循环
            if (pnode.id==node.pid) {
                pnode.state="closed" ;//关闭二级树
                pnode.children.push(node) ;
                return ;
            } else {
                //如果不是父子关系，删除父节点栈里当前的节点，
                //继续此次循环，直到确定父子关系或不存在退出for循环
                parentnodes.pop() ;
            }
        }
    }

    function buildLayerList(layer) {
        //构建图层树形结构
        var layerinfos = layer.layerInfos ;
        var treeList = [] ;//jquery-easyui的tree用到的tree_data.json数组
        var parentnodes = [] ;//保存所有的父亲节点
        var root = {"id":"rootnode","text":"所有图层","children":[]} ;//增加一个根节点
        var node = {} ;
        if (layerinfos != null && layerinfos.length > 0) {

            for(var i=0,j=layerinfos.length;i<j;i++){
                var info = layerinfos[i] ;
                if (info.defaultVisibility) {
                    visible.push(info.id);
                }
                //node为tree用到的json数据
                node = {
                    "id":info.id,
                    "text":info.name,
                    "pid":info.parentLayerId,
                    "checked":info.defaultVisibility ? true:false,
                    "children":[]
                } ;
                if(info.parentLayerId==-1){
                    parentnodes.push(node) ;
                    root.children.push(node) ;
                }else{
                    getChildrenNodes(parentnodes, node);
                    parentnodes.push(node) ;
                }
            }
        }
        treeList.push(root) ;
        //jquery-easyui的树
        $('#toc').tree({
            data:treeList ,
            checkbox :true, //使节点增加选择框
            onCheck:function (node,checked){//更新显示选择的图层
                var visible = [];

                var nodes = $('#toc').tree("getChecked") ;
                dojo.forEach(nodes, function(node) {
                    visible.push(node.id);
                });
                //if there aren't any layers visible set the array to be -1
                if (visible.length === 0) {
                    visible.push(-1);
                }
                layer.setVisibleLayers(visible);
            }
        });


        layer.setVisibleLayers(visible);
        map.addLayer(layer);
    }

    dojo.ready(init);
</script>
<body class="easyui-layout">
<div data-options="region:'north'" style="height:80px;left: 0;
 margin: auto;
    position: relative;
    overflow: hidden;">
    <div>
        <a style="width: 260px;height: 60px;margin: 10px 0 0 10px;position: absolute;display: block;background: url('{{url('resources/views/home/images/logo.jpg')}}') no-repeat;"
           href="http://localhost:8090/test1/laravel"></a>
    <nav class="topnav" id="topnav">
        @foreach($navs as $k=>$v)<a href="{{$v->nav_url}}"><span>{{$v->nav_name}}</span><span class="en">{{$v->nav_alias}}</span></a>@endforeach
    </nav>
    </div>
</div>
@yield('content')
<div data-options="region:'south',split:true" style="height:50px;padding:10px;text-align:center" >
    <p>{!! Config::get('web.copyright') !!} {!! Config::get('web.web_count') !!}</p>
</div>
</body>
</html>

    CopyRight © 2017. Powered By <a href="http://jiegiser.win">jiegiser</a>.
