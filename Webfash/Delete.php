<?php
  include_once("CONFIG.php");
  $blogid=$_GET['id'];
  $upload_dir="uploads/";
  echo $blogid;
  $sql1="SELECT Image from Blogs where id=$blogid";
  $result1=mysqli_query($conn,$sql);
  $row=mysqli_fetch_assoc($result1);
  unlink($upload_dir.$row['Image']);
  $sql="DELETE from Blogs where id=$blogid";
  $result=mysqli_query($conn,$sql);
  $_SERVER['REQUEST_URI']="http://localhost/dt/Webfash/blogview.php";
 header('Location: '.$_SERVER['REQUEST_URI']);
?>