<?php
    include '../../Config.php';
    include '../../Model/LoginRegister/Register.php';
    include '../../Model/LoginRegister/RegisterModel.php';
    if(!$conn)die();
    $registermodel=new RegisterModel();
    $Name=mysql_real_escape_string(stripslashes($_POST['name']));
    $EmailId=mysql_real_escape_string(stripslashes($_POST["Email"]));
    $Pass=  md5(mysql_real_escape_string(stripslashes($_POST["Password"])));
    $day=mysql_real_escape_string(stripslashes($_POST["day"]));
    $month=mysql_real_escape_string(stripslashes($_POST["month"]));
    $year=mysql_real_escape_string(stripslashes($_POST["year"]));
    $DOB=$day."-".$month."-".$year;
    //echo $DOB;die();
    $interest=mysql_real_escape_string(stripslashes($_POST["interest"]));
    $Type=mysql_real_escape_string(stripslashes($_POST["type"]));
    //echo $Type;die();
    
    $errors= array();
    $file_name = $_FILES['image']['name'];
  
    $file_tmp =$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];
    $v=explode('.',$file_name);
    $file_name1=end($v);
    $file_ext=strtolower($file_name1);
    $expensions= array("jpeg","jpg","png");
      
    if(in_array($file_ext,$expensions)=== false){
       $errors[]="extension not allowed, please choose a JPEG ,JPG or PNG file.";
    }
    if(empty($errors)==true){
       move_uploaded_file($file_tmp,"C:/wamp/www/UIUJOBPORTAL/Assets/img/student/".$file_name);
       
    }else{
       print_r($errors);
    }
    $Image=$file_name;
    
    $errors= array();
    $file_name = $_FILES['resume']['name'];
  
    $file_tmp =$_FILES['resume']['tmp_name'];
    $file_type=$_FILES['resume']['type'];
    $v=explode('.',$file_name);
    $file_name1=end($v);
    $file_ext=strtolower($file_name1);
    $expensions= array("docx","pdf","jpeg","jpg","png");
      
    if(in_array($file_ext,$expensions)=== false){
       $errors[]="extension not allowed, please choose a JPEG ,JPG or PNG file.";
    }
    if(empty($errors)==true){
       move_uploaded_file($file_tmp,"C:/wamp/www/UIUJOBPORTAL/Assets/File/".$file_name);
       
    }else{
       print_r($errors);
    }
    $Resume=$file_name;
    
    $reg= new Register($Name,$EmailId,$Pass,$DOB,$Image,$Resume,$interest,$Type);
    $retval=$registermodel->insert_member($conn, $reg);
    if($retval){
        include 'C:/wamp/www/UIUJOBPORTAL/View/LoginRegister/LoginView.php';
    }else{
        return $errors;
    }
?>