



<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0, maximum-scale=1.0,user-scalable=no">
<title>小米帐号 - 重置密码</title>

        <link type="text/css" rel="stylesheet" href="https://account.xiaomi.com/static/res/23f48a9/account-static/respassport/acc-2014/css/reset.css">
<link type="text/css" rel="stylesheet" href="https://account.xiaomi.com/static/res/c812552/account-static/respassport/acc-2014/css/layout.css">

        <link type="text/css" rel="stylesheet" href="https://account.xiaomi.com/static/res/0750dfb/account-static/respassport/acc-2014/css/registerpwd.css">

    
</head>
<!-- 添加版本uLocale -->
<body class="zh_CN">
  
<div class="wrapper">
<div class="wrap">
  <div class="layout">  
  <div class="n-frame device-frame reg_frame">
    <div class="external_logo_area"><a class="milogo" href="javascript:void(0)"></a></div>
    <div class="title-item t_c">
      <h4 class="title_big30">重置密码</h4>
    </div>
    <form action="/forget" method="post" id="forgetpwd_form">
    {{csrf_field()}}
    
    <!-- 记得在此添加标记语言uLocale -->
    <div class="regbox">
      <h5 class="n_tit_msg">请输入注册的邮箱地址、手机号码或小米帐号：</h5>      
      <div class="inputbg">
        <!-- 错误添加class为err_label -->
        <label class="labelbox labelbox-user" for="user">
          <input type="text" name="email"
                 id="user" autocomplete="off" 
                 placeholder="邮箱/手机号码/小米帐号"  rule="(^[\w.\-]+@(?:[A-Za-z0-9]+(?:-[A-Za-z0-9]+)*\.)+[A-Za-z]{2,6}$)|(^1\d{10}$)|(^\d{3,}$)|(^\++\d{2,}$)">
         </label>
        <!--  <input type="hidden" name="passToken" 
                id="passToken" value="" />
         <input type="hidden" name="passport_ph" 
                id="passport_ph" value="" /> -->
      </div>    
      <div class="err_tip error-tip-1">
        <div class="dis_box">
          <em class="icon_error"></em>
          <span id="error-content"></span>
        </div>
      </div> 
            <!-- <div class="inputbg inputcode dis_box">
                <label class="labelbox labelbox-captcha" for="">
                    <input id="code-captcha" class="code" type="text" name="vcode" placeholder="图片验证码">
                </label>
                <img alt="图片验证码" src="/vcode"  title="看不清换一张" >
            </div> -->
            <div class="err_tip error-tip-2">
                <div class="dis_box"><em class="icon_error"></em><span id="error-content-2"></span></div>
            </div>
      <div class="country_tips c_b">
        &nbsp;
        <a class="fr underline" id="select_country_code" href="javascript:void(0)">帮助</a>
      </div>  
      <div class="fixed_bot">
        <input class="btn332 btn_reg_1" type="submit" id="submit_button" value="下一步">   
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
  sid:"passport",
  qs:"callback=https%3A%2F%2Faccount.xiaomi.com%2Fsts%3Fsign%3DZvAtJIzsDsFe60LdaPa76nNNP58%253D%26followup%3Dhttps%253A%252F%252Faccount.xiaomi.com%252Fpass%252Fauth%252Fsecurity%252Fhome%26sid%3Dpassport&sid=passport",
  hidden:"",
  "_sign":"",
  serviceParam :'',
  privacyLink:''
};
</script>

<script>
;(function(){
var pt = document.getElementById("passToken");
var pt_ph = document.getElementById("passport_ph");
var c = document.cookie.split(";");
ptValue = ""; 
phValue = ""; 
for(var i = 0 ; i < c.length ; i++){
  if(c[i].indexOf("passToken") > -1){
    ptValue = c[i].substring(c[i].indexOf("=")+1) ; 
  }   
  if(c[i].indexOf("passport_ph") > -1){
    phValue = c[i].substring(c[i].indexOf("=")+1) ;
  }
}
if(pt){
    pt.value = ptValue ;
}
if(pt_ph){
    pt_ph.value= phValue;
}
})();
</script>

