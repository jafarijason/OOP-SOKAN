<?php

//Class and Object

require_once "init.php";


$objectMadeFromUserClass = new User();
echo $objectMadeFromUserClass->showFullName();
echo "<br>";
$objectMadeFromUser2Class = new User2();
echo $objectMadeFromUser2Class->showFullName();
echo "<br>";
$objectMadeFromUser3Class = new User3();
echo $objectMadeFromUser3Class->showFullName();
echo "<br>";

 