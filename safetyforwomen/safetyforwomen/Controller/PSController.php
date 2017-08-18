<?php

include_once("../Model/PS.php");  
//include_once("../View/InsertPoliceStation.php"); 
include_once("../Model/PSModel.php");
include_once ("../Model/GlobalModel.php");
include_once ("../Model/PSModel.php");
include_once("../View/PSView/ShowPsView.php");

$Ps= new PSModel();
$AddPoliceStation=new PSModel();
$gm=new GlobalModel();
if(isset($_POST['PSC'])) {
    
    $name = $_POST['Bname'];
    $phone = $_POST['phone'];
    if($gm->Phone_no_validation($phone)){
    $PStation=new PS($name,$phone);
    require("../Connect.php");

    $retVal=$AddPoliceStation->insert_Station($conn,$PStation);
    if(! $retVal )
    {
      die('Could not enter data: ' . mysql_error());
    }
    elseif ($retVal) {
        echo "Insert is Successful";
	header('Location: ../View/InsertPoliceStation.php'); 
    }
    mysql_close($conn);
}
else if (isset($_GET['PSshow'])) {
    require("../Connect.php");
     $PoliceStationList=array();
     
     $PoliceStationList=$Ps->get_all_info($conn);
     include '../View/PSView/ShowPsView.php';
     //header('Location:../View/ContactsView/ShowContactsView.php');
     mysql_close($conn);
}
 else {
        echo"<br>";
        echo "Invalid Phone Try Again!!";
    }
}

?>
