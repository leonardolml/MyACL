<!doctype html>
<html lang="en">

<head>
    @include('layout/meta')
    
    @include('layout/css')
    
    @include('layout/title')
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        
        @include('layout/header')
        
        @include('layout/sidebar')        
        
        <div class="content-wrapper">
            <div class="content-header">
                @yield('content_header')
            </div>

            <div class="content">
                @yield('content')
            </div>
        </div>
        
        @include('layout/control_sidebar')

        @include('layout/footer')
        
    </div>
    
    @include('layout/scripts')
    
</body>

</html>