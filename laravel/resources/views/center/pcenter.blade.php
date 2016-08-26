<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0, maximum-scale=1.0,user-scalable=no">
	<title>小米帐号 - 帐号安全</title>
	<script>
		var userPhoneList=[];
		userPhoneList.push({address:"185******30",key:"624E4F7339B1617A"});
	</script>
	<link type="text/css" rel="stylesheet" href="/cent_files/reset.css">
	<link type="text/css" rel="stylesheet" href="/cent_files/layout.css">
	<link type="text/css" rel="stylesheet" href="/cent_files/modacctip.css">

	
	<style type="text/css">
		.score_1{color:rgb(255,0,0)}
		.score_2{color:rgb(255,102,0)}
		.score_3{color:rgb(255,204,0)}
		.score_4{color:rgb(51,204,0)}
		.score_bg_1{background-color:rgb(255,0,0)}
		.score_bg_2{background-color:rgb(255,102,0)}
		.score_bg_3{background-color:rgb(255,204,0)}
		.score_bg_4{background-color:rgb(51,204,0)}
		.score_outer_1 em{color:rgb(255,0,0)}
		.score_outer_2 em{color:rgb(255,102,0)}
		.score_outer_3 em{color:rgb(255,204,0)}
		.score_outer_4 em{color:rgb(51,204,0)}
		/*禁用修改头像功能*/
		.na-img-area:hover .na-edit{
			display:none;
		}
		.na-img-area{cursor:default}
		/*叹号垂直居中*/
		.error-tip{
			line-height: 1.0;
		}
		/*米号可复制*/
		.na-num{
			position: relative;
			z-index: 10;
		}
		/*解决英文被垂直遮挡*/
		.font-img-item{
			height: 42px;
		}
		/*统一颜色*/
		.color-active{
			color:rgb(255,102,0)!important;
		}
		/*tip additionals*/
		/*
		.tip, .mod_acc_tip{
			position:fixed;
			top:50%;
			left:50%;
			margin-left:-212px;
			margin-top: -266px;
			z-index:20;
		}
		*/
		.tip_h295{
			margin-top: -152px;
		}
		.tip_h424{
			margin-top: -218px;
		}
		.tip_h436{
			margin-top: -224px;
		}
		/*动态select的布局*/
		#popSetMibao .i_currentselected{
			width: auto !important;
		}
		#popSetMibao .i_selectoption{
			width: 100% !important;
		}
		#popSetMibao .set_qst li{
			width: 190px;
		}
		#popSetMibao .set_qst label{
			/*height: 22px;*/
			width: 185px;
		}
		#popAnswerMibao .set_qst label{
			height: 22px;
			width:175px;
			display: block;
		}
		#popAnswerMibao .set_qst li{
			height: 60px;
		}
		/*显示和隐藏备用手机*/
		#popManageTokenStatus dd .no_fb_mobile{	
			display: block;
		}
		#popManageTokenStatus dd .fb_mobile{
			display: none;
		}
		#popManageTokenStatus .has_fb_mobile .no_fb_mobile{
			display: none;
		}
		#popManageTokenStatus .has_fb_mobile .fb_mobile{
			display: block;
		}
		/*popup的遮层*/
		.popup_mask .mod_wrap{
			height: 100%;
			overflow-y: auto;
			position: absolute;
			width: 100%;
			z-index: 1;
		}
		.popup_mask .mod_acc_tip{
			display:none;
			position:absolute;
			left:50%;
			margin-left:-206px;
			top:50%;
			margin-top:-187px;
			_top: 500px;
		}
		/*某些要在前面的对话框*/
		.callable{
			z-index: 200;
		}
		/*vertically center*/
		#popSetMibao, #popAnswerMibao, #popManageTokenStatus, #popManageTokenKeys{
			top:0;
			margin-top: 0;
		}
		/*下拉框限高*/
		.i_selectoption {
			height: 150px;
		}
		/*已完成安装*/
		#popManageTokenDownload .tip_btns .installed{
			display:inline-block;
		}
		#popManageTokenDownload .tip_btns .goback{
			display:none;
		}
		#popManageTokenDownload .token_enabled .installed{
			display:none;
		}
		#popManageTokenDownload .token_enabled .goback{
			display:inline-block;
		}
		/*IE6*/
		#popUpdatePassword .capt_box{
			display: none;
		}
		/*sms not sent*/
		#sms-unsent{
			width:100%;
			height:100%;
			position:fixed;
			_position:absolute;
			left:0;
			top:0;
			z-index:10000;
			display:none;
		}
		#sms-unsent .bg{
			width:100%;
			height:100%;
			position:absolute;
			left:0;
			top:0;
			z-index:-1;
			filter:alpha(opacity=70);
			-moz-opacity:.7;
			opacity:.7;
			background-color:#aaa;
		}
		#sms-unsent .msg-box{
			width:560px;
			height:200px;
			position:absolute;
			left:50%;
			top:50%;
			margin-left:-280px;
			margin-top:-100px;
			background-color:#fff;
		}
		#sms-unsent .msg-box .text{
			position:absolute;
			text-align:center;
			top:56px;
			font-size:18px;
			color:#585858;
			width:500px;
		}
		#sms-unsent .msg-box .button{
			position:absolute;
			text-align:center;
			top:100px;
			width:120px;
			height:40px;
			color:#333;
			border:1px solid #dadada;
			left:50%;
			margin-left:-61px;
			cursor:pointer;
			line-height:40px;
			font-size:16px;
			-webkit-border-radius:1px;
			-moz-border-radius:1px;
			border-radius:1px;
		}
		/*干掉该死的IE6的遮罩问题*/
		#loadingMask .bkc{
			_height:2000px;
		}
		/*wap*/
		.bugfix_ie6,
		.n-account-area-box{ display:block;}	
		/*hide default options*/
		.def-opt{
			display: none;
		}
		#popEnterNewPhone{
			margin-top:-250px;
		}
		.del-account-deny h4{
		  font-size:14px;
		  font-weight:normal;
		}
		.del-account-deny-content{
		  list-style:disc;
		  font-fize:14px;
		}
		.del-account-deny-content  li{
		  list-style:disc;
		  font-fize:14px;
		}
	</style>
    <style type="text/css" media="print">
    	.n-logo-area .logout,
    	.n-account-area,
    	.n-frame,
    	.n-main-nav,
    	.n-footer{display : none; }
    </style>
