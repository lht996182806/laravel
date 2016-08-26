
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
<script src="home/js/base.min.js"></script>

<script type="text/javascript">var _head_over_time = (new Date()).getTime();</script>
<script type="text/javascript" src='home/js/jquery-1.8.3.min.js'></script>  

<!-- 
<link rel="stylesheet" href="/center_files/1.css">
<link rel="stylesheet" type="text/css" href="/center_files/main.min.css"> -->

<style>
    .lister{
        position: absolute;
        width:500px;
        height:460px;
        left:230px;
        top:0px;
        background:#5E5954;
        /*opacity:0.95;*/    
    }
</style>
</head>
<body>
<div class="site-topbar">
    <div class="container">
        <div class="topbar-nav">
            <a rel="nofollow" href="//www.mi.com/index.html" >小米网</a><span class="sep">|</span><a rel="nofollow" href="http://www.miui.com/" target="_blank">MIUI</a><span class="sep">|</span><a rel="nofollow" href="http://www.miliao.com/" target="_blank">米聊</a><span class="sep">|</span><a rel="nofollow" href="http://game.xiaomi.com/" target="_blank">游戏</a><span class="sep">|</span><a rel="nofollow" href="http://www.duokan.com/" target="_blank">多看阅读</a><span class="sep">|</span><a rel="nofollow" href="https://i.mi.com/" target="_blank">云服务</a><span class="sep">|</span><a rel="nofollow" href="//www.mi.com/c/appdownload/" target="_blank">小米网移动版</a><span class="sep">|</span><a rel="nofollow" href="//static.mi.com/feedback/" target="_blank">问题反馈</a><span class="sep">|</span><a rel="nofollow" href="#J_modal-globalSites" data-toggle="modal">Select Region</a>
        </div>
        <div class="topbar-cart" id="J_miniCartTrigger">
            <a rel="nofollow" class="cart-mini" id="J_miniCartBtn" href="//static.mi.com/cart/"><i class="iconfont">&#xe60c;</i>购物车<span class="cart-mini-num J_cartNum"></span></a>
            <div class="cart-menu" id="J_miniCartMenu">
                <div class="loading"><div class="loader"></div></div>
            </div>
        </div>
        <div class="topbar-info" id="J_userInfo">
            @if(session('user'))
                <div id="J_userInfo" class="topbar-info">
                    <span class="user">
                        <a target="_blank" href="/center" class="user-name" rel="nofollow" data-stat-id="de9e238ee20c2ea1" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-de9e238ee20c2ea1', '//my.mi.com/portal', 'pcpid']);">
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
                            <li><a target="_blank" href="//order.mi.com/user/comment" rel="nofollow" data-stat-id="6d05445058873c2c" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-6d05445058873c2c', '//order.mi.com/user/comment', 'pcpid']);">评价晒单</a>
                            </li>
                            <li><a target="_blank" href="//order.mi.com/user/favorite" rel="nofollow" data-stat-id="32e2967e9a749d3d" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-32e2967e9a749d3d', '//order.mi.com/user/favorite', 'pcpid']);">我的喜欢</a>
                            </li>
                            <li><a target="_blank" href="http://account.xiaomi.com/" rel="nofollow" data-stat-id="6c2aba14bc7f649a" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-6c2aba14bc7f649a', 'http://account.xiaomi.com/', 'pcpid']);">小米账户</a>
                            </li>
                            <li><a href="/logout" rel="nofollow" data-stat-id="770a31519c713b11" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-770a31519c713b11', '//order.mi.com/site/logout', 'pcpid']);">退出登录</a>
                            </li>
                            </ul>
                    </span>
                    <span class="sep">|</span>
                        <a target="_blank" href="/center" class="link link-order" rel="nofollow" data-stat-id="a9e9205e73f0742c" onclick="_msq.push(['trackEvent', '79fe2eae924d2a2e-a9e9205e73f0742c', '//static.mi.com/order/', 'pcpid']);">个人中心</a>
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

                <li id="J_navCategory" class="nav-category" >
                    <div class="doodle" style="display:block;margin-left:-30px">
                        <img src="/home/picture/fenlei.gif" alt="">
                    </div>
                    <a class="link-category" href=""><span class="text">全部商品分类</span></a>

                    <div class="site-category" style="opacity:0.8"> 
                        <ul class="site-category-list clearfix" id="J_categoryList" style="background:#5E5954" > 
                        @if(!empty($list) ) 
                        @foreach($list as $k=>$v)
                        <li class="list"> 
                            <a href="#" class="title" data-stat-id="0d41105a57b667b5" >{{$v->name}}<i class="iconfont"></i>
                            </a> 
                            <div class="lister" style="display:none">
                                 <ul>
                                 @foreach($v->sub as $value)
                                    
                                    <li style="float:left;clear:both;margin-top:10px;width:220px;height:100px;background:white;list-style:none;border-radius:8px;"> 
                                        <a href=""><span style="margin-left:15px;align:center">{{$value->name}}</span></a>
                                        <a href=""><img style="float:right;margin-right:30px;margin-top:6px" src="{{}}" width="100px" alt=""></a>
                                    </li>
                                    
                                @endforeach
                                </ul>
                            </div> 
                        </li>
                        @endforeach  
                        @endif
                        </ul> 
                     </div>
                </li>
                
                <li class="nav-item">
                    <a class="link" href="javascript:void(0);"><span class="text">小米手机</span><span class="arrow"></span></a>
                    <div class="item-children">
                        <div class="container">
                            <ul class="children-list clearfix">
                                <li class="first">
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/mimax/"><img src="home/picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/maxdingbu!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/maxdingbu!320x220.jpg 2x" alt="小米Max" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/mimax/">小米Max</a></div>
                                    <p class="price">1499元起</p>
                                </li>
                                <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/mi5/"><img src="home/picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/16/goods/nav/mi5!160x110.jpg" srcset="//c1.mifile.cn/f/i/16/goods/nav/mi5!320x220.jpg 2x" alt="小米手机5" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/mi5/">小米手机5</a></div>
                                    <p class="price">1999元起</p>
                                </li>
                                                            
                                <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/mi4s/"><img src="home/picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/16/goods/nav/mi4s!160x110.jpg" srcset="//c1.mifile.cn/f/i/16/goods/nav/mi4s!320x220.jpg 2x" alt="小米手机4S" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/mi4s/">小米手机4S</a></div>
                                    <p class="price">1699元</p>
                                </li>
                                <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/mi4c/"><img src="home/picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/mi4c!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/mi4c!320x220.jpg 2x" alt="小米手机4c" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/mi4c/">小米手机4c</a></div>
                                    <p class="price">1099元</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="link" href="javascript: void(0);"><span class="text">红米</span><span class="arrow"></span></a>
                    <div class="item-children">
                        <div class="container">
                            <ul class="children-list clearfix">
                                                            <li class="first">
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/note3/"><img src="home/picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/note3!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/note3!320x220.jpg 2x" alt="红米Note 3" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/note3/">红米Note 3</a></div>
                                    <p class="price">899元起</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/hongmi3s/"><img src="home/picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/video/hongmi3s!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/video/hongmi3s!320x220.jpg 2x" alt="红米手机3S" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/hongmi3s/">红米手机3S</a></div>
                                    <p class="price">699元起</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/hongmi3/"><img src="home/picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/hongmi3!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/hongmi3!320x220.jpg 2x" alt="红米手机3" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/hongmi3/">红米手机3</a></div>
                                    <p class="price">699元起</p>                                                                    </li>
                                                        </ul>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="link" href="javascript: void(0);"><span class="text">平板</span><span class="arrow"></span></a>
                    <div class="item-children">
                        <div class="container">
                            <ul class="children-list clearfix">
                                                            <li class="first">
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/mipad2/"><img src="home/picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/mipad2-16!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/mipad2-16!320x220.jpg 2x" alt="小米平板2 16GB" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/mipad2/">小米平板2 16GB</a></div>
                                    <p class="price">999元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/mipad2/"><img src="home/picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/mipad2-64!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/mipad2-64!320x220.jpg 2x" alt="小米平板2 64GB" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/mipad2/">小米平板2 64GB</a></div>
                                    <p class="price">1299元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/mipad2/"><img src="home/picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/mipad2-64-win!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/mipad2-64-win!320x220.jpg 2x" alt="小米平板2  64GB Windows版" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/mipad2/">小米平板2  64GB Windows版</a></div>
                                    <p class="price">1299元</p>                                                                    </li>
                                                        </ul>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="link" href="javascript: void(0);"><span class="text">电视</span><span class="arrow"></span></a>
                    <div class="item-children">
                        <div class="container">
                            <ul class="children-list clearfix">
                                                            <li class="first">
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/mitv3s/43/"><img src="home/picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/16/goods/nav/mitv3s-43!160x110.jpg" srcset="//c1.mifile.cn/f/i/16/goods/nav/mitv3s-43!320x220.jpg 2x" alt="小米电视3S 43英寸" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/mitv3s/43/">小米电视3S 43英寸</a></div>
                                    <p class="price">1799元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/mitv3s/48/"><img src="home/picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/mitv3s48!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/mitv3s48!320x220.jpg 2x" alt="小米电视3S 48英寸" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/mitv3s/48/">小米电视3S 48英寸</a></div>
                                    <p class="price">1999元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/mitv3/55/"><img src="home/picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/mitv355!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/mitv355!320x220.jpg 2x" alt="小米电视3 55英寸" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/mitv3/55/">小米电视3 55英寸</a></div>
                                    <p class="price">3999元起</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/mitv3/60/"><img src="home/picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/mitv3-60!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/mitv3-60!320x220.jpg 2x" alt="小米电视3 60英寸" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/mitv3/60/">小米电视3 60英寸</a></div>
                                    <p class="price">4999元起</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/mitv3s/65/"><img src="home/picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/16/goods/nav/mitv3s-65!160x110.jpg" srcset="//c1.mifile.cn/f/i/16/goods/nav/mitv3s-65!320x220.jpg 2x" alt="小米电视3S 65英寸 曲面" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/mitv3s/65/">小米电视3S 65英寸 曲面</a></div>
                                    <p class="price">8999元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/mitv3/70/"><img src="home/picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/mitv70!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/mitv70!320x220.jpg 2x" alt="小米电视3 70英寸" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/mitv3/70/">小米电视3 70英寸</a></div>
                                    <p class="price">9999元</p>                                                                    </li>
                                                        </ul>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="link" href="javascript: void(0);"><span class="text">盒子 · 影音</span><span class="arrow"></span></a>
                    <div class="item-children">
                        <div class="container">
                            <ul class="children-list clearfix">
                                                            <li class="first">
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/hezimini/"><img src="home/picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/hezimini.png" srcset="//c1.mifile.cn/f/i/15/goods/nav/hezimini.png 2x" alt="小米盒子mini版" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/hezimini/">小米盒子mini版</a></div>
                                    <p class="price">199元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/hezi3/"><img src="home/picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/hezi3.png" srcset="//c1.mifile.cn/f/i/15/goods/nav/hezi3.png 2x" alt="小米盒子3" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/hezi3/">小米盒子3</a></div>
                                    <p class="price">299元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/hezi3s/"><img src="home/picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/hezi3s!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/hezi3s!320x220.jpg 2x" alt="小米盒子3 增强版" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/hezi3s/">小米盒子3 增强版</a></div>
                                    <p class="price">399元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/tvzj/"><img src="home/picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/zhuji!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/zhuji!320x220.jpg 2x" alt="小米电视主机" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/tvzj/">小米电视主机</a></div>
                                    <p class="price">999元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//item.mi.com/1160800073.html"><img src="home/picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/jinshuban!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/jinshuban!320x220.jpg 2x" alt="小米家庭音响 金属版" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//item.mi.com/1160800073.html">小米家庭音响 金属版</a></div>
                                    <p class="price">899元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//item.mi.com/1160800074.html"><img src="home/picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/putonban!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/putonban!320x220.jpg 2x" alt="小米家庭音响 标准版" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//item.mi.com/1160800074.html">小米家庭音响 标准版</a></div>
                                    <p class="price">699元</p>                                                                    </li>
                                                        </ul>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="link" href="javascript: void(0);"><span class="text">路由器</span><span class="arrow"></span></a>
                    <div class="item-children">
                        <div class="container">
                            <ul class="children-list clearfix">
                                                            <li class="first">
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/miwifi/"><img src="home/picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/miwifi!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/miwifi!320x220.jpg 2x" alt="全新小米路由器" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/miwifi/">全新小米路由器</a></div>
                                    <p class="price">699元起</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/miwifi3/"><img src="home/picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/miwifi-3!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/miwifi-3!320x220.jpg 2x" alt="小米路由器 3" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/miwifi3/">小米路由器 3</a></div>
                                    <p class="price">149元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/miwifimini/"><img src="home/picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/miwifimini!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/miwifimini!320x220.jpg 2x" alt="小米路由器 mini" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/miwifimini/">小米路由器 mini</a></div>
                                    <p class="price">129元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/miwifilite/"><img src="home/picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/miwifilite!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/miwifilite!320x220.jpg 2x" alt="小米路由器 青春版" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/miwifilite/">小米路由器 青春版</a></div>
                                    <p class="price">79元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//item.mi.com/1153200003.html"><img src="home/picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/wifiExtension!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/wifiExtension!320x220.jpg 2x" alt="小米WiFi放大器" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//item.mi.com/1153200003.html">小米WiFi放大器</a></div>
                                    <p class="price">39元</p>                                                                    </li>
                                                        </ul>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="link" href="javascript:void(0);"><span class="text">智能硬件</span><span class="arrow"></span></a>
                    <div class="item-children">
                        <div class="container">
                            <ul class="children-list clearfix">
                                                            <li class="first">
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/dianfanbao/"><img src="home/picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/dianfanbao!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/dianfanbao!320x220.jpg 2x" alt="米家压力IH电饭煲" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/dianfanbao/">米家压力IH电饭煲</a></div>
                                    <p class="price">999元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/scooter/"><img src="home/picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/scooter!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/scooter!320x220.jpg 2x" alt="九号平衡车" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/scooter/">九号平衡车</a></div>
                                    <p class="price">1999元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/air2/"><img src="home/picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/16/goods/nav/air2!160x110.jpg" srcset="//c1.mifile.cn/f/i/16/goods/nav/air2!320x220.jpg 2x" alt="小米空气净化器 2" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/air2/">小米空气净化器 2</a></div>
                                    <p class="price">699元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/scale/"><img src="home/picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/scale!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/scale!320x220.jpg 2x" alt="体重秤" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/scale/">体重秤</a></div>
                                    <p class="price">99元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/xiaoyi/"><img src="home/picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/xiaoyi!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/xiaoyi!320x220.jpg 2x" alt="摄像机" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/xiaoyi/">摄像机</a></div>
                                    <p class="price">149元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a href="//www.mi.com/smart/"><img src="home/picture/placeholder-220!110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/smart!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/smart!320x220.jpg 2x" alt="查看全部<br/>智能硬件" width="160" height="110" /></a>
                                    </div>
                                    <div class="title"><a href="//www.mi.com/smart/">查看全部<br/>智能硬件</a></div>
                                                                                                        </li>
                                                        </ul>
                        </div>
                    </div>
                </li>
                <li class="nav-item">
                    <a  class="link" href="//www.mi.com/service/" target="_blank">
                    <span class="text">服务</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a rel="nofollow" class="link" href="http://www.xiaomi.cn" target="_blank"><span class="text">社区</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="header-search">
            <form id="J_searchForm" class="search-form clearfix" action="//search.mi.com/search" method="get">
                <label for="search" class="hide">站内搜索</label>
                <input class="search-text" type="search" id="search" name="keyword" autocomplete="off" data-search-config="{'defaultWords':[{'Key':'小米手机5','Rst':11},{'Key':'空气净化器2','Rst':1},{'Key':'活塞耳机','Rst':4},{'Key':'小米路由器','Rst':8},{'Key':'移动电源','Rst':21},{'Key':'运动相机','Rst':3},{'Key':'小蚁摄像机','Rst':2},{'Key':'小米体重秤','Rst':1},{'Key':'小米插线板','Rst':13},{'Key':'配件优惠套装','Rst':32}]}" />
                <input type="submit" class="search-btn iconfont" value="&#xe616;" />
                <div class="search-hot-words">
                    <a href="//item.mi.com/buyphone/hongmi3s">红米3S</a><a href="//www.mi.com/shouhuan2/">小米手环 2</a>                </div>
            </form>
        </div>
    </div>
