<?php
    class Contact{
        static function Guargar($datos, $conexion){
            if($datos[0] != '' && $datos[1] != '' && $datos[2] != '' && $datos[3] != ''){
                $Insertar = $conexion->prepare("INSERT INTO contactarme (nombre, email, asunto, mensaje) VALUES (:nombre, :email, :asunto, :mensaje)");
                $Insertar->execute(array(
                    ':nombre' => $datos[0],
                    ':email' => $datos[1],
                    ':asunto' => $datos[2],
                    ':mensaje' => $datos[3]
                ));                
            }else{
                echo "<script type='text/javascript'>alert('campos vacios, por favor vuelva a intentarlo');</script>";
            }
        }
    }
?>