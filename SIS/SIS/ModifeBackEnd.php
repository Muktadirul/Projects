<?php
require_once 'connection.php';
$id= $_GET['id'];
$CN= $_POST['CN'];
$Cp=$_POST['CP'];
$sql="UPDATE `class` SET `ClassName`='$CN',`Capasity`='$Cp' WHERE class_id=".$id;
$retval=  mysql_query($sql, $conn);
if($retval){
    header("Location: http://localhost:8080/SIS/ModifeClasseSelect.php");
}
else{
    echo 'Err';
}