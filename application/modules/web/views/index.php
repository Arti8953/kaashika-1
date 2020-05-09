
<?php include 'layout/css.php'; ?>
	<!-- Start Header Area -->
	<header class="header-area header-wide">
			<!-- main header start -->
			<div class="main-header d-none d-lg-block">
					<!-- header middle area start -->
					<div class="header-main-area sticky">
							<div class="container">
									<div class="row align-items-center position-relative">
											<!-- start logo area -->
											<div class="col-lg-2">
													<div class="logo">
															<a href="index.html">
																	<img src="<?php echo base_url() ?>/assets/img/logo/logo.png" alt="Brand Logo">
															</a>
													</div>
											</div>
											<!-- start logo area -->

											<!-- main menu area start -->
											<div class="col-lg-6 position-static">
													<div class="main-menu-area">
															<div class="main-menu">
																	<!-- main menu navbar start -->
																	<nav class="desktop-menu">
																			<ul>
																					<li class="active"><a href="<?php echo base_url('web/home')?>">Home</a></li>
	                                        <li><a href="<?php echo base_url('web/home/about')?>">About Us</a></li>
																					<li><a href="<?php echo base_url('web/shop')?>">shop <i class="fa fa-angle-down"></i></a>
																							<ul class="dropdown">
																									<li><a href="#">shop grid layout <i class="fa fa-angle-right"></i></a>
																											<ul class="dropdown">
																												<?php foreach ($category as $value) {?>
																													<li><a href="#"><?php echo $value['name']?></a></li>

																													<?php
																												}?>

																											</ul>
																									</li>

																							</ul>
																					</li>
																					<li class="position-static"><a href="#">Colection <i class="fa fa-angle-down"></i></a>
																							<ul class="megamenu dropdown">

																									<li class="mega-title"><span>column 01</span>
																											<ul>
																												  <li><a href="<?php echo base_url('web/Product')?>">product details</a></li>
																													<li><a href="<?php echo base_url('web/Collection/cart')?>">cart</a></li>
																													<li><a href="<?php echo base_url('web/Collection/checkout')?>">checkout</a></li>
																													<li><a href="<?php echo base_url('web/Collection/compare')?>">compare</a></li>
																													<li><a href="<?php echo base_url('web/Collection/wishlist')?>">wishlist</a></li>
																											</ul>
																									</li>
																									<li class="mega-title"><span>column 02</span>
																											<ul>
																													<li><a href="<?php echo base_url('web/Home/my_account')?>">my-account</a></li>
																													<li><a href="<?php echo base_url('login')?>">login-register</a></li>
																													<li><a href="<?php echo base_url('web/Home/about')?>">about us</a></li>
																													<li><a href="<?php echo base_url('web/Home/contact')?>">contact us</a></li>
																											</ul>
																									</li>
																									<!-- <li class="megamenu-banners d-none d-lg-block">
																											<a href="product-details.html">
																													<img src="<?php echo base_url() ?>/assets/img/banner/img1-static-menu.jpg" alt="">
																											</a>
																									</li>
																									<li class="megamenu-banners d-none d-lg-block">
																											<a href="product-details.html">
																													<img src="<?php echo base_url() ?>/assets/img/banner/img2-static-menu.jpg" alt="">
																											</a>
																									</li> -->
																							</ul>
																					</li>

																					<li><a href="<?php echo base_url('web/Home/contact')?>">Contact us</a></li>


																			</ul>
																	</nav>
																	<!-- main menu navbar end -->
															</div>
													</div>
											</div>
											<!-- main menu area end -->

											<!-- mini cart area start -->
											<div class="col-lg-4">
													<div class="header-right d-flex align-items-center justify-content-xl-between justify-content-lg-end">
															<div class="header-search-container">
																	<button class="search-trigger d-xl-none d-lg-block"><i class="pe-7s-search"></i></button>
																	<form class="header-search-box d-lg-none d-xl-block animated jackInTheBox">
																			<input type="text" placeholder="Search entire store hire" class="header-search-field">
																			<button class="header-search-btn"><i class="pe-7s-search"></i></button>
																	</form>
															</div>
															<div class="header-configure-area">
																	<ul class="nav justify-content-end">
																			<li class="user-hover">
																					<a href="#">
																							<i class="pe-7s-user"></i>
																					</a>
																					<ul class="dropdown-list">
																								<li><a href="<?php echo base_url('login')?>">login</a></li>
																								<li><a href="<?php echo base_url('join')?>">Register</a></li>
																								<li><a href="my-account.html">my account</a></li>
																								<li><a href="<?php echo base_url('Authentication/logout')?>">Logout</a></li>
																						</ul>
																			</li>
																			<li>
																					<a href="<?php echo base_url('web/collection/wishlist')?>">
																							<i class="pe-7s-like"></i>
																							<div class="notification">0</div>
																					</a>
																			</li>
																			<li>
																					<a href="#" class="minicart-btn">
																							<i class="pe-7s-shopbag"></i>
																							<div class="notification">2</div>
																					</a>
																			</li>
																	</ul>
															</div>
													</div>
											</div>
											<!-- mini cart area end -->

									</div>
							</div>
					</div>
					<!-- header middle area end -->
			</div>
			<!-- main header start -->

			<!-- mobile header start -->
			<!-- mobile header start -->
			<div class="mobile-header d-lg-none d-md-block sticky">
					<!--mobile header top start -->
					<div class="container-fluid">
							<div class="row align-items-center">
									<div class="col-12">
											<div class="mobile-main-header">
													<div class="mobile-logo">
															<a href="index.html">
																	<img src="<?php echo base_url() ?>/assets/img/logo/logo.png" alt="Brand Logo">
															</a>
													</div>
													<div class="mobile-menu-toggler">
															<div class="mini-cart-wrap">
																	<a href="cart.html">
																			<i class="pe-7s-shopbag"></i>
																			<div class="notification">0</div>
																	</a>
															</div>
															<button class="mobile-menu-btn">
																	<span></span>
																	<span></span>
																	<span></span>
															</button>
													</div>
											</div>
									</div>
							</div>
					</div>
					<!-- mobile header top start -->
			</div>
			<!-- mobile header end -->
			<!-- mobile header end -->

			<!-- offcanvas mobile menu start -->
			<!-- off-canvas menu start -->
			<aside class="off-canvas-wrapper">
					<div class="off-canvas-overlay"></div>
					<div class="off-canvas-inner-content">
							<div class="btn-close-off-canvas">
									<i class="pe-7s-close"></i>
							</div>

							<div class="off-canvas-inner">
									<!-- search box start -->
									<div class="search-box-offcanvas">
											<form>
													<input type="text" placeholder="Search Here...">
													<button class="search-btn"><i class="pe-7s-search"></i></button>
											</form>
									</div>
									<!-- search box end -->

									<!-- mobile menu start -->
									<div class="mobile-navigation">

											<!-- mobile menu navigation start -->
											<nav>
													<ul class="mobile-menu">
															<li class=""><a href="index.html">Home</a>
															</li>
															<li class="#"><a href="about-us.html">About </a>
															</li>
															<li class="menu-item-has-children"><a href="#">Shop</a>
																	<ul class="megamenu dropdown">
																			<li class="mega-title menu-item-has-children"><a href="#">column 01</a>
																					<ul class="dropdown">
																							<li><a href="shop.html">shop grid left
																											sidebar</a></li>
																							<li><a href="#">shop grid right
																											sidebar</a></li>
																							<li><a href="#">shop list left sidebar</a></li>
																							<li><a href="#">shop list right sidebar</a></li>
																					</ul>
																			</li>
																			<li class="mega-title menu-item-has-children"><a href="#">column 02</a>
																					<ul class="dropdown">
																							<li><a href="#">product details</a></li>
																							<li><a href="#">product details affiliate</a></li>
																							<li><a href="#">product details variable</a></li>
																							<li><a href="#">product details group</a></li>

																					</ul>
																			</li>
																			<li class="mega-title menu-item-has-children"><a href="#">column 03</a>
																					<ul class="dropdown">
																							<li><a href="<?php echo base_url('web/collection/cart')?>">cart</a></li>
																							<li><a href="<?php echo base_url('web/collection/checkout')?>">checkout</a></li>
																							<li><a href="<?php echo base_url('web/collection/compare')?>">compare</a></li>
																							<li><a href="<?php echo base_url('web/collection/wishlist')?>">wishlist</a></li>
																					</ul>
																			</li>
																			<li class="mega-title menu-item-has-children"><a href="#">column 04</a>
																					<ul class="dropdown">
																							<li><a href="my-account.html">my-account</a></li>
																							<li><a href="login-register.html">login-register</a></li>
																							<li><a href="about-us.html">about us</a></li>
																							<li><a href="contact-us.html">contact us</a></li>
																					</ul>
																			</li>
																	</ul>
															</li>
															<li class="menu-item-has-children "><a href="#">shop</a>
																	<ul class="dropdown">
																			<li class="menu-item-has-children"><a href="#">shop grid layout</a>
																					<ul class="dropdown">
																							<li><a href="shop.html">shop grid left sidebar</a></li>
																							<li><a href="#">shop grid right sidebar</a></li>
																							<li><a href="#">shop grid full 3 col</a></li>
																							<li><a href="#">shop grid full 4 col</a></li>
																					</ul>
																			</li>
																			<li class="menu-item-has-children"><a href="#">shop list layout</a>
																					<ul class="dropdown">
																							<li><a href="#">shop list left sidebar</a></li>
																							<li><a href="#">shop list right sidebar</a></li>
																							<li><a href="#">shop list full width</a></li>
																					</ul>
																			</li>
																			<li class="menu-item-has-children"><a href="#">products details</a>
																					<ul class="dropdown">
																							<li><a href="#">product details</a></li>
																							<!-- <li><a href="#">product details affiliate</a></li> -->
																							<li><a href="#">product details variable</a></li>
																							<!-- <li><a href="#">product details group</a></li> -->
																					</ul>
																			</li>
																	</ul>
															</li>
															<li class="#"><a href="#">Blog</a>
															</li>
															<li><a href="contact-us.html">Contact us</a></li>
													</ul>
											</nav>
											<!-- mobile menu navigation end -->
									</div>
									<!-- mobile menu end -->

									<div class="mobile-settings">
											<ul class="nav">
													<li>
															<div class="dropdown mobile-top-dropdown">
																	<a href="#" class="dropdown-toggle" id="currency" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																			Currency
																			<i class="fa fa-angle-down"></i>
																	</a>
																	<div class="dropdown-menu" aria-labelledby="currency">
																			<a class="dropdown-item" href="#">$ USD</a>
																			<a class="dropdown-item" href="#">$ EURO</a>
																	</div>
															</div>
													</li>
													<li>
															<div class="dropdown mobile-top-dropdown">
																	<a href="#" class="dropdown-toggle" id="myaccount" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
																			My Account
																			<i class="fa fa-angle-down"></i>
																	</a>
																	<div class="dropdown-menu" aria-labelledby="myaccount">
																			<a class="dropdown-item" href="my-account.html">my account</a>
																			<a class="dropdown-item" href="login-register.html"> login</a>
																			<a class="dropdown-item" href="login-register.html">register</a>
																	</div>
															</div>
													</li>
											</ul>
									</div>

									<!-- offcanvas widget area start -->
									<div class="offcanvas-widget-area">
											<div class="off-canvas-contact-widget">
													<ul>
															<li><i class="fa fa-mobile"></i>
																	<a href="#">0123456789</a>
															</li>
															<li><i class="fa fa-envelope-o"></i>
																	<a href="#">info@yourdomain.com</a>
															</li>
													</ul>
											</div>
											<div class="off-canvas-social-widget">
													<a href="#"><i class="fa fa-facebook"></i></a>
													<a href="#"><i class="fa fa-twitter"></i></a>
													<a href="#"><i class="fa fa-pinterest-p"></i></a>
													<a href="#"><i class="fa fa-linkedin"></i></a>
													<a href="#"><i class="fa fa-youtube-play"></i></a>
											</div>
									</div>
									<!-- offcanvas widget area end -->
							</div>
					</div>
			</aside>
			<!-- off-canvas menu end -->
			<!-- offcanvas mobile menu end -->
	</header>
	<!-- end Header Area -->


	<main>
		<!-- Main Page container Start here -->
		<?php echo $main_content; ?>
		<!-- End page containt -->
	</main>

	<!-- Scroll to top start -->
	<div class="scroll-top not-visible">
			<i class="fa fa-angle-up"></i>
	</div>
	<!-- Scroll to Top End -->

	<!-- footer area start -->
	<footer class="footer-widget-area">
			<div class="footer-top section-padding">
					<div class="container">
							<div class="row">
									<div class="col-lg-3 col-md-6">
											<div class="widget-item">
													<div class="widget-title">
															<div class="widget-logo">
																	<a href="index.html">
																			<img src="<?php echo base_url() ?>/assets/img/logo/logo.png" alt="brand logo">
																	</a>
															</div>
													</div>
													<div class="widget-body">
															<p>We are a team of designers and developers that create high quality wordpress, shopify, Opencart </p>
													</div>
											</div>
									</div>
									<div class="col-lg-3 col-md-6">
											<div class="widget-item">
													<h6 class="widget-title">Contact Us</h6>
													<div class="widget-body">
															<address class="contact-block">
																	<ul>
																			<li><i class="pe-7s-home"></i> 4710-4890 Breckinridge USA</li>
																			<li><i class="pe-7s-mail"></i> <a href="mailto:demo@plazathemes.com">demo@yourdomain.com </a></li>
																			<li><i class="pe-7s-call"></i> <a href="tel:(012)800456789987">(012) 800 456 789-987</a></li>
																	</ul>
															</address>
													</div>
											</div>
									</div>
									<div class="col-lg-3 col-md-6">
											<div class="widget-item">
													<h6 class="widget-title">Information</h6>
													<div class="widget-body">
															<ul class="info-list">
																	<li><a href="<?php echo base_url('web/home/about')?>">about us</a></li>
																	<!-- <li><a href="#">Delivery Information</a></li>
																	<li><a href="#">privet policy</a></li>
																	<li><a href="#">Terms & Conditions</a></li> -->
																	<li><a href="<?php echo base_url('web/home/contact')?>">contact us</a></li>
																	<!-- <li><a href="#">site map</a></li> -->
															</ul>
													</div>
											</div>
									</div>
									<div class="col-lg-3 col-md-6">
											<div class="widget-item">
													<h6 class="widget-title">Follow Us</h6>
													<?php if (is_array($social)): ?>
													<div class="widget-body social-link">
														<?php foreach ($social as $value):?>
															<a href="<?php echo $value['link']; ?>"><i class="<?php echo $value['icon'];?>"></i></a>

															<?php endforeach;?>
													</div>
												<?php else:?>
													<div class="widget-body social-link">
															<a href="#"><i class="icon-line-awesome-youtube"></i></a>
															<a href="#"><i class="fa fa-twitter"></i></a>
															<a href="#"><i class="fa fa-instagram"></i></a>
															<a href="#"><i class="fa fa-youtube"></i></a>
													</div>
												<?php endif;?>
											</div>
									</div>
							</div>
							<!-- <div class="row align-items-center mt-20">
									<div class="col-md-6">
											<div class="newsletter-wrapper">
													<h6 class="widget-title-text">Signup for newsletter</h6>
													<form class="newsletter-inner" id="mc-form">
															<input type="email" class="news-field" id="mc-email" autocomplete="off" placeholder="Enter your email address">
															<button class="news-btn" id="mc-submit">Subscribe</button>
													</form>
													<!-- mailchimp-alerts Start -->
													<!-- <div class="mailchimp-alerts">
															<div class="mailchimp-submitting"></div>
															<div class="mailchimp-success"></div>
															<div class="mailchimp-error"></div>
													</div> -->
													<!-- mailchimp-alerts end -->
											<!-- </div>
									</div>
									<div class="col-md-6">
											<div class="footer-payment">
													<img src="<?php echo base_url() ?>/assets/img/payment.png" alt="payment method">
											</div>
									</div>
							</div>  -->
					</div>
			</div>
			<div class="footer-bottom">
					<div class="container">
							<div class="row">
									<div class="col-12">
											<div class="copyright-text text-center">
													<p>Powered By <a href="#">Corano</a>. Store 1 © 2020</p>
											</div>
									</div>
							</div>
					</div>
			</div>
	</footer>
	<!-- footer area end -->

	<!-- Quick view modal start -->
	<div class="modal" id="quick_view">
			<div class="modal-dialog modal-lg modal-dialog-centered">
					<div class="modal-content">
							<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>
							<div class="modal-body">
									<!-- product details inner end -->
									<div class="product-details-inner">
											<div class="row">
													<div class="col-lg-5">
															<div class="product-large-slider">
																	<div class="pro-large-img img-zoom">
																			<img src="<?php echo base_url() ?>/assets/img/product/product-details-img1.jpg" alt="product-details" />
																	</div>
																	<div class="pro-large-img img-zoom">
																			<img src="<?php echo base_url() ?>/assets/img/product/product-details-img2.jpg" alt="product-details" />
																	</div>
																	<div class="pro-large-img img-zoom">
																			<img src="<?php echo base_url() ?>/assets/img/product/product-details-img3.jpg" alt="product-details" />
																	</div>
																	<div class="pro-large-img img-zoom">
																			<img src="<?php echo base_url() ?>/assets/img/product/product-details-img4.jpg" alt="product-details" />
																	</div>
																	<div class="pro-large-img img-zoom">
																			<img src="<?php echo base_url() ?>/assets/img/product/product-details-img5.jpg" alt="product-details" />
																	</div>
															</div>
															<div class="pro-nav slick-row-10 slick-arrow-style">
																	<div class="pro-nav-thumb">
																			<img src="<?php echo base_url() ?>/assets/img/product/product-details-img1.jpg" alt="product-details" />
																	</div>
																	<div class="pro-nav-thumb">
																			<img src="<?php echo base_url() ?>/assets/img/product/product-details-img2.jpg" alt="product-details" />
																	</div>
																	<div class="pro-nav-thumb">
																			<img src="<?php echo base_url() ?>/assets/img/product/product-details-img3.jpg" alt="product-details" />
																	</div>
																	<div class="pro-nav-thumb">
																			<img src="<?php echo base_url() ?>/assets/img/product/product-details-img4.jpg" alt="product-details" />
																	</div>
																	<div class="pro-nav-thumb">
																			<img src="<?php echo base_url() ?>/assets/img/product/product-details-img5.jpg" alt="product-details" />
																	</div>
															</div>
													</div>
													<div class="col-lg-7">
															<div class="product-details-des">
																	<div class="manufacturer-name">
																			<a href="product-details.html">HasTech</a>
																	</div>
																	<h3 class="product-name">Handmade Golden Necklace</h3>
																	<div class="ratings d-flex">
																			<span><i class="fa fa-star-o"></i></span>
																			<span><i class="fa fa-star-o"></i></span>
																			<span><i class="fa fa-star-o"></i></span>
																			<span><i class="fa fa-star-o"></i></span>
																			<span><i class="fa fa-star-o"></i></span>
																			<div class="pro-review">
																					<span>1 Reviews</span>
																			</div>
																	</div>
																	<div class="price-box">
																			<span class="price-regular">$70.00</span>
																			<span class="price-old"><del>$90.00</del></span>
																	</div>
																	<h5 class="offer-text"><strong>Hurry up</strong>! offer ends in:</h5>
																	<div class="product-countdown" data-countdown="2022/02/20"></div>
																	<div class="availability">
																			<i class="fa fa-check-circle"></i>
																			<span>200 in stock</span>
																	</div>
																	<p class="pro-desc">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy
																			eirmod tempor invidunt ut labore et dolore magna.</p>
																	<div class="quantity-cart-box d-flex align-items-center">
																			<h6 class="option-title">qty:</h6>
																			<div class="quantity">
																					<div class="pro-qty"><input type="text" value="1"></div>
																			</div>
																			<div class="action_link">
																					<a class="btn btn-cart2" href="#">Add to cart</a>
																			</div>
																	</div>
																	<div class="useful-links">
																			<a href="#" data-toggle="tooltip" title="Compare"><i
																					class="pe-7s-refresh-2"></i>compare</a>
																			<a href="#" data-toggle="tooltip" title="Wishlist"><i
																					class="pe-7s-like"></i>wishlist</a>
																	</div>
																	<div class="like-icon">
																			<a class="facebook" href="#"><i class="fa fa-facebook"></i>like</a>
																			<a class="twitter" href="#"><i class="fa fa-twitter"></i>tweet</a>
																			<a class="pinterest" href="#"><i class="fa fa-pinterest"></i>save</a>
																			<a class="google" href="#"><i class="fa fa-google-plus"></i>share</a>
																	</div>
															</div>
													</div>
											</div>
									</div> <!-- product details inner end -->
							</div>
					</div>
			</div>
	</div>
	<!-- Quick view modal end -->

	<!-- offcanvas mini cart start -->
	<div class="offcanvas-minicart-wrapper">
			<div class="minicart-inner">
					<div class="offcanvas-overlay"></div>
					<div class="minicart-inner-content">
							<div class="minicart-close">
									<i class="pe-7s-close"></i>
							</div>
							<div class="minicart-content-box">
									<div class="minicart-item-wrapper">
											<ul>
													<li class="minicart-item">
															<div class="minicart-thumb">
																	<a href="product-details.html">
																			<img src="<?php echo base_url() ?>/assets/img/cart/cart-1.jpg" alt="product">
																	</a>
															</div>
															<div class="minicart-content">
																	<h3 class="product-name">
																			<a href="product-details.html">Dozen White Botanical Linen Dinner Napkins</a>
																	</h3>
																	<p>
																			<span class="cart-quantity">1 <strong>&times;</strong></span>
																			<span class="cart-price">$100.00</span>
																	</p>
															</div>
															<button class="minicart-remove"><i class="pe-7s-close"></i></button>
													</li>
													<li class="minicart-item">
															<div class="minicart-thumb">
																	<a href="product-details.html">
																			<img src="<?php echo base_url() ?>/assets/img/cart/cart-2.jpg" alt="product">
																	</a>
															</div>
															<div class="minicart-content">
																	<h3 class="product-name">
																			<a href="product-details.html">Dozen White Botanical Linen Dinner Napkins</a>
																	</h3>
																	<p>
																			<span class="cart-quantity">1 <strong>&times;</strong></span>
																			<span class="cart-price">$80.00</span>
																	</p>
															</div>
															<button class="minicart-remove"><i class="pe-7s-close"></i></button>
													</li>
											</ul>
									</div>

									<div class="minicart-pricing-box">
											<ul>
													<li>
															<span>sub-total</span>
															<span><strong>$300.00</strong></span>
													</li>
													<li>
															<span>Eco Tax (-2.00)</span>
															<span><strong>$10.00</strong></span>
													</li>
													<li>
															<span>VAT (20%)</span>
															<span><strong>$60.00</strong></span>
													</li>
													<li class="total">
															<span>total</span>
															<span><strong>$370.00</strong></span>
													</li>
											</ul>
									</div>

									<div class="minicart-button">
											<a href="<?php echo base_url('web/collection/cart')?>"><i class="fa fa-shopping-cart"></i> View Cart</a>
											<a href="<?php echo base_url('web/collection/wishlist')?>"><i class="fa fa-share"></i> Checkout</a>
									</div>
							</div>
					</div>
			</div>
	</div>
	<!-- offcanvas mini cart end -->

<?php include 'layout/footer.php';?>
