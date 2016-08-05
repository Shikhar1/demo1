<?php session_start();
?>
<?php
include 'connection.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>FORM</title>
<link href="main.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js.js"></script>
<script>
function validateForm() {
    var x = document.forms["register"]["first_name"].value;
	if (x == null || x == "") {
        alert("Name must be filled");
		document.getElementById('first_name').focus();
		return false;
	}
	var x = document.forms["register"]["laste_name"].value;
    if (x == null || x == "") {
        alert("laste name required");
		document.getElementById('laste_name').focus();
        return false;
    }


    var x = document.forms["register"]["d_o_b"].value;
    if (x == null || x == "") {
        alert("DOB required");
		document.getElementById('dob').focus();
        return false;
    }

    var x = document.forms["register"]["gender"].value;
    if (x == null || x == "") {
        alert("gender required");
		document.getElementById('gender').focus();
        return false;
    }
    var x = document.forms["register"]["email"].value;
    if (x == null || x == "") {
        alert("email required");
		document.getElementById('email').focus();
        return false;
    }
    var x = document.forms["register"]["password"].value;
    if (x == null || x == "") {
        alert("please enter password");
		document.getElementById('password').focus();
        return false;
    }
    var x = document.forms["register"]["c_password"].value;
    if (x == null || x == "") {
        alert("please enter confirm password");
		document.getElementById('cpassword').focus();
        return false;
    }
    var x = document.forms["register"]["phone_no"].value;
    if (x == null || x == "") {
        alert("phone no required");
		document.getElementById('phone no').focus();
        return false;
    }
	if(document.forms["register"]["password"].value != document.forms["register"]["c_password"].value){
		alert("Password doesn't match");
		return false;
	}
	
}
$(function() {
    if (valid != '') {
    $('form #response2').removeClass().addClass('error2')
        .html('' +valid).fadeIn('fast');
}

    var valid = '';

    $('#email').keyup(function() {
        $.post('script.php', { 'Email' : $(this).val() }, function(data) {
             if(data !== 'true') {
                $('#email').css('border','2px solid #ff0000');
                $('#email').css('background-color','#ffcece');
                valid += '<p>This email has already subscribed.</p>';
             }else{
                $('#email').css('background-color','green');
             }
        });
    });
});
</script>

</head>
<body bgcolor="#FFFFFF">
<div class=" vis">
<div>
<h1 align="center">LOGIN HERE</h1>
</div>
<form name="login" action="" enctype="multipart/form-data" method="post">
<table class="text">
<tr>
<td>
USER NAME
</td>
<td><input type="email" name="user_email" required="required" /></td>
<td></td>
</tr>
<tr>
<td>
PASSWORD
</td>
<td><input type="password" name="login_password" required="required" /></td>
</tr>
<tr>
<td></td>
<td>
<input type="submit" name="submit_login" value="LOGIN" />
</td>
</form>
</tr>
</table>
</div>
<div class="vi">
<div>
<h1 align="center">REGISTER HERE</h1>
</div>
<form name="register" action="" method="post" enctype="multipart/form-data">
<table class="text">
<tr>
<td>
FIRST NAME
</td>
<td>
<input type="text" name="first_name" id="first_name"/>
</td>
</tr>
<tr>
<td>
LAST NAME
</td>
<td>
<input type="text"  name="laste_name"/>
</td>
</tr>
<tr>
<td>
DATE OF BIRTH
</td>
<td><input  type="date" name="d_o_b"/></td>
</tr>
<tr>
<td>
GENDER
</td>
<td>

<input type="radio" name="gender" value="Male"/>MALE
<input type="radio" name="gender" value="Female"/>FEMALE
</td>
</tr>
<tr>
<td>
EMAIL ADDRESS
</td>
<td><input type="email" name="email" id="email"/></td>
</td>
</tr>
<tr>
<td>
PASSWORD
</td>
<td><input type="password" name="password" id="pass1"/></td>
</td>
</tr>
<tr>
<td>
RE-ENTER PASSWORD
</td>
<td><input type="password" name="c_password" id="pass2"/></td>
</td>
</tr>
<tr>
<td>
PHONE NO.
</td>
<td><input type="text" name="phone_no" required maxlength="10"/></td>
</tr>
<tr>
<td>
CITY
</td>
<td>
<select name="city">
<option value="delhi">DELHI</option>
<option value="kanpur">KANPUR</option>
<option value="bihar">BIHAR</option>
</select>
</td>
</tr>
<tr>
<td>
</td>
<td><input type="submit" name="reg_submit" value="Submit" onclick="return validateForm()" /></td>
</tr>
</table>
</form>
</div>
</body>
</html>
<?php
if(isset($_POST['reg_submit']))
{
$first=$_POST['first_name'];
$sec=$_POST['laste_name'];
$date=$_POST['d_o_b'];
$date1 = explode("-",$date);
$dat= array_reverse($date1);
$date= implode("-", $dat);
@$fur=$_POST['gender'];
$fiv=$_POST['email'];
$six=$_POST['password'];
$sev=$_POST['c_password'];
$eig=$_POST['phone_no'];
$nin=$_POST['city'];

$sql="select email from register where email = '".$fiv."'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
		echo "already exist";
?>
<script>alert('fail registration');</script>
<script>window.location='loginpage.php';</script>
<?php
}
else{
if($first !="" && $sec !="" && $date!="" && $fur!="" && $fiv!="" && $six!="" && $sev!="" && $eig!="" && $nin!=""){
 $query=mysqli_query($conn,"INSERT INTO register(first_name,laste_name,d_o_b,gender,email,password,c_password,Phone_No,city) VALUES('$first','$sec','".$date."','$fur','$fiv','$six','$sev','$eig','$nin')") or die(mysql_error());
 }
}
}
?>
<?php
if(isset($_POST['submit_login']))
{
$a=$_POST['user_email'];
$b=$_POST['login_password'];

$sql = "SELECT reg_id,email,password FROM register WHERE `email`='$a' AND `password`=$b ";
$result = mysqli_query($conn, $sql);
$abc= mysqli_fetch_assoc($result);
if (mysqli_num_rows($result) > 0 or die(mysql_error())) {
  $_SESSION['email']=$abc['email'];
  $_SESSION['user_id']=$abc['reg_id'];
   ?>
   
   <script>window.location="home.php";</script>
   <?php       
	}
	else
	{
		echo "Failed";
	}
}
?>