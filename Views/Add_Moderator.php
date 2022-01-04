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
<?php
session_start();
include '../Models/Account.php';
if (isset($_SESSION['Account'])&&unserialize($_SESSION['Account'])->AccountType!="Admin") {
    header("Location: ../views/Account");
}
?>

<body class="w3-animate-opacity">
    <!-- Nav Bar Section -->
    <?php  include ('nav.php') ?>
    <!-- <nav class="navbar navbar-expand-lg navbar-light ">
        <div class="offset-sm-1 container-fluid">
            <a class="navbar-brand" href="https://marau.demosfortest.com/"><img src='../img/logo.png' width="70" height="70"></a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active nav-name text-white" aria-current="page" href="#1">MarAu | Register</a>
                </li>
            </ul>
        </div>
    </nav> -->


    <div class="container col-sm-8 align-items-center shadow-lg mb-5 w3-animate-opacity">

        <!-- First Form Page  -->
        <div class="row align-items-center container-form " id="formBox">
            <div class="col-sm-6 d-none d-sm-block">
                <img src='../img/register.png' class='img-form'>
            </div>
            <div class="col-sm-5">
                <div class="form-container">
                    <div class="sign">
                        <span class="fast-flicker">re</span>gi<span class="flicker">s</span>t<span class="fast-flicker">e</span>r
                    </div>
                    <form id="formBox" method="post" action="../Controller/addAccount.php">
                        <div id="1">
                            <div class="mb-3">
                                <input class="form-control" id="fName" name='fName' placeholder="First Name"></input>
                                <p class="hide text-danger" id='fNameError'>This field is required</p>
                            </div>
                            <div class="mb-3">
                                <input class="form-control" id="mName" name='mName' placeholder="Middle Name"></input>
                                <p class="hide text-danger" id='mNameError'>This field is required</p>
                            </div>
                            <div class="mb-3">
                                <input class="form-control" id="lName" name='lName' placeholder="Last Name"></input>
                                <p class="hide text-danger" id='lNameError'>This field is required</p>
                            </div>

                            <div class="mb-3">
                                <select class="form-select" aria-label="gender" id="gender" name="gender">
                                    <option selected value='3' disabled>Gender</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                </select>
                                <p class="hide text-danger" id='genderError'>This field is required</p>
                            </div>
                            <div class="mb-3">
                                <label for="birthdate" class="form-label">Birth Date </label>
                                <input type="date" class="form-control " id="birthdate" name='birthdate'>
                                <p class="hide text-danger" id='birthdateError'></p>
                            </div>
                            <div class="d-flex justify-content-end">
     
                                <button type="button" class="align-self-end next">Next</button>
                            </div>
                        </div>

                        <div class="hide" id="2">

                            <div class="mb-3">
                                <input class="form-control" id="username" name='username' placeholder="Username"></input>
                                <p class="hide text-danger" id='usernameError'>This field is required</p>
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control " id="email" placeholder="Email" name='email'>
                                <p class="hide text-danger" id='emailError'></p>
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" id="password" name='password' placeholder="Password"></input>
                                <p class="hide text-danger" id='passwordError'>This field is required</p>
                            </div>
                            <div class="mb-3">
                                <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm Password"></input>
                                <p class="hide text-danger" id='confirmPasswordError'>Password Doesn't Match</p>
                                <input class="form-control"  name='AddedById' style='display:none;' value="<?=unserialize($_SESSION['Account'])->AccountId?>"></input>
                            </div>

                            <div class="d-flex justify-content-between">
                                <button type="button" class=" align-self-end back">Back</button>
                                <button type="Submit" class="align-self-end submit">Submit</button>
                            </div>
                        </div>

                </div>
                </form>


            </div>
        </div>
    </div>



    </div>

