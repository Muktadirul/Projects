<?php
session_start();
include_once '../Connect.php';
require '../Connect.php';
$id=$_SESSION["id"];
$result=$_GET["sc"];
$track=$_GET["option"];
$count=$_GET["count"];


if($track=="cp"){
    $sql="UPDATE `eng_score` SET `chooseclick`='$result' WHERE id='$id'";
    //var_dump($sql);
    $result= mysql_query($sql, $conn);
    if($result){
        //echo "Score Inserted Successfully";
        header("Location: ./scoreBoard/engScore.php");
    }else{
        //var_dump($result);
       // echo "Score Not Inserted Successfully";
    }
}
elseif ($track=="gw") {
    $sql="UPDATE `eng_score` SET `guessword`='$result' WHERE id='$id'";
    $result= mysql_query($sql, $conn);
    if($result){
        //echo "Score Inserted Successfully";
        header("Location: ./scoreBoard/engScore.php");
    }else{
        //echo "Score Not Inserted Successfully";
    }
}    
elseif ($track=="rw") {
    $sql="UPDATE `eng_score` SET `rightwrong`='$result' WHERE id='$id'";
   // echo $sql; die();
    $result= mysql_query($sql, $conn);
    if($result){
        echo "Score Inserted Successfully";
        header("Location: ./scoreBoard/engScore.php");
    }else{
        echo "Score Not Inserted Successfully";
    }
}      
 elseif ($track=="sp") {
    $sql="UPDATE `eng_score` SET `speel`='$result' WHERE id='$id'";
    //echo $sql; die();
    $result= mysql_query($sql, $conn);
    if($result){
        //echo "Score Inserted Successfully";
        header("Location: ./scoreBoard/engScore.php");
    }else{
        //echo "Score Not Inserted Successfully";
    }
}   

elseif ($track=="add") {
    if(!isset($_SESSION["val"])){
        $_SESSION["val"]=0;
    }
    if(!isset($_SESSION["count"])){
        $_SESSION["count"]=0;
    }
    $value=$_SESSION["val"];
    if($_GET["sc"]==1){
        $value=$value+1;  
        $_SESSION["count"]=$_SESSION["count"]+1;
    }else{
        $_SESSION["count"]=$_SESSION["count"]+1;
    }
    $_SESSION["val"]=$value;
    $result=$_SESSION["val"];
    if($_SESSION["count"]>=5){
        
        /*insert*/
        $sql="UPDATE `math_score` SET `add`='$result' WHERE id='$id'";
        $result= mysql_query($sql, $conn);
        if($result){
         
        header("Location: ./scoreBoard/mathScore.php");
        $_SESSION["val"]=0;
        $_SESSION["count"]=0;
        exit();
        }else{
          //  echo "Score Not Inserted Successfully";
        }
        //header("Location: ./scoreBoard/mathScore.php");
        exit();
    }
    else {
        header("Location: mathTest/add.php");
    }
}
elseif ($track=="sub") {
    if(!isset($_SESSION["val"])){
        $_SESSION["val"]=0;
    }
    if(!isset($_SESSION["count"])){
        $_SESSION["count"]=0;
    }
    $value=$_SESSION["val"];
    if($_GET["sc"]==1){
        $value=$value+1;  
        $_SESSION["count"]=$_SESSION["count"]+1;
    }else{
        $_SESSION["count"]=$_SESSION["count"]+1;
    }
    $_SESSION["val"]=$value;
    $result=$_SESSION["val"];
    if($_SESSION["count"]>=5){
        
        /*insert*/
        $sql="UPDATE `math_score` SET `sub`='$result' WHERE id='$id'";
        $result= mysql_query($sql, $conn);
        if($result){
         
        header("Location: ./scoreBoard/mathScore.php");
        $_SESSION["val"]=0;
        $_SESSION["count"]=0;
        exit();
        }else{
            //echo "Score Not Inserted Successfully";
    }
        //header("Location: ./scoreBoard/mathScore.php");
        exit();
    }
    else {
        header("Location: mathTest/sub.php");
    }
}
elseif ($track=="cnt") {
    if(!isset($_SESSION["val"])){
        $_SESSION["val"]=0;
    }
    if(!isset($_SESSION["count"])){
        $_SESSION["count"]=0;
    }
    $value=$_SESSION["val"];
    if($_GET["sc"]==1){
        $value=$value+1;  
        $_SESSION["count"]=$_SESSION["count"]+1;
    }else{
        $_SESSION["count"]=$_SESSION["count"]+1;
    }
    $_SESSION["val"]=$value;
    $result=$_SESSION["val"];
    if($_SESSION["count"]>=5){
        
        /*insert*/
        $sql="UPDATE `math_score` SET `count`='$result' WHERE id='$id'";
        $result= mysql_query($sql, $conn);
        if($result){
         
        header("Location: ./scoreBoard/mathScore.php");
        $_SESSION["val"]=0;
        $_SESSION["count"]=0;
        exit();
        }else{
            //echo "Score Not Inserted Successfully";
    }
        //header("Location: ./scoreBoard/mathScore.php");
        exit();
    }
    else {
        header("Location: mathTest/count.php");
    }
}
?>
