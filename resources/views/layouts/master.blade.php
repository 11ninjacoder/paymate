<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div class="container">

    <header class="row signup-header">
        @if (!(Session::has('userId')))
               @include('includes.header')
        @elseif ((Session::has('userId')))
               @include('includes.dashboard_header')
        @endif
        
        
    </header>

    @yield('content')
    
    <footer class="footer">
        @include('includes.footer')
    </footer>

</div>
</body>
</html>
