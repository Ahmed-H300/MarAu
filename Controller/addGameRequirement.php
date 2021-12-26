<?php
var_dump($_POST);
if (!empty($_POST)) {
    require "../Models/Game.php";
    require "../Controller/AuthorizeSeller.php";

    $gameId = filter_var($_POST['gameId'], FILTER_SANITIZE_NUMBER_INT); //
    $name = filter_var($_POST['gamename'], FILTER_UNSAFE_RAW); //
    $description = filter_var($_POST['description'], FILTER_UNSAFE_RAW); //
    $type = filter_var($_POST['type'], FILTER_UNSAFE_RAW); //
    $price = filter_var($_POST['price'], FILTER_SANITIZE_NUMBER_FLOAT); //
    $sale = filter_var($_POST['sale'], FILTER_SANITIZE_NUMBER_FLOAT); //
    $version = filter_var($_POST['version'], FILTER_UNSAFE_RAW); //
    $date = $_POST['releasedate'];
    $sellerID = $account->ID;

    require "../connection.php";

    $query = $connection->prepare("SELECT * FROM games_details WHERE GameId =?;");
    $result = $query->execute([$gameId]);
    $games = $query->fetchAll(PDO::FETCH_CLASS, 'Game');
    if($games == null){
        header("Location: ../Views/Not_Found.php");
        echo "Not Found";
    }
    $game = $games[0];
    if($game->SellerId != $sellerID) {
        header("Location: ../Views/Unauthorized_Request.php");
        echo "Unauthorized Request";
    }

    $insertQuery = $connection->prepare("CALL Edit_Game (?,?,?,?,?,?,?,?)");
    var_dump([$gameId, $name, $description, $date, $price, $version, $type, $sale]);
    $insertQuery->execute([$gameId, $name, $description, $date, $price, $version, $type, $sale]); //
    
    header("Location: ../views/Game_Details.php?id=" . $gameId);
} else {

    echo "Please Fill All Game Data";
    header("Refresh: 5;../views/Edit_Game.php?id=". $gameId);
}