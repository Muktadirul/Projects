<?php
class Register {
    public $Name;  
    public $Email;
    public $Password;
    public $DateofBirth;
    public $Image;
    public $Resume;
    public $Interest;
    public $Type;

    public function __construct($Name,$Email,$Password,$DateofBirth,$Image,$Resume,$Interest,$Type)    
    {    
        $this->Name=$Name;
        $this->Email=$Email;
        $this->Password=$Password;
        $this->DateofBirth=$DateofBirth;
        $this->Image=$Image;
        $this->Resume=$Resume;
        $this->Interest=$Interest;
        $this->Type=$Type;
        
    }   
}
