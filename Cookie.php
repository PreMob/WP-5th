<?php
 $co_name="user";
 $co_value="Preet";
 setcookie($co_name,$co_value,time()+(86400*30),"/");
?>

<html>
<body>
 <?php
  if(!isset($_COOKIE[$co_name])){
   echo "Cookie named ".$co_name."is not set!";
  }else{
   echo "Cookie ". $co_name." is set!<br>";
   echo "Value is: ".$_COOKIE[$co_name];
  }
 ?>
</body>
</html>