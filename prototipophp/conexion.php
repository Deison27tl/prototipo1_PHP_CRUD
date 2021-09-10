<?php
function conectar(){
    $host="localhost";
    //$host="sql203.epizy.com";
    $user="root";
    //$user="epiz_29683851_XXX";
    $pass ="1245";
    //$pass="PgM9fgwKpiD23Q";
    $bd="tekpro_back";
    //$bd="epiz_29683851";
    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}
?>
