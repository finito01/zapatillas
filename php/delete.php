<?php
session_start();
if($_SESSION['logueado'])
{   
include_once '../includes/db.php';
$con=openCon('../config/db_products.ini');
$con->set_charset("utf8mb4");
$idDEL=$_GET['q'];
$sql="delete from sneakers where id_sneakers=".$idDEL;
$result = $con->query($sql);
header('location:list_products.php');
}
    ?>