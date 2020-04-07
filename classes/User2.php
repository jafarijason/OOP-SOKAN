<?php

 
class User2
{
    public $name = "Jason2";
    public $lastName = "Jafari2";
    public $dob = 1985;

    public function showFullName()
    {
        return $this->name . ' ' . $this->lastName;
    }
}
 