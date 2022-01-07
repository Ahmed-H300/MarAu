<?php

require "../connection.php";
require "../Models/GameReview.php";

$query = $connection->prepare("SELECT * FROM games_reviews_details WHERE GameId =?;");
$result = $query->execute([$_GET['id']]);

$reviews = $query->fetchAll(PDO::FETCH_CLASS, 'GameReview');

?>