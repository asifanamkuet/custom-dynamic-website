<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <link rel="stylesheet" href="inc/menu_bar.css" />
  <link rel="stylesheet" href="inc/loading.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="icon" type="image/png" href="../favicon/favicon-96x96.png" sizes="96x96" />
  <link rel="icon" type="image/svg+xml" href="../favicon/favicon.svg" />
  <link rel="shortcut icon" href="../favicon/favicon.ico" />
  <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-touch-icon.png" />
  <meta name="apple-mobile-web-app-title" content="Bluefin" />
  <link rel="manifest" href="../favicon/site.webmanifest" />
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
 </head>
 <body>
  <?php
  $page = basename($_SERVER['PHP_SELF']);
  $index_active                  = $page == "index.php" ? "active" : "";
  $about_us_active               = $page == "about_us.php" ? "active" : "";
  $blog_active                   = $page == "blog.php" ? "active" : "";
  $branding_active               = $page == "branding.php" ? "active" : "";
  $our_work_active               = $page == "our_work.php" ? "active" : "";
  $partner_active                = $page == "partner.php" ? "active" : "";
  $services_active               = $page == "services.php" ? "active" : "";
  $skills_active                 = $page == "skills.php" ? "active" : "";
  $slider_active                 = $page == "slider.php" ? "active" : "";
  $test_active                   = $page == "test.php" ? "active" : "";
  $image_active                  = $page == "image.php" ? "active" : "";
  $password_active               = $page == "password.php" ? "active" : "";
  ?>
  <div class="container">
   <h2 align="center"><a href="<?php echo $url; ?>"><img src="../img/logo.png" alt="#" style="height: 60px; margin-top: -8px;"></a>Admin Panel</h2>
   <br />
   <div align="center">
  <ul>
  <li><a class="<?php echo $index_active; ?>" href="index.php">Site info</a></li>
  <li><a class="<?php echo $about_us_active; ?>" href="about_us.php">About us</a></li>
  <li><a class="<?php echo $blog_active; ?>" href="blog.php">Blog</a></li>
  <li><a class="<?php echo $branding_active; ?>" href="branding.php">Branding</a></li>
  <li><a class="<?php echo $our_work_active; ?>" href="our_work.php">Our work</a></li>
  <li><a class="<?php echo $partner_active; ?>" href="partner.php">Partner</a></li>
  <li><a class="<?php echo $services_active; ?>" href="services.php">Services</a></li>
  <li><a class="<?php echo $skills_active; ?>" href="skills.php">Skills</a></li>
  <li><a class="<?php echo $slider_active; ?>" href="slider.php">Slider</a></li>
  <li><a class="<?php echo $test_active; ?>" href="test.php">Testimonial</a></li>
  <li><a class="<?php echo $image_active; ?>" href="image.php">Image Uploder</a></li>
  <li><a class="<?php echo $password_active; ?>" href="password.php">Password</a></li>
  <li><a href="logout.php">Logout</a></li>
  </ul>
   </div>
   <br />

