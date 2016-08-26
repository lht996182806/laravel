<!DOCTYPE html>
<html xml:lang="zh-CN" lang="zh-CN"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"><script src="/list_files/mstr_002.js" async="" type="text/javascript"></script><script src="/list_files/unjcV2.js" async="" type="text/javascript"></script><script src="/list_files/mstr.js" async="" type="text/javascript"></script><script src="/list_files/jquery.js" async="" type="text/javascript"></script><script src="/list_files/xmst.js" async="" type="text/javascript"></script>
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta charset="UTF-8">
<title>商品列表</title>
<meta name="viewport" content="width=1226">
<meta name="description" content="小米手机5的检索结果，小米官方网站包含小米手机5价格及小米手机5适配机型，官方推荐小米手机5产品，帮助米粉挑选合适自己的小米手机5商品。">
<meta name="keywords" content="小米手机5">
<meta name="robots" content="noindex">
<link rel="shortcut icon" href="http://s01.mifile.cn/favicon.ico" type="image/x-icon">
<link rel="icon" href="http://s01.mifile.cn/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="/list_files/base.css">

<link rel="stylesheet" href="/list_files/list.css">
<script type="text/javascript">var _head_over_time = (new Date()).getTime();</script>
<style>
    .lister{
        position: absolute;
        width:500px;
        height:460px;
        left:230px;
        top:0px;
        background:#5E5954;
        
    }
    .pagination li{
        list-style:none;
        float:left;
        margin-left:15px;
        font-size:22px
    }
</style>
</head>
<body>

<div class="site-topbar">
    <div class="container">
        <div class="topbar-nav">
            <a rel="nofollow" href="" >小米网</a><span class="sep">|</span><a rel="nofollow" href="" target="_blank">MIUI</a><span class="sep">|</span><a rel="nofollow" href="" target="_blank">米聊</a><span class="sep">|</span><a rel="nofollow" href="" target="_blank">游戏</a><span class="sep">|</span><a rel="nofollow" href="" target="_blank">多看阅读</a><span class="sep">|</span><a rel="nofollow" href="" target="_blank">云服务</a><span class="sep">|</span><a rel="nofollow" href="" target="_blank">小米网移动版</a><span class="sep">|</span><a rel="nofollow" href="" target="_blank">问题反馈</a><span class="sep">|</span><a rel="nofollow" href="#J_modal-globalSites" data-toggle="modal">Select Region</a>
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
    </div>
