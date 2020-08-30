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
                    <span>Cart</span>
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
                    <div class="commerce">
                        @if(count($cart)>0)
                        <form>
                            <table class="table shop_table cart">
                                <thead>
                                    <tr>
                                        <th class="product-remove hidden-xs">#</th>
                                        <th class="product-thumbnail hidden-xs">Image</th>
                                        <th class="product-name">Product</th>
                                        <th class="product-price text-center">Price</th>
                                        <th class="product-quantity text-center">Quantity</th>
                                        <th class="product-subtotal text-center hidden-xs">Total</th>
                                    </tr>
                                </thead>
                                <tbody id="cart-info">
                                    {{-- Chỗ này foreach để duyệt các sản phẩm trong Cart  --}}
                                    @foreach($cart as $product)
                                    <tr class="cart_item">
                                        <td class="product-remove hidden-xs">
                                            <a href="javascript:void(0)" onclick="deleteCart('{{$product->id}}')" class="remove" title="Remove this item">&times;</a>
                                        </td>
                                        <td class="product-thumbnail hidden-xs">
                                            <a href="{{route('site.detail',$product->id)}}">
                                                <img width="100" height="150" src="{{$product->options->image}}" alt=""/>
                                            </a>
                                        </td>
                                        <td class="product-name">
                                            <a href="{{route('site.detail',$product->id)}}">{{$product->name}}</a>
                                            {{-- mô tả sản phẩm  --}}
                                            {{-- <dl class="variation">
                                                <dt class="variation-Color">Color:</dt>
                                                <dd class="variation-Color"><p>Green</p></dd>
                                                <dt class="variation-Size">Size:</dt>
                                                <dd class="variation-Size"><p>Extra Large</p></dd>
                                            </dl> --}}
                                        </td>
                                        <td class="product-price text-center">
                                        <span class="amount">{{ $product->price}}</span>
                                        </td>
                                        <td class="product-quantity text-center">
                                            <div class="quantity flex-box">
                                                <span class="plus-sub-btn">
                                                <a href="javascript:void(0)" onclick="subCart('{{$product->id}}')" class="qty-btn master-color btn-sub">
                                                        <svg class="master-color-fill" width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"> <rect height="1" width="18" y="9" x="1"></rect>
                                                        </svg>
                                                    </a>
                                                </span>
                                            <input type="text" readonly min="1" name="quantity" value="{{$product->qty}}" class="input-text qty1 text"/>
                                                <span class="plus-sub-btn">
                                                <a href="javascript:void(0)" onclick="plusCart('{{$product->id}}')" class="qty-btn master-color btn-plus">
                                                        <svg class="master-color-fill" width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"> <rect x="9" y="1" width="1" height="17"></rect> <rect x="1" y="9" width="17" height="1"></rect>
                                                        </svg>
                                                    </a>
                                                </span>
                                                
                                            </div>
                                        </td>
                                        <td class="product-subtotal hidden-xs text-center">
                                        <span class="amount">{{$product->qty*$product->price}}</span>
                                        </td>
                                    </tr>
                                    @endforeach
                                     {{--ENd of Chỗ này foreach để duyệt các sản phẩm trong Cart  --}}
                                </tbody>
                            </table>
                        </form>
                        <hr>
                        <div class="cart-collaterals">
                            <div class="cart_totals">
                                <h2>Cart Totals</h2>
                                <table>
                                    <tr class="cart-subtotal">
                                        <th>Thành tiền</th>
                                    <td><span id="sub-total" class="amount">{{$subtotal}}</span></td>
                                    </tr>
                                    {{-- <tr class="shipping">
                                        <th>Shipping</th>
                                        <td><span class="amount">0</span></td>
                                    </tr> --}}
                                    <tr class="order-total">
                                        <th>Tạm tính</th>
                                    <td><strong><span id ="total" class="amount">{{$subtotal}}</span></strong></td>
                                    </tr>
                                </table>
                                <div class="wc-proceed-to-checkout">
                                <a href="{{ route('site.confirm')}}" class="checkout-button button alt wc-forward rounded">Tiến hành đặt hàng</a>
                                </div>
                            </div>
                        </div>
                        @else
                        <p class="cart-empty">Your cart is currently empty.</p>
                    <p class="return-to-shop"><a class="button wc-backward rounded" href="{{ route('site.homepage')}}">Return To Shop</a></p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>

    function subCart(product_id)
	{	
		$.ajax({
			url: '{{route('site.updatecart')}}',
			type: 'GET',
			dataType: 'json',
			data: {product_id: product_id, qty: -1},
		})
		.done(function(data) {
            console.log("đã trừ")
            displayMiniCart(data)
			displayCart(data);
			// if (data.count == 0) {
			// 	emptyCart()
			// }
		});
		
	}
    function plusCart(product_id)
	{
		$.ajax({
			url: '{{route('site.updatecart')}}',
			type: 'GET',
			dataType: 'json',
			data: {product_id: product_id, qty: +1},
		})
		.done(function(data) {
            console.log("đã cộng")
            displayMiniCart(data)
            displayCart(data)
            // console.log(data)
			// displayCart(data);
		});
	}
    function deleteCart(product_id)
	{
		$.ajax({
			url: '{{route('site.removecart')}}',
			type: 'GET',
			dataType: 'json',
			data: {product_id: product_id, qty: +1},
		})
		.done(function(data) {
            console.log("đã xoá ")
            console.log(data)

			displayCart(data);
            displayMiniCart(data);
			// if (data.count == 0) {
			// 	emptyCart()
			// }
		});
	}
    //show số lượng sp trên mini cart
    function displayMiniCart(data)
    {
        let items = data.detail;
        var x = ``;
        for (item in items) {
            ////duyệt để show sản phẩm ra cho đẹpaa
            x+= `<p>Tên: ${items[item].name} Số lượng: ${items[item].qty}</p>
                <p></p>
            `;
        }
        $('.mini-cart').html(x);
        $('.qty-product-mini-cart').html(data.count)
    }
    function displayCart(data){
        let items = data.detail;
		var x = ``;
        for(item in items){
            x+= `
            <tr class="cart_item">
                <td class="product-remove hidden-xs">
                    <a href="javascript:void(0)" onclick="deleteCart('${items[item].id}')" class="remove" title="Remove this item">&times;</a>
                </td>
                <td class="product-thumbnail hidden-xs">
                    <a href="/detail/${items[item].id}">
                        <img width="100" height="150" src="${items[item].options.image}" alt="${items[item].name}"/>
                    </a>
                </td>
                <td class="product-name">
                    <a href="/detail/${items[item].id}">${items[item].name}</a>
                </td>
                <td class="product-price text-center">
                <span class="amount">${items[item].price}</span>
                </td>
                <td class="product-quantity text-center">
                    <div class="quantity flex-box">
                        <span class="plus-sub-btn">
                        <a href="javascript:void(0)" onclick="subCart('${items[item].id}')" class="qty-btn master-color btn-sub">
                                <svg class="master-color-fill" width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"> <rect height="1" width="18" y="9" x="1"></rect>
                                </svg>
                            </a>
                        </span>
                    <input type="text" readonly min="1" name="quantity" value="${items[item].qty}" class="input-text qty1 text"/>
                        <span class="plus-sub-btn">
                        <a href="javascript:void(0)" onclick="plusCart('${items[item].id}')" class="qty-btn master-color btn-plus">
                                <svg class="master-color-fill" width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"> <rect x="9" y="1" width="1" height="17"></rect> <rect x="1" y="9" width="17" height="1"></rect>
                                </svg>
                            </a>
                        </span>
                        
                    </div>
                </td>
                <td class="product-subtotal hidden-xs text-center">
                <span class="amount">${items[item].qty * items[item].price}</span>
                </td>
            </tr>
            `;
        }
        $('#cart-info').html(x);
        $('#sub-total').html(data.total);
        $('#total').html(data.total);
    }
</script>
@endsection

