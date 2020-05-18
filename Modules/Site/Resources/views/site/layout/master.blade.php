<!doctype html>
<html lang="en-US">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
        <title>WooW | HTML Commerce Template</title>
        <base href="{{asset('')}}">
		<link rel="shortcut icon" href="mystyle/images/favicon.ico">

		<link rel='stylesheet' href='mystyle/css/settings.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='mystyle/css/bootstrap.min.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='mystyle/css/swatches-and-photos.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='mystyle/css/prettyPhoto.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='mystyle/css/jquery.selectBox.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='mystyle/css/font-awesome.min.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic%7CCrimson+Text:400,400italic,600,600italic,700,700italic' type='text/css' media='all'/>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
		<link rel='stylesheet' href='mystyle/css/elegant-icon.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='mystyle/css/style.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='mystyle/css/commerce.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='mystyle/css/custom.css' type='text/css' media='all'/>
		<link rel='stylesheet' href='mystyle/css/magnific-popup.css' type='text/css' media='all'/>

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
	</head>
	<body>
	    <div id="wrapper" class="wide-wrap">
			<div class="offcanvas-overlay"></div>
			@include('site::site.layout.header')
			<div class="content-container no-padding">
				<div class="container-full">
					<div class="main-content">
						@yield('content')
						Em đang làm CMS nên chưa đẩy data ra Front nha thầy <br>
						Thầy nhấp vào  <a href="https://quantb.name.vn/en/backend">link này</a> để vào CMS 
					{{-- SLIDE  --}}
						{{-- <div class="row row-fluid">
							<div class="col-sm-12">
								<div class="rev_slider_wrapper fullwidthbanner-container">
									<div id="rev_slider" class="rev_slider fullwidthabanner">
										<ul>  
											<li data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="" data-rotate="0" data-saveperformance="off" data-title="Slide">
		
												<img src="images/slideshow/dummy.png" alt="" width="1920" height="656" data-lazyload="images/slideshow/slider_1920x657.jpg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg">
		
												<div class="tp-caption home1-small-black tp-resizeme" data-x="586" data-y="217" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];rZ:0deg;sX:0.7;sY:0.7;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="500" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05">
													the best gadgets 2016
												</div>
		
												<div class="tp-caption primary-button rev-btn" data-x="628" data-y="342" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:0;e:Linear.easeNone;" data-style_hover="c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bs:solid;bw:1px;cursor:pointer;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:2000;e:Power2.easeInOut;" data-transform_out="y:[100%];rZ:0deg;sX:0.7;sY:0.7;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:[100%];s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-responsive="off">
													shop now
												</div>
		
												<div class="tp-caption home1-primary tp-resizeme" data-x="427" data-y="261" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rZ:-35deg;sX:1;sY:1;skX:0;skY:0;s:2000;e:Power4.easeInOut;" data-transform_out="y:[100%];rZ:0deg;sX:0.7;sY:0.7;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;s:inherit;e:inherit;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="500" data-splitin="chars" data-splitout="none" data-responsive_offset="on" data-elementdelay="0.05">
													changed is everything.
												</div>
		
												<div class="tp-caption tp-resizeme" data-x="-391" data-y="-51" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-transform_idle="o:1;" data-transform_in="x:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="x:[-100%];s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500" data-responsive_offset="on">
													<img src="images/slideshow/dummy.png" alt="" width="613" height="707" data-ww="613px" data-hh="707px" data-lazyload="images/slideshow/imac.png">
												</div>
		
												<div class="tp-caption tp-resizeme" data-x="172" data-y="311" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power2.easeInOut;" data-transform_out="y:[100%];s:1000;s:1000;" data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500" data-responsive_offset="on">
													<img src="images/slideshow/dummy.png" alt="" width="260" height="303" data-ww="260px" data-hh="303px" data-lazyload="images/slideshow/ipad.png">
												</div>
		
												<div class="tp-caption tp-resizeme" data-x="281" data-y="390" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-transform_idle="o:1;" data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power2.easeInOut;" data-transform_out="y:[100%];s:1000;s:1000;" data-mask_in="x:0px;y:[100%];" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500" data-responsive_offset="on">
													<img src="images/slideshow/dummy.png" alt="" width="221" height="228" data-ww="221px" data-hh="228px" data-lazyload="images/slideshow/iphone.png">
												</div>
		
												<div class="tp-caption tp-resizeme" data-x="768" data-y="276" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-transform_idle="o:1;" data-transform_in="x:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;s:1500;e:Power3.easeInOut;" data-transform_out="x:[100%];s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_in="x:0px;y:0px;" data-mask_out="x:inherit;y:inherit;s:inherit;e:inherit;" data-start="500" data-responsive_offset="on">
													<img src="images/slideshow/dummy.png" alt="" width="694" height="347" data-ww="694px" data-hh="347px" data-lazyload="images/slideshow/macbook.png">
												</div>
											</li>
		
											<li data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="default" data-thumb="" data-rotate="0" data-saveperformance="off" data-title="Slide">
		
												<img src="images/slideshow/dummy.png" alt="" data-lazyload="images/slideshow/slider_1920x657.jpg" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="off" class="rev-slidebg">
		
		
												<div class="tp-caption tp-resizeme" data-x="-191" data-y="46" data-width="['none','none','none','none']" data-height="['none','none','none','none']" data-transform_idle="o:1;" data-transform_in="x:-50px;opacity:0;s:300;e:Power2.easeInOut;" data-transform_out="x:-50px;opacity:0;s:300;s:300;" data-start="500" data-responsive_offset="on">
													<img src="images/slideshow/dummy.png" alt="" width="704" height="523" data-ww="704px" data-hh="523px" data-lazyload="images/slideshow/rev_img_home2.png">
												</div>
		
												<div class="tp-caption home1-small-black tp-resizeme" data-x="610" data-y="183" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeOut;" data-transform_out="y:[100%];rZ:0deg;sX:0.7;sY:0.7;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on">
													the best products 2015
												</div>
		
												<div class="tp-caption primary-button rev-btn" data-x="610" data-y="402" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:0;e:Linear.easeNone;" data-style_hover="c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bs:solid;bw:1px;cursor:pointer;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeOut;" data-transform_out="y:[100%];rZ:0deg;sX:0.7;sY:0.7;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on" data-responsive="off">
													shop now
												</div>
		
												<div class="tp-caption home1-primary tp-resizeme" data-x="610" data-y="227" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeOut;" data-transform_out="y:[100%];rZ:0deg;sX:0.7;sY:0.7;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on">
													Built-in speakerphone
												</div>
		
												<div class="tp-caption home3-small-black tp-resizeme" data-x="610" data-y="296" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.8;sY:0.8;skX:0;skY:0;opacity:0;s:1500;e:Power4.easeOut;" data-transform_out="y:[100%];rZ:0deg;sX:0.7;sY:0.7;s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" data-mask_out="x:0;y:0;s:inherit;e:inherit;" data-start="500" data-splitin="none" data-splitout="none" data-responsive_offset="on">
													Suscipit aliquam lorem ornare consectetur integer urna<br> fermentum venenatis, molestie a non phasellus feugiat curae nam<br> orci convallis
												</div>
											</li>
										</ul>
										<div class="tp-bannertimer tp-bottom"></div>
									</div>
								</div>
							</div>
						</div> --}}
					{{-- END SLIDE  --}}

			{{-- LẤY		CÁC SẢN PHẨM NỔI BẬT --}}
						{{-- <div class="container">
							<div class="row row-fluid pt-6 pb-6">
								<div class="text-center col-sm-3">
									<div class="box-ft box-ft-5 black">
										<img src="mystyle/images/thumb_270x470.jpg" alt="">
										<a href="#">
											<span class="bof-tf-title-wrap">
												<span class="bof-tf-title-wrap-2">
													<span class="bof-tf-title">iPad Pro</span>
													<span class="bof-tf-sub-title">Thin.Light.Epic</span>
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
													<span class="bof-tf-title">Accessories</span>
													<span class="bof-tf-sub-title">
														Personalize your iPad with casesand covers. 
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
													<span class="bof-tf-title">Mixr</span>
													<span class="bof-tf-sub-title">Sync your sound. And your style. </span>
												</span>
											</span>
										</a>
									</div>
									<div class="box-ft box-ft-5">
										<img src="mystyle/images/thumb_270x220.jpg" alt="">
										<a href="#">
											<span class="bof-tf-title-wrap">
												<span class="bof-tf-title-wrap-2">
													<span class="bof-tf-title">Mac Pro</span>
													<span class="bof-tf-sub-title">Starting at $2,999</span>
												</span>
											</span>
										</a>
									</div>
								</div>
							</div>
						</div> --}}
					{{-- END CÁC SẢN PHẨM NỔI BẬT --}}

					{{-- MONEY  --}}
						{{-- <div class="container">
							<div class="row shipping-policy">
								<div class="policy-featured-col col-md-4 col-sm-6">
									<i class="fa fa-money"></i>
									<h4 class="policy-featured-title">
										100% <br> return money
									</h4>
									free return standard order in 30 days 
								</div>
								<div class="policy-featured-col col-md-4 col-sm-6">
									<i class="fa fa-globe"></i>
									<h4 class="policy-featured-title">
										world wide <br> delivery
									</h4>
									free ship for payment over $100 
								</div>
								<div class="policy-featured-col col-md-4 col-sm-6">
									<i class="fa fa-clock-o"></i>
									<h4 class="policy-featured-title">
										24h <br> shipment 
									</h4>
									for standard package 
								</div>
							</div>
						</div> --}}
					{{-- END MONEY --}}

			{{-- LẤY		CÁC SẢN PHẨM MỚI --}}
						{{-- <div class="container">
							<div class="row row-fluid mb-10">
								<div class="col-sm-12">
									<div class="caroufredsel product-slider nav-position-center" data-height="variable" data-visible-min="1" data-responsive="1" data-infinite="1" data-autoplay="0">
										<div class="product-slider-title">
											<h3 class="el-heading">New Arrivals</h3>
										</div>
										<div class="caroufredsel-wrap">
											<div class="commerce columns-4">
												<ul class="products columns-4" data-columns="4">
													<li class="product product-no-border style-2">
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
																				<a href="shop-detail-1.html">Macbook Pro</a>
																			</h3>
																			<div class="info-price">
																				<span class="price">
																					<del><span class="amount">£20.50</span></del> <ins><span class="amount">£19.00</span></ins>
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
																				<a href="shop-detail-1.html">Color Printer</a>
																			</h3>
																			<div class="info-price">
																				<span class="price">
																					<span class="amount">&pound;10.95</span>
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
																				<a href="shop-detail-1.html">Apple iMac Retina</a>
																			</h3>
																			<div class="info-price">
																				<span class="price">
																					<span class="amount">&pound;17.50</span>
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
																				<a href="shop-detail-1.html">Wireless Microphone</a>
																			</h3>
																			<div class="info-price">
																				<span class="price">
																					<span class="amount">&pound;17.75</span>
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
																				<a href="shop-detail-1.html">Shure Microphone</a>
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
													<li class="product product-no-border style-2">
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
																				<a href="shop-detail-1.html">Beats Studio</a>
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
																				<a href="shop-detail-1.html">Urbeats</a>
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
													<li class="product product-no-border style-2">
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
																				<a href="shop-detail-1.html">Magic Mouse</a>
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
													<li class="product product-no-border style-2">
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
													<li class="product product-no-border style-2">
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
													<li class="product product-no-border style-2">
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
																				<a href="shop-detail-1.html">Eero Saarinen Oval Dining</a>
																			</h3>
																			<div class="info-price">
																				<span class="price">
																					<span class="amount">&pound;15.05</span>
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
																				<a href="shop-detail-1.html">Warren Platner Dining</a>
																			</h3>
																			<div class="info-price">
																				<span class="price">
																					<span class="amount">&pound;10.95</span>
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
											<a href="#" class="caroufredsel-prev"></a>
											<a href="#" class="caroufredsel-next"></a>
										</div>
									</div>
								</div>
							</div>
						</div> --}}
					{{-- END CÁC SẢN PHẨM MỚI --}}

						{{-- <div class="container-full">
							<div class="row row-fluid custom-bg-2 mb-5">
								<div class="container">
									<div class="col-sm-7 pt-12">
										<p class="white italic size-15 mb-0">Connects wirelessly</p>
										<h2 class="custom_heading white mt-0">Immaculate sound</h2>
										<p class="white">Lorem ipsum dolor sit amet, natum aeterno sanctus ei per, fastidii torquatos nam ex. Amet vitae prodesset ut qui, labores civibus appellantur pri ei, pro cu tation dissentias. An per quando ornatus platonem, suas prodesset vel ad. Quas laoreet cotidieque cum ut, vix et insolens explicari corrumpit. Simul commodo et has, te tempor recusabo mea, eam sumo fabulas definiebas eu. No scripta legendos liberavisse vis.</p>
									</div>
									<div class="col-sm-5 pb-3">
										<div class="special-product">
											<div class="special-product-wrap">
												<div class="special-product-image">
													<a href="#">
														<img width="470" height="470" src="images/thumb_470x470.jpg" alt="special_product"/>
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div> --}}

			{{-- LẤY 		CÁC SẢN PHẨM THEO CATE --}}
						{{-- <div class="container">
							<div class="row row-fluid mt-2">
								<div class="col-sm-12">
									<div data-layout="masonry" data-masonry-column="4" class="commerce products-masonry masonry">
										<div class="masonry-filter">
											<div class="filter-action filter-action-center">
												<ul data-filter-key="filter">
													<li>
														<a data-masonry-toogle="selected" href="#" data-filter-value=".maecenas">Maecenas</a>
													</li>
													<li>
														<a href="#" data-filter-value=".nulla">Aliquam</a>
													</li>
													<li>
														<a href="#" data-filter-value=".donec">Donec</a>
													</li>
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
					{{-- END CÁC SẢN PHẨM THEO CATE --}}

					{{-- MEGA SALE --}}
						{{-- <div class="container">
							<div class="row row-fluid mb-6">
								<div class="col-sm-6">
									<div class="box-ft box-ft-5 black">
										<img src="mystyle/images/thumb_570x190.jpg" alt="">
										<a href="#">
											<span class="bof-tf-title-wrap">
												<span class="bof-tf-title-wrap-2">
													<span class="bof-tf-title">MEGA SALE</span>
													<span class="bof-tf-sub-title">Smart TV </span>
												</span>
											</span>
										</a>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="box-ft box-ft-5 black">
										<img src="mystyle/images/thumb_570x190.jpg" alt="">
										<a href="#">
											<span class="bof-tf-title-wrap">
												<span class="bof-tf-title-wrap-2">
													<span class="bof-tf-title">MOBILE MUSIC</span>
													<span class="bof-tf-sub-title">Feel the real </span>
												</span>
											</span>
										</a>
									</div>
								</div>
							</div>
						</div> --}}
					{{-- END MEGA SALE --}}
					{{-- OUR BLOG  --}}
						{{-- <div class="container">
							<div class="row row-fluid mb-5">
								<div class="col-sm-12">
									<h3 class="heading-center-custom text-center">
										our of blog
									</h3>
									<div class="post-grid-wrap">
										<ul class="row grid col-3">
											<li class="col-sm-4 ">
												<article class="hentry">
													<div class="hentry-wrap">
														<div class="entry-featured">
															<a href="blog-detail.html" title="Blog-1">
																<img width="600" height="450" src="mystyle/images/blog/blog_370x238.jpg" alt="Blog-1"/>
															</a>
														</div>
														<div class="entry-info">
															<div class="entry-header">
																<h3 class="entry-title">
																	<a href="blog-detail.html">Monogrammed Speedy in Tow </a>
																</h3>
															</div>
															<div class="entry-content">
																<p>
																	The summer holidays are wonderful. Dressing for them can be significantly less so: Packing light is always at a premium, but one never wants to feel high, dry, and seriously...
																</p>
															</div>
															<div class="entry-meta">
																<span class="meta-date">
																	Date: 
																	<time datetime="2015-08-11T06:27:49+00:00">
																		August 11, 2015
																	</time>
																</span>
																<span class="meta-author">
																	By: 
																	<a href="#">sitesao</a>
																</span>
																<span class="meta-category">
																	Category: 
																	<a href="#">Aliquam</a>, <a href="#">Nunc</a>
																</span>
															</div>
														</div>
													</div>
												</article>
											</li>
											<li class="col-sm-4 ">
												<article class="hentry">
													<div class="hentry-wrap">
														<div class="entry-featured">
															<a href="blog-detail.html" title="Blog-1">
																<img width="600" height="450" src="mystyle/images/blog/blog_370x238.jpg" alt="Blog-2"/>
															</a>
														</div>
														<div class="entry-info">
															<div class="entry-header">
																<h3 class="entry-title">
																	<a href="blog-detail.html">Summer Classics in Positano </a>
																</h3>
															</div>
															<div class="entry-content">
																<p>
																	The summer holidays are wonderful. Dressing for them can be significantly less so: Packing light is always at a premium, but one never wants to feel high, dry, and seriously...
																</p>
															</div>
															<div class="entry-meta">
																<span class="meta-date">
																	Date: 
																	<time datetime="2015-08-11T06:27:49+00:00">
																		August 11, 2015
																	</time>
																</span>
																<span class="meta-author">
																	By: 
																	<a href="#">sitesao</a>
																</span>
																<span class="meta-category">
																	Category: 
																	<a href="#">Nunc</a>
																</span>
															</div>
														</div>
													</div>
												</article>
											</li>
											<li class="col-sm-4 ">
												<article class="hentry">
													<div class="hentry-wrap">
														<div class="entry-featured">
															<a href="blog-detail.html" title="Blog-1">
																<img width="600" height="450" src="mystyle/images/blog/blog_370x238.jpg" alt="Blog-3"/>
															</a>
														</div>
														<div class="entry-info">
															<div class="entry-header">
																<h3 class="entry-title">
																	<a href="blog-detail.html">That Most Modern </a>
																</h3>
															</div>
															<div class="entry-content">
																<p>
																	The summer holidays are wonderful. Dressing for them can be significantly less so: Packing light is always at a premium, but one never wants to feel high, dry, and seriously...
																</p>
															</div>
															<div class="entry-meta">
																<span class="meta-date">
																	Date: 
																	<time datetime="2015-08-11T06:27:49+00:00">
																		August 11, 2015
																	</time>
																</span>
																<span class="meta-author">
																	By: 
																	<a href="#">sitesao</a>
																</span>
																<span class="meta-category">
																	Category: 
																	<a href="#">Nunc</a>, <a href="#">Aliquam</a>
																</span>
															</div>
														</div>
													</div>
												</article>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div> --}}
					{{-- END OUR BLOG  --}}
					{{-- BRAND  --}}
						{{-- <div class="container">
							<div class="row row-fluid brands mb-3">
								<div class="col-sm-6">
									<h3 class="custom_heading">BRANDS</h3>
									<div class="client client-grid">
										<div class="row">
											<div class="col-md-4 col-sm-6">
												<div class="client-item">
													<a target="_blank" href="#">
														<img alt="" src="mystyle/images/brand/brand_170x77.jpg" class="grayscale">
													</a>
												</div>
											</div>
											<div class="col-md-4 col-sm-6">
												<div class="client-item">
													<a target="_blank" href="#">
														<img alt="" src="mystyle/images/brand/brand_170x77.jpg" class="grayscale">
													</a>
												</div>
											</div>
											<div class="col-md-4 col-sm-6">
												<div class="client-item">
													<a target="_blank" href="#">
														<img alt="" src="mystyle/images/brand/brand_170x77.jpg" class="grayscale">
													</a>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-4 col-sm-6">
												<div class="client-item">
													<a target="_blank" href="#">
														<img alt="" src="mystyle/images/brand/brand_170x77.jpg" class="grayscale">
													</a>
												</div>
											</div>
											<div class="col-md-4 col-sm-6">
												<div class="client-item">
													<a target="_blank" href="#">
														<img alt="" src="mystyle/images/brand/brand_170x77.jpg" class="grayscale">
													</a>
												</div>
											</div>
											<div class="col-md-4 col-sm-6">
												<div class="client-item">
													<a target="_blank" href="#">
														<img alt="" src="mystyle/images/brand/brand_170x77.jpg" class="grayscale">
													</a>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<h3 class="custom_heading">WHAT'S CLIENT SAY</h3>
									<div class="testimonial style-2 mb-5">
										<div class="caroufredsel" data-visible-min="1" data-visible-max="2" data-scroll-fx="scroll" data-speed="5000" data-responsive="1" data-infinite="1" data-autoplay="0">
											<div class="caroufredsel-wrap">
												<ul class="caroufredsel-items">
													<li class="caroufredsel-item col-sm-12">
														<div class="testimonial-wrap">
															<div class="testimonial-text">
																<span>&ldquo;</span>
																Sed a mollis libero. Sed aliquet, tortor vel effics itur finibus, nunc felis hendrerit nula non auct or lectus erat vel magna.
																<span>&rdquo;</span>
															</div>
															<div class="clearfix">
																<div class="testimonial-avatar">
																	<img src="mystyle/images/avatar/thumb_50x50.jpg" alt=""/>
																</div>
																<span class="testimonial-author">tony task</span>
																<span class="testimonial-company">Manager Director</span>
															</div>
														</div>
													</li>
													<li class="caroufredsel-item col-sm-12">
														<div class="testimonial-wrap">
															<div class="testimonial-text">
																<span>&ldquo;</span>
																Sed a mollis libero. Sed aliquet, tortor vel effics itur finibus, nunc felis hendrerit nula non auct or lectus erat vel magna.
																<span>&rdquo;</span>
															</div>
															<div class="clearfix">
																<div class="testimonial-avatar">
																	<img src="mystyle/images/avatar/thumb_50x50.jpg" alt=""/>
																</div>
																<span class="testimonial-author">John Smith</span>
																<span class="testimonial-company">CEO</span>
															</div>
														</div>
													</li>
												</ul>
												<a href="#" class="caroufredsel-prev hide"></a>
												<a href="#" class="caroufredsel-next hide"></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div> --}}
					{{-- END BRAND --}}
					{{-- MINI --}}
						{{-- <div class="container">
							<div class="row row-fluid">
								<div class="col-sm-6 col-lg-3 col-md-3">
									<h4 class="custom_heading">FEATURED</h4>
									<div class="widget commerce">
										<ul class="product_list_widget">
											<li>
												<a href="#" title="Urbeats">
													<img width="100" height="100" src="mystyle/images/products/product_60x60.jpg" alt=""/> <span class="product-title">Urbeats</span>
												</a>
												<del><span class="amount">&pound;20.50</span></del> 
												<ins><span class="amount">&pound;19.00</span></ins>
											</li>
											<li>
												<a href="#" title="Epson Color Printer">
													<img width="100" height="100" src="mystyle/images/products/product_60x60.jpg" alt=""/> <span class="product-title">Epson Color Printer</span>
												</a>
												<span class="amount">&pound;17.50</span>
											</li>
											<li>
												<a href="#" title="Screen Holder">
													<img width="100" height="100" src="mystyle/images/products/product_60x60.jpg" alt=""/> <span class="product-title">Screen Holder</span>
												</a>
												<del><span class="amount">&pound;23.00</span></del> 
												<ins><span class="amount">&pound;20.00</span></ins>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-sm-6 col-lg-3 col-md-3">
									<h4 class="custom_heading">TOP RATE</h4>
									<div class="widget commerce">
										<ul class="product_list_widget">
											<li>
												<a href="#" title="Epson Color Printer">
													<img width="100" height="100" src="mystyle/images/products/product_60x60.jpg" alt=""/> 
													<span class="product-title">Epson Color Printer</span>
												</a>
												<div class="star-rating">
													<span style="width:100%"></span>
												</div> 
												<span class="amount">&pound;17.50</span>
											</li>
											<li>
												<a href="#" title="Urbeats">
													<img width="100" height="100" src="mystyle/images/products/product_60x60.jpg" alt=""/> 
													<span class="product-title">Urbeats</span>
												</a>
												<div class="star-rating">
													<span style="width:80%"></span>
												</div> 
												<span class="amount">&pound;12.00</span>
												&ndash;
												<span class="amount">&pound;20.00</span>
											</li>
											<li>
												<a href="#" title="Macbook Pro">
													<img width="100" height="100" src="mystyle/images/products/product_60x60.jpg" alt=""/> 
													<span class="product-title">Macbook Pro</span>
												</a>
												<div class="star-rating">
													<span style="width:100%"></span>
												</div> 
												<del><span class="amount">&pound;20.50</span></del> 
												<ins><span class="amount">&pound;19.00</span></ins>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-sm-6 col-lg-3 col-md-3">
									<h4 class="custom_heading">HOT SALE</h4>
									<div class="widget commerce">
										<ul class="product_list_widget">
											<li>
												<a href="#" title="Urbeats">
													<img width="100" height="100" src="mystyle/images/products/product_60x60.jpg" alt=""/> <span class="product-title">Urbeats</span>
												</a>
												<del><span class="amount">&pound;20.50</span></del> 
												<ins><span class="amount">&pound;19.00</span></ins>
											</li>
											<li>
												<a href="#" title="Epson Color Printer">
													<img width="100" height="100" src="mystyle/images/products/product_60x60.jpg" alt=""/> <span class="product-title">Epson Color Printer</span>
												</a>
												<span class="amount">&pound;17.50</span>
											</li>
											<li>
												<a href="#" title="Screen Holder">
													<img width="100" height="100" src="mystyle/images/products/product_60x60.jpg" alt=""/> <span class="product-title">Screen Holder</span>
												</a>
												<del><span class="amount">&pound;23.00</span></del> 
												<ins><span class="amount">&pound;20.00</span></ins>
											</li>
										</ul>
									</div>
								</div>
								<div class="col-sm-6 col-lg-3 col-md-3">
									<h4 class="custom_heading">BEST SELLING</h4>
									<div class="widget commerce">
										<ul class="product_list_widget">
											<li>
												<a href="#" title="Urbeats">
													<img width="100" height="100" src="mystyle/images/products/product_60x60.jpg" alt=""/> <span class="product-title">Urbeats</span>
												</a>
												<del><span class="amount">&pound;20.50</span></del> 
												<ins><span class="amount">&pound;19.00</span></ins>
											</li>
											<li>
												<a href="#" title="Epson Color Printer">
													<img width="100" height="100" src="mystyle/images/products/product_60x60.jpg" alt=""/> <span class="product-title">Epson Color Printer</span>
												</a>
												<span class="amount">&pound;17.50</span>
											</li>
											<li>
												<a href="#" title="Screen Holder">
													<img width="100" height="100" src="mystyle/images/products/product_60x60.jpg" alt=""/> <span class="product-title">Screen Holder</span>
												</a>
												<del><span class="amount">&pound;23.00</span></del> 
												<ins><span class="amount">&pound;20.00</span></ins>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div> --}}
					{{-- END MINI --}}
					</div>
				</div>
			</div>
			@include('site::site.layout.footer')
		</div>

		
		
		<div class="modal fade user-lostpassword-modal" id="userlostpasswordModal" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<form id="userlostpasswordModalForm">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal">
								<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
							</button>
							<h4 class="modal-title">Forgot Password</h4>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label>Username or E-mail:</label>
								<input type="text" name="user_login" required class="form-control" value="" placeholder="Username or E-mail">
							</div>
						</div>
						<div class="modal-footer">
							<span class="user-login-modal-link pull-left">
								<a data-rel="loginModal" href="#loginModal">Already have an account?</a>
							</span>
							<button type="submit" class="btn btn-default btn-outline">Sign in</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="minicart-side">
			<div class="minicart-side-title">
				<h4>Shopping Cart</h4>
			</div>
			<div class="minicart-side-content">
				<div class="minicart">
					<div class="minicart-header no-items show">
						Your shopping bag is empty.
					</div>
					<div class="minicart-footer">
						<div class="minicart-actions clearfix">
							<a class="button no-item-button" href="#">
								<span class="text">Go to the shop</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script type='text/javascript' src='mystyle/js/jquery.js'></script>
		<script type='text/javascript' src='mystyle/js/jquery-migrate.min.js'></script>
		<script type='text/javascript' src='mystyle/js/jquery.themepunch.tools.min.js'></script>
		<script type='text/javascript' src='mystyle/js/jquery.themepunch.revolution.min.js'></script>
		<script type='text/javascript' src='mystyle/js/easing.min.js'></script>
		<script type='text/javascript' src='mystyle/js/imagesloaded.pkgd.min.js'></script>
		<script type='text/javascript' src='mystyle/js/bootstrap.min.js'></script>
		<script type='text/javascript' src='mystyle/js/superfish-1.7.4.min.js'></script>
		<script type='text/javascript' src='mystyle/js/jquery.appear.min.js'></script>
		<script type='text/javascript' src='mystyle/js/script.js'></script>
		<script type='text/javascript' src='mystyle/js/swatches-and-photos.js'></script>
		<script type='text/javascript' src='mystyle/js/jquery.cookie.min.js'></script>
		<script type='text/javascript' src='mystyle/js/jquery.prettyPhoto.js'></script>
		<script type='text/javascript' src='mystyle/js/jquery.prettyPhoto.init.min.js'></script>
		<script type='text/javascript' src='mystyle/js/jquery.selectBox.min.js'></script>
		<script type='text/javascript' src='mystyle/js/jquery.touchSwipe.min.js'></script>
		<script type='text/javascript' src='mystyle/js/jquery.transit.min.js'></script>
		<script type='text/javascript' src='mystyle/js/jquery.carouFredSel.js'></script>
		<script type='text/javascript' src='mystyle/js/jquery.magnific-popup.js'></script>
		<script type='text/javascript' src='mystyle/js/isotope.pkgd.min.js'></script>

		<script type='text/javascript' src='mystyle/js/extensions/revolution.extension.video.min.js'></script>
		<script type='text/javascript' src='mystyle/js/extensions/revolution.extension.slideanims.min.js'></script>
		<script type='text/javascript' src='mystyle/js/extensions/revolution.extension.actions.min.js'></script>
		<script type='text/javascript' src='mystyle/js/extensions/revolution.extension.layeranimation.min.js'></script>
		<script type='text/javascript' src='mystyle/js/extensions/revolution.extension.kenburn.min.js'></script>
		<script type='text/javascript' src='mystyle/js/extensions/revolution.extension.navigation.min.js'></script>
		<script type='text/javascript' src='mystyle/js/extensions/revolution.extension.migration.min.js'></script>
		<script type='text/javascript' src='mystyle/js/extensions/revolution.extension.parallax.min.js'></script>
		<script type="text/javascript">

			var tpj=jQuery;
			
			var revapi7;
			tpj(document).ready(function() {
				if(tpj("#rev_slider").revolution == undefined){
					revslider_showDoubleJqueryError("#rev_slider");
				}else{
					revapi7 = tpj("#rev_slider").show().revolution({
						sliderType:"standard",
						sliderLayout:"fullwidth",
						dottedOverlay:"none",
						delay:9000,
						navigation: {
							keyboardNavigation:"off",
							keyboard_direction: "horizontal",
							mouseScrollNavigation:"off",
							onHoverStop:"on",
							touch:{
								touchenabled:"on",
								swipe_threshold: 75,
								swipe_min_touches: 50,
								swipe_direction: "horizontal",
								drag_block_vertical: false
							}
							,
							arrows: {
								style:"gyges",
								enable:true,
								hide_onmobile:true,
								hide_under:600,
								hide_onleave:true,
								hide_delay:200,
								hide_delay_mobile:1200,
								tmp:'',
								left: {
									h_align:"left",
									v_align:"center",
									h_offset:30,
									v_offset:0
								},
								right: {
									h_align:"right",
									v_align:"center",
									h_offset:30,
									v_offset:0
								}
							}
							,
							bullets: {
								enable:true,
								hide_onmobile:true,
								hide_under:600,
								style:"hephaistos",
								hide_onleave:true,
								hide_delay:200,
								hide_delay_mobile:1200,
								direction:"horizontal",
								h_align:"center",
								v_align:"bottom",
								h_offset:0,
								v_offset:30,
								space:5,
								tmp:''
							}
						},
						gridwidth:1170,
						gridheight:600,
						lazyType:"smart",
						parallax: {
							type:"mouse",
							origo:"slidercenter",
							speed:2000,
							levels:[2,3,4,5,6,7,12,16,10,50],
						},
						shadow:0,
						spinner:"off",
						stopLoop:"off",
						stopAfterLoops:-1,
						stopAtSlide:-1,
						shuffle:"off",
						autoHeight:"off",
						disableProgressBar:"on",
						hideThumbsOnMobile:"off",
						hideSliderAtLimit:0,
						hideCaptionAtLimit:0,
						hideAllCaptionAtLilmit:0,
						startWithSlide:0,
						debugMode:false,
						fallbacks: {
							simplifyAll:"off",
							nextSlideOnWindowFocus:"off",
							disableFocusListener:false,
						}
					});
				}
			});	/*ready*/
		</script>
	</body>
</html>