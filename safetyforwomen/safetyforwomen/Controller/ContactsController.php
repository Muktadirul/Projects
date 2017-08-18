<?php

include_once("../Model/ContactModel.php");
include_once("../Model/Contact.php");
include_once("../View/Homepage.php");
include_once ("../Controller/LoginController.php");
include_once("../Model/LoginModel.php");
include_once ("../Model/GlobalModel.php");

$ContactModel = new ContactModel();
$LoginModel = new LoginModel();
$gm=new GlobalModel();
global $eid;
    if(isset($_POST['AddContact'])) {
    
    $cname = $_POST['cname'];
    $cphn1 = $_POST['cphn1'];
    $cphn2 = $_POST['cphn2'];
    
    if($gm->Phone_no_validation($cphn1)&& $gm->Phone_no_validation($cphn2) ) {
    
        
    $info = new Contact(0,$cname,$cphn1,$cphn2);
    $id=$_SESSION['id'];
    require("../Connect.php");
    $retVal1 = $ContactModel->insert_info($conn,$info) ;
    $eid= $LoginModel->return_eid($conn,$cname,$cphn1);
    $retVal2 = $ContactModel->insert_contact($conn,$id,$eid) ;

    if(! ($retVal1 && $retVal2))
    {
        die('Could not enter data: ' . mysql_error());
    }
    elseif ($retVal1 && $retVal2) {
        echo "Contacts Added Successfully";
        include '../View/Homepage.php';
        header('Location:../View/Homepage.php');
       }
       mysql_close($conn);
    }
    else {
        echo"<br>";
        echo "Invalid Phone Try Again!!";
    }
}
else if(isset($_GET['show_all'])) {
     require("../Connect.php");
     $ContactList=array();
     $ContactList=$ContactModel->get_all_info($conn);
     include '../View/ContactsView/ShowContactsView.php';
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
