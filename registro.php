<?php include
"include/conexion.php";
"include/acciones1.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>Practica 2 || Registro</title>
</head>
<body>
    <div class="container m-o content-justify-center py-2">
        <div class="row text-center">
            <h1 class="text-success">Registro</h1>
        </div>
        <form id="Registro" action="<?php echo $_SERVER['php_self'];?>"method="POST">
        <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="text" name="Nombre" class="form-control" placeholder="Nombre" required>
        </div>
        </div>

        <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="text" name="Apellidos" class="form-control" placeholder="Apellidos" required>
        </div>
            </div>

        <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <textarea class="form-control" name="Direccion" placeholder="Direccion"></textarea>
        </div>
            </div>
        
        <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="tel" name="Telefono" class="form-control" placeholder="55-55-55-55" required>
        </div>
            </div>

            <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="date" name="Fecha" class="form-control" placeholder="Apellidos" required>
        </div>
            </div>

            <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="email" name="Email" class="form-control" placeholder="Email" required>
        </div>
            </div>

            <div class="row text-center">
            <div class="col-sm-12 col-md-12 col-lg-12">
                <input type="submit" value="Registrarse" name="btn" class="btn btn-success">
        </div>
            </div>
        </form>
</body>
</html>