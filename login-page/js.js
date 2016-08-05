
function validateFormOnSubmit(register) {
var reason = "";

  reason += validateUsername(register.first_name);
  reason += validatePassword(register.last_name);
  reason += validateEmail(register.d_o_b);
  reason += validatePhone(register.gender);
  reason += validateEmpty(theForm.email);
  reason += validateEmpty(theForm.password);
  reason += validateEmpty(theForm.c_password);
  reason += validateEmpty(theForm.phone_no);
      
  if (reason != "") {
    alert("Some fields need correction:\n" + reason);
    return false;
  }

  return true;
}