</body>
<script src='../js/bootstrap.min.js'></script>
<script>
    //btns next back
    next_btns = document.getElementsByClassName("next");
    back_btns = document.getElementsByClassName("back");
    form = document.getElementById("formBox");
    //inputs
    email = document.getElementById("email")
    emailError = document.getElementById("emailError")
    fName = document.getElementById("fName")
    fNameError = document.getElementById("fNameError")
    lName = document.getElementById("lName")
    lNameError = document.getElementById("lNameError")
    mName = document.getElementById("mName")
    mNameError = document.getElementById("mNameError")
    gender = document.getElementById("gender")
    genderError = document.getElementById("genderError")
    birthdate = document.getElementById("birthdate")
    birthdateError = document.getElementById("birthdateError")

    username = document.getElementById("username")
    usernameError = document.getElementById("usernameError")
    password = document.getElementById("password")
    passwordError = document.getElementById("passwordError")
    confirmPassword = document.getElementById("confirmPassword")
    confirmPasswordError = document.getElementById("confirmPasswordError")

    //event listners for buttons
    for (let i = 0; i < next_btns.length; i++)
        next_btns[i].addEventListener("click", goNext);
    for (let i = 0; i < back_btns.length; i++)
        back_btns[i].addEventListener("click", goBack);
    form.addEventListener("submit", (e) => {
        if (!validate()) e.preventDefault();
        else console.log("click");
    });
    page = 1

    function goNext() {
        flag = validate();
        if (flag == true) {
            div = document.getElementById("" + page);
            div.classList.add("hide");
            div.classList.remove("w3-animate-left");
            page++;
            document.getElementById("" + page).classList.remove("hide");
            document.getElementById("" + page).classList.add("w3-animate-right");

        }
    }

    function goBack() {
        div = document.getElementById("" + page);
        div.classList.add("hide");
        div.classList.remove("w3-animate-right");
        page--;
        document.getElementById("" + page).classList.remove("hide");
        document.getElementById("" + page).classList.add("w3-animate-left");
    }
    //Valiation
    function validate() {
        flag = true;
        //Landing page
        if (page == 1) {
            if (fName.value === "" || fName.value === null) {
                flag = false;
                fNameError.classList.remove("hide");
            } else fNameError.classList.add("hide");
            if (lName.value === "" || lName.value === null) {
                flag = false;
                lNameError.classList.remove("hide");
            } else lNameError.classList.add("hide");
            if (mName.value === "" || mName.value === null) {
                flag = false;
                mNameError.classList.remove("hide");
            } else mNameError.classList.add("hide");
            if (gender.value == 3) {
                flag = false;
                genderError.classList.remove("hide");
            } else genderError.classList.add("hide");
            var today = new Date();
            var myDate = new Date(birthdate.value);
            if (birthdate.value === "" || birthdate.value === null) {
                flag = false;
                birthdateError.innerHTML = "This field is required";
                birthdateError.classList.remove("hide");
            } else if (myDate > today) {
                flag = false;
                birthdateError.innerHTML = "Please enter a valid date";
                birthdateError.classList.remove("hide");
            } else birthdateError.classList.add("hide");

        }
        //2 
        if (page == 2) {

            if (email.value === "" || email.value === null) {
                flag = false;
                emailError.innerHTML = "This field is required";
                emailError.classList.remove("hide");
            } else {
                if (validateEmail(email.value)) {
                    emailError.classList.add("hide");
                } else {
                    flag = false;
                    emailError.innerHTML = "Please enter a valid email format";
                    emailError.classList.remove("hide");
                }
            }
            if (username.value === "" || username.value === null) {
                flag = false;
                usernameError.classList.remove("hide");
            } else usernameError.classList.add("hide");
            if (password.value === "" || password.value === null) {
                flag = false;
                passwordError.classList.remove("hide");
            } else passwordError.classList.add("hide");
            if (confirmPassword.value != password.value) {
                flag = false;
                confirmPasswordError.classList.remove("hide");
            } else confirmPasswordError.classList.add("hide");
        }
        return flag;
    }
    const validateEmail = (email) => {
        return String(email)
            .toLowerCase()
            .match(
                /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
            );
    };
</script>
<script src="../js/nav.js"></script>
</html>