</head>
<body style="overflow-y: scroll;" class="zh_CN">
	<div class="popup_mask" style="display: none;" id="loadingMask">
		<div class="bkc"></div>
		<div class="mod_wrap loadingmask">	
		</div>
	</div>
    <div class="wrapper blockimportant">
        <div class="wrap">

            <div class="layout bugfix_ie6 dis_none">
                <div class="n-logo-area clearfix">
                    <a href="/hindex" class="fl-l">
                        <img src="/cent_files/n-logo.png" >
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
        <ul>
          <li class="current">
            <a href="/pcenter">帐号安全</a>
            <em class="n-nav-corner"></em>
          </li>
          <li>
            <a href="/pmessage">个人信息</a>
            <em class="n-nav-corner"></em>
          </li>
          <!--<li>
            <a href="">登录设备</a>
            <em class="n-nav-corner"></em>
          </li>-->
          <li>
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
          <h4 class="title-big dis-inb">安全等级</h4>
          <em class="space6"></em>
          <p class="font-normal dis-inb wap_colb2"><em class="light-num" style="padding:0">
			  	
						<span class="score_1">50</span>
					
		  </em>分</p>
          <div class="slider-area dis-inb vert-m" style="width:360px;">
            <div class="slider-bar-bg"></div>
            <div class="slider-bar-line score_bg_1" style="width:50%;"></div>
            <em class="drag-ico" style="left:50%"></em>
          </div>
          <p class="font-normal dis-inb security_level_txt">
		  
				<span class="score_outer_1">存在<em class="light-num">2</em>项风险</span>
			
		  </p>
        </div>
      	<ul class="device-detail-area">
          <li id="changePassword" class="click-row">
            <div class="font-img-item clearfix">
              <em class="fi-ico fi-ico-lock"></em>
              <p class="title-normal dis-inb">帐号密码</p>
			  
					<p class="font-default">
						用于保护帐号信息和登录安全
					</p>
				
			  
			  
					<span class="title-normal wap-desc" >
						修改
					</span>
					
				<i class="arrow_r"></i>
        	  </div>
			  
					
				
            <div class="ada-btn-area" id="btnUpdatePassword">
              <a onclick="newAdd()" class="n-btn">修改</a>
            </div>
          </li>
          <li id="changeEmail" class="click-row">
            <div class="font-img-item clearfix">
              <em class="fi-ico fi-ico-email"></em>
              <p class="title-normal dis-inb">安全邮箱</p>
							
								<span class="warning-tip">&nbsp;</span>
							
			  <span class="title-normal wap-desc">
			  <span class="color-active">未绑定</span>
					
			  </span>
			  
			  	
				
						<p class="font-default color-active">安全邮箱将可用于登录小米帐号和重置密码，建议立即设置</p>
					
				<i class="arrow_r"></i>				
          	</div>
            <div class="ada-btn-area" id="btnUpdateEmail">
				
					<!--无地址-->
						<a __href="/pass/bindAddress?userId=1090637899&amp;type=EM&amp;replace=false&amp;address=" class="n-btn">绑定</a>
					
            </div>
          </li>
          <li id="changeMobile" class="click-row">
            <div class="font-img-item clearfix">
				<em class="fi-ico fi-ico-phone"></em>
				<p class="title-normal dis-inb">安全手机</p>
								
				<span class="title-normal wap-desc">
				
						185******30<span class="ph_list_sum phone-list-sum" data-title="等&lt;span class='ff6'&gt;{phsum}&lt;/span&gt;个"></span>
						
					 
				</span>
			  
				
					<div class="wap-info">
						185******30
						
					</div>
					 
				
						
							<p class="font-default">安全手机可以用于登录小米帐号，重置密码或其他安全验证</p>
						
						
					 
				<i class="arrow_r"></i>
            </div>
            <div class="ada-btn-area" id="btnUpdatePhone">
              <a class="n-btn btnBindMobile" __href="/pass/bindAddress?userId=1090637899&amp;type=PH&amp;replace=false" data-mode="add">添加</a>
            
              <a class="n-btn btnChangeMobile" __href="/pass/bindUserAddress?userId=1090637899&amp;type=PH" data-mode="update">
                修改
              </a>
            
            </div>
          </li>
          <li id="setMibao" class="click-row">
            <div class="font-img-item clearfix">
              <em class="fi-ico fi-ico-secret"></em>
              <p class="title-normal dis-inb">密保问题</p>
			  	<span class="warning-tip">&nbsp;</span><p class="font-default color-active">密保问题用于安全验证，建议立即设置</p>
					
				<span class="title-normal wap-desc color-active">未设置</span>
					
				<i class="arrow_r"></i>				
            </div>
            <div class="ada-btn-area" id="btnSetMibao">
			  	<a id="mibao_link" __href="" class="n-btn">设置</a>
					 
            </div>
          </li>
      	</ul>
		<!--
        <div class="title-item">
          <h4 class="title-big dis-inb">
			  	
					 
		  </h4>
        </div>
		-->
	</div>
		<div class="n-frame device_recommend">
			<div class="title-item title_security_wap">
				<h4 class="title-big dis-inb">推荐使用</h4>
			</div>
			<ul class="device-detail-area">
			  <li class="click-row">
				<div class="font-img-item clearfix">
				  <em class="fi-ico fi-ico-token"></em>
				  <p class="title-normal dis-inb">小米安全令牌</p>
				   
						<p class="font-default">在非信任设备上登录需要二次验证，防止他人恶意登录</p>
					   
				   
						<span class="title-normal wap-desc color-active">开启</span>
					   
					<i class="arrow_r"></i>
				</div>
				<div class="ada-btn-area" id="btnManageToken">
				   
						<a __href="/pass/2StepLogin/explain?userId=1090637899" class="n-btn">开启</a>
					   
				</div>
			  </li>
			</ul>
    </div>
    <div class="n-frame dis_none_pc">
      <div class="title-item title_security_wap">
				<h4 class="title-big dis-inb">其他</h4>
			</div>
      <ul class="device-detail-area">
        <li>
          <div class="font-img-item clearfix">
            <em class="fi-ico fi-ico-info"></em>
            <p class="title-normal dis-inb">修改个人资料</p>
            <span class="title-normal wap-desc"></span>
            <i class="arrow_r"></i>
            <a class="pos_opc" href="">修改个人资料</a>
          </div>
        </li>
        <li>
          <div class="font-img-item clearfix">
            <em class="fi-ico fi-ico-auth"></em>
            <p class="title-normal dis-inb">绑定授权</p>
            <span class="title-normal wap-desc"></span>
            <i class="arrow_r"></i>
            <a class="pos_opc" href="">绑定授权</a>
          </div>
        </li>
      </ul>
    </div>
    <div class="logout_wap">
      <a class="btnadpt bg_white" href="">退出</a>
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
    
      |<li><a class="a_critical" href="" target="_blank"><em></em>常见问题</a></li>
    
  </ul>
  </div>
    <p class="nf-intro">
        <span>小米公司版权所有-京ICP备10046444-
              <a target="_blank">
                  <span>
                     <img src="/cent_files/ghs.png">
                  </span>京公网安备11010802020134号
              </a>-京ICP证110507号
        </span>
    </p>
</div>


<script type="text/javascript" src="/home/js/jquery-1.8.3.min.js"></script>

<script src="/admin/layer/layer.js"></script>
<script type="text/javascript">
   function newAdd(){
        
        layer.open({
          type: 2,
          title: '修改密码',
          shadeClose: true,
          shade: 0.8,
          area: ['450px', '95%'],
          content: 'http://www.lht.com/center/modifypass' //iframe的url
        }); 
    }
</script>








