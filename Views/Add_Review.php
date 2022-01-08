<?php 
  if(isset($_GET['id']) == false)
  {
    header("Location: ../views/Not_Found.php");
  }
  $GameId = $_GET['id'];
  require "../Controller/getReview.php";
  if(!empty($review)){
    header("Location: ../views/Edit_Review?id=$GameId");

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
  <?php  include ('nav.php') ?>
  <!-- <nav class="navbar navbar-expand-lg navbar-light ">
    <div class="offset-sm-1 container-fluid">
      <a class="navbar-brand" href="https://marau.demosfortest.com/"><img src='../img/logo.png' width="70" height="70"></a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active nav-name text-white" aria-current="page" href="#1">MarAu | Add Game</a>
        </li>
      </ul>
    </div>
  </nav> -->


  <div class="container">

    <div class="row align-items-left container-form" id="formBox">
      <div class="col-lg-12">
          <form id="formBox" method="POST" action="../Controller/addReview.php" enctype="multipart/form-data">
            <div id="1">
              
              <h1>Add Game Review</h1>

              <input type="hidden" id="GameId" name="GameId" value="<?= $GameId ?>"></input>
              <div class="mb-3">
                <input type="Text" class="form-control" id="Text" name="Text" placeholder="Text"></input>
                <p class="hide text-danger" id='TextError'>This field is required</p>
              </div>

              <div class="mb-3">
                <input type="number" step="0.01" class="form-control" id="Rating" name="Rating" placeholder="Rating"></input>
                <p class="hide text-danger" id='RatingError'>This field is required and Less Than 10</p>
              </div>

              <div class="d-flex justify-content-between">
                <button type="submit" class="align-self-center submit">submit</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</body>
<script src='./js/bootstrap.min.js'></script>
<script>
  form = document.getElementById("formBox");
  //inputs
  Text = document.getElementById("Text")
  TextError = document.getElementById("TextError")

  Rating = document.getElementById("Rating")
  RatingError = document.getElementById("RatingError")

  form.addEventListener("submit", (e) => {
    if (!validate()) 
    e.preventDefault();
    else 
    console.log("click");
  });

  //Valiation
  function validate() {
    flag = true;
    //Landing page
      if (Text.value === "" || Text.value === null) {
        flag = false;
        TextError.classList.remove("hide");
      } 
      else 
        TextError.classList.add("hide");

      if (Rating.value === "" || Rating.value === null || Rating.value > 10) {
        flag = false;
        RatingError.classList.remove("hide");
      } 
      else 
        RatingError.classList.add("hide");
    
    return flag;
  }
</script>
<script src="../js/nav.js"></script>

</html>