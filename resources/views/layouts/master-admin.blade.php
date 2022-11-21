<!DOCTYPE html>
<html>

<!-- Mirrored from www.bootstrapdash.com/demo/justdo-laravel-pro/template/vertical-default-dark/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Nov 2022 11:19:13 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <title>CENTRALNEWS.NG</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <!-- CSRF Token -->
  <meta name="_token" content="oOLyGNNeqfhi9zfCkncpLkbOwrD2deERm7QFtEFd">
  
  <link rel="shortcut icon" href="/site/assets/images/favlogo.png" />

  <!-- plugin css -->
  <link media="all" type="text/css" rel="stylesheet" href="/admin/assets/plugins/%40mdi/font/css/materialdesignicons.min.css">
  <link media="all" type="text/css" rel="stylesheet" href="/admin/assets/plugins/ti-icons/css/themify-icons.css">
  <link media="all" type="text/css" rel="stylesheet" href="/admin/assets/plugins/perfect-scrollbar/perfect-scrollbar.css">
  <!-- end plugin css -->

    <link media="all" type="text/css" rel="stylesheet" href="/admin/assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css">
    <link media="all" type="text/css" rel="stylesheet" href="/admin/assets/plugins/icheck/skins/all.css">
    <link media="all" type="text/css" rel="stylesheet" href="/admin/assets/plugins/select2/css/select2.min.css">
  <!-- common css -->
  <link media="all" type="text/css" rel="stylesheet" href="/admin/css/app.css">
  <!-- end common css -->

  </head>
<body data-base-url="https://www.bootstrapdash.com/demo/justdo-laravel-pro/template/vertical-default-dark">

  <div class="container-scroller" id="app">
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="{{ route('home') }}"><img src="/site/assets/images/logo3.png" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="{{ route('home') }}"><img src="/site/assets/images/logo3.png" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="ti-layout-grid2"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="ti-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          
          
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link" href="#" data-toggle="dropdown" id="profileDropdown">
              <h4>  {{ Auth::user()->name }}</h4>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
              
              <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
               <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
          
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="ti-layout-grid2"></span>
        </button>
      </div>
    </nav>    <div class="container-fluid page-body-wrapper">
      
     <nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item active">
      <a class="nav-link" href="{{ route('home') }}">
        <i class="ti-home menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>
   
    <li class="nav-item ">
        <a class="nav-link" data-toggle="collapse" href="#basic-ui" aria-expanded="false" aria-controls="basic-ui">

        <i class="ti-palette menu-icon"></i>
        <span class="menu-title">POLITICS</span>
        <i class="menu-arrow"></i>
      </a>
       <div class="collapse " id="basic-ui">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item ">
            <a class="nav-link" href="/politics/create"> Politics Post Create</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('politicsview') }}">Politics Post</a>
          </li>
          
        </ul>
      </div>
    </li>
    <li class="nav-item ">
      <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
        <i class="ti-face-smile menu-icon"></i>
        <span class="menu-title">LATEST NEWS</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse " id="icons">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item ">
            <a class="nav-link" href="/latestnews/create"> Latest News Create</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('latestnewsview') }}">Latest News Post</a>
          </li>
        </ul>
      </div>
    </li>
    
    <li class="nav-item ">
        <a class="nav-link" data-toggle="collapse" href="#advanced-ui" aria-expanded="false" aria-controls="advanced-ui">

        <i class="ti-view-list menu-icon"></i>
        <span class="menu-title">SPORTS</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse " id="advanced-ui">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item ">
            <a class="nav-link" href="/sport/create"> Sport Post Create</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{ route('sportview') }}">Sports Post</a>
          </li>
          
        </ul>
      </div>
    </li>


   

    <li class="nav-item  ">
        <a class="nav-link" data-toggle="collapse" href="#forms" aria-expanded="false" aria-controls="forms">
        <i class="ti-clipboard menu-icon"></i>
        <span class="menu-title">Category</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse " id="forms">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item ">
            <a class="nav-link" href="forms/basic-elements.html">Create Category Post</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="forms/advanced-elements.html">Category Post</a>
          </li>
         
        
        </ul>
      </div>
    </li>
    <li class="nav-item ">
        <a class="nav-link" data-toggle="collapse" href="#editors" aria-expanded="false" aria-controls="editors">
        <i class="ti-eraser menu-icon"></i>
        <span class="menu-title">User</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse " id="editors">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item ">
            <a class="nav-link" href="editors/text-editor.html">Add User</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="editors/code-editor.html">User</a>
          </li>
        </ul>
      </div>
    </li>
    
    
    <li class="nav-item ">
      <a class="nav-link" href="notifications.html">
        <i class="ti-bell menu-icon"></i>
        <span class="menu-title">Settings</span>
      </a>
    </li>
  </ul>
