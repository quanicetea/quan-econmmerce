@extends('site::site.layout.master')
@section('content')
<div class="heading-container">
    <div class="container heading-standar">
        <div class="page-breadcrumb">
            <ul class="breadcrumb">
                <li>
                    <span>
                        <a class="home" href="#">
                            <span>Trang chủ</span>
                        </a>
                    </span>
                </li>
                <li>
                    <span>Xác nhận</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="content-container">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('site.order')}}" method="POST">
                {{ csrf_field() }}
                    <div class="main-content">
                        <div class="col-sm-4">
                            <h3 class="heading-left-custom">
                                Thông tin giao hàng
                            </h3>
                            <div class="row row-fluid">
                                <div class="col-sm-12">
                                    
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="wpcf7-form-control-wrap ">
                                                <p><b>Họ và tên: </b>{{isset($customer->first_name)?$customer->first_name:''}} {{isset($customer->last_name)?$customer->last_name:''}}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="wpcf7-form-control-wrap ">
                                                <p><b>Địa chỉ: </b>{{isset($customer->address)?$customer->address:''}}</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="wpcf7-form-control-wrap ">
                                                    <p><b>Điện thoại:</b> {{isset($customer->phone)?$customer->phone:''}}</p>
                                                    <input type="hidden" value="{{$customer->phone}}" name="phone">
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="wpcf7-form-control-wrap ">
                                                    <p><b>Email:</b> {{isset($customer->email)?$customer->email:''}}</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="wpcf7-form-control-wrap">
                                            <input type="submit" value="Xác nhận" class="wpcf7-form-control wpcf7-submit rounded"/>
                                        </div>
                                    
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-8" style="border-left: 1px solid">
                            <h3 class="heading-left-custom">
                                Giỏ hàng của bạn
                            </h3>
                            <div class="cart-collaterals">
                                <div class="cart_totals">

                                    <table class="table shop_table cart">
                                        <thead>
                                            <tr>
                                                <th class="product-thumbnail hidden-xs">Image</th>
                                                <th class="product-name">Product</th>
                                                <th class="product-price text-center">Price</th>
                                                <th class="product-quantity text-center">Quantity</th>
                                                <th class="product-subtotal text-center hidden-xs">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- Chỗ này foreach để duyệt các sản phẩm trong Cart  --}}
                                            @foreach($cart as $item)
                                            <tr class="cart_item">
                                                <td class="product-thumbnail hidden-xs">
                                                <a href="{{route('site.detail',$item->id)}}">
                                                    <img width="100" height="150" src="{{$item->options->image}}" alt="ảnh"/>
                                                    </a>
                                                </td>
                                                <td class="product-name">
                                                <a href="{{route('site.detail',$item->id)}}">{{$item->name}}</a>
                                                    {{-- mô tả sản phẩm  --}}
                                                    {{-- <dl class="variation">
                                                        <dt class="variation-Color">Color:</dt>
                                                        <dd class="variation-Color"><p>Green</p></dd>
                                                        <dt class="variation-Size">Size:</dt>
                                                        <dd class="variation-Size"><p>Extra Large</p></dd>
                                                    </dl> --}}
                                                </td>
                                                <td class="product-price text-center">
                                                <span class="amount">{{$item->price}}</span>
                                                </td>
                                                <td class="product-quantity text-center">
                                                    <div class="quantity flex-box">
                                                    <span>{{$item->qty}}</span>
                                                    </div>
                                                </td>
                                                <td class="product-subtotal hidden-xs text-center">
                                                <span class="amount">{{$item->price*$item->qty}}</span>
                                                </td>
                                            </tr>
                                            @endforeach
                                            {{--ENd of Chỗ này foreach để duyệt các sản phẩm trong Cart  --}}
                                        </tbody>
                                    </table>

                                    <table>
                                        {{-- <tr class="cart-subtotal confirm-page">
                                            <th>Tạm tính</th>
                                        <td><span class="amount">{{$subtotal}}</span></td>
                                        </tr>
                                        <tr class="cart-subtotal confirm-page">
                                            <th>VAT ({{$vat_percent}}%)</th>
                                        <td><span class="amount">{{$vat}}</span></td>
                                        </tr>
                                        <tr class="shipping confirm-page">
                                            <th>Phí ship</th>
                                            <td><span class="amount">chưa apply</span></td>
                                        </tr> --}}
                                        <tr class="order-total confirm-page">
                                            <th>Thành tiền</th>
                                            <td><strong><span class="amount">{{$total}}</span></strong></td>
                                        </tr>
                                    </table>
                                    
                                </div>
                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection