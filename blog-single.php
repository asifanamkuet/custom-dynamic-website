<?php 
require('inc/header.php');
if (!isset($_GET['id'])) {
	echo "<script type=\"text/javascript\">
	window.location.href = '$url';
	</script>"; 
}?>
		<!-- Breadcrumb -->
		<div class="breadcrumbs bread-blog">
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="bread-inner">
							<!-- Bread Menu -->
							<div class="bread-menu">
								<ul>
									<li><a href="index.php"><?php echo get_data_site_info('title', 'site_info'); ?></a></li>
									<li><a href="blog.php">Blog</a></li>
									<li><a href="blog-single.php?id=<?php echo $_GET['id']; ?>"><?php echo get_item_details("title",$_GET['id'],"blog"); ?></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- / End Breadcrumb -->
		
		<!-- Blog Single -->
		<section class="news-area archive blog-single section-padding">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1 col-md-10 offset-md-1 col-12">
						<div class="row">
							<div class="col-12">
								<div class="blog-single-main">
									<div class="main-image">
										<center><img src="img/bg/<?php echo get_item_details("blog_cover",$_GET['id'],"blog"); ?>" alt="#"></center>
									</div>
									<div class="blog-detail">
										<!-- News meta -->
										<ul class="news-meta">
											<li><i class="fa fa-user"></i>Admin</li>
											<li><i class="fa fa-pencil"></i><?php echo get_item_details("date",$_GET['id'],"blog"); ?></li>
										</ul>
										<h2 class="blog-title"><?php echo get_item_details("title",$_GET['id'],"blog"); ?></h2>
										<?php echo get_item_details("html",$_GET['id'],"blog"); ?>
									</div>
								</div>
							</div>
						</div>							
					</div>		
				</div>
			</div>
		</section>	
		<!--/ End Services -->
		
		
<?php 
require('inc/footer.php');
?>