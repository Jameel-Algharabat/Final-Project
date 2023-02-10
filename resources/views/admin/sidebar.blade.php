<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top" >
      <a class="sidebar-brand brand-logo m-auto" href="/"><img src="img/logo - 2.png" style="height: 80px;width: 95px" alt="logo" /></a>
      <a class="sidebar-brand brand-logo-mini" href="/"><img src="img/logo - 2.png" style="height: 40px;width: 65px" alt="logo" alt="logo" /></a>
    </div>

    <ul class="nav" style="margin-top: 30px">
      <li class="nav-item profile">
        <div class="profile-desc">
          <div class="profile-pic">
            <div class="count-indicator">
              <img class="img-xs rounded-circle " src="https://media.istockphoto.com/id/1300845620/vector/user-icon-flat-isolated-on-white-background-user-symbol-vector-illustration.jpg?s=612x612&w=0&k=20&c=yBeyba0hUkh14_jgv1OKqIH0CCSWU_4ckRkAoy2p73o=" alt="">


                <span class="count bg-success"></span>
            </div>
            <div class="profile-name">
              <h5 class="mb-0 font-weight-normal">{{ Auth::user()->name }}</h5>
              <span>Hi Admin</span>
            </div>
          </div>

          <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
          <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
            <a href="{{url('profile')}}" class="dropdown-item preview-item">
              <div class="preview-thumbnail">
                <div class="preview-icon bg-dark rounded-circle">
                  <i class="mdi mdi-settings text-primary"></i>
                </div>
              </div>
              <div class="preview-item-content">
                <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
              </div>
            </a>
          </div>
        </div>
      </li>
      <li class="nav-item nav-category">
        <span class="nav-link">Navigation</span>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="{{url('/redirect')}}">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-icon">
            <i class="mdi mdi-laptop"></i>
          </span>
          <span class="menu-title">Products</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{url('/view_product')}}">Add Products</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{url('/show_product')}}">Show Products</a></li>
          </ul>
        </div>
      </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('users')}}">
          <span class="menu-icon">
              <i class="mdi mdi-account-box-outline"></i>
          </span>
                <span class="menu-title">Users</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('order')}}">
          <span class="menu-icon">
              <i class="mdi mdi-airplane-takeoff"></i>
          </span>
                <span class="menu-title">Order</span>
            </a>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('delivered')}}">
          <span class="menu-icon">
              <i class="mdi mdi-checkbox-marked-circle-outline"></i>
          </span>
                <span class="menu-title">Delivered</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('view_category')}}">
          <span class="menu-icon">
            <i class="mdi mdi-playlist-play"></i>
          </span>
                <span class="menu-title">Category</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('view_brand')}}">
          <span class="menu-icon">
            <i class="mdi mdi-playlist-play"></i>
          </span>
                <span class="menu-title">Brand</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('used_shoes_admin')}}">
          <span class="menu-icon">
              <i class="mdi mdi-comment-account"></i>
          </span>
                <span class="menu-title">Used Shoes</span>
            </a>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('comment')}}">
          <span class="menu-icon">
              <i class="mdi mdi-emoticon-happy"></i>
          </span>
                <span class="menu-title">Comment</span>
            </a>
        </li>

        <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('show_contact')}}">
          <span class="menu-icon">
              <i class="mdi mdi-comment-account"></i>
          </span>
                <span class="menu-title">Contacts</span>
            </a>
        </li>
{{--        <li class="nav-item menu-items">--}}
{{--            <a class="nav-link" href="{{url('profile')}}">--}}
{{--          <span class="menu-icon">--}}
{{--              <i class="mdi mdi-account-box-outline"></i>--}}
{{--          </span>--}}
{{--                <span class="menu-title">My Profile</span>--}}
{{--            </a>--}}
{{--        </li>--}}
    </ul>



  </nav>
