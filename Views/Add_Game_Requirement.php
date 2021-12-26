<?php 
  require "../Controller/AuthorizeSeller.php";
  if(isset($_GET['id']) == false){
    header("Location: ../Views/Not_Found.php");
  }
  $gameId = $_GET['id'];
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
          <a class="nav-link active nav-name text-white" aria-current="page" href="#1">MarAu | Add Game Requirement</a>
        </li>
      </ul>
    </div>
  </nav>


  <div class="container">

    <div class="row align-items-left container-form" id="formBox">
      <div class="col-lg-12">
          <form id="formBox" method="POST" action="../Controller/addGameRequirement.php" enctype="multipart/form-data">
            <div id="1">
              
              <h1>Add Game Requirement</h1>

              <input type="hidden" id="gameId" name="gameId" value="<?= $gameId ?>"></input>

              <div class="mb-3">
                <input class="form-control" id="OperatingSystem" name="OperatingSystem" placeholder="Operating System"></input>
                <p class="hide text-danger" id='OperatingSystemError'>This field is required</p>
              </div>
              
              <div class="mb-3">
                <input class="form-control" id="MinimumCPU" name="MinimumCPU" placeholder="Minimum CPU"></input>
                <p class="hide text-danger" id='MinimumCPUError'>This field is required</p>
              </div>

              <div class="mb-3">
                <input class="form-control" id="RecommendedCPU" name="RecommendedCPU" placeholder="Recommended CPU"></input>
                <p class="hide text-danger" id='RecommendedCPUError'>This field is required</p>
              </div>   

              <div class="mb-3">
                <input class="form-control" id="MinimumGPU" name="MinimumGPU" placeholder="Minimum GPU"></input>
                <p class="hide text-danger" id='MinimumGPUError'>This field is required</p>
              </div> 

              <div class="mb-3">
                <input class="form-control" id="RecommendedGPU" name="RecommendedGPU" placeholder="Recommended GPU"></input>
                <p class="hide text-danger" id='RecommendedGPUError'>This field is required</p>
              </div>  

              <div class="mb-3">
                <input type="number" class="form-control" id="MinimumRam" name="MinimumRam" placeholder="Minimum Ram"></input>
                <p class="hide text-danger" id='saleError'>This field is required</p>
              </div>      
              
              <div class="mb-3">
                <input type="number" class="form-control" id="RecommendedRam" name="RecommendedRam" placeholder="RecommendedRam"></input>
                <p class="hide text-danger" id='RecommendedRamError'>This field is required</p>
              </div>

              <div class="mb-3">
                <input type="number" class="form-control" id="Storage" name="Storage" placeholder="Storage"></input>
                <p class="hide text-danger" id='StorageError'>This field is required</p>
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
  OperatingSystem = document.getElementById("OperatingSystem")
  OperatingSystemError = document.getElementById("OperatingSystemError")

  MinimumCPU = document.getElementById("MinimumCPU")
  MinimumCPUError = document.getElementById("MinimumCPUError")

  RecommendedCPU = document.getElementById("RecommendedCPU")
  RecommendedCPUError = document.getElementById("RecommendedCPUError")

  MinimumGPU = document.getElementById("MinimumGPU")
  MinimumGPUError = document.getElementById("MinimumGPUError")

  RecommendedGPU = document.getElementById("RecommendedGPU")
  RecommendedGPUError = document.getElementById("RecommendedGPUError")

  MinimumRam = document.getElementById("MinimumRam")
  MinimumRamError = document.getElementById("MinimumRamError")

  RecommendedRam = document.getElementById("RecommendedRam")
  RecommendedRamError = document.getElementById("RecommendedRamError")

  Storage = document.getElementById("Storage")
  StorageError = document.getElementById("StorageError")

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
      if (OperatingSystem.value === "" || OperatingSystem.value === null) {
        flag = false;
        OperatingSystemError.classList.remove("hide");
      } 
      else 
        OperatingSystemError.classList.add("hide");

      if (MinimumCPU.value === "" || MinimumCPU.value === null) {
        flag = false;
        MinimumCPUError.classList.remove("hide");
      } 
      else 
        MinimumCPUError.classList.add("hide");

      if (RecommendedCPU.value === "" || RecommendedCPU.value === null) {
        flag = false;
        RecommendedCPUError.classList.remove("hide");
      } 
      else 
        RecommendedCPUError.classList.add("hide");

      if (MinimumGPU.value === "" || MinimumGPU.value === null) {
        flag = false;
        MinimumGPUError.classList.remove("hide");
      } 
      else 
        MinimumGPUError.classList.add("hide");

      if (RecommendedGPU.value === "" || RecommendedGPU.value === null) {
        flag = false;
        RecommendedGPUError.classList.remove("hide");
      } 
      else 
        RecommendedGPUError.classList.add("hide");

      if(MinimumRam.value === "" || MinimumRam.value === null) {
        flag = false;
        MinimumRamError.classList.remove("hide");
      } 
      else 
        MinimumRamError.classList.add("hide");
    
      if(RecommendedRam.value === "" || RecommendedRam.value === null) {
        flag = false;
        RecommendedRamError.classList.remove("hide");
      } 
      else 
        RecommendedRamError.classList.add("hide");
      
      if(Storage.value === "" || Storage.value === null) {
        flag = false;
        StorageError.classList.remove("hide");
      } 
      else 
        StorageError.classList.add("hide");
    
    return flag;
  }
</script>

</html>