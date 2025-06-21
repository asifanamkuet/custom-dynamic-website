<?php 
require('inc/config.php');
if (isset($_GET['id'])) {
	if (!is_numeric($_GET['id'])) {
		die("Hacking attempt IP address is stored!!");
}
}

?>
<!DOCTYPE html>
<html lang="zxx">
	<head>
		<!-- Meta Tag -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name='copyright' content='pavilan'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
		<!-- Title Tag  -->
		<title><?php echo get_data_site_info('title', 'site_info'); ?></title>
		
		<link rel="icon" type="image/png" href="favicon/favicon-96x96.png" sizes="96x96" />
		<link rel="icon" type="image/svg+xml" href="favicon/favicon.svg" />
		<link rel="shortcut icon" href="favicon/favicon.ico" />
		<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png" />
		<meta name="apple-mobile-web-app-title" content="Bluefin" />
		<link rel="manifest" href="favicon/site.webmanifest" />


		
		<!-- Web Font -->
		<link href="css/css2.css" rel="stylesheet">
		
		<!-- Bizwheel Plugins CSS -->
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/cubeportfolio.min.css">
		<link rel="stylesheet" href="css/font-awesome.css">
		<link rel="stylesheet" href="css/jquery.fancybox.min.css">
		<link rel="stylesheet" href="css/magnific-popup.min.css">
		<link rel="stylesheet" href="css/owl-carousel.min.css">
		<link rel="stylesheet" href="css/slicknav.min.css">

		<!-- Bizwheel Stylesheet -->  
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/responsive.css">
		
		<!-- Bizcord Colors -->
		<!--<link rel="stylesheet" href="css/skins/skin-1.css">
		<!--<link rel="stylesheet" href="css/skins/skin-2.css">-->
		<!--<link rel="stylesheet" href="css/skins/skin-3.css">-->
		<!--<link rel="stylesheet" href="css/skins/skin-4.css">-->
		
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
        <!--Start of Tawk.to Script-->
	</head>
	<body id="bg">
	
		<!-- Boxed Layout -->
		<div id="page" class="site boxed-layout"> 
		
		<!-- Preloader -->
		<div class="preeloader">
			<div class="preloader-spinner"></div>
		</div>
		<!--/ End Preloader -->
	
		<!-- Header -->
		<header class="header">
			<!-- Topbar -->
			<div class="topbar">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-12">
							<!-- Top Contact -->
							<div class="top-contact">
								<div class="single-contact"><i class="fa fa-phone"></i><?php echo get_data_site_info('phone' , 'site_info'); ?></div> 
								<div class="single-contact"><i class="fa fa-envelope-open"></i><?php echo get_data_site_info('email' , 'site_info'); ?></div>	
							</div>
							<!-- End Top Contact -->
						</div>	
						<div class="col-lg-4 col-12">
							<div class="topbar-right">
								<!-- Social Icons -->
								<ul class="social-icons">
									<li><a href="<?php echo get_data_site_info('facebook' , 'site_info'); ?>"><i class="fa fa-facebook"></i></a></li>
									<li><a href="<?php echo get_data_site_info('youtube' , 'site_info'); ?>"><i class="fa fa-youtube"></i></a></li>
									<li><a href="<?php echo get_data_site_info('linkedin' , 'site_info'); ?>"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="<?php echo get_data_site_info('instagram' , 'site_info'); ?>"><i class="fa fa-instagram"></i></a></li>
								</ul>															
								<div class="button">
									<a href="contact.php" class="bizwheel-btn">Get a Quotation</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Topbar -->
			<!-- Middle Header -->
			<div class="middle-header">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="middle-inner">
								<div class="row">
									<div class="col-lg-2 col-md-3 col-12">
										<!-- Logo -->
										<div class="logo">
											<!-- Image Logo -->
											<div class="img-logo">
												<a href="index.php">
													<img src="img/logo.png" alt="#" style="height: 35px; margin-top: -8px;">
												</a>
											</div>
										</div>								
										<div class="mobile-nav"></div>
									</div>
									<div class="col-lg-10 col-md-9 col-12">
										<div class="menu-area">
											<!-- Main Menu -->
											<nav class="navbar navbar-expand-lg">
												<div class="navbar-collapse">	
													<div class="nav-inner">	
														<div class="menu-home-menu-container">
															<!-- Naviagiton -->
															<ul id="nav" class="nav main-menu menu navbar-nav">
																<li><a href="index.php">Home</a></li>
																<li><a href="about.php">About Us</a>
																<li><a href="services.php">Our Services</a></li>
																<li><a href="portfolio.php">Our Portfolio</a></li>
																<li><a href="blog.php">Blog</a>
																</li>
																<li><a href="contact.php">Contact Us</a></li>
															</ul>
															<!--/ End Naviagiton -->
														</div>
													</div>
												</div>
											</nav>
											<!--/ End Main Menu -->	
											<!-- Right Bar -->
											<div class="right-bar">
												<!-- Search Bar -->
												<ul class="right-nav">
													<li class="top-search"><a href="#0"><i class="fa fa-search"></i></a></li>
													<li class="bar"><a class="fa fa-bars"></a></li>
												</ul>
												<!--/ End Search Bar -->
												<!-- Search Form -->
												<div class="search-top">
													<form action="#" class="search-form" method="get">
														<input type="text" name="s" value="" placeholder="Search here"/>
														<button type="submit" id="searchsubmit"><i class="fa fa-search"></i></button>
													</form>
												</div>
												<!--/ End Search Form -->
											</div>	
											<!--/ End Right Bar -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Middle Header -->
			<!-- Sidebar Popup -->
			<div class="sidebar-popup">
				<div class="cross">
					<a class="btn"><i class="fa fa-close"></i></a>
				</div>
				<div class="single-content">
					<h4>Bizcord Digital</h4>
					<p><?php echo get_data_site_info('short_description' , 'site_info'); ?></p>
					<!-- Social Icons -->
					<ul class="social">
						<li><a href="<?php echo get_data_site_info('facebook', 'site_info'); ?>"><i class="fa fa-facebook"></i></a></li>
						<li><a href="<?php echo get_data_site_info('youtube', 'site_info'); ?>"><i class="fa fa-youtube"></i></a></li>
						<li><a href="<?php echo get_data_site_info('linkedin', 'site_info'); ?>"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="<?php echo get_data_site_info('instagram' , 'site_info'); ?>"><i class="fa fa-instagram"></i></a></li>
					</ul>
				</div>
				<div class="single-content">
					<h4>Important Links</h4>   
					<ul class="links">
						<li><a href="about.php">About Us</a></li>
						<li><a href="services.php">Our Services</a></li>
						<li><a href="portfolio.php">Portfolio</a></li>
						<li><a href="blog.php">Blog & News</a></li>
						<li><a href="contact.php">Contact us</a></li>
					</ul>
				</div>	
			</div>
			<!--/ Sidebar Popup -->	
		</header>
		<!--/ End Header -->