<?php
include_once '../includes/db.php';
$con=openCon('../config/db_login.ini');
$user=$_POST ['username'];
$pass=md5($_POST ['password']);
$con->set_charset("utf-8");
$sql="select * from users where (username='$user' or email='$user') and (password='$pass')";
$result=$con->query($sql);
$row=$result->fetch_assoc();
if($row==0){
        echo "<h1 style='color:rgba(8, 158, 168, 0.308); text-align:center; '>no se pudo ingresar</h1>";
        
}
else{
        session_start();
        $_SESSION['uname']=$user;
        $_SESSION['logueado']=true;
        $_SESSION['time']=date('H:i:s');
        header("location:welcom.php");
}

        
?>