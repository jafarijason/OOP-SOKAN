<?php

ini_set('display_errors', '1');



// require_once "classes/User.php";
// require_once "classes/User2.php";
// require_once "classes/User3.php";


spl_autoload_register(function ($class) {
    require_once "classes/{$class}.php";
});