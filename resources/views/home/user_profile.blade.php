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
                    <a href="{{url('/')}}"><i class="fa fa-home"></i> Home</a>
                    <span>Profile</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Product Shop Section Begin -->
<section class="product-shop spad ">
    <div class="container">
        <div class="container">
            <div class="main-body">



                <div class="row gutters-sm">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center">
                                    <img src="https://media.istockphoto.com/id/1300845620/vector/user-icon-flat-isolated-on-white-background-user-symbol-vector-illustration.jpg?s=612x612&w=0&k=20&c=yBeyba0hUkh14_jgv1OKqIH0CCSWU_4ckRkAoy2p73o=" alt="Admin" class="rounded-circle" width="160">
                                    <div class="mt-3">
                                        <h4>{{ Auth::user()->name }}</h4>
                                        <br>

                                        <div class="lan-selector">

                                                    <button class="site-btn register-btn"  href="{{ route('logout') }}"
                                                            onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                    </button>


                                        </div>

{{--                                        <i class="fa fa-user"></i>--}}

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-8">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Full Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ Auth::user()->name }}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ Auth::user()->email }}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Phone</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ Auth::user()->phone }}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Address</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        {{ Auth::user()->address }}
                                    </div>
                                </div>
                                <hr>

                                <div style="margin-top: 40px" class="row">
                                    <div class="col-sm-12">
                                        <a class="site-btn register-btn"  href="{{url('user_update',Auth::user()->id)}}">Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <hr>
                <h3 style="text-align: center">My Product</h3>
                <div class="row gutters-sm">
                    <a class="site-btn register-btn" style="margin-left: auto" href="{{url('/view_product_used')}}">add Products</a>
                </div>
                <div class="table-responsive center" style="margin-top: 30px">
                    <table class="table table-striped" style="display: block; text-align: center">
                        <thead>
                        <tr>
                            <th> Product Image </th>
                            <th> Product Title </th>
                            <th> Description </th>
                            <th>  Price </th>
                            <th> category </th>
                            <th> brand </th>
                            <th> size </th>
                            <th> Action </th>

                        </tr>
                        </thead>

                        <tbody>
                        @foreach($product as $product)
                            <tr>
                                <th > <a href="gg"><img src="/product/{{$product->image}}"></a></th>
                                <th> {{$product->title}} </th>
                                <th> {{$product->description}} </th>
                                <th> {{$product->price}} </th>
                                <th> {{$product->category}} </th>
                                <th> {{$product->brand}} </th>
                                <th> {{$product->size}} </th>


                                <th>
                                    <a onclick="return confirm('Are You Sure To Delete This')" type="button" class="site-btn register-btn"  href="{{url('delete_used_product',$product->id)}}">Delete</a>
                                    <a type="button" class="site-btn register-btn"  href="{{url('update_used_product',$product->id)}}" style="margin-top: 10px; width: 145px; text-align: center">Edit</a>
                                    <a type="button" class="site-btn register-btn"  href="{{url('used_product_page',$product->id)}}" style="margin-top: 10px; width: 145px; text-align: center">View</a>

                                </th>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
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
