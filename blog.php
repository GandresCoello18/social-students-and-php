<?php
	require_once('codigo_fuente/sesion.php');
	if(empty($_GET['pagina'])) $_GET['pagina'] = 1;
	$title = 'Blog';
	require_once('includes/head.php');
	require_once('codigo_fuente/blog.php');
	$objeto = new Blog();
	$post = $objeto->post_article($conexion);
	$boton_pagina = $objeto->paginacion($conexion);
?>
		<!-- Hero-area -->
		<div class="hero-area section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/page-background.webp)"></div>
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
										<a href="articulos/<?php echo $valor['url']; ?>?user=<?php echo $valor['titulo']; ?>">
											<img src="./portada_post/<?php echo $valor['imagen']; ?>" alt="">
										</a>
									</div>
									<h4><a href="articulos/<?php echo $valor['url']; ?>"><?php echo $valor['titulo']; ?></a></h4>
									<div class="blog-meta">
										<span class="blog-meta-author">De: <a href="#"><?php echo $valor['usuario']; ?></a></span>
										<div class="pull-right">
											<span><?php echo $valor['fecha']; ?></span>
											<span class="blog-meta-comments"><a href="articulos/<?php echo $valor['url']; ?>"><i class="fa fa-comments"></i><?php //echo $valor['comentario']; ?></a></span>
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
								<?php $anterior = $_GET['pagina'] - 1;
									 	echo "<a href='?pagina=$anterior' class='pagination-back pull-left'>Back</a>"; 
									?>
									<ul class="pages">
										<?php
											for($i = 1; $i<=$boton_pagina; $i++){
												if($_GET['pagina'] == $i){
													echo "<li class='active'><a style='color:#fff' href='?pagina=$i'>$i</a></li>";
												}else{
													echo "<li><a href='?pagina=$i'>$i</a></li>";
												}
											}
										?>
									</ul>
									<?php $siguiente = $_GET['pagina'] + 1;
										if($siguiente > $boton_pagina) $siguiente = 1;
									 	echo "<a href='?pagina=$siguiente' class='pagination-next pull-right'>Next</a>"; 
									?>
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