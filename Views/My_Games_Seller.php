<?php
require '../Controller/AuthorizeSeller.php';
require '../Controller/my_games_seller.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/Home_style.css">
  <title>MarAu </title>
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
  <?php include('nav.php') ?>
  <!-- MY games -->
  <h2 class="games-title" id="font-buyer">
    My Games
  </h2>
  <section class="Games">
    <?php
    foreach ($Games as $Game) {
      if ($Game->Rating == null) {
        $Rating_string = '0';
      } else {
        $Rating_string = strval($Game->Rating);
      }
      echo "
              <div class='Games-item'>
              <div style='background-image: url(../GamesImages/GameIcon$Game->GameId);' class='Games-item-image'></div>
              <p class='title'>
              $Game->Name
          </p>
          <a href='../Games_download/$Game->GameId' download='$Game->Name'>
          <button>Download</button>
          </a>
          <a href='../Views/Game_Details?id=$Game->GameId'>
          <button>View Game</button>
          </a>
          <a href='../Views/Edit_Game?id=$Game->GameId'>
          <button>Edit Game</button>
          </a>
          <p class='title'>
          Rating :  $Rating_string
          </p>
      </div>   
              ";
    }
    ?>
  </section>
  <script src='../js/bootstrap.min.js'></script>
  <script src="../js/nav.js"></script>

</body>

</html>