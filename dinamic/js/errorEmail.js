emailField = document.getElementById('pass');
emailField.addEventListener('keyup',function(){
	if (emailField.value.length <= 5) {
		document.getElementById('form_loginPassworderror').style.display = 'block';
	}
	else if(emailField.value.length == 0){
		document.getElementById('form_loginPassworderror').style.display = 'none';
	}
	else{
		document.getElementById('form_loginPassworderror').style.display = 'none';
	}
});