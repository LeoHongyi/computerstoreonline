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

   //customer register
  function checkRegister($value){
     $sql = "insert into customer value($value)";
      $query = mysql_query($sql) or die(mysql_error()."sql error!");
     $num = mysql_affected_rows();
     if($num > 0){
     	return true;
     }else{

     	return false;
     }

  }


}



//$v =  new userDao();
//$value = "' ','jason','li','12323@qq.com','103 davis ave harrison','1231321231','0','123123'";
//$a = $v->checkRegister($value);
//echo $a;




?>