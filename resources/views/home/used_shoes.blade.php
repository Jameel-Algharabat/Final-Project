<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fashi | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="home/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="home/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="home/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="home/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/style.css" type="text/css">
</head>

<body>
<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Header Section Begin -->
@include('home.header')
<!-- Header End -->

<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="#"><i class="fa fa-home"></i> Home</a>
                    <span>Shop</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Product Shop Section Begin -->
<section class="product-shop spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
                <div class="filter-widget">
                    <h4 class="fw-title">Categories</h4>
                    <ul class="filter-catagories">
                        <li><a href="#">Men</a></li>
                        <li><a href="#">Women</a></li>
                        <li><a href="#">Kids</a></li>
                    </ul>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Brand</h4>
                    <div class="fw-brand-check">
                        <div class="bc-item">
                            <label for="bc-calvin">
                                Calvin Klein
                                <input type="checkbox" id="bc-calvin">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="bc-item">
                            <label for="bc-diesel">
                                Diesel
                                <input type="checkbox" id="bc-diesel">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="bc-item">
                            <label for="bc-polo">
                                Polo
                                <input type="checkbox" id="bc-polo">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="bc-item">
                            <label for="bc-tommy">
                                Tommy Hilfiger
                                <input type="checkbox" id="bc-tommy">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Price</h4>
                    <div class="filter-range-wrap">
                        <div class="range-slider">
                            <div class="price-input">
                                <input type="text" id="minamount">
                                <input type="text" id="maxamount">
                            </div>
                        </div>
                        <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                             data-min="33" data-max="98">
                            <div class="ui-slider-range ui-corner-all ui-widget-header"></div>
                            <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                            <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                        </div>
                    </div>
                    <a href="#" class="filter-btn">Filter</a>
                </div>
                {{--                    <div class="filter-widget">--}}
                    {{--                        <h4 class="fw-title">Color</h4>--}}
                    {{--                        <div class="fw-color-choose">--}}
                        {{--                            <div class="cs-item">--}}
                            {{--                                <input type="radio" id="cs-black">--}}
                            {{--                                <label class="cs-black" for="cs-black">Black</label>--}}
                            {{--                            </div>--}}
                        {{--                            <div class="cs-item">--}}
                            {{--                                <input type="radio" id="cs-violet">--}}
                            {{--                                <label class="cs-violet" for="cs-violet">Violet</label>--}}
                            {{--                            </div>--}}
                        {{--                            <div class="cs-item">--}}
                            {{--                                <input type="radio" id="cs-blue">--}}
                            {{--                                <label class="cs-blue" for="cs-blue">Blue</label>--}}
                            {{--                            </div>--}}
                        {{--                            <div class="cs-item">--}}
                            {{--                                <input type="radio" id="cs-yellow">--}}
                            {{--                                <label class="cs-yellow" for="cs-yellow">Yellow</label>--}}
                            {{--                            </div>--}}
                        {{--                            <div class="cs-item">--}}
                            {{--                                <input type="radio" id="cs-red">--}}
                            {{--                                <label class="cs-red" for="cs-red">Red</label>--}}
                            {{--                            </div>--}}
                        {{--                            <div class="cs-item">--}}
                            {{--                                <input type="radio" id="cs-green">--}}
                            {{--                                <label class="cs-green" for="cs-green">Green</label>--}}
                            {{--                            </div>--}}
                        {{--                        </div>--}}
                    {{--                    </div>--}}
                <div class="filter-widget">
                    <h4 class="fw-title">Size</h4>
                    <div class="fw-size-choose">
                        <div class="sc-item">
                            <input type="radio" id="s-size">
                            <label for="s-size">s</label>
                        </div>
                        <div class="sc-item">
                            <input type="radio" id="m-size">
                            <label for="m-size">m</label>
                        </div>
                        <div class="sc-item">
                            <input type="radio" id="l-size">
                            <label for="l-size">l</label>
                        </div>
                        <div class="sc-item">
                            <input type="radio" id="xs-size">
                            <label for="xs-size">xs</label>
                        </div>
                    </div>
                </div>
                <div class="filter-widget">
                    {{--                        <h4 class="fw-title">Tags</h4>--}}
                    {{--                        <div class="fw-tags">--}}
                        {{--                            <a href="#">Towel</a>--}}
                        {{--                            <a href="#">Shoes</a>--}}
                        {{--                            <a href="#">Coat</a>--}}
                        {{--                            <a href="#">Dresses</a>--}}
                        {{--                            <a href="#">Trousers</a>--}}
                        {{--                            <a href="#">Men's hats</a>--}}
                        {{--                            <a href="#">Backpack</a>--}}
                        {{--                        </div>--}}
                </div>
            </div>



            <div class="col-lg-9 order-1 order-lg-2">

                <div class="col-lg-7 col-md-7">
                    <div class="advanced-search">
                        <div class="input-group">
                            <form action="{{url('UsedShoesSearch')}}" method="GET">
                                @csrf
                                <input type="text" name="search" placeholder="What do you need?" style="color: black">
                                <button type="submit" class="m"><i class="ti-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="product-list">
                    <div class="product-list">
                        <div class="row">

                            @foreach($product as $products)
{{--                                @if($product->approved)--}}
                                <div class="col-lg-4 col-sm-6">
                                    <div class="product-item">
                                        <div class="pi-pic">
                                            <img src="/product/{{$products->image}}" width="150px" height="250px" alt="">
                                            <div class="icon">
                                                <i class="icon_heart_alt"></i>
                                            </div>
                                            <ul>
                                                {{--                                            <li class="w-icon active"><a href=""><i class="icon_bag_alt"></i></a></li>--}}
                                                <li class="quick-view"><a href="{{url('used_product_page',$products->id)}}">+ Quick View</a></li>
                                                {{--                                            <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>--}}
                                            </ul>
                                        </div>
                                        <div class="pi-text">
                                            <div class="catagory-name">{{$products->category}}</div>
                                            <a href="#">
                                                <h5>{{$products->title}} </h5>
                                            </a>
                                            <div class="product-price">


                                                    ${{$products->price}}



                                            </div>
                                        </div>
                                    </div>
                                </div>
{{--                                @endif--}}
                            @endforeach

                            <span style="color: #0a0a0a; margin: auto; " >

{{--                                {!! $product->withQueryString()->links('pagination::bootstrap-5') !!}--}}

                            </span>

                        </div>
                    </div>
                {{--                    <div class="loading-more">--}}
                    {{--                        <i class="icon_loading"></i>--}}
                    {{--                        <a href="#">--}}
                        {{--                            Loading More--}}
                        {{--                        </a>--}}
                    {{--                    </div>--}}
            </div>
        </div>
    </div>
</section>
<!-- Product Shop Section End -->



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
