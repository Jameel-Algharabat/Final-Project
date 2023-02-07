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
            @include('home.sidebar')

            <div class="col-lg-9 order-1 order-lg-2">
                <div class="col-lg-6 m-auto inner-header ">
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
                            @if($product->count() >=1)

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
                            @else
                                <h3>This item is not available :(</h3>

                            @endif

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
