@extends('site::site.layout.master')
@section('content')
{{-- <div class="heading-container heading-resize heading-no-button">
    <div class="heading-background heading-parallax bg-shop">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading-wrap">
                        <div class="page-title">
                            <h1>{{$category->name}}</h1>
                            <div class="page-breadcrumb">
                                <ul class="breadcrumb">
                                    <li>
                                        <span><a class="home" href="/"><span>Trang chủ</span></a></span>
                                    </li>
                                    <li>
                                    <span>{{$category->name}}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<div class="content-container commerce page-layout-left-sidebar">
    <div class="container">
        {{-- {{$products->links()}} --}}
        
        <div class="row">
            <div class="col-md-9 main-wrap">
                <div class="main-content">
                    <div class="shop-toolbar">
                    <h2>{{$category->name}} ({{count($category->products)}})</h2>
                        <form class="commerce-ordering clearfix">
                            <div class="commerce-ordering-select">
                                {{-- <label class="hide">Sorting:</label>
                                <div class="form-flat-select">
                                    <select name="orderby" class="orderby">
                                        <option value="" selected='selected'>Default sorting</option>
                                        <option value="">Sort by popularity</option>
                                        <option value="">Sort by average rating</option>
                                        <option value="">Sort by newness</option>
                                        <option value="">Sort by price: low to high</option>
                                        <option value="">Sort by price: high to low</option>
                                    </select>
                                    <i class="fa fa-angle-down"></i>
                                </div> --}}
                            </div>
                            <div class="commerce-ordering-select">
                                {{-- <label class="hide">Show:</label>
                                <div class="form-flat-select">
                                    <select name="per_page" class="per_page">
                                        <option value="" selected='selected'>12</option>
                                        <option value="">24</option>
                                        <option value="">36</option>
                                    </select>
                                    <i class="fa fa-angle-down"></i>
                                </div> --}}
                            </div>
                        </form>
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
                                            {{-- <div class="info-meta clearfix">
                                                <div>
                                                    {{$product->user->first_name}}  {{$product->user->last_name}}
                                                </div>
                                            </div> --}}
                                            <div class="shop-loop-product-info">
                                                <div class="info-content-wrap">
                                                    <h3 class="product_title">
                                                        <a href="shop-detail-1.html">{{$product->name}}</a>
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
                    {{-- <div class="widget commerce widget_product_search">
                        <h4 class="widget-title">
                            <span>Product Search</span>
                        </h4>
                    </div> --}}
                    {{-- <div class="widget widget_layered_nav">
                        <h4 class="widget-title">
                            <span>Filter by Color</span>
                        </h4>
                        <ul>
                            <li>
                                <a href="#">Black</a> 
                                <span class="count">(1)</span>
                            </li>
                            <li>
                                <a href="#">Blue</a> 
                                <span class="count">(1)</span>
                            </li>
                            <li>
                                <a href="#">Brown</a> 
                                <span class="count">(1)</span>
                            </li>
                        </ul>
                    </div> --}}
                    {{-- <div class="widget widget_price_filter">
                        <h4 class="widget-title"><span>Price</span></h4>
                        <form>
                            <div class="price_slider_wrapper">
                                <div class="price_slider"></div>
                                <div class="price_slider_amount">
                                    <input type="text" id="min_price" name="min_price" value="" data-min="10" placeholder="Min price"/>
                                    <input type="text" id="max_price" name="max_price" value="" data-max="732" placeholder="Max price"/>
                                    <button type="submit" class="button">Filter</button>
                                    <div class="price_label">
                                        Price: <span class="from"></span> &mdash; <span class="to"></span>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </form>
                    </div> --}}
                    {{-- <div class="widget widget_layered_nav">
                        <h4 class="widget-title"><span>Manufacturer</span></h4>
                        <ul>
                            @foreach($manufacturers as $manufacturer)
                            <li>
                                <input class="manufacturer" name="{{$manufacturer->slug}}" type="checkbox"> &nbsp;{{$manufacturer->name}}<small class="count">{{count($manufacturer->products)}}</small>
                            </li>
                            @endforeach
                            
                    </div> --}}
                    <div class="widget widget_product_categories">
                        <h4 class="widget-title"><span>Categories</span></h4>
                        <ul class="product-categories">
                            @foreach($categories as $category)
                            <li><a href="{{route('site.product.category',$category->slug)}}">{{$category->name}}</a></li>
                            @endforeach
                            {{-- <li><a href="#">Donec</a></li>
                            <li><a href="#">Fusce</a></li>
                            <li><a href="#">Maecenas</a></li>
                            <li><a href="#">Nulla</a></li>
                            <li><a href="#">Proin</a></li>
                            <li><a href="#">Tortor</a></li>
                            <li><a href="#">Various</a></li> --}}
                        </ul>
                    </div>
                    {{-- <div class="widget widget_products">
                        <h4 class="widget-title"><span>Best Sellers</span></h4>
                        <ul class="product_list_widget">
                            <li>
                                <a href="shop-detail-1.html">
                                    <img width="200" height="200" src="mystyle/images/products/product_60x60.jpg" alt="Product-1"/> 
                                    <span class="product-title">Donec tincidunt justo</span>
                                </a>
                                <del><span class="amount">20.50&#36;</span></del> 
                                <ins><span class="amount">19.00&#36;</span></ins>
                            </li>
                            <li>
                                <a href="shop-detail-1.html">
                                    <img width="200" height="200" src="mystyle/images/products/product_60x60.jpg" alt="Product-2"/> 
                                    <span class="product-title">Mauris egestas</span>
                                </a>
                                <span class="amount">14.95&#36;</span>
                            </li>
                            <li>
                                <a href="shop-detail-1.html">
                                    <img width="200" height="200" src="mystyle/images/products/product_60x60.jpg" alt="Product-9"/> 
                                    <span class="product-title">Morbi fermentum</span>
                                </a>
                                <span class="amount">17.45&#36;</span>
                            </li>
                            <li>
                                <a href="shop-detail-1.html">
                                    <img width="200" height="200" src="mystyle/images/products/product_60x60.jpg" alt="Product-8"/> 
                                    <span class="product-title">Morbi fermentum</span>
                                </a>
                                <span class="amount">23.00&#36;</span>
                            </li>
                            <li>
                                <a href="shop-detail-1.html">
                                    <img width="200" height="200" src="mystyle/images/products/product_60x60.jpg" alt="Product-7"/> 
                                    <span class="product-title">Ut quis Aenean</span>
                                </a>
                                <span class="amount">10.95&#36;</span>
                            </li>
                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>
        {{$products->links()}}
    </div>
    {{-- {{ $category->links() }} --}}
</div>
@endsection
@section('script')
<script>
    $(document).ready(function() {
        // $(".commerce-product-search").before().click(function(e){
        //     $(this).submit();
        // })
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
        $(".manufacturer").change(function(e){
            if(this.checked) {
                console.log(this.name)
            }
        })
    });
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