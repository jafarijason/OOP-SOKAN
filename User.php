<?php

//Class and Object


class User
{
    public $name = "Jason";
    public $lastName = "Jafari";
    public $dob = 1985;

    public function showFullName()
    {
        return $this->name . ' ' . $this->lastName;
    }
}

$objectMadeFromUserClass = new User();

echo $objectMadeFromUserClass->showFullName();
