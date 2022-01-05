<nav id="navbar" class="navbar navbar-expand-lg navbar-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="../Views/Home.php"><img src='../img//Home/super-logo.png' width="50" height="50"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
        <?php
          if (session_status() === PHP_SESSION_ACTIVE) {

            echo("
            <a class='nav-link' href='../Controller/logout.php'>logout</a>
            ");
            //$nav->link("logout", "logoff.php");

            
          } 
          else{

            echo("
            <a class='nav-link' href='../Views/login.php'>Log in</a>
            ");
            //$nav->link("logout", "logoff.php");
          }


          ?>

        </li>
        <li class="nav-item">
          <a class="nav-link" href="../Views/Account.php">MY Profile</a>
        </li>
        <li class="nav-item">
          <?php
          if (isset($_SESSION['Buyer'])) {

            echo("
            <a class='nav-link' href='../Views/My_Games'>MY Games</a>
            ");
            //$nav->link("logout", "logoff.php");

            
          } else if (isset($_SESSION['Seller'])) {

            echo("
            <a class='nav-link' href='../Views/My_Games_Seller'>MY Games</a>
            ");
            //$nav->link("logout", "logoff.php");


          }
          else
          {
            echo("
            <a class='nav-link' href='../Views/Home.php'>Home</a>
            ");
          }


          ?>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>