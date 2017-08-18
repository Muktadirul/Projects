<?php

 class GlobalModel{
     function Phone_no_validation($Phoneno){
         //$pat='01[15679][0-9]{8}$';
         $de=  strlen($Phoneno);
         if($de ==11 ){
             return true;
         }
         else return false ;
     }
    
}

?>