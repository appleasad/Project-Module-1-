<?php

define("FACTOR", 9/5);
define("OFFSET", 32);

echo "Enter a temperature value: ";
$temperature = (float)readline();

echo "Convert to (1: Fahrenheit , 2: Celsius) : ";
$select = (int)readline();

switch($select){
    case 1:
        $result = (FACTOR * $temperature) + OFFSET;
        echo "Temperature in Fahrenheit: $result";
        break;
    case 2:
        $result = ($temperature - OFFSET) / FACTOR;
        echo "Temperature in Celsius: $result";
        break;
    default:
        echo "Unknown Value";              
}
