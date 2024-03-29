<?php
    require_once('../../../includes/config.php');
    require_once(RUTA_RAIZ . RUTA_USU);
    require_once(RUTA_RAIZ . RUTA_COMP_PERM);
    
    $_SESSION['modo'] = "admin";

    $tituloPagina = 'Administración';

    $contenidoPrincipal = comprobarPermisos($_SESSION["usuario_admin"]);
    if (!$contenidoPrincipal) {
        $ruta_and_pel = RUTA_APP . RUTA_AND_PEL;
        $ruta_bsc_pel = RUTA_APP . RUTA_BSC_PEL;
        $ruta_and_ses = RUTA_APP . RUTA_AND_SES;
        $ruta_bsc_ses = RUTA_APP . RUTA_BSC_SES;
        $ruta_and_sal = RUTA_APP . RUTA_AND_SALA;
        $ruta_bsc_sal = RUTA_APP . RUTA_BSC_SALA;
        $contenidoPrincipal = <<< EOS
            <h2>Gestión de películas<h2>
            <a href = "$ruta_and_pel"><button type = 'button'>Añadir</button></a>
            <a href = "$ruta_bsc_pel"><button type = 'button'>Buscar</button></a>
            <h2>Gestión de cartelera<h2>
            <a href = "$ruta_and_ses"><button type = 'button'>Añadir</button></a>
            <a href = "$ruta_bsc_ses"><button type = 'button'>Buscar</button></a>
            <h2>Gestión de salas<h2>
            <a href = "$ruta_and_sal"><button type = 'button'>Añadir</button></a>
            <a href = "$ruta_bsc_sal"><button type = 'button'>Buscar</button></a>
            <p></p>
        EOS;
    }

    require_once(RUTA_RAIZ . RUTA_PLNT);