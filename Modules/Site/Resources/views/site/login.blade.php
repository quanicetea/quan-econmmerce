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
                    <span>Login</span>
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
                            <div class="col-sm-3"></div>
                            <div class="col-sm-6">
                                <div class="commerce commerce-account">
                                    <h2 class="commerce-account-heading">Login</h2>
                                    @include('site::site.layout.notifications')
                                <form id="login-form" class="login" method="POST" action="{{route('site.post.login')}}">
                                    {{csrf_field()}}
                                        <div class="form-row form-row-wide">
                                            <div class="form-group has-feedback {{ $errors->has('login_email') ? ' has-error' : '' }}">
                                                <label for="login_email">
                                                    Email <span class="required">*</span>
                                                </label>
                                                <input type="email" class="form-control" autofocus
                                                       name="login_email" placeholder="Email" value="{{ old('login_email')}}">
                                                {!! $errors->first('login_email', '<span class="help-block">:message</span>') !!}
                                            </div>
                                        </div>
                                        <div class="form-row form-row-wide">
                                            <div class="form-group has-feedback {{ $errors->has('login_email') ? ' has-error' : '' }}">
                                                <label for="login_password">Password <span class="required">*</span></label>
                                                <input type="password" class="form-control" autofocus
                                                       name="login_password" placeholder="Password" value="{{ old('login_password')}}">
                                                {!! $errors->first('login_password', '<span class="help-block">:message</span>') !!}
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <button class="btn btn-outline rounded" type="submit">Login</button>
                                        </div>
                                        <div class="lost_password">
                                            <a href="#lostpasswordModal" data-rel="lostpasswordModal">Lost your password?</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-sm-3"></div>
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
					"login_email": {
						required: true,
                        email: true,
					},
					"login_password": {
						required: true,
					},
					// "re-password": {
					// 	equalTo: "#password",
					// 	minlength: 8
					// }
				},
                messages:{
                    "login_email":{
                        required: "Chưa nhập Email",
                        email: "Email không đúng định dạng"
                    },
                    "login_password":{
                        required: "Chưa nhập password"
                    }
                }
			});
    })
</script>
@endsection