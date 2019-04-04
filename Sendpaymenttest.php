<?php 
error_reporting(E_ALL); ini_set('display_errors', 1);session_start();
$username =$argv[1];
$password =$argv[2];
$fromAddress =$argv[3];
$toAddress =$argv[4];
$amount =$argv[5];
 $output=file_get_contents("http://149.28.199.86:8080/Wishmoney/SendPaymentApi?username=".$username."&password=".$password."&fromAddress=".$fromAddress."&toAddress=".$toAddress."&amount=".$amount);
?>
