<?php
var_dump($_POST);
ob_start();
require "../Models/Account.php";
if (!empty($_POST)) {
    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING); //
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    require "../connection.php";
    $selectQuery = $connection->prepare("SELECT a.AccountId,Username,fName,mName,lName,PasswordHash,EmailAddress,Gender,BirthDate,Status,Country,ContactEmail,Strikes,Balance,BuyerId as ID FROM accounts as a,buyers as b WHERE Username=? AND a.AccountId=b.AccountId UNION SELECT a.AccountId,Username,fName,mName,lName,PasswordHash,EmailAddress,Gender,BirthDate,Status,Country,ContactEmail,Strikes,Balance,SellerId as ID FROM accounts as a,sellers as s WHERE a.AccountId=s.AccountId;"); //
    var_dump($selectQuery);
    var_dump([$username]);
    var_dump($selectQuery->execute([$username])); //
    var_dump($accounts = $selectQuery->fetchAll(PDO::FETCH_CLASS, 'Account'));
    $testQuery = $connection->prepare("SELECT * FROM accounts as a,sellers as b WHERE a.accountId=b.accountId AND Username=?; ");
    var_dump($testQuery->execute([$username]));
    $test = $testQuery->fetchAll(PDO::FETCH_CLASS);
    var_dump($test);
    if (empty($test))
        $accounts[0]->AccountType = "Buyer";
    else $accounts[0]->AccountType = "Seller";
    var_dump($accounts[0]);
    if($accounts[0]=="M")
    $accounts[0]->Gender="Male";
    else
    $accounts[0]->Gender="Female";

    if (password_verify($password, $accounts[0]->PasswordHash)) {
        session_start();
        $_SESSION['Account'] = serialize($accounts[0]);
        header("Location: ../views/Account");
    } else
        header("Location: ../views/login.php");

    //test is username kotp123 password passowrd
} else {

    echo "Please Fill login info";
    header("Refresh: 5;../views/Registration.php");
}
ob_end_clean();
?>
