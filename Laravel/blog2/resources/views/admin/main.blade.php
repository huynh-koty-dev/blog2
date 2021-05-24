<!DOCTYPE html>
<html lang="en">
    <head>
        @include('admin.elements.head')
    </head>
    <body class="sb-nav-fixed">
        @include('admin.layouts.header')
        <div id="layoutSidenav">
            @include('admin.layouts.sidenavRight')
            <div id="layoutSidenav_content">
                @yield('content')
                @include('admin.layouts.footer')
            </div>
        </div>
        @include('admin.elements.scripts')
    </body>
</html>
