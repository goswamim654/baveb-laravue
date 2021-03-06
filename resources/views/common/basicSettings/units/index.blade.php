@extends('layouts.master')
<?php 
$arrayPhysical = array('10' => 'Piece', '20' => 'Length', '30' =>'Area', '40'=> 'Volumina', '50' => 'Weight', '60' => 'Time');
?>
@section('content')
	<!-- Main content -->
    <div class="content">
    <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row">
              <div class="col-sm-6">
                <h1 class="m-0 text-dark">Units</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                  <li class="breadcrumb-item">Common</li>
                  <li class="breadcrumb-item">Basic Settings</li>
                  <li class="breadcrumb-item active">Uints</li>
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
		<div class="container-fluid">
	        <div class="row">
	          <div class="col-lg-12">
	          	<!-- <example-component></example-component> -->
	          	<list-unit-component></list-unit-component>
    			<!-- /.card -->
	          <!-- /.col-md-12 -->
	        </div>
	        <!-- /.row -->
	      </div><!-- /.container-fluid -->
	  	</div>
	</div>

@endsection