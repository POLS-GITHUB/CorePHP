 <?php 
    $id = $_POST['h_id'];
	$name = $_REQUEST['name'];
	$code = $_REQUEST['code'];
	$price =(double) $_REQUEST['price'];
	/****************   $photo = $_REQUEST['photo'];   ***********/
	$filePath = NULL;
	if($_FILES ['file']['error']>0) echo "Error Uploading the file";
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
		$sql="update cart set name='$name',code='$code',price='$price',photo='photo' where id=$id";
		$con->query($sql);
		$r = $con->affected_rows;
		if($r==1)
		echo "<script>alert('Records Updated !');</script>";
		else 
		echo "Unable to Update Due to error !";
		$con->close();
		echo "<meta http-equiv='refresh' content='0,modify.php'/>";
	}
	
 
 ?>