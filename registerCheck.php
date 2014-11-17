<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php
include_once"userDao.php";
$email = $_POST["email"];
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$address = $_POST["address"];
$phone = $_POST["phone"];
$pwd = $_POST["pwd"];
$status = $_POST["status"];
$value = "' ','$firstName','$lastName','$email','$address','$phone','$status','$pwd'";
$v = new userDao();
if($lastName){
$check_register = $v->checkRegister($value);
}
if($check_register&&$lastName != ""){
 $url = "login.php";
		echo "<script language='javascript' type='text/javascript'>";
		echo "window.location.href='$url'";
		echo "</script>";

}else{
	echo"error";

}



?>