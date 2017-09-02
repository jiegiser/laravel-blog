


@extends('layouts.gis')
@section('content')
    <div data-options="region:'west',split:true,title:'图层索引'" style="width:200px;padding:10px;">
        <div id="panelHeader"
             style="width: 100%; height: 100%;">
            图层控制：<br />
            <ul id="toc" class="easyui-tree"></ul>
        </div>
    </div>
    <div data-options="region:'center'">
        <div id="map"
             style="width: 100%; height: 100%; "></div>
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
    @endsection

