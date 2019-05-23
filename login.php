<?php
    include_once('codigo_fuente/sesion.php');
    $title = 'Login / Registrate';
    require_once('includes/head.php');
    require_once('codigo_fuente/login.php');
    if(!empty($_SESSION['cuenta_personal'])){
        header('location: perfil.php');
    }else{
        $_SESSION['cuenta_personal'] = null;
    }
    if(isset($_POST['accede_log'])){
        $correo = filter_var($_POST['correo_log'], FILTER_SANITIZE_STRING);
        $contra_log = $_POST['contra_log'];
        $objeto = new Login($correo, $contra_log);    
        $error_vacio = $objeto->validar($conexion);
    }
    if(isset($_POST['registrate'])){
        $correo_reg = filter_var($_POST['correo_reg'], FILTER_SANITIZE_STRING);
        $usuario_reg = filter_var($_POST['usuario_reg'], FILTER_SANITIZE_STRING);
        $contra_reg = $_POST['contra_reg']; 
        $contra_2_reg = $_POST['contra_2_reg'];
        $sexo = $_POST['sexo'];
        $objeto = new Registro($correo_reg, $usuario_reg, $contra_reg, $contra_2_reg,$sexo);
        $verificar_si_existe_db = $objeto->verificar($conexion,$correo_reg);
        $error_vacio = $objeto->guardar($conexion, $verificar_si_existe_db, $sexo);
    }
?>

<style>
body{
    background-image: url('img/teclado.webp');
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
            <form id="login" action="login.php" method="post">
                <h3 class="text-center">Social Students</h3>
                <?php if(!empty($error_vacio)) : ?>
                <p style="color: red;"><?php echo $error_vacio; ?></p>
                <?php endif; ?>
                <input type="email" name="correo_log" class="form-control text-center" require="true" placeholder="Correo Electronico" style="position: relative; top: 10px">
                <input type="password" name="contra_log" class="form-control text-center" placeholder="Contraseña" style="position: relative; top: 10px">
                <input type="submit" name="accede_log" class="form-control btn acceder" value="Acceder" style="background-color: #FF6700; color: #fff; border-radius: 13px; position: relative; top: 10px">
                <p id="crear" onclick="crear_cuenta()">Crear una cuenta S-S...!</p>
            </form>

            <form id="registro" action="login.php" method="post">
                <h3 class="text-center">Social Students</h3>
                <?php if(!empty($error_vacio)) : ?>
                <p style="color: red;"><?php echo $error_vacio; ?></p>
                <?php endif; ?>
                <input type="email" name="correo_reg" class="form-control text-center" require="true" placeholder="Correo Electronico" style="position: relative; top: 10px">
                <input type="text" name="usuario_reg" class="form-control text-center" placeholder="Nombre de Usuario" style="position: relative; top: 10px">
                <input type="password" name="contra_reg" class="form-control text-center" placeholder="Contraseña Minimo 7 caracter" style="position: relative; top: 10px">
                <input type="password" name="contra_2_reg" class="form-control text-center" placeholder="Confirma Contraseña" style="position: relative; top: 10px">
                <select class="form-control text-center" name="sexo" style="position: relative; top: 10px;">
                    <option value="genero">Genero</option>
                    <option value="masculino">Masculino</option>
                    <option value="femenino">Femenino</option>
                <select>
                <input type="submit" name="registrate" class="form-control btn acceder" value="Registrarse" style="background-color: #FF6700; color: #fff; border-radius: 13px; position: relative; top: 10px;">
                <p id="crear" onclick="inicia_session()">Inicia session..!</p>
            </form>
        </div>
    </div>
</section>

<!-- Google font -->
        <link href="https://fonts.googleapis.com/css?family=Lato:700%7CMontserrat:400,600" rel="stylesheet">

        <!-- Bootstrap -->
        <link href="https://social-students.herokuapp.com/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="https://social-students.herokuapp.com/font/flaticon.css" rel="stylesheet"/>
        <!-- Font Awesome Icon -->
        <link href="https://social-students.herokuapp.com/css/font-awesome.min.css" rel="stylesheet">

        <!-- Custom stlylesheet -->
        <link href="https://social-students.herokuapp.com/css/style.css" rel="stylesheet"/>
        <link href="https://social-students.herokuapp.com/css/modificacion.css" rel="stylesheet"/>


        <script src="js/login.js"></script>
        <script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/main.js"></script>
</body>
</html>