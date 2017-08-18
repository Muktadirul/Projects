<?php

class Textcontact {
    public $id;  
    public $eid;  
    public $text;  
    public function __construct($id, $eid,$text)    
    {    
        $this->id = $id;  
        $this->eid = $eid; 
        $this->text=$text;
    }   
}