</div>
<div class="site-header">
    <div class="container">
        <div class="header-logo">
            <a href="/hindex"><img src="/home/images/logo.png" alt=""></a>
          
                    </div>
        <div class="header-nav">
            <ul class="nav-list J_navMainList clearfix">
                <li id="J_navCategory" class="nav-category">
                    <a  data-stat-id="d7d79a744cdeefa8" class="link-category" href=""><span class="text">全部商品分类</span></a>
                <div class="site-category"> <ul id="J_categoryList" class="site-category-list clearfix">  <li class="category-item"> <a class="title" href="">手机 平板 电话卡<i class="iconfont"></i></a> <div class="children clearfix children-col-2"><ul class="children-list children-list-col children-list-col-1"><li class="star-goods"> <a class="link" href=""><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/list/mi5bar80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/mi5bar80.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">小米手机5</span></a> <a class="btn btn-line-primary btn-small btn-buy" href="">选购</a> </li><li class="star-goods"> <a class="link" href=""><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/maxbar80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/sidebar/maxbar80.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">小米Max</span></a> <a class="btn btn-line-primary btn-small btn-buy" href="">选购</a> </li><li class="star-goods"> <a class="link" href=""><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/video/mi4s80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/video/mi4s80.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">小米手机4S</span></a> <a class="btn btn-line-primary btn-small btn-buy" href="">选购</a> </li><li class="star-goods"> <a class="link" href=""><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/mi4c.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/sidebar/mi4c.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">小米手机4c</span></a> <a class="btn btn-line-primary btn-small btn-buy" href="">选购</a> </li><li class="star-goods"> <a class="link" href="http:"><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/note3.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/sidebar/note3.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">红米Note 3</span></a> <a class="btn btn-line-primary btn-small btn-buy" href="">选购</a> </li><li class="star-goods"> <a class="link" href=""><img class="thumb" src="/list_files/placeholder-40.png" data-src="http://c1.mifile.cn/f/i/g/2015/video/hm3s80x80.jpg?width=40&amp;height=40" srcset="http://c1.mifile.cn/f/i/g/2015/video/hm3s80x80.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">红米手机3S</span></a> <a class="btn btn-line-primary btn-small btn-buy" href="">选购</a> </li></ul><ul class="children-list children-list-col children-list-col-2"><li class="star-goods"> <a class="link" href=""><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/hongmi3.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/sidebar/hongmi3.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">红米手机3</span></a> <a class="btn btn-line-primary btn-small btn-buy" href="">选购</a> </li><li class="star-goods"> <a class="link" href=""><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/pad2.png?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/sidebar/pad2.png?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">小米平板2</span></a> <a class="btn btn-line-primary btn-small btn-buy" href="">选购</a> </li><li class="star-goods"> <a class="link" href=""><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/heyue.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/sidebar/heyue.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">合约机</span></a> <a class="btn btn-line-primary btn-small btn-buy" href="">选购</a> </li><li class="star-goods"> <a class="link" href=""><img class="thumb" src="/list_files/placeholder-40.png" data-src="http://c1.mifile.cn/f/i/g/2015/video/3X80.jpg?width=40&amp;height=40" srcset="http://c1.mifile.cn/f/i/g/2015/video/3X80.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">定制版手机</span></a> <a class="btn btn-line-primary btn-small btn-buy" href="">选购</a> </li><li class="star-goods"> <a class="link" href=""><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/compare.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/sidebar/compare.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">对比手机</span></a> <a class="btn btn-line-primary btn-small btn-buy" href="">选购</a> </li><li> <a class="link" href=""><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/mimobile.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/sidebar/mimobile.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">小米移动 电话卡</span></a>  </li></ul></div> </li>  <li class="category-item"> <a class="title" href="">电视 盒子<i class="iconfont"></i></a> <div class="children clearfix children-col-3"><ul class="children-list children-list-col children-list-col-1"><li> <a class="link" href=""><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/4380side.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/sidebar/4380side.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">小米电视 43英寸</span></a>  </li><li> <a class="link" href=""><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/mitv3s48.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/sidebar/mitv3s48.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">小米电视 48英寸</span></a>  </li><li> <a class="link" href=""><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/tv3-55.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/sidebar/tv3-55.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">小米电视 55英寸</span></a>  </li><li> <a class="link" href="http://www.mi.com/mitv3/"><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/tv60.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/sidebar/tv60.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">小米电视 60英寸</span></a>  </li><li> <a class="link" href="http://www.mi.com/mitv3s/65/"><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/6580side.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/sidebar/6580side.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">小米电视 65英寸</span></a>  </li><li> <a class="link" href="http://www.mi.com/mitv3/70/"><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/tv70.png?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/sidebar/tv70.png?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">小米电视 70英寸</span></a>  </li></ul><ul class="children-list children-list-col children-list-col-2"><li> <a class="link" href="http://www.mi.com/tvzj/"><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/tvzj.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/sidebar/tvzj.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">小米电视主机</span></a>  </li><li> <a class="link" href="http://www.mi.com/hezi3s/"><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/hezizengqiangban80side.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/sidebar/hezizengqiangban80side.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">小米盒子3 增强版</span></a>  </li><li> <a class="link" href="http://www.mi.com/hezi3/"><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/hezis.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/sidebar/hezis.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">小米盒子3</span></a>  </li><li> <a class="link" href="http://www.mi.com/hezimini/"><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/hezimini.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/sidebar/hezimini.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">小米盒子 mini</span></a>  </li><li> <a class="link" href="http://item.mi.com/1154100018.html"><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/diyinpao.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/sidebar/diyinpao.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">小米低音炮</span></a>  </li><li> <a class="link" href="http://www.mi.com/shb/"><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/shb.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/sidebar/shb.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">蓝牙手柄</span></a>  </li></ul><ul class="children-list children-list-col children-list-col-3"><li> <a class="link" href="http://list.mi.com/accessories/tag?id=yinxiang"><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/zuheyinxiang80side.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/sidebar/zuheyinxiang80side.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">家庭音响</span></a>  </li><li> <a class="link" href="http://list.mi.com/tvboxpj"><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/dianshipeijian.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/sidebar/dianshipeijian.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">电视盒子配件</span></a>  </li></ul></div> </li>  <li class="category-item"> <a class="title" href="http://www.mi.com/smart/">路由器 智能硬件<i class="iconfont"></i></a> <div class="children clearfix children-col-3"><ul class="children-list children-list-col children-list-col-1"><li> <a class="link" href="http://www.mi.com/miuav/"><img class="thumb" src="/list_files/placeholder-40.png" data-src="http://c1.mifile.cn/f/i/g/2015/video/wurenji80.jpg?width=40&amp;height=40" srcset="http://c1.mifile.cn/f/i/g/2015/video/wurenji80.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">小米无人机</span></a>  </li><li> <a class="link" href="http://www.mi.com/miwifi3/"><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/luyouqi-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/luyouqi-80.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">小米路由器</span></a>  </li><li> <a class="link" href="http://www.mi.com/scooter/"><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/list/scooter.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/list/scooter.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">九号平衡车</span></a>  </li><li> <a class="link" href="http://www.mi.com/dianfanbao/"><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/dianfanbao-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/dianfanbao-80.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">米家压力IH电饭煲</span></a>  </li><li> <a class="link" href="http://www.mi.com/kettle/"><img class="thumb" src="/list_files/placeholder-40.png" data-src="http://c1.mifile.cn/f/i/g/2015/video/shuihu80.jpg?width=40&amp;height=40" srcset="http://c1.mifile.cn/f/i/g/2015/video/shuihu80.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">米家恒温电水壶</span></a>  </li><li> <a class="link" href="http://www.mi.com/mituwatch/"><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/shoubiao3-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/shoubiao3-80.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">米兔儿童电话手表</span></a>  </li></ul><ul class="children-list children-list-col children-list-col-2"><li> <a class="link" href="http://list.mi.com/accessories/tag?id=xueyaji"><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/xueyaji-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/xueyaji-80.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">血压计</span></a>  </li><li> <a class="link" href="http://list.mi.com/accessories/tag?id=jinghuaqilvxin"><img class="thumb" src="/list_files/placeholder-40.png" data-src="http://c1.mifile.cn/f/i/g/2015/video/jinghuaqilvxin80.jpg?width=40&amp;height=40" srcset="http://c1.mifile.cn/f/i/g/2015/video/jinghuaqilvxin80.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">净化器及滤芯</span></a>  </li><li> <a class="link" href="http://list.mi.com/accessories/tag?id=water"><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/jingshuiqiandlvxin-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/jingshuiqiandlvxin-80.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">净水器及滤芯</span></a>  </li><li> <a class="link" href="http://www.mi.com/xiaoyi/"><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/xiaoyi.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/sidebar/xiaoyi.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">摄像机</span></a>  </li><li> <a class="link" href="http://list.mi.com/accessories/tag?id=smartlamp"><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/zhinengdeng-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/zhinengdeng-80.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">智能灯</span></a>  </li><li> <a class="link" href="http://www.mi.com/socket/"><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/socket80side.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/sidebar/socket80side.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">智能插座 基础版</span></a>  </li></ul><ul class="children-list children-list-col children-list-col-3"><li> <a class="link" href="http://list.mi.com/accessories/smartsuit"><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/zhinengjiatingtaozhuang-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/zhinengjiatingtaozhuang-80.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">智能家庭组合</span></a>  </li><li> <a class="link" href="http://list.mi.com/accessories/shouhuan"><img class="thumb" src="/list_files/placeholder-40.png" data-src="http://c1.mifile.cn/f/i/g/2015/video/shouhuan280.jpg?width=40&amp;height=40" srcset="http://c1.mifile.cn/f/i/g/2015/video/shouhuan280.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">手环及配件</span></a>  </li><li> <a class="link" href="http://www.mi.com/scale/"><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/scale.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/sidebar/scale.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">体重秤</span></a>  </li><li> <a class="link" href="http://item.mi.com/1153200003.html"><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/wifiplus.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/sidebar/wifiplus.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">WiFi放大器</span></a>  </li><li> <a class="link" href="http://list.mi.com/26?cfrom=search"><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/doodle/znyjdaohang.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/doodle/znyjdaohang.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">全部智能硬件</span></a>  </li></ul></div> </li>  <li class="category-item"> <a class="title" href="http://list.mi.com/11">移动电源 插线板<i class="iconfont"></i></a> <div class="children clearfix children-col-1"> <ul class="children-list clearfix">  <li> <a class="link" href="http://www.mi.com/dianyuan/"><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/dianyuan.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/sidebar/dianyuan.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">小米移动电源</span></a>  </li>  <li> <a class="link" href="http://list.mi.com/accessories/tag?id=powerstrip"><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/powerscript.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/sidebar/powerscript.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">小米插线板</span></a>  </li>  <li> <a class="link" href="http://list.mi.com/13"><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/yidongdianyuan.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/sidebar/yidongdianyuan.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">品牌移动电源</span></a>  </li>  <li> <a class="link" href="http://list.mi.com/dyfj"><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/dianyuanfujian.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/sidebar/dianyuanfujian.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">移动电源附件</span></a>  </li>  </ul> </div> </li>  <li class="category-item"> <a class="title" href="http://list.mi.com/17">耳机 音箱<i class="iconfont"></i></a> <div class="children clearfix children-col-3"><ul class="children-list children-list-col children-list-col-1"><li> <a class="link" href="http://www.mi.com/headphone/"><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/headphone.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/sidebar/headphone.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">小米头戴式耳机</span></a>  </li><li> <a class="link" href="http://www.mi.com/quantie/"><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/quantie.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/sidebar/quantie.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">小米圈铁耳机</span></a>  </li><li> <a class="link" href="http://www.mi.com/capsuleearphone/"><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/jiaonang80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/sidebar/jiaonang80.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">小米胶囊耳机</span></a>  </li><li> <a class="link" href="http://www.mi.com/huosai2/"><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/jichuban-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/jichuban-80.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">小米活塞耳机 基础版</span></a>  </li><li> <a class="link" href="http://www.mi.com/bluetooth-headset/"><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/bluetoothheadset.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/sidebar/bluetoothheadset.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">小米蓝牙耳机</span></a>  </li><li> <a class="link" href="http://list.mi.com/18"><img class="thumb" src="/list_files/placeholder-40.png" data-src="http://c1.mifile.cn/f/i/g/2015/video/pinpai80.jpg?width=40&amp;height=40" srcset="http://c1.mifile.cn/f/i/g/2015/video/pinpai80.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">品牌耳机</span></a>  </li></ul><ul class="children-list children-list-col children-list-col-2"><li> <a class="link" href="http://www.mi.com/pocketaudio/"><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/pocketaudio.png?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/sidebar/pocketaudio.png?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">小米蓝牙音箱</span></a>  </li><li> <a class="link" href="http://www.mi.com/littleaudio/"><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/suishen-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/suishen-80.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">小米随身蓝牙音箱</span></a>  </li><li> <a class="link" href="http://www.mi.com/yinxiang/"><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/xiaogangpao2-hei-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/xiaogangpao2-hei-80.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">小钢炮音箱 2</span></a>  </li><li> <a class="link" href="http://www.mi.com/speaker/"><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/qignchungangpao-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/qignchungangpao-80.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">小钢炮音箱 青春版</span></a>  </li><li> <a class="link" href="http://item.mi.com/1154400010.html"><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/fanghezi.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/sidebar/fanghezi.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">小米方盒子音箱</span></a>  </li><li> <a class="link" href="http://www.mi.com/radio/"><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/radio80side.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/sidebar/radio80side.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">网络收音机</span></a>  </li></ul><ul class="children-list children-list-col children-list-col-3"><li> <a class="link" href="http://list.mi.com/accessories/soundbox"><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/pinpaiyinxiang.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/sidebar/pinpaiyinxiang.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">品牌音箱</span></a>  </li></ul></div> </li>  <li class="category-item"> <a class="title" href="http://list.mi.com/135">电池 存储卡<i class="iconfont"></i></a> <div class="children clearfix children-col-1"> <ul class="children-list clearfix">  <li> <a class="link" href="http://list.mi.com/14"><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/video/charger80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/video/charger80.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">电池</span></a>  </li>  <li> <a class="link" href="http://list.mi.com/15"><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/chongdianqi-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/chongdianqi-80.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">充电器</span></a>  </li>  <li> <a class="link" href="http://list.mi.com/16"><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/xiancai.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/sidebar/xiancai.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">线材</span></a>  </li>  <li> <a class="link" href="http://list.mi.com/27"><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/cunchu.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/sidebar/cunchu.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">存储卡</span></a>  </li>  <li> <a class="link" href="http://item.mi.com/1154300033.html"><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/5Battery1.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/sidebar/5Battery1.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">彩虹5号电池</span></a>  </li>  <li> <a class="link" href="http://item.mi.com/1155000010.html"><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/7Battery1.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/sidebar/7Battery1.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">彩虹7号电池</span></a>  </li>  </ul> </div> </li>  <li class="category-item"> <a class="title" href="http://list.mi.com/7">保护套 后盖<i class="iconfont"></i></a> <div class="children clearfix children-col-1"> <ul class="children-list clearfix">  <li> <a class="link" href="http://list.mi.com/8"><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/baohu.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/sidebar/baohu.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">保护套/保护壳</span></a>  </li>  <li> <a class="link" href="http://list.mi.com/2"><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/hougai.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/sidebar/hougai.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">后盖</span></a>  </li>  </ul> </div> </li>  <li class="category-item"> <a class="title" href="http://list.mi.com/1">贴膜 其他配件<i class="iconfont"></i></a> <div class="children clearfix children-col-1"> <ul class="children-list clearfix">  <li> <a class="link" href="http://list.mi.com/9"><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/tiemo.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/sidebar/tiemo.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">贴膜</span></a>  </li>  <li> <a class="link" href="http://search.mi.com/search_%E8%87%AA%E6%8B%8D%E6%9D%86"><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/zipaigan.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/sidebar/zipaigan.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">自拍杆</span></a>  </li>  <li> <a class="link" href="http://list.mi.com/3"><img class="thumb" src="/list_files/placeholder-40.png" data-src="http://c1.mifile.cn/f/i/g/2015/video/tiezhi80.jpg?width=40&amp;height=40" srcset="http://c1.mifile.cn/f/i/g/2015/video/tiezhi80.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">贴纸</span></a>  </li>  <li> <a class="link" href="http://list.mi.com/10"><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/fangchensai.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/sidebar/fangchensai.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">防尘塞</span></a>  </li>  <li> <a class="link" href="http://list.mi.com/5"><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/zhijia.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/sidebar/zhijia.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">手机支架</span></a>  </li>  <li> <a class="link" href="http://www.mi.com/wifi/"><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/wifi.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/sidebar/wifi.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">随身WiFi</span></a>  </li>  </ul> </div> </li>  <li class="category-item"> <a class="title" href="http://list.mi.com/134">米兔 服装<i class="iconfont"></i></a> <div class="children clearfix children-col-1"> <ul class="children-list clearfix">  <li> <a class="link" href="http://mitu.mi.com/"><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/mitu-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/mitu-80.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">米兔</span></a>  </li>  <li> <a class="link" href="http://list.mi.com/22"><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/fuzhuang-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/fuzhuang-80.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">服装</span></a>  </li>  <li> <a class="link" href="http://www.mi.com/transformers/"><img class="thumb" src="/list_files/placeholder-40.png" data-src="http://c1.mifile.cn/f/i/g/2015/video/bianxing80.jpg?width=40&amp;height=40" srcset="http://c1.mifile.cn/f/i/g/2015/video/bianxing80.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">变形金刚特别版声波</span></a>  </li>  </ul> </div> </li>  <li class="category-item"> <a class="title" href="http://list.mi.com/20">箱包 其他周边<i class="iconfont"></i></a> <div class="children clearfix children-col-1"> <ul class="children-list clearfix">  <li> <a class="link" href="http://list.mi.com/23"><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/xiangbao-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/xiangbao-80.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">箱包</span></a>  </li>  <li> <a class="link" href="http://search.mi.com/search_%E6%97%85%E8%A1%8C%E7%AE%B1"><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/lvxingxiang.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/sidebar/lvxingxiang.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">90分旅行箱</span></a>  </li>  <li> <a class="link" href="http://list.mi.com/59"><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/shubiaodian-80.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/shubiaodian-80.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">小米鼠标垫</span></a>  </li>  <li> <a class="link" href="http://list.mi.com/24"><img class="thumb" src="/list_files/placeholder-40.png" data-src="//c1.mifile.cn/f/i/15/goods/sidebar/zhoubian1.jpg?width=40&amp;height=40" srcset="//c1.mifile.cn/f/i/15/goods/sidebar/zhoubian1.jpg?width=80&amp;height=80 2x" alt="" height="40" width="40"><span class="text">生活周边</span></a>  </li>  </ul> </div> </li>  </ul></div></li>
                            <li class="nav-item">
                    <a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-a9318c5014b7997f', 'javascript:void(0);', 'pcpid']);" data-stat-id="a9318c5014b7997f" class="link" href="javascript:void(0);"><span class="text">小米手机</span><span class="arrow"></span></a>
                    <div class="item-children">
                        <div class="container">
                            <ul class="children-list clearfix">
                                                            <li class="first">
                                    <div class="figure figure-thumb">
                                        <a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-a66bf6f5883efe91', '//www.mi.com/mimax/', 'pcpid']);" data-stat-id="a66bf6f5883efe91" href="http://www.mi.com/mimax/"><img src="/list_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/maxdingbu!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/maxdingbu!320x220.jpg 2x" alt="小米Max" height="110" width="160"></a>
                                    </div>
                                    <div class="title"><a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-96f4cf6bb94e7947', '//www.mi.com/mimax/', 'pcpid']);" data-stat-id="96f4cf6bb94e7947" href="http://www.mi.com/mimax/">小米Max</a></div>
                                    <p class="price">1499元起</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-1c2a9e9f6beb7a2a', '//www.mi.com/mi5/', 'pcpid']);" data-stat-id="1c2a9e9f6beb7a2a" href="http://www.mi.com/mi5/"><img src="/list_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/16/goods/nav/mi5!160x110.jpg" srcset="//c1.mifile.cn/f/i/16/goods/nav/mi5!320x220.jpg 2x" alt="小米手机5" height="110" width="160"></a>
                                    </div>
                                    <div class="title"><a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-6da0badec0155110', '//www.mi.com/mi5/', 'pcpid']);" data-stat-id="6da0badec0155110" href="http://www.mi.com/mi5/">小米手机5</a></div>
                                    <p class="price">1999元起</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-528848bae7d2a056', 'http://www.mi.com/mi4s/', 'pcpid']);" data-stat-id="528848bae7d2a056" href="http://www.mi.com/mi4s/"><img src="/list_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/16/goods/nav/mi4s!160x110.jpg" srcset="//c1.mifile.cn/f/i/16/goods/nav/mi4s!320x220.jpg 2x" alt="小米手机4S" height="110" width="160"></a>
                                    </div>
                                    <div class="title"><a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-e3f442e82f0f4e98', 'http://www.mi.com/mi4s/', 'pcpid']);" data-stat-id="e3f442e82f0f4e98" href="http://www.mi.com/mi4s/">小米手机4S</a></div>
                                    <p class="price">1699元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-673510ffcb79ddc4', '//www.mi.com/mi4c/', 'pcpid']);" data-stat-id="673510ffcb79ddc4" href="http://www.mi.com/mi4c/"><img src="/list_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/mi4c!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/mi4c!320x220.jpg 2x" alt="小米手机4c" height="110" width="160"></a>
                                    </div>
                                    <div class="title"><a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-f1a126b799777deb', '//www.mi.com/mi4c/', 'pcpid']);" data-stat-id="f1a126b799777deb" href="http://www.mi.com/mi4c/">小米手机4c</a></div>
                                    <p class="price">1099元</p>                                                                    </li>
                                                        </ul>
                        </div>
                    </div>
                </li>
                                <li class="nav-item">
                    <a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-f896375cba89aa73', 'javascript:void(0);', 'pcpid']);" data-stat-id="f896375cba89aa73" class="link" href="javascript:%20void(0);"><span class="text">红米</span><span class="arrow"></span></a>
                    <div class="item-children">
                        <div class="container">
                            <ul class="children-list clearfix">
                                                            <li class="first">
                                    <div class="figure figure-thumb">
                                        <a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-bacb9efca883968f', '//www.mi.com/note3/', 'pcpid']);" data-stat-id="bacb9efca883968f" href="http://www.mi.com/note3/"><img src="/list_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/note3!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/note3!320x220.jpg 2x" alt="红米Note 3" height="110" width="160"></a>
                                    </div>
                                    <div class="title"><a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-f97a8c6f0b3ca89e', '//www.mi.com/note3/', 'pcpid']);" data-stat-id="f97a8c6f0b3ca89e" href="http://www.mi.com/note3/">红米Note 3</a></div>
                                    <p class="price">899元起</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-e702dcffce101e23', 'http://www.mi.com/hongmi3s/', 'pcpid']);" data-stat-id="e702dcffce101e23" href="http://www.mi.com/hongmi3s/"><img src="/list_files/placeholder-220110x110.png" data-src="http://c1.mifile.cn/f/i/g/2015/video/hongmi3s!160x110.jpg" srcset="http://c1.mifile.cn/f/i/g/2015/video/hongmi3s!320x220.jpg 2x" alt="红米手机3S" height="110" width="160"></a>
                                    </div>
                                    <div class="title"><a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-f4659e884d3b34d2', 'http://www.mi.com/hongmi3s/', 'pcpid']);" data-stat-id="f4659e884d3b34d2" href="http://www.mi.com/hongmi3s/">红米手机3S</a></div>
                                    <p class="price">699元起</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-76d86348694cdaee', 'http://www.mi.com/hongmi3/', 'pcpid']);" data-stat-id="76d86348694cdaee" href="http://www.mi.com/hongmi3/"><img src="/list_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/hongmi3!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/hongmi3!320x220.jpg 2x" alt="红米手机3" height="110" width="160"></a>
                                    </div>
                                    <div class="title"><a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-027747646b6d14a4', 'http://www.mi.com/hongmi3/', 'pcpid']);" data-stat-id="027747646b6d14a4" href="http://www.mi.com/hongmi3/">红米手机3</a></div>
                                    <p class="price">699元起</p>                                                                    </li>
                                                        </ul>
                        </div>
                    </div>
                </li>
                                <li class="nav-item">
                    <a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-18fe842528638923', 'javascript:void(0);', 'pcpid']);" data-stat-id="18fe842528638923" class="link" href="javascript:%20void(0);"><span class="text">平板</span><span class="arrow"></span></a>
                    <div class="item-children">
                        <div class="container">
                            <ul class="children-list clearfix">
                                                            <li class="first">
                                    <div class="figure figure-thumb">
                                        <a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-e861c3d4447a0a71', '//www.mi.com/mipad2/', 'pcpid']);" data-stat-id="e861c3d4447a0a71" href="http://www.mi.com/mipad2/"><img src="/list_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/mipad2-16!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/mipad2-16!320x220.jpg 2x" alt="小米平板2 16GB" height="110" width="160"></a>
                                    </div>
                                    <div class="title"><a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-dfe7e382b985cbb4', '//www.mi.com/mipad2/', 'pcpid']);" data-stat-id="dfe7e382b985cbb4" href="http://www.mi.com/mipad2/">小米平板2 16GB</a></div>
                                    <p class="price">999元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-9bf78b665d94b375', '//www.mi.com/mipad2/', 'pcpid']);" data-stat-id="9bf78b665d94b375" href="http://www.mi.com/mipad2/"><img src="/list_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/mipad2-64!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/mipad2-64!320x220.jpg 2x" alt="小米平板2 64GB" height="110" width="160"></a>
                                    </div>
                                    <div class="title"><a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-97f71c5efef6ea9b', '//www.mi.com/mipad2/', 'pcpid']);" data-stat-id="97f71c5efef6ea9b" href="http://www.mi.com/mipad2/">小米平板2 64GB</a></div>
                                    <p class="price">1299元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-9bf78b665d94b375', '//www.mi.com/mipad2/', 'pcpid']);" data-stat-id="9bf78b665d94b375" href="http://www.mi.com/mipad2/"><img src="/list_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/mipad2-64-win!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/mipad2-64-win!320x220.jpg 2x" alt="小米平板2  64GB Windows版" height="110" width="160"></a>
                                    </div>
                                    <div class="title"><a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-c16525e541031a5b', '//www.mi.com/mipad2/', 'pcpid']);" data-stat-id="c16525e541031a5b" href="http://www.mi.com/mipad2/">小米平板2  64GB Windows版</a></div>
                                    <p class="price">1299元</p>                                                                    </li>
                                                        </ul>
                        </div>
                    </div>
                </li>
                                <li class="nav-item">
                    <a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-8e9363cee7cea5b5', 'javascript:void(0);', 'pcpid']);" data-stat-id="8e9363cee7cea5b5" class="link" href="javascript:%20void(0);"><span class="text">电视</span><span class="arrow"></span></a>
                    <div class="item-children">
                        <div class="container">
                            <ul class="children-list clearfix">
                                                            <li class="first">
                                    <div class="figure figure-thumb">
                                        <a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-6436957d7503611c', '//www.mi.com/mitv3s/43/', 'pcpid']);" data-stat-id="6436957d7503611c" href="http://www.mi.com/mitv3s/43/"><img src="/list_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/16/goods/nav/mitv3s-43!160x110.jpg" srcset="//c1.mifile.cn/f/i/16/goods/nav/mitv3s-43!320x220.jpg 2x" alt="小米电视3S 43英寸" height="110" width="160"></a>
                                    </div>
                                    <div class="title"><a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-5cf4461fbbe51d34', '//www.mi.com/mitv3s/43/', 'pcpid']);" data-stat-id="5cf4461fbbe51d34" href="http://www.mi.com/mitv3s/43/">小米电视3S 43英寸</a></div>
                                    <p class="price">1799元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-79c53946de3919e0', '//www.mi.com/mitv3s/48/', 'pcpid']);" data-stat-id="79c53946de3919e0" href="http://www.mi.com/mitv3s/48/"><img src="/list_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/mitv3s48!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/mitv3s48!320x220.jpg 2x" alt="小米电视3S 48英寸" height="110" width="160"></a>
                                    </div>
                                    <div class="title"><a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-e94f9dabaff9d689', '//www.mi.com/mitv3s/48/', 'pcpid']);" data-stat-id="e94f9dabaff9d689" href="http://www.mi.com/mitv3s/48/">小米电视3S 48英寸</a></div>
                                    <p class="price">1999元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-57c257eca999fb6b', '//www.mi.com/mitv3/55/', 'pcpid']);" data-stat-id="57c257eca999fb6b" href="http://www.mi.com/mitv3/55/"><img src="/list_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/mitv355!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/mitv355!320x220.jpg 2x" alt="小米电视3 55英寸" height="110" width="160"></a>
                                    </div>
                                    <div class="title"><a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-385c0f4a825a331d', '//www.mi.com/mitv3/55/', 'pcpid']);" data-stat-id="385c0f4a825a331d" href="http://www.mi.com/mitv3/55/">小米电视3 55英寸</a></div>
                                    <p class="price">3999元起</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-90c16cbb4360afe5', '//www.mi.com/mitv3/60/', 'pcpid']);" data-stat-id="90c16cbb4360afe5" href="http://www.mi.com/mitv3/60/"><img src="/list_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/mitv3-60!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/mitv3-60!320x220.jpg 2x" alt="小米电视3 60英寸" height="110" width="160"></a>
                                    </div>
                                    <div class="title"><a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-98abfa792615a7e6', '//www.mi.com/mitv3/60/', 'pcpid']);" data-stat-id="98abfa792615a7e6" href="http://www.mi.com/mitv3/60/">小米电视3 60英寸</a></div>
                                    <p class="price">4999元起</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-a032dcfa302fa416', '//www.mi.com/mitv3s/65/', 'pcpid']);" data-stat-id="a032dcfa302fa416" href="http://www.mi.com/mitv3s/65/"><img src="/list_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/16/goods/nav/mitv3s-65!160x110.jpg" srcset="//c1.mifile.cn/f/i/16/goods/nav/mitv3s-65!320x220.jpg 2x" alt="小米电视3S 65英寸 曲面" height="110" width="160"></a>
                                    </div>
                                    <div class="title"><a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-a1f6e6a6d04c173c', '//www.mi.com/mitv3s/65/', 'pcpid']);" data-stat-id="a1f6e6a6d04c173c" href="http://www.mi.com/mitv3s/65/">小米电视3S 65英寸 曲面</a></div>
                                    <p class="price">8999元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-c0907a327fd54797', '//www.mi.com/mitv3/70/', 'pcpid']);" data-stat-id="c0907a327fd54797" href="http://www.mi.com/mitv3/70/"><img src="/list_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/mitv70!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/mitv70!320x220.jpg 2x" alt="小米电视3 70英寸" height="110" width="160"></a>
                                    </div>
                                    <div class="title"><a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-d2f07757ae2b1814', '//www.mi.com/mitv3/70/', 'pcpid']);" data-stat-id="d2f07757ae2b1814" href="http://www.mi.com/mitv3/70/">小米电视3 70英寸</a></div>
                                    <p class="price">9999元</p>                                                                    </li>
                                                        </ul>
                        </div>
                    </div>
                </li>
                                <li class="nav-item">
                    <a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-764a30c3f697a814', 'javascript:void(0);', 'pcpid']);" data-stat-id="764a30c3f697a814" class="link" href="javascript:%20void(0);"><span class="text">盒子 · 影音</span><span class="arrow"></span></a>
                    <div class="item-children">
                        <div class="container">
                            <ul class="children-list clearfix">
                                                            <li class="first">
                                    <div class="figure figure-thumb">
                                        <a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-10d5a2f4a9bccc86', '//www.mi.com/hezimini/', 'pcpid']);" data-stat-id="10d5a2f4a9bccc86" href=""><img src="/list_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/hezimini.png" srcset="//c1.mifile.cn/f/i/15/goods/nav/hezimini.png 2x" alt="小米盒子mini版" height="110" width="160"></a>
                                    </div>
                                    <div class="title"><a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-9896a6b18574443d', '//www.mi.com/hezimini/', 'pcpid']);" data-stat-id="9896a6b18574443d" href="">小米盒子mini版</a></div>
                                    <p class="price">199元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-4a6940612a38a852', '//www.mi.com/hezi3/', 'pcpid']);" data-stat-id="4a6940612a38a852" href=""><img src="/list_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/hezi3.png" srcset="//c1.mifile.cn/f/i/15/goods/nav/hezi3.png 2x" alt="小米盒子3" height="110" width="160"></a>
                                    </div>
                                    <div class="title"><a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-056fb7e4ea8dd552', '//www.mi.com/hezi3/', 'pcpid']);" data-stat-id="056fb7e4ea8dd552" href="">小米盒子3</a></div>
                                    <p class="price">299元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-32a01e59d20f9fa7', '//www.mi.com/hezi3s/', 'pcpid']);" data-stat-id="32a01e59d20f9fa7" href=""><img src="/list_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/hezi3s!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/hezi3s!320x220.jpg 2x" alt="小米盒子3 增强版" height="110" width="160"></a>
                                    </div>
                                    <div class="title"><a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-9c415465c2aba107', '//www.mi.com/hezi3s/', 'pcpid']);" data-stat-id="9c415465c2aba107" href="">小米盒子3 增强版</a></div>
                                    <p class="price">399元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-c5c1e9de07b24ca5', '//www.mi.com/tvzj/', 'pcpid']);" data-stat-id="c5c1e9de07b24ca5" href=""><img src="/list_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/zhuji!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/zhuji!320x220.jpg 2x" alt="小米电视主机" height="110" width="160"></a>
                                    </div>
                                    <div class="title"><a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-9a31b67eade41359', '//www.mi.com/tvzj/', 'pcpid']);" data-stat-id="9a31b67eade41359" href="">小米电视主机</a></div>
                                    <p class="price">999元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-0b9699df610dd856', '//item.mi.com/1160800073.html', 'pcpid']);" data-stat-id="0b9699df610dd856" href=""><img src="/list_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/jinshuban!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/jinshuban!320x220.jpg 2x" alt="小米家庭音响 金属版" height="110" width="160"></a>
                                    </div>
                                    <div class="title"><a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-a36ad90018f6e523', '//item.mi.com/1160800073.html', 'pcpid']);" data-stat-id="a36ad90018f6e523" href="">小米家庭音响 金属版</a></div>
                                    <p class="price">899元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-102cede91d10b78c', '//item.mi.com/1160800074.html', 'pcpid']);" data-stat-id="102cede91d10b78c" href=""><img src="/list_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/putonban!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/putonban!320x220.jpg 2x" alt="小米家庭音响 标准版" height="110" width="160"></a>
                                    </div>
                                    <div class="title"><a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-9d7925dc3e0008d1', '//item.mi.com/1160800074.html', 'pcpid']);" data-stat-id="9d7925dc3e0008d1" href="">小米家庭音响 标准版</a></div>
                                    <p class="price">699元</p>                                                                    </li>
                                                        </ul>
                        </div>
                    </div>
                </li>
                                <li class="nav-item">
                    <a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-b4d066d2f9a3bd16', 'javascript:void(0);', 'pcpid']);" data-stat-id="b4d066d2f9a3bd16" class="link" href="javascript:%20void(0);"><span class="text">路由器</span><span class="arrow"></span></a>
                    <div class="item-children">
                        <div class="container">
                            <ul class="children-list clearfix">
                                                            <li class="first">
                                    <div class="figure figure-thumb">
                                        <a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-7886a57706d7af86', '//www.mi.com/miwifi/', 'pcpid']);" data-stat-id="7886a57706d7af86" href=""><img src="/list_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/miwifi!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/miwifi!320x220.jpg 2x" alt="全新小米路由器" height="110" width="160"></a>
                                    </div>
                                    <div class="title"><a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-c4863641a1ba2ed7', '//www.mi.com/miwifi/', 'pcpid']);" data-stat-id="c4863641a1ba2ed7" href="">全新小米路由器</a></div>
                                    <p class="price">699元起</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-8b371a9da0ece570', '//www.mi.com/miwifi3/', 'pcpid']);" data-stat-id="8b371a9da0ece570" href=""><img src="/list_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/miwifi-3!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/miwifi-3!320x220.jpg 2x" alt="小米路由器 3" height="110" width="160"></a>
                                    </div>
                                    <div class="title"><a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-5d3ef0735d93f5f5', '//www.mi.com/miwifi3/', 'pcpid']);" data-stat-id="5d3ef0735d93f5f5" href="">小米路由器 3</a></div>
                                    <p class="price">149元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-ef91a62772bfd956', '//www.mi.com/miwifimini/', 'pcpid']);" data-stat-id="ef91a62772bfd956" href=""><img src="/list_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/miwifimini!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/miwifimini!320x220.jpg 2x" alt="小米路由器 mini" height="110" width="160"></a>
                                    </div>
                                    <div class="title"><a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-408004fc55332240', '//www.mi.com/miwifimini/', 'pcpid']);" data-stat-id="408004fc55332240" href="">小米路由器 mini</a></div>
                                    <p class="price">129元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-26cd4b26bc8e41fc', '//www.mi.com/miwifilite/', 'pcpid']);" data-stat-id="26cd4b26bc8e41fc" href=""><img src="/list_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/miwifilite!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/miwifilite!320x220.jpg 2x" alt="小米路由器 青春版" height="110" width="160"></a>
                                    </div>
                                    <div class="title"><a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-0a381bc01b4ba80f', '//www.mi.com/miwifilite/', 'pcpid']);" data-stat-id="0a381bc01b4ba80f" href="">小米路由器 青春版</a></div>
                                    <p class="price">79元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-1191c5e28f8ef915', '//item.mi.com/1153200003.html', 'pcpid']);" data-stat-id="1191c5e28f8ef915" href=""><img src="/list_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/wifiExtension!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/wifiExtension!320x220.jpg 2x" alt="小米WiFi放大器" height="110" width="160"></a>
                                    </div>
                                    <div class="title"><a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-cf1bb22e5a66fd84', '//item.mi.com/1153200003.html', 'pcpid']);" data-stat-id="cf1bb22e5a66fd84" href="">小米WiFi放大器</a></div>
                                    <p class="price">39元</p>                                                                    </li>
                                                        </ul>
                        </div>
                    </div>
                </li>
                                <li class="nav-item">
                    <a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-9fbb41fbadfac4d7', 'javascript:void(0);', 'pcpid']);" data-stat-id="9fbb41fbadfac4d7" class="link" href="javascript:void(0);"><span class="text">智能硬件</span><span class="arrow"></span></a>
                    <div class="item-children">
                        <div class="container">
                            <ul class="children-list clearfix">
                                                            <li class="first">
                                    <div class="figure figure-thumb">
                                        <a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-6a6576f48f08abb2', '//www.mi.com/scooter/', 'pcpid']);" data-stat-id="6a6576f48f08abb2" href=""><img src="/list_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/scooter!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/scooter!320x220.jpg 2x" alt="九号平衡车" height="110" width="160"></a>
                                    </div>
                                    <div class="title"><a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-d6f19cf187d57edb', '//www.mi.com/scooter/', 'pcpid']);" data-stat-id="d6f19cf187d57edb" href="">九号平衡车</a></div>
                                    <p class="price">1999元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-34f959c1d57cba9d', '//www.mi.com/water/', 'pcpid']);" data-stat-id="34f959c1d57cba9d" href=""><img src="/list_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/2015/cn-index/water2!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/2015/cn-index/water2!320x220.jpg 2x" alt="小米净水器" height="110" width="160"></a>
                                    </div>
                                    <div class="title"><a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-deac26cc21dc9803', '//www.mi.com/water/', 'pcpid']);" data-stat-id="deac26cc21dc9803" href="">小米净水器</a></div>
                                    <p class="price">1299元起</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-08ad639352f85901', '//www.mi.com/dianfanbao/', 'pcpid']);" data-stat-id="08ad639352f85901" href=""><img src="/list_files/placeholder-220110x110.png" data-src="http://c1.mifile.cn/f/i/g/2015/cn-index/dianfanbao!160x110.jpg" srcset="http://c1.mifile.cn/f/i/g/2015/cn-index/dianfanbao!320x220.jpg 2x" alt="米家压力IH电饭煲" height="110" width="160"></a>
                                    </div>
                                    <div class="title"><a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-195da0279e5a9d63', '//www.mi.com/dianfanbao/', 'pcpid']);" data-stat-id="195da0279e5a9d63" href="">米家压力IH电饭煲</a></div>
                                    <p class="price">999元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-c9c63a212deac94b', '//www.mi.com/air2/', 'pcpid']);" data-stat-id="c9c63a212deac94b" href=""><img src="/list_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/16/goods/nav/air2!160x110.jpg" srcset="//c1.mifile.cn/f/i/16/goods/nav/air2!320x220.jpg 2x" alt="小米空气净化器 2" height="110" width="160"></a>
                                    </div>
                                    <div class="title"><a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-9e4e9f43d9006273', '//www.mi.com/air2/', 'pcpid']);" data-stat-id="9e4e9f43d9006273" href="">小米空气净化器 2</a></div>
                                    <p class="price">699元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-6aaa435bbfc809d5', '//www.mi.com/xiaoyi/', 'pcpid']);" data-stat-id="6aaa435bbfc809d5" href=""><img src="/list_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/15/goods/nav/xiaoyi!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/xiaoyi!320x220.jpg 2x" alt="摄像机" height="110" width="160"></a>
                                    </div>
                                    <div class="title"><a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-1bd024fd23e94647', '//www.mi.com/xiaoyi/', 'pcpid']);" data-stat-id="1bd024fd23e94647" href="">摄像机</a></div>
                                    <p class="price">149元</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-03c1c541d27a9a24', '//www.mi.com/smart/', 'pcpid']);" data-stat-id="03c1c541d27a9a24" href=""><img src="/list_files/placeholder-220110x110.png" data-src="//c1.mifile.cn/f/i/g/doodle/zhinengyingjian!160x110.jpg" srcset="//c1.mifile.cn/f/i/g/doodle/zhinengyingjian!320x220.jpg 2x" alt="查看全部&lt;br/&gt;智能硬件" height="110" width="160"></a>
                                    </div>
                                    <div class="title"><a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-9c5992491965e45b', '//www.mi.com/smart/', 'pcpid']);" data-stat-id="9c5992491965e45b" href="">查看全部<br>智能硬件</a></div>
                                                                                                        </li>
                                                        </ul>
                        </div>
                    </div>
                </li>
                                <li class="nav-item">
                    <a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-59049922b2b5c11c', '//www.mi.com/service/', 'pcpid']);" data-stat-id="59049922b2b5c11c" class="link" href="" target="_blank"><span class="text">服务</span></a>
                </li>
                                <li class="nav-item">
                    <a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-359ee71e873842fd', 'http://www.xiaomi.cn', 'pcpid']);" data-stat-id="359ee71e873842fd" class="link" href="" target="_blank"><span class="text">社区</span></a>
                </li>
                            </ul>
        </div>
        <div class="header-search">
            <form id="" class="search-form clearfix" action="/lister" method="get">
                <label for="search" class="hide">站内搜索</label>
                <input value="小米手机5" class="search-text" id="search" name="keywords" autocomplete="off"  type="search">
                <input class="search-btn iconfont" value="" type="submit">
                <div style="display: none;" class="search-hot-words">
                    <a  href="">小米手机5</a><a>小米手环 2</a>                </div>
            <div id="J_keywordList" class="keyword-list hide"><ul class="result-list"></ul></div></form>
        </div>
    </div>
