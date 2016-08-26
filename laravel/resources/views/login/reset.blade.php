<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0, maximum-scale=1.0,user-scalable=no">
<title>
  小米帐号 - 重置密码
</title>

<link type="text/css" rel="stylesheet" href="https://account.xiaomi.com/static/res/23f48a9/account-static/respassport/acc-2014/css/reset.css">
<link type="text/css" rel="stylesheet" href="https://account.xiaomi.com/static/res/c812552/account-static/respassport/acc-2014/css/layout.css">

<link type="text/css" rel="stylesheet" href="https://account.xiaomi.com/static/res/0750dfb/account-static/respassport/acc-2014/css/registerpwd.css">

    
</head>
<body class="zh_CN">
<div class="wrapper">
<div class="wrap">
<div class="layout">  
  <div class="n-frame device-frame reg_frame">
    <div class="external_logo_area"><a class="milogo" href="javascript:void(0)"></a></div>
    <div class="title-item t_c">
      <h4 class="title_big30">重置密码</h4>
    </div>
    <form action="/reset" method="post" id="resetPwdForm">
    {{csrf_field()}}
    <input type="hidden" name="token" value="{{$user->token}}">
    <input type="hidden" name="id" value="{{$user->id}}">
      <div class="regbox">
        <div class="step3">                  
          <dl>
            <dt><h4>请重设您的帐号密码</h4></dt>
            <dd>
              <div class="inputbg">
                <!-- 错误添加class为err_label -->
                <label class="labelbox" for="">
                  <input id="pwd" type="password" name="password"
                  placeholder="请输入新密码">
                </label>        
              </div>
            </dd>
            <dd>
              <div class="inputbg">
                <!-- 错误添加class为err_label -->
                <label class="labelbox" for="">
                  <input type="password" id="repwd"  name="confirm_password"
                         placeholder="请输入确认密码">
                  <!-- <input type="hidden" name="userId" value="149922353"> 
                  <input type="hidden" name="passportsecurity_ph" id="passportsecurity_ph" value="" /> -->
                </label>        
              </div>
            </dd>
          </dl>        
          <div class="err_tip">
            <div class="dis_box">
              <em class="icon_error"></em>
              <span id="error_con"></span>
            </div>
          </div>
          <div class="err_tip pwd_tip" id="pwd_tips" style="display:block;">
            <div class="dis_box">
              <em class="icon_error"></em>
              <span>
                密码长度8~16位，数字、字母、字符至少包含两种
              </span>
            </div>
          </div>        
          <div class="fixed_bot mar_phone_dis3">
            <input class="btn332 btn_reg_1" type="submit" value="提交">
          </div>    
        </div>      
      </div>
    </form>        
  </div>
</div>
</div>
</div>
<div class="n-footer">
  <div class="nf-link-area clearfix">
  <ul class="lang-select-list">
    <li><a class="lang-select-li" href="javascript:void(0)" data-lang="zh_CN">简体</a>|</li>
    <li><a class="lang-select-li" href="javascript:void(0)" data-lang="zh_TW">繁体</a>|</li>
    <li><a class="lang-select-li" href="javascript:void(0)" data-lang="en">English</a></li>
    
      |<li><a class="a_critical" href="http://static.account.xiaomi.com/html/faq/faqList.html" target="_blank"><em></em>常见问题</a></li>
    
  </ul>
  </div>
  <p class="nf-intro"><span>小米公司版权所有-京ICP备10046444-<a class="beianlink beian-record-link" target="_blank"><span></span>京公网安备11010802020134号</a>-京ICP证110507号</span></p>
</div>
<script src="https://account.xiaomi.com/static/res/6941994/passport/scripts/jquery-1.8.3.min.js"></script>
<script src="https://account.xiaomi.com/static/res/64371/scripts/common/more/placeholder.js"></script>

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
  qs:"callback=http%3A%2F%2Forder.mi.com%2Flogin%2Fcallback%3Ffollowup%3Dhttp%253A%252F%252Fwww.mi.com%252Findex.html%26sign%3DNDRhYjQwYmNlZTg2ZGJhZjI0MTJjY2ZiMTNiZWExODMwYjkwNzg2ZQ%2C%2C&sid=mi_eshop",
  hidden:"",
  "_sign":"",
  serviceParam :'',
  privacyLink:''
};
</script>

