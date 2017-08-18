<?php
session_start();
include_once("../Model/LoginModel.php"); 
global $id;
$LoginModel = new LoginModel();

if(isset($_POST['Login'])) {
    if (empty($_POST['name']) || empty($_POST['pw'])) {
        $error = "Username or Password is invalid";
    }
    else{
    $name = $_POST['name'];
    $pw = $_POST['pw'];
    require("../Connect.php");
    
    $id=$LoginModel->return_id($conn,$name,$pw);
    $_SESSION['id']=$id;
    //include("../View/Homepage.php");
    //echo $id;
    $retVal = $LoginModel->check_name_pw($conn,$name,$pw);

    if(! $retVal){
        die('Name & Password did not match' . mysql_error());
    }
    
    else if($retVal){
        ob_start();
         //echo $id;
         //include '../View/Homepage.php';
         header('Location:../View/Homepage.php');
         //echo $id;
        ob_end_flush();
    }
/*
    function id(){
    require("../Connect.php");       
    global $id;
    $id=$LoginModel->return_id($conn,$name,$pw);
    return $id;
    }
    echo $id;//id();*/
    mysql_close($conn);
}
}

?>
