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
	 box-shadow:0px 1px 0px #0CB0D1;      /* #0CB0D1; */
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
<script type="text/javascript" src="js/script.js"></script>
<script type="text/javascript" src="js/coin-slider.min.js"></script>
<script type="text/javascript" src="js/jquery-2.1.4.js"></script>
<script type="text/javascript" src="js/jquery.datetimepicker.full.js"></script>
<!-- script type="text/javascript" src="js/login-or-register.js"></script -->

<!-- link rel="stylesheet" type="text/css" href="css/login-register.css" / -->
<link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css" />
<link rel="stylesheet" type="text/css" href="css/coin-slider.css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script>
function validateForm()
{
	var a=document.getElementById("a");
	var b=document.getElementById("b");
	var c=document.getElementById("c");
	var d=document.getElementById("d");
	var e=document.getElementById("e");
	var f=document.getElementById("f");
	var g=document.getElementById("g");
	var h=document.getElementById("h");
	var i=document.getElementById("i");
	
	var fname=document.getElementById("fname");
}
</script>





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
        	
    <header class="w3-animate-zoom w3-container" style="background:#ACDA10"><h1><p style="text-shadow:#545454 6px -6px 2px">SignUp</p></h1></header>
    <?php
       if(isset($_REQUEST['submit']))
	   {
			$value = $_REQUEST['captcha_key'];
			if($value == $_SESSION['captcha_key']) 
			echo "<script>alert('');</script>";		 
			else 
			echo "<script>alert('Please Check the Key that you have entered !');</script>";	   
	   }

	?>
<form>
<input type="text" name="fname" id="fname" required placeholder="First Name" class="txt" style="background:inherit" /><br/>
<input type="text" name="lname" id="lname" required placeholder="Last Name" class="txt" style="background:inherit" /><br/>
<input type="text" name="contact" id="contact" maxlength="12" required placeholder="Contact No" class="txt" style="background:inherit" /><br/>
<input type="text" name="email" id="email" required placeholder="abc@example.com" class="txt" style="background:inherit" /><br/>
<textarea name="add" rows="5" cols="20" id="add" required placeholder="Address" class="txt" style="background:inherit"></textarea><br/>
<select name="district" style="width:200px" id="district" class="txt" style="background:inherit">
  	<option value="" selected="selected" class="txt" style="background:inherit">---Select District---</option>
    <option value="hoogly" class="txt" style="background:inherit">Hooghly</option>
    <option value="howrah" class="txt" style="background:inherit">Howrah</option>
    </select><br/>
    <input name="pin" id="pin" maxlength="6" required placeholder="PinCode" class="txt" style="background:inherit"/><br/>
<input type="password" name="password" id="password" class="txt" required placeholder="Password" style="background:inherit" /><br/>
            <input type="password" name="repass" required placeholder="Retype Password" class="txt" style="background:inherit" /><br/><br/><br/ -->
            <!-- p><h4>Enter The Text Below</h4></p>
            	<div class="captcha-box">
                	<p class="content">
                    <?php
                    	echo "<br/>";
						echo $str = strtolower(substr(md5(rand()*99999999),0,8));
						$_SESSION['captcha_key']=$str;
					?>
<input type="text" name="captcha_key" id="captcha_key" maxlength="8" required placeholder="This Code Input Here" class="txt" style="background:inherit" />
            		</p>
            	</div><br/><br/ -->
           <div align="left"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="submit" name="submit" value="Submit" class="button" align="left" />
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="Reset" class="button1" /></div>
            <br/><br/>
        </form>    
        
        <?php 
			if(isset($_REQUEST['submit']))
			{				
				require("class/Users.php");
					$user = new Users();
					if($user->AddUsers($_REQUEST['fname'],$_REQUEST['lname'],$_REQUEST['contact'],$_REQUEST['email'],$_REQUEST['add'],$_REQUEST['district'],$_REQUEST['pin'],$_REQUEST['password']))
					{
						echo "<script>alert('SuccessFull Registered..!');</script>";
						echo "<meta http-equiv='refresh' content='0,index.php'/>";
					}
					else
					{
						echo "<script>alert('Sorry   :-(');</script>";
					}
					GlobalConnect::closeConnection();
			}
		?>
        
  </div>  
</div>
			<!--- div class="w3-half">
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
				
				<!--- ?php 
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
			</div --->
			
</div>
			<div>		
				<?php include("ssi/footer.php");?>
</div>
</body>
</html>
