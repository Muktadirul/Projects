<?php
class TextPoliceStations {    
    public $id;  
    public $branch; 
    public $text;

    public function __construct($id, $branch, $text)    
    {    
        $this->id = $id;  
        $this->branch = $branch;
        $this->text = $text;
    } 
}
?>