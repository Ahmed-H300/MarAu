<?php
if(isset($_GET['Id']) == true){
  $id = $_GET['Id'];
  
}
else{
  header("Location: ../views/Not_Found.php");
}
// require ''
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
    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="https://marau.demosfortest.com/"><img src='../img//Home/super-logo.png' width="50" height="50"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="../Views/Home.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../Views/login.html">Sign in</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">MY Profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../Views/Buyer_Page.html">MY Games</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    <!-- MY games -->
    <h2 class="games-title" id="font-buyer">
        Seller Page
    </h2>
    <section class="Games">
        <div class="Games-item">
            <div style="background-image: url(../img/Home/game.jpg);" class="Games-item-image"></div>
            <p class="title">
                Mario 1
            </p>
            <button onClick="window.location.href='../Views/game.html';">
                View Game
            </button>
        </div>
        <div class="Games-item">
            <div style="background-image: url(../img/Home/game.jpg);" class="Games-item-image"></div>
            <p class="title">
                Mario 2
            </p>
            <button onClick="window.location.href='../Views/game.html';">
                View Game
            </button>
        </div>
        <div class="Games-item">
            <div style="background-image: url(../img/Home/game.jpg);" class="Games-item-image"></div>
            <p class="title">
                Mario 3
            </p>
            <button onClick="window.location.href='../Views/game.html';">
                View Game
            </button>
        </div>
        <div class="Games-item">
            <div style="background-image: url(../img/Home/game.jpg);" class="Games-item-image"></div>
            <p class="title">
                Mario 4
            </p>
            <button onClick="window.location.href='../Views/game.html';">
                View Game
            </button>
        </div>
        <div class="Games-item">
            <div style="background-image: url(../img/Home/game.jpg);" class="Games-item-image"></div>
            <p class="title">
                Mario 5
            </p>
            <button onClick="window.location.href='../Views/game.html';">
                View Game
            </button>
        </div>
        <div class="Games-item">
            <div style="background-image: url(../img/Home/game.jpg);" class="Games-item-image"></div>
            <p class="title">
                Mario 6
            </p>
            <button onClick="window.location.href='../Views/game.html';">
                View Game
            </button>
        </div>
        <div class="Games-item">
            <div style="background-image: url(../img/Home/game.jpg);" class="Games-item-image"></div>
            <p class="title">
                Mario 7
            </p>
            <button onClick="window.location.href='../Views/game.html';">
                View Game
            </button>
        </div>
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
