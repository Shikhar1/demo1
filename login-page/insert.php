<?php
 ob_start();
  include("file:///C|/Users/SHUBHAM/Desktop/i-v-e-d/db.php");
  if(isset($_POST['send'])!="")
  {
  $username=mysql_real_escape_string($_POST['username']);
  $usermail=mysql_real_escape_string($_POST['usermail']);
  $usermobile=mysql_real_escape_string($_POST['usermobile']);
  $update=mysql_query("INSERT INTO my (username,emailid,mobileno,created)VALUES
									  ('$username','$usermail','$usermobile',now())");
  
  if($update)
  {
	  $msg="Successfully Updated!!";
	  echo "<script type='text/javascript'>alert('$msg');</script>";
	  header('Location:loginpage.php');
  }
  else
  {
	 $errormsg="Something went wrong, Try again";
	  echo "<script type='text/javascript'>alert('$errormsg');</script>";
	  header('Location:loginpage.php');
  }
  }
 ob_end_flush();
?>