	<!DOCTYPE html>
	<html class="no-js"
	      lang="es"
	      >
		<head>
			<link rel="stylesheet"
        href="./fontawesome/css/all.css" />
    <link rel="stylesheet"
        href="./css/bootstrap.min.css" />
    <link rel="stylesheet"
        href="./css/main.core.min.css" />
    <link rel="stylesheet"
        href="./css/preview.min.css" />
    <link rel="stylesheet" href="./css/custom.css"/>
		</head>
		<body>
			
			<header class="menu-b light"
			        data-spy="affix"
			        data-offset-top="0">
				<section class="top-menu top-menu-color1">
					<article class="container fluid-md-less">
						<!--slogan-->
						<address>
							<div class="address">
								<span>
									We are the world #1 messaging company
								</span>
							</div>
						</address>
						<!--/slogan-->
						<!--social-->
						<ul class="social theme pull-right">
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
									<i class="fab fa-twitter"></i>
								</a>
							</li>
						</ul>
						<!--/social-->
						<!--more info-->
						<address class="pull-right mr20">
							<div class="address">
								<span>
									La Marina ST. 35, Santa Cruz de Tenerife, Spain
								</span>
							</div>
						</address>
						<!--more info-->
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
							<!--logo-->
							<a class="navbar-brand"
							   title="Go to home My Messaging"
							   aria-label="Go to home My Messaging"
							   href="./index.html">
								<figure>
									<picture>
										<source srcset="./images/logo-white.webp"
										        type="image/webp">
										<img src="./images/logo-white.png"
										     title="My Messaging Logo"
										     alt="My Messaging Logo">
									</picture>
								</figure>
							</a>
							<!--/logo-->
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse"
						     id="menu"
						     aria-expanded="false">
							<a title="Go to home My Messaging"
							   aria-label="Go to home My Messaging"
							   href="./index.html">
								<figure>
									<picture>
										<source srcset="./images/logo-white.webp"
										        type="image/webp">
										<img class="img-responsive collapsed-brand"
										     src="./images/logo-white.png"
										     title="My Messaging white logo"
										     alt="My Messaging white logo">
									</picture>
								</figure>
							</a>
							
							
							<!--Menu-->
							<?= MenuLoaderPreview::widget([
								'ulClass' => 'nav navbar-nav navbar-center',
								'theme'   => 'messaging',
								'menu'    => [
									['label' => Yii::t('messaging', 'Home'), 'view' => '/site/index'],
									['label' => Yii::t('messaging', 'About us'), 'view' => '/site/about'],
									['label' => Yii::t('messaging', 'Services'), 'view' => '/wServices/index'],
									['label' => Yii::t('messaging', 'Blog'), 'view' => '/wNews/index'],
									['label' => Yii::t('messaging', 'Contact us'), 'view' => '/site/contacts'],
								],
							]); 
							<!--/Menu-->
						</div>
						<!--phone-->
						<div class="d-table-cell hidden-sm hidden-xs">
							<a class="btn btn-primary btn-rounded btn-lg"
							   href="tel:+55555555555">
								<i class="fas fa-phone"></i>
								8888 88 88 88
							</a>
						</div>
						<!--/phone-->
					</div>
				</nav>
			</header>
			<main class="wrapper">
				
			</main>
			<footer class="footer footer-b">
				<div class="footer footer-shadow section">
					<div class="container fluid-md-less">
						<section class="row">
							<aside class="col-md-4 col-md-offset-4">
								<a class="footer-brand"
								   title="Go to home My Messaging"
								   aria-label="Go to home My Messaging"
								   href="./index.html">
									<figure>
										<picture>
											<source srcset="./images/logo.webp"
											        type="image/webp">
											<img class="img-responsive collapsed-brand"
											     src="./images/logo-white.png"
											     title="My Messaging white logo"
											     alt="My Messaging white logo">
										</picture>
									</figure>
								</a>
								<!--social-->
								<ul class="social theme">
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
											<i class="fab fa-twitter"></i>
										</a>
									</li>
								</ul>
								<!--/social-->
							</aside>
							<article class="col-md-8 col-md-offset-2">
								<header>
									<h2 class="text-uppercase">
										Our <strong>data</strong>
									</h2>
								</header>
								<address>
									<div class="address">
										<p>
											<b>
												<i class="fas fa-map-marker-alt"></i>
												Address
											</b>
											:
											La Marina ST. 35, Santa Cruz de Tenerife, Spain
										</p>
									</div>
									<div class="address">
										<p>
											<b>
												<i class="fas fa-phone"></i>
												Tel
											</b>
											:
											+34 922 985 058
										</p>
									</div>
									<div class="address">
										<p>
											<b>
												<i class="fas fa-mobile"></i>
												Cell
											</b>
											:
											+34 922 985 058
										</p>
									</div>
									<div class="address">
										<p>
											<b>
												<i class="fas fa-fax"></i>
												Fax
											</b>
											:
											+34 922 985 058
										</p>
									</div>
									<div class="address">
										<p>
											<b>
												<i class="fas fa-envelope"></i>
												Email
											</b>
											:
											<a title="Email"
											   aria-label="Email"
											   href="mailto: info@wepa.es">
												info@wepa.es
											</a>
										</p>
									</div>
								</address>
							</article>
						</section>
					</div>
				</div>
				<div class="sub-footer">
					<div class="container fluid-md-less">
						<section class="row">
							<article class="col-md-12">
								<aside class="advice">
									
								</aside>
							</article>
							<article class="col-md-12">
								<header class="copyright">
									<p class="mb0">
										My Messaging
										
									</p>
								</header>
							</article>
						</section>
					</div>
				</div>
			</footer>
			
		</body>
	</html>
