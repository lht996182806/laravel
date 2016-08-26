<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0, maximum-scale=1.0,user-scalable=no">
<title>小米帐号 - 绑定授权</title>

		<link type="text/css" rel="stylesheet" href="/pbang_files/reset.css">
    <link type="text/css" rel="stylesheet" href="/pbang_files/layout.css">

		<link type="text/css" rel="stylesheet" href="/pbang_files/modacctip.css">

	
<style>
/*wap*/
.bugfix_ie6{ display:block;}
body{ overflow-y:scroll;}
@media only screen and (max-width:770px){
  body{ overflow-y:auto;}
}
</style>
</head>
<body class="zh_CN">
<div class="wrapper blockimportant">
<div class="wrap">
<div class="layout bugfix_ie6 dis_none">
  <div class="n-logo-area clearfix">
    <a href="https://account.xiaomi.com/" class="fl-l">
      <img src="/pbang_files/n-logo.png" >
    </a>
    
       <a id="logoutLink" class="fl-r logout" href="/center">
          返回个人中心
       </a>
	  <script>
	  setTimeout(function(){
		  if(location.hostname === 'account.xiaomi.com'){return;}
		  var link = document.getElementById('logoutLink');
		  if(link){
			  var href = link.getAttribute('href');
			  var a = document.createElement('a');
			  a.setAttribute('href','/');
			  var homeURL = a.href;
			  href = href.replace(/\&callback\=.*$/, '&callback=' + homeURL);
			  link.setAttribute('href', href);
			  a = null;
		  }
	  },100);
	  </script>
    
  </div>
  
    <!--头像 名字-->
	<div class="n-account-area-box">
		<div class="n-account-area clearfix">
		  <div class="na-info">
			<p class="na-name">
          @if($list->username)
            {{$list->username}}
          @else
            {{session('user')}}
          @endif   
      </p>
			<p class="na-num">1090637899</p>
		  </div>
		  <div class="na-img-area fl-l">
      <!--na-img-bg-area不能插入任何子元素-->
      <div class="na-img-bg-area"><img src="{{$list->userpic}}" alt=""></div>
		  </div>
		</div>
	</div>
  
</div>

