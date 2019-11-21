<?php
    class Login{
        function __construct($correo_log, $contra_log){
            $this->correo = $correo_log;
            $this->contra_log = $contra_log;
        }

        function validar($conexion){
            if($this->correo == '' || $this->contra_log == ''){
                return "Rellene los campos e intentelo de nuevo";
            }else{
                $consulta = $conexion->prepare('SELECT * FROM cuentas_usuario WHERE correo = :correo');
                $consulta->execute(array(
                    ':correo' => $this->correo
                ));
                $consulta = $consulta->fetchall();
                 if(password_verify($this->contra_log, $consulta[0]['contrasena']) == 0){
                    header('location: login');
                 }else if(password_verify($this->contra_log, $consulta[0]['contrasena']) > 0){
                    if(empty($_COOKIE['correo'])){
                        setcookie("correo", $this->correo, time()+60*60*24*30, '/');
                        setcookie("contrasena", $this->contra_log, time()+60*60*24*30, '/');
                    }
                    $_SESSION['cuenta_personal'] = $consulta[0][0];
                    //header('location: perfil');
                    echo "<script type='text/javascript'>window.location.href = 'perfil';</script>";
                 }else{
                    return "Datos incorrectos, vuelva a intentarlo";
                }
            }
        }

    }


    class Registro{
        function __construct($correo_reg, $usuario_reg, $contra_reg, $contra_2_reg, $sexo){
            $this->correo_reg = $correo_reg;
            $this->usuario_reg = $usuario_reg; 
            $this->contra_reg = $contra_reg; 
            $this->contra_2_reg = $contra_2_reg;
            $this->sexo = $sexo;
        }

        function guardar($conexion, $verificar_DB, $sexo){
            $random_avatar = rand(1,8);
            if($sexo == 'masculino'){
                $avatar_img = [1,3,5,7,8,10,13,15];
            }else{
                $avatar_img = [2,4,6,9,11,12,14,16];
            }
            if($this->correo_reg == '' || $this->usuario_reg == '' || $this->contra_reg == '' || $this->contra_2_reg == '' || $this->sexo == 'genero'){
                return "Rellene los campos e intentelo de nuevo";
            }else if($this->contra_reg !== $this->contra_2_reg){
                return "Las contrasenas no coinciden, vuelve a intentarlo";
            }else if(strlen($this->contra_reg) < 7){
                return "Se necesita 7 o mas caracteres en contrasena";
            }else if(count($verificar_DB) > 0){
                return "El correo ".$this->correo_reg." ya forma parte de social students, utilice  otro";
            }else{
                $insertar = $conexion->prepare("INSERT INTO cuentas_usuario (usuario, correo, contrasena, avatar) VALUES (:usuario, :correo, :contrasena, :avatar )");
                $insertar->execute(array(
                    ':usuario' => strtoupper($this->usuario_reg),
                    ':correo' => $this->correo_reg,
                    ':contrasena' => password_hash($this->contra_reg, PASSWORD_DEFAULT),
                    ':avatar' => "avatar-".$avatar_img[$random_avatar].".webp"
                ));
                $nombre = $this->usuario_reg;
                $correo = $this->correo_reg;
                include_once('EmailPHP/enviar_email.php');
                }
        }

        function verificar($conexion,$email){
            $verificar = $conexion->prepare("SELECT * FROM cuentas_usuario WHERE correo = :correo");
            $verificar->execute(array(
                ':correo' => $email
            ));
            $verificar = $verificar->fetchall();
            return $verificar;
        }

    }

?>