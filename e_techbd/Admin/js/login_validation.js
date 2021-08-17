var hasError=false;
function get(id) {
return document.getElementById(id);
}

function validate() {
  refresh();


if (get("username").value == "") {
  hasError = true;
  get("err_username").innerHTML = "*Username Required";
}
else if (get("username").value.length <5) {
hasError = true;
get("err_username").innerHTML = "*Username must be greater than 4 characters";
}

if (get("password").value == "") {
  hasError = true;
  get("err_password").innerHTML = "*Password Required";
}
else if (get("password").value.length <5) {
hasError = true;
get("err_password").innerHTML = "*Password must be greater than 4 characters";
}



return !hasError;
}

function refresh() {
hasError = false;
get("err_username").innerHTML = "";
get("err_password").innerHTML = "";
}
