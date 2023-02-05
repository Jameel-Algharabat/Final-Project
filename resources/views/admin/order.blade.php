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
                            <th> Image </th>
                            <th> name </th>
                            <th> Email </th>
                            <th> Phone </th>
                            <th>  Address</th>
                            <th>  Product title </th>
                            <th> Quantity </th>
                            <th> Price </th>
                            <th> Delivery status </th>
                            <th> Delivered </th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($order as $order)
                            <tr>
                                <th><img src="/product/{{$order ->image}}" ></th>
                                <th>{{$order->name}}</th>
                                <th>{{$order->email}}</th>
                                <th>{{$order->phone}}</th>
                                <th>{{$order->address}}</th>
                                <th>{{$order->product_title}}</th>
                                <th>{{$order->quantity}}</th>
                                <th>{{$order->price}}</th>
                                <th>{{$order->delivery_status}}</th>
                                <th>
{{--                                    <a onclick="return confirm('Are You Sure To Delete This')" type="button" class="btn btn-outline-danger btn-fw" href="">Delete</a>--}}
{{--                                    <br><br>--}}
{{--                                    @if($order->delivery_status=='processing')--}}
                                    <a type="button" class="btn btn-outline-primary btn-fw" onclick="return confirm('Are you sure this product is delivered !!!')" href="{{url('delivered_order',$order->id)}}">Delivered</a>
{{--                                    @else--}}
{{--                                    <p style="color: #00a045">Delivered</p>--}}
{{--                                    @endif--}}
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
