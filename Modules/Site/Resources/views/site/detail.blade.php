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
                    <span>Product</span>
                </li>
                <li>
                    <span>{{$product->name}}</span>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="content-container no-padding">
    <div class="container-full">
        <div class="row">
            <div class="col-md-12">
                <div class="main-content">
                    <div class="commerce">
                        <div class="style-1 product">
                            <div class="container">
                                <div class="row summary-container">
                                    <div class="col-md-7 col-sm-6 entry-image">
                                        <div class="single-product-images">
                                            {{-- <span class="onsale">Sale!</span> --}}
                                            <div class="single-product-images-slider">
                                                <div class="caroufredsel product-images-slider" data-synchronise=".single-product-images-slider-synchronise" data-scrollduration="500" data-height="variable" data-scroll-fx="none" data-visible="1" data-circular="1" data-responsive="1" style="opacity: 1;">
                                                    <div class="caroufredsel-wrap">
                                                        <div class="caroufredsel_wrapper" style="display: block; text-align: start; float: none; position: relative; top: auto; right: auto; bottom: auto; left: auto; z-index: auto; width: 595px; height: 575px; margin: 0px; overflow: hidden; cursor: move;"><ul class="caroufredsel-items" style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: 0px; margin: 0px; width: 6545px; height: 575px;">
                                                            <li class="caroufredsel-item" style="width: 575px;">
                                                                <a href="{{$product->image}}" data-rel="magnific-popup-verticalfit">
                                                                    <img width="600" height="685" src="{{$product->image}}" alt="">
                                                                </a>
                                                            </li>
                                                            {{-- <li class="caroufredsel-item" style="width: 575px;">
                                                                <a href="images/products/detail/detail_800x800.jpg" data-rel="magnific-popup-verticalfit">
                                                                    <img width="600" height="685" src="images/products/detail/detail_800x800.jpg" alt="">
                                                                </a>
                                                            </li>
                                                            <li class="caroufredsel-item" style="width: 575px;">
                                                                <a href="images/products/detail/detail_800x800.jpg" data-rel="magnific-popup-verticalfit">
                                                                    <img width="600" height="685" src="images/products/detail/detail_800x800.jpg" alt="">
                                                                </a>
                                                            </li>
                                                            <li class="caroufredsel-item" style="width: 575px;">
                                                                <a href="images/products/detail/detail_800x800.jpg" data-rel="magnific-popup-verticalfit">
                                                                    <img width="600" height="685" src="images/products/detail/detail_800x800.jpg" alt="">
                                                                </a>
                                                            </li>
                                                            <li class="caroufredsel-item" style="width: 575px;">
                                                                <a href="images/products/detail/detail_800x800.jpg" data-rel="magnific-popup-verticalfit">
                                                                    <img width="600" height="685" src="images/products/detail/detail_800x800.jpg" alt="">
                                                                </a>
                                                            </li> --}}
                                                        </ul></div>
                                                        <a href="#" class="caroufredsel-prev" style="display: inline;"></a>
                                                        <a href="#" class="caroufredsel-next" style="display: inline;"></a>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- <div class="single-product-thumbnails">
                                                <div class="caroufredsel product-thumbnails-slider" data-visible-min="2" data-visible-max="4" data-scrollduration="500" data-direction="up" data-height="100%" data-circular="1" data-responsive="0" style="opacity: 1;">
                                                    <div class="caroufredsel-wrap">
                                                        <div class="caroufredsel_wrapper" style="display: block; text-align: start; float: none; position: relative; top: auto; right: auto; bottom: auto; left: auto; z-index: auto; width: 80px; height: 575px; margin: 0px; overflow: hidden; cursor: move;"><ul class="single-product-images-slider-synchronise caroufredsel-items" style="text-align: left; float: none; position: absolute; top: 68px; right: auto; bottom: auto; left: 0px; margin: 0px; height: 1589px; width: 80px;">
                                                            <li class="caroufredsel-item selected synchronise-index-0" style="margin-bottom: 0px;">
                                                                <div class="thumb">
                                                                    <a href="#" data-rel="0">
                                                                        <img width="300" height="300" src="images/products/thumb/product_72x72.jpg" alt="">
                                                                    </a>
                                                                </div>
                                                            </li>
                                                            <li class="caroufredsel-item synchronise-index-1" style="margin-bottom: 0px;">
                                                                <div class="thumb">
                                                                    <a href="#" data-rel="1">
                                                                        <img width="300" height="300" src="images/products/thumb/product_72x72.jpg" alt="">
                                                                    </a>
                                                                </div>
                                                            </li>
                                                            <li class="caroufredsel-item synchronise-index-2" style="margin-bottom: 0px;">
                                                                <div class="thumb">
                                                                    <a href="#" data-rel="2">
                                                                        <img width="300" height="300" src="images/products/thumb/product_72x72.jpg" alt="">
                                                                    </a>
                                                                </div>
                                                            </li>
                                                            <li class="caroufredsel-item synchronise-index-3" style="margin-bottom: 67px;">
                                                                <div class="thumb">
                                                                    <a href="#" data-rel="3">
                                                                        <img width="300" height="300" src="images/products/thumb/product_72x72.jpg" alt="">
                                                                    </a>
                                                                </div>
                                                            </li>
                                                        </ul></div>
                                                    </div>
                                                </div>
                                            </div> --}}
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-6 entry-summary">
                                        <div class="summary">
                                        <h1 class="product_title entry-title">{{$product->name}}</h1>
                                            <p class="price">
                                                {{-- <del>
                                                    <span class="amount">£20.50</span>
                                                </del>  --}}
                                                <ins>
                                                <span class="amount">{{$product->price." VND"}}</span>
                                                </ins>
                                            </p>
                                            {{-- <div class="product-excerpt">
                                                <p>
                                                    Proin malesuada enim nulla, nec bibendum justo vestibulum non. Duis et ipsum convallis, bibendum enim a, hendrerit diam. Praesent tellus mi, vehicula et risus eget, laoreet tristique tortor. Fusce id metus eget nibh imperdiet fermentum non in metus.
                                                </p>
                                            </div> --}}
                                            <form class="cart">
                                                <div class="add-to-cart-table">
                                                    <div class="quantity">
                                                    <input product_id="{{$product->unique_id}}" id="quantity" type="number" step="1" min="1" name="quantity" value="1" title="Qty" class="input-text qty text" size="4">
                                                    </div>
                                                    <button  type="submit" class="button add-to-cart">Thêm vào giỏ hàng</button>
                                                </div>
                                            </form>
                                            {{-- <p><a href="#"><strong>Add to Wishlist</strong></a></p> --}}
                                            <div class="clear"></div>
                                            <div class="product_meta">
                                                <span class="posted_in">
                                                    Category: 
                                                <a href="{{route('site.product.category',$product->category->slug)}}">{{$product->category->name}}</a>
                                                </span>
                                                {{-- <span class="posted_in">
                                                    Manufacturer: 
                                                    <a href="#">{{$product->manufacturer->name}}</a>
                                                </span> --}}
                                            </div>
                                            {{-- <div class="share-links">
                                                <div class="share-icons">
                                                    <span class="facebook-share">
                                                        <a href="#" title="Share on Facebook">
                                                            <i class="fa fa-facebook"></i>
                                                        </a>
                                                    </span>
                                                    <span class="twitter-share">
                                                        <a href="#" title="Share on Twitter">
                                                            <i class="fa fa-twitter"></i>
                                                        </a>
                                                    </span>
                                                    <span class="google-plus-share">
                                                        <a href="#" title="Share on Google +">
                                                            <i class="fa fa-google-plus"></i>
                                                        </a>
                                                    </span>
                                                    <span class="linkedin-share">
                                                        <a href="#" title="Share on Linked In">
                                                            <i class="fa fa-linkedin"></i>
                                                        </a>
                                                    </span>
                                                </div>
                                            </div> --}}
                                        </div> 
                                    </div>
                                </div>
                            </div>
                            <div class="commerce-tab-container">
                                <div class="container">
                                    <div class="col-md-12">
                                        <div class="tabbable commerce-tabs">
                                            <ul class="nav nav-tabs">
                                                <li class="vc_tta-tab active">
                                                    <a data-toggle="tab" href="#tab-1" aria-expanded="true">Mô tả sản phẩm</a>
                                                </li>
                                                {{-- <li class="vc_tta-tab">
                                                    <a data-toggle="tab" href="#tab-2" aria-expanded="false">Reviews</a>
                                                </li> --}}
                                              </ul>
                                              <div class="tab-content">
                                                <div id="tab-1" class="tab-pane fade active in">
                                                    {!!$product->description!!}
                                                    
                                                </div>
                                                {{-- <div id="tab-2" class="tab-pane fade">
                                                    <div id="comments" class="comments-area">
                                                        <h2 class="comments-title">There are <span>3</span> Comments</h2>
                                                        <ol class="comments-list">
                                                            <li class="comment">
                                                                <div class="comment-wrap">
                                                                    <div class="comment-img">
                                                                        <img alt="" src="http://placehold.it/80x80" class="avatar" height="80" width="80">
                                                                    </div>
                                                                    <div class="comment-block">
                                                                        <header class="comment-header">
                                                                            <cite class="comment-author">
                                                                                John Doe
                                                                            </cite>
                                                                            <div class="comment-meta">
                                                                                <span class="time">10 days ago</span>
                                                                            </div>
                                                                        </header>
                                                                        <div class="comment-content">
                                                                            <p>
                                                                                Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur
                                                                            </p>
                                                                            <span class="comment-reply">
                                                                                <a class="comment-reply-link" href="#">Reply</a>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <ol class="children">
                                                                    <li class="comment">
                                                                        <div class="comment-wrap">
                                                                            <div class="comment-img">
                                                                                <img alt="" src="http://placehold.it/80x80" class="avatar" height="80" width="80">
                                                                            </div>
                                                                            <div class="comment-block">
                                                                                <header class="comment-header">
                                                                                    <cite class="comment-author">
                                                                                        Jane Doe
                                                                                    </cite>
                                                                                    <div class="comment-meta">
                                                                                        <span class="time">10 days ago</span>
                                                                                    </div>
                                                                                </header>
                                                                                <div class="comment-content">
                                                                                    <p>
                                                                                        Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur
                                                                                    </p>
                                                                                    <span class="comment-reply">
                                                                                        <a class="comment-reply-link" href="#">Reply</a>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li> 
                                                                </ol> 
                                                            </li> 
                                                            <li class="comment">
                                                                <div class="comment-wrap">
                                                                    <div class="comment-img">
                                                                        <img alt="" src="http://placehold.it/80x80" class="avatar" height="80" width="80">
                                                                    </div>
                                                                    <div class="comment-block">
                                                                        <header class="comment-header">
                                                                            <cite class="comment-author">
                                                                                David Platt
                                                                            </cite>
                                                                            <div class="comment-meta">
                                                                                <span class="time">5 days ago</span>
                                                                            </div>
                                                                        </header>
                                                                        <div class="comment-content">
                                                                            <p>
                                                                                Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur
                                                                            </p>
                                                                            <span class="comment-reply">
                                                                                <a class="comment-reply-link" href="#">Reply</a>
                                                                            </span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li> 
                                                        </ol>
                                                        <div class="comment-respond">
                                                            <h3 class="comment-reply-title">
                                                                <span>Leave your thought</span>
                                                            </h3>
                                                            <form class="comment-form">
                                                                <div class="row">
                                                                    <div class="comment-form-author col-sm-12">
                                                                        <input id="author" name="author" type="text" placeholder="Your name" class="form-control" value="" size="30">
                                                                    </div>
                                                                    <div class="comment-form-email col-sm-12">
                                                                        <input id="email" name="email" type="text" placeholder="email@domain.com" class="form-control" value="" size="30">
                                                                    </div>
                                                                    <div class="comment-form-comment col-sm-12">
                                                                        <textarea class="form-control" placeholder="Comment" id="comment" name="comment" cols="40" rows="6"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="form-submit">
                                                                    <a class="btn btn-default-outline btn-outline" href="#">
                                                                        <span>Post Comment</span>
                                                                    </a>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- <div class="container">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="related products">
                                            <div class="related-title">
                                                <h3><span>We know you will love</span></h3>
                                            </div>
                                            <ul class="products columns-4" data-columns="4">
                                                <li class="product product-no-border style-2">
                                                    <div class="product-container">
                                                        <figure>
                                                            <div class="product-wrap">
                                                                <div class="product-images">
                                                                    <span class="onsale">Sale!</span>
                                                                    <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                                        <a href="shop-detail-1.html"><img width="450" height="450" src="images/products/product_328x328.jpg" alt=""></a>
                                                                    </div>
                                                                    <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                                        <a href="shop-detail-1.html"><img width="450" height="450" src="images/products/product_328x328alt.jpg" alt=""></a>
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
                                                                            <a href="shop-detail-1.html">Daniel Stromborg Round</a>
                                                                        </h3>
                                                                        <div class="info-price">
                                                                            <span class="price">
                                                                                <del><span class="amount">£23.00</span></del> <ins><span class="amount">£20.00</span></ins>
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
                                                <li class="product product-no-border style-2">
                                                    <div class="product-container">
                                                        <figure>
                                                            <div class="product-wrap">
                                                                <div class="product-images">
                                                                    <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                                        <a href="shop-detail-1.html"><img width="450" height="450" src="images/products/product_328x328.jpg" alt=""></a>
                                                                    </div>
                                                                    <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                                        <a href="shop-detail-1.html"><img width="450" height="450" src="images/products/product_328x328alt.jpg" alt=""></a>
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
                                                                                <span class="amount">£10.75</span>
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
                                                <li class="product product-no-border style-2">
                                                    <div class="product-container">
                                                        <figure>
                                                            <div class="product-wrap">
                                                                <div class="product-images">
                                                                    <span class="onsale">Sale!</span>
                                                                    <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                                        <a href="shop-detail-1.html"><img width="450" height="450" src="images/products/product_328x328.jpg" alt=""></a>
                                                                    </div>
                                                                    <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                                        <a href="shop-detail-1.html"><img width="450" height="450" src="images/products/product_328x328alt.jpg" alt=""></a>
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
                                                                            <a href="shop-detail-1.html">Hans Wegner Two Seat Sofa</a>
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
                                                <li class="product product-no-border style-2">
                                                    <div class="product-container">
                                                        <figure>
                                                            <div class="product-wrap">
                                                                <div class="product-images">
                                                                    <span class="onsale">Sale!</span>
                                                                    <div class="shop-loop-thumbnail shop-loop-front-thumbnail">
                                                                        <a href="shop-detail-1.html"><img width="450" height="450" src="images/products/product_328x328.jpg" alt=""></a>
                                                                    </div>
                                                                    <div class="shop-loop-thumbnail shop-loop-back-thumbnail">
                                                                        <a href="shop-detail-1.html"><img width="450" height="450" src="images/products/product_328x328alt.jpg" alt=""></a>
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
                                                                            <a href="shop-detail-1.html">Hans Wegner Desk</a>
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
                            </div> --}}
                        </div> 
                        {{-- <div class="woo-instagram">
                            <h3 class="heading-center-custom">
                                <span>Instashop</span>
                            </h3>
                            <div class="instagram">
                                <div class="instagram-wrap">
                                    <div class="caroufredsel caroufredsel-item-no-padding" data-height="variable" data-scroll-fx="scroll" data-scroll-item="1" data-visible-min="1" data-visible-max="4" data-responsive="1" data-infinite="1" data-autoplay="0" data-circular="1" style="opacity: 1;">
                                        <div class="caroufredsel-wrap">
                                            <div class="caroufredsel_wrapper" style="display: block; text-align: start; float: none; position: relative; top: 0px; right: 0px; bottom: 0px; left: 0px; z-index: auto; width: 1440px; height: 360px; margin: 0px; overflow: hidden; cursor: move;"><ul class="caroufredsel-items row" style="text-align: left; float: none; position: absolute; top: 0px; right: auto; bottom: auto; left: 0px; margin: 0px; width: 10080px; height: 360px;">
                                                <li class="caroufredsel-item col-sm-3 col-xs-6" style="width: 360px;">
                                                    <a href="//instagram.com/p/6T7HXbHJjB" title="Instagram Image" target="_blank">
                                                        <img src="images/instagram/thumb_320x320.jpg" alt="Instagram Image">
                                                    </a>
                                                </li>
                                                <li class="caroufredsel-item col-sm-3 col-xs-6" style="width: 360px;">
                                                    <a href="//instagram.com/p/6T7GdlHJi-" title="Instagram Image" target="_blank">
                                                        <img src="images/instagram/thumb_320x320.jpg" alt="Instagram Image">
                                                    </a>
                                                </li>
                                                <li class="caroufredsel-item col-sm-3 col-xs-6" style="width: 360px;">
                                                    <a href="//instagram.com/p/6T7F21HJi9" title="Instagram Image" target="_blank">
                                                        <img src="images/instagram/thumb_320x320.jpg" alt="Instagram Image">
                                                    </a>
                                                </li>
                                                <li class="caroufredsel-item col-sm-3 col-xs-6" style="width: 360px;">
                                                    <a href="//instagram.com/p/6T7E8jHJi6" title="Instagram Image" target="_blank">
                                                        <img src="images/instagram/thumb_320x320.jpg" alt="Instagram Image">
                                                    </a>
                                                </li>
                                                <li class="caroufredsel-item col-sm-3 col-xs-6" style="width: 360px;">
                                                    <a href="//instagram.com/p/6T7DlgnJi2" title="Instagram Image" target="_blank">
                                                        <img src="images/instagram/thumb_320x320.jpg" alt="Instagram Image">
                                                    </a>
                                                </li>
                                                <li class="caroufredsel-item col-sm-3 col-xs-6" style="width: 360px;">
                                                    <a href="//instagram.com/p/6T7CicnJi1" title="Instagram Image" target="_blank">
                                                        <img src="images/instagram/thumb_320x320.jpg" alt="Instagram Image">
                                                    </a>
                                                </li>
                                                <li class="caroufredsel-item col-sm-3 col-xs-6" style="width: 360px;">
                                                    <a href="//instagram.com/p/6T7AWbHJiz" title="Instagram Image" target="_blank">
                                                        <img src="images/instagram/thumb_320x320.jpg" alt="Instagram Image">
                                                    </a>
                                                </li>
                                                <li class="caroufredsel-item col-sm-3 col-xs-6" style="width: 360px;">
                                                    <a href="//instagram.com/p/6T6_MAnJix" title="Instagram Image" target="_blank">
                                                        <img src="images/instagram/thumb_320x320.jpg" alt="Instagram Image">
                                                    </a>
                                                </li>
                                                <li class="caroufredsel-item col-sm-3 col-xs-6" style="width: 360px;">
                                                    <a href="//instagram.com/p/6T6-PbnJiw" title="Instagram Image" target="_blank">
                                                        <img src="images/instagram/thumb_320x320.jpg" alt="Instagram Image">
                                                    </a>
                                                </li>
                                                <li class="caroufredsel-item col-sm-3 col-xs-6" style="width: 360px;">
                                                    <a href="//instagram.com/p/6T69ipHJit" title="Instagram Image" target="_blank">
                                                        <img src="images/instagram/thumb_320x320.jpg" alt="Instagram Image">
                                                    </a>
                                                </li>
                                                <li class="caroufredsel-item col-sm-3 col-xs-6" style="width: 360px;">
                                                    <a href="//instagram.com/p/6T68pOHJiq" title="Instagram Image" target="_blank">
                                                        <img src="images/instagram/thumb_320x320.jpg" alt="Instagram Image">
                                                    </a>
                                                </li>
                                                <li class="caroufredsel-item col-sm-3 col-xs-6" style="width: 360px;">
                                                    <a href="//instagram.com/p/6T672znJip" title="Instagram Image" target="_blank">
                                                        <img src="images/instagram/thumb_320x320.jpg" alt="Instagram Image">
                                                    </a>
                                                </li>
                                            </ul></div>
                                            <a href="#" class="caroufredsel-prev" style="display: block;"></a>
                                            <a href="#" class="caroufredsel-next" style="display: block;"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
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
    $('.add-to-cart').click(function(e){
        e.preventDefault();
        var quantity = $('#quantity').val();
        var product_id = $('#quantity').attr('product_id');
        console.log(product_id);
        addToCart(product_id,quantity);
    })
     function addToCart(product_id,qty)
	{	
        var quantity = $('#quantity').val();
		$.ajax({
			url: '{{route('site.updatecart')}}',
			type: 'GET',
			dataType: 'json',
			data: {product_id: product_id, qty: quantity},
		})
		.done(function(data) {
            console.log("đã add")
            displayMiniCart(data)
		});
		
	}
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
 })
    
</script>

@endsection