<?php
    $title = 'Login / Registrate';
    require_once('includes/head.php');
    require_once('codigo_fuente/login.php');
?>

<style>
body{
    background-image: url('img/teclado.jpg');
    background-repeat: no-repeat;
    background-size: 100% 900px;
}
form{
    position: relative;
    margin: auto;
    width: 300px;
    top: 150px;
    background-color: #fff;
    padding: 10px;
    border-radius: 10px;
}
input{
    margin-top: 10px;
}
.acceder{
    background-color: #FF6700;
    color: #fff;
    border-radius: 13px;
}
#crear{
    font-weight: bold;
    position: relative;
    top: 10px;
    cursor: pointer;
}
#login{
    display: block;
}
#registro{
    display: none;
}
</style>

<section class="container-fluid">
    <div class="row">
        <div class="col-5">
            <form id="login">
                <h3 class="text-center">Social Students</h3>
                <input type="email" class="form-control text-center" require placeholder="Correo Electronico">
                <input type="password" class="form-control text-center" placeholder="Contraseña">
                <input type="submit" class="form-control btn acceder" value="Acceder">
                <p id="crear" onclick="crear_cuenta()">Crear una cuenta S-S...!</p>
            </form>

            <form id="registro">
                <h3 class="text-center">Social Students</h3>
                <input type="email" class="form-control text-center" require placeholder="Correo Electronico">
                <input type="text" class="form-control text-center" placeholder="Nombre de Usuario">
                <input type="password" class="form-control text-center" placeholder="Contraseña Minimo 7 caracter">
                <input type="password" class="form-control text-center" placeholder="Confirma Contraseña">
                <input type="submit" class="form-control btn acceder" value="Registrarse">
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