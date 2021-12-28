<?php
var_dump($_POST);
if (!empty($_POST)) {
    require "../Models/Game.php";
    require "../Controller/AuthorizeSeller.php";

    $gameId = filter_var($_POST['gameId'], FILTER_SANITIZE_NUMBER_INT); 
    $OperatingSystem = filter_var($_POST['OperatingSystem'], FILTER_UNSAFE_RAW); 

    $MinimumCPU = filter_var($_POST['MinimumCPU'], FILTER_UNSAFE_RAW); 
    $RecommendedCPU = filter_var($_POST['RecommendedCPU'], FILTER_UNSAFE_RAW); 

    $MinimumRam = filter_var($_POST['MinimumRam'], FILTER_UNSAFE_RAW); 
    $RecommendedRam = filter_var($_POST['RecommendedRam'], FILTER_UNSAFE_RAW); 

    $RecommendedGPU = filter_var($_POST['RecommendedGPU'], FILTER_UNSAFE_RAW); 
    $MinimumGPU = filter_var($_POST['MinimumGPU'], FILTER_UNSAFE_RAW);

    $Storage = filter_var($_POST['Storage'], FILTER_UNSAFE_RAW); 

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

    $insertQuery = $connection->prepare("CALL Edit_Game_Requirements (?,?,?,?,?,?,?,?,?)");
    var_dump([$gameId, $OperatingSystem, $MinimumCPU, $RecommendedCPU, $MinimumGPU, $RecommendedGPU, $MinimumRam, $RecommendedRam, $Storage]);
    $insertQuery->execute([$gameId, $OperatingSystem, $MinimumCPU, $RecommendedCPU, $MinimumGPU, $RecommendedGPU, $MinimumRam, $RecommendedRam, $Storage]); //
    
    header("Location: ../views/Game_Details.php?id=" . $gameId);
} else {

    echo "Please Fill All Game Data";
    header("Refresh: 5;../views/Edit_Game.php?id=". $gameId);
}