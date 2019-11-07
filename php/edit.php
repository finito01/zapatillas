<?php
session_start();
if($_SESSION['logueado'])
{
    include_once '../includes/db.php';
    $con=openCon('../config/db_products.ini');
    $con->set_charset("utf8mb4");
    $idDEL=$_GET['q'];
    $sql="select s.id_sneakers as id, s.modelo as model,s.observacion as obser, s.precio as cass, 
        c.descripcion as color,s.id_color as idColor, b.descripcion as marca,s.id_marca as idMarca
 from sneakers s inner join colors c on c.id_color=s.id_color inner join brands b on s.id_marca=b.id_marca
 where id_sneakers=".$idDEL;
   $result=$con->query($sql);
   $row=$result->fetch_assoc();}
   ?>
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
                <h3 class="text-center">Editar Producto</h3>
            </div>
            <div class="col-md-12">
            <form class="form-group" accept-charset="utf8" action="update_product.php" method="post">
           <div class="form-group">
            <input type="hidden" name="id" value="<?php echo $row['id']?>">
            </div>
            <div class="form-group">
              <label class="control-label">MODELO</label>
              <input type="text" class="form-control" id="modelo" name="modelo" value="<?php echo $row['model'] ?>">
            </div>
              <div class="form-group">
              <label class="control-label">PRECIO</label>
              <input type="text" class="form-control" id="precio" name="precio" value="<?php echo $row['cass'] ?>">
            </div>
             <div class="form-group">
              <label class="control-label">OBSERVACION</label>
              <textarea rows=3 class="form-control" id="observacion" name="observacion" <?php echo $row['obser'] ?>></textarea>
            </div>
            <div class="form-group">
              <label class="control-label">MARCA</label>
            <select id="marca" name="marca" class="form-control">
            <option value="<?php echo $row['idMarca']?>"><?php echo $row['marca']?></option>
<?php
$sqlBrand="select id_marca as marca,descripcion as descripcion from brands order by descripcion";
$result=$con->query($sqlBrand);
while($rowBrand = $result->fetch_assoc()){
    if($row['marca']!=$rowBrand['descripcion']){
    ?>
              <option value=<?php echo $rowBrand['marca']?>><?php echo $rowBrand['descripcion']?></option>
<?php }}?>
            </select>
            </div>
            <div class="form-group">
              <label class="control-label">COLORES</label>
            <select id="color" name="color" class="form-control">
             <option value="<?php echo $row['idColor']?>"><?php echo $row['color']?></option>
<?php
$sqlColor="select id_color as color,descripcion as descripcion from colors order by descripcion";
$result=$con->query($sqlColor);
while($rowColor = $result->fetch_assoc()){
    if($row['color']!=$rowColor['descripcion']){
?>
              <option value=<?php echo $rowColor['color']?>><?php echo $rowColor['descripcion']?></option>
<?php }}?>
            </select>
            </div>
            <div class="text-center">
            <br><input type="submit" class="btn btn-success" value="Guardar Producto">
            </div>
            </form>
 
            </div>
            </div>
            </div>
</body>
</html>
   