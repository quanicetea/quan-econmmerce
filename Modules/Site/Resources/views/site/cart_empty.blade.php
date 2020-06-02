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
                    <span>Empty Cart</span>
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
                        <p class="cart-empty">Your cart is currently empty.</p>
                        <p class="return-to-shop"><a class="button wc-backward rounded" href="#">Return To Shop</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection