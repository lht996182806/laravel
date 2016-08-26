<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<title>小米帐号 - 小米服务</title>
<link type="text/css" rel="stylesheet" href="pfuwu_files/reset.css">
<link type="text/css" rel="stylesheet" href="pfuwu_files/layout.css">

<style type="text/css">
/*禁用修改头像功能*/
.na-img-area:hover .na-edit{
	display:none;
}
.na-img-area{cursor:default}
body{ overflow-y:scroll;}
</style>
</head>
<body class="zh_CN">
<div class="wrapper blockimportant">
<div class="wrap">

<div class="layout bugfix_ie6 dis_none">
  <div class="n-logo-area clearfix">
    <a href="https://account.xiaomi.com/" class="fl-l">
      <img src="/pfuwu_files/n-logo.png" >
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
        <a href="/pass/auth/sns/home">登录设备</a>
        <em class="n-nav-corner"></em>
      </li>-->
		  <li>
        <a href="/pbang" title="绑定授权">绑定授权</a>
        <em class="n-nav-corner"></em>
      </li>
      <li class="current">
        <a href="/pfuwu" title="小米服务">小米服务</a>
        <em class="n-nav-corner"></em>
      </li>
		</ul>
	</div>
	<div class="n-frame">
		<div class="title-item">
		  <h4 class="title-big dis-inb">您的帐号可以登录以下服务</h4>          
		</div>
		<ul class="n_sevice c_b">
			<li>
				<dl>
					<dt><a target="_blank" class="icon_sv sv5" href="http://www.mi.com/" title="小米官网"></a></dt>
					<dd>
						<h4><a target="_blank" href="http://www.mi.com/" title="小米官网">小米官网</a></h4>
						<p class="nowrap">小米手机，红米手机，小米平板和小米电视官方正品销售网站</p>
					</dd>
				</dl>
			</li>
			<li>
				<dl>
					<dt><a target="_blank" class="icon_sv sv9" href="http://www.miui.com/" title="MIUI"></a></dt>
					<dd>
						<h4><a target="_blank" href="http://www.miui.com/" title="MIUI">MIUI</a></h4>
						<p class="nowrap">发烧友必刷的Android ROM</p>
					</dd>
				</dl>
			</li>
			<li>
				<dl>
					<dt><a target="_blank" class="icon_sv sv4" href="https://i.mi.com/?_locale=zh_CN" title="云服务"></a></dt>
					<dd>
						<h4><a target="_blank" href="https://i.mi.com/?_locale=zh_CN" title="云服务">云服务</a></h4>
						<p class="nowrap">随时随地，管理你的所有设备和数据</p>
					</dd>
				</dl>
			</li>
			
			<li>
				<dl>
					<dt><a target="_blank" class="icon_sv sv8" href="https://mibi.xiaomi.com/" title="米币中心"></a></dt>
					<dd>
						<h4><a target="_blank" href="https://mibi.xiaomi.com/" title="米币中心">米币中心</a></h4>
						<p class="nowrap">轻松安心充值，乐享小米服务</p>
					</dd>
				</dl>
			</li>
			
			
			<li>
				<dl>
					<dt><a target="_blank" class="icon_sv sv3" href="http://app.mi.com/" title="应用商店"></a></dt>
					<dd>
						<h4><a target="_blank" href="http://app.mi.com/" title="应用商店">应用商店</a></h4>
						<p class="nowrap">发现最新最热最好玩的应用</p>
					</dd>
				</dl>
			</li>
			
			
			<li>
				<dl>
					<dt><a target="_blank" class="icon_sv sv1" href="http://zhuti.xiaomi.com/" title="主题商店"></a></dt>
					<dd>
						<h4><a target="_blank" href="http://zhuti.xiaomi.com/" title="主题商店">主题商店</a></h4>
						<p class="nowrap">手机百变换装，从此与众不同</p>
					</dd>
				</dl>
			</li>
			
			
			<li>
				<dl>
					<dt><a target="_blank" class="icon_sv sv7" href="http://www.duokan.com/" title="多看阅读"></a></dt>
					<dd>
						<h4><a target="_blank" href="http://www.duokan.com/" title="多看阅读">多看阅读</a></h4>
						<p class="nowrap">海量畅销电子书免费试读，数百万读者阅读首选</p>
					</dd>
				</dl>
			</li>
			
			<li>
				<dl>
					<dt><a target="_blank" class="icon_sv sv2" href="http://www.miliao.com/" title="米聊"></a></dt>
					<dd>
						<h4><a target="_blank" href="http://www.miliao.com/" title="米聊">米聊</a></h4>
						<p class="nowrap">轻松社交，米粉乐园</p>
					</dd>
				</dl>
			</li>
			
				<li>
					<dl>
						<dt><a target="_blank" class="icon_sv sv6" href="http://bbs.xiaomi.cn/" title="小米社区"></a></dt>
						<dd>
							<h4><a target="_blank" href="http://bbs.xiaomi.cn/" title="小米社区">小米社区</a></h4>
							<p class="nowrap">小米手机官方论坛</p>
						</dd>
					</dl>
				</li>
				
		</ul>     	
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
  <p class="nf-intro"><span>小米公司版权所有-京ICP备10046444-<a href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11010802020134" class="beianlink beian-record-link" target="_blank"><span><img src="/pfuwu_files/ghs.png"></span>京公网安备11010802020134号</a>-京ICP证110507号</span></p>
</div>
<script src="/pfuwu_files/jquery-1.js"></script>
<script src="/pfuwu_files/placeholder.js"></script>

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



	<script>
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