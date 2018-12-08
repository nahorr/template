
<!DOCTYPE html>
<html dir="ltr" lang="zxx">

  <head>
    <meta charset="utf-8">
    <title>The Project | Home</title>
    <meta name="description" content="The Project a Bootstrap-based, Responsive HTML5 Template">
    <meta name="author" content="author">
    <meta name="robots" content="noimageindex">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('tproject/images/favicon.ico') }}">

    <!-- Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('tproject/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link href="{{ asset('tproject/fonts/font-awesome/css/font-awesome.css') }}" rel="stylesheet">

    <!-- Plugins -->
    <link href="{{ asset('tproject/plugins/magnific-popup/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('tproject/plugins/rs-plugin-5/css/settings.css') }}" rel="stylesheet">
    <link href="{{ asset('tproject/plugins/rs-plugin-5/css/layers.css') }}" rel="stylesheet">
    <link href="{{ asset('tproject/plugins/rs-plugin-5/css/navigation.css') }}" rel="stylesheet">
    <link href="{{ asset('tproject/css/animations.css') }}" rel="stylesheet">
    <link href="{{ asset('tproject/plugins/slick/slick.css') }}" rel="stylesheet">
    
    <!-- The Project's core CSS file -->
    <!-- Use css/rtl_style.css for RTL version -->
    <link href="{{ asset('tproject/css/style.css') }}" rel="stylesheet" >
    <!-- The Project's Typography CSS file, includes used fonts -->
    <!-- Used font for body: Roboto -->
    <!-- Used font for headings: Raleway -->
    <!-- Use css/rtl_typography-default.css for RTL version -->
    <link href="{{ asset('tproject/css/typography-default.css') }}" rel="stylesheet" >
    <!-- Color Scheme (In order to change the color scheme, replace the blue.css with the color scheme that you prefer) -->
    <link href="{{ asset('tproject/css/skins/light_blue.css') }}" data-style="styles-no-cookie" rel="stylesheet">
    <link href="{{ asset('tproject/style-switcher/style-switcher.css') }}" rel="stylesheet">

    <!-- Custom css -->
    <link href="{{ asset('tproject/css/custom.css') }}" rel="stylesheet">
    
  </head>

  <!-- body classes:  -->
  <!-- "boxed": boxed layout mode e.g. <body class="boxed"> -->
  <!-- "pattern-1 ... pattern-9": background patterns for boxed layout mode e.g. <body class="boxed pattern-1"> -->
  <!-- "transparent-header": makes the header transparent and pulls the banner to top -->
  <!-- "gradient-background-header": applies gradient background to header -->
  <!-- "page-loader-1 ... page-loader-6": add a page loader to the page (more info @components-page-loaders.html) -->
  <body class="">

    <!-- scrollToTop -->
    <!-- ================ -->
    <div class="scrollToTop circle"><i class="fa fa-angle-up"></i></div>

    <!-- page wrapper start -->
    <!-- ================ -->
    @yield('content')
    <!-- page-wrapper end -->

    <!-- JavaScript files placed at the end of the document so the pages load faster -->
    <!-- ================================================== -->
    <!-- Jquery and Bootstap core js files -->
    <script src="{{ asset('tproject/plugins/jquery.min.js') }}"></script>
    <script src="{{ asset('tproject/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- jQuery Revolution Slider  -->
    <script src="{{ asset('tproject/plugins/rs-plugin-5/js/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('tproject/plugins/rs-plugin-5/js/jquery.themepunch.revolution.min.js') }}"></script>
    <!-- Isotope javascript -->
    <script src="{{ asset('tproject/plugins/isotope/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('tproject/plugins/isotope/isotope.pkgd.min.js') }}"></script>
    <!-- Magnific Popup javascript -->
    <script src="{{ asset('tproject/plugins/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <!-- Appear javascript -->
    <script src="{{ asset('tproject/plugins/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('tproject/plugins/waypoints/sticky.min.js') }}"></script>
    <!-- Count To javascript -->
    <script src="{{ asset('tproject/plugins/countTo/jquery.countTo.js') }}"></script>
    <!-- Slick carousel javascript -->
    <script src="{{ asset('tproject/plugins/slick/slick.min.js') }}"></script>
    <!-- Initialization of Plugins -->
    <script src="{{ asset('tproject/js/template.js') }}"></script>
    <!-- Custom Scripts -->
    <script src="{{ asset('tproject/js/custom.js') }}"></script>
  

  </body>
</html>
