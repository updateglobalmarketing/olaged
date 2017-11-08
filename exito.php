<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>olaged</title>
	<meta name="description" content="A Responsive HTML Theme" />
	<meta name="keywords" content="html, responsive, theme" />
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
	
  <!-- Nuevas librerias-->
	   	<link rel="shortcut icon" href="images/favicon.ico">

	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link rel="stylesheet" type="text/css" href="css/loader.css"/>
	<link rel="stylesheet" type="text/css" href="3dParty/rs-plugin/css/pi.settings.css"/>
	<link rel="stylesheet" type="text/css" href="css/slider.css"/>
	<link rel="stylesheet" type="text/css" href="css/counters.css"/>
	<link rel="stylesheet" type="text/css" href="css/galleries.css"/>
	<link rel="stylesheet" type="text/css" href="css/images.css"/>
	<link rel="stylesheet" type="text/css" href="css/portfolio.css"/>
	<link rel="stylesheet" type="text/css" href="css/alert-boxes.css"/>
	<link rel="stylesheet" type="text/css" href="css/animations.css"/>
	<link rel="stylesheet" type="text/css" href="3dParty/colorbox/colorbox.css"/>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link rel="stylesheet" href="3dParty/fontello/css/fontello.css"/>
	<!-- CSS -->
	<link rel="stylesheet" href="css1/reset.css" type="text/css" />
	<link rel="stylesheet" href="css1/grid.css" type="text/css" />
	<link rel="stylesheet" href="css1/main.css" type="text/css" />
	<link rel="stylesheet" href="css1/header-footer.css" type="text/css" />
	<link rel="stylesheet" href="css1/elements.css" type="text/css" />
	<link rel="stylesheet" href="css1/responsive.css" type="text/css" />
	<link rel="stylesheet" href="css1/font-awesome.css" type="text/css" />
	<link rel="stylesheet" href="css1/linecons.css" type="text/css" />
	<link rel="stylesheet" href="css1/animate.min.css" type="text/css" />
	
	<!-- Nuevas librerias-->
    
 
</head>
 
<body>
	<!-- HEADER -->
	<header id="site-header" class="dark-header slider-nav bounceInDown animated">
<!-- Header row -->
<div class="pi-section-w pi-section-header-w pi-section-white pi-section-header-lg-w pi-header-row-sticky pi-shadow-bottom">
<div class="pi-section pi-section-header pi-section-header-lg pi-clearfix">

<!-- Logo -->
<div class="pi-header-block pi-header-block-logo">
	<a><img src="images/logo.svg" alt=""></a>
</div>
<!-- End logo -->

<!-- Text -->
<!-- <div class="pi-header-block pi-header-block-txt pi-hidden-2xs">Observatorio Latinoamericano de Gestión y Desarrollo</div> -->
<!-- End text -->

<!-- Menu -->
<?php include("include/navegacion.php"); ?>

<div class="pi-header-block pi-pull-right pi-hidden-lg-only pi-hidden-md-only">
	<button class="btn pi-btn pi-mobile-menu-toggler" data-target="#pi-main-mobile-menu">
		<i class="icon-menu pi-text-center"></i>
	</button>
</div>
<!-- End mobile menu button -->


	<!-- Mobile menu -->
	<?php include("include/navemovil.php");?>
	<!-- End mobile menu -->

</div>
</div>
	</header>
	<!-- HEADER END -->
	
	<div id="slider" class="slidecontainer slider">
        <ul>                
            <li class="bg-red" style="background-image: url(img/slide-10.jpg);">
	            <header style=" padding-top: 200px">
					<div class="title-1">Un asesor especializado te ayudará a la brevedad posible</div>
					<div class="title-2">Gracias por contactarnos</div>
					
					<div class="mar-b-30"></div><!-- GAP -->
					<br>
					<div class="hr-wrap short">
						<div class="hr-left"><hr></div>
						<div class="hr-mid"><i class="fa fa-star"></i></div>
						<div class="hr-right"><hr></div>
					</div>
					<br>
					<div>
						<a class="btn" href="index.html">Volver al Inicio</a>
					</div>
				</header>
			</li>
        </ul>
    </div>
	
