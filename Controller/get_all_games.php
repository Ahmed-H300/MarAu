<?php

require "../connection.php";
require "../Models/Sellers_Games.php";

$query = $connection->prepare("SELECT games_details.GameId,games_details.Name,games_details.Rating from games_details Order by games_details.Rating DESC;");
$result = $query->execute();

$games = $query->fetchAll(PDO::FETCH_CLASS, 'Seller_Game');
$heighst_game = $games[0];

?>