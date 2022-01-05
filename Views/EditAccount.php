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
<?php  include ('nav.php') ?>
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
                                <form id="formBox" method="POST" action="../Controller/editAccount.php">
                                    <div class="card-block">
                                        <h4 class="m-b-20 p-b-5 b-b-default f-w-600">Personal Information</h4>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <h5 class="m-b-10 f-w-600">Email</h5>
                                                <input class="f-w-400 form-control" id="email" name='email' value="<?= $account->EmailAddress ?>"></input>
                                                <p class="hide text-danger" id='emailError'></p>

                                            </div>
                                            <div class="col-sm-6">
                                                <h5 class="m-b-10 f-w-600">Username</h5>
                                                <input class="f-w-400 form-control" name='username' id='username' value='<?= $account->Username ?>'></input>
                                                <p class="hide text-danger" id='usernameError'></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <?php if ($account->AccountType == "Buyer" || $account->AccountType == "Seller") echo "
                                            <div class='col-sm-6'>
                                                <h5 class='m-b-10 f-w-600'>Contact Email</h5>
                                                <input class='f-w-400 form-control' name='contactEmail' id='contactEmail' value='$account->ContactEmail'></input>
                                                <p class='hide text-danger' id='contactEmailError'></p>
                                            </div>" ?>
                                            <div class="col-sm-6">
                                                <h5 class="m-b-10 f-w-600">Birth Date</h5>
                                                <input class=" f-w-400 form-control" id='birthdate' name='birthdate' value="<?= $account->BirthDate ?>"></input>
                                                <p class="hide text-danger" id='birthdateError'></p>

                                            </div>

                                        </div>
                                        <div class="row">
                                            <?php if ($account->AccountType == "Buyer" || $account->AccountType == "Seller") echo "    
                                        <div class='col-sm-6'>
                                        <h5 class='m-b-10 f-w-600'>Country</h5>
                                        <select id='country' class='form-select' name='country'>
                                            <option value='0' selected disabled>Country</option>
                                            <option value='Afganistan'>Afghanistan</option>
                                            <option value='Albania'>Albania</option>
                                            <option value='Algeria'>Algeria</option>
                                            <option value='American Samoa'>American Samoa</option>
                                            <option value='Andorra'>Andorra</option>
                                            <option value='Angola'>Angola</option>
                                            <option value='Anguilla'>Anguilla</option>
                                            <option value='Antigua & Barbuda'>Antigua & Barbuda</option>
                                            <option value='Argentina'>Argentina</option>
                                            <option value='Armenia'>Armenia</option>
                                            <option value='Aruba'>Aruba</option>
                                            <option value='Australia'>Australia</option>
                                            <option value='Austria'>Austria</option>
                                            <option value='Azerbaijan'>Azerbaijan</option>
                                            <option value='Bahamas'>Bahamas</option>
                                            <option value='Bahrain'>Bahrain</option>
                                            <option value='Bangladesh'>Bangladesh</option>
                                            <option value='Barbados'>Barbados</option>
                                            <option value='Belarus'>Belarus</option>
                                            <option value='Belgium'>Belgium</option>
                                            <option value='Belize'>Belize</option>
                                            <option value='Benin'>Benin</option>
                                            <option value='Bermuda'>Bermuda</option>
                                            <option value='Bhutan'>Bhutan</option>
                                            <option value='Bolivia'>Bolivia</option>
                                            <option value='Bonaire'>Bonaire</option>
                                            <option value='Bosnia & Herzegovina'>Bosnia & Herzegovina</option>
                                            <option value='Botswana'>Botswana</option>
                                            <option value='Brazil'>Brazil</option>
                                            <option value='British Indian Ocean Ter'>British Indian Ocean Ter</option>
                                            <option value='Brunei'>Brunei</option>
                                            <option value='Bulgaria'>Bulgaria</option>
                                            <option value='Burkina Faso'>Burkina Faso</option>
                                            <option value='Burundi'>Burundi</option>
                                            <option value='Cambodia'>Cambodia</option>
                                            <option value='Cameroon'>Cameroon</option>
                                            <option value='Canada'>Canada</option>
                                            <option value='Canary Islands'>Canary Islands</option>
                                            <option value='Cape Verde'>Cape Verde</option>
                                            <option value='Cayman Islands'>Cayman Islands</option>
                                            <option value='Central African Republic'>Central African Republic</option>
                                            <option value='Chad'>Chad</option>
                                            <option value='Channel Islands'>Channel Islands</option>
                                            <option value='Chile'>Chile</option>
                                            <option value='China'>China</option>
                                            <option value='Christmas Island'>Christmas Island</option>
                                            <option value='Cocos Island'>Cocos Island</option>
                                            <option value='Colombia'>Colombia</option>
                                            <option value='Comoros'>Comoros</option>
                                            <option value='Congo'>Congo</option>
                                            <option value='Cook Islands'>Cook Islands</option>
                                            <option value='Costa Rica'>Costa Rica</option>
                                            <option value='Cote DIvoire'>Cote DIvoire</option>
                                            <option value='Croatia'>Croatia</option>
                                            <option value='Cuba'>Cuba</option>
                                            <option value='Curaco'>Curacao</option>
                                            <option value='Cyprus'>Cyprus</option>
                                            <option value='Czech Republic'>Czech Republic</option>
                                            <option value='Denmark'>Denmark</option>
                                            <option value='Djibouti'>Djibouti</option>
                                            <option value='Dominica'>Dominica</option>
                                            <option value='Dominican Republic'>Dominican Republic</option>
                                            <option value='East Timor'>East Timor</option>
                                            <option value='Ecuador'>Ecuador</option>
                                            <option value='Egypt'>Egypt</option>
                                            <option value='El Salvador'>El Salvador</option>
                                            <option value='Equatorial Guinea'>Equatorial Guinea</option>
                                            <option value='Eritrea'>Eritrea</option>
                                            <option value='Estonia'>Estonia</option>
                                            <option value='Ethiopia'>Ethiopia</option>
                                            <option value='Falkland Islands'>Falkland Islands</option>
                                            <option value='Faroe Islands'>Faroe Islands</option>
                                            <option value='Fiji'>Fiji</option>
                                            <option value='Finland'>Finland</option>
                                            <option value='France'>France</option>
                                            <option value='French Guiana'>French Guiana</option>
                                            <option value='French Polynesia'>French Polynesia</option>
                                            <option value='French Southern Ter'>French Southern Ter</option>
                                            <option value='Gabon'>Gabon</option>
                                            <option value='Gambia'>Gambia</option>
                                            <option value='Georgia'>Georgia</option>
                                            <option value='Germany'>Germany</option>
                                            <option value='Ghana'>Ghana</option>
                                            <option value='Gibraltar'>Gibraltar</option>
                                            <option value='Great Britain'>Great Britain</option>
                                            <option value='Greece'>Greece</option>
                                            <option value='Greenland'>Greenland</option>
                                            <option value='Grenada'>Grenada</option>
                                            <option value='Guadeloupe'>Guadeloupe</option>
                                            <option value='Guam'>Guam</option>
                                            <option value='Guatemala'>Guatemala</option>
                                            <option value='Guinea'>Guinea</option>
                                            <option value='Guyana'>Guyana</option>
                                            <option value='Haiti'>Haiti</option>
                                            <option value='Hawaii'>Hawaii</option>
                                            <option value='Honduras'>Honduras</option>
                                            <option value='Hong Kong'>Hong Kong</option>
                                            <option value='Hungary'>Hungary</option>
                                            <option value='Iceland'>Iceland</option>
                                            <option value='Indonesia'>Indonesia</option>
                                            <option value='India'>India</option>
                                            <option value='Iran'>Iran</option>
                                            <option value='Iraq'>Iraq</option>
                                            <option value='Ireland'>Ireland</option>
                                            <option value='Isle of Man'>Isle of Man</option>
                                            <option value='Italy'>Italy</option>
                                            <option value='Jamaica'>Jamaica</option>
                                            <option value='Japan'>Japan</option>
                                            <option value='Jordan'>Jordan</option>
                                            <option value='Kazakhstan'>Kazakhstan</option>
                                            <option value='Kenya'>Kenya</option>
                                            <option value='Kiribati'>Kiribati</option>
                                            <option value='Korea North'>Korea North</option>
                                            <option value='Korea Sout'>Korea South</option>
                                            <option value='Kuwait'>Kuwait</option>
                                            <option value='Kyrgyzstan'>Kyrgyzstan</option>
                                            <option value='Laos'>Laos</option>
                                            <option value='Latvia'>Latvia</option>
                                            <option value='Lebanon'>Lebanon</option>
                                            <option value='Lesotho'>Lesotho</option>
                                            <option value='Liberia'>Liberia</option>
                                            <option value='Libya'>Libya</option>
                                            <option value='Liechtenstein'>Liechtenstein</option>
                                            <option value='Lithuania'>Lithuania</option>
                                            <option value='Luxembourg'>Luxembourg</option>
                                            <option value='Macau'>Macau</option>
                                            <option value='Macedonia'>Macedonia</option>
                                            <option value='Madagascar'>Madagascar</option>
                                            <option value='Malaysia'>Malaysia</option>
                                            <option value='Malawi'>Malawi</option>
                                            <option value='Maldives'>Maldives</option>
                                            <option value='Mali'>Mali</option>
                                            <option value='Malta'>Malta</option>
                                            <option value='Marshall Islands'>Marshall Islands</option>
                                            <option value='Martinique'>Martinique</option>
                                            <option value='Mauritania'>Mauritania</option>
                                            <option value='Mauritius'>Mauritius</option>
                                            <option value='Mayotte'>Mayotte</option>
                                            <option value='Mexico'>Mexico</option>
                                            <option value='Midway Islands'>Midway Islands</option>
                                            <option value='Moldova'>Moldova</option>
                                            <option value='Monaco'>Monaco</option>
                                            <option value='Mongolia'>Mongolia</option>
                                            <option value='Montserrat'>Montserrat</option>
                                            <option value='Morocco'>Morocco</option>
                                            <option value='Mozambique'>Mozambique</option>
                                            <option value='Myanmar'>Myanmar</option>
                                            <option value='Nambia'>Nambia</option>
                                            <option value='Nauru'>Nauru</option>
                                            <option value='Nepal'>Nepal</option>
                                            <option value='Netherland Antilles'>Netherland Antilles</option>
                                            <option value='Netherlands'>Netherlands (Holland, Europe)</option>
                                            <option value='Nevis'>Nevis</option>
                                            <option value='New Caledonia'>New Caledonia</option>
                                            <option value='New Zealand'>New Zealand</option>
                                            <option value='Nicaragua'>Nicaragua</option>
                                            <option value='Niger'>Niger</option>
                                            <option value='Nigeria'>Nigeria</option>
                                            <option value='Niue'>Niue</option>
                                            <option value='Norfolk Island'>Norfolk Island</option>
                                            <option value='Norway'>Norway</option>
                                            <option value='Oman'>Oman</option>
                                            <option value='Pakistan'>Pakistan</option>
                                            <option value='Palau Island'>Palau Island</option>
                                            <option value='Palestine'>Palestine</option>
                                            <option value='Panama'>Panama</option>
                                            <option value='Papua New Guinea'>Papua New Guinea</option>
                                            <option value='Paraguay'>Paraguay</option>
                                            <option value='Peru'>Peru</option>
                                            <option value='Phillipines'>Philippines</option>
                                            <option value='Pitcairn Island'>Pitcairn Island</option>
                                            <option value='Poland'>Poland</option>
                                            <option value='Portugal'>Portugal</option>
                                            <option value='Puerto Rico'>Puerto Rico</option>
                                            <option value='Qatar'>Qatar</option>
                                            <option value='Republic of Montenegro'>Republic of Montenegro</option>
                                            <option value='Republic of Serbia'>Republic of Serbia</option>
                                            <option value='Reunion'>Reunion</option>
                                            <option value='Romania'>Romania</option>
                                            <option value='Russia'>Russia</option>
                                            <option value='Rwanda'>Rwanda</option>
                                            <option value='St Barthelemy'>St Barthelemy</option>
                                            <option value='St Eustatius'>St Eustatius</option>
                                            <option value='St Helena'>St Helena</option>
                                            <option value='St Kitts-Nevis'>St Kitts-Nevis</option>
                                            <option value='St Lucia'>St Lucia</option>
                                            <option value='St Maarten'>St Maarten</option>
                                            <option value='St Pierre & Miquelon'>St Pierre & Miquelon</option>
                                            <option value='St Vincent & Grenadines'>St Vincent & Grenadines</option>
                                            <option value='Saipan'>Saipan</option>
                                            <option value='Samoa'>Samoa</option>
                                            <option value='Samoa American'>Samoa American</option>
                                            <option value='San Marino'>San Marino</option>
                                            <option value='Sao Tome & Principe'>Sao Tome & Principe</option>
                                            <option value='Saudi Arabia'>Saudi Arabia</option>
                                            <option value='Senegal'>Senegal</option>
                                            <option value='Seychelles'>Seychelles</option>
                                            <option value='Sierra Leone'>Sierra Leone</option>
                                            <option value='Singapore'>Singapore</option>
                                            <option value='Slovakia'>Slovakia</option>
                                            <option value='Slovenia'>Slovenia</option>
                                            <option value='Solomon Islands'>Solomon Islands</option>
                                            <option value='Somalia'>Somalia</option>
                                            <option value='South Africa'>South Africa</option>
                                            <option value='Spain'>Spain</option>
                                            <option value='Sri Lanka'>Sri Lanka</option>
                                            <option value='Sudan'>Sudan</option>
                                            <option value='Suriname'>Suriname</option>
                                            <option value='Swaziland'>Swaziland</option>
                                            <option value='Sweden'>Sweden</option>
                                            <option value='Switzerland'>Switzerland</option>
                                            <option value='Syria'>Syria</option>
                                            <option value='Tahiti'>Tahiti</option>
                                            <option value='Taiwan'>Taiwan</option>
                                            <option value='Tajikistan'>Tajikistan</option>
                                            <option value='Tanzania'>Tanzania</option>
                                            <option value='Thailand'>Thailand</option>
                                            <option value='Togo'>Togo</option>
                                            <option value='Tokelau'>Tokelau</option>
                                            <option value='Tonga'>Tonga</option>
                                            <option value='Trinidad & Tobago'>Trinidad & Tobago</option>
                                            <option value='Tunisia'>Tunisia</option>
                                            <option value='Turkey'>Turkey</option>
                                            <option value='Turkmenistan'>Turkmenistan</option>
                                            <option value='Turks & Caicos Is'>Turks & Caicos Is</option>
                                            <option value='Tuvalu'>Tuvalu</option>
                                            <option value='Uganda'>Uganda</option>
                                            <option value='United Kingdom'>United Kingdom</option>
                                            <option value='Ukraine'>Ukraine</option>
                                            <option value='United Arab Erimates'>United Arab Emirates</option>
                                            <option value='United States of America'>United States of America</option>
                                            <option value='Uraguay'>Uruguay</option>
                                            <option value='Uzbekistan'>Uzbekistan</option>
                                            <option value='Vanuatu'>Vanuatu</option>
                                            <option value='Vatican City State'>Vatican City State</option>
                                            <option value='Venezuela'>Venezuela</option>
                                            <option value='Vietnam'>Vietnam</option>
                                            <option value='Virgin Islands (Brit)'>Virgin Islands (Brit)</option>
                                            <option value='Virgin Islands (USA)'>Virgin Islands (USA)</option>
                                            <option value='Wake Island'>Wake Island</option>
                                            <option value='Wallis & Futana Is'>Wallis & Futana Is</option>
                                            <option value='Yemen'>Yemen</option>
                                            <option value='Zaire'>Zaire</option>
                                            <option value='Zambia'>Zambia</option>
                                            <option value='Zimbabwe'>Zimbabwe</option>
                                        </select>
                                        <p class='hide text-danger' id='countryError'></p>
                                            </div> "
                                            ?>
                                            <div class="col-sm-6">
                                                <h5 class="m-b-10 f-w-600">Gender</h5>
                                                <select class="form-select" aria-label="gender" id="gender" name="gender">
                                                    <option value="M" <?php if ($account->Gender == "Male") echo "selected" ?>>Male</option>
                                                    <option value="F" <?php if ($account->Gender == "Female") echo "selected" ?>>Female</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <h5 class="m-b-10 f-w-600">First Name</h5>
                                                <input class="f-w-400 form-control" name='fName' id='fName' value='<?= $account->fName ?>'></input>
                                                <p class="hide text-danger" id='fNameError'></p>

                                            </div>
                                            <div class="col-sm-4">
                                                <h5 class="m-b-10 f-w-600">M. Name</h5>
                                                <input class=" f-w-400 form-control" name="mName" id='mName' value="<?= $account->mName ?>"></input>
                                                <p class="hide text-danger" id='mNameError'></p>

                                            </div>
                                            <div class="col-sm-4">
                                                <h5 class="m-b-10 f-w-600">Last Name</h5>
                                                <input class=" f-w-400 form-control" name='lName' id='lName' value="<?= $account->lName ?>"></input>
                                                <p class="hide text-danger" id='lNameError'></p>

                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-end mt-3">
                                            <!-- <a></a> -->
                                            <button type='submit' class="btn btn-primary submit ">Save</button>
                                        </div>
                                    </div>

                                </form>
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
    email = document.getElementById("email")
    emailError = document.getElementById("emailError")
    birthdate = document.getElementById("birthdate")
    birthdateError = document.getElementById("birthdateError")
    username = document.getElementById("username")
    usernameError = document.getElementById("usernameError")
    contactEmail = document.getElementById("contactEmail")
    contactEmailError = document.getElementById("contactEmailError")
    country = document.getElementById("country")
    countryError = document.getElementById("countryError")
    fName = document.getElementById("fName")
    fNameError = document.getElementById("fNameError")
    lName = document.getElementById("lName")
    lNameError = document.getElementById("lNameError")
    mName = document.getElementById("mName")
    mNameError = document.getElementById("mNameError")
    //event listners for buttons
    form.addEventListener("submit", (e) => {
        if (!validate()) e.preventDefault();
        else console.log("click");
    });

    //Valiation
    function validate() {
        flag = true;
        if (!isValidDate(birthdate.value)) {
            flag = false;
            birthdateError.innerHTML = "Please Enter a Valid Date";
        } else {
            console.log("asd");
            birthdateError.innerHTML = "";
        }

        if (email.value === "" || email.value === null) {
            flag = false;
            emailError.innerHTML = "This field is required";

        } else if (validateEmail(email.value)) {
            emailError.classList.innerHTML = "";
        } else {
            flag = false;
            emailError.innerHTML = "Please enter a valid email format";
        }
        if (contactEmail != null)
            if (contactEmail.value === "" || contactEmail.value === null) {
                flag = false;
                contactEmailError.innerHTML = "This field is required";

            } else {
                if (validateEmail(contactEmail.value)) {
                    contactEmailError.innerHTML = "";
                } else {
                    flag = false;
                    contactEmailError.innerHTML = "Please enter a valid Email format";
                }
            }
        if (country != null)
            if (country.value == '0') {
                flag = false;
                countryError.innerHTML = "This field is required";
            } else countryError.innerHTML = "";

        if (username.value === "" || username.value === null) {
            flag = false;
            usernameError.innerHTML = "This field is required";
        } else usernameError.innerHTML = "";

        if (fName.value === "" || fName.value === null) {
            flag = false;
            fNameError.innerHTML = "This field is required";
        } else fNameError.innerHTML = "";

        if (mName.value === "" || mName.value === null) {
            flag = false;
            mNameError.innerHTML = "This field is required";
        } else mNameError.innerHTML = "";

        if (lName.value === "" || lName.value === null) {
            console.log(flag = false)
            lNameError.innerHTML = "This field is required";
        } else lNameError.innerHTML = "";
        return flag;
    }
    const validateEmail = (email) => {
        return String(email)
            .toLowerCase()
            .match(
                /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
            );
    };

    function isValidDate(dateString) {
        // First check for the pattern
        var regex_date = /^\d{4}\-\d{1,2}\-\d{1,2}$/;

        if (!regex_date.test(dateString)) {
            return false;
        }

        // Parse the date parts to integers
        var parts = dateString.split("-");
        var day = parseInt(parts[2], 10);
        var month = parseInt(parts[1], 10);
        var year = parseInt(parts[0], 10);

        // Check the ranges of month and year
        if (year < 1000 || year > 3000 || month == 0 || month > 12) {
            return false;
        }

        var monthLength = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];

        // Adjust for leap years
        if (year % 400 == 0 || (year % 100 != 0 && year % 4 == 0)) {
            monthLength[1] = 29;
        }

        // Check the range of the day
        return day > 0 && day <= monthLength[month - 1];
    }
</script>
<script src="../js/nav.js"></script>