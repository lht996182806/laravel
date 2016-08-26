<!DOCTYPE html>
<html xml:lang="zh-CN" lang="zh-CN"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta charset="UTF-8">
<title>填写订单信息</title>
<meta name="viewport" content="width=1226">
<link rel="shortcut icon" href="http://s01.mifile.cn/favicon.ico" type="image/x-icon">
<link rel="icon" href="http://s01.mifile.cn/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href="/order_files/base.css">
<link rel="stylesheet" type="text/css" href="/order_files/checkout.css">
</head>
<body>
<div class="site-header site-mini-header">
    <div class="container">
        <div class="header-logo">
            <!-- <a onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-ac576a29202325c4', '//www.mi.com/index.html', 'pcpid']);" data-stat-id="ac576a29202325c4" class="logo " href="http://www.mi.com/index.html" title="小米官网"></a> -->
            <img src="/cart_files/logo.png" alt="">
        </div>
        <div class="header-title" id="J_miniHeaderTitle"><h2>确认订单</h2></div>
        <div class="topbar-info" id="J_userInfo">
        <span class="user"><a onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-de9e238ee20c2ea1', '//my.mi.com/portal', 'pcpid']);" data-stat-id="de9e238ee20c2ea1" rel="nofollow" class="user-name" href="http://my.mi.com/portal" target="_blank"><span class="name">{{session('user')}}</span><i class="iconfont"></i></a>
        <ul class="user-menu">
            <li><a onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-e0b9e1d1fa8052a2', '//my.mi.com/portal', 'pcpid']);" data-stat-id="e0b9e1d1fa8052a2" rel="nofollow" href="http://my.mi.com/portal" target="_blank">个人中心</a>
            </li>
            <li><a onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-04dda61fe46ba720', 'http://order.mi.com/user/comment', 'pcpid']);" data-stat-id="04dda61fe46ba720" rel="nofollow" href="http://order.mi.com/user/comment" target="_blank">评价晒单</a>
            </li>
            <li><a onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-8660c1b13ab1c56b', 'http://order.mi.com/user/favorite', 'pcpid']);" data-stat-id="8660c1b13ab1c56b" rel="nofollow" href="http://order.mi.com/user/favorite" target="_blank">我的喜欢</a>
            </li>
            <li><a onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-6c2aba14bc7f649a', 'http://account.xiaomi.com/', 'pcpid']);" data-stat-id="6c2aba14bc7f649a" rel="nofollow" href="http://account.xiaomi.com/" target="_blank">小米账户</a>
            </li>
            <li><a onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-7014141d5b446729', 'http://order.mi.com/site/logout', 'pcpid']);" data-stat-id="7014141d5b446729" rel="nofollow" href="/logout">退出登录</a>
            </li>
            </ul>
            </span><span class="sep">|</span><a onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-a9e9205e73f0742c', '//static.mi.com/order/', 'pcpid']);" data-stat-id="a9e9205e73f0742c" rel="nofollow" class="link link-order" href="" target="_blank">我的订单</a></div>
    </div>
</div>
<!-- .site-mini-header END -->
<script src="/order_files/unjcV2.js" async="" type="text/javascript"></script>

