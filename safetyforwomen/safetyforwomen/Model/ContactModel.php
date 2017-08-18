<?php
include_once ("../Model/Info.php");
include_once ("../Controller/ContactsController.php");
class ContactModel {
    
    
    function insert_info($conn,$info){
        $sql = "INSERT INTO Info (Name , Phone1, Phone2) VALUES ('$info->cname','$info->cphn1','$info->cphn2'); ";
        //echo $sql;
        $retVal = mysql_query( $sql, $conn );
        return $retVal;        
    }

    function insert_contact($conn,$id,$eid){
        $sql = "INSERT INTO Contacts (ID , EID) VALUES ('$id','$eid'); ";
        $retVal2 = mysql_query( $sql, $conn );
        return $retVal2;        
    }
    function delete_member_by_id($delid,$conn){
        $sql = "DELETE from info where id=".$delid;
      //  echo $sql;
      //  echo"<br>";
       // echo $delid;
        $retVal = mysql_query( $sql, $conn );
        
        $id=$_SESSION['id'];
        $sql1="DELETE from contacts where id=$id and eid=$delid;";
      //  echo $id."<br>";
      //  echo $sql."<br>";
        $retVal1 = mysql_query( $sql1, $conn );
        if($retVal && $retVal1){return true;}
        else    {return FALSE;}
        
    }
    function get_all_info($conn){
        $id=$_SESSION['id'];
        $sql1="select EID from Contacts where ID=$id;";
        $result1 = mysql_query($sql1,$conn);
        $count=0;
        $eid = array();
        $ContactList = array();
        if (mysql_num_rows($result1) > 0) {
            
            while($row = mysql_fetch_assoc($result1)) {
                $eid[]=$row["EID"];
                $count++;
                 echo "<br>";
            }
           
        }
      for($i=0;$i<$count;$i++){
            
        $sql2="SELECT * FROM Info where ID=$eid[$i];";
        $result2 = mysql_query($sql2,$conn);
        if (mysql_num_rows($result2) > 0) {
            while($row1 = mysql_fetch_assoc($result2)) {
                $ContactList[]=new Info($row1["id"],$row1["name"], $row1["Phone1"],$row1["Phone2"], $row1["Location"],$row1["Password"]);               
                //var_dump($ContactList);die();
                
            }           
        }
      }
        return $ContactList;
    }
    
    function get_location($conn){
        $id=$_SESSION['id'];
        $sql1="select location from info where ID=$id;";
        $result1 = mysql_query($sql1,$conn);
        $result=  mysql_fetch_assoc($result1);
        $result1=$result["location"];   
        return $result1;
    }
    
        function get_id_eid($conn){
        $id=$_SESSION['id'];
        $sql1="select EID from Contacts where ID=$id;";
        $result1 = mysql_query($sql1,$conn);
        $eid = array();
        if (mysql_num_rows($result1) > 0) {
            while($row = mysql_fetch_assoc($result1)) {
                $eid[]=$row["EID"];
                echo "<br>";
            }
        }
        return $eid;
    }
}

?>