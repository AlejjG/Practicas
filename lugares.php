<?php 
include "include/conexion.php";
include "include/accion3.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Practica 4 || Lugares</title>
</head>
<body>
    <div class="container m-o content-justify-center px-2">
        <div class="row text-center">
            <h1 class="text-success">Lugares</h1>
        </div>
        <form id="registro" action="<?php echo $_SERVER['PHP_SELF'];?>"method="POST">
        <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="text" name="nombre_1" class="form-control" placeholder="Nombre del Lugar" required>
        </div>
        </div>

        <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <textarea name="direcci" class="form-control" placeholder="Direccion" required>
        </div>
            </div>
        
        <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="tel" name="telefo" class="form-control" placeholder="55-55-55-55" required>
        </div>
            </div>

            <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="correo" name="email" class="form-control" placeholder="Email" required>
        </div>
            </div>

            <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="text" name="face" class="form-control" placeholder="Facebook" required>
        </div>
            </div>

            <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="text" name="horario" class="form-control" placeholder="Horario" required>
        </div>
            </div>

            <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="submit" value="Registrarse" name="button" class="btn btn-warning">
        </div>
            </div>
        </form>
</body>
</html>