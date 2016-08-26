@extends('layouts.index')

@section('con')
    <div class="mws-panel grid_8">
                    <div class="mws-panel-header">
                        <span>添加分类</span>
                    </div>
                    <!-- <div class="mws-form-message error"> -->
                        <!-- This is an error message
                        <ul>
                            <li>You are too fast</li>
                            <li>You are too slow</li>
                        </ul> -->
                    <!-- </div> -->

                    <div class="mws-panel-body no-padding">
                        <form action="/admin/cate/insert" method="post" class="mws-form">
                        {{csrf_field()}}
                            <div class="mws-form-inline">
                                <div class="mws-form-row">
                                    <label class="mws-form-label">分类名称:</label>
                                    <div class="mws-form-item">
                                        <input type="text" class="small" name="name" value="{{old('name')}}" >
                                    </div>
                                </div>
                                
                                <div class="mws-form-row">
                                    <label class="mws-form-label">父级分类</label>
                                    <div class="mws-form-item">
                                        <select class="small" name="pid">
                                            <option value="0">顶级分类</option>
                                            @foreach($list as $k=>$v)
                                               
                                                @if(!empty($id) && $v->id==$id)
                                                    <option value="{{$v->id}}" selected>{{$v->name}}</option>
                                                @else
                                                     <option value="{{$v->id}}">{{$v->name}}</option>
                                                @endif
                                                
                                               
                                                
                                            @endforeach
                                        </select>
                                    </div>
                                </div> 
                            </div>
                            <div class="mws-button-row">
                                <input type="submit" class="btn btn-danger" value="提交">
                                <input type="reset" class="btn " value="重置">
                            </div>
                        </form>
                    </div>      
                </div>
@endsection