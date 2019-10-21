<?php 
session_start();
if(isset($_SESSION['USER'])){
session_destroy();
echo "<script>alert('You have Successfully Logged Out !');</script>";
echo "<meta http-equiv='refresh' content='0,index.php'/>";
}
else {
echo "<script>alert('You are not authorized to View this Page !');</script>";
echo "<meta http-equiv='refresh' content='0,index.php'/>";
}

?>