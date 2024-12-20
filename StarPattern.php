<html>
<body>
 <?php
  $r=5;
  for($i=$r;$i>=1;$i--){
   for($j=$r;$j>$i;$j--){
    echo "&nbsp";
   }
   for($k=1;$k<=$i;$k++){
    echo "*";
   }
   echo "</br>";
  }
 ?>
</body>
</html>