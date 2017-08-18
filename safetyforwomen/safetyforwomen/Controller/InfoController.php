<?php
include_once("../Model/InfoModel.php");
include_once("../Model/Info.php");
include_once("../View/HomePage.php");  

$InfoModel=new InfoModel();

if(isset($_POST['SignUp'])) {
    echo "Hello";
    $name = $_POST['name'];	
    $phn1 = $_POST['phn1'];
    $phn2 = $_POST['phn2'];
    $location = $_POST['location'];
    $pw = $_POST['pw'];
    include_once ("../Model/GlobalModel.php");
    $gm=new GlobalModel();
    
    if($gm->Phone_no_validation($phn1) && $gm->Phone_no_validation($phn2)){
    $_SESSION['id']=$id;

    $info = new Info(0,$name,$phn1,$phn2,$location,$pw);
   // echo "$info";
    require("../Connect.php");
    
    $retVal = $InfoModel->insert_info($conn,$info);
    if(! $retVal )
    {
      die('Could not enter data: ' . mysql_error());
    }
    elseif ($retVal) {
        header('Location:../View/HomePage.php');      
    }

    mysql_close($conn);
}
 else {
        echo"<br>";
        echo "Invalid Phone Try Again!!";
    }
}

else if(isset($_GET['Logout'])){
    session_destroy();
    header('Location:../View/Coverpage.php');
}

else{
    echo "hello";
	//$f=$_POST['ShowInfoId'];
	//echo "$f";
}

?>
