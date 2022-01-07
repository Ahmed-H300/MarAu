<?php

require "../connection.php";
require "../Models/Game.php";

$query = $connection->prepare("SELECT * FROM games_details;");
$result = $query->execute();

$games = $query->fetchAll(PDO::FETCH_CLASS, 'Game');

?>