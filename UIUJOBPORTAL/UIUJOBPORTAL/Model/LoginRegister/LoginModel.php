<?php

class LoginModel{
    function login_check($conn, $reg) {
        $sql="SELECT count(*) FROM `registered_users` where Name='$reg->Name' and `Email`='$reg->Email' and `Password`='$reg->Password'and `Type`='$reg->Type'";
        $retval=mysql_query( $sql, $conn );
        return mysql_num_rows($retval);
    }
    function getid($conn, $reg) {
        $sql="SELECT id FROM `registered_users` where Name='$reg->Name' and `Email`='$reg->Email' and `Password`='$reg->Password'";
       
        $retval=mysql_query( $sql, $conn );
        
        //$retval=  mysql_fetch_array($retval);
        
        echo $retval;;die();
        return $retval;
    }
    
    function admin_login_check($conn, $reg) {
        $sql="SELECT count(*) FROM `admin` where Name='$reg->Name' and `Email`='$reg->Email' and `Pass`='$reg->Password'";
        //echo $sql;die();
        $retval=mysql_query( $sql, $conn );
        //echo mysql_num_rows($retval);die();
        
        return mysql_num_rows($retval);
    }
}