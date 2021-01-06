
<!DOCTYPE html>
<html class="no-js"
      lang="es>"
      >
	<head>
		<meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">
    <title>Grand Hotel | Home</title>
    <link rel="stylesheet"
        href="./fontawesome/css/all.css" />
    <link rel="stylesheet"
        href="./css/bootstrap.min.css" />
    <link rel="stylesheet"
        href="./css/main.core.min.css" />
    <link rel="stylesheet"
        href="./css/preview.min.css" />
    <link rel="stylesheet"
        href="./css/custom.css" />
	</head>
	<body class="dark"
	      >
		
		<header class="menu-b"
		        data-spy="affix"
		        data-offset-top="0">
			<section class="top-menu">
				<article class="container fluid-md-less">
					
					<address>
						<div class="address">
							<i class="fas fa-phone"></i>
							<span>
								+(00) 8888 88 88 88
							</span>
						</div>
						<div class="address">
							<i class="fas fa-envelope"></i>
							<span>
								info@wepa.es
							</span>
						</div>
					</address>
					<!--social-->
					<ul class="social pull-right social theme">
						<li>
							<a aria-label="Share on social network"
							   title="Share on social network"
							   href="#">
								<i class="fab fa-facebook"></i>
							</a>
						</li>
						<li>
							<a aria-label="Share on social network"
							   title="Share on social network"
							   href="#">
								<i class="fab fa-google-plus"></i>
							</a>
						</li>
						<li>
							<a aria-label="Share on social network"
							   title="Share on social network"
							   href="#">
								<i class="fab fa-pinterest"></i>
							</a>
						</li>
						<li>
							<a aria-label="Share on social network"
							   title="Share on social network"
							   href="#">
								<i class="fab fa-twitter"></i>
							</a>
						</li>
					</ul>
					<!--/social-->
				</article>
			</section>
			<nav class="navbar"
			     role="navigation">
				<div class="container fluid-md-less">
					<div class="navbar-header">
						<button class="navbar-toggle collapsed"
						        title="Mobile menu"
						        aria-label="Mobile menu"
						        type="button"
						        data-toggle="collapse"
						        data-target="#menu"
						        aria-expanded="false">
							<span class="sr-only">
								Mobile menu
							</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand"
						   title="Go to home | My Hotel"
						   aria-label="Go to home | My Hotel"
						   href="./index.html">
							<figure>
								<picture>
									<source srcset="./images/logo.webp"
									        type="image/webp">
									<img class="img-responsive collapsed-brand"
									     src="./images/logo-white.png"
									     title="Logo white"
									     alt="Logo white">
								</picture>
							</figure>
						</a>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse"
					     id="menu"
					     aria-expanded="false">
						<a title="Go to home | My Hotel"
						   aria-label="Go to home | My Hotel"
						   href="./index.html">
							<figure>
								<picture>
									<source srcset="./images/logo-white.webp"
									        type="image/webp">
									<img class="img-responsive collapsed-brand"
									     src="./images/logo-white.png"
									     title="Logo white"
									     alt="Logo white">
								</picture>
							</figure>
						</a>
						
						<!--Menu-->
						<?= MenuLoaderPreview::widget(
							[
								'ulClass' => 'nav navbar-nav navbar-right',
								'theme'   => 'grandHotel',
								'menu'    => [
									[
										'label' => 'HOME',
										'view'  => '/site/index',
									],
									[
										'label' => 'ABOUT US',
										'view'  => '/site/about',
									],
									[
										'label' => 'ROOMS',
										'view'  => '/site/rooms',
									],
									[
										'label' => 'RESTAURANTS',
										'view'  => '/site/restaurants',
									],
									[
										'label' => 'RESERVATIONS',
										'view'  => '#',
									],
									[
										'label' => 'GALLERY',
										'view'  => '/wPhotoGallery/index',
									],
									[
										'label' => 'SERVICES',
										'view'  => '/wServices/index',
									],
									[
										'label' => 'CONTACT US',
										'view'  => '/site/contacts',
									],
								],
							]
						); 
						<!--/Menu-->
					</div>
				</div>
			</nav>
		</header>
		<main class="wrapper">
			
		</main>
		<footer class="no-border">
			<div class="sub-footer">
				<div class="container fluid-md-less">
					<section class="row">
						<article class="col-md-6">
							<div class="copyright text-left-lg text-left-md">
								<p>
									Copyright 2019 All rights reserved 
									<strong>
										<a title="My Hotel"
										   aria-label="My Hotel"
										   href="./index.html">
											My Hotel
										</a>
									</strong>
								</p>
							</div>
						</article>
						<article class="col-md-6">
							<div class="advice text-right-lg text-right-md">
								<p class="text-color4">Designed and developed by 
									<strong>
										<a title="Wepa media"
										   aria-label="Wepa media"
										   href="https://wepa.es/"
										   target="_blank"
										   rel="nofollow">
											Wepa.es
										</a>
									</strong>
								</p>
							</div>
						</article>
					</section>
				</div>
			</div>
		</footer>
		<a class="btn btn-primary back-to-top"
		   title="Go up"
		   aria-label="Go up"
		   role="button">
			<i class="fas fa-chevron-up"></i>
		</a>
		
		
	</body>
</html>

