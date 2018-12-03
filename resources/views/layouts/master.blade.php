<?php 
$arrayPhysical = array('10' => 'Piece', '20' => 'Length', '30' =>'Area', '40'=> 'Volumina', '50' => 'Weight', '60' => 'Time');
?>
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
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.min.css">
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
        <a class="nav-link" style="padding-top: 5px; font-size: 20px;" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
      </li>
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li> -->
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3 search-form">
      <div class="input-group input-group-sm search">
        <span class="fa fa-search fa-sm"></span>
        <input type="text" class="form-control" placeholder="Search">
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
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link"> 
                  <i class="far fa-circle ml-2 mr-1"></i>
                  <p>Product Master Data<i class="right fa fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link"> 
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>List of Items</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Item Typess</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Item Groups</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Shop Groups</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Price Groups</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Item Signals</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Manufacturer</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Alternate Items</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link"> 
                  <i class="far fa-circle ml-2 mr-1"></i>
                  <p>Business Partners<i class="right fa fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link"> 
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>List of Customers</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Freight Costs</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Shipping Methods</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Suppliers</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Itemdata by Supplier</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Alternative Suppliers</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link"> 
                  <i class="far fa-circle ml-2 mr-1"></i>
                  <p>Master Data Prodution<i class="right fa fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link"> 
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Bill of Materials</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Workcenter</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Operations</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Routings</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Hour Types</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Parameter Hours Accounting</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link"> 
                  <i class="far fa-circle ml-2 mr-1"></i>
                  <p>Master Data Production<i class="right fa fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link"> 
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Cost Rates</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Subcontracting Rates</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Surcharges</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Sucharges by Item</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link"> 
                  <i class="far fa-circle ml-2 mr-1"></i>
                  <p>Master Data Finance<i class="right fa fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link"> 
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Account Types</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Accounts</p>
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
                      <p>Control Accounts</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link"> 
                  <i class="far fa-circle ml-2 mr-1" style="padding-top: 2px; float: left; padding-right: 4px;"></i>
                  <p>Master Data Fair Stand<br>Builder<i class="right fa fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link"> 
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Paramter ToDo</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Keys</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Packaging Types</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Activities</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Skills by Item</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Slills by Employee</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Packagings</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1" style="padding-top: 2px; float: left; padding-right: 4px;"></i>
                      <p>Price by Supplier and <br>Pricegroup</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Cost Rates</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link"> 
                  <i class="far fa-circle ml-2 mr-1"></i>
                  <p>Masterdata Shop<i class="right fa fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link"> 
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Parameter Online Shop</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Payment Methodes</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Freight Costs</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link"> 
                  <i class="far fa-circle ml-2 mr-1"></i>
                  <p>Master Data CRM<i class="right fa fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link"> 
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Activity Types</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Keywords</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Status Types</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Success Types</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Incentives</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link"> 
                  <i class="far fa-circle ml-2 mr-1"></i>
                  <p>Others<i class="right fa fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link"> 
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Print Labels</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-industry mr-1"></i>
              <p>
                Distribution
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link"> 
                  <i class="far fa-circle ml-2 mr-1"></i>
                  <p>Procurement <i class="right fa fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('units') }}" class="nav-link {{ Request::path() == 'common/basicSettings/units' ? 'active' : '' }}"> 
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Inquiry</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>List of Inquirries</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Inquiry Results</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Inquiry Overview</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Purchase Order</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>List Purchase Orders</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Warehouse Receipt</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Inspection</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Purchase Invoice</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link"> 
                  <i class="far fa-circle ml-2 mr-1"></i>
                  <p>Sales Order Management <i class="right fa fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link"> 
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Callers List</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Standard Routes</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Sales Quotation</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>List Sales Quotations</p>
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
                      <p>Fast Entry</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Sales Orders</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>List Sales Orders</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Freight Costs</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Analysis Logistics</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link"> 
                  <i class="far fa-circle ml-2 mr-1"></i>
                  <p>Warehouse Management<i class="right fa fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link"> 
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Shipments</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Warehouse Receipt</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Warehouse Transaction</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Stock per Warehouse</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Lots</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Lot Tracking</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Stock per Item</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Planned Purchase Order</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Parcel</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Delivery Adresses</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Parcel Labels</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Cycle Counting</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Warehouse Management (new)</p>
                    </a>
                  </li>
                </ul>
              </li>
              <!-- <li class="nav-item has-treeview">
                <a href="#" class="nav-link"> 
                  <i class="far fa-circle ml-2 mr-1"></i>
                  <p>Business Partners<i class="right fa fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link"> 
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>List of Customers</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Freight Costs</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Shipping Methods</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Suppliers</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Itemdata by Supplier</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Alternative Suppliers</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link"> 
                  <i class="far fa-circle ml-2 mr-1"></i>
                  <p>Master Data Prodution<i class="right fa fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link"> 
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Bill of Materials</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Workcenter</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Operations</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Routings</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Hour Types</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Parameter Hours Accounting</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link"> 
                  <i class="far fa-circle ml-2 mr-1"></i>
                  <p>Master Data Production<i class="right fa fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link"> 
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Cost Rates</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Subcontracting Rates</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Surcharges</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Sucharges by Item</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link"> 
                  <i class="far fa-circle ml-2 mr-1"></i>
                  <p>Master Data Finance<i class="right fa fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link"> 
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Account Types</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Accounts</p>
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
                      <p>Control Accounts</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link"> 
                  <i class="far fa-circle ml-2 mr-1" style="padding-top: 2px; float: left; padding-right: 4px;"></i>
                  <p>Master Data Fair Stand<br>Builder<i class="right fa fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link"> 
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Paramter ToDo</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Keys</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Packaging Types</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Activities</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Skills by Item</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Slills by Employee</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Packagings</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1" style="padding-top: 2px; float: left; padding-right: 4px;"></i>
                      <p>Price by Supplier and <br>Pricegroup</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Cost Rates</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link"> 
                  <i class="far fa-circle ml-2 mr-1"></i>
                  <p>Masterdata Shop<i class="right fa fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link"> 
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Parameter Online Shop</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Payment Methodes</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Freight Costs</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link"> 
                  <i class="far fa-circle ml-2 mr-1"></i>
                  <p>Master Data CRM<i class="right fa fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link"> 
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Activity Types</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Keywords</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Status Types</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Success Types</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Incentives</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link"> 
                  <i class="far fa-circle ml-2 mr-1"></i>
                  <p>Others<i class="right fa fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link"> 
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Print Labels</p>
                    </a>
                  </li>
                </ul>
              </li> -->
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-tachometer-alt mr-1"></i>
              <p>
                CRM Dashboard
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link"> 
                  <i class="far fa-circle ml-2 mr-1"></i>
                  <p> Surveys <i class="right fa fa-angle-left"></i></p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ route('units') }}" class="nav-link {{ Request::path() == 'common/basicSettings/units' ? 'active' : '' }}"> 
                      <i class="far fa-circle ml-4 mr-1"></i>
                      <p>Questionaire</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-money-bill-alt mr-1"></i>
              <p>
                Finance Controlling
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link"> 
                  <i class="far fa-circle ml-2 mr-1"></i>
                  <p>Surveys</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fab fa-product-hunt mr-1"></i>
              <p>
                Production
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link"> 
                  <i class="far fa-circle ml-2 mr-1"></i>
                  <p>Hours Accounting</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-wrench mr-1"></i>
              <p>
                Tools
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link"> 
                  <i class="far fa-circle ml-2 mr-1"></i>
                  <p>Setup</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fab fa-servicestack mr-1" style="padding-top: 2px; float: left; padding-right: 4px;"></i>
              <p>
                Service Fair Stand <br>Construction
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link"> 
                  <i class="far fa-circle ml-2 mr-1"></i>
                  <p>Management Dashboard</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-file-alt mr-1"></i>
              <p>
                Service
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link"> 
                  <i class="far fa-circle ml-2 mr-1"></i>
                  <p>Master Data</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-cubes mr-1"></i>
              <p>
                  Variants
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link"> 
                  <i class="far fa-circle ml-2 mr-1"></i>
                  <p>Item Master</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-cogs mr-1"></i>
              <p>
                Configurator
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link"> 
                  <i class="far fa-circle ml-2 mr-1"></i>
                  <p>Parameter</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="far fa-question-circle mr-1"></i>
              <p>
                Help
                <i class="right fa fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link"> 
                  <i class="far fa-circle ml-2 mr-1"></i>
                  <p>Menu Tree</p>
                </a>
              </li>
            </ul>
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
<!-- Latest compiled and minified JavaScript -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
<script src="{{URL::asset('js/custom.js')}}"></script>

