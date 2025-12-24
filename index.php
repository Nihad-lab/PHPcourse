<?php
$username = " Bro Code ";
$username = strtolower(trim($username));
echo $username; // "bro code"
$phone = "123-456-7890";
$phone = str_replace("-", "", $phone);
echo $phone; // "1234567890"
?>