</div>



 @section('con')
                
 @show



<div class="site-footer">
    <div class="container">
        <div class="footer-service">
            <ul class="list-service clearfix">
                            <li><a rel="nofollow" href="//www.mi.com/service/exchange#repaire" target="_blank"><i class="iconfont">&#xe634;</i>1小时快修服务</a></li>
                            <li><a rel="nofollow" href="//www.mi.com/service/exchange#back" target="_blank"><i class="iconfont">&#xe635;</i>7天无理由退货</a></li>
                            <li><a rel="nofollow" href="//www.mi.com/service/exchange#free" target="_blank"><i class="iconfont">&#xe636;</i>15天免费换货</a></li>
                            <li><a rel="nofollow" href="//www.mi.com/service/exchange#mail" target="_blank"><i class="iconfont">&#xe638;</i>满150元包邮</a></li>
                            <li><a rel="nofollow" href="//www.mi.com/static/maintainlocation/" target="_blank"><i class="iconfont">&#xe637;</i>520余家售后网点</a></li>
                        </ul>
        </div>
        <div class="footer-links clearfix">
            
            <dl class="col-links col-links-first">
                <dt>帮助中心</dt>
                
                <dd><a rel="nofollow" href="//www.mi.com/service/account/register/"   target="_blank">账户管理</a></dd>
                
                <dd><a rel="nofollow" href="//www.mi.com/service/buy/buytime/"   target="_blank">购物指南</a></dd>
                
                <dd><a rel="nofollow" href="//www.mi.com/service/order/sendprogress/"   target="_blank">订单操作</a></dd>
                
            </dl>
                
            <dl class="col-links ">
                <dt>服务支持</dt>
                
                <dd><a rel="nofollow" href="//www.mi.com/service/exchange"   target="_blank">售后政策</a></dd>
                
                <dd><a rel="nofollow" href="http://fuwu.mi.com/"   target="_blank">自助服务</a></dd>
                
                <dd><a rel="nofollow" href="http://xiazai.mi.com/"   target="_blank">相关下载</a></dd>
                
            </dl>
                
            <dl class="col-links ">
                <dt>线下门店</dt>
                
                <dd><a rel="nofollow" href="//www.mi.com/c/xiaomizhijia/"   target="_blank">小米之家</a></dd>
                
                <dd><a rel="nofollow" href="//www.mi.com/static/maintainlocation/"   target="_blank">服务网点</a></dd>
                
                <dd><a rel="nofollow" href="//www.mi.com/static/familyLocation/"   target="_blank">零售网点</a></dd>
                
            </dl>
                
            <dl class="col-links ">
                <dt>关于小米</dt>
                
                <dd><a rel="nofollow" href="//www.mi.com/about"   target="_blank">了解小米</a></dd>
                
                <dd><a rel="nofollow" href="http://hr.xiaomi.com/"   target="_blank">加入小米</a></dd>
                
                <dd><a rel="nofollow" href="//www.mi.com/about/contact"   target="_blank">联系我们</a></dd>
                
            </dl>
                
            <dl class="col-links ">
                <dt>关注我们</dt>
                
                <dd><a rel="nofollow" href="http://e.weibo.com/xiaomishouji"   target="_blank">新浪微博</a></dd>
                
                <dd><a rel="nofollow" href="http://xiaoqu.qq.com/mobile/share/index.html?url=http%3A%2F%2Fxiaoqu.qq.com%2Fmobile%2Fbarindex.html%3Fwebview%3D1%26type%3D%26source%3Dindex%26_lv%3D25741%26sid%3D%26_wv%3D5123%26_bid%3D128%26%23bid%3D10525%26from%3Dwechat"   target="_blank">小米部落</a></dd>
                
                <dd><a rel="nofollow" href="#J_modalWeixin" data-toggle="modal" >官方微信</a></dd>
                
            </dl>
                
            <dl class="col-links ">
                <dt>特色服务</dt>
                
                <dd><a rel="nofollow" href="//order.mi.com/queue/f2code"   target="_blank">F 码通道</a></dd>
                
                <dd><a rel="nofollow" href="//www.mi.com/mimobile/"   target="_blank">小米移动</a></dd>
                
                <dd><a rel="nofollow" href="//order.mi.com/misc/checkitem"   target="_blank">防伪查询</a></dd>
                
            </dl>
                
            <div class="col-contact">
                <p class="phone">400-100-5678</p>
