<?php
var_dump($_POST);
ob_start();
if (!empty($_POST)) {
    session_start();
    include '../Models/Account.php';
    $Account = unserialize($_SESSION['Account']);
    var_dump($Account);
    var_dump($Account->PasswordHash);
    $oldPassword = $_POST['oldPassword']; //
    var_dump($oldPassword);
    var_dump(password_verify($oldPassword, $Account->PasswordHash));
    if (!password_verify($oldPassword, $Account->PasswordHash)) {
        header("Location: ../views/changePassword?dummy=dummy");
    } else {
        $password = $_POST['newPassword']; //
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        require "../connection.php";
        $UpdateQuery = $connection->prepare("CALL Change_Password (?,?)"); //
        var_dump($UpdateQuery);
        var_dump([$Account->AccountId,  $hashed_password]);
        var_dump($UpdateQuery->execute([$Account->AccountId,  $hashed_password])); //

        header("Location: ../views/Account.php");
    }
} else {

    echo "Please Fill info";
    header("Refresh: 5;../views/changePassword.php");
}
ob_end_clean();
