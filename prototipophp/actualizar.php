<?php 
    include("conexion.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM registro_usuario WHERE id_usuario='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>

    <div class="formulario_login">
            <div class="login"><img src="img/cabezote.jpg" alt="logotipo"></div>
        </div>
                <div class="container mt-5">
                    <form action="update.php" method="POST">
                    
                                <input type="hidden" name="id_usuario" value="<?php echo $row['id_usuario']  ?>">
                                
                                <input type="text" class="form-control mb-3" id="may" name="nombres" placeholder="Nombres" value="<?php echo $row['nombres']  ?>">
                                <input type="text" class="form-control mb-3" id="max" name="apellidos" placeholder="Apellidos" value="<?php echo $row['apellidos']  ?>">
                                <select class="form-select form-control mb-3" name="rol" aria-label="Default select example" value="<?php echo $row['rol']  ?>">
                                        <option selected disabled>Rol del usuario</option>
                                        <option value="Administrador">Administrador</option>
                                        <option value="Empleado">Empleado</option>
                                         <option value="Cliente">Cliente</option>
                                     </select>


                                <input type="text" class="form-control mb-3" name="correo" placeholder="correo" value="<?php echo $row['correo']  ?>">

                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>