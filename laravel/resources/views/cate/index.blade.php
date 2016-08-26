@extends('layouts.index')

@section('con')

<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span><i class="icon-table"></i>分类列表</span>
    </div>
    <div role="grid" class="dataTables_wrapper" id="DataTables_Table_1_wrapper">
         <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
        <thead>
            <tr role="row">
                <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 156px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">类别ID</th>
                <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 212px;" aria-label="Browser: activate to sort column ascending">类别名称</th>
                <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 197px;" aria-label="Platform(s): activate to sort column ascending">分类PATH</th>
                <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 133px;" aria-label="Engine version: activate to sort column ascending">状态</th>
                <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 97px;" aria-label="CSS grade: activate to sort column ascending">操作</th>
            </tr>
        </thead>
        <tbody role="alert" aria-live="polite" aria-relevant="all">
            @foreach($list as $k=>$v)
                @if($k%2==0)
                    <tr class="odd">
                @else
                    <tr class="even">
                @endif
            
                <td class="  sorting_1">{{$v->id}}</td>
                <td class=" ">{{$v->name}}</td>
                <td class=" ">{{$v->path}}</td>
                <td class=" ">{{$v->status}}</td>
                <td class=" ">
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <a info="{{$v->id}}" onclick="delFun(this)" class="icon-trash" style="color:black;font-size:20px"></a>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="/admin/cate/add/{{$v->id}}" class="icon-plus" style="color:black;font-size:20px"></a>
                    &nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="/admin/cate/edit/{{$v->id}}" class="icon-wrench" style="color:black;font-size:16px"></a>
                </td>
            </tr>
            @endforeach
        </tbody>
        </table>
        <div class="dataTables_info" id="DataTables_Table_1_info">分类列表</div>
       
    </div>

</div>

    <script type="text/javascript">
        function delFun(obj){
        //     var r=layer.confirm('确定要删除吗?');
             var id=obj.getAttribute('info');
        //     if(r==true){
        //         location.href="/admin/article/del/"+id;
                
        //     }else{
        //         return false;
        //     }
        // }
        var r=layer.confirm('确定要删除吗?', {
              btn: ['干掉它','再想想'] //按钮
            }, function(){
              layer.msg('Good bey', {icon: 1});
              location.href="/admin/cate/del/"+id;
            }, function(){
              layer.msg('三思而后行', {
                time: 1000, //20s后自动关闭
                btn: ['ok']
              });
            }); 
    }
    </script>


@endsection
