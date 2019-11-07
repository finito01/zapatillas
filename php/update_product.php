<?php
session_start();
if($_SESSION['logueado'])
{
    include_once '../includes/db.php';
    $con=openCon('../config/db_products.ini');
    $con->set_charset("utf8mb4");
   // print_r($_POST);
    //$POST = Array ([modelo] => mt03 [precio] => 9000.00 [observacion] => [marca] => 8 [color]=> 5) 

$id=$_POST['id'];
$modelo=$_POST['modelo'];//strin='s'
$precio=$_POST['precio'];//numer='d'
$observacion=$_POST['observacion'];//strin='s'
$marca=$_POST['marca'];//id='i'
$color=$_POST['color'];//id='i'
$sql="update sneakers set
 modelo='$modelo',
 precio='$precio',
 observacion='$observacion',
 id_marca='$marca',
 id_color='$color'
 where id_sneakers=".$id;
$con->query($sql);
header('location:list_products.php');
}