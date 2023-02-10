<!DOCTYPE html>
<html lang="zxx">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

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
@include('sweetalert::alert')

<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="{{url('/')}}"><i class="fa fa-home"></i> Home</a>
                    <a href="{{url('user_profile')}}"> Profile</a>
                    <span>Add Product</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section Begin -->

<!-- Product Shop Section Begin -->

<section class="product-shop spad">
    <div class="register-login-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    @if (session()->has('message'))
                        <div class="alert alert-success">

                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                            {{ session()->get('message') }}
                        </div>
                    @endif

                    <div class="register-form">
                        <h2>Add Product</h2>


                        <div class="form">
{{--                            <div class="title">Add Product</div>--}}
                            <form action="{{url('/add_product_used')}}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="group-input">
                                    <span>Product Title</span>
                                    <input id="" class="input" type="text" name="title" placeholder=" " required/>
                                </div>

                                <div class="group-input">
                                    <label for="firstname" >Product Description</label>
                                    <input id="" class="input" type="text" name="description" placeholder=" " required/>
                                </div>
                                <div class="group-input">
                                    <label for="firstname" >Product price </label>

                                    <input id="" class="input" type="number" name="price" placeholder=" " required />
                                    <div class="cut"></div>
                                </div>
                                <div class="group-input">
                                    <label for="firstname" >phone</label>

                                    <input id="" class="input" type="number" name="user_phone" placeholder=" " required/>
                                    <div class="cut"></div>
                                </div>
                                <div class="group-input">
                                    <label for="firstname" >Product Image </label>

                                    <input id="" class="input" type="file" name="image" placeholder=" " required />
                                </div>
                                <div >
                                    <div class="row g-2">

                                        <div class="col-md">
                                            <div class="form-floating">
                                                <select class="form-select" name="brand" id="floatingSelectGrid">
                                                    @foreach($brand as $brand)
                                                        <option value="{{$brand->brand_name}}">
                                                            {{$brand->brand_name}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <label for="floatingSelectGrid">product brand</label>
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class="form-floating">
                                                <select class="form-select" id="floatingSelectGrid" name="size">
                                                    <option >
                                                        6
                                                    </option>
                                                    <option >
                                                        6.5
                                                    </option>
                                                    <option>
                                                        7
                                                    </option>
                                                    <option>
                                                        7.5
                                                    </option>
                                                    <option>
                                                        8
                                                    </option>
                                                    <option>
                                                        8.5
                                                    </option>
                                                    <option>
                                                        9
                                                    </option>
                                                </select>
                                                <label for="floatingSelectGrid">Product Size</label>
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class="form-floating">
                                                <select class="form-select" name="category" id="floatingSelectGrid">
                                                    @foreach($category as $category)
                                                        <option value="{{$category->category_name}}">
                                                            {{$category->category_name}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                <label for="floatingSelectGrid">product category</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>


                                <button type="text" class="site-btn">submit</button>
                            </form>
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
