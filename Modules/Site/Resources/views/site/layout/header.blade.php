<header class="header-container header-type-classic header-navbar-classic header-scroll-resize">
    <div class="navbar-container">
        <div class="navbar navbar-default navbar-scroll-fixed">
            <div class="navbar-default-wrap">
                <div class="container">
                    <div class="row">
                        <div class="navbar-default-col">
                            <div class="navbar-wrap">
                                <div class="navbar-header" style="height:30px !important;">
                                    <a class="navbar-search-button search-icon-mobile" href="#">
                                        <i class="fa fa-search"></i>
                                    </a>
                                    <a class="cart-icon-mobile" href="{{ route('site.cart')}}">
                                        <i class="elegant_icon_bag"></i><span class="qty-product-mini-cart">0</span>
                                    </a>
                                    <a class="navbar-brand" href="./">
                                        <img class="logo" alt="WOOW" src="mystyle/images/logo-q.png">
                                        <img class="logo-fixed" alt="WOOW" src="mystyle/images/logo-q.png">
                                        <img class="logo-mobile" alt="WOOW" src="mystyle/images/logo-q.png">
                                    </a>
                                </div>
                                <nav class="collapse navbar-collapse primary-navbar-collapse">
                                    <ul class="nav navbar-nav primary-nav">
                                        <li class="current-menu-item menu-item-has-children dropdown">
                                        <a href="{{route('site.homepage')}}" class="dropdown-hover">
                                                <span class="underline">Trang chủ</span> <span class="caret"></span>
                                            </a>
                                        </li>
                                        <li class="menu-item-has-children megamenu megamenu-fullwidth dropdown">
                                            <a href="{{route('site.homepage')}}" class="dropdown-hover">
                                                <span class="underline">Danh mục</span> <span class="caret"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <div class="row">
                                                @foreach($categories as $category)
                                                    <div class="col-sm-3">
                                                        <li class="mega-col-3">
                                                        <a href="{{route('site.product.category',$category->slug)}}"><h3 class="megamenu-title">{{$category->name}} <span class="caret"></span></h3></a>
                                                        </li>
                                                    </div>
                                                @endforeach
                                                </div>
                                            </ul>
                                        </li>
                                        {{-- <li><a href="collection.html"><span class="underline">Collections</span></a></li>

                                        <li class="menu-item-has-children dropdown">
                                            <a href="#" class="dropdown-hover">
                                                <span class="underline">Pages</span> <span class="caret"></span>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="about-us.html">About us</a></li>
                                                <li><a href="contact-us.html">Contact Us</a></li>
                                                <li><a href="faq.html">FAQ</a></li>
                                                <li><a href="404.html">404</a></li>
                                            </ul>
                                        </li> --}}
                                    </ul>
                                </nav>
                                <div class="header-right">
                                    <div class="navbar-search">
                                        <a class="navbar-search-button" href="#">
                                            <i class="fa fa-search"></i>
                                        </a>
                                        <div class="search-form-wrap show-popup hide"></div>
                                    </div>
                                    <div class="navbar-minicart navbar-minicart-topbar">
                                        <div class="navbar-minicart">
                                            <a class="minicart-link" href="{{ route('site.cart')}}">
                                                <span class="minicart-icon">
                                                    <i class="fa fa-shopping-cart"></i>
                                                    <span class="qty-product-mini-cart">0</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-search-overlay hide">
                <div class="container">
                    <div class="header-search-overlay-wrap">
                        <form class="searchform" action="{{route('site.search')}}">
                            <input type="search" class="searchinput" name="search_key" autocomplete="off" value="" placeholder="Nhập tên sản phẩm"/>
                            <input type="search" class="searchinput" name="price" autocomplete="off" value="" placeholder="Nhập giá muốn tìm"/>
                            <input type="radio" checked name="type" value ="0"> Không tìm theo giá
                            <input type="radio" name="type" value ="1"> Chính xác
                            <input type="radio" name="type" value ="2"> Nhỏ hơn hoặc bằng
                            <input type="radio" name="type" value ="3"> Lớn hơn hoặc bằng
                            <button style="display:none" type="submit">
                                <span aria-hidden="true">Tìm</span>
                            </button>
                        </form>
                        <button type="button" class="close">
                            <span aria-hidden="true" class="fa fa-times"></span>
                            <span class="sr-only">Close</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>