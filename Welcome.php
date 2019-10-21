<?php session_start(); ?>
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
  color:#FFF;/*color for Text of Button*/
  background-color:#D40000;/*color for ackground of Button*/
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

.button1:hover {background-color:#A00;}

.button1:active {
  background-color:#7F0000;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>

<script type="text/javascript" src="js/jquery-2.1.4.js"></script>
<script type="text/javascript">
 count=0;
 $(document).ready(function(e) {
   
   
   /*If user didint do anything like MouseMovement As well as any keyboard activity then after 15 minutes page will be redirected to     logout page .*/
   setInterval(function(e){
	   count++;
	   if(count==900){ 
	   alert('Since You are Idle for Last 10 Minutes\nWe are redirecting you to the Logout Page !');
	   window.location.href='Logout.php'};     
	   },1000);
     /*If user Moves the Cursor then Timer set back to the Zero*/
     $(this).mousemove(function(e) {
     count=0;
     });
     /*If user Press any Key then also timer set bacl to the Zero*/
     $(this).keypress(function(e) {
     count=0; 
     });
  
  
});
</script>

<link href="css/responsive.css" rel="stylesheet" type="text/css" />
</head>

<body class="w3-animate-opacity">
<?php include("ssi/header.php");?>
<?php include("ssi/AdminMenu.php");?>
   <?php
   if(isset($_SESSION['USER'])){
    ?>
    <div align="right" style="color:#F00;"><a href="Logout.php">Logout</a></div>
  <div align="center" style="color:#090;"> Welcome <?php echo $_SESSION['USER'];?>
   <br/>
   IP Address : <?php echo $_SESSION['IP'];?>
   <br/>
   Login Time : <?php echo $_SESSION['login_time'];?><br/></div>
   
   <?php 
   }
   else 
   {
	   echo "<script>alert('You dont have permission to View This Page !');</script>";
	   echo "<meta http-equiv='refresh' content='0,AdminLoginForm.php'/>";
   }
   ?>
  <div class="w3-row-padding">
  	<div class="w3-half">
    	<div class="w3-card-12">
        	<header class="w3-container w3-blue-grey"><h3 align="center">(-:   Product's Register Form   :-)</h3></header>
            <form name="frm" method="post" class="w3-form" enctype="multipart/form-data">		
		  		<input type="text" name="name" id=" name" required placeholder="Name of Product" class="w3-input" style="background:inherit" />
                <input type="text" name="code" id="code" required placeholder="Code of Product" class="w3-input" style="background:inherit" />
                <input type="text" name="price" id="price" required placeholder="Price of Product" class="w3-input" style="background:inherit" /><br/>	
                <input type="file" name="file" id="file" accept="image/*" required="required"  align="left"/><br/><br/>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <input type="submit" name="submit" value="Register" class="button" />
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                <input type="reset" value="Reset" class="button1" /><br /><br /><br /><br /><br />
		  	</form>
            
            
            <?php
		if(isset($_REQUEST['submit']))
		{
			$name = $_REQUEST['name'];
			$code = $_REQUEST['code'];
			$price =(double) $_REQUEST['price'];
			$filePath = NULL;
			if($_FILES['file']['error']>0) echo "Error Uploading the file !";
			else
			{
				if(!file_exists("MyUploads"))
				 mkdir("MyUploads");
				  $filePath="MyUploads/".$_FILES['file']['name'];
				 move_uploaded_file($_FILES['file']['tmp_name'],$filePath);
			}
			$con = new MySQLi("localhost","root","","OnlineShopping");
			if($con->connect_error) echo $con->connect_error;
			else 
			{
				   $sql="insert into cart(name,code,price,photo)values('$name','$code','$price','$filePath')";
				   $con->query($sql);
				   $r = $con->affected_rows;
				   if($r==1)
				   echo "<script>alert('You have Successfully Registered With Us !');</script>";
				   else 
				   echo "Something Went Wrong !";
				   $con->close();
				}
		}
	?>
            
        </div>
    </div>
    <div class="w3-half">
    	<div class="w3-card-12">
        	<header class="w3-container w3-blue-grey"><h3>Modyfi The Data</h3></header>
            
            <h5 align="center">  Modyfi by Delete , Edit , Update  </h5>
            <form name="frm" method="post" class="w3-form" enctype="multipart/form-data">
            	<?php include("modify.php");?>
            </form>           
        </div>
    </div>
  </div> 
   
   
   
   
   
<?php include("ssi/footer.php");?>

</body>
</html>