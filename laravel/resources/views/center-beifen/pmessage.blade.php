<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0, maximum-scale=1.0,user-scalable=no">
<title>小米帐号 - 个人信息</title>


		<link type="text/css" rel="stylesheet" href="/message_files/reset.css">
    <link type="text/css" rel="stylesheet" href="/message_files/layout.css">

		<link type="text/css" rel="stylesheet" href="/message_files/modacctip.css">

		
	
<style type="text/css">
/*启用修改头像功能*/
.na-img-area:hover .na-edit{
	display:block;
	cursor: pointer;
}
.na-img-area{cursor:default}
/*popup的遮层*/
.popup_mask{
	position:fixed;
	z-index:99;
	width:100%;
	height:100%;
	left:0;
	top:0;
	display:none;
	_position:absolute;
	_height: 1000px;
}
.popup_mask .mod_wrap{
    height: 100%;
    overflow-y: auto;
    position: absolute;
    width: 100%;
    z-index: 1;
}
.popup_mask .bkc{
	position:absolute;
	width:100%;
	height:200%;
	left:0;
	top:0;
	background-color:#333;
	filter: alpha(opacity=70);
	opacity:0.7;
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
/*剪切图片的水平、垂直居中及模糊*/
.clipimg{
	text-align: left;
	position: relative;
}
.clipimg img{
	max-width:300px;
	max-height:300px;
	/*
	filter: alpha(opacity=70);
	opacity: .7;
	*/
	position: absolute;
}
/*clip部分*/
.clipimg .movebox{
/*
	background-position: 50% 50%;
	background-repeat: no-repeat;
	*/
	border: 1px solid #00aeff;
}
.uploadimgs{
	filter: none;
	opacity: 1;
}
.clipimg .movebox{
	width: 98px;
	height: 98px;
	z-index:1000;
	background-image:url(#);
}
.clipimg .icon_square_rightbot{
	cursor: se-resize;
}
/*上传*/
#photoUploader .uplodefile{
	font-size: 45px;
	*vertical-align: bottom;
}
::-webkit-file-upload-button { cursor:pointer; }
/*干掉该死的IE6的遮罩问题*/
#loadingMask .bkc{
	_height:2000px;
}
/*wap*/
.bugfix_ie6{ display:block;}	
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
    <a href="https://account.xiaomi.com/" class="fl-l">
      <img src="/message_files/n-logo.png" >
    </a>
    
       <a id="logoutLink" class="fl-r logout" href="/center">
          返回个人中心
       </a>
	  
    
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
          <li>
            <a href="/pcenter" title="帐号安全">帐号安全</a>
            <em class="n-nav-corner"></em>
          </li>
          <li class="current">
            <a  href="/pmessage" title="个人信息">个人信息</a>
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
	<div class="uinfo c_b">
        <div class="">
        <div class="main_l">
          <div class="naInfoImgBox t_c">
            <div class="na-img-area marauto">

              <!--na-img-bg-area不能插入任何子元素-->
              <div class="na-img-bg-area" ><img src="{{$list->userpic}}" alt=""></div>
              <em class="na-edit"></em>
            </div>
            <div class="naImgLink">
			  
				  <a class="color4a9" title="设置头像" onclick="editpic()">设置头像</a>
				  
            </div>
          </div>        
        </div>
        <div class="main_r">
          <div class="framedatabox">
            <div class="fdata" >
              <a  class="color4a9 fr" onclick="newAdd()"><i class="iconpencil" ></i>编辑</a>
              <h3>基础资料</h3>    
            </div>
            <div class="fdata lblnickname">
              <p><span>姓名：</span><span class="value">
				            {{$list->username}}
			        </span></p>     
            </div>
            <div class="fdata lblbirthday">
              <p><span>生日：</span><span class="value">
				            {{$list->birthday}}
			        </span></p>     
            </div>

            <div class="fdata lblgender">
              <p><span>性别：</span><span class="value">
				            @if(($list->sex)==1)
                    男
                    @elseif(($list->sex)==2)
                    女
                    @elseif(($list->sex)==3)
                    其他
                    @endif
			        </span></p>     
            </div>
			<div class="btn_editinfo"><a id="editInfoWap" class="btnadpt bg_normal" href="">编辑基础资料</a></div>
          </div>
			  <div class="framedatabox">
				<div class="fdata">
				  <h3>高级设置</h3>    
				</div>
				<div class="fdata click-row">
				  <a class="color4a9 fr" target="_blank" href="https://www.mipay.com/bankcard?_locale=zh_CN" title="管理">管理</a>              
				  <p>
					<span>银行卡</span>					
					<span class="arrow_r"></span>
				  </p>     
				</div>            
				<div class="fdata click-row">
				  <a class="color4a9 fr" target="_blank" href="" title="管理" id="switchRegion">修改</a>
				  <p>
					  <span>帐号地区：  </span>
					  <span class="box_center"><em id="region" _code="CN">中国</em><i class="arrow_r"></i></span>
				  </p>     
				</div>
			  </div>
        </div>
        </div>
		<div class="logout_wap">
			<a class="btnadpt bg_white" href="https://account.xiaomi.com/pass/logout?userId=1090637899&amp;callback=https://account.xiaomi.com">退出</a>
		</div>
      </div>
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
  <p class="nf-intro"><span>小米公司版权所有-京ICP备10046444-<a target="_blank"><span><img src="/message_files/ghs.png"></span>京公网安备11010802020134号</a>-京ICP证110507号</span></p>
