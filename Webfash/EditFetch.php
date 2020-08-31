<?php
  session_start();

  include_once("CONFIG.php");
  $blogid=$_GET['id'];
   $_SESSION['blogid']=$blogid;
  $sql="select * from Blogs where id=$blogid";
  $result=mysqli_query($conn,$sql);
  $row=mysqli_fetch_assoc($result);
?>