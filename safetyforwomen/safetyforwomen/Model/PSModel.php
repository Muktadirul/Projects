<?php

class PSModel {
    
    
    function insert_Station($conn,$Station){
        $sql = "INSERT INTO policestations (Branch , Phone) VALUES ('$Station->Bname', '$Station->Bphone' );";
        //echo $sql;
        $retVal = mysql_query( $sql, $conn );
        return $retVal;        
    }
    
    function get_all_info($conn){
        $PoliceStationList=array();
        $sql="SELECT Branch,phone FROM policestations;";
        $result = mysql_query($sql,$conn);
        if (mysql_num_rows($result) > 0) {
            while($row1 = mysql_fetch_assoc($result)) {
                $PoliceStationList[]=new PS($row1["Branch"],$row1["phone"]);               
            }           
        }
        print_r($result);
        return $PoliceStationList;
    }

}
