<?php
include_once("../Model/Area.php");  
include_once("../View/InsertArea.php"); 
include_once("../Model/AreaModel.php");


$AddArea=new AreaModel();

if(isset($_POST['InsertArea'])) {
    
    $name = $_POST['areaname'];
    $location = $_POST['location'];
    $areainfo=new Area($name,$location);
    
    require("../Connect.php");
    //$area= $_SESSION['Areaname'];
    $retVal=$AddArea->insert_area($conn,$areainfo);
    if(! $retVal )
    {
      die('Could not enter data: ' . mysql_error());
    }
    elseif ($retVal) {
        echo 'insert succefull';
	//include '../View/AdminLoginView.php';
        header('Location: ../View/AdminLoginView.php'); 
    }
    mysql_close($conn);
}
else if(isset($_GET['show_all'])) {
     require("../Connect.php");
     $AreaList=array();
     $AreaList=$AddArea->get_all_info($conn);
     include '../View/ShowAreaView.php';
     //header('Location:../View/ContactsView/ShowContactsView.php');
     mysql_close($conn);
}
else if(isset($_GET['Delete_show_all'])) {
     require("../Connect.php");
     $ContactList=array();
     $ContactList=$ContactModel->get_all_info($conn);
     include '../View/ContactsView/DeleteContactsView.php';
     //header('Location:../View/ContactsView/ShowContactsView.php');
     mysql_close($conn);
}
else if(isset($_GET['Delete'])) {
     require("../Connect.php");
     $id=$_GET['ID'];
     $ContactModel->delete_member_by_id($id,$conn);
     mysql_close($conn);
}


?>
