<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')

</head>


<body>
<div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
    <!-- partial -->
    <!-- partial:partials/_navbar.html -->
    @include('admin.header')
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="content-wrapper">
                @if (session()->has('message'))
                    <div class="alert alert-success">

                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
                        {{ session()->get('message') }}
                    </div>
                @endif

                <div class="table-responsive center">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th> Product Image </th>
                            <th> Product Title </th>
                            <th> Description </th>
                            <th>  Price </th>
                            <th> Size </th>
                            <th> category </th>
                            <th> brand </th>
                            <th> Action </th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($product as $product)
                            <tr>
                                <th > <img src="/product/{{$product->image}}" ></th>
                                <th> {{$product->title}} </th>
                                <th> {{$product->description}} </th>
                                <th> {{$product->price}} </th>
                                <th> {{$product->size}} </th>
                                <th> {{$product->category}} </th>
                                <th> {{$product->brand}} </th>

                                <th>
                                    <a onclick="return confirm('Are You Sure To Delete This')" type="button" class="btn btn-outline-danger btn-fw" href="{{url('delete_used_shoes_admin',$product->id)}}">Delete</a>
                                    <br><br>
                                    <a type="button" class="btn btn-outline-primary btn-fw" href="{{url('used_product_page',$product->id)}}">Show</a>
                                </th>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>




@include('admin.script')
</body>

</html>
