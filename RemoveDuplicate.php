<html>
<body>
 <h1>Remove duplicate from sorted list</h1>
 <form method="POST">
  Enter values with spaces:<input type="text" name="p1"></br>
  <input type="submit" name="sumbit" value="submit">
</body>
</html>
<?php
 $myarr=$_POST['p1'];
 $mya=explode(" ",$myarr);
 sort($mya);
 print_r(array_unique($mya));
?>