</nav>
      <div class="main-panel">
        <div class="content-wrapper">
          <div>
  <div class="row">
    <div class="col-md-12 grid-margin">
      <div class="row">
        <div class="col-12 col-xl-5 mb-4 mb-xl-0">
          <h4 class="font-weight-bold">Hi, Welcomeback!</h4>
          <h4 class="font-weight-normal mb-0">{{ config('app.name', 'CENTRALNEWS.NG') }}</h4>
        </div>
        
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-3 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <p class="card-title text-md-center text-xl-left">Number of Politics Clicks</p>
          <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
            <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">34040</h3>
            <i class="ti-calendar icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
          </div>  
          
        </div>
      </div>
    </div>
    <div class="col-md-3 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <p class="card-title text-md-center text-xl-left">Number of Sports Clicks</p>
          <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
            <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">47033</h3>
            <i class="ti-user icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
          </div>  
          
        </div>
      </div>
    </div>
    <div class="col-md-3 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <p class="card-title text-md-center text-xl-left">Number of LatestNews Clicks</p>
          <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
            <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">40016</h3>
            <i class="ti-agenda icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
          </div>  
         
        </div>
      </div>
    </div>
    <div class="col-md-3 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <p class="card-title text-md-center text-xl-left">Total clicks</p>
          <div class="d-flex flex-wrap justify-content-between justify-content-md-center justify-content-xl-between align-items-center">
            <h3 class="mb-0 mb-md-2 mb-xl-0 order-md-1 order-xl-0">61344</h3>
            <i class="ti-layers-alt icon-md text-muted mb-0 mb-md-3 mb-xl-0"></i>
          </div>  
         
        </div>
      </div>
    </div>
  </div>
  <main class="py-4">
    @include('inc.messages') 
    @yield('content')
</main>
  
</div>
        </div>

     
        <footer class="footer">
  <div class="container-fluid clearfix">
    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2020 <a href="{{ route('home') }}" target="_blank">CENTRALNEWS.NG</a>. All rights reserved.</span>
    
  </div>
</footer>      </div>
    </div>
  </div>

  <!-- base js -->
  <script src="../admin/js/app.js"></script>
  <script src="../admin/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
  <!-- end base js -->

  <!-- plugin js -->
    <script src="/admin/assets/plugins/chartjs/chart.min.js"></script>
  <script src="/admin/assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
  <script src="/admin/assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>
  <!-- end plugin js -->

  <!-- common js -->
  <script src="/admin/assets/js/off-canvas.js"></script>
  <script src="/admin/assets/js/hoverable-collapse.js"></script>
  <script src="/admin/assets/js/misc.js"></script>
  <script src="/admin/assets/js/settings.js"></script>
  <script src="/admin/assets/js/todolist.js"></script>
  <!-- end common js -->
  <script src="../admin/assets/js/file-upload.js"></script>
  <script src="../admin/assets/js/iCheck.js"></script>
  <script src="../admin/assets/js/select2.js"></script>
  <script src="../admin/assets/js/typeahead.js"></script>


{{--    
   <!-- plugin js -->
     <script src="../admin/assets/plugins/icheck/icheck.min.js"></script>
   <script src="../admin/assets/plugins/select2/js/select2.min.js"></script>
   <script src="../admin/assets/plugins/typeaheadjs/typeahead.bundle.min.js"></script>
   <!-- end plugin js -->
 
   <!-- common js -->
   <script src="../admin/assets/js/off-canvas.js"></script>
   <script src="../admin/assets/js/hoverable-collapse.js"></script>
   <script src="../admin/assets/js/misc.js"></script>
   <script src="../admin/assets/js/settings.js"></script>
   <script src="../admin/assets/js/todolist.js"></script>
   <!-- end common js -->
 
     <script src="../admin/assets/js/file-upload.js"></script>
   <script src="../admin/assets/js/iCheck.js"></script>
   <script src="../admin/assets/js/select2.js"></script>
   <script src="../admin/assets/js/typeahead.js"></script>

    <script src="../admin/assets/js/dashboard.js"></script>
    <script src="../admin/assets/js/data-table.js"></script> --}}

   {{-- <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script> --}}
{{-- <script type="text/javascript">
    $(document).ready(function() {
       $('.ckeditor').ckeditor();
    });
</script> --}}
</body>

<!-- Mirrored from www.bootstrapdash.com/demo/justdo-laravel-pro/template/vertical-default-dark/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Nov 2022 11:19:42 GMT -->
</html>