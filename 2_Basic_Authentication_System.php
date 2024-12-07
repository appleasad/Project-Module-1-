<?php

define("USERNAME", "admin");
define("PASSWORD", "1234");

echo "Enter Username: ";
$username_1 = readline();

echo "Enter Password: ";
$password_1 = readline();

if($username_1 === USERNAME && $password_1 === PASSWORD){
    echo "Login Successful.";
}else{
    echo "Login Failed.";
}
    


