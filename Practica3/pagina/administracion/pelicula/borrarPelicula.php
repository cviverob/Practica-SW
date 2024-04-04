<?php

    require_once('../../../includes/config.php');
    
    if (isset($_POST['id'])) {
        if ($pelicula = es\ucm\fdi\aw\Pelicula::buscar($_POST['id']) && 
            es\ucm\fdi\aw\Pelicula::borrar($_POST['id'])) {
            unlink(RUTA_RAIZ . RUTA_PSTR . "/" . $pelicula->getRutaPoster()); 
            unlink(RUTA_RAIZ . RUTA_TRL . "/" . $pelicula->getRutaTrailer());
            header('location: ' . RUTA_APP . RUTA_ADMN);
        }
    }
    else {
        echo 'Error al borrar la película';
        exit();
    }