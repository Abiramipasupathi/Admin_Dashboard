<?php
include_once "CONFIG.php";
session_start();
ini_set('display_errors','1');
$name=$pass="";
echo "hii";
if(isset($_POST['submit'])){
	$name=$_POST['username'];
	$pass=$_POST['userpassword'];
}
if($conn){
	$sql="select Name,id from users where Name='$name' && Password='$pass'";
	echo $sql;
	$result=mysqli_query($conn,$sql);
	$row=mysqli_fetch_assoc($result);
	$_SESSION['userid']=$row['id'];
	if($row!=0){
		header('Location:http://localhost/dt/Webfash/blogpage.php');
	}else{
		echo "password incorrect";
	}
}
?>