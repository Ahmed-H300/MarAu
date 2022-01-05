<?php
var_dump($_POST);
if (!empty($_POST)) {
$amount = filter_var($_POST['Amount'], FILTER_SANITIZE_NUMBER_FLOAT);
require "../connection.php";
$query = $connection->prepare("CALL Add_Bid (?,?,?);");
$result = $query->execute([$_POST['BuyerId'], $_POST['AuctionId'], $amount]);
var_dump($ID = $query->fetchObject());
}

?>