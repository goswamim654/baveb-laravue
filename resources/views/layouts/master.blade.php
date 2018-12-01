<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Beveb | Admin</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{URL::asset('css/app.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="http://themetrace.com/template/bracket/lib/datatables/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="http://themetrace.com/template/bracket/css/bracket.css">
  <link rel="stylesheet" href="{{URL::asset('css/custom.css')}}">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper" id="app">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li> -->
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3 search-form">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fa fa-search"></i>
          </button>
        </div>
      </div>
    </form>
    <!-- <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link cd-search-trigger" href="#search">Advance Search</a>
      </li>
    </ul> -->
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }} <span class="caret"></span>
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#"><i class="fas fa-user-alt mr-1"></i> Account</a>
              <a class="dropdown-item" href="#"><i class="fas fa-cog mr-1"></i> Settings</a>
              <a class="dropdown-item" href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();"> <i class="fas fa-sign-out-alt mr-1"></i> 
                  {{ __('Logout') }}
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
          </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
  <!-- Advance Search Form -->
  <div id="search" class="cd-main-search">
      <form>
        <div class="search-input">
          <input type="search" placeholder="Suche...">
        </div>

        <div class="cd-search-suggestions">
          <div class="box-body">
                  <div class="row">
                    <div class="col-xs-6">
                      <div class="form-group">
                        <label for="arznei" class="sr-only">Arznei</label>
                        <select id="arznei" class="form-control" name="arznei">
                          <option value="">Arznei Wahlen</option>
                          <option value="AFG">Afghanistan</option>
                          <option value="ALB">Albania</option>
                          <option value="DZA">Algeria</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="kapitel" class="sr-only">Kapitel</label>
                        <select id="kapitel" class="form-control" name="kapitel">
                          <option value="">Kapitel Wahlen</option>
                          <option value="AFG">Afghanistan</option>
                          <option value="ALB">Albania</option>
                          <option value="DZA">Algeria</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="potenz" class="sr-only">potenz</label>
                        <select id="potenz" class="form-control" name="potenz">
                          <option value="">Potenz Wahlen</option>
                          <option value="AFG">Afghanistan</option>
                          <option value="ALB">Albania</option>
                          <option value="DZA">Algeria</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-xs-6">
                      <div class="form-group">
                        <label for="quella" class="sr-only">quella</label>
                        <select id="quella" class="form-control" name="quella">
                          <option value="">Quella Wahlen</option>
                          <option value="AFG">Afghanistan</option>
                          <option value="ALB">Albania</option>
                          <option value="DZA">Algeria</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="version" class="sr-only">version</label>
                        <select id="version" class="form-control" name="version">
                          <option value="">Version Wahlen</option>
                          <option value="AFG">Afghanistan</option>
                          <option value="ALB">Albania</option>
                          <option value="DZA">Algeria</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="Unklarheiten" class="sr-only">Unklarheiten</label>
                        <select id="Unklarheiten" class="form-control" name="Unklarheiten">
                          <option value="">Unklarheiten</option>
                          <option value="ja">Ja</option>
                          <option value="nein">Nein</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <button class="btn btn-success" type="submit" id="advSearch">Suche</button>
                      <button class="btn btn-default" type="button" id="advSearchCancelBtn">Abbrechen</button>
                    </div>
                  </div>  
              
              </div>
        </div> <!-- .cd-search-suggestions -->

        <a class="close"></a>
      </form>
    </div> <!-- .cd-main-search -->
  <!-- End Advance Search -->
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link text-center" style="background: #f2f4f6;">
      <img src="{{URL::asset('/img/beveb-logo.png')}}" alt="Beveb Logo" class="brand-image elevation-3"
           style="float:none; box-shadow: none;">
      <span class="brand-text font-weight-light" style="display:none;">V</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{URL::asset('/img/man.png')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="{{ route('home') }}" class="d-block">Beveb Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview {{ Request::path() == 'common/basicSettings/units' ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ Request::path() == 'common/basicSettings/units' ? 'active' : '' }} {{ Request::path() == 'home' ? 'active' : '' }}">
              <i class="fas fa-cog mr-1"></i>
              <p>
                Common
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item has-treeview {{ Request::path() == 'common/basicSettings/units' ? 'menu-open' : '' }}">
                <a href="#" class="nav-link {{ Request::path() == 'common/basicSettings/units' ? 'active' : '' }}"> 
                  <i class="far fa-circle ml-2 mr-1"></i>
                  <p>Basic Settings <i class="right fa fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('units') }}" class="nav-link {{ Request::path() == 'common/basicSettings/units' ? 'active' : '' }}"> 
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Units</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Currencies</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Languages</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Countries</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Regions</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Banks</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Lines of Bussiness</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Price List</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Terms of Payment</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Terms of Delivery</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>First free Numbers</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Number Groups</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Default Settings</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Basic Definations</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link"> 
                  <i class="far fa-circle ml-2 mr-1"></i>
                  <p>Basic Setting <i class="right fa fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link"> 
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Company Parameters</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Employees</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Cost Centers</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Warehouse Management</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Cas Registers</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Tax Rates</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Bak Holidays</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <!-- <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-dashboard"></i>
              <p>
                Starter Pages
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link active">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Active Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa fa-circle-o nav-icon"></i>
                  <p>Inactive Page</p>
                </a>
              </li>
            </ul>
          </li> -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-industry mr-1"></i>
              <p>
                Distribution
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    
      @yield('content')
  </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
      Version: 0.0.1
    </div>
    <!-- Default to the left -->
    <p>Copyright &copy; 2018-2019 <a href="#">Beveb</a>. All rights reserved.</p>
  </footer>
</div>
<!-- ./wrapper -->
<div class="cd-cover-layer"></div>
<!-- js -->
  <script src="{{URL::asset('js/app.js')}}"></script>
  <script src="http://themetrace.com/template/bracket/lib/datatables/jquery.dataTables.js"></script>
  <script src="http://themetrace.com/template/bracket/lib/datatables-responsive/dataTables.responsive.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
  <script>
    $('#units').DataTable({
  responsive: true,
  language: {
    searchPlaceholder: 'Search...',
    sSearch: '',
    lengthMenu: '_MENU_ items',
  }
});
    jQuery(document).ready(function($){
  var resizing = false,
    searchForm = $('.cd-main-search'),
    searchTrigger = $('.cd-search-trigger'),
    coverLayer = $('.cd-cover-layer');
  

  function closeSearchForm() {
    searchTrigger.removeClass('search-form-visible');
    searchForm.removeClass('is-visible');
    coverLayer.removeClass('search-form-visible');
  }

  //add the .no-pointerevents class to the <html> if browser doesn't support pointer-events property
  ( !Modernizr.testProp('pointerEvents') ) && $('html').addClass('no-pointerevents');


  searchTrigger.on('click', function(event){
    event.preventDefault();
    if( searchTrigger.hasClass('search-form-visible') ) {
      searchForm.find('form').submit();
    } else {
      searchTrigger.addClass('search-form-visible');
      coverLayer.addClass('search-form-visible');
      searchForm.addClass('is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
        searchForm.find('input[type="search"]').focus().end().off('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend');
      });
    }
  });

  //close search form
  searchForm.on('click', '.close', function(){
    closeSearchForm();
  });

  coverLayer.on('click', function(){
    closeSearchForm();
  });
  
  $(document).keyup(function(event){
    if( event.which=='27' ) closeSearchForm();
  });

});
  </script>
</body>
</html>
