<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="css/jquery.datetimepicker.css" />
<script type="text/javascript" src="js/jquery-2.1.4.js"></script>
<script type="text/javascript" src="js/jquery.datetimepicker.js"></script>

<script type="text/javascript">

</script>
</head>

<body>
	<form name="frm" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<th>Product Name</th>
				<td><input type="text" name="name" id="name" required placeholder="Name of Product" /></td>
			</tr>
			<tr>
				<th>Product code</th>
				<td><input type="text" name="code" id="code" required placeholder="Code of Product" /> </td>
			</tr>
			<tr>
				<th>Product price</th>
				<td><input type="text" name="price" id="price" required placeholder="Price of product" /></td>
			</tr>
			<tr>
				<th>Product Image</th>
				<td><input type="file" name="file" id="file" accept="image/*" required /></td>
			</tr>
			<tr>
				<th>Click on Button</th>
				<td>
					<input type="submit" name="submit" value="Register" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="reset" value="Reset" />
				</td>
			</tr>
		</table>
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
	
	<a href="View.php">View All !</a>
</body>
</html>
