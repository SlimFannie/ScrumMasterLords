function passwordShowHide() {
    var x = document.getElementById("inputPassword");
    var show_eye = document.getElementById("showEye");
    var hide_eye = document.getElementById("hideEye");
    hide_eye.classList.remove("d-none");
    if (x.type === "password") {
      x.type = "text";
      show_eye.style.display = "none";
      hide_eye.style.display = "block";
    } else {
      x.type = "password";
      show_eye.style.display = "block";
      hide_eye.style.display = "none";
    }
  }