var haserror=false;
function get(id) {
    return document.getElementById(id);
}
function validate() {
    refresh();

    if (get("email").value == "") {
        hasError = true;
        get("err_email").innerHTML = "*Email Required!";

    }
    if (get("pass").value == "") {
        hasError = true;
        get("err_pass").innerHTML = "*Password Required!";
    }
    else if (get("pass").value.length <5) {
      hasError = true;
      get("err_pass").innerHTML = "*Password must be greater than 4 characters";
    
    }
    return !hasError;
}

function refresh() {
  hasError = false;
   get("err_email").innerHTML = "";
   get("err_pass").innerHTML = "";
}


