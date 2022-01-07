<?php
var_dump($_POST);
ob_start();
if (!empty($_POST)) {
    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING); //
    $fName = filter_var($_POST['fName'], FILTER_SANITIZE_STRING); //
    $mName = filter_var($_POST['mName'], FILTER_SANITIZE_STRING); //
    $lName = filter_var($_POST['lName'], FILTER_SANITIZE_STRING); //
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL); //
    if (isset($_POST['contactEmail'])) {
        $contactEmail = filter_var($_POST['contactEmail'], FILTER_SANITIZE_EMAIL); //
    } else $contactEmail = "";
    if (isset($_POST['contactEmail'])) {
        $country = filter_var($_POST['country'], FILTER_SANITIZE_STRING); //
    } else  $country = "";
    $gender = filter_var($_POST['gender'], FILTER_SANITIZE_NUMBER_INT); //
    if (isset($_POST['contactEmail'])) {

        $type = filter_var($_POST['type'], FILTER_SANITIZE_STRING); //
        if ($type == 1)
            $type = 0;
        else
            $type = 1;
    } else $type = 2;
    $date = $_POST['birthdate'];

    if ($gender == 1)
        $gender = 'M';
    else
        $gender = 'F';
    if (isset($_POST['AddedById']))
        $AddedById = $_POST['AddedById'];
    else $AddedById=-1;

        require "../connection.php";

    $insertQuery = $connection->prepare("CALL ADD_Account (?,?,?,?,?,?,?,?,?,?,?,?)"); //
    var_dump($insertQuery);
    var_dump([$username, $fName, $mName, $lName, $hashed_password, $email, $gender, $date, $type, $country, $contactEmail,$AddedById]);
    var_dump($insertQuery->execute([$username, $fName, $mName, $lName, $hashed_password, $email, $gender, $date, $type, $country, $contactEmail,$AddedById])); //

    header("Location: ../views/login.php");
} else {

    echo "Please Fill Registration info";
    header("Refresh: 5;../views/Registration.php");
}
ob_end_clean();
