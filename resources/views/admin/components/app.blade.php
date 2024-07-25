<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <title> Tableau de bord </title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
        <meta content="MyraStudio" name="author">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- App favicon -->
        <link rel="shortcut icon" href="/admin_assets/assets/images/favicon.ico">

        <!-- App css -->
        <link href="/admin_assets/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="/admin_assets/assets/css/icons.min.css" rel="stylesheet" type="text/css">
        <link href="/admin_assets/assets/css/theme.min.css" rel="stylesheet" type="text/css">
        <script src="https://cdn.tailwindcss.com"></script>
        @yield('page_css')

    </head>

    <body>

        <!-- Begin page -->
        <div id="layout-wrapper">
            <div class="header-border"></div>
             @include('admin.components.layouts.header')

            <!-- ========== Left Sidebar Start ========== -->
            @include('admin.components.layouts.sidebar')
            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    @yield('page_content')
                </div>
                <!-- End Page-content -->

                @include('admin.components.layouts.footer')

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->

        <!-- Overlay-->
        <div class="menu-overlay"></div>


        <!-- jQuery  -->
        <script src="/admin_assets/assets/js/jquery.min.js"></script>
        <script src="/admin_assets/assets/js/bootstrap.bundle.min.js"></script>
        <script src="/admin_assets/assets/js/metismenu.min.js"></script>
        <script src="/admin_assets/assets/js/waves.js"></script>
        <script src="/admin_assets/assets/js/simplebar.min.js"></script>


        <!-- Sparkline Js-->
        <script src="/admin_assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>

        <!-- Chart Js-->
        <script src="/admin_assets/plugins/jquery-knob/jquery.knob.min.js"></script>

        <!-- Chart Custom Js-->
        <script src="/admin_assets/assets/pages/knob-chart-demo.js"></script>


        <!-- Morris Js-->
        <script src="/admin_assets/plugins/morris-js/morris.min.js"></script>

        <!-- Raphael Js-->
        <script src="/admin_assets/plugins/raphael/raphael.min.js"></script>

        <!-- Custom Js -->
        <script src="/admin_assets/assets/pages/dashboard-demo.js"></script>
        @yield('page_script')

        <!-- App js -->
        <script src="/admin_assets/assets/js/theme.js"></script>
        <script src="/landing_assets/js/Abdoul/upluoad.js"></script>
        <script src="/landing_assets/js/Abdoul/blog.js"></script>
        <script src="/landing_assets/js/Abdoul/update.js"></script>

    </body>

</html>
