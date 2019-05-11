<?php
	$title = 'Blog';
	require_once('includes/head.php');
	require_once('codigo_fuente/blog.php');
	$objeto = new Blog();
	$objeto::post_article($conexion);
?>
		<!-- Hero-area -->
		<div class="hero-area section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/page-background.jpg)"></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 text-center">
						<ul class="hero-area-tree">
							<li><a href="index.html">Inicio</a></li>
							<li>Blog</li>
						</ul>
						<h1 class="white-text">Nuestros Post</h1>

					</div>
				</div>
			</div>

		</div>
		<!-- /Hero-area -->

		<!-- Blog -->
		<div id="blog" class="section">

			<!-- container -->
			<div class="container">

				<!-- row -->
				<div class="row">

					<!-- main blog -->
					<div id="main" class="col-md-9">

						<!-- row -->
						<div class="row">

							<!-- single blog -->
							<div class="col-md-6">
								<div class="single-blog">
									<div class="blog-img">
										<a href="blog-post.html">
											<img src="./img/blog01.jpg" alt="">
										</a>
									</div>
									<h4><a href="blog-post.html">Pro eu error molestie deserunt. At per viderer bonorum persecuti.</a></h4>
									<div class="blog-meta">
										<span class="blog-meta-author">By: <a href="#">John Doe</a></span>
										<div class="pull-right">
											<span>18 Oct, 2017</span>
											<span class="blog-meta-comments"><a href="#"><i class="fa fa-comments"></i> 35</a></span>
										</div>
									</div>
								</div>
							</div>
							<!-- /single blog -->

							<!-- single blog -->
							<div class="col-md-6">
								<div class="single-blog">
									<div class="blog-img">
										<a href="blog-post.php">
											<img src="./img/blog02.jpg" alt="">
										</a>
									</div>
									<h4><a href="blog-post.php">Pro eu error molestie deserunt. At per viderer bonorum persecuti.</a></h4>
									<div class="blog-meta">
										<span class="blog-meta-author">By: <a href="#">John Doe</a></span>
										<div class="pull-right">
											<span>18 Oct, 2017</span>
											<span class="blog-meta-comments"><a href="#"><i class="fa fa-comments"></i> 35</a></span>
										</div>
									</div>
								</div>
							</div>
							<!-- /single blog -->

							<!-- single blog -->
							<div class="col-md-6">
								<div class="single-blog">
									<div class="blog-img">
										<a href="blog-post.phpl">
											<img src="./img/blog03.jpg" alt="">
										</a>
									</div>
									<h4><a href="blog-post.php">Pro eu error molestie deserunt. At per viderer bonorum persecuti.</a></h4>
									<div class="blog-meta">
										<span class="blog-meta-author">By: <a href="#">John Doe</a></span>
										<div class="pull-right">
											<span>18 Oct, 2017</span>
											<span class="blog-meta-comments"><a href="#"><i class="fa fa-comments"></i> 35</a></span>
										</div>
									</div>
								</div>
							</div>
							<!-- /single blog -->

							<!-- single blog -->
							<div class="col-md-6">
								<div class="single-blog">
									<div class="blog-img">
										<a href="blog-post.php">
											<img src="./img/blog04.jpg" alt="">
										</a>
									</div>
									<h4><a href="blog-post.php">Pro eu error molestie deserunt. At per viderer bonorum persecuti.</a></h4>
									<div class="blog-meta">
										<span class="blog-meta-author">By: <a href="#">John Doe</a></span>
										<div class="pull-right">
											<span>18 Oct, 2017</span>
											<span class="blog-meta-comments"><a href="#"><i class="fa fa-comments"></i> 35</a></span>
										</div>
									</div>
								</div>
							</div>
							<!-- /single blog -->

						</div>
						<!-- /row -->

						<!-- row -->
						<div class="row">

							<!-- pagination -->
							<div class="col-md-12">
								<div class="post-pagination">
									<a href="#" class="pagination-back pull-left">Back</a>
									<ul class="pages">
										<li class="active">1</li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
									</ul>
									<a href="#" class="pagination-next pull-right">Next</a>
								</div>
							</div>
							<!-- pagination -->

						</div>
						<!-- /row -->
					</div>
					<!-- /main blog -->

					<!-- aside blog -->
					<?php include_once('includes/aside_post.php'); ?>
				</div>
				<!-- row -->

			</div>
			<!-- container -->

		</div>
		<!-- /Blog -->

		<!-- Footer -->
<?php
	include_once('includes/footer.php');
?>