<!-- FOOTER -->
	<footer id="site-footer" class="dark-footer" style="background-image: url(http://via.placeholder.com/1500x556)">
		<div class="container"><!-- CONTAINER -->
			<div class="row">
				<div class="col full-width text-center">
					<a href="index.html" class="navbar-brand"><img src="images/footer.svg" alt="Jollymedic"></a>
				</div>
			</div>
			<br>
          <br><br>
			<aside class="row text-center">
				<div class="pi-header-block pi-pull-right pi-hidden-2xs">
			<ul class="pi-social-icons pi-stacked pi-jump pi-full-height pi-bordered  pi-colored-bg clearFix">
				<li><a href="https://www.linkedin.com/uas/login" target="_blank" class="pi-social-icon-linkedin"><i class="icon-linkedin"></i></a></li>
				<li><a href="https://www.facebook.com/" target="_blank" class="pi-social-icon-facebook"><i class="icon-facebook"></i></a></li>
				<li><a href="https://www.youtube.com/" target="_blank" class="pi-social-icon-youtube"><i class="icon-youtube"></i></a></li>
				<li><a href="https://twitter.com/login?lang=es" target="_blank" class="pi-social-icon-twitter"><i class="icon-twitter"></i></a></li>
				
				
			</ul>
		</div>
		<!-- End social icons -->

		<!-- Text -->
		<div class="pi-header-block pi-header-block-txt pi-pull-right pi-hidden-xs">Síguenos en:</div>
			</aside>
		</div><!-- CONTAINER END -->
		
		<a id="totop" href="#top"><i class="fa fa-angle-up"></i></a>
	</footer>
	<!-- FOOTER END -->
	
	<!-- JAVASCRIPT -->
	<script src="js/jquery-1.10.2.js"></script>
	<script src="js/wow.min.js"></script>
	<script>
		"use strict";
		 new WOW().init();
	</script>
	<script src="js/plugins.js"></script>
	<script src="js/modernizr.js"></script>
	<!--[if lt IE 8]>
	<script src="js/ie8.js"></script>
	<![endif]-->
	<script src="js/desoslide.min.js"></script>
	<script>
		$(window).load(function() {
			"use strict";
		    $('#img_gallery1').desoSlide({
			    thumbs: $('ul.thumbs1 li > a'),
			    overlay: 'none'
			});
		});
	</script>
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function() {
			"use strict";
			// PRODUCT SLIDER
			
			$('.product-slider').owlCarousel({
			    center: true,
			    loop: true,
			    margin: 100,
			    items: 2

			});
			
			// MULTI-SLIDER
			var owl1 = $(".multi-slider");
			
			$('.multi-slider').owlCarousel({
			    loop: true,
			    
			    responsive:{
				    1000:{
			            items:5
			        },
			        600:{
			            items:3
			        },
			        360:{
			            items:1
			        }
			    }
			});
			
			$(".multi-slider-nav .next").click(function(){
				owl1.trigger('next.owl');
			})
			$(".multi-slider-nav .prev").click(function(){
				owl1.trigger('prev.owl');
			})
			
			// FOOTER-CAROUSEL
			var owl2 = $("#footer-carousel");
			
			$("#footer-carousel").owlCarousel({
				slideSpeed: 300,
				autoHeight: true,
				loop:true,
				items : 1
			});
		
			
			$(".footer-nav .next").click(function(){
				owl2.trigger('next.owl');
			})
			$(".footer-nav .prev").click(function(){
				owl2.trigger('prev.owl');
			})
		});
	</script>
	<script src="js/event.move.js"></script>
	<script src="js/twentytwenty.js"></script>
	<script>
		$(window).load(function(){
			"use strict";
			$("#container1").twentytwenty();
		});
	</script>
	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function() {
			"use strict";
			$(".rslides").responsiveSlides({
				auto: false,
				speed: 750,
				nav: true,
				prevText: "&#xf104",
				nextText: "&#xf105"
			});
		});
	</script>
	<script src="js/masonry-docs.min.js"></script>
	<script>
		$(function() {
			"use strict";
			var $container = $('.masonry-wrap');
			// initialize Masonry after all images have loaded
			$container.imagesLoaded(function() {
				$container.masonry({
					itemSelector: '.item',
					columnWidth: 1,
				});
			});
		});
	</script>
	<script src="js/view.min9df2.js?auto"></script>
	<script src="js/sudoslider.min.js"></script>
	<script>
		$(document).ready(function(){	
		    "use strict";
		    var sudoSlider = $("#slider").sudoSlider({
			    prevNext: false,
				responsive: true,
		    });
		});
	</script>
</body>
</html>