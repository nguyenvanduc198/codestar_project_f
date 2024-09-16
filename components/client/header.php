<!doctype html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]> <html lang="en" class="ie6">    <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="en"><!--<![endif]-->
<?php
echo __DIR__;
?>
<?php require __DIR__ . '../../../models/db_connect.php'; ?>



<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Home</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicon
		============================================ -->
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

	<!-- FONTS
		============================================ -->
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Bitter:400,700,400italic&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>

	<!-- animate CSS
		============================================ -->
	<!-- <link rel="stylesheet" href="public/css/animate.css"> -->
	<link rel="stylesheet" href="http://localhost/project_f/public/css/animate.css">

	<!-- FANCYBOX CSS
		============================================ -->
	<link rel="stylesheet" href="http://localhost/project_f/public/css/jquery.fancybox.css">

	<!-- BXSLIDER CSS
		============================================ -->
	<link rel="stylesheet" href="http://localhost/project_f/public/css/jquery.bxslider.css">

	<!-- MEANMENU CSS
		============================================ -->
	<link rel="stylesheet" href="http://localhost/project_f/public/css/meanmenu.min.css">

	<!-- JQUERY-UI-SLIDER CSS
		============================================ -->
	<link rel="stylesheet" href="http://localhost/project_f/public/css/jquery-ui-slider.css">

	<!-- NIVO SLIDER CSS
		============================================ -->
	<link rel="stylesheet" href="http://localhost/project_f/public/css/nivo-slider.css">

	<!-- OWL CAROUSEL CSS 	
		============================================ -->
	<link rel="stylesheet" href="http://localhost/project_f/public/css/owl.carousel.css">

	<!-- OWL CAROUSEL THEME CSS 	
		============================================ -->
	<link rel="stylesheet" href="http://localhost/project_f/public/css/owl.theme.css">

	<!-- BOOTSTRAP CSS 
		============================================ -->
	<link rel="stylesheet" href="http://localhost/project_f/public/css/bootstrap.min.css">

	<!-- FONT AWESOME CSS 
		============================================ -->
	<link rel="stylesheet" href="http://localhost/project_f/public/css/font-awesome.min.css">

	<!-- NORMALIZE CSS 
		============================================ -->
	<link rel="stylesheet" href="http://localhost/project_f/public/css/normalize.css">

	<!-- MAIN CSS 
		============================================ -->
	<link rel="stylesheet" href="http://localhost/project_f/public/css/main.css">

	<!-- STYLE CSS 
		============================================ -->
	<link rel="stylesheet" href="http://localhost/project_f/public/style.css">

	<!-- RESPONSIVE CSS 
		============================================ -->
	<link rel="stylesheet" href="http://localhost/project_f/public/css/responsive.css">

	<!-- IE CSS 
		============================================ -->
	<link rel="stylesheet" href="http://localhost/project_f/public/css/ie.css">

	<!-- MODERNIZR JS 
		============================================ -->
	<script src="http://localhost/project_f/public/js/vendor/modernizr-2.6.2.min.js"></script>

</head>

