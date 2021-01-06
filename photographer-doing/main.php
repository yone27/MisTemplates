


use frontend\web\themes\photographer\assets\AppAsset;




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
							   title="Go to home My Photographer"
							   aria-label="Go to home My Photographer"
							   href="./index.html">
								<figure>
									<picture>
										<source srcset="./images/logo.webp"
										        type="image/webp">
										<img src="./images/logo.png"
										     title="My Photographer logo"
										     alt="My Photographer logo">
									</picture>
								</figure>
							</a>
							<!--/logo-->
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse"
						     id="menu"
						     aria-expanded="false">
							<a title="Go to home My Photographer"
							   aria-label="Go to home My Photographer"
							   href="./index.html">
								<figure>
									<picture>
										<source srcset="./images/logo-white.webp"
										        type="image/webp">
										<img class="img-responsive collapsed-brand"
										     src="./images/logo-white.png"
										     title="My Photographer white logo"
										     alt="My Photographer white logo">
									</picture>
								</figure>
							</a>
							<!--Menu-->
							<?= MenuLoaderPreview::widget([
								'ulClass' => 'nav navbar-nav navbar-right',
								'theme'   => 'photographer',
								'menu'    => [
									['label' => Yii::t('photographer', 'Home'), 'view' => '/site/index'],
									['label' => Yii::t('photographer', 'About us'), 'view' => '/site/about'],
									['label' => Yii::t('photographer', 'Services'), 'view' => '/wServices/index'],
									['label' => Yii::t('photographer', 'Blog'), 'view' => '/wNews/index'],
									['label' => Yii::t('photographer', 'Gallery'), 'view' => '/wPhotoGallery/index'],
									['label' => Yii::t('photographer', 'Contact'), 'view' => '/site/contacts'],
								],
							]); 
							<!--/Menu-->
						</div>
					</div>
				</nav>
			</header>
			<main class="wrapper">
				
			</main>
			<footer class="footer footer-c">
				<div class="footer">
					<div class="container fluid-md-less">
						<section class="row">
							<aside class="col-md-6 col-md-offset-3">
								<!--logo-->
								<a class="footer-brand"
								   title="Go to home My Photographer"
								   aria-label="Go to home My Photographer"
								   href="./index.html">
									<figure>
										<picture>
											<source srcset="./images/logo.webp"
											        type="image/webp">
											<img class="img-responsive collapsed-brand"
											     src="./images/logo-white.png"
											     title="My Photographer white logo"
											     alt="My Photographer white logo">
										</picture>
									</figure>
								</a>
								<!--/logo-->
								<!--about-->
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus
									accusantium autem deleniti distinctio doloremque doloribus error, harum
									iusto laborum minima praesentium quae quas quisquam quod vel vero
									voluptates! Eos, fuga!
								</p>
								<!--/about-->
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
							<article class="col-md-6 col-md-offset-3">
								<header>
									<h2>
										Our data
									</h2>
								</header>
								<address>
									<div class="address">
										<p>
											<b>
												Address
											</b>
											:
											La Marina ST. 35, Santa Cruz de Tenerife, Spain
										</p>
									</div>
									<div class="address">
										<p>
											<b>
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
									<div class="address">
										<p>
											<b>
												Tel
											</b>
											:
											+34 922 985 058
										</p>
									</div>
									<div class="address">
										<p>
											<b>
												Cell
											</b>
											:
											+34 922 985 058
										</p>
									</div>
									<div class="address">
										<p>
											<b>
												Fax
											</b>
											:
											+34 922 985 058
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
								<header class="copyright">
									<p>
										My Photographer
										
									</p>
								</header>
							</article>
							<article class="col-md-12">
								<aside class="advice">
									
								</aside>
							</article>
						</section>
					</div>
				</div>
			</footer>
			
		</body>
	</html>
