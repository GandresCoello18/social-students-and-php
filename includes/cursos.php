<?php 
require_once('codigo_fuente/cursos.php');
		if($title == 'Social Students'){
			$objeto = new Cursos();
			$resul = $objeto::abstraer_cursos(4,$conexion);
		}else{
			$objeto = new Cursos();
			$resul = $objeto::abstraer_cursos(null,$conexion);
		}
?>
<div id="courses-wrapper" class="container">
					<!-- row -->
					<div class="row">
						<!-- single course -->
						<?php foreach($resul as $valor) : ?>
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="perfil-serie-cursos?tema=<?php echo $valor['id_cursos']; ?>" class="course-img">
									<img src="./img/<?php echo $valor['imagen']; ?>" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="perfil-serie-cursos?tema=<?php echo $valor['id_cursos']; ?>"><?php echo $valor['titulo']; ?></a>
								<div class="course-details">
									<span class="course-category"><?php echo $valor['categoria']; ?></span>
									<span class="course-price course-free"><?php echo $valor['cantidad']; ?> Videos</span>
								</div>
							</div>
						</div>
						<?php endforeach; ?>
						<!-- /single course -->
					</div>
</div>