<!--TIPS s-->
<!-- 修改密码 s -->
<div class="popup_mask">
		<div class="bkc"></div>
	<div class="mod_wrap">
		<div id="popUpdatePassword" class="mod_acc_tip" style="display:none;">
			<div class="mod_tip_hd">
				<h4>修改密码</h4>
				<a class="btn_mod_close" href="" title=""><span>关闭</span></a>
			</div>
			<div class="mod_tip_bd">
				<div class="modify_pwd">
					<dl>
						<dt>原密码</dt>
						<dd class="grpOldPass">
							<label class="labelbox"><input class="oldPass" placeholder="输入原密码" autocomplete="off" disableautocomplete="" type="password"></label>
							<!-- 错误信息提示 -->
							<div _text="原密码不正确" class="wng_pwd err_tip err_tip_independ" style="display:none;">原密码不正确</div>
							<div _text="原密码不能为空" class="empty_pwd err_tip err_tip_independ" style="display:none;">原密码不能为空</div>
						</dd>
						<dt>新密码</dt>
						<dd class="grpNewPass">
							<label class="labelbox"><input class="newPass" placeholder="输入新密码" autocomplete="off" disableautocomplete="" type="password"></label>
							<label class="labelbox"><input class="newPass2" placeholder="重复新密码" autocomplete="off" disableautocomplete="" type="password"></label>
							<!-- 错误信息显示时隐藏 -->
							<div _text="两次输入的新密码不一致" class="pwd_mismatch err_tip_independ err_tip" style="display:none;">两次输入的新密码不一致</div>
							<!-- 错误信息显示时隐藏 -->
							<div _text="新密码不能为空" class="empty_pwd err_tip_independ err_tip" style="display:none;">新密码不能为空</div>
							<!-- 错误信息显示时隐藏 -->
							<div _text="请重复新密码" class="empty_pwd2 err_tip_independ err_tip" style="display:none;">请重复新密码</div>
							<!-- 错误信息显示时隐藏 -->
							<div _text="密码长度8~16位，其中数字，字母和符号至少包含两种" class="pwd_fmt err_tip_independ err_tip" style="display:none;">密码长度8~16位，其中数字，字母和符号至少包含两种</div>
							<!-- 错误信息显示时隐藏 -->
							<div _text="不能与原密码相同" class="same_pwd err_tip_independ err_tip" style="display:none;">不能与原密码相同</div>
							<!-- 错误信息显示时隐藏 -->
							<div _text="您的操作频率过快，请稍后再试。" class="too_much err_tip_independ err_tip" style="display:none;">您的操作频率过快，请稍后再试。</div>
							<!-- 错误信息显示时隐藏 -->
							<div _text="密码不能与邮箱相同" class="eq_email err_tip_independ err_tip" style="display:none;">密码不能与邮箱相同</div>
							<div _text="您的密码可能存在安全风险，请您重新设置一个全新的密码" class="pwd_in_black err_tip_independ err_tip" style="display:none;">您的密码可能存在安全风险，请您重新设置一个全新的密码</div>
              <div _text="新密码格式错误" class="repwd_format_error err_tip_independ err_tip" style="display:none;">新密码格式错误</div>
							<!-- 错误信息提示去掉class=txt_tip -->
							<div _text="密码长度8~16位，其中数字，字母和符号至少包含两种" class="txt_tip">密码长度8~16位，其中数字，字母和符号至少包含两种</div>		

							<div _text="系统错误。错误码：" style="display:none;" class="sys_err err_tip err_tip_independ">系统错误。错误码：<span class="err_code"></span></div>						
						</dd>
						<!--3次后弹出-->
						<dl class="capt_box" style="display:none;">
							<span></span>
							<dt>验证码</dt>
							<dd class="inputcode">
								<label class="labelbox chkcode"><input placeholder="输入验证码" autocomplete="off" disableautocomplete="" type="text"></label>
								<img class="chkcode_img" alt="">
								<a href="" title="换一张" class="next_capt hidden">换一张</a>
							</dd>
							<div _text="验证码不正确，请重新输入" style="display:none;" class="wng_capt err_tip err_tip_independ">验证码不正确，请重新输入</div>
							<div _text="验证码不能为空" style="display:none;" class="empty_capt err_tip err_tip_independ">验证码不能为空</div>
						</dl>
					</dl>				
				</div>
				<div class="tip_btns">
					<a class="btn_tip btn_commom btnOK" href="" title="确定">确定</a>
					<a class="btn_tip btn_back btnCancel" href="" title="取消">取消</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- 修改密码 e -->
<!-- 修改密码成功 s -->
<div class="popup_mask">
    <div class="bkc"></div>
	<div class="mod_wrap">
		<div class="mod_acc_tip" id="popUpdatePasswordSuccess" style="display:none">
			<div class="mod_tip_hd">
				<h4>修改密码</h4>
				<a class="btn_mod_close" href="" onclick="javascript:void location.reload(true);" title=""><span>关闭</span></a>
			</div>
			<div class="mod_tip_bd">
				<div class="wapbox">
					<div class="t_c mar30">
						<div class="txt_ff6"><em class="acctip_icon acctip_icon_2"></em>成功修改密码</div>							
					</div>
					<div class="t_c mar30">			
						<p><span class="logoutCountdown"></span> 秒后自动登出，请重新登录</p>							
					</div>
				</div>
				<div class="tip_btns wap_btn_abs">
					<a class="btn_tip btn_commom btnReturn" href="https://account.xiaomi.com/" title="立即重新登录">立即重新登录</a>					
				</div>
			</div>
		</div>
	</div>
</div>
<!-- 修改密码成功 e -->

<!-- 绑定手机发送验证码 s -->
<div class="popup_mask">
    <div class="bkc"></div>
	<div class="mod_wrap">
		<div class="mod_acc_tip" id="popVerifyMobile" style="display:none;">
			<div class="mod_tip_hd">
				<h4>安全验证</h4>
				<a class="btn_mod_close" href="" title=""><span>关闭</span></a>
			</div>
			<div class="mod_tip_bd">
				<div class="disten30x103">
					<h6>我们向您的手机 <em>185******30</em> 发送了一条验证短信</h6>
					<div class="mod inputsend">
						<label class="input_bg"><input class="remain_input" placeholder="请输入验证码" type="text"></label>
						<span class="remain">
							<a title="重新发送" class="resend">重新发送</a>
							<!--<tt style="display:none;">30秒</tt>-->
						</span>					
					</div>
				</div>				
				<div class="tip_btns">
					<a class="btn_tip btn_commom" href="" title="确定">确定</a>
					<a class="btn_tip btn_back" href="" title="取消">取消</a>
				</div>
				<div class="txt_qst"><em class="icon_qst"></em><a href="http://static.account.xiaomi.com/html/faq/faqSMSerror.html" target="_blank" title="我为何收不到验证码？">我为何收不到验证码？</a></div>
				
			</div>
		</div>
	</div>
</div>
<!-- 绑定手机发送验证码 e -->
<!-- phonePanel s-->
<div class="popup_mask callable">
  <div class="bkc"></div>
  <div class="mod_acc_tip" id="phonePanel" style="display:none">
    <div class="mod_tip_hd">
      <h4>
        修改安全手机
      </h4>
      <a class="btn_mod_close" href="" title=""><span>关闭</span></a>
    </div>
    <div class="mod_tip_bd">
      <div class="phone-panel-main">
        <div class="ph_panel_tit phone-panel-main-title">
          请选择您要修改的手机号码
        </div>
        <div class="ph_list_panel phone-panel-list">
          <ul class="phone_panel_list_con md_way">
          </ul>
        </div>
        <div class="tip_btns phone-panel-main-button">
          <a class="btn_tip btn_commom" data-action="update">修改号码</a>
          <a class="btn_tip btn_back" data-action="delete">删除号码</a>
        </div>
      </div>
      <div class="ph_del_panel phone-panel-del" style="display:none">
        <div data-title-tpl="确认要删除绑定手机&lt;span class='ff6'&gt;{phone}&lt;/span&gt;吗" class="ph_del_tit phone-panel-del-title"></div>
        
        <p><i class="icon_tanhao"></i>删除后将无法使用此手机登录小米帐号</p>
        <div class="ph_del_box">
          <p>请输入完整的手机号：</p>
          <div class="inputbg fill_center_box">
            <span class="phone-blank-prefix"></span>
            <label class="labelbox del_ph_lbx"><input name="delphone" type="text"></label>
            <span class="phone-blank-suffix"></span>
          </div>
        </div>
        <div _text="
          
        " class="err_tip">
          <em class="icon_error"></em><span class="del-error"></span>
        </div>
        <div class="tip_btns phone-panel-del-button">
          <a class="btn_tip btn_commom" data-action="delete">确定</a>
          <a class="btn_tip btn_back" data-action="cancel">取消</a>
        </div>
      </div>
      <div class="ph_del_success phone-panel-del-success" style="display:none">
        <div class="ph_del_tit t_c">成功删除绑定手机<span class="ff6 del-ph-num"></span></div>
        <div class="tip_btns wap_btn_abs">
          <a class="btn_tip btn_commom" data-action="success">完成</a>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- phonePanel e-->
