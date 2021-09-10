<?php
$host="localhost";
 //$host="sql203.epizy.com";
$user = "root"; // El usuario que acabamos de crear en la base de datos 
//$user="epiz_29683851_XXX";
$pass = "1245";
//$pass = "PgM9fgwKpiD23Q"; // La contraseña del usuario que utilizaremos 
$bdname= "tekpro_back"; // El nombre de la base de datos
//$bdname= "epiz_29683851"; 

$connection = mysqli_connect($host, $user, $pass, $bdname);

if(!$connection) 
        {
            die ("No se ha podido conectar con el servidor" .mysqli_connect_error());
        }

$nombre=$_POST["txtusuario"];
$pass =$_POST["txtpassword"];

$query = mysqli_query($connection,"SELECT * FROM login_usuario WHERE usuario = '".$nombre."' and password = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr==1){
    header("location: usuarios.php");
}
else if($nr == 0){
    echo'<script type="text/javascript">
    alert("Incorrecto !!! Intente nuevamente");
    window.location.href="/prototipophp/login/login.html";
    </script>';
}
?>