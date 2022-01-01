<?php
var_dump($_POST);
// ob_start();
require "../Models/Account.php";
require "../Models/Buyer_Game.php";
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
    if($accounts[0]->Gender==="M")
    $accounts[0]->Gender="Male";
    else
    $accounts[0]->Gender="Female";
    var_dump($accounts[0]);
    var_dump(password_verify($password, $accounts[0]->PasswordHash));
    if (password_verify($password, $accounts[0]->PasswordHash)) {
        session_start();
        $_SESSION['Account'] = serialize($accounts[0]);

        if ($accounts[0]->AccountType == 'Buyer')
        {
            $selectgamesQuery = $connection->prepare("CALL Get_Buyer_Games (?);"); // for my games
            var_dump($selectgamesQuery->execute([$accounts[0]->ID])); //
            var_dump($Games = $selectgamesQuery->fetchAll(PDO::FETCH_CLASS));

            $_SESSION['Buyer_Game'] = serialize($Games);
        }


        // header("Location: ../views/Account");
    } else
        header("Location: ../views/login.php");

    //test is username kotp123 password passowrd
} else {

    echo "Please Fill login info";
    header("Refresh: 5;../views/Registration.php");
}
ob_end_clean();
?>
