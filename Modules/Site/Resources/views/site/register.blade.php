@extends('site::site.layout.master')
@section('content')
<div class="heading-container">
    <div class="container heading-standar">
        <div class="page-breadcrumb">
            <ul class="breadcrumb">
                <li>
                    <span>
                        <a class="home" href="#">
                            <span>Home</span>
                        </a>
                    </span>
                </li>
                <li>
                    <span>Register</span>
                </li>
            </ul>
        </div>
    </div>
    <div class="content-container no-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="main-content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="commerce commerce-account">
                                    <h2 class="commerce-account-heading">Register</h2>
                                    @include('site::site.layout.notifications')
                                <form id="login-form" class="login" method="POST" action="{{route('register.post')}}">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group has-feedback {{ $errors->has('first_name') ? ' has-error has-feedback' : '' }}">
                                                    <label for="first_name">{{ trans('user::auth.first_name') }}</label>
                                                    <input type="text" name="first_name" class="form-control" autofocus
                                                           placeholder="{{ trans('user::auth.first_name') }}" value="{{ old('first_name') }}">
                                                    {!! $errors->first('first_name', '<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group has-feedback {{ $errors->has('last_name') ? ' has-error has-feedback' : '' }}">
                                                    <label for="last_name">{{ trans('user::auth.last_name') }}</label>
                                                    <input type="text" name="last_name" class="form-control" autofocus
                                                           placeholder="{{ trans('user::auth.last_name') }}" value="{{ old('last_name') }}">
                                                    {!! $errors->first('last_name', '<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error has-feedback' : '' }}">
                                                    <label for="email">{{ trans('user::auth.email') }}</label>
                                                    <input type="email" name="email" class="form-control" autofocus
                                                           placeholder="{{ trans('user::auth.email') }}" value="{{ old('email') }}">
                                                    {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group has-feedback {{ $errors->has('phone') ? ' has-error has-feedback' : '' }}">
                                                    <label for="phone">{{ trans('user::auth.phone') }}</label>
                                                    <input type="text" name="phone" class="form-control" autofocus
                                                           placeholder="{{ trans('user::auth.phone') }}" value="{{ old('phone') }}">
                                                    {!! $errors->first('phone', '<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group has-feedback {{ $errors->has('password') ? ' has-error has-feedback' : '' }}">
                                                    <label for="password">{{ trans('user::auth.password') }}</label>
                                                    <input id="pw" type="password" name="password" class="form-control" placeholder="{{ trans('user::auth.password') }}">
                                                    {!! $errors->first('password', '<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group has-feedback {{ $errors->has('password_confirmation') ? ' has-error has-feedback' : '' }}">
                                                    <label for="password_confirm">{{ trans('user::auth.password confirmation') }}</label>
                                                    <input type="password" name="password_confirmation" class="form-control" placeholder="{{ trans('user::auth.password confirmation') }}">
                                                    {!! $errors->first('password_confirmation', '<span class="help-block">:message</span>') !!}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-group has-feedback {{ $errors->has('address') ? ' has-error has-feedback' : '' }}">
                                            <label for="address">{{ trans('user::auth.address') }}</label>
                                            <input type="text" name="address" class="form-control" autofocus
                                                   placeholder="{{ trans('user::auth.address') }}" value="{{ old('address') }}">
                                            {!! $errors->first('address', '<span class="help-block">:message</span>') !!}
                                        </div>
                                    </div>
                                    
                                    <div class="form-row">
                                        <button class="btn btn-outline rounded" type="submit">Register</button>
                                    </div>
                                    <div class="lost_password">
                                        <a href="#lostpasswordModal" data-rel="lostpasswordModal">Lost your password?</a>
                                    </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    $(document).ready(function(){
        $("#login-form").validate({
				onfocusout: false,
				onkeyup: false,
				onclick: false,
				rules: {
					"first_name": {
						required: true,
					},
					"last_name": {
						required: true,
					},
					"email": {
						required: true,
						email: true,
					},
					"phone": {
						required: true,
						number: true,
					},
					"password":{
						required: true,
					},
					"password_confirmation":{
						required: true,
						equalTo: "#pw"
					},
					"address":{
						required: true,
					}
				},
				messages:{
                    "first_name":{
                        required: "Chưa nhập Họ",
                    },
					"last_name":{
						required: "Chưa nhập Tên",
					},
					"email":{
                        required: "Chưa nhập Email",
                        email: "Email không đúng định dạng"
                    },
					"phone": {
						required: "Chưa nhập SĐT",
						number: "SĐT phải là số",
					},
					"password":{
						required: "Chưa nhập mật khẩu",
					},
					"password_confirm":{
						required: "Chưa nhập lại mật khẩu",
						equalTo: "Mật khẩu không trùng khớp"
					},
					"address":{
						required: "Chưa nhập địa chỉ",
					}
                }
		});
    })
</script>
@endsection