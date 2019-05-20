<?php

class Blog{
    public function post_article($conexion){
        $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
        $post_pagina = 6;
        $inicio = ($pagina > 1) ? ($pagina * $post_pagina - $post_pagina) : 0;
        $consulta = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM post INNER JOIN cuentas_usuario ON post.id_usuario = cuentas_usuario.id_usuario ORDER BY id_post DESC Limit $inicio, $post_pagina"); //LIMIT 0,6
        $consulta->execute();
        $consulta = $consulta->fetchall();

        return $consulta;
    
    }
    
    public function paginacion($conexion){
        $post_pagina = 6;
        $total_filas = $conexion->query("SELECT FOUND_ROWS() as total");
        $total_filas = $total_filas->fetch()['total'];
        $numero_pagina = ceil($total_filas / $post_pagina);
        return $numero_pagina;
    }
}

?>