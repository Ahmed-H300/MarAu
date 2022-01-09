<?php
var_dump($_POST);
if (!empty($_POST)) {
    require "../Models/GameReview.php";
    require "../Controller/AuthorizeBuyer.php";

    $GameId = filter_var($_POST['GameId'], FILTER_SANITIZE_NUMBER_INT); 
    $Text = filter_var($_POST['Text'], FILTER_UNSAFE_RAW); 
    $Rating = filter_var($_POST['Rating'], FILTER_UNSAFE_RAW); 
    $BuyerId = $account->ID;
    require "../connection.php";
    $insertQuery = $connection->prepare("CALL Add_REview (?,?,?,?)"); 
    var_dump([$GameId, $BuyerId, $Text, $Rating]);

    try {
        $insertQuery->execute([$GameId, $BuyerId, $Text, $Rating]);
    }catch (PDOException $exception){
        echo $exception->getMessage();
    }

    header("Location: ../views/Game_Reviews?id=" . $GameId);
} else {

    echo "Please Fill All Review Data";
    header("Refresh: 5;../views/Add_Review?id=" . $GameId);
}