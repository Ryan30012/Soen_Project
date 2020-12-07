var donate = document.getElementById("hide");

var buttons = document.getElementsByClassName("button");
for (var i = 0; i < buttons.length; i ++) {
  if (i == buttons.length -1)
  {
    buttons[i].addEventListener("click", showInput, false);
  }
  else if (i < buttons.length - 1)
  {
    buttons[i].addEventListener("click", hideInput, false);
    buttons[i].addEventListener("click", showNext, false);
  }
}

buttons[0].addEventListener("click", chooseAmount0, false);
buttons[1].addEventListener("click", chooseAmount1, false);
buttons[2].addEventListener("click", chooseAmount2, false);
buttons[3].addEventListener("click", chooseAmount3, false);
buttons[4].addEventListener("click", chooseAmount4, false);
buttons[5].addEventListener("click", chooseAmount5, false);

var next = document.getElementById("next");
next.addEventListener("click", nextSection, false);

var submit = document.getElementById("submit");
submit.addEventListener("click", validatePayment, false);


var previous = document.getElementById("previous");
previous.addEventListener("click", prevSection, false);

var input = document.getElementById("otherInput");
var other = document.getElementById("other");
input.addEventListener("input", showNext, false);

function chooseAmount0() {
  donate.value = "$5";
}

function chooseAmount1() {
  donate.value = "$15";
}

function chooseAmount2() {
  donate.value = "$25";
}

function chooseAmount3() {
  donate.value = "$50";
}

function chooseAmount4() {
  donate.value = "$75";
}

function chooseAmount5() {
  donate.value = "$100";
}

function showInput() {
  document.getElementById("next").disabled = true;
  other.style.display = "none";
  input.style.display = "block";
}


function hideInput() {
  other.style.display = "block";
  input.style.display = "none";
  input.value = "";
}

// This function enables the next button when a donation amount has been selected
function showNext() {
  document.getElementById("next").disabled = false;
}

var amount = document.getElementsByClassName("amount");
var info = document.getElementsByClassName("info");
var payment = document.getElementsByClassName("payment");

var current = 0;
show(current);

// This function will display the current step
function show(n) {
  if (n == 0) {
    other.style.display = "block";
    input.style.display = "none";
    amount[0].style.display = "block";
    info[0].style.display = "none";
    payment[0].style.display = "none";
    document.getElementById("previous").disabled = true;
    document.getElementById("next").disabled = true;
    document.getElementById("submit").style.display = "none";
  }
  else if (n == 1) {
    amount[0].style.display = "none";
    info[0].style.display = "block";
    payment[0].style.display = "none"
    document.getElementById("next").style.display = "inline";
    document.getElementById("next").blur();
    document.getElementById("previous").disabled = false;
    document.getElementById("previous").blur();
    document.getElementById("submit").style.display = "none";
  }
  else {
    amount[0].style.display = "none";
    info[0].style.display = "none";
    payment[0].style.display = "block";
    document.getElementById("previous").disabled = false;
    document.getElementById("next").style.display = "none";
    document.getElementById("submit").style.display = "inline";

  }
}

// This function will call the validation functions and determine if the form can move to the next step
function nextSection() {
  // If the user is currently on step 2, the personal information input will be validated
  if (current == 1)
  {
    next.addEventListener("click", validateInfo, false);
    if (!validateInfo())
      return;
  }
  // Increment current step by 1 and call function to display the new step
  current++;
  show(current);
}

function prevSection() {
  // Decrement current step by 1 and call function to display the new step
  current--;
  show(current);
}

// This function validates the user input on the personal information step
function validateInfo() {
  var x = document.getElementsByClassName("personal");
  var province = document.getElementById("province");
  var valid = true;

  // Validation for drop-down input
  if (province.value == "province")
  {
    province.style.backgroundColor = "rgb(255,221,221)";
    valid = false;
  }
  else province.style.backgroundColor = "white";

  // Validation for text input
  for (var i = 0; i < x.length; i++){
    if (i == 2)
    {
      var email = x[2].value.search(/^.+@.+\..+$/);
      if (email != 0)
      {
        x[2].style.backgroundColor = "rgb(255,221,221)";
        valid = false;
      }
      else x[2].style.backgroundColor = "white";
    }
    else if (i == 3)
    {
      var phone = x[3].value.search(/^\d{3}-\d{3}-\d{4}$/);
      if (phone != 0)
      {
        x[3].style.backgroundColor = "rgb(255,221,221)";
        valid = false;
      }
      else x[3].style.backgroundColor = "white";
    }
    else if (i == 6)
    {
      var postal = x[6].value.search(/^[A-Za-z]\d[A-Za-z][ -]?\d[A-Za-z]\d$/);
      if (postal != 0)
      {
        x[6].style.backgroundColor = "rgb(255,221,221)";
        valid = false;
      }
      else x[6].style.backgroundColor = "white";
    }
    else
    {
      if (x[i].value == "")
      {
        x[i].style.backgroundColor = "rgb(255,221,221)";
        valid = false;
      }
      else x[i].style.backgroundColor = "white";
    }
  }
  return valid;
}

// This function validates the user input on the payment information step
function validatePayment() {
  var x = document.getElementsByClassName("pay");
  var month = document.getElementById("month");
  var year = document.getElementById("year");
  var valid = true;

  // Validation for drop-down input
  if (month.value == "month")
  {
    month.style.backgroundColor = "rgb(255,221,221)";
    valid = false;
  }
  else month.style.backgroundColor = "white";

  if (year.value == "year")
  {
    year.style.backgroundColor = "rgb(255,221,221)";
    valid = false;
  }
  else year.style.backgroundColor = "white";

  // Validation for text input
  for (var i = 0; i < x.length; i++){
    if (i == 1)
    {
      var mastercard = x[1].value.search(/^(5[1-5][0-9]{14})$/);
      var visa = x[1].value.search(/^(4[0-9]{12}([0-9]{3})?)$/);
      if (mastercard != 0 && visa != 0)
      {
        x[1].style.backgroundColor = "rgb(255,221,221)";
        valid = false;
      }
      else x[1].style.backgroundColor = "white";
    }
    else if (i == 2)
    {
      var security = x[2].value.search(/^\d{3}$/);
      if (security != 0)
      {
        x[2].style.backgroundColor = "rgb(255,221,221)";
        valid = false;
      }
      else x[2].style.backgroundColor = "white";
    }
    else
    {
      if (x[i].value == "")
      {
        x[i].style.backgroundColor = "rgb(255,221,221)";
        valid = false;
      }
      else x[i].style.backgroundColor = "white";
    }
  }
  if(valid == false)
  {
    return false;
  }
  else return true;
}
