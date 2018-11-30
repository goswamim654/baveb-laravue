@extends('layouts.master')

@section('content')
	<!-- Main content -->
    <div class="content">
    <!-- Content Header (Page header) -->
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0 text-dark">Units</h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
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
	          	<div class="card card-primary card-outline">
			        <!-- <div class="card-header">
			          <h3 class="card-title"></h3>
			        </div> -->
			        <!-- /.card-header -->
			        <div class="card-body">
			            <table id="units" class="table table-bordered table-striped">
			                <thead>
			                    <tr>
			                        <th>Units</th>
			                        <th>Description</th>
			                        <th>Shortform</th>
			                        <th>Physical</th>
			                        <th>Factor</th>
			                        <th>Basic Unity</th>
			                        <th>Block</th>
			                        <th>Action</th>
			                    </tr>
			                </thead>
			                <tbody>
			                	@foreach($units as $unit)
			                    <tr>
			                        <td>{{$unit->unid}}</td>
			                        <td>{{$unit->dsca}}
			                        </td>
			                        <td>{{$unit->dscs}}</td>
			                        <td> 4</td>
			                        <td>{{$unit->conv}}</td>
			                        <td>{{$unit->basu}}</td>
			                        <td>{{$unit->crnd}}</td>
			                        <td><a href="#" class="btn btn-primary"><i class="fas fa-pencil-alt"></i></a></td>
			                    </tr>
			                    @endforeach
			                </tbody>
			          </table>
			        </div>
			        <!-- /.card-body -->
			    </div>
    <!-- /.card -->
	          <!-- /.col-md-12 -->
	        </div>
	        <!-- /.row -->
	      </div><!-- /.container-fluid -->
	  	</div>
	</div>
@endsection