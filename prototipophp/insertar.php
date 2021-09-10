<?php
include("conexion.php");
$con=conectar();

$id_usuario=$_POST['id_usuario'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$rol=$_POST['rol'];
$correo=$_POST['correo'];

$sql="INSERT INTO registro_usuario VALUES('$id_usuario','$nombres','$apellidos','$rol','$correo')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: usuarios.php");
    
}else {
}
?>