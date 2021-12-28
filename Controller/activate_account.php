<?php
var_dump($_GET);
ob_start();
require "../Models/Account.php";
require "../connection.php";
if (empty($_GET)) {
    $selectQuery = $connection->prepare("SELECT * FROM Account_info WHERE Status=?;"); //
    var_dump($selectQuery->execute([0])); //
    var_dump($accounts = $selectQuery->fetchAll(PDO::FETCH_CLASS, 'Account'));
    var_dump($accounts[0]);
    if($accounts[0]->Gender==="M")
    $accounts[0]->Gender="Male";
    else
    $accounts[0]->Gender="Female";
    var_dump($accounts[0]);
    session_start();
    $_SESSION['accounts'] = serialize($accounts);
    var_dump($accounts);
    header("Location: ../views/Unactive_Accounts");

    //test is username kotp123 password passowrd
} else {
    var_dump($updateQuery = $connection->prepare("CALL SET_ACCOUNT_STATUS(?,?)")); //
    var_dump($updateQuery->execute([$_GET['id'],1]));
    header("Location: activate_account.php");
}
ob_end_clean();
?>
