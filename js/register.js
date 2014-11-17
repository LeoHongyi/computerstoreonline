//JavaScript Document
//when mouse in email textbox
function emailFocus(){
	var email=document.getElementById("email");
	var promptId=document.getElementById("email_prompt");
	email.className="register_input register_input_Focus";
	promptId.innerHTML="This email will be your account number and will be used to check when you forget";
	 promptId.className="register_prompt";
	}

//when mouse leave email textbox
function emailBlur(){
	var email=document.getElementById("email");
	var promptId=document.getElementById("email_prompt");
	promptId.innerHTML="";
	var reg=/^\w+@\w+(\.[a-zA-Z]{2,3}){1,2}$/;
    if(email.value==""){
		promptId.innerHTML="email is required part and please input your email";
		promptId.className="register_prompt_error";
		email.className="register_input register_input_Blur";
		return false;
		  }
		if(reg.test(email.value)==false){
	    promptId.innerHTML="the format of  your email is incorrect and refill it";
		promptId.className="register_prompt_error";
		email.className="register_input register_input_Blur";
	return false;
	  }

	  promptId.className="register_prompt_ok";
	  email.className="register_input";
	  return true;
}


function firstNameFocus(){
    var firstName=document.getElementById("firstName");
	var firstNameId=document.getElementById("firstName_prompt");
	firstName.className="register_input register_input_Focus";
	firstNameId.innerHTML="first name is required option";
	firstNameId.className="register_prompt";

}

function firstNameBlur(){
	var firstName=document.getElementById("firstName");
	var firstNameId=document.getElementById("firstName_prompt");
	firstNameId.innerHTML="";
    if(firstName.value==""){
		firstNameId.innerHTML="firstname is required part and please input your firstname";
		firstNameId.className="register_prompt_error";
		firstName.className="register_input register_input_Blur";
		return false;
		  }


	  firstNameId.className="register_prompt_ok";
	 firstName.className="register_input";
	  return true;
}

function lastNameFocus(){
    var lastName=document.getElementById("lastName");
	var lastNameId=document.getElementById("lastName_prompt");
	lastName.className="register_input register_input_Focus";
	lastNameId.innerHTML="last name is required option";
	lastNameId.className="register_prompt";

}

function lastNameBlur(){
	var lastName=document.getElementById("lastName");
	var lastNameId=document.getElementById("lastName_prompt");
	lastNameId.innerHTML="";
    if(lastName.value==""){
		lastNameId.innerHTML="lastname is required part and please input your firstname";
		lastNameId.className="register_prompt_error";
		lastName.className="register_input register_input_Blur";
		return false;
		  }


	  lastNameId.className="register_prompt_ok";
	 lastName.className="register_input";
	  return true;
}


function addressFocus(){
    var address=document.getElementById("address");
	var addressId=document.getElementById("address_prompt");
	address.className="register_input register_input_Focus";
	addressId.innerHTML="address is required option";
	addressId.className="register_prompt";

}

function addressBlur(){
    var address=document.getElementById("address");
	var addressId=document.getElementById("address_prompt");
	addressId.innerHTML="";
    if(address.value==""){
		addressId.innerHTML="lastname is required part and please input your email";
		addressId.className="register_prompt_error";
		address.className="register_input register_input_Blur";

		return false;
		  }


	  addressId.className="register_prompt_ok";
	  address.className="register_input";
	  return true;
}

function phoneFocus(){
    var phone=document.getElementById("phone");
	var phoneId=document.getElementById("phone_prompt");
	phone.className="register_input register_input_Focus";
	phoneId.innerHTML="phone is required option";
	phoneId.className="register_prompt";

}

function phoneBlur(){
    var phone=document.getElementById("phone");
	var phoneId=document.getElementById("phone_prompt");
	phoneId.innerHTML="";
    var reg = /^[0-9]{10,10}$/;
    if(phone.value==""){
		phoneId.innerHTML="phone is required part and please input your phonenumber";
		phoneId.className="register_prompt_error";
		phone.className="register_input register_input_Blur";

		return false;
		  }

    if(reg.test(phone.value) == false){
    phoneId.innerHTML="the length of phonenumber must be 10 integers";
		phoneId.className="register_prompt_error";
		phone.className="register_input register_input_Blur";

		return false;
    }

	  phoneId.className="register_prompt_ok";
	  phone.className="register_input";
	  return true;
}



function pwdFocus(){
 	var pwd = document.getElementById("pwd");
    var pwdId = document.getElementById("pwd_prompt");
    pwd.className = "register_input register_input_Focus";
    pwdId.innerHTML = "Password may be case letters, numbers, length 6-20 characters";
    pwdId.className = "register_prompt";
}


function pwdBlur(){
   	var pwd = document.getElementById("pwd");
    var pwdId = document.getElementById("pwd_prompt");
    pwdId.innerHTML = "";
    var reg=/^[a-zA-Z0-9]{6,20}$/;
    if(pwd.value == ""){
       pwdId.innerHTML = "this is required option and set your password";
       pwdId.className = "register_prompt_error";
       pwd.className = "register_input register_input_Blur";
       return false;
    }

    if(reg.test(pwd.value) == false){
        pwdId.innerHTML = "the format of password is wrong, Password may be case letters, numbers, length 6-20 characters";
       	pwdId.className="register_prompt_error";
		pwd.className="register_input register_input_Blur";
       return false;

    }

   	  pwdId.className="register_prompt_ok";
	  pwd.className="register_input";
	  return true;
}

function repwdFocus(){
	var repwd=document.getElementById("repwd");
	repwd.className="register_input register_input_Focus";
	}

function repwdBlur(){
  	var pwd = document.getElementById("pwd");
    var repwd = document.getElementById("repwd");
    var repwdId = document.getElementById("repwd_prompt");
    repwdId.innerHTML = "";
    if(repwdId.value == ""){
     repwdId.innerHTML = "please re-enter";
     repwdId.className = "register_prompt_error";
     repwd.className = "register_input register_input_Blur";
    return false;
    }

    if(pwd.value!=repwd.value){
      repwdId.innerHTML = "Enter the password twice inconsistent, please re-enter";
      repwdId.className = "register_prompt_error";
      repwd.className = "register_input register_input_Blur";
     return false;
    }

     repwdId.className="register_prompt_ok";
	  repwd.className="register_input";
	  return true;
}


function checkRegister(){
     emailBlur();
     firstNameBlur();
     lastNameBlur();
     addressBlur()
     phoneBlur();
     pwdBlur();
     repwdBlur();


     var flagEmail = emailBlur();
     var flagfirstNameBlur = firstNameBlur();
     var flaglastNameBlur = lastNameBlur();
     var flagaddressBlur = addressBlur();
     var flagphoneBlur = phoneBlur();
     var flagPwd = pwdBlur();
     var flagRepwd = repwdBlur();
     if(flagEmail == true && flagfirstNameBlur == true && flagPwd == true &&  flaglastNameBlur == true && flagRepwd == true &&  flagphoneBlur == true){
        return true;
     }else{
        return false;
     }

}

function btn_over(){
	document.getElementById("registerBtn").src="images/register_btn_over.gif";
	}


function btn_out(){
	document.getElementById("registerBtn").src="images/register_btn_out.gif";
	}


