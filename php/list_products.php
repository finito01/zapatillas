<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>lista de Productos</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<script src="../js/jquery-3.4.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/bootbox.min.js"></script>
<script>
      function deleteProducto(cod_sneaker){
           bootbox.confirm("Desea ud. eliminar realmente el id="+cod_sneaker,
    	    	  function(result)
    	  {
    		  if(result){ 
        	  window.location="delete.php?q="+cod_sneaker; 
          }}
          ) }
      function updateProducto(cod_sneaker){
    	  window.location="edit.php?q="+cod_sneaker;               
          }
</script>
</head>
<body>
	<h1 style="margin: 20px 0px" class="text-center">Listado de Productos</h1>
	 <a style='display:flex;justify-content:right;' href='insert_products.php'>AGREGAR PRODUCCTO </a>
     <table class="table table-bordered table-striped">
      <thead class="thead-dark">
       <tr>
          <th>#</th>
          <th> Marca </th>
          <th> Modelo </th>
          <th>Precio</th>
          <th>Color</th>
          <th>Eliminar</th>
          <th>Actualizar</th>
      </tr>
  </thead>
<tbody>
<?php
session_start();
if($_SESSION['logueado'])    
include_once '../includes/db.php';
$con=openCon('../config/db_products.ini');
$con->set_charset("utf8mb4");
$sql="select s.id_sneakers as id, s.modelo as model, s.precio as cass, c.descripcion as color,
 b.descripcion as marca
 from sneakers s inner join colors c on c.id_color=s.id_color inner join brands b on s.id_marca=b.id_marca";
$result = $con->query($sql);
while ($row = $result->fetch_assoc()) {
    ?>
<tr>
<td><?php echo $row['id'] ?></td>
<td><?php echo $row['marca'] ?></td>
<td><?php echo $row['model'] ?></td>
<td><?php echo $row['cass'] ?></td>
<td><?php echo $row['color'] ?></td>
<td><a href="#" onclick="deleteProducto(<?php echo $row['id']?>)">Eliminar Producto</a></td>
<td><a href="#" onclick="updateProducto(<?php echo $row['id']?>)">Actualizar</a></td>
</tr>
<?php
}
?>
</tbody>
</table>
</body>
</html>

