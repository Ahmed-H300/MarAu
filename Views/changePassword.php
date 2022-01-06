<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>MarAu </title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/account-style.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css" rel="stylesheet">

</head>
<?php
session_start();
include '../Models/Account.php';
if (!isset($_SESSION['Account'])) {
    header("Location: ../views/login");
} else $account = unserialize($_SESSION['Account']);
?>

<body>
    <?php include('nav.php') ?>
    <div class="page-content page-container" id="page-content">
        <div class="padding">
            <div class="row container d-flex justify-content-center">
                <div class=" offset-xl-1 col-xl-11 col-md-12">
                    <div class="card user-card-full">
                        <div class="row m-l-0 m-r-0">
                            <div class="col-sm-4 bg-c-lite-green user-profile">
                                <div class="card-block text-center text-white">
                                    <div class="m-b-25"> <img src="https://img.icons8.com/bubbles/100/000000/user.png" class="img-radius" alt="User-Profile-Image"> </div>
                                    <h3 class="f-w-600"><?= $account->fName . " " . $account->mName . " " . $account->lName ?></h3>
                                    <h6><?= $account->AccountType ?></h6>
                                    <?php
                                    if ($account->Status == 1)
                                        echo "<p>Account Activated</p>";
                                    else
                                        echo "<p>Account Is Not Activated</p>";
                                    ?>
                                    <h5 class="f-w-600"><a class="btn btn-danger" href="../Controller/logout.php">log out</a></h5>
                                </div>
                            </div>
                            <div class="col-sm-8">
                                <form id="formBox" method="POST" action="../Controller/changePassword.php">
                                    <div class="card-block">
                                        <h4 class="m-b-20 p-b-5 b-b-default f-w-600">Change Password</h4>
                                        <div class="row">
                                            <div class="col-sm-8">
                                                <h5 class="m-b-10 f-w-600">Old Password</h5>
                                                <input type='password' class="f-w-400 form-control" id="oldPassword" name='oldPassword'></input>
                                                <?php if(isset($_GET['dummy'])) echo "<p class='hide text-danger'>Wrong Password!</p>"?>
                                                <p class="hide text-danger" id='oldPasswordError'></p>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-4">
                                                <h5 class="m-b-10 f-w-600">New Password</h5>
                                                <input type='password' class="f-w-400 form-control" id="newPassword" name='newPassword'></input>
                                                <p class="hide text-danger" id='newPasswordError'></p>

                                            </div>
                                            <div class="col-sm-4">
                                                <h5 class="m-b-10 f-w-600">Confirm Password</h5>
                                                <input type='password' class="f-w-400 form-control" id="confirmPassword" name='confirmPassword'></input>
                                                <p class="hide text-danger" id='confirmPasswordError'></p>

                                            </div>

                                        </div>
                                        <div class="d-flex justify-content-end mt-3">
                                            <button type='submit' class="btn btn-primary submit ">Change</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src='../js/bootstrap.min.js'></script>
<script>
    //btns next back
    form = document.getElementById("formBox");
    //inputs
    oldPassword = document.getElementById("oldPassword")
    oldPasswordError = document.getElementById("oldPasswordError")
    newPassword = document.getElementById("newPassword")
    newPasswordError = document.getElementById("newPasswordError")
    confirmPassword = document.getElementById("confirmPassword")
    confirmPasswordError = document.getElementById("confirmPasswordError")
    //event listners for buttons
    form.addEventListener("submit", (e) => {
        if (!validate()) e.preventDefault();
        else console.log("click");
    });

    //Valiation
    function validate() {
        flag = true;

        if (oldPassword.value === "" || oldPassword.value === null) {
            console.log(flag = false)
            oldPasswordError.innerHTML = "This field is required";
        } else oldPasswordError.innerHTML = "";
        if (newPassword.value === "" || newPassword.value === null) {
            console.log(flag = false)
            newPasswordError.innerHTML = "This field is required";
        } else newPasswordError.innerHTML = "";
        if (confirmPassword.value === "" || confirmPassword.value === null) {
            console.log(flag = false)
            confirmPasswordError.innerHTML = "This field is required";
        } else if (confirmPassword.value !=newPassword.value ) {
            console.log(flag = false)
            confirmPasswordError.innerHTML = "Passwords Dont Match!";
        } else confirmPasswordError.innerHTML = "";
        return flag;
    }
</script>
<script src="../js/nav.js"></script>