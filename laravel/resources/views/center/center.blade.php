@extends('layouts.public')
@section('con')
<link rel="stylesheet" href="/center_files/1.css">
<link rel="stylesheet" type="text/css" href="/center_files/main.min.css">
<div class="breadcrumbs">
    <div class="container">
        <a href="" data-stat-id="b0bcd814768c68cc" onclick="_msq.push([&#39;trackEvent&#39;, &#39;45a270e10b1f8e93-b0bcd814768c68cc&#39;, &#39;//www.mi.com/index.html&#39;, &#39;pcpid&#39;]);">首页</a>
        <span class="sep">&gt;</span>
        <span>个人中心</span>    
    </div>
</div>

<div class="page-main user-main">
    <div class="container">
        <div class="row">
            <div class="span4">
                <div class="uc-box uc-sub-box">
                    <div class="uc-nav-box">
                        <div class="box-hd">
                            <h3 class="title">订单中心</h3>
                        </div>
                        <div class="box-bd">
                            <ul class="uc-nav-list">
                                <li><a href="javascript:funcShow(4)" data-stat-id="8f3d1bffd166dc22" >我的订单</a></li>
                                <li><a href="javascript:funcShow(5)" data-stat-id="c1b3c3aaa5af08d9" >手机意外保</a></li>
                                <li><a href="javascript:funcShow(6)" data-count="comment" data-count-style="bracket" data-stat-id="20db2c68bfa9e4a5" >评价晒单</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="uc-nav-box">
                        <div class="box-hd">
                            <h3 class="title">个人中心</h3>
                        </div>
                        <div class="box-bd">
                            <ul class="uc-nav-list">
                                <li><a href="javascript:funcShow(1)" data-stat-id="00e076c95d370478" >我的个人中心</a></li>
                                <li><a href="javascript:funcShow(2)" data-stat-id="0c25ea23fee92211" >喜欢的商品</a></li>
                                <li><a href="javascript:funcShow(3)" data-stat-id="48ecd23c6e6e50ba" >收货地址</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="uc-nav-box">
                        <div class="box-hd">
                            <h3 class="title">售后服务</h3>
                        </div>
                        <div class="box-bd">
                            <ul class="uc-nav-list">
                                <li><a href="" data-stat-id="cee379f43f5f5fc2" onclick="_msq.push([&#39;trackEvent&#39;, &#39;45a270e10b1f8e93-cee379f43f5f5fc2&#39;, &#39;http://service.order.mi.com/record/list&#39;, &#39;pcpid&#39;]);">服务记录</a></li>
                                <li><a href="" data-stat-id="49e8df0584b02364" onclick="_msq.push([&#39;trackEvent&#39;, &#39;45a270e10b1f8e93-49e8df0584b02364&#39;, &#39;http://service.order.mi.com/apply/fill&#39;, &#39;pcpid&#39;]);">申请服务</a></li>
                                <li><a href="" data-stat-id="5aedd7982a0a1069" onclick="_msq.push([&#39;trackEvent&#39;, &#39;45a270e10b1f8e93-5aedd7982a0a1069&#39;, &#39;http://service.order.mi.com/user/compensate&#39;, &#39;pcpid&#39;]);">领取快递报销</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="uc-nav-box">
                        <div class="box-hd">
                            <h3 class="title">账户管理</h3>
                        </div>
                        <div class="box-bd">
                            <ul class="uc-nav-list">
                                <li><a href="/pcenter" target="_blank" data-stat-id="35eef2fd7467d6ca" >个人信息</a></li>
                                <li><a href="/pcenter" target="_blank" data-stat-id="ae5ee0188510f1e6" >修改密码</a></li>
                                <li><a href="javascript:funcShow(9)" target="_blank" data-stat-id="c130c3dbf41fd4d8" >社区VIP认证</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            
