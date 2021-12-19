<?php
var_dump($_POST);
if (!empty($_POST)) {
    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING); //
    $fName = filter_var($_POST['fName'], FILTER_SANITIZE_STRING); //
    $mName = filter_var($_POST['mName'], FILTER_SANITIZE_STRING); //
    $lName = filter_var($_POST['lName'], FILTER_SANITIZE_STRING); //
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL); //
    $gender = filter_var($_POST['gender'], FILTER_SANITIZE_NUMBER_INT); //
    if ($gender == 1)
        $gender = 'M';
    else
        $gender = 'F';
    $date = $_POST['birthdate'];

    require "../connection.php";

    $insertQuery = $connection->prepare("INSERT into accounts(Username, fName,mName,lName, PasswordHash, EmailAddress, Gender, BirthDate) VALUES (?,?,?,?,?,?,?,?)"); //
    var_dump($insertQuery);
    var_dump([$username, $name, $hashed_password, $email, $gender, $date]);
    var_dump( $insertQuery->execute([$username, $fName,$mName,$lName, $hashed_password, $email, $gender, $date])); //
    header("Location: ../views/login.php");
} else {

    echo "Please Fill Registration info";
    header("Refresh: 5;../views/Registration.php");
}
