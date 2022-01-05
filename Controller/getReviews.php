<?php

require "../connection.php";
require "../Models/Review.php";

$query = $connection->prepare("SELECT * FROM reviews_details WHERE GameId =?;");
$result = $query->execute([$_GET['id']]);

$reviews = $query->fetchAll(PDO::FETCH_CLASS, 'Review');

?>