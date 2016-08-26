<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0, maximum-scale=1.0,user-scalable=no">
<title>小米帐号 - 注册</title>

    <link type="text/css" rel="stylesheet" href="index/css/reset.css">
<link type="text/css" rel="stylesheet" href="index/css/layout.css">

    <link type="text/css" rel="stylesheet" href="index/css/registerpwd.css">

  
<style>
.facebook_area{
  display:none!important;
}
</style>
 <!-- <div class="listwrap" id="select-cycode" _region="CN" _def_method="PH">
    <div class="listtit" id="reg-phone-select-cty">
      <span class="tits dis_box c_b">
        <tt id="select-cycode-result">中国(+86)</tt>
        <i class="icon_cirarr" ></i>
      </span>
    </div>
  </div> -->
</head>

<body class="zh_CN">
<div class="wrapper">
<div class="wrap">
<div class="layout">
  <div class="n-frame device-frame reg_frame" id="main_container">
    <div class="external_logo_area"><a class="milogo" href="javascript:void(0)"></a></div>
    <div class="title-item t_c">
      <h4 class="title_big30">注册小米帐号</h4>          
    </div>  
    
    <div class="phone_step1">
    <center>
    @if (count($errors) > 0)
    <div class="inputbg" style="background:#FEF0B1;width:330px;margin-bottom:8px">
        <ul >
            @foreach ($errors->all() as $error)
                <li style="color:#AE8B15;font-size:16px;margin-top:4px">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    @if(session('error'))
        <div class="inputbg" style="background:#FEF0B1;width:330px;margin-bottom:8px">
             <span style="color:#AE8B15;font-size:16px;margin-top:4px">{{session('error')}}</span>         
        </div>
    @endif
    <form action="/register" method="post" >
    {{csrf_field()}}
    <div class="inputbg">
      <label class="labelbox" for="">
        <input type="tel" name="email" data-type="PH" placeholder="请输入邮箱">
      </label>
    </div>
    
    <div class="inputbg">
      <label class="labelbox" for="">
        <input type="password" name="password" data-type="PH" placeholder="请输入密码">
      </label>
    </div>
    <div class="inputbg">
      <label class="labelbox" for="">
        <input type="password" name="repassword" data-type="PH" placeholder="请再次输入密码">
      </label>
    </div>
    <div class="err_tip">
      <div class="dis_box"><em class="icon_error"></em><span></span></div>
    </div>
    <div class="inputbg inputcode dis_box">
      <label class="labelbox" for="">
        <input class="code" type="text" name="vcode"  placeholder="图片验证码" style="float:left;margin-left:140px;width:60px">
      </label>
      <img alt="图片验证码" src="/vcode" title="看不清换一张" onclick="this.src='/vcode'+'?a='+Math.random()">
    </div>
    <div class="err_tip">
      <div class="dis_box"><em class="icon_error"></em><span></span></div>
    </div>
    <div class="err_tip send-left-times">
    </div>
    <div class="fixed_bot mar_phone_dis1">
      <input class="btn332 btn_reg_1 submit-step"  type="submit" value="立即注册">
      <img style="display:none;" src="/pass/ajax/tick?biz=register&type=web&step=0" />
      <p class="msg">
      点击“立即注册”，即表示您同意并愿意遵守小米
      <a href="http://www.miui.com/res/doc/eula/cn.html"  target="_blank" title="用户协议">用户协议</a>
      和
      <a href="http://www.miui.com/res/doc/privacy/cn.html" target="_blank" title="隐私政策">隐私政策</a>
      </p>
    </div>
    </form>
  </div>
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

</body>
</html>
<style>
  .btn_circle_close{ display:none;}
</style>

