<?php
include_once './connection.php';
require 'connection.php';
$Cname=  mysql_real_escape_string( $_POST['Class_Name']);
$Capacity=  mysql_real_escape_string($_POST['Capacity']);
$sql="INSERT INTO `sis_class`(`class_id`, `class_name`, `capacity`) VALUES (0,'$Cname','$Capacity')";
$retval=  mysql_query($sql, $conn);
if($retval){
    header("Location: http://localhost:8080/SIS/index.php");  
}
else{
    echo"Error";
}
?>