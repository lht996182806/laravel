<!doctype html>
<html lang="zh-CN" xml:lang="zh-CN">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
<meta charset="UTF-8" />
<title>小米官网-小米手机、红米手机、小米电视官方正品专卖网站</title>
<meta name="description" content="小米手机官方网站，直营小米公司旗下所有产品，囊括小米手机、红米手机、小米电视、智能硬件、配件及小米生活周边，同时提供小米客户服务及售后支持。" />
<meta name="keywords" content="小米,小米手机,小米官网,红米手机,小米商城,小米电视" />
<meta name="viewport" content="width=1226" />
<link rel="shortcut icon" href="//s01.mifile.cn/favicon.ico" type="image/x-icon" />
<link rel="icon" href="//s01.mifile.cn/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="home/css/base.min.css" />
<link rel="stylesheet" href="home/css/index.min.css" />
<script type="text/javascript">var _head_over_time = (new Date()).getTime();</script>
<script type="text/javascript" src='home/js/jquery-1.8.3.min.js'></script>  

<style>
    /*无线分类隐藏div*/
    .lister{
        position: absolute;
        width:548px;
        height:460px;
        left:220px;
        top:0px;
        background:white;
        
    }
</style>
</head>
<body>
<div class="site-topbar">
    <div class="container">
        <div class="topbar-nav">
            <a rel="nofollow" href="/hindex" >小米网</a><span class="sep">|</span><a rel="nofollow" href="" target="_blank">MIUI</a><span class="sep">|</span><a rel="nofollow" href="" target="_blank">米聊</a><span class="sep">|</span><a rel="nofollow" href="" target="_blank">游戏</a><span class="sep">|</span><a rel="nofollow" href="" target="_blank">多看阅读</a><span class="sep">|</span><a rel="nofollow" href="" target="_blank">云服务</a><span class="sep">|</span><a rel="nofollow" href="" target="_blank">小米网移动版</a><span class="sep">|</span><a rel="nofollow" href="" target="_blank">问题反馈</a><span class="sep">|</span><a rel="nofollow" href="#J_modal-globalSites" data-toggle="modal">Select Region</a>
        </div>
        @if(session('user'))
        <div class="topbar-cart" id="J_miniCartTrigger">
            <a rel="nofollow" class="cart-mini" id="J_miniCartBtn" href="/shopcar"><i class="iconfont">&#xe60c;</i>购物车<span class="cart-mini-num J_cartNum"></span></a>
            <div class="cart-menu" id="J_miniCartMenu">
                <div class="loading"><div class="loader"></div></div>
            </div>
        </div>
        @else
        <div class="topbar-cart" id="J_miniCartTrigger">
            <a rel="nofollow" class="cart-mini" id="J_miniCartBtn" href="/cart"><i class="iconfont">&#xe60c;</i>购物车<span class="cart-mini-num J_cartNum"></span></a>
            <div class="cart-menu" id="J_miniCartMenu">
                <div class="loading"><div class="loader"></div></div>
            </div>
        </div>
        @endif
        <div class="topbar-info" id="J_userInfo">
                @if(session('user'))
                <div id="J_userInfo" class="topbar-info">
                    <span class="user">
                        <a target="_blank" href="" class="user-name" rel="nofollow" data-stat-id="de9e238ee20c2ea1" >
                        <span class="name" id="usermenu">
                            @if($user->username)
                                {{$user->username}}
                            @else
                                {{session('user')}}
                            @endif    
                        </span>
                        <i class="iconfont"></i>
                        </a>
                            <ul class="user-menu" style="display: none;" id="menu">
                            <li><a target="_blank" href="/center" rel="nofollow" data-stat-id="e0b9e1d1fa8052a2" >个人中心</a>
                            </li>
                            <li><a target="_blank" href="/center" rel="nofollow" data-stat-id="6d05445058873c2c" >评价晒单</a>
                            </li>
                            <li><a target="_blank" href="/center" rel="nofollow" data-stat-id="32e2967e9a749d3d" >我的喜欢</a>
                            </li>
                            <li><a target="_blank" href="/center" rel="nofollow" data-stat-id="6c2aba14bc7f649a" >小米账户</a>
                            </li>
                            <li><a href="/logout" rel="nofollow" data-stat-id="770a31519c713b11" >退出登录</a>
                            </li>
                            </ul>
                    </span>
                    <span class="sep">|</span>
                        <a target="_blank" href="/center" class="link link-order" rel="nofollow" data-stat-id="a9e9205e73f0742c" >个人中心</a>
                </div> 
                @else
                <a  rel="nofollow" class="link" href="{{url('/login')}}" data-needlogin="true">登录</a><span class="sep">|</span><a  rel="nofollow" class="link" href="{{url('/register')}}" >注册</a>  
                @endif
        </div>
    </div>