<div id="J_navMenu" class="header-nav-menu" style="display: none;"><div class="container"><ul class="children-list clearfix">
                                                            <li class="first">
                                    <div class="figure figure-thumb">
                                        <a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-bacb9efca883968f', '//www.mi.com/note3/', 'pcpid']);" data-stat-id="bacb9efca883968f" href=""><img src="/list_files/note3160x110.jpg" data-src="//c1.mifile.cn/f/i/15/goods/nav/note3!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/note3!320x220.jpg 2x" alt="红米Note 3" height="110" width="160"></a>
                                    </div>
                                    <div class="title"><a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-f97a8c6f0b3ca89e', '//www.mi.com/note3/', 'pcpid']);" data-stat-id="f97a8c6f0b3ca89e" href="">红米Note 3</a></div>
                                    <p class="price">899元起</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-e702dcffce101e23', 'http://www.mi.com/hongmi3s/', 'pcpid']);" data-stat-id="e702dcffce101e23" href=""><img src="/list_files/hongmi3s160x110.jpg" data-src="http://c1.mifile.cn/f/i/g/2015/video/hongmi3s!160x110.jpg" srcset="http://c1.mifile.cn/f/i/g/2015/video/hongmi3s!320x220.jpg 2x" alt="红米手机3S" height="110" width="160"></a>
                                    </div>
                                    <div class="title"><a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-f4659e884d3b34d2', 'http://www.mi.com/hongmi3s/', 'pcpid']);" data-stat-id="f4659e884d3b34d2" href="">红米手机3S</a></div>
                                    <p class="price">699元起</p>                                                                    </li>
                                                            <li>
                                    <div class="figure figure-thumb">
                                        <a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-76d86348694cdaee', 'http://www.mi.com/hongmi3/', 'pcpid']);" data-stat-id="76d86348694cdaee" href="http://www.mi.com/hongmi3/"><img src="/list_files/hongmi3160x110.jpg" data-src="//c1.mifile.cn/f/i/15/goods/nav/hongmi3!160x110.jpg" srcset="//c1.mifile.cn/f/i/15/goods/nav/hongmi3!320x220.jpg 2x" alt="红米手机3" height="110" width="160"></a>
                                    </div>
                                    <div class="title"><a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-027747646b6d14a4', 'http://www.mi.com/hongmi3/', 'pcpid']);" data-stat-id="027747646b6d14a4" href="">红米手机3</a></div>
                                    <p class="price">699元起</p>                                                                    </li>
                                                        </ul></div></div></div>
