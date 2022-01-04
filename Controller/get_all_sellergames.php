<?php

require "../connection.php";
require "../Models/Sellers_Games.php";

$query = $connection->prepare("CALL Get_Seller_Games(?);");
$result = $query->execute([$_GET['id']]);

$games_seller = $query->fetchAll(PDO::FETCH_CLASS, 'Seller_Game');

?>