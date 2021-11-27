
// function setError(id, error) {
//    element = document.getElementById('id');
//   element.getElementsByClassName('formError')[0].innerHTML=error;
// }

function validateForm() {
  let name = document.forms["myForm"]["name"].value;
  if (name =="") {
    alert("Please Enter your name");
    //setError("name", "Please Enter your name");
    return false;
  }
    let email = document.forms["myForm"]["email"].value;
  if (email =="") {
    alert( "Please Enter your email");
    return false;
  }

  let phone = document.forms["myForm"]["phone"].value;
if (phone.length !==10) {
  alert("Please Enter your 10-digit no");
  //return false;
}
let gender = document.form["myForm"]["gender"].value;
if (gender.document.querySelectorAll('input[type="radio"]:checked')==null) {
alert("Please Enter your gender");
return false;
}
}

function resetFunc() {
  document.getElementById('travelForm').reset();
}
