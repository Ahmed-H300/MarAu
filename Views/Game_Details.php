<?php
    if(isset($_GET['id']) == false){
        header("Location: ../views/Not_Found.php");
    }
    else
    {
        require "../Controller/getGame.php";
        if(isset($game) == false)
        {
            header("Location: ../views/Not_Found.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MarAu </title>
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="../css/styles.css" rel="stylesheet">
</head>

<body>
  <!-- Nav Bar Section -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="offset-sm-1 container-fluid">
      <a class="navbar-brand" href="https://marau.demosfortest.com/"><img src='../img/logo.png' width="70" height="70"></a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active nav-name text-white" aria-current="page" href="#1">MarAu | Game Details</a>
        </li>
      </ul>
    </div>
  </nav>
    <div>
        <div class="mt-lg-5">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-6 col-xl-5 offset-xl-1">
                        <h1>
                            <?= $game->Name ?>
                        </h1>
                        <p>
                            <?= $game->Description ?>
                        </p>
                        <button class="btn btn-light btn-lg action-button" type="button">Buy Now</button>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-5 offset-xl-1">
                        <img class="img-fluid" src="<?= '../GamesImages/GameIcon'. $game->GameId .'.jpg'?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-6 col-xl-5 offset-xl-1">
                        <h1>
                            Seller
                        </h1>
                        <p>
                            <?= $game->SellerName ?>
                        </p>
                        <button class="btn btn-light btn-lg action-button" type="button">Seller Details</button>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-5 offset-xl-1">
                        <img class="img-fluid" src="<?= '../GamesImages/GameIcon'. $game->GameId .'.jpg'?>">
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src='./js/bootstrap.min.js'></script>

</html>