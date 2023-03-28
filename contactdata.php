<?php
$email="admin@admin";
$useremail=$_POST["email"];

if ($email==$useremail) {
    if (isset($_POST["enviar"])) {
        $mensaje=$_POST["mensaje"];
    };
    foreach ($mensaje as $key => $value) {
        echo $value." ";
    };
}else {
    echo "El email no existe";
};

/* //Creo un arreglo mensaje con los datos que vienen del formulario 

if (isset($_POST["enviar"])) {
    $mensaje=$_POST["mensaje"];
};

//recorro todos los datos del arreglo y los muestro por pantalla
foreach ($mensaje as $key => $value) {
    echo $value." ";
} */
?>