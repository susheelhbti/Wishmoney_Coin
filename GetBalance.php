<?php 
error_reporting(E_ALL); ini_set('display_errors', 1);session_start();
$WalletID =$argv[1];

 $output=file_get_contents("http://149.28.199.86:8080/Wishmoney/Balance?WalletID=".$WalletID);
?>
