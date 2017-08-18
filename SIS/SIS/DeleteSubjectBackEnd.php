<?php
include_once './connection.php';
require 'connection.php';
$id= $_GET['id'];
$sql="DELETE FROM `sis_subject` WHERE sub_id=".$id;

$retval=  mysql_query($sql, $conn);
if($retval)
    header("Location: http://localhost:8080/SIS/DeleteSubject.php");  
else 
    echo 'Err';