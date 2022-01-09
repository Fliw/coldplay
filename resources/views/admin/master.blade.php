<!DOCTYPE html>
<html lang="en">
<head>
    @include('admin.components.head')
    @yield('css')
</head>
<body class="">
    <div class="wrapper">
        @include('admin.components.sidebar-new')
        <div class="main-panel">
            @include('admin.components.navbar')
            @yield('content')
            @include('admin.components.footer')
        </div>
    </div>
    @include('admin.components.style-plugin')
    @include('admin.components.script')
    @include('admin.components.script-raw')
    @yield('scripts')
</body>
</html>
