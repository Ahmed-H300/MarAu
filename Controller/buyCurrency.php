<?php
require "../connection.php";
require "../Controller/AuthorizeBuyer.php";

$amount = filter_var($_POST['amount'], FILTER_SANITIZE_NUMBER_INT);
$buyerId = $account->ID;
$insertQuery = $connection->prepare("CALL Add_Currency (?,?)"); //
var_dump($insertQuery);
var_dump([$buyerId, $amount]);
var_dump($result = $insertQuery->execute([$buyerId, $amount]));
if ($result === true) {
   $account->Balance += $amount;
   $_SESSION['Account'] = serialize($account);
}
header("Location: ../views/Account");
?>