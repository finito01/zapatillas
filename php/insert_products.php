<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css?family=Lato|Raleway&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/form.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="text-center">ingreso de productos</h3>
            </div>
            <div class="col-md-12">
                <form class="form-group" accept-charset="UTF-8" action="save_products.php" method="post" enctype="multipart/form-data">

                    <div class="form-group">
                        <label class="control-label"> MODELO </label>
                        <input type="text" class="form-control" placeholder="modelo" required name="modelo" id="modelo">
                    </div>

                    <div class="form-group">
                        <label class="control-label"> PRECIO </label>
                        <input type="text" class="form-control" placeholder="precio" required name="precio" id="precio">
                    </div>

                    <div class="form-group">
                        <label class="control-label"> OBSERVACION </label>
                        <textarea class="form-control" rows="3" placeholder="Observación" required name="observacion" id="observacion"></textarea>
             </div>

                    <div class="form-group">
                        <label class="control-label"> Marca del producto </label>
                        <select class="form-control" id="marca" name="marca">
                        <!--las marcas seran cargadas en la base de datos -->
<?php
include_once '../includes/db.php';
$con=openCon('../config/db_products.ini');
//$con=conection
$con ->set_charset("utf8mb4");
$sql="select id_marca,descripcion from brands order by descripcion;";
$result=$con->query($sql);
while($row=$result->fetch_assoc())
{
//echo "<option>".$row['descripcion']."</option>";
    echo '<option value="'.$row['id_marca'].'">'.$row['descripcion'].'</option>';
}
?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label"> colores del producto </label>
                        <select class="form-control" id="color" name="color">
 <?php
include_once '../includes/db.php';
$con=openCon('../config/db_products.ini');
//$con=conection
$con ->set_charset("utf8mb4");
$sql="select id_color,descripcion from colors order by descripcion;";
$result=$con->query($sql);
while($row=$result->fetch_assoc())
{
//echo "<option>".$row['descripcion']."</option>";
    echo '<option value="'.$row['id_color'].'">'.$row['descripcion'].'</option>';
}
                        ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="control-label"> Seleccione la imagen a subir </label>
                        <input type="file" id="imagen" name="imagen" class="form-control" size="30" >
                        
                    </div>
                    <div class="text-center">
                    <input type="submit" class="btn btn-success" value="Añadir producto">
                        
                    </div>


                </form>

            </div>
        </div>
    </div>

    <script src="../js/jquery-3.4.1.min.js"> </script>
    <script src="../js/bootstrap.min.js"> </script>

</body>

</html>