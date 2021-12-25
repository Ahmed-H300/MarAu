<?php
session_start();

$_SESSION['']

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
  <nav class="navbar navbar-expand-lg navbar-light ">
    <div class="offset-sm-1 container-fluid">
      <a class="navbar-brand" href="https://marau.demosfortest.com/"><img src='../img/logo.png' width="70" height="70"></a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active nav-name text-white" aria-current="page" href="#1">MarAu | Add Game</a>
        </li>
      </ul>
    </div>
  </nav>


  <div class="container">

    <div class="row align-items-left container-form" id="formBox">
      <div class="col-lg-12">
          <form id="formBox" method="POST" action="../Controller/addGame.php">
            <div id="1">
              
              <h1>Add New Game</h1>

              <div class="mb-3">
                <input type="text" class="form-control" id="gamename" placeholder="Name"></input>
                <p class="hide text-danger" id='gamenameError'>This field is required</p>
              </div>
              
              <div class="mb-3">
                <textarea style="height: 100px;" class="form-control" id="description" placeholder="Description"></textarea>
                <p class="hide text-danger" id='descriptionError'>This field is required</p>
              </div>

              <div class="mb-3">
                <input class="form-control" id="version" placeholder="Version"></input>
                <p class="hide text-danger" id='versionError'>This field is required</p>
              </div>    

              <div class="mb-3">
                <input type="number" class="form-control" id="price" placeholder="Price"></input>
                <p class="hide text-danger" id='priceError'>This field is required</p>
              </div>  

              <div class="mb-3">
                <input type="number" class="form-control" id="sale" placeholder="Initial Sale"></input>
                <p class="hide text-danger" id='saleError'>This field is required</p>
              </div>      

              <div class="mb-3">
                <select class="form-select" aria-label="type" id="type">
                  <option selected value='None' disabled>Type</option>
                  <option value="Action">Action</option>
                  <option value="Adventure">Adventure</option>
                  <option value="Open World">Open World</option>
                  <option value="Shooter">Shooter</option>
                  <option value="Strategy">Strategy</option>
                  <option value="RD2">RD2</option>
                </select>
                <p class="hide text-danger" id='typeError'>This field is required</p>
              </div>
              
              <div class="mb-3">
                <label for="releasedate" class="form-label">Release Date </label>
                <input type="date" class="form-control " id="releasedate" placeholder="Release Date">
                <p class="hide text-danger" id='releasedateError'></p>
              </div>

              <div class="mb-3">
                <label for="gameimg" class="form-label">Game Image</label>
                <input type="file" class="form-control" id="gameimg" placeholder="Game Image"></input>
                <p class="hide text-danger" id='gameimgError'>This field is required</p>
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
  gamename = document.getElementById("gamename")
  gamenameError = document.getElementById("gamenameError")

  description = document.getElementById("description")
  descriptionError = document.getElementById("descriptionError")

  type = document.getElementById("type")
  typeError = document.getElementById("typeError")

  price = document.getElementById("price")
  priceError = document.getElementById("priceError")

  sale = document.getElementById("sale")
  saleError = document.getElementById("saleError")

  version = document.getElementById("version")
  versionError = document.getElementById("versionError")

  releasedate = document.getElementById("releasedate")
  releasedateError = document.getElementById("releasedateError")

  gameimg = document.getElementById("gameimg")
  gameimgError = document.getElementById("gameimgError")

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
      if (gamename.value === "" || gamename.value === null) {
        flag = false;
        gamenameError.classList.remove("hide");
      } 
      else 
        gamenameError.classList.add("hide");

      if (description.value === "" || description.value === null) {
        flag = false;
        descriptionError.classList.remove("hide");
      } 
      else 
        descriptionError.classList.add("hide");

      if (type.value === "None" || type.value === null) {
        flag = false;
        typeError.classList.remove("hide");
      } 
      else 
        typeError.classList.add("hide");

      if (sale.value === "" || price.value === null) {
        flag = false;
        saleError.classList.remove("hide");
      } 
      else 
        saleError.classList.add("hide");

      if (price.value === "" || price.value === null) {
        flag = false;
        priceError.classList.remove("hide");
      } else priceError.classList.add("hide");

      if(version.value === "" || version.value === null) {
        flag = false;
        versionError.classList.remove("hide");
      } else versionError.classList.add("hide");

      if(gameimg.value === "" || gameimg.value === null) {
        flag = false;
        gameimgError.classList.remove("hide");
      } else gameimgError.classList.add("hide");

      if (releasedate.value === "" || releasedate.value === null) {
        flag = false;
        releasedateError.innerHTML = "This field is required";
        releasedateError.classList.remove("hide");
      } else releasedateError.classList.add("hide");

    return flag;
  }
</script>

</html>