<?php

 
class User3
{
    public $name = "Jason3";
    public $lastName = "Jafari3";
    public $dob = 1985;

    public function showFullName()
    {
        return $this->name . ' ' . $this->lastName;
    }
}
 