</div>
<!-- <script src="/message_files/jquery-1.js"></script> -->
<!-- <script src="/message_files/placeholder.js"></script> -->
<script type="text/javascript" src="/home/js/jquery-1.8.3.min.js"></script>

<script src="/admin/layer/layer.js"></script>




<!-- 编辑个人信息资料 e -->
<!-- 设置头像 s -->
<div class="popup_mask">
<div class="bkc"></div>
<div class="mod_wrap">
<div class="mod_acc_tip layeruploadface">
  <div class="mod_tip_hd">
    <h4>
		  
			  设置头像
			
	</h4>
    <a class="btn_mod_close" href="" title=""><span>关闭</span></a>
  </div>
  <div class="mod_tip_bd preupload">
	<iframe style="display:none;" name="uploadPhoto" id="uploadPhoto" height="0" width="0"></iframe>
	<!--
    <form action="/user/profile/requestUpload" method="POST">   
		<input type="hidden" name="userId" value="1090637899">
		<input type="hidden" name="quality" value="1.0">
		<input type="hidden" name="isRedirect" value="true">
		<input type="hidden" name="passport_ph" value="">
		<input type="hidden" name="passToken" value="">
	</form> 
	-->
	<form action="/pass/auth/profile/requestUpload" method="POST" enctype="multipart/form-data" target="uploadPhoto" id="photoUploader">   
    <div class="wapbox accset">
      <dl>
        <dt><strong class="wap_title_big">请上传图片：</strong></dt>
        <dd>
          <div class="uplode_img">
		  <!--
            <a class="btn_tip btn_commom" href="" title="上传头像">上传头像</a>
			-->
			<input onclick="return false;" class="btn_tip btn_commom" value="上传头像" type="button">
            <input class="uplodefile" name="userfile" autocomplete="off" disableautocomplete="" type="file">
          </div>
          <p>jpg 或 png，大小不超过2M</p>
        </dd>              
      </dl>
      <div _text="图片格式不符合要求！" class="err_tip wng_fmt err_tip_independ" style="display:none;">图片格式不符合要求！</div>       
	  <div _text="系统错误，请稍候再试" class="err_tip sys_err err_tip_independ" style="display:none;">系统错误，请稍候再试</div> 
	  <div _text="文件太大，上传失败" class="err_tip file_too_large err_tip_independ" style="display:none;">文件太大，上传失败</div> 
    </div>      
    <div class="tip_btns">      
      <!-- <input class="btn_tip btn_commom" type="submit" value="保存"> -->
      <a class="btn_tip btn_back" href="" title="取消">取消</a>
    </div>
    </form> 
  </div>  
  <div class="mod_tip_bd uploading" style="display:none;">  
	<div class="wapbox">
    <div class="mar30 t_c">
      <!-- loading图片 -->
      <img src="" alt="" height="88" width="88">
      <div class="naccprocess">
        <p class="ft20" style="display:none;"><span></span>%</p>
        <p>上传中</p>
      </div>
    </div>      
    <div _text="图片格式不符合要求！" class="err_tip wng_fmt err_tip_independ" style="display:none; margin-left:100px;">图片格式不符合要求！</div>       
	<div _text="文件太大，上传失败" class="err_tip file_too_large err_tip_independ" style="display:none; margin-left:100px;">文件太大，上传失败</div> 
	<div _text="系统错误，请稍候再试" class="err_tip sys_err uploaderror err_tip_independ" style="display:none;">系统错误，请稍候再试</div>
	  <div _text="缺少参数" class="err_tip missing_param err_tip_independ" style="display:none; margin-left:100px;">缺少参数</div>
	  <div _text="找不到指定文件" class="err_tip missing_file err_tip_independ" style="display:none; margin-left:100px;">找不到指定文件</div>
	  <div _text="不支持的MIME TYPE" class="err_tip unsupported_mime_type err_tip_independ" style="display:none; margin-left:100px;">不支持的MIME TYPE</div>
	</div>
    <div class="tip_btns">      
      <!-- <input class="btn_tip btn_commom" type="submit" value="保存"> -->
      <a id="abortUpload" class="btn_tip btn_back" href="" title="取消">取消</a>
    </div>
  </div>

  <div class="mod_tip_bd uploaded">
	<div class="wapbox">
		<div class="clipimg t_c">
			<!-- 图片放置位置       -->
			<div class="uploadimgs">
			  <img alt="">
			  <!--
			  <div class="clip"></div>
			  -->
			</div>
			<div style="" class="movebox">
				<i class="icon_square icon_square_rightbot"></i>
			</div> 	
		</div>
		<div class="cliperror">
			<div _text="系统错误，请稍候再试" class="err_tip sys_err err_tip_independ" style="display:none;">系统错误，请稍候再试</div> 
			<div _text="参数错误" class="err_tip bad_param err_tip_independ" style="display:none;">参数错误</div> 
			<div _text="上传失败" class="err_tip upload_failed err_tip_independ" style="display:none;">上传失败</div> 
		</div>
	</div>
    <div class="tip_btns">      
      <input class="btn_tip btn_commom" value="确定" type="submit">
      <a class="btn_tip btn_back" href="" title="重新上传" id="reuploadPhoto">重新上传</a>
    </div>
  </div>  
