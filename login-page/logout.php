<?php session_start();?>
<?php
session_destroy();
header('Location:loginpage.php');
?>