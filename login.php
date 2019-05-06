<?php
    require_once('includes/head.php');
?>

<style>
body{
    background-image: url('img/teclado.jpg');
    background-repeat: no-repeat;
    background-size: 100% 900px;
}
</style>

<section class="container-fluid">
    <div class="row">
        <div class="col-5">
            <form id="login">
                <h3 class="text-center">Social Students</h3>
                <input type="email" class="form-control text-center" require placeholder="Correo">
                <input type="password" class="form-control text-center" placeholder="Contraseña">
                <input type="button" class="form-control btn acceder" value="Acceder">
                <p id="crear" onclick="crear_cuenta()">Crear una cuenta S-S...!</p>
            </form>

            <form id="registro">
                <h3 class="text-center">Social Students</h3>
                <input type="email" class="form-control text-center" require placeholder="Correo">
                <input type="password" class="form-control text-center" placeholder="Contraseña">
                <input type="password" class="form-control text-center" placeholder="Contraseña">
                <input type="button" class="form-control btn acceder" value="Registrarse">
                <p id="crear" onclick="inicia_session()">Inicia session..!</p>
            </form>
        </div>
    </div>
</section>


        <script type="text/javascript" src="js/login.js"></script>
        <script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>
</body>
</html>