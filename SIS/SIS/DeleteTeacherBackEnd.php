<?php
include_once './connection.php';
require_once 'connection.php';
$id= $_GET['id'];
$sql="DELETE FROM `sis_teacher` WHERE T_id=".$id;

$retval=  mysql_query($sql, $conn);
if($retval)
    header("Location: http://localhost:8080/SIS/DeleteTeacher.php");  
else 
    echo 'Could not remove teacher';