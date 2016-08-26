@extends('layouts.index')

@section('con')

    <!--面包屑导航 开始-->
    <!-- <div class="crumb_warp">
        <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
        <!-- <i class="fa fa-home"></i> <a href="{{url('admin/info')}}">首页</a> &raquo; 系统基本信息
    </div> --> 
    <!--面包屑导航 结束-->
    
    <!--结果集标题与导航组件 开始-->
    <!-- <div class="result_wrap">
        <div class="result_title">
            <h3>快捷操作</h3>
        </div>
        <div class="result_content">
            <div class="short_wrap">
                <a href="{{url('admin/category/create')}}"><i class="fa fa-plus"></i>新增文章</a>
                <a href="#"><i class="fa fa-recycle"></i>批量删除</a>
                <a href="#"><i class="fa fa-refresh"></i>更新排序</a>
            </div>
        </div>
    </div> -->
    <!--结果集标题与导航组件 结束-->
    <style type="text/css">

        li{
             margin-left: 20px;
        }

        li label{
            font-size:16px;
            margin-left: 20px;
        }

        li span{
            font-size:16px;
        }
        .mws-panel{
            width:800px;
            height:450px;
            margin-top: 20px;
            /*margin-left:150px;*/
            float:left;
        }

        .result_wrap{
            float:left;
            margin-top:40px;
        }
    </style>
    <div class="mws-panel grid_4">
        <div class="mws-panel-header">
            <span>
                <i class="icon-home"></i>
                首页>系统基本信息
            </span>
        </div>
        <div class="mws-panel-body">
            <ul>
                <li>
                    <label>操作系统：</label><span>WINNT</span>
                </li><br>
                <li>
                    <label>运行环境：</label><span>{{$_SERVER['SERVER_SOFTWARE']}}</span>
                </li><br>
                <li>
                    <label>PHP运行方式：</label><span>apache2handler</span>
                </li><br>
                <li>
                    <label>设计-版本：</label><span>v-0.1</span>
                </li><br>
                <li>
                    <label>上传附件限制：</label><span><?php echo get_cfg_var("upload_max_filesize")?get_cfg_var("upload_max_filesize"):"不允许上传附件" ;?></span>
                </li><br>
                <li>
                    <label style="color:#C5D52B">北京时间：</label>
                    <span id="nowtime" style="color:#C5D52B"></span>
                    <script type="text/javascript">
                            setInterval(function(){
                            var time=new Date();

                            var y=time.getFullYear();
                            var m=time.getMonth()+1;
                            var d=time.getDate();
                            var h=time.getHours();
                            var i=time.getMinutes();
                            var s=time.getSeconds();

                            var did=document.getElementById('nowtime');

                            did.innerHTML=y+'年'+m+'月'+d+'日 '+h+'时'+i+'分'+s+'秒';
                        },1000);
                    </script>
                    
                </li><br>
                <li>
                    <label>服务器域名/IP：</label><span>{{$_SERVER['SERVER_NAME']}} [{{$_SERVER['SERVER_ADDR']}}]</span>
                </li><br>
                <li>
                    <label>Host：</label><span>{{$_SERVER['SERVER_ADDR']}}</span>
                </li><br>
            </ul>
        </div>

       

    </div>


   
    <!--结果集列表组件 结束-->
@endsection


	