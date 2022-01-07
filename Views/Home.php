<?php
    require "../Controller/get_top_three_games.php";
    //var_dump($games_seller);
    if(isset($games) == false || isset($heighest_game) == false)
    {
        header("Location: ../views/Not_Found.php");
    }
    //var_dump($heighest_game->GameId);
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
    <?php  include ('nav.php') ?>
    <!-- welcome text -->
    <section id="sec-1">
        <div class="container">
          <div>Ready for the True Gaming ?</div>
          <a href="#sec-2">
            <div class="scroll-down"></div>
          </a>
        </div>
      </section>
      <!-- Top Gaem -->
      <?php
      echo("
      
      <a href='../Views/Game_Details?id=$heighest_game->GameId'>
      ");
      $path = "../GamesImages/GameIcon$heighest_game->GameId";
      //var_dump($path);
      echo("
      <section style='background-image: url($path);' id='sec-2' >     
        </section>
      ")
      ?>
      </a>
      
    <!-- Other games -->
    <h2 class="games-title" style="color: rgb(148, 148, 148); margin: 80px auto;">
        Games
    </h2>
    <section class="Games">
    <?php
            foreach ($games as $Game) {
            if($Game->Rating == null)
              {
                $Rating_string = '0';
              }
              else
              {
                $Rating_string = strval($Game->Rating);
              }
              echo "
              <div class='Games-item'>
              <div style='background-image: url(../GamesImages/GameIcon$Game->GameId);' class='Games-item-image'></div>
              <p class='title'>
              $Game->Name
          </p>
          
          <a href='../Views/Game_Details?id=$Game->GameId'>
          <button>View Game</button>
          </a>
          
          <p class='title'>
          Rating :  $Rating_string
          </p>
      </div>   
              ";
            }
              ?>
          <a href='../Views/Library.php'>
          <button>All Games</button>
          </a>
    </section>
<script src='../js/bootstrap.min.js'></script>
<script src="../js/nav.js"></script>

</body>
</html>
