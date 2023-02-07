
<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
    @include('admin.css')

</head>
<style>
    .div_center {

        text-align: center;
        padding-top: 40px;
    }

    .form {
        background-color: #191c24;
        border-radius: 20px;
        box-sizing: border-box;
        height: auto;
        padding: 20px;
        width: 500px;
        margin: auto;

    }

    .title {
        color: #eee;
        font-family: sans-serif;
        font-size: 36px;
        font-weight: 600;
        margin-top: 20px;
    }

    .subtitle {
        color: #eee;
        font-family: sans-serif;
        font-size: 16px;
        font-weight: 600;
        margin-top: 10px;
    }

    .input-container {
        height: 50px;
        position: relative;
        width: 100%;
    }

    .ic1 {
        margin-top: 40px;
    }

    .ic2 {
        margin-top: 30px;
    }

    .input {
        background-color: #303245;
        border-radius: 12px;
        border: 0;
        box-sizing: border-box;
        color: #eee;
        font-size: 18px;
        height: 100%;
        outline: 0;
        padding: 4px 20px 0;
        width: 100%;
    }

    .cut {
        background-color: #15172b;
        border-radius: 10px;
        height: 20px;
        left: 20px;
        position: absolute;
        top: -20px;
        transform: translateY(0);
        transition: transform 200ms;
        width: 120px;
        margin: auto;
    }

    .cut-short {
        width: 50px;
    }

    .input:focus~.cut,
    .input:not(:placeholder-shown)~.cut {
        transform: translateY(8px);
    }

    .placeholder {
        color: #65657b;
        font-family: sans-serif;
        left: 20px;
        line-height: 14px;
        pointer-events: none;
        position: absolute;
        transform-origin: 0 50%;
        transition: transform 200ms, color 200ms;
        top: 20px;
    }

    .input:focus~.placeholder,
    .input:not(:placeholder-shown)~.placeholder {
        transform: translateY(-30px) translateX(10px) scale(0.75);
    }

    .input:not(:placeholder-shown)~.placeholder {
        color: #808097;
    }

    .input:focus~.placeholder {
        color: #dc2f55;
    }

    .submit {
        background-color: #08d;
        border-radius: 12px;
        border: 0;
        box-sizing: border-box;
        color: #eee;
        cursor: pointer;
        font-size: 18px;
        height: 50px;
        margin-top: 38px;
    // outline: 0;
        text-align: center;
        width: 100%;
    }

    .submit:active {
        background-color: #06b;
    }

    .center{
        width: 60%;
        margin: auto;
        text-align: center;
        margin-top: 50px;
    }
</style>

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
                <div class="div_center">
                    <div class="form">
                        <div class="title">Update Product</div>
                        <form action="{{url('/update_user_confirm',$users->id)}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="input-container ic1">
                                <input id="" class="input" type="text" name="name" placeholder=" " value="{{$users->name}}"/>
                                <div class="cut" ></div>
                                <label for="firstname" class="placeholder">Name</label>
                            </div>

                            <div class="input-container ic1">
                                <input id="" class="input" type="text" name="email" placeholder=" " value="{{$users->email}}" />
                                <div class="cut"></div>
                                <label for="firstname" class="placeholder">Email</label>
                            </div>

                            <div class="input-container ic1">
                                <input id="" class="input" type="number" name="phone" placeholder=" " value="{{$users->phone}}"/>
                                <div class="cut"></div>
                                <label for="firstname" class="placeholder">Phone</label>
                            </div>
                            <div class="input-container ic1">
                                <input id="" class="input" type="text" name="address" placeholder=" " value="{{$users->address}}" />
                                <div class="cut"></div>
                                <label for="firstname" class="placeholder">Address</label>
                            </div>




                            <div class="input-container ic1">
                                <select class="input" name="usertype">


                                    <option value="{{$users->usertype}}">
                                        {{$users->usertype}}
                                    </option>
                                        <option>
                                            0
                                        </option>
                                    <option>
                                        1
                                    </option>



                                </select>
                                <label for="firstname"  class="placeholder">usertype</label>
                            </div>


                            <button type="text" class="submit">submit</button>
                        </form>
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
