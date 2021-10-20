<!DOCTYPE html>
<html dir="ltr" lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta
        name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template"
        />
        <meta
        name="description"
        content="Matrix Admin Lite Free Version is powerful and clean admin dashboard template, inpired from Bootstrap Framework"
        />
        <meta name="robots" content="noindex,nofollow" />
        <title>@yield('title', 'SISTEMA') | SISTEMA</title>
        <!-- Favicon icon -->
        <link
        rel="icon"
        type="image/png"
        sizes="16x16"
        href="{{asset('img/back/favicon.png')}}"
        />
        <!-- Custom CSS -->
        @yield('css')
        @yield('style')
        <link href="{{asset('assets/back/css/style.min.css')}}" rel="stylesheet" />
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="main-wrapper">
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
            <!-- Preloader - style you can find in spinners.css -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Login box.scss -->
            <!-- ============================================================== -->
            <div class="auth-wrapper d-flex no-block justify-content-center align-items-center bg-dark">
                @yield('content')
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- All Required js -->
        <!-- ============================================================== -->
        <script src="{{asset('assets/back/libs/jquery/dist/jquery.min.js')}}"></script>
        <!-- Bootstrap tether Core JavaScript -->
        <script src="{{asset('assets/back/libs/popper.js/dist/umd/popper.min.js')}}"></script>
        <script src="{{asset('assets/back/libs/bootstrap/dist/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('assets/back/libs/jquery-validation/dist/jquery.validate.min.js')}}"></script>
        <script src="{{asset('assets/back/libs/jquery-validation/localization/messeges_es.min.js')}}"></script>
         <!-- ============================================================== -->
        <!-- This page plugin js -->
        <!-- ============================================================== -->
        <script>
            $('[data-toggle="tooltip"]').tooltip();
            $(".preloader").fadeOut();
            // ============================================================== 
            // Login and Recover Password 
            // ============================================================== 
            $('#to-recover').on("click", function() {
                $("#loginform").slideUp();
                $("#recoverform").fadeIn();
            });
            $('#to-login').click(function(){
                
                $("#recoverform").hide();
                $("#loginform").fadeIn();
            });
        </script>
    </body>
</html>