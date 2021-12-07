//btns next back
next_btns = document.getElementsByClassName("next");
back_btns = document.getElementsByClassName("back");
form = document.getElementById("3");
//bar
bar=document.getElementById("bar")
//page 1
pname = document.getElementById("name");
pnameError = document.getElementById("nameError");
phone = document.getElementById("phoneNumber");
phoneError = document.getElementById("phoneError");
address = document.getElementById("address");
addressError = document.getElementById("addressError");
firstPreference = document.getElementById("firstPreference");
fpError = document.getElementById("fpError");
secondPreference = document.getElementById("secondPreference");
spError = document.getElementById("spError");
//page 2
email = document.getElementById("email");
emailError = document.getElementById("emailError");
university = document.getElementById("university");
universityError = document.getElementById("universityError");
faculty = document.getElementById("faculty");
facultyError = document.getElementById("facultyError");
department = document.getElementById("department");
departmentError = document.getElementById("departmentError");
gradYear = document.getElementById("gradYear");
gyError = document.getElementById("gyError");
//page 3
q1Answer = document.getElementById("q1Answer");
q1aError = document.getElementById("q1aError");
q2Answer = document.getElementById("q2Answer");
q2aError = document.getElementById("q2aError");
//event listners for buttons
for (let i = 0; i < next_btns.length; i++)
  next_btns[i].addEventListener("click", goNext);
for (let i = 0; i < back_btns.length; i++)
  back_btns[i].addEventListener("click", goBack);
form.addEventListener("submit", (e) => {
  if (!validate()) e.preventDefault();
});
//page
page = 1;
//change page
function goNext() {
  flag = validate();
  if (flag == true) {
    div = document.getElementById("" + page);
    div.classList.add("hide");
    div.classList.remove("w3-animate-left");
    page++;
    document.getElementById("" + page).classList.remove("hide");
    document.getElementById("" + page).classList.add("w3-animate-right");
    width=(page-2)*33
    var id = setInterval(frame, 15);
    function frame() {
      if (width >= (page-1)*33) {
        clearInterval(id);
      } else {
        width++;
        bar.style.width = width + '%';
      }
    }
  }
}
function goBack() {
  div = document.getElementById("" + page);
  div.classList.add("hide");
  div.classList.remove("w3-animate-right");
  page--;
  document.getElementById("" + page).classList.remove("hide");
  document.getElementById("" + page).classList.add("w3-animate-left");
  width=(page)*33
  var id = setInterval(frame, 15);
  function frame() {
    if (width <= (page-1)*33) {
      clearInterval(id);
    } else {
      width--;
      bar.style.width = width + '%';
    }
  }
}
//Valiation
function validate() {
  flag = true;
  //Landing page
  if (page == 1) {
    if (pname.value === "" || pname.value === null) {
      flag = false;
      pnameError.classList.remove("hide");
    } else pnameError.classList.add("hide");
    if (isNaN(phone.value)) {
      flag = false;
      phoneError.innerHTML = "This field must be a number";
      phoneError.classList.remove("hide");
    } else if (phone.value === "" || phone.value === null) {
      flag = false;
      phoneError.innerHTML = "This field is required";
      phoneError.classList.remove("hide");
    } else if (validatePhone(phone.value)) {
      flag = false;
      phoneError.innerHTML = "Please enter a valid phone number format";
      phoneError.classList.remove("hide");
    } else phoneError.classList.add("hide");
    if (address.value === "" || address.value === null) {
      flag = false;
      addressError.classList.remove("hide");
    } else addressError.classList.add("hide");
    if (firstPreference.value == 7) {
      flag = false;
      fpError.classList.remove("hide");
    } else fpError.classList.add("hide");
    if (secondPreference.value == 7) {
      flag = false;
      spError.innerHTML = "This field is required";
      spError.classList.remove("hide");
    } else if (secondPreference.value == firstPreference.value) {
      flag = false;
      spError.innerHTML = "Please don't choose the same option tiwce";
      spError.classList.remove("hide");
    } else spError.classList.add("hide");
  }
  //non juionrs first page
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
    if (university.value === "" || university.value === null) {
      flag = false;
      universityError.classList.remove("hide");
    } else universityError.classList.add("hide");
    if (faculty.value === "" || faculty.value === null) {
      flag = false;
      facultyError.classList.remove("hide");
    } else facultyError.classList.add("hide");
    if (department.value === "" || department.value === null) {
      flag = false;
      departmentError.classList.remove("hide");
    } else departmentError.classList.add("hide");
    if (gradYear.value == 8) {
      flag = false;
      gyError.classList.remove("hide");
    } else gyError.classList.add("hide");
  }
  //non jounors second page
  if (page == 3) {
    if (q1Answer.value === "" || q1Answer.value === null) {
      flag = false;
      q1aError.classList.remove("hide");
    } else q1aError.classList.add("hide");
    if (q2Answer.value === "" || q2Answer.value === null) {
      flag = false;
      q2aError.classList.remove("hide");
    } else q2aError.classList.add("hide");
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
function validatePhone(inputtxt) {
  console.log(inputtxt);
  var phoneno = /^\d{11}$/;
  if (inputtxt.match(phoneno) && inputtxt[0] == "0" && inputtxt[1] == "1") {
    return false;
  } else {
    return true;
  }
}
