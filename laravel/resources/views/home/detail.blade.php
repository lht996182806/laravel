<!DOCTYPE html>
<html xml:lang="zh-CN"><head>
<script src="/detail_files/unjcV2.js" async="" type="text/javascript"></script>
<script src="/detail_files/mstr_002.js" async="" type="text/javascript"></script>
<script src="/detail_files/jquery.js" async="" type="text/javascript"></script>
<script src="/detail_files/xmst.js" async="" type="text/javascript"></script>
 <script type="text/javascript" src='/detail_files/jquery-1.8.3.min.js'></script>
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>小米手机5立即购买——小米官网</title>
<meta name="viewport" content="width=1226">
<meta name="description" content="小米手机5开放购买页面支持4G网络，全网通，包括标准版、高配版、尊享版，有多种颜色可以选择">
<meta name="keywords" content="小米5,小米手机,小米手机官网">
<link rel="shortcut icon" href="http://s01.mifile.cn/favicon.ico" type="image/x-icon">
<link rel="icon" href="http://s01.mifile.cn/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="/detail_files/base.css">
<link rel="stylesheet" type="text/css" href="/detail_files/buy-choose.css">
<script type="text/javascript">var _head_over_time = (new Date()).getTime();</script>
    <style type="text/css">
    /*pro-view img{
        width:384px;
        height:240px;
    }*/
    
    #did{
        width:560px;
        height:400px;
        overflow:hidden;
        position:absolute;
        display:none;

    }
    /*#xid{
        width:60px;
        height:60px;
        background:#ddd;
        position:absolute;
        top:100px;  
        opacity:0.5;
        display:none;
    }*/
    </style>
</head>
<body>
    <div class="site-header site-mini-header">
        <div class="container">
            <div class="header-logo">
                <img src="/home/images/logo.png" alt="">
            </div>
            <div class="header-title" id="J_miniHeaderTitle"></div>
            @if(session('user'))
            <div class="topbar-info" id="J_userInfo">
                <a  class="link" href="" data-needlogin="true">{{session('user')}}</a><span class="sep">|</span><a data-stat-id="749b1369201c13fb" class="link" href="/center">个人中心</a>            
            </div>
            @else
            <div class="topbar-info" id="J_userInfo">
                <a  class="link" href="/login" data-needlogin="true">登录</a><span class="sep">|</span><a data-stat-id="749b1369201c13fb" class="link" href="/register">注册</a>            
            </div>
            @endif
        </div>
    </div>
    <!-- .site-mini-header END -->
    <div class="container breadcrumbs">
    <a  data-stat-id="3c70fc7b75c45226" href="/hindex">首页</a><span class="sep">/</span><span>购买小米手机</span></div>

<div class="container hide">
    <div class="xm-phone-menu">
        <ul class="clearfix">
            <li>
                <a  data-stat-id="875e20e81de519cf" href="">
                    <img src="/detail_files/compare-title-all.png" alt="">
                    <span>对比手机</span>
                </a>
            </li>
        </ul>
    </div>
</div>

<style>
.msg-bd font {display:none;}
</style>


