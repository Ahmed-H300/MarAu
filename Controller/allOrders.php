<?php
require "../Models/All_Orders.php";
require "../connection.php";
$selectQuery = $connection->prepare("SELECT * FROM all_orders WHERE 1;"); //
$selectQuery->execute([]); //
$orders = $selectQuery->fetchAll(PDO::FETCH_CLASS, 'All_Orders');


