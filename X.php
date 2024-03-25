<?php
// database connection code
if(isset($_POST['uname']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'admin', 'root','users');

// get the post records

$uname = $_POST['uname'];
$pass = $_POST['pass'];
// database insert SQL code
$sql = "INSERT INTO `users`.`user_names` (`Id`, `fldName`, `fldPass`) VALUES ('0', '$uname', '$pass')";
// INSERT INTO `users`.`user_names` (`Id`, `fldName`, `fldPass`) VALUES ('1', 'Josh', 'test1234');

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>