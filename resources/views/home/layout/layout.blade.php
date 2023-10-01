<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Anamabia | Clean Solutions for a Greener Tomorrow.</title> 

    <!-- responsive meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Google Fonts -->

	<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <link href="https://fonts.googleapis.com/css2?family=Catamaran:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400;500;600;700&display=swap" rel="stylesheet">



    <link rel="stylesheet" href="homeassets/css/animate.css">
    <link rel="stylesheet" href="homeassets/css/aos.css">
    <link rel="stylesheet" href="homeassets/css/bootstrap.min.css">
    <link rel="stylesheet" href="homeassets/css/custom-animate.css">
    <link rel="stylesheet" href="homeassets/css/fancybox.min.css">
    <link rel="stylesheet" href="homeassets/css/flaticon.css">
    <link rel="stylesheet" href="homeassets/css/font-awesome.min.css">
    <link rel="stylesheet" href="homeassets/css/icomoon.css">
    <link rel="stylesheet" href="homeassets/css/imp.css">
    <link rel="stylesheet" href="homeassets/css/jquery.bootstrap-touchspin.css">
    <link rel="stylesheet" href="homeassets/css/magnific-popup.css">
    <link rel="stylesheet" href="homeassets/css/nice-select.css">
    <link rel="stylesheet" href="homeassets/css/owl.css">
    <link rel="stylesheet" href="homeassets/css/rtl.css">
    <link rel="stylesheet" href="homeassets/css/scrollbar.css">
    <link rel="stylesheet" href="homeassets/css/swiper.min.css">

    <!-- Module css -->
    <link rel="stylesheet" href="homeassets/css/module-css/header-section.css">
    <link rel="stylesheet" href="homeassets/css/module-css/banner-section.css">
    <link rel="stylesheet" href="homeassets/css/module-css/about-section.css">
    <link rel="stylesheet" href="homeassets/css/module-css/blog-section.css">
    <link rel="stylesheet" href="homeassets/css/module-css/fact-counter-section.css">
    <link rel="stylesheet" href="homeassets/css/module-css/faq-section.css">
    <link rel="stylesheet" href="homeassets/css/module-css/contact-page.css">
    <link rel="stylesheet" href="homeassets/css/module-css/breadcrumb-section.css">
    <link rel="stylesheet" href="homeassets/css/module-css/team-section.css">
    <link rel="stylesheet" href="homeassets/css/module-css/partner-section.css">
    <link rel="stylesheet" href="homeassets/css/module-css/testimonial-section.css">
    <link rel="stylesheet" href="homeassets/css/module-css/services-section.css">
    <link rel="stylesheet" href="homeassets/css/module-css/footer-section.css">

    <link href="homeassets/css/color/theme-color.css" id="jssDefault" rel="stylesheet">
    <link rel="stylesheet" href="homeassets/css/style.css">
    <link rel="stylesheet" href="homeassets/css/responsive.css">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="homeassets/images/anamabialogo.png">
    <link rel="icon" type="image/png" href="homeassets/images/anamabialogo.png" sizes="32x32">
    <link rel="icon" type="image/png" href="homeassets/images/anamabialogo.png" sizes="16x16">

    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="homeassets/js/html5shiv.js"></script>
    <![endif]-->

</head>


<body>

    <div class="boxed_wrapper ltr">

        <!-- Preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">Preloader Close</div>
            </div>
            <div class="layer layer-one"><span class="overlay"></span></div>
            <div class="layer layer-two"><span class="overlay"></span></div>
            <div class="layer layer-three"><span class="overlay"></span></div>
        </div>
	<!-- 
			=============================================
				Theme Header Two
			============================================== 
			-->
			<!-- partial:partials/_navbar.html -->
      @include('home.layout.header')
      <!-- partial -->

			
			<!-- 
			=============================================
				Theme Main Banner
			============================================== 
			-->
			@yield('content')
			<!--
			=====================================================
				Footer
			=====================================================
			-->
			<!-- partial:partials/_footer.html -->
      @include('home.layout.footer')
        <!-- partial -->
 
	
	 
	
	<script src="homeassets/js/jquery.js"></script>
    <script src="homeassets/js/aos.js"></script>
    <script src="homeassets/js/appear.js"></script>
    <script src="homeassets/js/bootstrap.bundle.min.js"></script>
    <script src="homeassets/js/isotope.js"></script>
    <script src="homeassets/js/jquery.bootstrap-touchspin.js"></script>
    <script src="homeassets/js/jquery.countTo.js"></script>
    <script src="homeassets/js/jquery.easing.min.js"></script>
    <script src="homeassets/js/jquery.event.move.js"></script>
    <script src="homeassets/js/jquery.fancybox.js"></script>
    <script src="homeassets/js/jquery.magnific-popup.min.js"></script>
    <script src="homeassets/js/jquery.nice-select.min.js"></script>
    <script src="homeassets/js/jquery.paroller.min.js"></script>
    <script src="homeassets/js/jquery-sidebar-content.js"></script>
    <script src="homeassets/js/knob.js"></script>
    <script src="homeassets/js/map-script.js"></script>
    <script src="homeassets/js/owl.js"></script>
    <script src="homeassets/js/pagenav.js"></script>
    <script src="homeassets/js/scrollbar.js"></script>
    <script src="homeassets/js/swiper.min.js"></script>
    <script src="homeassets/js/tilt.jquery.js"></script>
    <script src="homeassets/js/TweenMax.min.js"></script>
    <script src="homeassets/js/validation.js"></script>
    <script src="homeassets/js/wow.js"></script>

    <script src="homeassets/js/jquery-1color-switcher.min.js"></script>

    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyATY4Rxc8jNvDpsK8ZetC7JyN4PFVYGCGM&callback=initMap">
    </script>

    <!-- thm custom script -->
    <script src="homeassets/js/custom.js"></script>



</body>

</html>