<div class="container buy-choose-box">
    <div class="hd">
    </div>
    <div class="bd">
        <div class="pro-choose-main clearfix" id="J_chooseMain">
            <div class="pro-view">
                <img style="height: 80%;" src="{{$res->pic}}" alt="小米手机5" id="J_proImg">
                <!-- <div id='xid'></div> -->
            </div>

            <div id='did'>
                <img src="{{$res->pic}}" alt="">
            </div>

            <script type="text/javascript">
                
                //移入大图显示放大镜
                $('.pro-view').mouseover(function(){
                    //alert('aaaa');
                    //将隐藏的放大镜显示
                    $('#did').show();
                    
                    //获取大图的偏移量
                    var x = $(this).offset().left;
                    var y  =$(this).offset().top;

                    //定位放大镜位置
                    $('#did').css({'top':y-60+'px','left':x+560+'px'});    


                    //绑定鼠标移动事件滚动对应的放大镜
                    $(this).mousemove(function(ent){
                        //获取鼠标的偏移量
                        var mx  =ent.clientX;
                        var my = ent.clientY;
                        //获取大图的偏移量
                        //var x = $(this).offset().left;
                        //var y =$(this).offset().top;
                        //获取鼠标相对大图的偏移量
                        var bx = mx-x;
                        var by = my-y;
                        //滚动大图  
                        $('#did').scrollTop(by*4+80).scrollLeft(bx*3-480); 
                        //设置小的div跟随鼠标移动
                        // $('#xid').show();
                        if(my<y+30){
                            $('#xid').css('top',y+'px');
                        }else{
                            if(my>y+450){
                                $('#xid').css('top',y+450+'px');
                            }else{
                                $('#xid').css('top',my-30+'px');
                            }
                        }
                        if(mx<x+30){
                            $('#xid').css('left',x+'px');
                        }else{
                            if(mx>x+570){
                                $('#xid').css('left',x+570+'px');
                            }else{
                                $('#xid').css('left',mx-30+'px');
                            }
                        }
                    });
                }).mouseout(function(){
                    $('#did').hide();
                    $("#xid").hide();
                })


            </script>

            <div class="pro-info">
            <form action="/buy/cart" method="post">
            {{csrf_field()}}
            
                <div class="pro-title clearfix">
                    <h1>
                        <span class="pro-name J_proDesc">购买{{$res->title}}</span>
                        <input type="hidden" name="name" value="{{$res->title}}">
                        <span class="pro-price J_proPrice">{{$res->price}}元 起</span>
                        <input type="hidden" name="id" value="{{$res->id}}">
                        <input type="hidden" name="price" value="{{$res->price}}">
                        <input type="hidden" name="pic" value="{{$res->pic}}">
                    </h1>
                    <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-dd154a5081536325', '//www.mi.com/mi5/', 'pcpid']);" data-stat-id="dd154a5081536325" href="" class="pro-more" target="_blank" id="J_proMore">深入了解产品&gt;</a>
                </div>
                <p></p><p style="color:red;">小米手机5 尊享版 7月12日早10点发售<br>温馨提示：产品是否购买成功，以最终下单为准哦，请尽快结算</p><p></p>                
                <div id="J_proStep">
                    <div data-index="1" class="pro-choose-step J_step"> 
                        <div class="step-title"> 1. 选择版本 <i class="pro-version-desc-icon">!</i> 
                            <span class="pro-version-desc J_verDesc" data-index="1"></span> 
                        </div> 
                        <ul class="step-list clearfix J_stepList"> 
                        @foreach($res->size  as  $k=>$v)
                         <li onclick="opt(this)" name="rongliang" class="J_stepItem  " data-index="1" data-node-id="770" data-desc="高通骁龙820处理器 最高主频 1.8GHz，3GB内存，32GB容量，全网通3.0" title="标准版" data-title-price="1999元" >  {{$v}} G<input type="radio" name="size" value="{{$v}}">  
                         </li>  
                         @endforeach
                         </ul>
                    </div>
                    <div data-index="2" class="pro-choose-step J_step"> 
                        <div class="step-title"> 2. 选择颜色 <i class="pro-version-desc-icon">!</i> 
                            <span class="pro-version-desc J_verDesc" data-index="2"></span> 
                        </div> 
                        <ul class="step-list clearfix J_stepList">  
                        @foreach($res['color'] as $value)
                        <li class="J_stepItem  lock "  onclick="option(this)" name="color" data-index="2" data-node-id="774" data-gid="2160700024" data-img="//c1.mifile.cn/f/i/15/item/buyphone/mi5-yin.jpg" title="白色 1999元" data-title-price="1999元" data-opensell="1" data-opensell-status="1" data-opensell-url="//cart.mi.com/cart/recommend/goods_id/2160700024">
                        {{$value}} <input type="radio" name="color" value="{{$value}}">   
                            <!-- <img src="/detail_files/mi4-icon-bai.png" alt="白色">  {{$value}}   -->
                        </li>  
                        @endforeach
                        <div style="margin-left:20px;">
                           <input type="button" class="minus" value="-" style="width:30px">
                           <input type="text" id="shuliang" name="num" value="1" style="width:22px">
                           <input type="button" class="plus" value="+" style="width:30px">

                        </div>

                        </ul>
                        @if (count($errors) > 0)
                        <div class="inputbg" style="background:#FEF0B1;width:544px;margin-bottom:2px;border:1px solid #DFDFDF;">
                            <center>
                            <ul style="list-style:block">
                                @foreach ($errors->all() as $error)
                                    <li><span style="color:#FF6700;font-size:16px;">{{ $error }}</span></li>
                                @endforeach
                            </ul>
                            </center>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="choose-result-msg" id="J_chooseResultMsg">
                    <span class="msg-tit">您选择了以下产品:</span>
                    <p class="msg-bd" style="font-size:18px"><a onclick="addFavorite({{$res->id}})" >❤喜欢</a></p>
                </div>
                <div class="pro-choose-result hide" id="J_chooseResult"></div>
                <div class="pro-choose-result" id="J_chooseResultInit">
                    <!-- <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-7326452943dc03b6', 'javascript:void(0);', 'pcpid']);" data-stat-id="7326452943dc03b6" href="javascript:void(0);" class="btn btn-large btn-dakeLight">下一步</a> -->
                    <input type="submit" value="添加购物车" class="btn btn-large btn-dakeLight" style="background:#FF6700;color:white">
                    <!-- <span class="next-desc">请选择商品</span> -->
                </div>
            </form>
            </div>
            <!-- pro-info END -->
        </div>
        <!-- pro-choose_main End-->
    </div>
    <!-- bd END -->