<!-- <script src="/order_files/mstr.js" async="" type="text/javascript"></script> -->
<!-- <script src="/order_files/jquery.js" async="" type="text/javascript"></script> -->
<script src="/order_files/xmst.js" async="" type="text/javascript"></script>
<script type="text/javascript">
var checkoutConfig={
    addressMatch:'common',
    addressMatchVarName: new Function('return ' + 'data'),
    hasPresales:false,
    hasBigTv:false,
    hasAir:false,
    hasScales:false,
    hasWater:false,
    hasWater2:false,
    hasMobile:true,
    hasEboiler:false,
    hasEvent:false,
    hasGiftcard:false,
    totalPrice:2144.00,
    needPayAmount:2144,
    postage:10,//
    postFree:true,
    bcPrice:150,
    activityDiscountMoney:0.00,//活动优惠
    showCouponBox:0,
    showCaptcha:'0',
    invoice:[{"type":"electron","value":4,"desc":"\u4e2a\u4eba\u7535\u5b50\u53d1\u7968","checked":true},{"type":"personal","value":1,"desc":"\u4e2a\u4eba\u7eb8\u8d28\u53d1\u7968","checked":false},{"type":"company","value":2,"desc":"\u5355\u4f4d\u7eb8\u8d28\u53d1\u7968","checked":false}],
    quickOrder: '0',
    hasBigPro: false,
    subsidyPrice: 0
};
</script>
<div class="page-main">
    <form action="/order/pay" method="post">
    {{csrf_field()}}
    <div class="container">
        <div class="checkout-box">
            <div class="section section-address">
                <div class="section-header clearfix">
                    <h3 class="title">收货地址</h3>
                    <div class="more"  style="float:left;margin-left:50px">
                     @if (count($errors) > 0)
                        <div class="mws-form-message error">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li style="color:orange;font-size:20px">**{{ $error }}**</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    </div>
                                                                            

                </div>
                <div class="section-body clearfix" id="J_addressList">
                    <!-- addresslist begin -->
                    @foreach($address as  $v)
                    <div class="address-item" data-address_id="10160406301210395" data-consignee="霜缌羽" data-tel="126****2264" data-province_id="20" data-province_name="广东" data-city_id="235" data-city_name="深圳市" data-district_id="2221" data-district_name="宝安区" data-area="0" data-address="龙华镇华园道龙华中心小学88号102" data-tag_name="" data-editable="Y" aid="{{$v->id}}">
                        <dl>
                            <dt>
                                <span class="tag"></span>
                                <em class="uname">{{$v->name}}</em>
                            </dt>
                            <dd class="utel">
                                {{$v->phone}}                            
                            </dd>
                            <dd class="uaddress" attr="{{$v['sheng']}},{{$v['shi']}},{{$v['xian']}}">
                                <span></span> <br>
                                {{$v->jiedao}}
                            </dd>
                        </dl>
                                                

                        <div class="actions">
                            <a onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-25baf9d4f33c8f6c', 'javascript:void(0);', 'pcpid']);" data-stat-id="25baf9d4f33c8f6c" href="javascript:void(0);" class="modify J_addressModify">修改</a>
                        </div>
                    </div>
                    @endforeach                    <!-- addresslist end -->
                    <div class="address-item address-item-new" id="J_newAddress" >
                        <i class="iconfont" onclick="newAdd()"></i>
                        <a href="/address">添加新地址</a>
                    </div>
                    <input type="hidden" name="address_id" value="" required>
                </div>
            </div>

            <div class="section section-options section-payment clearfix">
                <div class="section-header">
                    <h3 class="title">支付方式</h3>
                </div>
                <div class="section-body clearfix">
                    <ul class="J_optionList options ">
                                                <li data-type="pay" class="J_option selected" data-value="1">
                            在线支付                            <span>
                            （支持支付宝、银联、财付通、小米钱包等）                            </span>
                        </li>
                                            </ul>
                </div>
            </div>

           <!--  <div class="section section-options section-shipment clearfix">
                <div class="section-header">
                    <h3 class="title">配送方式</h3>
                </div>
                <div class="section-body clearfix">
                                        <ul class="clearfix J_optionList options ">
                                                <li data-type="shipment" class="J_option selected" data-amount="0" data-value="1">
                            快递配送（免运费）                                                    </li>
                                            </ul>

                    <div style="display: none;" class="service-self-tip" id="J_serviceSelfTip"></div>
                </div>
            </div> -->

           <!-- <div class="section section-options section-time clearfix">
                <div class="section-header">
                    <h3 class="title">配送时间</h3>
                </div>
                <div class="section-body clearfix">
                    <ul class="J_optionList options options-list clearfix">
                        
                                                <li data-type="time" class="J_option selected" data-value="1">
                            不限送货时间：<span>周一至周日</span>                        </li>
                                                <li data-type="time" class="J_option " data-value="2">
                            工作日送货：<span>周一至周五</span>                        </li>
                                                <li data-type="time" class="J_option " data-value="3">
                            双休日、假日送货：<span>周六至周日</span>                        </li>
                                            
                    </ul>
                </div>
            </div> -->

            <!-- <div class="section section-options section-invoice clearfix">
                <div class="section-header">
                    <h3 class="title">发票</h3>
                </div>
                <div class="section-body clearfix">
                    <ul class="J_optionList options options-list  J_tabSwitch clearfix">
                        <li data-type="invoice" data-invoice-type="not_invoice" class="hide J_option">
                            不开发票                        </li>
                        <li data-value="4" data-type="invoice" data-invoice-type="electron" class="J_option tab-active selected">
                            电子发票（非纸质）
                        </li>
                        <li class="J_option" id="J_paperInvoice">
                            普通发票（纸质）
                        </li>
                    </ul>

                    <div class="tab-container">
                        <div style="display: none;" class="tab-content hide"></div>
                        <div class="tab-content e-invoice-detail">
                            电子发票法律效力、基本用途及使用规定同纸质发票。不随商品寄送。<a onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-b762af4a94c60517', 'javascript:void(0);', 'pcpid']);" data-stat-id="b762af4a94c60517" href="javascript:void(0);" id="J_showEinvoiceDetail">什么是电子发票 <i class="icon-qa">?</i></a>
                            <div class="e-invoice-qa hide" id="J_einvoiceDetail">
                                <ul>
                                    <li>感谢您选择电子发票，电子发票是税局认可的有效付款凭证，其法律效力、基本用户及使用规定同纸质发票，可作为用户维权、保修的有效凭据。如需纸质发票可自行下载打印；</li>
                                    <li>您在订单详情的"发票信息"栏可查看、下载您的电子发票。</li>
                                </ul>
                                <a onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-14af91c0b7aa7105', 'http://bbs.xiaomi.cn/thread/index/tid/9385999', 'pcpid']);" data-stat-id="14af91c0b7aa7105" href="http://bbs.xiaomi.cn/thread/index/tid/9385999" target="_blank">了解详情&gt;</a>
                            </div>
                        </div>

                        <div style="display: none;" class="tab-content hide paper-invoice-detail">
                            <ul class="J_optionList options options-list J_tabSwitch clearfix">
                                <li data-value="1" data-type="invoice" data-invoice-type="personal" class="J_option">
                                    个人
                                </li>
                                <li data-value="2" data-type="invoice" data-invoice-type="company" class="J_option">
                                    单位
                                </li>
                            </ul>
                            <div class="tab-container">
                                <div class="tab-content paper-invoice-person">
                                    发票抬头：个人<br>
                                    发票内容：购买商品明细
                                </div>
                                <div class="tab-content hide paper-invoice-company">
                                    <div class="form-section">
                                        <label class="input-label" for="invoice_title">请输入发票抬头</label>
                                        <input class="input-text" id="invoice_title" name="invoice_title" type="text">
                                    </div>
                                    <p>发票内容：购买商品明细</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

            <div class="section section-goods">
                <div class="section-header clearfix">
                    <h3 class="title">商品及优惠券</h3>
                    <div class="more">
                        <a onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-e2cb89a0d7ce0e0b', '//static.mi.com/cart/', 'pcpid']);" data-stat-id="e2cb89a0d7ce0e0b" href="/shopcar">返回购物车<i class="iconfont"></i></a>
                    </div>
                </div>
                <div class="section-body">
                    <ul class="goods-list" id="J_goodsList">
                    @foreach($goods as $v)
                        <li class="clearfix">
                            <div class="col col-img">
                                <img src="/order_files/T1IdZgB5Lv1RXrhCrK30x30.jpg" height="30" width="30">
                            </div>
                            <div class="col col-name">
                            <input type="hidden" name="goods_id[]" value="{{$v['id']}}">
                            <input type="hidden" name="{{$v['id']}}" value="{{$v['number']}}">
                                <a onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-a983b35036d10e6c', '//item.mi.com/1160700027.html', 'pcpid']);" data-stat-id="a983b35036d10e6c" href="http://item.mi.com/1160700027.html" target="_blank">{{$v['title']}} {{$v->color}} {{$v->size}} G</a>
                            </div>
                            <div class="col col-price">
                                {{$v->price}}元 x {{$v->number}}                            
                            </div>
                            <div class="col col-status">
                                有货
                            </div>
                            <div class="col col-total">
                                <span>{{$v->price*$v->number}}</span>元
                            </div>
                        </li>
                        @endforeach
                       <li class="clearfix">
                           <div style="float:right;clear:both;margin-right:40px;font-size:16px;margin-bottom:2px;color:#ff6700">
            
                            <span class="total-price">
                                合计（不含运费）：<em id="J_cartTotalPrice">-.--</em>元
                            </span>
                            <input type="hidden" name="total" value="">
                       </li>
                    </ul>
                </div>

            </div>
            </div>

            

            <div class="section-bar clearfix">
                <div class="fl">
                    <div class="seleced-address hide" id="J_confirmAddress">
                    </div>
                    <div class="big-pro-tip hide J_confirmBigProTip"></div>
                </div>
                <div class="fr">
                    <!-- <a onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-4773f7ffc10003b8', 'javascript:void(0);', 'pcpid']);" data-stat-id="4773f7ffc10003b8" href="javascript:void(0);" class="btn btn-primary" id="J_checkoutToPay">付 款</a> -->
                    <input type="submit" value="付 款" class="btn btn-primary" id="J_checkoutToPay">
                </div>
            </div>
        </div>
    </div>
    </form>
