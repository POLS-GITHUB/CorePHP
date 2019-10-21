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
<?php include("ssi/plugins.php"); ?>
 
<link href="css/responsive.css" rel="stylesheet" type="text/css" />
</head>
 
<body class="w3-animate-zoom">
<?php include("ssi/header.php");?>
 <?php include("ssi/menu.php");?>
<div class="w3-row-padding">
<div id="slider01" class="w3-image">
 <img src="images/tech1.jpg"/>
 <img src="images/tech2.jpg"/>
 <img src="images/tech3.jpg"/>
 <img src="images/tech4.jpg"/>
 <img src="images/tech5.png"/></div>

</div>

<div class="w3-row-padding">
	<div class="w3-half">  
    	<div class="w3-card-12">
  		<header class="w3-container w3-blue-grey"><h3>Sing Up Here &raquo;</h3></header>
		
		<?php 
				  if(isset($_REQUEST['submit']))
				  {
					   require("class/Users.php");
					   $user = new Users();
					   if($user->AddUsers($_REQUEST['fname'],$_REQUEST['lname'],$_REQUEST['contact'],$_REQUEST['email'],$_REQUEST['add'],$_REQUEST['district'],$_REQUEST['pin'],$_REQUEST['password']))
					   echo "<script>alert('You have Successfully Registered With Us....!');</script>";  	  
					   else 
					   echo "<script>alert('Some thing went Wrong Please Try again later !');</script>";	  
					   GlobalConnect::CloseConnection();					  
				  }
		?>
  
		  <form name="frm" class="w3-form">
		  
			   <input type="text" name="fname" id="fname" required placeholder="FirstName" class="w3-input" style="background:inherit"/>     
			   <input type="text" name="lname" id="lname" requird placeholder="LastName" class="w3-input" style="background:inherit"/>
			   <input type="text" name="contact" id="contact" maxlength="10" required placeholder="Contact No" class="w3-input" style="background:inherit"/>
			   <input type="text" name="email" id="email" required placeholder="xyz@example.com" class="w3-input" style="background:inherit"/>        
			   <textarea rows="1" cols="40" name="add" id="add" required placeholder="Enter Address Here ..." class="w3-input" style="background:inherit"></textarea>       
			   <select name="district" id="district" required class="w3-input" style="background:inherit">
				 <option value="" selected="selected">---Choose a District---</option>
				 <option value="Hoogly" >Hooghly</option>
				 <option value="Howrah">Howrah</option>
				 <option value="Kolkata">Kolkata</option>
				 <option value="Burdwan">Burdwan</option>
				 <option value="North 24 Parganas">North 24 Parganas</option>
				 <option value="South 24 parganas">South 24 Parganas</option>
				 <option value="Midnapure">Midnapure</option>
			   </select>
			         
			   <input type="text" name="pin" id="pin" maxlength="6" class="w3-input" required placeholder="Pin Code" style="background:inherit"/>       
			   <input type="password" name="password" id="password" required placeholder="Password" class="w3-input" style="background:inherit"/>        
			   <input type="password"name="repass" required placeholder="Retype Password" onBlur="validPassword()" class="w3-input" style="background:inherit"/>
			   <!--- input type="datetime" name="doj" id="doj" required placeholder="Date of Join Us" class="w3-input" style="background:inherit" / ---> 
			   <tr>
			   	   <th>
					   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="Register" class="button"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					   <input type="reset" value="Reset" class="button1"/>
				   </th>
			   </tr>
			   </br></br>		
		  		
		  </form>
		    
  </div>  
</div>
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
			<div>		
				<?php include("ssi/footer.php");?>
</div>
</body>
</html>
