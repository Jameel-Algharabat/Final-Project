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
{{--                @if (session()->has('message'))--}}
{{--                    <div class="alert alert-success">--}}

{{--                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>--}}
{{--                        {{ session()->get('message') }}--}}
{{--                    </div>--}}
{{--                @endif--}}

                <div class="table-responsive center">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th> Name </th>
                            <th> Email </th>
                            <th> Phone </th>
                            <th> Address </th>
                            <th> Usertype </th>
                            <th> Action </th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($users as $users)
                            <tr>

                                <th>{{$users->name}}</th>
                                <th>{{$users->email}}</th>
                                <th>{{$users->phone}}</th>
                                <th>{{$users->address}}</th>
                                <th>{{$users->usertype}}</th>
                                <th>
                                    <a onclick="return confirm('Are You Sure To Delete This')" type="button" class="btn btn-outline-danger btn-fw" href="{{url('delete_users',$users->id)}}">Delete</a>
                                    <br><br>
                                    <a type="button" class="btn btn-outline-primary btn-fw" href="{{url('update_user',$users->id)}}">Edit</a>
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
