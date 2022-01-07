<?php
var_dump($_GET);
ob_start();
require "../connection.php";
require "../Models/All_Reviews.php";
if (!empty($_GET['BuyerId'])) {
    $selectQuery = $connection->prepare("call Strike_Buyer(?)"); //
    var_dump($selectQuery->execute([$_GET['BuyerId']])); //
    // delete review here
    $deleteQuery = $connection->prepare("call delete_review(?,?)");
    var_dump($deleteQuery->execute([$_GET['GameId'], $_GET['BuyerId']]));
} else {
    $selectQuery = $connection->prepare("SELECT Name as 'GameName',Text as 'Text',BuyerId as 'BuyerId',GameId as 'GameId',BuyerUserName as 'BuyerUsername' FROM games_reviews_details  WHERE 1;"); //
    var_dump($selectQuery->execute()); //
    var_dump($reviews = $selectQuery->fetchAll(PDO::FETCH_CLASS, 'All_Reviews'));
    session_start();
    $_SESSION['reviews'] = serialize($reviews);
    var_dump($reviews);
}
header("Location: ../views/Strike_Buyers");
ob_end_clean();
