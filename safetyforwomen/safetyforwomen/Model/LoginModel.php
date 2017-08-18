<?php
include_once("../View/Homepage.php");
class LoginModel {
    
    
    
    function check_name_pw($conn,$name,$pw){
        
        $sql = "SELECT ID FROM Info WHERE Name = '$name' AND Password = '$pw';" ;
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
    
    function return_id($conn,$name,$pw){
        $sql = "Select ID from Info where Name='$name' and Password='$pw';";
        //echo $sql;
        $result = mysql_query( $sql,$conn);
        //echo $result;
        if(mysql_num_rows($result)>0){
        $row = mysql_fetch_assoc($result);
        //print_r($row);
        $id=$row["ID"];
        echo "<br>ID:"+$id;
        return $id;
        }
    }
    
    function return_eid($conn,$cname,$cphn1){
        $sql = "Select ID from Info where Name='$cname' and Phone1=$cphn1;";
        //echo $sql;
        $result = mysql_query( $sql,$conn);
        //echo $result;
        if(mysql_num_rows($result)>0){
        $row = mysql_fetch_assoc($result);
        //print_r($row);
        $eid=$row["ID"];
        echo "<br>EID"+$eid;
        //echo "ID:"+$id;
        return $eid;
        }
    }
}

?>