<div class="layout">
	<div class="n-main-nav clearfix">
		<ul class="c_b">
          <li>
            <a href="/pcenter" title="帐号安全">帐号安全</a>
            <em class="n-nav-corner"></em>
          </li>
		  <li>
		    <a href="/pmessage" title="个人信息">个人信息</a>
		    <em class="n-nav-corner"></em>
		  </li>
		  <!--<li>
        <a href="">登录设备</a>
        <em class="n-nav-corner"></em>
      </li>-->
		  <li class="current">
		    <a href="/pbang" title="绑定授权">绑定授权</a>
		    <em class="n-nav-corner"></em>
		  </li>
			<li>
				<a href="/pfuwu" title="小米服务">小米服务</a>
				<em class="n-nav-corner"></em>
			</li>
		</ul>
	</div>
	<div class="n-frame">
		<div class="title-item title_security_wap">
		  <h4 class="title-big dis-inb">绑定</h4>
			<span class="title_item_txt">小米帐号绑定的第三方帐号，可用于直接登录小米网等网站</span>
		</div>		
		<div class="third_bindbox c_b">			
        <dl class="third_area c_b" data-type="SINA_WEIBO">
          <dt><div class="icon_bind icon_SINA_WEIBO"></div></dt>
          <dd>
            <h3>新浪微博</h3>
            <div class="status_bind"><i class="icon_status"></i><span>未绑定</span></div>
            <a class="th_action_btn bind-del" href="javascript:void(0);" title="">添加绑定</a>
          </dd>
          <dd class="arrow_r"></dd>
        </dl>
        <dl style="display: none;" class="third_area c_b" data-type="TAOBAO">
          <dt><div class="icon_bind icon_TAOBAO"></div></dt>
          <dd>
            <h3>支付宝</h3>
            <div class="status_bind"><i class="icon_status"></i><span>未绑定</span></div>
            <a class="th_action_btn bind-del" href="javascript:void(0);" title="">添加绑定</a>
          </dd>
          <dd class="arrow_r"></dd>
        </dl>
        <dl class="third_area c_b" data-type="OPEN_QQ">
          <dt><div class="icon_bind icon_OPEN_QQ"></div></dt>
          <dd>
            <h3>QQ</h3>
            <div class="status_bind"><i class="icon_status"></i><span>未绑定</span></div>
            <a class="th_action_btn bind-del" href="javascript:void(0);" title="">添加绑定</a>
          </dd>
          <dd class="arrow_r"></dd>
        </dl>
        <dl class="third_area c_b" data-type="FB">
          <dt><div class="icon_bind icon_FB"></div></dt>
          <dd>
            <h3>Facebook</h3>
            <div class="status_bind"><i class="icon_status"></i><span>未绑定</span></div>
            <a class="th_action_btn bind-del" href="javascript:void(0);" title="">添加绑定</a>
          </dd>
          <dd class="arrow_r"></dd>
        </dl>
        <dl style="display: none;" class="third_area c_b" data-type="WEIXIN">
          <dt><div class="icon_bind icon_WEIXIN"></div></dt>
          <dd>
            <h3>微信</h3>
            <div class="status_bind"><i class="icon_status"></i><span>未绑定</span></div>
            <a class="th_action_btn bind-del" href="javascript:void(0);" title="">添加绑定</a>
          </dd>
          <dd class="arrow_r"></dd>
        </dl>
		</div>		
		<div class="title-item title_security_wap">
		  <h4 class="title-big dis-inb">授权</h4>
      <span class="title_item_txt">您已经授权以下应用访问您的部分帐号信息</span>          
		</div>
    <div id="auth-box" class="third_bindbox c_b">
    <dl id="auth-item-0" class="third_area c_b"><dt><div class="icon_auth"><img src="/pbang_files/a6a219e3-712c-44cb-bae7-fa2ab79cb0f4"></div></dt><dd><h3>小米运动</h3><div class="status_bind"></div><a class="th_action_btn auth-cancel" href="javascript:void(0);" title="" data-index="0">取消授权</a></dd><dd class="arrow_r"></dd></dl></div>    
	</div>
</div>
</div>
</div>
<div class="n-footer">
  <div class="nf-link-area clearfix">
  <ul class="lang-select-list">
    <li><a class="lang-select-li current" href="javascript:void(0)" data-lang="zh_CN">简体</a>|</li>
    <li><a class="lang-select-li" href="javascript:void(0)" data-lang="zh_TW">繁体</a>|</li>
    <li><a class="lang-select-li" href="javascript:void(0)" data-lang="en">English</a></li>
    
      |<li><a class="a_critical" href="http://static.account.xiaomi.com/html/faq/faqList.html" target="_blank"><em></em>常见问题</a></li>
    
  </ul>
  </div>
  <p class="nf-intro"><span>小米公司版权所有-京ICP备10046444-<a href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010802020134" class="beianlink beian-record-link" target="_blank"><span><img src="/pbang_files/ghs.png"></span>京公网安备11010802020134号</a>-京ICP证110507号</span></p>
</div>
<script src="/pbang_files/jquery-1.js"></script>
<script src="/pbang_files/placeholder.js"></script>

