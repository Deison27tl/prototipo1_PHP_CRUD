<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM registro_usuario";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>REGISTRO USUARIOS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <link rel="stylesheet" href="/prototipophp/css/style.css">
    </head>
    <body>
            <div class="container mt-5">
                    <div class="row"> 

                    <div class="formulario_login">
                    <div ><img src="/prototipophp/img/cabezote.jpg" alt="logotipo"></div>
                   </div>
                <hr>
                <br>
                        <div class="col-md-8  ">
                            <h3>Registro de usuarios</h3>
                                <form action="insertar.php" method="POST">
                                <table class="table " >
                                <div class="col-md-8">
                                
                                <tr>
                                <th><input type="text" class="form-control mb-3" name="id_usuario" placeholder="Identificacion del usuario" required></th>
                                <th><input type="text" id="may" class="form-control mb-3" name="nombres" placeholder="Nombres" required></th>
                                <th> <input type="text" id="max" class="form-control mb-3" name="apellidos" placeholder="Apellidos" required></th>
                                </tr>
                                <tr>
                                <th> <select class="form-select form-control mb-3" name="rol" aria-label="Default select example" required>
                                        <option selected>Rol del usuario</option>
                                        <option value="Administrador">Administrador</option>
                                        <option value="Empleado">Empleado</option>
                                         <option value="Cliente">Cliente</option>
                                     </select></th>


                                     <th><input type="text" class="form-control mb-3" name="correo" value="email@example.com" placeholder="Correo electronico" required></th>
                                                                        <br>
                                       <th> <input type="submit" class="btn btn-success"></th>
                                   </tr>
                                </div> 
                                </table>
                                </form>
                        </div>

                        <div class="col-md-20">
                            <table class="table" >
                                <thead class="table table-striped table-hover" >
                                    <tr>
                                        <th>Identificacion</th>
                                        <th>Nombres</th>
                                        <th>pellidos</th>
                                        <th>rol</th>
                                        <th>correo</th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id_usuario']?></th>
                                                <th><?php  echo $row['nombres']?></th>
                                                <th><?php  echo $row['apellidos']?></th>
                                                <th><?php  echo $row['rol']?></th>   
                                                <th><?php  echo $row['correo']?></th>  
                                                <th><a href="actualizar.php?id=<?php echo $row['id_usuario'] ?>" class="btn btn-primary">Editar</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id_usuario'] ?>" class="btn btn-danger" data-bs-toggle="button">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>