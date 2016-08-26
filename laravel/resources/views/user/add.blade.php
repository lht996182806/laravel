@extends('layouts.index')

@section('con')
    <div class="mws-panel grid_8">
                    <div class="mws-panel-header">
                        <span>添加用户</span>
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
                        <form action="/admin/user/insert" method="post" class="mws-form">
                        {{csrf_field()}}
                            <div class="mws-form-inline">
                                <div class="mws-form-row">
                                    <label class="mws-form-label">用户名:</label>
                                    <div class="mws-form-item">
                                        <input type="text" class="small" name="username" value="{{old('username')}}" >
                                    </div>
                                </div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">密码:</label>
                                    <div class="mws-form-item">
                                        <input type="text" class="small" name="password">
                                    </div>
                                </div>
                                <div class="mws-form-row">
                                    <label class="mws-form-label">确认密码:</label>
                                    <div class="mws-form-item">
                                        <input type="text" class="small" name="repassword">
                                    </div>
                                </div>
                                 <div class="mws-form-row">
                                    <label class="mws-form-label">邮箱:</label>
                                    <div class="mws-form-item">
                                        <input type="text" class="small" name="email" value="{{old('username')}}">
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