<script>
$(function(){
  //语言部分
  var locale="zh_CN";
  if(locale!=='zh_CN' && locale!=='zh_TW' && locale!=='en'){
    locale=locale.indexOf("zh")!==-1?"zh_TW":"en";
  }
  var list=$(".lang-select-li");
  list.each(function(index,item){
    if($(this).data("lang")===locale){
      $(this).addClass("current");
    }
  });
  list.bind("click",function(){
    var selectLocale=$(this).data("lang");
    var params=location.search.substring(1).split("&");
    if(locale!==selectLocale){
      for(var i=0;i<params.length;i++){
        if(params[i].indexOf("_locale=")===0){
          params.splice(i,1);i--;
        }
      }
      params.push("_locale="+selectLocale);
      location.href=("//"+location.host+location.pathname+"?"+params.join("&")+location.hash);
    }
  });
  /*不知道是什么功能部分
  if($(window).innerWidth() <= 640 && (!/AppName\/[0-9\.]+$/.test(navigator.userAgent) || navigator.standalone)){
    $('.n-footer').show();
  }*/
  /*备案链接上的图片*/
  var recordLink=$('.beian-record-link');
  var beianRecordLink="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010802020134";
  var beianRecordImg="https://account.xiaomi.com/static/res/9204d06/account-static/respassport/acc-2014/img/ghs.png";
  var default1px_gif="data:image/gif;base64,R0lGODlhAQABAJEAAAAAAP///////wAAACH5BAEAAAIALAAAAAABAAEAAAICVAEAOw==";
  if(recordLink.length && beianRecordLink){
    recordLink[0].href=beianRecordLink;
  }
  var _img=new Image();
  var _span=$('.beian-record-link span');
  if(_span){
    _img.onload=_img.oncomplete=function(){
      _img._loaded=true;
      _span.append(_img);
    }
    setTimeout(function(){
      if(!_img._loaded && default1px_gif){
        _img.src=default1px_gif;
      }
    },1000);
    _img.src=beianRecordImg;
  }

  /*url 转义*/
  function  encodeURLparam(links,param){
    $(links).each(function(index,item){
      if((item.search+"").indexOf(param)!==-1){
        //分解参数，encode value
        var params=item.search.substring(1).split("&");
        for(var i=0;i<params.length;i++){

          if( (params[i]+"").indexOf(param+"=")===0 ){

            params.splice(i,1, param+"="+encodeURIComponent( (params[i]+"").substring(param.length+1) ) );

            item.search=params.join("&")
          }

        }
      }
    })
  }
  encodeURLparam(document.links,'externalId')
});
var JSP_VAR={
  deviceType:'PC',
  dataCenter:'lg',
  locale:"zh_CN",
  region:"CN",
  callback:"",
  sid:"",
  qs:"",
  hidden:"",
  "_sign":"",
  serviceParam :'',
  privacyLink:'http://www.miui.com/res/doc/privacy/cn.html'
};
</script>
<style>
  .btn-action-go{ display:none;}
</style>
<script>
/*MIUI  客户端和  authSDK 客户端*/
  
  var webviewDisableTip="";
  var closeStatus="";
  var webviewDisableTip2="";
  var webviewDisableBtn="";

  function isWebview(){
    var result=false;
    var ua=navigator.userAgent;
    
    var authSDK=/passport\/oauthsdk\/([\d.]+)/i.test(ua)? parseFloat(RegExp.$1) : false ;
    var miuiClient=/passport\/oauthmiui/i.test(ua);
    var weixinClient=/micromessenger/i.test(ua);
    var miAccountClient=/passportsdk\/notificationwebview/i.test(ua);
    if(authSDK || miuiClient || weixinClient || miAccountClient){
      result={
        authSDK:authSDK,
        miuiClient:miuiClient,
        weixinClient:weixinClient,
        miAccountClient:miAccountClient
      }
    }
    return result;
  }
  
  var webviewDisabled= "";
  var popContainer= '<div style="display:block;" class="popup_mask fixed pchide">'+
                      '<div class="bkc"></div>'+
                      '<div class="mod_wrap">'+
                        '<div style="display:block;" class="mod_acc_tip">'+
                          '<div class="wap_frame">'+
                            '<div class="icon_around"></div>'+
                            '<div class="around_txt">'+
                              '<h4>'+webviewDisableTip+'</h4><p>'+webviewDisableTip2+
                              '</p><p class="pt20 t_c copy-link">'+location.href+'</p>'+
                            '</div>'+
                            '<a class="btn_tip btn_back wap_btn_abs btn-action-go" href="javascript:void(0)">'+webviewDisableBtn+'</a>'+
                          '</div>'+
                        '</div>'+
                      '</div>'+
                    '</div>';
  if(isWebview()){
    $(".n-footer").hide();
    $(".n-logo-area").hide();
    $(".logout_wap").hide();
  }
  
  if(webviewDisabled==='true'){
    $('body').append(popContainer);
  }
  if(!isWebview() && closeStatus==='true'){
    $('.btn-action-go').show();
  }
  $('.btn-action-go').bind('click',function(){
    $(this).closest('.popup_mask').hide();
    return false;
  });