<div class="modal fade" id="rowlinkModal">
  <div class="modal-dialog modal-lg" role="document" style="width:800px;">
    <div class="modal-content">
      <div class="modal-header pd-y-20 pd-x-25">
        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Units</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body pd-25 pd-x-35">
        <div class="row">
      <div class="col-sm-2"><label>Units: </label></div>
      <div class="col-sm-10 autor-value">cm</div>
    </div>
    <div class="row">
      <div class="col-sm-2"><label>Description: </label></div>
      <div class="col-sm-10 autor-value">Zentimeter</div>
    </div>
    <div class="row">
      <div class="col-sm-2"><label>Short Form: </label></div>
      <div class="col-sm-10 autor-value">cm</div>
    </div>
    <div class="row">
      <div class="col-sm-2"><label>Physical: </label></div>
      <div class="col-sm-10 autor-value">Piece</div>
    </div>
      </div><!-- modal-body -->
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary tx-11 tx-uppercase pd-y-12 pd-x-25 tx-mont tx-medium" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div><!-- modal-dialog -->
</div>

<!-- modal Edit -->
<div class="modal fade" id="editModal">
  <div class="modal-dialog modal-lg" role="document" style="width:800px;">
    <div class="modal-content">
      <div class="modal-header pd-y-20 pd-x-25">
        <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Units</h6>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body pd-25 pd-x-35">
        <div class="form-layout form-layout-1">
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Units: <span class="tx-danger">*</span></label>
                  <input class="form-control" id="unit" type="text" name="unit">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Description: <span class="tx-danger">*</span></label>
                  <input class="form-control" id="desc" type="text" name="desc">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label class="form-control-label">Short form: <span class="tx-danger">*</span></label>
                  <input class="form-control" id="short_form" type="text" name="short_form">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Physical: <span class="tx-danger">*</span></label>
                  <select class="form-control select2" data-placeholder="Choose physical" name="physical" id="physical">
                    <option label="Choose physical"></option>
                    @foreach($arrayPhysical as $key => $physical) 
                      <option value="{{$key}}">{{$physical}}</option>
                     @endforeach
                    
                  </select>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Factor: <span class="tx-danger">*</span></label>
                  <input class="form-control" id="factor" type="text" name="factor">
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Basic Unity: <span class="tx-danger">*</span></label>
                  <select class="form-control select2" id="basic_unity" data-placeholder="Basic Unity" name="basic_unity">
                    <option label="Choose Basic Unity"></option>
                  </select>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group mg-b-10-force">
                  <label class="form-control-label">Block: <span class="tx-danger">*</span></label>
                  <input class="form-control" id="block" type="text" name="block">
                </div>
              </div>
            </div><!-- row -->

            
          </div><!-- form-layout -->
      </div><!-- modal-body -->
      <div class="modal-footer form-layout-footer">
          <button class="btn btn-info">Save Changes</button>
          <button class="btn btn-secondary" data-dismiss="modal">Cancel</button>
      </div>
    </div>
  </div><!-- modal-dialog -->