</div>


<div class="big-pro-tip-pop hide" id="J_popBigProTip"></div>


<div class="modal fade modal-hide modal-lipin" id="J_lipinTip">
    <div class="modal-header">
        <h3 class="title">温馨提示</h3>
    </div>
    <div class="modal-body">
        <p>
            为保障您的利益与安全，下单后礼品卡将会被使用，<br>
            且订单信息将不可修改。请确认收货信息：
        </p>
        <ul>
            <li class="clearfix">
                <strong>收&nbsp;&nbsp;货&nbsp;&nbsp;人：</strong>
                <span id="J_lipinUserName"></span>
            </li>
            <li class="clearfix">
                <strong>联系电话：</strong>
                <span id="J_lipinUserPhone"></span>
            </li>
            <li class="clearfix">
                <strong>收货地址：</strong>
                <span id="J_lipinUserAddress"></span>
            </li>
        </ul>
    </div>
    <div class="modal-footer">
        <a onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-8e19401adef46ba2', 'javascript:void(0);', 'pcpid']);" data-stat-id="8e19401adef46ba2" href="javascript:void(0);" class="btn btn-primary" id="J_lipinSubmit">确认下单</a>
        <a onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-28800888dda4eee0', 'javascript:void(0);', 'pcpid']);" data-stat-id="28800888dda4eee0" href="javascript:void(0);" class="btn btn-gray" data-dismiss="modal">返回修改</a>
    </div>