</script>


<!-- 成功绑定 s -->
<div style="display:none;" id="bindsucc-container" class="modal_container bind_auth_ctr">
	<div class="modal_msk"></div>
	<div class=" modal_tip mod_acc_tip">
		<div class="modal_tip_hd modal-header">
			<div class="modal_tip_title">添加绑定</div>
			<a href="javascript:void(0)" title="" class="btn_mod_close btn-close"><span>关闭</span></a>
		</div>
		<div class="mod_tip_bd">
			<div class="wapbox"> 
				<div class="tip_thirdbind">
					<div class="icon_bind img-avator"></div>
					<div class="thirdbind_userinfo">
						<p class="bind-third-account"></p>
						<p class="bind-third-nickname"></p>
					</div>
					<p>已成功绑定<span class="bind-third-account"></span>帐号，将使用<span class="bind-third-account"></span>帐号信息完善小米帐号，您也可以使用此<span class="bind-third-account"></span>快速登录小米网等网站。</p>
				</div>
				<div class="tip_btns wap_btn_abs"> 
					<a id="btn-bind-succ" class="btn_tip btn_commom" href="javascript:void(0)" title="确定">确定</a>
				</div>
			</div> 
		</div>
	</div>
</div>
<!-- 成功绑定 e -->
<!-- 解除绑定 s -->
<div style="display:none;" id="unbind-container" class="modal_container bind_auth_ctr">
	<div class="modal_msk"></div>
	<div class=" modal_tip mod_acc_tip">
		<div class="modal_tip_hd modal-header">
			<div class="modal_tip_title">解除绑定</div>
			<a href="javascript:void(0)" title="" class="btn_mod_close btn-close"><span>关闭</span></a>
		</div>
		<div class="mod_tip_bd">
			<div class="wapbox"> 
				<div class="tip_thirdbind">
					<div class="icon_bind img-avator"></div>
					<div class="thirdbind_userinfo">
						<p class="bind-third-account"></p>
						<p class="bind-third-nickname"></p>
					</div>
          <p>即将解除<span class="bind-third-account"></span>帐号的绑定，解绑后将无法继续使用此<span class="bind-third-account"></span>快速登录小米网等网站。</p>
				</div>
        <div class="err_tip t_c pt10 error-code"></div>
				<div class="tip_btns wap_btn_abs"> 
					<a id="btn-status-del" class="btn_tip btn_commom" href="javascript:void(0)" title="解除绑定">解除绑定</a> 
					<a class="btn_tip btn_back btn-back" href="javascript:void(0)" title="返回">返回</a>
				</div>
			</div> 
		</div>
	</div>
