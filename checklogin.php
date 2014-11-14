<?php
 include_once"userDao.php";
 $email = $_POST["email"];
 $pwd = $_POST["pwd"];
 $v = new userDao();
 $a = $v->checkLogin($email,$pwd);
 if($a  == success){
echo"login succes!";
 }else{
echo"error";

 }
?>