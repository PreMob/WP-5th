<!DOCTYPE HTML>
<html>
<body>
 <?php
  $name = $email = $website = "";
  $name=test($_POST['name']);
  $email=test($_POST['email']);
  $website=test($_POST['web']);

  function test($data){
   $data=trim($data);
   $data=stripslashes($data);
   $data=htmlspecialchars($data);
   return $data;
  }
 ?>
 <form method="POST">
  Name:<input type="text" name="name"><br>

  Email:<input type="text" name="email"><br>
  
  Website:<input type="text" name="web"><br>
  <input type="submit" name="submit" value="submit">
 </form>

 <?php
  echo "<h2>Your input:</h2>";
  echo $name;
  echo "<br>";
  echo $email;
  echo "<br>";
  echo $website;
 ?>
</body>
</html>