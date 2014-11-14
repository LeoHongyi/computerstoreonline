<?php
  class dbhelp{
  	private $server;
  	private $name;
  	private $password;
  	private $db;
  	function __construct(){
  		   $this->server= "localhost";
           $this->name= "root";
           $this->password="123456";
           $this->db="db_computerstoreonline";
  		 	$conn=mysql_connect($this->server,$this->name,$this->password)or die(mysql_error()."error" );
 	        $d=mysql_select_db($this->db);
 	        mysql_query("SET NAMES 'utf8'");


  	}
  }

?>