<!-- 绑定安全手机 s -->
<div class="popup_mask callable">
    <div class="bkc"></div>
	<div class="mod_wrap">
	<div class="mod_acc_tip" id="popEnterNewPhone" style="display:none">
		<div class="mod_tip_hd">
			<h4>
				
						修改安全手机
					
			</h4>
			<a class="btn_mod_close" href="" title=""><span>关闭</span></a>
		</div>
		<div class="mod_tip_bd">
			<div class="tabbar_panel">
				<div class="tabbar">
					<div class="tab_opt c_b">
					<!--
						<span>安全确认</span>
					-->
						<!-- 选中添加class为now -->
						<span class="phonetab1 now">输入新手机</span>
						<span class="phonetab2">验证新手机</span>
						<span class="phonetab3 end">完成</span>
					</div>
					<div class="tabline c_b">
						<i class="now"></i>
						<i></i>					
						<i class="end"></i>
					</div>
				</div>
			</div>
			<div class="wapbox">
				<dl class="binding phonestep1">
					<dt>请输入安全手机号码</dt>
					<dd class="zindex_4">
						<div class="tits set_qst_tit">
							<p class="c_b"><span>中国</span><em>+86</em></p>
							<i class="icon_cirarr"></i>
						</div>
				
					</dd>
					<dd>
						<label class="input_bg"><input class="new_phone" placeholder="请输入手机号码" autocomplete="off" disableautocomplete="" type="tel"></label>
						<input class="full_new_phone" value="" autocomplete="off" disableautocomplete="" type="hidden">
						<div _text="手机号码格式错误" class="err_tip wng_fmt err_tip_independ" style="display:none">手机号码格式错误</div>
						<div _text="请输入手机号码" class="err_tip empty_phone err_tip_independ" style="display:none">请输入手机号码</div>
						<div _text="该号码已绑定" class="err_tip phone_bound err_tip_independ" style="display:none">该号码已绑定</div>
						<div _text="该号码已绑定到其它帐号上" class="err_tip phone_bound_elsewhere err_tip_independ" style="display:none">该号码已绑定到其它帐号上</div>
						<div _text="安全手机不能与备用手机相同" class="err_tip dupl_phone err_tip_independ">安全手机不能与备用手机相同</div>
            <div _text="您发送了过多的验证信息，请一天之后再次尝试。" class="err_tip reach_max err_tip_independ">您发送了过多的验证信息，请一天之后再次尝试。</div>
					</dd>
					<dd class="inputcode">
						<label class="input_bg chkcode"><input placeholder="请输入验证码" class="capt_box" autocomplete="off" disableautocomplete="" type="text"></label>
						<img class="chkcode_img" src="/cent_files/getCode" _src="/pass/getCode?icodeType=antispam" alt="">
						<a class="color333 hidden" href="" title="换一张">换一张</a>
					</dd>
					<div _text="请输入验证码" class="err_tip empty_capt err_tip_independ" style="display:none">请输入验证码</div>
					<div _text="验证码不正确，请重新输入" style="display:none;" class="err_tip wng_capt err_tip_independ">验证码不正确，请重新输入</div>
					<div _text="系统错误，请稍候再试" class="err_tip sys_err err_tip_independ" style="display:none">系统错误，请稍候再试</div>
					<div _text="参数错误" class="err_tip bad_param err_tip_independ" style="display:none">参数错误</div>
					<div class="tip_btns">
						<a class="btn_tip btn_commom" href="" title="下一步">下一步</a>					
					</div>
				</dl>	
				<dl class="verify" style="display:none">
					<div class="disten30x103 phonestep2">
						<h6 class="pb10">我们向您的手机 <em> </em>发送了一条验证短信 <br>请输入短信中的验证码</h6>
						<div class="mod inputsend">
							<label class="input_bg"><input class="phone_capt remain_input" placeholder="请输入验证码" autocomplete="off" disableautocomplete="" type="text"></label>
							<span class="remain">
								<a disabled="disabled" disableautocomplete="true" autocomplete="off" class="resend noSend" href="javascript:void(0);" title="重新发送">重新发送</a>
							</span>					
						</div>
						<div _text="请输入验证码" class="err_tip empty_capt err_tip_independ" style="display:none">请输入验证码</div>
						<div _text="验证码错误或已过期" class="err_tip wng_capt err_tip_independ" style="display:none;">验证码错误或已过期</div>
						<div _text="此手机在一段时间内绑定了过多的小米帐号，请换个手机号码试试" class="err_tip phone_used err_tip_independ" style="display:none;">此手机在一段时间内绑定了过多的小米帐号，请换个手机号码试试</div>
						<div _text="" class="err_tip sms_custom err_tip_independ" style="display:none;"><div class="text"></div></div>
						<div _text="您今天还能发送条短信" class="err_tip quota_tip" id="quotaTextLabel">您今天还能发送<b style="display:inline;font-weight:normal;" id="quotaLabel"></b>条短信</div>
					</div>				
					<div class="tip_btns">
						<a class="btn_tip btn_commom" href="" title="确定">确定</a>
						<a class="btn_tip btn_back" href="" title="取消">取消</a>
					</div>
					<div class="txt_qst"><em class="icon_qst"></em><a target="_blank" href="http://static.account.xiaomi.com/html/faq/faqSMSerror.html" title="我为何收不到验证码？">我为何收不到验证码？</a></div>
				</dl>
				<dl style="display:none" class="success">
					<div class="t_c">
						<h4>
						
								您已成功修改安全手机！
							
						</h4>
					</div>
					<div class="tip_btns wap_btn_abs">
						<a class="btn_tip btn_commom" href="" title="返回我的帐号">返回我的帐号</a>					
					</div>
				</dl>
			</div>
		</div>
	</div>
	</div>