</body>
</html>
<script src="/static/res/dfd6dc1/account-static/html/login/modal/dist/modal_lite.js"></script>
<script src="/static/res/acadc16/account-static/scripts/tool/countryCode.js"></script>
<iframe id="postee" name="postee" style="display:none;" src="about:blank"></iframe>
<script>
  $(function(){
    var fraPostee = document.getElementById('postee'), posteeWindow = fraPostee.contentWindow;
    fraPostee.src = 'about:blank';
    fraPostee.onload = function(){
        var posteeLoc = posteeWindow.location.href;
        if(posteeLoc.indexOf('blank') > -1)  {return;}
        if(posteeLoc.indexOf('/pass/forgetPassword') === -1){
            location.href = posteeLoc;
        }else{
            var msg = posteeWindow.msg;
            var user = posteeWindow.user;
            if(msg && msg.length > 0 ){
              if(msg == "NoSafeAddressForRetrievePassword") {
                showError("该帐号没有绑定手机号码或邮箱，无法找回密码");
              }else if(msg == "CAPTCHA_VERIFY_ERROR"){
                    showError("验证码错误或已过期",'captcha');
                    userInput.val(user);
              }else {
                showError("帐号不存在");
                userInput.val('');
              }
              $('.chkcode_img').click();
            }
            var fraClone = fraPostee.cloneNode();
            $(fraPostee).replaceWith(fraClone);
            fraPostee = fraClone;
            posteeWindow = fraPostee.contentWindow;
            fraPostee.src = 'about:blank';
            fraPostee.onload = arguments.callee;
        }
    };
});
var MSG={
  close:"关闭"
};
var msg = "" ; 
var user = "";
var userInput=$("#user");
var form=$("#forgetpwd_form");
var codeCaptcha=$('#code-captcha');
var chkcodeImg=$('.chkcode_img');
if(msg.length > 0 ){
  if(msg == "NoSafeAddressForRetrievePassword") {
    showError("该帐号没有绑定手机号码或邮箱，无法找回密码");
  }else if(msg == "CAPTCHA_VERIFY_ERROR"){
        showError("验证码错误或已过期",'captcha');
        userInput.val(user);
    }   else {
    showError("帐号不存在");
  }
}
function showError(text,type){
  var el=type!=='captcha'?$("#error-content"):$("#error-content-2");
    
  var con=type!=='captcha'?$(".error-tip-1"):$(".error-tip-2");
  var label=type!=='captcha'?$(".labelbox-user"):$(".labelbox-captcha");
  if(text){
    con.show();
    el.html(text);
    label.addClass("err_label");
  }else{
    con.hide();
    label.removeClass("err_label");
  }
}
function setIcodeUrl(chkcodeImg){
    chkcodeImg.attr('src','/pass/getCode?icodeType=resetPwd&'+(new Date().getTime()));
    chkcodeImg.parent().find("[name=icode]").val("");
}
var icodeImageRefresh;
setIcodeUrl(chkcodeImg);
chkcodeImg.bind("click",function(){ 
    clearTimeout(icodeImageRefresh);
    icodeImageRefresh=setTimeout(function(){
        setIcodeUrl(chkcodeImg);
    },200);
});

form.bind("submit",function(){
  var val=$.trim( userInput.val() );
  var rule= new RegExp( userInput.attr('rule') );
    var captchaVal=$.trim(codeCaptcha.val());
  if(val===""){
    showError("请输入帐号")
    return false;
  }else if(!rule.test(val)){
    showError("帐号名称格式错误");
    return false;
  }
  // else if(captchaVal==""){
  //       showError("验证码不能为空",'captcha');
  //       return false;
  //   }
  // userInput.val(val.replace(/^\+86/,''));
});
userInput.bind("focus",function(){
  showError();
});
userInput.miPlaceholder("#ccc");
//图片验证码
codeCaptcha.bind("focus",function(){
  showError();
});
codeCaptcha.miPlaceholder("#ccc");
/*选择国家码*/
  var select_country_code=$("#select_country_code");
  var select_country_code_modal=null;
  var resultCode="+86";
  var oldCode="";
  function submitCountryCode(code,oldCode){
    var _user=userInput
    var _userPlaceholder=userInput.prev();
    var value=_user.val();
    /*将原先选择清空*/
    value=value.indexOf(oldCode)===0?value.replace(oldCode,""):value;
    /*用户名内容框为邮件*/
    _userPlaceholder.focus();
    if(value.indexOf("@")>0){
      _user.val(code);
      _userPlaceholder.addClass("hide");
    }else{
      _user.val(code+value);
      _userPlaceholder.addClass("hide");
    }
    _userPlaceholder.blur();
  }
  select_country_code.bind('click',function(){
    if(!select_country_code_modal){
      select_country_code_modal=new Modal({
        title:"请选择地区代码",
        html:'<div class="regbox login_countrycode_box">\
                <div class="listwrap">\
                  <div class="listtit" id="select_country_code_trigger">\
                    <span class="tits dis_box c_b">\
                      <tt id="select_country_code_result">中国（+86）</tt>\
                      <i class="icon_cirarr"></i>\
                    </span>\
                  </div>\
                </div>\
              </div>\
              <div class="tip_btns">\
                <a class="btn_tip btn_commom" id="select_country_code_submit" href="javascript:void(0)" title="确定">确定</a>\
              </div><br/>\
              <div class="tip_btns">\
                <a class="btn_tip btn_commom_cancel" id="select_country_code_cancel" href="javascript:void(0)" title="删除">删除</a>\
              </div>',
        cls:'select_country_code_content',
        customDevice640:true,//modal小屏幕定制为全屏
        afterRender:function(){
          var modal=this.modal;
          var trigger=$("#select_country_code_trigger");
          var container=$(document.createElement("div"));
          var submit=$("#select_country_code_submit");
          var cancel=$("#select_country_code_cancel");
          var result=$("#select_country_code_result");
          $(this.header).find(".btn_mod_close span").text(MSG.close);
            container.addClass("country-container");
            container.hide()
            container.html( RegionsCode.getAll({'usual':"常用"},true) );
            trigger.parent().append(container);
          trigger.bind('click',function(e){
            container.show();
            return false;
          });
          $(document.body).bind('click',function(){
            container.hide();
          });
          container.bind('click',function(e){
            var target=$(e.target||e.srcElement);
            var content=null;
            if(target.hasClass('record')){
              content=target;
            }else if(target.hasClass('record-country') || target.hasClass('record-code')){
              content=target.parent();
            }
            if(content){
              var text=content.find(".record-country").text();
              var code=content.find(".record-code").text();
              result.html(text+"("+code+")");
              resultCode=code;
              container.hide();
            }
            
            return false;
          });
          submit.bind("click",function(){
            submitCountryCode(resultCode,oldCode);
            container.hide()
            select_country_code_modal.hide();
            return false;
          });
          cancel.bind("click",function(){
            container.hide();
            select_country_code_modal.hide();
            return false
          });
        }
      });
    }
    select_country_code_modal.show();
    oldCode=resultCode;
  })
</script>
