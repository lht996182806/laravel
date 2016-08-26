@extends('layouts.index')
@section('con')
 <script type="text/javascript" charset="utf-8" src="/admin/baidu/ueditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="/admin/baidu/ueditor.all.min.js"> </script>
    <!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
    <!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
    <script type="text/javascript" charset="utf-8" src="/admin/baidu/lang/zh-cn/zh-cn.js"></script>
<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span>修改商品</span>
    </div>
    <div class="mws-panel-body no-padding">
        <form action="/admin/good/update" method="post" class="mws-form" enctype="multipart/form-data">
        @if (count($errors) > 0)
                        <div class="mws-form-message error">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li >{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
        {{csrf_field()}}
            <div class="mws-form-inline">
                <div class="mws-form-row">
                    <label class="mws-form-label">商品标题</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" name="title" value="{{$res->title}}">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">商品分类</label>
                    <div class="mws-form-item">
                        <select class="small" name="cate_id">
                            <option>请选择</option>
                           @foreach($list as $k=>$v)
                            <option value="{{$v->id}}"
                            @if($v->id==$res->cate_id)    
                            selected
                            @endif
                             >{{$v->name}}</option>
                           @endforeach
                        </select>
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">商品价格</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" name="price" value="{{$res->price}}">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">商品数量</label>
                    <div class="mws-form-item">
                        <input type="text" class="small" name="num" value="{{$res->num}}">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">商品图片</label>
                    <div class="mws-form-item">
                        <img src="{{$res->pic}}" width="100px" alt="">
                        <input type="file" name="pic" value="">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">商品详情</label>
                    <div class="mws-form-item">
                    <script id="editor" type="text/plain" style="width:800px;height:300px;">{!!$res->content!!}</script>
                       <!--  <textarea class="large" cols="" rows="" name="content"></textarea> -->
                    </div>
                </div>

                <div class="mws-form-row">
                    <label class="mws-form-label">颜色</label>
                    <div class="mws-form-item clearfix">
                        <ul class="mws-form-list inline">
                            <li><input type="checkbox" @if(in_array('红色',$res->color))checked @endif name="color[]" value="红色"> <label>红色</label></li>
                            <li><input type="checkbox" @if(in_array('蓝色',$res->color))checked @endif name="color[]" value="蓝色"> <label>蓝色</label></li>
                            <li><input type="checkbox" @if(in_array('青色',$res->color))checked @endif name="color[]" value="青色"> <label>青色</label></li>
                            <li><input type="checkbox" @if(in_array('紫色',$res->color))checked @endif name="color[]" value="紫色"> <label>紫色</label></li>
                            <li><input type="checkbox" @if(in_array('绿色',$res->color))checked @endif name="color[]" value="绿色"> <label>绿色</label></li>
                            <li><input type="checkbox" @if(in_array('白色',$res->color))checked @endif name="color[]" value="白色"> <label>白色</label></li>
                            <li><input type="checkbox" @if(in_array('黄色',$res->color))checked @endif name="color[]" value="黄色"> <label>黄色</label></li>
                            <li><input type="checkbox" @if(in_array('黑色',$res->color))checked @endif name="color[]" value="黑色"> <label>黑色</label></li>
                        </ul>
                    </div>
                </div>

                <div class="mws-form-row">
                    <label class="mws-form-label">尺码</label>
                    <div class="mws-form-item clearfix">
                        <ul class="mws-form-list inline">
                            <li><input type="checkbox" @if(in_array(16,$res->size))checked @endif name="size[]" value="16"> <label>16G</label></li>
                            <li><input type="checkbox" @if(in_array(32,$res->size))checked @endif name="size[]" value="32"> <label>32G</label></li>
                            <li><input type="checkbox" @if(in_array(64,$res->size))checked @endif name="size[]" value="64"> <label>63G</label></li>
                            <li><input type="checkbox" @if(in_array(39,$res->size))checked @endif name="size[]" value="128"> <label>128G</label></li>
                            <!-- <li><input type="checkbox" @if(in_array(40,$res->size))checked @endif name="size[]" value="40"> <label>40</label></li>
                            <li><input type="checkbox" @if(in_array(41,$res->size))checked @endif name="size[]" value="41"> <label>41</label></li>
                            <li><input type="checkbox" @if(in_array(42,$res->size))checked @endif name="size[]" value="42"> <label>42</label></li> -->
                            
                        </ul>
                    </div>
                </div>
               
                
            </div>
            <div class="mws-button-row" style="text-align:center">
                <input type="hidden" name="id" value="{{$res->id}}">
                <input type="submit" class="btn btn-danger" value="修改">
                <input type="reset" class="btn " value="重置">
            </div>
        </form>
    </div>      
</div>

<script type="text/javascript">
    
    var ue = UE.getEditor('editor',{toolbars:[
            ['fullscreen','source','undo','redo','bold','time','emotion','map','simpleupload','insertimage'],
            ['date','italic','underline','fontborder','strikethrough','superscript','subscript','removeformat','formatmath','autotypeset', 'blockquote', 'pasteplain', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc', '|',
            'rowspacingtop', 'rowspacingbottom', 'lineheight', '|']
        ]});
</script>
@endsection