<p><span class="J_serviceTime-normal" style="">周一至周日 8:00-18:00</span>
<span class="J_serviceTime-holiday" style="display:none;">2月7日至13日服务时间 9:00-18:00</span><br>（仅收市话费）</p>
<a rel="nofollow" class="btn btn-line-primary btn-small" href="//www.mi.com/service/contact" target="_blank"><i class="iconfont">&#xe600;</i> 24小时在线客服</a>            </div>
        </div>
    </div>
</div>
<div class="site-info">
    <div class="container">
        <div class="logo ir">小米官网</div>
        <div class="info-text">
            <p class="sites"><a rel="nofollow" href="//www.mi.com/index.html"   target="_blank">小米网</a><span class="sep">|</span><a rel="nofollow" href="http://www.miui.com/"   target="_blank">MIUI</a><span class="sep">|</span><a rel="nofollow" href="http://www.miliao.com/"   target="_blank">米聊</a><span class="sep">|</span><a rel="nofollow" href="http://www.duokan.com/"   target="_blank">多看书城</a><span class="sep">|</span><a rel="nofollow" href="http://www.miwifi.com/"   target="_blank">小米路由器</a><span class="sep">|</span><a rel="nofollow" href="http://call.mi.com/"   target="_blank">视频电话</a><span class="sep">|</span><a rel="nofollow" href="http://blog.xiaomi.com/"   target="_blank">小米后院</a><span class="sep">|</span><a rel="nofollow" href="http://xiaomi.tmall.com/"   target="_blank">小米天猫店</a><span class="sep">|</span><a rel="nofollow" href="http://shop115048570.taobao.com"   target="_blank">小米淘宝直营店</a><span class="sep">|</span><a rel="nofollow" href="http://union.mi.com/"   target="_blank">小米网盟</a><span class="sep">|</span><a rel="nofollow" href="//static.mi.com/feedback/"   target="_blank">问题反馈</a><span class="sep">|</span><a rel="nofollow" href="#J_modal-globalSites" data-toggle="modal" >Select Region</a>            </p>
            <p>&copy;<a href="//www.mi.com/" target="_blank" title="mi.com">mi.com</a> 京ICP证110507号 京ICP备10046444号 <a rel="nofollow"  href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010802020134" target="_blank">京公网安备11010802020134号 </a><a rel="nofollow"  href="//c1.mifile.cn/f/i/2013/cn/jingwangwen.jpg" target="_blank" rel="nofollow">京网文[2014]0059-0009号</a>

