<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    
</body>
</html>



<?php
session_start();
if($_SESSION['logueado'])
{
echo "BIENVENIDO  ". $_SESSION['uname']."<br />";
echo "hora de conección ".$_SESSION['time']."<br/>";
echo "<a href='logout.php'> Logout</a>";
echo "<h1 class='text-center'> opciones de menu </h1>";
echo "<a style='display:flex;justify-content:center;' href='insert_products.php'>INSERTAR PRODUCTO</a>";
echo "<a style='display:flex;justify-content:center;' href='list_products.php'>BORRAR PRODUCTO</a>";
echo "<a style='display:flex;justify-content:center;' href='list_products.php'>ACTUALIZAR PRODUCTO</a>";
}
else
header("location:../form-login.html");


 

?>