</div>
<div class="site-header">
    <div class="container">
        <div class="header-logo">
            <a class="logo ir" href="{{url('/hindex')}}" title="小米官网">小米官网</a>

        </div>
        
        <div class="header-nav">
            <ul class="nav-list J_navMainList clearfix">

                <li id="" class="nav-category" >
                    <div class="doodle" style="display:block;margin-left:-30px">
                        <img src="/home/picture/fenlei.gif" alt="">
                    </div>
                    <a class="link-category" href="/lister"><span class="text">全部商品分类</span></a>
                    <div class="site-category"> 
                    <ul class="site-category-list clearfix" id="J_categoryList" style="background:#5E5954" >  
                    @foreach($list as $k=>$v)
                    <li class="list"> 
                        <a href="#" class="title" data-stat-id="0d41105a57b667b5" >{{$v->name}}<i class="iconfont"></i>
                        </a> 
                        <div class="lister" style="display:none;">
                             <ul >
                             @foreach($v->sub as $m=>$value)

                                <li style="float:left;margin-left:10px;margin-top:10px;width:240px;height:60px;background:white;list-style:none;border-radius:8px;"> 
                                    <a href="/details/{{$m}}"><img style="float:left;margin-left:4px;margin-top:10px" src="{{$v->pic[$m]}}" width="40px" height="40px" alt=""></a>
                                    <a href="/details/{{$m}}"><span style="float:left;margin-left:20px;margin-top:20px">{{$value}}</span></a>
                                    <a href="/details/{{$m}}"><span style="float:right;margin-top:20px;margin-right:4px;border:1px solid #FF6700;color:#FF6700;width:58px;height:22px;text-align:center">选购</span></a>
                                </li>
                                
                            @endforeach
                            </ul>
                        </div> 
                    </li>
                    @endforeach  
                    </ul>
                    
                </div>
                </li>
                
                <li class="nav-item">
                    <a class="link" href="javascript:void(0);"><span class="text">小米手机</span><span class="arrow"></span></a>
                    <div class="item-children">
                        <div class="container">
                            <ul class="children-list clearfix">

                                @foreach($goods1 as $m)
                                <li class="first">
                                    <div class="figure figure-thumb">
                                        <a href="/details/{{$m->id}}"><img src="{{$m->pic}}"  alt="红米Note 3" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="/details/{{$m->id}}">{{$m->title}}</a></div>
                                    <p class="price">{{$m->price}}元起</p>                                
                                </li>
                                                            
                                 @endforeach
                                
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="link" href="javascript: void(0);"><span class="text">红米</span><span class="arrow"></span></a>
                    <div class="item-children">
                        <div class="container">
                            <ul class="children-list clearfix">
                            @foreach($goods2 as $m)
                                <li class="first">
                                    <div class="figure figure-thumb">
                                        <a href="/details/{{$m->id}}"><img src="{{$m->pic}}"  alt="红米Note 3" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="/details/{{$m->id}}">{{$m->title}}</a></div>
                                    <p class="price">{{$m->price}}元起</p>                                
                                </li>
                                                            
                            @endforeach
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="link" href="javascript: void(0);"><span class="text">平板</span><span class="arrow"></span></a>
                    <div class="item-children">
                        <div class="container">
                            <ul class="children-list clearfix">
                                @foreach($goods3 as $m)
                                <li class="first">
                                    <div class="figure figure-thumb">
                                        <a href="/details/{{$m->id}}"><img src="{{$m->pic}}"  alt="红米Note 3" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="/details/{{$m->id}}">{{$m->title}}</a></div>
                                    <p class="price">{{$m->price}}元起</p>                                
                                </li>
                                                            
                                @endforeach
                               
                                                           
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="link" href="javascript: void(0);"><span class="text">电视</span><span class="arrow"></span></a>
                    <div class="item-children">
                        <div class="container">
                            <ul class="children-list clearfix">
                               @foreach($goods4 as $m)
                                <li class="first">
                                    <div class="figure figure-thumb">
                                        <a href="/details/{{$m->id}}"><img src="{{$m->pic}}"  alt="红米Note 3" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="/details/{{$m->id}}">{{$m->title}}</a></div>
                                    <p class="price">{{$m->price}}元起</p>                                
                                </li>
                                                            
                                @endforeach
                               
                               
                                                          
                                                          
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="link" href="javascript: void(0);"><span class="text">盒子 · 影音</span><span class="arrow"></span></a>
                    <div class="item-children">
                        <div class="container">
                            <ul class="children-list clearfix">
                               @foreach($goods5 as $m)
                                <li class="first">
                                    <div class="figure figure-thumb">
                                        <a href="/details/{{$m->id}}"><img src="{{$m->pic}}"  alt="红米Note 3" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="/details/{{$m->id}}">{{$m->title}}</a></div>
                                    <p class="price">{{$m->price}}元起</p>                                
                                </li>
                                                            
                               @endforeach
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="link" href="javascript: void(0);"><span class="text">路由器</span><span class="arrow"></span></a>
                    <div class="item-children">
                        <div class="container">
                            <ul class="children-list clearfix">
                                @foreach($goods2 as $m)
                                <li class="first">
                                    <div class="figure figure-thumb">
                                        <a href="/details/{{$m->id}}"><img src="{{$m->pic}}"  alt="红米Note 3" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="/details/{{$m->id}}">{{$m->title}}</a></div>
                                    <p class="price">{{$m->price}}元起</p>                                
                                </li>
                                                            
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="link" href="javascript:void(0);"><span class="text">智能硬件</span><span class="arrow"></span></a>
                    <div class="item-children">
                        <div class="container">
                            <ul class="children-list clearfix">
                                @foreach($goods3 as $k=>$m)
                                <li class="first">
                                    <div class="figure figure-thumb">
                                        <a href="/details/{{$m->id}}"><img src="{{$goods3[$k]->pic}}"  alt="红米Note 3" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="/details/{{$m->id}}">{{$m->title}}</a></div>
                                    <p class="price">{{$m->price}}元起</p>                                
                                </li>
                                                            
                                @endforeach
                             </ul>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a  class="link" href="" target="_blank">
                    <span class="text">服务</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a rel="nofollow" class="link" href="" target="_blank"><span class="text">社区</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="header-search">
            <form id="" class="search-form clearfix" action="/lister" method="get">
                <label for="search" class="hide">站内搜索</label>
                <input class="search-text" type="search" id="search" name="keywords" autocomplete="off" data-search-config="{'defaultWords':[{'Key':'小米手机5','Rst':11},{'Key':'空气净化器2','Rst':1},{'Key':'活塞耳机','Rst':4},{'Key':'小米路由器','Rst':8},{'Key':'移动电源','Rst':21},{'Key':'运动相机','Rst':3},{'Key':'小蚁摄像机','Rst':2},{'Key':'小米体重秤','Rst':1},{'Key':'小米插线板','Rst':13},{'Key':'配件优惠套装','Rst':32}]}" />
                <input type="submit" class="search-btn iconfont" value="&#xe616;" />
                <div class="search-hot-words">
                    <a href="/details/3">红米3S</a><a href="">小米手环 2</a>                </div>
            </form>
        </div>
    </div>
