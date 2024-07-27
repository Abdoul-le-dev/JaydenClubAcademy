<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <title> Tableau de bord </title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description">
        <meta content="MyraStudio" name="author">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.css">
        <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
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

                    @if (session('success'))
                    <div class="card">
                        <div class="card-body">
                            <div class="bg-green-100 border-t-4 border-green-500 rounded-b text-green-900 px-4 py-3 shadow-md mb-5" role="alert">
                                <div class="flex">
                                    <div class="py-1"><svg class="fill-current h-6 w-6 text-green-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                                    <div>

                                    <p class="text-sm Placeholder ">{{ session('success') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endif
                    @if (session('error'))
                    <div class="card">
                        <div class="card-body">
                            <div class="bg-red-100 border-t-4 border-green-500 rounded-b text-green-900 px-4 py-3 shadow-md mb-5" role="alert">
                                <div class="flex">
                                    <div class="py-1"><svg class="fill-current h-6 w-6 text-gred-500 mr-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z"/></svg></div>
                                    <div>

                                    <p class="text-sm Placeholder">{{ session('error') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    @endif

                    @if (count($errors->all())>0)
                    <div class="card">
                        <div class="card-body">
                            @foreach ( $errors->all() as $error  )

                    <div class="flex flex-col justify-start">
                        <li class="Placeholder text-red-400">{{ $error}}</li>
                    </div>

                    @endforeach
                        </div>
                    </div>


                    @endif
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
        <script src="/landing_assets/js/core.min.js"></script>
        <script src="/landing_assets/js/script.js"></script>

    </body>

</html>
