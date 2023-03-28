<?php

$usuario="admin";
$contraseña="admin";
$pin=1234;

$loginusuario=$_POST["usuario"];
$logincontraseña=$_POST["contraseña"];
$loginpin=$_POST["pin"];


if ($usuario == $loginusuario && $contraseña == $logincontraseña && $loginpin == $pin) {
    header("Location: http://localhost/integral/bienvenido.php");
    die();
} else {
    echo '<script language="javascript">alert("Usuario, contraseña o pin incorrectos");</script>';
};

?>