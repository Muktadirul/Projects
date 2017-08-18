<?php
class Contact {
    public $id;  
    public $cname;  
    public $cphn1;
    public $cphn2;
      
    public function __construct($id, $cname, $cphn1, $cphn2)    
    {    
        $this->id = $id;  
        $this->cname = $cname;  
        $this->cphn1 = $cphn1;
	$this->cphn2 = $cphn2;
    }   
}
