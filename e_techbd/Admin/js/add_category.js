function get(id) {
  return document.getElementById(id);

}
function checkCategory(e) {

  var xhr= new XMLHttpRequest();
  xhr.open("GET","check_categories.php?name="+e.value,true);
  xhr.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      if (this.responseText.trim() == "Invalid") {
        get("err_name").innerHTML = "Category Exists";
      }
      else {
        get("err_name").innerHTML = "";
      }
    }

  };
  xhr.send();
} 
