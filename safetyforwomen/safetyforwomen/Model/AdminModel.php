<?php
include_once("../View/AdminLoginView.php");
class AdminModel {
    
    
    
    function check_name_pw($conn,$name,$pw){
        
        $sql = "SELECT ID FROM admin WHERE username = '$name' AND Password = '$pw';" ;
        $retVal = mysql_query( $sql, $conn);
        $numrows = mysql_num_rows($retVal);
        
        if($numrows){
            //$row = mysql_fetch_assoc($result);
       // print_r($row);
            return true;
        }

        else{
             return false;
        }
                
    }
    
    function return_un($conn,$name,$pw){
        $sql = "Select username from admin where username='$name' and Password='$pw';";
        //echo $sql;
        $result = mysql_query( $sql,$conn);
        //echo $result;
        if(mysql_num_rows($result)>0){
        $row = mysql_fetch_assoc($result);
        //print_r($row);
        $id=$row["username"];
        //echo "<br>ID:"+$id;
        return $id;
        }
    }
}
    ?>