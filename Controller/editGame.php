<?php
var_dump($_POST);
if (!empty($_POST)) {
    require "../Models/Game.php";
    require "../Controller/AuthorizeSeller.php";

    $gameId = filter_var($_POST['gameId'], FILTER_SANITIZE_NUMBER_INT); //
    $name = filter_var($_POST['gamename'], FILTER_UNSAFE_RAW); //
    $description = filter_var($_POST['description'], FILTER_UNSAFE_RAW); //
    $type = filter_var($_POST['type'], FILTER_UNSAFE_RAW); //
    $price = filter_var($_POST['price'], FILTER_SANITIZE_NUMBER_FLOAT); //
    $sale = filter_var($_POST['sale'], FILTER_SANITIZE_NUMBER_FLOAT); //
    $version = filter_var($_POST['version'], FILTER_UNSAFE_RAW); //
    $date = $_POST['releasedate'];
    $sellerID = $account->ID;

    require "../connection.php";

    $query = $connection->prepare("SELECT * FROM games_details WHERE GameId =?;");
    $result = $query->execute([$gameId]);
    $games = $query->fetchAll(PDO::FETCH_CLASS, 'Game');
    if($games == null){
        header("Location: ../Views/Not_Found.php");
        echo "Not Found";
    }
    $game = $games[0];
    if($game->SellerId != $sellerID) {
        header("Location: ../Views/Unauthorized_Request.php");
        echo "Unauthorized Request";
    }

    $insertQuery = $connection->prepare("CALL Edit_Game (?,?,?,?,?,?,?,?)");
    var_dump([$gameId, $name, $description, $date, $price, $version, $type, $sale]);
    $insertQuery->execute([$gameId, $name, $description, $date, $price, $version, $type, $sale]); //
    
    $target_dir = "../GamesImages/";
    $target_file = $target_dir . basename($_FILES["gameimg"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $target_path = $target_dir . "GameIcon" . $gameId . "." . $imageFileType;
    $uploadOk = 1;

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["gameimg"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }


        // Check file size
        if ($_FILES["gameimg"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
        }

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["gameimg"]["tmp_name"], $target_path)) {
                echo "The file ". htmlspecialchars( basename( $_FILES["gameimg"]["name"])). " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    //header("Location: ../views/Game_Details.php?id=" . $gameId);
} else {

    echo "Please Fill All Game Data";
    header("Refresh: 5;../views/Edit_Game.php?id=". $gameId);
}