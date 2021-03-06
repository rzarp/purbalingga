<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Aria is a business focused HTML landing page template built with Bootstrap to help you create lead generation websites for companies and their services.">
    <meta name="author" content="Inovatik">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="" /> <!-- website name -->
	<meta property="og:site" content="" /> <!-- website link -->
	<meta property="og:title" content=""/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Purbalingga - Beranda</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600&display=swap&subset=latin-ext" rel="stylesheet">
    <link href="{{asset('dashboard/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/css/fontawesome-all.css')}}" rel="stylesheet">
    <link href="{{asset('dashboard/css/swiper.css')}}" rel="stylesheet">
	<link href="{{asset('dashboard/css/magnific-popup.css')}}" rel="stylesheet">
	<link href="{{asset('dashboard/css/styles.css')}}" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="images/favicon.png">
</head>
<body data-spy="scroll" data-target=".fixed-top">
    
    <!-- Preloader -->
	<div class="spinner-wrapper">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>
    <!-- end of preloader -->
    

    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-dark navbar-custom fixed-top">
        @include('dashboard-master.navbar')
    </nav> <!-- end of navbar -->
    <!-- end of navbar -->


   @yield('content')
   
    <!-- Footer -->
    <div class="footer">
        @include('dashboard-master.footer')
    </div> <!-- end of footer -->  
    <!-- end of footer -->


    <!-- Copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="p-small">Copyright © 2021 <a href="#">Purbalingga</a></p>
                </div> <!-- end of col -->
            </div> <!-- enf of row -->
        </div> <!-- end of container -->
    </div> <!-- end of copyright --> 
    <!-- end of copyright -->
    
    	
    <!-- Scripts -->
    <script src="{{asset('dashboard/js/jquery.min.js')}}"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="{{asset('dashboard/js/popper.min.js')}}"></script> <!-- Popper tooltip library for Bootstrap -->
    <script src="{{asset('dashboard/js/bootstrap.min.js')}}"></script> <!-- Bootstrap framework -->
    <script src="{{asset('dashboard/js/jquery.easing.min.js')}}"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="{{asset('dashboard/js/swiper.min.js')}}"></script> <!-- Swiper for image and text sliders -->
    <script src="{{asset('dashboard/js/jquery.magnific-popup.js')}}"></script> <!-- Magnific Popup for lightboxes -->
    <script src="{{asset('dashboard/js/morphext.min.js')}}"></script> <!-- Morphtext rotating text in the header -->
    <script src="{{asset('dashboard/js/isotope.pkgd.min.js')}}"></script> <!-- Isotope for filter -->
    <script src="{{asset('dashboard/js/validator.min.js')}}"></script> <!-- Validator.js - Bootstrap plugin that validates forms -->
    <script src="{{asset('dashboard/js/scripts.js')}}"></script> <!-- Custom scripts -->
</body>
</html>