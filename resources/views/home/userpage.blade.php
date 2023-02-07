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

    <!-- Header Section Begin -->
   @include('home.header')
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div style="background-color:#f4f2e6 ">
        @include('home.slide')
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Banner Section Begin -->
    <div class="banner-section spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="img/banner-1.jpg" alt="">
                        <div class="inner-text">
                            <h4>Men’s</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="img/banner-2.jpg" alt="">
                        <div class="inner-text">
                            <h4>Women’s</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-banner">
                        <img src="img/banner-3.jpg" alt="">
                        <div class="inner-text">
                            <h4>Kid’s</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Section End -->

    <!-- Women Banner Section Begin -->
    <section class="women-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-large set-bg" data-setbg="img/products/women-large.jpg">
                        <h2>We have all new</h2>
                        <a href="{{url('/shop')}}">Discover More</a>
                    </div>
                </div>
                <div class="col-lg-8 offset-lg-1">
                    <div class="filter-control section-title">
                        <h2>New shoes </h2>
                    </div>
                    <div class="product-slider owl-carousel">

                        @foreach($product as $products)


                        <div class="product-item">
                            <div class="pi-pic">
                                <img src="/product/{{$products->image}}" alt="">
                                <div class="icon">
                                    <i class="icon_heart_alt"></i>
                                </div>
                                <ul>
                                    <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                    <li class="quick-view"><a href="{{url('product_page',$products->id)}}">+ Quick View</a></li>
                                    <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                </ul>
                            </div>
                            <div class="pi-text">
                                <div class="catagory-name">{{$products->category}}</div>
                                <a href="#">
                                    <h5>{{$products->title}}</h5>
                                </a>
                                <div class="product-price">
                                    @if($products->discount_price!=null)
                                        ${{$products->discount_price}}
                                        <span>${{$products->price}}</span>

                                    @else
                                        ${{$products->price}}

                                    @endif                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Women Banner Section End -->

    <!-- Deal Of The Week Section Begin-->
    <section class="deal-of-week set-bg spad" data-setbg="img/time-bg.jpg">
        <div class="container">
            <div class="col-lg-6 text-center">
                <div class="section-title">
                    <h2>Used shoes</h2>
                    <p>A special section for used shoes<br /> You can buy, sell and watch all used shoes, all on one site</p>

                </div>

                <a href="{{url('/used_shoes')}}" class="primary-btn">Shop Now</a>
            </div>
        </div>
    </section>
    <!-- Deal Of The Week Section End -->

    <!-- Man Banner Section Begin -->
    <section class="man-banner spad">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="filter-control section-title">
                       <h2>Used Shoes</h2>
                    </div>
                    <div class="product-slider owl-carousel">

                        @foreach($UsedShoes as $UsedShoes)


                            <div class="product-item">
                                <div class="pi-pic">
                                    <img src="/product/{{$UsedShoes->image}}" alt="">
                                    <div class="icon">
                                        <i class="icon_heart_alt"></i>
                                    </div>
                                    <ul>
                                        <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                        <li class="quick-view"><a href="{{url('used_product_page',$UsedShoes->id)}}">+ Quick View</a></li>
                                        <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                    </ul>
                                </div>
                                <div class="pi-text">
                                    <div class="catagory-name">{{$UsedShoes->category}}</div>
                                    <a href="#">
                                        <h5>{{$UsedShoes->title}}</h5>
                                    </a>
                                    <div class="product-price">

                                            ${{$UsedShoes->price}}

                                                                        </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="product-large set-bg m-large" data-setbg="img/products/man-large.jpg">

                        <h2>Used Shoes</h2>
                        <a href="{{url('/used_shoes')}}">Discover More</a>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Man Banner Section End -->

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
