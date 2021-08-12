<?php
$conexion = null;
$servidor = 'localhost';
$bd = 'login';
$user = 'root';
$pass = '';

try{
    $conexion = new PDO('mysql:host='.$servidor.';dbname='.$bd, $user, $pass);
}catch(PDOException $e){
    echo "conexión Fallida!";
    exit;
}
return $conexion;

?>