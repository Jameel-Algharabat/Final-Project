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
                <div class="table-responsive center">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th> name </th>
                            <th> email </th>
                            <th> message </th>
                            <th> Send email </th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($contact as $contact)
                            <tr>
                                <th> {{$contact->name}} </th>
                                <th> {{$contact->email}} </th>
                                <th> {{$contact->message}} </th>
                                <th>
                                    <a type="button" class="btn btn-outline-primary btn-fw" href="mailto:{{$contact->email}}">Send email</a>
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