<body>
	<!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

	<!-- Add your site or application content here -->

	<!-- HEADER-TOP START -->
	<div class="header-top">
		<div class="container">
			<div class="row">
				<!-- HEADER-LEFT-MENU START -->
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="header-left-menu">
						<div class="welcome-info">
							Welcome <span>BootExperts</span>
						</div>
						<div class="currenty-converter">
							<form method="post" action="#" id="currency-set">
								<div class="current-currency">
									<span class="cur-label">Currency : </span><strong>USD</strong>
								</div>
								<ul class="currency-list currency-toogle">
									<li>
										<a title="Dollar (USD)" href="#">Dollar (USD)</a>
									</li>
									<li>
										<a title="Euro (EUR)" href="#">Euro (EUR)</a>
									</li>
								</ul>
							</form>
						</div>
						<div class="selected-language">
							<div class="current-lang">
								<span class="current-lang-label">Language : </span><strong>English</strong>
							</div>
							<ul class="languages-choose language-toogle">
								<li>
									<a href="#" title="English">
										<span>English</span>
									</a>
								</li>
								<li>
									<a href="#" title="Français (French)">
										<span>Français</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- HEADER-LEFT-MENU END -->
				<!-- HEADER-RIGHT-MENU START -->
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="header-right-menu">
						<nav>
							<ul class="list-inline">
								<li><a href="checkout.html">Check Out</a></li>
								<li><a href="wishlist.html">Wishlist</a></li>
								<li><a href="my-account.html">My Account</a></li>
								<li><a href="cart.html">My Cart</a></li>
								<li><a href="registration.html">Sign in</a></li>
							</ul>
						</nav>
					</div>
				</div>
				<!-- HEADER-RIGHT-MENU END -->
			</div>
		</div>
	</div>
	<!-- HEADER-TOP END -->
	<!-- HEADER-MIDDLE START -->
	<section class="header-middle">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<!-- LOGO START -->
					<div class="logo">
						<a href="index.html"><img src="http://localhost/project_f/public/img/logo.png" alt="bstore logo" /></a>
					</div>
					<!-- LOGO END -->
					<!-- HEADER-RIGHT-CALLUS START -->
					<div class="header-right-callus">
						<h3>call us free</h3>
						<span>0123-456-789</span>
					</div>
					<!-- HEADER-RIGHT-CALLUS END -->
					<!-- CATEGORYS-PRODUCT-SEARCH START -->
					<div class="categorys-product-search">
						<form action="#" method="get" class="search-form-cat">
							<div class="search-product form-group">
								<select name="catsearch" class="cat-search">
									<option value="">Categories</option>
									<?php foreach ($categories as $key => $row) { ?>
										<option value="<?= $row['id'] ?>"><?= $row['c_name'] ?></option>


									<?php } ?>
								</select>
								<input type="text" class="form-control search-form" name="s" placeholder="Enter your search key ... " />
								<button class="search-button" value="Search" name="s" type="submit">
									<i class="fa fa-search"></i>
								</button>
							</div>
						</form>
					</div>
					<!-- CATEGORYS-PRODUCT-SEARCH END -->
				</div>
			</div>
		</div>
	</section>
	<!-- HEADER-MIDDLE END -->
	<!-- MAIN-MENU-AREA START -->
	<header class="main-menu-area">
		<div class="container">
			<div class="row">
				<!-- SHOPPING-CART START -->
				<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 pull-right shopingcartarea">
					<div class="shopping-cart-out pull-right">
						<div class="shopping-cart">
							<a class="shop-link" href="cart.html" title="View my shopping cart">
								<i class="fa fa-shopping-cart cart-icon"></i>
								<b>My Cart</b>
								<span class="ajax-cart-quantity">2</span>
							</a>
							<div class="shipping-cart-overly">
								<div class="shipping-item">
									<span class="cross-icon"><i class="fa fa-times-circle"></i></span>
									<div class="shipping-item-
                                        ">
										<a href="#"><img src="http://localhost/project_f/public/img/shopping-image.jpg" alt="shopping image" /></a>
									</div>
									<div class="shipping-item-text">
										<span>2 <span class="pro-quan-x">x</span> <a href="#" class="pro-cat">Watch</a></span>
										<span class="pro-quality"><a href="#">S,Black</a></span>
										<p>$22.95</p>
									</div>
								</div>
								<div class="shipping-item">
									<span class="cross-icon"><i class="fa fa-times-circle"></i></span>
									<div class="shipping-item-image">
										<a href="#"><img src="http://localhost/project_f/public/img/shopping-image2.jpg" alt="shopping image" /></a>
									</div>
									<div class="shipping-item-text">
										<span>2 <span class="pro-quan-x">x</span> <a href="#" class="pro-cat">Women Bag</a></span>
										<span class="pro-quality"><a href="#">S,Gary</a></span>
										<p>$19.95</p>
									</div>
								</div>
								<div class="shipping-total-bill">
									<div class="cart-prices">
										<span class="shipping-cost">$2.00</span>
										<span>Shipping</span>
									</div>
									<div class="total-shipping-prices">
										<span class="shipping-total">$24.95</span>
										<span>Total</span>
									</div>
								</div>
								<div class="shipping-checkout-btn">
									<a href="checkout.html">Check out <i class="fa fa-chevron-right"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- SHOPPING-CART END -->
				<!-- MAINMENU START -->
				<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 no-padding-right menuarea">
					<div class="mainmenu">
						<nav>
							<ul class="list-inline mega-menu">
								<li class="active"><a href="index.html">Home</a>
									<!-- DROPDOWN MENU START -->
									<div class="home-var-menu">
										<ul class="home-menu">
											<li><a href="index.html">Home variation 1</a></li>
											<li><a href="index-2.html">Home variation 2</a></li>
										</ul>
									</div>
									<!-- DROPDOWN MENU END -->
								</li>
								<li>
									<a href="shop-gird.html">Women</a>
									<!-- DRODOWN-MEGA-MENU START -->
									<div class="drodown-mega-menu">
										<div class="left-mega col-xs-6">
											<div class="mega-menu-list">
												<a class="mega-menu-title" href="shop-gird.html">TOPS</a>
												<ul>
													<li><a href="shop-gird.html">T-shirts</a></li>
													<li><a href="shop-gird.html">clothing</a></li>
													<li><a href="shop-gird.html">Delivery</a></li>
												</ul>
											</div>
										</div>
										<div class="right-mega col-xs-6">
											<div class="mega-menu-list">
												<a class="mega-menu-title" href="shop-gird.html">Prodect</a>
												<ul>
													<li><a href="shop-gird.html">T-shirts</a></li>
													<li><a href="shop-gird.html">clothing</a></li>
													<li><a href="shop-gird.html">Watch</a></li>
													<li><a href="shop-gird.html">Delivery</a></li>
												</ul>
											</div>
										</div>
									</div>
									<!-- DRODOWN-MEGA-MENU END -->
								</li>
								<li>
									<a href="shop-gird.html">Men</a>
									<!-- DRODOWN-MEGA-MENU START -->
									<div class="drodown-mega-menu">
										<div class="left-mega col-xs-6">
											<div class="mega-menu-list">
												<ul>
													<li><a href="shop-gird.html">T-shirts</a></li>
													<li><a href="shop-gird.html">clothing</a></li>
													<li><a href="shop-gird.html">Delivery</a></li>
												</ul>
											</div>
										</div>
									</div>
									<!-- DRODOWN-MEGA-MENU END -->
								</li>
								<li>
									<a href="shop-gird.html">clothing</a>
									<!-- DRODOWN-MEGA-MENU START -->
									<div class="drodown-mega-menu">
										<div class="left-mega col-xs-6">
											<div class="mega-menu-list">
												<a class="mega-menu-title" href="shop-gird.html">TOPS</a>
												<ul>
													<li><a href="shop-gird.html">T-shirts</a></li>
													<li><a href="shop-gird.html">clothing</a></li>
													<li><a href="shop-gird.html">Delivery</a></li>
												</ul>
											</div>
											<div class="mega-menu-list">
												<a class="mega-menu-title" href="shop-gird.html">new product</a>
												<ul>
													<li><a href="shop-gird.html">T-shirts</a></li>
													<li><a href="shop-gird.html">clothing</a></li>
													<li><a href="shop-gird.html">Delivery</a></li>
												</ul>
											</div>
										</div>
										<div class="right-mega col-xs-6">
											<div class="mega-menu-list">
												<a class="mega-menu-title" href="shop-gird.html">Prodect</a>
												<ul>
													<li><a href="shop-gird.html">T-shirts</a></li>
													<li><a href="shop-gird.html">clothing</a></li>
													<li><a href="shop-gird.html">Watch</a></li>
													<li><a href="shop-gird.html">Delivery</a></li>
												</ul>
											</div>
											<div class="mega-menu-list">
												<a class="mega-menu-title" href="shop-gird.html">best sale month</a>
												<ul>
													<li><a href="shop-gird.html">T-shirts</a></li>
													<li><a href="shop-gird.html">clothing</a></li>
													<li><a href="shop-gird.html">Delivery</a></li>
												</ul>
											</div>
										</div>
									</div>
									<!-- DRODOWN-MEGA-MENU END -->
								</li>
								<li>
									<a href="shop-gird.html">Tops</a>
									<!-- DRODOWN-MEGA-MENU START -->
									<div class="drodown-mega-menu">
										<div class="left-mega col-xs-4">
											<div class="mega-menu-list">
												<a class="mega-menu-title" href="shop-gird.html">TOPS</a>
												<ul>
													<li><a href="shop-gird.html">T-shirts</a></li>
													<li><a href="shop-gird.html">clothing</a></li>
													<li><a href="shop-gird.html">Delivery</a></li>
												</ul>
											</div>
										</div>
										<div class="right-mega col-xs-4">
											<div class="mega-menu-list">
												<a class="mega-menu-title" href="shop-gird.html">best sale month</a>
												<ul>
													<li><a href="shop-gird.html">T-shirts</a></li>
													<li><a href="shop-gird.html">clothing</a></li>
													<li><a href="shop-gird.html">Delivery</a></li>
												</ul>
											</div>
										</div>
										<div class="right-mega col-xs-4">
											<div class="mega-menu-list">
												<a class="mega-menu-title" href="shop-gird.html">top rate product</a>
												<ul>
													<li><a href="shop-gird.html">T-shirts</a></li>
													<li><a href="shop-gird.html">clothing</a></li>
													<li><a href="shop-gird.html">Delivery</a></li>
												</ul>
											</div>
										</div>
										<div class="left-mega col-xs-6">
											<div class="mega-menu-list">
												<a class="mega-menu-title" href="shop-gird.html">Latest product</a>
												<ul>
													<li><a href="shop-gird.html">T-shirts</a></li>
													<li><a href="shop-gird.html">clothing</a></li>
													<li><a href="shop-gird.html">Delivery</a></li>
												</ul>
											</div>
										</div>
										<div class="left-mega col-xs-6">
											<div class="mega-menu-list">
												<a class="mega-menu-title" href="shop-gird.html">popular product</a>
												<ul>
													<li><a href="shop-gird.html">T-shirts</a></li>
													<li><a href="shop-gird.html">clothing</a></li>
													<li><a href="shop-gird.html">Delivery</a></li>
												</ul>
											</div>
										</div>
									</div>
									<!-- DRODOWN-MEGA-MENU END -->
								</li>
								<li>
									<a href="shop-gird.html">T-shirts</a>
									<!-- DRODOWN-MEGA-MENU START -->
									<div class="drodown-mega-menu">
										<div class="left-mega col-xs-6">
											<div class="mega-menu-list">
												<a class="mega-menu-title" href="shop-gird.html">TOPS</a>
												<ul>
													<li><a href="shop-gird.html">T-shirts</a></li>
													<li><a href="shop-gird.html">clothing</a></li>
													<li><a href="shop-gird.html">Delivery</a></li>
												</ul>
											</div>
											<div class="mega-menu-list">
												<a class="mega-menu-title" href="shop-gird.html">new product</a>
												<ul>
													<li><a href="shop-gird.html">T-shirts</a></li>
													<li><a href="shop-gird.html">clothing</a></li>
													<li><a href="shop-gird.html">Delivery</a></li>
												</ul>
											</div>
										</div>
										<div class="right-mega col-xs-6">
											<div class="mega-menu-list">
												<a class="mega-menu-title" href="shop-gird.html">Prodect</a>
												<ul>
													<li><a href="shop-gird.html">T-shirts</a></li>
													<li><a href="shop-gird.html">clothing</a></li>
													<li><a href="shop-gird.html">Watch</a></li>
													<li><a href="shop-gird.html">Delivery</a></li>
												</ul>
											</div>
											<div class="mega-menu-list">
												<a class="mega-menu-title" href="shop-gird.html">best sale month</a>
												<ul>
													<li><a href="shop-gird.html">T-shirts</a></li>
													<li><a href="shop-gird.html">clothing</a></li>
													<li><a href="shop-gird.html">Delivery</a></li>
												</ul>
											</div>
										</div>
									</div>
									<!-- DRODOWN-MEGA-MENU END -->
								</li>
								<li><a href="#">Delivery</a></li>
								<li><a href="about-us.html">About us</a></li>
							</ul>
						</nav>
					</div>
				</div>
				<!-- MAINMENU END -->
			</div>
			<div class="row">
				<!-- MOBILE MENU START -->
				<div class="col-sm-12 mobile-menu-area">
					<div class="mobile-menu hidden-md hidden-lg" id="mob-menu">
						<span class="mobile-menu-title">MENU</span>
						<nav>
							<ul>
								<li><a href="index.html">Home</a>
									<ul>
										<li><a href="index.html">Home variation 1</a></li>
										<li><a href="index-2.html">Home variation 2</a></li>
									</ul>
								</li>
								<li><a href="shop-gird.html">Women</a>
									<ul>
										<li><a href="shop-gird.html">Tops</a>
											<ul>
												<li><a href="shop-gird.html">T-Shirts</a></li>
												<li><a href="shop-gird.html">Blouses</a></li>
											</ul>
										</li>
										<li><a href="shop-gird.html">Dresses</a>
											<ul>
												<li><a href="shop-gird.html">Casual Dresses</a></li>
												<li><a href="shop-gird.html">Summer Dresses</a></li>
												<li><a href="shop-gird.html">Evening Dresses</a></li>
											</ul>
										</li>

									</ul>
								</li>
								<li><a href="shop-gird.html">men</a>
									<ul>
										<li><a href="shop-gird.html">Tops</a>
											<ul>
												<li><a href="shop-gird.html">Sports</a></li>
												<li><a href="shop-gird.html">Day</a></li>
												<li><a href="shop-gird.html">Evening</a></li>
											</ul>
										</li>
										<li><a href="shop-gird.html">Blouses</a>
											<ul>
												<li><a href="shop-gird.html">Handbag</a></li>
												<li><a href="shop-gird.html">Headphone</a></li>
												<li><a href="shop-gird.html">Houseware</a></li>
											</ul>
										</li>
										<li><a href="shop-gird.html">Accessories</a>
											<ul>
												<li><a href="shop-gird.html">Houseware</a></li>
												<li><a href="shop-gird.html">Home</a></li>
												<li><a href="shop-gird.html">Health & Beauty</a></li>
											</ul>
										</li>
									</ul>
								</li>
								<li><a href="shop-gird.html">clothing</a></li>
								<li><a href="shop-gird.html">tops</a></li>
								<li><a href="shop-gird.html">T-shirts</a></li>
								<li><a href="#">Delivery</a></li>
								<li><a href="about-us.html">About us</a></li>
							</ul>
						</nav>
					</div>
				</div>
				<!-- MOBILE MENU END -->
			</div>
		</div>
	</header>
	<!-- MAIN-MENU-AREA END -->