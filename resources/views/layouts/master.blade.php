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

        @if (!(Session::has('userId')))
               @yield('content')
               
        @elseif ((Session::has('userId')))
               <div id="main" class="row">

                <!-- sidebar content -->
                <div id="sidebar" class="col-md-3 profile-menu">
                    @include('includes.sidebar')
                </div>

                <!-- main content -->
                <div id="content" class="col-md-9">
                    @yield('content')
                </div>

            </div>
        @endif
    
    
    <footer class="footer">
        @include('includes.footer')
    </footer>

</div>
</body>
</html>