</div>
<!-- 绑定安全手机 e -->
<!-- 绑定安全邮箱 s -->
<div class="popup_mask callable">
    <div class="bkc"></div>
	<div class="mod_wrap">
	<div class="mod_acc_tip" id="popEnterNewEmail" style="display:none;">
		<div class="mod_tip_hd">
			<h4>
				
						绑定安全邮箱
					
			</h4>
			<a class="btn_mod_close" href="" title=""><span>关闭</span></a>
		</div>
		<div class="mod_tip_bd">
			<div class="tabbar_panel">
				<div class="tabbar">
					<div class="tab_opt c_b">
						<!-- 选中添加class为now -->
						<span class="mailtab1 now">输入新邮箱</span>
						<span class="mailtab2">验证新邮箱</span>
						<span class="mailtab3 end">完成</span>
					</div>
					<div class="tabline c_b">
						<i class="now"></i>
						<i></i>
						<i class="end"></i>
					</div>
				</div>
			</div>
			<div class="wapbox">
				<dl class="binding mailstep1">
					<dt>请输入新的安全邮箱地址</dt>					
					<dd>
						<label class="input_bg"><input placeholder="请输入邮箱" class="new_email" autocomplete="off" disableautocomplete="" type="text"></label>
					</dd>
					<div _text="邮箱格式错误" class="err_tip wng_fmt err_tip_independ" style="display:none">邮箱格式错误</div>
					<div _text="请输入邮箱地址" class="err_tip empty_email err_tip_independ" style="display:none">请输入邮箱地址</div>
					<div _text="该邮箱地址已绑定" class="err_tip email_bound err_tip_independ" style="display:none">该邮箱地址已绑定</div>
					<div _text="该邮箱地址已被其他帐号绑定" class="err_tip email_bound_elsewhere err_tip_independ" style="display:none">该邮箱地址已被其他帐号绑定</div>
					<div _text="参数错误" class="err_tip bad_param err_tip_independ" style="display:none">参数错误</div>
					<dd class="inputcode">
						<label class="input_bg chkcode"><input placeholder="请输入验证码" class="capt_box" autocomplete="off" disableautocomplete="" type="text"></label>
						<img class="chkcode_img" src="/cent_files/getCode" _src="/pass/getCode?icodeType=antispam" alt="">
						<a class="color333 hidden" href="" title="换一张">换一张</a>
					</dd>
					<div _text="请输入验证码" style="display:none;" class="err_tip empty_capt err_tip_independ">请输入验证码</div>
					<div _text="验证码不正确，请重新输入" style="display:none;" class="err_tip wng_capt err_tip_independ">验证码不正确，请重新输入</div>
					<div _text="系统错误，请稍候再试" class="err_tip sys_err err_tip_independ" style="display:none">系统错误，请稍候再试</div>
          <div _text="您发送了过多的验证信息，请一天之后再次尝试。" style="display:none;" class="err_tip reach_max err_tip_independ">您发送了过多的验证信息，请一天之后再次尝试。</div>
					<div class="tip_btns">
						<a class="btn_tip btn_commom" href="" title="下一步">下一步</a>					
					</div>
				</dl>
				<dl class="verify" style="display:none;">	
					<div class="disten30x103 mailstep2">
						<h6 class="doub_ln">我们向 <em></em> 发送了验证邮件<br>请输入邮件中的验证码</h6>				
						<div class="mod inputsend">
							<label class="input_bg"><input placeholder="请输入验证码" class="capt_box remain_input" autocomplete="off" disableautocomplete="" type="text"></label>
							<span class="remain">
								<a title="重新发送" class="resend">重新发送</a>
							</span>
							
						</div>
						<!-- 错误信息提示 -->
						<div _text="请输入验证码" style="display:none;" class="err_tip empty_capt err_tip_independ">请输入验证码</div>
						<div _text="验证码错误或已过期" style="display:none;" class="err_tip wng_capt err_tip_independ">验证码错误或已过期</div>		
						<div _text="系统错误，请稍候再试" style="display:none;" class="err_tip sys_err err_tip_independ">系统错误，请稍候再试</div>
            <div _text="您今天还能发送{left}次邮件" class="err_tip quota_tip" id="emailQuotaTextLabel">您今天还能发送{left}次邮件</div>
					</div>				
					<div class="tip_btns">
						<a class="btn_tip btn_commom" href="" title="确定">确定</a>
						<a class="btn_tip btn_back" href="" title="取消">取消</a>
					</div>
					<div class="txt_qst"><em class="icon_qst"></em><a target="_blank" href="http://static.account.xiaomi.com/html/faq/faqRegisterReceiveCheckNum.html" title="一直收不到验证邮件">一直收不到验证邮件</a></div>
				</dl>
				<dl style="display:none;" class="success">	
					<div class="t_c">
						<h4>
						
								您已成功绑定安全邮箱！
							
						</h4>
					</div>
					<div class="tip_btns wap_btn_abs">
						<a class="btn_tip btn_commom" href="" title="返回我的帐号">返回我的帐号</a>					
					</div>
				</dl>
			</div>
		</div>
	</div>
	</div>
