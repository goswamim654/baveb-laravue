@extends('layouts.authMaster')

@section('content')
<div class="card">
    <div class="card-body login-card-body">
        <p class="login-box-msg">Passwort vergessen</p>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <form method="POST" action="{{ route('password.email') }}">
            @csrf
            <div class="input-group mb-3">               
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus>
                <div class="input-group-append">
                    <span class="fa fa-envelope input-group-text"></span>
                </div>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="row">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">{{ __('Link zum Zurücksetzen des Passworts senden') }}</button>
                </div>
              <!-- /.col -->
            </div>
        </form>
    </div>
    <!-- /.login-card-body -->
</div>

@endsection
