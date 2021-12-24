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

<body class="w3-animate-opacity">
  <!-- Nav Bar Section -->
  <nav class="navbar navbar-expand-lg navbar-light ">
    <div class="offset-sm-1 container-fluid">
      <a class="navbar-brand" href="https://marau.demosfortest.com/"><img src='../img/logo.png' width="70" height="70"></a>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active nav-name text-white" aria-current="page" href="#1">MarAu | Register</a>
        </li>
      </ul>
    </div>
  </nav>


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
              <div class="d-flex justify-content-between">
                <a href="./login.php" class=" align-self-end">Already have an acount?</a>
                <button type="button" class="  align-self-end next">Next</button>
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
              </div>
              <div class="mb-3">
                <select class="form-select" aria-label="type" id="type" name='type'>
                  <option selected value='3' disabled>Register As</option>
                  <option value="1">Buyer</option>
                  <option value="2">Seller</option>
                </select>
                <p class="hide text-danger" id='typeError'>This field is required</p>
              </div>
             
              <div class="d-flex justify-content-between">
                <button type="button" class=" align-self-end back">Back</button>
                <button type="button" class="align-self-end next">Next</button>
              </div>
            </div>
            <div class="hide" id='3'>
                <div class="mb-3">
                  <input type="text" class="form-control " id="contactEmail" placeholder="Contact Email" name='contactEmail'>
                  <p class="hide text-danger" id='contactEmailError'></p>
                </div>
                <div class="mb-3">
                  <select id="country" class="form-select"  name="country">
                    <option value="0" selected disabled >Country</option>
                    <option value="Afganistan">Afghanistan</option>
                    <option value="Albania">Albania</option>
                    <option value="Algeria">Algeria</option>
                    <option value="American Samoa">American Samoa</option>
                    <option value="Andorra">Andorra</option>
                    <option value="Angola">Angola</option>
                    <option value="Anguilla">Anguilla</option>
                    <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Armenia">Armenia</option>
                    <option value="Aruba">Aruba</option>
                    <option value="Australia">Australia</option>
                    <option value="Austria">Austria</option>
                    <option value="Azerbaijan">Azerbaijan</option>
                    <option value="Bahamas">Bahamas</option>
                    <option value="Bahrain">Bahrain</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Barbados">Barbados</option>
                    <option value="Belarus">Belarus</option>
                    <option value="Belgium">Belgium</option>
                    <option value="Belize">Belize</option>
                    <option value="Benin">Benin</option>
                    <option value="Bermuda">Bermuda</option>
                    <option value="Bhutan">Bhutan</option>
                    <option value="Bolivia">Bolivia</option>
                    <option value="Bonaire">Bonaire</option>
                    <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                    <option value="Botswana">Botswana</option>
                    <option value="Brazil">Brazil</option>
                    <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                    <option value="Brunei">Brunei</option>
                    <option value="Bulgaria">Bulgaria</option>
                    <option value="Burkina Faso">Burkina Faso</option>
                    <option value="Burundi">Burundi</option>
                    <option value="Cambodia">Cambodia</option>
                    <option value="Cameroon">Cameroon</option>
                    <option value="Canada">Canada</option>
                    <option value="Canary Islands">Canary Islands</option>
                    <option value="Cape Verde">Cape Verde</option>
                    <option value="Cayman Islands">Cayman Islands</option>
                    <option value="Central African Republic">Central African Republic</option>
                    <option value="Chad">Chad</option>
                    <option value="Channel Islands">Channel Islands</option>
                    <option value="Chile">Chile</option>
                    <option value="China">China</option>
                    <option value="Christmas Island">Christmas Island</option>
                    <option value="Cocos Island">Cocos Island</option>
                    <option value="Colombia">Colombia</option>
                    <option value="Comoros">Comoros</option>
                    <option value="Congo">Congo</option>
                    <option value="Cook Islands">Cook Islands</option>
                    <option value="Costa Rica">Costa Rica</option>
                    <option value="Cote DIvoire">Cote DIvoire</option>
                    <option value="Croatia">Croatia</option>
                    <option value="Cuba">Cuba</option>
                    <option value="Curaco">Curacao</option>
                    <option value="Cyprus">Cyprus</option>
                    <option value="Czech Republic">Czech Republic</option>
                    <option value="Denmark">Denmark</option>
                    <option value="Djibouti">Djibouti</option>
                    <option value="Dominica">Dominica</option>
                    <option value="Dominican Republic">Dominican Republic</option>
                    <option value="East Timor">East Timor</option>
                    <option value="Ecuador">Ecuador</option>
                    <option value="Egypt">Egypt</option>
                    <option value="El Salvador">El Salvador</option>
                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                    <option value="Eritrea">Eritrea</option>
                    <option value="Estonia">Estonia</option>
                    <option value="Ethiopia">Ethiopia</option>
                    <option value="Falkland Islands">Falkland Islands</option>
                    <option value="Faroe Islands">Faroe Islands</option>
                    <option value="Fiji">Fiji</option>
                    <option value="Finland">Finland</option>
                    <option value="France">France</option>
                    <option value="French Guiana">French Guiana</option>
                    <option value="French Polynesia">French Polynesia</option>
                    <option value="French Southern Ter">French Southern Ter</option>
                    <option value="Gabon">Gabon</option>
                    <option value="Gambia">Gambia</option>
                    <option value="Georgia">Georgia</option>
                    <option value="Germany">Germany</option>
                    <option value="Ghana">Ghana</option>
                    <option value="Gibraltar">Gibraltar</option>
                    <option value="Great Britain">Great Britain</option>
                    <option value="Greece">Greece</option>
                    <option value="Greenland">Greenland</option>
                    <option value="Grenada">Grenada</option>
                    <option value="Guadeloupe">Guadeloupe</option>
                    <option value="Guam">Guam</option>
                    <option value="Guatemala">Guatemala</option>
                    <option value="Guinea">Guinea</option>
                    <option value="Guyana">Guyana</option>
                    <option value="Haiti">Haiti</option>
                    <option value="Hawaii">Hawaii</option>
                    <option value="Honduras">Honduras</option>
                    <option value="Hong Kong">Hong Kong</option>
                    <option value="Hungary">Hungary</option>
                    <option value="Iceland">Iceland</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="India">India</option>
                    <option value="Iran">Iran</option>
                    <option value="Iraq">Iraq</option>
                    <option value="Ireland">Ireland</option>
                    <option value="Isle of Man">Isle of Man</option>
                    <option value="Israel">Israel</option>
                    <option value="Italy">Italy</option>
                    <option value="Jamaica">Jamaica</option>
                    <option value="Japan">Japan</option>
                    <option value="Jordan">Jordan</option>
                    <option value="Kazakhstan">Kazakhstan</option>
                    <option value="Kenya">Kenya</option>
                    <option value="Kiribati">Kiribati</option>
                    <option value="Korea North">Korea North</option>
                    <option value="Korea Sout">Korea South</option>
                    <option value="Kuwait">Kuwait</option>
                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                    <option value="Laos">Laos</option>
                    <option value="Latvia">Latvia</option>
                    <option value="Lebanon">Lebanon</option>
                    <option value="Lesotho">Lesotho</option>
                    <option value="Liberia">Liberia</option>
                    <option value="Libya">Libya</option>
                    <option value="Liechtenstein">Liechtenstein</option>
                    <option value="Lithuania">Lithuania</option>
                    <option value="Luxembourg">Luxembourg</option>
                    <option value="Macau">Macau</option>
                    <option value="Macedonia">Macedonia</option>
                    <option value="Madagascar">Madagascar</option>
                    <option value="Malaysia">Malaysia</option>
                    <option value="Malawi">Malawi</option>
                    <option value="Maldives">Maldives</option>
                    <option value="Mali">Mali</option>
                    <option value="Malta">Malta</option>
                    <option value="Marshall Islands">Marshall Islands</option>
                    <option value="Martinique">Martinique</option>
                    <option value="Mauritania">Mauritania</option>
                    <option value="Mauritius">Mauritius</option>
                    <option value="Mayotte">Mayotte</option>
                    <option value="Mexico">Mexico</option>
                    <option value="Midway Islands">Midway Islands</option>
                    <option value="Moldova">Moldova</option>
                    <option value="Monaco">Monaco</option>
                    <option value="Mongolia">Mongolia</option>
                    <option value="Montserrat">Montserrat</option>
                    <option value="Morocco">Morocco</option>
                    <option value="Mozambique">Mozambique</option>
                    <option value="Myanmar">Myanmar</option>
                    <option value="Nambia">Nambia</option>
                    <option value="Nauru">Nauru</option>
                    <option value="Nepal">Nepal</option>
                    <option value="Netherland Antilles">Netherland Antilles</option>
                    <option value="Netherlands">Netherlands (Holland, Europe)</option>
                    <option value="Nevis">Nevis</option>
                    <option value="New Caledonia">New Caledonia</option>
                    <option value="New Zealand">New Zealand</option>
                    <option value="Nicaragua">Nicaragua</option>
                    <option value="Niger">Niger</option>
                    <option value="Nigeria">Nigeria</option>
                    <option value="Niue">Niue</option>
                    <option value="Norfolk Island">Norfolk Island</option>
                    <option value="Norway">Norway</option>
                    <option value="Oman">Oman</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="Palau Island">Palau Island</option>
                    <option value="Palestine">Palestine</option>
                    <option value="Panama">Panama</option>
                    <option value="Papua New Guinea">Papua New Guinea</option>
                    <option value="Paraguay">Paraguay</option>
                    <option value="Peru">Peru</option>
                    <option value="Phillipines">Philippines</option>
                    <option value="Pitcairn Island">Pitcairn Island</option>
                    <option value="Poland">Poland</option>
                    <option value="Portugal">Portugal</option>
                    <option value="Puerto Rico">Puerto Rico</option>
                    <option value="Qatar">Qatar</option>
                    <option value="Republic of Montenegro">Republic of Montenegro</option>
                    <option value="Republic of Serbia">Republic of Serbia</option>
                    <option value="Reunion">Reunion</option>
                    <option value="Romania">Romania</option>
                    <option value="Russia">Russia</option>
                    <option value="Rwanda">Rwanda</option>
                    <option value="St Barthelemy">St Barthelemy</option>
                    <option value="St Eustatius">St Eustatius</option>
                    <option value="St Helena">St Helena</option>
                    <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                    <option value="St Lucia">St Lucia</option>
                    <option value="St Maarten">St Maarten</option>
                    <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                    <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                    <option value="Saipan">Saipan</option>
                    <option value="Samoa">Samoa</option>
                    <option value="Samoa American">Samoa American</option>
                    <option value="San Marino">San Marino</option>
                    <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                    <option value="Saudi Arabia">Saudi Arabia</option>
                    <option value="Senegal">Senegal</option>
                    <option value="Seychelles">Seychelles</option>
                    <option value="Sierra Leone">Sierra Leone</option>
                    <option value="Singapore">Singapore</option>
                    <option value="Slovakia">Slovakia</option>
                    <option value="Slovenia">Slovenia</option>
                    <option value="Solomon Islands">Solomon Islands</option>
                    <option value="Somalia">Somalia</option>
                    <option value="South Africa">South Africa</option>
                    <option value="Spain">Spain</option>
                    <option value="Sri Lanka">Sri Lanka</option>
                    <option value="Sudan">Sudan</option>
                    <option value="Suriname">Suriname</option>
                    <option value="Swaziland">Swaziland</option>
                    <option value="Sweden">Sweden</option>
                    <option value="Switzerland">Switzerland</option>
                    <option value="Syria">Syria</option>
                    <option value="Tahiti">Tahiti</option>
                    <option value="Taiwan">Taiwan</option>
                    <option value="Tajikistan">Tajikistan</option>
                    <option value="Tanzania">Tanzania</option>
                    <option value="Thailand">Thailand</option>
                    <option value="Togo">Togo</option>
                    <option value="Tokelau">Tokelau</option>
                    <option value="Tonga">Tonga</option>
                    <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                    <option value="Tunisia">Tunisia</option>
                    <option value="Turkey">Turkey</option>
                    <option value="Turkmenistan">Turkmenistan</option>
                    <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                    <option value="Tuvalu">Tuvalu</option>
                    <option value="Uganda">Uganda</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="Ukraine">Ukraine</option>
                    <option value="United Arab Erimates">United Arab Emirates</option>
                    <option value="United States of America">United States of America</option>
                    <option value="Uraguay">Uruguay</option>
                    <option value="Uzbekistan">Uzbekistan</option>
                    <option value="Vanuatu">Vanuatu</option>
                    <option value="Vatican City State">Vatican City State</option>
                    <option value="Venezuela">Venezuela</option>
                    <option value="Vietnam">Vietnam</option>
                    <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                    <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                    <option value="Wake Island">Wake Island</option>
                    <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                    <option value="Yemen">Yemen</option>
                    <option value="Zaire">Zaire</option>
                    <option value="Zambia">Zambia</option>
                    <option value="Zimbabwe">Zimbabwe</option>
                  </select>
                  <p class="hide text-danger" id='countryError'>This field is required</p>
                </div>
                <div class="d-flex justify-content-between">
                <button type="button" class=" align-self-end back">Back</button>
                <button type="Submit" class="align-self-end submit">Submit</button>
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
  type = document.getElementById("type")
  typeError = document.getElementById("typeError")

  contactEmail = document.getElementById("contactEmail")
  contactEmailError = document.getElementById("contactEmailError")
  country = document.getElementById("country")
  countryError = document.getElementById("countryError")
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
      if (type.value == 3) {
        flag = false;
        typeError.classList.remove("hide");
      } else typeError.classList.add("hide");
    }
    if (page == 3){
      if (contactEmail.value === "" || contactEmail.value === null) {
        flag = false;
        contactEmailError.innerHTML = "This field is required";
        contactEmailError.classList.remove("hide");
      } else {
        if (validateEmail(contactEmail.value)) {
          contactEmailError.classList.add("hide");
        } else {
          flag = false;
          contactEmailError.innerHTML = "Please enter a valid Email format";
          contactEmailError.classList.remove("hide");
        }
      }
      if (country.value =='0') {
        flag = false;
        countryError.classList.remove("hide");
      } else countryError.classList.add("hide");
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

</html>