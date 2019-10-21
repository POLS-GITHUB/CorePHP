<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
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

<?php include("ssi/plugins.php");?>
</head>

<body background="" class="w3-animate-opacity">
<?php include("ssi/header.php");?>
<?php include("ssi/menu.php");?>
	<div class="w3-row-padding">
    	<div class="w3-half">
        	<div class="w3-card-12">
            	<header class="w3-container w3-blue-grey">
                	<h3 align="center">SignIn!</h3>                    
                </header>
                <form name="frm2" class="w3-form" action="AdminLogin.php">
				<label>UserName :</label>
				<input type="text" name="username" id="username" required placeholder="e.g John" class="w3-input" style="background:transparent"/>
				<label>Password :</label>
				<input type="password" name="password" id="password" required placeholder="Password " class="w3-input" style="background:transparent"/></br></br>
				<input type="submit" name="login" value="(  Login  )" class="button" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="submit" value="(  Reset  )" class="button1" /></br></br>
                
            </div></br></br></br></br></br></br></br>
       
        </div>
        
    </div>
 <?php include("ssi/footer.php");?>
</body>
</html>