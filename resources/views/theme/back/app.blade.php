<!DOCTYPE html>
<html dir="ltr" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset("assets/back/images/favicon.png")}}">
        <title>@yield('titulo', 'Dashboard') | Nuestro-Blog</title>
        <!-- Custom CSS -->
        <!-- Custom CSS -->
        <link href="{{asset("assets/back/css/style.min.css")}}" rel="stylesheet">
        <!--CSS Dinámico-->
        @yield("styles")
        <link href="{{asset("assets/back/css/nuestro-blog.css")}}" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    </head>
    <body>
        <!-- ============================================================== -->
        <!-- Preloader - style you can find in spinners.css -->
        <!-- ============================================================== -->
        <div class="preloader">
            <div class="lds-ripple">
                <div class="lds-pos"></div>
                <div class="lds-pos"></div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- Main wrapper - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <div id="main-wrapper">
            <!-- ============================================================== -->
            <!-- Topbar header - style you can find in pages.scss -->
            <!-- ============================================================== -->
            @include('theme.back.top_header')
            <!-- ============================================================== -->
            <!-- End Topbar header -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            @include('theme.back.aside')
            <!-- ============================================================== -->
            <!-- End Left Sidebar - style you can find in sidebar.scss  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Page wrapper  -->
            <!-- ============================================================== -->
            <div class="page-wrapper">
                <!-- ============================================================== -->
                <!-- Container fluid  -->
                <!-- ============================================================== -->
                <div class="container-fluid">
                @yield('contenido')
                </div>
                <!-- ============================================================== -->
                <!-- End Container fluid  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
                @include('theme.back.footer')
                <!-- ============================================================== -->
                <!-- End footer -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Page wrapper  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <script src="{{asset("assets/back/libs/jquery/dist/jquery.min.js")}}"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="{{asset("assets/back/libs/popper.js/dist/umd/popper.min.js")}}"></script>
        <script src="{{asset("assets/back/libs/bootstrap/dist/js/bootstrap.min.js")}}"></script>
        <script src="{{asset("assets/back/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js")}}"></script>
        <script src="{{asset("assets/back/extra-libs/sparkline/sparkline.js")}}"></script>
        <!--Wave Effects -->
        <script src="{{asset("assets/back/js/waves.js")}}"></script>
        <!--Menu sidebar -->
        <script src="{{asset("assets/back/js/sidebarmenu.js")}}"></script>
        <!--Plugins-->
        <script src="{{asset("assets/back/libs/jquery-validation/dist/jquery.validate.min.js")}}"></script>
        <script src="{{asset("assets/back/libs/jquery-validation/dist/localization/messages_es.js")}}"></script>
        <script src="{{asset("assets/back/libs/jquery.flot.tooltip/js/jquery.flot.tooltip.min.js")}}"></script>
        <script src="{{asset("assets/back/libs/jquery.flot.tooltip/js/jquery.flot.tooltip.source.js")}}"></script>
        <!--Plugins de páginas específicas -->
        @yield('scriptsPlugins')
        <!--Scripts de páginas específicas-->
        @yield('scripts')
        <!--Custom JavaScript-->
        <script src="{{asset("assets/back/js/custom.min.js")}}"></script>
        <script src="{{asset("assets/back/js/nuestro-blog.js")}}"></script>
    </body>

</html
