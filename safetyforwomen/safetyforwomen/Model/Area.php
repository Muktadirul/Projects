<?php
class Area {
    public $areaname;  
    public $location;  
      
    public function __construct($areaname, $location)    
    {    
        $this->areaname = $areaname;  
        $this->location = $location; 
    }   
}
