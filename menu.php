<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<body>
    <h1><?php echo "Acceso al sistema";?></h1>
    <h3>Usuario: <?php echo $_SESSION ['boleta']?></h3>
    

        <table style="margin: 0 auto ; background-color: rgb(184, 223, 241);">
            <tr>
                <td><a href="index.php">Alta de documentos</a></td>
            </tr>
            <tr>
            <td><a href="cerrar_sesion.php">Cerar sesion</a></td>
            </tr>
        </table>
</body> 
</html>