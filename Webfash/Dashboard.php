<!Doctype html>
<?php
   include('Blogcount.php');
?>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="./blogpage.css">
	<link rel="stylesheet" type="text/css" href="./blogcreate.css">
	<link rel="stylesheet" type="text/css" href="./Dashboard.css">
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
       <div class="mainpanel">
            <?php
            if($count==0){
       	    echo '<h1>No blogs to display</h1>';
            }
            else {
       	    echo  '<h1>Total no of blogs:'.$count.'</h1>';
            }
           ?>
           
       </div>
</div>
</body>
</html>
