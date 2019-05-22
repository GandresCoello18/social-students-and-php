<div id="aside" class="col-md-3">

						<!-- search widget -->
						<div class="widget search-widget">
							<form action="../buscar.php" method="get">
								<input class="input" type="text" name="search">
								<button><i class="fa fa-search"></i></button>
							</form>
						</div>
						<!-- /search widget -->

						<!-- category widget -->
						<div class="widget category-widget">
							<h3>Categorias</h3>
							<a class="category" href="#">Programacion estructurada<span><?php echo cantidad('estructurado', $conexion); ?></span></a>
							<a class="category" href="#">Metodologia de software<span><?php echo cantidad('metodologia', $conexion); ?></span></a>
							<a class="category" href="#">Bases de datos / Avanzado<span><?php echo cantidad('base_de_datos', $conexion); ?></span></a>
							<a class="category" href="#">Programacion Orientada Objetos<span><?php echo cantidad('poo', $conexion); ?></span></a>
							<a class="category" href="#">Aplicaciones Web<span><?php echo cantidad('aplicaciones web', $conexion); ?></span></a>
							<a class="category" href="#">Aplicaciones Moviles<span><?php echo cantidad('aplicaciones moviles', $conexion); ?></span></a>
						</div>
						<!-- /category widget -->

						<!-- posts widget -->
						<div class="widget posts-widget">
							<h3>Pots Recientes</h3>

							<!-- single posts -->
							<?php foreach(recientes($conexion) as $valor) : ?>
							<div class="single-post">
								<a class="single-post-img" href="<?php echo $valor['url']; ?>?user=<?php echo $valor['titulo']; ?>">
									<img src="../portada_post/<?php echo $valor['imagen']; ?>" alt="">
								</a>
								<a href="<?php echo $valor['url'] ?>?user=<?php echo $valor['titulo']; ?>"><?php echo $valor['titulo']; ?>.</a>
								<p><small>De : <?php echo $valor['usuario']; ?></small> - <small><?php echo $valor['fecha']; ?> .</small></p>
							</div>
							<?php endforeach; ?>
							<!-- /single posts -->
						</div>
						<!-- /posts widget -->

						<!-- tags widget -->
						<div class="widget tags-widget">
							<h3>Tags</h3>
							<a class="tag" href="../perfil-serie-cursos.php?tema=4">C++</a>
							<a class="tag" href="../perfil-serie-cursos.php?tema=1">Java</a>
							<a class="tag" href="../perfil-serie-cursos.php?tema=8">PHP</a>
							<a class="tag" href="../perfil-serie-cursos.php?tema=7">SQL</a>
							<a class="tag" href="#">JavaScript</a>
							<a class="tag" href="../perfil-serie-cursos.php?tema=2">Html</a>
							<a class="tag" href="#">Git</a>
							<a class="tag" href="#">Pruebas</a>
						</div>
						<!-- /tags widget -->

					</div>
					<!-- /aside blog -->
