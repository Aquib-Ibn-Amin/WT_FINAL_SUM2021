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
		function validate(){
			refresh();
			//start fastname
			if(get("fname").value == ""){
				hasError = true;
				get("err_fname").innerHTML = "*First-name required";
			}
			else if(get("fname").value.length <3){
				hasError = true;
				get("err_fname").innerHTML = "*First-name must be 3 characters";
			}
			//start lastname
			if(get("lname").value == ""){
				hasError = true;
				get("err_lname").innerHTML = "*Last-name required";
			}
			else if(get("lname").value.length <3){
				hasError = true;
				get("err_lname").innerHTML = "*Last-name must be 3 characters";
			}
			//start username
			if(get("uname").value==""){
				hasError = true;
				get("err_uname").innerHTML = "*User-name required";
			}
			else if(get("uname").value.length < 5){
				hasError = true;
				get("err_uname").innerHTML = "*User-name must be 5 characters";
			}
			//start password
			if(get("pass").value == ""){
				hasError = true;
				get("err_pass").innerHTML = "*Pass-word required";
			}
			else if(get("pass").value.length < 5){
				hasError = true;
				get("err_pass").innerHTML = "*Pass-word must be 5 characters";
			}
			//start email
			if(get("email").value == ""){
				hasError = true;
				get("err_email").innerHTML = "*E-mail required";
			}
			else if(get("email").value.length < 5){
				hasError = true;
				get("err_email").innerHTML = "*E-mail must be 5 characters";
			}
			//start phone number
			if(get("phone_num").value == ""){
				hasError = true;
				get("err_phone_num").innerHTML = "*Phone-number required";
			}
			else if(get("phone_num").value.length < 11){
				hasError = true;
				get("err_phone_num").innerHTML = "*Phone-number must be 11 characters";
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

			if (get("salary").value == "") {
			hasError = true;
			get("err_salary").innerHTML = "*Salary Required";
			}

			if (get("address").value == "") {
			hasError = true;
			get("err_address").innerHTML = "*Address Required";
			}

			if (get("u_image").value == "") {
			hasError = true;
			get("err_u_image").innerHTML = "***Image Required";
			}
			
			
			return !hasError;
		}
		function refresh(){
			hasError = false;
			get("err_fname").innerHTML ="";
			get("err_lname").innerHTML ="";
			get("err_uname").innerHTML ="";
			get("err_pass").innerHTML ="";
			get("err_email").innerHTML ="";
			get("err_phone_num").innerHTML ="";
			get("err_day").innerHTML = "";
			get("err_month").innerHTML = "";
			get("err_year").innerHTML = "";
			get("err_gender").innerHTML = "";
			get("err_role").innerHTML = "";
			get("err_salary").innerHTML = "";
			get("err_address").innerHTML = "";
			get("err_u_image").innerHTML = "";
				}