<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <style type="text/css">
      .mod_tip{
        width:450px;
        height:300px;
        /*border:1px solid #ccc;*/
      }

      .mod_tip_hd{
        font-size:16px;
        margin-top:20px;
      }
  </style>
</head>
<body>
  

<div class="mod_tip" style="display: block;">
  <div class="mod_tip_hd">
    <b style="margin-left:20px">设置头像</b>
  </div>
  <hr style="width:90%;color:#F8F8F8">
  <div class="mod_tip_bd preupload" style="display: block;">
    <iframe width="0" height="0" id="uploadPhoto" name="uploadPhoto" style="display:none;">
      
    </iframe>
    <form  enctype="multipart/form-data" method="post" action="/center/doEditPic">  
    {{csrf_field()}} 
        <div class="wapbox accset">
          <dl>
            <dt><strong class="wap_title_big" style="font-size:14px;margin-left:130px">请上传图片：</strong></dt>
            <dd>
                <div class="uplode_img">
                  <input type="file" name='userpic' style="width:200px;height:33px;background:#FF6903;margin-left:89px;margin-top:15px">
                </div>
              <p style="font-size:13px;color:#748193;margin-left:89px;margin-top:2px">jpg 或 png，大小不超过2M</p>
            </dd>              
          </dl>
          <div style="display:none;" class="err_tip wng_fmt err_tip_independ" _text="图片格式不符合要求！">图片格式不符合要求！</div>       
          <div style="display:none;" class="err_tip sys_err err_tip_independ" _text="系统错误，请稍候再试">系统错误，请稍候再试</div> 
          <div style="display:none;" class="err_tip file_too_large err_tip_independ" _text="文件太大，上传失败">文件太大，上传失败</div> 
        </div>      
        <div class="tip_btns">      
          <input type="submit" value="保存" style="width:120px;height:35px;background:#FF6903;color:white;border:1px solid #ccc;margin-left:160px;margin-top:30px">
        </div>
    </form> 
  </div>  
  <div style="display:none;" class="mod_tip_bd uploading">  
    <div class="wapbox">
    <div class="mar30 t_c">
      <!-- loading图片 -->
      <img width="88" height="88" alt="" src="https://account.xiaomi.com/static/res/156418c/passport/acc-2014/img/loading.gif">
      <div class="naccprocess">
        <p style="display:none;" class="ft20"><span></span>%</p>
        <p>上传中</p>
      </div>
    </div>      
    <div style="display:none; margin-left:100px;" class="err_tip wng_fmt err_tip_independ" _text="图片格式不符合要求！">图片格式不符合要求！</div>       
    <div style="display:none; margin-left:100px;" class="err_tip file_too_large err_tip_independ" _text="文件太大，上传失败">文件太大，上传失败</div> 
    <div style="display:none;" class="err_tip sys_err uploaderror err_tip_independ" _text="系统错误，请稍候再试">系统错误，请稍候再试</div>
      <div style="display:none; margin-left:100px;" class="err_tip missing_param err_tip_independ" _text="缺少参数">缺少参数</div>
      <div style="display:none; margin-left:100px;" class="err_tip missing_file err_tip_independ" _text="找不到指定文件">找不到指定文件</div>
      <div style="display:none; margin-left:100px;" class="err_tip unsupported_mime_type err_tip_independ" _text="不支持的MIME TYPE">不支持的MIME TYPE</div>
    </div>
    <div class="tip_btns">      
      <!-- <input class="btn_tip btn_commom" type="submit" value="保存"> -->
      <a title="取消" href="" class="btn_tip btn_back" id="abortUpload">取消</a>
    </div>
  </div>

  <div class="mod_tip_bd uploaded" style="display: none;">
    <div class="wapbox">
        <div class="clipimg t_c">
            <!-- 图片放置位置       -->
            <div class="uploadimgs">
              <img alt="">
              <!--
              <div class="clip"></div>
              -->
            </div>
            <div class="movebox" style="">
                <i class="icon_square icon_square_rightbot"></i>
            </div>  
        </div>
        <div class="cliperror">
            <div style="display:none;" class="err_tip sys_err err_tip_independ" _text="系统错误，请稍候再试">系统错误，请稍候再试</div> 
            <div style="display:none;" class="err_tip bad_param err_tip_independ" _text="参数错误">参数错误</div> 
            <div style="display:none;" class="err_tip upload_failed err_tip_independ" _text="上传失败">上传失败</div> 
        </div>
    </div>
    <div class="tip_btns">      
      <input type="submit" value="确定" class="btn_tip btn_commom">
      <a id="reuploadPhoto" title="重新上传" href="" class="btn_tip btn_back">重新上传</a>
    </div>
  </div>  
</div>


</body>
</html>