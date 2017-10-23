<!DOCTYPE html>
<html>
<head>
@include('layout.assets_header')
</head>

<body class="theme-red">
<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->

    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    @include('layout.admin_search_bar')
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        @include('layout.top_header')
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            @include('layout.user_info')
            <!-- #User Info -->
            <!-- Menu -->
            @include('layout.left_side_menu')
            <!-- #Menu -->
@include('layout.footer')
        </aside>
        <!-- #END# Left Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            @yield('content')
        </div>
    </section>
@include('layout.assets_footer')
</body>

</html>