</div>
<!-- 绑定安全邮箱 e -->
<!-- 设置密保问题 s -->
<div class="popup_mask">
    <div class="bkc"></div>
	<div class="mod_wrap">
	<div class="mod_acc_tip" id="popSetMibao" style="display:none">
		<form id="frmSetQuestions" target="fraSetMibao" action="/pass/auth/security/setSafeQuestions" method="POST">
		<div class="mod_tip_hd">
			<h4>设置密保问题</h4>
			<a class="btn_mod_close" href="" title=""><span>关闭</span></a>
		</div>
		<div class="mod_tip_bd">
			<div class="wapbox rember_mibaoqst">
				<h4>请牢记您的密保问题</h4>
        <div class="select-area">
		<ul class="set_mibao c_b">
		  <li>
          <dl class="login-dl clearfix">
            <dd class="dd_r clearfix">
              <select class="iselect" autocomplete="off" disableautocomplete="">
                <optgroup label="家属信息" _type="0">
                  <option value="" _role="default" class="def-opt" selected="selected">请选择密保问题</option>
                  <option value="1" _answertip="">您外婆的姓名</option>
                  <option value="2" _answertip="">您外公的姓名</option>
                  <option value="3" _answertip="">您爷爷的姓名</option>
                  <option value="4" _answertip="">您奶奶的姓名</option>
                  <option value="5" _answertip="">您父亲的生日</option>
                  <option value="6" _answertip="">您母亲的生日</option>
                  <option value="7" _answertip="">您父母的生日相差几年几个月</option>
                </optgroup>
                <optgroup label="学校信息" _type="1">
                  <option value="8" _answertip="">您高中三年级班主任的名字</option>
                  <option value="9" _answertip="">您小学六年级班主任的名字</option>
                  <option value="10" _answertip="">您大学时的学号</option>
                  <option value="11" _answertip="">您大学本科时的上/下铺叫什么名字</option>
                  <option value="12" _answertip="">您大学的导师叫什么名字</option>
                </optgroup>
                <optgroup label="个人信息" _type="2">
                  <option value="13" _answertip="">您父母称呼您的昵称</option>
                  <option value="14" _answertip="">您身份证号后六位</option>
                  <option value="15" _answertip="">您出生的医院名称</option>
                  <option value="16" _answertip="">您最好的朋友叫什么名字</option>
                </optgroup>
                <optgroup label="各种第一次" _type="3">
                  <option value="17" _answertip="">您第一个宠物的名字</option>
                  <option value="18" _answertip="">您的第一任男朋友/女朋友姓名</option>
                  <option value="19" _answertip="">您第一家任职的公司名字</option>
                </optgroup>
                <optgroup label="婚姻相关" _type="4">
                  <option value="20" _answertip="">您领结婚证的日子</option>
                  <option value="21" _answertip="">您配偶的名字</option>
                  <option value="22" _answertip="">您配偶的生日</option>
                </optgroup>
              </select>
            </dd>
            <dd class="dd_l clearfix">
              <label class="input_bg"><input class="input_kuang errortip" placeholder="" autocomplete="off" disableautocomplete="" isrequired="true" type="text"></label>
              <span _text="" class="error-mes err_tip err_tip_independ" style="display:block;"></span>
            </dd>
          </dl>
		  </li>
		  <li>
          <dl class="login-dl clearfix">
            <dd class="dd_r clearfix">
              <select class="iselect" autocomplete="off" disableautocomplete="">
                <optgroup label="家属信息" _type="0">
                  <option value="" _role="default" class="def-opt" selected="selected">请选择密保问题</option>
                  <option value="1" _answertip="">您外婆的姓名</option>
                  <option value="2" _answertip="">您外公的姓名</option>
                  <option value="3" _answertip="">您爷爷的姓名</option>
                  <option value="4" _answertip="">您奶奶的姓名</option>
                  <option value="5" _answertip="">您父亲的生日</option>
                  <option value="6" _answertip="">您母亲的生日</option>
                  <option value="7" _answertip="">您父母的生日相差几年几个月</option>
                </optgroup>
                <optgroup label="学校信息" _type="1">
                  <option value="8" _answertip="">您高中三年级班主任的名字</option>
                  <option value="9" _answertip="">您小学六年级班主任的名字</option>
                  <option value="10" _answertip="">您大学时的学号</option>
                  <option value="11" _answertip="">您大学本科时的上/下铺叫什么名字</option>
                  <option value="12" _answertip="">您大学的导师叫什么名字</option>
                </optgroup>
                <optgroup label="个人信息" _type="2">
                  <option value="13" _answertip="">您父母称呼您的昵称</option>
                  <option value="14" _answertip="">您身份证号后六位</option>
                  <option value="15" _answertip="">您出生的医院名称</option>
                  <option value="16" _answertip="">您最好的朋友叫什么名字</option>
                </optgroup>
                <optgroup label="各种第一次" _type="3">
                  <option value="17" _answertip="">您第一个宠物的名字</option>
                  <option value="18" _answertip="">您的第一任男朋友/女朋友姓名</option>
                  <option value="19" _answertip="">您第一家任职的公司名字</option>
                </optgroup>
                <optgroup label="婚姻相关" _type="4">
                  <option value="20" _answertip="">您领结婚证的日子</option>
                  <option value="21" _answertip="">您配偶的名字</option>
                  <option value="22" _answertip="">您配偶的生日</option>
                </optgroup>
              </select>
            </dd>
            <dd class="dd_l clearfix">
              <label class="input_bg"><input class="input_kuang errortip" placeholder="" autocomplete="off" disableautocomplete="" isrequired="true" type="text"></label>
              <span _text="" class="error-mes err_tip err_tip_independ" style="display:block;"></span>
            </dd>
          </dl>
		  </li>
		  <li>
          <dl class="login-dl clearfix">
            <dd class="dd_r clearfix">
              <select class="iselect" autocomplete="off" disableautocomplete="">
                <optgroup label="家属信息" _type="0">
                  <option value="" _role="default" class="def-opt" selected="selected">请选择密保问题</option>
                  <option value="1" _answertip="">您外婆的姓名</option>
                  <option value="2" _answertip="">您外公的姓名</option>
                  <option value="3" _answertip="">您爷爷的姓名</option>
                  <option value="4" _answertip="">您奶奶的姓名</option>
                  <option value="5" _answertip="">您父亲的生日</option>
                  <option value="6" _answertip="">您母亲的生日</option>
                  <option value="7" _answertip="">您父母的生日相差几年几个月</option>
                </optgroup>
                <optgroup label="学校信息" _type="1">
                  <option value="8" _answertip="">您高中三年级班主任的名字</option>
                  <option value="9" _answertip="">您小学六年级班主任的名字</option>
                  <option value="10" _answertip="">您大学时的学号</option>
                  <option value="11" _answertip="">您大学本科时的上/下铺叫什么名字</option>
                  <option value="12" _answertip="">您大学的导师叫什么名字</option>
                </optgroup>
                <optgroup label="个人信息" _type="2">
                  <option value="13" _answertip="">您父母称呼您的昵称</option>
                  <option value="14" _answertip="">您身份证号后六位</option>
                  <option value="15" _answertip="">您出生的医院名称</option>
                  <option value="16" _answertip="">您最好的朋友叫什么名字</option>
                </optgroup>
                <optgroup label="各种第一次" _type="3">
                  <option value="17" _answertip="">您第一个宠物的名字</option>
                  <option value="18" _answertip="">您的第一任男朋友/女朋友姓名</option>
                  <option value="19" _answertip="">您第一家任职的公司名字</option>
                </optgroup>
                <optgroup label="婚姻相关" _type="4">
                  <option value="20" _answertip="">您领结婚证的日子</option>
                  <option value="21" _answertip="">您配偶的名字</option>
                  <option value="22" _answertip="">您配偶的生日</option>
                </optgroup>
              </select>
            </dd>
            <dd class="dd_l clearfix">
              <label class="input_bg"><input class="input_kuang errortip" placeholder="" autocomplete="off" disableautocomplete="" isrequired="true" type="text"></label>
              <span _text="" class="error-mes err_tip err_tip_independ" style="display:block;"></span>
            </dd>
          </dl>
		  </li>
		  </ul>
        </div>
	  <input name="questions" class="form-data" type="hidden">
	  <input name="userId" value="1090637899" type="hidden">
	  <input name="mibao_ph" value="" type="hidden">
	  <input name="serviceToken" value="" type="hidden">
				<div class="tl_c">
					<span _text="" class="error-mes form-error-mes err_tip err_tip_independ" style="display:none;"></span>
				</div>
				<div class="tip_btns wap_pb20">
					<input class="btn_tip btn_commom" title="确定" value="确定" type="submit">			
				</div>
			</div>
		</div>
		</form>
	</div>
	</div><!---->
</div>
<!-- 设置密保问题 e -->
	<!-- 回答设置密保问题 s -->
<div class="popup_mask">
    <div class="bkc"></div>
	<div class="mod_wrap">
	<div class="mod_acc_tip" id="popAnswerMibao" style="display:none">
		<div class="mod_tip_hd">
			<h4>设置密保问题</h4>
			<a class="btn_mod_close" href="" title=""><span>关闭</span></a>
		</div>
		<div class="mod_tip_bd">
			<div class="wapbox rember_mibaoqst">
				<h4>请回答您刚才设置的密保问题</h4>
				<div class="set_mibao">
					<ul class="c_b">					
						<li>
							<p></p>
							<label class="input_bg"><input autocomplete="off" disableautocomplete="" type="text"></label>
							<span _text="" class="error-mes err_tip err_tip_independ" style="display:block;"></span>
						</li>
						<li>
							<p></p>
							<label class="input_bg"><input autocomplete="off" disableautocomplete="" type="text"></label>
							<span _text="" class="error-mes err_tip err_tip_independ" style="display:block;"></span>
						</li>
						<li>
							<p></p>
							<label class="input_bg"><input autocomplete="off" disableautocomplete="" type="text"></label>
							<span _text="" class="error-mes err_tip err_tip_independ" style="display:block;"></span>
						</li>
						<li>
							<p></p>
							<label class="input_bg"><input autocomplete="off" disableautocomplete="" type="text"></label>
							<span _text="" class="error-mes err_tip err_tip_independ" style="display:block;"></span>
						</li>					
					</ul>
					<div class="tl_c">
						<span _text="" class="error-mes form-error-mes err_tip err_tip_independ" style="display:block;"></span>
					</div>	
				</div>				
			</div>
			<div class="tip_btns">
				<a class="btn_tip btn_commom" href="" title="确定">确定</a>
				<a class="btn_tip btn_back" href="" title="重设">重设</a>
			</div>
		</div>
	</div>
	</div>
</div>
	<!-- 回答设置密保问题 e -->
	<!-- 设置密保成功 s -->
