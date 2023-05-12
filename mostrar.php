<?php

include("conexion.php");

$sql = "SELECT * FROM usuarios";
$res = $conexion->query($sql);

while($usuario = $res-> fetch_assoc()){
    echo "Usuario No: " . $usuario['id'] . "<br>";
    echo "Su Nombre es: " . $usuario['nombre'] . "<br>";
    echo "Su Apellido es: " . $usuario['apellido'] . "<br>";
    echo "Su Edadmes: " . $usuario['edad'] . "<br><br>";
}

?>