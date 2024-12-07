<?php

echo "Enter a number to choose classifier: ";

$number = (int) readline();

if($number > 0){
    echo "This number is positive.";
}elseif($number< 0){
    echo "This number in negative.";
}else{
    echo "The number is ZERO.";
}

