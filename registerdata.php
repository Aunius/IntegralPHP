<?php
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$email=$_POST["email"];
$direccion=$_POST["direccion"];
$telefono=$_POST["numero"];
$contraseña=$_POST["contraseña"];

echo"Bienvenido usuario, se ha registrado con el nombre ".$nombre." el appelido ".$apellido." el email ".$email." la direccion ".$direccion." el telefono ".$telefono." y la contraseña ".$contraseña;
?>