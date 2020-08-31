<!Doctype html>
<html>
<body>
<script>
  alert("Do you want to logout?");
</script>
<?php
  session_start();
  $_SESSION['userid']="";
  header("Location:http://localhost/dt/Webfash/");
?>
</body>
</html>