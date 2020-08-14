@extends('site::site.layout.master')
@section('content')
<div class="content-container commerce page-layout-left-sidebar">
    <div class="container">
        <div class="row">
            <div class="col-md-9 main-wrap">
                <div class="main-content">
                    <div class="shop-toolbar">
                        
                    </div>
                    <div class="shop-loop grid">
                        <ul class="products">
                            @foreach($products as $product)
                            <li class="product product-no-border style-2 col-md-3 col-sm-6">
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
                    {{-- <nav class="commerce-pagination">
                        <p class="commerce-result-count">
                            Showing 1&ndash;12 of 14 results
                        </p>
                        <div class="paginate">
                            <div class="paginate_links">
                                <span class='page-numbers current'>1</span>
                                <a class='page-numbers' href='#'>2</a>
                                <a class="next page-numbers" href="#">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                    </nav> --}}
                </div>
            </div>
            <div class="col-md-3 sidebar-wrap">
                <div class="main-sidebar">
                    <div class="widget commerce widget_product_search">
                        <h4 class="widget-title">
                            <span>Product Search</span>
                        </h4>
                        {{-- <form class="commerce-product-search" >
                            <label class="screen-reader-text" for="s">Search for:</label>
                            <input type="search" class="search-field rounded" placeholder="Search Products&hellip;" value="" name="s"/>
                            <input type="submit" value="Search"/>
                        </form> --}}
                    </div>
                    
                    <div class="widget widget_layered_nav">
                        <button id="loc" class="btn btn-primary">lọc</button>
                        <form class="commerce-product-search-1" action="{{route('site.search')}}">
                        <input type="hidden" name="search_key" value="{{$search_key}}">
                            <h4 class="widget-title"><span>Manufacturer</span></h4>
                            <ul>
                                @foreach($manufacturers as $manufacturer)
                                <li>
                                    @if($request_manufacturers!=null)
                                    <input {{in_array($manufacturer->slug,$request_manufacturers)?"checked":""}} class="manufacturer" name="manufacturer[]" type="checkbox" value="{{$manufacturer->slug}}"> &nbsp;{{$manufacturer->name}}<small class="count">{{count($manufacturer->products)}}</small>
                                    @else
                                    <input class="manufacturer" name="manufacturer[]" type="checkbox" value="{{$manufacturer->slug}}"> &nbsp;{{$manufacturer->name}}<small class="count">{{count($manufacturer->products)}}</small>
                                    @endif
                                </li>
                                @endforeach
                            </ul>
                        </form>
                    </div>
                    <div class="widget widget_product_categories">
                        <h4 class="widget-title"><span>Categories</span></h4>
                        <ul class="product-categories">
                            @foreach($categories as $category)
                            <li><a href="{{route('site.product.category',$category->slug)}}">{{$category->name}}</a></li>
                            @endforeach
                        </ul>
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
        $(".commerce-product-search .manufacturer").change(function(e){
            if(this.checked) {
                console.log(window.location.search);
            }
        })
        $("#loc").click(function(e){
            $(".commerce-product-search-1").submit();
            console.log("đã lọc")
        })
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