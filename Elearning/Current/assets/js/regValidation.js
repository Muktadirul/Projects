function validate(){
    username=document.myForm.username.value;
	if(!username){
            alert("Please Enter Your Name");
            document.myForm.username.focus();
            return false;
	}
	if(/[^a-zA-Z"."_]/.test(username)){
            alert("Name can contain only character,.,_");
            document.myForm.username.focus();
            return false;
	}
        
    email=document.myForm.email.value;
	if(!email){
            alert("Please Enter Your Email address");
            document.myForm.email.focus();
            return false;
	}
	if(!/[a-zA-Z0-9"."]+@(gmail|yahoo|hotmail|outlook)\.(com)$/.test(email)){
            alert("Enter a valid email address");
            document.myForm.email.focus();
            return false;
	}
    
    password=document.myForm.password.value;   
	if(password.length<8){
            alert("Password must contain atleast 8 Characters");
            document.myForm.password.focus();
            return false;
	}
}

