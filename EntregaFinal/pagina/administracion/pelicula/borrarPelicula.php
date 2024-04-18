<?php

    require_once('../../../includes/config.php');
    require_once(RUTA_RAIZ . RUTA_UTILS);
    
    if (comprobarPermisos($_SESSION["esAdmin"])) {
        if (isset($_POST['id'])) {
            $pelicula = es\ucm\fdi\aw\pelicula::buscar($_POST['id']);
            if ($pelicula && es\ucm\fdi\aw\pelicula::borrar($_POST['id'])) {
                unlink(RUTA_RAIZ . RUTA_PSTR . "/" . $pelicula->getRutaPoster()); 
                unlink(RUTA_RAIZ . RUTA_TRL . "/" . $pelicula->getRutaTrailer());
                header('location: ' . RUTA_APP . RUTA_ADMN);
            }
        }
        else {
            echo 'Error al borrar la película';
            exit();
        }
    }