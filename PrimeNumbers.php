<html>
<body>
 <form>
  Enter the limit:<input type="text" name="prime"></br>
  <input type="submit" name="click" value="submit"></br></br>
 </form>
</body>
</html>
<?php
 $n=$_GET['prime'];
 for($i=2;$i<=$n;$i++){
  $b=0;
  for($j=2;$j<$i;$j++){
   if($i%$j==0){
    $b=1;
    break;
   }
  }
  if($b==0){
   echo "$i";
   echo "</br>";
  }
 }
?>