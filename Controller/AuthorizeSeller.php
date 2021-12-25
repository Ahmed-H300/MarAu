<?php
session_start();
include "../Models/Account.php";
if(!isset($_SESSION['Account'])){
    header("Location: ../views/login.php");
}
else{
    $account = unserialize($_SESSION['Account']);
    if($account->AccountType == "Buyer")
    {
        header("Location: ../views/Unauthorized_Request.php");
    }
}
?>