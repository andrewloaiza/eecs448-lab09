// source:  https://www.simplilearn.com/tutorials/javascript-tutorial/email-validation-in-javascript
// param:   string containing email address
// return:  Boolean whether email is in valid format
function validEmail(email) {
    const re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
    return re.test(String(email).toLowerCase());
}


// checks if form has valid input
function checkForm()
{
  let email = document.getElementById("email").value;

  if (!validEmail(email))
  {
    event.preventDefault();
    alert("Invalid email address!");
    return;
  }

  event.submit();
}