<div class="span16">
   
    <!-- 个人中心->我的个人中心 -->
    <div id="div1" style="display:block" class="uc-box uc-main-box">
        <div class="uc-content-box portal-content-box">
            <div class="box-bd">
                <div class="portal-main clearfix">
                    <div class="user-card">
                        <h2 class="username"> </h2>
                        <p class="tip">您好 @if($user->username)
                                            {{$user->username}}
                                            @else
                                            {{session('user')}}
                                            @endif
                          
                        </p>
                        <a class="link" href="/pmessage" target="_blank" data-stat-id="4b099f76f8f470d2" >修改个人信息 &gt;</a>
                        <img class="avatar" src="{{$user->userpic}}" width="150" height="150" >
                       
                    </div>
                    <div class="user-actions">
                        <ul class="action-list">
                            <li>账户安全：<span class="level level-2">普通</span></li>
                            <li>绑定手机：<span class="tel"></span>
                                <!-- <a class="btn btn-small btn-primary" href="/addres" target="_blank" data-stat-id="f51e486b2c529448" >绑定</a> -->
                            </li>
                            <li>绑定邮箱：<span class="tel">@if($user->email)
                                                             {{$user->email}}
                                                            
                                                            @endif</span></li>
                        </ul>
                    </div>
                </div>
                <div class="portal-sub">
                    <ul class="info-list clearfix">
                        <li>
                            <h3>待发货的订单：<span class="num">{{$fahuo}}</span></h3>
                            <a href="javascript:funcShow(4)" data-stat-id="dd6496f77a167a5d" onclick="_msq.push([&#39;trackEvent&#39;, &#39;45a270e10b1f8e93-dd6496f77a167a5d&#39;, &#39;//static.mi.com/order/&#39;, &#39;pcpid&#39;]);">查看待支付订单<i class="iconfont"></i></a>
                            <img src="/center_files/portal-icon-1.png" alt="">
                        </li>
                        <li>
                            <h3>待收货的订单：<span class="num">{{$shouhuo}}</span></h3>
                            <a href="javascript:funcShow(4)" data-stat-id="92fa860987c1c734" onclick="_msq.push([&#39;trackEvent&#39;, &#39;45a270e10b1f8e93-92fa860987c1c734&#39;, &#39;//static.mi.com/order/&#39;, &#39;pcpid&#39;]);">查看待收货订单<i class="iconfont"></i></a>
                            <img src="/center_files/portal-icon-2.png" alt="">
                        </li>
                        <li>
                            <h3>待评价商品数：<span class="num">{{$pingjia}}</span></h3>
                            <a href="javascript:funcShow(4)" data-stat-id="b4a31da3923196c8" onclick="_msq.push([&#39;trackEvent&#39;, &#39;45a270e10b1f8e93-b4a31da3923196c8&#39;, &#39;http://order.mi.com/user/comment&#39;, &#39;pcpid&#39;]);">查看待评价商品<i class="iconfont"></i></a>
                            <img src="/center_files/portal-icon-3.png" alt="">
                        </li>
                        <li>
                            <h3>喜欢的商品：<span class="num">0</span></h3>
                            <a href="javascript:funcShow(2)" data-stat-id="e7f60a4653081c02" onclick="_msq.push([&#39;trackEvent&#39;, &#39;45a270e10b1f8e93-e7f60a4653081c02&#39;, &#39;http://order.mi.com/user/favorite&#39;, &#39;pcpid&#39;]);">查看喜欢的商品<i class="iconfont"></i></a>
                            <img src="/center_files/portal-icon-4.png" alt="">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!--个人中心->喜欢的商品收藏-->
     <div id="div2" style="display:none" class="uc-box uc-main-box">
        <div class="uc-content-box">
            <div class="box-hd">
                <h1 class="title">喜欢的商品</h1>
                <div class="more clearfix hide">
                    <ul class="filter-list J_addrType">
                        <li class="first active"><a href="" data-stat-id="bb5f4704448262e5">喜欢的商品</a></li>
                        <li><a href="" data-stat-id="ca8474002200309a">已下架的商品</a></li>
                    </ul>
                </div>
            </div>
            <div class="box-bd">
                <div class="xm-goods-list-wrap">
                    <ul class="xm-goods-list clearfix">
                        @foreach($favorite as $k=>$val)
                            <li class="xm-goods-item" id='{{$val->id}}'>
                                <div class="figure figure-img">
                                    <a target="_blank" href="/details/{{$val->good_id}}" data-stat-id="a2a241c8d39246c9" >
                                        <img src="{{$val->pic}}">
                                    </a>
                                </div>
                                <h3 class="title">
                                    <a target="_blank" href="/details/{{$val->good_id}}" data-stat-id="b54dc794307ba514">{{$val->title}}</a>
                                </h3>
                                <p class="price"> {{$val->price}} </p>
                                <p class="rank"></p>
                                <div class="actions">
                                    <a onclick="deleteFavorite({{$val->id}})" class="btn btn-small btn-line-gray J_delFav" data-stat-id="02bd33ed4480ebbc" >删除</a>
                                    <a href="/details/{{$val->good_id}}" target="_blank" class="btn btn-small btn-primary" data-stat-id="72e2a6b59be656f7" >查看详情</a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="xm-pagenavi"></div>   
            </div>
        </div>
    </div>

    <!-- 个人中心->收货地址 -->
    <div id="div3" style="display:none" class="uc-box uc-main-box">
        <div class="uc-content-box">
            <div class="box-hd">
                <h1 class="title">收货地址</h1>
                <div class="more clearfix">
                    <ul class="filter-list J_addrType">
                        <li class="first active"><a href="" data-stat-id="da703092407b0d55" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-da703092407b0d55', 'http://order.mi.com/user/address', 'pcpid']);">普通收货地址</a></li>
                        <li class=""><a href="" data-stat-id="48af064782f152f0" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-48af064782f152f0', 'http://order.mi.com/user/address', 'pcpid']);">大型商品收货地址</a></li>
                    </ul>
                </div>
            </div>
            <div class="box-bd">
                <div class="user-address-list J_addressList clearfix">
                    <div id="J_newAddress" data-type="" class="address-item address-item-new">
                        <i class="iconfont" onclick="abc()"></i>
                        添加新地址
                    </div>
                    <!-- 导入插件 -->
                    <script type="text/javascript" src="/f/jquery.js"></script>
                    <script type="text/javascript" src="/f/area.js"></script>
                    <script type="text/javascript" src="/f/location.js"></script>                  

                    @foreach($address as $v)
                    <div data-tag_name="" data-address="兄弟连it培训" data-zipcode="102200" data-area="0" data-district_name="昌平区" data-district_id="389" data-city_name="北京市" data-city_id="36" data-province_name="北京" data-province_id="2" data-tel="150****4903" data-consignee="李李" data-address_id="10160709757500569" class="address-item J_addressItem">
                        <dl>
                            <dt>
                                <em class="uname">{{$v->name}}</em>
                            </dt>
                            <dd class="utel">{{$v->phone}}</dd>
                            <dd class="uaddress" attr="{{$v->sheng}},{{$v->shi}},{{$v->xian}}"><span></span><br>{{$v->jiedao}}</dd>
                        </dl>
                        <div class="actions">
                            <a href="javascript:void(0);" data-id="10160709757500569" class="modify J_addressModify" data-stat-id="05bdb261c37afc34" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-05bdb261c37afc34', 'javascript:void(0);', 'pcpid']);">修改</a>
                            <a data-id="10160709757500569" class="modify J_addressDel" data-stat-id="2a7ebd088f434839" onclick="_msq.push(['trackEvent', '73ce9fb1e71baa17-2a7ebd088f434839', '', 'pcpid']);">删除</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    

     <!-- 订单中心->评价中心 -->
    <div id="div6" style="display:none" class="uc-box uc-main-box">
        <div class="uc-content-box">
            <div class="box-hd">
                <h1 class="title">商品评价</h1>
                <div class="more clearfix">
                    <ul class="filter-list J_addrType">
                        <li class="active"><a href="" >全部评价商品</a></li>
                    </ul>
                </div>
            </div>
            <div class="box-bd">
                 <div id="J_commentList">
                    <ul class="order-list" style="list-style:none">
                        @foreach($comments as $k=>$va)
                        <li id='{{$va->id}}' class="uc-order-item uc-order-item-pay" border='1px solid grange'>
                             <div class="order-detail"> 
                                <div class="order-summary">
                                    <div class="order-status" ><a target="_blank" href="/details/{{$va->goods_id}}"> {{$va->title}}</a></div>
                                    
                                </div> 
                                <table class="order-detail-table"> 
                                    <thead> 
                                        <tr> 
                                            <th class="col-main"> 
                                                <p class="caption-info">{{$va->updated_at}}<span class="sep"><span class="sep">|</span>订单号： <a href="">{{$va->order_num}}</a><span class="sep">|</span>银联在线支付</p> 
                                            </th> 
                                            <th class="col-sub"> 
                                                <p class="caption-price">订单金额：<span class="num">{{$va->total}}</span>元</p> 
                                            </th> 
                                        </tr> 
                                    </thead> 
                                    <tbody> 
                                        <tr> 
                                            <td class="order-items"> 
                                                <ul class="goods-list" style='list-style:none'> 
                                                     <li> 
                                                        <div class="figure figure-thumb" >   
                                                            <a href="/details/{{$va->goods_id}}" target="_blank"> 
                                                                <img width="80" height="80" src="{{$va->pic}}" > 
                                                            </a> 
                                                            <div style="float:right;font-size:16px;margin-top:6px;margin-right:200px">{{$va->contents}}  </div>
                                                        </div> 
                                                    </li>  
                                                </ul> 
                                            </td> 
                                            <td class="order-actions">   
                                                <a class="btn btn-small btn-primary" onclick='deleteComment({{$va->id}})' >删除评价</a>      
                                            </td> 
                                        </tr> 
                                    </tbody> 
                                </table> 
                            </div><hr>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>




    <!-- 订单中心->我的订单 -->
    <div id="div4" style="display:none" class="uc-box uc-main-box">
        <div class="uc-content-box order-list-box">
            <div class="box-hd">
                <h1 class="title">我的订单<small>请谨防钓鱼链接或诈骗电话，<a target="_blank" href="" data-stat-id="78d07fef654ba47a" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-78d07fef654ba47a', '//www.mi.com/service/buy/antifraud/', 'pcpid']);">了解更多&gt;</a></small></h1>
                <div class="more clearfix">
                    <ul class="filter-list J_orderType">
                        <li class="active"><a data-type="0" href="" data-stat-id="89d882413195fd4c" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-89d882413195fd4c', '//static.mi.com/order/#type=0', 'pcpid']);">全部有效订单</a></li>
                        <li ><a data-type="7" href="" id="J_unpaidTab" data-stat-id="24ab8a70f05222dc" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-24ab8a70f05222dc', '//static.mi.com/order/#type=7', 'pcpid']);">待支付</a></li>
                        <li><a data-type="8" href="" id="J_sendTab" data-stat-id="8308bdcf62c72b1b" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-8308bdcf62c72b1b', '//static.mi.com/order/#type=8', 'pcpid']);">待收货</a></li>
                        <li class=""><a data-type="5" href="" data-stat-id="d99182d42018ae52" onclick="_msq.push(['trackEvent', '5eab40056fa03ac0-d99182d42018ae52', '//static.mi.com/order/#type=5', 'pcpid']);">已关闭</a></li>
                    </ul>
                    <form method="get" action="#" class="search-form clearfix" id="J_orderSearchForm">
                        <label class="hide" for="search">站内搜索</label>
                        <input type="search" placeholder="输入商品名称、商品编号、订单号" autocomplete="off" name="keywords" id="J_orderSearchKeywords" class="search-text">
                        <input type="submit" value="" class="search-btn iconfont">
                    </form>
                </div>
            </div>
            <div class="box-bd">
                <div id="J_orderList">
                    <ul class="order-list">
                    @foreach($all as $k=>$v)
                        <li class="uc-order-item uc-order-item-pay">
                        
                         <div class="order-detail"> 
                            
                            <table class="order-detail-table"> 
                            <input type="hidden" name="goods_id" value="{{$v->goods_id}}">
                            <thead> 
                            <tr> 
                            <th class="col-main"><p class="caption-info">{{$v->created_at}}<span class="sep">|</span>{{session('user')}}<span class="sep">|</span>订单号： <a href="" class="number">{{$v->order_num}}</a><span class="sep">|</span>在线支付</p> </th> 
                                    <th class="col-sub"> <p class="caption-price">订单金额：<span class="num">{{$v->total}}</span>元</p> 
                                    </th> 
                                </tr> 
                            </thead> 
                            <tbody> 
                            <tr> 
                                <td class="order-items"> 
                                    <ul class="goods-list">  
                                        <li> 
                                            <div class="figure figure-thumb">   
                                                <a target="_blank" href=""> 
                                                <img width="80" height="80" alt="小米手机5 全网通标准版 白色 32GB" src="{{$v->pic}}"> </a>   
                                            </div> 
                                        <p class="name"> <a href="" target="_blank">{{$v->title}} {{$v->color}} {{$v->size}}GB</a>  </p> 
                                            <p class="price">{{$v->price}}元 × {{$v->num}}</p> 
                                            </li>  
                                    </ul> 
                                </td> 
                                <td class="order-actions"> 
                                   @if(($v->status)==0)   
                                    <span  class="btn btn-small btn-primary" >等待发货</span> 
                                   @elseif(($v->status)==1)   
                                    <span  class="btn btn-small btn-primary" onclick="shou(this)">确认收货</span>
                                    @elseif(($v->status)==2)
                                    <span  href="" class="btn btn-small btn-primary" onclick="content(this)">评价</span>
                                    @else
                                    <span  href="" class="btn btn-small btn-primary" >已评价</span>       
                                    @endif  
                                    <a onclick="order(this)" class="btn btn-small btn-line-gray">订单详情</a>
                                      <div class="abcd">
                                        <div style="z-index: 19891015; width:120px;height:;margin-left:100px;margin-top:2px;display:none;background:#FF6700;border-radius:5px;color:white;opacity:0.8" class="attr" attr="{{$v->sheng}},{{$v->shi}},{{$v->xian}}">地址:<span></span><br> {{$v->jiedao}}
                                            <br>{{$v->name}} <br>{{$v->phone}}
                                        </div>
                                        <span></span>
                                        </div>  
                                </td> 
                        </tr> 
                    </tbody> 
                </table> 
                </div>
                
                </li>
                @endforeach
                </ul>
                </div>
                <div id="J_orderListPages"><div class="xm-pagenavi">  <span class="numbers first"><span class="iconfont"></span></span>     <span class="numbers current">1</span>     <span class="numbers last"><span class="iconfont"></span></span> </div></div>
            </div>
        </div>
    </div>

    <!-- 订单中心->手机意外保 -->
    <div id="div5" style="display:none" style="height:922px" class="xm-line-box uc-box">
        <div class="box-hd">
            <h3 class="title service-h1">
                我的手机意外保障服务
            </h3>
            <div class="more">
                <div style="padding-left:22px" class="uc-order-list-type">
                    <a target="_blank" href="" data-stat-id="264d7c39be753897">服务常见问题</a>
                </div>
            </div>
        </div>
        <div style="margin-left:200px;margin-right:20px" class="box-bd">
            <div class="ui-non-purchase">
                <h2 class="ui-non-purchase-title">您尚未购买小米手机意外保障服务</h2>
                <a target="_blank" class="ui-non-purchase-tip" href="" data-stat-id="e5c2c140df75999b" style="color:red">了解保障服务</a>
                <div class="ui-non-purchase-box">
                    <div class="ui-non-purchase-box-left">
                        <img src="/center_files/mi_insurance.png">
                    </div>
                    <div class="ui-non-purchase-box-right" style="float:right;margin-top:-300px;margin-right:200px">
                        <div class="ui-non-purchase-striking">
                            <div class="ui-non-purchase-striking-text"><img src="/center_files/tick_large.png"> 屏幕碎裂免费换新屏</div>
                            <div class="ui-non-purchase-striking-text"><img src="/center_files/tick_large.png"> 进水、摔落免费修</div>
                            <div class="ui-non-purchase-striking-text"><img src="/center_files/tick_large.png"> 修好为止</div>
                        </div>
                        <div style="margin-top:30px;" class="ui-non-purchase-note">适用于小米手机4，仅可随手机一起购买</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 订单中心->评价晒单 -->
    