</div>
<!-- 解除绑定 e -->
<!-- 取消授权 s -->
<div style="display:none;" id="authcancel-container" class="modal_container bind_auth_ctr">
	<div class="modal_msk"></div>
  <div class="modal_tip mod_acc_tip">
    <div class="modal_tip_hd modal-header">
      <div class="modal_tip_title">取消授权</div>
      <a href="javascript:void(0)" title="" class="btn_mod_close btn-close"><span>关闭</span></a>
    </div>
    <div class="mod_tip_bd">
      <div class="wapbox"> 
        <div class="tip_thirdbind">
          <div class="icon_bind"><img id="app-logo" alt=""></div>
          <div class="thirdbind_userinfo">
            <p id="auth-appname"></p>
          </div>
          <div class="auth_txt_box">
            <p>本应用拥有以下权限： </p>
            <ul id="auth-list" class="auth_cancel_list">              
            </ul>
            <p>取消授权后，再次使用此应用需要重新授权。</p>
          </div>
        </div>
        <div class="err_tip t_c error-code"></div>
        <div class="tip_btns wap_btn_abs"> 
          <a class="btn_tip btn_commom btn-auth-cancel" href="javascript:void(0)" title="取消授权">取消授权</a> 
          <a class="btn_tip btn_back btn-back" href="javascript:void(0)" title="返回">返回</a>
        </div>
      </div> 
    </div>
  </div>
</div>
<!-- 取消授权 e -->