<br> 违法和不良信息举报电话：185-0130-1238，本网站所列数据，除特殊说明，所有数据均出自我司实验室测试</p>
        </div>
        <div class="info-links">
                    <a  rel="nofollow" href="//privacy.truste.com/privacy-seal/validation?rid=4fc28a8c-6822-4980-9c4b-9fdc69b94eb8&lang=zh-cn" target="_blank"><img  rel="nofollow" src="home/picture/74b5f23139724ce3bb03bb28d4a51cff.gif" alt="TRUSTe Privacy Certification" /></a>
                    <a  rel="nofollow" href="//search.szfw.org/cert/l/CX20120926001783002010" target="_blank"><img  rel="nofollow" src="home/picture/v-logo-2.png" alt="诚信网站" /></a>
                    <a  rel="nofollow" href="https://ss.knet.cn/verifyseal.dll?sn=e12033011010015771301369&ct=df&pa=461082" target="_blank"><img  rel="nofollow" src="home/picture/v-logo-1.png" alt="可信网站" /></a>
                    <a  rel="nofollow" href="http://www.315online.com.cn/member/315140007.html" target="_blank"><img  rel="nofollow" src="home/picture/v-logo-3.png" alt="网上交易保障中心" /></a>
                </div>
    </div>
    <div class="slogan ir">探索黑科技，小米为发烧而生</div>
