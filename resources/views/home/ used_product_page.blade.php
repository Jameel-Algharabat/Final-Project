<!DOCTYPE html>
<html lang="zxx">

<head>
    @include('home.head')

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
                    <a href="{{url('/')}}"><i class="fa fa-home"></i> Home</a>
                    <a href="{{url('used_shoes')}}"> Used Shoes</a>

                    <span>Product Page</span>
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
            @include('home.sidebar')

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
                                    <p>{{$product->description}}</p>
                                    <h4>
                                            ${{$product->price}}

                                        </h4>
                                </div>
                                <div class="pd-size-choose">
                                    <div class="sc-item">
                                        <label for="sm-size">{{$product->size}}</label>
                                    </div>
                                </div>
                                <form action="" method="POST">
                                    @csrf
                                    <div class="quantity">
{{--                                        <div class="pro-qty">--}}
{{--                                        <a href="https://wa.me/962{{ Auth::user()->phone }}" type="submit" value="" class="primary-btn pd-cart">Add To Cart</a>--}}
{{--                                        </div>--}}
                                        <a href="https://wa.me/962{{$product->user_phone}}" target="_blank" type="submit" value="" class="primary-btn pd-cart" style="background-color: #2ed54a">Whats app</a>
                                    </div>
                                </form>
                                <ul class="pd-tags">
                                    <li><span>CATEGORIES</span> : {{$product->category}}</li>
                                    <li><span>brand</span> : {{$product->brand}}</li>
                                </ul>
                                <div class="pd-share">

{{--                                    <div class="pd-social">--}}
{{--                                        <a href="#"><i class="ti-facebook"></i></a>--}}
{{--                                        <a href="#"><i class="ti-twitter-alt"></i></a>--}}
{{--                                        <a href="#"><i class="ti-linkedin"></i></a>--}}
{{--                                    </div>--}}
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="product-tab">
                        <div class="tab-item " >
                            <ul class="nav" role="tablist" >

                                <li style="margin: auto">
                                    <a data-toggle="tab" href="#tab-3" role="tab">Customer Reviews</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-item-content">
                            <div class="tab-content">
                                <div class="tab-pane fade" id="tab-3" role="tabpanel">
                                    <div class="customer-review-option">
                                        <h4> Comments</h4>
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
