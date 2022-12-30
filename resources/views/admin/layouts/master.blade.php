<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8" />
    <title>Dashboard | @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    @include('admin.layouts._inc.css')

</head>

<body class="loading" data-layouts-color="light" data-leftbar-theme="dark" data-layouts-mode="fluid" data-rightbar-onstart="true">
<!-- Begin page -->
<div class="wrapper">
    <!-- ========== Left Sidebar Start ========== -->
    @include('admin.layouts._inc.menu')
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">
            <!-- Topbar Start -->
            @include('admin.layouts._inc.header')
            <!-- end Topbar -->

            <!-- Start Content-->
            <div class="container-fluid">

                @yield('content')

            </div>
            <!-- container -->

        </div>
        <!-- content -->

        <!-- Footer Start -->
        @include('admin.layouts._inc.footer')
        <!-- end Footer -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->


</div>
<!-- END wrapper -->

<!-- Right Sidebar -->
@include('admin.layouts._inc.right-sidebar')

<div class="rightbar-overlay"></div>
<!-- /End-bar -->

@include('admin.layouts._inc.script')
</body>

</html>
