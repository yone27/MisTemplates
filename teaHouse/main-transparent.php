


use frontend\web\themes\teaHouse\assets\AppAsset;



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
			
			<header class="menu-mini"
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
							   title="Go to home My Tea House"
							   aria-label="Go to home My Tea House"
							   href="./index.html">
								<figure>
									<picture>
										<source srcset="./images/logo.webp"
										        type="image/webp">
										<img src="./images/logo.png"
										     title="My Tea House Logo"
										     alt="My Tea House Logo">
									</picture>
								</figure>
							</a>
							<!--/logo-->
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse"
						     id="menu"
						     aria-expanded="false">
							<a title="Go to home My Tea House"
							   aria-label="Go to home My Tea House"
							   href="./index.html">
								<figure>
									<picture>
										<source srcset="./images/logo-white.webp"
										        type="image/webp">
										<img class="img-responsive collapsed-brand"
										     src="./images/logo-white.png"
										     title="My Tea House white logo"
										     alt="My Tea House white logo">
									</picture>
								</figure>
							</a>
							<!--Menu-->
							<?= MenuLoaderPreview::widget([
								'ulClass' => 'nav navbar-nav navbar-right',
								'theme'   => 'teaHouse',
								'menu'    => [
									['label' => Yii::t('teaHouse', 'Home'), 'view' => '/site/index'],
									['label' => Yii::t('teaHouse', 'About us'), 'view' => '/site/about'],
									['label' => Yii::t('teaHouse', 'Products'), 'view' => '/wProducts/index'],
									['label' => Yii::t('teaHouse', 'News'), 'view' => '/wNews/index'],
									['label' => Yii::t('teaHouse', 'Contact us'), 'view' => '/site/contacts'],
								],
							]); 
							<!--/Menu-->
						</div>
					</div>
				</nav>
			</header>
			<main class="wrapper">
				
			</main>
			<footer class="footer footer-d">
				<div class="footer">
					<div class="container fluid-md-less">
						<section class="row">
							<aside class="col-md-4">
								<a class="footer-brand"
								   title="Go to home My Tea House"
								   aria-label="Go to home My Tea House"
								   href="./index.html">
									<figure>
										<picture>
											<source srcset="./images/logo-white.webp"
											        type="image/webp">
											<img class="img-responsive collapsed-brand"
											     src="./images/logo-white.png"
											     title="My Tea House white logo"
											     alt="My Tea House white logo">
										</picture>
									</figure>
								</a>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. A asperiores cumque
									dolores et eum, inventore ipsa ipsum quibusdam rerum, sed vel vero! Earum error
									fugit maxime molestiae ratione unde voluptates.
								</p>
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
							<article class="col-md-4">
								<header>
									<h2>
										Latest from <strong>blog</strong>
									</h2>
								</header>
								<article class="card card-news card-news-d">
									<aside class="aspect-rectangular hover-scale">
										<a title="image title"
										   aria-label="image title"
										   href="./viewBlog.html">
											<figure>
												<picture>
													<source srcset="./images/demo-news1.webp"
													        type="image/webp">
													<img 
													     src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
													     data-original="./images/demo-news1.jpg"
													     title="image title"
													     alt="image description">
												</picture>
											</figure>
										</a>
									</aside>
									<header class="content">
										<h2 class="h5">
											<a title="Lorem ipsum dolor sit amet, consectetur"
											   aria-label="Lorem ipsum dolor sit amet, consectetur"
											   href="./viewBlog.html">
												<strong>Lorem ipsum dolor sit amet, consectetur.</strong>
											</a>
										</h2>
										<time class="date"
										      datetime="2020-08-16T11:32:46+00:00">
											Apr 26, 2020
										</time>
									</header>
								</article>
								<article class="card card-news card-news-d">
									<aside class="aspect-rectangular hover-scale">
										<a title="image title"
										   aria-label="image title"
										   href="./viewBlog.html">
											<figure>
												<picture>
													<source srcset="./images/demo-news2.webp"
													        type="image/webp">
													<img 
													     src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
													     data-original="./images/demo-news2.jpg"
													     title="image title"
													     alt="image description">
												</picture>
											</figure>
										</a>
									</aside>
									<header class="content">
										<h2 class="h5">
											<a title="Lorem ipsum dolor sit amet, consectetur"
											   aria-label="Lorem ipsum dolor sit amet, consectetur"
											   href="./viewBlog.html">
												<strong>Lorem ipsum dolor sit amet, consectetur.</strong>
											</a>
										</h2>
										<time class="date"
										      datetime="2020-08-16T11:32:46+00:00">
											Apr 26, 2020
										</time>
									</header>
								</article>
								<article class="card card-news card-news-d">
									<aside class="aspect-rectangular hover-scale">
										<a title="image title"
										   aria-label="image title"
										   href="./viewBlog.html">
											<figure>
												<picture>
													<source srcset="./images/demo-news3.webp"
													        type="image/webp">
													<img 
													     src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
													     data-original="./images/demo-news3.jpg"
													     title="image title"
													     alt="image description">
												</picture>
											</figure>
										</a>
									</aside>
									<header class="content">
										<h2 class="h5">
											<a title="Lorem ipsum dolor sit amet, consectetur"
											   aria-label="Lorem ipsum dolor sit amet, consectetur"
											   href="./viewBlog.html">
												<strong>Lorem ipsum dolor sit amet, consectetur.</strong>
											</a>
										</h2>
										<time class="date"
										      datetime="2020-08-16T11:32:46+00:00">
											Apr 26, 2020
										</time>
									</header>
								</article>
							</article>
							<article class="col-md-4">
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
								<header>
									<h2>
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
							<article class="col-md-6">
								<aside class="advice">
									
								</aside>
							</article>
							<article class="col-md-6">
								<header class="copyright">
									<p>
										My Tea House
										
									</p>
								</header>
							</article>
						</section>
					</div>
				</div>
			</footer>
			
		</body>
	</html>