<div class="popup_mask">
    <div class="bkc"></div>
	<div class="mod_wrap">
	<div class="mod_acc_tip" id="popFinishMibao" style="display:none">
		<div class="mod_tip_hd">
			<h4>设置密保问题</h4>
			<a class="btn_mod_close" href="" onclick="(function(){location.hash='#';location.reload(true);})();" title=""><span>关闭</span></a>
		</div>
		<div class="mod_tip_bd">			
			<div class="t_c wapbox mar30">
				<div class="txt_ff6"><em class="acctip_icon acctip_icon_2"></em>您已成功设置密保问题！</div>						
			</div>
			
			<div class="tip_btns wap_btn_abs">
				<a class="btn_tip btn_commom" href="" title="返回我的帐号">返回我的帐号</a>					
			</div>
		</div>
	</div>
	</div>
</div>
	<!-- 设置密保成功 e -->
	<!-- 开启登录保护 s -->
<div class="popup_mask">
    <div class="bkc"></div>
	<div class="mod_wrap">
	<div class="mod_acc_tip" id="popManageTokenHome" style="display:none">
		<div class="mod_tip_hd">
			<h4>开启登录保护</h4>
			<a class="btn_mod_close" href="" title=""><span>关闭</span></a>
		</div>
		<div class="mod_tip_bd">
			<div class="t_c security">				
				<div class="icon_mibao icon_mibao1"></div>				
				<div class="wapbox intro">
					<p class="style_h4">开启登录保护，仅允许信任设备直接登录</p>
					<p class="style_h4">非信任设备，登录时需要二次验证</p>
				</div>				
				<div class="tip_btns">
					<a class="btn_tip btn_commom" href="" title="确认开启" _href="#popManageTokenDownAct">确认开启</a>					
				</div>
				<p class="notice">注意：开启后，当前处于登录状态的设备需重新登录</p>
			</div>
		</div>
	</div>
	</div>
</div>
	<!-- 开启登录保护 e -->
	<!-- 获取动态口令 s -->
<div class="popup_mask">
    <div class="bkc"></div>
	<div class="mod_wrap">
	<div class="mod_acc_tip" id="popManageTokenDownAct" style="display:none">
		<div class="mod_tip_hd">
			<h4>开启登录保护</h4>
			<a class="btn_mod_close" href="" title=""><span>关闭</span></a>
		</div>
		<div class="mod_tip_bd">
			<div class="t_c wapbox security">				
				<div class="icon_mibao icon_mibao2"></div>
				<div class="intro">
					<p class="style_h4">动态生成安全口令</p>
					<p class="style_h4">告别等待，更方便、更安全</p>
				</div>								
			</div>
			<div class="tip_btns">
				<a class="btn_tip btn_back" href="" title="获取安装" _href="#popManageTokenDownload">获取安装</a>					
				<a class="btn_tip btn_commom wap_mt10" href="" title="激活令牌" _href="#popManageTokenActivate">激活令牌</a>
			</div>
		</div>
	</div>
	</div>
</div>
	<!-- 获取动态口令 e -->
	<!-- 获取安全令牌 s -->
<div class="popup_mask">
    <div class="bkc"></div>
	<div class="mod_wrap">
	<div class="mod_acc_tip" id="popManageTokenDownload" style="display:none">
		<div class="mod_tip_hd">
			<h4>开启登录保护</h4>
			<a class="btn_mod_close" href="" title=""><span>关闭</span></a>
		</div>
		<div class="mod_tip_bd">			
			<div class="wapbox disten30x25">
				<h4>获取安装小米安全令牌</h4>
				<div class="newtab">
					<!-- 选中添加class为now -->
					<a class="now" href="" title="Android版"><em class="acctip_icon acctip_icon_4"></em>Android版<i></i></a>
					<a href="" title="iPhone版"><em class="acctip_icon acctip_icon_5"></em>iPhone版<i></i></a>
				</div>
				<div style="display:block;" class="tabcon">
					<p>1. 在手机上访问小米应用商店 （app.mi.com）</p>
					<p>2. 搜索<span>小米安全令牌</span></p>
					<p>3. 下载并安装该应用<a href="http://app.mi.com/download/62091" target="_self" title="">直接下载安装包</a></p>
				</div>
				<div class="tabcon">
					<p>1. 打开iPhone上的App Store图标</p>
					<p>2. 搜索<span>小米安全令牌</span></p>
					<p>3. 下载并安装该应用<a href="https://itunes.apple.com/cn/app/xiao-mi-an-quan-ling-pai/id734383238?mt=8" title="" target="_blank">App Store下载地址</a></p>
				</div>
				<div class="wap_tokenstore">
					<a class="btn_tip btn_back" href="http://app.mi.com/download/62091" title="" _href=""><i class="icon_store icon_android"></i>Android应用下载</a>
					<a class="btn_tip btn_back" href="https://itunes.apple.com/cn/app/xiao-mi-an-quan-ling-pai/id734383238?mt=8" title="" _href=""><i class="icon_store icon_iphone"></i>iPhone应用下载</a>
				</div>
			</div>
			<div class="tip_btns">
				<a class="btn_tip btn_commom installed" href="" title="已完成安装" _href="#popManageTokenActivate">已完成安装</a>			
				<a class="btn_tip btn_back goback" href="" title="返回" _href="#popManageTokenStatus">返回</a>
			</div>
		</div>
	</div>
	</div>
</div>
	<!-- 获取安全令牌 e -->
	<!-- 激活安全令牌 s -->
<div class="popup_mask">
    <div class="bkc"></div>
	<div class="mod_wrap">
	<div class="mod_acc_tip" id="popManageTokenActivate" style="display:none">
		<div class="mod_tip_hd">
			<h4>开启登录保护</h4>
			<a class="btn_mod_close" href="" title=""><span>关闭</span></a>
		</div>
		<div class="mod_tip_bd">			
			<div class="t_c mar30"><h4 class="wap_pt0">激活小米安全令牌</h4></div>
			<div class="wapbox getactived disten30x76">
				<p>1. 打开安装好的小米安全令牌</p>
				<div>
					<p>2. 扫描下方二维码</p>
					<img alt="" height="124" width="124">
				</div>
				<p>3. 输入生成的6位动态口令<label class="input_bg"><input placeholder="6位动态口令" type="text"></label></p>
				<div _text="动态口令不正确" class="err_tip wng_capt err_tip_independ">动态口令不正确</div>				
				<div _text="请输入动态口令" class="err_tip empty_capt err_tip_independ">请输入动态口令</div>					
			    <div _text="系统错误，请稍候再试" class="err_tip sys_err err_tip_independ">系统错误，请稍候再试</div>		
			</div>
			<div class="tip_btns">
				<!-- 默认态未填写动态口令btn为禁用，动态口令填写后btn才亮起来，去掉class为disabled -->
				<a class="btn_tip btn_commom" href="javascript:void(0);" title="激活">激活</a>				
			</div>	
		</div>
	</div>
	</div>
</div>
	<!-- 激活安全令牌 e -->
	<!-- 添加信任设备 s -->
