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
									<li><a href="portfolio.php">Portfolio</a></li>
								</ul>
							</div>
							<!-- Bread Title -->
							<div class="bread-title"><h2>Our Works</h2></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Breadcrumb -->
		
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
		
<?php 
require('inc/footer.php');
?>