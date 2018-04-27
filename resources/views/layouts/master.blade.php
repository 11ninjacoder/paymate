<html>
   
   <head>
      <title>@yield('title')</title>
      <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

   </head>
   
   <body>
      @section('sidebar')
      
      @show
      
      <div class = "container">
         @yield('content')
      </div>
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
   </body>
   
</html>