</div>

<div class="modal fade modal-hide modal-yushou" id="J_yushouTip">
    <div class="modal-header">
        <h3 class="title">请确认收货地址及发货时间</h3>
    </div>
    <div class="modal-body">
        <ul class="content">
            <li>
                <h3>请确认配送地址，提交后不可变更：</h3>
                <p id="J_yushouAddress"> </p>
                <span class="icon icon-1"></span>
            </li>
            <li>
                <h3>支付后发货</h3>
                <p>如您随预售商品一起购买的商品，将与预售商品一起发货</p>
                <span class="icon icon-2"></span>
            </li>
            <li>
                <h3>以支付价格为准</h3>
                <p>如预售产品发生调价，已支付订单价格将不受影响。</p>
                <span class="icon icon-3"></span>
            </li>
        </ul>
    </div>
    <div class="modal-footer">
        <a onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-adbbe3abff3f506a', 'javascript:void(0);', 'pcpid']);" data-stat-id="adbbe3abff3f506a" href="javascript:void(0);" class="btn btn-gray" data-dismiss="modal">返回修改地址</a>
        <a onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-49b440ef95b2b913', 'javascript:void(0);', 'pcpid']);" data-stat-id="49b440ef95b2b913" href="javascript:void(0);" class="btn btn-primary" id="J_yushouSubmit">确认并继续下单</a>
    </div>
</div>


