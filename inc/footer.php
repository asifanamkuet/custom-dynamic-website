<!-- Footer -->
		<footer class="footer" style="background-image:url('img/map.png')">
			<!-- Footer Top -->
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-12">
							<!-- Footer About -->		
							<div class="single-widget footer-about widget">	
								<div class="logo">
									<div class="img-logo">
										<a class="logo" href="index.php">
											<img class="img-responsive" src="img/logo.png" alt="logo" style="height: 60px;">
										</a>
									</div>
								</div>
								<div class="footer-widget-about-description">
									<p><?php echo get_data_site_info('slogan', 'site_info'); ?></p>
								</div>	
								<div class="social">
									<!-- Social Icons -->
									<ul class="social-icons">
										<li><a href="<?php echo get_data_site_info('facebook' , 'site_info'); ?>"><i class="fa fa-facebook"></i></a></li>
										<li><a href="<?php echo get_data_site_info('youtube' , 'site_info'); ?>"><i class="fa fa-youtube"></i></a></li>
										<li><a href="<?php echo get_data_site_info('linkedin' , 'site_info'); ?>"><i class="fa fa-linkedin"></i></a></li>
										<li><a href="<?php echo get_data_site_info('instagram' , 'site_info'); ?>"><i class="fa fa-instagram"></i></a></li>
									</ul>
								</div>
								<div class="button"><a href="about.php" class="bizwheel-btn">About Us</a></div>
							</div>		
							<!--/ End Footer About -->		
						</div>
						<div class="col-lg-2 col-md-6 col-12">
							<!-- Footer Links -->		
							<div class="single-widget f-link widget">
								<h3 class="widget-title">Company</h3>
								<ul>
									<li><a href="about.php">About Us</a></li>
									<li><a href="services.php">Our Services</a></li>
									<li><a href="portfolio.php">Portfolio</a></li>
									<li><a href="blog.php">Blog</a></li>
									<li><a href="contact.php">Contact us</a></li>
								</ul>
							</div>			
							<!--/ End Footer Links -->			
						</div>
						<div class="col-lg-4 col-md-6 col-12">
							<!-- Footer News -->
							<div class="single-widget footer-news widget">	
								<h3 class="widget-title">Blog Page</h3>
								<!-- Single News -->
								<div class="single-f-news">
									<div class="post-thumb"><a href="#"><img src="<?php echo $url.'/img/bg/'.get_item_details("blog_cover","0","blog"); ?>" alt="#"></a></div>
									<div class="content">
										<p class="post-meta"><time class="post-date"><i class="fa fa-clock-o"></i><?php echo get_item_details("date","0","blog"); ?></time></p>
										<h4 class="title"><a href="#"><?php echo get_item_details("title","0","blog"); ?></a></h4>
									</div>
								</div>
								<!--/ End Single News -->
								<!-- Single News -->
								<div class="single-f-news">
									<div class="post-thumb"><a href="#"><img src="<?php echo $url.'/img/bg/'.get_item_details("blog_cover","1","blog"); ?>" alt="#"></a></div>
									<div class="content">
										<p class="post-meta"><time class="post-date"><i class="fa fa-clock-o"></i><?php echo get_item_details("date","1","blog"); ?></time></p>
										<h4 class="title"><a href="#"><?php echo get_item_details("title","1","blog"); ?></a></h4>
									</div>
								</div>
								<!--/ End Single News -->
							</div>			
							<!--/ End Footer News -->			
						</div>
						<div class="col-lg-3 col-md-6 col-12">	
							<!-- Footer Contact -->		
							<div class="single-widget footer_contact widget">	
								<h3 class="widget-title">Contact</h3>
								<p><?php echo get_data_site_info('short_description', 'site_info'); ?></p>
								<ul class="address-widget-list">
									<li class="footer-mobile-number"><i class="fa fa-phone"></i><?php echo get_data_site_info('phone' , 'site_info'); ?></li>
									<li class="footer-mobile-number"><i class="fa fa-envelope"></i><?php echo get_data_site_info('email' , 'site_info'); ?></li>
									<li class="footer-mobile-number"><i class="fa fa-map-marker"></i><?php echo get_data_site_info('address' , 'site_info'); ?></li>
								</ul>
							</div>		
							<!--/ End Footer Contact -->						
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
							<!-- Footer Newsletter -->
							<div class="footer-newsletter">
								<form action="#" method="post" class="newsletter-area">
									<input type="email" placeholder="Your email address">
									<button type="submit">Sign Up</button>
								</form>
							</div>
							<!--/ End Footer Newsletter -->
						</div>
					</div>
				</div>
			</div>
			<!-- Copyright -->
			<div class="copyright">
				<div class="container">
					<div class="row">
						<div class="col-12">
							<div class="copyright-content">
								<!-- Copyright Text -->
								<p>© Design &amp; Development By <a target="_blank" href="#">BlueFin</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--/ End Copyright -->
		</footer>
		
		<!-- Jquery JS -->
		<script src="js/jquery.min.js"></script>
		<script src="js/jquery-migrate-3.0.0.js"></script>
		<!-- Popper JS -->
		<script src="js/popper.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Modernizr JS -->
		<script src="js/modernizr.min.js"></script>
		<!-- ScrollUp JS -->
		<script src="js/scrollup.js"></script>
		<!-- FacnyBox JS -->
		<script src="js/jquery-fancybox.min.js"></script>
		<!-- Cube Portfolio JS -->
		<script src="js/cubeportfolio.min.js"></script>
		<!-- Slick Nav JS -->
		<script src="js/slicknav.min.js"></script>
		<!-- Slick Nav JS -->
		<script src="js/slicknav.min.js"></script>
		<!-- Slick Slider JS -->
		<script src="js/owl-carousel.min.js"></script>
		<!-- Easing JS -->
		<script src="js/easing.js"></script>
		<!-- Magnipic Popup JS -->
		<script src="js/magnific-popup.min.js"></script>
		<!-- Active JS -->
		<script src="js/active.js"></script>
	</body>
</html>