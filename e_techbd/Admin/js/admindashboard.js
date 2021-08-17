var manageCategory = false;
var manageEmployees = false;
var manageProduct = false;
var manageReport = false;
var manageAdmin = false;
var manageSalary = false;
var manageVoucher = false;

function get(id) {
  return document.getElementById(id);
}


function viewEmployees() {
  var g_f = get("manageEmployees");
  var btn_g = get("btn_employees");
  if(manageEmployees){
    g_f.style.display="none";
    manageEmployees= false;
  }
  else {
    g_f.style.display="block";
    manageEmployees = true;
  }
}

function viewCategory() {
  var g_f = get("manageCate");
  var btn_g = get("btn_category");
  if(manageCategory){
    g_f.style.display="none";
    manageCategory = false;
  }
  else {
    g_f.style.display="block";
    manageCategory = true;
  }
}

function viewProduct() {
  var g_f = get("manageProducts");
  var btn_g = get("btn_product");
  if(manageProduct){
    g_f.style.display="none";
    manageProduct = false;
  }
  else {
    g_f.style.display="block";
    manageProduct = true;
  }
}

function viewReport() {
  var g_f = get("manageReport");
  var btn_g = get("btn_report");
  if(manageReport){
    g_f.style.display="none";
    manageReport = false;
  }
  else {
    g_f.style.display="block";
    manageReport = true;
  }
}

function viewAdmin() {
  var g_f = get("manageAdmin");
  var btn_g = get("btn_admin");
  if(manageAdmin){
    g_f.style.display="none";
    manageAdmin = false;
  }
  else {
    g_f.style.display="block";
    manageAdmin = true;
  }
}

function viewSalary() {
  var g_f = get("manageSalary");
  var btn_g = get("btn_salary");
  if(manageSalary){
    g_f.style.display="none";
    manageSalary = false;
  }
  else {
    g_f.style.display="block";
    manageSalary = true;
  }
}

function viewVoucher() {
  var g_f = get("manageVoucher");
  var btn_g = get("btn_voucher");
  if(manageVoucher){
    g_f.style.display="none";
    manageVoucher = false;
  }
  else {
    g_f.style.display="block";
    manageVoucher = true;
  }
}
