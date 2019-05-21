<?php
    $title = 'Buscar contenido en Social students';
    include_once('includes/head.php');
    $buscando = filter_var($_GET['search'], FILTER_SANITIZE_STRING);
    include_once('codigo_fuente/buscar.php');
?>
<div class="hero-area section">

<!-- Backgound Image -->
<div class="bg-image bg-parallax overlay" style="background-image:url(./img/blog04.jpg)"></div>
<!-- /Backgound Image -->

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1 text-center">
            <ul class="hero-area-tree">
                <li><a href="index.php">Inicio</a></li>
                <li>Buscar</li>
            </ul>
            <h1 class="white-text">Tus resultados de busqueda.</h1>

        </div>
    </div>
</div>

</div>
<!--///////////////////////////////////-->

<section class="container">
    <div class="row" style="position: relative; top: 30px;">

<!-- single blog -->
        <?php foreach($post as $valor) : ?>
            <div class="col-md-6">
                <div class="single-blog">
                    <div class="blog-img">
                        <a href="articulos/<?php echo $valor['url']; ?>?user=<?php echo $valor['titulo']; ?>">
                        <img src="./img/<?php echo $valor['imagen']; ?>" alt="">
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
</section>


<div id="courses-wrapper" class="container" style="position: relative; top: 30px;">
					<!-- row -->
					<div class="row">
						<!-- single course -->
						<?php foreach($resul as $valor) : ?>
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="course">
								<a href="perfil-serie-cursos.php?tema=<?php echo $valor['id_cursos']; ?>" class="course-img">
									<img src="./img/<?php echo $valor['imagen']; ?>" alt="">
									<i class="course-link-icon fa fa-link"></i>
								</a>
								<a class="course-title" href="perfil-serie-cursos.php?tema=<?php echo $valor['id_cursos']; ?>"><?php echo $valor['titulo']; ?></a>
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
<?php if($post == null && $resul == null) 
    echo "<div class='alert alert-danger'>
         No se encontro { $buscando } ni algun otro contenido que especificastes, por favor intente con una palabras mas comun. 
    </div>";
?>

<?php include_once('includes/footer.php'); ?>