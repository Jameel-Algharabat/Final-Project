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
                <div class="div_center">


                    <div class="row">
                        <div class="preview-item-content">
                            <button class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </button>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>

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
