<?php
  ini_set('display_errors','1');
  include_once("CONFIG.php");
  if($conn){
  	$sql="select * from Blogs where userid=1";
  	$result=mysqli_query($conn,$sql);
    }
  else{
    echo "Not connected";
  }
?>