<?php
if (isset($_GET['id']) == false) {
   header("Location: ../views/Not_Found.php");
} else {
   require "../Controller/getGameReviews.php";
   if (isset($reviews) == false) {
      header("Location: ../views/Not_Found.php");
   }
}

session_start();
include '../Models/Account.php';
if (!isset($_SESSION['Account'])) {
    header("Location: ../views/login");
} 
else 
    $account = unserialize($_SESSION['Account']);
?>

<!DOCTYPE html>

<head>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>MarAu </title>
   <link href="../css/bootstrap.min.css" rel="stylesheet">
   <link href="../css/Auctions.css" rel="stylesheet">
</head>

<body class="dark">
   <?php include('nav.php') ?>
   <section class="dark">
      <?php 
      if(!empty($reviews))
      echo"<h1 class='text-center'>".$reviews[0]->Name." Reviews</h1>";
      else
      echo"<h1 class='text-center'>There is No Reviews for this Game Yet!</h1>";
      ?>
       
       <?php 
        foreach($reviews as $review){
            require "./SingleReview.php";
        }
       ?>
   </section>

</body>
<script src='../js/bootstrap.min.js'></script>
<script src="../js/nav.js"></script>

</html>