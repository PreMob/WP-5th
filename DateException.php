<!DOCUMENT HTML>
<html>
<body>
 <?php
  function check(){
   $x=checkdate(30,30,2000);
   echo $x;
   if($x==1){
    echo "Date is correct.";
   }else{
    throw new Exception("Date format is wrong.");
   }
  }
 
  try{
   check();
  } catch(Exception $e){
   echo $e->getMessage();
  }
 ?>
</body>
</html>