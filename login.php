<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="estilos.css">
    
</head>
<body>

<div class="login-box">
    


    <form method="post" action="login.php">
        <h3>Ingreso al Sistema</h3>
        <label for="txt1">Usuario</label>
        <input type="text" name="t1">
        </br>
        </br>
        <label for="txt1">Password</label>
        <input type="password" name="t2" required>
        </br>
        <input type="submit" name="submit" value="Ingresar">
    </form>
<?php
if($_POST){
    session_start();
    require('Conexion.php');
    $u = $_POST['t1'];
    $p = $_POST['t2'];
    $conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = $conexion ->prepare("SELECT * FROM user WHERE username= :u AND password = :p");
    $query->bindParam(":u", $u);
    $query->bindParam(":p", $p);
    $query->execute();
    $usuario = $query->fetch(PDO::FETCH_ASSOC);
    if($usuario){
        $_SESSION['usuario'] = $usuario["username"];
        header("location:home.php");

    }else{
        echo "Usuario o Password Incorrectos";
    }
        


}


?>


</body>
</html>