<?php 
require "../Models/Buyer_Game.php";
$account = unserialize($_SESSION['Account']);
require "../connection.php";
$selectgamesQuery = $connection->prepare("CALL Get_Buyer_Games (?);"); // for my games
$selectgamesQuery->execute([$account->ID]); //
$Games = $selectgamesQuery->fetchAll(PDO::FETCH_CLASS, 'Buyer_Game');
