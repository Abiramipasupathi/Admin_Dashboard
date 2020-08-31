<!DOCTYPE html>
<?php
   include("EditFetch.php");
 ?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="./blogcreate.css">
  <link rel="stylesheet" type="text/css" href="./blogpage.css">
  <link rel="stylesheet" type="text/css" href="./editpage.css">
</head>

<body> 
       <div class="container">
        <div class="sidepanel">
      <ul class="ul">
          <li class="li"><a href="./Dashboard.php">Dashboard</a></li>
          <li class="li"><a href="./blogcreate.html">Create blog</a></li>
          <li class="li"><a href="./blogview.php">View Blog</a></li>
          <li class="li"><a href="./Logout.php">Logout</a></li>
        </ul>
       </div>
       <div class="editpanel">
        <center><h3>Update Blog</h3></center>
       <form action="./blogupdate.php" method="POST" enctype="multipart/form-data">
        	    <?php
                echo '<label>Title:</label>';
                echo  '<input class="title" type="text" name="blogtitle" value="'.$row['Title'].'" /> <br><br>';
                echo '<label>Description:</label>';
                echo  '<textarea  name="blog" id="text" cols="100" rows="25">'.$row['Description'].'</textarea><br><br>';
                echo  '<label>Upload Image</label>';
                echo  '<input type="file" id="file" name="blogimage"/><br><br>';
                echo  '<button type="submit" name="edit" >Update</button><br>';
                ?>
      </form>
    </div>
  </div>
<script>
</script>
</body>
</html>
