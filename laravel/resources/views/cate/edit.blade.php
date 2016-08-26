@extends('layouts.index')

@section('con')
    <div class="mws-panel grid_8">
                    <div class="mws-panel-header">
                        <span>修改分类</span>
                    </div>
                    <!-- <div class="mws-form-message error"> -->
                        <!-- This is an error message
                        <ul>
                            <li>You are too fast</li>
                            <li>You are too slow</li>
                        </ul> -->
                    <!-- </div> -->

                   
                    <div class="mws-panel-body no-padding">
                        <form action="/admin/cate/update" method="post" class="mws-form">
                        {{csrf_field()}}
                        <input type="hidden" name="id" value="{{$res->id}}">
                            <div class="mws-form-inline">
                                <div class="mws-form-row">
                                    <label class="mws-form-label">分类名:</label>
                                    <div class="mws-form-item">
                                        <input type="text" class="small" name="name" value="{{$res->name}}" >
                                    </div>
                                </div>
                               
                                 <div class="mws-form-row">
                                    <label class="mws-form-label">父级分类</label>
                                    <div class="mws-form-item">
                                        <select class="small" name="pid" disabled>
                                            <option value="0">顶级分类</option>
                                            @foreach($list as $k=>$v)
                                                <option value="{{$v->id}}" 
                                               @if($v->id==$res->pid)
                                                    selected
                                               @endif
                                                >{{$v->name}}</option>
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