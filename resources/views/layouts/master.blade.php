<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div class="container">

    <header class="row signup-header">
        @include('includes.header')
    </header>

    @yield('content')
    
    <footer class=" footer">
        @include('includes.footer')
    </footer>

</div>
</body>
</html>
