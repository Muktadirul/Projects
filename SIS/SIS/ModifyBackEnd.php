<?php
include_once './connection.php';
require 'connection.php';
$id= $_GET['id'];
$CN= $_POST['CN'];
$Cp=$_POST['CP'];
$sql="UPDATE `sis_class` SET `class_name`='$CN',`capacity`='$Cp' WHERE class_id=".$id;
$retval=  mysql_query($sql, $conn);
if($retval){
    header("Location: http://localhost:8080/SIS/ModifyClasseSelect.php");
}
else{
    echo 'Err';
}