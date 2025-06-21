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
									<li><a href="services.php">Services</a></li>
								</ul>
							</div>
							<!-- Bread Title -->
							<div class="bread-title"><h2>Our Services</h2></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Breadcrumb -->
		
		<!-- Services -->
		<section class="services section-bg section-space">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title  style2 text-center">
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
		
<?php 
require('inc/footer.php');
?>