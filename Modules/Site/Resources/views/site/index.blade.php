@extends('site::site.layout.master')
@section('content')
{{-- Sản phẩm nổi bậc  --}}
{{-- <div class="container">
    <div class="row row-fluid pt-6 pb-6">
        <div class="col-sm-3">
            <div class="box-ft box-ft-5 mb-3">
                <img src="mystyle/images/thumb_270x220.jpg" alt="">
                <a href="#">
                    <span class="bof-tf-title-wrap">
                        <span class="bof-tf-title-wrap-2">
                            <span class="bof-tf-title">Sản phẩm nổi bậc</span>
                            <span class="bof-tf-sub-title">Giá </span>
                        </span>
                    </span>
                </a>
            </div>
            <div class="box-ft box-ft-5">
                <img src="mystyle/images/thumb_270x220.jpg" alt="">
                <a href="#">
                    <span class="bof-tf-title-wrap">
                        <span class="bof-tf-title-wrap-2">
                            <span class="bof-tf-title">Sản phẩm nổi bậc</span>
                            <span class="bof-tf-sub-title">Giá </span>
                        </span>
                    </span>
                </a>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="box-ft box-ft-5">
                <img src="mystyle/images/thumb_570x470.jpg" alt="">
                <a href="#">
                    <span class="bof-tf-title-wrap">
                        <span class="bof-tf-title-wrap-2">
                            <span class="bof-tf-title">Sản phẩm nổi bậc</span>
                            <span class="bof-tf-sub-title">
                                Giá  
                            </span>
                        </span>
                    </span>
                </a>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="box-ft box-ft-5 mb-3">
                <img src="mystyle/images/thumb_270x220.jpg" alt="">
                <a href="#">
                    <span class="bof-tf-title-wrap">
                        <span class="bof-tf-title-wrap-2">
                            <span class="bof-tf-title">Sản phẩm nổi bậc</span>
                            <span class="bof-tf-sub-title">Giá </span>
                        </span>
                    </span>
                </a>
            </div>
            <div class="box-ft box-ft-5">
                <img src="mystyle/images/thumb_270x220.jpg" alt="">
                <a href="#">
                    <span class="bof-tf-title-wrap">
                        <span class="bof-tf-title-wrap-2">
                            <span class="bof-tf-title">Sản phẩm nổi bậc</span>
                            <span class="bof-tf-sub-title">Giá </span>
                        </span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</div> --}}
{{-- End of sản phẩm nổi bậc  --}}

