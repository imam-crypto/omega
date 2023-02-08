@include('template_admin.header')

<body class="py-5">
    <!-- BEGIN: Mobile Menu -->
    @include('template_admin.sidebar_mobile')
    <!-- END: Mobile Menu -->
    <div class="flex mt-[4.7rem] md:mt-0">
        <!-- BEGIN: Side Menu -->
        @include('template_admin.sidebar')
        <!-- END: Side Menu -->
        <!-- BEGIN: Content -->
        <div class="content">
            <!-- BEGIN: Top Bar -->
            @include('template_admin.topbar')
            <!-- END: Top Bar -->

            @yield('content')

        </div>
        <!-- END: Content -->
    </div>
    @include('template_admin.footer')
