// JavaScript Document


function emailFocus(){
	var email=document.getElementById("email");
	email.className="login_content_input login_content_input_Focus";
	}


function emailBlur(){
	var email=document.getElementById("email");
		email.className="login_content_input";
		}


function pwdFocus(){
	var pwd=document.getElementById("pwd");
	pwd.className="login_content_input login_content_input_Focus";
	}


function pwdBlur(){
	var pwd=document.getElementById("pwd");
		pwd.className="login_content_input";
		}

function checkLogin(){
	var email=document.getElementById("email").value;
	var pwd=document.getElementById("pwd").value;
    var filter = /^(([^<>()[]\.,;:s@"]+(.[^<>()[]\.,;:s@"]+)*)|(".+"))@(([[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}.[0-9]{1,3}])|(([a-zA-Z-0-9]+.)+[a-zA-Z]{2,}))$/;
	if(!filter.test(email)){
         alert("input correct email");
         return false
		}
	if(pwd==""){
		alert("input your password");
		return false;
		}
	return true;
	}


function jump(){
	window.location.href="#";
	}

