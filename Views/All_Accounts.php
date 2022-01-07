<?php
require "../Controller/getAllAccounts.php";
session_start();
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
       <table class="table text-light">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Name</th>
                    <th>EmailAddress</th>
                    <th>Gender</th>
                    <th>BirthDate</th>
                    <th>Status</th>
                    <th>Balance</th>
                    <th>AccountType</th>
                    <th>Country</th>
                    <th>Strikes</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    foreach($accounts as $acc){
                        echo 
                        "<tr>"
                        ."<td>". $acc->Username ."</td>"
                        ."<td>". $acc->fName . " ". $acc->mName . " " . $acc->lName ."</td>"
                        ."<td>". $acc->EmailAddress ."</td>"
                        ."<td>". $acc->Gender ."</td>"
                        ."<td>". $acc->BirthDate ."</td>"
                        ."<td>". $acc->Status ."</td>"
                        ."<td>". $acc->Balance ."</td>"
                        ."<td>". $acc->AccountType ."</td>"
                        ."<td>". $acc->Country ."</td>"
                        ."<td>". $acc->Strikes ."</td>"
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