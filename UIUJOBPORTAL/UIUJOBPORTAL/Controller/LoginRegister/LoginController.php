<?php
    include '../../Config.php';
    include '../../Model/LoginRegister/Login.php';
    include '../../Model/LoginRegister/LoginModel.php';
    if(!$conn)die();
    session_start();
    $loginmodel=new LoginModel();
    $Type=mysql_real_escape_string(stripslashes($_POST["type"]));
    
    if($Type!=3){
        $Name=mysql_real_escape_string(stripslashes($_POST['Name']));
        $EmailId=mysql_real_escape_string(stripslashes($_POST['Emailid']));
        $Pass=  md5(mysql_real_escape_string(stripslashes($_POST['Pass'])));

        $login= new Login($Name,$EmailId,$Pass,$Type);
        $retval=$loginmodel->login_check($conn, $login);    
        if($retval==1){
            $_SESSION['user'] = $Name;

            //$_SESSION['userid']=  
           // $row=$loginmodel->getid($conn, $login);
            //echo $row['id'];
            //        die();
            include 'C:/wamp/www/UIUJOBPORTAL/home.php';

        }else{

            $err='Error';
            echo $err;
        }
    }else{
        $Name=mysql_real_escape_string(stripslashes($_POST['Name']));
        $EmailId=mysql_real_escape_string(stripslashes($_POST['Emailid']));
        $Pass=  mysql_real_escape_string(stripslashes($_POST['Pass']));

        $login= new Login($Name,$EmailId,$Pass,$Type);
        $retval=$loginmodel->admin_login_check($conn, $login);    
        if($retval==1){
            $_SESSION['user'] = $Name;

            //$_SESSION['userid']=  
           // $row=$loginmodel->getid($conn, $login);
            //echo $row['id'];
            //        die();
            include 'C:/wamp/www/UIUJOBPORTAL/home.php';

        }else{

            $err='Error';
            echo $err;
        }
    }
        
    