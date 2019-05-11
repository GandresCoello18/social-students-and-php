<?php

class Cursos{
    static function abstraer_cursos($num_curso, $conexion){
        if($num_curso == Null){
            $consulta = $conexion->prepare("SELECT * FROM cursos ORDER BY id_cursos DESC");
        }else{
            $consulta = $conexion->prepare("SELECT * FROM cursos ORDER BY id_cursos DESC LIMIT $num_curso");
        }
        $consulta->execute();
        $consulta = $consulta->fetchAll();
        return $consulta;
    }
}

?>