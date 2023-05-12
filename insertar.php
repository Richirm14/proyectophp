<?php

include("conexion.php");

$sql = "INSERT INTO  usuarios(nombre,apellido,edad) VALUES ('erick','gomez','21')";

$res = $conexion->query($sql);

if($res){
    echo "Dato agregado exitosamente";
}else{
    echo "fallo la insercion";
}

?>