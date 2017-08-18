<?php
include_once './connection.php';
require_once 'connection.php';
$T_name=  mysql_real_escape_string( $_POST['T_name']);
$T_address=  mysql_real_escape_string( $_POST['T_address']);
$T_qualification=  mysql_real_escape_string( $_POST['T_qualification']);
$SQL="INSERT INTO `sis_teacher`(`T_id`, `T_name`,`T_address`,`T_qualification`) VALUES (0,'$T_name','$T_address','$T_qualification')";
$retval=  mysql_query($SQL, $conn);
if($retval){
    header("Location: http://localhost:8080/SIS/index.php");  
}
else{
    echo"Could not add teacher";
}
?>