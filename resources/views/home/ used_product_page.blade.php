<!DOCTYPE html>
<html lang="zxx">

<head>
    <base href="/public">
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
<style>

    .rate {
        float: left;
        height: 46px;
        padding: 0 10px;
    }
    .rate:not(:checked) > input {
        position:absolute;
        top:-9999px;
    }
    .rate:not(:checked) > label {
        float:right;
        width:1em;
        overflow:hidden;
        white-space:nowrap;
        cursor:pointer;
        font-size:30px;
        color:#ccc;
    }
    .rate:not(:checked) > label:before {
        content: '★ ';
    }
    .rate > input:checked ~ label {
        color: #ffc700;
    }
    .rate:not(:checked) > label:hover,
    .rate:not(:checked) > label:hover ~ label {
        color: #deb217;
    }
    .rate > input:checked + label:hover,
    .rate > input:checked + label:hover ~ label,
    .rate > input:checked ~ label:hover,
    .rate > input:checked ~ label:hover ~ label,
    .rate > label:hover ~ input:checked ~ label {
        color: #c59b08;
    }

    /* Modified from: https://github.com/mukulkant/Star-rating-using-pure-css */
</style>

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
{{--@include('home.messages')--}}
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

            </div>
            <div class="col-lg-9 order-1 order-lg-2">
                <div class="">

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="product-pic-zoom">
                                <img class="product-big-img"  src="/product/{{$product->image}}" alt="">
                                <div class="zoom-icon">
                                    <i class="fa fa-search-plus"></i>
                                </div>
                            </div>
                            {{--                            <div class="product-thumbs">--}}
                            {{--                                <div class="product-thumbs-track ps-slider owl-carousel">--}}
                            {{--                                    <div class="pt active" data-imgbigurl="img/product-single/product-1.jpg"><img--}}
                            {{--                                            src="img/product-single/product-1.jpg" alt=""></div>--}}
                            {{--                                    <div class="pt" data-imgbigurl="img/product-single/product-2.jpg"><img--}}
                            {{--                                            src="img/product-single/product-2.jpg" alt=""></div>--}}
                            {{--                                    <div class="pt" data-imgbigurl="img/product-single/product-3.jpg"><img--}}
                            {{--                                            src="img/product-single/product-3.jpg" alt=""></div>--}}
                            {{--                                    <div class="pt" data-imgbigurl="img/product-single/product-3.jpg"><img--}}
                            {{--                                            src="img/product-single/product-3.jpg" alt=""></div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                        </div>
                        <div class="col-lg-6">
                            <div class="product-details">
                                <div class="pd-title">
                                    <span>{{$product->category}}</span>
                                    <h3>{{$product->title}}</h3>
                                    <a href="#" class="heart-icon"><i class="icon_heart_alt"></i></a>
                                </div>
                                <div class="pd-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                    <span>(5)</span>
                                </div>
                                <div class="pd-desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor
                                        sit amet, consectetur adipisicing elit, sed do mod tempor</p>
                                    <h4>
                                            ${{$product->price}}

                                        </h4>
                                </div>
                                {{--                                <div class="pd-color">--}}
                                {{--                                    <h6>Color</h6>--}}
                                {{--                                    <div class="pd-color-choose">--}}
                                {{--                                        <div class="cc-item">--}}
                                {{--                                            <input type="radio" id="cc-black">--}}
                                {{--                                            <label for="cc-black"></label>--}}
                                {{--                                        </div>--}}
                                {{--                                        <div class="cc-item">--}}
                                {{--                                            <input type="radio" id="cc-yellow">--}}
                                {{--                                            <label for="cc-yellow" class="cc-yellow"></label>--}}
                                {{--                                        </div>--}}
                                {{--                                        <div class="cc-item">--}}
                                {{--                                            <input type="radio" id="cc-violet">--}}
                                {{--                                            <label for="cc-violet" class="cc-violet"></label>--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                                <div class="pd-size-choose">
                                    <div class="sc-item">
                                        <input type="radio" id="sm-size">
                                        <label for="sm-size">s</label>
                                    </div>
                                    <div class="sc-item">
                                        <input type="radio" id="md-size">
                                        <label for="md-size">m</label>
                                    </div>
                                    <div class="sc-item">
                                        <input type="radio" id="lg-size">
                                        <label for="lg-size">l</label>
                                    </div>
                                    <div class="sc-item">
                                        <input type="radio" id="xl-size">
                                        <label for="xl-size">xs</label>
                                    </div>
                                </div>
                                <form action="{{url('add_cart',$product->id)}}" method="POST">
                                    @csrf
                                    <div class="quantity">
                                        <div class="pro-qty">
                                            <input type="number" value="1" min="1" name="quantity">
                                        </div>
                                        <input href="#" type="submit" value="Add To Cart" class="primary-btn pd-cart">
                                    </div>
                                </form>
                                <ul class="pd-tags">
                                    <li><span>CATEGORIES</span> : {{$product->category}}</li>
{{--                                    <li><span>Available quantity</span> : {{$product->quantity}}</li>--}}
                                </ul>
                                <div class="pd-share">

                                    <div class="pd-social">
                                        <a href="#"><i class="ti-facebook"></i></a>
                                        <a href="#"><i class="ti-twitter-alt"></i></a>
                                        <a href="#"><i class="ti-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="product-tab">
                        <div class="tab-item " >
                            <ul class="nav" role="tablist" >

                                <li style="margin: auto">
                                    <a data-toggle="tab" href="#tab-3" role="tab">Customer Reviews (02)</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-item-content">
                            <div class="tab-content">
                                <div class="tab-pane fade" id="tab-3" role="tabpanel">
                                    <div class="customer-review-option">
                                        <h4>2 Comments</h4>
                                        <div class="comment-option">
                                            @foreach($reviews as $rs)

                                                <div class="co-item">
                                                    <div class="avatar-pic">
                                                        <img src="https://media.istockphoto.com/id/1300845620/vector/user-icon-flat-isolated-on-white-background-user-symbol-vector-illustration.jpg?s=612x612&w=0&k=20&c=yBeyba0hUkh14_jgv1OKqIH0CCSWU_4ckRkAoy2p73o=" alt="">
                                                    </div>
                                                    <div class="avatar-text">
                                                        <div class="at-rating">
                                                            <i class="fa fa-star @if ($rs->rate<1)-o empty @endif"></i>
                                                            <i class="fa fa-star @if ($rs->rate<2)-o empty @endif"></i>
                                                            <i class="fa fa-star @if ($rs->rate<3)-o empty @endif"></i>
                                                            <i class="fa fa-star @if ($rs->rate<4)-o empty @endif"></i>
                                                            <i class="fa fa-star @if ($rs->rate<5)-o empty @endif"></i>
                                                        </div>
                                                        <h5>{{$rs->user->name}} <span>{{$rs->created_at}}</span></h5>
                                                        <div class="at-reply">{{$rs->subject}}</div>
                                                        <span>{{$rs->review}}</span>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>

                                        <br>
                                        <div class="leave-comment">
                                            <h4>Leave A Comment</h4>
                                            <form action="{{url('comment')}}" class="comment-form" method="post">
                                                @csrf
                                                <div class="personal-rating">
                                                    <h6>Your Ratind</h6>
                                                    <div class="rate">
                                                        <input type="radio" id="star5" name="rate" value="5" required/>
                                                        <label for="star5" title="text">5 stars</label>

                                                        <input type="radio" id="star4" name="rate" value="4" />
                                                        <label for="star4" title="text">4 stars</label>

                                                        <input type="radio" id="star3" name="rate" value="3" />
                                                        <label for="star3" title="text">3 stars</label>

                                                        <input type="radio" id="star2" name="rate" value="2" />
                                                        <label for="star2" title="text">2 stars</label>

                                                        <input type="radio" id="star1" name="rate" value="1" />
                                                        <label for="star1" title="text">1 star</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="">
                                                        <input type="hidden" value="{{ $product->id}}" name="product_id" required>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <input type="text" placeholder="subject" name="subject" required>
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <textarea placeholder="Your Review" name="review" required></textarea>
                                                        @auth()
                                                            <button type="submit" class="site-btn">Send message</button>
                                                        @else
                                                            <a href="{{ route('login') }}" style="color: red" class="site-btn">For submit Your Review, Please Login</a>
                                                        @endauth
                                                    </div>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
