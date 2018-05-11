<meta charset="utf-8">
<meta name="description" content="">
<meta name="author" content="">
<title>@yield('title')</title>
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ asset('css/main.css') }}" rel="stylesheet">
@if ((Session::has('userId')))
   <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
@endif

