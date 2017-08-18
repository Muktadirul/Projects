<?php
class TextPoliceStationsModel{
    function insert($conn,$PoliceStationTextInsert){
        $sql="INSERT INTO texts_police (id,branch,text) VALUES ('$PoliceStationTextInsert->id','$PoliceStationTextInsert->branch','$PoliceStationTextInsert->text');";
        //echo $sql;
        $retVal = mysql_query( $sql, $conn );
        return $retVal;
        
    }
    function PoliceStationLocation($conn,$location){
        $sql1="select areaname from area where location='$location';";
        
        $retVal = mysql_query( $sql1, $conn );
        
        $retVal1= mysql_fetch_assoc($retVal);
        $retVal=$retVal1["areaname"];
        //echo "<br>";
        //echo $retVal;
        return $retVal;
    }
}