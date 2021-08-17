var hasError=false;
function get(id) {
return document.getElementById(id);
}

function validateGender() {
var gn=document.querySelector('input[name="gender"]:checked');
if (gn == null) {
  return false;
}
return true;
}

function validate() {
  refresh();
  if (get("fname").value == "") {
    hasError = true;
    get("err_fname").innerHTML = "*First name required";
}

else if (get("fname").value.length <3) {
  hasError = true;
  get("err_fname").innerHTML = "*First name must be greater than 2 characters";
}

if (get("lname").value == "") {
  hasError = true;
  get("err_lname").innerHTML = "*Last name required";
}
else if (get("lname").value.length <3) {
  hasError = true;
  get("err_lname").innerHTML = "*Last name must be greater than 2 characters";
}

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

if (get("email").value == "") {
  hasError = true;
  get("err_email").innerHTML = "*Email Required";
}

if (get("phone_num").value == "") {
  hasError = true;
  get("err_phone_num").innerHTML = "*Number Required";
}

if (get("day").selectedIndex == 0) {
hasError = true;
get("err_day").innerHTML = "*Day required";
}

if (get("month").selectedIndex == 0) {
hasError = true;
get("err_month").innerHTML = "*Month required";
}

if (get("year").selectedIndex == 0) {
hasError = true;
get("err_year").innerHTML = "*Year required";
}

if (!validateGender()) {
  hasError = true;
  get("err_gender").innerHTML = "*Gender required";
}

if (get("role").selectedIndex == 0) {
hasError = true;
get("err_role").innerHTML = "*Role required";
}


if (get("address").value == "") {
  hasError = true;
  get("err_address").innerHTML = "*Address Required";
}

if (get("u_image").value == "") {
  hasError = true;
  get("err_u_image").innerHTML = "*Image Required";
}




return !hasError;
}

function refresh() {
hasError = false;
get("err_fname").innerHTML = "";
get("err_lname").innerHTML = "";
get("err_username").innerHTML = "";
get("err_password").innerHTML = "";
get("err_email").innerHTML = "";
get("err_phone_num").innerHTML = "";
get("err_day").innerHTML = "";
get("err_month").innerHTML = "";
get("err_year").innerHTML = "";
get("err_gender").innerHTML = "";
get("err_role").innerHTML = "";
get("err_address").innerHTML = "";
get("err_u_image").innerHTML = "";
}
