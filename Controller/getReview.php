<?php

require "../connection.php";
require "../Models/GameReview.php";
require "../Controller/AuthorizeBuyer.php";

$query = $connection->prepare("SELECT * FROM games_reviews_details WHERE GameId =? and BuyerId=?;");
$result = $query->execute([$_GET['id'], $account->ID]);

$reviews = $query->fetchAll(PDO::FETCH_CLASS, 'GameReview');
$review = $reviews[0];

?>