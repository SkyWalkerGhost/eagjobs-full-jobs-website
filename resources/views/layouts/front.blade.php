<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title> @yield('siteTitle') </title>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('front/img/favicon.ico') }}">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="" />
        <meta name="keywords" content="" />

        <link rel="stylesheet" href="{{ asset('front/css/custom-bs.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/jquery.fancybox.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/bootstrap-select.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front/fonts/icomoon/style.css') }}">
        <link rel="stylesheet" href="{{ asset('front/fonts/line-icons/style.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/mystyle.css') }}">
        <link rel="stylesheet" href="{{ asset('front/css/animate_text.css') }}">
        <link rel="stylesheet" href="{{ asset('back/plugins/summernote/summernote-bs4.min.css') }}">
        <link rel="stylesheet" href="{{ asset('back/plugins/summernote/summernote-bs4.min.css') }}">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" />

        <link rel="stylesheet" href="OwlCarousel2/docs/assets/owlcarousel/assets/owl.carousel.min.css">
        <link rel="stylesheet" href="OwlCarousel2/docs/assets/owlcarousel/assets/owl.theme.default.min.css">
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

        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
        
        @livewireStyles

        <style type="text/css">

            @font-face
            {
              font-family: bpg-algeti-webfont;
              src: url({{asset('front/fonts/bpg-algeti-webfont.ttf')}});
            }


            body,h1,h2,h3,h4,h5,h6,div,span,p,ul,li,a
            {
              font-family: bpg-algeti-webfont !important;
            }

        </style>

    </head>

    <body id="top" ng-app="app">

        <div id="overlayer"></div>
        <div class="loader">
            <div class="spinner-border text-primary" style="color: #34ca27 !important;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>

        <div class="site-wrap">

            <div class="site-mobile-menu site-navbar-target">
                <div class="site-mobile-menu-header">
                    <div class="site-mobile-menu-close mt-3">
                        <span class="icon-close2 js-menu-toggle"></span>
                    </div>
                </div>
                <div class="site-mobile-menu-body"></div>
            </div>

            @include('front.component.header')

            @yield('content')

            @include('front.component.footer')
        </div>

        @livewireScripts

        <script src="{{ asset('front/js/jquery.min.js') }}"></script>
        <script src="{{ asset('front/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('front/js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('front/js/stickyfill.min.js') }}"></script>
        <script src="{{ asset('front/js/jquery.fancybox.min.js') }}"></script>
        <script src="{{ asset('front/js/jquery.easing.1.3.js') }}"></script>
        <script src="{{ asset('front/js/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('front/js/jquery.animateNumber.min.js') }}"></script>
        <script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('front/js/bootstrap-select.min.js') }}"></script>
        <script src="{{ asset('front/js/custom.js') }}"></script>
        <script src="{{ asset('back/plugins/summernote/summernote-bs4.min.js') }}"></script>

        <script>
            $(function () {
                // Summernote 1
                $("#summernote").summernote({
                    height: 200,
                    toolbar: [
                        [ 'style', [ 'style' ] ],
                        [ 'font', [ 'bold'] ],
                        [ 'fontname', [ '' ] ],
                        [ 'fontsize', [ 'fontsize' ] ],
                        [ 'color', [ '' ] ],
                        [ 'para', [ 'ol', 'ul', 'paragraph', 'height' ] ],
                        [ 'table', [ '' ] ],
                        [ 'insert', [ ''] ],
                        [ 'view', [ '', '', 'fullscreen', '' ] ]
                    ]
                });
            });

            $(function () {
                // Summernote 2
                $("#summernote2").summernote({
                    height: 200,
                    toolbar: [
                        [ 'style', [ 'style' ] ],
                        [ 'font', [ 'bold'] ],
                        [ 'fontname', [ '' ] ],
                        [ 'fontsize', [ 'fontsize' ] ],
                        [ 'color', [ '' ] ],
                        [ 'para', [ 'ol', 'ul', 'paragraph', 'height' ] ],
                        [ 'table', [ '' ] ],
                        [ 'insert', [ ''] ],
                        [ 'view', [ '', '', 'fullscreen', '' ] ]
                    ]
                });
            });



            $(function () {
                // Summernote 3
                $('#summernote3').summernote()
            });

            $(document).ready(function(){
                $('[data-toggle="tooltip"]').tooltip();   
            });

        </script>

        <script type="text/javascript">
    
        $(document).ready(function() {
          
            var owl = $('.owl-carousel');
                owl.owlCarousel({
                items: 5,
                loop: true,
                margin: 10,
                autoplay: true,
                autoplayTimeout: 2000,
                autoplayHoverPause: true
            });
          
            $('.play').on('click', function() {
                owl.trigger('play.owl.autoplay', [2000])
            })
        
            $('.stop').on('click', function() {
                owl.trigger('stop.owl.autoplay')
            })

        })
    </script>


    </body>
</html>
