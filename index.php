<?php 
require('inc/header.php');
?>
		<!-- Hero Slider -->
		<section class="hero-slider style1">
			<div class="home-slider">
				<!-- Single Slider -->
				<div class="single-slider" style="background-image:url('img/slider/<?php echo get_data_site_info('image1','slider'); ?>')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7 col-md-8 col-12">
								<div class="welcome-text"> 
									<div class="hero-text"> 
										<h4><?php echo get_data_site_info('title1','slider'); ?></h4>
										<h1><font color="#FFFFFF"><?php echo get_data_site_info('intro1','slider'); ?></font></h1>
										<div class="p-text">
											<p><b><font color="#59ffd8"><?php echo get_data_site_info('description1','slider'); ?></font></b></p>
										</div>
										<div class="button">
											<a href="contact.php" class="bizwheel-btn theme-1 effect">Work with us</a>
											<a href="portfolio.php" class="bizwheel-btn theme-2 effect">View Our Portfolio</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--/ End Single Slider -->
				<!-- Single Slider -->
				<div class="single-slider" style="background-image:url('img/slider/<?php echo get_data_site_info('image2','slider'); ?>')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7 col-md-8 col-12">
								<div class="welcome-text"> 
									<div class="hero-text"> 
										<h4><?php echo get_data_site_info('title2','slider'); ?></h4>
										<h1><font color="#FFFFFF"><?php echo get_data_site_info('intro2','slider'); ?></font></h1>
										<div class="p-text">
											<p><b><font color="#ffffff"><?php echo get_data_site_info('description2','slider'); ?></font></b></p>
										</div>
										<div class="button">
											<a href="blog.php" class="bizwheel-btn theme-1 effect">Read our blog</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--/ End Single Slider -->
				<!-- Single Slider -->
				<div class="single-slider" style="background-image:url('img/slider/<?php echo get_data_site_info('image3','slider'); ?>')">
					<div class="container">
						<div class="row">
							<div class="col-lg-7 col-md-8 col-12">
								<div class="welcome-text"> 
									<div class="hero-text"> 
										<h4><?php echo get_data_site_info('title3','slider'); ?></h4>
										<h1><b><font color="#FFFFFF"><?php echo get_data_site_info('intro3','slider'); ?></font></b></h1>
										<div class="p-text">
											<p><b><font color="#59ffd8"><?php echo get_data_site_info('description3','slider'); ?></font></b></p>
										</div>
										<div class="button">
											<a href="#" class="bizwheel-btn theme-2 effect">Our Leaders</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--/ End Single Slider -->
			</div>
		</section>
		<!--/ End Hero Slider -->
		
		<!-- Features Area -->
		<section class="features-area section-bg">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Feature -->
						<div class="single-feature">
							<div class="icon-head"><img src="animation/<?php echo get_data_site_info('animation1','skills'); ?>" style="height: 100px;"></div>
							<h4><a href="#"><?php echo get_data_site_info('title1','skills'); ?></a></h4>
							<p><?php echo get_data_site_info('description1','skills'); ?></p>
							<!--<div class="button">
								<a href="#" class="bizwheel-btn"><i class="fa fa-arrow-circle-o-right"></i>Learn More</a>
							</div>-->
						</div>
						<!--/ End Single Feature -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Feature -->
						<div class="single-feature">
							<div class="icon-head"><img src="animation/<?php echo get_data_site_info('animation2','skills'); ?>" style="height: 100px;"></div>
							<h4><a href="#"><?php echo get_data_site_info('title2','skills'); ?></a></h4>
							<p><?php echo get_data_site_info('description2','skills'); ?></p>
							<!--<div class="button">
								<a href="#" class="bizwheel-btn"><i class="fa fa-arrow-circle-o-right"></i>Learn More</a>
							</div>-->
						</div>
						<!--/ End Single Feature -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Feature -->
						<div class="single-feature">
							<div class="icon-head"><img src="animation/<?php echo get_data_site_info('animation3','skills'); ?>" style="height: 100px;"></div>
							<h4><a href="#"><?php echo get_data_site_info('title3','skills'); ?></a></h4>
							<p><?php echo get_data_site_info('description3','skills'); ?></p>
							<!--<div class="button">
								<a href="#" class="bizwheel-btn"><i class="fa fa-arrow-circle-o-right"></i>Learn More</a>
							</div>-->
						</div>
						<!--/ End Single Feature -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Feature -->
						<div class="single-feature">
							<div class="icon-head"><img src="animation/<?php echo get_data_site_info('animation4','skills'); ?>" style="height: 100px;"></div>
							<h4><a href="#"><?php echo get_data_site_info('title4','skills'); ?></a></h4>
							<p><?php echo get_data_site_info('description4','skills'); ?></p>
							<!--<div class="button">
								<a href="#" class="bizwheel-btn"><i class="fa fa-arrow-circle-o-right"></i>Learn More</a>
							</div>-->
						</div>
						<!--/ End Single Feature -->
					</div>
				</div>
			</div>
		</section>
		<!--/ End Features Area -->
		
		<!-- Call To Action -->
		<section class="call-action overlay" style="background-image:url('img/bg/1500x300.png')">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 col-12">
						<div class="call-inner">
							<h2><?php echo get_data_site_info('title','branding'); ?></h2>
							<p><?php echo get_data_site_info('description','branding'); ?></p>
						</div>
					</div>
					<div class="col-lg-3 col-12">
						<div class="button">
							<a href="portfolio.php" class="bizwheel-btn">Our Portfolio</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Call to action -->
		
		<!-- Services -->
		<section class="services section-bg section-space">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title style2 text-center">
							<div class="section-top">
								<h1><span>Creative</span><b>Service We Provide</b></h1><h4>We provide quality service &amp; support..</h4>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<?php
						$conn = new mysqli($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'], $GLOBALS['db']);
						if ($conn->connect_error) {
						die("Connection failed: " . $conn->connect_error);
						}
						$sql = "SELECT * FROM `services`";
						$result = $conn->query($sql);

						if ($result->num_rows > 0) {
						while ($row = $result->fetch_assoc()){
							echo '<div class="col-lg-4 col-md-4 col-12">
							<!-- Single Service -->
							<div class="single-service">
								<div class="service-head">
									<img src="'.$url.'/img/bg/'.$row["bg"].'" alt="#">
									<div class="icon-bg"><i class="'.$row['icon'].'"></i></div>
								</div>
								<div class="service-content">
									<h4><a href="services-single.php?id='.$row["id"].'">'.$row["title"].'</a></h4>
									<p>'.$row["description"].'</p>
									<a class="btn" href="services-single.php?id='.$row["id"].'""><i class="fa fa-arrow-circle-o-right"></i>View Service</a>
								</div>
							</div>
							<!--/ End Single Service -->
						</div>';
						}
					}
					?>
				</div>
			</div>
		</section>
		<!--/ End Services -->
		<div style="max-width: 600px; margin: auto; padding: 20px; border: 1px solid #ddd; border-radius: 10px; text-align: center; font-family: Arial, sans-serif;">
  <img src="img/bg/chairman-photo.jpg" alt="Md Masud Saheed" style="width: 150px; height: 150px; border-radius: 50%; object-fit: cover; margin-bottom: 20px;">
  
  <h2>Md Masud Saheed</h2>
  <h4>Chairman</h4>
  
  <p style="font-size: 14px; color: #555;">
    Dynamic Accomplished Marine Maintenance Executive with over 30 years
    of extensive experience in shipyard operations, marine engineering, and
    maintenance management. Proven expertise in overseeing technical
    operations, ensuring vessel safety, and leading large-scale maintenance
    projects. Adept at optimizing operational efficiency, managing diverse
    teams, and ensuring regulatory compliance. Looking to leverage my
    leadership and engineering expertise in a strategic executive role.
  </p>
  
  <p style="font-size: 14px; margin-top: 20px;">
    <strong>Address:</strong> Sharjah, United Arab Emirates<br>
    <strong>Call:</strong> <a href="tel:+971524387044">+971 524387044</a><br>
    <a href="dload/Md-Masud-Saheed-CV.pdf" download style="display: inline-block; margin-top: 20px; padding: 10px 20px; background-color: #007BFF; color: white; text-decoration: none; border-radius: 5px; font-size: 14px;">
    Download CV
  </a>
  </p>
</div>
		<!-- Portfolio -->
		<section class="portfolio section-space">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
						<div class="section-title default text-center">
							<div class="section-top">
								<h1><span>Project</span><b>Our Works</b></h1>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="portfolio-main">
							<div id="portfolio-item" class="portfolio-item-active">
								<?php
									$conn = new mysqli($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'], $GLOBALS['db']);
									if ($conn->connect_error) {
									die("Connection failed: " . $conn->connect_error);
									}
									$sql = "SELECT * FROM `our_work`";
									$result = $conn->query($sql);

									if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()){										echo '<div class="cbp-item '.$row["class"].'">
											<!-- Single Portfolio -->
											<div class="single-portfolio">
												<div class="portfolio-head overlay">
													<img src="'.$url.'/img/bg/'.$row["bg"].'" alt="#">
													<a class="more" href="'.$row['link'].'"><i class="fa fa-long-arrow-right"></i></a>
												</div>
												<div class="portfolio-content">
													<h4><a href="'.$row['link'].'">'.$row['title'].'</a></h4>
													<p>'.$row['category'].'</p>
												</div>
											</div>
										</div>';
										}
									}
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Portfolio -->
		
		<!-- Testimonials -->
		<section class="testimonials section-space" style="background-image:url('img/bg/39129287.png')">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-9 col-12">
						<div class="section-title default text-left">
							<div class="section-top">
								<h1><b>Our Satisfied Clients</b></h1>
							</div>
						</div>
						<div class="testimonial-inner">
							<div class="testimonial-slider">
								<?php
									$conn = new mysqli($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'], $GLOBALS['db']);
									if ($conn->connect_error) {
									die("Connection failed: " . $conn->connect_error);
									}
									$sql = "SELECT * FROM `testimonial`";
									$result = $conn->query($sql);

									if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()){ 
										echo '<!-- Single Testimonial -->
										<div class="single-slider">
											<ul class="star-list">
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
												<li><i class="fa fa-star"></i></li>
											</ul>
											<p>'.$row['testimonial_description'].'</p>
											<!-- Client Info -->
											<div class="t-info">
												<div class="t-left">
													
													<h2>'.$row['name'].' <span>'.$row['designation'].'</span></h2>
												</div>
												<div class="t-right">
													<div class="quote"><i class="fa fa-quote-right"></i></div>
												</div>
											</div>
										</div>
										<!-- / End Single Testimonial -->';
									}
								}
									?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Testimonials -->
		
		<!-- Latest Blog -->
		<section class="latest-blog section-space">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
						<div class="section-title default text-center">
							<div class="section-top">
								<h1><span>Latest</span><b> Published</b></h1>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="blog-latest blog-latest-slider">
							<div class="single-slider">
								<?php
									$conn = new mysqli($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'], $GLOBALS['db']);
									if ($conn->connect_error) {
									die("Connection failed: " . $conn->connect_error);
									}
									$sql = "SELECT * FROM `blog`";
									$result = $conn->query($sql);

									if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()){
										echo '<!-- Single Blog -->
										<div class="single-news ">
											<div class="news-head overlay">
												<span class="news-img" style="background-image:url(\'img/bg/'.$row['blog_cover'].'\')"></span>
												<a href="blog-single.php?id='.$row['id'].'" class="bizwheel-btn theme-2">Read more</a>
											</div>
											<div class="news-body">
												<div class="news-content">
													<h3 class="news-title"><a href="blog-single.php?id='.$row['id'].'">'.$row['title'].'</a></h3>
													<div class="news-text"><p>'.$row['description'].'</p></div>
													<ul class="news-meta">
														<li class="date"><i class="fa fa-calendar"></i>'.$row['date'].'</li>
													</ul>
												</div>
											</div>
											</div>
											</div>
											<div>
										<!--/ End Single Blog -->' ;
								}
							}
								?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Latest Blog -->
		
		<!-- Client Area -->
		<div class="clients section-bg">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="partner-slider">
							<?php
								$conn = new mysqli($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'], $GLOBALS['db']);
									if ($conn->connect_error) {
									die("Connection failed: " . $conn->connect_error);
									}
									$sql = "SELECT * FROM `partner`";
									$result = $conn->query($sql);

									if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()){
									echo '<!-- Single client -->
										<div class="single-slider">
											<div class="single-client">
												<a href="#" target="_blank"><img src="img/client/'.$row['img'].'" alt="#"></a>
											</div>
										</div>
									<!--/ End Single client -->' ;
								}
							}
								?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Client Area -->
<?php 
require('inc/footer.php');
?>