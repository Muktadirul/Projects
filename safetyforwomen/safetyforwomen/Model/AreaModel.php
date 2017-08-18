<?php
include_once ("../Model/Area.php");
include_once ("../Controller/AreaController.php");
class AreaModel {
    
    
    function insert_area($conn,$areainfo){
        $sql = "INSERT INTO Area (AreaName ,Location) VALUES ('$areainfo->areaname', '$areainfo->location');";
       // echo $sql;
        $retVal = mysql_query( $sql, $conn );
        return $retVal;        
    }
    
    function get_all_info($conn){
        
            
        $sql2="SELECT areaname,location FROM area;";
        $result2 = mysql_query($sql2,$conn);
        $AreaList=array();
        if (mysql_num_rows($result2) > 0) {
            while($row1 = mysql_fetch_assoc($result2)) {
                $AreaList[]=new Area($row1["areaname"],$row1["location"]);               
            }           
        }
        print_r($row1);
        return $AreaList;
    }
}