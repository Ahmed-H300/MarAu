<?php

require "../connection.php";
require "../Models/Game.php";

$query = $connection->prepare("SELECT * FROM games_details WHERE GameId =?;");
$result = $query->execute([$_GET['id']]);

$games = $query->fetchAll(PDO::FETCH_CLASS, 'Game');
$game = $games[0];

?>