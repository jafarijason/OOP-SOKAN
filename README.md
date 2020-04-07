OOP-Programming

4 main principal oop programming



- Abstraction
- Polymorphism
- Inheritance
- Encapsulation



Abstraction :
 


Polymorphism:
    Overloading 


Inheritance:
    - Single Inheritance
    - Multi-level Inheritance
    - Multiple Inheritance
    - Hierarchical Inheritance

Encapsulation:


----------------------------
Class and Object

```
<?php

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


```

