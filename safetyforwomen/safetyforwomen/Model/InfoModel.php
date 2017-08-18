<?php

class InfoModel {
    
    
    function insert_info($conn,$info){
        $sql = "INSERT INTO Info (Name ,Phone1,Phone2,Location,Password) VALUES ('$info->name','$info->phn1','$info->phn2', '$info->location', '$info->pw');";
        //echo $sql;
        $retVal = mysql_query( $sql, $conn );
        return $retVal;        
    }
    /*
	function delete_info($name, $phn1, $phn2, $conn){
        $sql = "DELETE from Info where Name='$name' AND Phone1=$phn1 AND Phone2=$phn2;" ;
        //echo $sql;
        $retVal = mysql_query( $sql, $conn );
        return $retVal;        
    }*/
	/*
	function get_all_info($conn){
        $sql="SELECT * FROM Info ;";
        $result = mysql_query($sql,$conn);
        //echo $result;
        $ContactList = array();
        if (mysql_num_rows($result) > 0) {
            //echo "Hello<br>";          
            while($row = mysql_fetch_assoc($result)) {
                //print_r($row);                
               // echo $row["ID"];
                // echo implode("  ",$row);                              
                $ContactList[]=new Info($row["ID"],$row["Name"], $row["Location"], $row["Phone1"],$row["Phone2"],$row["Password"]);
            } 
        } else {
            echo "0 results";
        }
        
        return $ContactList;
    }*/
}
