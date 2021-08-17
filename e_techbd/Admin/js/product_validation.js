var hasError=false;
function get(id) {
return document.getElementById(id);
}

function validate() {
  refresh();
  if (get("pname").value == "") {
    hasError = true;
    get("err_pname").innerHTML = "*Product name Required";
}


if (get("price").value == "") {
  hasError = true;
  get("err_price").innerHTML = "*Price Required";
}

if (get("c_name").selectedIndex == 0) {
hasError = true;
get("err_c_name").innerHTML = "*Category required";
}


if (get("quantity").value == "") {
  hasError = true;
  get("err_quantity").innerHTML = "*Quantity Required";
}

if (get("description").value == "") {
  hasError = true;
  get("err_description").innerHTML = "*Description Required";
}
//
//
if (get("day").selectedIndex == 0) {
hasError = true;
get("err_day").innerHTML = "*Day required";
}
//
if (get("month").selectedIndex == 0) {
hasError = true;
get("err_month").innerHTML = "*Month required";
}

if (get("year").selectedIndex == 0) {
hasError = true;
get("err_year").innerHTML = "*Year required";
}


if (get("p_image").value == "") {
  hasError = true;
  get("err_p_image").innerHTML = "*Image Required";
}




return !hasError;
}

function refresh() {
hasError = false;
get("err_pname").innerHTML = "";
get("err_price").innerHTML = "";
get("err_c_name").innerHTML = "";
get("err_quantity").innerHTML = "";
get("err_description").innerHTML = "";
get("err_day").innerHTML = "";
get("err_month").innerHTML = "";
get("err_year").innerHTML = "";
get("err_p_image").innerHTML = "";
}
