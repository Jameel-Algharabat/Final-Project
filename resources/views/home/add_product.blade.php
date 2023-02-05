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
                                    <input id="" class="input" type="text" name="title" placeholder=" " />
                                </div>

                                <div class="group-input">
                                    <label for="firstname" class="placeholder">Product Description</label>
                                    <input id="" class="input" type="text" name="description" placeholder=" " />
                                </div>
                                <div class="group-input">
                                    <label for="firstname" class="placeholder">Product price </label>

                                    <input id="" class="input" type="number" name="price" placeholder=" " />
                                    <div class="cut"></div>
                                </div>
                                <div class="group-input">
                                    <label for="firstname"  class="placeholder">product brand</label>

                                    <select class="input" name="brand">

                                        @foreach($brand as $brand)
                                            <option value="{{$brand->brand_name}}">
                                                {{$brand->brand_name}}
                                            </option>
                                        @endforeach

                                    </select>
                                </div>

                                                            <div class="group-input">
                                                                <label for="firstname"  class="placeholder">Product Size</label>

                                                                <select class="input" name="size">

                                                                    <option >
                                                                        XS
                                                                    </option>
                                                                    <option >
                                                                        S
                                                                    </option>
                                                                    <option>
                                                                        M
                                                                    </option>
                                                                    <option>
                                                                        L
                                                                    </option>
                                                                    <option>
                                                                        XL
                                                                    </option>


                                                                </select>
                                                            </div>
                                <div class="group-input">
                                    <label for="firstname"  class="placeholder">product category</label>

                                    <select class="input" name="category">

                                        @foreach($category as $category)
                                            <option value="{{$category->category_name}}">
                                                {{$category->category_name}}
                                            </option>
                                        @endforeach

                                    </select>
                                </div>




                                <div class="group-input">
                                    <label for="firstname" class="placeholder">Product Image </label>

                                    <input id="" class="input" type="file" name="image" placeholder=" " />
                                </div>

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
