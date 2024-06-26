<!DOCTYPE html>
<html lang="es">
<script type = "text/javascript" src = <?php echo RUTA_APP . RUTA_JQUERY ?>></script>
<?php
    $scripts = $scripts ?? [];
    foreach ($scripts as $script) {
        echo "<script src = \"{$script}\"></script>";
    }
?>
<head>
    <meta charset = "utf-8">
    <meta http-equip = "X-UA-Compatible" content = "IE=edge">
    <meta name = "viewport" content = "width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" type = "text/css" href = "<?php echo RUTA_APP . RUTA_CSS ?>"/>
    <title><?= $tituloPagina ?></title>
</head>
<body>
    <div class="contenedor">
        <?php require(RUTA_RAIZ . RUTA_CBZ); ?>
        <main>
            <article>
                <?= $contenidoPrincipal ?>
            </article>
        </main>
        <?php require(RUTA_RAIZ . RUTA_PIE); ?>
    </div>
</body>
</html>