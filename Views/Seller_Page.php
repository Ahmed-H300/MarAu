<?php
    if(isset($_GET['id']) == false){
        header("Location: ../views/Not_Found.php");
    }
    else
    {
        require "../Controller/get_all_sellergames.php";
        if(isset($games_seller) == false)
        {
            header("Location: ../views/Not_Found.php");
        }
    }
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
    <!-- MY games -->
    <h2 class="games-title" id="font-buyer">
        Seller Page
    </h2>
    <section class="Games">
    <?php
            foreach ($games_seller as $Game) {
              echo "
              <div class='Games-item'>
              <div style='background-image: url(../GamesImages/GameIcon$Game->GameId);' class='Games-item-image'></div>
              <p class='title'>
              $Game->Name
          </p>
          <a href='../Views/Game_Details?id=$Game->GameId'>
          <button>View Game</button>
          </a>
      </div>   
              ";
            }
              ?>
    </section>
<script src='../js/bootstrap.min.js'></script>
<script>
// When the user scrolls down 20px from the top of the document, slide down the navbar
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("navbar").style.top = "0";
  } else {
    document.getElementById("navbar").style.top = "-100px";
  }
  prevScrollpos = currentScrollPos;
}
</script>

</body>
</html>
