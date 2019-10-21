<?php 
session_start();
/*To delete Specific Session !*/
unset($_SESSION['USER']);
/*To remove all the Sessions !*/
session_destroy();

echo "<script>alert('You have Successfully Logged Out !');</script>";
echo "<meta http-equiv='refresh' content='0,AdminLoginForm.php'/>";
 
 ?>