<?php
require_once 'connection.php';
$id= $_GET['id'];
$SN= $_POST['SN'];
$SC=$_POST['SC'];
$SR= $_POST['SR'];
$SCON= $_POST['SCON'];
$sql="UPDATE `sis_student` SET `student_name`='$SN',`class_id`='$SC',`roll`='$SR',`contact`='$SCON' WHERE student_id=".$id;
$retval=  mysql_query($sql, $conn);
if($retval){
    header("Location: http://localhost:8080/SIS/ModifyStudentSelect.php");
}
else{
    echo 'Could not update student info';
}