// source:  https://stackoverflow.com/questions/46155/whats-the-best-way-to-validate-an-email-address-in-javascript?rq=1
// param:   string containing email address
// return:  Boolean whether email is in valid format
function validEmail(email) {
  const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return (re.test(String(email).toLowerCase()));
}


// resets all entries in form
function reset()
{
  document.querySelector("form").reset();
}


// check that at least one cap was chosen
function validItemNum()
{
  let numChance = document.getElementById("chance_cap").value;
  let numKU     = document.getElementById("ku_cap").value;
  let numKC     = document.getElementById("kc_cap").value;

  if (numChance <= 0 && numKU <= 0 && numKC <= 0)
  {
    return false;
  }

  return true;
}


// checks if form has valid input
function checkForm()
{
  let email = document.getElementById("email").value;

  // check if email is valid
  if (!validEmail(email))
  {
    event.preventDefault();
    alert("ERROR: Invalid email address");
    document.querySelector(".email-error").style.display = "block";
    return;
  }

  else
  {
    document.querySelector(".email-error").style.display = "none";
  }

  // check that at least one item is picked
  if (!validItemNum())
  {
    event.preventDefault();
    alert("ERROR: You did not choose any caps!");
    return;
  }

  event.submit();
}
