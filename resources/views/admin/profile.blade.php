<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')

</head>


<body>

<div class="row">
    <div class="preview-item-content">


    </div>
</div>
<div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
    <!-- partial -->
    <!-- partial:partials/_navbar.html -->
    @include('admin.header')
    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="div_center">
                    <div class="row gutters-sm">
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-column align-items-center text-center">
                                        <img src="https://media.istockphoto.com/id/1300845620/vector/user-icon-flat-isolated-on-white-background-user-symbol-vector-illustration.jpg?s=612x612&w=0&k=20&c=yBeyba0hUkh14_jgv1OKqIH0CCSWU_4ckRkAoy2p73o=" alt="Admin" class="rounded-circle" width="160">
                                        <div class="mt-3" style="height:105px">
                                            <h4>{{ Auth::user()->name }}</h4>
                                            <br>

                                            <div class="lan-selector">

                                                <button class="btn btn-outline-danger btn-fw" href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </button>
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>


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
                                            <a  class="btn btn-outline-primary btn-fw"  href="{{url('update_user')}}">Edit</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>



@include('admin.script')
</body>

</html>
