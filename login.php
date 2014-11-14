<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Newark-IT login page</title>
<link href="css/global.css" rel="stylesheet" type="text/css" />
<link href="css/layout.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/login.js">


</script>
    <style type="text/css">
    .code
    {

            font-family:Arial;
            font-style:italic;
             color:blue;
             font-size:20px;
             border:0;
             font-weight:bolder;



    }


    </style>
    <script language="javascript" type="text/javascript">

        var code;
        function createCode() {
            code = "";
            var codeLength = 6;
            var checkCode = document.getElementById("checkCode");
            var codeChars = new Array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9,
            'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z',
            'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'); //所有候选组成验证码的字符，当然也可以用中文的
            for (var i = 0; i < codeLength; i++)
            {
                var charNum = Math.floor(Math.random() * 52);
                code += codeChars[charNum];
            }
            if (checkCode)
            {
                checkCode.className = "code";
                checkCode.innerHTML = code;
            }
        }
        function validateCode()
        {
            var inputCode = document.getElementById("inputCode").value;
            if (inputCode.length <= 0)
            {
                alert("input verification code");
            }
            else if (inputCode.toUpperCase() != code.toUpperCase())
            {
                alert("error verification code！");
                createCode();
            }
            else
            {
                return true;
            }
        }
     </script>







</head>
<body  onload="createCode()">
<!--header of login-page-->
<div id="header">
   <div class="login_header_left"><img src="images/logo.jpg" alt="logo"></div>
   <div class="login_header_mid"><img src="images/login_header.jpg" alt="header"></div>
   <div class="login_header_right"><a href="#" class="blue">main page</a> | <a href="#" class="blue">product display page</a>  | <a href="#" class="blue">shopping cart</a> | <a href="register.php" class="blue">register</a></div>
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
    <form action="checkLogin.php" method="post" onSubmit="return checkLogin()">


    <dl class="login_content">
       <dt>Email address：</dt>
       <dd><input name="email" id="email" type="text" class="login_content_input" onFocus="emailFocus()" onBlur="emailBlur()"></dd>
    </dl>
     <dl class="login_content">
       <dt>password：</dt>
       <dd><input name="pwd"id="pwd" type="password" class="login_content_input" onFocus="pwdFocus()" onBlur="pwdBlur()"></dd>
    </dl>
    <dl class="login_content">
       <dt>Verification code:</dt>
       <dd>


          <input  type="text"   id="inputCode" class= "login_content_input"/>


           <div class="code" id="checkCode" onclick="createCode()" >
           <a  href="#" onclick="createCode()">看不清换一张</a>




       </dd>
    </dl>
     <dl class="login_content">
       <dt></dt>
       <dd><input id="btn" value=" " type="submit" class="login_btn_out"  onclick="validateCode();" onmouseover="this.className='login_btn_over'"  onmouseout="this.className='login_btn_out'"></dd>
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
  <div class="login_main_right"><img src="images/login_main_04.jpg" alt="right.php"></div>
</div>




</body>