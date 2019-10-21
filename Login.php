<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome Guest !</title>
<script type="text/javascript" src="js/jquery-2.1.4.js"></script>
<script type="text/javascript" src="js/jquery.datetimepicker.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css" />
<script type="text/javascript">
	$(document).ready(function(e){$('#doj').datetimepicker({mask:false});});
</script>
<style type="text/css">
.button
{
  display: inline-block;
  padding: 7.5px 12.5px;
  font-size:12px;
  cursor: pointer;
  text-align: center;	
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: #3e8e41}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}



.button1 

{
  display: inline-block;
  padding: 7.5px 12.5px;
  font-size: 12px;
  cursor: pointer;
  text-align: center;	
  text-decoration: none;
  outline: none;
  color:#703838;/*color for Text of Button*/
  background-color:#FFFF00;/*color for ackground of Button*/
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button1:hover {background-color: #3e8e41}

.button1:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>

</head>

<body>
			<div class="w3-half">
				<div class="w3-card-12">
				<header class="w3-container w3-blue-grey">
				<h2>SingIn !</h2>
				</header>
				<form name="frm2" class="w3-form">
				<label>UserName :</label>
				<input type="text" name="email" id="email" required placeholder="Email xyz@example.com" class="w3-input" style="background:transparent"/>
				<label>Password :</label>
				<input type="password" name="password" id="password" required placeholder="Password " class="w3-input" style="background:transparent"/>
				<input type="submit" name="login" value="(  Login  )" class="button" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="submit" value="(  Reset  )" class="button1" />
                </br></br>
				
				<?php 
	     if(isset($_REQUEST['login']))
		 {
			  
			  include("class/Users.php");
			  $email = $_REQUEST['email'];
			  $password = $_REQUEST['password'];
			  $user = new Users();
			  
			  $result = $user->Login($email,$password);
			  if($result->num_rows==1)
			  {
			   if($rows = $result->fetch_assoc())
			   {
				    $_SESSION['USER']=$rows['firstname']." ".$rows['lastname'];
					$_SESSION['IP']=$_SERVER['REMOTE_ADDR'];
					echo "<script>alert('Login Successsfull !');</script>";
					echo "<meta http-equiv='refresh' content='0,AllPanel.php'/>";
			   }	   
			 }
			 else 
			 {
				echo "<script>alert('Invalid Email or Password !');</script>";					
			 }					
			GlobalConnect::CloseConnection();			   
		}
	  ?>
				
				</form>
				</div>
			</div>
			
</div>

</body>
</html>