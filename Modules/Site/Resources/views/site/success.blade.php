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
                    <span>Success</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="content-container">
    <div class="container" style="border: 1px solid">
        <div class="row">
            <div class="col-md-12" style="padding: 20px;">
                <div class="main-content " >
                    <div class="col-xs-4" >
                        <img src="assets/images/cart_success.png" alt="">
                    </div>
                    <div class="col-xs-8" >
                        <h3>Cảm ơn bạn đã mua hàng tại quantb</h3>
                        <p>Mã đơn hàng của bạn là:</p>
                        <p style="background-color: #52c252;color: white;font-size: 20px;width: 150px;text-align: center;">{{$order_code}}</p>
                        <p>Thông tin chi tiết đơn hàng sẽ được gửi qua địa chỉ mail: <span style="color: #52c252;
                            font-style: italic;">{{$order_email}}</span>. Vui lòng kiểm tra trong <b>Spam</b> hoặc <b>Junk Folder</b> nếu không thấy trong hộp thư chính.</p>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('css')
<style>
    .border {
      display: inline-block;
      width: 70px;
      height: 70px;
      margin: 6px;
    }
</style>
@endsection