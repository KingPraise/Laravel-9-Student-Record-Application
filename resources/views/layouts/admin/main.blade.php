@include('layouts.admin.header')

<body class="g-sidenav-show bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    <!-- Sidenav -->
    @include('layouts.admin.sidebar')
    <!-- End Sidenav -->


    <main class="main-content position-relative border-radius-lg">
        <!-- Navbar -->
        @include('layouts.admin.navbar')
        <!-- End Navbar -->
        <div class="container-fluid py-4">
            {{-- content --}}
            @yield('content')
            {{-- end content --}}
            {{-- Footer --}}
            @include('layouts.admin.footer')
            {{-- End Footer --}}


</body>

</html>
