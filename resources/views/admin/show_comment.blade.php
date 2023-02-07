{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}

{{--<head>--}}
{{--    <base href="/public">--}}
{{--    @include('admin.css')--}}

{{--</head>--}}


{{--<body>--}}
{{--<div class="container-scroller">--}}
{{--    <!-- partial:partials/_sidebar.html -->--}}
{{--    @include('admin.sidebar')--}}
{{--    <!-- partial -->--}}
{{--    <!-- partial:partials/_navbar.html -->--}}
{{--    @include('admin.header')--}}
{{--    <div class="container-fluid page-body-wrapper">--}}
{{--        <div class="main-panel">--}}
{{--            <div class="content-wrapper">--}}
{{--                --}}{{--                @if (session()->has('message'))--}}
{{--                --}}{{--                    <div class="alert alert-success">--}}

{{--                --}}{{--                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>--}}
{{--                --}}{{--                        {{ session()->get('message') }}--}}
{{--                --}}{{--                    </div>--}}
{{--                --}}{{--                @endif--}}

{{--                <div class="table-responsive center">--}}
{{--                    <form role="form" method="post" action="{{route('admin.update_comment',['id'=>$data->id])}}">--}}
{{--                        @csrf--}}
{{--                        <select class="btn btn-outline-info dropdown-toggle" name="status">--}}
{{--                            <option selected>{{$data->status}}</option>--}}
{{--                            <option>True</option>--}}
{{--                            <option>False</option>--}}
{{--                        </select>--}}
{{--                        <button type="submit" class="btn btn-outline-primary btn-fw" href="">Update Comment</button>--}}

{{--                    </form>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}




{{--@include('admin.script')--}}
{{--</body>--}}

{{--</html>--}}
