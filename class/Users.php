<?php
	include("GlobalConnect.php");
	class Users
	{
		public function Login($email,$pass)
		{
			$link =GlobalConnect::getConnection();
			$sql="select * from users where email='$email' and password=password('$pass')";
			$res = $link->query($sql);
			return $res; 
		}
		public function AddUsers($fname,$lname,$contact,$email,$add,$dist,$pin,$pass)
		{
			$link =GlobalConnect::getConnection();
			$sql="insert into users(firstname,lastname,contact,email,address,dist,pincode,password)values('$fname','$lname','$contact','$email','$add','$dist','$pin',password('$pass'))";
			$link->query($sql);
			if($link->affected_rows==1)
			return true;
			return false;
		}
	}
	
?>