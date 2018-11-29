@extends('master')

@section('content')
	<div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
          	<example-component></example-component>
            <div class="card card-primary card-outline">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>

                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the card's
                  content.
                </p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
              </div>
            </div><!-- /.card -->
          </div>
          <!-- /.col-md-12 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <signatures></signatures>
            </div>
        </div>
    </div>
@endsection