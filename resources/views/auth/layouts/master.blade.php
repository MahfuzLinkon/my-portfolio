<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8" />
        <title>Linkon'sYard | @yield('title') </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('/') }}admin/assets/images/favicon.ico">
        
        <!-- App css -->
        <link href="{{ asset('/') }}admin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('/') }}admin/assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style"/>

    </head>
    
    <body class="loading authentication-bg" data-layout-config='{"darkMode":false}'>

        @yield('content')
        <!-- end page -->

        <footer class="footer footer-alt">
            2018 - <script>document.write(new Date().getFullYear())</script> © Hyper - Coderthemes.com
        </footer>

        <!-- bundle -->
        <script src="{{ asset('/') }}admin/assets/js/vendor.min.js"></script>
        <script src="{{ asset('/') }}admin/assets/js/app.min.js"></script>
        
    </body>

<!-- Mirrored from coderthemes.com/hyper/saas/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 29 May 2022 14:58:28 GMT -->
</html>
