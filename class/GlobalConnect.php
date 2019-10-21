<?php 
  class GlobalConnect 
  {	   
	   		public static function getConnection()
	   		{
			   $con = new MySQLi("localhost","root","","OnlineShopping");
			   if($con->connect_error) echo $con->connect_error;
			   return $con;
		    }
	   		public static function CloseConnection()
	   		{
				$con = new MySQLi("localhost","root","","OnlineShopping");
				$con->close();
		    }
	  }
 ?>

