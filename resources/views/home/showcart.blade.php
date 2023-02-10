<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('home.head')

</head>

<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>
@include('sweetalert::alert')

<!-- Header Section Begin -->
@include('home.header')
<!-- Header End -->

<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text product-more">
                    <a href="{{url('/')}}"><i class="fa fa-home"></i> Home</a>
                    <a href="{{url('shop')}}">Shop</a>
                    <span>Shopping Cart</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->
@if (session()->has('message'))
    <div class="alert alert-success">

        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
        {{ session()->get('message') }}
    </div>
@endif
<!-- Shopping Cart Section Begin -->
<section class="shopping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="cart-table">
                    <table>
                        <thead>
                        <tr>
                            <th>Image</th>
                            <th class="p-name">Product Name</th>
                            <th>Size</th>

                            <th>Price</th>

                            <th>Quantity</th>
                            <th><i class="ti-close"></i></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $totalprice=0;?>
                        @foreach($cart as $cart)
                        <tr>
                            <td class="cart-pic first-row"><img src="/product/{{$cart->image}}" alt=""></td>
                            <td class="cart-title first-row">
                                <h5>{{$cart->product_title}}</h5>
                            </td>
                            <td class="cart-title first-row">{{$cart->size}}</td>
                            <td class="p-price first-row">${{$cart->price}}</td>
                            <td class="total-price first-row">{{$cart->quantity}}</td>
                            <td class="close-td first-row"> <a href="{{url('/remove_cart',$cart->id)}}" onclick="return confirm('Are you sure to remove this product ?')"><i class="ti-close"></i></a></td>
                        </tr>
                       <?php $totalprice=$totalprice + $cart->price ?>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="row">
{{--                    <div class="col-lg-4">--}}
{{--                        <div class="cart-buttons">--}}
{{--                            <a href="#" class="primary-btn continue-shop">Continue shopping</a>--}}
{{--                            <a href="#" class="primary-btn up-cart">Update cart</a>--}}
{{--                        </div>--}}
{{--                        <div class="discount-coupon">--}}
{{--                            <h6>Discount Codes</h6>--}}
{{--                            <form action="#" class="coupon-form">--}}
{{--                                <input type="text" placeholder="Enter your codes">--}}
{{--                                <button type="submit" class="site-btn coupon-btn">Apply</button>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="col-lg-4 offset-lg-8">
                        <div class="proceed-checkout">
                            <ul>
{{--                                <li class="subtotal">Subtotal <span>$240.00</span></li>--}}
                                <li class="cart-total">Total <span>${{$totalprice}} <span></li>
                            </ul>
{{--                            <a href="{{url('stripe',$totalprice)}}" class="proceed-btn" style="margin-top: 5px">PAY USING CARD</a>--}}
                            <a href="{{url('cash_order')}}" class="proceed-btn" >CASH ON DELIVERY</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Partner Logo Section End -->

<!-- Footer Section Begin -->
@include('home.footer')
<!-- Footer Section End -->

<!-- Js Plugins -->
<script src="home/js/jquery-3.3.1.min.js"></script>
<script src="home/js/bootstrap.min.js"></script>
<script src="home/js/jquery-ui.min.js"></script>
<script src="home/js/jquery.countdown.min.js"></script>
<script src="home/js/jquery.nice-select.min.js"></script>
<script src="home/js/jquery.zoom.min.js"></script>
<script src="home/js/jquery.dd.min.js"></script>
<script src="home/js/jquery.slicknav.js"></script>
<script src="home/js/owl.carousel.min.js"></script>
<script src="home/js/main.js"></script>
</body>

</html>
