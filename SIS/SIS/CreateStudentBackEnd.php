<?php
include_once './connection.php';
require_once 'connection.php';
$Sname=  mysql_real_escape_string( $_POST['Student_Name']);
$Sclass=  mysql_real_escape_string($_POST['Student_Class']);
$Sroll=  mysql_real_escape_string($_POST['Student_Roll']);
$Scontact=  mysql_real_escape_string($_POST['Student_Contact']);

$SQL="INSERT INTO `sis_student`(`student_id`, `student_name`,`class_id`,`roll`,`contact`) VALUES (0,'$Sname','$Sclass','$Sroll','$Scontact')";
//echo $SQL;die();
$retval=  mysql_query($SQL, $conn);
if($retval){
    header("Location: http://localhost:8080/SIS/index.php");  
}
else{
    echo"Error";
}

?>