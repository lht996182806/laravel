<script type="text/javascript" src="/home/js/jquery-1.8.3.min.js"></script>
<script src="/order_files/area.js"></script>
<script src="/order_files/location.js"></script>
<!--点击弹出层-->
<div  id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="margin-left:20px">
    <div class="modal-dialog" role="document">
        <form action="/address/cinsert" method="post">
        <div class="modal-content">
            <div class="modal-header">

                <h3 class="modal-title" id="myModalLabel">添加收货地址</h3></div>
                <div class="modal-body">
                    <div class="form-group" style="font-size:16px;height:50px"><label for="exampleInputEmail1">收件人:</label><input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="" style="size:12px;margin-left:10px">
                    </div>
                    <div class="form-group" style="font-size:16px;height:50px">
                    <label for="exampleInputPassword1">手机号:</label>
                    <input type="text" class="form-control" name="phone" id="exampleInputPassword1" placeholder="" style="size:12px;margin-left:10px">
                    </div>
                    <div style="height:50px;font-size:16px">
                        城 市:<select id="loc_province"  class="" name="sheng" style="margin-left:22px;width:80px">请选择</select>
                        <select id="loc_city" class="" name="shi" style="width:100px;"></select>
                        <select id="loc_town" class="" name="xian" style="width:120px;"></select>
                    </div>
                    <div class="form-group" style="font-size:16px">
                    <label for="exampleInputPassword1" style="float:left">街道:</label>
                    <textarea style="size:12px;margin-left:22px" name="jiedao" id="" class="form-control" cols="30" rows="6"></textarea>
                    </div>
                    <div class="checkbox" style="size:12px;margin-left:10px"><label>
                    <input type="checkbox" name="isdefault" value="1">选中默认</label>
                    </div>
                    </div>
                    <div class="modal-footer" style="margin-top:8px">{{csrf_field()}}
                        <center>
                            <!-- <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button> -->
                            <button type="submit" class="btn btn-primary" style="background:#F75E04;color:white;width:150px;height:40px">添加</button>
                        </center>
                    
                    </div>
        </div>
        </form>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
    showLocation();
    $('#addresses .attr').each(function(){
        var str = $(this).attr('attr');
        var info = getInfo(str);
        $(this).html(info);
    });

    //定义获取城市信息方法
    function getInfo(str){
        //console.log(str);
        //拆分字符串
        var arr = str.split(',');
        // console.log(arr);    
        var ls  = new Location;
        var l = ls.items;
        // console.log(l['0,1,2']['5']);
        var sheng = l['0'][arr[0]];
        var shi = l['0,'+arr[0]][arr[1]];
        var xian = l['0,'+arr[0]+','+arr[1]][arr[2]];
        return sheng+shi+xian;
    }

    //点击选中默认地址
    $('#addresses .item').each(function(){
        $(this).click(function(){
            //
            $('#addresses .item').removeClass('aa');    
            $(this).addClass('aa');
            //获取当前点击的地址id
            var id  = $(this).attr('aid');  
            $('input[name=address_id]').val(id);
        })
    })              
});
</script>
