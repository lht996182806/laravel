<!DOCTYPE html>
<html xml:lang="zh-CN" lang="zh-CN"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<!-- <script src="/cart_files/mstr.js" async="" type="text/javascript"></script>
<script src="/cart_files/mstr_002.js" async="" type="text/javascript"></script>
<script src="/cart_files/unjcV2.js" async="" type="text/javascript"></script>
<script src="/cart_files/mstr_003.js" async="" type="text/javascript"></script>
<script src="/cart_files/jquery.js" async="" type="text/javascript"></script>
<script src="/cart_files/xmst.js" async="" type="text/javascript"></script> -->
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta charset="UTF-8">
<title>我的购物车——小米手机官网</title>
<meta name="viewport" content="width=1226">
<link rel="shortcut icon" href="http://s01.mifile.cn/favicon.ico" type="image/x-icon">
<link rel="icon" href="http://s01.mifile.cn/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="{{asset('cart_files/base.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('cart_files/cart.css')}}">
<script type="text/javascript">var _head_over_time = (new Date()).getTime();</script>
</head>
<body>
<div class="site-header site-mini-header">
    <div class="container">
        <div class="header-logo">
            <a href="/hindex"><img src="/cart_files/logo.png" alt=""></a>
           <!-- </a> -->
        </div>
        <div class="header-title has-more" id="J_miniHeaderTitle"><h2>我的购物车</h2><p>温馨提示：产品是否购买成功，以最终下单为准哦，请尽快结算</p></div>
        <div class="topbar-info" id="J_userInfo">
        @if(session('user'))
            <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-bf3aa4c80c0ac789', '//order.mi.com/site/login', 'pcpid']);" data-stat-id="bf3aa4c80c0ac789" class="link" href="" data-needlogin="true">{{session('user')}}</a><span class="sep">|</span><a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-749b1369201c13fb', 'https://account.xiaomi.com/pass/register', 'pcpid']);" data-stat-id="749b1369201c13fb" class="link" href="/center">个人中心</a>
        @else
            <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-bf3aa4c80c0ac789', '//order.mi.com/site/login', 'pcpid']);" data-stat-id="bf3aa4c80c0ac789" class="link" href="http://order.mi.com/site/login?redirectUrl=http://static.mi.com/cart/" data-needlogin="true">登录</a><span class="sep">|</span><a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-749b1369201c13fb', 'https://account.xiaomi.com/pass/register', 'pcpid']);" data-stat-id="749b1369201c13fb" class="link" href="https://account.xiaomi.com/pass/register">注册</a>
        @endif
                
        </div>
    </div>
</div>

<div class="page-main">

    <div class="container">
        <div class="cart-loading loading hide" id="J_cartLoading">
            <div class="loader"></div>
        </div>
        <div class="cart-empty hide" id="J_cartEmpty">
            <h2>您的购物车还是空的！</h2>
            <p class="login-desc">登录后将显示您之前加入的商品</p>
            <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-7874490dbcbc1e60', '#', 'pcpid']);" data-stat-id="7874490dbcbc1e60" href="#" class="btn btn-primary btn-login" id="J_loginBtn">立即登录</a>
            <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-4658a7dfd89505fc', '//list.mi.com/0', 'pcpid']);" data-stat-id="4658a7dfd89505fc" href="http://list.mi.com/0" class="btn btn-primary btn-shoping J_goShoping">马上去购物</a>
        </div>
        <div id="J_cartBox" class="">
        <form action="/cart/jiesuan" method="post">
        {{csrf_field()}}
            <div class="cart-goods-list">
                <div class="list-head clearfix">
                    <div class="col col-check"><i class="iconfont icon-checkbox icon-checkbox-selected" id="J_selectAll">√</i>全选</div>
                    <div class="col col-img">&nbsp;</div>
                    <div class="col col-name">商品名称</div>
                    <div class="col col-price">单价</div>
                    <div class="col col-num">数量</div>
                    <div class="col col-total">小计</div>
                    <div class="col col-action">操作</div>
                </div>
                
                <div class="list-body" id="J_cartListBody">
                @if($data)  
                    @foreach($data as $k=>$v)
                        <div class="item-box" id="{{$v['id']}}"> 
                            <div class="item-table J_cartGoods" data-info="{ commodity_id:'1154500025', gettype:'buy', itemid:'2154500012_0_buy', num:'1'} "> 
                                <div class="item-row clearfix"> 
                                    <div class="col col-check"> <i class="iconfont icon-checkbox icon-checkbox-selected J_itemCheckbox" data-itemid="2154500012_0_buy" data-status="1">√</i>  
                                    </div> 
                                    <div class="col col-img"> 
                                        <a href="http://item.mi.com/1154500025.html" target="_blank"> 
                                            <img alt="" src="{{$v['pic']}}" height="80" width="80"> 
                                        </a>  
                                    </div>
                                    <div class="col col-name">  
                                        <div class="tags">   </div>  
                                        <h3 class="name">  
                                             <a href="http://item.mi.com/1154500025.html" target="_blank"> {{$v['title']}} {{$v['color']}} {{$v['size']}}GB </a>  
                                        </h3>   <p class="desc"> <span>适配机型：</span> {{$v['title']}} </p>      
                                    </div> 
                                    <div class="col col-price" > <span>{{$v['price']}}</span>元 </div> 
                                    <div class="col">  
                                    <input type="hidden" name="id[]" value="{{$v['id']}}">
                                        <div class="change-goods-num clearfix J_changeGoodsNum"> 
                                            <a class="J_minus" href="javascript:void(0);"><i class="iconfont" onclick="minus(this)"></i></a> 
                                            
                                            <input tyep="text" name="{{$v['id']}}" value="{{$v['number']}}" data-num="1" data-buylimit="50" autocomplete="off" class="goods-num"> 
                                            <a class="J_plus" href="javascript:void(0);"><i class="iconfont" onclick="plus(this)"></i>
                                            </a>  
                                        </div> 
                                     </div> 
                                     <div class="col col-total" > <span name="p">{{$v['price']*$v['number']}}</span>元 <p class="pre-info">  </p> 
                                     </div> 
                                     <div class="col col-action"> <a id="2154500012_0_buy" data-msg="确定删除吗？" onclick="dele({{$v['id']}})" href="javascript:void(0);" title="删除" class="del J_delGoods"><i class="iconfont"></i>
                                     </a> 
                                     </div> 
                                </div> 
                            </div>
                        </div> 
                    @endforeach    
                @endif  
                 <div class="item-sub-box">  </div>     
                     
            </div>
            </div>
            
            <!-- 加价购 -->


            <div class="cart-bar clearfix cart-bar-fixed" id="J_cartBar">
                <div class="section-left">
                    <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-3d1e5bdd191768c8', '#', 'pcpid']);" data-stat-id="3d1e5bdd191768c8" href="http://list.mi.com/0" class="back-shopping J_goShoping">继续购物</a>
                    <span class="cart-total">共 <i id="J_cartTotalNum">
                    @if(session('cart'))
                    {{count(session('cart'))}}
                    @else
                    {{$count}}
                    @endif
                    </i> 件商品，已选择 <i id="J_selTotalNum">
                    @if(session('cart'))
                    {{count(session('cart'))}}
                    @else
                    {{$count}}
                    @endif
                    </i> 件</span>
                    <span class="cart-coudan hide" id="J_coudanTip">
                        ，还需 <i id="J_postFreeBalance"></i> 元即可免邮费  <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-69b06f1a9d2d512c', 'javascript:void(0);', 'pcpid']);" data-stat-id="69b06f1a9d2d512c" href="javascript:void(0);" id="J_showCoudan">立即凑单</a>
                    </span>
                </div>
                <span class="activity-money hide">
                    活动优惠：减 <i id="J_cartActivityMoney">0</i> 元
                </span>
                <span class="total-price">
                    合计（不含运费）：<em id="J_cartTotalPrice">-.--</em>元
                </span>
                <!-- <a onclick="_msq.push(['trackEvent', '08fae3d5cb3abaaf-f975aeb3e19f0f37', 'javascript:void(0);', 'pcpid']);" data-stat-id="f975aeb3e19f0f37" href="javascript:void(0);" class="btn btn-a btn btn-primary" id="J_goCheckout">去结算</a> -->
                <input type="submit" value="去结算" class="btn btn-a btn btn-primary" id="J_goCheckout">
                <div class="no-select-tip hide" id="J_noSelectTip">
                    请勾选需要结算的商品
                    <i class="arrow arrow-a"></i>
                    <i class="arrow arrow-b"></i>
                </div>
            </div>
            </form>
        </div>


</div>

</div>




@extends('home.footer')
<!-- .modal-globalSites END -->
<script src="cart_files/base.js"></script>
<script type="text/javascript" src="/home/js/jquery-1.8.3.min.js"></script>

<script type="text/javascript">
    //自动加载函数获取总价
    window.onload=function(){
        zongji();
    }
    //执行减操作
   function minus(obj){
        var num=parseInt($(obj).parent().next().val());
        // console.log(num);
        num=num-1;
        if(num==0){
            return false;
        }
        $(obj).parent().next().val(num);
        var price=parseFloat($(obj).parents('div [class=col]').prev().find('span').html());
        $(obj).parents('div [class=col]').next().find('span').html(price*num);
        // 发送ajax修改缓存的商品数量
        var id=$(obj).parents('div [class=item-box]').attr('id');
        // console.log(id);
        sendNum(id,'minus');
        zongji();
   }

   //执行加操作
   function plus(obj){
        var num=parseInt($(obj).parent().prev().val());
        $(obj).parent().prev().val(++num);
        var price=parseFloat($(obj).parents('div [class=col]').prev().find('span').html());
        
        $(obj).parents('div [class=col]').next().find('span').html(price*num);
        var id=$(obj).parents('div [class=item-box]').attr('id');
        // console.log(id);
        sendNum(id,'plus');
        zongji();
   }

   //发送ajax保存修改后的数量
   function sendNum(id,flag){
        $.ajax({
            url:'/cart/num',
            data:{'id':id,'flag':flag},
            success:function(mes){
                console.log(mes);
            }
        });
   }
   
   //获取商品总价
   function zongji(){
        var p=document.getElementsByName('p');
        var total=0;
        for(var i=0;i<p.length;i++){
            var sum=parseFloat($(p[i]).html());
            
            total=parseFloat(total+sum);
            // console.log(total);
        }
        
        $('#J_cartTotalPrice').html(total);
   }
   
   function dele(id){
        $.ajax({
            url:'/cart/del',
            data:{'id':id},
            success:function(mes){
                // console.log(mes);
                 $('#'+id).remove();
                 zongji();
            }
        })
   }

    
</script>
<script>
(function() {
    MI.namespace('GLOBAL_CONFIG');
    MI.GLOBAL_CONFIG = {
        orderSite: '//order.mi.com',
        wwwSite: '//www.mi.com',
        cartSite: '//cart.mi.com',
        itemSite: '//item.mi.com',
        assetsSite: '//s01.mifile.cn',
        listSite: '//list.mi.com',
        searchSite: '//search.mi.com',
        mySite: '//my.mi.com',
        damiaoSite: '//tp.hd.mi.com/',
        damiaoGoodsId:["2155300001","2155300002","2160400006","2160400007","2160400008","2160700028","2160700029","2142400036","2161600033","2161600028","2161700017","2162000035","2162100006","2161400001","2162500004","2162500005"],
        logoutUrl: '//order.mi.com/site/logout',
        staticSite: '//static.mi.com',
        quickLoginUrl: 'https://account.xiaomi.com/pass/static/login.html'
    };
    MI.setLoginInfo.orderUrl = MI.GLOBAL_CONFIG.orderSite + '/user/order';
    MI.setLoginInfo.logoutUrl = MI.GLOBAL_CONFIG.logoutUrl;
    MI.setLoginInfo.init(MI.GLOBAL_CONFIG);
    MI.miniCart.init();
    MI.updateMiniCart();
})();
</script>
<script type="text/javascript" src="/cart_files/cart.js"></script>
<script src="/cart_files/xmsg_ti.js"></script>
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