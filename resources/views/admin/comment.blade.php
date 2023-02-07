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
                            <th> Subject </th>
                            <th> Review </th>
                            <th> Rate </th>
                            <th> Status </th>
                            <th> Show </th>
                            <th> Delete </th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($comment as $comment)
                            <tr>

                                <th>{{$comment->user->name}}</th>
                                <th>{{$comment->subject}}</th>
                                <th>{{$comment->review}}</th>
                                <th>{{$comment->rate}}</th>
                                <th>{{$comment->status}}</th>
                                <th>
                                    <a type="button" class="btn btn-outline-primary btn-fw" href="{{url('product_page',$comment->product_id)}}">Show</a>
                                </th>
                                <th>
                                    <a onclick="return confirm('Are You Sure To Delete This')" type="button" class="btn btn-outline-danger btn-fw" href="{{url('delete_comment',$comment->id)}}">Delete</a>
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