<div class="modal fade modal-hide modal-edit-address" id="J_modalEditAddress">
    <div class="modal-body">
        <iframe allowfullscreen="" frameborder="0" height="100%" width="100%"></iframe>
    </div>
</div>

<div class="modal fade modal-hide fade modal-alert" id="J_modalAlert">
    <div class="modal-bd">
        <div class="text">
            <h3 id="J_alertMsg"></h3>
        </div>
        <div class="actions">
            <button class="btn btn-primary" data-dismiss="modal">确定</button>
        </div>
        <a onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-b718c74de11bb9a0', 'javascript:void(0);', 'pcpid']);" data-stat-id="b718c74de11bb9a0" class="close" data-dismiss="modal" href="javascript:%20void(0);"><i class="iconfont"></i></a>
    </div>
</div>

<div class="address-top-bar" id="J_addressTopBar">
    <div class="container">
        <div class="content" id="J_addressTopCon">
            <span class="uname">霜缌羽</span>
            <span class="utel">126****2264</span>
            广东 深圳市 宝安区 龙华镇华园道龙华中心小学88号102
        </div>
    </div>
</div>


<div class="modal modal-warning modal-hide" id="warning-bargain-1463">
    <div class="modal-hd">
        <h2 class="title">温馨提示</h2>
        <a onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-bdb508f1f15790d3', 'javascript:void(0);', 'pcpid']);" data-stat-id="bdb508f1f15790d3" class="close" data-dismiss="modal" href="javascript:%20void(0);"><i class="iconfont"></i></a>
    </div>
    <div class="modal-bd">
        <p>
            <b>换卡说明：</b>
            <br><br>移动2G / 3G卡升级为移动4G卡
            <br>传统SIM大卡换小米手机适配的micro卡
        </p>
    </div>
</div>

<div class="modal modal-warning modal-hide" id="warning-bargain-1464">
    <div class="modal-hd">
        <h2 class="title">温馨提示</h2>
        <a onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-bdb508f1f15790d3', 'javascript:void(0);', 'pcpid']);" data-stat-id="bdb508f1f15790d3" class="close" data-dismiss="modal" href="javascript:%20void(0);"><i class="iconfont"></i></a>
    </div>
    <div class="modal-bd">
        <p>
            <b>换卡说明：</b>
            <br><br>移动2G / 3G卡升级为移动4G卡
            <br>传统SIM大卡换小米手机适配的nano卡
        </p>
    </div>
</div>

<!-- 保险弹窗 -->
<!-- 保险弹窗 -->

<div class="modal in hide modal-baoxian" id="J_baoxian">
    <div class="modal-header">
        <h3>小米意外保障服务</h3>
        <span class="close" data-dismiss="modal"><i class="iconfont"></i></span>
    </div>
    <div class="modal-body">
        <div class="con-1">
            <h4>购买保障服务的设备在意外受损时可获得免费维修</h4>
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
                <dd>· 本保障服务目前仅适用于小米/平板用户。</dd>
                <dd>· 本保障服务自您收到设备起生效，有效期为一年，若您在收到设备7日内需要取消保障服务，请连同设备一起申请退货。</dd>
                <dd>· 故意行为导致的设备损坏以及盗窃、抢劫、遗失设备等不在服务保障范围内（具体以小米意外保障服务条款为准）。<br>
                    <a onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-759c252ae808a3da', 'http://www.mi.com/service/safe', 'pcpid']);" data-stat-id="759c252ae808a3da" href="http://www.mi.com/service/safe" target="_blank" class="J_baoxianMore">了解《小米意外保障服务》详细条款&gt;</a>
                </dd>
            </dl>
        </div>
    </div>
    <div class="modal-footer clearfix">
        <p>
            <span class="J_baoxianAgree"><i class="iconfont icon-checkbox">√</i> 我已经阅读并同意</span>《<a onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-76edd269d90d91e2', 'http://www.mi.com/service/safe', 'pcpid']);" data-stat-id="76edd269d90d91e2" href="http://www.mi.com/service/safe" target="_blank" class="J_baoxianMore">小米意外保障服务条款</a>》
        </p>
        <a onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-c26631409e7d95f9', '', 'pcpid']);" data-stat-id="c26631409e7d95f9" class="btn btn-primary J_buyBaoxian">确认并购买服务</a>
        <a onclick="_msq.push(['trackEvent', '50d1f382fadafb8b-821a98207fa653c1', '', 'pcpid']);" data-stat-id="821a98207fa653c1" class="btn btn-gray" data-dismiss="modal" aria-hidden="true">取消</a>
    </div>
