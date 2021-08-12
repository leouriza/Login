<?php
session_start();
if(isset($_SESSION["usuario"])){

?>



<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Control</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div class="login-box">
    <h2><?php echo "<h4>Bienvenido - ".$_SESSION['usuario']."</h4>";?></h2>

    <li type="text"><a type="boton" href="#">Inicio</a></li>
    <li type="text"><a type="boton" href="salir.php">Cerrar Sesion</a></li>
    </div>
</body>
</html>

<?php
}else{
    header("location:login.php");
}
?>