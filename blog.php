<?php
	require_once('codigo_fuente/sesion.php');
	$title = 'Blog';
	require_once('includes/head.php');
	require_once('codigo_fuente/blog.php');
	$objeto = new Blog();
	$post = $objeto::post_article($conexion);
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
							<li><a href="index.php">Inicio</a></li>
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
							<?php foreach($post as $valor) : ?>
							<div class="col-md-6">
								<div class="single-blog">
									<div class="blog-img">
										<a href="articulos/<?php echo $valor['url']; ?>">
											<img src="./img/<?php echo $valor['imagen']; ?>" alt="">
										</a>
									</div>
									<h4><a href="articulos/<?php echo $valor['url']; ?>"><?php echo $valor['titulo']; ?></a></h4>
									<div class="blog-meta">
										<span class="blog-meta-author">By: <a href="#">John Doe</a></span>
										<div class="pull-right">
											<span><?php echo $valor['fecha']; ?></span>
											<span class="blog-meta-comments"><a href="articulos/<?php echo $valor['url']; ?>"><i class="fa fa-comments"></i><?php echo $valor['comentario']; ?></a></span>
										</div>
									</div>
								</div>
							</div>
							<?php endforeach; ?>
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