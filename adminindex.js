function validateForm(){
	var username = document.getElementById('user').value;
	var passname = document.getElementById('pass').value;

	if(username == null || username == ""){
		alert("Please enter username");
		return false;
	}

	if(password == null || password == "") {
		alert("Please enter password");
		return false;
	}

	else{
		alert("Login successful");
	}
}