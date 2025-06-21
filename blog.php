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
									<li><a href="blog.php">Blog</a></li>
								</ul>
							</div>
							<!-- Bread Title -->
							<div class="bread-title"><h2>News & Articles</h2></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- / End Breadcrumb -->
		
		<!-- Blog Layout -->
		<section class="blog-layout news-default section-space">
			<div class="container">
				<div class="row ">
					<?php
						$conn = new mysqli($GLOBALS['servername'], $GLOBALS['username'], $GLOBALS['password'], $GLOBALS['db']);
									if ($conn->connect_error) {
									die("Connection failed: " . $conn->connect_error);
									}
									$sql = "SELECT * FROM `blog`";
									$result = $conn->query($sql);

									if ($result->num_rows > 0) {
									while ($row = $result->fetch_assoc()){
							echo '<div class="col-lg-4 col-md-6 col-12">
							<!-- Single Blog -->
							<div class="single-news ">
								<div class="news-head overlay">
									<img src=\'img/bg/'.$row['blog_cover'].'\' alt="#">
									<ul class="news-meta">
										<li class="author"><a href="#"><i class="fa fa-user"></i>Admin</a></li>
										<li class="date"><i class="fa fa-calendar"></i>'.$row['date'].'</li>
									</ul>
								</div>
								<div class="news-body">
									<div class="news-content">
										<h3 class="news-title"><a href="blog-single.php?id='.$row['id'].'">'.$row['title'].'</a></h3>
										<div class="news-text"><p>'.$row['description'].'</p></div>
										<a href="blog-single.php?id='.$row['id'].'" class="more">Continue reading <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
									</div>
								</div>
							</div>
							<!--/ End Single Blog -->
						</div>'; 
						}
					}
					?>
				</div>
			</div>
		</section>
	
<?php 
require('inc/footer.php');
?>