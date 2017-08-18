<?php
require_once 'connection.php';
$id= $_GET['id'];
$sql="DELETE FROM `sis_student` WHERE student_id=".$id;

$retval=  mysql_query($sql, $conn);
if($retval)
    header("Location: http://localhost:8080/SIS/DeleteStudent.php");  
else 
    echo 'Could not remove student';