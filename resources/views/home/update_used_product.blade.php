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
<div class="container-fluid page-body-wrapper">
    <div class="main-panel">
        <div class="content-wrapper">
            @if (session()->has('message'))
                <div class="alert alert-success">

                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                    {{ session()->get('message') }}
                </div>
            @endif
            <div class="div_center">
                <div class="form">
                    <div class="title">Update Product</div>
                    <form action="{{url('/update_used_product_confirm',$product->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="input-container ic1">
                            <input id="" class="input" type="text" name="title" placeholder=" " value="{{$product->title}}"/>
                            <div class="cut" ></div>
                            <label for="firstname" class="placeholder">Product Title </label>
                        </div>

                        <div class="input-container ic1">
                            <input id="" class="input" type="text" name="description" placeholder=" " value="{{$product->description}}" />
                            <div class="cut"></div>
                            <label for="firstname" class="placeholder">Product Description</label>
                        </div>

                        <div class="input-container ic1">
                            <input id="" class="input" type="number" name="price" placeholder=" " value="{{$product->price}}"/>
                            <div class="cut"></div>
                            <label for="firstname" class="placeholder">Product price </label>
                        </div>

                        <div class="input-container ic1">
                            <input id="" class="input" type="file" name="image" placeholder=" " value="{{$product->image}}"/>
                            <div class="cut"></div>
                            <label for="firstname" class="placeholder">Product Image </label>
                        </div>

                        <div class="input-container ic1">
                            <select class="input" name="size">
                                <option value="{{$product->size}}" >
                                    {{$product->size}}
                                </option>

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
                            <label for="firstname"  class="placeholder">Product Size</label>
                        </div>
                        <div class="input-container ic1">
                            <select class="input" name="brand">


                                <option value="{{$product->brand}}">
                                    {{$product->brand}}
                                </option>

                                @foreach($brand as $brand)
                                    <option value="{{$brand->brand_name}}">
                                        {{$brand->brand_name}}
                                    </option>
                                @endforeach


                            </select>
                            <label for="firstname"  class="placeholder">product category</label>
                        </div>



                        <div class="input-container ic1">
                            <select class="input" name="category">


                                <option value="{{$product->category}}">
                                    {{$product->category}}
                                </option>

                                @foreach($category as $category)
                                    <option value="{{$category->category_name}}">
                                        {{$category->category_name}}
                                    </option>
                                @endforeach


                            </select>
                            <label for="firstname"  class="placeholder">product category</label>
                        </div>


                        <button type="text" class="submit">submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

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
