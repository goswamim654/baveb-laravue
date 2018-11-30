@extends('layouts.authMaster')

@section('content')

<div class="card">
    <div class="card-body login-card-body">
        <p class="login-box-msg">Sign in to start your session</p>

        <form action="{{ route('login') }}" method="post">
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
            <div class="input-group mb-3">
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
                <div class="input-group-append">
                    <span class="fa fa-lock input-group-text"></span>
                </div>
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
            <div class="row">
                <div class="col-7">
                    <div class="checkbox icheck">
                        <label>
                            <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} {{Auth::viaRemember() ? 'checked' : ''}}> {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
              <!-- /.col -->
                <div class="col-5">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">{{ __('Anmeldung') }}</button>
                </div>
              <!-- /.col -->
            </div>
      </form>
        @if (Route::has('password.request'))
        <p class="mb-1">
            <a href="{{ route('password.request') }}">{{ __('Passwort vergessen') }}</a>
        </p>
        @endif
        @if (Route::has('register'))
        <p class="mb-0">
            <a  href="{{ route('register') }}">{{ __('Register a new membership') }}</a>
        </p>
        @endif
    </div>
    <!-- /.login-card-body -->
</div>
@endsection
