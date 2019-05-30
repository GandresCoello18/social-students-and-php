<?php
include_once('codigo_fuente/sesion.php');
 $tema=($_GET['tema']);
if(empty($_GET['video'])){
    $video = null;
}else{
    $video=($_GET['video']);
}
if(!empty($_SESSION['cuenta_personal'])){
    $cuenta_personal = $_SESSION['cuenta_personal'];
    include_once('codigo_fuente/perfil-serie-cursos.php');
    $title = $consulta[1];
}else{
    $title = "Usuario no Registrado";
    if($video) header('location: login.php');
}
include_once('includes/head.php');
include_once('codigo_fuente/serie-cursos-DB.php'); ?>
        <div class="hero-area section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/lenguaje.webp)"></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 text-center">
						<ul class="hero-area-tree">
							<li><a href="index">Inicio</a></li>
							<li><a href="perfil">Perfil</a></li>
							<li>Compartir es el objetivo</li>
						</ul>
                        <?php if(!empty($_SESSION['cuenta_personal'])) : ?>
                            <h1 class='white-text'><?php echo $consulta[1]; ?></h1>
                        <?php else: ?>
                            <h1 class='white-text'>Usuario no registrado</h1>
                        <?php endif; ?>       
					</div>
				</div>
			</div>
		</div>

<section class="container-fluid">
    <div class="row justity-content-center" id="video-e-seccion">
        <div class="col-12 col-md-7">
        <iframe id="video" src="https://www.youtube.com/embed/1TXJZgZs1wQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p></p>
                <div class="row">
                    <div class="col-12">
        				<!-- /blog comments -->
                        <?php
                            if(!empty($video)){
                                require_once('includes/comentarios.php');
                            }
                        ?>
                    </div>
                </div>
        </div>
        <div class="col-12 col-md-4">
            <div class="row ">
            <?php foreach($consulta_item_cursos as $valor) : ?>
                <div class="col-12 alert <?php echo $valor['alert']; ?>"><a href="?tema=<?php echo $tema; ?>&video=<?php echo $valor['id_serie']; ?>"><?php echo $valor['item_video']; ?></a> ---- <?php echo $valor['minutos']; ?> min</div>
            <?php endforeach; ?>
            </div>
        </div>    
    </div>
<section>

<?php include_once('includes/footer.php'); ?>