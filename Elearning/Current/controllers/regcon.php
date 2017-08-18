<?php
session_start();
include_once '../assets/js/regValidation.js';
include_once '../Connect.php';
	require('../Connect.php');
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
                
                $username = $_POST['username'];
                $email = $_POST['email'];
                $password = $_POST['password'];
		$username = stripslashes($username);
		$username = mysql_real_escape_string($username);
		$email = stripslashes($email);
		$email = mysql_real_escape_string($email);
		$password = stripslashes($password);
		$password = mysql_real_escape_string($password);
        //security
        if($username==''){ 
            echo "<script>alert('Username Must be filled up')</script>";
            //echo "<div class='form'><h3>Username is incorrect.</h3><br/>Click here to <a href='../view/loginlogoutregister/login.php'>Login</a></div>";
            //echo "";
            header("Location: ../view/loginlogoutregister/registration.php");
            exit;
        }
        if($email==''){ 
            echo "<script>alert('Email id Must be filled up')</script>";
            //echo "<div class='form'><h3>Email id is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
            header("Location: ../view/loginlogoutregister/registration.php");
            exit;
        }
        if($password==''){ 
            echo "<script>alert('Password Must be filled up')</script>";
            //echo "<div class='form'><h3>Password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
            header("Location: ../view/loginlogoutregister/registration.php");
            exit;
        }
        $query = "INSERT into `users` (username, password, email) VALUES ('$username', '".md5($password)."', '$email');";
        $result = mysql_query($query);
        if($result){
            $sql="select id from users where username='$username' and password='".md5($password)."';";
            $res=  mysql_query($sql, $conn);
            $row=mysql_fetch_assoc($res);
            $id=$row["id"];
            
            $sql="Insert into eng_score (id) VALUES('$id')";        
            $result1 = mysql_query( $sql,$conn);
            
            $sql="Insert into math_score (id) VALUES('$id')";        
            $result2 = mysql_query( $sql,$conn); 
            
            header("Location: ../view/loginlogoutregister/regsuccess.php");
                        
        }
    }else{

        header("Location: ../view/loginlogoutregister/registration.php");
    }
    
    ?>