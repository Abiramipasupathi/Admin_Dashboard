<?php

$upload_dir='uploads/';
ini_set('display_errors','1');
session_start();
$userid=$_SESSION['userid'];
$blogtitle=$domain=$blog=$blogimage="";
if(isset($_POST["createblog"]))
{
$blogtitle=$_POST["blogtitle"];
$blog=$_POST["blog"];
$blogimage=$_FILES["blogimage"]["name"];
}

      $imgName = $_FILES['blogimage']['name'];
		$imgTmp = $_FILES['blogimage']['tmp_name'];
		$imgSize = $_FILES['blogimage']['size'];


			$imgExt = strtolower(pathinfo($imgName, PATHINFO_EXTENSION));

			$allowExt  = array('jpeg', 'jpg', 'png', 'gif');

			$userPic = time().'_'.rand(1000,9999).'.'.$imgExt;

			if(in_array($imgExt, $allowExt)){

				if($imgSize < 5000000){
					move_uploaded_file($imgTmp ,$upload_dir.$userPic);
				}else{
					$errorMsg = 'Image too large';
				}
			}else{
				$errorMsg = 'Please select a valid image';
         }
         

if(!empty($blogtitle)||!empty($blogimage)||!empty($category)||!empty($blog))
{  
include_once("CONFIG.php");
$blog=mysqli_real_escape_string($conn,$blog);
 if(mysqli_connect_error())
  {die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());}
  else
  {
         
      $stmt=$conn->prepare( "INSERT INTO Blogs(Title,Description,Image,userid)VALUES('$blogtitle','$blog','$userPic','$userid')"); 
      if($stmt==false)
           {echo $conn->error;  
           }
      else 
         {   $stmt->bind_param("ssbi",$blogtitle,$blog,$blogimage,$userid);
                 $stmt->execute();
                $stmt->close();
                header("Location:http://localhost/dt/Webfash/blogpage.php");
          }
         }
}
?>
