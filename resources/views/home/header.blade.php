<header class="header-section">
{{--    <div class="header-top">--}}
{{--        <div class="container">--}}
{{--            <div class="ht-left">--}}
{{--                <div class="mail-service">--}}
{{--                    <i class=" fa fa-envelope"></i>--}}
{{--                    my.shoes@gmail.com--}}
{{--                </div>--}}
{{--                <div class="phone-service">--}}
{{--                    <i class=" fa fa-phone"></i>--}}
{{--                    +962 797890038--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="ht-right">--}}


{{--                <div class="lan-selector">--}}
{{--                    <select class="language_drop" name="countries" id="countries" style="width:300px;">--}}
{{--                        <option value='yt' data-image="img/flag-1.jpg" data-imagecss="flag yt" data-title="English">--}}
{{--                            English</option>--}}
{{--                        <option value='yu' data-image="img/flag-2.jpg" data-imagecss="flag yu"--}}
{{--                            data-title="Bangladesh">German </option>--}}
{{--                    </select>--}}
{{--                </div>--}}
{{--                <div class="top-social">--}}
{{--                    <a href="#"><i class="ti-facebook"></i></a>--}}
{{--                    <a href="#"><i class="ti-twitter-alt"></i></a>--}}
{{--                    <a href="#"><i class="ti-linkedin"></i></a>--}}
{{--                    <a href="#"><i class="ti-pinterest"></i></a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <div class="container">
        <div class="inner-header">
            <div class="row">
                <div class="col-lg-2 col-md-2">
                    <div >
                        <a href="/">
                            <img src="img/logo.png" width="500px" >
                        </a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
                    <div class="advanced-search">
                        <div class="input-group">
                            <form action="{{url('product_search')}}" method="GET">
                                @csrf
                            <input type="text" name="search" placeholder="What do you need?" style="color: black">
                            <button type="submit" class="m"><i class="ti-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 text-right col-md-3">
                    <ul class="nav-right">
                        <li class="heart-icon">
                            @if (Route::has('login'))
                                @auth
                                    <a style="color: black" href="{{url('user_profile')}}"><i class="fa fa-user"></i></a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                                @else
                                    {{-- <i class="fa fa-user"></i> --}}

                                    <a href="{{ route('login') }}" class="login-panel">Login</a>
                                    {{-- <a href="{{ route('register') }}" class="login-panel">register</a> --}}
                                @endauth


                            @endif
                        </li>
                        <li class="heart-icon">
                            <a href="#">
{{--                                <i class="icon_heart_alt"></i>--}}
{{--                                <span>1</span>--}}
                            </a>
                        </li>
                        <li class="cart-icon">
                            <a href="{{url('show_cart')}}">
                                <i class="icon_bag_alt"></i>
{{--                                <span>{{$product->cart->count('id')}}</span>--}}
                            </a>

                        </li>
{{--                        <li class="cart-price">$0.00</li>--}}


                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="nav-item">
        <div class="container">
            <div class="nav-depart ">
            </div>
            <div id="mobile-menu-wrap"></div>

            <nav class="nav-menu mobile-menu" >
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="{{url('/shop')}}">Shop</a></li>
{{--                    <li><a href="#">Collection</a>--}}
{{--                        <ul class="dropdown">--}}
{{--                            <li><a href="#">Men's</a></li>--}}
{{--                            <li><a href="#">Women's</a></li>--}}
{{--                            <li><a href="#">Kid's</a></li>--}}
{{--                        </ul>--}}
{{--                    </li>--}}
                    <li><a href="{{url('/used_shoes')}}">used shoes</a></li>
                    <li><a href="{{url('/contact')}}">Contact</a></li>
                </ul>
            </nav>
            <div id="mobile-menu-wrap"></div>
        </div>
    </div>
</header>