<script>
;(function(){
var pt_ph = document.getElementById("passportsecurity_ph");
var c = document.cookie.split(";");
ptValue = "";
phValue = "";
for(var i = 0 ; i < c.length ; i++){
  if(c[i].indexOf("passportsecurity_ph") > -1){
    phValue = c[i].substring(c[i].indexOf("=")+1);
  }
}
if(pt_ph){
    pt_ph.value= phValue;
}
})();
</script>

</body>
</html>
<script>
var MSG={
  empty:"请输入新密码",
  ruleError:"密码长度8~16位，数字、字母、字符至少包含两种",
  lenError:"密码长度为8~16位",
  AllLetterError:"密码不能全为字母",
  AllNumError:"密码不能全为数字",
  AllCharError:"密码长度8~16位，数字、字母、字符至少包含两种",
  SameWithEmail:"密码不能与邮箱相同",
  lackNormal:"密码不能全为字符",
  SameWithOld:"不能与原密码相同",
  repeatEmpty:"请输入确认密码",
  repeatError:"密码输入不一致",
  samePwdError:"不能与原密码相同",
  sameWithMail:"密码不能与邮箱相同",
  sameWithBlackList:"您的密码可能存在安全风险，请您重新设置一个全新的密码"
}
$("input[placeholder]").miPlaceholder();
var form=$("#resetPwdForm");
var pwd=$("#pwd");
var repwd=$("#repwd");
var errorCon=$("#error_con");
var pwdTips=$("#pwd_tips");
function showError(text,el){
  if(text){
    errorCon.html(text);
    errorCon.parent().parent().show();
    el && el.parent().addClass("err_label");
  }else{
    errorCon.html("");
    errorCon.parent().parent().hide();
    el && el.parent().removeClass("err_label");
  }
  if(text===MSG.ruleError){
    pwdTips.hide();
  }else{
    pwdTips.show();
  }
}
/*jsp 回传的错误显示*/
var error="";
if(error){
  var _txt_=MSG.ruleError;
  if(parseInt(error)===110061001){
    _txt_=MSG.samePwdError;
  }
  if(parseInt(error)===110071001){
    _txt_=MSG.sameWithMail;
  }
  //密码黑名单
  if(parseInt(error)===410081001){
    _txt_=MSG.sameWithBlackList;
  }
  showError(_txt_,pwd);
}
/*focus 取消错误显示*/
pwd.bind("focus",function(){
  if( pwd.parent().hasClass("err_label") ){
    showError("",pwd);
  }
});
repwd.bind("focus",function(){
  if( repwd.parent().hasClass("err_label") ){
    showError("",repwd);
  }
});
/*绑定提交事件*/
form.bind("submit",function(){
  var val=pwd.val();
  var reval=repwd.val();
  var msg="";
  var el=pwd;
  if(val===""){
    msg=MSG.empty
  }else if( val.length<8 || val.length >16){
    msg=MSG.ruleError;//MSG.lenError;
  }else if(/^\d+$/.test(val)){
    msg=MSG.ruleError;//MSG.AllNumError;全数字错误
  }else if(/^[A-Za-z]+$/.test(val)){
    msg=MSG.ruleError;//MSG.AllLetterError;全字母错误
  }else if(/^[^A-Za-z0-9]+$/.test(val)){
    msg=MSG.ruleError;//MSG.AllCharError;不包含一个数字字母也是错的。
  }else if(reval===""){
    msg=MSG.repeatEmpty;
    el=repwd;
  }else if(val!==reval){
    msg=MSG.repeatError;
    el=repwd;
  }
  if(msg){
    showError(msg,el);
    return false;
  }
});
</script>
