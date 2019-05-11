<?php
	$title = 'Importacia de Linux';
	require_once('includes/head_post.php');
?>
		<!-- /Header -->

		<!-- Hero-area -->
		<div class="hero-area section">

			<!-- Backgound Image -->
			<div class="bg-image bg-parallax overlay" style="background-image:url(../img/blog-post-background.jpg)"></div>
			<!-- /Backgound Image -->

			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1 text-center">
						<ul class="hero-area-tree">
							<li><a href="index.php">Inicio</a></li>
							<li><a href="blog.php">Blog</a></li>
							<li>Compartir es el Objetivo</li>
						</ul>
						<h1 class="white-text">La importancia de utilizar Linux</h1>
						<ul class="blog-post-meta">
							<li class="blog-meta-author">De : <a href="#">John Doe</a></li>
							<li>18 Oct, 2017</li>
							<li class="blog-meta-comments"><a href="#"><i class="fa fa-comments"></i> 35</a></li>
						</ul>
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

						<!-- blog post -->
						<div class="blog-post">
                            <div class="col-12">
	  	     	                <p class="p-2">Aunque no es muy conocido por los usuarios comunes, Linux es un sistema operativo que está presente en muchos dispositivos  y es de los más usados en los servidores. Veamos por que</p>
	  	     	                <p class="p-1"><strong>Estabilidad:</strong> una vez instalado el funcionamiento del sistema puede trabajar a largo plazo sin presentar fallas, a diferencia de Windows no requiere de reinicios para aplicar cambios o configuraciones al sistema.</p>
	  	     	                <p class="p-1"><strong>Seguridad:</strong> debido a que el sistema operativo es de código libre, todos los usuarios con conocimiento informático y programación pueden corregir estos errores para la comunidad. También Linux es atacado con menor frecuencia por virus o malware.</p>
	  	    	                <p class="p-1"><strong>Flexibilidad:</strong> puedes escoger el tamaño de recurso a utilizar es decir que no es necesario utilizar una interfaz gráfica si quieres reducir el consumo de memoria RAM .</p>
	  	     	                <p class="p-1"><strong>Costos:</strong> Linux es totalmente gratuito a pesar del propietario cuenta con licencia costosa para este producto.</p>
	  	     	                <p class="p-1"><strong>Libertad:</strong> está en total libertad en modificar a tu gusto la configuración, recursos, interfaz gráfica y todo lo necesario para satisfacer tus necesidades.</p>
	  	     	                <p class="p-1"><strong>Actualizaciones:</strong> aunque algunos les molesta estar instalando cada cierto tiempo paquetes de actualizacion, en linux los usuarios estan contentos de hacerlo ya que el software es mantenido por la comunidad y siempre encuentras algo increible.</p>

                                <div class="row">
	   	   	   	                    <div class="col-12 col-md-6">
	   	   	   		                    <p class="p-1"><strong>Comindad:</strong> Lunix es muy grande y gracias a esto todos se apoyan cuando tengan algun problema sin la necesidad de consultar el soporte tecnico.</p>
	   	   	   	                    </div>

	   	   	   	                    <div class="col-12 col-md-6">
	   	   	   		                    <div id="sabias">
	   	   	   			                    <h6 class="text-center">¿Sabias esto?</h6>
	   	   	   			                    <p class="p-2">La terminal de Linux es uno de los elementos mas amados ya que puedes realizar un sin numero de cosas que incluso no puedes hacerlo en otros sistemas operativos, desde aqui puedes realizar operaciones sin necesidad de una interfaz grafica.</p>
	   	   	   		                    </div>
	   	   	   	                    </div>
                                </div>
	  	                    </div>    
                        </div>
						<!-- /blog post -->

						<!-- blog share -->
						<div class="blog-share">
							<h4>Compartir Post:</h4>
							<a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
							<a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
						</div>
						<!-- /blog share -->

						<!-- blog comments -->
						<?php require_once('includes/comentarios.php'); ?>
						<!-- /blog comments -->
					</div>
					<!-- /main blog -->

					<!-- aside blog -->
					<?php include_once('includes/aside_post.php'); ?>
					<!-- /aside blog -->

				</div>
				<!-- row -->

			</div>
			<!-- container -->

		</div>
		<!-- /Blog -->

		<!-- Footer -->
<?php
	include_once('includes/footer-post.php');
?>