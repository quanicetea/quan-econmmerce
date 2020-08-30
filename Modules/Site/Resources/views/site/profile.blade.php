@extends('site::site.layout.master')
@section('content')
<div class="heading-container">
    <div class="container heading-standar">
        <div class="page-breadcrumb">
            <ul class="breadcrumb">
                <li>
                    <span>
                    <a class="home" href="{{route('site.homepage')}}">
                            <span>Home</span>
                        </a>
                    </span>
                </li>
                <li>
                    <span>Hồ sơ cá nhân</span>
                </li>
                <li>
                    <span>{{$customer->first_name}} &nbsp;{{$customer->last_name}}</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="content-container" style="padding-top:0px">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-content">
                    <div class="commerce">
                        <div class="row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-6">
                                <h2 class="commerce-account-heading">Hồ sơ cá nhân</h2>
                            <form id="update-form" class="login" method="post" action="{{route('site.post.updateprofile',$user->id)}}">
                                {{csrf_field()}}    
                            <input type="hidden" value="{{$user->id}}" name="id">
                                <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-row form-row-wide">
                                                <label for="user_first_name">
                                                    {{ trans('user::auth.first_name') }} <span class="required">*</span>
                                                </label>
                                            <input type="text" class="input-text" name="user_first_name" id="user_first_name" value="{{$user->first_name,old('user_first_name')}}" placeholder="First Name">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-row form-row-wide">
                                                <label for="user_last_name">
                                                    {{ trans('user::auth.last_name') }} <span class="required">*</span>
                                                </label>
                                                <input type="text" class="input-text" name="user_last_name" id="user_last_name" value="{{$user->last_name,old('user_last_name')}}" placeholder="Last Name">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-row form-row-wide">
                                                <label for="user_email">
                                                    {{ trans('user::auth.email') }} <span class="required">*</span>
                                                </label>
                                            <input style="background-color: aliceblue" disabled type="text" class="input-text" name="user_email" id="user_email" value="{{$user->email}}">
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-row form-row-wide">
                                                <label for="user_phone">
                                                    {{ trans('user::auth.phone') }} <span class="required">*</span>
                                                </label>
                                            <input type="text" class="input-text" name="user_phone" id="user_phone" value="{{$user->phone,old('user_phone')}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-row form-row-wide">
                                                <label for="user_address">
                                                    {{ trans('user::auth.address') }} <span class="required">*</span>
                                                </label>
                                            <input type="text" class="input-text" name="user_address" id="user_address" value="{{$user->address,old('user_address')}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <label for="changePassWord" class="inline form-flat-checkbox">
                                            <input name="changePassWord" type="checkbox" id="changePassWord" value=""><i></i>{{trans('user::auth.change password')}} 
                                        </label>
                                        <br><br>
                                    </div>
                                    <div class="change-password" id="change-password">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-row form-row-wide">
                                                    <label for="user_new_password">
                                                        {{ trans('user::auth.new password') }} <span class="required">*</span>
                                                    </label>
                                                <input type="password" class="input-text" name="user_new_password" id="user_new_password" value="{{old('user_new_password')}}">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-row form-row-wide">
                                                    <label for="user_new_password_confirm">
                                                        {{ trans('user::auth.password confirmation') }} <span class="required">*</span>
                                                    </label>
                                                <input type="password" class="input-text" name="user_new_password_confirm" id="user_new_password_confirm" value="{{old('user_new_password_confirm')}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <button class="btn btn-outline rounded" type="submit">Lưu thay đổi</button>
                                    </div>
                                    {{-- <div class="lost_password">
                                        <a href="#">Lost your password?</a>
                                    </div> --}}
                                </form>
                            </div>
                            <div class="col-sm-3"></div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('css')
<style>
    .change-password{
        display: none;
    }
</style>
@endsection
@section('script')
<script>
    $( document ).ready(function(){
        // $('#change-password').removeClass('change-password')
        var is_checked;
        // $('#changePassWord').val('false')
        // console.log($('#changePassWord').val())
        // var is_checked = $('#changePassWord').prop('checked')
        // console.log(is_checked);
        $('#changePassWord').change(function(e){
            is_checked = $('#changePassWord').prop('checked')
            if(is_checked){
                $(this).val('true')
                $('#user_new_password').prop('required', true);
                $('#user_new_password').prop('minLength', 6);
                $('#user_new_password_confirm').prop('required', true);
                $('#change-password').removeClass('change-password')
            } else {
                $(this).val('false')
                $('#user_new_password').prop('required', false);
                $('#user_new_password').prop('minLength', 0);
                $('#user_new_password_confirm').prop('required', false);
                $('#change-password').addClass('change-password')
            }
        })
        $("#update-form").validate({
				onfocusout: false,
				onkeyup: false,
				onclick: false,
				rules: {
					"user_first_name": {
						required: true,
					},
					"user_last_name": {
						required: true,
					},
					"user_email": {
						required: true,
						email: true,
					},
					"user_phone": {
						required: true,
						number: true,
					},
					"user_address":{
						required: true,
					},
                    "user_new_password":{
						required: true,
					},
					"user_new_password_confirm":{
                        required: true,
						equalTo: "#user_new_password"
					},
				},
				messages:{
                    "user_first_name":{
                        required: "Chưa nhập Họ",
                    },
					"user_last_name":{
						required: "Chưa nhập Tên",
					},
					"user_email":{
                        required: "Chưa nhập Email",
                        email: "Email không đúng định dạng"
                    },
					"user_phone": {
						required: "Chưa nhập SĐT",
						number: "SĐT phải là số",
					},
					"user_address":{
						required: "Chưa nhập địa chỉ",
					},
                    "user_new_password":{
						required: "Chưa nhập mật khẩu mới",
                        minlength: "Mật khẩu phải tối thiểu 6 ký tự",
					},
                    "user_new_password_confirm":{
                        required: "Chưa nhập lại mật khẩu mới",
						equalTo: "Mật khẩu không trùng khớp"
					},
                }
		});
    });
</script>
@endsection