<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>

<style type="text/css">
    b{
      font-size:15px;
      float:left;
      color:#666666;
      margin-top:25px;
    }
    
    input{
      width:290px;
      height:38px;
      margin-top:15px;
      /*float:left;*/
      /*border:1px solid #ccc;*/
    }

    select{
      width:90px;
      height:38px;
      float:left;
      font-size:16px;
      border:1px solid #ccc;
      margin-top:15px;
      margin-right:10px;
    }
    
    li{
      list-style:none;
    }

    .sex{
      margin-top:20px;
      width:440px;
      height:42px;
      /*border:1px solid red;*/
      float:left;
    }

    .sex input{
      width:30px;
      height:10px;
      margin-top:18px;
      /*line-height:42px;*/
      border:1px solid blue;
    }
    
    .tip_btns{
      margin-left:60px;
    }

    .tip_btns input{
      width:120px;
      height:40px;
      margin-top:30px;
      margin-left:10px;
      float:left;
      font-size:15px;
    }
    
    .borthday b{
      margin-top:20px;
    }
    </style>
</head>

<body>
    <div class='mian' style="width:445px;height:365px;">
      <div class="mod_tip_hd">
        <h4 style="font-size:16px;float:left;margin-left:20px">编辑基础资料</h4>
        
      </div>
      <hr style="width:90%;color:#8F8F8F;float:left;margin-left:22px;margin-top:-10px">
      <div class="mod_tip_bd">
        <form method="post" action="/editmessage">      
        {{csrf_field()}}
          <div class="wapbox editbasicinfo" style="float:left;margin-left:40px">
           
              <b>姓名：&nbsp;</b>
              <dd>
                <label class="labelbox">
                  <input type="text" name="username"  placeholder="姓名" maxlength="20" name="nickname" class="nickname">
                </label>
              </dd>
              <div class='borthday'>
                <b>生日：&nbsp;</b>
                    <ul class="birth-box c_b">
                      <li class="biry">
                        <div>
                          <span class="titsbirth c_b">
                            <em class="birthcon"></em>
                            <i class="icon_cirarr"></i>
                          </span>
                        </div>

                            <select name="year">
                                <?php 
                                      for($i=2016;$i>1900;$i--){
                                         echo '<option value="'.$i.'">';
                                           echo $i;
                                         echo '</option>';
                                      } 
                                ?>
                            </select>
                      </li>


                      <li class="month_day birm">              
                        <div>
                          <span class="titsbirth c_b">
                            <em class="birthcon"></em>
                            <i class="icon_cirarr"></i>
                          </span>                  
                        </div>
                            <select name="month">
                                <?php 
                                      for($i=1;$i<13;$i++){
                                         echo '<option value="'.$i.'">';
                                           echo $i;
                                         echo '</option>';
                                      } 
                                ?>
                            </select>
                      </li>

                      <li class="month_day bird">                
                        <div>
                          <span class="titsbirth c_b">
                            <em class="birthcon"></em>
                            <i class="icon_cirarr"></i>
                          </span>                 
                        </div>
                            <select name="day">
                                <?php 
                                      for($i=1;$i<32;$i++){
                                         echo '<option value="'.$i.'">';
                                           echo $i;
                                         echo '</option>';
                                      } 
                                ?>
                            </select>
                      </li>
                    </ul><br> 
                  </div>        
       
            <div class="sex">
              <b>性别：&nbsp;</b>
                <input type="radio" name="sex" value="1">男
                <input type="radio" name="sex" value="2">女
                <input type="radio" name="sex" value="3">保密
              
            </div>
          
            <div class="tip_btns">
              <input style="background:#FF6700;color:white" type="submit" value="保存">
              <!-- <input class="btn_tip btn_commom" type="submit" value="保存"> -->
              <input type="reset" value="取消" >
            </div>
          </div>
        </form> 
      </div>
    </div>
</body>
</html>