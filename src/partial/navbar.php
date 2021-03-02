<?php
	$categories = Session::get('categories');
	$activeCategory = Session::get('activeCategory');
    // $activeCategoryName = isset($categories[$activeCategory]);
?>
<!-- Following Menu -->
<section id="header_section_wrapper" class="header_section_wrapper">
	<div class="container">
		<div class="header-section">
			<div class="row">
				<div class="col-md-4">
					<div class="left_section">
						<span class="date"><?= date('l . ') ?></span>
						<!-- Date -->
						<span class="time"><?= date('j F . Y') ?></span>
						<!-- Time -->
						<div class="social">
							<a class="icons-sm fb-ic"><i class="fa fa-facebook"></i></a>
							<!--Twitter-->
							<a class="icons-sm tw-ic"><i class="fa fa-twitter"></i></a>
							<!--Google +-->
							<a class="icons-sm inst-ic"><i class="fa fa-instagram"> </i></a>
							<!--Linkedin-->
							<a class="icons-sm tmb-ic"><i class="fa fa-tumblr"> </i></a>
							<!--Pinterest-->
							<a class="icons-sm rss-ic"><i class="fa fa-rss"> </i></a>
						</div>
						<!-- Top Social Section -->
					</div>
					<!-- Left Header Section -->
				</div>
				
				<div class="col-md-4">
					<div class="logo">
						<!--<a href="index.html"><img src="assets/img/logo-omega.png" alt="Tech NewsLogo"></a>-->
						<a class="navbar-brand" href="<?php echo URL; ?>"><img src="<?php echo URL; ?>public/assets/img/logo-omega_200x200.png" alt=""></a>
					</div>
					<!-- Logo Section -->
				</div>
				
				<div class="col-md-4">
					<div class="right_section">
						<ul class="nav navbar-nav">
							<?php if(Session::get('user')): ?>
								<li class="nav-item">
									<a class="nav-link d-flex <?= (Session::get('controller_name') == 'Dashboard') ? 'active' : '' ?>" href="<?= URL ?>dashboard">
										<img src="<?= (empty(Session::get('user')['image'])) ? DEFAULT_IMG : URL . Session::get('user')['image'] ?>" width="24" height="24" class="mr-2" alt="" style="border-radius: 50%">
										<div>Welcome <?= Session::get('user')['firstname'] ?></div>
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="<?=URL?>auth/logout">Logout</a>
								</li>
							<?php else : ?>
								<li class="nav-item">
									<a class="nav-link" href="<?=URL?>auth/register">Register</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="<?= URL?>auth/login">Login</a>
								</li>
							<?php endif; ?>
							<li class="dropdown lang">
								<button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
									En <i class="fa fa-angle-down"></i>
								</button>
								<ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
									<li><a href="#">Fr</a></li>
								</ul>
							</li>
						</ul>
						<!-- Language Section -->
						
						<ul class="nav-cta hidden-xs">
							<li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle">
									<i class="fa fa-search"></i></a>
								<ul class="dropdown-menu">
									<li>
										<div class="head-search">
											<form role="form">
												<!-- Input Group -->
												<div class="input-group">
													<input type="text" class="form-control" placeholder="Type Something">
													<span class="input-group-btn">
														<button type="submit" class="btn btn-primary">Search
														</button>
													</span>
												</div>
											</form>
										</div>
									</li>
								</ul>
							</li>
						</ul>
						<!-- Search Section -->
					</div>
					<!-- Right Header Section -->
				</div>
			</div>
		</div>
		<!-- Header Section -->
		
		<div class="navigation-section">
			<nav class="navbar m-menu navbar-default">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="#navbar-collapse-1">
						<ul class="nav navbar-nav main-nav">
							<li class="active">
								<a class="nav-link <?= (Session::get('controller_name') == 'Home') ? 'active' : '' ?>" href="<?= URL ?>home">News</a>
							</li>
							<li class="dropdown m-menu-fw">
								<a href="#" data-toggle="dropdown" class="dropdown-toggle">
									Categories<span><i class="fa fa-angle-down"></i></span>
								</a>
								<ul class="dropdown-menu">
									<li>
										<div class="m-menu-content">
											<?php foreach($categories as $key => $value) : ?>
												<ul class="col-sm-2">
													<li class="dropdown-header"><a href="<?= URL ?>category/showCategory/<?= $key ?>"><?= $value ?></a></li>
												</ul>
											<?php endforeach; ?>
										</div>
									</li>
								</ul>
							</li>
							<li><a class="<?= (Session::get('controller_name') == 'Author') ? 'active' : '' ?>" href="<?= URL ?>author">Authors</a></li>
							<li><a class="<?= (Session::get('controller_name') == 'Gallery') ? 'active' : '' ?>" href="<?= URL ?>gallery">Gallery</a></li>
							<li><a class="<?= (Session::get('controller_name') == 'Contact') ? 'active' : '' ?>" href="<?= URL ?>contact">Contact</a></li>
						</ul>
					</div>
					<!-- .navbar-collapse -->
				</div>
				<!-- .container -->
			</nav>
			<!-- .nav -->
		</div>
		<!-- .navigation-section -->
	</div>
	<!-- .container -->
</section>
<!-- header_section_wrapper -->