</div>
<!-- buy-choose-box END -->

<!-- buy-choose-box END -->

<!-- 评价晒单 -->
<!-- 评价晒单 -->
<div style="background:#F5F5F5;margin:0px;padding:0px">
<div id="goodsComment" class="goods-detail-nav-name-block J_itemBox" style="display: block;margin:0px;padding:0px">
        <img src="/detail_files/top.jpg" width='100%'alt="">
        <div style="{margin:0px;padding:0px}"><img src="/detail_files/percent.jpg" width='100%'alt=""></div>     
</div>
<div id="J_recommendComment" class="goods-detail-comment-groom" style="background:#F5F5F5;margin:0px;padding:0px"> 
    <div class="container" style="background:white;width:91%"> 
        <ul class="main-block"> 
            <!-- 在此处开始遍历 -->
            <li style="float:left;width:1300px;height:60px;line-height:60px">
                <div style="margin-left:50px;width:80px;float:left;"><b style='font-size:18px'>用户头像</b></div><div style="float:left;margin-left:160px"><b style='font-size:18px'>评价内容</b></div><div style="float:left;margin-left:320px;width:340px" ><b style='font-size:18px'>用户&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;评论时间</b></div><div style="float:left;margin-left:20px;" ><b style='font-size:18px'>订单编号</b></div>
            </li>
            @foreach($comments as $k=>$v)
            <li class="item-rainbow-3 groom-content" style="float:left;margin-top:6px;width:1300px;height:100px;">         
                <div style="margin-left:25px;width:80px;float:left;">
                <img alt="" width="80" height="80px" src="{{$v->userpic}}" style="float:left;margin-left:15px;border-radius:50%;margin-top:0px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  </div>   <!-- 评论用户头像pic -->
                <div style="float:left;margin-left:185px;width:300px;margin-top:20px"><b>{{$v->contents}} </b> </div>   
                <div style="float:left;margin-left:90px;margin-top:20px">{{$v->username}} </div> 
                <div style="float:left;margin-left:70px;margin-top:20px">{{$v->created_at}} </div> 
                <div style="float:left;margin-left:120px;margin-top:20px">{{$v->order_num}}</div>          
            </li>  
            @endforeach 
            <!-- 在此处结束遍历-->

        </ul> 
    </div>
</div>
</div>
<!-- 评价晒单结束-->
<!-- 评价晒单结束 -->



