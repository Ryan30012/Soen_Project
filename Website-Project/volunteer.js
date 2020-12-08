var firstName = document.getElementById("first"); 
var lastName = document.getElementById("last");
var eMail = document.getElementById("email");
var phoneNumber = document.getElementById("phone");
var stret = document.getElementById("street");
var ville = document.getElementById("metropolis");
var postalCode = document.getElementById("postal");
var demo = document.getElementById("demo");
var form = document.getElementById("form");

document.querySelectorAll('input[type="text"]').forEach(e => {
    e.addEventListener('focusout', setInputBackground)
  });
  
  function setInputBackground() {
    this.style.backgroundColor = !!this.value ? "white" : "rgb(255,221,221)";
}




