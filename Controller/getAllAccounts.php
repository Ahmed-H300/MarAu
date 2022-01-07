<?php

require "../connection.php";
require "../Models/Account.php";

$query = $connection->prepare("SELECT * FROM Account_info;");
$result = $query->execute();

$accounts = $query->fetchAll(PDO::FETCH_CLASS, 'Account');

?>