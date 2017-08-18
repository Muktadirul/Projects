<?php

class Textcontactmodel{
    function insert($conn,$contactsinsert){
        $sql="INSERT INTO texts_contacts (id,eid,text) VALUES ('$contactsinsert->id','$contactsinsert->eid','$contactsinsert->text');";
        //echo $sql;
        $retVal = mysql_query( $sql, $conn );
        return $retVal;
    }
}