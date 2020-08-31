<?php
session_start();
$upload_dir="uploads/";
$Title=$Description=$Image="";
$blogid=$_SESSION['blogid'];
$userid=$_SESSION['userid'];
if(isset($_POST['edit']))
{  
    $Title=$_POST['blogtitle'];echo $Title;
    $Description=$_POST['blog'];
    $Image=$_FILES['blogimage']['name'];
    echo "<pre>";print_r($_FILES);
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
 
include_once("CONFIG.php");
if($conn)
{
echo $sql="UPDATE Blogs SET Title='$Title', Description='$Description' where id='$blogid'";
$result=mysqli_query($conn,$sql);
if(!empty($Image))
{
$Image=$Image.$userid;
$sql1="UPDATE Blogs SET Image='$userPic' where id='$blogid'";
$res=mysqli_query($conn,$sql1);
}
if(!$res)
{
    echo "image not updated";
}
if($result)
{
   echo "updated";
}

else
{
   echo "error";
}
}
else
{
       echo "not connected";
}
$_SERVER['REQUEST_URI']="http://localhost/dt/Webfash/blogview.php";
 header('Location: '.$_SERVER['REQUEST_URI']);
?>