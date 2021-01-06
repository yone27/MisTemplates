


use frontend\web\themes\stationery\assets\AppAsset;



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
			
			<header class="menu-b dark"
			        data-spy="affix"
			        data-offset-top="0">
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
							   title="Go to home My Stationery"
							   aria-label="Go to home My Stationery"
							   href="./index.html">
								<figure>
									<picture>
										<source srcset="./images/logo.webp"
										        type="image/webp">
										<img src="./images/logo.png"
										     title="My Stationery Logo"
										     alt="My Stationery Logo">
									</picture>
								</figure>
							</a>
							<!--/logo-->
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse"
						     id="menu"
						     aria-expanded="false">
							<a title="Go to home My Stationery"
							   aria-label="Go to home My Stationery"
							   href="./index.html">
								<figure>
									<picture>
										<source srcset="./images/logo-white.webp"
										        type="image/webp">
										<img class="img-responsive collapsed-brand"
										     src="./images/logo-white.png"
										     title="My Stationery white logo"
										     alt="My Stationery white logo">
									</picture>
								</figure>
							</a>
							<!--Menu-->
							<?= MenuLoaderPreview::widget([
								'ulClass' => 'nav navbar-nav navbar-center',
								'theme'   => 'stationery',
								'menu'    => [
									['label' => Yii::t('stationery', 'Home'), 'view' => '/site/index'],
									['label' => Yii::t('stationery', 'About us'), 'view' => '/site/about'],
									['label' => Yii::t('stationery', 'Products'), 'view' => '/wProducts/index'],
									['label' => Yii::t('stationery', 'Blog'), 'view' => '/wNews/index'],
									['label' => Yii::t('stationery', 'Contact us'), 'view' => '/site/contacts'],
								],
							]); 
							<!--/Menu-->
						</div>
					</div>
				</nav>
			</header>
			<main class="wrapper">
				<?= $content; 
			</main>
			<footer class="footer footer-d">
				<div class="footer">
					<div class="container fluid-md-less">
						<section class="row d-table">
							<aside class="col-md-4 text-center d-table-cell">
								<a class="footer-brand"
								   title="Go to home My Stationery"
								   aria-label="Go to home My Stationery"
								   href="./index.html">
									<figure>
										<picture>
											<source srcset="./images/logo-white.webp"
											        type="image/webp">
											<img class="img-responsive collapsed-brand"
											     src="./images/logo-white.png"
											     title="My Stationery white logo"
											     alt="My Stationery white logo">
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
							<article class="col-md-4 text-center d-table-cell">
								<header>
									<h2>
										Our <strong>newsletter</strong>
									</h2>
									<p>
										Lorem ipsum dolor sit amet, consectetur adipisicing elit. A asperiores cumque dolores et eum
									</p>
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
							<article class="col-md-4 text-center d-table-cell">
								<header>
									<h2>
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
							<article class="col-md-6">
								<aside class="advice text-center-sm text-center-xs">
									
								</aside>
							</article>
							<article class="col-md-6">
								<header class="copyright text-center-sm text-center-xs">
									<p>
										My Stationery
										
									</p>
								</header>
							</article>
						</section>
					</div>
				</div>
			</footer>
			
		</body>
	</html>
