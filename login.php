<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Newark-IT login page</title>
<link href="css/global.css" rel="stylesheet" type="text/css" />
<link href="css/layout.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/login.js">


</script>

</head>
<body>
<!--header of login-page-->
<div id="header">
   <div class="login_header_left"><img src="images/logo.jpg" alt="logo"></div>
   <div class="login_header_mid"><img src="images/login_header.jpg" alt="header"></div>
   <div class="login_header_right"><a href="#" class="blue">main page</a> | <a href="#" class="blue">product display page</a>  | <a href="#" class="blue">shopping cart</a> | <a href="#" class="blue">register</a></div>
</div>

<!--content of login-page-->
<div id="main">
	<div class="login_main_left">
       <div>
         <img src="images/login_main_01.jpg" alt="middle_image">
         <img src="images/login_main_02.jpg" alt="middle_image">
         <img src="images/login_main_03.jpg" alt="middle_image">
       </div>
       <div class="login_main_end">
       <dl class="login_green">
          <dt>MORE CHOICE LOWER PRICE</dt>
          <dd>1,000,000 kind of computers include desktop,laptop and even printer the price more than 20% the actual store</dd>
       </dl>

         <div class="login_main_dotted"></div>
       <dl class="login_green">
          <dt>FREE delivery PAY WHEN ARRIVE</dt>
          <dd>Free delivery, 360 cities pay when product arrive Another online payment, postal remittance and other payment methods</dd>
       </dl>

       <div class="login_main_dotted"></div>
      <dl class="login_green">
          <dt>AUTHENTIC , HIGH-QUALITY PRODUCT REVIEWS</dt>
          <dd>Millions of users real , high-quality product reviews , giving you multi-angle , all-round shopping reference</dd>
       </dl>
    </div>
	</div>

	<!--login main mid-->
   <div class="login_main_mid">
    <div class="login_content_top">Please login Newwark-IT</div>
    <div class="login_content_line"></div>
    <form action="" method="post" onSubmit="return checkLogin()">
    <dl class="login_content">
       <dt>Email address：</dt>
       <dd><input id="email" type="text" class="login_content_input" onFocus="emailFocus()" onBlur="emailBlur()"></dd>
    </dl>
     <dl class="login_content">
       <dt>password：</dt>
       <dd><input id="pwd" type="password" class="login_content_input" onFocus="pwdFocus()" onBlur="pwdBlur()"></dd>
    </dl>
    <dl class="login_content">
       <dt></dt>
       <dd></dd>
    </dl>
     <dl class="login_content">
       <dt></dt>
       <dd><input id="btn" value=" " type="submit" class="login_btn_out"  onmouseover="this.className='login_btn_over'"  onmouseout="this.className='login_btn_out'"></dd>
    </dl>


    </form>
    <div class="login_content_dotted"></div>
    <div class="login_content_end_bg">
     <div class="login_content_end_bg_top">
    <label class="login_content_bold">still not user of NEWARK-IT?</label>QUICK METHOD TO REGISTER，Lets you immediately enjoy preferential services Miscellaneous Dangdang provided ......
     </div>
     <div class="login_content_end_bg_end">
     <input  class="login_register_out" value=" " type="button" onmouseover="this.className='login_register_over'"  onmouseout="this.className='login_register_out'" onClick="jump()">
      </div>

    </div>

  </div>
</div>




</body>