<?php require '../Models/Sellers_Games.php';
$account = unserialize($_SESSION['Account']);
require "../connection.php";
$selectgamesQuery = $connection->prepare("CALL Get_Seller_Games(?);"); // for my games
$selectgamesQuery->execute([$account->ID]); //
$Games = $selectgamesQuery->fetchAll(PDO::FETCH_CLASS, 'Seller_Game');
