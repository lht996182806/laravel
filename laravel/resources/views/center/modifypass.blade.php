<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>修改密码</title>
    <style type="text/css">
        .mod_acc_tip{
            width:440px;
            height:505px;
            background:#FFFFFF;
            /*border:1px solid #838383;*/
        }

        h4{
            float:left; 
            margin-left:22px;
        }

        .btn_mod_close{
            color:#CCCCCC;
            float:right; 
            font-size:20px; 
            margin-right:5px; 
            margin-top:5px; 
        }

        hr{
            width:90%;
            float:left;
            color:#E6E6E6;
            margin-left:22px;

        }

        .mod_tip_bd{
            /*border:1px solid red;*/
            float:left;
        }

        .grpNewPass{
            /*border:1px solid green;*/
            float:left;
        }

        input{
            height:42px;
            width:275px;
            border:1px solid #E8E8E8;
        }

        dt{
            color:#555555;
            margin-left:40px;
            margin-bottom:8px;
            margin-top:8px;
        }

        .txt_tip{
            color:#666666;
            font-size:12px;
            margin-top:4px;
        }

        .tipok{
            width:123px;
            height:36px;
            margin-left:45px;
            margin-top:30px;
            /*border:1px solid red;*/
            color:white;
            background:#FF6700;
        }

        .tipno{
            width:123px;
            height:36px;
            margin-left:10px;
            margin-top:30px;
            /*border:1px solid red;*/
        }
    </style>
</head>
<body>

    <div style="display: block;" class="mod_acc_tip" id="popUpdatePassword">
            <div class="mod_tip_hd">
                <h4>修改密码</h4>
                
                <hr>
            </div>
            <div class="mod_tip_bd">
             @if (count($errors) > 0)
                <div class="mws-form-message error" style="margin-left:100px;color:#FF6700">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <div class="modify_pwd">
                    <dl>
                        <form action="/editpsw" method='post'>
                        {{csrf_field()}}
                        <dt>原密码</dt>
                        <dd class="grpOldPass">
                            <label class="labelbox error_bg">
                                <input type="password" name="password" disableautocomplete="" autocomplete="off" placeholder="输入原密码" class="oldPass">
                            </label>
                            <!-- 错误信息提示 -->
                            <!-- <div style="display:none;" class="wng_pwd err_tip err_tip_independ" _text="原密码不正确">原密码不正确</div>
                            <div style="display: block;" class="empty_pwd err_tip err_tip_independ" _text="原密码不能为空">原密码不能为空</div> -->
                        </dd>
                        <dt>新密码</dt>
                        <dd class="grpNewPass">
                            <label class="labelbox">
                                <input type="password" name="newpassword" disableautocomplete="" autocomplete="off" placeholder="输入新密码" class="newPass">
                            </label>
                            
                            <br><br>

                            <label class="labelbox">
                                <input type="password" name="renewpassword" disableautocomplete="" autocomplete="off" placeholder="重复新密码" class="newPass2">
                            </label>
                            <!-- 错误信息显示时隐藏 -->
                            <div style="display:none;" class="pwd_mismatch err_tip_independ err_tip" _text="两次输入的新密码不一致">两次输入的新密码不一致</div>
                            <!-- 错误信息显示时隐藏 -->
                            <div style="display:none;" class="empty_pwd err_tip_independ err_tip" _text="新密码不能为空">新密码不能为空</div>
                            <!-- 错误信息显示时隐藏 -->
                            <div style="display:none;" class="empty_pwd2 err_tip_independ err_tip" _text="请重复新密码">请重复新密码</div>
                            <!-- 错误信息显示时隐藏 -->
                            <div style="display:none;" class="pwd_fmt err_tip_independ err_tip" _text="密码长度8~16位，其中数字，字母和符号至少包含两种">密码长度8~16位，其中数字，字母和符号至少包含两种</div>
                            <!-- 错误信息显示时隐藏 -->
                            <div style="display:none;" class="same_pwd err_tip_independ err_tip" _text="不能与原密码相同">不能与原密码相同</div>
                            <!-- 错误信息显示时隐藏 -->
                            <div style="display:none;" class="too_much err_tip_independ err_tip" _text="您的操作频率过快，请稍后再试。">您的操作频率过快，请稍后再试。</div>
                            <!-- 错误信息显示时隐藏 -->
                            <div style="display:none;" class="eq_email err_tip_independ err_tip" _text="密码不能与邮箱相同">密码不能与邮箱相同</div>
                            <div style="display:none;" class="pwd_in_black err_tip_independ err_tip" _text="您的密码可能存在安全风险，请您重新设置一个全新的密码">您的密码可能存在安全风险，请您重新设置一个全新的密码</div>
              <div style="display:none;" class="repwd_format_error err_tip_independ err_tip" _text="新密码格式错误">新密码格式错误</div>
                            <!-- 错误信息提示去掉class=txt_tip -->
                            <div class="txt_tip" _text="密码长度8~16位，其中数字，字母和符号至少包含两种">密码长度8~16位，其中数字，字母和符号至少包含两种</div>        

                            <div class="sys_err err_tip err_tip_independ" style="display:none;" _text="系统错误。错误码：">系统错误。错误码：<span class="err_code"></span></div>                     
                        </dd>
                        
                    </dl>               
                </div>
                <div class="tip_btns">
                    <input type="submit" value="确定" class="tipok">
                    <input type="reset" value="取消" class="tipno">
                </div>
                </form>
            </div>
        </div>

</body>
</html>