<div class="main-pro-box" id="J_proDetailBox">

    <div class="pro-detail-box">  <div class="section section-image is-visible">  <a  data-stat-id="a7da58bcedffe1fe" href="">  <img src="/detail_files/mi5-shenruliaojie.jpg" class="lazyload" data-img="//c1.mifile.cn/f/i/15/item/buyphone/mi5-shenruliaojie.jpg">  </a>  </div>  <div class="section section-slider is-visible"> <div class="slider J_slide">  <div class="slides-wrapper"><div class="slide"> <a  data-stat-id="8d1f8254531d4c8f" class="lazyload" href="" data-bg="//c1.mifile.cn/f/i/15/item/buyphone/mi5-lunbo1.jpg" style="background-image: url(&quot;//c1.mifile.cn/f/i/15/item/buyphone/mi5-lunbo1.jpg&quot;);"></a> </div><div style="display: none;" class="slide"> <a  data-stat-id="8d1f8254531d4c8f" class="lazyload" href="" data-bg="//c1.mifile.cn/f/i/15/item/buyphone/mi5-lunbo2.jpg" style="background-image: url(&quot;//c1.mifile.cn/f/i/15/item/buyphone/mi5-lunbo2.jpg&quot;);"></a> </div><div style="display: none;" class="slide"> <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-8d1f8254531d4c8f', 'http://www.mi.com/mi5/', 'pcpid']);" data-stat-id="8d1f8254531d4c8f" class="lazyload" href="" data-bg="//c1.mifile.cn/f/i/15/item/buyphone/mi5-lunbo3.jpg" style="background-image: url(&quot;//c1.mifile.cn/f/i/15/item/buyphone/mi5-lunbo3.jpg&quot;);"></a> </div><div style="display: none;" class="slide"> <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-8d1f8254531d4c8f', 'http://www.mi.com/mi5/', 'pcpid']);" data-stat-id="8d1f8254531d4c8f" class="lazyload" href="" data-bg="//c1.mifile.cn/f/i/15/item/buyphone/mi5-lunbo4.jpg" style="background-image: url(&quot;//c1.mifile.cn/f/i/15/item/buyphone/mi5-lunbo4.jpg&quot;);"></a> </div></div>        <div class="pagination"><a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-9fb626b990a6466e', 'javascript:void(0);', 'pcpid']);" data-stat-id="9fb626b990a6466e" class="page active" href="javascript:%20void(0);">0</a><a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-e9a4f2e1c1a5b91b', 'javascript:void(0);', 'pcpid']);" data-stat-id="e9a4f2e1c1a5b91b" class="page" href="javascript:%20void(0);">1</a><a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-e43ebc018202b53e', 'javascript:void(0);', 'pcpid']);" data-stat-id="e43ebc018202b53e" class="page" href="javascript:%20void(0);">2</a><a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-442c7c9063afebd0', 'javascript:void(0);', 'pcpid']);" data-stat-id="442c7c9063afebd0" class="page" href="javascript:%20void(0);">3</a></div><a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-ed8b4febb70db9f6', '', 'pcpid']);" data-stat-id="ed8b4febb70db9f6" class="slide-previous">上一页</a><a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-799a67f8a3e29194', '', 'pcpid']);" data-stat-id="799a67f8a3e29194" class="slide-next">下一页</a></div> </div>  <div class="section section-image is-visible">  <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-f56f8fdeb670acc5', 'http://www.mi.com/service/safe/', 'pcpid']);" data-stat-id="f56f8fdeb670acc5" href="">  <img src="/detail_files/mi5-yiwaibao2.jpg" class="lazyload" data-img="//c1.mifile.cn/f/i/15/item/buyphone/mi5-yiwaibao2.jpg">  </a>  </div>  <div class="section section-specs container is-visible"> <div class="spec-title" id="J_showSpec"> 了解小米手机5参数<i class="arrow"></i> </div> <ul class="spec-list hide clearfix" id="J_specCon">  <li class="spec-item"> <div class="spec-item-tit">处理器</div>   <div class="spec-sub-item"> <div class="spec-sub-item-tit">标准版</div> <p class="spec-sub-item-con">骁龙820 最高主频 1.8GHz<br>Adreno 530 图形处理器 510MHz</p> </div>  <div class="spec-sub-item"> <div class="spec-sub-item-tit">高配版</div> <p class="spec-sub-item-con">骁龙820 最高主频 2.15GHz<br>Adreno 530 图形处理器 624MHz</p> </div>  <div class="spec-sub-item"> <div class="spec-sub-item-tit">陶瓷尊享版</div> <p class="spec-sub-item-con">骁龙820 最高主频 2.15GHz<br>Adreno 530 图形处理器 624MHz</p> </div>  </li>   <li class="spec-item"> <div class="spec-item-tit">内存 / 存储</div>   <div class="spec-sub-item"> <div class="spec-sub-item-tit">标准版</div> <p class="spec-sub-item-con">3GB LPDDR4 1333MHz 双通道<br>32GB 机身存储 UFS2.0</p> </div>  <div class="spec-sub-item"> <div class="spec-sub-item-tit">高配版</div> <p class="spec-sub-item-con">3GB LPDDR4 1866MHz 双通道<br>64GB 机身存储 UFS2.0</p> </div>  <div class="spec-sub-item"> <div class="spec-sub-item-tit">陶瓷尊享版</div> <p class="spec-sub-item-con">4GB LPDDR4 1866MHz 双通道<br>128GB 机身存储 UFS2.0</p> </div>  </li>   <li class="spec-item"> <div class="spec-item-tit">显示屏</div>  <p class="spec-item-con">5.15 英寸 省电高亮屏幕<br>600nit 高亮度<br>1920 x 1080 分辨率，428 PPI，1500:1 对比度<br>95% NTSC色域，高色彩饱和度<br>支持阳光屏，强烈阳光下清晰可见屏幕内容<br>支持夜光屏<br>支持护眼模式<br>支持色温调节<br>支持标准模式，颜色更准确</p>   </li>  <div class="item-line"></div>   <li class="spec-item"> <div class="spec-item-tit">指纹识别</div>  <p class="spec-item-con">正面按压式指纹识别<br>陶瓷指纹盖板<br>指纹修正系统<br>支持小米钱包支付<br>支持查看私密文件</p>   </li>   <li class="spec-item"> <div class="spec-item-tit">1600万后置相机</div>  <p class="spec-item-con">4轴光学防抖，校正8个方向抖动<br>6片式镜头，f/2.0光圈<br>蓝宝石玻璃保护镜片<br>双色温闪光灯<br>支持 DTI 颜色防串扰技术<br>支持 PDAF 相位对焦<br>支持 32 秒手动曝光<br>高通第二代 ISP<br>暗光增强技术<br>高动态范围调节技术<br>全景模式<br>自动 HDR 拍照<br>连拍模式<br>面部识别功能</p>   </li>   <li class="spec-item"> <div class="spec-item-tit">400万大像素前置相机</div>  <p class="spec-item-con">第二代36级智能美颜，自拍实时美颜<br>单个像素大至2微米，ƒ/2.0 光圈，80°大广角<br>视频通话实时美颜<br>倒计时自拍<br>面部识别功能</p>   </li>  <div class="item-line"></div>   <li class="spec-item"> <div class="spec-item-tit">网络支持</div>  <p class="spec-item-con">全网通3.0 双卡双待:<br><br>双Nano-SIM卡槽，任意卡槽均可设置为主卡<br>支持移动、联通、电信4G+ / 4G / 3G / 2G<br>当主卡移动、联通4G时，副卡突破性的最高支持联通3G 网络语音电话<br><br>标准版 2xCA<br><br>高配版 / 尊享版 3xCA，并支持高阶调制</p>   </li>   <li class="spec-item"> <div class="spec-item-tit">无线连接</div>  <p class="spec-item-con">802.11a/b/g/n/ac 双频无线网络，具备 MU-MIMO 技术，<br>WiFi Display<br>WiFi Direct<br>蓝牙4.2 无线技术<br>蓝牙HID<br>全功能NFC，支持读卡、写卡、卡模拟，P2P模式</p>   </li>   <li class="spec-item"> <div class="spec-item-tit">传感器</div>  <p class="spec-item-con">红外<br>陀螺仪<br>加速感应器<br>距离感应器<br>环境光传感器<br>霍尔感应器<br>电子罗盘<br>气压计</p>   </li>  <div class="item-line"></div>   <li class="spec-item"> <div class="spec-item-tit">GPS</div>  <p class="spec-item-con">GPS<br>AGPS<br>GLONASS<br>北斗定位</p>   </li>   <li class="spec-item"> <div class="spec-item-tit">电池容量</div>  <p class="spec-item-con">额定容量2910mAh<br>典型容量3000mAh<br>内置电池，免更换<br>新一代快充3.0 技术<br>USB Type-C 双面充电接口</p>   </li>   <li class="spec-item"> <div class="spec-item-tit">可选版本</div>  <p class="spec-item-con">标准版：1999元<br><br>高配版：2299元<br><br>尊享版：2699元</p>   </li>  <div class="item-line"></div>   </ul> </div></div>

    <!-- 配件商品推荐模版 -->
    <div class="J_recommendGoods section is-visible">
        <div class="container"> <div class="section section-acc container"> <div class="acc-title"> 款款出色<br>随<span class="J_proName">小米手机5</span>购买配件免费送货 </div> <ul class="list clearfix">  <li> <a class="pro-link" href="" target="_blank"> <div class="item-info"> <h3>小米活塞耳机 基础版</h3> <p class="price"> <em>29</em>元 </p> </div> <div class="item-pic"> <img class="lazyload" data-img="//i1.mifile.cn/a1/T1WxYvB_xv1RXrhCrK.jpg" src="/detail_files/T1WxYvB_xv1RXrhCrK.jpg" alt=""> </div> </a> </li>  <li> <a class="pro-link" href="" target="_blank"> <div class="item-info"> <h3>小米圈铁耳机</h3> <p class="price"> <em>99</em>元 </p> </div> <div class="item-pic"> <img class="lazyload" data-img="//i1.mifile.cn/a1/T1ycK_BjYv1RXrhCrK.jpg" src="/detail_files/T1ycK_BjYv1RXrhCrK.jpg" alt=""> </div> </a> </li>  <li> <a class="pro-link" href="" target="_blank"> <div class="item-info"> <h3>小米随身蓝牙音箱</h3> <p class="price"> <em>59</em>元 </p> </div> <div class="item-pic"> <img class="lazyload" data-img="//i1.mifile.cn/a1/T1._C_BKAv1RXrhCrK.jpg" src="/detail_files/T1.jpg" alt=""> </div> </a> </li>  <li> <a class="pro-link" href="" target="_blank"> <div class="item-info"> <h3>智能翻盖保护套</h3> <p class="price"> <em>49</em>元 </p> </div> <div class="item-pic"> <img class="lazyload" data-img="//i1.mifile.cn/a1/T1FXE_BgDv1RXrhCrK.jpg" src="/detail_files/T1FXE_BgDv1RXrhCrK.jpg" alt=""> </div> </a> </li>  <li> <a class="pro-link" href="" target="_blank"> <div class="item-info"> <h3>钢化玻璃贴膜(0.22mm)</h3> <p class="price"> <em>29</em>元 </p> </div> <div class="item-pic"> <img class="lazyload" data-img="//i1.mifile.cn/a1/T1t2K_B4L_1RXrhCrK.jpg" src="/detail_files/T1t2K_B4L_1RXrhCrK.jpg" alt=""> </div> </a> </li>  <li> <a class="pro-link" href="http://item.mi.com/1151900013.html" target="_blank"> <div class="item-info"> <h3>小米移动电源10000mAh</h3> <p class="price"> <em>69</em>元 </p> </div> <div class="item-pic"> <img class="lazyload" data-img="//i1.mifile.cn/a1/T1ggWQBybT1RXrhCrK.jpg" src="/detail_files/T1ggWQBybT1RXrhCrK.jpg" alt=""> </div> </a> </li>  </ul> </div></div>
    </div>

    <div class="xm-home section is-visible">
        <div class="section section-image is-visible">
            <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-a34fece1ced9f477', '//www.mi.com/c/xiaomizhijia/', 'pcpid']);" data-stat-id="a34fece1ced9f477" href="" target="_blank">
                <img class="lazyload" data-img="//c1.mifile.cn/f/i/15/item/buyphone/detail-6.jpg" src="/detail_files/detail-6.jpg">
            </a>
        </div>
    </div>