{{-- <div class="container">
    <div class="row row-fluid mb-10 pt-6">
        <div class="col-sm-12">
            <div class="caroufredsel product-slider nav-position-center" data-height="variable" data-visible-min="1" data-responsive="1" data-infinite="1" data-autoplay="0">
                <div class="product-slider-title">
                    <h3 class="el-heading">Sản phẩm mới</h3>
                </div>
                <div class="caroufredsel-wrap">
                    <div class="commerce columns-4">
                        <ul class="products columns-4" data-columns="4">
                            @foreach($products as $product)
                                <li class="product product-no-border style-2">
                                    <div class="product-container">
                                        <figure>
                                            <div class="product-wrap">
                                                <div class="product-images">
                                                    <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                        <a href="{{route('site.detail',$product->unique_id)}}"><img width="450" height="450" src="{{$product->image}}" alt=""/></a>
                                                    </div>
                                                    <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                        <a href="{{route('site.detail',$product->unique_id)}}"><img width="450" height="450" src="{{$product->image}}" alt=""/></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <figcaption>
                                                <div class="info-meta clearfix">
                                                    <div>
                                                        {{$product->user->first_name}}  {{$product->user->last_name}}
                                                    </div>
                                                </div>
                                                <div class="shop-loop-product-info">
                                                    <div class="info-content-wrap">
                                                        <h3 class="product_title">
                                                            <a href="{{route('site.detail',$product->unique_id)}}">{{$product->name}}</a>
                                                        </h3>
                                                        <div class="info-price">
                                                            <span class="price">
                                                                <ins><span class="amount">{{number_format($product->price),0,',','.'}} VND</span></ins>
                                                            </span>
                                                        </div>
                                                        <div class="loop-action">
                                                            <div class="loop-add-to-cart">
                                                                <input type="hidden" value="{{$product->unique_id}}">
                                                                <a class="add_to_cart_button">
                                                                    Thêm vào giỏ hàng đi
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </li>

                            @endforeach
                        </ul>
                    </div>
                    <a href="#" class="caroufredsel-prev"></a>
                    <a href="#" class="caroufredsel-next"></a>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<div class="pt-6"></div>
{{-- Sản phẩm mới  done--}}
@foreach($categories as $category)
    @if(count($category->products->where('status','=',1))>0)
        @if(count($category->products->where('status','=',1)->take(8))>=4)
            <div class="container">
                <div class="row row-fluid mb-10">
                    <div class="col-sm-12">
                        <div class="caroufredsel product-slider nav-position-center" data-height="variable" data-visible-min="1" data-responsive="1" data-infinite="1" data-autoplay="0">
                            <div class="product-slider-title">
                            <h3 class="el-heading pt-1">{{$category->name}}</h3>
                            </div>
                            <div class="caroufredsel-wrap">
                                <div class="commerce columns-4">
                                    <ul class="products columns-4" data-columns="4">
                                        @foreach($category->products->take(8)->where('status','=',1) as $product)
                                            <li class="product product-no-border style-2">
                                                <div class="product-container">
                                                    <figure>
                                                        <div class="product-wrap">
                                                            <div class="product-images">
                                                                <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                                    <a href="{{route('site.detail',$product->unique_id)}}"><img width="450" height="450" src="{{$product->image}}" alt=""/></a>
                                                                </div>
                                                                <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                                    <a href="{{route('site.detail',$product->unique_id)}}"><img width="450" height="450" src="{{$product->image}}" alt=""/></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <figcaption>
                                                            {{-- <div class="info-meta clearfix">
                                                                <div>
                                                                    {{$product->user->first_name}}  {{$product->user->last_name}}
                                                                </div>
                                                            </div> --}}
                                                            <div class="shop-loop-product-info">
                                                                <div class="info-content-wrap">
                                                                    <h3 class="product_title">
                                                                        <a href="{{route('site.detail',$product->unique_id)}}">{{$product->name}}</a>
                                                                    </h3>
                                                                    <div class="info-price">
                                                                        <span class="price">
                                                                            <ins><span class="amount">{{number_format($product->price),0,',','.'}} VND</span></ins>
                                                                        </span>
                                                                    </div>
                                                                    <div class="loop-action">
                                                                        <div class="loop-add-to-cart">
                                                                            <input type="hidden" value="{{$product->unique_id}}">
                                                                            <a class="add_to_cart_button">
                                                                                Thêm vào giỏ hàng đi
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figcaption>
                                                    </figure>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <a href="#" class="caroufredsel-prev"></a>
                                <a href="#" class="caroufredsel-next"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
        <div class="container">
            <div class="row row-fluid mb-10">
                <div class="col-sm-12">
                    <div class="caroufredsel product-slider nav-position-center" data-height="variable" data-visible-min="1" data-responsive="1" data-infinite="1" data-autoplay="0">
                        <div class="product-slider-title">
                        <h3 class="el-heading pt-1">{{$category->name}}</h3>
                        </div>
                        <div class="caroufredsel-wrap">
                            <div class="commerce columns-4">
                                <ul class="products columns-4" data-columns="4">
                                    {{-- case 1 product --}}
                                    @if(count($category->products->take(8)->where('status','=',1))==1)
                                    @foreach($category->products->take(8)->where('status','=',1) as $product)
                                        
                                        <li class="product product-no-border style-2">
                                            <div class="product-container">
                                                <figure>
                                                    <div class="product-wrap">
                                                        <div class="product-images">
                                                            <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                                <a href="{{route('site.detail',$product->unique_id)}}"><img width="450" height="450" src="{{$product->image}}" alt=""/></a>
                                                            </div>
                                                            <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                                <a href="{{route('site.detail',$product->unique_id)}}"><img width="450" height="450" src="{{$product->image}}" alt=""/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <figcaption>
                                                        {{-- <div class="info-meta clearfix">
                                                            <div>
                                                                {{$product->user->first_name}}  {{$product->user->last_name}}
                                                            </div>
                                                        </div> --}}
                                                        <div class="shop-loop-product-info">
                                                            <div class="info-content-wrap">
                                                                <h3 class="product_title">
                                                                    <a href="{{route('site.detail',$product->unique_id)}}">{{$product->name}}</a>
                                                                </h3>
                                                                <div class="info-price">
                                                                    <span class="price">
                                                                        <ins><span class="amount">{{number_format($product->price),0,',','.'}} VND</span></ins>
                                                                    </span>
                                                                </div>
                                                                <div class="loop-action">
                                                                    <div class="loop-add-to-cart">
                                                                        <input type="hidden" value="{{$product->unique_id}}">
                                                                        <a class="add_to_cart_button">
                                                                            Thêm vào giỏ hàng đi
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </li>
                                        
                                    {{-- end case list has one product --}}
                                    @endforeach
                                    <li style="display:none" class="product product-no-border style-2">
                                        <div class="product-container">
                                            <figure>
                                                <div class="product-wrap">
                                                    <div class="product-images">
                                                        <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                            <a href="#"><img width="450" height="450" src="#" alt=""/></a>
                                                        </div>
                                                        <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                            <a href="#"><img width="450" height="450" src="#" alt=""/></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <figcaption>
                                                    <div class="info-meta clearfix">
                                                        <div>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="shop-loop-product-info">
                                                        <div class="info-content-wrap">
                                                            <h3 class="product_title">
                                                                <a href="#"></a>
                                                            </h3>
                                                            <div class="info-price">
                                                                <span class="price">
                                                                    <ins><span class="amount"></span></ins>
                                                                </span>
                                                            </div>
                                                            <div class="loop-action">
                                                                <div class="loop-add-to-cart">
                                                                    <input type="hidden" value="">
                                                                    <a class="add_to_cart_button">
                                                                        Thêm vào giỏ hàng đi
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </li>
                                    <li style="display:none" class="product product-no-border style-2">
                                        <div class="product-container">
                                            <figure>
                                                <div class="product-wrap">
                                                    <div class="product-images">
                                                        <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                            <a href="#"><img width="450" height="450" src="#" alt=""/></a>
                                                        </div>
                                                        <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                            <a href="#"><img width="450" height="450" src="#" alt=""/></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <figcaption>
                                                    <div class="info-meta clearfix">
                                                        <div>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="shop-loop-product-info">
                                                        <div class="info-content-wrap">
                                                            <h3 class="product_title">
                                                                <a href="#"></a>
                                                            </h3>
                                                            <div class="info-price">
                                                                <span class="price">
                                                                    <ins><span class="amount"></span></ins>
                                                                </span>
                                                            </div>
                                                            <div class="loop-action">
                                                                <div class="loop-add-to-cart">
                                                                    <input type="hidden" value="">
                                                                    <a class="add_to_cart_button">
                                                                        Thêm vào giỏ hàng đi
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </li>
                                    <li style="display:none" class="product product-no-border style-2">
                                        <div class="product-container">
                                            <figure>
                                                <div class="product-wrap">
                                                    <div class="product-images">
                                                        <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                            <a href="#"><img width="450" height="450" src="#" alt=""/></a>
                                                        </div>
                                                        <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                            <a href="#"><img width="450" height="450" src="#" alt=""/></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <figcaption>
                                                    <div class="info-meta clearfix">
                                                        <div>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="shop-loop-product-info">
                                                        <div class="info-content-wrap">
                                                            <h3 class="product_title">
                                                                <a href="#"></a>
                                                            </h3>
                                                            <div class="info-price">
                                                                <span class="price">
                                                                    <ins><span class="amount"></span></ins>
                                                                </span>
                                                            </div>
                                                            <div class="loop-action">
                                                                <div class="loop-add-to-cart">
                                                                    <input type="hidden" value="">
                                                                    <a class="add_to_cart_button">
                                                                        Thêm vào giỏ hàng đi
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </li>
                                    @endif

                                    {{-- case 2 product --}}
                                    @if(count($category->products->take(8)->where('status','=',1))==2)
                                    @foreach($category->products->take(8)->where('status','=',1) as $product)   
                                        <li class="product product-no-border style-2">
                                            <div class="product-container">
                                                <figure>
                                                    <div class="product-wrap">
                                                        <div class="product-images">
                                                            <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                                <a href="{{route('site.detail',$product->unique_id)}}"><img width="450" height="450" src="{{$product->image}}" alt=""/></a>
                                                            </div>
                                                            <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                                <a href="{{route('site.detail',$product->unique_id)}}"><img width="450" height="450" src="{{$product->image}}" alt=""/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <figcaption>
                                                        {{-- <div class="info-meta clearfix">
                                                            <div>
                                                                {{$product->user->first_name}}  {{$product->user->last_name}}
                                                            </div>
                                                        </div> --}}
                                                        <div class="shop-loop-product-info">
                                                            <div class="info-content-wrap">
                                                                <h3 class="product_title">
                                                                    <a href="{{route('site.detail',$product->unique_id)}}">{{$product->name}}</a>
                                                                </h3>
                                                                <div class="info-price">
                                                                    <span class="price">
                                                                        <ins><span class="amount">{{number_format($product->price),0,',','.'}} VND</span></ins>
                                                                    </span>
                                                                </div>
                                                                <div class="loop-action">
                                                                    <div class="loop-add-to-cart">
                                                                        <input type="hidden" value="{{$product->unique_id}}">
                                                                        <a class="add_to_cart_button">
                                                                            Thêm vào giỏ hàng đi
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </li>
                                    @endforeach
                                    <li style="display:none" class="product product-no-border style-2">
                                        <div class="product-container">
                                            <figure>
                                                <div class="product-wrap">
                                                    <div class="product-images">
                                                        <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                            <a href="#"><img width="450" height="450" src="#" alt=""/></a>
                                                        </div>
                                                        <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                            <a href="#"><img width="450" height="450" src="#" alt=""/></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <figcaption>
                                                    <div class="info-meta clearfix">
                                                        <div>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="shop-loop-product-info">
                                                        <div class="info-content-wrap">
                                                            <h3 class="product_title">
                                                                <a href="#"></a>
                                                            </h3>
                                                            <div class="info-price">
                                                                <span class="price">
                                                                    <ins><span class="amount"></span></ins>
                                                                </span>
                                                            </div>
                                                            <div class="loop-action">
                                                                <div class="loop-add-to-cart">
                                                                    <input type="hidden" value="">
                                                                    <a class="add_to_cart_button">
                                                                        Thêm vào giỏ hàng đi
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </li>
                                    <li style="display:none" class="product product-no-border style-2">
                                        <div class="product-container">
                                            <figure>
                                                <div class="product-wrap">
                                                    <div class="product-images">
                                                        <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                            <a href="#"><img width="450" height="450" src="#" alt=""/></a>
                                                        </div>
                                                        <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                            <a href="#"><img width="450" height="450" src="#" alt=""/></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <figcaption>
                                                    <div class="info-meta clearfix">
                                                        <div>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="shop-loop-product-info">
                                                        <div class="info-content-wrap">
                                                            <h3 class="product_title">
                                                                <a href="#"></a>
                                                            </h3>
                                                            <div class="info-price">
                                                                <span class="price">
                                                                    <ins><span class="amount"></span></ins>
                                                                </span>
                                                            </div>
                                                            <div class="loop-action">
                                                                <div class="loop-add-to-cart">
                                                                    <input type="hidden" value="">
                                                                    <a class="add_to_cart_button">
                                                                        Thêm vào giỏ hàng đi
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </li>
                                    @endif
                                    {{-- case 3 product --}}
                                    @if(count($category->products->take(8)->where('status','=',1))==3)
                                    @foreach($category->products->take(8)->where('status','=',1) as $product)   
                                        <li class="product product-no-border style-2">
                                            <div class="product-container">
                                                <figure>
                                                    <div class="product-wrap">
                                                        <div class="product-images">
                                                            <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                                <a href="{{route('site.detail',$product->unique_id)}}"><img width="450" height="450" src="{{$product->image}}" alt=""/></a>
                                                            </div>
                                                            <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                                <a href="{{route('site.detail',$product->unique_id)}}"><img width="450" height="450" src="{{$product->image}}" alt=""/></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <figcaption>
                                                        {{-- <div class="info-meta clearfix">
                                                            <div>
                                                                {{$product->user->first_name}}  {{$product->user->last_name}}
                                                            </div>
                                                        </div> --}}
                                                        <div class="shop-loop-product-info">
                                                            <div class="info-content-wrap">
                                                                <h3 class="product_title">
                                                                    <a href="{{route('site.detail',$product->unique_id)}}">{{$product->name}}</a>
                                                                </h3>
                                                                <div class="info-price">
                                                                    <span class="price">
                                                                        <ins><span class="amount">{{number_format($product->price),0,',','.'}} VND</span></ins>
                                                                    </span>
                                                                </div>
                                                                <div class="loop-action">
                                                                    <div class="loop-add-to-cart">
                                                                        <input type="hidden" value="{{$product->unique_id}}">
                                                                        <a class="add_to_cart_button">
                                                                            Thêm vào giỏ hàng đi
                                                                        </a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </figcaption>
                                                </figure>
                                            </div>
                                        </li>  
                                    @endforeach
                                    <li style="display:none" class="product product-no-border style-2">
                                        <div class="product-container">
                                            <figure>
                                                <div class="product-wrap">
                                                    <div class="product-images">
                                                        <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                            <a href="#"><img width="450" height="450" src="#" alt=""/></a>
                                                        </div>
                                                        <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                            <a href="#"><img width="450" height="450" src="#" alt=""/></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <figcaption>
                                                    <div class="info-meta clearfix">
                                                        <div>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="shop-loop-product-info">
                                                        <div class="info-content-wrap">
                                                            <h3 class="product_title">
                                                                <a href="#"></a>
                                                            </h3>
                                                            <div class="info-price">
                                                                <span class="price">
                                                                    <ins><span class="amount"></span></ins>
                                                                </span>
                                                            </div>
                                                            <div class="loop-action">
                                                                <div class="loop-add-to-cart">
                                                                    <input type="hidden" value="">
                                                                    <a class="add_to_cart_button">
                                                                        Thêm vào giỏ hàng đi
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </figcaption>
                                            </figure>
                                        </div>
                                    </li>
                                    @endif
                                </ul>
                            </div>
                            <a href="#" class="caroufredsel-prev"></a>
                            <a href="#" class="caroufredsel-next"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    @endif
@endforeach
{{-- End of sản phẩm mới  --}}

{{-- Vài sản phẩm mới theo danh mục (khoảng 4 cái thôi)  --}}
{{-- <div class="container">
    <div class="row row-fluid mt-2">
        <div class="col-sm-12">
            <div data-layout="masonry" data-masonry-column="4" class="commerce products-masonry masonry">
                <div class="masonry-filter">
                    <div class="filter-action filter-action-center">
                        <ul data-filter-key="filter">
                            @foreach($categories as $category)
                            <li>
                                <a data-masonry-toogle="selected" href="#" data-filter-value=".maecenas">{{$category->name}}</a>
                            </li>
                            @endforeach
                            
                        </ul>
                    </div>
                </div>
                <div class="products-masonry-wrap">
                    <ul class="products masonry-products row masonry-wrap">
                        <li class="product masonry-item product-no-border style-2 col-md-3 col-sm-6 maecenas donec">
                            <div class="product-container">
                                <figure>
                                    <div class="product-wrap">
                                        <div class="product-images">
                                            <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                <a href="shop-detail-1.html"><img width="450" height="450" src="mystyle/images/products/product_328x328.jpg" alt=""/></a>
                                            </div>
                                            <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                <a href="shop-detail-1.html"><img width="450" height="450" src="mystyle/images/products/product_328x328alt.jpg" alt=""/></a>
                                            </div>
                                        </div>
                                    </div>
                                    <figcaption>
                                        <div class="shop-loop-product-info">
                                            <div class="info-meta clearfix">
                                                <div class="star-rating">
                                                    <span style="width:0%"></span>
                                                </div>
                                                <div class="loop-add-to-wishlist">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button">
                                                            <a href="#" class="add_to_wishlist">
                                                                Add to Wishlist
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="info-content-wrap">
                                                <h3 class="product_title">
                                                    <a href="shop-detail-1.html">Schultz Petal Dining</a>
                                                </h3>
                                                <div class="info-price">
                                                    <span class="price">
                                                        <span class="amount">&pound;17.45</span>
                                                    </span>
                                                </div>
                                                <div class="loop-action">
                                                    <div class="loop-add-to-cart">
                                                        <a href="#" class="add_to_cart_button">
                                                            Add to cart
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        </li>
                        <li class="product masonry-item product-no-border style-2 col-md-3 col-sm-6 nulla maecenas">
                            <div class="product-container">
                                <figure>
                                    <div class="product-wrap">
                                        <div class="product-images">
                                            <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                <a href="shop-detail-1.html"><img width="450" height="450" src="mystyle/images/products/product_328x328.jpg" alt=""/></a>
                                            </div>
                                            <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                <a href="shop-detail-1.html"><img width="450" height="450" src="mystyle/images/products/product_328x328alt.jpg" alt=""/></a>
                                            </div>
                                        </div>
                                    </div>
                                    <figcaption>
                                        <div class="shop-loop-product-info">
                                            <div class="info-meta clearfix">
                                                <div class="star-rating">
                                                    <span style="width:0%"></span>
                                                </div>
                                                <div class="loop-add-to-wishlist">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button">
                                                            <a href="#" class="add_to_wishlist">
                                                                Add to Wishlist
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="info-content-wrap">
                                                <h3 class="product_title">
                                                    <a href="shop-detail-1.html">Jens Risom Lounge</a>
                                                </h3>
                                                <div class="info-price">
                                                    <span class="price">
                                                        <span class="amount">&pound;17.45</span>
                                                    </span>
                                                </div>
                                                <div class="loop-action">
                                                    <div class="loop-add-to-cart">
                                                        <a href="#" class="add_to_cart_button">
                                                            Add to cart
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        </li>
                        <li class="product masonry-item product-no-border style-2 col-md-3 col-sm-6 nulla maecenas">
                            <div class="product-container">
                                <figure>
                                    <div class="product-wrap">
                                        <div class="product-images">
                                            <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                <a href="shop-detail-1.html"><img width="450" height="450" src="mystyle/images/products/product_328x328.jpg" alt=""/></a>
                                            </div>
                                            <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                <a href="shop-detail-1.html"><img width="450" height="450" src="mystyle/images/products/product_328x328alt.jpg" alt=""/></a>
                                            </div>
                                        </div>
                                    </div>
                                    <figcaption>
                                        <div class="shop-loop-product-info">
                                            <div class="info-meta clearfix">
                                                <div class="star-rating">
                                                    <span style="width:0%"></span>
                                                </div>
                                                <div class="loop-add-to-wishlist">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button">
                                                            <a href="#" class="add_to_wishlist">
                                                                Add to Wishlist
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="info-content-wrap">
                                                <h3 class="product_title">
                                                    <a href="shop-detail-1.html">Hans Wegner Shell Chair</a>
                                                </h3>
                                                <div class="info-price">
                                                    <span class="price">
                                                        <span class="amount">&pound;10.75</span>
                                                    </span>
                                                </div>
                                                <div class="loop-action">
                                                    <div class="loop-add-to-cart">
                                                        <a href="#" class="add_to_cart_button">
                                                            Add to cart
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        </li>
                        <li class="product masonry-item product-no-border style-2 col-md-3 col-sm-6 maecenas donec">
                            <div class="product-container">
                                <figure>
                                    <div class="product-wrap">
                                        <div class="product-images">
                                            <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                <a href="shop-detail-1.html"><img width="450" height="450" src="mystyle/images/products/product_328x328.jpg" alt=""/></a>
                                            </div>
                                            <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                <a href="shop-detail-1.html"><img width="450" height="450" src="mystyle/images/products/product_328x328alt.jpg" alt=""/></a>
                                            </div>
                                        </div>
                                    </div>
                                    <figcaption>
                                        <div class="shop-loop-product-info">
                                            <div class="info-meta clearfix">
                                                <div class="star-rating">
                                                    <span style="width:0%"></span>
                                                </div>
                                                <div class="loop-add-to-wishlist">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button">
                                                            <a href="#" class="add_to_wishlist">
                                                                Add to Wishlist
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="info-content-wrap">
                                                <h3 class="product_title">
                                                    <a href="shop-detail-1.html">Jaime Hayon Ro Chair</a>
                                                </h3>
                                                <div class="info-price">
                                                    <span class="price">
                                                        <span class="amount">&pound;32.00</span>
                                                    </span>
                                                </div>
                                                <div class="loop-action">
                                                    <div class="loop-add-to-cart">
                                                        <a href="#" class="add_to_cart_button">
                                                            Add to cart
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        </li>
                        <li class="product masonry-item product-no-border style-2 col-md-3 col-sm-6 maecenas donec">
                            <div class="product-container">
                                <figure>
                                    <div class="product-wrap">
                                        <div class="product-images">
                                            <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                <a href="shop-detail-1.html"><img width="450" height="450" src="mystyle/images/products/product_328x328.jpg" alt=""/></a>
                                            </div>
                                            <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                <a href="shop-detail-1.html"><img width="450" height="450" src="mystyle/images/products/product_328x328alt.jpg" alt=""/></a>
                                            </div>
                                        </div>
                                    </div>
                                    <figcaption>
                                        <div class="shop-loop-product-info">
                                            <div class="info-meta clearfix">
                                                <div class="star-rating">
                                                    <span style="width:0%"></span>
                                                </div>
                                                <div class="loop-add-to-wishlist">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button">
                                                            <a href="#" class="add_to_wishlist">
                                                                Add to Wishlist
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="info-content-wrap">
                                                <h3 class="product_title">
                                                    <a href="shop-detail-1.html">Saarinen Womb Chair</a>
                                                </h3>
                                                <div class="info-price">
                                                    <span class="price">
                                                        <span class="amount">&pound;123.00</span>
                                                    </span>
                                                </div>
                                                <div class="loop-action">
                                                    <div class="loop-add-to-cart">
                                                        <a href="#" class="add_to_cart_button">
                                                            Add to cart
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        </li>
                        <li class="product masonry-item product-no-border style-2 col-md-3 col-sm-6 maecenas">
                            <div class="product-container">
                                <figure>
                                    <div class="product-wrap">
                                        <div class="product-images">
                                            <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                <a href="shop-detail-1.html"><img width="450" height="450" src="mystyle/images/products/product_328x328.jpg" alt=""/></a>
                                            </div>
                                            <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                <a href="shop-detail-1.html"><img width="450" height="450" src="mystyle/images/products/product_328x328alt.jpg" alt=""/></a>
                                            </div>
                                        </div>
                                    </div>
                                    <figcaption>
                                        <div class="shop-loop-product-info">
                                            <div class="info-meta clearfix">
                                                <div class="star-rating">
                                                    <span style="width:80%"></span>
                                                </div>
                                                <div class="loop-add-to-wishlist">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button">
                                                            <a href="#" class="add_to_wishlist">
                                                                Add to Wishlist
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="info-content-wrap">
                                                <h3 class="product_title">
                                                    <a href="shop-detail-1.html">Citterio Grand Repos</a>
                                                </h3>
                                                <div class="info-price">
                                                    <span class="price">
                                                        <span class="amount">£12.00</span>
                                                        –
                                                        <span class="amount">£20.00</span>
                                                    </span>
                                                </div>
                                                <div class="loop-action">
                                                    <div class="loop-add-to-cart">
                                                        <a href="#" class="add_to_cart_button">
                                                            Add to cart
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        </li>
                        <li class="product masonry-item product-no-border style-2 col-md-3 col-sm-6 nulla maecenas donec">
                            <div class="product-container">
                                <figure>
                                    <div class="product-wrap">
                                        <div class="product-images">
                                            <span class="onsale">Sale!</span>
                                            <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                <a href="shop-detail-1.html"><img width="450" height="450" src="mystyle/images/products/product_328x328.jpg" alt=""/></a>
                                            </div>
                                            <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                <a href="shop-detail-1.html"><img width="450" height="450" src="mystyle/images/products/product_328x328alt.jpg" alt=""/></a>
                                            </div>
                                        </div>
                                    </div>
                                    <figcaption>
                                        <div class="shop-loop-product-info">
                                            <div class="info-meta clearfix">
                                                <div class="star-rating">
                                                    <span style="width:80%"></span>
                                                </div>
                                                <div class="loop-add-to-wishlist">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button">
                                                            <a href="#" class="add_to_wishlist">
                                                                Add to Wishlist
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="info-content-wrap">
                                                <h3 class="product_title">
                                                    <a href="shop-detail-1.html">Arne Jacobsen Oxford Chair</a>
                                                </h3>
                                                <div class="info-price">
                                                    <span class="price">
                                                        <del><span class="amount">£20.50</span></del> 
                                                        <ins><span class="amount">£19.00</span></ins>
                                                    </span>
                                                </div>
                                                <div class="loop-action">
                                                    <div class="loop-add-to-cart">
                                                        <a href="#" class="add_to_cart_button">
                                                            Add to cart
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        </li>
                        <li class="product masonry-item product-no-border style-2 col-md-3 col-sm-6 nulla maecenas">
                            <div class="product-container">
                                <figure>
                                    <div class="product-wrap">
                                        <div class="product-images">
                                            <span class="onsale">Sale!</span>
                                            <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                <a href="shop-detail-1.html"><img width="450" height="450" src="mystyle/images/products/product_328x328.jpg" alt=""/></a>
                                            </div>
                                            <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                <a href="shop-detail-1.html"><img width="450" height="450" src="mystyle/images/products/product_328x328alt.jpg" alt=""/></a>
                                            </div>
                                        </div>
                                    </div>
                                    <figcaption>
                                        <div class="shop-loop-product-info">
                                            <div class="info-meta clearfix">
                                                <div class="star-rating">
                                                    <span style="width:80%"></span>
                                                </div>
                                                <div class="loop-add-to-wishlist">
                                                    <div class="yith-wcwl-add-to-wishlist">
                                                        <div class="yith-wcwl-add-button">
                                                            <a href="#" class="add_to_wishlist">
                                                                Add to Wishlist
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="info-content-wrap">
                                                <h3 class="product_title">
                                                    <a href="shop-detail-1.html">Charles Pollock Executive</a>
                                                </h3>
                                                <div class="info-price">
                                                    <span class="price">
                                                        <del><span class="amount">£20.50</span></del> 
                                                        <ins><span class="amount">£19.00</span></ins>
                                                    </span>
                                                </div>
                                                <div class="loop-action">
                                                    <div class="loop-add-to-cart">
                                                        <a href="#" class="add_to_cart_button">
                                                            Add to cart
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div> --}}

{{-- End of Vài sản phẩm mới theo danh mục (khoảng 4 cái thôi)  --}}
@endsection

@section('script')
<script>
    $(document).ready(function() {
        //thêm 1 sp vào giỏ hàng
        $('.add_to_cart_button').click(function(e){
            let product_id = $(this).prev().val();
            $.ajax({
                url: '{{route('site.addcart')}}',
                type: 'GET',
                dataType: 'json',
                data: {product_id: product_id},
            })
            .done(function(data) {
                console.log(data)
                displayMiniCart(data);
            });
        });
    });

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
</script>
@endsection
