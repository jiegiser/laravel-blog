<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=7,IE=9">
    <title>图层控制</title>
    <link rel="stylesheet" href="https://js.arcgis.com/3.16/dijit/themes/claro/claro.css">
    <link rel="stylesheet" href="https://js.arcgis.com/3.16/esri/css/esri.css">
    <script type="text/javascript">
        dojoConfig = {
            parseOnLoad : true
        };
    </script>
    <link rel="stylesheet" type="text/css" href="{{asset('resources/views/home/js/themes/gray/easyui.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('resources/views/home/js/themes/icon.css')}}">
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
<div data-options="region:'north'" style="height:80px;background-color:#eeeeee;left: 0;
    top: 10px;
    line-height: 70px;
    letter-spacing:8px;
    text-align: center;
    color: #009688;
    font-size: 30px;">
    防洪监测系统
</div>
<div id="panelHeader" data-options="region:'west',split:true,title:'图层索引'" style="width:200px;padding:10px;">

    图层控制：<br />
    <ul id="toc" class="easyui-tree"></ul>

</div>
<div data-options="region:'center'" id="map">

</div>
<div data-options="region:'east',split:true,title:'菜单'" style="width:330px;padding:10px;" class="easyui-accordion">
    <div title="缓冲区分析" iconCls="icon-tip" style="overflow:auto;padding:10px;">
        <h3 style="color:#0099FF;">缓冲区分析</h3>
        <p>这里添加缓冲区分析功能.</p>
    </div>
    <div title=查询" iconCls="icon-search" selected="true" style="padding:10px;">
        <h3 style="color:#0099FF;">查询</h3>
        <p>这里添加查询功能.</p>
    </div>

</div>
</div>
<div data-options="region:'south',split:true" style="height:50px;padding:10px;text-align:center" >
    CopyRight © 2017. Powered By <a href="http://jiegiser.win">jiegiser</a>.
</div>
</body>
</html>