<div class="breadcrumbs">
    <div class="container">
        <a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-b0bcd814768c68cc', '//www.mi.com/index.html', 'pcpid']);" data-stat-id="b0bcd814768c68cc" href="">首页</a><span class="sep">&gt;</span><a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-99a581090ba301da', '//search.mi.com/search_小米手机5', 'pcpid']);" data-stat-id="99a581090ba301da" href="">全部结果</a><span class="sep">&gt;</span><span>小米手机5</span>    </div>
</div>
<div class="container">
    <div class="filter-box">
                <div class="filter-list-wrap">
            <dl class="filter-list clearfix">
                <dt>分类：</dt>
                <dd class="active">全部</dd><dd><a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-164928eb6f3a1930', '//search.mi.com/search_小米手机5-16', 'pcpid']);" data-stat-id="164928eb6f3a1930" href="">线材</a></dd><dd><a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-109562eb04ff4e4e', '//search.mi.com/search_小米手机5-8', 'pcpid']);" data-stat-id="109562eb04ff4e4e" href="">保护套/保护壳</a></dd><dd><a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-c2017af2e4a3f5a2', '//search.mi.com/search_小米手机5-9', 'pcpid']);" data-stat-id="c2017af2e4a3f5a2" href="">贴膜</a></dd>            </dl>
        </div>
                <div class="filter-list-wrap">
            <dl class="filter-list clearfix">
                <dt>机型：</dt>
                <dd class="active">全部</dd><dd><a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-1effedd1583e9d5f', '//search.mi.com/search_小米手机5-0-6234', 'pcpid']);" data-stat-id="1effedd1583e9d5f" href="">小米手机5</a></dd><dd><a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-588c2301668d3e4c', '//search.mi.com/search_小米手机5-0-7193', 'pcpid']);" data-stat-id="588c2301668d3e4c" href="http://search.mi.com/search_%E5%B0%8F%E7%B1%B3%E6%89%8B%E6%9C%BA5-0-7193">小米手机4S</a></dd><dd><a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-9e91adcfb2f52e51', '//search.mi.com/search_小米手机5-0-32134', 'pcpid']);" data-stat-id="9e91adcfb2f52e51" href="">小米平板2</a></dd><dd><a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-15f53077b623737f', '//search.mi.com/search_小米手机5-0-45231', 'pcpid']);" data-stat-id="15f53077b623737f" href="">小米手机4c</a></dd>            </dl>
        </div>
                <div class="filter-list-wrap">
            <dl class="filter-list clearfix">
                <dt>品牌：</dt>
                <dd class="active">全部</dd><dd><a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-426931ba7ef48e36', '//search.mi.com/search_小米手机5-0-0-1', 'pcpid']);" data-stat-id="426931ba7ef48e36" href="">小米</a></dd><dd><a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-dca15434a91a32a1', '//search.mi.com/search_小米手机5-0-0-20', 'pcpid']);" data-stat-id="dca15434a91a32a1" href="">第三方品牌</a></dd>            </dl>
        </div>
            </div>
