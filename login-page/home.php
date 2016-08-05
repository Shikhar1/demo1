
<?php session_start();?>
<?php
include 'connection.php';
?>
<?php
if($_SESSION['email']=="")
{
	header('Location:loginpage.php');
}
?>
<?php
$reg_id=$_SESSION['user_id'];
$reg_email=$_SESSION['email'];
echo "Welcome &nbsp;".$reg_email;
?>
<br/>
<?php
$sql = "SELECT * FROM register where reg_id=$reg_id";
$result = mysqli_query($conn, $sql);
    while($row = mysqli_fetch_assoc($result)) {
?>
<table border="1" cellspacing="1" align="center">
<tr>
<td>FIRST_NAME</td>
<td>LASTE_NAME</td>
<td>GENDER</td>
<td>D_O_B</td>
<td>EMAIL</td>
<td>PASSWORD</td>
<td>C_PASSWORD</td>
<td>CITY</td>
<td>PHONE_NO</td>
</tr>
<td>
<?php echo $row["first_name"]?>
</td>
<td>
<?php echo $row["laste_name"]?>
</td>
<td>
<?php echo $row["gender"]?>
</td>
<td>
<?php echo $row["d_o_b"]?>
</td>
<td>
<?php echo $row["email"]?>
</td>
<td>
<?php echo $row["password"]?>
</td>
<td>
<?php echo $row["c_password"]?>
</td>
<td>
<?php echo $row["city"]?>
</td>
<td>
<?php echo $row["Phone_No"]?>
</td>
</table>
<br />
<a href="logout.php">Logout</a> 
<?php } ?>
 <a href="update.php">EDIT</a>