</div>

<!-- bar -->
<div class="header-bar" id="J_headerBar">
    <div class="container">
        <span class="pro-desc" id="J_headerBarDesc">购买小米手机5</span><a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-081b10ad0061e9de', 'javascript:void(0)', 'pcpid']);" data-stat-id="081b10ad0061e9de" href="javascript:void(0)" class="btn btn-primary">立即购买</a>
    </div>
</div>

<!-- 视频 弹窗 -->
<div class="modal modal-hide fade modal-video" id="J_showVideo">
    <span data-dismiss="modal" aria-hidden="true" class="close"><i class="iconfont"></i></span>
    <div class="modal-header">
        <h3>&nbsp;</h3>
    </div>
    <div class="modal-body"></div>
</div>


<!-- multi desc 视频模板 -->

<!-- multi desc 参数模板 -->


<!-- 保险弹窗 -->
<!-- 保险弹窗 -->
<div class="modal in modal-hide modal-baoxian" id="baoxian">
    <div class="modal-header">
        <h3>小米手机意外保障服务</h3>
        <span class="close" data-dismiss="modal"><i class="iconfont"></i></span>
    </div>
    <div class="modal-body">
        <div class="con-1">
            <h4>购买保购障服务的手机在意外受损时可获得免费维修</h4>
            <ul class="icon-list clearfix">
                <li>
                    <span class="icon icon-1"></span>
                    屏幕碎裂免费换新屏
                </li>
                <li>
                    <span class="icon icon-2"></span>
                    进水、摔落免费修
                </li>
                <li>
                    <span class="icon icon-3"></span>
                    修好为止
                </li>
            </ul>
            <dl class="xuzhi">
                <dt>为保障您的权益，购买前请仔细阅读：</dt>
                <dd>· 本保障服务目前仅适用于小米手机用户，仅可随手机一起在线购买。</dd>
                <dd>· 本保障服务自您收到手机起生效，有效期为一年，若您在收到手机7日内需要取消保障服务，请连同手机一起申请退货。</dd>
                <dd>· 故意行为导致的手机损坏以及盗窃、抢劫、遗失手机等不在服务保障范围内（具体以小米手机意外保障服务条款为准）。<br>
                    <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-618f0738281f9446', '//cart.mi.com/static/insuranceAgreement.php', 'pcpid']);" data-stat-id="618f0738281f9446" href="" target="_blank" class="J_baoxianMore">了解《小米手机意外保障服务》详细条款&gt;</a>
                </dd>
            </dl>
        </div>
    </div>
    <div class="modal-footer clearfix">
        <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-70b1dab01f0212bb', '', 'pcpid']);" data-stat-id="70b1dab01f0212bb" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">确认</a>
    </div>
