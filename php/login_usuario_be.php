<?php

include 'conexion_be.php';

$correo = $_POST['correo'];
$contraseña = $_POST['contraseña'];

$validar_login = mysqli_query($conexion, "SELECT * FROM usuario WHERE correo='$correo'
and contraseña='$contraseña'");

if(mysqli_num_rows($validar_login) > 0){
    header("location: ../bienvenida.php");
    exit;
}else{
    echo'
    <script>
        alert("Usuario no existe por favor verifique los datos introducidos");
        window.location = "../index.php";
    </script>
    ';
    exit;
}

?>


