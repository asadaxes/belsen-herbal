<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/favicon.png') }}" />
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=Figtree:400,500,600&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
  <link rel="stylesheet" href="{{ asset('css/dataTables.css') }}">
  <link rel="stylesheet" href="{{ asset('css/responsiveTable.css') }}">
  <title>@yield("title")</title>
</head>
<style>
body{
  font-family: "Figtree", sans-serif;
}
.balance_btn{
  font-weight: 600;
  color: #565656 !important;
  border: 1px solid #e3e3e3;
  border-radius: 13px;
}
.logo_img{
  margin-left: 0.8rem;
  max-height: 40px;
  width: auto;
}
#footer_copyright{
  color: #ebebeb;
  font-size: 13px;
  bottom: 5px;
  position: absolute;
  word-wrap: break-word;
  width: -webkit-fill-available;
}
.sidebar-dark-primary .nav-sidebar>.nav-item>.nav-link.active, .sidebar-light-primary .nav-sidebar>.nav-item>.nav-link.active {
    background-color: #0f9d4e;
    color: #ffffff;
}
.sidebar-dark-primary .nav-sidebar>.nav-item>.nav-link.active, .sidebar-light-primary .nav-sidebar>.nav-item>.nav-link.active:hover {
  background-color: #0f9d4e !important;
  color: #ffffff !important;
}
</style>
@yield("style")
<body class="hold-transition sidebar-mini">
<!-- body wrapper :start -->
<div class="wrapper">
<!-- navbar :start -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a href="javascript:void(0)" class="nav-link" data-widget="pushmenu" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
  </nav>
  <!-- navbar :end-->
  <!-- left sidebar :start -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <a href="{{ route('dashboard') }}" class="brand-link py-2">
      <img src="{{ asset('assets/logo.png') }}" class="logo_img">
    </a>

    <div class="sidebar">
      <div class="user-panel mt-3 pb-3 mb-2 d-flex">
        <div class="info">
          <small class="text-muted">You are logged as,</small>
          <a href="" class="font-weight-bold d-block">{{ auth()->user()->full_name }}</a>
        </div>
      </div>

      <nav>
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link {{ isset($active_page) && $active_page == 'dashboard' ? 'active' : '' }}">
              <i class="nav-icon fas fa-chart-bar"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('users') }}" class="nav-link {{ isset($active_page) && $active_page == 'users' ? 'active' : '' }}">
              <i class="nav-icon fas fa-users"></i>
              <p>Users</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('category_list') }}" class="nav-link {{ isset($active_page) && $active_page == 'category' ? 'active' : '' }}">
              <i class="nav-icon fas fa-list"></i>
              <p>Category</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('products') }}" class="nav-link {{ isset($active_page) && $active_page == 'products' ? 'active' : '' }}">
              <i class="nav-icon fas fa-boxes"></i>
              <p>Products</p>
            </a>
          </li>
          <li class="nav-item">
            <hr class="bg-white my-2">
          </li>
          <li class="nav-item">
            <a href="javascript:void(0)" class="nav-link" onclick="submitLogoutForm()">
              <i class="nav-icon fa fa-share-square"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </nav>
    </div>
  </aside>
<!-- left sidebar :end -->
<!-- content wrapper :start -->
<div class="content-wrapper">
<div class="content">
<div class="container-fluid pt-3">
@if(session('success'))
<div class="position-fixed px-3" style="z-index: 5; right: 0; top: 5;">
  <div class="toast hide" role="alert" aria-live="assertive" aria-atomic="true" data-delay="10000">
    <div class="toast-header bg-success">
      <strong class="mr-auto">perfect!</strong>
      <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="toast-body">
      {{ session('success') }}
    </div>
  </div>
</div>
@endif
@if ($errors->any() || session('errors'))
<div class="position-fixed px-3" style="z-index: 5; right: 0; top: 5;">
    <div class="toast hide" role="alert" aria-live="assertive" aria-atomic="true" data-delay="10000">
        <div class="toast-header bg-danger">
            <strong class="mr-auto">There's an issue!</strong>
            <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="toast-body">
            <ul class="mb-0">
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endif
@yield("content")
</div>
</div>
</div>
<form action="{{ route('logout') }}" method="POST" id="logoutForm" style="display: none;">
@csrf
</form>
<!-- content wrapper :end -->
</div>
<!-- body wrapper :end -->
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/dashboard.min.js') }}"></script>
<script src="{{ asset('js/JQdataTables.js') }}"></script>
<script src="{{ asset('js/responsiveTable.js') }}"></script>
<script src="{{ asset('js/dataTables.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
@yield("script")
</body>
</html>