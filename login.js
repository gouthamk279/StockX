function Validate() {
  var password = document.getElementById("pswd").value;
  var confirmPassword = document.getElementById("cfpswd").value;
  if (password != confirmPassword) {
      alert("You first Passwords is not similar with 2nd password. Please enter same password in both");
      return false;
  }
  return true;
}