</div>  

   </div>
</div></div> 


<script type="text/javascript">
    //控制模块显示隐藏
    function funcShow(id){
    for(var i=0;i<6;i++){
    var divInfo =document.getElementById('div'+(i+1));
    //console.log(divInfo);
    divInfo.style.display='none';
    }
    var div =document.getElementById('div'+id);

    div.style.display='block';
    }
</script>

<script type="text/javascript">
$(document).ready(function() {
    showLocation();
    })

</script>
<script src="/admin/layer/layer.js"></script>
<script type="text/javascript">
    function abc(){
        layer.open({
          type: 2,
          title: '添加信息',
          shadeClose: true,
          shade: 0.8,
          area: ['500px', '90%'],
          content: 'http://www.lht.com/caddress' //iframe的url
        }); 
    }
</script>
<script type="text/javascript">

    //点击确认收货
    function shou(obj){

        var r=confirm('确定要收货吗?');
        if(r==true){
             var num=$(obj).parents('table[class=order-detail-table]').find('a[class=number]').html();
            console.log(num);
            $.ajax({
                url:'/order/status',
                data:{'number':num},
                success:function(mes){
                    console.log(mes);
                    layer.msg('确认收货成功');
                    location.href="/center";
                }
            });
        }else{
            return false;
        }

       
        
       
    }

    //评价
    function content(obj){
        var num=$(obj).parents('table[class=order-detail-table]').find('a[class=number]').html();
        // console.log(num);
        var id=$(obj).parents('table[class=order-detail-table]').find('input').val();
        // console.log(id);
        layer.open({
          type: 2,
          title: '商品评价',
          shadeClose: true,
          shade: 0.8,
          area: ['480px', '85%'],
          content: 'http://www.lht.com/content?goodsid='+id+'&num='+num //iframe的url
        }); 
    }

    function order(obj){
        $(obj).next('div[class=abcd]').find('div[class=attr]').attr('style','z-index: 19891015; width:120px;height:;margin-left:100px;margin-top:2px;display:block;background:#FF6700;border-radius:5px;color:white;opacity:0.8');
        var str=$(obj).next('div').find('div[class=attr]').attr('attr');
        var arr = str.split(',');
            // console.log(arr);    
        var ls  = new Location;
        var l = ls.items;
        // console.log(l['0,1,2']['5']);
        var sheng = l['0'][arr[0]];
        var shi = l['0,'+arr[0]][arr[1]];
        var xian = l['0,'+arr[0]+','+arr[1]][arr[2]];
        var dizhi=sheng+shi+xian;
        $(obj).next('div').find('div[class=attr]').find('span').html(dizhi);
        // console.log(address);
        setTimeout(function(){
            $(obj).next('div[class=abcd]').find('div[class=attr]').attr('style','z-index: 19891015; width:120px;height:;margin-left:100px;margin-top:2px;display:none;background:#FF6700;border-radius:5px;color:white;opacity:0.8');
        },2000)
    }

     $('.address-item .uaddress').each(function(){
            var attr=$(this).attr('attr');
            // var info=getInfo(attr);
            var arr = attr.split(',');
            console.log(arr);    
            var ls  = new Location;
            var l = ls.items;
            // console.log(l['0,1,2']['5']);
            var sheng = l['0'][arr[0]];
            var shi = l['0,'+arr[0]][arr[1]];
            var xian = l['0,'+arr[0]+','+arr[1]][arr[2]];
            var info= sheng+shi+xian;
             console.log(info);  
            $(this).find('span').html(info);
            // console.log(attr);
        });

     //删除收藏
    function deleteFavorite(id){

        $.ajax({
            url:'/deleteFavorite',
            data:{'id':id},
            success:function(mes){
                //删除当前li
                $('#'+id).remove();
            }
        });
    }


    //删除评论
    function deleteComment(id){
        //alert(id);
       // prompt(id);
        $.ajax({
            url:'/deleteComment',
            data:{'id':id},
            success:function(mes){
                //删除当前li
                $('#'+id).remove();
            }
        });
    }
</script>
@endsection