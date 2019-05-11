<?php

class Blog{
    static function post_article($conexion){
        $consulta = $conexion->prepare("SELECT * FROM post LIMIT 10");
        $consulta-execute();
        $consulta = $consulta->fetchall();
        return $consulta;
    }
}

?>