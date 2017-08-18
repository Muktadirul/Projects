
<?php
include_once("../Model/ContactModel.php");
include_once("../Model/Contact.php");
include_once ("../Model/Textcontact.php");
include_once ("../Model/Textcontactmodel.php");
include_once ("../Model/TextPoliceStations.php");
include_once ("../Model/TextPoliceStationsModel.php");

$ContactModel = new ContactModel();
$TextcontactModel = new Textcontactmodel();
$TextPoliceStationsModel=new TextPoliceStationsModel();
if(isset($_GET['HELP'])) {
    //Textcontacts table insert
   
    require("../Connect.php");
    $id=$_SESSION['id'];
    $eid=array();
    $eid= $ContactModel->get_id_eid($conn);
    $length=count($eid);
    for($i=0;$i<$length;$i++){
        $textcontactinsert= new Textcontact($id,$eid[$i],"Need Help");
        $retval=$TextcontactModel->insert($conn, $textcontactinsert);
    }
    if($retval){echo"Data inserted in Text_contacts";}
    else{echo"not inserted";}
    mysql_close($conn);
    require("../Connect.php");
    
    //Text police station insert
    $location=array();
    $location=$ContactModel->get_location($conn);
   // echo $location;
    echo "<br>";
    //echo $location;
    $branch=array();
    $branch=$TextPoliceStationsModel->PoliceStationLocation($conn, $location);
    //echo $branch;
    
    $PoliceStationTextInsert= new TextPoliceStations($id,$branch,"Need Help!!");
    $retval = $TextPoliceStationsModel->insert($conn, $PoliceStationTextInsert);
    if($retval){echo"Data inserted in Text_police";}
    else{echo"not inserted";}
    mysql_close($conn);
}
