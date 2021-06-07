
//-------------------------login page javascript------------------------------------

//*******submit form**********
//1. take the value from the input
var login_form = document.querySelector(".login_form");
var login_submit = document.querySelector("log_submit");
var error = document.querySelector("#login_error_message")
var login_email;
var login_password;

//2. get signup values from the local storage
var locEmail = localStorage.getItem("localEmail");
var locPassword = localStorage.getItem("localPassword");
console.log(locEmail);
console.log(locPassword);

//event to occur when the submit is clicked
login_form.addEventListener('submit', function(event){
  event.preventDefault(); //prevents the form from auto submitting
  login_email = document.getElementById("login_email").value;
  login_password = document.getElementById("login_password").value;

  console.log(login_email);
  console.log(login_password);

  //3. Compare the signup values with that of login values
  if(locEmail == login_email && locPassword == login_password){
    error.innerHTML = "You are logged in!!"
      error.style.color = "#00e676";
  }
  else{
    error.innerHTML = " We do not know you!!!";
    error.style.color = "#b71c1c";
  }
});






//
