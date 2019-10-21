<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

    <table cellspacing="2" cellpadding="2" border="2">
    <tr>
    <th width="100px" align="center">#</th>
    <th width="125px" align="center">Name </th>
    <th>Code</th>
    <th>Price </th>
    <th>Pic</th>
    </tr>
    <?php
	$con = new MySQLi("localhost","root","","OnlineShopping");
	/*
	   localhost -> same machine or We can write 127.0.0.1
	   root -> is default Administrator of MYSQl which has no password.
	   TestData -> is the name of the Database.
	*/
	
	if($con->connect_error) echo $con->connect_error;
	else 
	{
		$sql="select * from tblproduct";
		$res=$con->query($sql);
		/*Process of fetching Values from an array 
		  i)fetch_assoc() -> it is used to fetch data associatively.
		                     $rows['city'];
		  ii)fetch_array() -> it is used to fetch element by its position as well as name.
		                      $rows[2]; $rows['lastname'];
		  iii)fetch_rows() -> it is used to fetch element on its position only . 
		                      $rows[0]->Id of The table .
		*/
		while($rows = $res->fetch_assoc())
		{
			 ?>
			    <tr>
			    <td>
			    	<A href="Delete.php?id=<?php echo $rows['id'] ;?>">Delete</A>
			        <A href="Edit.php?id=<?php echo $rows['id'];?>">Edit</A>
			    </td>
			    <td><?php echo $rows['name'];?></td>
			    <td><?php echo $rows['code'];?></td>
			    <td><?php echo $rows['price'];?></td>
			    <td><?php echo $rows['photo'];?></td>
			    </tr>
		    <?php
		}
	}
	
	   /*Close The Connection !*/
	   $con->close();
	 ?>
    </table>



</body>
</html>