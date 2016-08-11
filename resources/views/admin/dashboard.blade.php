<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Dashboard </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Bootstrap 3.3.6 -->
  {!! Html::style('admin/css/bootstrap.min.css') !!} 
  {!! Html::style('admin/css/bootstrap.min.css') !!}
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style --> 
  {!! Html::style('admin/css//AdminLTE.min.css') !!}
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  {!! Html::style('admin/css/_all-skins.min.css') !!}
  <!-- Date Picker -->
  {!! Html::style('admin/css/datepicker3.css') !!}
  <!-- Daterange picker -->
  {!! Html::style('admin/css/daterangepicker-bs3.css') !!}
  <!-- bootstrap wysihtml5 - text editor -->
  {!! Html::style('admin/css/bootstrap3-wysihtml5.min.css') !!}

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  

   @include('admin.layouts.header')
     
     {!! Breadcrumbs::render() !!}
       

       @yield('content')
     
     @include('admin.layouts.footer')
</div>

<!-- jQuery 2.2.0 -->
{!! Html::script('admin/js/jQuery-2.2.0.min.js') !!}
<!-- jQuery UI 1.11.4 -->
{!! Html::script('admin/js/jquery-ui.min.js') !!}
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
{!! Html::script('admin/js/bootstrap.min.js') !!}
<!-- Sparkline -->
{!! Html::script('admin/js/jquery.sparkline.min.js') !!}
<!-- jvectormap -->
{!! Html::script('admin/js/jquery-jvectormap-1.2.2.min.js') !!}
{!! Html::script('admin/js/jquery-jvectormap-world-mill-en.js') !!}
<!-- jQuery Knob Chart -->
{!! Html::script('admin/js/jquery.knob.js') !!}
<!-- daterangepicker -->
{!! Html::script('admin/js/moment.min.js') !!}
{!! Html::script('admin/js/daterangepicker.js') !!}
<!-- datepicker -->
{!! Html::script('admin/js/bootstrap-datepicker.js') !!}
{!! Html::script('admin/js/bootstrap3-wysihtml5.all.min.js') !!}
{!! Html::script('admin/js/dashboard.js') !!}
</body>
</html>
