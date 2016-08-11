<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Hospital & Doctor Info</title>
    <!-- Core CSS - Include with every page -->
    {!! Html::style('css/bootstrap.min.css') !!} 
    {!! Html::style('css/font-awesome.min.css') !!} 
    {!! Html::style('css/prettyPhoto.css') !!} 
    {!! Html::style('css/animate.min.css') !!} 
    {!! Html::style('css/main.css') !!} 
	  {!! Html::style('css/responsive.css') !!} 
	
    @yield('style')

  </head>
  <body>
       
       @include('include.header')
	   
	     {!! Breadcrumbs::render() !!}
       

       @yield('content')
	   
	   @include('include.footer')

  <!-- Core Scripts - Include with every page -->
 {!! Html::script('js/jquery.js') !!}
 {!! Html::script('js/bootstrap.min.js') !!}
 {!! Html::script('js/jquery.prettyPhoto.js') !!}
 {!! Html::script('js/jquery.isotope.min.js') !!}
 {!! Html::script('js/main.js') !!}
 {!! Html::script('js/wow.min.js') !!}
    
   @yield('script')

   <script type="text/javascript">
     $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

   </script>

  </body>
</html>