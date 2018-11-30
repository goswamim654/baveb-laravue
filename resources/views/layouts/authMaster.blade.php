<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Beveb') }} | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{URL::asset('css/app.css')}}">
    <!-- iCheck -->
    <!-- <link rel="stylesheet" href="https://adminlte.io/themes/dev/AdminLTE/plugins/iCheck/square/blue.css"> -->
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
<div class="login-box" id="app">
  <div class="login-logo">
    <img src="{{URL::asset('/img/beveb-logo.png')}}" alt="Beveb Logo" class="">
  </div>
  <!-- /.login-logo -->
   @yield('content')
</div>
<!-- /.login-box -->
<script src="{{URL::asset('js/app.js')}}"></script>
<!-- iCheck -->
<!-- <script src="https://adminlte.io/themes/dev/AdminLTE/plugins/iCheck/icheck.min.js"></script> -->
<script>
  // $(function () {
  //   $('input').iCheck({
  //     checkboxClass: 'icheckbox_square-blue',
  //     radioClass   : 'iradio_square-blue',
  //     increaseArea : '20%' // optional
  //   })
  // })
</script>
</body>
</html>
