<?php $title = 'Andres coello goyes';
include_once('includes/head.php'); ?>
        <div class="hero-area section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(./img/lenguaje.jpg)"></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 text-center">
						<ul class="hero-area-tree">
							<li><a href="index.php">Inicio</a></li>
							<li><a href="perfil.php">Perfil</a></li>
							<li>Compartir es el objetivo</li>
						</ul>
						<h1 class="white-text">Andres Coello Goyes</h1>
					</div>
				</div>
			</div>
		</div>

<section class="container-fluid">
    <div class="row justity-content-center" id="video-e-seccion">
        <div class="col-12 col-md-7">
        <iframe id="video" src="https://www.youtube.com/embed/1TXJZgZs1wQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <p></p>
        </div>
        <div class="col-12 col-md-4">
            <div class="row ">
                <div class="col-12 alert alert-success">Intrduccion al desarrollo con JAVA ---- 12 min</div>
                <div class="col-12 alert alert-danger">Entorno de trabajo ---- 5 min</div>
                <div class="col-12 alert alert-danger">Variables locales / Globales ---- 7 min</div>
                <div class="col-12 alert alert-danger">operadores logicos / Aritmeticos ---- 5 min</div>
                <div class="col-12 alert alert-danger">condiciones o desiciones ---- 6 min</div>
                <div class="col-12 alert alert-danger">Ciclos o Bucles repetitivos ---- 5 min</div>
                <div class="col-12 alert alert-danger">Funciones o bloques de codigo ---- 8 min</div>
                <div class="col-12 alert alert-danger">Mini proyecto "pelea virtual" ---- 6 min</div>
            </div>
        </div>    
    </div>

    <div class="row">
        <div class="col-12">
        				<!-- /blog comments -->
					<?php require_once('includes/comentarios.php'); ?>
        </div>
    </div>
<section>

<?php include_once('includes/footer.php'); ?>