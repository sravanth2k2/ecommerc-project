<?php
	include('config.php');
	session_start();
// Getting Categories
if(isset($_SESSION['cart'])){
	$cart = $_SESSION['cart'];
}else{
	$cart = [];
}


 ?>

<!DOCTYPE HTML>
<html lang="en">

<!-- Mirrored from bootstrap-ecommerce.com/templates/alistyle-html/page-index-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Jan 2022 16:10:30 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="pragma" content="no-cache" />
<meta http-equiv="cache-control" content="max-age=604800" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<meta name="description" content="Bootstrap e-commerce html template similar to Alibaba">
<meta name="keywords" content="Online template, shop, theme, template, html, css, bootstrap 4">

<title>Website title - bootstrap alistyle html template</title>

<link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">

<!-- jQuery -->
<script src="js/jquery-2.0.0.min.js" type="text/javascript"></script>

<!-- Bootstrap4 files-->
<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
<link href="css/bootstrap3661.css?v=2.0" rel="stylesheet" type="text/css"/>

<!-- Font awesome 5 -->
<link href="fonts/fontawesome/css/all.min3661.css?v=2.0" type="text/css" rel="stylesheet">

<!-- custom style -->
<link href="css/ui3661.css?v=2.0" rel="stylesheet" type="text/css"/>
<link href="css/responsive3661.css?v=2.0" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="fontawesome/css/all.min.css">
<link rel="stylesheet" href="css/templatemo-style.css">

<!-- custom javascript -->
<script src="js/script3661.js?v=2.0" type="text/javascript"></script>

</head>
<body>


<header class="section-header">
<section class="header-main border-bottom">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-xl-2 col-lg-3 col-md-12">
				<a href="index.php" class="brand-wrap">
					<img class="logo" src="images/logo3661.png?v=2.0">
				</a> <!-- brand-wrap.// -->
			</div>
			<div class="col-xl-6 col-lg-5 col-md-6">
				<form action="search.php" method = "post" class="search-header">
					<div class="input-group w-100">
					    <input type="text" class="form-control" name = "name" placeholder="Search">
					    
					    <div class="input-group-append">
					      <input  class="btn btn-primary" type="submit" name = "submit" value = "Search">
					      </button>
					    </div>
				    </div>
				</form> <!-- search-wrap .end// -->
			</div> <!-- col.// -->
			<div class="col-xl-4 col-lg-4 col-md-6">
				<div class="widgets-wrap float-md-right">
					
					<div class="widget-header mr-3">
						<a href="#" class="widget-view">
							<div class="icon-area">
								<i class="fa fa-store"></i>
							</div>
							<small class="text"> Orders </small>
						</a>
					</div>
					<div class="widget-header">
						<a href="cart.php" class="widget-view">
							<div class="icon-area">
								<i class="fa fa-shopping-cart"></i>
								<span class="notify"><?php echo count($cart) ?></span>
							</div>
							<small class="text"> Cart </small>
						</a>
					</div>
				</div> <!-- widgets-wrap.// -->
			</div> <!-- col.// -->
		</div> <!-- row.// -->
	</div> <!-- container.// -->
</section> <!-- header-main .// -->



<nav class="navbar navbar-main navbar-expand-lg border-bottom">
<div class="container">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
	<span class="navbar-toggler-icon"></span>
	</button>

	<div class="collapse navbar-collapse" id="main_nav">
	<ul class="navbar-nav">
		<li class="nav-item">
			<a class="nav-link" href="index.php">Home</a>
		</li>
		<li class="nav-item">
		<a class="nav-link" href="aboutus.php">About Us</a>
		</li>
		<li class="nav-item">
		<a class="nav-link" href="contactus.php">Contact Us</a>
		</li>
	</ul>
	<ul class="navbar-nav ml-md-auto">
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="http://example.com/" data-toggle="dropdown">English</a>
			<div class="dropdown-menu dropdown-menu-right">
			<a class="dropdown-item" href="#">Russian</a>
			<a class="dropdown-item" href="#">French</a>
			<a class="dropdown-item" href="#">Spanish</a>
			<a class="dropdown-item" href="#">Chinese</a>
			</div>
		</li>
		</ul>
	</div> <!-- collapse .// -->
</div> <!-- container .// -->
</nav>

</header> <!-- section-header.// -->