<html>
<body>
 <form>
  Enter the limit:<input type="text" name="fibo"></br>
  <input type="submit" name="click" value="submit"></br></br>
</body>
</html>
<?php
 $n=$_GET['fibo'];
 $a=0;
 $b=1;

 for($i=3;$i<=$n;$i++){
  if($i==3){
   echo "$a";
   echo "</br>";
   echo "$b";
   echo "</br>";
  }
  $c=$a+$b;
  echo "$c";
  echo "</br>";
 
  $a=$b;
  $b=$c;
 }
?>