</div>
<div id="J_modalWeixin" class="modal fade modal-hide modal-weixin" data-width="480" data-height="520">
        <div class="modal-hd">
            <a class="close" data-dismiss="modal"><i class="iconfont">&#xe602;</i></a>
            <span class="title">小米手机官方微信二维码</span>
        </div>
        <div class="modal-bd">
            <p style="margin: 0 0 10px;">打开微信，点击右上角的“+”，选择“扫一扫”功能，<br/>对准下方二维码即可。</p>
            <img alt="" src="home/picture/qr.png" width="375" height="375" />
        </div>
    </div>
<!-- .modal-weixin END -->
<div class="modal modal-hide modal-bigtap-queue" id="J_bigtapQueue">
    <div class="modal-body">
        <span class="close" data-dismiss="modal" aria-hidden="true"><i class="iconfont">&#xe602;</i></span>
        <h3>正在排队，请稍候喔！</h3>
        <div class="queue-tip-box">
            <p class="queue-tip">当前人数较多，请您耐心等待，排队期间请不要关闭页面。</p>
            <p class="queue-tip">时常来官网看看，最新产品和活动信息都会在这里发布。</p>
            <p class="queue-tip">下载小米商城 App 玩玩吧！产品开售信息抢先知道。</p>
            <p class="queue-tip">发现了让你眼前一亮的小米产品，别忘了分享给朋友！</p>
            <p class="queue-tip">产品开售前会有预售信息，关注官网首页就不会错过。</p>
        </div>
        <div class="queue-animate">
            <div id="J_mituWalking" class="mitu-walk"> </div>
            <div class="animate-mask animate-mask-left"></div>
            <div class="animate-mask animate-mask-right"></div>
        </div>
    </div>
