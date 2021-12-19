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
            <a class="navbar-brand" href="https://marau.demosfortest.com/"><img src='../img/logo.png' width="70"
                    height="70"></a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active nav-name text-white" aria-current="page">MarAu | Register</a>
                </li>
            </ul>
        </div>
    </nav>


    <div class="container col-sm-8 align-items-center shadow-lg mb-5 w3-animate-opacity">

        <!-- First Form Page  -->
        <div class="row align-items-center container-form " id="formBox">
            <div class="col-sm-6 d-none d-sm-block">
                <img src='../img/login.png' class='img-form'>
            </div>
            <div class="col-sm-5">
                <div class="form-container">
                    <div class="sign">
                        <span class="fast-flicker">L</span>og<span class="flicker">i</span>N
                    </div>
                    <!--add animation -->
                    <form id="formBox">

                        <div class="mb-3">
                            <input class="form-control" id="username" placeholder="Username"></input>
                            <p class="hide text-danger" id='usernameError'>This field is required</p>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control " id="email" placeholder="Email">
                            <p class="hide text-danger" id='emailError'></p>
                        </div>
                        <div class="mb-3">
                            <input type="password" class="form-control" id="password" placeholder="Password"></input>
                            <p class="hide text-danger" id='passwordError'>This field is required</p>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="Registration.html" class=" align-self-end">Don't have an account?</a>
                            <button type="submit" class="align-self-end submit">Login</button>
                        </div>

                    </form>


                </div>
            </div>
        </div>



    </div>

</body>
<script src='../js/bootstrap.min.js'></script>
<script>
    //vars
    form = document.getElementById("formBox");
    email = document.getElementById("email")
    emailError = document.getElementById("emailError")
    username = document.getElementById("username")
    usernameError = document.getElementById("usernameError")
    password = document.getElementById("password")
    passwordError = document.getElementById("passwordError")

    //event listners for buttons

    form.addEventListener("submit", (e) => {
        if (!validate()) e.preventDefault();
        else console.log("click");
    });

    //Valiation
    function validate() {
        flag = true;


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

</html>