<div class="popup_mask">
    <div class="bkc"></div>
	<div class="mod_wrap">
	<div class="mod_acc_tip" id="popManageTokenTrustDevice" style="display:none">
		<div class="mod_tip_hd">
			<h4>开启登录保护</h4>
			<a class="btn_mod_close" href="" title=""><span>关闭</span></a>
		</div>
		<div class="mod_tip_bd">
			<div class="t_c mar30"><h3>添加信任设备</h3></div>
			<div class="wapbox mardoub30">
				<p class="npb_circle_normal"><span class="npb-circle npb-circle-current"></span><span>在信任设备上登录，不会每次都要求输入安全令牌证</span></p>
				<p class="npb_circle_normal"><span class="npb-circle npb-circle-current"></span><span>即使您丢失了手机，无法获得验证码，也可以通过信任设备访问自己的小米帐号。</span></p>
        <div class="mod_trust">
					<div class="token_chk_area">
						<i class="icon_token_chk icon_true"></i><span class="style_h4">信任此计算机</span>
					</div>
					<div>您可以随时登录小米帐号在我的设备中管理信任设备</div>
				</div>
				<div _text="动态口令不正确" class="err_tip wng_capt err_tip_independ">动态口令不正确</div>							
				<div _text="系统错误，请稍候再试" class="err_tip sys_err err_tip_independ">系统错误，请稍候再试</div>
			</div>
				
			<div class="tip_btns">
				<input class="btn_tip btn_commom" value="下一步" type="submit">		
			</div>
		</div>
	</div>
	</div>
</div>
	<!-- 添加信任设备 e -->
	<!-- 成功开启登录保护 s -->
<div class="popup_mask">
    <div class="bkc"></div>
	<div class="mod_wrap">
	<div class="mod_acc_tip" id="popManageTokenFinish" style="display:none">
		<div class="mod_tip_hd">
			<h4>开启登录保护</h4>
			<a class="btn_mod_close" href="" title=""><span>关闭</span></a>
		</div>
		<div class="mod_tip_bd">
			<div class="t_c wapbox mar30">
				<div class="txt_ff6"><em class="acctip_icon acctip_icon_2"></em>您已成功开启登录保护</div>			
				<p><span class="logoutCountdown"></span> 秒后自动登出，请重新登录</p>							
			</div>
			<div class="tip_btns wap_btn_abs">
				<a class="btn_tip btn_commom" href="https://account.xiaomi.com/" title="立即重新登录">立即重新登录</a>					
			</div>
		</div>
	</div>
	</div>
</div>
	<!-- 成功开启登录保护 e -->
	<!-- 设置安全令牌 s -->
<div class="popup_mask">
    <div class="bkc"></div>
	<div class="mod_wrap">
	<div class="mod_acc_tip wth482" id="popManageTokenStatus" style="display:none">
		<div class="mod_tip_hd">
			<h4>登录保护设置</h4>
			<a class="btn_mod_close" href="" title=""><span>关闭</span></a>
		</div>
		<div class="mod_tip_bd">
			<div class="wapbox set_security_token disten30x14">
				<h3>已经开启小米安全令牌</h3>
				<p>无需等待短信验证码，动态生成口令，更方便、更快捷</p>
				<div class="tip_btns">
					<a class="btn_tip btn_back" href="" title="获取安装" _href="#popManageTokenDownload">获取安装</a>
					<a class="btn_tip btn_back" href="" title="更换令牌" _href="#popManageTokenActivate">更换令牌</a>
				</div>
				<h3>补充设置</h3>
				<p>为了防止手机丢失，导致无法登录使用查找手机，强烈建议您填写</p>
				<p>备用手机或记录备用口令</p>
				<ul class="plan c_b">
					<li>
						<dl>
							<dt><em class="acctip_icon acctip_icon_6"></em><span class="txt_tit">备用手机</span></dt>
							<dd class="">
								<p class="mar17">如果您因为任何原因无法使用手机（丢失、没电、损坏），您可以选择将动态口令发送至备用手机</p>								
								<div class="alink no_fb_mobile">									
									<p>										
										<a href="" title="添加备用手机" _href="#popManageTokenSetMobile">添加备用手机</a>
									</p>
								</div>
								<!-- 添加了备用手机后显示 -->
								<div class="alink fb_mobile">
									<p>已设置：<span></span></p>
									<p>
										<a href="" title="修改号码" _href="#popManageTokenSetMobile">修改号码</a>
										<a href="" title="删除号码" class="delBackupPhone">删除号码</a>
									</p>
								</div>
							</dd>
						</dl>
					</li>
					<li>
						<dl>
							<dt><em class="acctip_icon acctip_icon_7"></em><span class="txt_tit">备用密匙</span></dt>
							<dd>
								<p class="mar17">您也可以将备用密匙打印或发送到邮箱，在没有手机令牌的情况下，可以输入一次性备用密匙进行登录</p>								
								<div class="alink">									
									<p class="bak_keystxt">										
										<a href="" title="查看备用密匙" _href="#popManageTokenKeys">查看备用密匙</a>
									</p>
								</div>
							</dd>
						</dl>
					</li>
				</ul>				
				<div _text="系统错误，请稍候再试" class="err_tip sys_err err_tip_independ">系统错误，请稍候再试</div>
				<div _text="备用手机不存在" class="err_tip backup_phone_not_exists err_tip_independ">备用手机不存在</div>
			</div>
			<div class="tip_btns">
				<a class="btn_tip btn_commom btn_close_popup" href="" title="返回我的帐号">返回我的帐号</a>
				<a class="btn_tip btn_back btn_disable_token" href="" title="关闭登录保护">关闭登录保护</a>
			</div>
		</div>
	</div>
	</div>
</div>
	<!-- 设置安全令牌 e -->
	<!-- 开启登录保护未绑定邮箱 s -->
<div class="popup_mask">
    <div class="bkc"></div>
	<div class="mod_wrap">
	<div class="mod_acc_tip" id="popManageTokenBindEmail" style="display:none">
		<div class="mod_tip_hd">
			<h4>开启登录保护</h4>
			<a class="btn_mod_close" href="" title=""><span>关闭</span></a>
		</div>
		<div class="mod_tip_bd">
			<div class="t_c security">
				<div class="icon_mibao icon_mibao3"></div>
				<div class="wapbox intro">
					<p class="style_h4">开启登录保护，请先绑定安全邮箱</p>					
				</div>				
				<div class="tip_btns">
					<a class="btn_tip btn_commom btn_adapt" href="" title="返回我的帐号" _href="#noSuchElement" __href="#popEnterNewEmail">返回我的帐号</a>
					<!-- <input class="btn_tip btn_commom" type="submit" value="绑定安全邮箱"> -->
				</div>				
			</div>
		</div>
	</div>
	</div>
</div>
	<!-- 开启登录保护未绑定邮箱 e -->
	<!-- 开启登录保护未绑定手机 s -->
<div class="popup_mask">
    <div class="bkc"></div>
	<div class="mod_wrap">
	<div class="mod_acc_tip" id="popManageTokenBindPhone" style="display:none">
		<div class="mod_tip_hd">
			<h4>开启登录保护</h4>
			<a class="btn_mod_close" href="" title=""><span>关闭</span></a>
		</div>
		<div class="mod_tip_bd">
			<div class="t_c security">
				<div class="icon_mibao icon_mibao4"></div>
				<div class="wapbox intro">
					<p class="style_h4">开启登录保护，请先绑定安全手机</p>					
				</div>				
				<div class="tip_btns">
					<a class="btn_tip btn_commom" href="" title="返回我的帐号" _href="#noSuchElement" __href="#popEnterNewPhone">返回我的帐号</a>
					<!-- <input class="btn_tip btn_commom" type="submit" value="绑定安全手机"> -->
				</div>				
			</div>
		</div>
	</div>
	</div>
</div>
	

	<div id="questionData" style="display:none"></div>
    
	<style type="text/css">
	/*干掉该死的IE6的遮罩问题*/
	#loadingMask .bkc{
		_height:200%;
	}
	</style>
</body>
</html>