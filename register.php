<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Newwark-IT register page</title>
<link href="css/global.css" rel="stylesheet" type="text/css" />
<link href="css/layout.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/register.js"></script>

<html>
<body>
<div id="header">
<div id="register_header">
   <div class="register_header_left"><img src="images/logo.jpg" alt="logo"></div>
   <div class="register_header_right"><a href="#" class="blue">main page</a> | <a href="#" class="blue">product display page</a>  | <a href="#" class="blue">shopping cart</a> | <a href="register.php" class="blue">register</a></div>
   </div>
</div>
<div id="main">
  <div class="register_content">
 <div class="register_top_bg"></div>
 <div class="register_mid_bg">
  <ul>
   <li class="register_mid_left">1.fill registering info</li>
   <li class="register_mid_mid">2.check email address</li>
   <li class="register_mid_right">3.complete register</li>
   <li></li>
  </ul>
 </div>
 <div class="register_top_bg_mid">
 <div class="register_top_bg_two_left"></div>
 <div class="register_top_bg_two_right"></div>
 <div class="register_title_bg"><img src="images/register_pic_02.gif" alt="welcome register"><br/>The information you provide will not do for other purposes , please fill ease and dont worry</div>
 </div>
 <div class="register_dotted_bg"></div>
  <div class="register_message">
   <form action="registerCheck.php" method="post" id="myform" onSubmit="return checkRegister()">
    <dl class="register_row">
        <dt>EmailAddress：</dt>
        <dd><input id="email" name="email" type="text" class="register_input" onFocus="emailFocus()" onBlur="emailBlur()"></dd>
        <dd><div id="email_prompt"></div></dd>
    </dl>

    <dl class="register_row">
        <dt>FirstName:</dt>
        <dd><input id="firstName" name="firstName" type="text" class="register_input" onFocus="firstNameFocus()" onBlur="firstNameBlur()"></dd>
        <dd><div id="firstName_prompt"></div></dd>
    </dl>

    <dl class="register_row">
        <dt>LastName:</dt>
        <dd><input id="lastName" type="text"name="lastName" class="register_input" onFocus="lastNameFocus()" onBlur="lastNameBlur()"></dd>
        <dd><div id="lastName_prompt"></div></dd>
    </dl>

     <dl class="register_row">
        <dt>Address:</dt>
        <dd><input id="address" name="address" type="text" class="register_input" onFocus="addressFocus()" onBlur="addressBlur()"></dd>
        <dd><div id="address_prompt"></div></dd>
    </dl>


       <dl class="register_row">
        <dt>Phone:</dt>
        <dd><input id="phone" type="text"name="phone" class="register_input" onFocus="phoneFocus()" onBlur="phoneBlur()"></dd>
        <dd><div id="phone_prompt"></div></dd>
      </dl>

      <dl class="register_row">
        <dt>Password:</dt>
        <dd><input id="pwd" type="password" name="pwd" class="register_input" onFocus="pwdFocus()" onBlur="pwdBlur()"></dd>
        <dd><div id="pwd_prompt"></div></dd>
      </dl>

     <dl class="register_row">
        <dt>rePassword:</dt>
        <dd><input id="repwd" type="password" class="register_input" onFocus="repwdFocus()" onBlur="repwdBlur()"></dd>
        <dd><div id="repwd_prompt"></div></dd>
      </dl>

    <dl class="register_row">
        <dt>apply status：</dt>
        <dd><select name = "status"style="width:120px;">
              <option value="0">regular</option>
              <option value="1">silver</option>
              <option value="2">gold</option>
              <option value="3">platinum</option>
              </select>
             </dd>

      </dl>
    <div class="registerBtn"><input id="registerBtn" type="image" src="images/register_btn_out.gif" onMouseOver="btn_over()" onMouseOut="btn_out()"></div>
   </form>
  </div>
 <div>
</div>




</body>
</html>