</div>

<div class="home-hero-container container">
    <div class="home-hero">
        <div class="home-hero-slider">
            <div id="J_homeSlider" class="xm-slider">
                <img id="lunbo" src="/home/picture/1.jpg" alt="">
            </div>
           
        </div>

        <div class="home-hero-sub row">
            <div class="span4">
                <ul class="home-channel-list clearfix">
                                        <li class="top left"><a href="#" data-stat-aid="AA11221" data-stat-pid="2_44_1_250" target="_blank"><i class="iconfont">&#xe640;</i>电信专场</a></li>
                                        <li class="top"><a href="#" data-stat-aid="AA10868" data-stat-pid="2_44_2_251" target="_blank"><i class="iconfont">&#xe63e;</i>企业团购</a></li>
                                        <li class="top"><a href="#" data-stat-aid="AA10869" data-stat-pid="2_44_3_252" target="_blank"><i class="iconfont">&#xe63b;</i>官翻产品</a></li>
                                        <li class="left"><a href="#" data-stat-aid="AA11244" data-stat-pid="2_44_4_253" target="_blank"><i class="iconfont"></i>小米移动</a></li>
                                        <li class=""><a href="#" data-stat-aid="AA12084" data-stat-pid="2_44_5_254" target="_blank"><i class="iconfont">&#xe900;</i>以旧换新</a></li>
                                        <li class=""><a href="#" data-stat-aid="AA10871" data-stat-pid="2_44_6_255" target="_blank"><i class="iconfont"></i>话费充值</a></li>
                                        
                </ul>
            </div>
            <div class="span16" id="J_homePromo" data-stat-title="焦点图下方小图">
                <ul class="home-promo-list clearfix">
                                        <li class="first">
                        <a class="item" href="/details/1" data-stat-aid="AA13226" data-stat-pid="2_16_1_77" target="_blank"><img alt="小米5高配版-0704" src="home/picture/8f681dddce134e7181e6e24dd539a09f.gif" srcset="http://i3.mifile.cn/a4/7bcfc2ef-d3b5-45dd-a00c-c8ee73353fc7 2x" /></a>
                    </li>
                                        <li>
                        <a class="item" href="/lister" data-stat-aid="AA13209" data-stat-pid="2_16_2_78" target="_blank"><img alt="小米手环 光感版" src="home/picture/e87f7abde8d3471784dd487ba6cfec52.gif" srcset="//i8.mifile.cn/v1/a1/e65fdfb7-1f79-f60a-4239-32e814469a14.jpg 2x" /></a>
                    </li>
                                        <li>
                        <a class="item" href="details/6" data-stat-aid="AA13140" data-stat-pid="2_16_3_79" target="_blank"><img alt="红米Note3-0629" src="home/picture/e85ed6bb10b34556abb5bf3ea82b0b22.gif" srcset="http://i3.mifile.cn/a4/9718957b-f32d-4ecd-9e17-9652b3698651 2x" /></a>
                    </li>
                                    </ul>
            </div>
        </div>
    </div>

    <div class="home-star-goods" id="J_homeStar">
        <div class="xm-plain-box">
            <div class="box-hd">
                <h2 class="title">小米明星单品</h2>
                <div class="more"></div>
            </div>
            <div class="box-bd">
                <ul class="xm-carousel-list xm-carousel-col-5-list goods-list rainbow-list clearfix J_carouselList">
                       
                        @foreach($goods as $v)
                        <li class="rainbow-item-1">
                            <a class="thumb" href="/details/{{$v->id}}" data-stat-aid="AA13151" data-stat-pid="2_17_1_80" target="_blank"><img src="{{$v->pic}}" srcset="http://i3.mifile.cn/a4/13baa465-0b81-4f11-91fd-d8a164962f41 2x" alt="小米手机5 尊享版" /></a>
                                <h3 class="title"><a href="/details/{{$v->id}}" data-stat-aid="AA13151" data-stat-pid="2_17_1_80" target="_blank">{{$v->title}}</a></h3>
                                <p class="desc">4GB内存+128GB容量，陶瓷机身</p>
                                <p class="price">{{$v->price}}元</p>
                        </li>
                       @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="page-main home-main">
    <div class="container">
        <div id="smart" class="home-brick-box home-brick-row-2-box xm-plain-box J_itemBox J_brickBox" data-from-stat="false">
            <div class="box-hd">
                <h2 class="title">智能硬件</h2>
                <div class="more J_brickNav">
                    <div class="row"><div class="span4 span-first"><ul class="brick-promo-list clearfix"> <li class="brick-item brick-item-l"> <a target="_blank" data-stat-pid="2_18_1_90" data-stat-aid="AA13253" href="" data-stat-id="AA13253+2_18_1_90" ><img width="160" height="160" alt="" src="home/picture/124d82cc-cfce-44ab-b711-28b21be81683.jpg"></a> </li></ul></div><div class="span16"><ul class="brick-list clearfix">  <li data-gid="1161200059" class="brick-item brick-item-m brick-item-m-2"> <div class="figure figure-img"> <a target="_blank" data-stat-pid="2_19_1_92" data-stat-aid="AA12726" href="" data-stat-id="AA12726+2_19_1_92" > <img width="160" height="160" alt="小米路由器3" src="home/picture/T1rQAgB7Av1RXrhCrK.jpg"> </a> </div> <h3 class="title"><a target="_blank" data-stat-pid="2_19_1_92" data-stat-aid="AA12726" href="" data-stat-id="AA12726+2_19_1_92" >小米路由器3</a></h3> <p class="desc">四天线设计，更安全更稳定</p> <p class="price"> <span class="num">149</span>元  </p>  <div class="flag flag-postfree">免邮费</div>  </li>   <li data-gid="2162100002" class="brick-item brick-item-m brick-item-m-2"> <div class="figure figure-img"> <a target="_blank" data-stat-pid="2_19_2_93" data-stat-aid="AA13195" href="" data-stat-id="AA13195+2_19_2_93" > <img width="160" height="160" alt="米家 LED 智能台灯" src="/home/picture/pms_1464071511.37197399!220x220.jpg"> </a> </div> <h3 class="title"><a target="_blank" data-stat-pid="2_19_2_93" data-stat-aid="AA13195" href="" data-stat-id="AA13195+2_19_2_93" >米家 LED 智能台灯</a></h3> <p class="desc">无可视频闪，亮度色温无级调节</p> <p class="price"> <span class="num">169</span>元  </p>  </li>   <li data-gid="0" class="brick-item brick-item-m brick-item-m-2"> <div class="figure figure-img"> <a target="_blank" data-stat-pid="2_19_3_94" data-stat-aid="AA13254" href="" data-stat-id="AA13254+2_19_3_94" > <img width="160" height="160" alt="小米净水器 厨下式" src="/home/picture/T1zTK_Bbhv1RXrhCrK.jpg"> </a> </div> <h3 class="title"><a target="_blank" data-stat-pid="2_19_3_94" data-stat-aid="AA13254" href="" data-stat-id="AA13254+2_19_3_94" >小米净水器 厨下式</a></h3> <p class="desc">RO反渗透直出纯净水，包邮包安装</p> <p class="price"> <span class="num">1999</span>元  </p>  <div class="flag flag-postfree">免邮费</div>  </li>   <li data-gid="2152300005" class="brick-item brick-item-m brick-item-m-2"> <div class="figure figure-img"> <a target="_blank" data-stat-pid="2_19_4_95" data-stat-aid="AA13212" href="" data-stat-id="AA13212+2_19_4_95" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA13212+2_19_4_95', '//list.mi.com/accessories/tag', 'pcpid']);"> <img width="160" height="160" alt="小蚁智能摄像机 夜视版" src="/home/picture/T1o3Z_BKET1RXrhCrK!220x220.jpg"> </a> </div> <h3 class="title"><a target="_blank" data-stat-pid="2_19_4_95" data-stat-aid="AA13212" href="" data-stat-id="AA13212+2_19_4_95">小蚁智能摄像机 夜视版</a></h3> <p class="desc">能看能听能说，手机远程观看</p> <p class="price"> <span class="num">149</span>元  </p>  </li>   <li data-gid="2152300006" class="brick-item brick-item-m brick-item-m-2"> <div class="figure figure-img"> <a target="_blank" data-stat-pid="2_19_5_96" data-stat-aid="AA13214" href="" data-stat-id="AA13214+2_19_5_96" > <img width="160" height="160" alt="Yeelight床头灯" src="/home/picture/T1KOYgBQdv1RXrhCrK.jpg"> </a> </div> <h3 class="title"><a target="_blank" data-stat-pid="2_19_5_96" data-stat-aid="AA13214" href="" data-stat-id="AA13214+2_19_5_96" >Yeelight床头灯</a></h3> <p class="desc">触摸式操作，给卧室1600万种颜色</p> <p class="price"> <span class="num">249</span>元  </p>  </li>   <li data-gid="2160900010" class="brick-item brick-item-m brick-item-m-2"> <div class="figure figure-img"> <a target="_blank" data-stat-pid="2_19_6_97" data-stat-aid="AA13220" href="//www.mi.com/air2/" data-stat-id="AA13220+2_19_6_97" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-AA13220+2_19_6_97', '//www.mi.com/air2/', 'pcpid']);"> <img width="160" height="160" alt="小米空气净化器2" src="//i1.mifile.cn/a1/T1zBYgBCWv1RXrhCrK!220x220.jpg"> </a> </div> <h3 class="title"><a target="_blank" data-stat-pid="2_19_6_97" data-stat-aid="AA13220" href="" data-stat-id="AA13220+2_19_6_97" >小米空气净化器2</a></h3> <p class="desc">10分钟，房间空气焕然一新</p> <p class="price"> <span class="num">699</span>元  </p>  </li>   <li data-gid="1161300017" class="brick-item brick-item-m brick-item-m-2"> <div class="figure figure-img"> <a target="_blank" data-stat-pid="2_19_7_98" data-stat-aid="AA13176" href="" data-stat-id="AA13176+2_19_7_98" > <img width="160" height="160" alt="小米智能安防套装" src="/home/picture/T1YTJ_B_Av1RXrhCrK.jpg"> </a> </div> <h3 class="title"><a target="_blank" data-stat-pid="2_19_7_98" data-stat-aid="AA13176" href="" data-stat-id="AA13176+2_19_7_98" >小米智能安防套装</a></h3> <p class="desc">智能警戒，为您的家增添一份安心</p> <p class="price"> <span class="num">169</span>元  <del><span class="num">188</span>元</del>  </p>  <div class="flag flag-saleoff">     享9折 </div>  </li>   <li data-gid="2161800001" class="brick-item brick-item-m brick-item-m-2"> <div class="figure figure-img"> <a target="_blank" data-stat-pid="2_19_8_99" data-stat-aid="AA13255" href="" data-stat-id="AA13255+2_19_8_99" > <img width="160" height="160" alt="米家iHealth血压计" src="/home/picture/T1MQDgB5Vv1RXrhCrK.jpg"> </a> </div> <h3 class="title"><a target="_blank" data-stat-pid="2_19_8_99" data-stat-aid="AA13255" href="" data-stat-id="AA13255+2_19_8_99" >米家iHealth血压计</a></h3> <p class="desc">爸妈上手就会用的智能血压计</p> <p class="price"> <span class="num">399</span>元  </p>  </li> </ul></div></div>
                </div>
            </div>
            <div class="box-bd J_brickBd"></div>
        </div>
        <div id="match" class="home-brick-box home-brick-row-2-box xm-plain-box J_itemBox J_brickBox" data-from-stat="true" data-region-stat="1">
            <div class="box-hd">
                <h2 class="title">搭配</h2>
                <div class="more J_brickNav">
                    
                </div>
            </div>
            <div class="box-bd J_brickBd">
                <div class="row">
                    <div class="span4 span-first">
                        <ul class="brick-promo-list clearfix"> 
                            <li class="brick-item brick-item-m"> 
                                <a target="_blank" data-stat-pid="2_20_1_100" data-stat-aid="AA13243" href="" data-stat-id="AA13243+2_20_1_100" >
                                    <img width="160" height="160" alt="" src="/home/picture/1c0b64b4-0043-43ae-8c69-41e86bd615c6.jpg">
                                </a> 
                            </li>
                            <li class="brick-item brick-item-m"> 
                                <a target="_blank" data-stat-pid="2_20_2_101" data-stat-aid="AA13236" href="" data-stat-id="AA13236+2_20_2_101" >
                                <img width="160" height="160" alt="" src="/home/picture/95ecf19b-60da-47e2-a0f2-cec5fa7a3454.jpg">
                                </a> 
                            </li>
                        </ul>
                </div>
                <div class="span16">
                    <div class="tab-container" id="match-content">
                        <ul class="brick-list tab-content clearfix tab-content-active J_recommendActive"> 
                            <li data-gid="2160900011" class="brick-item brick-item-m"> 
                            <div class="figure figure-img"> 
                            <a target="_blank" data-stat-text="小米移动电源10000mAh 高配版" data-stat-index="0" data-stat-method="1_1" href="" data-stat-pid="stat_首页.搭配热门_0_1_1" data-stat-aid="小米移动电源10000mAh高配版" data-stat-id="小米移动电源10000mAh高配版+stat_首页.搭配热门_0_1_1" >
                            <img width="150" height="150" alt="小米移动电源10000mAh 高配版" src="/home/picture/T1eSZgBjVT1RXrhCrK.jpg">
                            </a> 
                    </div> 
                    <h3 class="title"> <a target="_blank" data-stat-text="小米移动电源10000mAh 高配版" data-stat-index="0" data-stat-method="1_1" href="" data-stat-pid="stat_首页.搭配热门_0_1_1" data-stat-aid="小米移动电源10000mAh高配版" data-stat-id="小米移动电源10000mAh高配版+stat_首页.搭配热门_0_1_1" >  小米移动电源10000mAh 高配版  </a>
                    </h3> <p class="price"> <span class="num">129</span>元  <del><span class="num">149</span>元</del>  </p>  <p class="rank">1.6万人评价</p>   <div class="flag flag-saleoff"> 享9折 </div>   <div class="review-wrapper"> <a target="_blank" data-stat-text="小米移动电源10000mAh 高配版" data-stat-index="0" data-stat-method="1_1" href="" data-stat-pid="stat_首页.搭配热门_0_1_1" data-stat-aid="小米移动电源10000mAh高配版" data-stat-id="小米移动电源10000mAh高配版+stat_首页.搭配热门_0_1_1" > <span class="review">很薄，充电快，方便携带</span> <span class="author"> 来自于 CURGT丶FaKer 的评价 <span class="date"></span> </span> </a> </div>  </li> <li data-gid="2151900016" class="brick-item brick-item-m"> <div class="figure figure-img"> <a target="_blank" data-stat-text="小米移动电源10000mAh" data-stat-index="1" data-stat-method="1_1" href="" data-stat-pid="stat_首页.搭配热门_1_1_1" data-stat-aid="小米移动电源10000mAh" data-stat-id="小米移动电源10000mAh+stat_首页.搭配热门_1_1_1" ><img width="150" height="150" alt="小米移动电源10000mAh" src="/home/picture/T12HJvByEv1RXrhCrK.jpg">
                    </a> 
                    </div> 
                    <h3 class="title"> <a target="_blank" data-stat-text="小米移动电源10000mAh" data-stat-index="1" data-stat-method="1_1" href="" data-stat-pid="stat_首页.搭配热门_1_1_1" data-stat-aid="小米移动电源10000mAh" data-stat-id="小米移动电源10000mAh+stat_首页.搭配热门_1_1_1" >  小米移动电源10000mAh  </a></h3> <p class="price"> <span class="num">79</span>元  </p>  <p class="rank">18.5万人评价</p>    <div class="review-wrapper"> <a target="_blank" data-stat-text="小米移动电源10000mAh" data-stat-index="1" data-stat-method="1_1" href="" data-stat-pid="stat_首页.搭配热门_1_1_1" data-stat-aid="小米移动电源10000mAh" data-stat-id="小米移动电源10000mAh+stat_首页.搭配热门_1_1_1" > <span class="review">小米移动电源10400我也买了.比这款大.重,还是喜...</span> <span class="author"> 来自于 笑致天下 的评价 <span class="date"></span> </span> </a> </div>  </li> <li data-gid="2161200010" class="brick-item brick-item-m"> <div class="figure figure-img"> <a target="_blank" data-stat-text="小米圈铁耳机" data-stat-index="2" data-stat-method="1_1" href="" data-stat-pid="stat_首页.搭配热门_2_1_1" data-stat-aid="小米圈铁耳机" data-stat-id="小米圈铁耳机+stat_首页.搭配热门_2_1_1" ><img width="150" height="150" alt="小米圈铁耳机" src="/home/picture/T1ycK_BjYv1RXrhCrK.jpg"></a> 
                    </div> 
                    <h3 class="title"> <a target="_blank" data-stat-text="小米圈铁耳机" data-stat-index="2" data-stat-method="1_1" href="" data-stat-pid="stat_首页.搭配热门_2_1_1" data-stat-aid="小米圈铁耳机" data-stat-id="小米圈铁耳机+stat_首页.搭配热门_2_1_1" >  小米圈铁耳机  </a></h3> <p class="price"> <span class="num">99</span>元  </p>  <p class="rank">8389人评价</p>    <div class="review-wrapper"> <a target="_blank" data-stat-text="小米圈铁耳机" data-stat-index="2" data-stat-method="1_1" href="" data-stat-pid="stat_首页.搭配热门_2_1_1" data-stat-aid="小米圈铁耳机" data-stat-id="小米圈铁耳机+stat_首页.搭配热门_2_1_1"> <span class="review">客服妹子实话说吧！永远支持国产，永远支持小米。这圈铁...</span> <span class="author"> 来自于 894039435 的评价 <span class="date"></span> </span> </a> </div>  </li> <li data-gid="2161200004" class="brick-item brick-item-m"> <div class="figure figure-img"> <a target="_blank" data-stat-text="小米活塞耳机 基础版" data-stat-index="3" data-stat-method="1_1" href="" data-stat-pid="stat_首页.搭配热门_3_1_1" data-stat-aid="小米活塞耳机基础版" data-stat-id="小米活塞耳机基础版+stat_首页.搭配热门_3_1_1" ><img width="150" height="150" alt="小米活塞耳机 基础版" src="//i2.mifile.cn/a1/T1WxYvB_xv1RXrhCrK.jpg?width=150&amp;height=150"></a> </div> 
                    <h3 class="title"> <a target="_blank" data-stat-text="小米活塞耳机 基础版" data-stat-index="3" data-stat-method="1_1" href="" data-stat-pid="stat_首页.搭配热门_3_1_1" data-stat-aid="小米活塞耳机基础版" data-stat-id="小米活塞耳机基础版+stat_首页.搭配热门_3_1_1" >  小米活塞耳机 基础版  </a></h3> <p class="price"> <span class="num">29</span>元  </p>  <p class="rank">4.3万人评价</p>    <div class="review-wrapper"> <a target="_blank" data-stat-text="小米活塞耳机 基础版" data-stat-index="3" data-stat-method="1_1" href="" data-stat-pid="stat_首页.搭配热门_3_1_1" data-stat-aid="小米活塞耳机基础版" data-stat-id="小米活塞耳机基础版+stat_首页.搭配热门_3_1_1" > <span class="review">耳机佩戴舒服，颜色鲜艳，关键音质好，低音震撼。</span> <span class="author"> 来自于 薛卫山0501 的评价 <span class="date"></span> </span> </a> </div>  </li> <li data-gid="2151400001" class="brick-item brick-item-m"> <div class="figure figure-img"> <a target="_blank" data-stat-text="小米插线板" data-stat-index="4" data-stat-method="1_1" href="" data-stat-pid="stat_首页.搭配热门_4_1_1" data-stat-aid="小米插线板" data-stat-id="小米插线板+stat_首页.搭配热门_4_1_1" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-小米插线板+stat_首页.搭配热门_4_1_1', '//item.mi.com/1151400001.html', 'pcpid']);"><img width="150" height="150" alt="小米插线板" src="/home/picture/pms_1463579883.27084326.jpg"></a> </div> <h3 class="title"> <a target="_blank" data-stat-text="小米插线板" data-stat-index="4" data-stat-method="1_1" href="" data-stat-pid="stat_首页.搭配热门_4_1_1" data-stat-aid="小米插线板" data-stat-id="小米插线板+stat_首页.搭配热门_4_1_1" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-小米插线板+stat_首页.搭配热门_4_1_1', '//item.mi.com/1151400001.html', 'pcpid']);">  小米插线板  </a></h3> <p class="price"> <span class="num">49</span>元  </p>  <p class="rank">23.9万人评价</p>    <div class="review-wrapper"> <a target="_blank" data-stat-text="小米插线板" data-stat-index="4" data-stat-method="1_1" href="" data-stat-pid="stat_首页.搭配热门_4_1_1" data-stat-aid="小米插线板" data-stat-id="小米插线板+stat_首页.搭配热门_4_1_1" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-小米插线板+stat_首页.搭配热门_4_1_1', '//item.mi.com/1151400001.html', 'pcpid']);"> <span class="review">东西真心不错，用过最好用的插线板，做工外观没得挑剔，...</span> <span class="author"> 来自于 yinyin19891117 的评价 <span class="date"></span> </span> </a> </div>  </li> <li data-gid="2152400008" class="brick-item brick-item-m"> <div class="figure figure-img"> <a target="_blank" data-stat-text="小米蓝牙耳机" data-stat-index="5" data-stat-method="1_1" href="" data-stat-pid="stat_首页.搭配热门_5_1_1" data-stat-aid="小米蓝牙耳机" data-stat-id="小米蓝牙耳机+stat_首页.搭配热门_5_1_1" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-小米蓝牙耳机+stat_首页.搭配热门_5_1_1', '//item.mi.com/1152400013.html', 'pcpid']);"><img width="150" height="150" alt="小米蓝牙耳机" src="home/picture/T190DvB4dv1RXrhCrK.jpg"></a> </div> <h3 class="title"> <a target="_blank" data-stat-text="小米蓝牙耳机" data-stat-index="5" data-stat-method="1_1" href="" data-stat-pid="stat_首页.搭配热门_5_1_1" data-stat-aid="小米蓝牙耳机" data-stat-id="小米蓝牙耳机+stat_首页.搭配热门_5_1_1" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-小米蓝牙耳机+stat_首页.搭配热门_5_1_1', '//item.mi.com/1152400013.html', 'pcpid']);">  小米蓝牙耳机  </a></h3> <p class="price"> <span class="num">79</span>元  </p>  <p class="rank">8.4万人评价</p>    <div class="review-wrapper"> <a target="_blank" data-stat-text="小米蓝牙耳机" data-stat-index="5" data-stat-method="1_1" href="" data-stat-pid="stat_首页.搭配热门_5_1_1" data-stat-aid="小米蓝牙耳机" data-stat-id="小米蓝牙耳机+stat_首页.搭配热门_5_1_1" > <span class="review">小米的产品值得信赖，用了一段时间，无论是听歌，打电话...</span> <span class="author"> 来自于 气功流 的评价 <span class="date"></span> </span> </a> </div>  </li> <li data-gid="2154300022" class="brick-item brick-item-m"> <div class="figure figure-img"> <a target="_blank" data-stat-text="小米小钢炮蓝牙音箱2" data-stat-index="6" data-stat-method="1_1" href="" data-stat-pid="stat_首页.搭配热门_6_1_1" data-stat-aid="小米小钢炮蓝牙音箱2" data-stat-id="小米小钢炮蓝牙音箱2+stat_首页.搭配热门_6_1_1" ><img width="150" height="150" alt="小米小钢炮蓝牙音箱2" src="/home/picture/T1F5K_BjVv1RXrhCrK.jpg"></a> </div> <h3 class="title"> <a target="_blank" data-stat-text="小米小钢炮蓝牙音箱2" data-stat-index="6" data-stat-method="1_1" href="" data-stat-pid="stat_首页.搭配热门_6_1_1" data-stat-aid="小米小钢炮蓝牙音箱2" data-stat-id="小米小钢炮蓝牙音箱2+stat_首页.搭配热门_6_1_1" >  小米小钢炮蓝牙音箱2  </a></h3> <p class="price"> <span class="num">129</span>元  </p>  <p class="rank">9136人评价</p>    <div class="review-wrapper"> <a target="_blank" data-stat-text="小米小钢炮蓝牙音箱2" data-stat-index="6" data-stat-method="1_1" href="" data-stat-pid="stat_首页.搭配热门_6_1_1" data-stat-aid="小米小钢炮蓝牙音箱2" data-stat-id="小米小钢炮蓝牙音箱2+stat_首页.搭配热门_6_1_1" > <span class="review">物流超快，包装一打开，我就闻到了一缕口红的清香，陶醉...</span> <span class="author"> 来自于 588262758 的评价 <span class="date"></span> </span> </a> </div>  </li> <li data-gid="2161800002" class="brick-item brick-item-s"> <div class="figure figure-img"> <a target="_blank" data-stat-text="小米小钢炮蓝牙音箱 青春版 象牙白" data-stat-index="7" data-stat-method="1_2" href="" data-stat-pid="stat_首页.搭配热门_7_1_2" data-stat-aid="小米小钢炮蓝牙音箱青春版象牙白" data-stat-id="小米小钢炮蓝牙音箱青春版象牙白+stat_首页.搭配热门_7_1_2" > <img width="80" height="80" alt="小米小钢炮蓝牙音箱 青春版 象牙白" src="/home/picture/T15hZ_BsDv1RXrhCrK.jpg"> </a> </div> <h3 class="title"><a target="_blank" data-stat-text="小米小钢炮蓝牙音箱 青春版 象牙白" data-stat-index="7" data-stat-method="1_2" href="" data-stat-pid="stat_首页.搭配热门_7_1_2" data-stat-aid="小米小钢炮蓝牙音箱青春版象牙白" data-stat-id="小米小钢炮蓝牙音箱青春版象牙白+stat_首页.搭配热门_7_1_2">小米小钢炮蓝牙音箱 青春版 象牙白</a></h3> <p class="price"><span class="num">99</span>元</p> </li> <li class="brick-item brick-item-s"> <div class="figure figure-more"><a target="_blank" href="" data-stat-pid="stat_首页.搭配热门_undefined_undefined" data-stat-id="undefined+stat_首页.搭配热门_undefined_undefined" ><i class="iconfont"></i></a></div> <a target="_blank" href="" class="more" data-stat-pid="stat_首页.搭配热门_undefined_undefined" data-stat-id="undefined+stat_首页.搭配热门_undefined_undefined" >浏览更多<small>热门</small></a> </li></ul>
            </div>
        </div>
      
    </div>
