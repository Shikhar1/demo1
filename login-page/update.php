<?php session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
include 'connection.php';
?>
	

<?php 
$reg_id=$_SESSION['user_id'];
if(isset($_POST['delete']))
         { 
            $sql = "DELETE register where reg_id=$reg_id"   ;
		 };
?>        
    
<?php
 if(isset($_POST['update'])){
$first =$_POST['first_name'];
$sec=isset ($_POST['laste_name']);
$date= isset ($_POST['d_o_b']);
$date1 = explode("-",$date);
$dat= array_reverse($date1);
$date= implode("-", $dat);
$fur=isset($_POST['gender']);
$fiv=isset($_POST['email']);
$six=isset($_POST['password']);
$sev=isset($_POST['c_password']);
$eig=isset($_POST['phone_no']);
$nin=isset($_POST['city']);

 $sql = "UPDATE register "."SET first_name=$first"."laste_name=$sec"."d_o_b=$dat"."gender=$fur"."email=$fiv"."password=$six"."c_password=$sev"."Phone_No=$eig"."city=$nin"."where reg_id=reg_id";
            if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}}
         ?>
         <?php
$reg_id=$_SESSION['user_id'];
$reg_email=$_SESSION['email'];
$sql = "SELECT * FROM register where reg_id=$reg_id";
$result = mysqli_query($conn, $sql);
$row = @mysqli_fetch_assoc($result)
?>


		 <form method="post" action="<?php $_PHP_SELF ?>">
                  <table width="400" border="0" cellspacing="1" cellpadding="2">
                  
                     <tr>
                        <td width="100"> first_name</td>
                        <td><input name="first_name" type="text" value="<?php echo $row["first_name"]?>" id="first_name"></td>
                     </tr>
                  
                     <tr>
                        <td width="100">laste_name</td>
                        <td><input name="laste_name" type="text" value="<?php echo $row["laste_name"]?>" id="laste_name"></td>
                     </tr>
                  <tr>
                        <td width="100">d_o_b</td>
                        <td><input name="d_o_b" type="date" value="<?php echo $row["d_o_b"]?>" id="d_o_b"></td>
                     </tr>
                     <tr>
                        <td width="100">gender</td>
                        <td><input type="radio" name="gender" value="Male"/>MALE
							<input type="radio" name="gender" value="Female"/>FEMALE</td>
                     </tr>
                     <tr>
                        <td width="100">email</td>
                        <td><input name="email" type="email" value="<?php echo $row["email"]?>" id="email"></td>
                     </tr>
                     <tr>
                        <td width="100">password</td>
                        <td><input name="password" type="password" value="<?php echo $row["password"]?>" id="password"></td>
                     </tr>
                     <tr>
                        <td width="100">c_password </td>
                        <td><input name="c_password" type="password" value="<?php echo $row["c_password"]?>" id="c_password" </td>
                     </tr>
                  <tr>
                        <td width="100">phone_no</td>
                        <td><input name="phone_no" type="text"  value="<?php echo $row["Phone_No"]?>"id="phone_no" </td>
                     </tr>
                  <tr>
                        <td width="100">city</td>
                        <td><select name="city">
        <option value="delhi"><?php echo $row["city"]?></option>                 
		<option value="delhi">DELHI</option>
		<option value="kanpur">KANPUR</option>
		<option value="bihar">BIHAR</option>
</select>
</td>
                     </tr>
                  
                     <tr>
                        <td>
                           <input name="DELETE" type="submit" id="DELETE" value="DELETE">
                           
                        </td>                        <td>
                           <input name="update" type="submit" id="update" value="Update">
                           
                        </td>
                        

                     </tr>
                  
                  </table>
               </form>
   </body>
		 
</body>
</html>