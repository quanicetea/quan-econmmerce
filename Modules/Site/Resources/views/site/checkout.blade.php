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
                    <span>Checkout</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="content-container">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="main-content">
                    <div class="col-sm-6">
                        <h3 class="heading-left-custom">
                            Customer Information
                        </h3>
                        <div class="row row-fluid">
                            <div class="col-sm-12">
                            <form action="{{ route('site.confirm')}}" method="POST">
                                {{ csrf_field() }}
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="wpcf7-form-control-wrap ">
                                                <input type="text" name="first_name" value="" size="40" class="wpcf7-form-control" placeholder="Họ / First Name"/>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="wpcf7-form-control-wrap ">
                                                <input type="text" name="last_name" value="" size="40" class="wpcf7-form-control" placeholder="Tên / Last Name"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="wpcf7-form-control-wrap ">
                                                <input type="email" name="email" value="" size="40" class="wpcf7-form-control" placeholder="Email"/>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="wpcf7-form-control-wrap ">
                                                <input type="text" name="phone_number" value="" size="40" class="wpcf7-form-control" placeholder="Số điện thoại / Phone number"/>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <select id="city" name="city_id" class="form-control">
                                                    <option value="0">Tỉnh - Thành phố/ City</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <select id="district" name="district_id" class="form-control">
                                                    <option value="">Quận - Huyện / District</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <select id="ward" name="ward_id" class="form-control">
                                                    <option value="">Xã - phường / Ward</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="wpcf7-form-control-wrap ">
                                                <input type="text" name="address" value="" size="40" class="wpcf7-form-control" placeholder="Địa chỉ / Address"/>
                                            </div>
                                        </div>
                                    </div>
                                    

                                    <div class="wpcf7-form-control-wrap">
                                        <button type="submit" value="Send" class="wpcf7-form-control wpcf7-submit rounded">Tiến hành đặt hàng</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>


                    {{-- <div class="col-sm-6">
                        <h3 class="heading-left-custom">
                            Cart Totals
                        </h3>
                        <div class="cart-collaterals">
                            <div class="cart_totals">
                                <table>
                                    <tr class="cart-subtotal">
                                        <th>Subtotal</th>
                                        <td><span class="amount">&#36;56.00</span></td>
                                    </tr>
                                    <tr class="shipping">
                                        <th>Shipping</th>
                                        <td><span class="amount">&#36;0.00</span></td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>Total</th>
                                        <td><strong><span class="amount">&#36;56.00</span></strong></td>
                                    </tr>
                                </table>
                                
                            </div>
                        </div>
                    </div> --}}

                    <div class="col-sm-6">
                        <h3 class="heading-left-custom">
                            Phương thức thanh toán
                        </h3>
                        <div class="cart-collaterals">
                            chọn ship code hoặc paygate (chưa apply)
                            {{-- <div class="cart_totals">
                                <table>
                                    <tr class="cart-subtotal">
                                        <th>Subtotal</th>
                                        <td><span class="amount">&#36;56.00</span></td>
                                    </tr>
                                    <tr class="shipping">
                                        <th>Shipping</th>
                                        <td><span class="amount">&#36;0.00</span></td>
                                    </tr>
                                    <tr class="order-total">
                                        <th>Total</th>
                                        <td><strong><span class="amount">&#36;56.00</span></strong></td>
                                    </tr>
                                </table>
                                
                            </div> --}}
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
    $(document).ready(function() {
        $.ajax({
            url:'{{route('site.city')}}',
	        type: 'GET',
			dataType: 'json',
        }).done(function(data){
            listCity = data.LtsItem;
            $.each(listCity,function(k,v){
                city= "<option value='"+ v.ID +"'>"+ v.Title +"</option>";
                $('#city').append(city)
            })
        })
    })

    //làm thêm api quận huyện xã phường và bắt sự kiện onchange, lưu localStorage/sessionStorage để giữ nguyên khi load lại trang
</script>
@endsection