</div>


<div class="modal fade  modal-hide modal-bigtap-tip" id="J_modalBigtapTip">
    <div class="modal-header">
        <h3>温馨提示</h3>
        <span class="close" data-dismiss="modal"><i class="iconfont"></i></span>
    </div>
    <div class="modal-body">
         
    </div>
    <div class="modal-footer clearfix">
        <a onclick="_msq.push(['trackEvent', '9899b068fcb38b0e-2d63fe270ff4b9d4', '', 'pcpid']);" data-stat-id="2d63fe270ff4b9d4" class="btn btn-primary" data-dismiss="modal" aria-hidden="true">确定</a>
    </div>
</div>
<script type="text/javascript" src="/home/js/jquery-1.8.3.min.js"></script>
<script src="/admin/layer/layer.js"></script>

<script type="text/javascript">
    var rl=document.getElementsByName('rongliang');
    function opt(obj){
        var title=obj.getAttribute('title');
        // alert(title);
        for(var i=0;i<rl.length;i++){
            rl[i].style.background='white';
            // rl[i].firstElementChild.value='';
        }
        obj.style.background='#F0F0F0';
        // obj.firstElementChild.value=title;

    }
    var cl=document.getElementsByName('color');
    function option(obj){
        // var title=obj.getAttribute('title');
        // alert(title);
        for(var i=0;i<cl.length;i++){
            cl[i].style.background='white';
            // rl[i].firstElementChild.value='';
        }
        obj.style.background='#F0F0F0';
        // obj.firstElementChild.value=title;

    }

    $('.plus').click(function(){
       var n = parseInt($('#shuliang').val());
       // alert(n);
       $('#shuliang').attr('value',++n);
       // alert($('#shuliang').attr('value'));
    });
    $('.minus').click(function(){
       var n = parseInt($('#shuliang').attr('value'));
       // alert(n);
       
       // alert(typeof(n));
       // alert($('#shuliang').attr('value'));
       n=n-1;
       if(n==0){
         return false;
       } 
       $('#shuliang').attr('value',n);
    })
    
    function addFavorite(obj){
        // var r=confirm('确定收藏吗?');
        var r=layer.confirm('确定收藏吗?', {
          btn: ['当然','你猜'] //按钮
        }, function(){
           $.ajax({
                url:'/addFavorite',
                data:{'goodsid':obj},
                success:function(mes){
                    layer.msg("收藏成功");
                }
            })
        }, function(){
          
        });
        
    }
</script>

@extends('home.footer')
<!-- .modal-globalSites END -->

    

</body>
</html>

