<?php
var_dump($_GET);
// ob_start();
require "../connection.php";
if (!empty($_GET)) {
    $selectQuery = $connection->prepare("call Strike_Seller(?)"); //
    var_dump($selectQuery->execute([$_GET["id"]])); //
    // delete game here
    $deleteQuery = $connection->prepare("call delete_gamebyid(?)"); 
    var_dump($deleteQuery->execute([$_GET['gameid']])); 
    header("Location: ../views/Library.php");
    // header("Location: ../views/Game_Details?id=".$_GET["gameid"]);

}
// ob_end_clean();
