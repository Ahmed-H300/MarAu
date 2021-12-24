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
    $contactEmail = filter_var($_POST['contactEmail'], FILTER_SANITIZE_EMAIL); //
    $country = filter_var($_POST['country'], FILTER_SANITIZE_STRING); //
    $gender = filter_var($_POST['gender'], FILTER_SANITIZE_NUMBER_INT); //
    $type = filter_var($_POST['type'], FILTER_SANITIZE_STRING); //
    $date = $_POST['birthdate'];
    
    if ($type == "Buyer")
        $type = 0;
    else
        $type = 1;
    if ($gender == 1)
        $gender = 'M';
    else
        $gender = 'F';
    

    require "../connection.php";

    $insertQuery = $connection->prepare("CALL ADD_ACCOUNT (?,?,?,?,?,?,?,?,?,?,?)"); //
    var_dump($insertQuery);
    var_dump([$username, $fName,$mName,$lName, $hashed_password, $email, $gender, $date,$type,$country,$contactEmail]);
    var_dump( $insertQuery->execute([$username, $fName,$mName,$lName, $hashed_password, $email, $gender, $date,$type,$country,$contactEmail])); //
    header("Location: ../views/login.php");
} else {

    echo "Please Fill Registration info";
    header("Refresh: 5;../views/Registration.php");
}
