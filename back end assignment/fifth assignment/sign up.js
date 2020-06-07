function signUp() {
  var name = true;
  var reg = true;
  var mail = true;
  var pass = true;
  var Rpass = true;

  formLables = document.getElementsByTagName("label");

  var User = document.getElementsByName("UserName")[0];

  if (User.value == "") {
    formLables[0].innerHTML = "User Name: [required]";
    formLables[0].style = "color: red";
    name = false;
  } else if (!isNaN(User.value)) {
    formLables[0].innerHTML = "UserName: [Name must be a text]";
    formLables[0].style = "color: red";
    name = false;
  } else {
    formLables[0].innerHTML = "UserName:";
    formLables[0].style = "color: black";
    name = true;
  }

  var Registrationnumber = document.getElementsByName("Registrationnumber")[0];
  if (Registrationnumber.value == "") {
    formLables[1].innerHTML = "Registration number: [required]";
    formLables[1].style = "color: red";
    reg = false;
  } else if (isNaN(Registrationnumber.value)) {
    formLables[1].innerHTML = "Registration number: [Name must be a number]";
    formLables[1].style = "color: red";
    reg = false;
  } else {
    formLables[1].innerHTML = "Registration number:";
    formLables[1].style = "color: black";
  }

  var e_mail = document.getElementsByName("email")[0];
  if (e_mail.value == "") {
    formLables[2].innerHTML = "Email: [required]";
    formLables[2].style = "color: red";
    mail = false;
  } else if (e_mail.value.indexOf("@") == -1) {
    formLables[2].innerHTML = "Email: [Enter correct email]";
    formLables[2].style = "color: red";
    mail = false;
  } else if (e_mail.value.indexOf(".com") == -1) {
    formLables[2].innerHTML = "Email: [Enter correct email]";
    formLables[2].style = "color: red";
    mail = false;
  } else {
    formLables[2].innerHTML = "Email:";
    formLables[2].style = "color: black";
  }

  var password = document.getElementsByName("password")[0];
  if (password.value == "") {
    formLables[3].innerHTML = "Password: [required]";
    formLables[3].style = "color: red";
    pass = false;
  } else if (password.value.length < 8) {
    formLables[3].innerHTML = "Password: [Length at least 8]";
    formLables[3].style = "color: red";
    pass = false;
  } else {
    formLables[3].innerHTML = "Password:";
    formLables[3].style = "color: black";
  }

  var R_password = document.getElementsByName("R_password")[0];
  if (R_password.value == "") {
    formLables[4].innerHTML = "Password: [required]";
    formLables[4].style = "color: red";
    Rpass = false;
  } else if (R_password.value.length < 8) {
    formLables[4].innerHTML = "Password: [Length at least 8]";
    formLables[4].style = "color: red";
    Rpass = false;
  } else if (R_password.value == password.value) {
    formLables[4].innerHTML = "Password:";
    formLables[4].style = "color: black";
    if (
      mail == true &&
      reg == true &&
      name == true &&
      pass == true &&
      Rpass == true
    )
      window.location.href = "sign in lecturer.php";
  } else {
    formLables[4].innerHTML = "Password: wrong password";
    formLables[4].style = "color: red";
    Rpass = false;
  }
}
