<?php
include_once './connection.php';
require 'connection.php';
$id= $_GET['id'];
$sql="DELETE FROM `sis_class` WHERE class_id=".$id;
echo $sql;
$retval=  mysql_query($sql, $conn);
if($retval)
    header("Location: http://localhost:8080/SIS/RemoveClass.php");  
else 
    echo 'Err';