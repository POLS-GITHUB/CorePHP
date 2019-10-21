 <?php session_start(); 
  function Login($user,$pass)
  {
   	if($user=='admin' && $pass=='admin123')
    return true; 
	return false;
  }

/*Accepting the Parameters */
 $userName = $_REQUEST['username'];
 $passWord = $_REQUEST['password'];
 
 if(Login($userName,$passWord)){
	 /*Login Success*/
	 $_SESSION['USER']=$userName;
	 $_SESSION['IP']=$_SERVER['REMOTE_ADDR'];
	 date_default_timezone_set('Asia/Kolkata');
	 $_SESSION['login_time']=date("d-m-y h:i:s A");
	 echo "<meta http-equiv='refresh' content='0,Welcome.php'/>";
	 }
 else {
	 /*Login Failed*/
	  echo "<script>alert('Invalid Username or Password !');</script>";
	  echo "<meta http-equiv='refresh' content='0,AdminLoginForm.php'/>";
	 }	 
 ?>