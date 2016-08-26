@extends('layouts.index')

@section('con')
    <div class="mws-panel grid_8">
                    <div class="mws-panel-header">
                        <span>修改用户</span>
                    </div>
                    <!-- <div class="mws-form-message error"> -->
                        <!-- This is an error message
                        <ul>
                            <li>You are too fast</li>
                            <li>You are too slow</li>
                        </ul> -->
                    <!-- </div> -->

                    @if (count($errors) > 0)
                        <div class="mws-form-message error">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="mws-panel-body no-padding">
                        <form action="/admin/user/update" method="post" class="mws-form">
                        {{csrf_field()}}
                        <input type="hidden" name="id" value="{{$list->id}}">
                            <div class="mws-form-inline">
                                <div class="mws-form-row">
                                    <label class="mws-form-label">用户名:</label>
                                    <div class="mws-form-item">
                                        <input type="text" class="small" name="username" value="{{$list->username}}" >
                                    </div>
                                </div>
                               
                                 <div class="mws-form-row">
                                    <label class="mws-form-label">邮箱:</label>
                                    <div class="mws-form-item">
                                        <input type="text" class="small" name="email" value="{{$list->email}}">
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