<!DOCTYPE html>
<html>
    <html lang "es">
    <header>
        <meta charset="utf8mb4">
		<link rel="stylesheet" type="text/css" href="../comun/estilo.css" />
        <title>Elmo cines</title>
    </header>
    <body>
        <?php require("../comun/cabecera.php") ?>
        <main>
            <form action = "procesarLogin.php" method = "post">
                <p></p>
                <a href = ""><button type = "button">Conectarse</button></a>
                <a href = "registro.php"><button type = "button">Registrarse</button></a>
                <p></p>
                *Correo:
                <input type="text" name="correo" value="<?php echo isset($_SESSION["correo"]) ? $_SESSION["correo"] : '' ?>" />
                <p></p>
                *Contraseña:
                <input type = "password" name = "contraseña" value = "" />
                <p></p>
                *Campo obligatorio
                <p></p>
                <button type = "submit">Iniciar sesión</button>
            </form>
        </main>
        <?php require("../comun/pie.php") ?>
    </body>
</html>