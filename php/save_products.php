
<?php
session_start();
if($_SESSION['logueado']){
      
    include_once 'upload_image.php';
    $modelo=$_POST['modelo'];//strin='s'
    $precio=$_POST['precio'];//numer='d'
    $observacion=$_POST['observacion'];//strin='s'
    $marca=$_POST['marca'];//id='i'
    $color=$_POST['color'];//id='i'
    $path_img=$directorio.$nombre_img;//s
    
    include_once '../includes/db.php';
    $con=openCon('../config/db_products.ini');
    $con->set_charset("utf8mb4");
    $sql="insert into sneakers (id_color,id_marca,imagen,modelo,observacion,precio) values (?,?,?,?,?,?)";
    
    $stmt=$con->prepare($sql);
    
    $stmt->bind_param('iisssd',$color,$marca,$path_img,$modelo,$observacion,$precio);
    
    if($stmt->execute()){
        ?>

    <script>
        alert("producto ingresado");
        window.location = "insert_products.php";
    </script>
<?php

}
}
?>