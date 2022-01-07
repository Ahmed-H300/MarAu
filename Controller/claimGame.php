<?php
var_dump($_GET);
if (!empty($_GET)) {
$amount = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_FLOAT);
require "../connection.php";
$query = $connection->prepare("CALL ClaimGame (?);");
$result = $query->execute([$_GET['id']]);
var_dump($ID = $query->fetchObject());
}
header("Location: ../views/Auctions");
?>