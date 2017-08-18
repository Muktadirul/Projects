<?php
include_once './connection.php';
require 'connection.php';
$SNAME= $_POST['SubjectName'];
$r_id=$_POST['r_id'];
$sql="INSERT INTO `sis_subject`(`sub_id`, `sub_name`, `r_id`) VALUES (0,'$SNAME','$r_id');";
$retval=mysql_query($sql, $conn);
if($retval){
    header("Location: http://localhost:8080/SIS/index.php");  
}
else{
    echo 'Err';
}