</div>
<script type="text/javascript">
  jQuery(document).ready(function(){
    jQuery('.editModalBtn').click(function(e) {
      var unid = $(this).data('unid');
      $('#unit').val('');
      $('#desc').val('');
      $('#short_form').val('');
      $('#physical').val('').change();
      $('#factor').val('');
      $('#basic_unity').val('');
      $('#block').val('');
      $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
          }
      });
      jQuery.ajax({
          url: "{{ url('/common/basicSettings/units/view/') }}/"+ unid,
          method: 'GET',
          success: function(result){
            jQuery.ajax({
                url: "{{ url('/common/basicSettings/units/basicUnity/') }}/"+ unid,
                method: 'GET',
                success: function(basicUnity){
                  for (var i = basicUnity.length - 1; i >= 0; i--) {
                      console.log(basicUnity[i]);
                      $('#basic_unity').append('<option>'+basicUnity[i]+'</option>');
                  }
                  
                }
            });
            $('#unit').val(result.unid);
            $('#desc').val(result.dsca);
            $('#short_form').val(result.dscs);
            $('#physical').val(result.tccu).change();
            $('#factor').val(result.conv);
            $('#basic_unity').val(result.basu);
            $('#block').val(result.crnd);
          }});
      });
    });
</script>
</body>
</html>
