<?php

class Info {    
    public $id;  
    public $name;  
    public $phn1;
    public $phn2;
    public $location;
    public $pw;


    public function __construct($id, $name, $phn1, $phn2, $location, $pw)    
    {    
        $this->id = $id;  
        $this->name = $name;
        $this->location = $location;
        $this->phn1 = $phn1;
	$this->phn2 = $phn2;
        $this->pw = $pw;
        
    } 
        
    }
?>