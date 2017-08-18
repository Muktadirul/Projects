<?php
class Login {
    public $Name;  
    public $Email;
    public $Password;
    public $Type;
    public function __construct($Name,$Email,$Password,$Type)    
    {    
        $this->Name=$Name;
        $this->Email=$Email;
        $this->Password=$Password;
        $this->Type =$Type;
    }   
}
