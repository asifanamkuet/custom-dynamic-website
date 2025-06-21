<?php 
require('inc/header.php');
?>
		<!-- Breadcrumb -->
		<div class="breadcrumbs overlay" style="background-image:url('img/bg/6624547.png')">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bread-inner">
							<!-- Bread Menu -->
							<div class="bread-menu">
								<ul>
									<li><a href="index.php">Home</a></li>
									<li><a href="contact.php">Contact</a></li>
								</ul>
							</div>
							<!-- Bread Title -->
							<div class="bread-title"><h2>Our Address</h2></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Breadcrumb -->
		
		<!-- Contact Us -->
		<section class="contact-us section-space">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 col-md-7 col-12">
						<!-- Contact Form -->
						<div class="contact-form-area m-top-30">
							<h4>Get In Touch</h4>
							<form class="form" method="post" action="mail/mail.html">
								<div class="row">
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<div class="icon"><i class="fa fa-user"></i></div>
											<input type="text" name="first_name" placeholder="First Name">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<div class="icon"><i class="fa fa-user"></i></div>
											<input type="text" name="last_name" placeholder="Last Name">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<div class="icon"><i class="fa fa-envelope"></i></div>
											<input type="email" name="email" placeholder="Type Subjects">
										</div>
									</div>
									<div class="col-lg-6 col-md-6 col-12">
										<div class="form-group">
											<div class="icon"><i class="fa fa-tag"></i></div>
											<input type="text" name="subject" placeholder="Type Subjects">
										</div>
									</div>
									<div class="col-12">
										<div class="form-group textarea">
											<div class="icon"><i class="fa fa-pencil"></i></div>
											<textarea type="textarea" name="message" rows="5"></textarea>
										</div>
									</div>
									<div class="col-12">
										<div class="form-group button">
											<button type="submit" class="bizwheel-btn theme-2">Send Now</button>
										</div>
									</div>
								</div>
							</form>
						</div>
						<!--/ End contact Form -->
					</div>
					<div class="col-lg-5 col-md-5 col-12">
						<div class="contact-box-main m-top-30">
							<div class="contact-title">
								<h2>Contact with us</h2>
							</div>
							<!-- Single Contact -->
							<div class="single-contact-box">
								<div class="c-icon"><i class="fa fa-clock-o"></i></div>
								<div class="c-text">
									<h4>Opening Hour</h4>
									<p>247 Service Open 24h Hours</p>
								</div>
							</div>
							<!--/ End Single Contact -->
							<!-- Single Contact -->
							<div class="single-contact-box">
								<div class="c-icon"><i class="fa fa-phone"></i></div>
								<div class="c-text">
									<h4>Call Us Now</h4>
									<p>Mob.: <?php echo get_data_site_info('phone','site_info'); ?></p>
								</div>
							</div>
							<!--/ End Single Contact -->
							<!-- Single Contact -->
							<div class="single-contact-box">
								<div class="c-icon"><i class="fa fa-envelope-o"></i></div>
								<div class="c-text">
									<h4>Email Us</h4>
									<p><?php echo get_data_site_info('email','site_info'); ?><br><?php echo get_data_site_info('email_2','site_info'); ?></p>
								</div>
							</div>
							<!--/ End Single Contact -->
							<div class="button">
								<a href="portfolio.php" class="bizwheel-btn theme-1">Our Works<i class="fa fa-angle-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>	
		<!--/ End Contact Us -->
		
<?php 
require('inc/footer.php');
?>