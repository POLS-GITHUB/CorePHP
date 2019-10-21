<?php
	session_start();
	$connect = MySQLi_connect("localhost","root","","OnlineShopping");
	if(isset($_POST["add_to_cart"]))
	{
		if(isset($_SESSION["shopping_cart"]))
		{
			$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
			if(!in_array($_GET["id"], $item_array_id))
			{
				$count = count($_SESSION["shopping_cart"]);
				$item_array = array(
				'item_id' => $_GET["id"],
				'item_name' => $_POST["hidden_name"],
				'item_price' => $_POST["hidden_price"],
				'item_quantity' => $_POST["quantity"]
				);
				$_SESSION["shopping_cart"][$count] = $item_array;
			}
			else
			{
				echo'<script>alert("Item Already Added :)")</script>';
				echo'<script>windows.location="view.php"</script>';
			}
		}
		else
		{
			$item_array = array(
			'item_id' => $_GET["id"],
			'item_name' => $_POST["hidden_name"],
			'item_price' => $_POST["hidden_price"],
			'item_quantity' => $_POST["quantity"]
			);
			$_SESSION["shopping_cart"][0] = $item_array;
		}
	}
	
	//****************  Creating Delete Here  ******************//	
	if(isset($_GET["action"]))
	{
		if($_GET["action"] == "delete")
		{
			foreach($_SESSION["shopping_cart"] as $key => $values)
			{
				if($values["item_id"] == $_GET["id"])
				{
					unset($_SESSION["shopping_cart"][$key]);
					echo'<script>alert("Item Already Removed :)")</script>';
					echo'<script>windows.location="view.php"</script>';
				}
			}
		}
	}
	
	
	
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<title>Untitled Document</title>
<style type="text/css">
table {
	-webkit-transition:all 0.6s ease-in-out;
	 width:40%;
	 border:2px solid #000000;
	 padding:2px;
	 text-align:center;
	}
table tr th {
	 
	 background-color:#6E0305;
	 color:#fff;
	}
table tr:hover{
	-webkit-transition:all 0.6s ease-in-out;
	 background-color:#C6C6C6;
	 cursor:pointer;
	}		
table img{-webkit-transition:all 0.3s ease-in-out;
border-radius:50%;}
table img:hover{-webkit-transition:all 0.3s ease-in-out; border-radius:0%;}

.calc{
	 height:90px;
	 width:750px;
	 border:2px solid #cccccc ;
	 text-align:center;
	 padding:10px;
	 background-color:#F1FDB0;
	 color:#6F090B;
	 font-family:"Gill Sans", "Gill Sans MT", "Myriad Pro", "DejaVu Sans Condensed", Helvetica, Arial, sans-serif;
	 font-size:14px;
	 box-shadow:10px 10px 10px #ADA5A5;
	 
	}


.button {
  display: inline-block;
  padding: 3px 7px;
  font-size:12px;
  cursor: pointer;
  text-align: center;	
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color:#007777;
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

/*p
{
	min-width:10px;
	min-height:10px;
	max-width:20em;
	max-height:20em;
	border:1em #7FFF55 inset;
}
*/

</style>
<link href="css/responsive.css" rel="stylesheet" type="text/css" />
</head>
<body style="background-color:#D0D0D0" class="w3-animate-opacity">
<?php include("ssi/header.php");?>
<?php include("ssi/ShoppingCardHeader2.php");?>
<div class="w3-row-padding">

<div>
<!--- p>MyTechWorld.com</p --->
<!--- h1 align="center" style="background-color:#909090;">(-: Order Card :-)</h1 --->
	
		<table cellpadding="8" cellspacing="8" align="center" class="calc">		
			<tr>
				<th width="40%">Product Name</th>
				<th width="25%">Product Code</th>
				<th width="20%">Product Rate #$</th>
				<th>Product Pic</th>
				<th>Quantity/Add to Cart</th>
			</tr>
			<?php
				$connect = mysqli_connect("localhost","root","","OnlineShopping");
				if($connect->connect_error) echo $connect->connect_error;
				else
				{
					$sql="SELECT * FROM tblproduct ORDER BY id ASC";
		  			$res = $connect->query($sql);
		  			while($rows = $res->fetch_assoc())
					{
					?>
						<form method="post" style="background-position:inherit" action="view.php?action=add&id=<?php echo $rows["id"];?>">
						<tr>
							
							<td><?php echo $rows['name'];?></td>
							<td><?php echo $rows['code'];?></td>
							<td>$ <?php echo $rows['price'];?></td>
							<td><img src="<?php echo $rows['photo'];?>" height="100px" width="100px" title="<?php echo $rows['name'];?>'s Photo"/></td>
							<td><input type="text" name="quantity" value="" size="6" required placeholder="Quantity" />
								<input type="hidden" name="hidden_name" value="<?php echo $rows['name'];?>" />
								<input type="hidden" name="hidden_price" value="<?php echo $rows['price'];?>" />
								<input type="submit" name="add_to_cart" id="cart" class="button button2" value="Add to Cart" /> <!-- a href="demo.php"><img src="Images/register-button_1.jpg" style="width:100px;" title="Add To Cart" / --></a></td>
						</tr>
						</form>
						
					<?php
					}
					
				}
			?>
		</table>
<div style="clear:both">
	<h1 align="center" style="background-color:#909090">(-:  Order Details  :-)</h1>
		<div align="center">
			<table cellpadding="4" cellspacing="4" align="center">
				<tr>
					<th width="25%">Item Name</th>
					<th width="10%">Quantity</th>
					<th width="20%">Price</th>
					<th width="20%">Total</th>
					<th width="5%">Action</th>
				</tr>
				<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $key => $values)
						{
						?>
							<tr>
								<td><?php echo $values["item_name"];?></td>
								<td><?php echo $values["item_quantity"];?></td>
								<td>$ <?php echo $values["item_price"];?></td>
								<td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2)?></td>
								<td><a href="view.php?action=delete&id=<?php echo $values["item_id"];?>">Remove</a></td>
							</tr>
						<?php
								$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
						?>
							<tr>
								<td colspan="3" align="right">Total</td>
								<td align="center">$ <?php echo number_format($total, 2);?></td>
								<td><input type="submit" name="payment" value="Payment" class="button button2" onclick="window.location.href='PaymentProcess.php'" /><br/><br/></td>
							</tr>
						<?php
						
					}
				?>
		  </table>
		  </div>
		</div>
        </div>
        <?php include("ssi/footer.php");?>
</body>
</html>
<!--?php
	function array_column($array, $column_name)
	{
		$output = array();
		foreach($array as $key =>$values)
		{
			$output[] = $values[$column_name];
		}
		return $output;
	}
?-->
