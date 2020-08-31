<!DOCTYPE html>
<html>
<head>
     <link rel="stylesheet" type="text/css" href="./blogcreate.css">
     <link rel="stylesheet" type="text/css" href="./blogview.css">
     <link rel="stylesheet" type="text/css" href="./blogpage.css">
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
   <div class="blogviewpanel">
      
      <div >
       <table class="disptab">
           <tr>     
                    
                  <th>Title</th>
                  <th>Description</th>
                  <th>Image</th>
                  <th>Action</th>
           </tr>
          <?php
             include('./fetchblogs.php');
                 while($row=mysqli_fetch_assoc($result))
                {      
                               
                       $blogid=$row['id'];
                       echo  "<tr>";
                       echo "<td>".$row['Title']."</td>";
                       $Description=substr($row['Description'],0,100);
                       echo   "<td>".$Description."....</td>";
                       $upload_dir="uploads/";
                       echo  "<td><img src='".$upload_dir.$row['Image']. "'/></td>";
                       echo  "<td><button onClick=myfun1(".$blogid.")>Edit</button><br><br>";
                       echo  "<button onClick=myfun2(".$blogid.")>Delete</button></td>";
                       
                 }            
   ?>
</table>
</div>
</div>
</div>
</body>
<script>
         function myfun1(id)
           {  
                    window.location.href="./Edit.php?id="+id;
           } 
          
</script>
<script>
           function myfun2(id)
           {  
                    window.location.href="./Delete.php?id="+id;
           }
</script>
</html>
