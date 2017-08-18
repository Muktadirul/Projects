<?php
include_once '../Connect.php';
	require('../Connect.php');
	session_start();
        global $id;
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
		$username = stripslashes($username);
		$username = mysql_real_escape_string($username);
		$password = stripslashes($password);
		$password = mysql_real_escape_string($password);
	
                if($username==''){ echo "<script>alert('Username Must be filled up')</script>";
                echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
                header("Location: ../view/loginlogoutregister/loginerr.php");
                exit;}
                if($password==''){ echo "<script>alert('Username is incorrect.')</script>";
                echo "<div class='form'><h3>Password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
                header("Location: ../view/loginlogoutregister/loginerr.php");   
                exit;
                }
                
                $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
		$result = mysql_query($query) or die(mysql_error());
		$rows = mysql_num_rows($result);
            if($rows==1){
			$_SESSION['username'] = $username;
                        $sql="select id from users where username='$username' and password='".md5($password)."';";
                        $result = mysql_query( $sql,$conn);
                        if(mysql_num_rows($result)>0){
                        $row = mysql_fetch_assoc($result);
                        $_SESSION["id"]=$row["id"];
                        $id=$_SESSION["id"];
                        header("Location: ../view/home.php");
                        }  
			
            }else{
                header("Location: ../view/loginlogoutregister/loginerr.php");
            }
    }
    else{
       echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
                                exit();
    }
?>