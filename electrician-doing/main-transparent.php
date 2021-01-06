

use frontend\web\themes\electrician\assets\AppAsset;



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
		<body class="transparent">
			
			<header class="menu-c"
			        data-spy="affix"
			        data-offset-top="0">
				<section class="top-menu">
					<article class="container fluid-md-less">
						<!--Menu-->
						<nav>
							<?= MenuLoaderPreview::widget([
								'ulClass' => 'nav navbar-nav',
								'theme'   => 'electrician',
								'menu'    => [
									['label' => Yii::t('electrician', 'Home'), 'view' => '/site/index'],
									['label' => Yii::t('electrician', 'Services'), 'view' => '/wServices/index'],
								],
							]); 
						</nav>
						<!--/Menu-->
						<!--social-->
						<ul class="social pull-right">
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
							   title="Go to home My Electrician"
							   aria-label="Go to home My Electrician"
							   href="./index.html">
								<figure>
									<picture>
										<source srcset="./images/logo.webp"
										        type="image/webp">
										<img src="./images/logo.png"
										     title="My Electrician Logo"
										     alt="My Electrician Logo">
									</picture>
								</figure>
							</a>
							<!--/logo-->
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse"
						     id="menu"
						     aria-expanded="false">
							<a title="Go to home My Electrician"
							   aria-label="Go to home My Electrician"
							   href="./index.html">
								<figure>
									<picture>
										<source srcset="./images/logo-white.webp"
										        type="image/webp">
										<img class="img-responsive collapsed-brand"
										     src="./images/logo-white.png"
										     title="My Electrician white logo"
										     alt="My Electrician white logo">
									</picture>
								</figure>
							</a>
							<!--Menu-->
							<?= MenuLoaderPreview::widget([
								'ulClass' => 'nav navbar-nav navbar-right',
								'theme'   => 'electrician',
								'menu'    => [
									['label' => Yii::t('electrician', 'Home'), 'view' => '/site/index'],
									['label' => Yii::t('electrician', 'Services'), 'view' => '/wServices/index'],
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
				<div class="footer section spacer spacer-m">
					<div class="container fluid-md-less">
						<section class="row">
							<article class="col-md-4 col-md-offset-4">
								<a title="Go to home My Electrician"
								   aria-label="Go to home My Electrician"
								   class="footer-brand"
								   href="./index.html">
									<figure>
										<picture>
											<source srcset="./images/logo-white.webp"
											        type="image/webp">
											<img class="img-responsive collapsed-brand"
											     src="./images/logo-white.png"
											     title="My Electrician white logo"
											     alt="My Electrician white logo">
										</picture>
									</figure>
								</a>
								<!--social-->
								<ul class="social theme">
									<li>
										<a aria-label="Share on social network"
										   title="Share on social network"
										   href="#">
											<i class="fab fa-facebook text-color4"></i>
										</a>
									</li>
									<li>
										<a aria-label="Share on social network"
										   title="Share on social network"
										   href="#">
											<i class="fab fa-google-plus text-color4"></i>
										</a>
									</li>
									<li>
										<a aria-label="Share on social network"
										   title="Share on social network"
										   href="#">
											<i class="fab fa-twitter text-color4"></i>
										</a>
									</li>
									<li>
										<a aria-label="Share on social network"
										   title="Share on social network"
										   href="#">
											<i class="fab fa-youtube text-color4"></i>
										</a>
									</li>
								</ul>
								<!--/social-->
							</article>
							<article class="col-md-4 col-md-offset-4">
								<header>
									<h2 class="lc">
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
								<header>
									<h2 class="lc">
										Our <strong>newsletter</strong>
									</h2>
								</header>
								<div class="input-group">
									<label hidden
									       for="subscribe"></label>
									<input type="email"
									       class="form-control"
									       placeholder="Our newsletter"
									       id="subscribe">
									<span class="input-group-btn">
										<button class="btn btn-primary"
										        type="submit">Subscribe</button>
									</span>
								</div>
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
										My Electrician
									</p>
									<p>
										
									</p>
								</header>
							</article>
						</section>
					</div>
				</div>
			</footer>
			
		</body>
	</html>
