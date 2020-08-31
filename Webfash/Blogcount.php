<?php
  session_start();
  include_once("CONFIG.php");
  $userid=$_SESSION['userid'];
  $sql="select * from Blogs where userid=$userid";
  $result=mysqli_query($conn,$sql);
  $count=0;
  while($row=mysqli_fetch_assoc($result)){
  	$count++;
  }
?>