</div>
<!-- .xm-dm-queue END -->
<div id="J_bigtapError" class="modal modal-hide modal-bigtap-error">
    <span class="close" data-dismiss="modal" aria-hidden="true"><i class="iconfont">&#xe602;</i></span>
    <div class="modal-body">
        <h3>抱歉，网络拥堵无法连接服务器</h3>
        <p  class="error-tip">由于访问人数太多导致服务器压力山大，请您稍后再重试。</p>
        <p >
            <a class="btn btn-primary" id="J_bigtapRetry">重试</a>
        </p>
    </div>
</div>


<div id="J_bigtapModeBox" class="modal fade modal-hide modal-bigtap-mode">
        <span class="close" data-dismiss="modal" ><i class="iconfont">&#xe602;</i></span>
        <div class="modal-body">
            <h3 class="title">为防黄牛，请您输入下面的验证码</h3>
             <p class="desc">在防黄牛的路上，我们一直在努力，也知道做的还不够。<br>
    所以，这次劳烦您多输一次验证码，我们一起防黄牛。</p>
            <div class="mode-loading" id="J_bigtapModeLoading">
                <img src="home/picture/loading.gif" alt="" width="32" height="32">
                <a  id="J_bigtapModeReload" class="reload  hide" href="javascript:void(0);">网络错误，点击重新获取验证码！</a>
            </div>
            <div class="mode-action hide" id="J_bigtapModeAction">
                <div class="mode-con" id="J_bigtapModeContent"></div>
                <input type="text" name="bigtapmode" class="input-text" id="J_bigtapModeInput" placeholder="请输入正确的验证码">
                <p class="tip" id="J_bigtapModeTip"></p>
                <a class="btn  btn-gray" id="J_bigtapModeSubmit">确认</a>
            </div>
        </div>
    </div>

