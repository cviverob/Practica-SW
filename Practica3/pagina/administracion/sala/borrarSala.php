<?php

    require_once('../../../includes/config.php');
    
    if (isset($_POST['id'])) {
        if (es\ucm\fdi\aw\Salas::borrar($_POST['id'])) {
            header('location: ' . RUTA_APP . RUTA_ADMN);
        }
    }
    else {
        echo 'Error al borrar la sala';
        exit();
    }