</div>
</div>
</div>
<div id="l11n-node" style="display:none;" _l11n-jsp_2014_select="请选择" _l11n-jsp_birthday_date="日" _l11n-jsp_birthday_month="月" _l11n-jsp_birthday_year="年"></div>
<!-- 设置头像 e -->
<!-- 切换帐号地区 s -->
<div class="popup_mask">
<div class="bkc"></div>
<div class="mod_wrap">

<div class="mod_acc_tip" id="popSwitchRegion">
  <div class="mod_tip_hd">
    <h4>切换帐号地区</h4>
    <a class="btn_mod_close" href="" title=""><span>关闭</span></a>
  </div>
  <div class="mod_tip_bd">        
    <div class="wapbox n_txtbox">
      <p>请注意：</p>
      <ul>
        <li class="disc">不同地区的米币不通用，切换后可能导致您的米币余额无法使用。</li>
        <li class="disc">一些会员服务，只在部分地区提供，切换后可能无法继续使用。</li>
        <li class="disc">一些版权内容，只在部分地区提供，切换后可能无法观看。</li>
      </ul>
    </div>    
    <div class="tip_btns">      
      <input id="continueSwitch" class="btn_tip btn_commom" value="继续切换" type="submit">
      <a class="btn_tip btn_back" href="" title="取消">取消</a>
    </div>
  </div>  
  <div class="mod_tip_bd" style="display:none;">
    <div class="wapbox wap_pt30 regbox">
      <div class="listwrap change_region_box">        
          <div class="listtit">
            <span class="tits dis_box c_b">
              <tt _code="">请选择</tt>
              <i class="icon_cirarr"></i>
            </span>
          </div>  
			  <div class="country-container" style="display: none;">
			   <div class="country-code select_panel">
				<div class="container">
				 <div class="header">
				  热门
				 </div>
				 <ul class="list">
				  <li class="record clearfix"><span class="record-country" _brief="CN">中国</span></li>
				  <li class="record clearfix"><span class="record-country" _brief="TW">台湾</span></li>
				  <li class="record clearfix"><span class="record-country" _brief="HK">中国香港</span></li>
				  <li class="record clearfix"><span class="record-country" _brief="BR">Brazil</span></li>
				  <li class="record clearfix"><span class="record-country" _brief="IN">India</span></li>
				  <li class="record clearfix"><span class="record-country" _brief="ID">Indonesia</span></li>
				  <li class="record clearfix"><span class="record-country" _brief="MY">Malaysia</span></li>
				 </ul>
				</div>

				
			   </div>
          <div class="cancel_panel">
            <div class="cancel_box">
              <a class="btnadpt bg_white btn-cancel" href="javascript:void(0);">取消</a>
            </div>
          </div>
			  </div>
        </div> 
		<div id="region_errors">
			<div _text="系统错误，请稍候再试" class="err_tip sys_err err_tip_independ" style="display:none">系统错误，请稍候再试</div>
			<div _text="参数错误" class="err_tip bad_param err_tip_independ" style="display:none;">参数错误</div> 
			<div _text="帐号地区不能为空" class="err_tip empty_region err_tip_independ" style="display:none;">帐号地区不能为空</div> 
		</div>
    </div>   
    <div class="tip_btns">      
      <input class="btn_tip btn_commom" id="doRegionSwitch" value="确定" type="submit">
      <a class="btn_tip btn_back" href="" title="取消">取消</a>
    </div>
  </div>  
</div>

</div>
</div>
<!-- 切换帐号地区 e -->
<script type="text/javascript">
   function editpic(){
        
        layer.open({
          type: 2,
          title: '修改头像',
          shadeClose: true,
          shade: 0.8,
          area: ['500px', '400px'],
          content: 'http://www.lht.com/center/editpic' //iframe的url
        }); 
    }
</script>

<script type="text/javascript">
   function newAdd(){
        
        layer.open({
          type: 2,
          title: '添加信息',
          shadeClose: true,
          shade: 0.8,
          area: ['500px', '90%'],
          content: 'http://www.lht.com/center/edit' //iframe的url
        }); 
    }
</script>
<style type="text/css">
/*干掉该死的IE6的遮罩问题*/
#loadingMask .bkc{
	_height:200%;
}
</style>
<div id="img_cache" style="visibility:hidden;"></div>


</body></html>