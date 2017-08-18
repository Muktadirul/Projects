<?php
session_start();
include_once("../Model/AdminModel.php"); 
include_once ("../View/Coverpage.php");
global $id;
$AdminModel = new AdminModel();

if(isset($_POST['Login'])) {
    if (empty($_POST['name']) || empty($_POST['pw'])) {
        $error = "Username or Password is invalid";
    }
    else{
    $name = $_POST['name'];
    $pw = $_POST['pw'];
    require("../Connect.php");
    
    $un=$AdminModel->return_un($conn,$name,$pw);
    $_SESSION['id']=$id;
    //include("../View/Homepage.php");
    //echo $id;
    $retVal = $AdminModel->check_name_pw($conn,$name,$pw);

    if(! $retVal){
        die('Name & Password did not match' . mysql_error());
    }
    
    else if($retVal){
        ob_start();
         //echo $id;
         //include '../View/Homepage.php';
         header('Location:../View/AdminLoginView.php');
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
if(isset($_GET['Logout'])){
    session_destroy();
    header('Location:../View/Coverpage.php');
}
?>