</div>
<div class="content">
    <div class="container">
        <div class="order-list-box clearfix">
            <ul class="order-list">
                <li class="active first"><a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-e32ff1866cf9d447', '//search.mi.com/search_小米手机5-0-0-0-0-0-0-0-0-1', 'pcpid']);" data-stat-id="e32ff1866cf9d447" href="" rel="nofollow">推荐</a></li>
                <li><a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-27e12e3bec488548', '//search.mi.com/search_小米手机5-0-0-0-0-1-0-0-0-1', 'pcpid']);" data-stat-id="27e12e3bec488548" href="" rel="nofollow">新品</a></li>
                                <li class="up"><a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-3e4e49f586d0909b', '//search.mi.com/search_小米手机5-0-0-0-0-10-0-0-0-1', 'pcpid']);" data-stat-id="3e4e49f586d0909b" href="" rel="nofollow">价格 <i class="iconfont"></i></a></li>
                                <li><a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-4d7904dae14b5491', '//search.mi.com/search_小米手机5-0-0-0-0-3-0-0-0-1', 'pcpid']);" data-stat-id="4d7904dae14b5491" href="" rel="nofollow">评论最多</a></li>
            </ul>
            <ul class="type-list">
                                <li><a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-4f13fa66fd872b2f', '//search.mi.com/search_小米手机5-0-0-0-0-0-0-0-1-1', 'pcpid']);" data-stat-id="4f13fa66fd872b2f" href=""><span class="checkbox"><i class="iconfont">√</i></span>查看评价</a></li>
                                <li><a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-2126d381ae0cc5f8', '//search.mi.com/search_小米手机5-0-0-0-0-0-0-1-0-1', 'pcpid']);" data-stat-id="2126d381ae0cc5f8" href="" rel="nofollow"><span class="checkbox"><i class="iconfont">√</i></span>仅显示特惠商品</a></li>
                                <li><a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-4e2cbab6a654e60a', '//search.mi.com/search_小米手机5-0-0-0-0-0-1-0-0-1', 'pcpid']);" data-stat-id="4e2cbab6a654e60a" href="" rel="nofollow"><span class="checkbox"><i class="iconfont">√</i></span>仅显示有货商品</a></li>
            </ul>
        </div>
                <div class="goods-list-box">
            <div class="goods-list clearfix">
            @foreach($goods as $k=>$v)
                <div class="goods-item">
                    <div class="figure figure-img"><a data-stat-id="f9c0265126b0aab7" href="/details/{{$v->id}}"><img src="{{$v->pic}}" alt="" height="200" width="200"></a></div>
                    <p class="desc"></p>                    <h2 class="title"><a  data-stat-id="cdded373f9d107a4" href="/details/{{$v->id}}">{{$v->title}}</a></h2>
                    <p class="price">{{$v->price}}元 起</p>
                    <div class="thumbs">
                        <ul class="thumb-list">
                            <li data-config="{&quot;cid&quot;:&quot;1160800057&quot;,&quot;gid&quot;:&quot;0&quot;,&quot;discount&quot;:&quot;0&quot;,&quot;price&quot;:&quot;1999\u5143 \u8d77&quot;,&quot;new&quot;:0,&quot;is-cos&quot;:0,&quot;package&quot;:1,&quot;hasgift&quot;:0,&quot;postfree&quot;:0,&quot;postfreenum&quot;:1,&quot;cfrom&quot;:&quot;search&quot;}"><a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-efb530fe034a2407', '', 'pcpid']);" data-stat-id="efb530fe034a2407"><img src="/list_files/T1D.jpg" alt="小米手机5 白色" height="34" width="34"></a></li>                        </ul>
                    </div>
                    <div class="actions clearfix">
                        <a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-ff751b1fdf797192', 'javascript:void(0);', 'pcpid']);" data-stat-id="ff751b1fdf797192" class="btn-like J_likeGoods" data-cid="1160800057" href="javascript:%20void(0);"><i class="iconfont"></i> <span>喜欢</span></a>
                        <a onclick="_msq.push(['trackEvent', '0d9a0b3507a43a58-8865b1987126dcb9', '//www.mi.com/mi5/', 'pcpid']);" data-stat-id="8865b1987126dcb9" class="btn-buy btn-buy-detail J_buyGoods" href=""><span>立即购买</span> <i class="iconfont"></i></a>                    </div>
                    <div class="flags">
                                            </div>
                    <div class="notice"></div>
                </div>
                   @endforeach             
                </div>
                            </div>
                    
            </div>
            <div style="float:left;margin-left:580px" id="page">
                {!!$goods->appends($request)->render()!!}

            </div>
    

    </div>

@extends('home.footer')
<!-- .modal-globalSites END -->
<!-- <script src="/list_files/base.js"></script> -->
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
        damiaoGoodsId: [],
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
<script src="/list_files/xmsg_ti.js"></script>

<script>
var SITE_ID = "Search";
var SEARCH_WORDS = "小米手机5";
</script>
<script src="/list_files/goodsList.js"></script>
<script>
var _msq = _msq || [];
_msq.push(['setDomainId', 100]);
_msq.push(['trackPageView']);
(function() {
    var ms = document.createElement('script');
    ms.type = 'text/javascript';
    ms.async = true;
    ms.src = '//c1.mifile.cn/f/i/15/stat/js/xmst.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(ms, s);
})();
</script>

</body></html>