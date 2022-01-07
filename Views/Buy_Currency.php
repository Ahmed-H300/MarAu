<?php 
  require "../Controller/AuthorizeBuyer.php";
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
  <?php include('nav.php') ?>

  <div class="container">

    <div class="row align-items-left container-form" id="formBox">
      <div class="col-lg-12">
          <form id="formBox" method="POST" action="../Controller/buyCurrency.php" enctype="multipart/form-data">
            <div id="1">
              
              <h1>Add Currency</h1>    

              <div class="mb-3">
                <select class="form-select" aria-label="amount" id="amount" name="amount">
                  <option selected value="0" disabled>Amount</option>
                  <option value="100">100</option>
                  <option value="500">500</option>
                  <option value="1000">1000</option>
                  <option value="2000">2000</option>
                  <option value="5000">5000</option>
                  <option value="10000">10000</option>
                </select>
                <p class="hide text-danger" id='amountError'>This field is required</p>
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
  amount = document.getElementById("amount")
  amountError = document.getElementById("amountError")

  form.addEventListener("submit", (e) => {
    if (!validate()) 
    e.preventDefault();
    else 
    console.log("click");
  });

  //Valiation
  function validate() {
    flag = true;
      if (type.value === "0" || type.value === null) {
        flag = false;
        typeError.classList.remove("hide");
      } 
      else 
        typeError.classList.add("hide");

    return flag;
  }
</script>

</html>