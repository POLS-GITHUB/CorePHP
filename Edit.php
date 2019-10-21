<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
   $id = $_REQUEST['id'];
   $con = new MySQLi("127.0.0.1","root","","OnlineShopping");
   if($con->connect_error) echo $con->connect_error;
   else {
	   $sql="select * from tblproduct where id=$id";
	   $res = $con->query($sql);
	   ?>
 
 <form name="frm" method="post" action="Update.php">
 <table border="2" cellspacing="2" cellpadding="2">
 <tr>
 <th>Name :</th>
 <th>Code :</th>
 <th>Price :</th>
 <th>Photo :</th>
 </tr>
 <?php if($rows = $res->fetch_assoc()){?>
 <tr>
 <td><input type="text" name="name" id="name" required value="<?php echo $rows['name'];?>"/></td>
 <td><input type="text" name="code" id="lname" required value="<?php echo $rows['code'];?>"/></td>
 <td><input type="text" name="price" id="price" required value="<?php echo $rows['price']; ?>"/></td>
 <td><input type="text" name="photo" id="photo" required value="<?php echo $rows['photo'];?>"/></td>
 <td><input type="submit" value="Update"/></td>
 <input type="hidden" name="h_id" value="<?php echo $rows['id'];?>"/>
 </tr>
 <?php }else echo "<font color='red'>No record Found !</font>";
 $con->close();
 
  ?>
 </table>
</form>
       
       
       
       
       <?php 
	   }
 ?>
 

</body>
</html>