</div>


<!--结算提示 -->

<!-- 购物卡列表 -->

@extends('home.footer')
<!-- .modal-globalSites END -->
<script type="text/javascript" src="/home/js/jquery-1.8.3.min.js"></script>

<script src="/order_files/base.js"></script>
<script src="/order_files/area.js"></script>
<script src="/order_files/location.js"></script>
<!-- <script src="/order_files/jquery01.js"></script> -->


<!-- <script type="text/javascript" src="/order_files/checkout.js"></script> -->
<script src="/admin/layer/layer.js"></script>

<script type="text/javascript">

    $(document).ready(function() {
        showLocation();
        $('.address-item .uaddress').each(function(){
            var attr=$(this).attr('attr');
            var info=getInfo(attr);
            $(this).find('span').html(info);
            // console.log(attr);
        });

        function getInfo(str){
            var arr = str.split(',');
            // console.log(arr);    
            var ls  = new Location;
            var l = ls.items;
            // console.log(l['0,1,2']['5']);
            var sheng = l['0'][arr[0]];
            var shi = l['0,'+arr[0]][arr[1]];
            var xian = l['0,'+arr[0]+','+arr[1]][arr[2]];
            return sheng+shi+xian;
        }

        $('.address-item').each(function(){
            $(this).click(function(){
                $('.address-item').attr('style','');
                $(this).attr('style','border:1px solid red');
                $('#J_newAddress').attr('style','');
                var id=$(this).attr('aid');
                console.log(id);
                $('input[name=address_id]').val(id);
            });
        })
        var sum=0;
        $('.col-total').each(function(){
            // console.log($(this));
            var total=parseFloat($(this).find('span').html());
            // console.log(total);
            sum=total+sum;
            $('#J_cartTotalPrice').html(sum.toFixed(2));
            $('input[name=total]').val(sum);
        
        })

    });
    function newAdd(){
        // layer.open({
        //   type: 1,
        //   skin: 'layui-layer-rim', //加上边框
        //   area: ['600px', '650px'], //宽高
        //   content: '<div  id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"><div class="modal-dialog" role="document"><form action="/address/insert"method="post">{{csrf_field()}}<div class="modal-content"><div class="modal-header"><h3 class="modal-title" id="myModalLabel">添加收货地址</h3></div><div class="modal-body"><div class="form-group" style="font-size:16px;height:50px"><label for="exampleInputEmail1">收件人:</label><input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="" style="size:12px;margin-left:10px"></div><div class="form-group" style="font-size:16px;height:50px"><label for="exampleInputPassword1">手机号:</label><input type="text" class="form-control" name="phone" id="exampleInputPassword1" placeholder="" style="size:12px;margin-left:10px"></div><div style="height:50px;font-size:16px">城 市:<select id="loc_province"  class="" name="sheng" style="margin-left:22px;width:80px">请选择</select><select id="loc_city" class="" name="shi" style="width:100px;"></select><select id="loc_town" class="" name="xian" style="width:120px;"></select></div><div class="form-group" style="font-size:16px"><label for="exampleInputPassword1">街道:</label><textarea style="size:12px;margin-left:22px" name="jiedao" id="" class="form-control" cols="30" rows="10"></textarea></div><div class="checkbox" style="size:12px;margin-left:10px"><label><input type="checkbox" name="isdefault" value="1">选中默认</label></div></div><div class="modal-footer">{{csrf_field()}}<button type="button" class="btn btn-default" data-dismiss="modal">关闭</button><button type="submit" class="btn btn-primary">添加</button></div></div></form></div></div>'
        // });
        layer.open({
          type: 2,
          title: '添加信息',
          shadeClose: true,
          shade: 0.8,
          area: ['450px', '90%'],
          content: 'http://www.lht.com/address' //iframe的url
        }); 
    }


</script>


</body></html>