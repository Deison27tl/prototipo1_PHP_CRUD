<?php

include("conexion.php");
$con=conectar();

$id_usuario=$_POST['id_usuario'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$rol=$_POST['rol'];
$correo=$_POST['correo'];

$sql="UPDATE registro_usuario SET  nombres='$nombres',apellidos='$apellidos',rol='$rol',correo='$correo' WHERE id_usuario='$id_usuario'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: usuarios.php");
    }
?>