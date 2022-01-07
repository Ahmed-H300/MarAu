<?php
require "../Controller/getAllGames.php";
session_start();
include '../Models/Account.php';
if (!isset($_SESSION['Account'])) {
    header("Location: ../views/login");
} 
else 
    $account = unserialize($_SESSION['Account']);
?>

<!DOCTYPE html>

<head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>MarAu </title>
   <link href="../css/bootstrap.min.css" rel="stylesheet">
   <link href="../css/Auctions.css" rel="stylesheet">
</head>

<body class="dark">
   <?php include('nav.php') ?>
   <section class="dark">
       <h1 class="text-center">All Games</h1>
       <table class="table table-striped table-light table-hover">
            <thead class="thead-light">
                <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Type</th>
                    <th>Price</th>
                    <th>Sale</th>
                    <th>Added By</th>
                    <th>Rating</th>
                    <th>Orders Count</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($games as $game){
                        echo 
                        "<tr>"
                        ."<td>". $game->Name ."</td>"
                        ."<td>". $game->Description ."</td>"
                        ."<td>". $game->Type ."</td>"
                        ."<td>". $game->Price ."</td>"
                        ."<td>". $game->Sale ."</td>"
                        ."<td>". $game->SellerName ."</td>"
                        ."<td>". $game->Rating ."</td>"
                        ."<td>". $game->NumberOfOrders ."</td>"
                        ."</tr>";
                    }
                ?>
            </tbody>
       </table>
   </section>

</body>
<script src='../js/bootstrap.min.js'></script>
<script src="../js/nav.js"></script>

</html>