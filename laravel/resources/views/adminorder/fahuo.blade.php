@extends('layouts.index')
@section('con')
<div class="mws-panel grid_8">
    	<div class="mws-panel-header">
        	<span><i class="icon-table"></i>订单列表</span>
        </div>
        <div class="mws-panel-body no-padding">
            <div role="grid" class="dataTables_wrapper" id="DataTables_Table_1_wrapper">
            <form action="/admin/order/index" method='get'>
            <div id="DataTables_Table_1_length" class="dataTables_length">
            <label>显示
            	<select name="num" value='' size="1" aria-controls="DataTables_Table_1">
	           	 	<option value="10"
						@if(!empty($request['num'])&& $request['num']==10)
							selected
						@endif
	           	 	>10</option>
	           		<option value="25"
						  @if(!empty($request['num'])&& $request['num']==25)
                            selected
                        @endif
	           		>25</option>
	           		<option value="50"
						  @if(!empty($request['num'])&& $request['num']==50)
                            selected
                        @endif
	           		>50</option>
	            	<option value="100"
						  @if(!empty($request['num'])&& $request['num']==100)
                            selected
                        @endif
	            	>100</option>
            	</select>页
            </label>
            </div>
           
            <div class="dataTables_filter" id="DataTables_Table_1_filter">
            	<label>搜索: 
            	<input value='@if(!empty($request['keywords'])){{$request['keywords']}}@endif' type="text" name='keywords' aria-controls="DataTables_Table_1">
            	<button class='btn btn-primary'>查询</button>
                </label>
            </div>
         </form>
            <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
                <thead>
                    <tr role="row">
	                    <th class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 156px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">订单ID</th>
	                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 212px;" aria-label="Browser: activate to sort column ascending">订单号</th>
	                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 197px;" aria-label="Platform(s): activate to sort column ascending">买家ID</th>
	                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 133px;" aria-label="Engine version: activate to sort column ascending">地址ID</th>
	                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 133px;" aria-label="Engine version: activate to sort column ascending">订单总价</th>
	                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 133px;" aria-label="Engine version: activate to sort column ascending">订单状态</th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 133px;" aria-label="Engine version: activate to sort column ascending">订单生成时间</th>
	                    <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 133px;" aria-label="Engine version: activate to sort column ascending">操作</th>
                        <!-- <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 97px;" aria-label="CSS grade: activate to sort column ascending">文章内容</th> -->
	                    
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
                        <td class=" ">{{$v->order_num}}</td>
                        <td class=" ">{{$v->uid}}</td>
                        <td class="dizhi"  attr="{{$v->sheng}},{{$v->shi}},{{$v->xian}}" ><span></span><i>{{$v->jiedao}}</i></td>
                        <td class=" ">{{$v->total}}</td>
                        <td class=" ">待收货</td>
                        <td class=" ">{{$v->created_at}}</td>
                        <td class=" "><a href="/admin/order/xq/{{$v->id}}" class='' style='color:black;font-size:16px'><button class='btn btn-primary'>详情</button></a> </td>
               
                        
                    </tr>
                   @endforeach
                </tbody>
            </table><div class="dataTables_info" id="DataTables_Table_1_info"></div>
            <div class="dataTables_paginate paging_full_numbers" id="pages">
            	{!!$list->appends($request)->render()!!}
	            
	
            	</div>
            </div>
        </div>
    </div>
<script type="text/javascript" src="/home/js/jquery-1.8.3.min.js"></script>
 <script type="text/javascript" src="/f/location.js"></script>                  
    

    <script type="text/javascript">
    $('.dizhi').each(function(){
            var attr=$(this).attr('attr');
            // var info=getInfo(attr);
            var arr = attr.split(',');
            console.log(arr);    
            var ls  = new Location;
            var l = ls.items;
            // console.log(l['0,1,2']['5']);
            var sheng = l['0'][arr[0]];
            var shi = l['0,'+arr[0]][arr[1]];
            var xian = l['0,'+arr[0]+','+arr[1]][arr[2]];
            var info= sheng+shi+xian;
             console.log(info);  
            $(this).find('span').html(info);
            // console.log(attr);
        });

    </script>
@endsection