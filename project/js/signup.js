function get(id){
	return document.getElementById(id);;
}
function checkUsername(e){
	var xhr = new XMLHttpRequest();
	xhr.open("GET","check_username.php?username="+e.value,true);
	xhr.onreadystatechange=function(){
		if(this.readyState == 4 && this.status == 200){
			if(this.responseText.trim() == "invalid"){
				get("err_uname").innerHTML = "Username is already taken!";
			}
			else{
				get("err_uname").innerHTML = "";
			}
		}
	};
	xhr.send();
}