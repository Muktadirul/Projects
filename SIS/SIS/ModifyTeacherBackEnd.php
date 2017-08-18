<?php
require_once 'connection.php';
$id= $_GET['id'];
$TN= $_POST['TN'];
$TA= $_POST['TA'];
$TQ= $_POST['TQ'];
$sql="UPDATE `sis_teacher` SET `T_name`='$TN',`T_address`='$TA',`T_qualification`='$TQ' WHERE T_id=".$id;
$retval=  mysql_query($sql, $conn);
if($retval){
    header("Location: http://localhost:8080/SIS/ModifyTeacherSelect.php");
}
else{
    echo 'Could not update teacher info';
}