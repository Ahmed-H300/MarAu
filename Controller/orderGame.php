<?php
require "../connection.php";
require "../Controller/AuthorizeBuyer.php";

$gameId = filter_var($_POST['gameId'], FILTER_SANITIZE_NUMBER_INT);
$buyerId = $account->ID;
$insertQuery = $connection->prepare("CALL Order_Game (?,?)"); //
var_dump($insertQuery);
var_dump([$buyerId, $gameId]);
var_dump($insertQuery->execute([$buyerId, $gameId]));
var_dump($result = $insertQuery->fetch()['ID']);
//header("Location: ../views/Account");
?>