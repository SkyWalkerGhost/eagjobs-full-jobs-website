<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> @yield('siteTitle') </title>

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link rel="stylesheet" href="{{ asset('back/plugins/fontawesome-free/css/all.min.css') }}">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="{{ asset('back/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
        <link rel="stylesheet" href="{{ asset('back/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('back/plugins/jqvmap/jqvmap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('back/css/adminlte.min.css') }}">
        <link rel="stylesheet" href="{{ asset('back/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
        <link rel="stylesheet" href="{{ asset('back/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}">
        <link rel="stylesheet" href="{{ asset('back/plugins/daterangepicker/daterangepicker.css') }}">
        <link rel="stylesheet" href="{{ asset('back/plugins/summernote/summernote-bs4.min.css') }}">
        <link rel="stylesheet" href="{{ asset('back/plugins/select2/css/select2.min.css') }}">
        <link rel="stylesheet" href="{{ asset('back/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">

        <link rel="stylesheet" type="text/css" href="{{ asset('back/css/card.css') }}">


        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>

        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-
         alpha/css/bootstrap.css" rel="stylesheet">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <link rel="stylesheet" type="text/css"
         href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-
         alpha/css/bootstrap.css" rel="stylesheet">

        <script src="//cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        {{-- <link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet"> --}}

        <script src="//cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>


        @livewireStyles


        <style type="text/css">

            @font-face
            {
              font-family: bpg-algeti-webfont;
              src: url({{asset('back/fonts/bpg-algeti-webfont.ttf')}});
            }


            body,h1,h2,h3,h4,h5,h6,div,span,p,ul,li,a
            {
              font-family: bpg-algeti-webfont !important;
            }

        </style>

    </head>

    <body class="hold-transition sidebar-mini layout-fixed sidebar-collapse">

        <div class="wrapper">

            <div class="preloader flex-column justify-content-center align-items-center">
                <img    class="animation__shake"
                        src="{{ asset('back/img/AdminLTELogo.png') }}"
                        alt="AdminLTELogo"
                        height="60"
                        width="60">
            </div>

            @include('admin/assets/header/header')
            @include('admin/assets/sidebar/sidebar')

                @yield('content')

            @include('admin/assets/footer/footer')
        </div>


        @livewireScripts


        <script src="{{ asset('back/plugins/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('back/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('back/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('back/plugins/moment/moment.min.js') }}"></script>
        <script src="{{ asset('back/plugins/daterangepicker/daterangepicker.js') }}"></script>
        <script src="{{ asset('back/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
        <script src="{{ asset('back/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js') }}"></script>
        <script src="{{ asset('back/plugins/summernote/summernote-bs4.min.js') }}"></script>
        <script src="{{ asset('back/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
        <script src="{{ asset('back/plugins/select2/js/select2.full.min.js') }}"></script>
        <script src="{{ asset('back/js/adminlte.js') }}"></script>
        <script src="{{ asset('back/js/pages/dashboard.js') }}"></script>
        <script src="{{ asset('back/js/select.js') }}"></script>

        <script>
            $(function () {
                // Summernote
                $('#summernote').summernote()
            });

            $(function () {
                // Summernote
                $('#summernote2').summernote()
            });

            $(function () {
                // Summernote
                $('#summernote3').summernote()
            });

            $(document).ready(function(){
                $('[data-toggle="tooltip"]').tooltip();   
            });
        </script>

    </body>
</html>
