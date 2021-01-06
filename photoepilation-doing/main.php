
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
				<section class="top-menu">
					<article class="container fluid-md-less">
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
							   title="Go to home My Photoepilation"
							   aria-label="Go to home My Photoepilation"
							   href="./index.html">
								<figure>
									<picture>
										<source srcset="./images/logo.webp"
										        type="image/webp">
										<img src="./images/logo.png"
										     title="My Photoepilation logo"
										     alt="My Photoepilation logo">
									</picture>
								</figure>
							</a>
							<!--/logo-->
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse"
						     id="menu"
						     aria-expanded="false">
							<a title="Go to home My Photoepilation"
							   aria-label="Go to home My Photoepilation"
							   href="./index.html">
								<figure>
									<picture>
										<source srcset="./images/logo-white.webp"
										        type="image/webp">
										<img class="img-responsive collapsed-brand"
										     src="./images/logo-white.png"
										     title="My Photoepilation white logo"
										     alt="My Photoepilation white logo">
									</picture>
								</figure>
							</a>
							<!--Menu-->
							<?= MenuLoaderPreview::widget([
								'ulClass' => 'nav navbar-nav navbar-right',
								'theme'   => 'photoepilation',
								'menu'    => [
									['label' => Yii::t('photoepilation', 'Home'), 'view' => '/site/index'],
									['label' => Yii::t('photoepilation', 'About us'), 'view' => '/site/about'],
									['label' => Yii::t('photoepilation', 'Services'), 'view' => '/wServices/index'],
									['label' => Yii::t('photoepilation', 'News'), 'view' => '/wNews/index'],
									['label' => Yii::t('photoepilation', 'Contact us'), 'view' => '/site/contacts'],
								],
							]); 
							<!--/Menu-->
						</div>
					</div>
				</nav>
			</header>
			<main class="wrapper">
				
			</main>
			<footer class="footer footer-b">
				<div class="footer section spacer spacer-o">
					<div class="container fluid-md-less">
						<section class="row">
							<aside class="col-md-4 col-md-offset-4">
								<a class="footer-brand"
								   title="Go to home My Photoepilation"
								   aria-label="Go to home My Photoepilation"
								   href="./index.html">
									<figure>
										<picture>
											<source srcset="./images/logo.webp"
											        type="image/webp">
											<img class="img-responsive collapsed-brand"
											     src="./images/logo-white.png"
											     title="My Photoepilation white logo"
											     alt="My Photoepilation white logo">
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
							<article class="col-md-4 col-md-offset-4">
								<aside>
									<?= $configWidget->facebook([
										'urlFacebook' => 'https://www.facebook.com/wepa.es',
										'title'       => 'My Photoepilation',
									]) 
								</aside>
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
									<p>
										My Photoepilation
										
									</p>
								</header>
							</article>
						</section>
					</div>
				</div>
			</footer>
			
		</body>
	</html>
