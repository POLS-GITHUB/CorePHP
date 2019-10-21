<?php session_start();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome Guest !</title>
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

.txt{
	 width:200px;
	 padding:5px;
	 border-left:none;
	 border-top:none;
	 border-right:none;
	 border-bottom:1px solid #0099ff;
	 outline:none;
	 font-family:"Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, sans-serif;
	 font-size:14px;
	 
	}
.txt:focus{
	 -webkit-transition:all0.3s ease-in-out;
	 box-shadow:0px 1px 0px #0CB0D1;
	}	

.captcha-box{
	   height:50px;
	   width:200px;
	   background:inherit;
	   background-image:url(images/BG1.png);
	   background-repeat:no-repeat;
	   border-style:inherit;
	   margin-bottom:10px;
	   text-align:center;
	   font-family:"Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, sans-serif;
	   font-size:16px;
	   color:#8C1012;
	   text-decoration:line-through;
	}



</style>





<?php include("ssi/plugins.php"); ?>
 
<link href="css/responsive.css" rel="stylesheet" type="text/css" />
</head>
 
<body class="w3-animate-zoom">
<?php include("ssi/header.php");?>
 <?php include("ssi/IndexMenu.php");?>
<div class="w3-row-padding">
<div id="slider01" class="w3-image">
 <img src="images/tech1.jpg"/>
 <img src="images/tech2.jpg"/>
 <img src="images/tech3.jpg"/>
 <img src="images/tech4.jpg"/>
 <img src="images/tech5.png"/></div>

</div>

<div class="w3-row-padding">
			<div align="center" class="w3-half">
				<div class="w3-card-12">
				<header class="w3-container" style="background:#ACDA10"><h1><p style="text-shadow:#545454 6px -6px 2px">SignUp</p></h1>
				
				</header>
				<form name="frm2" class="w3-form">
				
				<input type="text" name="email" id="email" required placeholder="Email xyz@example.com" class="txt" style="background:transparent"/><br/>
				
				<input type="password" name="password" id="password" required placeholder="Password " class="txt" style="background:transparent"/><br/><br/>
				<input type="submit" name="login" value="(  Login  )" class="button" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="submit" value="(  Reset  )" class="button1" />
                </br></br>
                
                
                <div style="color:#06F">
                	<h5>Create New Account</h5><p>Click here to <a href="Register.php" style="color:#F00">Register</a></p>
                </div>
				
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
