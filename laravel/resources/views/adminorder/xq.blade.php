@extends('layouts.index')
@section('con')
<div class="mws-panel grid_8">

	<div class="mws-panel-header">
    	<span><i class="icon-table"></i>订单详情</span>
    </div>
    <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
        <thead>
            <tr role="row">
                <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 100px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">商品ID</th>
                <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 150px;" aria-label="Browser: activate to sort column ascending">名称</th>
                <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 160px;" aria-label="Platform(s): activate to sort column ascending">图片</th>
                <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 133px;" aria-label="Engine version: activate to sort column ascending">描述</th>
                <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 133px;" aria-label="Engine version: activate to sort column ascending">单价</th>
                <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 133px;" aria-label="Engine version: activate to sort column ascending">颜色</th>
                <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 133px;" aria-label="Engine version: activate to sort column ascending">型号</th>
                <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 133px;" aria-label="Engine version: activate to sort column ascending">操作</th>
               
            </tr>
        </thead>
        <tbody role="alert" aria-live="polite" aria-relevant="all">
    		
    		<tr>
    			@foreach($list as $k=>$v)
                <td class="  sorting_1">{{$v->id}}</td>
                <td class=" ">{{$v->title}}</td>
                <td class=" "><img src="{{$v->pic}}" width="50px" alt=""></td>
                
                <td class=" " width="120">{!!$v->content!!}</td>
                
                <td class=" ">{{$v->price}}</td>
               
                @endforeach
                @foreach($res as $key=>$value)
                <td class=" ">{{$value->color}}</td>
                <td class=" ">{{$value->size}}</td>
                <td class=" "> <a href="javascript:history.go(-1);"><button class='btn btn-primary'>返回列表</button></a></td>
                @endforeach
            </tr>
          	
        </tbody>
    </table>
</div>
@endsection