</div>

@extends('home.footer')
<!-- .modal-globalSites END -->
<script src="home/js/base.min.js"></script>
<script>
(function() {
    MI.namespace('GLOBAL_CONFIG');
    MI.GLOBAL_CONFIG = {
        orderSite: '',
        wwwSite: '',
        cartSite: '',
        itemSite: '',
        assetsSite: '',
        listSite: '',
        searchSite: '',
        mySite: '',
        damiaoSite: '',
        damiaoGoodsId:["2155300001","2155300002","2160400006","2160400007","2160400008","2160700028","2160700029","2142400036","2161600033","2161600028","2161700017","2162000035","2162100006","2161400001","2162500004","2162500005"],
        logoutUrl: '',
        staticSite: '',
        quickLoginUrl: ''
    };
    MI.setLoginInfo.orderUrl = MI.GLOBAL_CONFIG.orderSite + '';
    MI.setLoginInfo.logoutUrl = MI.GLOBAL_CONFIG.logoutUrl;
    MI.setLoginInfo.init(MI.GLOBAL_CONFIG);
    MI.miniCart.init();
    MI.updateMiniCart();
})();
</script>
<!-- <script src="home/js/home.min.js"></script> -->
<script src="home/js/xmsg_ti.js"></script>
<script type="text/javascript">
    var lunbo=document.getElementById('lunbo');
    var i=1;
    var mytime=setInterval(function(){
        
        lunbo.setAttribute('src',"/home/picture/"+i+".jpg")
        i++;
        if(i>4){
            i=1;
        }
    },1000)
</script>
</body>
</html>
