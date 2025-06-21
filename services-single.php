<?php 
require('inc/header.php');
if (!isset($_GET['id'])) {
	echo "<script type=\"text/javascript\">
	window.location.href = '$url';
	</script>"; 
}

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
									<li><a href="services.php?id=<?php echo $_GET['id']; ?>"><?php echo get_item_details("title",$_GET['id'],"services"); ?></a></li>
								</ul>
							</div>
							<!-- Bread Title -->
							<div class="bread-title"><h2><?php echo get_item_details("title",$_GET['id'],"services"); ?></h2></div>
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
					<?php echo get_item_details("html",$_GET['id'],"services"); ?>		
				</div>
			</div>
		</section>
		<!--/ End Services -->
		
<?php 
require('inc/footer.php');
?>