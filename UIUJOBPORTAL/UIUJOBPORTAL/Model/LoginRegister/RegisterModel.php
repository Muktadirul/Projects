<?php 
class RegisterModel {
    
    
    function insert_member($conn,$reg){
                                                                                                                                                        //Name`, `Email`, `DateOfBirth`, `Password`, `Image`, `Interest`, `Resume`, `Type`
        $sql = "INSERT INTO `registered_users`(`Name`, `Email`, `DateOfBirth`, `Password`, `Image`, `Interest`, `Resume`, `Type`) VALUES ('$reg->Name' , '$reg->Email','$reg->DateofBirth','$reg->Password','$reg->Image','$reg->Interest','$reg->Resume' ,'$reg->Type');";
        
        $retVal = mysql_query( $sql, $conn );
        return $retVal;
        
    }
}