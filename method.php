<?php

function multiply($numOne, $numTwo)
{
    echo $numOne * $numTwo;
}

multiply(2, 5);

echo "<br>";

class Calculator
{
    function multiply($numOne, $numTwo)
    {
        echo $numOne * $numTwo;
    }
}

$cal = new Calculator();
$cal->multiply(2, 5);

?>