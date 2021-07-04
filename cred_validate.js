function validate() {
  var em = document.getElementById("email").value;
  var ps = document.getElementById("password").value;

  var regx = /[a-zA-Z0-9\._]+@[a-zA-Z0-9]+\.[a-zA-Z0-9]/;
  if (!regx.test(em)) {
    window.alert("Email address is not valid");
    return false;
  } else {
    if (ps.length < 11) {
      window.alert("Password should be at least 11 characters long");
      return false;
    } else if (ps.length >= 11) {
      var regUpperLetter = /[A-Z]/;
      var regDigit = /[0-9]/;
      var regSpecialChar = /[!@#$%^&*]/;
      if (!regUpperLetter.test(ps)) {
        window.alert("Password should contain atleast uppercase letter");
        return false;
      } else {
        if (!regDigit.test(ps)) {
          window.alert("Password should contain atleast one digit");
          return false;
        } else {
          if (!regSpecialChar.test(ps)) {
            window.alert("Password should contain atleast special character");
            return false;
          } else {
            return true;
          }
        }
      }
    }
  }
}
