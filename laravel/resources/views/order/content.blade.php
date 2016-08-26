<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>评论商品</title>
    <style type="text/css">
        .mod_acc_tip{
            width:360px;
            height:350px;
            background:#FFFFFF;
            /*border:1px solid #838383;*/
        }

        h4{
            float:left; 
            margin-left:22px;
        }

        

        hr{
            width:86%;
            float:left;
            color:#E6E6E6;
            margin-left:22px;

        }

        

        
        input{
            height:42px;
            width:275px;
            border:1px solid #E8E8E8;
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

    <div style="display: block;margin-left:30px" class="mod_acc_tip" id="popUpdatePassword">
            <div class="mod_tip_hd">
                <h4>商品评论</h4>
                
                <hr>
            </div>
            <div class="mod_tip_bd">
                <div class="modify_pwd">
                    <dl>
                        <form action="/content/insert" method='post'>
                        {{csrf_field()}}
                        <dd class="grpOldPass">
                        <input type="hidden" name="goods_id" value="{{$id}}">
                        <input type="hidden" name="order_num" value="{{$num}}">
                            <label class="labelbox error_bg"><textarea name="contents" id="" cols="30" rows="10"></textarea></label>
                            
                        </dd>
                        
                        
                    </dl>               
                </div>
                <div class="tip_btns">
                    <input type="submit" value="提交" class="tipok">
                    <input type="reset" value="重置" class="tipno">
                </div>
                </form>
            </div>
        </div>

</body>
</html>