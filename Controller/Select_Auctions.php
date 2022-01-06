<?php
require "../connection.php";
require "../Models/Auction.php";
$query = $connection->prepare("SELECT * FROM auction_details;");
$result = $query->execute();
$Auctions = $query->fetchAll(PDO::FETCH_CLASS, 'Auction');
$_SESSION['Auctions']=$Auctions;
?>