@extends('site::site.layout.master')
@section('content')
<div class="heading-container">
    <div class="container heading-standar">
        <div class="page-breadcrumb">
            <ul class="breadcrumb">
                <li>
                    <span>
                        <a class="home" href="/">
                            <span>Trang chủ</span>
                        </a>
                    </span>
                </li>
                <li>
                    <span>Hoàn tất đơn hàng</span>
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
                        @if($order)
                        <h3>Thanh toán thành công</h3>
                        <p>Cảm ơn bạn đã mua hàng tại <b>TẠP HOÁ MỸ NGA</b></p>
                        <span>Mã đơn hàng của bạn là:</span>
                        <span style="background-color: #52c252;color: white;font-size: 20px;width: 150px;text-align: center; padding:5px">{{$order_code}}</span>
                        <br>
                        <span>Chi tiết đơn hàng: </span> <br>
                        @foreach($order->orderDetail as $orderItem)
                        <span style="padding-left: 10px">- {{$orderItem->product->name}} ({{$orderItem->quantity}} x {{$orderItem->price}})<br> </span>
                        @endforeach
                        <b>Tổng tiền: {{$order->sub_total}}</b>
                        <hr>
                        <p>Thông tin chi tiết đơn hàng cũng được gửi qua địa chỉ mail: <span style="color: #52c252;
                            font-style: italic;">{{$order_email}}</span>. 
                            {{-- Vui lòng kiểm tra trong <b>Spam</b> hoặc <b>Junk Folder</b> nếu không thấy trong hộp thư chính.</p> --}}
                        @else
                        <h3>Đơn hàng không tồn tại</h3>
                        
                        @endif
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