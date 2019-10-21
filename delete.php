 <?php 
  $id = $_REQUEST['id'];
  $con = new MySQLi("localhost","root","","OnlineShopping");
  if($con->connect_error) echo $con->connect_error;
  else {
	  $sql="delete from Cart where id=$id";
	  $con->query($sql);
	  $r = $con->affected_rows;
	  if($r==1)
	  echo "<script>alert('One Persons Removed !');</script>";
	  else
	  echo "Something went wrong !";
	  $con->close();
      echo "<meta http-equiv='refresh' content='0,index.php'/>";
	  }
  
 ?>