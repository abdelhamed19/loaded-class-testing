<?php
class one 
{
    public $name;
    public $age;
    public $salary;
    
    public function __construct($namee,$agee,$salaryy)
    {
        $this->name=$namee;
        $this->age=$agee;
        $this->salary=$salaryy;
        
    }
    public function info ()
    {
        return "Your name is    ".$this->name ."    Your age is    ".$this->age."   Your salary is    ".$this->salary;
    }
}