<div id="J_bigtapSoldout" class="modal fade modal-hide modal-bigtap-soldout modal-bigtap-soldout-norec">
        <span class="close" data-dismiss="modal" ><i class="iconfont">&#xe602;</i></span>
        <div class="modal-body ">
            <div class="content clearfix">
                <span class="mitu"></span>
                <p class="title">很抱歉，人真是太多了<br>您晚了一步...</p>
            </div>

            <div class="bigtap-recomment-goods" >
                <div class="hd"><span>这些产品也不错，而且有现货哦！</span></div>
                <ul class="clearfix" id="J_bigtapRecommentList"></ul>
            </div>
        </div>
    </div>
<!-- .xm-dm-error END -->
<div id="J_modal-globalSites" class="modal fade modal-hide modal-globalSites" data-width="640">
       <div class="modal-hd">
            <a class="close" data-dismiss="modal"><i class="iconfont">&#xe602;</i></a>
            <span class="title">Select Region</span>
        </div>
        <div class="modal-bd">
            <h3>Welcome to Mi.com</h3>
            <p class="modal-globalSites-tips">Please select your country or region</p>
            <p class="modal-globalSites-links clearfix">
                <a href="//www.mi.com/index.html">Mainland China</a>
                <a href="http://www.mi.com/hk/">Hong Kong</a>
                <a href="http://www.mi.com/tw/">TaiWan</a>
                <a href="http://www.mi.com/sg/">Singapore</a>
                <a href="http://www.mi.com/my/">Malaysia</a>
                <a href="http://www.mi.com/ph/">Philippines</a>
                <a href="http://www.mi.com/in/">India</a>
                <a href="http://www.mi.com/id/">Indonesia</a>
                <a href="http://br.mi.com/">Brasil</a>
                <a href="http://www.mi.com/en/">Global Home</a>
                <a href="http://www.mi.com/mena/"> MENA</a>
            </p>
        </div>
</div>

<script type="text/javascript">
    if(document.getElementById('usermenu')){
        var menuuser=document.getElementById('usermenu')
        var menu=document.getElementById('menu');
        menuuser.onmouseover=function(){
            menu.style.display='block';
        }
        menuuser.onmouseout=function(){
            menu.style.display='none';
        }
        menu.onmouseover=function(){
             this.style.display='block';
        }
        menu.onmouseout=function(){
            this.style.display='none';

        }
    }
    
    
    
    var list=document.getElementsByClassName('list');
    // var lister=document.getElementsByClassName('lister'); 
    
    
    $('.list').each(function(){
        $(this).mouseover(function(){
             // alert('sdf');
             // console.log($(this).find('div'));
            $(this).find('div').attr('style','display:block');
        });
        $(this).mouseout(function(){

            $(this).find('div').attr('style','display:none');
            //console.log($(this).find('div').attr('style'));

            // alert('sdf');
            
        });
       
        // $(this).find('div [display="none"]').attr('display','block');
    })
    
</script>
</body>
</html>