<script>
  var MSG={
    status_binded:"已绑定",
    status_unbind:"未绑定",
    status_add:"添加绑定",
    status_del:"解除绑定",
    status_cancel:"取消授权",
    errorcode:"系统出错，请稍后再试",
    authmsg:"暂未授权任何应用访问您的帐号信息"
  }
  var DOMELS={
    container:$('.modal_container'),
    bindSuccContainer:$('#bindsucc-container'),
    unbindContainer:$('#unbind-container'),
    authCancelContainer:$('#authcancel-container'),
    back:$('.btn-back'),
    close:$('.btn-close'),
    bindDel:$(".bind-del"),
    statusDel:$('#btn-status-del'),
    statusSucc:$('#btn-bind-succ'),
    imgavator:$('.img-avator'),
    thirdName:$('.bind-third-account'),
    thirdNickname:$('.bind-third-nickname'),
    authBox:$('#auth-box'),
    authCancel:$('.auth-cancel'),
    appname:$('#auth-appname'),
    applogo:$('#app-logo'),
    authlist:$('#auth-list'),
    statusCancel:$('.btn-auth-cancel')
  };
  function getParam(paramName){
    var paramValue="";
    var cookie=document.cookie;
    var keyIndex="";
    var arrParam=cookie.split(';');
    for(var i=0;i<arrParam.length;i++){
      keyIndex=arrParam[i].indexOf(paramName+'=');
      if(keyIndex>-1){
        paramValue=arrParam[i].substring(keyIndex+paramName.length+1);
      }
    }
    return paramValue;
  }
  function getAppId(url){
    var paramValue="";
    if(/\&appId\=([^&]*)/.test(url)){
      paramValue=RegExp.$1;
    }
    return paramValue;
  }
  //弹出关闭
  DOMELS.back.bind('click',function(){
    DOMELS.container.hide();
    if(conf.snsType){
      DOMELS.imgavator.removeClass('icon_'+conf.snsType);
    }
  });
  DOMELS.close.bind('click',function(){
    DOMELS.container.hide();
    if(conf.snsType){
      DOMELS.imgavator.removeClass('icon_'+conf.snsType);
    }
  });
  
  var OPEN_WINDOW_HANDLER=null;
  var OPEN_WINDOW_NAME='openThirdBind';
  function getOpenParams(){
    //var width=520;
    //var height=550;

    var sInfo=getScreenInfo();
    var _top=0;
    var _left=0;
    
        var width=774;
        var height=680;
        if(sInfo.owidth){
          _top=Math.max( (sInfo.oheight-height)/2 + sInfo.stop, 0 );
          _left=Math.max( (sInfo.owidth-width)/2 + sInfo.sleft, 0 );
        }else{
          _top=Math.max( (sInfo.height-height)/2 + sInfo.stop, 0 );
          _left=Math.max( (sInfo.width-width)/2 + sInfo.sleft, 0 );
        }
      
    return 'width='+width+',height='+height+',top='+_top+',left='+_left;
  }
  function getScreenInfo(w,h){
    var s=window.screen;
    var swidth=s.availWidth;
    var sheight=s.availHeight;
    var oheight=window.outerHeight;
    var owidth=window.outerWidth;
    var width=window.innerHeight;
    var height=window.innerWidth;
    var sleft=window.screenLeft || window.screenX || 0;
    var stop=window.screenTop || window.screenY || 0;
    if($.browser.msie){
      stop=stop-80;
      if(typeof width!=='number'){
        if(document.compatMode=='CSS1Compat'){
          width=document.documentElement.clientWidth;
          height=document.documentElement.clientHeight;
        }else{
          width=document.body.clientWidth;
          height=document.body.clientHeight
        }
      }
    }
    return {
      swidth:swidth,
      sheight:sheight,
      sleft:sleft,
      stop:stop,
      owidth:owidth,
      oheight:oheight,
      width:width,
      height:height
    }
  }
  function openWindow(url,windowName){
    var params=getOpenParams();
    closeWindow();
    OPEN_WINDOW_HANDLER=window.open(url,windowName,params);
  }
  function closeWindow(){
    if(OPEN_WINDOW_HANDLER){      
      OPEN_WINDOW_HANDLER.close();
      OPEN_WINDOW_HANDLER=null;
    }
  }
  function snsBindCallback(data){    
    if(!data.keepStatus){
      closeWindow();
      bindSuccess(data);
    }
  }
  function snsBindCancelCallback(){
    closeWindow();
  }
  function bindSuccess(data){
    var sns_type=data.type;
    DOMELS.imgavator.addClass('icon_'+sns_type);
    DOMELS.thirdNickname.text(data.name);
    result[conf.snsType].name=data.name;
    DOMELS.thirdName.text(data.type_name);
    DOMELS.bindSuccContainer.show();
    resize(DOMELS.bindSuccContainer);
    DOMELS.close.bind('click',function(){
      result[conf.snsType].bind=true;
      showBindData(result);
    });
  }
  try{
    if(window.opener){
      if(window.opener.snsBindCancelCallback){
        window.opener.snsBindCancelCallback({
        });
      }
    }
  }catch(e){}
  //初始化绑定数据
	var result=$.parseJSON('{"OPEN_QQ":{"bindlink":"https://account.xiaomi.com/pass/sns/bind/auth?userId=1090637899&sid=passport&appid=100284651&xcallback=https%3A%2F%2Faccount.xiaomi.com%2Fpass%2Fauth%2Fsns%2Fhome","unbindlink":"https://account.xiaomi.com/pass/auth/sns/unbind?userId=1090637899&snstype=OPEN_QQ","bind":false},"SINA_WEIBO":{"bindlink":"https://account.xiaomi.com/pass/sns/bind/auth?userId=1090637899&sid=passport&appid=2996826273&xcallback=https%3A%2F%2Faccount.xiaomi.com%2Fpass%2Fauth%2Fsns%2Fhome","unbindlink":"https://account.xiaomi.com/pass/auth/sns/unbind?userId=1090637899&snstype=SINA_WEIBO","bind":false},"FB":{"bindlink":"https://account.xiaomi.com/pass/sns/bind/auth?userId=1090637899&sid=passport&appid=222161937813280&xcallback=https%3A%2F%2Faccount.xiaomi.com%2Fpass%2Fauth%2Fsns%2Fhome","unbindlink":"https://account.xiaomi.com/pass/auth/sns/unbind?userId=1090637899&snstype=FB","bind":false},"TAOBAO":{"bindlink":"https://account.xiaomi.com/pass/sns/bind/auth?userId=1090637899&sid=passport&appid=2088011127562160&xcallback=https%3A%2F%2Faccount.xiaomi.com%2Fpass%2Fauth%2Fsns%2Fhome","unbindlink":"https://account.xiaomi.com/pass/auth/sns/unbind?userId=1090637899&snstype=TAOBAO","bind":false},"WEIXIN":{"bindlink":"https://account.xiaomi.com/pass/sns/bind/auth?userId=1090637899&sid=passport&appid=wxxmzh&xcallback=https%3A%2F%2Faccount.xiaomi.com%2Fpass%2Fauth%2Fsns%2Fhome","unbindlink":"https://account.xiaomi.com/pass/auth/sns/unbind?userId=1090637899&snstype=WEIXIN","bind":false}}');
	var els=$(".third_area");
  showBindData(result);
  function showBindData(result){
    els.each(function(index,el){
      el=$(el);
      var type=el.data("type");
      if(type && result[type].bind){
        el.addClass("third_area_binded");
        el.find('.status_bind').children('span').text(MSG.status_binded);
        el.find(".bind-del").text(MSG.status_del);
        el.find(".bind-del").data("url",result[type].unbindlink);
        el.data("status","status-del");
      }else{
        el.removeClass("third_area_binded");
        el.find('.status_bind').children('span').text(MSG.status_unbind);
        el.find(".bind-del").text(MSG.status_add);
        el.find(".bind-del").data("url",result[type].bindlink);
        el.data("status","status-add");
        if(type=="TAOBAO" || type=="WEIXIN"){
          el.hide();
        }
      }		
      el.find(".bind-del").attr("href","javascript:void(0);");
    });
  }
  //成功绑定
  DOMELS.statusSucc.bind('click',function(){
    DOMELS.bindSuccContainer.hide();
    DOMELS.imgavator.removeClass('icon_'+conf.snsType);
    result[conf.snsType].bind=true;
    showBindData(result);
  });
  //添加解除绑定
  var conf={};
  DOMELS.bindDel.bind('click',function(){
    var _self=$(this);
    conf.url=_self.data("url");
    conf.parent=_self.parents();
    conf.bindContainer=conf.parent.parents();
    conf.snsType=conf.bindContainer.data('type');
    conf.status=conf.bindContainer.data('status');    
    conf.thirdName=conf.parent.children('h3').text();
    if(conf.status==="status-del"){
      showUnbindContainer(conf);
    }else if(conf.status==='status-add'){
      openWindow(conf.url,OPEN_WINDOW_NAME);
    }
  });
  
  function showUnbindContainer(conf){
    if(conf){
      DOMELS.imgavator.addClass('icon_'+conf.snsType);
      DOMELS.thirdName.text(conf.thirdName);
      DOMELS.thirdNickname.text(result[conf.snsType].name);
      DOMELS.statusDel.data('url',conf.url);
      DOMELS.statusDel.data('type',conf.snsType);
    }
    DOMELS.unbindContainer.show();
    resize(DOMELS.unbindContainer);
  }
  var userId='1090637899';
  DOMELS.statusDel.bind('click',function(){
    var _self=$(this);
    $.ajax({
      url:_self.data('url'),
      dataType:'text',
      type:'POST',
      data:{
        userId:userId,
        snstype:_self.data('type'),
        passport_ph:getParam('passport_ph'),
        _t:(new Date().getTime())
      },
      success:function(data){
        var json={};
        try{
          json=$.parseJSON(data.replace('&&&START&&&',''));
        }catch(e){}
        if(json.code===0){
          DOMELS.unbindContainer.hide();
          DOMELS.imgavator.removeClass('icon_'+_self.data('type'));
          result[_self.data('type')].bind=false;
          result[_self.data('type')].name='';
          showBindData(result);
        }else{
          showErrorCode(DOMELS.statusDel,MSG.errorcode);
        }
      },
      error:function(){
        showErrorCode(DOMELS.statusDel,MSG.errorcode);
      }
    });
  });
  //初始化授权项
  var authItems=[{"logo":"https://file.static.xiaomi.net/download/AppStore/a6a219e3-712c-44cb-bae7-fa2ab79cb0f4","scope":["获取您的个人资料","获取您米聊中的好友信息"],"link":"https://account.xiaomi.com/pass/auth/sns/unbindoauth?userId=1090637899&appId=2882303761517154077","name":"小米运动"}];
  showAuthData(authItems);
  function showAuthData(authItems){
    var html='';
    if(authItems.length===0){
      showNoAuthTip();
    }else{
      for(var i=0; i<authItems.length; i++){
        html += '<dl id="auth-item-'+i+'" class="third_area c_b">'+
              '<dt><div class="icon_auth"><img src="'+authItems[i].logo+'"></div></dt>'+
              '<dd>'+
                '<h3>'+authItems[i].name+'</h3>'+
                '<div class="status_bind"></div>'+
                '<a class="th_action_btn auth-cancel" href="javascript:void(0);" title="" data-index="'+i+'">'+MSG.status_cancel+'</a>'+
              '</dd>'+
              '<dd class="arrow_r"></dd>'+
            '</dl>';    
      }
      DOMELS.authBox.append(html);
    }
  }
  //取消授权
  $('.auth-cancel').bind('click',function(){
    var _self=$(this);
    var index=_self.data('index');
    conf.index=index;
    conf.applogo=authItems[index].logo;
    conf.appname=authItems[index].name;
    conf.scope=authItems[index].scope;
    conf.authurl=authItems[index].link;
    showAuthCancelContainer(conf);
  });
  function showAuthCancelContainer(conf){
    DOMELS.authlist.empty();
    if(conf){
      DOMELS.appname.text(conf.appname);
      DOMELS.applogo.attr('src',conf.applogo);
      var html='';
      for(var i=0; i<conf.scope.length; i++){
        html += '<li>'+conf.scope[i]+'</li>';
      }
      DOMELS.statusCancel.data('url',conf.authurl);
      DOMELS.statusCancel.data('index',conf.index);
      DOMELS.authlist.append(html);
    }
    DOMELS.authCancelContainer.show();
    resize(DOMELS.authCancelContainer);
  }
  var flag=0;
  DOMELS.statusCancel.bind('click',function(){
    var _self=$(this);
    $.ajax({
      url:_self.data('url'),
      dataType:'text',
      type:'POST',
      data:{
        userId:userId,
        appId:getAppId(_self.data('url')),
        passport_ph:getParam('passport_ph')
      },
      success:function(data){
        try{
          json=$.parseJSON(data.replace('&&&START&&&',''));
        }catch(e){}
        if(json.code===0){
          DOMELS.authCancelContainer.hide();
          //authItems.splice(_self.data('index'),1);
          $('#auth-item-'+_self.data('index')).hide();
          flag++;
          //showAuthData(authItems);
          if(flag===authItems.length){
            showNoAuthTip();
          }
        }else{
          showErrorCode(DOMELS.statusCancel,MSG.errorcode);
        }
      },error:function(){
        showErrorCode(DOMELS.statusCancel,MSG.errorcode);
      }
    });
  });

  function showNoAuthTip(){
    DOMELS.authBox.append('<div class="authmsg">'+MSG.authmsg+'</div>');
  }
  function resize(el){    
    var modacctipCtr=el.find('.mod_acc_tip');
    var marginTop=-parseInt(modacctipCtr.outerHeight()/2);
    modacctipCtr.css('margin-top',marginTop+'px');
  }
  
  function showErrorCode(el,msg){
    var errorCode=el.parent().prev();
    errorCode.show();
    errorCode.text(msg);
  }
  
  
  
	(function(){
		var mibaoLink = document.getElementById('mibao_link');
		if(mibaoLink){
			var href = mibaoLink.getAttribute('href');
			if(location.hostname.indexOf('oneboxhost') !== -1){
				href = href.replace("/sq.id.mi.com/","/oneboxhost.sq.id.mi.com/").replace("https://","http://");
			}
			mibaoLink.setAttribute("href",href);
		}
	})();
</script>



</body></html>