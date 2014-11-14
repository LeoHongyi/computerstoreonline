<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<?php
include_once"conn/dbhelp.php";
class userDao extends dbhelp{
   //check the information of login user
   function checkLogin($email,$pwd){
   $sql = "select * from customer where email = '$email' and pwd='$pwd'";
   $query = mysql_query($sql) or die(mysql_error."select error");
   $result = mysql_fetch_array($query);
   if($result){
   	return success;
   	}else{
   		return error;

   	}

   }


}






?>