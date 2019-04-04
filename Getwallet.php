<?php 
error_reporting(E_ALL); ini_set('display_errors', 1);session_start();
$email =$argv[1];
$password =$argv[2];

 $output=file_get_contents("http://149.28.199.86:8080/Wishmoney/Wallet?email=".$email."&password=".$password);
?>

