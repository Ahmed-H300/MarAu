<?php
var_dump($_POST);
ob_start();
require "../Models/Account.php";
if (!empty($_POST)) {
    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING); //
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    require "../connection.php";
    $selectQuery = $connection->prepare("SELECT * FROM Account_info WHERE Username=?;"); //
    var_dump($selectQuery);
    var_dump([$username]);
    var_dump($selectQuery->execute([$username])); //
    var_dump($accounts = $selectQuery->fetchAll(PDO::FETCH_CLASS, 'Account'));
    var_dump($accounts[0]);
    if ($accounts[0]->Gender === "M")
        $accounts[0]->Gender = "Male";
    else
        $accounts[0]->Gender = "Female";
    var_dump($accounts[0]);
    var_dump(password_verify($password, $accounts[0]->PasswordHash));
    if (password_verify($password, $accounts[0]->PasswordHash)) {
        if ($accounts[0]->Status == 1) {
            session_start();
            $_SESSION['Account'] = serialize($accounts[0]);
            header("Location: ../views/Account");
        } else header("Location: ../views/Deactivated.php");
    } else
        header("Location: ../views/login?error=1");

    //test is username kotp123 password passowrd
} else {

    echo "Please Fill login info";
    header("Refresh: 5;../views/Registration.php");
}
ob_end_clean();
