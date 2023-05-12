<?php

include("conexion.php");

//$sql = "SELECT * FROM usuarios WHERE id='2'";
//$sql = "SELECT * FROM usuarios WHERE edad > 21'";
//$sql = "SELECT * FROM usuarios WHERE apellido LIKE '%a%'";
$sql = "SELECT * FROM usuarios ORDER BY id ASC";

$res = $conexion->query($sql);

while($usuario = $res-> fetch_assoc()){
    echo "Usuario No: " . $usuario['id'] . "<br>";
    echo "Su Nombre es: " . $usuario['nombre'] . "<br>";
    echo "Su Apellido es: " . $usuario['apellido'] . "<br>";
    echo "Su Edadmes: " . $usuario['edad'] . "<br><br>";
}

?>